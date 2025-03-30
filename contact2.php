<?php
include 'header.php';
$schemes = $db->select("schemes", "*");
?>
<div id="main">
    <div class='container'>
        <div class='row'>
            <div class='content span8 blog-style'>
                <div class='row'>
                    <div class='span8 contact-page'>
                        <div class='box-title'>
                            <h2>Contact Us</h2>
                            <div class='title-line'></div>
                        </div>
                        <div class="contact-form">
                            <p>Have any questions or just want to let us know what you think? Feel free to write us!</p>

                            <div class="alert alert-error">
                                <div class="inner-alert">
                                    <span class="alert-title">ERROR:</span> The form wasn't submitted, please try again!
                                </div>
                            </div>

                            <div class="alert alert-success">
                                <div class="inner-alert">
                                    <span class="alert-title">Success:</span> Mail sent! We'll get back to you as soon as possible!
                                </div>
                            </div>

                            <form action="contact-save.php" method="POST" >
                                <label>Scheme</label>
                                <select class='span5 scheme-input' name="scheme" required>
                                    <option value="">Select Scheme</option>
                                    <?php foreach ($schemes as $scheme) { ?>
                                        <option value="<?php echo $scheme['id']; ?>"><?php echo $scheme['title']; ?></option>
                                    <?php } ?>
                                </select>
                                <label>Name</label>
                                <input id="name" type="text" name='name' placeholder="Your name ... " class='span5 contact-input' required />
                                <label>Mobile No</label>
                                <input type="number" name='mobile' placeholder="Your Mobile No ... " class='span5 contact-input' required />
                                <label>Email</label>
                                <input id="email" type="email" name='email' placeholder="Your email ... " class='span5 contact-input' required />
                                <label>Message</label>
                                <textarea id="message" name="message" rows="10" class='span7 contact-input' placeholder="Your message ... " required></textarea>
                                <input  type="submit" class='btn btn-custom btn-red btn-medium btn-large-text' />
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
<?php include 'footer.php'; ?>