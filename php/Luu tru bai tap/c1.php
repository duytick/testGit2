<?php
         // $k = 0;
            //if(empty($array3)){
            //    $array3[0] = $dest[0];
            //    continue;
            //}
           
            // for($j = 0; $j < count($array3);$j++)
            // {
            //     if($dest[$i] == $array3[$j]){
            //      $k = 1;
            //      break;

                   
            //     }
  
            // }
            // if ($k == 0){
            //  $array3[count($array3)] = $dest[$i];
             
            // }
            // for($i = 0; $i < count($array2);$i++){
            //     $k = 0;
            //     if(empty($array3)){
            //         $array3[0] = $dest[0];
            //         continue;
            //     }
               
            //     for($j = 0; $j < count($array3);$j++)
            //     {
            //         if($array2[$i] == $array3[$j]){
            //          $k = 1;
            //          break;
    
                       
            //         }
      
            //     }
            //     if ($k == 0){
            //      $array3[count($array3)] = $array2[$i];
                 
            //     }
                
            // }
         
    
         

    function unique_Name(array $array1, $array2)
    {
        $result = array();
        concatArrayIfNotExisted($result, $array1);
        concatArrayIfNotExisted($result, $array2);

        return $result;

    }
    function concatArrayIfNotExisted(array &$source, $dest)
    {
        for($i = 0; $i < count($dest);$i++){
   
            $j = 0;
            while($j<count($source)&&$dest[$i] != $source[$j])
            { 
                $j++;
            }

            if($j==count($source))
            {
                $source[count($source)] = $dest[$i];
            };
        }
    }
    $name = unique_Name([1,2,4,2,5,6,7,4],[2,3,6,10,7,3]);
    echo'<pre>';
    print_r($name);
    echo'<pre>';

?>
