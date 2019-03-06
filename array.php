<?php
/**
 * Created by PhpStorm.
 * User: songchangchang1296
 * Date: 2019/2/25
 * Time: 13:56
 */

/**
 * 创建一个包含指定元素的数组
 * 参数（规定数组的最低值，规定数组的最高值，规定元素之间的步进制【默认是 1 可选】）
 * 返回值
 */
$array =range('a','d');
//var_dump($array);
//array(4) {
//    [0]=>
//  string(1) "a"
//    [1]=>
//  string(1) "b"
//    [2]=>
//  string(1) "c"
//    [3]=>
//  string(1) "d"
//}

$array2 = range(0,50,10);
//var_dump($array2);
//array(6) {
//    [0]=>
//  int(0)
//  [1]=>
//  int(10)
//  [2]=>
//  int(20)
//  [3]=>
//  int(30)
//  [4]=>
//  int(40)
//  [5]=>
//  int(50)
//}

/**
 * 打乱数组
 * 参数（数组）
 * 返回值 成功时返回true,失败时返回false
 */
$numbers = range(1,5);
shuffle($numbers);
//foreach ($numbers as $number) {
//    echo "$number ";
//}
//2 5 4 3 1

/**
 * 从数组中随机的取出一个或多个单元
 * 参数（数组，取出的个数）
 * 返回
 */
$arrayRand = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$res = array_rand($arrayRand,2);
//var_dump($arrayRand[$res[0]]);
//var_dump($arrayRand[$res[1]]);
//string(7) "Trinity"
//string(4) "Tank"

/**
 * 在数组开头插入一个或多个单元
 * 参数（数组）
 * 返回 新数组元素的个数
 */
$arrayUnshift = array(3,6,8);
$res = array_unshift($arrayUnshift,9,6);
//var_dump($res);
//int(5)

//var_dump($arrayUnshift);
//array(5) {
//    [0]=>
//  int(9)
//  [1]=>
//  int(6)
//  [2]=>
//  int(3)
//  [3]=>
//  int(6)
//  [4]=>
//  int(8)
//}

/**
 * 将数组开头的单元移出数组
 * 参数（数组）
 * 返回 移出的值 如果数组为空 或 不是一个数组 则返回NULL
 */
$arrayShift = array('a' => 'first',5);
$res = array_shift($arrayShift);
//var_dump($res);
//string(5) "first"

/**
 * 将一个或多个单元压入数组的末尾（入栈）
 * 参数（数组）
 * 返回 压入之后的新数组元素的个数
 */
$arrayPush = array('a' => 'first','second',3);
$res = array_push($arrayPush,'four',5);
//var_dump($res);
//int(5);

//var_dump($arrayPush);
//array(5) {
//    ["a"]=>
//  string(5) "first"
//    [0]=>
//  string(6) "second"
//    [1]=>
//  int(3)
//  [2]=>
//  string(4) "four"
//    [3]=>
//  int(5)
//}

/**
 * 弹出数组最后一个单元（出栈）
 * 参数（数组）
 * 返回 数组最后一个值
 */
$arrayPop = array(3,5,'a' => 'first');
$res = array_pop($arrayPop);
//var_dump($res);
//string(5) "first"

/**
 * 计算数组中所有值的乘积
 * 参数（数组）
 * 返回值（以整数或浮点数返回一个数组中所有值的乘积）
 */
$arrayProduct = array(2.3,3,5,6);
$res = array_product($arrayProduct);
//var_dump($res);
//float(207)

/**
 * 以指定长度将一个值填充进数组
 * 参数（需要被填充的原始数组，新数组的长度[size]，将被填充的值）
 * 返回 填充后的新数组（如果size为正，填充到数组的右侧；为负则从左侧开始填补）
 */
$arrayPad = array(12,7,9);
$res = array_pad($arrayPad,5,0);
//var_dump($res);
//array(5) {
//    [0]=>
//  int(12)
//  [1]=>
//  int(7)
//  [2]=>
//  int(9)
//  [3]=>
//  int(0)
//  [4]=>
//  int(0)
//}
$res2 = array_pad($arrayPad,-5,0);
//var_dump($res2);
//array(5) {
//    [0]=>
//  int(0)
//  [1]=>
//  int(0)
//  [2]=>
//  int(12)
//  [3]=>
//  int(7)
//  [4]=>
//  int(9)
//}

/**
 * 合并一个或多个数组
 * 参数（要合并的第一个数组，要合并的数组列表）
 * 返回 合并后的新数组
 */
$arrayMerge1 = array("color" => "red",2,3);
$arrayMerge2 = array("a","b","color" => "green","number" => 2);
$arrayMerge3 = array(1 => "g","b","c");
$res = array_merge($arrayMerge1,$arrayMerge2);
//var_dump($res);
//array(6) {
//    ["color"]=>
//  string(5) "green"
//    [0]=>
//  int(2)
//  [1]=>
//  int(3)
//  [2]=>
//  string(1) "a"
//    [3]=>
//  string(1) "b"
//    ["number"]=>
//  int(2)
//}

$res2 = array_merge($arrayMerge2,$arrayMerge3);
//var_dump($res2);
//array(7) {
//    [0]=>
//  string(1) "a"
//    [1]=>
//  string(1) "b"
//    ["color"]=>
//  string(5) "green"
//    ["number"]=>
//  int(2)
//  [2]=>
//  string(1) "g"    //数字键名将会被重新编号
//    [3]=>
//  string(1) "b"
//    [4]=>
//  string(1) "c"
//}

$res3 = array_merge($arrayMerge1,$arrayMerge2,$arrayMerge3);
//var_dump($res3);
//array(9) {
//    ["color"]=>
//  string(5) "green"
//    [0]=>
//  int(2)
//  [1]=>
//  int(3)
//  [2]=>
//  string(1) "a"
//    [3]=>
//  string(1) "b"
//    ["number"]=>
//  int(2)
//  [4]=>
//  string(1) "g"
//    [5]=>
//  string(1) "b"
//    [6]=>
//  string(1) "c"
//}

$res4 = $arrayMerge1 + $arrayMerge3;   //如果你想完全保留原有数组并只想新的数组附加到后面，用 + 运算符
//var_dump($res4);
//第一个数组的键名将会被保留。
//在两个数组中存在相同的键名时，第一个数组中的同键名的元素将会被保留，第二个数组中的元素将会被忽略
//（比如数组3中的 1 => "g" 因为数组1中有相同的键名，所以这个元素会被忽略）
//array(5) {
//    ["color"]=>
//  string(3) "red"
//    [0]=>
//  int(2)
//  [1]=>
//  int(3)
//  [2]=>
//  string(1) "b"
//    [3]=>
//  string(1) "c"
//}

/**
 * 递归的合并一个或多个数组
 * 参数（要合并的初始数组，数组变量列表）
 * 返回 合并后的新数组
 */
$arrayMergeRecursive1 = array("color" => array("favorite" => "red") , 5);
$arrayMergeRecursive2 = array(10,"color" => array("favorite" => "green","blue"));
$res = array_merge_recursive($arrayMergeRecursive1,$arrayMergeRecursive2);
//var_dump($res);
//array(3) {
//["color"]=>
//  array(2) {
//    ["favorite"]=>
//    array(2) {
//        [0]=>
//      string(3) "red"
//        [1]=>
//      string(5) "green"
//    }
//    [0]=>
//    string(4) "blue"
//  }
//  [0]=>
//  int(5)
//  [1]=>
//  int(10)
//}

/**
 * 查找数组中所有的键名
 * 参数（数组）
 * 返回 数组中所有的键名
 */
$arrayKeys = ['first','s' => 'second'];
$res = array_keys($arrayKeys);
//var_dump($res);
//array(2) {
//    [0]=>
//  int(0)
//  [1]=>
//  string(1) "s"
//}

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
