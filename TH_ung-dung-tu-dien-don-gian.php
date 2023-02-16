<!DOCTYPE Html>
<html>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h2>Từ Điển Anh- Việt</h2>
    <form medthod="post">
        <input type="text" name="search" placeholder="Nhập từ chần tìm" />
        <input type="submit" id="submit" value="Tìm" />
    </form>
    <?php
    $dictionary = array(
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính"
    );
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchword = $_POST["search"]; 
        $flag = 0;
        foreach($dictionary as $word => $description) {
           if($word == $searchword){
              echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
              echo "<br/>";
              $flag = 1;
           }
        } 
      
        if($flag == 0){
           echo "Không tìm thấy từ cần tra.";
        }
      }

    ?>
</body>

</html>