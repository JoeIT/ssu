<?php
App::uses('TurnoAppModel', 'Turno.Model');
/**
 * Category Model
 *
 * @property Turno Turno
*/
class Userofrun extends TurnoAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'USER_OF_RUN';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'NUM_OF_RUN_ID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Horario',),
                'rule'=>array('comparison', '>', 0),
                'message' => 'Debe Seleccionar un Horario'
            ),
            'STARTDATE' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Fecha Inicio.',),
            ),
            'ENDDATE' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Fecha Final.',),
            )
	);

}
