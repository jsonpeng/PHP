<?php
/*
$arr1 = array('a'=>'value1','b'=>'value2');
print_r($arr1);
//exit;
echo "<br>";
echo json_encode($arr1); //���json�ַ���
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
$arr4 = array(0=>'a1',2=>array('a'=>'al'),1=>'ok');//�������飺1���±궼�����֣�2��˳�������0��1��2��3��������ȥ
print_r($arr3);
echo "<br>";
echo json_encode($arr3);//���json����ʱ�����json�൱��php��������һ���ַ���
echo "<br>";
print_r($arr4);
echo "<br>";
echo json_encode($arr4);
echo "<br>";
exit;
*/
/*
$data = new stdclass();//����һ������
$data->name = array('a'=>'value1','b'=>'value2');
$data->str = array(5,6,7);
print_r($data);
echo "<br>";
//exit;
echo json_encode($data);
exit;
*/
/*
//��Ŀ:����������ת��Ϊjson
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
//['a',{},'']//�����ַ���������Ҫת�������Ҫת
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
<!--���arr5��arr6��arr7��json����ͨ��js����json-->

<script>
//var str = document.body.innerHTML;
var str = '{"name":"sky","age":27,"email":"sky@dodi.cn"}';
//alert(str);
var json = eval('('+str+')');
json['email'] = 123;
alert(json['email']);//js�Ķ���Ҳ����ʹ��������ʽ����/д�룬������������ʽһ���������飬�Ƕ���
for(key in json){
	//alert(json[key]);//json[name] json[age]
	
}
</script>








