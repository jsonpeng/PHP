<h1>Change Your Details</h1>

<? $session->flash(); ?>
<?php echo $html->formTag('/user_profile/') ?>
<?= $this->Form->hidden('UserProfile/id'); ?>
<table>
    <tr>
        <td style="width: 90px;"><label>First Name</label> <span class="alert">*</span></td>
        <td><?php echo $html->inputTag('UserProfile/first_name', array('size' => '40')) ?></td>
        <td><?php echo $html->tagErrorMsg('UserProfile/first_name', 'First name is required') ?></td>
    </tr>
    
    <tr>
        <td><label>Last Name</label> <span class="alert">*</span></td>
        <td><?php echo $html->inputTag('UserProfile/last_name', array('size' => '20')) ?></td>
        <td><?php echo $html->tagErrorMsg('UserProfile/last_name', 'Last name is required') ?></td>
    </tr>
    
    <tr>
        <td><label>Postcode</label> </td>
        <td><?php echo $html->inputTag('UserProfile/postcode', array('size' => '20')) ?></td>
        <td><?php echo $html->tagErrorMsg('UserProfile/postcode', 'Last name is required') ?></td>
    </tr>    
    
     <tr>
        <td><label>Phone</label></td>
        <td><?php echo $html->inputTag('UserProfile/phone', array('size' => '40')) ?></td>
        <td></td>
    </tr>
    
     <tr>
        <td><label>Mobile</label></td>
        <td><?php echo $html->inputTag('UserProfile/mobile', array('size' => '40')) ?></td>
        <td></td>
    </tr>     
        
    <tr>
        <td colspan="3" style="text-align: center;"><p class="submit"><?php echo $html->submitTag('Save') ?></p></td>
    </tr>

</table>
        <p>Fields marked <span class="alert">*</span> must be filled in.</p>

</form>