<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apex Investment Limited - Investment Plans</title>
    <?php include "include/nav.php";?>
     
    
    <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
        <div class="bg_image_holder">
            <img src="img/breadbg.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                        <h4 class="page_title">Pricing Plans</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                                <li class="breadcrumb-item"><a href="pricing.php#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing Plans</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: .breadcrumb_area -->


    <section class="p-top-100 p-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-bottom-65">
                        
    <div class="divider text-center">
        <h1>Investment Plans</h1>
        <p class="mx-auto">Apex Investment Limited has carefully created an investment plan structured with simplicity in mind so that even the newest of investors can interpret and leverage to cultivate respectable profits.</p>
    </div>

                    </div>
                </div>
            </div>
        </div>

        
        <div class="container">
            <div class="row">
            
                <?php      
                           $get_plans = "select * from plans";
                           $run_plans = mysqli_query($connect,$get_plans);
                           while($row_plans = mysqli_fetch_array($run_plans)){
                             $id = $row_plans['id'];
                             $name = $row_plans['name'];
                             $lower = $row_plans['lower_amount'];
                             $upper = $row_plans['upper_amount'];
                             $percentage = $row_plans['percentage'];
                             $day = $row_plans['day'];

                             echo"
                             <div class='col-lg-4 col-md-6'>

                             <div class='pricing pricing--1 shadow-lg-2'>
                                 <div class='pricing__title'>
                                     <h4>$name</h4>
                                     <span>Business Solutions</span>
                                 </div>
         
                                 <div class='pricing__price rounded'>
                                     <p><sup>$</sup>$lower</p>
                                 </div>
         
                                 <div class='pricing__features'>
                                     <ul>
                                         <li>$$lower Minimum Investment</li>
                                         <li>$$upper Maximum Investment</li>
                                         <li>$percentage% Daily for $day Day(s)</li>
                                         <li>Referral Bonus: 5%</li>
                                         <li>Withdraw Type: Instant</li>
                                         <li>24/7 Customer Support</li>
                                     </ul><!-- end: .pricing__features > .pricing -->
                                 </div>
         
                                 <a href='register.php' class='btn btn-outline-secondary'>Invest Now</a>
                             </div><!-- end: .pricing -->
         
                         </div><!-- ends .col-lg-4 -->
                             ";
                           }
                       ?>
             
            </div>
        </div>

    </section>

             
        
    <?php include "include/footer.php";?>

<div class="go_top">
    <span class="la la-angle-up"></span>
</div>

     <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
     <!-- inject:js-->
     <script src="js/plugins.min.js"></script>
     <script src="js/script.min.js"></script>
     <!-- endinject-->
     <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+61 488 894 197", // WhatsApp number
            call_to_action: "Reach us on Whatsapp!", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<!-- Smartsupp Live Chat script -->

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>