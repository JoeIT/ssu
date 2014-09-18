<?php
App::uses('ArticleAppModel', 'Article.Model');
/**
 * Category Model
 *
 * @property Feriados $Feriados
*/
class Holiday extends ArticleAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'holidays';
        public $primaryKey = 'HOLIDAYID';
        public $displayField = 'HOLIDAYNAME';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'HOLIDAYNAME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Detalle.',),
            ),
            'HOLIDAYDAY' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Dias.',),
            ),
            'STARTTIME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Fecha Inicio.',),
            ),
            'DURATION' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Duracion.',),
            )
	);

}
