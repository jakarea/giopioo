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
