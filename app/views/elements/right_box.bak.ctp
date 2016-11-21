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
Contact us for any Media enquires at:<br />
info@portushome.com
</p>
<?
}
elseif ($currentModel == 'partners') {
?>
<h2>Become a Partner</h2>
<p>
Call or email for complete<br />
details about our Portus Partner.
</p>

<p>
T: 650.322.2300<br />
E: partners@portus.com.sg
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
<h2>Portus Headquarters</h2>
<p>
Portus Headquarters
</p>

<p>
Portus Pty Ltd<br />
Level 1, 64 Clarence Street<br />
Sydney NSW 2000<br />
Australia
</p>
<?
}



else {
?>

<h2>Enquiries</h2>
Contact us for any enquires at<br />
info@portushome.com
</p>
<?php
}
?>