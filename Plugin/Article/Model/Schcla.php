<?php
App::uses('ArticleAppModel', 'Article.Model');
/**
 * Category Model
 *
 * @property Article $Article
*/
class Schcla extends ArticleAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'schclass';
        public $primaryKey = 'SCHCLASSID';
        public $displayField = 'SCHNAME';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'SCHNAME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Detalle.',),
            ),
            'STARTTIME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Hora Inicio.',),
            ),
            'ENDTIME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Hora Final.',),
            ),
            'CHECKINTIME1' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Inicio Entrada.',),
            ),
            'CHECKINTIME2' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Final Entrada.',),
            ),
            'CHECKOUTTIME1' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Inicio Salida.',),
            ),
            'CHECKOUTTIME2' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Final Salida.',),
            ),
            'WorkDay' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Dia Trabajado.',),
            ),
            'CODIGO' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Código.',),
            )
	);

}
