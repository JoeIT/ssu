<?php
App::uses('ArticleAppModel', 'Article.Model');
/**
 * Category Model
 *
 * @property Article $Article
*/
class Leavecla extends ArticleAppModel {
        public $useDbConfig = 'att2015sql';
        public $useTable = 'leaveclass';
        public $primaryKey = 'LEAVEID';
        public $displayField = 'LEAVENAME';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'LEAVENAME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Detalle.',),
            ),
            'UNIT' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Dias.',),
            )
	);

}
