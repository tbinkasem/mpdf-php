<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สร้างไฟล์ PDF</title>
    <style>
        th,tr,td{
            border: 1px double red;"
        }
        input[type=submit]{
            color: white;
            font-size: 20px;
            font-weight: bold;
            background-color: #4659e3;
        }
        table{
            width: 75%;
            border: 1px double red;
        } 
    </style>
</head>
<body>
    
</body>
</html>
<?php

require_once __DIR__ . '/vendor/autoload.php';

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
        // 'fontDir' => array_merge($fontDirs, [
        //     __DIR__ . '/custom/font/directory',
        // ]),
        'fontdata' => $fontData + [
            'thsarabun' => [
                'R' => "THSarabunNew.ttf",
                'B' => "THSarabunNew-Bold.ttf",
                'I' => "THSarabunNew-Italic.ttf",
                'BI' => "THSarabunNew-BoldItalic.ttf",
            ]
        ],
        'default_font' => 'thsarabun'
    ]);

$html = '<style>
body{
    background-color: #cbcf63;
}
h1{
    text-align: center;
}
th,tr,td{
    border: 1px double red;"
}
input[type=submit]{
    color: white;
    font-size: 20px;
    font-weight: bold;
    background-color: #4659e3;
}
table{
    width: 75%;
    border: 1px dotted red;
} 
</style>
<h1>รายงานการลาเปื่อย</h1>
<table>
    <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>DEP</th>
    </tr>
    <tr>
        <td>๑๐๐๑</td>
        <td>วีระ</td>
        <td>เทคโนโลยีสารสนเทศ</td>
    </tr>
    <tr>
        <td>๑๐๐๒</td>
        <td>พีระ</td>
        <td>เทคโนโลยีคอมพิวเตอ์</td>
    </tr>
</table>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>