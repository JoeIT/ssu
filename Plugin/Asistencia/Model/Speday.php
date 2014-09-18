<?php
App::uses('AsistenciaAppModel', 'Asistencia.Model');
/**
 * Category Model
 *
 * @property Turno Turno
*/
class Speday extends AsistenciaAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'SPEDAYS';
        public $primaryKey = 'id';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'detalle' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Registrar Detalle.',),
            ),
            'fechai' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Falta Fecha Inicial.',),
            ),
            'fechaf' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Falta Fecha Inicial..',),
            ),
            'leaveid' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Tipo de permiso.',),
            )
	);

}
