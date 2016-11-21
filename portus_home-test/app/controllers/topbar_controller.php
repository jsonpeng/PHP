<?php 

class TopbarController extends AppController {

    var $name = 'topbar';



    function index() {

   

        $content = ''; 

        if(isset($this->params['requested'])) {

             return $content;

        }

        $this->set('topbar', $content);

    }   

    

    function beforeFilter() {

        $username = $this->Session->read('user.email');

        if ($username) {

            $this->set('username', $username);

        }

    }

    

}

?> 