<?php

class UserProfile extends AppModel

{

  var $name = 'UserProfile';

  var $useTable = 'users';



  var $validate = array(

    'first_name' => VALID_NOT_EMPTY,

    'last_name' => VALID_NOT_EMPTY,

  );

}

?>