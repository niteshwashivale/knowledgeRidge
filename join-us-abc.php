<?php
    include 'inc/page_start.php';
    $page="join-us";
    include("inc/page_header.php");
 ?>
    <style type="text/css">
        .custom-pad{
            padding-left: 7px;
            padding-right: 7px;
        }
        .asterik{
            position: relative;
            left: 5px;
        }
        .control-label1{
            padding: 0;
            font-size: 14px !important;
            width: 100%;
        }
    </style>
       <script type="text/javascript">
        function sendmail() {
            
            $.ajax({
                url: "api/v1/sendMailToKRWebsite",
                data:$('#main-contact-form').serialize(),
                method: 'POST',
                dataType: 'json',
                success: function (result) {
                    clearForm("Thank you for Contacting Us! We will be in touch");
                    alert('Thank you');
                    window.location = "/"
                    },
                error: function (err) {
                    $('#contact-panel').portlet({ refresh: false, error: "We could not send your message, Please try Again" }); 
              
                }
            })
        }
        function clearForm(msg) { $('#contact-panel').html('<div class="alert alert-success" role="alert">' + msg + '</div>');
        $('#thankyou').modal(); }
    </script>
   <section id="about" class="join-us">
    <div class="container">
            <div class="row">
                <div class="col-sm-12  text-center text-grey"> 
                 <div class="section-header">
                    <h2 class="section-title-grey text-center wow fadeInDown text-grey letter-space m-t-115">JOIN US</h2>
                    <p class="p-b-60"><span>We treat employees like they make a difference and they actually do</span>
                    </p>
                    
                </div>
                  
                </div>
                 
            </div>
            
        </div>
    <div class="col-sm-12 "><a id="tohash" href="#about-section1"><i class="fa fa-angle-down wow bounceInDown arrow animated" style="visibility: visible; animation-name: bounce; padding-top:50px"></i></a></div> 
       
    </section><!--/#main-slider-->
    <section id="career">
        
    </section>

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>