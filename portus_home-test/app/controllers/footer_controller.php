<?php 

class FooterController extends AppController {

    var $name = 'footer';

    var $uses = array('Footer', 'Setting');



    function index() {

        $footer = $this->Footer->findByCategory('footer');

        $footer['Footer']['settings'] = $this->Setting->find('list', array('fields' => array('Setting.name', 'Setting.content')));



        $content = $footer['Footer'];

        if(isset($this->params['requested'])) {

             return $content;

        }

        $this->set('footer', $content);

    }



}

?> 