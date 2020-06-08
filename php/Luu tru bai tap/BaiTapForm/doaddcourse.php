<?php
       
        include ("data.php");
        if(isset($_POST['submit'])){
            //khoi tao cac bien 
            $code = $name = $instr =  $dura = $cre = $outl = "";
            //gan vao cac bien tuong ung
            if(isset($_POST["Course_code"])) $code = $_POST["Course_code"];
            if(isset($_POST["Course_name"])) $name = $_POST["Course_name"];
            if(isset($_POST["Dura"])) $dura = $_POST["Dura"];
            if(isset($_POST["Cre"])) $cre = $_POST["Cre"];
            if(isset($_POST["outlines"])) $outl = $_POST["outlines"];
            if(isset($_POST["Instructors"])) $instr = implode(", ",$_POST["Instructors"]);
            if(empty($outl)) $outl = "Updating...";

            foreach ( $arrCourses as $key => $value)
            {
                if($key == $code){
                    $code = "";
                    header("Location: addcourse.php?error=1&Course_code=$code&Course_name=$name&Dura=$dura&Cre=$cre&outlines=$outl&Instructors=$instr");
                    
                }
                foreach($value as $_n)
                    {
                        if ($_n == $name){
                         $name = "";
                            header("Location: addcourse.php?error=2&Course_code=$code&Course_name=$name&Dura=$dura&Cre=$cre&outlines=$outl&Instructors=$instr");
                        }
                    }
                if(empty($instr))
                header("Location: addcourse.php?error=3&Course_code=$code&Course_name=$name&Dura=$dura&Cre=$cre&outlines=$outl&Instructors=$instr");

                

            }

        }
            //them cac gia tri vao ham addCourse
            addCourse($arrCourses, $code,$name, null ,$dura, $cre,$instr,$outl);

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
            <td colspan="100%"> <a href="addcourse.php?">Add New Courses</a> </td>
        </tr>
             
    </table>
            </p>

    <br/>
   

   
