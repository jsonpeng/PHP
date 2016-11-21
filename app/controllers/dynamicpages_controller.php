<?php

class DynamicPagesController extends AppController {

    

    function index() {



        $url = $this->params['url'];

        if (substr($url, -1, 1) != '/') {

            $url .= '/';

        }

        

        $content = $this->DynamicPage->find("category='page' AND url='$url'");



        if(isset($this->params['requested'])) {

             return $content;

        }

        

        if (!empty($content)) {

            $this->set('content', $content['DynamicPage']);

            $this->params['controller'] = substr($url, 0, strpos($url, '/'));

            //echo $this->params['controller'];

        } else {

            //404 action

            $this->set('url', $this->params['url']);

        }       

        

    }

   

    function beforeFilter() {

        

        $username = $this->Session->read('user.email');

        if ($username) {

            $this->set('username', $username);

        }

        

    }   

}

?>