<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php
      function Reference(&$a,$b,$c,$d){
          $a[$b] = array(
              "name" => $c,
              "diem" => $d

          );

      };

      function Return_1($a,$b,$c,$d){
        $a[$b] = array(
            "name" => $c,
            "diem" => $d

        );
        return $a;

    };
    $arr = array(0=>array("name"=>"Ka", "diem"=>9));
     Reference($arr, 1, "Linh", 8);
     Reference($arr, 2, "hoa", 2);
     $arr = Return_1($arr, 3, "Nhung", 2);
     Reference($arr, 2, "Mui", 2);
    print_r($arr);
    echo "<br>";
    $arr = array(0=>array("name"=>"Ka", "diem"=>9));
    print_r($arr);


        

    ?>
</body>
</html>