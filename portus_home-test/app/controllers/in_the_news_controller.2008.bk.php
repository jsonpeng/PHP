<?php 

class InTheNewsController extends AppController {

    var $uses = array('Page', 'DynamicPage');



    function index() {

    	$this->redirect('/in_the_news/news/');

    }

    function news() {}

    function press_releases() {}

    function press_release_ces2008() {}

    function press_release_zwave() {}

        

}

?>