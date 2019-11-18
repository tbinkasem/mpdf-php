<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>พิมพ์เอกสารรายงานการลาเปื่อย</title>
    <style>
        th,tr,td{
            border: 1px dotted red;"
        }
        input[type=submit]{
            color: white;
            font-size: 20px;
            font-weight: bold;
            background-color: #4659e3;
        }
    </style>
</head>
<body>
    <h1>รายงานการลาเปื่อย</h1>
    <table style="width: 75%; border: 1px double red;">
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
    </table>
    <br>
    <form action="print.php" method="get">
        <input type="submit" value="พิมพ์สรุปการลา">
    </form>
</body>
</html>