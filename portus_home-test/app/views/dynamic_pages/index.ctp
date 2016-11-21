<?
if (!empty($content)) {
?>
    <h1><?= $content['title'] ?></h1>
    
    <p>
    <?= $content['content'] ?>
    </p>
<?
} else {
?>
<h1>404 Page Not Found</h1>

<p>
<p>The page/file you requested (<a href="/<?= $url ?>">/<?= $url ?></a>) is not available on this server. 
The link you followed may be out of date, or maybe the URL was mistyped.
<p/>
<p>
Please double-check the web address you are trying to reach. 
Also, please keep in mind that the URL is case-sensitive (i.e. http://www.portus.com/search/ is not the same as http://www.portus.com/Search/ or http://www.portus.com/SEARCH/). 
For best results, try typing the URL in all lower-case letters.
</p>
<!--
If you believe that this page should be here, please report a broken link by clicking on this button. 

<form action="/reportlink/" method="post">
    <p class="submit">
		<input type="submit" value="Report Broken Link">
		<input type="hidden" name="requested_url" value="/<?= $url ?>">
	</p>
</form>
-->

<?
}
?>