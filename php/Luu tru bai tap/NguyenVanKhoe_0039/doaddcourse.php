<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
          border: 1px solid #333;
          border-collapse: collapse;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php 
        include ("data.php"); 
        
        $courseCode = isset($_POST['courseCode']) ? $_POST['courseCode'] : "" ;
        $courseName = isset($_POST['courseName']) ? $_POST['courseName'] : "" ;
        $courseDuration = isset($_POST['courseDuration']) ? $_POST['courseDuration'] : "" ;
        $courseCredits = isset($_POST['courseCredits']) ? $_POST['courseCredits'] : "" ;
        $courseIns = (isset($_POST["checkbox"])) ? ($_POST["checkbox"]) : "";
        // xử lí instructors
        if(!empty($courseIns[0]) && ($courseIns[0] == "Aliba HJ")) 
            $chk1 =  "c"; 
        else 
            $chk1 =  ""; 
        if(!empty($courseIns[1]) && ($courseIns[1] == "Jame Hot")) 
            $chk2 =  "c";
        else 
            $chk2 =  "";
        if(!empty($courseIns[2]) && ($courseIns[2] == "Taliba Adam")) 
            $chk3 =  "c" ;
        else 
            $chk3 =  "";
        if(!empty($courseIns[3]) && ($courseIns[3] == "John Ken"))
            $chk4 = "c" ;
        else 
            $chk4 =  "";
        // xử lí outline 
        $courseOut = ($_POST['courseOut']);
        if (empty($courseOut)) {
            $courseOut = "Updating...!";
        }
    ?>
    <h1>List of Courses </h1>
    <table width="60%">
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
                foreach($arrCourses as $k => $v){
                    if ($k == $courseCode ){
                        header("Location: addcourse.php?error=1&name=$courseName&credit=$courseCredits&duration=$courseDuration&chk1=$chk1&chk2=$chk2&chk3=$chk3&chk4=$chk4"); 
                    }
                    else if ($v['name'] == $courseName) {
                        header("Location: addcourse.php?error=2&code=$courseCode&credit=$courseCredits&duration=$courseDuration&chk1=$chk1&chk2=$chk2&chk3=$chk3&chk4=$chk4"); 
                    }
                }
                if (empty($courseIns)) {
                    header("Location: addcourse.php?error=3&code=$courseCode&name=$courseName&credit=$courseCredits&duration=$courseDuration"); 
                }
                addCourse($arrCourses, $courseCode, $courseName, $courseDuration, $courseCredits, $courseIns, $courseOut);   

                $str = "";
                foreach($arrCourses as $k => $v){
                    $str = "<tr>";
                    $str .= "<td>$k</td>";
                    $str .= "<td>". $v['name']. "</td>";
                    $str .= "<td>". $v['credits']. "</td>";
                    $str .= "<td>". $v['duration']. "</td>";
                    $str .= "<td>". implode(", ",$v['instrutors'])."</td>";
                    $str .= "<td>". $v['outline']."</br>" ."</td>";
                    $str .= "</tr>";
                    echo $str;
                }
            ?>
        </tr>
        
        <tr >
            <td colspan="100%">
                <a href="addcourse.php">Add New Courses</a>
            </td>
        </tr>
    </table>
    
</body>
</html>