<p>
<?= $content['Contact']['content'] ?>
</p>
<?
if (isset($email_sent)) {
    ?>
    <p>
    Your message is sent to us. Thank you.
    </p>
    <?
} else {
?>

    <p>
    <?= $content['Contact']['content'] ?>
    </p>
    <?php echo $html->formTag('/about/contact/') ?>
    <p>
    <label for="name">Your Name <span class="alert">*</span></label><br />
    <?php echo $html->inputTag('Contact/name', array('size' => '20')) ?>
    <?php echo $html->tagErrorMsg('Contact/name', 'Name is required') ?>
    </p>
    <p>
    <label for="email">Your Email Address <span class="alert">*</span></label><br />
    <?php echo $html->inputTag('Contact/email', array('size' => '20')) ?>
    <?php echo $html->tagErrorMsg('Contact/email', $email_error) ?>
    </p>
    <p>
    <label for="phone">Your Phone Number</label><br />
    <?php echo $html->inputTag('Contact/phone', array('size' => '20')) ?>
    </p>
    <p>
    <label for="message">Your Message <span class="alert">*</span></label><br />
    <?php echo $html->textarea('Contact/message', array('cols' => '56', 'rows' => '5')) ?>
    <?php echo $html->tagErrorMsg('Contact/message', 'Message is required') ?>
    </p>
    <p class="submit">
    <?php echo $html->submitTag('Send') ?>
    </p>
    <p>Fields marked <span class="alert">*</span> must be filled in.</p>
    </form>

<?
}
?>