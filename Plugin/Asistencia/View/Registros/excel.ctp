<?php
// create new empty worksheet and set default font
$this->PhpExcel->createWorksheet()
    ->setDefaultFont('Arial', 12);
 
// define table cells
$table = array(
    array('label' => __('Partida')),
    array('label' => __('Detalle'), 'width' => 50, 'wrap' => true),
    array('label' => __('Aprobado')),
    array('label' => __('Modificado')),
    array('label' => __('Vigente')),
    array('label' => __('Mensual')),
    array('label' => __('Acumulado'))
);

// add heading with different font and bold text
$this->PhpExcel->addTableHeader($table, array('name' => 'Cambria', 'bold' => true));
$aprob=0;$modif=0;$vig=0;$mens=0;$acum=0;
foreach ($ejecucion as $d) {
    $this->PhpExcel->addTableRow(array(
        $d['0']['pr_cta'],
        $d['0']['pr_nom'],
        $d['0']['aprobado'],
        $d['0']['modif'],
        $d['0']['vigente'],
        $d['0']['mensual'],
        $d['0']['acumulado']
    ));
    $aprob=$aprob+$d[0]['aprobado'];
    $modif=$modif+$d[0]['modif'];
    $vig=$vig+$d[0]['vigente'];
    $mens=$mens+$d[0]['mensual'];
    $acum=$acum+$d[0]['acumulado'];
}
$this->PhpExcel->addTableRow(array('','Total:',$aprob,$modif,$vig,$mens,$acum));
// close table and output
$this->PhpExcel->addTableFooter()->output();
?> 
    