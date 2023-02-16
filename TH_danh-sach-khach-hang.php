<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <table border="0">
        <caption>
            <h1>Danh Sach khach hang</h1>
        </caption>
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Ngay sinh</th>
            <th>Dia chi</th>
            <th>anh</th>
        </tr>
    </table>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => " Hà Nội", "anh" => "images/1.jpg"),
        "2" => array("ten" => " Nguyễn Văn Nam", "ngaysinh" => "1983-08-20", "diachi" => "Bắc Giang", "anh" => " images/2.jpg"),
        "3" => array("ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-21", "diachi" => "Nam Định", "anh" => "images/3.jpg"),
        "4" => array("ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-22", "diachi" => "Hà Tây", "anh" => "images/4.jpg"),
        "5" => array("ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-17", "diachi" => "Hà Nội", "anh" => "images/5.jpg"),
    );

    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><img src ='" . $values['anh'] . "' width = '60px' height = '60px'/></td>";
        echo "</tr>";
    }
    ?>
</body>

</html>