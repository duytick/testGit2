<?php
    function addCourse(&$arr, $c_code, $c_name, $c_avatar = null, $c_duration, $c_credits, $c_intructors, $c_outline){
        
        $arr[$c_code] = [
            "name" => $c_name,
            'avatar' => $c_avatar,
            'duration' => $c_duration,
            'credits' => $c_credits,
            'instrutors' => $c_intructors,
            "outline" => $c_outline
        ];

    }

    function removeCourse($arr, $c_code = 101){
        Unset($arr[$c_code]); //built-in
        return $arr;
        /*
            1. tạo 1 biến mảng tạm
            2. duyệt tất cả các phần tử của mảng $arr
                2.1 kiểm tra phần tử hiện tại đang duyệt có phải là phần tử cần loại bỏ
                    Nếu phải thì không cho vào mảng tạm
                    Ngược lại, thì thêm phần tử đang duyệt vào mảng tạm
            3. trả giá trị mảng tạm cho hàm
        */
    }    
    
?>