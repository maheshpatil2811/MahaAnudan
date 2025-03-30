<?php
include "header.php";
$schemes = $db->select("schemes", "*");
?>
<main class="bg-grey pb-30">
    <div class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white" style="background-image: url(assets/imgs/news/news-17.jpg)">
        <div class="container entry-header-content">
            <h1 class="entry-title mb-50 font-weight-900">
                Get in Touch
            </h1>
        </div>
    </div>
    <div class="container single-content">
        <div class="entry-wraper mt-50">
            
            <form class="form-contact comment_form" action="contact-save.php" method="post" id="commentForm">
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="संपूर्ण नाव" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="address" id="address" type="text" placeholder="पत्ता" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="city" id="city" type="text" placeholder="जिल्हा:" required>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="mobile" id="mobile" type="number" placeholder="मोबाइल क्र."required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <select class='form-control select' name="scheme" required>
                                <option value="">व्यवसायाचे स्वरूप</option>

                                <option value="गोडावून">गोडावून</option>
                                <option value="कोल्ड स्टोरेज">कोल्ड स्टोरेज</option>
                                <option value="शेळीपालन">शेळीपालन</option>
                                <option value="गायी/म्हशी पालन">गायी/म्हशी पालन</option>
                                <option value="मुर्गी पालन">मुर्गी पालन</option>
                                <option value="अन्न प्रक्रिया">अन्न प्रक्रिया</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="इतर"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button button-contactForm">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <!--container-->
</main>
<?php include "footer.php";  ?>