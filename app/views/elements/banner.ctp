<?php

if (isset($this->params['controller'])) {
	$currentModel = $this->params['controller'];
} else {
	$currentModel = 'home';
}
?>

    <div class="banner <?php echo $currentModel ?>">
    </div>