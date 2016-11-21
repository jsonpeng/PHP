<h1>Get Password</h1>
<?
if (isset($registered)) {
    ?>
    <p>
    Your registration information was accepted.
    <br />Click here to go to <a href="/users/">My Account</a>.
    </p>
    <?
} else {
?>

<?php echo $html->formTag('/users/getpassword/') ?>
<table>
    <tr>
        <td style="width: 90px;"><label>First Name</label> <span class="alert">*</span></td>
        <td><?php echo $html->inputTag('User/first_name', array('size' => '40')) ?></td>
        <td><?php echo $html->tagErrorMsg('User/first_name', 'First name is required') ?></td>
    </tr>
    
    <tr>
        <td><label>Last Name</label> <span class="alert">*</span></td>
        <td><?php echo $html->inputTag('User/last_name', array('size' => '20')) ?></td>
        <td><?php echo $html->tagErrorMsg('User/last_name', 'Last name is required') ?></td>
    </tr>
    
     <tr>
        <td><label>Email Address</label> <span class="alert">*</span></td>
        <td><?php echo $html->inputTag('User/email', array('size' => '40')) ?></td>
        <td><?php echo $html->tagErrorMsg('User/email', '') ?></td>
    </tr>
    
    <tr>
        <td colspan="3" style="text-align: center;"><p class="submit"><?php echo $html->submitTag('Get Password') ?></p></td>
    </tr>

</table>

</form>

<?
}
?>