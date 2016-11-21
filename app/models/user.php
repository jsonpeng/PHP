<?php

class User extends AppModel

{

  var $name = 'User';



    var $hasMany = array ('UserBiz' => array(

        'className' => 'UserBiz',

        'conditions'=>'',

        'order'=>'',

        'foreignKey'=>'user_id')

    );



  var $validate = array(

    'first_name' => VALID_NOT_EMPTY,

    'last_name' => VALID_NOT_EMPTY,

    'password' => '/^.{6,40}$/',

    'email' => VALID_EMAIL

  );

}

?>