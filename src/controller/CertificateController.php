<?php
namespace phpsanca\phpcert\controller;

use phpsanca\phpcert\model\Certificate;

class CertificateController
{
    public function __construct($action)
    {
        if (method_exists($this, $action)) {
            $this->$action();
        }
    }

    public function create()
    {
        include_once __DIR__."/../view/pages/create.php";
        echo $view;
        exit();
    }

    public function preview()
    {
        if (empty($_GET['cert'])) {
            throw new \Exception('ERRO: cert is empty');
        }
        $cert = filter_var($_GET['cert'], FILTER_SANITIZE_STRING);

        if (empty($_GET['student'])) {
            throw new \Exception('ERRO: student is empty');
        }
        $student = filter_var($_GET['student'], FILTER_SANITIZE_STRING);

        if (empty($_GET['course'])) {
            throw new \Exception('ERRO: course is empty');
        }
        $course = filter_var($_GET['course'], FILTER_SANITIZE_STRING);

        include_once __DIR__."/../view/certificates/{$cert}.php";
        echo $body;
        exit();
    }

    public function generate()
    {
        if (empty($_GET['cert'])) {
            throw new \Exception('ERRO: cert is empty');
        }
        $cert = filter_var($_GET['cert'], FILTER_SANITIZE_STRING);

        if (empty($_GET['student'])) {
            throw new \Exception('ERRO: student is empty');
        }
        $student = filter_var($_GET['student'], FILTER_SANITIZE_STRING);

        if (empty($_GET['course'])) {
            throw new \Exception('ERRO: course is empty');
        }
        $course = filter_var($_GET['course'], FILTER_SANITIZE_STRING);

        include_once __DIR__."/../view/certificates/{$cert}.php";

        $certificade = new Certificate(array('body' => $body, 'size' => 'A5'));
        $pdf = $certificade->generatePdf();
        $pdf->output();

        exit();
    }
}