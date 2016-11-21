<?php
class UserPassword extends AppModel {

	var $name = 'UserPassword';
	var $useTable = 'users';
	
	var $validate = array(
		'id' => VALID_NOT_EMPTY,
		'password' => VALID_NOT_EMPTY,
	);
}
?>