<?php

class Partners extends AppModel {

    var $name = 'Contact';

    var $useTable = 'pages';

   

    var $validate = array(

        'first_name' => VALID_NOT_EMPTY,

        'last_name' => VALID_NOT_EMPTY,

        'title' => VALID_NOT_EMPTY,

        'company' => VALID_NOT_EMPTY,

        'business_type' => VALID_NOT_EMPTY,

        'interest' => VALID_NOT_EMPTY,

        'zip' => VALID_NUMBER,

        'email' => VALID_EMAIL,

        'phone' => VALID_NUMBER,

    );   

    

}

?>