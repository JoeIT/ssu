<?php
App::uses('AsistenciaAppModel', 'Asistencia.Model');
/**
 * Category Model
 *
 * @property Turno Turno
*/
class Userspeday extends AsistenciaAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'USER_SPEDAY';
        public $primaryKey = 'SPEDAYID';
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'USERID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'No existe Usuario',),
                'rule'=>array('comparison', '>', 0),
                'message' => 'Debe Seleccionar un usuario'
            ),
            'STARTSPECDAY' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Falta Fecha Inicio.',),
            ),
            'ENDSPECDAY' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Falta Fecha Final.',),
            ),
            'DATEID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Tipo de permiso.',),
            ),
            'YUANYING' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Ingrese descripcion.',),
            )
	);

}
