<?php

class Contact extends AppModel {

    var $name = 'Contact';

    var $useTable = 'pages';

   

    var $validate = array(

        'name' => VALID_NOT_EMPTY,

        'email' => VALID_EMAIL,

        'number' => VALID_NUMBER,

        'message' => VALID_NOT_EMPTY,

    );   

    

}

?>