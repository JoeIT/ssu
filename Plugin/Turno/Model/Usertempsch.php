<?php
App::uses('TurnoAppModel', 'Turno.Model');
/**
 * Category Model
 *
 * @property Turno Turno
*/
class Usertempsch extends TurnoAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'USER_TEMP_SCH';
        public $primaryKey = 'IDEN';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'USERID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Horario',),
                'rule'=>array('comparison', '>', 0),
                'message' => 'Debe Seleccionar un Horario'
            ),
            'COMETIME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Fecha Inicio.',),
            ),
            'LEAVETIME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Fecha Final.',),
            ),
            'SCHCLASSID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Horario.',),
            )
	);

}
