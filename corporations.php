<?php
    include 'inc/page_start.php';
    $page="clients";
    include("inc/page_header.php");
 ?>
 <style>
 html {
  scroll-behavior: smooth;
}
.intro{
    margin-top: 30px;
    max-width: 975px;
}
.case1, .case2, .case3{
    border-width: 3px;
    background-attachment: unset;
}
.lborder{
    border: 0;
}
.p-t-b-30 {
    padding: 30px 20px 25px 30px;
}
.lborder ul{
    font-size: 16px;
}
.lborder ul li{
    margin-bottom: 5px;
    font-weight: 100;
}
.intro ul{
    font-size: 16px;
}
.intro ul li{
    margin-bottom: 5px;
    font-weight: 100
}
.case1 {
    padding: 129px 55px 500px !important;
    background-image: url(images/case/cop/cop1.jpg);
}
.case2 {
    padding: 60px 55px 570px !important;
    background-image: url(images/case/cop/cop2.jpg);
}
.rightdiv .p-t-b-30{
    padding: 30px 60px 25px 0px;
}
.use-case-content{
    margin-bottom: 30px;
}
.case2{
    border-right: 0;
    border-left: 3px solid #f7931e;
}
.case3{
    padding: 60px 55px 630px !important;
    background-image: url(images/case/cop/cop3.jpg);
}
.ar{
    top:35%;
}
.ar p{
        max-width: 750px;
}
.arrow{
    top:-300px;
}
.use-case-content .about-text{
    text-align: left;
}
.use-case-content span{
    margin-bottom: 8px;
    display: block;
    font-size: 16px;
}
.use-case-content .about-text{
    text-align: left;
}
@media only screen 
  and (min-device-width: 1024px) 
  and (max-device-width: 1366px) 
  and (-webkit-min-device-pixel-ratio: 2) 
  and (orientation: landscape){
    .arrow {
        top: -150px;
    }
    .ar {
        top: 25%;
    }
    .case1{
            padding: 129px 24px 350px !important;
    }
    .case2{
            padding: 60px 24px 550px !important;
    }
    .case3{
            padding: 60px 24px 670px !important
    }
  }
 @media only screen 
        and (min-device-width : 768px) 
        and (max-device-width : 1024px) 
        and (orientation : portrait) { 
    .ar {
        top: 10%;
    }
    .arrow {
        top: -100px;
    }
    .case1{
            padding: 129px 24px 530px !important;
    }
    .case2{
            padding: 60px 24px 700px !important;
    }
    .case3{
            padding: 60px 24px 850px !important
    }
}
@media only screen and (min-width : 321px) and (max-width : 850px) and (orientation : landscape) {
        .arrow {
                top: -85px;
            }
        .ar {
            top: 35%;
            width: 75%;
            left: 15%;
        }
         .display-flex{    
            display: flex;
                flex-direction: column;
            }
             .display-order-2{
                order: 2
             }
             .display-order-1{
                order: 1
             }
             .case1, .case2, .case3{
                padding: 60px 30px 100px !important;
                border-right: 3px solid #f7931e;
                border-left: 3px solid #f7931e;
                text-align: center;
                width: 100%;
    }
    .p-t-b-30{
        width: 100%
    }
    .case1 span, .case2 span, .case3 span{
        text-align: center !important;
    }
    .client-case{
        padding: 0px 0;
    }
    .use-case-content{
    margin: 0 auto;
}
.w-200{
    margin:0 auto;
}
}
@media only screen and (max-width: 600px) {
    .case1, .case2, .case3{
        padding: 60px 30px 100px !important;
        border-right: 3px solid #f7931e;
        border-left: 3px solid #f7931e;
    }
    .display-flex{    
display: flex;
    flex-direction: column;
}
 .display-order-2{
    order: 2
 }
 .display-order-1{
    order: 1
 }
  .arrow {
    top: -100px;
}
 .ar {
    width: 100% !important;
    bottom: 350px !important;
    left: 0 !important;
    top: 160px !important;
    margin-left: 0px !important;
}
.m-t-70 {
    margin-top: 40px !important;
}
}
@media (max-width: 320px) {
 .case1, .case2, .case3{
        padding: 60px 15px 100px !important;
}
}
 </style> 
     <section id="main-slider">
    <video poster="images/cop.jpg"  class="video-js vjs-default-skin" preload="auto" id="bgvid" playsinline="" autoplay muted="" loop >
        <source src="video/kr/urban-2.mp4" type="video/mp4">
      <!--  <source src="video/KnowledgeRdigeHomepageBanner.ogv" type="video/ogg">-->
                
    </video>
    <div class="col-sm-12 ar">
    <h2>corporations</h2>
    <p>Corporations often need to understand and validate the ever-changing market dynamics. From dipstick studies to detailed market research, we connect our clients with subject-matter experts & industry proponents who provide meaningful guidance to research, due diligence, and related activities critical to achieving strategic business objectives.</p>
    </div>
       <div class="col-sm-12 "><a id="tohash" href="#cases-2"><i class="fa fa-angle-down wow bounceInDown arrow animated" style="visibility: visible; animation-name: bounce; padding-top:50px"></i></a></div> 
    </section><!--/#main-slider-->
    <section id="case-bg" style="display: none;">
    <div class="container">
            <div class="row">
                <div class="col-sm-12  text-left text-white"> 
                <div class="col-sm-6">
                 <div class="section-header">
                    <h2 class="section-title-white text-left wow fadeInDown text-white letter-space text-uppercase">
corporations</h2>
                    <p >
                    <span class="about-text">Corporations often need to understand and validate the ever-changing market dynamics. From dipstick studies to detailed market research, we connect our clients with subject-matter experts & industry proponents who provide meaningful guidance to research, due diligence, and related activities critical to achieving strategic business objectives.</span>
            </span>
                </div>
                </div>
                <div class="col-sm-6">
                	<a href="contact-us.php">
                	<p class="button w-200 m-t-15">Get In Touch</p>
                    </a>
                </div>  
                </div>
                 
            </div>
            
        </div>
     
       
    </section><!--/#main-slider-->

    <section id="cases-2" class="wow fadeIn intro-bg">
        <div class="container intro text-center">
                <p>Be it understanding customer preferences, conducting product surveys, or benchmarking studies - our network of diligently vetted experts transform the way knowledge is applied with tailor-made solutions designed to fit any & all business needs. From industry analysis to company profiling, our experts create the framework that lets you mold great insights into greater action steps.</p>
        </div>
    </section>
       <div class="gray-bg client-case">
        <div class="container">
            <div class="row">
            <section id="case1" class="pull-left use-case-content">
                <div class="text-center">
                    <h2 class="section-title-grey text-center wow fadeInDown text-grey letter-space m-t-70 client-title">Use Cases</h2>
                </div>
                <div class="col-sm-12 text-white pad-0">
                	<div class="col-sm-4 case1 pad-0">
                    	<p>
                        <span style="display:block;font-weight: bold;">Market Opportunity and Feasibility Study, Artificial Intelligence</span>
                        <span style="display:block"><b>Client Type:</b> Digital Transformation and Software Services Company</span><br>                        
                        <span class="about-text">Find the knowledge you need</span></p>
                        <a href="contact-us.php">
                        <p class="button w-200 m-i">Get In Touch</p>
                        </a>
                    </div>
                    <div class="col-sm-7 p-t-b-30 text-grey lborder">
                    	<p  style="margin-bottom: 0;">
                        An Asia based technology company having Business Analytics and AI as one of its core solutions wanted to conduct a market feasibility study for the European market. The objectives of the study included -:</p>
                        <ul>
                            <li>Current demand and supply dynamics</li>
                            <li>Current market maturity and openness to collaborate with vendors outside Europe</li>
                            <li>KPI’s as desired and critical to the vendor selection process</li>
                            <li>Competitive landscape and regulatory environment in countries of interest</li>
                        </ul>
                        
                        <p class="p-b-60" style="margin-bottom: 0"><b style="display:block">Solution Offered</b>
                            <span class="about-text" style="padding-bottom: 0;">Knowledge Ridge curated a list of diligently vetted country-specific experts and offered phone consultations to understand the market dynamics prevailing in each country, as well as to evaluate the product feasibility for each market. Some of the notable experts consulted were -:</span>
                        </p>
                            <ul>
                                <li>Former Country Head, Germany at a Tech major that extensively utilizes business analytics and AI solutions to service its clients. Expert provided detailed insights into the demand side aspects, as well as the key KPI’s critical to vendor selection process</li>
                                <li>Former Business Development Director at a French multinational that provides AI and analytics solutions to clients across Europe. Expert was instrumental in assessing the competitive landscape and regulatory environment prevailing in Europe</li>
                                <li>Former C-Level executives of UK’s largest retail chains to understand the user experience, service level requirements, features desired and openness to collaboration, and to finally arrive at a Go or No-Go strategy</li>
                            </ul>
                      
                    </div>
                    
                   
                </div>
            </section>
        </div>
        </div>
        </div>
         <div class="white-bg client-case">
        <div class="container">
            <div class="row">
            <section id="case2" class="pull-left use-case-content rightdiv">    
                <div class="col-sm-12  text-white pad-0 display-flex">
                	
                    <div class="col-sm-7 p-t-b-30 text-grey lborder display-order-2">
                    	<p style="margin-bottom: 0;">
                       A global manufacturer of steel and alloy steel forgings products for Automobile, Oil & Gas, and Aviation sectors wanted to develop a medium to long-term business growth strategy for select target markets in Asia. Broad tenets being -:</p>
                        <ul>
                            <li>Key Industries and product lines to be targeted for optimal future growth</li>
                            <li>Historical and Current outlook of the industries currently serviced</li>
                            <li>Capex required to purchase additional machinery</li>
                            <li>Automation (Robotic process driven automation) techniques that can be utilized to optimise margins.</li>
                        </ul>
<p class="p-b-60" style="margin-bottom: 0"><b style="display:block">Solution Offered</b>
<span class="about-text" style="padding-bottom: 0">Realizing the medium to long-term outlook of the business strategy, Knowledge Ridge offered phone consultations, in-person meetings, and longer-term engagements to address the objective. Some of the key experts on-boarded were -:</span>
                        <ul>
                            <li>Former SVPs and C-Level executives of Automobile and Aftersales (auto-ancillaries) manufacturing companies across target geographies. Experts gave detailed insights into demand size market dynamics including optimal product-portfolio mix</li>
                            <li>Senior industry automation expert was engaged to understand and implement RPA techniques available, cost optimisation, and economies of scale/scope to optimise margins</li>
                            <li>Industry veteran with 30+ years of experience in steel forging export markets was engaged to explore and boost geography-specific export opportunities, factoring in the regulations critical to them
</li>
                        </ul>
</p>
                    </div>
                    <div class="col-sm-4 case2 pad-0 display-order-1">   
                        <span style="font-weight: bold;">Business Strategy, Steel Forging</span>                 
                        <span style="display:block"><b>Client Type:</b> Steel Manufacturing Company</span>  <br>                      
                        <span class="about-text">Find the knowledge you need</span></p>
                        <a href="contact-us.php">
                        <p class="button w-200 m-i">Get In Touch</p></a>
                    </div>
                   
                </div>
            </section>  
            </div>
            </div>
            </div>
    <div class="gray-bg client-case">
        <div class="container">
            <div class="row">
            <section id="case3" class="pull-left use-case-content">    
                
                <div class="col-sm-12  text-white pad-0">
                	<div class="col-sm-4 case3 pad-0">
                        <p style="margin-bottom: 0"><b>Market Entry Strategy, Earthquake Resistant Materials</b><br>
                    	<p><span style="display:block"><b>Client Type:</b> Engineering and Manufacturing Company</span>   <br>                     
                        <span class="about-text">Find the knowledge you need</span></p>
                        <a href="contact-us.php">
                        <p class="button w-200 m-i">Get In Touch</p></a>
                    </div>
                    <div class="col-sm-7 p-t-b-30  text-grey lborder">
                    	
                       <p > <span class="about-text" style="padding-bottom: 0;margin-bottom: 0">
                        An Asia based manufacturer of earthquake resistant structures wanted to design a market entry strategy for United States and Canada. Study included arriving at product-based market size estimates and the following -:</span></p>   
                        <ul>
                           <li>Current demand and supply dynamics</li> 
                           <li>Current products available to make structures earthquake resistant and their key characteristics</li>
                           <li>Current product level value-chain analysis and pricing points</li>
                           <li>Key suppliers of earthquake resistant materials and competitor landscape </li>
                           <li>Key regulations affecting the pricing points and the accompanying marginse</li>
                        </ul>
<p class="p-b-60" style="margin-bottom: 0"><b  style="display:block">Solution Offered -:</b>
<span class="about-text" style="padding-bottom: 0">Understanding the market niche, Knowledge Ridge offered several phone consultations as well as in-person meetings with key stakeholders across the United States and Canada to arrive at the best market estimate and an optimal market entry strategy. Some of the notable experts consulted were:</p>
    <ul>
        <li>Senior R&D executive with decades of experience in developing earthquake resistant products to understand the current products available in the market along with their advantages and shortcomings</li>
        <li>Former Marketing Head, North America, of an earthquake manufacturing major to understand the demand & supply dynamics, raw material sourcing, product level preferences across high rises, critical structures and major corporations. Expert also provided detailed perspective on the relevant sourcing regulations like Make in America</li>
        <li>Senior Vice President, Sales Strategy – United States, of a major EPC company dealing exclusively with earthquake resistant buildings to understand the best market entry strategy to optimise market positioning
</li>
    </ul>


                    </div>
                    
                   
                </div>
            </section>    
        </div>
    </div>
    </div>

            </div>
        </div>
    </section><!--/#cta-->
   

     <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 pad-80">
                    <img src="images/logo.png" class="img-responsive">
                </div>
                <div class="col-sm-7">
                    <p class="blue footer-p"><a style="color:#8fc7ff" href="mailto:info@knowledgeridge.com" target="_top"><i class="fa fa-envelope"></i> info@knowledgeridge.com </a></p>
                    <p class="footer-p">
                    <span class="about-text">HQ: C-21, Liberty Phase II, North Main Road, Koregaon Park, Pune, MH 411001 – India | +91 20 4852 5501</span>
                    <span class="about-text">Gurugram: 371 P, Third Floor, Golf Course Road, Sector 42, Gurugram, HR 122002 – India | +91 124 239 6468 </span>
                    <span class="about-text">Houston: 10011 Lakeside Gables Drive, Houston, TX 77065 – USA | +1  713 499 9551</span>    
                        
                        <a class="privacy" href="privacy-policy.php">Privacy and Cookie Policy</a>
                        <p class="grey footer-p">Copyright &copy; 2020. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <section class="privacy-cta">
            <div class="container">
                <div class="row">
                    <p>We use cookies to improve your experience. <a href="privacy-policy.php">Learn more here</a>.</p>
                    <span id='close'>x</span>
                </div>
            </div>
    </section>
<script src="js/blur.js"></script>    
<script>
$('.use-cases-quick a').click(function(){
    $('html, body').animate(	{        scrollTop: $( $(this).attr('href') ).offset().top    }, 900);
    return false;
});
</script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>