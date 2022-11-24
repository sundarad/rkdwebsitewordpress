<?php
/* Template Name: Who We are*/
?>
<?php get_header();?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <h2>Who we are</h2>
        <ol>
            <li><a href="../index.php"><i class="bi bi-house-fill"></i> Home</a></li>
            <li>Who we are</li>
        </ol>


    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <?php
        $page_who_we_are= get_post(93);
        $title_who_we_are=$page_who_we_are->post_title;
        $link_who_we_are= get_permalink(93 );
        $content_who_we_are=$page_who_we_are->post_content;
        $image_who_we_are= get_the_post_thumbnail_url(93);
                    ?>
        <div class="row position-relative">


            <div class="col-lg-6 about-company-img" ;">
                <img src="<?php echo $image_who_we_are; ?>" class="img-fluid" alt="">
        </div>


                <p class="font-italic">
                    <?php echo $content_who_we_are; ?>
                </p>




    </div>
    <!-- End About Section -->
</section>
    <!-- ======= Alt Services Section ======= -->
<?php
$page_core_values= get_post(101);
$title_core_values=$page_core_values->post_title;
$link_core_values= get_permalink(101 );
$content_core_values=$page_core_values->post_content;
$image_core_values= get_the_post_thumbnail_url(101);

?>
    <!-- ======= core values Section ======= -->
    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg" >
                    <img src="<?php echo $image_core_values; ?>" class="img-fluid" alt="">
                </div>
                <?php
                echo $content_core_values;
                ?>
            </div>

        </div>
    </section>
    
    <section id="features" class="features about-company portfolio features">
        <div class="container" data-aos="fade-up">
            <!-- <header class="section-header">
                <h3>We Creating Solutions For <strong>Our Organization</strong></h3>
            </header> -->
            <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <div class="item-heading-left">
                                <h2 class="section-title">About Us</h2>
                                <div class="bg-title-wrap" style="display: block;">
                                    <span class="background-title solid">Our Company</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-12">
                            <div class="isotope-classes-tab">
                            <ul class="nav nav-tabs d-flex justify-content-end" id="portfolio-flters">

                           <!-- <li class="nav-item col-lg-4 col-sm-4 col-xs-12">
                                   <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                     <h4><?php echo $title_our_mission;?></h4>
                                   </a>
                                </li> -->
                        <!-- End Tab 1 Nav -->
                              <li class="nav-item nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-newone">  About us  </li><!-- End Tab 2 Nav -->
                              <li class="nav-item nav-link" data-bs-toggle="tab" data-bs-target="#tab-newtwo">   Investments  </li><!-- End Tab 3 Nav -->
                            </ul>
                            </div>
                        </div>
                    </div>
            <?php
            $our_mission= get_post(133);
            $title_our_mission=$our_mission->post_title;
            $link_our_mission= get_permalink($our_mission->ID );
            $content_our_mission=$our_mission->post_content;
            $image_our_mission= get_the_post_thumbnail_url($our_mission->ID);
            $our_vision= get_post(135);
            $title_our_vision=$our_vision->post_title;
            $link_our_vision= get_permalink($our_vision->ID );
            $content_our_vision=$our_vision->post_content;
            $image_our_vision= get_the_post_thumbnail_url($our_vision->ID);
            $our_strategies= get_post(137);
            $title_our_strategies=$our_strategies->post_title;
            $link_our_strategies= get_permalink($our_strategies->ID );
            $content_our_strategies=$our_strategies->post_content;
            $image_our_strategies= get_the_post_thumbnail_url($our_strategies->ID);


            ?>

            <div class="tab-content">

                <!-- End Tab Content 1 -->

                <div class="tab-pane active show" id="tab-newone">
                    <div class="row gy-4">
                        <div class="col-lg-12 order-2 order-lg-1">
                             <p>देशले अधिकारको नाममा गरेका सम्पूर्ण आन्दोलनहरू समापन गरेको र आर्थिक अभियान नै अबको एजेण्डा हो भनेर अभिव्यक्त गरेको छ । राष्ट्र र राज्यको यस्तो खालको निष्कर्षलाई नागरिक स्तरबाट नै समर्थन गर्नुपर्दछ, प्रवद्र्धन  गर्नुपर्दछ भन्ने निष्कर्षमा हामी केही युवा व्यवसायीहरू पुग्यौँ । ‘राज्यको चाहनाः आम समुदायको चाहना’ सम्बोधन गर्नका लागि  सामान्य पहलकदमी र सामान्य बाटोको खाकाले मात्र पुग्दैन ।  यसका लागि घनीभूत अभियान नै चलाउनु पर्दछ । सो अभियानमा हजारौं व्यक्ति र लगानीकर्ताहरू एकीकृत र समायोजित हुनुपर्छ । बल्ल मात्र सार्थक रूपमा आर्थिक क्रान्तिको बहस छेड्न सकिन्छ भन्ने ठम्याईका साथ २०७२ सालमा आरकेडी रियल स्टेट एण्ड कन्स्ट्रक्सन लि. नामको सार्वजनिक कम्पनी स्थापना गर्ने ठोस निचोडमा पुग्यौँ । रियल स्टेटको नामको सार्वजनिक  कम्पनी स्थापना र सञ्चालनका आआफ्ना खालका जोखिमहरू थिए । सँगसँगै सार्वजनिक कम्पनीको अभ्याससमेत नगरिएको परिप्रेक्ष्यमा ठूलो बहसको माझ कम्पनी दर्ता भएको थियो । सुरुवातदेखि छलफल गरी केही महत्वपूर्ण साझेदारहरूले सार्वजनिक कम्पनी भनेपछि अगाडि बढ्ने आँट गर्ने कुरैभएन । निजहरूलाई स–सम्मान विदा गर्दैगर्दा केही नयाँ साझेदार  साथीहरूले अबको निकास  यसैबाट सम्भव छ, फराकिलो आर्थिक दायरा बनाउने नेतृत्वदायी भूमिकासमेत खेल्ने साहस र आँट गर्नुपर्नेछ भन्ने हौसलाका साथ संस्थापक सञ्चालक ९ जना रहेर आरकेडी स्थापना हुन पुगेको थियो । सार्वजनिक कम्पनीको जटिलताका विषयमा जानकार रहँदारहँदै पनि कम्पनीले केही पाउन केही  गुमाउन तयार हुनुपर्दछ । हामी अगाडि बढ्न सक्यौं भने आर्थिक अभियान नेतृत्व गर्ने अवसर छ । साथै  आर्थिक स्वतन्त्रताको जग बसाउने अवसर पनि रहन्छ । यो अवसर कम्पनीको सफलताले मात्र दिन सक्छ । दुर्भाग्यवश, असफल हुने भनेको पनि वर्तमान अवस्थाभन्दा पनि विकसित हुनु हो भन्ने  निष्कर्षमा पुग्यौँ । हामीसँग  सामूहिक रूपमा कार्य गरेका इतिहासको अध्ययन,सहकारीमार्फत्पाचौँ हजार व्यक्तिहरूसँग गरेको समझदारी, लगानी र व्यवस्थापनको आफ्नै अनुभव र विकासको सफलताले सहकारीबाट मात्र आर्थिक अभियानको नेतृत्व गर्न सकिँदैन भन्ने ठोस निष्कर्ष निकाली  सहकारीसहितको कर्पाेरेट क्षेत्रबाट समृद्धिको अभियान, आर्थिक क्याम्पियन, औद्योगिक क्याम्पियन, उत्पादन क्याम्पियन गराउन सकिन्छ भन्ने कम्पनीको बुझाई हो । यसले मात्र दीर्घकालीन कम्पनीहरू र सयौं सहायक  कम्पनीहरूको प्रवद्र्धन गर्दै पर्यटन पूर्वाधार क्षेत्र र आर्थिक उपार्जनको पूर्वाधार निर्माणको क्षेत्रमा उल्लेखनीय योगदान पु¥याउन सक्छ भन्ने हाम्रो तीव्र चाहना र निष्कर्ष रहेको थियो । यो कम्पनी समूह स्थापना पूर्वको उर्वरभूमि २०६५ साल देखिको श्री बिहानी बचत तथा ऋण सहकारी संस्था लि. को गतिविधिहरूको संश्लेषण हो । कम्पनीका संस्थापक ९ जना सञ्चालक र अधिकांश प्रवद्र्धकहरू समेत निज संस्थामा प्रवद्र्धनका लागि कम्पनीमा सहभागी हुनु यसको गतिलो प्रमाण हो ।</p>
                              <p>यो कम्पनी समूहको संस्थापनमा सहकारी क्षेत्रको उल्लेखनीय योगदान रहेको छ । साथसाथै श्री बिहानी ५ औं हजार तत्कालीन शेयरधनीहरूको पसिना, मिहेनत र विचार आदर्श समेतले निर्णायक रूपमा भूमिका खेलेको छ । फलस्वरुप सार्वजनिक कम्पनी खोल्ने अवधारणाले मूर्त रूप प्राप्त गर्न सकेको हो । मुख्य सहायक तर निर्णायक निचोडमा पुग्दा यो कम्पनी स्वदेशमा रहने निम्न र मध्यम वर्गका नेपालीजन र विदेशमा पसिना बगाएका निम्न र मध्यम वर्गका प्रवासी नेपालीहरू बिच अनुभव, सिप, श्रम, सामाजिक उद्यम र पँुजीको एकीकृत सम्पादनको अभिव्यक्तिको रूपमा स्थापना भएको हो । सोहीअनुसार संसारभरि आफ्नो उपस्थितिलाई दरिलोदेखिने गरी प्रकाशित गरेको छ । अन्ततः यो कम्पनी समूह समग्र पक्षका व्यवसायिक चाहनाहरू र सबै पक्षहरू समेटिएको नेपाली निम्न मध्यम वर्गको नेतृत्व रहेको बृहत्तर कम्पनी समूह हो । यसको उद्देश्य सामूहिक आर्थिक मुक्ति र राष्ट्रको समृद्धिबाहेक केही पनि रहेको छैन । यो दीर्घकालीन बाटो तय गरेको कम्पनी स्थापना गर्दा कम्पनीका संस्थापक सञ्चालक (१) रामचन्द्र शर्मा (२) किरण पोखरेल (३) रामप्रसाद शर्मा (४)धर्मराज भण्डारी (५) धन प्रसाद पाध्या (६) हरि प्रसाद गौतम (७)अम्बिका प्रसाद पौडेल (८) सन्तोष अधिकारी (९) विष्णु पुन रहनु भएको थियो । आज तिनै ९ जना युवाहरूले स्थापना गरेको कम्पनी यो समूहगत कम्पनीको नेतृत्वदायी स्थानमा हुनु ठूलो गर्व र गौरवको कुरा बन्न पुगेको छ ।</p>
                              <p>इतिहास दोहोरिँदैन निरन्तर विकास हुने गर्दछ । जसको ज्वलन्त उदाहरण कष्टपूर्ण घडीमा कम्पनीलाई थप उर्जाका साथ नयाँ जीवन दिने एकीकृत साहस नै हो । यसै उद्घोषका साथ कम्पनीले केवलकार बनाउने बृहत्तर  उद्देश्यसहित पञ्चासे केलवकार एण्ड टुर्स लि. संस्थापनको कार्यनीति लियो । यो कार्यनीतिलाई सफल बनाउनका लागि चिन्तामणि शर्मा, प्रेम शर्मा सुवेदी, प्रेम गिरी, कमल बस्नेत, कृष्ण बहादुर ढकाल, कृष्ण तिवारी र अमृत पौडेल लगायतको समूहले गतिलो योगदान गरेकोछ । इतिहासको पाइला रोकिँदैन बरु झन्व्यवस्थित बन्दै अगाडि बढ्छ । यही क्रममा पर्यटकीय नगरी बन्दीपुरमा पर्यटन पूर्वाधारयुक्त केवलकार परियोजना अगाडि बढाउने अवसर पक्रने गरी बन्दीपुर केवलकार प्रा.लि. कम्पनीले प्राप्ति गर्ने सौभाग्य पायो । यस कदममा  त्तारानाथ उपाध्याय, कृष्ण अधिकारी, शिव प्रसाद शर्माका साथै स्वदेश र विदेशमा बस्ने नेपाली मनहरूले अभियानलाई थप समृद्ध सुसम्पन्न पार्दै लगेको कम्पनीको विकसित इतिहास आज अझ गर्व गर्नलायक बनेको छ । गर्वमा रमाउनुभन्दा पनि यथार्थ योगदान दिनु आजको आवश्यकता हो भन्ने निष्कर्षमा कम्पनी समूह पुगेको छ । आरकेडी समूह सीमित स्वार्थ र सीमित व्यक्तिहरूको आर्थिक उपाजर्नको साधनको लागिभन्दा पनि समग्र देशलाई उद्वेलित गर्ने अभियान बन्नुपर्छ भन्ने यसको दृष्टिकोण हो । आरकेडी समूह “सामाजिक व्यवसाय” को निर्विकल्प पहिचान हो ।</p>
                              <!-- <header class="section-header">
                                <h3>Hierarchy <strong>structure</strong></h3>
                              </header>
                              <p>आरकेडी होल्डिबस् बन्ने प्रक्रिया सुरु भएको छ । रियल स्टेटलाई मात्र आधार मानेको कम्पनीलाई अझ व्यापक रूपमा अन्य कम्पनी संस्थापन, प्रवर्धन र एक्विजिसन गर्ने हैसियतमा अझ बलियो बनाउन साधारण सभाको म्यान्डेट मुताबिक कार्य भएको छ । आफ्ना उद्देश्यहरू समेत थप गरेकोछ । जसअन्तर्गतः १) उत्पादनमूलक एवम्प्रविधिमूलक उद्योगहरू प्रवर्धन गर्ने र व्यवसायिक रूपमा स्वपुँजी लगानी गर्ने । २) एस्क्रो सेवा प्रदान गर्ने साथै लगानी प्रवर्धन गर्ने । ३) निर्माण तथा रियल स्टेटको इभेन्ट व्यवस्थापन गर्ने । ४) परियोजना बैंक स्थापना मार्फत् परियोजना डिपिआरसहित प्याकेज उत्पादन गरी बिक्री गर्ने उद्देश्यहरू राखिएको छ । जुन दीर्घकालीन हिसाबले चिरस्थायी बन्ने आधार स्तम्भको कोशेढुंगा बन्न सक्दछ भन्ने कम्पनीको निष्कर्ष रहेको छ । आरकेडी होल्डिबस् भएपश्चात् कम्पनी समूहको चेन यसप्रकार रहनेछ ।</p>
                             <div class="d-flex justify-content-center">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/sub.jpg" alt="">
                             </div> -->
                           
                            </div>

                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="<?php echo $image_our_vision;?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 2 -->

                <div class="tab-pane" id="tab-newtwo">
                <div class="row gy-4">
                        <div class="col-lg-12 order-2 order-lg-1">
                        <div class="d-flex justify-content-center">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/summary2.jpg" alt="">
                             </div>
                        </div>

                
                    </div>
                </div><!-- End Tab Content 3 -->


            </div>

        </div>
    </section><!-- End mission Section -->

<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'services',
    'posts_per_page' =>6,
    'orderby' => 'date',
    'order' => 'DESC'
);

$the_query = new WP_Query($args);
if ($the_query->have_posts()) : ?>
    <br>
    <br>
    <!-- <section id="services" class="services two">
        <div class="container">
            <div class="row gy-5">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    $service_image = get_the_post_thumbnail_url(get_the_ID());
                                    $_content_e = get_the_excerpt();
                                    //remove the paragraph tags
                                    $_content_e = strip_tags($_content_e);
                                    ?>
                                    <img src="<?php echo $service_image; ?>" alt="<?php echo $_content_e?>">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                                <p>  <?php the_content(); ?></p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
           
        </div>
    </section> -->
<?php endif; ?>

<!-- ======= Features Section ======= -->
<section id="features" class="features strategy portfolio features">
        <div class="container" data-aos="fade-up">
            <!-- <header class="section-header">
                <h3>Our strategic <strong>pillars</strong></h3>
            </header> -->
            <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <div class="item-heading-left">
                                <h2 class="section-title">Our strategic <strong>pillars</strong></h2>
                                <div class="bg-title-wrap" style="display: block;">
                                    <span class="background-title solid">Strategies</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-12">
                            <div class="isotope-classes-tab">
                               <ul class="nav nav-tabs d-flex justify-content-end" id="portfolio-flters" >
                                  <li class="nav-item nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1"> <?php echo $title_our_vision;?> </li><!-- End Tab 1 Nav -->
                                  <li class="nav-item nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">  Policy & Program  </li>  <!-- End Tab 2 Nav -->
                                  <li class="nav-item nav-link"  data-bs-toggle="tab" data-bs-target="#tab-3">  <?php echo $title_our_strategies;?> </li><!-- End Tab 3 Nav -->
                               </ul>
                            </div>
                        </div>
                    </div>
            <?php
            $our_mission= get_post(133);
            $title_our_mission=$our_mission->post_title;
            $link_our_mission= get_permalink($our_mission->ID );
            $content_our_mission=$our_mission->post_content;
            $image_our_mission= get_the_post_thumbnail_url($our_mission->ID);
            $our_vision= get_post(135);
            $title_our_vision=$our_vision->post_title;
            $link_our_vision= get_permalink($our_vision->ID );
            $content_our_vision=$our_vision->post_content;
            $image_our_vision= get_the_post_thumbnail_url($our_vision->ID);
            $our_strategies= get_post(137);
            $title_our_strategies=$our_strategies->post_title;
            $link_our_strategies= get_permalink($our_strategies->ID );
            $content_our_strategies=$our_strategies->post_content;
            $image_our_strategies= get_the_post_thumbnail_url($our_strategies->ID);


            ?>
            
            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row gy-4">
                        <div class="col-lg-12 order-2 order-lg-1">
                            <p>
                                <?php echo $content_our_vision;?>
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="<?php echo $image_our_vision;?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 1 -->

                <div class="tab-pane" id="tab-2">
                    <div class="row gy-4">
                        <div class="col-lg-12 col-sm-12 order-2 order-lg-1">
                          <ul>
                            <li>&nbsp;रियल स्टेट सम्बन्धी पब्लिक कम्पनीको अवधारणाबाट कम्पनीको दायरा फराकिलो बनाएर भविष्यमा आउने अवसरहरुको अधिकतम उपयोग गर्ने र आय आर्जन गर्ने नीति कम्पनीले लिएको छ ।</li>
                            <li>&nbsp;समुदाय र लगानीकर्तालाई आर्थिक बहसमा सहभागी गरेर उद्यंम अभियान अगाडी बढाउँदै कम्पनीको बजार प्रवद्र्धन क्षमतालाई दिगो बनाउनेनीति लिएकोछ ।</li>
                            <li>&nbsp;रियल स्टेटको बजारलाई आधुनिक र भरपर्दो ढङ्गबाट व्यवस्थापन गरि दरिलो मुख्य कम्पनीको रुपमा स्थापित हुने र अनेकौसहायक कम्पनीको प्रवद्र्धन गरि आय आर्जनको क्षेत्र विस्तार गर्ने नीति लिएको छ ।</li>
                            <li>&nbsp; सहायक कम्पनीहरुको माध्यमबाट केबलकार परियोजना र पर्यटन पुर्वाधारयुक्त आयोजनाको कार्यदिशा अंगाल्ने छ ।</li>
                            <li>&nbsp;लगानीको वातावरणको लागि उपयुक्त एजेण्डामा कार्यक्रम बनाउनेछ ।</li>
                            <li>&nbsp;परियोजना मार्फत् केबलकार र पर्यटन बजारलाई प्रर्वद्र्धन गरि आर्थिक पारदर्शिता दिन सक्ने विकास गर्न तयारी गर्नै छ ।</li>
                            <li>&nbsp;लगानीकर्तालाई लाभांश बाड्न सक्ने गरि सहायक कम्पनीलाई परिचालित गर्ने छ ।</li>
                            <li>&nbsp;कम्पनीले एकिकृत लगानीको चेन बनाउने अन्तिम गृहकार्य गरेको छ । कम्पनी अझ विशुद्घ अविभावक कम्पनीको रुपमा रहेर आफनो सहायक कम्पनी टुरिजम इन्भेष्टमेन्ट फण्ड लि का चेनमा अन्य सहायक कम्पनीहरुलाई परिणत गरेर व्यवस्थित गतिविधमा लाग्ने तयारी गरेको छ ।</li>
                            <li>&nbsp;पर्यटन पुर्वाधारयुक्त केबलकार परियोजना यसप्रकार अगाडी बढ्ने छन् ।</li>
                          </ul>
                        </div>    
                    </div>
                </div><!-- End Tab Content 2 -->
                <div class="tab-pane" id="tab-3">
                    <div class="row gy-4">
                        <div class="col-lg-12 col-sm-12 order-2 order-lg-1">
                                <h4>सैद्धान्तिक कार्यक्रम</h4>
                           <div class="accordion accordion-flush" id="faqlist">
                             <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                               <h3 class="accordion-header">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                 <i class="bi bi-arrow-right-square-fill"></i> योजनावद्ध लक्ष्यको पहिलो पाँच वर्ष</button>
                               </h3>
                               <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                  <div class="accordion-body">
                                       <div id="elementor-tab-content-1261" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1261" style="display: block;"><p>&nbsp;</p><table class="GeneratedTable"><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>रणनीतिक योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>सहायक कम्पनीहरुको प्रर्वधन गर्ने र व्यवस्थित संचालन गर्ने आवश्यक पुँजीको व्यवस्थापनमा ध्यान केन्द्रित गर्छ ।</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>रियल स्टेटको उद्देश्यलाई केन्द्रमा राखेर व्यवस्थित र भरपर्दा एक होल्डिङ्ग कम्पनीको रुपमा विकास गर्ने निती लिन्छ ।</strong></td></tr><tr><td><strong>३</strong></td><td align="justify"><strong>कम्पनीको वर्तमाननामको स्वरुपमा परिवर्तन गरि को नामबाट कारोवार अगाडि बढाउँछ आफ्नो उद्देश्यहरु यथास्थानमा राखेर केही महत्वपूर्ण उद्देश्यहरु थप गर्दछ ।</strong></td></tr><tr><td><strong>४</strong></td><td align="justify"><strong>कम्पनीले सहायक कम्पनीहरुमा व्यवसायिक आम्दानीको रणनितीलाई सेवागर्ने शर्तमा प्रवर्धन गर्दछ । कम्पनी प्रवर्धन गर्दा आफ्नो मुख्य सहायक कम्पनी टुरिजम&nbsp; इन्भेष्टमेन्ट फण्ड लिमिटेड को होल्डिङ्ग शेयर रहने गरि कम्पनीहरु प्रर्वर्धन गर्ने छ । अधिकतम १०% मात्र मुख्य कम्पनीले शेयर Holding गर्ने निती कम्पनीको रहन्छ । मुख्य कम्पनीले आफ्नो अधिकांश शेयर होल्डिङ्ग मुख्य सहायक कम्पनी&nbsp; Tourism Investment Fund Ltd मा गर्दछ र सोही चेन मार्फत अन्य कम्पनीमा आफ्नो बहुमत शेयर होल्ड गर्ने रणनिती लिन्छ । तर कम्तिमा पनि आफ्नो सहायक कम्पनीहरु वा समुहको ५१% भन्दा न्युनतम शेयर लगानी नगर्ने निती कम्पनीको रहन्छ ।</strong></td></tr><tr><td><strong>५</strong></td><td align="justify"><strong>बन्दिपुरको रणनितिक योजनालाई अक्षरस कार्यान्वयनमा ल्याउने छ ।</strong></td></tr><tr><td><strong>६</strong></td><td align="justify"><strong>बन्दिपुर परियोजना सफलताको जगमा टुरिजम, बन्दिपुर र आर.के.डी ले नगद लांभाश एकै पटक बाँड्न सक्छन्र लगानीकर्तालाई विश्वास र उत्साहित बनाउदै पञ्चासे परियोजना निर्माणमा लैजाने रणनितीका कम्पनी केन्द्रित रहन्छ ।</strong></td></tr><tr><td><strong>७</strong></td><td align="justify"><strong>कम्पनीले पर्यटन पुर्वाधारयुक्त परियोजना निर्माणमा आफना सहायक कम्पनीहरुको आफ्नो सम्पुर्ण</strong><br><strong>ध्यान केन्द्रित गर्दछ ।</strong></td></tr><tr><td><strong>८</strong></td><td align="justify"><strong>कम्पनी निर्माण व्यवस्थापन(Contract Event Management) सम्बन्धि कारोवारलाई अगाडी बढाउँदछ ।</strong></td></tr><tr><td><strong>९</strong></td><td align="justify"><strong>सम्पती व्यवस्थापन गर्ने सम्वन्धि Land Bank लाई प्रभावकारी रुपमा अगाडी बढाउँछ ।</strong></td></tr><tr><td><strong>१०</strong></td><td align="justify"><strong>रोप वे केवलकार सम्बन्धि नेपालको फ्रेन्चाइजी कम्पनी भएको नाताले रोप वे को डि.पि.आर, व्यवस्थापन र निर्माणलाई प्राथमिकता साथ बजारीकरण गर्दछ । र आम्दानी बढाउने छ ।यसका लागी CRS India सँग मिलेर काठमाडैंमा कम्पनीको कार्यालय स्थापना गर्नेछ</strong></td></tr><tr><td align="justify"><strong>११</strong></td><td align="justify"><strong>आवश्यकता र कम्पनीको हित अनुकुल देखिने अवस्थामा जग्गा विकास र खरिद विक्रिलाई कार्य निती बनाउने छ । यस्तो कार्य निती बनाउँदा सहायक कम्पनीका कार्यहरुमा थप बल पुग्ने शर्त रहने छ ।</strong></td></tr></tbody></table></div>
                                  </div>
                               </div>
                         </div><!-- # Faq item-->

<div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
    <i class="bi bi-arrow-right-square-fill"></i> अल्पकालीनलक्ष्य दोश्रो पाँचवर्ष </button>
  </h3>
  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
  <div class="accordion-body">

  <div id="elementor-tab-content-1262" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-1262" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>रणनीतिक योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>समय सापेक्ष परियोजनाको निमार्ण र सहायक कम्पनीहरुको कारोबारको सघन समिक्षा गरेर केही सटिक अल्पकालीन कार्यक्रमहरु बनाएर लगानीकर्तालाई लाभांश दिइरहने सुनिश्चितता प्रदान गर्दछ ।</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>लगानीको प्रतिफल आइरहने कार्यक्रम र योजना निर्माण गरि कार्यन्वयनमा ल्याउने छ ।</strong><br><strong>।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->

<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
        <i class="bi bi-arrow-right-square-fill"></i> मध्यकालीनलक्ष्य तेश्रो ५ वर्ष
    </button>
  </h3>
  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
  <div class="accordion-body">
  <div id="elementor-tab-content-1263" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-1263" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>रणनीतिक योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>पुरानो ऋणहरु चुक्ता गर्दै नँया बैँक ऋणको उपयोग गर्ने कार्यनिती कार्यक्रम बनाउँछ । त्यस्तो ऋणको दायरा ५ अर्ब सम्म बनाउने र यसको उपयोग उत्पादनमुलक परिणामको आधारमा गर्ने दिर्घकालिन नीति तथा कार्यक्रम बनाउँछ ।</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>सहायक कम्पनी टुरिजम इन्भेष्टमेन्ट फण्डलाई औद्मोगिक पर्यटकीय लगानीको चिर परिचित ब्राण्ड बनाएर स्थापित गर्दछ ।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->

<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
    <i class="bi bi-arrow-right-square-fill"></i>
    दिर्घकालिनचौथो पाँच वर्ष
    </button>
  </h3>
  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
  <div class="accordion-body">
  <div id="elementor-tab-content-1264" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="4" role="tabpanel" aria-labelledby="elementor-tab-title-1264" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>रणनीतिक योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>कम्पनीले नियमित ऋणहरु परिचालन गरिरहने छ । पुरानो ऋणको चुक्ता र नँयाको उपयोग, प्रतिस्पर्धात्मक बैकिङ्ग प्रणाली अनुरुप मात्र कार्य गर्ने कम्पनीको नीति रहन्छ । कम्पनीको आवश्यकता र प्रतिस्पर्धी कम्पनीलाभको सिद्घान्तको आधारमा मात्र बैंक एवं वित्तिय संस्थाहरुसँग ऋण कारोबार गर्दछ । विशिषत, कम्पनीको ध्यान अन्र्तराष्ट्र्यि बैँक तथा वित्तिय संस्थाहरु कर्जा उपयोग गर्ने कुरालाई प्रधानताका साथ अगाडी बढाउछ ।</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>कम्पनीको रणनितीको डेब्ट ÷ इक्वीटी रोसियो ९०ः १० को आधारमा पुगेर ऋणको उपयोग गर्ने हुन्छ । प्रत्येक पाँच वर्षमा ऋणको पुनः अवलोकन गरिरहने कम्पनी नीति रहन्छ ।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->
    <h4>नाफा वितरणको रणनिती</h4>
<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
        <i class="bi bi-arrow-right-square-fill"></i>योजनावद्ध लक्ष्यको पहिलो पाँच वर्ष
    </button>
  </h3>
  <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
    <div class="accordion-body">
    <div id="elementor-tab-content-6651" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-6651" style="display: block;"><table class="GeneratedTable"><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>कार्य योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>लगानी स्वपुँजीको आधारलाई विश्लेषण गरी ८०% रकम बोनसको रूपमा फिर्ता भुक्तानी दिने कम्पनीले रणनीति बनाएको हुनुपर्दछ</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>कम्पनीले निर्माण व्यवस्थापन, रियल स्टेट सेवा र अन्य सेवामुलक व्यवस्थापकीय कार्यको कारोवारबाट आम्दानी गर्नेछ । यी क्षेत्रमा जम्मा ३०% रहनेछ भने Tourism Investment Fund Ltd मुख्य चेनमार्फत ७०% हिस्सा आम्दानी गर्ने रणनीति रहन्छ साथैयसलाई थप बिस्तार गर्नुपर्दछ ।</strong></td></tr><tr><td><strong>३</strong></td><td align="justify"><strong>कम्पनीले प्रत्यक्ष रूपमा TIFL बाहेक सहायक कम्पनीहरू प्रवर्धन गर्ने छैन । भएका सहायक कम्पनीहरूलाई TIFL को चेनमा राख्छ । TIFL कम्पनीमा न्यूनतम ६७% शेयर होल्डिब रही रहने हुनुपर्दछ</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->
<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
       <i class="bi bi-arrow-right-square-fill"></i>अल्पकालीनलक्ष्य दोश्रो पाँचवर्ष
    </button>
  </h3>
  <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
  <div class="accordion-body">
  <div id="elementor-tab-content-6652" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-6652" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>कार्य योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>स्वपूँजी बराबरको लगानी बोनसको रूपमा पूर्ण तया चुक्ता गरिसक्नेछ । यो योजनामा स्वपुँजीको थप डेढ गुणा बोनस वितरण गर्ने कम्पनी योजना रहेको हुनुपर्दछ ।</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>यो सफलता हात पार्ने आधार Tourism Investment Fund र बन्दीपुर केवलकार परियोजनाको व्यवसायिक सञ्चालन एवम् सफलता हुनुपर्दछ ।</strong></td></tr><tr><td><strong>3</strong></td><td align="justify"><strong>कम्पनीले केही अल्पकालीन योजनाहरू बनाएर अल्पकालीन फाइदा लिने कार्यक्रमलाई कार्यान्वयनमा ल्याउँछ । यसले बोनस वितरण गर्न थप बलियो आधार तयार गरिदिनुपर्दछ ।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->
<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
        <i class="bi bi-arrow-right-square-fill"></i> मध्यकालीनलक्ष्य तेश्रो ५ वर्ष
    </button>
  </h3>
  <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
    <div class="accordion-body">
    <div id="elementor-tab-content-6653" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-6653" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>कार्य योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>वार्षिक रूपमा बोनस दर बृद्धि गरिरहने योजना रहन्छ । व्यवसायीक उथलपुथलको सम्भावनालाई दृष्टिगत गरी सम्पूर्ण वर्षहरूको नाफालाई समेट्ने गरी बोनस सुनिश्चिततासम्बन्धी विशेष कोषको स्थापना गर्दछ । कुनै बेला व्यवसाय बढ्दा फल्यास आउट हुने रकम यो फण्डमा जम्मा हुन्छ भने कुनै बेला व्यवसायिक संकट वा संकुचन देखिदा यस फण्डबाट निकालेर निरन्तर लगानीकर्तालाई लक्षित नाफा वितरण गरिरहनु पर्दछ ।</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>विशेष Fund को रकम नियमित उत्पादनमूलक क्षेत्रमा लगानी गरिरहने नीति बनाउँछ ।</strong></td></tr><tr><td><strong>३</strong></td><td align="justify"><strong>यो योजनामा बार्षिक ५०% को हाराहारीमा औषतमा बोनस वितरण गर्ने कम्पनी</strong><br><strong>रणनीतिक योजना रहेको हुनुपर्दछ ।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->
<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8">
       <i class="bi bi-arrow-right-square-fill"></i> दिर्घकालिनचौथो पाँच वर्ष
    </button>
  </h3>
  <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
  <div class="accordion-body">
  <div id="elementor-tab-content-6654" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="4" role="tabpanel" aria-labelledby="elementor-tab-title-6654" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>कार्य योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>औषतमा वार्षिक शतप्रतिशत बोनस वितरण गर्ने कम्पनीको तयारी रहेको छ । यसका लागि कम्पनीले दीर्घकालीन आयका पुर्वाधारहरू बनाई रहनुपर्दछ ।</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>कम्पनीले नीति र योजनालाई नाफाको आधार मानेको हुँदा यस क्षेत्रको विकासमा नै कम्पनी समूहलाई काम, काज, बुझाई र नीति एवम् रणनीतिमा एक ढिक्का बनाइरहने कम्पनीको दीर्घकालीन योजना रहनुपर्दछ ।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->

<h4>शेयर पुँजी</h4>
<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-9">
       <i class="bi bi-arrow-right-square-fill"></i> योजनावद्ध लक्ष्यको पहिलो पाँच वर्ष
    </button>
  </h3>
  <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
  <div class="accordion-body">
  <div id="elementor-tab-content-5631" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-5631" style="display: block;"><p><strong>१. शेयर पुँजीः १ अर्ब ५० करोड पुर्याउनेछ ।</strong><br><strong>शेयर पुँजीको लक्ष्य पूरा गर्नका लागि देहायबमोजिमको विकल्प उपयोग गर्ने कम्पनीको</strong><br><strong>नीति रहन्छ ।</strong></p><table class="GeneratedTable"><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>कार्य योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>कुनै उद्देश्य मिल्ने कम्पनीसँग मर्ज तथा प्राप्ति गर्नुपर्दछ ।</strong></td></tr><tr><td><strong>२</strong></td><td align="justify"><strong>कम्पनीले आफ्नो आर्थिक कारोबारको स्टेन्थलाई भरपर्दो बनाउने र लगानीकर्ताहरूमा भरपुर विश्वास पैदा गराउँछ र आवश्यक कानुन प्रक्रिया पूरा गरेर १ अर्ब ५० करोड रुपैयाँको ३०% हुन आउने बराबरको पुँजी “प्रारम्भिक सार्वजनिक निष्कासन” IPO निकालेर व्यवस्थापन गर्नुपर्दछ ।</strong></td></tr><tr><td><strong>३</strong></td><td align="justify"><strong>शेयरमा परिवर्तनशील हुने प्रकारको परिवर्तनशील “ऋण पत्र” जारी गरेर समेत शेयर पुँजी व्यवस्थापन गर्नेछ । ऋणपत्र सार्वजनिक रूपमा वा आन्तरिक पत्राचारका प्रक्रिया मार्फत्समेत जारी गरी पुँजी जुटाउन कम्पनी लाग्न सक्छ । ।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->
<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-10">
       <i class="bi bi-arrow-right-square-fill"></i>अल्पकालीनलक्ष्य दोश्रो पाँचवर्ष
    </button>
  </h3>
  <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
  <div class="accordion-body">
  <div id="elementor-tab-content-5632" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-5632" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>कार्य योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>पुँजीसम्बन्धी गम्भीर समीक्षा र विश्लेषण गर्दछ । थप केही अल्पकालीन कार्यक्रम र योजना निर्धारण गरी लागू गर्नुपर्दछ ।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->
<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-11">
    <i class="bi bi-arrow-right-square-fill"></i> मध्यकालीनलक्ष्य तेश्रो ५ वर्ष</button>
  </h3>
  <div id="faq-content-11" class="accordion-collapse collapse" data-bs-parent="#faqlist">
  <div class="accordion-body">
  <div id="elementor-tab-content-5633" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-5633" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>कार्य योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>समग्र कम्पनीको १० अर्ब माथिको चुक्ता पुँजी हुनुपर्दछ ।</strong></td></tr><tr><td>&nbsp;</td><td align="justify">&nbsp;</td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->
<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
  <h3 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-12">
      <i class="bi bi-arrow-right-square-fill"></i> दिर्घकालिनचौथो पाँच वर्ष
    </button>
  </h3>
  <div id="faq-content-12" class="accordion-collapse collapse" data-bs-parent="#faqlist">
    <div class="accordion-body">
    <div id="elementor-tab-content-5634" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="4" role="tabpanel" aria-labelledby="elementor-tab-title-5634" style="display: block;"><table><thead><tr><th><strong>क्र.सं.</strong></th><th><strong>कार्य योजना</strong></th></tr></thead><tbody><tr><td><strong>१</strong></td><td align="justify"><strong>डेब्ट/इक्वीटी रेसियोको आधारमा नियमित पुँजी वृद्धिको रणनीति लिने र कम्पनीलाई उत्पादन एवम् परिणाममूलक बनाउनेछ ।</strong></td></tr></tbody></table></div>
    </div>
  </div>
</div><!-- # Faq item-->
</div>
<h4>रोजगारी</h4>
          <div class="elementor-widget-container">
								<table>
                                    <thead>
                                        <tr>
                                            <th>क्र.सं.</th>
                                            <th>वर्ष</th><th>कार्य योजना</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> १</td>
                                            <td align="justify">योजनावद्ध पहिलो वर्ष</td>
                                            <td>१०००</td>
                                        </tr>
                                        <tr>
                                            <td>२</td>
                                            <td align="justify">अल्पकालीन दोस्रो वर्ष</td>
                                            <td>१००००</td>
                                        </tr>
                                        <tr>
                                            <td>३</td>
                                            <td align="justify">मध्यकालीन तेस्रो वर्ष</td>
                                            <td>२००००</td>
                                        </tr>
                                        <tr>
                                            <td>४</td>
                                            <td align="justify">दीर्घकालीन चौथो वर्ष</td>
                                            <td>४५०००</td>
                                        </tr>
                                    </tbody>
                                </table>		
          </div>
          <h4>शेयरधनी संख्या</h4>
          <div class="elementor-widget-container">
								<table>
                                    <thead>
                                        <tr><th>क्र.सं.</th>
                                        <th>वर्ष</th>
                                        <th>कार्य योजना</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>१</strong></td>
                                        <td align="justify">योजनावद्ध पहिलो वर्ष&nbsp;</td>
                                        <td>१०,००० जना</td>
                                    </tr>
                                    <tr>
                                        <td>२</td>
                                        <td align="justify">अल्पकालीन दोस्रो वर्ष</td>
                                        <td>८०,००० जना</td>
                                    </tr>
                                    <tr>
                                        <td>३</td>
                                        <td align="justify">मध्यकालीन तेस्रो वर्ष</td>
                                        <td>३,६०,००० जना</td>
                                    </tr>
                                    <tr>
                                        <td>४</td>
                                        <td align="justify">दीर्घकालीन चौथो वर्ष</td>
                                        <td>१४,००,००० जना&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>						
                        </div>
                       </div>
                       </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="<?php echo $image_our_strategies;?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 3 -->
       
            </div>
         </div>
    </section><!-- End Features Section -->
    <!-- End Alt Services Section -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Board of <strong>Directors</strong></h3>
            </div>

            <div class="row">
                <?php $args = array(
                    'post_type' => 'post',
                    'category_name' => 'director',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : ?>
                    <div class="container">
                        <div class="row">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="col-lg-3 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="100" >
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $director_image = get_the_post_thumbnail_url(get_the_ID());
                                        //get the excerpt
                                        $director_content_e = get_the_excerpt();
                                        //remove the paragraph tags
                                        $director_content_e = strip_tags($director_content_e);

                                        ?>
                                        <div class="member">
                                            <div class="member-img">
                                                <img src="<?php echo $director_image;?>" class="img-fluid" alt="<?php echo $director_content_e;?>">
                                            </div>
                                            <div class="member-info">
                                                <div class="member-info-content">
                                                    <h4><?php the_title(); ?></h4>
                                                    <?php
                                                    //get the post content
                                                    $director_content = get_the_content();
                                                    //remove the paragraph tags
                                                    $position = strip_tags($director_content);
                                                    ?>
                                                    <span><?php echo $position;?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Team Section -->




<?php get_footer();?>