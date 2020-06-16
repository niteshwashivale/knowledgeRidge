<?php
    include 'inc/page_start.php';
    $page="contact";
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
    <section id="contact">
    <div class="container">
            <div class="row">
                <div class="col-sm-12  col-xs-12 text-center text-white">
                    <h2 class="section-title-grey text-center wow fadeInDown text-white text-uppercase letter-space pad-30">How can we assist you?</h2>
                    <p>Please send us a brief message if you are interested in joining our <br>
                    growing Knowledge Ridge community as a client or as an expert<br>
                    <span class="contact-address">For any other queries, please send us an email: <a style="color: #fff;text-decoration: underline;" href="mailto:info@knowledgeridge.com">info@knowledgeridge.com</a></span>
                    </p>
                </div>
                <div class="row">
                <div class="col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 contact-form">
               <form role="form" autocomplete="off" id="main-contact-form" action="" method="post">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label class="control-label1">Name:<span class="asterik">*</span></label>
                    	<label id="user-label2">
                           <i class="fa fa-user-o" aria-hidden="true"></i>
                            <input type="text" id="user2" name="name" class="form-control" required />
                        </label>                        
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="control-label1">Email:<span class="asterik">*</span></label>
                        <label id="email-label2">
                           <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <input type="email" type="email" name="name" class="form-control"  required />
                        </label> 
                        </div>
                </div>
                    <div class="row">
                    	
                        <div class="col-sm-6 form-group">
                        <label class="control-label1">Contact Number:<span class="asterik">*</span></label>
                        <label id="email-label3">
                           <i class="fa fa-mobile" aria-hidden="true"></i>
                            <input type="tel" name="name" id="name" class="form-control" placeholder="" required />
                        </label>
                        </div>
                         <div class="col-sm-6 form-group">
                        <label class="control-label1">Enquiry Type:<span class="asterik">*</span></label>
                        <select class="form-control" required id="ctype" name="ctype">
                            <option value="">Enquiry Type</option>
                            <option value="Client">Client</option>
                            <option value="Expert">Expert</option>
                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 custom-pad">
                            <label class="control-label1">Message:<span class="asterik">*</span></label>
                            <textarea name="message" id="message" class="form-control" rows="8" required></textarea>
                         </div>
                    </div>
                    
                    
                    <div class="col-sm-12 text-center">
                    <button type="button" onclick="sendmail()" class="btn button contact-button">Submit</button>
                    </div>
                </form> 
                </div>
                </div>
                
                 <div class="col-sm-12  col-xs-12"><a id="tohash" href="#contact2"><i class="fa fa-angle-down wow bounceInDown arrow animated" style="visibility: visible; animation-name: bounce;font-size: 50px;"></i></a></div>
            </div>
            
        </div>
    
       
    </section><!--/#main-slider-->

    <section id="contact2" class="wow fadeIn">
        <div class="container">
            <div class="row">
            	<div class="col-sm-12 col-xs-12 ">
                    <?php   
                        $sql = "SELECT * from tbladdresses where status=1 order by priority asc";
                        $result = $connect->query($sql);
                        if($result->num_rows > 0) { 
                            while($row = $result->fetch_array()) {
                    ?>  
                	<div class="col-sm-4  col-xs-12 text-left "> 
                        <span class="line-img"><img src="images/contact-line.png" class="pull-left pl-20">  </span>             
                        <h2 class="section-title wow fadeInDown contact-text  text-uppercase letter-space mar-t-0 animated" style="visibility: visible; animation-name: fadeInDown;"><?php echo $row['country']; ?></h2>
                        <p class="contact-text"><b><?php echo $row['address_title']; ?></b><br>
                        <?php echo $row['address']; ?>
                        
                        </p>
                    </div>
                <?php }} ?>
                </div>
        </div>
    </section><!--/#cta-->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>