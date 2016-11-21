<?php 

class HeaderController extends AppController {

    var $name = 'header';

    var $uses = array('Header', 'Setting');



    function index() {



        $content['Header'] = $this->afterFind($this->Header->findAll("category='header'"));

        $content['Header']['settings'] = $this->Setting->find('list', array('fields' => array('Setting.name', 'Setting.content')));



        if(isset($this->params['requested'])) {

             return $content['Header'];

        }

        $this->set('header', $content['Header']);

    }

    

    function afterFind($results) {



        if (is_array($results)) {

            

            foreach ($results as $key => $val) {

                $filtered[$val['Header']['model']][$val['Header']['name']] = $val['Header']['content'];

            }

        }



        return $filtered;

    }    

}

?> 