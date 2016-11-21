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
    
    <div class="banner how">
    </div>
    
    <!-- start of content -->
    <div id="content">
        <!-- start of left column -->
    	<div id="left"><div class="column-in">
    	    <?php //echo $this->element('usermenu'); ?>
            <?php //echo $this->element('category'); ?>
    	</div></div>

        <!-- start of middle column -->
    	<div id="middle"><div class="column-in">
            <?php echo $content_for_layout ?>
    	</div></div>

	    <div class="cleaner">&nbsp;</div>   
    </div>
    
    <div id="bottom">
        <div id="footer">
            <?php echo $this->element('footer');?>
        </div>
    </div>
    
    </div>
    <!-- end of content -->

</div>

</body>
</html>