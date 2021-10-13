
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apex Investment Limited - Contact US</title>
    <?php include "include/nav.php";?>
    <?php include "include/contact_form.php";?>

    <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
        <div class="bg_image_holder">
            <img src="img/breadbg.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                        <h4 class="page_title">Contact Us</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                                <li class="breadcrumb-item"><a href="contact.php#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: .breadcrumb_area -->


    <section class="contact--four">

        <div class="list-inline-wrapper p-top-80 p-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="icon-list--three d-flex list--inline">

                            <li class="d-flex align-items-center">
                                <div class="icon"><span><i class="la la-headphones"></i></span></div>
                                <div class="contents">
                                    <h6><?php echo"$phone";?></h6>
                                    <span class="sub-text">Mon-Sat 8am - 18pm</span>
                                </div>
                            </li>


                            <li class="d-flex align-items-center">
                                <div class="icon"><span><i class="la la-envelope"></i></span></div>
                                <div class="contents">
                                    <h6><?php echo"$email4";?>
                                    </h6>
                                    <span class="sub-text">Free enquiry</span>
                                </div>
                            </li>


                            <li class="d-flex align-items-center">
                                <div class="icon"><span><i class="la la-map-marker"></i></span></div>
                                <div class="contents">
                                    <h6>Location</h6>
                                    <span class="sub-text"><?php echo"$location";?></span>
                                </div>
                            </li>

                        </ul><!-- ends: .icon-list--three -->
                    </div>
                </div>
            </div>
        </div><!-- ends: .list-inline -->


        <div class="container p-top-100 p-bottom-110">
            <div class="row">
                <div class="col-lg-6">

                    <div class="form-wrapper">
                        <div class="m-bottom-10">

                            <div class="divider divider-simple text-left">
                                <h3>Let&#39;s Get In Touch</h3>
                            </div>

                        </div>
                        <p class="m-bottom-30">We are available 24/7</p>
                        <form action="contact.php#">
                        <?php echo"$fail";?>
                        <?php echo"$success";?>
                        <?php echo"$first_name_err";?>
                        <div class="form-group">
                            <input name="first_name" type="text" placeholder="Your Name" value="" class="form-control form-outline mb-4" required>
                        </div>
                       
                        <div class="form-group">
                            <input name="phone" type="text" placeholder="Contact Number"  class="form-control form-outline mb-4" required>
                        </div>
                        <?php echo"$email_err";?>
                        <div class="form-group">
                            <input name="email" type="text" placeholder="Enter E-Mail Address"  class="form-control form-outline mb-4" required>
                        </div>
                        <?php echo"$subject_err";?>
                        <div class="form-group">
                            <input name="subject" type="text" placeholder="Write your subject" class="form-control form-outline mb-4" required>
                        </div>

                        <?php echo"$message_err";?>
                        <div class="form-group w-100">
                            <textarea name="message" wrap="off" placeholder="Write your message" class="form-control form-outline mb-4"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send message">
                        </div>
                        </form>
                    </div><!-- end: .form-wrapper -->

                </div><!-- ends: .col-lg-6 -->
                <div class="col-lg-6">
                    <div class="m-bottom-25">

                        <div class="divider divider-simple text-left">
                            <h3>Google Map</h3>
                        </div>

                    </div>
                    <div class="gmap2">

                        <div class="map" id="map3"></div><!-- end: .map -->

                    </div>
                </div><!-- ends: .col-lg-6 -->
            </div>
        </div>
    </section><!-- ends: .contact--four -->


    <?php include "include/footer.php";?>

