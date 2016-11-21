<?php 

class SidemenuController extends AppController {

    var $name = 'sidemenu';



    function index() {



        $url = $this->params['url']['url'];

        if (substr($url, -1, 1) != '/') {

            $url .= '/';

        }



		$parts = explode('/', $url);

		

		$module = $parts[0];

        



        $content = $this->Sidemenu->findAll("uri like '/$module%'", null, 'position', null, null, null);



		$tmp = array();

		foreach ($content as $v) {

			$tmp[$v['Sidemenu']['id']] = $v['Sidemenu'];

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

        

        $this->set('sidemenu', $menu);

    }    

}

?> 