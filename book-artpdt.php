<?php
  require_once('header.php');
  $activePage = "Services";
?>

<style>
    .box {
        padding: 20px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: 0 10px 40px 10px;        
        box-shadow: 0 10px 29px 0 rgb(68 88 144 / 10%);
        transition: all 0.3s ease-in-out;
        text-align: center;
    }
    /* *{margin:0;padding:0;} */
  html {overflow:visible;}
  #emf-form-iframe-container #emf-container {
    width: 100% !important;
    background-color: transparent !important;
  }
  #emf-form-iframe-container{position:absolute;width:100%;height:100%;}
  iframe{height:100%;width:100%;border:none;}
  #emf-container, #emf-container-outer #emf-form-shadows {
        width: 100% !important;
  }
</style>

<section id="main-section" class="clearfix">
	<div class="container-fluid pt-5">
<!-- Body Section -->

     
<section id="about" class="about privacy-policy" >

    <div class="container" data-aos="fade-up">
        <div class="row">          

            <div class="col-lg-12 col-md-12" >
                <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                    <h2>Antigen Rapid Test (ART) Pre-Departure Test (PDT) Appointment Booking</h2>
                    <p>
                    This form is only for making appointments for Antigen Rapid Test (ART) Pre-Departure Test (PDT) 
                    </p> 
                    <p>
                    Please be reminded that TheTestingPro is only responsible for administering the ART and 
                    provide the certificate of test result. It is the client’s responsibility to find out in
                     advance the exact requirements and validity for the specific VTL PDT before taking such 
                     tests at our test centres.
                    </p>   
                    <p>
                        <!-- <div id="emf-form-iframe-container" class="box">
                            <iframe id="myIframe" frameborder="0" allowTransparency="true" src="https://www.emailmeform.com/builder/embed/Of773jUae9" allow="camera"><a href="https://www.emailmeform.com/builder/embed/Of773jUae9">Fill out form.</a></iframe>
                        </div> -->
                        <script src="https://www.emailmeform.com/builder/forms/jsform/Of773jUae9" type="text/javascript"></script>

                    </p>
                </div>
            </div>
        
        </div>
    </div>

</section>
<!-- End Body Section -->
</div>
</section> 


</main><!-- End #main -->
<!-- <script>
    $(document).ready(function() {
        //frames[0].contents().find("#emf-container").attr("style","width:100% !important;")
        $('#myIframe').on('load', function() {             
            if ( $('#myIframe').contents().find("head") != undefined) { 
                console.log("Addingg");
                $('#myIframe')
                        .contents()
                        .find("head")
                        .append(
                                '<style>#emf-container {width: 100% !important;background-color: transparent !important;}</style>');
            }
        });
        /* setTimeout(function() {
            console.log(frames[0].contents().find("#emf-container").children().toArray());
        },7000); */
        
    });
</script> -->

<?php
require_once('footer.php');
?>

