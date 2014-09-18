<?php
App::uses('ArticleAppModel', 'Article.Model');
/**
 * Category Model
 *
 * @property Article $Article
*/
class Department extends ArticleAppModel {
    public $useDbConfig = 'att2015sql';
    public $primaryKey = 'DEPTID';
    public $displayField = 'DEPTNAME';
    /*var $belongsTo = array(
        'Department' => array(
            'className' => 'Department',
            'foreignKey' => 'SUPDEPTID'
        )
	);*/
    var $hasMany = array(
        'Department' => array(
            'className'     => 'Department',
            'foreignKey'    => 'SUPDEPTID',
            'dependent'=> true
        )
    );
	public $validate = array(
            'SUPDEPTID' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Seleccione Padre.',),
            ),
            'DEPTNAME' => array(
                'notempty' => array('rule' => array('notempty'),'message' => 'Por favor Ingrese Nombre departamento.',),
            )
	);
}
