<?php

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

ob_start();

include 'back-end/view/pdf.php';

$html = ob_get_clean();
$dompdf->loadHtml("$html");
$dompdf->setPaper('a4','landscape');
$dompdf->render();
$dompdf->stream('conteudo_cliente.pdf',Array('Attachment'=>0));

?>