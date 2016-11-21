<h1>Tell A Friend</h1>

<?
if (isset($email_sent)) {
    ?>
    <p>
    Your message is sent to your friend.
    </p>
    <?
} else {
?>

    <?php echo $html->formTag('/tell_a_friend/') ?>
    <p>
    <label for="name">Your Name <span class="alert">*</span></label><br />
    <?php echo $html->inputTag('TellAFriend/name', array('size' => '20')) ?>
    <?php echo $html->tagErrorMsg('TellAFriend/name', 'Name is required') ?>
    </p>
    <p>
    <label for="email">Your Email Address <span class="alert">*</span></label><br />
    <?php echo $html->inputTag('TellAFriend/email', array('size' => '20')) ?>
    <?php echo $html->tagErrorMsg('TellAFriend/email', '') ?>
    </p>    
    <p>
    <label for="email">Your Friend's Email Address <span class="alert">*</span></label><br />
    <?php echo $html->inputTag('TellAFriend/email_friend', array('size' => '20')) ?>
    <?php echo $html->tagErrorMsg('TellAFriend/email_friend', '') ?>
    </p>
    <p>
    <label for="message">Your Message <span class="alert">*</span></label><br />
    <?php echo $html->textarea('TellAFriend/message', array('cols' => '60', 'rows' => '5')) ?>
    <?php echo $html->tagErrorMsg('TellAFriend/message', 'Message is required') ?>
    </p>
    <p class="submit">
    <?php echo $html->submitTag('Send') ?>
    </p>
    <p>Fields marked <span class="alert">*</span> must be filled in.</p>
    </form>

<?
}
?>
