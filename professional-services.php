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
.intro ul li{
	color:#fff
}
.lborder ul{
    font-size: 16px;
}
.lborder ul li{
    margin-bottom: 5px;
    font-weight: 100
}
.intro ul{
    font-size: 16px;
}
.intro ul li{
    margin-bottom: 5px;
    font-weight: 100
}
.case1 {
    padding: 129px 45px 500px !important;
    background-image: url(images/case/psf/psf1.jpg);
    background-position: center right;
}
.case2 {
    padding: 60px 45px 745px !important;
    background-image: url(images/case/psf/psf2.jpg);
    background-position: center right;
}
.case2 span{
    font-size: 16px;
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
    padding: 60px 45px 490px !important;
    background-image: url(images/case/psf/psf3.jpg);
    background-position: center right;
}
.ar{
    top:35%;
}
.ar p{
        max-width: 700px;
}
.arrow{
    top:-300px;
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
  }
 @media only screen 
        and (min-device-width : 768px) 
        and (max-device-width : 1024px) 
        and (orientation : portrait) { 
    .ar {
        top: 15%;
    }
    .arrow {
        top: -100px;
    }
    .case1{
            padding: 129px 24px 700px !important;
    }
    .case2{
            padding: 60px 24px 1030px !important;
    }
    .case3{
            padding: 60px 24px 580px !important
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
    <video poster="images/pfa.jpg"  class="video-js vjs-default-skin" preload="auto" id="bgvid" playsinline="" autoplay muted="" loop >
        <source src="video/kr/business-meeting-hd-2.mp4" type="video/mp4">
      <!--  <source src="video/KnowledgeRdigeHomepageBanner.ogv" type="video/ogg">-->
                
    </video>
    <div class="col-sm-12 ar">
    <h2 >Professional Services</h2>
    <p>Knowledge Ridge helps our clients navigate a global, ambiguous and ever-changing competitive environment by enabling them to access relevant, actionable knowledge quickly and efficiently.</p>
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
Professional Services Firm                    </h2>
                    <p >
                    <span class="about-text">Knowledge Ridge helps our clients navigate a global, ambiguous and ever-changing competitive environment by enabling them to access relevant, actionable knowledge quickly and efficiently.</span>
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

    <section id="cases-2" class="wow intro-bg fadeIn ">
        <div class="container intro">
                <p>Our ability to provide credible and timely insights across any target geography has positioned Knowledge Ridge as the preferred knowledge partner to several consulting and market research organizations.</p>
                <p>Knowledge Ridge provides expert network services encompassing the following common research objectives -:</p>
                    <ul>
                        <li>Market Feasibility & Opportunity Assessment</li>
                        <li>Market Sizing and Growth Potential</li>
                        <li>Competitive Intelligence and Benchmarking</li>
                        <li>Product Sourcing and Pricing</li>
                        <li>Go-to Market Strategy</li>
                    </ul>
                <p>From creating an edge with competition assessment to testing the waters with product feasibility studies, our experts play a significant role in the information value chain. </p>
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
                            <span style="display:block"><b>Go-To-Market Strategy, Oil and Gas</b></span>
                            <span style="display:block"><b>Client Type:</b> Market Research and Consulting</span><br>                        
                            <span class="about-text">Find the knowledge you need</span></p>
                            <a href="contact-us.php">
                            <p class="button w-200  m-i">Get In Touch</p>
                            </a>
                        </div>
                        <div class="col-sm-7 p-t-b-30 text-grey lborder">
                        	<p  style="margin-bottom: 0;">
                            A global market research firm wanted to understand the Oil & Gas Maintenance Market in the Middle East and North Africa (MENA) region with respect to key services used by O&G companies. Study included the following -:</p>
                            <ul>
                                <li>Estimating the overall market size of maintenance market</li>
                                <li>Prevailing competitive landscape</li>
                                <li>Top 5 services utilized by O&G (E&P) majors both on-shore as well as off-shore</li>
                                <li>Capex required to set up the above services</li>
                            </ul>
                            
                            <p class="p-b-60" style="margin-bottom: 0"><b style="display:block">Solution Offered</b>
                                <span class="about-text" style="padding-bottom: 0;">Taking due cognizance of the nature of O&G maintenance market in the MENA region, Knowledge Ridge offered phone consultation service with experts from both the demand side as well as the supply side to arrive at an accurate estimate of the maintenance service market size. Some of the key experts on-boarded were -:</span>
                            </p>
                                <ul>
                                    <li>Former Managing Director of a Saudi based leading API (American Petroleum Association) certified O&G major, providing both on-shore and off-shore subsea E&P services, having rich experiences of working across sites. Expert provided insights into the demand side of the target market</li>
                                    <li>Regional MD of an API certified manufacturing and service company specializing in renting downhole tools and services (both on-shore and off-shore) was consulted to understand the supply side of the market dynamics </li>
                                    <li>Former C-level executive of an EPC major specializing in O&G having expertise in site evaluation, spec and design, testing and diagnostics, intervention and maintenance. Expert gave detailed insights into region wise competitive scenarios as well as service preferences as required by O&G majors</li>
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
            <div class="container">
            <div class="row">    
                <div class="col-sm-12  text-white pad-0 display-flex">
                	
                    <div class="col-sm-7 p-t-b-30 text-grey lborder display-order-2">
                    	<p style="margin-bottom: 0;">
                            An Asia based market research major wanted to conduct a market feasibility study to evaluate the dialysis sector in India; key objectives of the research being -:
                        </p>
                        <ul>
                            <li>Historical and current outlook of the dialysis sector in India</li>
                            <li>Current and future pricing trends in context of market penetration as well as growth</li>
                            <li>Government regulation as well as governance issues in the bidding and tendering process</li>
                            <li>Unit Level economics of In-Centre vs PPP (Public Private partnership) based model</li>
                            <li>Current competitive landscape as prevalent in the dialysis sector as well as scenario-based growth estimates for near and long-term outlook</li>
                        </ul>
<p class="p-b-60" style="margin-bottom: 0"><b style="display:block">Solution Offered</b>
<span class="about-text" style="padding-bottom: 0">Having extensive experience in the Indian Healthcare and Lifesciences sector, Knowledge Ridge was able to quickly deliver phone consultations with relevant empanelled experts, thus ensuring quality and quick turnaround time. Some of the notable experts included -:</span>
                        <ul>
                            <li>Senior Manager, Government Relations (PPP model), at one of India’s largest network of public-private chains operating dialysis and kidney care centres/clinics. Expert was instrumental in evaluating the sector outlook, pricing trends, economics of PPP model including price capping, as well as the tendering process</li>
                            <li>Former CEO at one of India’s largest private network of dialysis centres having presence across 14 Indian states (120 centres/clinics) offering In-Centre treatment options. Expert provided detailed insights into current and future pricing trends, sector consolidation, strategies employed, government intervention and regulatory concerns </li>
                            <li>C-Level executive associated with the Pradhan Mantri National Dialysis programme and with the Ministry of Health. Expert was consulted to understand the demand/supply gap, solution efficacy, budgetary allocation trends, and the policy initiatives underway to address the growing dialysis concerns in India
</li>
                        </ul>
</p>
                    </div>
                    <div class="col-sm-4 case2 pad-0 display-order-1"> 
                        <span><b>Market Feasibility Assessment, Healthcare and Lifesciences</b></span>                     
                        <span style="display:block"><b>Client Type:</b> Strategy Consulting</span>  <br>                      
                        <span class="about-text">Find the knowledge you need</span></p>
                        <a href="contact-us.php">
                        <p class="button w-200  m-i">Get In Touch</p></a>
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
                        <span style="margin-bottom: 0"><b>Market Sizing and Opportunity Analysis, Chemicals</b></span>
                    	<p><span style="display:block"><b>Client Type:</b> Management Consulting</span>   <br>                     
                        <span class="about-text">Find the knowledge you need</span></p>
                        <a href="contact-us.php">
                        <p class="button w-200 m-i">Get In Touch</p></a>
                    </div>
                    <div class="col-sm-7 p-t-b-30  text-grey lborder">
                    	<p style="margin-bottom: 0;">
                        <span class="about-text" style="padding-bottom: 0;margin-bottom: 0">
                        A global consulting major wanted to understand the high carbon alkylates and additive market scenario in Europe, MENA and APAC. Study objectives included the following -:</span></p>   
                        <ul>
                           <li>Historical and current market size estimates of high carbon alkylate globally, split across the regions under consideration</li> 
                           <li>Production Process followed</li>
                           <li>Applications of the high carbon alkylates</li>
                           <li>Existing value chain and pricing points</li>
                           <li>Competitive landscape</li>
                           <li>Highest sustainable growth segments across the high carbon alkylates</li>
                        </ul>
<p class="p-b-60" style="margin-bottom: 0"><b  style="display:block">Solution Offered -:</b>
<span class="about-text" style="padding-bottom: 0">Knowledge Ridge offered 15 phone consultations (5 per geography) to accurately ascertain the above objectives. Some of the expert categories consulted were-:</p>
    <ul>
        <li>Senior chemists with extensive techno-commercial background to understand the production process and additive based applications</li>
        <li>Former C-Level executives (currently independent consultants) having deep expertise in the high carbon alkylates to provide the overall and geography-specific breakdown of estimated market size</li>
        <li>Regional industry experts to provide expertise on value chain, pricing points and competitive landscape</li>
        <li>Senior executives with deep region wise expertise in estimating the current and future market potential of high carbon alkylates in line with the related applications specific to the target market</li>
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
   
<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>