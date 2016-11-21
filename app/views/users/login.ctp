
<?php echo $html->formTag('/users/login/') ?>

<div id="login"><h1>Login</h1>
    <div id="error_container">
        <?
        if ($html->tagErrorMsg('User/login', $login_error)) {
        ?>
            	<div id="error_box">
            	    <?php echo $html->tagErrorMsg('User/login', $login_error) ?>
            	</div>
        <?
        }
        ?>	
    </div>
	<div id="login_box">
		<p>
			<label>Email Address:<br />
			<?php echo $html->inputTag('User/email', array('size' => '40')) ?></label>
		</p>
		<p>
			<label>Password:<br />
			<?php echo $html->passwordTag('User/password', array('size' => '20')) ?>
			</label>
		</p>
		<!--<p><label><?php echo $this->Form->checkbox('User/rememberme'); ?> Remember me</label></p> -->
		<p class="submit">
			<?php echo $html->submitTag('Login') ?>
		</p>
    </div>
    </form>
</div>
<p class="submit">
    <?php echo $html->link('Lost your password?', '/users/getpassword/') ?>
</p>
