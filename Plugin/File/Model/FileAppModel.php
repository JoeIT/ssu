<?php

class FileAppModel extends AppModel {
	public $tablePrefix = 'file_';

    public $FILE_EXTENSION = '.pdf';

    public $REGEX_STRING = '/[^\pL\d]+/u';
}

