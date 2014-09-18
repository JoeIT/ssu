<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<div class="container">
    <div style="float: left;"> Movimientos Planta </div>
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
                    <th>Nombres</th>
                    <th style="text-align: center; width:40px;">Dias Calendario</th>
                    <th>Faltas</th>
                    <th style="text-align: center; width:40px;">Dias Trabajados</th>
                    <th>Bajas</th>
                    <th>Licencia Cta. Vac.</th>
                    <th>Vacacion</th>
                    <th>Comision</th>
                    <th>Atrasos</th>
                    <th>Multas</th>
                    <th>Recargo</th>
                    <th style="text-align: center; width:40px;">Sobre Tiempo</th>
                    <th>Sab. &AMP; Fer.</th>
                </tr>
            </thead>
            <tbody>
        <?php 
        App::uses('Numrundeil', 'Article.Model');
        $deiles = new Numrundeil();
        
        App::uses('Numrun', 'Article.Model');
        $nrun = new Numrun();
        
        App::uses('Userofrun', 'Turno.Model');
        $urun = new Userofrun();
        
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
        $leave=$leave01->find('all',array('conditions'=>array('CLASSIFY'=>1))); $leaveclas=array();
        foreach ($leave AS $l):
            $leaveclas[$l['Leavecla']['LEAVEID']]=$l['Leavecla']['LEAVENAME'];
        endforeach;
        $ffi=$fi;        $fff=$ff;
        $bandera=1;      $holida=array(); $diatrab=30;
        foreach ($holiday AS $h){
            $festivo=date ('d-m',strtotime(substr($h['Holiday']['STARTTIME'],0,10)));
            $holida[$festivo]=$h['Holiday']['HOLIDAYNAME'];
        }
        foreach($userinfos AS $userinfo){
            $ttar=0;$tnormal=0;$treal_t=0;$t_trab=0;
            $f011=date ("Y-m-d",strtotime ('+1 day',strtotime($fff)));
            $tempsch = $tempsch01->find('all',array('conditions'=>array('USERID' => $userinfo['Userinfo']['USERID'],'SCHCLASSID != '=>-1,'COMETIME BETWEEN ? AND ?'=>array($ffi,$f011))));
            $com=0;$baj=0;$lic=0;$vac=0;
            if(empty($tempsch[0])){
                $fech1=date ("Y-m-d",strtotime ('+1 day',strtotime($fff)));
                $result=$deiles->query("select dbo.horarios('".$ffi."','".$fech1."',".$userinfo['Userinfo']['USERID'].") AS retraso;");
                $sumat=$result[0][0]['retraso'];
                
                $comision=$deiles->query("SELECT dbo.comisiont('".$ffi."','".$fff."',".$userinfo['Userinfo']['USERID'].") AS comision;");
                $com=$comision[0][0]['comision'];
                
                $bajas=$deiles->query("SELECT dbo.bajasN('".$ffi."','".$f011."',".$userinfo['Userinfo']['USERID'].") AS bajas;");
                $baj=$bajas[0][0]['bajas'];
                
                $licencias=$deiles->query("SELECT dbo.licenciasN('".$ffi."','".$f011."',".$userinfo['Userinfo']['USERID'].") AS licencias;");
                $lic=$licencias[0][0]['licencias'];
            }else{
                $fech1=date ("Y-m-d",strtotime ('+1 day',strtotime($fff)));
                $result=$deiles->query("SELECT dbo.horarios01('".$ffi."','".$fff."',".$userinfo['Userinfo']['USERID'].") AS retraso;");
                $sumat=$result[0][0]['retraso'];
            }
        ?>
                <tr>
                    <td><?php echo $bandera; ?></td>
                    <td style="font-size: 9pt;"><?php echo $userinfo['Userinfo']['USERID']; ?></td>
                    <td style="font-size: 9pt;"><?php echo $userinfo['Userinfo']['Name']; ?></td>
                    <td style="font-size: 9pt;"><?php echo $diatrab.' '.$userinfo['Userinfo']['CITY']; ?></td>
                    <td></td>
                    <td></td>
                    <td><?php if($baj>0){echo $baj;}else{echo '';} ?></td>
                    <td><?php if($lic>0){echo $lic;}else{echo '';} ?></td>
                    <td></td>
                    <td><?php if($com>0){echo $com;}else{echo '';}?></td>
                    <td><?php echo $sumat; ?></td>
                    <td></td>
                    <td>0</td>
                    <td></td>
                    <td>0</td>
                </tr>
        <?php $bandera++; } ?>
        </tbody>
    </table> 
</div>