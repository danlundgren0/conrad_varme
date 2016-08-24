<?php

class Pdf
{

    public function createPDF($html, $fileName, $saveFile = false)
    {
        require_once('dompdf/dompdf_config.inc.php');
        spl_autoload_register('DOMPDF_autoload');
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();

        if(!$saveFile)
        // Output to browser
            $dompdf->stream($fileName);
        else
        {
            // Save the PDF
            $dir = $this->getBaseDir() . $this->subDirectory;
            //die($dir);
            if(!file_exists($dir))
                mkdir($dir);

            $this->contentDir = $dir;
            $pdfFile = $dir . "/" . $fileName;
            $pdfData = $dompdf->output();
            file_put_contents($pdfFile, $pdfData);
            return $pdfFile;
        }
    }

}

$name = stripcslashes($_POST['print_name']);
$html = stripcslashes($_POST['print_html']);
$css = file_get_contents('print.css');

$content = '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />';
$content.= '<style type="text/css">' . $css . '</style>';
$content.= '<div id="header"></div>';
$content.= '<div id="name">'.$name.'</div>';
$content.= $html;

if ($name == 'Proline') {
	$content.= '<div id="image"></div>';
} else {
  $content.= '<style> #footer {padding-top:20px} </style>'; 

}
$content.= '<div id="footer">';
$content.= '<span>VVS Agenturer AB</span>';
$content.= '<span>Flygplansgatan 19 212 39  MALMÖ</span>';

$content.= '<span>E-post: <a style="margin-right:20px" href="mailto:info@vvsagenturer.se">info@vvsagenturer.se</a></span>';
$content.= '<span>Tfn: 040-680 32 50</span>';
$content.= '<span>Fax: 040-680 32 59</span>';
$content.= '</div>';



/*
 VVS Agenturer AB
Flygplansgatan 19
212 39  MALMÖ

E-post: info@vvsagenturer.se
Tfn: 040-680 32 50
Fax: 040-680 32 59
 */

$pdf = new Pdf();
$pdf->createPDF($content, $name.'.pdf');
