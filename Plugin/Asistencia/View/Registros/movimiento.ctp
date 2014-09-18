<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<?php echo $this->Html->script(array('select2','select2_locale_es','jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('select2','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<div class="container">
    <div style="float: left;"> Movimientos </div>
    <div style="float: right;">
    <?php 
    echo $this->Acl->link($this->Html->image('pdf_.png', array('width' => '30', 'heigth' => '30', 'alt' =>'Pdf', 'title' => 'Reporte pdf')), array('action' => 'viewpdf',$fi,$ff,$id),array('escape'=>false,'target'=>'_blank','class'=>'btn btn-mini'));
    echo $this->Acl->link($this->Html->image('excel_.png', array('width' => '30', 'heigth' => '30', 'alt' =>'Excel', 'title' => 'Reporte excel')), array('action' => 'viewexcel',$fi,$ff,$id),array('escape'=>false,'target'=>'_blank','class'=>'btn btn-mini'));
    ?></div>
    <table style="float: left;" class="table-bordered table-hover list table-condensed table-striped">
            <thead>
                <tr>
                    <th>Nr.</th>
                    <th>Cod.</th>
                    <th >Nombres</th>
                    <th>Dia</th>
                    <th>Horario</th>
                    <th>HoraEnt</th>
                    <th>HoraSal</th>
                    <th>Marc-Ent</th>
                    <th>Marc-Sal</th>
                    <th>Normal</th>
                    <th>TiemReal</th>
                    <th>Tardanza</th>
                    <th>Falta</th>
                    <th>TiemTrab</th>
                    <th>Excepcion</th>
                    <th>Manten.</th>
                </tr>
            </thead>
            <tbody>
        <?php 
       App::uses('Userofrun', 'Turno.Model');
        $urun = new Userofrun();
        $rs = $urun->find('first',array('order'=>'ORDER_RUN DESC','conditions'=>array("USERID" => $userinfo['Userinfo']['USERID'],"'$ff' BETWEEN STARTDATE AND ENDDATE")));
                
        App::uses('Numrun', 'Article.Model');
        $nrun = new Numrun();
        $numrun = $nrun->find('first',array('conditions'=>array('NUM_RUNID' => $rs['Userofrun']['NUM_OF_RUN_ID'])));
        
        App::uses('Numrundeil', 'Article.Model');
        $deiles = new Numrundeil();
        $numrundeil = $deiles->find('all',array('conditions'=>array('NUM_RUNID' => $numrun['Numrun']['NUM_RUNID'])));
        
        App::uses('Schcla', 'Article.Model');
        $schcla = new Schcla();
        
        App::uses('Holiday', 'Article.Model');
        $holid = new Holiday();
        $holiday = $holid->find('all');
        
        App::uses('Checkinout', 'Turno.Model');
        $checkin = new Checkinout();
        
        App::uses('Userspeday', 'Asistencia.Model');
        $speday01 = new Userspeday();
        
        App::uses('Usertempsch', 'Turno.Model');
        $tempsch01 = new Usertempsch();
        
        App::uses('Leavecla', 'Article.Model');
        $leave01 = new Leavecla();
        $leave=$leave01->find('all'); $leaveclas=array();
        foreach ($leave AS $l):
            $leaveclas[$l['Leavecla']['LEAVEID']]=$l['Leavecla']['LEAVENAME'];
        endforeach;
              $holida=array();
        foreach ($holiday AS $h):
            $ffecha=  date ('d-m',strtotime(substr($h['Holiday']['STARTTIME'],0,10)));
            $holida[$ffecha]=$h['Holiday']['HOLIDAYNAME'];
        endforeach;
        $ffi=$fi;$fff=$ff;
        $f11 = date ("Y-m-d",strtotime ('+1 day',strtotime($fff)));
        $ttar=0;$tnormal=0;$treal_t=0;$t_trab=30;
        $tolerancia=$speday01->query("SELECT c.STARTSPECDAY,CONVERT(date,c.STARTSPECDAY) AS FECHA FROM USER_SPEDAY c WHERE c.USERID=".$id." AND c.STARTSPECDAY BETWEEN '".$ffi."' AND '".$f11."' AND  c.DATEID=6");
        $tol=array();
        foreach($tolerancia AS $tl){
            $fech=date('Y-m-d',strtotime($tl[0]['FECHA']));
            $tol[$fech]=$tl[0]['STARTSPECDAY'];
        }
    $bandera=1;$faltas=array(0=>'Falta',1=>'');$total=0;$totalf=0;
    $Nocturno=0;
    while(strtotime($ffi) <= strtotime($fff)){
         $ffi_01 = date ("Y-m-d",strtotime ('+1 day',strtotime($ffi)));
         $tempsch = $tempsch01->find('all',array('conditions'=>array('USERID'=>$userinfo['Userinfo']['USERID'],'COMETIME BETWEEN ? AND ?'=>array($ffi,$ffi_01))));
         $numdet=0;
         if(empty($tempsch[0])){
             foreach($numrundeil AS $numdeil){
                 if($numdet==$numdeil['Numrundeil']['SDAYS']){
                     $ffi = date ("Y-m-d",strtotime ('-1 day',strtotime($ffi)));
                 }else{
                     if(strtotime($ffi) > strtotime($fff) || date("w",strtotime($ffi))==6 || date("w",strtotime($ffi))==0){
                        break;
                    }
                 }
                 $sch=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $numdeil['Numrundeil']['SCHCLASSID'])));
                 $fyhi1=$ffi.' '.substr($sch['Schcla']['CHECKINTIME1'],11);
                 $fyhi2=$ffi.' '.substr($sch['Schcla']['CHECKINTIME2'],11);
                 $checkout = $checkin->find('first',array('conditions'=>array('USERID'=>$userinfo['Userinfo']['USERID'],'CHECKTIME BETWEEN ? AND ?'=>array($fyhi1,$fyhi2))));
                 $fspeday=$ffi;
                 $speday= $speday01->find('first',array('order'=>'SPEDAYID ASC','conditions'=>array('USERID'=>$userinfo['Userinfo']['USERID'],'STARTSPECDAY'=>$fspeday)));
                 if((int)date ("H",strtotime(substr($sch['Schcla']['STARTTIME'],11))) > 0 && empty($speday['Userspeday']['STARTSPECDAY'])){
                     $fspeday=$ffi.' '.date ("H:i",strtotime(substr($sch['Schcla']['STARTTIME'],11)));
                     $speday= $speday01->find('first',array('conditions'=>array('USERID'=>$userinfo['Userinfo']['USERID'],'STARTSPECDAY'=>$fspeday)));
                     //echo 'llega aqui';
                 }

                 $fyhs1=$ffi.' '.substr($sch['Schcla']['CHECKOUTTIME1'],11);
                 $fyhs2=$ffi.' '.substr($sch['Schcla']['CHECKOUTTIME2'],11);
                 $checkouts= $checkin->find('first',array('conditions'=>array('USERID'=>$userinfo['Userinfo']['USERID'],'CHECKTIME BETWEEN ? AND ?'=>array($fyhs1,$fyhs2))));
                 $dat1='';$holiday1="";
                    if(!empty($holida[date ("d-m",strtotime($ffi))])){
                        $holiday1=$holida[date ("d-m",strtotime($ffi))];
                    }else{
                        if(empty($checkouts['Checkinout']['CHECKTIME']) || empty($checkout['Checkinout']['CHECKTIME'])){
                            $dat1='Falta';
                        }else{
                            if( ((int)date('H',strtotime(substr($speday['Userspeday']['STARTSPECDAY'],11))) <= (int)date ("H",strtotime(substr($sch['Schcla']['STARTTIME'],11))) ) || ((int)date('H',strtotime(substr($sch['Schcla']['ENDTIME'],11))) <= (int)date ("H",strtotime(substr($checkout['Userspeday']['ENDSPECDAY'],11))) )){
                                $dat1='';
                                $treal=$sch['Schcla']['WorkDay'];
                            }else{
                                $dat1='Falta';
                            }
                        }
                    }
                 $otro=$checkin->query("SELECT dbo.retraso_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$numdeil['Numrundeil']['SCHCLASSID'].") AS retraso;");
                 $color='';
                 if($otro[0][0]['retraso'] > 0){
                    $dat='';
                    $color='style="color: red;"';
                   }
                   $ht01=$checkout['Checkinout']['CHECKTIME'];
                   $ht02=$checkouts['Checkinout']['CHECKTIME'];
                   ?>
                <tr>
                        <td <?php echo $dat; ?>><?php echo $bandera; ?></td>
                        <td <?php echo $dat; ?>><?php echo $userinfo['Userinfo']['Badgenumber']; ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo $userinfo['Userinfo']['Name']; ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo date ("d-m-Y",strtotime($ffi)); ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo $sch['Schcla']['SCHNAME']; ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo date ("H:i",strtotime(substr($sch['Schcla']['STARTTIME'],11,5))); ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo date ("H:i",strtotime(substr($sch['Schcla']['ENDTIME'],11,5))); ?></td>
                        <td <?php echo $dat; ?>><?php echo '<span '.$color.'>'.substr($ht01,11,5).'</span>';  ?></td>
                        <td <?php echo $dat; ?>><?php echo substr($ht02,11,5); ?></td>
                        <?php 
                        $temp=$checkin->query("SELECT dbo.temprano_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$numdeil['Numrundeil']['SCHCLASSID'].") AS temprano;");
                        $num_01=($temp[0][0]['temprano']*-1);
                        $falta01=$checkin->query("SELECT dbo.falta_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$numdeil['Numrundeil']['SCHCLASSID'].") AS falta;");
                        $jornad=$checkin->query("SELECT dbo.jornada(".$numdeil['Numrundeil']['SCHCLASSID'].") AS jornada;");
                        if($falta01[0][0]['falta'] == 0){
                            $totalf=$totalf+$jornad[0][0]['jornada'];
                        }
                        //$t_trab='00:00';
                        if(!empty($ht01) && !empty($ht02)){
                            $ttrab=$checkin->query("SELECT dbo.tiempotrab('".substr($ht01,0,16)."','".substr($ht02,0,16)."') AS temptrab;");
                            //$t_trab= substr($ttrab[0][0]['temptrab'],0,5);
                        }
                        ?>
                        <td <?php echo $dat; ?>><?php  ?></td>
                        <td <?php echo $dat; ?>><?php echo $jornad[0][0]['jornada']; ?></td>
                        <td <?php echo $dat; ?>><?php 
                        $total=$total+$otro[0][0]['retraso'];
                        echo '<span '.$color.'>'.$otro[0][0]['retraso'].'</span>';
                        ?></td>
                        <td <?php echo $dat; ?>><?php echo $faltas[$falta01[0][0]['falta']]; ?></td>
                        <td <?php echo $dat; ?>></td>
                        <?php
                        $justif='';
                        if(!empty($holida[date ("d-m",strtotime($ffi))])){
                            $justif = 'FERIADO';                             
                        }else{
                            if( ((int)date('H',strtotime(substr($speday['Userspeday']['STARTSPECDAY'],11))) <= (int)date ("H",strtotime(substr($sch['Schcla']['STARTTIME'],11))) ) || ((int)date('H',strtotime(substr($sch['Schcla']['ENDTIME'],11))) <= (int)date ("H",strtotime(substr($checkout['Userspeday']['ENDSPECDAY'],11))) )){
                                $justif=$leaveclas[$speday['Userspeday']['DATEID']];
                            }
                        }
                        ?>
                        <td <?php echo $dat; ?>><?php echo $justif;  ?></td>
                        <td <?php echo $dat; ?>>
                            <?php
                            $f11=date ("Y-m-d",strtotime($ffi)).' '.date ("H:i",strtotime(substr($sch['Schcla']['STARTTIME'],11)));
                            $f12=date ("Y-m-d",strtotime($ffi)).' '.date ("H:i",strtotime(substr($sch['Schcla']['ENDTIME'],11)));
                            if(strtotime(substr($sch['Schcla']['STARTTIME'],11,5)) > strtotime(substr($sch['Schcla']['ENDTIME'],11,5)) ){
                                $f12=date ("Y-m-d",strtotime ('+1 day',strtotime($ffi))).' '.date ("H:i",strtotime(substr($sch['Schcla']['ENDTIME'],11)));
                             }

                            if(!empty($holida[date ("d-m",strtotime($ffi))])){ 

                            }else{
                                if(!empty($leaveclas[$speday['Userspeday']['DATEID']])){
                                    echo $this->Acl->link(__('-Mant'), array('action' => 'mantenimiento', $id),array('class'=>'btn btn-mini btn-danger','onclick' =>'delMante("'.h($speday['Userspeday']['SPEDAYID']).'","'.h($tip_permiso).'");return false;'));
                                }elseif(!empty($dat1)){
                                    echo $this->Acl->link(__('+Mant'), array('action' => 'mantenimiento', $id),array('class'=>'btn btn-mini btn-primary','onclick' =>'addMante("'.h($id).'","'.h($f11).'","'.h($f12).'");return false;')); 
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                    $numdet=$numdeil['Numrundeil']['SDAYS'];
                    $ffi = date ("Y-m-d",strtotime ('+1 day',strtotime($ffi)));
                    $bandera++;
                }
                $ffi = date ("Y-m-d",strtotime ('+2 day',strtotime($ffi)));
             }else{
                 $salto=1;
                 foreach ($tempsch AS $ts){
                     if($ts['Usertempsch']['SCHCLASSID'] != '-1'){
                     $sch=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $ts['Usertempsch']['SCHCLASSID'])));
                     $f_ing=$ffi;
                     
                     if(strtotime(substr($sch['Schcla']['STARTTIME'],11,5)) > strtotime(substr($sch['Schcla']['ENDTIME'],11,5)) ){
                        $f_ing=date ("Y-m-d",strtotime ('-1 day',strtotime($ffi)));
                        $salto=2;
                     }
                     $fyhi1=$f_ing.' '.substr($sch['Schcla']['CHECKINTIME1'],11);
                     $fyhi2=$ffi.' '.substr($sch['Schcla']['CHECKINTIME2'],11);
                     $checkout= $checkin->find('first',array('conditions'=>array('USERID' =>$userinfo['Userinfo']['USERID'],'CHECKTIME BETWEEN ? AND ?'=>array($fyhi1,$fyhi2))));
                     $fspeday=$ffi;
                     $speday= $speday01->find('first',array('conditions'=>array('USERID' => $userinfo['Userinfo']['USERID'],'STARTSPECDAY'=>$fspeday)));
                     if((int)date ("H",strtotime(substr($sch['Schcla']['STARTTIME'],11))) > 0 && empty($speday['Userspeday']['STARTSPECDAY'])){
                         $fspeday=$ffi.' '.date ("H:i",strtotime(substr($sch['Schcla']['STARTTIME'],11)));
                         $speday= $speday01->find('first',array('conditions'=>array('USERID'=>$userinfo['Userinfo']['USERID'],'STARTSPECDAY'=>$fspeday)));
                     }
                     $f_sal=$ffi;
                     if(strtotime(substr($sch['Schcla']['STARTTIME'],11,5)) > strtotime(substr($sch['Schcla']['ENDTIME'],11,5)) ){
                      $f_sal=date ("Y-m-d",strtotime ('+1 day',strtotime($ffi)));
                     }
                     $fyhs1=$f_sal.' '.substr($sch['Schcla']['CHECKOUTTIME1'],11);
                     $fyhs2=$f_sal.' '.substr($sch['Schcla']['CHECKOUTTIME2'],11);
                     $checkouts= $checkin->find('first',array('conditions'=>array('USERID'=>$userinfo['Userinfo']['USERID'],'CHECKTIME BETWEEN ? AND ?'=>array($fyhs1,$fyhs2))));
                     
                     $dat1='';$holiday1="";
                    if(!empty($holida[date ("d-m",strtotime($ffi))])){
                        $holiday1=$holida[date ("d-m",strtotime($ffi))];
                    }else{
                        if(empty($checkouts['Checkinout']['CHECKTIME']) || empty($checkout['Checkinout']['CHECKTIME'])){
                            $dat1='Falta';
                        }else{
                            if( ((int)date('H',strtotime(substr($speday['Userspeday']['STARTSPECDAY'],11))) <= (int)date ("H",strtotime(substr($sch['Schcla']['STARTTIME'],11))) ) || ((int)date('H',strtotime(substr($sch['Schcla']['ENDTIME'],11))) <= (int)date ("H",strtotime(substr($checkout['Userspeday']['ENDSPECDAY'],11))) )){
                                $dat1='';
                                $treal=$sch['Schcla']['WorkDay'];
                            }else{
                                $dat1='Falta';
                            }
                        }
                    }
                     $otro=$checkin->query("SELECT dbo.retraso_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$sch['Schcla']['SCHCLASSID'].") AS retraso;");
                     $color='';
                     if($otro[0][0]['retraso'] > 0){
                        $dat='';
                        $color='style="color: red;"';
                       }
                       $ht01=$checkout['Checkinout']['CHECKTIME'];
                       $ht02=$checkouts['Checkinout']['CHECKTIME'];
                     ?>
                    <tr>
                        <td <?php echo $dat; ?>><?php echo $bandera; ?></td>
                        <td <?php echo $dat; ?>><?php echo $userinfo['Userinfo']['Badgenumber']; ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo $userinfo['Userinfo']['Name']; ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo date ("d-m-Y",strtotime($ffi)); ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo $sch['Schcla']['SCHNAME']; ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo date ("H:i",strtotime(substr($sch['Schcla']['STARTTIME'],11))); ?></td>
                        <td <?php echo $dat; ?> style="font-size: 9pt;"><?php echo date ("H:i",strtotime(substr($sch['Schcla']['ENDTIME'],11))); ?></td>
                        <td <?php echo $dat; ?>><?php echo '<span '.$color.'>'.substr($ht01,11,5).'</span>';  ?></td>
                        <td <?php echo $dat; ?>><?php echo substr($ht02,11,5); ?></td>
                        <?php 
                        $temp=$checkin->query("SELECT dbo.temprano_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$sch['Schcla']['SCHCLASSID'].") AS temprano;");
                        $num_01=($temp[0][0]['temprano']*-1);
                        $falta01=$checkin->query("SELECT dbo.falta_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$sch['Schcla']['SCHCLASSID'].") AS falta;");
                        $jornad=$checkin->query("SELECT dbo.jornada(".$sch['Schcla']['SCHCLASSID'].") AS jornada;");
                        if($falta01[0][0]['falta'] == 0){
                            $totalf=$totalf+$jornad[0][0]['jornada'];
                        }
                        //$t_trab='00:00';
                        if(!empty($ht01) && !empty($ht02)){
                            $ttrab=$checkin->query("SELECT dbo.tiempotrab('".substr($ht01,0,16)."','".substr($ht02,0,16)."') AS temptrab;");
                            //$t_trab= substr($ttrab[0][0]['temptrab'],0,5);
                        }
                        ?>
                        <td <?php echo $dat; ?>><?php  ?></td>
                        <td <?php echo $dat; ?>><?php echo $jornad[0][0]['jornada']; ?></td>
                        <td <?php echo $dat; ?>><?php 
                        $total=$total+$otro[0][0]['retraso'];
                        echo '<span '.$color.'>'.$otro[0][0]['retraso'].'</span>';
                        ?></td>
                        <td <?php echo $dat; ?>><?php echo $faltas[$falta01[0][0]['falta']]; ?></td>
                        <td <?php echo $dat; ?>></td>
                        <?php
                        $justif='';
                        if(!empty($holida[date ("d-m",strtotime($ffi))])){
                            $justif = 'FERIADO';                             
                        }else{
                            if( ((int)date('H',strtotime(substr($speday['Userspeday']['STARTSPECDAY'],11))) <= (int)date ("H",strtotime(substr($sch['Schcla']['STARTTIME'],11))) ) || ((int)date('H',strtotime(substr($sch['Schcla']['ENDTIME'],11))) <= (int)date ("H",strtotime(substr($checkout['Userspeday']['ENDSPECDAY'],11))) )){
                                $justif=$leaveclas[$speday['Userspeday']['DATEID']];
                            }
                        }
                        ?>
                        <td <?php echo $dat; ?>><?php echo $justif;  ?></td>
                        <td <?php echo $dat; ?>>
                            <?php
                            if($falta01[0][0]['falta']==0){
                                $f11=date ("Y-m-d",strtotime($ffi)).' '.date ("H:i",strtotime(substr($sch['Schcla']['STARTTIME'],11)));
                                $f12=date ("Y-m-d",strtotime($ffi)).' '.date ("H:i",strtotime(substr($sch['Schcla']['ENDTIME'],11)));
                                if(empty($dat1)){
                                    //echo $this->Acl->link(__('-Mant'), array('action' => 'mantenimiento', $id),array('class'=>'btn btn-mini btn-danger','onclick' =>'delMante("'.h($speday['Userspeday']['SPEDAYID']).'","'.h($tip_permiso).'");return false;'));
                                }else{
                                   // echo $this->Acl->link(__('+Mant'), array('action' => 'mantenimiento', $id),array('class'=>'btn btn-mini btn-primary','onclick' =>'addMante("'.h($id).'","'.h($f11).'","'.h($f12).'");return false;')); 
                                }
                            }
                                /*
                                if(strtotime(substr($sch['Schcla']['STARTTIME'],11,5)) > strtotime(substr($sch['Schcla']['ENDTIME'],11,5)) ){
                                    $f12=date ("Y-m-d",strtotime ('+1 day',strtotime($ffi))).' '.date ("H:i",strtotime(substr($sch['Schcla']['ENDTIME'],11)));
                                 }
                                
                                if(!empty($holida[date ("d-m",strtotime($ffi))])){ 

                                }else{
                                    
                                }*/
                            ?>
                        </td>
                    </tr>
                    <?php
                    $bandera++;
                     }
                }
                $ffi = date ("Y-m-d",strtotime ("+$salto day",strtotime($ffi)));
            }
         }
        ?>
                    <tr>
                        <td colspan="9">Total</td>
                        <td><?php echo $t_trab; ?></td>
                        <td><?php echo $treal_t; ?></td>
                        <td><?php echo $total; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        </tbody>
    </table> 
</div>
<?php echo $this->Html->script(array('select2','select2_locale_es','jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('select2','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<?php
$dda=''
        . 'Rango de Tiempo<br>'
        . ''
        . '.a: <input id="fin" type="text" class="input-medium" value="" /><br>';
       $dd= 'Permiso: <span style="color: red;">*</span> <select name="data[Userspeday][DATEID]" id="DATEID" class="input-large">'
        . '<option value="">Ninguno</option>';
        foreach ($leave AS $l):
            $dd=$dd.'<option value="'.$l['Leavecla']['LEAVEID'].'">'.$l['Leavecla']['LEAVENAME'].'</option>';
        endforeach;
    $dd=$dd.'</select><br>';
?>
<script type="text/javascript">
function addMante(idd,fini, ffin) {
    var header = "<?php echo __('Item permiso'); ?>";
    var Select ='<?php echo $dd; ?>';
    var userid='<input name="data[Userspeday][USERID]" id="USERID" type="hidden" class="input-mini" readonly="readonly" value="'+idd+'"/><br>';
    var inputi='De:<span style="color: red;">*</span> <input name="data[Userspeday][STARTSPECDAY]" id="STARTSPECDAY" type="text" class="input-medium" value="'+fini+':00" /><br>';
    var inputf='_A:<span style="color: red;">*</span> <input name="data[Userspeday][ENDSPECDAY]" id="ENDSPECDAY" type="text" class="input-medium" value="'+ffin+':00" /><br>';
    var textar='Descripcion: <span style="color: red;">*</span> <textarea name="data[Userspeday][YUANYING]" id="YUANYING" class="input-large"/>';
    $.sModal({
        header: header,
        content: '<div id="reg_error"></div> <form style="margin:0; width: 500px;">'+userid+''+inputi+''+inputf+''+Select+''+textar+'</form>',
        animate: 'fadeDown',
        buttons: [{
            text: ' <?php echo __('Guardar'); ?> ',
            addClass: 'btn-primary',
            click:function(id, data){
                $.post('<?php echo Router::url(array('plugin' => 'asistencia','controller' => 'registros','action' => 'mantenimiento')); ?>',$('#'+id).find('form').serialize(),function(o){
	                if (o.error == 0){
                                $.sModal('close',id);
                        }else{
                                var str_error = '<div class="alert alert-error">'+
                              '<button data-dismiss="alert" class="close" type="button">×</button>'+
                              '<strong><?php echo __('Error!'); ?></strong> '+o.error_message+
                            '</div>'
                                $('#reg_error').html(str_error);
                        }
                }, 'json');
            }
        }, {
            text: ' <?php echo __('Cancelar'); ?> ',
            click: function(id, data) {
                $.sModal('close', id);
            }
        }]
        });
        $("#STARTSPECDAY").datetimepicker({
            format:'Y-m-d H:i:00',
            step:1,
            lang:'es'
        });
        $("#ENDSPECDAY").datetimepicker({
            format:'Y-m-d H:i:00',
            step:1,
            lang:'es'
        });
        $("#DATEID").select2();
}

function delMante(sped_id, name) {
    $.sModal({
        image: '<?php echo $this->webroot; ?>img/icons/error.png',
        content: '<?php echo __('Estas seguro de Eliminar el Permiso: '); ?> '+sped_id+' <b>' + name + '</b>?',
        animate: 'fadeDown',
        buttons: [{
            text: ' <?php echo __('Eliminar'); ?> ',
            addClass: 'btn-danger',
            click: function(id, data) {
                $.post('<?php echo Router::url(array('plugin' => 'asistencia','controller' => 'registros','action' => 'delete')); ?>/' + sped_id, {}, function(o) {
                        $.sModal('close', id);
                        $('#tab_user_manager').find('a').each(function(){
                    		$(this).click(function(){
                    			removeUserSearchCookie();
                    		});
                    	});
                }, 'json');
            }
        }, {
            text: ' <?php echo __('Cancelar'); ?> ',
            click: function(id, data) {
                $.sModal('close', id);
            }
        }]
        });
}

</script>