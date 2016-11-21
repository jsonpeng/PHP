<?php
if (isset($this->params['controller'])) {
	$currentModel = $this->params['controller'];
} else {
	$currentModel = 'home';
}

if ($currentModel == 'in_the_news') {
?>
<h2>Media Enquiries</h2>
<p>
Contact us with any media enquiries at:<br />
<a href="mailto:media@portushome.com
" style="text-decoration:none">media@portushome.com</a>
</p>
<?
}
elseif ($currentModel == 'partners') {
?>
<h2>Become a Partner</h2>
<p>
Please call or email for
details about our Portus Partner program.
</p>

<p> 408-627-8050<br />
<a href="mailto:partners@portushome.com" style="text-decoration:none">partners@portushome.com</a>
</p>
<p></p>
<br>

<h2>Inquiry Form</h2>
<p>
<a href="/partners/inquiry_form/">
Learn more about Portus<br />
Remote Home Monitoring</a>
</p>

<?
}


elseif ($currentModel == 'about') {
?>
<h2>Contact Information</h2>
<b>Business Development:</b>
<p>
<a href="mailto:bizdev@portushome.com
" style="text-decoration:none">bizdev@portushome.com</a></p>

<b>Press:</b>
<p>
<a href="mailto:media@portushome.com" style="text-decoration:none">media@portushome.com</a>
</p>

<b>Sales Inquiries:</b>
<p>
<a href="mailto:sales@portushome.com" style="text-decoration:none">sales@portushome.com</a>
</p>

<b>Support Inquiries:</b>
<p>
<a href="mailto:support@portushome.com" style="text-decoration:none">support@portushome.com</a>
</p>

<?
}


else {
?>

<?php
}
?>