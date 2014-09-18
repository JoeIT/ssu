<?php
App::uses('ArticleAppModel', 'Article.Model');
/**
 * Category Model
 *
 * @property Article $Article
*/
class Userinfo extends ArticleAppModel {
    public $useDbConfig = 'att2015sql';
    public $useTable = 'USERINFO';
    public $primaryKey = 'USERID';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
            'Badgenumber' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Código.',),
            ),
            'Name' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Nombres.',),
            ),
            'Gender' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Sexo.',),
            ),
            'BIRTHDAY' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Fecha de Nacimiento.',),
            ),
            'TITLE' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Identificacion Personal.',),
            ),
            'MINZU' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Pais.',),
            ),
            'PAGER' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Celular.',),
            ),
            'street' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Dirección.',),
            ),
            'DEFAULTDEPTID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Departamento.',),
            )
	);
        /*public $belongsTo = array(
            'Department' => array(
                'className' => 'Department',
                'foreignKey' => 'DEPTID'
            )
	);*/
}
