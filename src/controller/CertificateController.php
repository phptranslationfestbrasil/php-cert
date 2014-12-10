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
        $cert   = 'translationfest';
        $course = 'PHP TranslationFest Brasil 2014';

        if (empty($_GET['student'])) {
            throw new \Exception('ERRO: student is empty');
        }
        $student = filter_var($_GET['student'], FILTER_SANITIZE_STRING);

        if (empty($_GET['usergroup'])) {
            throw new \Exception('ERRO: usergroup is empty');
        }
        $usergroup = filter_var($_GET['usergroup'], FILTER_SANITIZE_STRING);

        if (empty($_GET['city'])) {
            throw new \Exception('ERRO: city is empty');
        }
        $city = filter_var($_GET['city'], FILTER_SANITIZE_STRING);

        if (empty($_GET['place'])) {
            throw new \Exception('ERRO: place is empty');
        }
        $place = filter_var($_GET['place'], FILTER_SANITIZE_STRING);

        include_once __DIR__."/../view/certificates/{$cert}.php";
        echo $body;
        exit();
    }

    public function generate()
    {
        $cert   = 'translationfest';
        $course = 'PHP TranslationFest Brasil 2014';

        if (empty($_GET['student'])) {
            throw new \Exception('ERRO: student is empty');
        }
        $student = filter_var($_GET['student'], FILTER_SANITIZE_STRING);

        if (empty($_GET['organizerOne'])) {
            throw new \Exception('ERRO: organizerOne is empty');
        }
        $organizerOne = filter_var($_GET['organizerOne'], FILTER_SANITIZE_STRING);

        if (empty($_GET['organizerTwo'])) {
            throw new \Exception('ERRO: organizerTwo is empty');
        }
        $organizerTwo = filter_var($_GET['organizerTwo'], FILTER_SANITIZE_STRING);

        if (empty($_GET['usergroup'])) {
            throw new \Exception('ERRO: usergroup is empty');
        }
        $usergroup = filter_var($_GET['usergroup'], FILTER_SANITIZE_STRING);

        if (empty($_GET['city'])) {
            throw new \Exception('ERRO: city is empty');
        }
        $city = filter_var($_GET['city'], FILTER_SANITIZE_STRING);

        if (empty($_GET['place'])) {
            throw new \Exception('ERRO: place is empty');
        }
        $place = filter_var($_GET['place'], FILTER_SANITIZE_STRING);

        include_once __DIR__."/../view/certificates/{$cert}.php";

        $certificade = new Certificate(array('body' => $body, 'size' => 'A5'));
        $pdf = $certificade->generatePdf();
        $pdf->output();

        exit();
    }

    private function getVars()
    {
        $cert   = 'translationfest';
        $course = 'PHP TranslationFest Brasil 2014';

        if (empty($_GET['student'])) {
            throw new \Exception('ERRO: student is empty');
        }
        $student = filter_var($_GET['student'], FILTER_SANITIZE_STRING);

        if (empty($_GET['usergroup'])) {
            throw new \Exception('ERRO: usergroup is empty');
        }
        $usergroup = filter_var($_GET['usergroup'], FILTER_SANITIZE_STRING);

        if (empty($_GET['city'])) {
            throw new \Exception('ERRO: city is empty');
        }
        $city = filter_var($_GET['city'], FILTER_SANITIZE_STRING);

        if (empty($_GET['place'])) {
            throw new \Exception('ERRO: place is empty');
        }
        $place = filter_var($_GET['place'], FILTER_SANITIZE_STRING);
    }
}