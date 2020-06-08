<?php
       

         
       include_once "data.php";
        $code = $_POST["Course_code"];
        $name = $_POST["Course_name"];
        $image = null;
        $dura = $_POST["Dura"];
        $cre = $_POST["Cre"];
        $instr = implode(", ",$_POST["instructors"]);
        $outlines = $_POST["outlines"];

        
        
         addCourse($arrCourses, $code,$name, $image ,$dura, $cre,$instr,$outlines);
        

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
            <td> <a href="addcourse.php?">Add New Courses</a> </td>
        </tr>
             
    </table>
            </p>

    <br/>
   

   
