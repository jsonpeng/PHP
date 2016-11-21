<h1>Change Password</h1>
<? //$session->flash(); ?>
<?php echo $html->formTag('/user_password/') ?>
<?= $this->Form->hidden('UserPassword/id'); ?>
<table>
     <tr>
        <td><label>Password</label></td>
        <td><?php echo $html->passwordTag('UserPassword/password', array('size' => '20')) ?></td>
        <td><?php echo $error_password ?></td>
    </tr>
     <tr>
        <td><label>Confirm Password</label></td>
        <td><?php echo $html->passwordTag('UserPassword/confirm_password', array('size' => '20')) ?></td>
        <td><?php echo $error_confirm_password ?></td>
    </tr>            
    <tr>
        <td colspan="3" style="text-align: center;"><p class="submit"><?php echo $html->submitTag('Save') ?></p></td>
    </tr>

</table>

</form>