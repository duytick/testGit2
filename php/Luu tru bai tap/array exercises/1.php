<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $course = array();
        $course[]='toan';
        $course[]='ly';
        $course[]='hoa';
       
        if(!empty($course))
            echo "khong la mang rong";
        else
            echo "la mang rong";
        echo '<pre>';
        print_r($course);
        echo '</pre>';
            echo '<br>';

        foreach( $course as $key => $value)
        {
            echo $value;
            echo '<br>';
        }
    ?>
</body>
</html>