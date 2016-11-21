
<?
if (isset($email_sent)) {
    ?>
    <p>
    Your message is sent to us. Thank you.
    </p>
    <?
} else {
?>

    <?php echo $html->formTag('/partners/inquiry_form/') ?>
	<table style="margin-left: 100px;">
		<tr>
			<td>
				First Name <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/first_name', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/first_name', 'First Name is required') ?>
			</td>
	    </tr>
		<tr>
			<td>
				Last Name <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/last_name', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/last_name', 'Last Name is required') ?>
			</td>
	    </tr>		
		
		<tr>
			<td>
				Title <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/title', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/title', 'Title is required') ?>
			</td>
	    </tr>		

		<tr>
			<td>
				Company <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/company', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/company', 'Company name is required') ?>
			</td>
	    </tr>	
		<tr>
			<td>
				Email <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/email', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/email', $email_error) ?>
			</td>
	    </tr>		    
		<tr>
			<td>
				Phone <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/phone', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/phone', 'Phone is required') ?>
			</td>
	    </tr>	    

		<tr>
			<td>
				City
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/city', array('size' => '20')) ?>
			</td>
			<td>
			</td>
	    </tr>	  
		<tr>
			<td>
				State
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/state', array('size' => '20')) ?>
			</td>
			<td>
			</td>
	    </tr>	  
	    
		<tr>
			<td>
				Zip <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/zip', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/zip', 'Zip code is required') ?>
			</td>
	    </tr>	
		<tr>
			<td>
				Business Type <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/business_type', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/business_type', 'Business Type is required') ?>
			</td>
	    </tr>	
		<tr>
			<td>
				Areas of Interest <span class="alert">*</span>
			</td>	
			<td>
			    <?php echo $html->inputTag('Partners/interest', array('size' => '20')) ?>
			</td>
			<td>
			    <?php echo $html->tagErrorMsg('Partners/interest', 'Areas of Interest is required') ?>
			</td>
	    </tr>		    	    	    
	    
	    <tr>
	    	<td colspan="3">
			    <p class="submit">
			    <?php echo $html->submitTag('Send') ?>
			    </p>	    	
	    	</td>
	    </tr>
	    
	    <tr>
	    	<td colspan="3">
	    		Fields marked <span class="alert">*</span> must be filled in.
	    	</td>
	    </tr>	    	    		
	</table>

    </form>

<?
}
?>