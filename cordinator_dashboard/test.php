
<? include("mpdf/mpdf.php");?>
<?php 
 
$html = 'aiheee_form.php';

$mpdf = new mPDF ('utf-8', // mode - default ''
                'A4-L', // format - A4, for example, default ''
                0, // font size - default 0
                '', // default font family
                5, // margin_left
                5, // margin right
                6, // margin top
                0, // margin bottom
                9, // margin header
                0, // margin footer
                'L');

//        $mpdf = new mPDF('utf-8', 'A4-L', 22, '', 2, 2, 2, 2, 2, 2);
        $mpdf->SetDisplayMode('fullpage');

        $keep_table_proportions = TRUE;

        $mpdf->WriteHTML($html);
        $mpdf->Output('../uploads/report/' . $fileName, 'F');
        return array('fileName' => $fileName);
?>