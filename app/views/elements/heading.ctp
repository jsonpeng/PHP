<?php
$sidemenu = $this->requestAction('sidemenu/index'); 

if (isset($this->params['controller'])) {
	$currentModel = $this->params['controller'];
} else {
	$currentModel = 'home';
}

$uri = $_SERVER['REQUEST_URI'];

            foreach ($sidemenu as $v) {
                if (isset($v['uri']) && $uri == $v['uri']) {
                	echo $v['title'];
                }
                if (isset($v['child']) && count($v['child'])) {

                    foreach ($v['child'] as $child) {
		                if ($uri == $child['uri']) {
		                	echo $child['title'];
		                }
		                
		                if (isset($child['child']) && count($child['child'])) {
		
		                    foreach ($child['child'] as $c) {
				                if ($uri == $c['uri']) {
				                	echo $c['title'];
				                }
				            }
		                }		                
                    }
                }
 
            }
            
?>

