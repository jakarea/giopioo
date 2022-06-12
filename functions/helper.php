<?php

add_action('show_reading_time','eleblikli_reading_time');

function eleblikli_reading_time($param){
    $reading_time = '';
    
    $min = floor(str_word_count($param)  / 200); 
    if($min){
        $reading_time .= $min .' min ' ;
    }
    $sec = floor(str_word_count($param)  % 200  /(200 /60))   ;
    if($sec){
        $reading_time .= $sec .' sec ' ;
    }
    _e($reading_time);
}


add_action('get_red_text','eleblikli_red_text');

function eleblikli_red_text($params){
    _e(str_replace($params[1],"<span class='text-giopio-orange'>".$params[1]."</span>",$params[0]));
}


add_action('get_string_limit','eleblikli_string_limit');

function eleblikli_string_limit($params){
    $string = $params[0];
    $limit = $params[1];
    return substr($string,0, 140);
}