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
            } else {
                $message = "ERROR";
            }
        }

        return require_once('../view/upload.php');
    }
}
