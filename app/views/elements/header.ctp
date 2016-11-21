<?
$header = $this->requestAction('header/index'); 
if (isset($this->params['controller'])) {
    $currentModel = ($this->params['controller'] == 'pages') ? 'home' : $this->params['controller'];
} else {
    $currentModel = 'home';
}    
?>
    <title><?= $header['settings']['siteName'] ?> | <?= isset($header[$currentModel]['page_title']) ? $header[$currentModel]['page_title'] : $header['shared']['page_title'] ?></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="Keywords" content="<?= isset($header[$currentModel]['meta_keyword']) ? $header[$currentModel]['meta_keyword'] : $header['shared']['meta_keyword'] ?>" />
    <meta name="Description" content="<?= isset($header[$currentModel]['meta_description']) ? $header[$currentModel]['meta_description'] : $header['shared']['meta_description'] ?>" />
    <meta name="Author" content="PixelStreamStudio.com" />
    <meta name="robots" content="all" />
    <meta name="revisit-after" content="7 days" />
    <meta name="copyright" content="<?= $header['settings']['siteUrl'] ?>" />
    <meta name="distribution" content="Global" />
    <link rel="alternate" href="/rss/news/" title="News RSS Feed" type="application/rss+xml" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen, projection" />
    <script type="text/javascript" src="/js/menu.js"></script>