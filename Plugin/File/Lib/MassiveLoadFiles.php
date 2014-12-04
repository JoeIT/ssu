<?php

App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class MassiveLoadFiles
{
	public function __construct()
	{
	}

    //http://book.cakephp.org/2.0/en/core-utility-libraries/file-folder.html
    public function listFiles($folder)
    {
        $dir = new Folder($folder);
        $files = $dir->find('.*\.jpg|.*\.jpeg|.*\.png', true);

        foreach ($files as $file) {
            $file = new File($dir->pwd() . DS . $file);
            echo '</br>' . $file->name();
            //$contents = $file->read();
            // $file->write('I am overwriting the contents of this file');
            // $file->append('I am adding to the bottom of this file.');
            // $file->delete(); // Deleting file

            $file->close();
        }
    }
}