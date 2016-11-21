<?
if (isset($this->params['controller'])) {
	$currentModel = $this->params['controller'];
} else {
	$currentModel = '';
}

if ($currentModel == 'products') {
	//echo 'productMiddle';
} else {
	//echo 'middle';
}
echo 'middle';
?>