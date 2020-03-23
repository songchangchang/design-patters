<?php

$a = '';
if (isset($a)) {
    echo 111;
}else {
    echo 222;
}
//需要被倒序的字符串
$str="I am a handsome boy.";
$str_len=strlen($str);
//echo $str_len;输出结果为20，确认没问题。
//截取.号之前的字符substr(string,start,length)
$str=substr($str,0,$str_len-1);
//echo $str;得出I am a handsome boy，语句没问题
//转为数组
$str_arr=explode(' ',$str);
//var_dump($str_arr);结果无误
//倒序接收
$str_str_new=array_reverse($str_arr);
//数组转为字符串
$str_str_new_str=implode(' ',$str_str_new);
echo '转换前：'.$str."<br/>".'转换后：'.$str_str_new_str.'.';