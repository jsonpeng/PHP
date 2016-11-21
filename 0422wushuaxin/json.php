<?php
/*
$arr1 = array('a'=>'value1','b'=>'value2');
print_r($arr1);
//exit;
echo "<br>";
echo json_encode($arr1); //输出json字符串
echo "<br>";
//exit;

$arr2 = array(1,2,3);
print_r($arr2);
//exit;
echo "<br>";
echo json_encode($arr2);
echo "<br>";
//exit;

$arr3 = array();
$arr3[0] = array('a'=>'value1','b'=>'value2');
$arr3[1] = array(0=>'value3',1=>'value4');
$arr4 = array(0=>'a1',2=>array('a'=>'al'),1=>'ok');//数字数组：1、下标都是数字，2、顺序必须是0，1，2，3这样排下去
print_r($arr3);
echo "<br>";
echo json_encode($arr3);//输出json，这时候这个json相当于php来讲就是一个字符串
echo "<br>";
print_r($arr4);
echo "<br>";
echo json_encode($arr4);
echo "<br>";
exit;
*/
/*
$data = new stdclass();//生成一个对象
$data->name = array('a'=>'value1','b'=>'value2');
$data->str = array(5,6,7);
print_r($data);
echo "<br>";
//exit;
echo json_encode($data);
exit;
*/
/*
//题目:把以下数组转化为json
$arr5 = array('a',array(),'');
$arr6 = array(
	'name'=>'sky',
	'age'=>27,
	'email'=>'sky@dodi.cn',
);
$arr7 = array(array('a'=>'sky','b'=>'miny'),array('alex',n=>'good'),array('jason','jim'));
*/
/*
$arr5 = array('a',array(),'');
print_r($arr5);
//['a',{},'']//凡是字符串都不需要转，数组就要转
echo "<br>";
$arr6 = array(
	'name'=>'sky',
	'age'=>27,
	'email'=>'sky@dodi.cn',
);
print_r($arr6);
//{"name":"sky","age":"27","email":"sky@dodi.cn"}

echo "<br>";
$arr7 = array(array('a'=>'sky','b'=>'miny'),array('alex','n'=>'good'),array('jason','jim'));
print_r($arr7);
echo "<br>";
//[{'a':'sky','b':'miny'},{'0':'alex','n':'good'},['jason','jim']]
exit;
*/
?>
<!--输出arr5、arr6、arr7的json，并通过js遍历json-->

<script>
//var str = document.body.innerHTML;
var str = '{"name":"sky","age":27,"email":"sky@dodi.cn"}';
//alert(str);
var json = eval('('+str+')');
json['email'] = 123;
alert(json['email']);//js的对象也可以使用数组形式调用/写入，但是这样的形式一定不是数组，是对象
for(key in json){
	//alert(json[key]);//json[name] json[age]
	
}
</script>








