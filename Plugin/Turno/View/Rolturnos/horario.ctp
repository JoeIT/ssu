<?php 
    App::uses('Schcla', 'Article.Model');
    $schcla = new Schcla();
    $dato=array();$hora=array();
    foreach($deil AS $num){
        $sch=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $num['Numrundeil']['SCHCLASSID'])));
        $hora1=  explode(" ", $num['Numrundeil']['STARTTIME']);
        $hora2=  explode(" ", $num['Numrundeil']['ENDTIME']);
        $dia=$num['Numrundeil']['SDAYS'];
        $dato[]=array(
            'id' => '',
            'title'=>'Turno: '.$sch['Schcla']['SCHNAME'],
            'start'=>''.date("Y-m-d",mktime(0,0,0,date('m'),(date('d')+$dia)-date('w'),date('Y'))).'T'.$hora1[1].'-05:00',
            'end' => ''.date("Y-m-d",mktime(0,0,0,date('m'),(date('d')+$dia)-date('w'),date('Y'))).'T'.$hora2[1].'-05:00',
            'allDay' => 0,
            'url' => '',
            'details' => '',
            'className' => 'Orange'
        );
    }
?>
<div id="calendar"></div>
<?php

echo $this->Html->script(array('jquery-1.5.min', 'jquery-ui-1.8.9.custom.min', 'fullcalendar.min', 'jquery.qtip-1.0.0-rc3.min'), array('inline' => 'false'));
?>
<script type="text/javascript">
plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "Article";
$(document).ready(function() {
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
		header: {
    		left:   '',
    		center: '',
    		right:  ''
		},
		defaultView: 'agendaWeek',
		firstHour: 7,
                allDaySlot: false,
		weekMode: 'variable',
                columnFormat: 'dddd',
                axisFormat:'HH:mm',
                timeFormat: {agenda: 'HH:mm{ - HH:mm}'},
		aspectRatio: 1.8,
                contentHeight: 650,
                dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
		editable: false,
		events: <?php echo json_encode($dato);?>
    })

});
</script>