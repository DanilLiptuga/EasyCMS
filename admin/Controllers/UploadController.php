<?php


namespace admin\Controllers;


use Engine\AbstractController;

class UploadController extends AbstractController
{
    public function index()
    {
        $destFile = ROOT_PATH."/content/uploads/".$_FILES['file']['name'];
        move_uploaded_file( $_FILES['file']['tmp_name'], $destFile );
        header('Content-Type: application/json');
        echo json_encode(['link' => '/content/uploads/' . $_FILES['file']['name']]);
    }
}