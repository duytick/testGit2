<form action="#" method="post">
<input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
<input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
<input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
<input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
}
echo "mang la: ";
$a = $_POST['check_list'];
echo '<pre>';
print_r ( $a);
echo '</pre>';
$b = array(
    'tutor' => 'Hoang Trong Duy Linh',
    'class' => $a
);
    echo '<pre>';
    print_r ( $b);
    echo '</pre>';
    foreach($b as $selected){
      if (is_array($selected) )
      {
        foreach($selected as $value)
        {
            echo "<li>".$value."</li>"; 
        }
      }
      else
        echo $selected;

    
    }
    function DoCourse($arr,$tutor,$class)
    {
        $arr['tutor'] = $tutor;
        $arr['class'] = $class;
        return $arr;
    }
    $c  = array();
    print_r (DoCourse($c),$b['tutor'],$a);

?>