<?php 
$student = array();
$student[]= array(
    "name" => "Hoang Trong Duy Linh",
    "class" => "9c",
    "Subject" => array("Toan","Ly","Hoa")

);
echo'<pre>';
print_r ($student);
echo'</pre>';
function AddCode(&$arr, $name, $class, $subject){
    $arr[] = array(
        "name" => $name,
        "class" => $class,
        "subject" => $subject
    );
    
}
$c = array("Anh", 'Sinh', 'Dia');
AddCode($student,'Cam Nhung','6B',$c);

echo'<pre>';
print_r ($student);
echo'</pre>';

