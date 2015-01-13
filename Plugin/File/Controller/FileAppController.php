<?php
App::uses('AdminController', 'Controller');

class FileAppController extends AdminController {

    public $GLOBAL_TAGS = array(
        'records' => 'Antecedentes y títulos',
        'jobs' => 'Experiencia de trabajo',
        'courses' => 'Cursos realizados',
        'contracts' => 'Contratos de trabajo',
        'statements' => 'Declaraciones juradas de bienes y rentas',
        'others' => 'Otros'
    );

    public $GLOBAL_DOCS = array(
        'letters' => 'Cartas',
        'contracts' => 'Contratos de trabajo',
        'certificates' => 'Títulos y Certificados',
        'memos' => 'Memorandums',
        'personal_docs' => 'Documentos personales'
    );
}