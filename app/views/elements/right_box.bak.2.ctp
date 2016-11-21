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
">media@portushome.com</a>
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

<p>
1-408-627-8050<br />
<a href="mailto:partners@portushome.com">partners@portushome.com</a>
</p>
</p>

<h2>Inquiry Form</h2>
<p>
Learn more about Portus<br />
Remote Home Monitoring
</p>

<?
}

elseif ($currentModel == 'about') {
?>
<?
}



else {
?>

<h2>Enquiries</h2>
Contact us with any enquiries at:<br /><a href="mailto:info@portushome.com">info@portushome.com</a>
<?php
}
?>