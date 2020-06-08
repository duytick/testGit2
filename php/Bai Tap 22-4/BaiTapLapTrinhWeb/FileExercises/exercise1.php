<?php
// khi mo mot file ta thuong dung dau @ đặt trước hàm open
//để phòng trường hợp đường dẫn path bị sai nó sẽ không 
//bung lỗi ra màn hình .
//Đường dẫn path có thể là đường dẫn tương đối hoăc tuyệt đối

// $path = 'demo.txt';
// $fp = @fopen($path,"r");
// //kiểm tra file mở thành công không
// if(!$fp){
//     echo "Mở file không thành công";
// }
// else{
//     echo "Mở file thành công";
// }

// $linh = file_put_contents("demo2.txt",'hoang trong duy linh');
// $path = 'demo.txt';
// $fp = fopen($linh,"r") or die("Unable to open file!");
// echo fread($fp,filesize('demo2.txt'));
//file_put_contents('demo.txt', 'this is a test');
//đọc toàn bộ file

// file_put_contents('demo.txt', ' used file_get_contents function.', FILE_APPEND);
// file_put_contents('demo.txt', ' Hoàng trọng duy linh.', FILE_APPEND);
// file_put_contents('demo.txt', ' Hoàng trọng duy linh.', FILE_USE_INCLUDE_PATH);


// echo file_get_contents('demo.txt');
// //đọc toàn bộ file
// $fp = @fopen('demo.txt', "r");
  
// // Kiểm tra file mở thành công không
// if (!$fp) {
//     echo 'Mở file không thành công';
// }
// else
// {
//     // Lặp qua từng ký tự để đọc
//     while(!feof($fp))
//     {
//         echo fgetc($fp);
//         echo "<br>";
//     }
// }
// try {
//     echo 4/2;
//   } catch (Exception $e) {
//     echo "Divided by zero!";
//   } finally {
//     echo "This will be outputed even if exception will happen!";
//   }


// $path  = fopen("demo1.txt",'w');
// $string = "my name is Linh \n";
// fwrite($path,$string);
// fwrite($path,$string);
// //fclose($path);
// fwrite($path,"hoang trong duy linh");
// $path1  = fopen("demo.txt",'a');
// fwrite($path1,$string);
// fclose($path);

// 
// $path = file("demo.txt");
// foreach($path as $key => $value){
//     echo $key."=>";
//     echo $value."<br>";
    
// }
    //fclose("demo.txt");
    if (!copy('https://freetuts.net/cac-ham-xu-ly-file-trong-php-22.html', 'demo3.txt'))
{
    echo 'Copy thất bại';
}
?>