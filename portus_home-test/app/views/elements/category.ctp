<?
$categories = $this->requestAction('category/index'); 

if (is_array($categories)) {
?>
    <div id="sidemenu">
        <h2>Categories</h2>
        <ul>
<?
    foreach ($categories as $category) {
        ?>
        <li><a href="#"><?= $category['Category']['title'] ?></li></a>
        <?
    }
    ?>
        </ul>
    </div>
    <?
}
?>