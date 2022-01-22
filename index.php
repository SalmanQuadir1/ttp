<?php
  require_once('header.php');
  $activePage = "Home";
?>
<style>
  #about {
    padding: 10px 0px;
  }
  #about .about-content {
      padding-top: 0px !important;
  }
  .service-list{
    list-style-type:none;
  }
  .service-list i{
    padding-right: 7px;
  }
  .service-list  .li-first{
    font-weight:bold;
  }
  .service-list ul{
    margin-left: 10px;
    font-weight: normal;
  }
  .linkButton {
    border-radius: 10px;
    padding: 20px;
    color: #fff !important;
    text-decoration: none;
  }
</style>
<section id="main-section" class="clearfix">
	<div class="container-fluid pt-5">
	

<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix mt-sm-0">
   <div class="container d-flex"> 
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-md-6 intro-info order-md-first order-last pt-5" data-aos="zoom-in" data-aos-delay="100">
          <h2>About <span>Us!</span></h2>
          <p class="text-mobile"><strong>TheTestingPro</strong>
          is made up by a group of like-minded former members and/or volunteers, in various capacities, who 
          were all part of the testing operations in Singapore since the pandemic started. With in-depth 
          knowledge and understanding of the systems, processes and requirements, we provide an extensive 
          range of Covid-19 Testing Services for both individuals and companies alike. We make testing simple
           and provide no frills services which will help relieve time and efforts.
          </p>
          <p> 
            For more information or any queries, please email to <a href="mailto:info@thetestingpro.com">: info@thetestingpro.com</a>	         
          </p>
          <!-- <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div> -->
        </div>

        <div class="col-md-6 intro-img order-md-last order-first pl-md-5 pb-md-0 pt-md-3 pr-md-5 d-none d-md-block" data-aos="zoom-out" data-aos-delay="100">
          <img src="assets/img/COVID-19-01-UI.png" alt="" class="img-fluid pl-md-5">
        </div>
      </div>

 </div>
  </section>
  <!-- End Hero -->

  <!-- Services Section -->

  <section>
   	 <div class="row">
   	 	    <div class="col-lg-5 col-md-4" >
            <div class="about-img" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/hero-img.png" alt="" class="w-100">
            </div>
          </div>

          <div class="col-lg-7 col-md-8" >
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
            <h3>Our Services</h3>    
            <p>TheTestingPro (<em>in partnership with Saudara Clinic</em>) is licensed and approved by the Ministry of Health Singapore to provide Off-Site Covid-19 Testing Services as follows:</p>        
              
              <ul class="service-list">
                <li class="li-first"><i class="fa fa-angle-double-right"></i>
                  Polymerase Chain Reaction (PCR) Test
                  <ul><li>Good for Pre-Departure Test (PDT)</li></ul>
                  
               </li>
                <li class="li-first"><i class="fa fa-angle-double-right"></i>
                  <span style="text-decoration: underline;">Professionally Administered</span> Antigen Rapid Test (ART)
                  <ul><li>  Good for Pre-Departure Test (PDT)</li></ul>
                
                </li>
                <li class="li-first"><i class="fa fa-angle-double-right"></i>
                Supervised <span style="text-decoration: underline;">Self-Administered</span> Antigen Rapid Test (ART)
                  <ul>
                    <li>FET-RRT </li>
                    <li>Pre-Event Test </li>
                    <li>Test for the Unvaccinated </li>
                </ul>
                
                </li>
              </ul>
            </div>
          </div>
   	 </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center">
            <a href="pcr-pdt.php" class="linkButton btn btn-info" data-aos="slide-up">
              <strong>PCR</strong><br>
              Click for Booking or <br>
              More Information
            </a>
            <a href="art-pdt.php" class="linkButton btn btn-info ml-3" data-aos="slide-down">
              <strong>ART</strong> <br>
              Click for Booking or <br>
              More Information
            </a>
          </div>
        </div>
      </div>
   </section>

  <!-- End Services Section -->

  <!-- ======= ART Section ======= -->
<section id="about" class="about section-bg mt-2">
      <div class="container">
          <h4><b>Antigen Rapid Test (ART) Private Quick Test Centre (p-QTC)</b></h4>      
        <div class=" form-group about-content">
          TheTestingPro<sup>TM</sup> is approved by the Ministry of Health Singapore to operate p-QTC for self-administered and supervised ART tests at the following locations:
              <ul class="ml-md-4">
                  <li class="pb-0"><i class="ion-android-checkmark-circle"></i> Pasir Panjang Wholesale Centre</li>
                  <li class="pb-0"><i class="ion-android-checkmark-circle"></i> Jurong Fishery Port</li>
                  <li class="pb-0"><i class="ion-android-checkmark-circle"></i> Canopy at J-Link (Jurong East Central)</li>
                  <li class="pb-0"><i class="ion-android-checkmark-circle"></i> Blk 535 Choa Chu Kang St 51 (Limbang)</li>
                  <li class="pb-0"><i class="ion-android-checkmark-circle"></i> Blk 60A Circuit Road</li>
                  <li class="pb-0"><i class="ion-android-checkmark-circle"></i> Blk 108 Yishun Ring Road (Chong Pang Market)</li>
              </ul>
              Click <a href="pqtc.php" class="text-danger"><b>HERE</b> </a> for more information and details.
          </div>
      </div>
    </section>

    <!-- End ART Section -->
  <!-- ======= Pre-Departure Test (PDT) Section ======= -->
<section id="about" class="about section-bg mt-2">
      <div class="container">
          <h4 class="text-center"><strong>Pre-Departure Test (PDT)</strong></h4>      
        <div class=" form-group about-content">
            <p>
              Our selected test centres provide <strong>Pre-Departure Test (PDT)</strong> services 
              <strong>(PCR and Professionally Administered ART)</strong> required for international cross-border travel.
            </p>
            <p class="">
              In addition to being approved and licensed by the Ministry of Health Singapore to conduct Off 
              Site PCR and ART test services, we are also authorised to issue globally accepted <strong>Notarized 
              Digital Health Certificates</strong> which can be used for cross-border travel.
            </p>
            <p class="text-center my-2" data-aos="slide-right">
              <i class="fa fa-hand-o-right" aria-hidden="true"></i> For more information about PCR Pre-Departure Test (PDT) <a href="art-pdt.php" >CLICK HERE</a><br>
              <i class="fa fa-hand-o-right" aria-hidden="true"></i>	For more information about ART Pre-Departure Test (PDT) <a href="pcr-pdt.php" >CLICK HERE</a>
            </p>
        </div>
      </div>
    </section>
    <!-- End Pre-Departure Test (PDT) Section -->
  
    <!-- ======= Our Test Centres ======= -->
<section id="about" class="about section-bg mt-2">
      <div class="container">
          <h4 class=""><strong>Our Test Centres</strong></h4>      
        <div class=" form-group about-content">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Test Center</th>
                                <th>Address</th>
                                <th>Operating Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pasir Panjang Wholesale Centre <br> (Auction Hall) <br> <span class="text-danger"><i>All ART services available</i></span></td>
                                <td>1 Wholesale Centre <br>Singapore 110001</td>
                                <td><b>Monday to Wednesday only </b><br><tt>8am to 12pm</tt></td>
                            </tr>
                            <tr>
                                <td>Jurong Fishery Port<br> (Canteen)<br> <span class="text-danger"><i>Not open to public</i></span> </td>
                                <td>35 Fishery Port Road<br>Singapore 619742</td>
                                <td><b>Tuesday and Friday only </b><br><tt>8:30am to 11:30am</tt></td>
                            </tr>
                            <tr>
                                <td>Canopy @ J-Link <br> (Jurong East Central) <br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>134 Jurong Gate Way Road<br>Singapore 600134 <br> (Behind JCube)</td>
                                <td><b>Monday to Saturday </b><br><tt>9am to 1pm <br> 2pm to 5pm</tt></td>
                            </tr>
                            <tr>
                                <td>Blk 535 Choa Chu Kang St 51 <br>(Limbang)<br> <span class="text-danger"><i>Supervised Self-Administered ART only</i></span></td>
                                <td>535 Choa Chu Kang Street 51<br>Singapore 680535</td>
                                <td><b>Monday to Friday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> <b>Saturday</b> <br> 9am to 1pm </tt></td>
                            </tr>
                            <tr>
                                <td>Blk 60A Circuit Road   <br>(Event Hall)<br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>60A Circuit Road<br>Singapore 370060</td>
                                <td><b>Monday to Friday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> <b>Saturday</b> <br> 9am to 1pm </tt></td>
                            </tr>
                            <tr>
                                <td>Blk 108 Yishun Ring Rd    <br>(Chong Pang City)<br> <span class="text-danger"><i>Supervised Self-Administered ART only</i></span></td>
                                <td>108 Yishun Ring Road<br>Singapore 760108</td>
                                <td><b>Monday to Friday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> <b>Saturday</b> <br> 9am to 1pm </tt></td>
                            </tr>
                            <tr>
                                <td>Blk 17 Marsiling Lane   <br>(Marsiling Market) <br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>17 Marsiling Lane<br>Singapore 730017</td>
                                <td><b>Monday to Friday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> <b>Saturday</b> <br> 9am to 1pm </tt></td>
                            </tr>
                            <tr>
                                <td>Blk 234A Bt Panjang Ring Rd    <br>(Event Hall) <br> <span class="text-danger"><i>PCR and all ART services available</i></span></td>
                                <td>234A Bukit Panjang Ring Road<br>Singapore 671234</td>
                                <td><b>Monday to Friday </b><br><tt>9am to 1pm <br> 2pm to 5pm <br> <b>Saturday</b> <br> 9am to 1pm </tt></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <small><em>Above listing correct as at 24 Jan 2022</em></small>
                </div>
                <div class="row mt-2">
                  <div class="col-sm-12">
                      <p class="text-center">
                      <em>All our test centres are licensed by the Ministry of Health (MOH) Singapore to conduct Off Site Covid-19 Testing Services </em><br>
                          <a target="_blank" href="https://www.moh.gov.sg/covid-19/quick-test-centres-(qtcs)">https://www.moh.gov.sg/covid-19/quick-test-centres-(qtcs)</a> 
                      </p>
                  </div>
                  <div class="col-sm-12">
                    <div class="text-center">
                      <a href="pcr-pdt.php" class="linkButton btn btn-info" data-aos="fade-left">
                        <strong>PCR</strong><br>
                        Click for Booking or <br>
                        More Information
                      </a>
                      <a href="art-pdt.php" class="linkButton btn btn-info ml-3" data-aos="fade-right">
                        <strong>ART</strong> <br>
                        Click for Booking or <br>
                        More Information
                      </a>
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </section>
    <!-- End Our Test Centres -->

      <!-- Competitive Edge |Section -->
  <section id="features" class="features"> 
      <div class="container" data-aos="fade-up">

        <div class="row feature-item">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/OEZAUA0.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-md-5" data-aos="fade-left" data-aos-delay="150">
             <h4><strong>TheTestingPro<sup>TM</sup></strong> Competitive Edge </h4>
            <ul>
	           <li>We know and understand the requirements, systems and processes related to Polymerase Chain 
                  Reaction (PCR) and Antigen Rapid Test (ART) Testing and Rostered Routine Testing (RRT).
              </li>
              <li>
                  No frills, fast and easy. We simplify testing thus making it the way it should be.
              </li>
              <li>
                  We are partnered with MOH/HSA Approved PCR Testing Labs and Healthcare Providers (HCP) 
                  licensed by MOH to conduct Off-Site PCR/ART testing.
              </li>
              <li>
                  <strong>Our competitive rates makes it much more cost effective for you!</strong>               
                
              </li>
            </ul>
            <!-- <p>
              	 <span style="color: red;"> NO UPFRONT FEES PAYABLE BY YOU!</span> Pay us, if there are any dues, ONLY
              	after each RRT cycle is completed
            </p> -->
          </div>
          <div class="col-sm-12 text-center">
            For more information or any queries, please email to: <a href="mailto:info@thetestingpro.com">info@thetestingpro.com </a>
          </div>
        </div>

        

      </div>
</section>
	   
   <!-- End Competitive Edge Section -->

   <section>
   	 <div class="row">   	 	   

          <div class="col-lg-7 col-md-8" >
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
            <h3>Importance of Covid-19 Testing</h3>            
              
              <ul>
                <li><i class=""></i>
                  <strong>Covid-19 Testing is key to the resumption of more economic and community activities.</strong>
                </li>
                <li><i class=""></i>Testing plays a key role in our efforts to contain and mitigate the COVID-19 pandemic by identifying infected individuals and create a ring fence to help prevent further person-to-person transmission of COVID-19.</li>
                <li><i class=""></i>•	Responsible protection to keep from spreading coronavirus and its variants, plus regular testing and having the proper vaccinations, can help reduce the occurrence of Covid-19 infection and protect those in our population who are the most vulnerable to complications.</li>
                 <li><i class=""></i>•	We can make a difference in our community by adhering to all public health requirements. Working together, we can all overcome this pandemic and seamlessly transit towards endemicity!</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 col-md-4" >
            <div class="about-img" data-aos="fade-left" data-aos-delay="100">
              <img src="assets/img/covid-self-test.png" alt="" class="w-100">
            </div>
          </div>
   	 </div>
   </section>

   <!-- Features |Section -->
  <!-- <section id="features" class="features"> 
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-7 wow fadeInUp" data-aos="fade-right" data-aos-delay="150">
            <h4>Learn more about our Mobile Assisted and Supervised Self Swab (MA3S) Solution</h4> 
            <p>
              Testing continues to be an important part of the Nation’s strategy to detect and ringfence 
                infections in the community early. Mandatory seven (7) or fourteen (14) days <b>Fast and Easy 
                Test (FET) Rostered Routine Testing (RRT)</b> is now in place for many workers across different
                 industries and type of settings.
                 <br><br>
                 <a>&#128073; Booking appointments at the <b>Quick Test Centres (QTC)</b> for their employees to do the ART tests; or </a><br>
                 <a>&#128073; Adopt the <b>Employer-led Supervised Self-Swab(ESSS)</b> model and conduct RRT in-house.</a>
            </p>            
            <div>
              <a href="mobile-supervised-self-swab.php" class="btn-get-started btn btn-info px-5">Learn More About MA3S &raquo;</a>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/covid-self-test.png" class="img-fluid" alt="">
          </div>
        </div>

        

      </div>
</section> -->


	   
   <!-- End Features Section -->
   
  <main id="main">
  <div class="about-bg" >
<!-- ======= About Section ======= style="background: #37517e;"-->
<!-- <section id="about" class="about" >

<div class="container" data-aos="fade-up">
  <div class="row letter-container-row">

    <div class="col-lg-3 col-md-4 letter-container-outer">
      <div class="about-img align-middle" data-aos="fade-right" data-aos-delay="100">
           <div class="align-middle" data-aos="zoom-in">
            <a href="/">
              <img class="w-100" alt="TheTestingPro" src="assets/img/TheTestingPro-Logo_NoBG-Black.png" style="">
             </a>
           </div>
      </div>
    </div>

    <div class="col-lg-9 col-md-8" >
      <div class="about-content" data-aos="fade-left" data-aos-delay="100">
      <h2>WHAT WE DO</h2>
                    
        
        <div> 
        <div class="pmac">PMAC</div>
        <div class="pmac-container">
          <div> 
            We <span style="color:red">PLAN</span> for your Company's mandated Routine Rostered Testing schedule, to
              ensure all of your workers meet the testing requirements and datelines.
          </div><br>
          <div>
            We <span style="color:red">MANAGE</span> the entire testing process from start to finish, taking away all the
              administrative works involved in rostering/scheduling, tracking and reporting.
          </div><br>
          <div style="margin-bottom:0px;">
             We <span style="color:red">ADMINISTER</span> and <span style="color:red">COORDINATE</span> (in partnership with a MOH licensed Healthcare
             Provider) all of the required PCR/ART testing of your workers at your premises or at a
             venue convenient for you.
        </div>
          <div class="pb-4"> This allows your workers to be relieved of the
              inconvenience, the time spent as well as efforts needed to go to a Regional Testing
              Centre for their routine testing. This translates to increased productivity and cost 
              savings for your Company.
          </div></div>
        </div>
      </div>
    </div>
  </div>
</div>

</section> -->
<!-- End About Section -->
	</div>

<!-- SECTIOB BLOG ROLL  -->
<section>
  <div class="row">
<?php
  require_once('blog-roll.php');
?>
</div>
</section>
<!-- END SECTIOB BLOG ROLL  -->
    

   <!-- Contact Section -->
	 <?php
    require_once('contact-form.php');
  ?>
    
    <!-- End contact Section -->


  </div>
</section> 


  </main><!-- End #main -->
  <?php
    require_once('footer.php');
  ?>
  <script>
	  $(document).ready(function() {
	  		$('#owl-carousel').owlCarousel({
	  			autoplay:true,
	  			autoplayTimeout:2000 ,
	  		    loop: true,
	  		    margin: 30,
	  		    dots: false,
	  		    nav: false,
		  		  responsive:{
		              0:{
		                  items:1
		              },
		              600:{
		                  items:2
		              },
		              992:{
		                  items:3
		              }
		          },
	  		  	smartSpeed: 1000,
	  		});
	  	});
  </script>
