<?
$topnav = $this->requestAction('topnav/index'); 

if (isset($this->params['controller'])) {
	$currentModel = $this->params['controller'];
} else {
	$currentModel = 'home';
}

?>
<div id="dropdownwrap">
    <div id="dropdown">
        <ul>
            <?
            foreach ($topnav as $v) {
                ?>
                <li><a href="<?= $v['uri'] ?>" title="<?= $v['title'] ?>" <?= ($currentModel == $v['module']) ? 'class="active"' : '' ?>><span><?= $v['title'] ?></span></a>
                    <?
                    if (isset($v['child']) && count($v['child'])) {
                    ?>
                    <ul class="items">
                        <?
                        foreach ($v['child'] as $child) {
                        ?>   
                            <li><a href="<?= $child['uri'] ?>" title="<?= $child['title'] ?>"><?= $child['title'] ?></a>                 
                        <?
                        }
                        ?>
                        
                    </ul>
                    <?
                    }
                    ?>
                    
                    
                </li>
                <?
            }
            ?>
        </ul>
    </div>
</div>



