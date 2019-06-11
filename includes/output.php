<?php
    function output($data) {
        if(is_array($data)) {
            $output = "";
            $output .= "<ul class=\"user_info\">";
                foreach($data as $field => $value) {
                    $output .= "<li>" . "<span class=\"label\">" . $field . "</span>" . " " . $value . "</li>";
                }
            $output .= "</ul>";
            
            return $output;
        } else {
            return $data . " =(";
        }
    }
?>