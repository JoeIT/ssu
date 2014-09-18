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
        $this->Cell(25,3,'',0,0,'L');
        $this->SetFont('Arial','B',7);
        $this->Cell(120,3,$this->nombres,0,0,'L');
        $this->SetFont('Arial','I',6);
        $this->Cell(50,3,utf8_decode("Fecha de emisión: ").strftime("%d de %B del %Y"),0,0,'R');
        $this->SetFillColor(200,220,255);
        $this->SetTextColor(0,0,0);
        $this->SetFont('Arial','B',6);
        $this->ln(3);
        $this->Cell(8,8,"Nro",'TB',0,'C',true);
        $this->Cell(12,8,"Cod.",'TB',0,'C',true);
        $this->Cell(60,8,"Nombres",'TB',0,'C',true);
        $this->Cell(10,4,"Dias",'T',0,'C',true);
        $this->Cell(10,8,"Faltas",'TB',0,'C',true);
        $this->Cell(10,8,"Bajas",'TB',0,'C',true);
        $this->Cell(10,4,"Licencia ",'T',0,'C',true);
        $this->Cell(10,8,"Vacacion",'TB',0,'C',true);
        $this->Cell(10,8,"Comision",'TB',0,'C',true);
        $this->Cell(12,8,"Atrasos",'TB',0,'C',true);
        $this->Cell(12,8,"Multas",'TB',0,'C',true);
        $this->Cell(11,8,"Recargos",'TB',0,'C',true);
        $this->Cell(10,4,"Sobre",'T',0,'C',true);
        $this->Cell(10,4,"Sab. y",'T',0,'C',true);
        $this->ln(4);
        $this->Cell(8,4,"",0,0,'C',false);
        $this->Cell(12,4,"",0,0,'C',false);
        $this->Cell(60,4,"",0,0,'C',false);
        $this->Cell(10,4,"Trabajados",'B',0,'C',true);
        $this->Cell(10,4,"",0,0,'C',false);
        $this->Cell(10,4,"",0,0,'C',false);
        $this->Cell(10,4,"Cta. Vac.",'B',0,'C',true);
        $this->Cell(10,4,"",0,0,'C',false);
        $this->Cell(10,4,"",0,0,'C',false);
        $this->Cell(12,4,"",0,0,'C',false);
        $this->Cell(12,4,"",0,0,'C',false);
        $this->Cell(11,4,"",0,0,'C',false);
        $this->Cell(10,4,"Tiempos",'B',0,'C',true);
        $this->Cell(10,4,"Feriados",'B',0,'C',true);
        $this->ln(4.3);
    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',7);
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo(),0,0,'C'); 
    }
}
    $pdf=new pdf('P','mm','Letter');
    $pdf->cambiardatos(' Reporte General de Asistencias', $fi, $ff,$userinfo['Userinfo']['Name']);
    $pdf->AddPage();
    $pdf->SetFont('Arial','',6.5);
    
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
    $pdf->SetLineWidth(.1);
    foreach($userinfos AS $userinfo){
        $ttar=0;$tnormal=0;$treal_t=0;$t_trab=0;
        $f11=date ("Y-m-d",strtotime ('+1 day',strtotime($fff)));
        $tempsch = $tempsch01->find('all',array('conditions'=>array('USERID' => $userinfo['Userinfo']['USERID'],'SCHCLASSID != '=>-1,'COMETIME BETWEEN ? AND ?'=>array($ffi,$f11))));
        $com=0;$baj=0;$lic=0;$vac=0;
        if(empty($tempsch[0])){
            $fech1=date ("Y-m-d",strtotime ('+1 day',strtotime($fff)));
            $result=$deiles->query("select dbo.horarios('".$ffi."','".$fech1."',".$userinfo['Userinfo']['USERID'].") AS retraso;");
            $sumat=$result[0][0]['retraso'];
            
            $comision=$deiles->query("SELECT dbo.comisiont('".$ffi."','".$fff."',".$userinfo['Userinfo']['USERID'].") AS comision;");
            $com=$comision[0][0]['comision'];
            if($com<=0){$com='';}
            
            $bajas=$deiles->query("SELECT dbo.bajasN('".$ffi."','".$f011."',".$userinfo['Userinfo']['USERID'].") AS bajas;");
            $baj=$bajas[0][0]['bajas'];
            if($baj<=0){$baj='';}
            
            $licencias=$deiles->query("SELECT dbo.licenciasN('".$ffi."','".$f011."',".$userinfo['Userinfo']['USERID'].") AS licencias;");
            $lic=$licencias[0][0]['licencias'];
            if($lic<=0){$lic='';}
        }else{
            $fech1=date ("Y-m-d",strtotime ('+1 day',strtotime($fff)));
            $result=$deiles->query("select dbo.retrasos_rango('".$ffi."','".$fech1."',".$userinfo['Userinfo']['USERID'].") AS retraso;");
            $sumat=$result[0][0]['retraso'];
        }
        $pdf->Cell(8,4,$bandera,'B',0,'C',false);
        $pdf->Cell(12,4,$userinfo['Userinfo']['USERID'],'B',0,'C',false);
        $pdf->Cell(60,4,$userinfo['Userinfo']['Name'],'B',0,'L',false);
        $pdf->Cell(10,4,$diatrab.' '.$userinfo['Userinfo']['CITY'],'B',0,'C',false);
        $pdf->Cell(10,4,"",'B',0,'C',false);
        $pdf->Cell(10,4,$baj,'B',0,'C',false);
        $pdf->Cell(10,4,$lic,'B',0,'C',false);
        $pdf->Cell(10,4,"",'B',0,'C',false);
        $pdf->Cell(10,4,$com,'B',0,'C',false);
        $pdf->Cell(12,4,$sumat,'B',0,'C',false);
        $pdf->Cell(12,4,"",'B',0,'C',false);
        $pdf->Cell(11,4,"",'B',0,'C',false);
        $pdf->Cell(10,4,"",'B',0,'C',false);
        $pdf->Cell(10,4,"",'B',0,'C',false);
        $pdf->ln(4);
        $bandera++; 
   }
    
    $pdf->SetFillColor(200,220,255);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',6);
    $pdf->Cell(80,4,"Total",'TB',0,'R',true);
    $pdf->Cell(12,4,"",'TB',0,'C',true);
    $pdf->Cell(12,4,"",'TB',0,'C',true);
    $pdf->Cell(71,4,"",'TB',0,'C',true);
    $pdf->Cell(10,4,"",'TB',0,'C',true);
    $pdf->Cell(10,4,"",'TB',0,'C',true);
    $pdf->Output();
?>