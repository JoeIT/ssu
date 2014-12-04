<?php
App::uses('FileAppController', 'File.Controller');
App::uses('MassiveLoadFiles', 'File.Lib');

class OCRController extends FileAppController {

    public function test2()
    {
        echo 'Testing...</br>';

        $folder = 'D:/JOE/listFolderFiles_test';

        $slf = new MassiveLoadFiles();
        $slf->listFiles($folder);

    }

    public function test()
    {
        if ($this->request->is(array('post',  'put')))
        {
            $url = 'https://api.idolondemand.com/1/api/sync/ocrdocument/v1';

            //$output_dir = "uploads/";
            $output_dir = "C:/Users/Staler/Desktop/uploads/";
            if(isset($_FILES["file"]))
            {
                // Temporal file name
                $fileName = md5(date('Y-m-d H:i:s:u')).$_FILES["file"]["name"];

                // Move the file to uploads folder
                move_uploaded_file($_FILES["file"]["tmp_name"], $output_dir.$fileName);

                $filePath = realpath($output_dir.$fileName);

                $post = array('apikey' => 'c194d420-049b-495c-ac85-370552556933',
                    'mode' => 'document_photo',
                    'file' => '@'.$filePath);

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                $result = curl_exec($ch);

                if(curl_errno($ch))
                {
                    echo curl_error($ch);
                }


                curl_close($ch);
                $result = str_replace('\n', '</br>', $result);
                echo $result .'</br>';

                /*
                //If you want to return only text use this.
                $json = json_decode($result,true);
                if($json && isset($json['text_block']))
                {
                    $textblock =$json['text_block'][0];
                    echo $textblock['text'];
                }*/

                // Remove the temporal file
                unlink($filePath);
            }
        }
    }
}