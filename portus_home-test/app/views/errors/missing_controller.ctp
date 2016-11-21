<?php
class MissingController extends AppController {
    var $name = 'missing';

    function missingController() {
    exit;
        $content = $this->Topnav->findAll(null, null, 'position', null, null, null);
        
        if(isset($this->params['requested'])) {
             return $content;
        }
        $this->set('topnav', $content);
    }    
}

?>
<h1>404 Page Not Found</h1>

<p>
<p>The page/file you requested (<a href="<?= $url ?>"><?= $url ?></a>) is not available on this server. 
The link you followed may be out of date, or maybe the URL was mistyped.
<p/>
<p>
Please double-check the web address you are trying to reach. 
Also, please keep in mind that the URL is case-sensitive (i.e. http://www.beautylink.com.au/search/ is not the same as http://www.beautylink.com.au/Search/ or http://www.beautylink.com.au/SEARCH/). 
For best results, try typing the URL in all lower-case letters.
</p>
If you believe that this page should be here, please report a broken link by clicking on this button. 
<p class="simplecenter">
<form action="/reportlink/" method="post">
		<input class="btn" type="submit" value="Report Broken Link">
		<input type="hidden" name="requested_url" value="<?= $url ?>">
</form>
</p>