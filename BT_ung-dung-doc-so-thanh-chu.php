<!DOCtype html>
<html>
<meta http-equiv="Conten-type" content="text/html; charset=utf-8" />
<style>
    input[type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>

<head>
</head>

<body>
    <h2>Nhập số thành chữ</h2>
    <form method="post">
        <input type="text" name="search" placeholder="Nhập số cần đọc" />
        <input type="submit" id="submit" value="read" />
    </form>
    <?php
    $read = array (
        "1" => "One",
        "2" => "Two",
        "3" => "Three",
        "4" => "Four",
        "5" => "Five",
        "6" => "Six",
        "7" => "Seven",
        "8" => "Eight",
        "9" => "Nine",
        "10" => "Ten"
    );
    switch ($read){
        case"read":
            echo "One";
            break;
        case"read":
            echo "Two";
    }
      
    ?>
</body>

</html>