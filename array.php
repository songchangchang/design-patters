<?php
/**
 * Created by PhpStorm.
 * User: songchangchang1296
 * Date: 2019/2/25
 * Time: 13:56
 */

/**
 * 检查数组里是否有指定的键名或索引
 * 参数（要检查的键，数组）
 * 返回 TRUE 或 FALSE
 */
$arrayKeyExists = ['a' => 'animal','b' => 'blue', 'green'];
$res = array_key_exists(0,$arrayKeyExists);
//var_dump($res);
//bool(true)

/**
 * 计算数组的交集
 * 参数（数组1，数组2）
 * 返回所有出现在 数组1 中并同时出现在数组2 中的值
 */
$arrayIntersect1 = ['a' => 'animal','b' => 'blue' , 'green'];
$arrayIntersect2 = ['a' => 'animal','blue' , 'g' => 'green'];
$res = array_intersect($arrayIntersect1,$arrayIntersect2);
//var_dump($res);
//array(3) {
//    ["a"]=>
//  string(6) "animal"
//    ["b"]=>
//  string(4) "blue"
//    [0]=>
//  string(5) "green"
//}

/**
 * 使用键名比较计算数组的交集
 * 参数（数组1，数组2）
 * 返回所有出现在 数组1 中并同时出现在 数组2 中的键名 的值
 */
$arrayIntersectKey1 = ['a' => 'animal','b' => 'blue' , 'green'];
$arrayIntersectKey2 = ['a' => 'animal','blue' , 'g' => 'green'];
$res = array_intersect_key($arrayIntersectKey1,$arrayIntersectKey2);
//var_dump($res);
//array(2) {
//    ["a"]=>
//  string(6) "animal"
//    [0]=>
//  string(5) "green"
//}

/**
 * 带索引检查计算数组中的交集
 * 参数（数组1，数组2）
 * 返回所有在 数组1 中同时在数组2中的值
 */
$arrayIntersectAssoc1 = ['a' => 'animal','b' => 'blue' , 'green'];
$arrayIntersectAssoc2 = ['a' => 'animal','blue' , 'g' => 'green'];
$res = array_intersect_assoc($arrayIntersectAssoc1,$arrayIntersectAssoc2);
//var_dump($res);
//array(1) {
//    ["a"]=>
//  string(6) "animal"
//}

/**
 * 交换数组中的键和值
 * 参数（数组）
 * 返回交换后的数组
 */
$arrayFlip = ['a' => 'animal', 'b' => 'blue', 'red'];
$res = array_flip($arrayFlip);
//var_dump($res);
//array(3) {
//    ["animal"]=>
//  string(1) "a"
//    ["blue"]=>
//  string(1) "b"
//    ["red"]=>
//  int(0)
//}

/**
 * 用给定的值填充数组
 * 参数（返回的数组的第一个索引值[必须是整数]，插入元素的数量[必须大于0]，填充的值）
 * 返回填充后的数组
 */
$arrayFill = array_fill(5,3,'哈哈');
//var_dump($arrayFill);
//array(3) {
//    [5]=>
//  string(6) "哈哈"
//    [6]=>
//  string(6) "哈哈"
//    [7]=>
//  string(6) "哈哈"
//}

/**
 * 使用指定的键和值填充数组
 * 参数（键【数组】，值）
 * 返回填充后的新数组
 */
$arrayFillKeys = ['foo','a','b'];
$res = array_fill_keys($arrayFillKeys,'banana');
//var_dump($res);
//array(3) {
//    ["foo"]=>
//  string(6) "banana"
//    ["a"]=>
//  string(6) "banana"
//    ["b"]=>
//  string(6) "banana"
//}

/**
 * 计算数组的差集
 * 返回在第一个数组中不在其他数组中的值
 */
$arrayDiff1 = ['a' => 'blue', 'b' => 'red', 'green'];
$arrayDiff2 = ['blue', 'b' => 'red', ];
$res = array_diff($arrayDiff1,$arrayDiff2);
//var_dump($res);
//array(1) {
//    [0]=>
//  string(5) "green"
//}

/**
 * 使用键名比较数组的差集
 * 参数 两个数组
 * 返回两个数组的差集 （返回在第一个数组中存在而在其他数组中不存在的键名 的值）
 */
$arrayDiffKey1 = ['a' => 'blue', 'b' => 'red', 'c' => 'green'];
$arrayDiffKey2 = ['b' => 'blue', 'g' => 'green'];
$res = array_diff_key($arrayDiffKey1,$arrayDiffKey2);
//var_dump($res);
//array(2) {
//    ["a"]=>
//  string(4) "blue"
//    ["c"]=>
//  string(5) "green"
//}


/**
 * 带索引检查计算数组的差集
 * 参数 两个数组
 * 带索引返回两个数组的差集（比对的时候以第一个数组为主 两个数组的键和值都要相等）
 */
$arrayDiffAssoc1 = ['a' => 'blue','b' => 'red','green'];
$arrayDiffAssoc2 = ['green','a' => 'yellow'];
$res = array_diff_assoc($arrayDiffAssoc1,$arrayDiffAssoc2);
//var_dump($res);

//array(2) {
//    ["a"]=>
//  string(4) "blue"
//    ["b"]=>
//  string(3) "red"
//}


/**
 * 统计数组中各个值的个数
 * 返回值为数组
 */
$arrayCountValues = [1,2,3,'a',2,3,'1'];
$res = array_count_values($arrayCountValues);  // 1有2个 2有2个 3有2个 a有1个
//var_dump($res);
//array(4) {
//    [1]=>
//  int(2)
//  [2]=>
//  int(2)
//  [3]=>
//  int(2)
//  ["a"]=>
//  int(1)
//}

/**
 * 将一个数组分割成多个
 * 参数（要分割的数组，以几个为单元为一个新数组，分割是否保留原来的键名）
 * 返回值 多维数组
 */
$arrayChunk = ['a','b','c','d','e'];
$res = array_chunk($arrayChunk, 2);
$res = array_chunk($arrayChunk, 2,true);
//var_dump($res);
