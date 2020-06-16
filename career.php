<?php
    include 'inc/page_start.php';
    $page="career";
    include("inc/page_header.php");
 ?>
 <link href="css/loading.min.css" rel="stylesheet">
  <style type="text/css">

 #about{    
    background-image: url(images/blog-bg-1.jpg);
 }
 </style>
    <section id="about" class="join-us">
    <div class="container">
            <div class="row">
                <div class="col-sm-12  text-center text-grey"> 
                 <div class="section-header">
                    <h2 class="section-title-grey text-center wow fadeInDown text-grey letter-space m-t-115">Careers</h2>
                    <p class="p-b-60"><span>We treat employees like they make a difference and they actually do</span>
                    </p>
                    
                </div>
                  
                </div>
                 
            </div>
            
        </div>
    <div class="col-sm-12 "><a id="tohash" href="#career-section1"><i class="fa fa-angle-down wow bounceInDown arrow animated" style="visibility: visible; animation-name: bounce; padding-top:50px"></i></a></div> 
       
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
                    <button class="accordion">Position: <?php echo $row['profile']; ?></button>
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
                            <div>
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
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script type="text/javascript">
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