<?php

class FileController
{
    public $model;

    public function UploadAction()
    {
        $message = '';
        if (isset($_POST['submit'])) {
            $target_dir = "./upload/";
            $target_file = $target_dir . basename($_FILES['uploadFile']["name"]);

            if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file)) {
                $message = "The file" . htmlspecialchars(basename($_FILES["uploadFile"]["name"])) . "has been upload";

                // $row = 1;
                // $columnData = [];
                // if (($handle = fopen($target_file, "r")) !== FALSE) {
                //     while (($data == fgetcsv($handle, 11, ",")) !== FALSE) {
                //         if ($row != 1) {
                //             $columnData[$row]['name'] = $data[0];
                //             $columnData[$row]['qt'] = $data[1];
                //             $columnData[$row]['price'] = $data[2];
                //         }
                //         $row++;
                //     }
                //     fclose($handle);
                // }
                // if (!empty($columnData)) {

                // }
            } else {
                $message = "ERROR - Try again";
            }
        }

        return require_once('../view/upload.php');
    }
}
