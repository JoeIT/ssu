<?php
App::uses('TurnoAppModel', 'Turno.Model');
/**
 * Category Model
 *
 * @property Turno Turno
*/
class Checkinout extends TurnoAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'CHECKINOUT';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'USERID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Usuario',),
                'rule'=>array('comparison', '>', 0),
                'message' => 'Debe Seleccionar un Horario'
            ),
            'CHECKTIME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Fecha Inicio.',),
            )
	);

}
