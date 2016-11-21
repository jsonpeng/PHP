<?php

class Profile extends AppModel

{

  var $name = 'User';



  var $validate = array(

    'first_name' => VALID_NOT_EMPTY,

    'last_name' => VALID_NOT_EMPTY,

    'password' => '/^.{6,40}$/',

    'email' => VALID_EMAIL

  );

}

?>