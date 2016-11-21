<?php 

class HowController extends AppController {

    var $uses = array('Page', 'DynamicPage');



    function index() {

    	$this->redirect('/how/installation/');

    }

    

    function installation() {

    }

    function common_solutions() {

    	$this->redirect('/how/family/');

    }

    function faqs() {}

    function family() {}

    function property() {}

    function energy() {}    

        

}

?>