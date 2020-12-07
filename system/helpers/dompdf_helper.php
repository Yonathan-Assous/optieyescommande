<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    require_once("static/dompdf/autoload.inc.php");

    use Dompdf\Dompdf;

    function pdf_create($html, $filename='', $stream=TRUE, $orientation = 'portrait', $customsize = false)
    {

        $dompdf = new Dompdf();
        //$dompdf->loadHtml($html, 'utf-8');
        $dompdf->loadHtml(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

        if($customsize)
            $dompdf->setPaper($customsize );
        else
            $dompdf->setPaper("a4", $orientation );

        $dompdf->render();

        if ($stream) {
            $dompdf->stream($filename);
        } else {
            return $dompdf->output();
        }
    }

?>