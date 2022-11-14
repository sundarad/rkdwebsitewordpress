<?php
/* Template Name: latest-event*/
?>
<?php get_header();?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
    <h2>Documents</h2>
        <ol>
            <li><a href="/index.php"> <i class="bi bi-house-fill"></i> Home</a></li>
            <li>Documents</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

   <!-- ======= Event Section ======= -->
<section id="inner-event" class="features">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
             <h2>ILAMI Scheme- RKD Holdings Limited (RKD) in Collab with Bizbazar</h2>
             <p>RKD Holdings Limited in collaboration with Bizbazar Limited has released ILAMI Scheme.</p>
             <img src="<?php echo get_template_directory_uri();?>/assets/img/ilami-banner-2.webp" width="100%"  alt="">
             <img src="<?php echo get_template_directory_uri();?>/assets/img/ilami-flyer.jpg" width="100%" class="mt-4"  alt="">
             <div class="embed-responsive embed-responsive-16by9 mt-4">
                       <iframe width="100%" height="450" src="https://www.youtube.com/embed/_c23FGU1Cao" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div> 
             <div class="event-contact-info pt-4">
                 <h3>Contact information:</h3>
                 <p>For further information kindly contact our representative at your convenience:</p>
                 <h4>For Nepal:</h4>
                 <p>9802815798 - Chintamani Sharma (Lumbini, Karnali, Sudurpaschim Area)</p>
                 <p>9802815794 - Dharma Raj Bhandari (Gandaki Province)</p>
                 <p>9802816969 - Prem Giri (Bagmati, Madhesh and Province 1)</p>
                 <h4>For Foreign Countries: </h4>
                 <p>00971504823072- Krishna Bahadur Dhakal (Asia Continent)</p>
                 <p>00610431443794- Santosh Adhikari (Australia and Africa Continent)</p>
             </div> 
             <ul class="nav nav-tabs row d-flex mt-4 mb-4">

        <li class="nav-item col-lg-4 col-sm-3 col-xs-12">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>For Nepal</h4>
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-lg-4 col-sm-3 col-xs-12">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>For Foreign Countries</h4>
          </a>
        </li><!-- End Tab 2 Nav -->


      </ul>

      <div class="tab-content">
               
        <div class="tab-pane active show" id="tab-1">
          <div class="row">
                 <p>9802815798 - Chintamani Sharma (Lumbini, Karnali, Sudurpaschim Area)</p>
                 <p>9802815794 - Dharma Raj Bhandari (Gandaki Province)</p>
                 <p>9802816969 - Prem Giri (Bagmati, Madhesh and Province 1)</p>
          </div>
    
        </div><!-- End Tab Content 1 -->

        <div class="tab-pane" id="tab-2">
          <div class="row">
                 <p>00971504823072- Krishna Bahadur Dhakal (Asia Continent)</p>
                 <p>00610431443794- Santosh Adhikari (Australia and Africa Continent)</p>    
          </div>
        </div><!-- End Tab Content 2 -->

      </div>
           </div>
       </div>
   </div>
</section>


<?php get_footer();?>