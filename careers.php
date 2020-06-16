<?php
    include 'inc/page_start.php';
    $page="career";
    include("inc/page_header.php");
 ?>
 <link href="css/loading.min.css" rel="stylesheet">
  <style type="text/css">

 #about{    
    background-image: url(images/blog-bg-1.jpg);
    padding: 70px 0 90px;
 }
 .testimonial-slider{
     max-width: 420px;
    margin: 0 auto;
    min-height: 150px;
}
.testomony:before{
    left: 0px;
    top: -19px;
}
.testomony:after{
    right: -45px;
    bottom: -77px;
}
@media (max-width: 990px){
    .testomony:after{
        right: 0;
        bottom: -56px;
    }
}
 </style>
    <section id="about" class="join-us">
    <div class="container">
            <div class="row">
                <div class="col-sm-12  text-center text-grey"> 
                 <div class="section-header">
                    <h2 class="section-title-grey text-center wow fadeInDown text-grey letter-space m-t-115">Careers</h2>
                    <p class="p-b-60" style="display:none"><span>We treat employees like they make a difference and they actually do</span>
                    </p>
                    <div class="testimonial-slider">
                     
                              <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p> Excellent Work Culture & Supportive Management</p>
                                </div>
                              </div>
                              <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p> Comfortable work environment & wonderful people to work with</p>
                                </div>
                              </div>
                              <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p> Plethora of unique growth opportunities, On-the-Job Training, Diverse responsibilities</p>
                                </div>
                              </div>
                              <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p> Exposure to real time learning & industry challenges</p>
                                </div>
                              </div>
                              <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p> High Performance Culture & High Growth Potential</p>
                                </div>
                              </div>
                              <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p>Excellent work ethics, collaborative team, helpful management, very good mentorship and exhibiting complete transparency to their employees</p>
                                </div>
                              </div>
                              <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p> Company offers flexible timing, friendly environment, opportunity to learn and grow & open door policy</p>
                                </div>
                              </div>
                               <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p> Work Life Harmony</p>
                                </div>
                              </div>
                              <div class="slide-item">
                                <div class="intro-text"> 
                                    <div class="slide-text" style="display:none">
                                        
                                    </div>
                                </div>  
                                <div class="testomony"> 
                                    <p> People’s company with great vision. Lots of growth opportunities. Excellent management</p>
                                </div>
                              </div>
                         
                </div>
                </div>
                  
                </div>
                 
            </div>
            
        </div>
    <div class="col-sm-12 "><a id="tohash" href="#career-section1"><i class="fa fa-angle-down wow bounceInDown arrow animated" style="visibility: visible; animation-name: bounce;"></i></a></div> 
       
    </section><!--/#main-slider-->


    <!--accordian section-->
    <section id="career-section1" class="wow fadeIn">
        <div class="container">
            <div class="row">

                <div class="col-sm-12  text-center text-grey"> 
                    <div class="section-header">
                        <h2 class="section-title-grey text-center wow fadeInDown text-grey letter-space m-t-115">CURRENT OPENINGS
                        </h2>
                    </div>
                </div>

                <div class="col-sm-12 text-white accordian-panel">
                     <?php
                        $sql = "SELECT * FROM careers where status=1"; 
                        $result = $connect->query($sql);
                        $i=1;
                        if($result->num_rows > 0) {
                        while($row = $result->fetch_array()) {
                    ?>
                    <button class="accordion">Position: <?php echo $row['profile']; ?> - <?php echo $row['location']; ?></button>
                        <div class="panel">
                        <div class="jobcontent">
                             <p class="career-text"><b>Report To:</b> <?php echo $row['report_to']; ?></p>
                             <p class="career-text"><b>Qualification:</b> <?php echo $row['education']; ?></p>
                             <p class="career-text"><b>Experience:</b> <?php echo $row['exp']; ?></p>
                             <p class="career-text"><b>Job Overview:</b><br>
                             <?php echo $row['job_overview']; ?>
                             </p>
                             <p class="career-text"><b>Responsibilities &amp; Duties:</b><br>
                             <?php echo $row['responsibilities']; ?>
                             </p>
                             <p class="career-text"><b>Professional Skills:</b><br>
                             <?php echo $row['professional_skill']; ?>
                             </p>
                                        <div  class="apply-now">
                                            <a id="tohash<?php echo $i; ?>" href="#form-section" data-position="<?php echo $row['profile']; ?>">
                                            Apply Now
                                                
                                            </a> 
                                        </div>
                                  </div>
                              </div>
                            <?php $i++; }} ?>
                        </div>


                 </div>

            </div>
        </div>
    </section>

    <!--Form section-->

       <section id="form-section"  class="wow fadeIn">
        <div class="container">
            <div class="row">

                <div class="section-header">
                        <h2 class="section-title-grey text-center wow fadeInDown text-grey letter-space m-t-115">Application Form
                        </h2>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form class="text-center career-form" id="resume"  enctype="multipart/form-data" method="POST">
                         <div class="form-group">
                            <div>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="text" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                        <div>
                        <select name="position">
                            <option value="">Position</option>
                         <?php
                        $sql = "SELECT * FROM careers where status=1"; 
                        $result = $connect->query($sql);
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_array()) {
                                echo "<option value='".$row['id']."'>".$row['profile']."</option>";
                            }
                        }
                    ?>
                            
                          
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <textarea placeholder="Message" name="message" spellcheck="false" style="resize: none"></textarea> 
                        </div>
                        <div class="form-group">
                            <div  style="text-align:left">
                                <label>Upload CV/Resume</label>
                                <input type="file" name="resume" class="form-control-file">
                            </div>
                      </div>
                        <div class="form-group">
                            <div>
                                <button  type=submit class="applybtn ld-ext-right">Send<div class="ld  ld-ring ld-spin">
</div></button>
                            </div>
                        </div>
                        <div id="addapplication">
                          
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>

            </div>
        </div>
        </section>
        

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

   

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<script src="admin/js/plugins.js"></script>
<script src="https://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script type="text/javascript">
        $(".testimonial-slider").slick({
            dots: !0,
            speed: 300,
            autoplay: 1,
            slidesToShow: 1,
            loop: !0,
            initialSlide: 0,
            draggable: !0,
            adaptiveHeight: !0,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    infinite: !0
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    dots: !0
                }
            }, {
                breakpoint: 300,
                settings: {
                    slidesToShow: 1,
                    dots: !0
                }
            }]
        });   
    jQuery.validator.addMethod("filesize_max", function(value, element, param) {
    var isOptional = this.optional(element),
        file;
    
    if(isOptional) {
        return isOptional;
    }
    
    if ($(element).attr("type") === "file") {
        
        if (element.files && element.files.length) {
            
            file = element.files[0];            
            return ( file.size && file.size <= param ); 
        }
    }
    return false;
}, "File size is too large.");
</script>
<script src="js/career.js"></script>
<?php include 'inc/template_end.php'; ?>