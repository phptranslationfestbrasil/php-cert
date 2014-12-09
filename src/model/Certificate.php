<?php
namespace phpsanca\phpcert\model;

use \mPDF as Pdf;

class Certificate
{
    private $body;
    private $size;

    public function __construct(array $properties = array())
    {
        foreach($properties as $propKey => $propValue) {
            if (property_exists($this, $propKey)) {
                $this->{$propKey} = utf8_encode($propValue);
            }
        }
    }

    public function __get($property)
    {
        return $this->{$property};
    }

    public function __set($propKey, $propValue)
    {
        if (property_exists($this, $propKey)) {
            $this->{$propKey} = $propValue;
        }

        return $propValue;
    }

    public function generatePdf()
    {
        if (!$this->body) {
            throw new \Exception('ERRO: body is empty;');
        }

        if (!$this->size) {
            throw new \Exception('ERRO: size is empty;');
        }

        $pdf = new Pdf('c', $this->size);
        $pdf->AddPage('L', null, null, null, null, 0, 0, 0, 0, 0, 0);
        $pdf->WriteHTML($this->body);

        return $pdf;
    }
}