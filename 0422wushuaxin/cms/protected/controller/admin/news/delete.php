<?php
$id = !empty($_GET['id'])?$_GET['id']:0;
delete('news',$id);
header('location:'.BASE_URL.'index.php?c=news&a=index&admin=1');