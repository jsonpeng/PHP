<?php

class PagesController extends AppController {

    

    var $layout = 'home';

    

    function display() {

        $this->pageTitle = 'Portus';

    }

   

    function beforeFilter() {

        $username = $this->Session->read('user.email');

        if ($username) {

            $this->set('username', $username);

        }

    }   

    

}

?>