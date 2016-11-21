<?php
$sidemenu = $this->requestAction('sidemenu/index'); 

$uri = $_SERVER['REQUEST_URI'];
?>
			<div id="sidemenu">
			<ul>
            <?
            foreach ($sidemenu as $v) {
            	if (isset($v['uri'])) {
                ?>
                    <?
                    if (isset($v['child']) && count($v['child'])) {
                    ?>
                        <?
                        foreach ($v['child'] as $child) {
                        ?>   
                            <li><a href="<?= $child['uri'] ?>" title="<?= $child['title'] ?>" <?= ($uri == $child['uri']) ? 'class="active"' : '' ?>><span><?= $child['title'] ?></span></a>                 
                        <?

		                    if (isset($child['child']) && count($child['child'])) {
		                    ?>
		                    	<ul>
		                        <?
		                        foreach ($child['child'] as $c) {
		                        ?>   
		                            <li><a href="<?= $c['uri'] ?>" title="<?= $c['title'] ?>" <?= ($uri == $c['uri']) ? 'class="active"' : '' ?>><span><?= $c['title'] ?></span></a>                 
		                        <?
		                        
		                        
		                        
		                        }
		                        ?>
		                        </ul>
		                    <?
		                    }
                        
                        
                        }
                        ?>
                        
                    <?
                    }
                    ?>
                </li>
                <?
                }
            }
            ?>
            </ul>
            </div>
