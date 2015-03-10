<?php
App::uses('AdminController', 'Controller');

class FileAppController extends AdminController {

    //public $DIGITAL_DOCS_PATH = 'Digital_Docs';
    public $DIGITAL_DOCS_PATH = 'C:/Aplicaciones/useraclSQL/Plugin/File/webroot/img/PERSONAL/';

    public $GLOBAL_TAGS = array(
        'records' => 'Antecedentes y títulos',
        'jobs' => 'Experiencia de trabajo',
        'courses' => 'Cursos realizados',
        'contracts' => 'Contratos de trabajo',
        'statements' => 'Declaraciones juradas de bienes y rentas',
        'others' => 'Otros'
    );

    public $GLOBAL_DOCS = array(
        'letters' => 'Carta',
        'contracts' => 'Contrato de trabajo',
        'certificates' => 'Título/Certificado',
        'memos' => 'Memorandum',
        'personalrequirements' => 'Req. de personal',
        'documents' => 'Doc. personal'
    );

    public $CONTRACT_TIME = array(
        'c' => 'Completo',
        'm' => 'Medio tiempo'
    );

    public $CONTRACT_TERMS = array(
        'f' => 'Fijo',
        't' => 'Temporal'
    );
}