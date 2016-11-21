<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $this->element('header');?>
</head>
<body>
<div id="container">
    <div id="masthead">
        <div id="wrap">
            <div id="logo">
                <h1 class="header"><a href="/" title=""><span></span></a></h1>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    
    <?php echo $this->element('topnav'); ?>
    <?php echo $this->element('nav_right'); ?>
    <div class="clear"></div>
    
    <?php echo $this->element('banner'); ?>
    
    <!-- start of content -->
    <div id="content">
        <!-- start of right column -->
        <div id="right"><div class="column-in">
		<?php echo $this->element('right_box'); ?>
        </div></div>
            
    	<div id="leftmiddle">
	    	<h1 id="contentTitle">
	    	<?php echo $this->element('heading'); ?>
	    	</h1>
	        <div id="left"><div class="column-in">
	            <?php echo $this->element('sidemenu'); ?>
	        </div></div>
	
	        <!-- start of middle column -->
	        <div id="<?php echo $this->element('column_class'); ?>"><div class="column-in">
	            <?php echo $content_for_layout ?>
	        </div></div>
        

        </div>
        
    	<div class="clear"></div>
    	<div id="contentBottom"></div>

    </div>
    
    
    <div id="bottom">
    	<?php echo $this->element('default_footer'); ?>
    </div>
    
    </div>
    <!-- end of content -->

</div>

</body>
</html>