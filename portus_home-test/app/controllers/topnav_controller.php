<?php 

class TopnavController extends AppController {

    var $name = 'topnav';



    function index() {

        $content = $this->Topnav->findAll(null, null, 'position', null, null, null);



		$tmp = array();

		foreach ($content as $v) {

			$tmp[$v['Topnav']['id']] = $v['Topnav'];

		}

		$content = $tmp;

		

        if (is_array($content)) {

            $menu = array();

            foreach ($content as $k => $v) {

                if ($v['parent'] != 0) {

                	if ($content[$v['parent']]['parent'] != 0) {

                		$menu[$content[$v['parent']]['parent']]['child'][$v['parent']]['child'][$v['id']] = $v; 

                	} else {

                    	$menu[$v['parent']]['child'][$v['id']] = $v; 

                    }                

                } else {

                    $menu[$v['id']] = $v;

                }            

            }     

        

        }



        if(isset($this->params['requested'])) {

             return $menu;

        }

        

        $this->set('topnav', $menu);

    }    

}

?> 