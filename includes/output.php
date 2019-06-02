<?php
    function output($fields) {
        $output = "";
        $output .= "<ul class=\"user_info\">";
            foreach($fields as $field => $value) {
                $output .= "<li>" . "<span class=\"label\">" . $field . "</span>" . " " . $value . "</li>";
            }
        $output .= "</ul>";
        
        return $output;
    }
?>