<?php
App::uses('ArticleAppModel', 'Article.Model');
/**
 * Category Model
 *
 * @property Article $Article
*/
class Numrun extends ArticleAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'NUM_RUN';
        public $primaryKey = 'NUM_RUNID';
        public $displayField = 'NAME';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'NAME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Nombre.',),
            ),
            'STARTDATE' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Fecha Inicio.',),
            ),
            'ENDDATE' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Fecha Final.',),
            )
	);

}
