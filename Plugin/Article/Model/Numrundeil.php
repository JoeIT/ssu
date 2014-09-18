<?php
App::uses('ArticleAppModel', 'Article.Model');
/**
 * Category Model
 *
 * @property Article $Article
*/
class Numrundeil extends ArticleAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'NUM_RUN_DEIL';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'STARTTIME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Hora inicio.',),
            ),            
            'ENDDATE' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Hora Final.',),
            ),
            'SDAYS' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Dia.',),
            ),
            'EDAYS' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor diaE',),
            ),
            'SCHCLASSID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Relacion.',),
            )
	);

}
