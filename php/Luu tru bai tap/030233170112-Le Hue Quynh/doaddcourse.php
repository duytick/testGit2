<?php
 
include ("data.php");
$code = $name = $instrutor = $cre = "";
$outlines = "Updating...";
$codeErr = $nameErr = $instrutorErr ="";
function checked($a,$b)
{      
        foreach($a as $value){
            if($value == $b){
                echo "checked";
            }
        }
  
};



    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["submit"]))
        {
            $code = $_POST["Course_code"];
            $name = $_POST["Course_name"];
            $cre = $_POST["Cre"];
            $dura = $_POST["Dura"];
            if(!isset($_POST["instructors"]))
            {
                $instrutorErr = " *You have to choose one instructor at least";
             if(!empty($_POST["instructors"]))
                $instructors = $_POST["instructors"]; echo "$instrutorErr" ;   
            }
            else 
                $instrutor = implode(", ",$_POST["instructors"]);
 
            if(!empty($_POST["outlines"]))
                $outlines = $_POST["outlines"];
           
                
            foreach ($arrCourses as $key => $value)
            {
                if($key == $_POST["Course_code"])
                {
                    $codeErr = " *Course's code has been existed ";
                    $code = "";
                    break;
                }
                foreach($value as $value1)
                {
                    if(trim($value1) == trim($_POST["Course_name"]))
                    {
                        $nameErr = " *Course's name has been existed";
                        $name ="";
                        break;
                    }
                }
                
                
                
            }
           
             if(empty($codeErr) != true || empty($nameErr) != true ||  empty($instrutorErr) != true)
              include_once ("addcourse.php");
              else {
                addCourse($arrCourses, $code,$name, null ,$dura, $cre,$instrutor,$outlines);
                            ?>
                            <h1>List of Courses </h1>
                <table border="1" >
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Credits</th>
                        <th>Duration</th>
                        <th>Instructors</th>
                        <th>Outlines</th>
                    </tr>
                    <tr>
                        <?php
                        
                        // {
                        //     addCourse($arrCourses, $_POST["Course_code"],$_POST["Course_name"], null ,$_POST["Dura"], $_POST["Cre"],implode(", ",$_POST["instructors"]),$_POST["outlines"]);

                        // }



                            $str = "";
                            foreach($arrCourses as $k => $v){
                                $str = "<tr>";
                                $str .= "<td>$k</td>";
                                $str .= "<td>".$v['name']."</td>";
                                $str .= "<td>".$v['credits']."</td>";
                                $str .= "<td>".$v['duration']."</td>";
                                $str .= "<td>".$v['instructors']."</td>";
                                $str .= "<td>".$v['outline']."</td>";
                                $str .= "</tr>";
                            
                                echo $str;
                            }
                        
                        ?>
                        <td colspan="100%"> <a href="addcourse.php?" >Add New Courses</a> </td>

                    </tr>
                        
                </table>
                        </p>

                <br/>
   
             <?php               
              }

        }
    }


