<?php
App::uses('AdminController', 'Controller');

class FileAppController extends AdminController {

    public $FILES_PATH_ROOT = 'd:/FILES/';

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
        'personal_requirements' => 'Req. de personal',
        'documents' => 'Doc. personal'
    );
}