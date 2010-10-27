<?php

/**
 * @author MESMERiZE
 * @copyright 2010
 */

require_once "simple_html_dom.php";

$info = array();
function CSVtoArray($csv){
    $array = array();
    $array=explode(",",$csv);
    return $array;
}

function getInfo($url,$keywords){
    $url="http://" . $url;
    if($keywords!=""){
        $keywords=strtolower($keywords);
        $keywords_array=CSVtoArray($keywords);
    }
    $html = new simple_html_dom();
    $html->load_file($url);
    $htmlText=str_replace(array("'","\""),array("",""),$html->plaintext);
    $all_words=str_word_count($htmlText,2);
    $searched_keywrd=getWordFreq($all_words,$keywords_array);
    asort($searched_keywrd,SORT_NUMERIC);
    $info['freq']=$searched_keywrd;
    $array_cv=array_count_values($all_words);
    asort($array_cv,SORT_NUMERIC);
    $info['allWords']=$array_cv;
    return $info;
    $html->close();
}

function getWordFreq($all_words,$keywords_array){
    $t_a=array();
    foreach ($keywords_array as $value) {
        $count=0;
        foreach ($all_words as $word) {
            if(strcasecmp($value,$word)==0)
                $count++;
        }
        $t_a[$value]=$count;
    }
    return $t_a;
}

function getAllWordFreq($all_words){
    $array=array(); $total_count=0;
    foreach ($all_words as $word=>$freq) {
        $array[$total_count]['word']=$word;
        $array[$total_count]['freq']=$freq;
        $total_count++;
    }
    return $array;
}
?>