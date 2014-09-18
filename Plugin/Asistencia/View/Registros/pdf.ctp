<?php
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
App::import('Vendor', 'Fpdf', array('file' => 'fpdf/fpdf.php'));
class pdf extends FPDF {
    var $titulo;
    var $fechai;
    var $fechaf;
    var $nombres;
    function cambiardatos($t,$ffi,$fff,$nomb){
        $this->titulo=$t;
        $this->fechai=$ffi;
        $this->fechaf=$fff;
        $this->nombres=$nomb;
    }
    function Header(){
        $this->Image('img/ssu_01.jpg', 10,10,40);
        $this->SetFont('Arial','B',12);
        $this->Cell(195,5,  strtoupper($this->titulo),0,0,'C');
        $this->SetFont('Arial','B',6.2);
        $this->ln(5);
        $ffi=date('d-m-Y',strtotime($this->fechai));
        $fff=date('d-m-Y',strtotime($this->fechaf));
       
        $this->SetTextColor(0,0,0);
        $this->Cell(195,3,"Desde: ".strftime("%d de %B de %Y",strtotime($ffi)).",  Hasta: ".strftime("%d de %B de %Y",strtotime($fff)),0,0,'C',false);
        //
        $this->ln(5);
        $this->Cell(90,3,' UNIDAD DE RECURSOS HUMANOS  ',0,0,'L');
        $this->SetFont('Arial','I',7);
        $this->ln(5);
        $this->Cell(25,3,'Apellidos y Nombres: ',0,0,'L');
        $this->SetFont('Arial','B',7);
        $this->Cell(120,3,$this->nombres,0,0,'L');
        $this->SetFont('Arial','I',6);
        $this->Cell(50,3,utf8_decode("Fecha de emisión: ").strftime("%d de %B del %Y"),0,0,'R');
        $this->SetFillColor(200,220,255);
        $this->SetTextColor(0,0,0);
        $this->SetFont('Arial','B',6);
        $this->ln(3);
        $this->Cell(8,4,"Nro",'TB',0,'C',true);
        $this->Cell(17,4,"Fecha",'TB',0,'C',true);
        $this->Cell(20,4,"Turno",'TB',0,'C',true);
        $this->Cell(10,4,"Entradas",'TB',0,'C',true);
        $this->Cell(10,4,"Salidas",'TB',0,'C',true);
        $this->Cell(15,4,"Tarde",'TB',0,'C',true);
        $this->Cell(15,4,"Temprano",'TB',0,'C',true);
        $this->Cell(10,4,"Falta",'TB',0,'C',true);
        $this->Cell(60,4,"Justificacion",'TB',0,'C',true);
        $this->Cell(15,4,"Jornada",'TB',0,'C',true);
        $this->Cell(15,4,"T. trab",'TB',0,'C',true);
        $this->ln(4.3);
    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',7);
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo(),0,0,'C'); 
    }
}
    $pdf=new pdf('P','mm','Letter');
    $pdf->cambiardatos(' Reporte de Asistencia por Dia', $fi, $ff,$userinfo['Userinfo']['Name']);
    $pdf->AddPage();
    $pdf->SetFont('Arial','',6.5);

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
        $ttar=0;$tnormal=0;$treal_t=0;$t_trab=0;
        $tolerancia=$speday01->query("SELECT c.STARTSPECDAY,CONVERT(date,c.STARTSPECDAY) AS FECHA FROM USER_SPEDAY c WHERE c.USERID=".$id." AND c.STARTSPECDAY BETWEEN '".$ffi."' AND '".$f11."' AND  c.DATEID=6");
        $tol=array();
        foreach($tolerancia AS $tl){
            $fech=date('Y-m-d',strtotime($tl[0]['FECHA']));
            $tol[$fech]=$tl[0]['STARTSPECDAY'];
        }
    $bandera=1;$faltas=array(0=>'Falta',1=>'');$total=0;$totalf=0;
    while(strtotime($ffi) < strtotime($fff)){
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
                 $bg=false;
                 if($otro[0][0]['retraso'] > 0){
                    //$pdf->SetFillColor(247,204,128);
                    $bg=false;
                   }
                   $ht01=$checkout['Checkinout']['CHECKTIME'];
                   $ht02=$checkouts['Checkinout']['CHECKTIME'];
                    $pdf->Cell(8,4,$bandera,0,0,'C',$bg);
                    $pdf->Cell(17,4,$ffi,0,0,'C',$bg);
                    $pdf->Cell(20,4,substr($sch['Schcla']['STARTTIME'],11,5).' - '.substr($sch['Schcla']['ENDTIME'],11,5),0,0,'C',$bg);
                    $pdf->Cell(10,4,substr($ht01,11,5),0,0,'C',$bg);
                    $pdf->Cell(10,4,substr($ht02,11,5),0,0,'C',$bg);
                    $total=$total+$otro[0][0]['retraso'];
                    $pdf->Cell(15,4,$otro[0][0]['retraso'],0,0,'C',$bg);
                    $temp=$checkin->query("SELECT dbo.temprano_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$numdeil['Numrundeil']['SCHCLASSID'].") AS temprano;");
                    $num_01=($temp[0][0]['temprano']*-1);
                    $pdf->Cell(15,4,$num_01,0,0,'C',$bg);
                    $falta01=$checkin->query("SELECT dbo.falta_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$numdeil['Numrundeil']['SCHCLASSID'].") AS falta;");
                    $jornad=$checkin->query("SELECT dbo.jornada(".$numdeil['Numrundeil']['SCHCLASSID'].") AS jornada;");
                    if($falta01[0][0]['falta'] == 0){
                        $totalf=$totalf+$jornad[0][0]['jornada'];
                    }
                    $t_trab='00:00';
                    if(!empty($ht01) && !empty($ht02)){
                        $ttrab=$checkin->query("SELECT dbo.tiempotrab('".substr($ht01,0,16)."','".substr($ht02,0,16)."') AS temptrab;");
                        $t_trab= substr($ttrab[0][0]['temptrab'],0,5);
                    }
                    $pdf->Cell(10,4,$faltas[$falta01[0][0]['falta']],0,0,'C',$bg);
                    $pdf->SetFont('Arial','',5);
                    $justif='';
                    if(!empty($holida[date ("d-m",strtotime($ffi))])){
                        $justif = 'FERIADO';                             
                    }else{
                        if( ((int)date('H',strtotime(substr($speday['Userspeday']['STARTSPECDAY'],11))) <= (int)date ("H",strtotime(substr($sch['Schcla']['STARTTIME'],11))) ) || ((int)date('H',strtotime(substr($sch['Schcla']['ENDTIME'],11))) <= (int)date ("H",strtotime(substr($checkout['Userspeday']['ENDSPECDAY'],11))) )){
                            $justif=$leaveclas[$speday['Userspeday']['DATEID']];
                        }
                    }
                    $pdf->Cell(60,4,$justif,0,0,'C',$bg);
                    $pdf->SetFont('Arial','',6.5);
                    $pdf->Cell(15,4,$jornad[0][0]['jornada'],0,0,'C',$bg);
                    $pdf->Cell(15,4,$t_trab,0,0,'C',$bg);
                    $pdf->ln(4.5);
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
             
                    $pdf->Cell(8,4,$bandera,0,0,'C',false);
                    $pdf->Cell(17,4,$ffi,'B',0,'C',false);
                    $pdf->Cell(20,4,substr($sch['Schcla']['STARTTIME'],11,5).' - '.substr($sch['Schcla']['ENDTIME'],11,5),'B',0,'C',false);
                    $pdf->Cell(10,4,substr($ht01,11,5),'B',0,'C',false);
                    $pdf->Cell(10,4,substr($ht02,11,5),'B',0,'C',false);
                    $total=$total+$otro[0][0]['retraso'];
                    $pdf->Cell(15,4,$otro[0][0]['retraso'],'B',0,'C',false);//Retrasos
                    $temp=$checkin->query("SELECT dbo.temprano_dia('".$ffi."',".$userinfo['Userinfo']['USERID'].",".$numdeil['Numrundeil']['SCHCLASSID'].") AS temprano;");
                    $num_01=($temp[0][0]['temprano']*-1);
                    $pdf->Cell(15,4,$num_01,'B',0,'C',false);//Temprano
                    
                    $pdf->Cell(10,4,"",'B',0,'C',false);
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
                    $pdf->Cell(60,4,"",'B',0,'C',false);
                    $pdf->Cell(15,4,"",'B',0,'C',false);
                    $pdf->Cell(15,4,"",'B',0,'C',false);
                    $pdf->ln(4.5);
                     $bandera++;
                     }
                }
                $ffi = date ("Y-m-d",strtotime ("+$salto day",strtotime($ffi)));
         }   
    }
    $pdf->SetFillColor(200,220,255);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',6);
    $pdf->Cell(65,4,"Total",'TB',0,'R',true);
    $pdf->Cell(15,4,$total,'TB',0,'C',true);
    $pdf->Cell(15,4,"",'TB',0,'C',true);
    $pdf->Cell(10,4,$totalf,'TB',0,'C',true);
    $pdf->Cell(60,4,"",'TB',0,'C',true);
    $pdf->Cell(15,4,"",'TB',0,'C',true);
    $pdf->Cell(15,4,"",'TB',0,'C',true);
    $pdf->Output();
?>