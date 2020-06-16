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
    padding: 129px 55px 500px !important;
    background-image: url(images/case/invest/invest1.jpg);
}
.case2 {
    padding: 60px 55px 750px !important;
    background-image: url(images/case/invest/invest2.jpg);
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
    padding: 60px 55px 700px !important;
    background-image: url(images/case/invest/invest3.jpg);
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
            padding: 60px 24px 1100px !important;
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
    <video poster="images/investment.jpg"  class="video-js vjs-default-skin" preload="auto" id="bgvid" playsinline="" autoplay muted="" loop >
        <source src="video/kr/investments-hd-2.mp4" type="video/mp4">
      <!--  <source src="video/KnowledgeRdigeHomepageBanner.ogv" type="video/ogg">-->
                
    </video>
    <div class="col-sm-12 ar">
    <h2>Investment Management</h2>
    <p>Knowledge Ridge provides end-to-end expert support across the entire gamut of the commercial and financial due diligence process; right from initiating coverage to portfolio management. Our clients include mid to large mutual funds, hedge funds, and private equity firms.</p>
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
Investment Management Companies</h2>
                    <p >
                    <span class="about-text">Knowledge Ridge provides end-to-end expert support across the entire gamut of the commercial and financial due diligence process; right from initiating coverage to portfolio management. Our clients include mid to large mutual funds, hedge funds, and private equity firms.</span>
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
                <p>Our wide access to custom vetted experts bring in relevant, accurate, and real-time insights that aid in ascertaining sustainable growth potential and help in determining enterprise fair value estimates.</p>
                <p>Clients avail experts’ insights across the entire private equity lifecycle; deal sourcing, commercial & financial sedulity, portfolio management & board placements, and to conclusively strategize the fund’s exit. </p>
                <p>In the asset management space, clients approach us for channel checks and to gather information from relevant stakeholders across various products’ value chain to make better informed investment decisions.</p>
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
                        <span style="display:block;font-weight: bold;">Commercial Due Diligence, Engineering and Construction</span>
                        <span style="display:block"><b>Client Type:</b> Mutual Fund</span><br>                        
                        <span class="about-text">Find the knowledge you need</span></p>
                        <a href="contact-us.php">
                        <p class="button w-200 m-i">Get In Touch</p>
                        </a>
                    </div>
                    <div class="col-sm-7 p-t-b-30 text-grey lborder">
                    	<p  style="margin-bottom: 0;">
                        An international mutual fund house, with an objective to identify suitable investment opportunities in the construction equipment space in India, wanted to carry out a due diligence exercise in line with their strategic portfolio allocation mandates including -:</p>
                        <ul>
                            <li>Top down analysis of the prevailing industry trends including headwinds and tailwinds</li>
                            <li>Value Chain Analysis</li>
                            <li>Market Sizing and growth scenarios</li>
                            <li>Current regulation</li>
                            <li>Competitive landscape of target companies</li>
                        </ul>
                        
                        <p class="p-b-60" style="margin-bottom: 0"><b style="display:block">Solution Offered</b>
                            <span class="about-text" style="padding-bottom: 0;">Knowledge Ridge arranged an Indian construction equipment market exploration trip with over 20 phone consultations and 8 in-person meetings with key stakeholders in the value chain. Some of the key experts consulted were -:</span>
                        </p>
                            <ul>
                                <li>C-Level executives of companies involved in distribution of construction equipment machinery to understand the demand and supply side dynamics of the market</li>
                                <li>Executives of EPC companies to understand the current regulatory environment and generate-growth scenarios</li>
                                <li>Key regulatory experts with deep local understanding about the impact of potential regulatory norms on the future market dynamics</li>
                                <li>Key C-Level executives of private companies for a potential equity investment and to understand the company’s competitive positioning in the market</li>
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
                    	<p style="margin-bottom: 0">
                       An Asian private equity major wanted to evaluate opportunities in the IVF (In-vitro-fertilisation) sector in Southern Asia. Broad tenets of the study included the following -:</p>
                        <ul>
                            <li>Historical and Current market size estimates as well expected growth in terms of volume and value</li>
                            <li>State/region wise break-up of the above market size to understand the service penetration</li>
                            <li>Breakup of the IVF market into Corporate Chains, Standalone Centres, and Hospital Backed Centres</li>
                            <li>Average pricing range/trends prevalent over the last 5 years and the service lines/treatment alternatives likely to witness maximum growth</li>
                             <li>Decision making criteria with respect to the treatment options available and the role of key influencers on decision making</li>
                             <li>Competitive landscape</li>
                        </ul>
<p class="p-b-60" style="margin-bottom: 0"><b style="display:block">Solution Offered</b>
<span class="about-text" style="padding-bottom: 0">In line with the investment objectives, Knowledge Ridge curated a list of fully vetted experts and offered phone consultations to assess the market. Some of the notable experts consulted were -:</span>
                        <ul>
                            <li>AVP, Business Development at one of South Asia’s largest corporate chains of IVF clinics. Expert provided key insights in estimating the overall and region wise market size in terms of volume as well as value, including key headwinds tailwinds affecting the market growth.</li>
                            <li>Independent consultant and current owner of a standalone IVF centre with 30+ years of experience in working across hospital backed as well as corporate chains. Expert was instrumental in providing current player-specific market share estimates, strategies used by key players, as well as pricing points across all available options</li>
                            <li>Former CEO at one of India’s largest hospital backed IVF chains to understand the patient decision making criteria, treatment preferences, treatment levels suggested including the success rates of each, and finally the pricing across each of them</li>
                        </ul>
</p>
                    </div>
                    <div class="col-sm-4 case2 pad-0 display-order-1">    
                        <span style="font-weight: bold">Opportunity Assessment, Healthcare and Life Sciences</span>                  
                        <span style="display:block"><b>Client Type:</b> Private Equity</span>  <br>                      
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
                        <span><b>Commercial and Financial Due Diligence, Consumer Goods and Services</b></span>
                    	<p><span style="display:block"><b>Client Type:</b> Hedge Fund</span>   <br>                     
                        <span class="about-text">Find the knowledge you need</span></p>
                        <a href="contact-us.php">
                        <p class="button w-200  m-i">Get In Touch</p></a>
                    </div>
                    <div class="col-sm-7 p-t-b-30  text-grey lborder">
                    	<p style="margin-bottom: 0;">
                        <span class="about-text" style="padding-bottom: 0;margin-bottom: 0">
                        A Europe based hedge fund wanted to conduct a due diligence exercise on an online based grocery and food delivery service company with an objective to determine the strategic fit as well as growth prospects of the company. Due diligence parameters included -:</span></p>   
                        <ul>
                           <li>Market assessment and commercial due diligence to understand the product-portfolio level targeting of the company under consideration</li> 
                           <li>Top selling products in terms of volume and pricing (margins) and their sustainability levels</li>
                           <li>Competitor landscape and its impact on pricing and margins</li>
                           <li>Current valuation estimates vis-a vis future growth estimates </li>
                        </ul>
<p class="p-b-60" style="margin-bottom: 0"><b  style="display:block">Solution Offered -:</b>
<span class="about-text" style="padding-bottom: 0">Knowledge Ridge having provided support across the entire investment lifecycle for many clients quickly understood the highly quantitative nature of the requirement and offered in-person meetings as well as longer-term engagements with select experts to address the study objective. Some of the key experts on-boarded were-:</p>
    <ul>
        <li>Former Head of Online Retail at an e-commerce giant having groceries as one of their key offerings. Expert was instrumental in sharing deep insights on sub-categories having the highest turnover rate, categories to be targeted to garner highest margins, marketing strategies employed by significant players, and finally the product pricing models</li>
        <li>Former VP of Merchandising & New Product Introduction at a leading online grocery and food delivery company. Expert provided specific insights into scenario generation, growth prospects, sustainable revenue streams, as well as supply chain and logistics aspects including fleet management</li>
        <li>Independent consultant with deep expertise in valuing e-commerce companies to help arrive at the best measure of company fair value as well as capital allocation strategy for our client</li>
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