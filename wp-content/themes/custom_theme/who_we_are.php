<?php
/* Template Name: Who We are*/
?>
<?php get_header();?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <h2>Who we are</h2>
        <ol>
            <li><a href="/index.php"><i class="bi bi-house-fill"></i> Home</a></li>
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
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3>We Creating Solutions For <strong>Our Organization</strong></h3>
            </header>
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
            <ul class="nav nav-tabs row gy-4 d-flex">

                <!-- <li class="nav-item col-lg-4 col-sm-4 col-xs-12">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4><?php echo $title_our_mission;?></h4>
                    </a>
                </li> -->
                <!-- End Tab 1 Nav -->

                <li class="nav-item col-lg-6 col-sm-4 col-xs-12">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4><?php echo $title_our_vision;?></h4>
                    </a>
                </li><!-- End Tab 2 Nav -->

                <li class="nav-item col-lg-6 col-sm-4 col-xs-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4><?php echo $title_our_strategies;?></h4>
                    </a>
                </li><!-- End Tab 3 Nav -->
            </ul>

            <div class="tab-content">

                <!-- End Tab Content 1 -->

                <div class="tab-pane active show" id="tab-2">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <p>
                                <?php echo $content_our_vision;?>
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="<?php echo $image_our_vision;?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 2 -->

                <div class="tab-pane" id="tab-3">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <p>
                                <?php echo $content_our_strategies;?>
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="<?php echo $image_our_strategies;?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 3 -->


            </div>

        </div>
    </section><!-- End Features Section -->
    <section id="features" class="features about-company">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3>We Creating Solutions For <strong>Our Organization</strong></h3>
            </header>
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
            <ul class="nav nav-tabs row gy-4 d-flex">

                <!-- <li class="nav-item col-lg-4 col-sm-4 col-xs-12">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4><?php echo $title_our_mission;?></h4>
                    </a>
                </li> -->
                <!-- End Tab 1 Nav -->

                <li class="nav-item col-lg-6 col-sm-4 col-xs-12">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-newone">
                        <h4>About us</h4>
                    </a>
                </li><!-- End Tab 2 Nav -->

                <li class="nav-item col-lg-6 col-sm-4 col-xs-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-newtwo">
                        <h4>Investments</h4>
                    </a>
                </li><!-- End Tab 3 Nav -->
            </ul>

            <div class="tab-content">

                <!-- End Tab Content 1 -->

                <div class="tab-pane active show" id="tab-newone">
                    <div class="row gy-4">
                        <div class="col-lg-12 order-2 order-lg-1">
                             <p>देशले अधिकारको नाममा गरेका सम्पूर्ण आन्दोलनहरू समापन गरेको र आर्थिक अभियान नै अबको एजेण्डा हो भनेर अभिव्यक्त गरेको छ । राष्ट्र र राज्यको यस्तो खालको निष्कर्षलाई नागरिक स्तरबाट नै समर्थन गर्नुपर्दछ, प्रवद्र्धन  गर्नुपर्दछ भन्ने निष्कर्षमा हामी केही युवा व्यवसायीहरू पुग्यौँ । ‘राज्यको चाहनाः आम समुदायको चाहना’ सम्बोधन गर्नका लागि  सामान्य पहलकदमी र सामान्य बाटोको खाकाले मात्र पुग्दैन ।  यसका लागि घनीभूत अभियान नै चलाउनु पर्दछ । सो अभियानमा हजारौं व्यक्ति र लगानीकर्ताहरू एकीकृत र समायोजित हुनुपर्छ । बल्ल मात्र सार्थक रूपमा आर्थिक क्रान्तिको बहस छेड्न सकिन्छ भन्ने ठम्याईका साथ २०७२ सालमा आरकेडी रियल स्टेट एण्ड कन्स्ट्रक्सन लि. नामको सार्वजनिक कम्पनी स्थापना गर्ने ठोस निचोडमा पुग्यौँ । रियल स्टेटको नामको सार्वजनिक  कम्पनी स्थापना र सञ्चालनका आआफ्ना खालका जोखिमहरू थिए । सँगसँगै सार्वजनिक कम्पनीको अभ्याससमेत नगरिएको परिप्रेक्ष्यमा ठूलो बहसको माझ कम्पनी दर्ता भएको थियो । सुरुवातदेखि छलफल गरी केही महत्वपूर्ण साझेदारहरूले सार्वजनिक कम्पनी भनेपछि अगाडि बढ्ने आँट गर्ने कुरैभएन । निजहरूलाई स–सम्मान विदा गर्दैगर्दा केही नयाँ साझेदार  साथीहरूले अबको निकास  यसैबाट सम्भव छ, फराकिलो आर्थिक दायरा बनाउने नेतृत्वदायी भूमिकासमेत खेल्ने साहस र आँट गर्नुपर्नेछ भन्ने हौसलाका साथ संस्थापक सञ्चालक ९ जना रहेर आरकेडी स्थापना हुन पुगेको थियो । सार्वजनिक कम्पनीको जटिलताका विषयमा जानकार रहँदारहँदै पनि कम्पनीले केही पाउन केही  गुमाउन तयार हुनुपर्दछ । हामी अगाडि बढ्न सक्यौं भने आर्थिक अभियान नेतृत्व गर्ने अवसर छ । साथै  आर्थिक स्वतन्त्रताको जग बसाउने अवसर पनि रहन्छ । यो अवसर कम्पनीको सफलताले मात्र दिन सक्छ । दुर्भाग्यवश, असफल हुने भनेको पनि वर्तमान अवस्थाभन्दा पनि विकसित हुनु हो भन्ने  निष्कर्षमा पुग्यौँ । हामीसँग  सामूहिक रूपमा कार्य गरेका इतिहासको अध्ययन,सहकारीमार्फत्पाचौँ हजार व्यक्तिहरूसँग गरेको समझदारी, लगानी र व्यवस्थापनको आफ्नै अनुभव र विकासको सफलताले सहकारीबाट मात्र आर्थिक अभियानको नेतृत्व गर्न सकिँदैन भन्ने ठोस निष्कर्ष निकाली  सहकारीसहितको कर्पाेरेट क्षेत्रबाट समृद्धिको अभियान, आर्थिक क्याम्पियन, औद्योगिक क्याम्पियन, उत्पादन क्याम्पियन गराउन सकिन्छ भन्ने कम्पनीको बुझाई हो । यसले मात्र दीर्घकालीन कम्पनीहरू र सयौं सहायक  कम्पनीहरूको प्रवद्र्धन गर्दै पर्यटन पूर्वाधार क्षेत्र र आर्थिक उपार्जनको पूर्वाधार निर्माणको क्षेत्रमा उल्लेखनीय योगदान पु¥याउन सक्छ भन्ने हाम्रो तीव्र चाहना र निष्कर्ष रहेको थियो । यो कम्पनी समूह स्थापना पूर्वको उर्वरभूमि २०६५ साल देखिको श्री बिहानी बचत तथा ऋण सहकारी संस्था लि. को गतिविधिहरूको संश्लेषण हो । कम्पनीका संस्थापक ९ जना सञ्चालक र अधिकांश प्रवद्र्धकहरू समेत निज संस्थामा प्रवद्र्धनका लागि कम्पनीमा सहभागी हुनु यसको गतिलो प्रमाण हो ।</p>
                              <p>यो कम्पनी समूहको संस्थापनमा सहकारी क्षेत्रको उल्लेखनीय योगदान रहेको छ । साथसाथै श्री बिहानी ५ औं हजार तत्कालीन शेयरधनीहरूको पसिना, मिहेनत र विचार आदर्श समेतले निर्णायक रूपमा भूमिका खेलेको छ । फलस्वरुप सार्वजनिक कम्पनी खोल्ने अवधारणाले मूर्त रूप प्राप्त गर्न सकेको हो । मुख्य सहायक तर निर्णायक निचोडमा पुग्दा यो कम्पनी स्वदेशमा रहने निम्न र मध्यम वर्गका नेपालीजन र विदेशमा पसिना बगाएका निम्न र मध्यम वर्गका प्रवासी नेपालीहरू बिच अनुभव, सिप, श्रम, सामाजिक उद्यम र पँुजीको एकीकृत सम्पादनको अभिव्यक्तिको रूपमा स्थापना भएको हो । सोहीअनुसार संसारभरि आफ्नो उपस्थितिलाई दरिलोदेखिने गरी प्रकाशित गरेको छ । अन्ततः यो कम्पनी समूह समग्र पक्षका व्यवसायिक चाहनाहरू र सबै पक्षहरू समेटिएको नेपाली निम्न मध्यम वर्गको नेतृत्व रहेको बृहत्तर कम्पनी समूह हो । यसको उद्देश्य सामूहिक आर्थिक मुक्ति र राष्ट्रको समृद्धिबाहेक केही पनि रहेको छैन । यो दीर्घकालीन बाटो तय गरेको कम्पनी स्थापना गर्दा कम्पनीका संस्थापक सञ्चालक (१) रामचन्द्र शर्मा (२) किरण पोखरेल (३) रामप्रसाद शर्मा (४)धर्मराज भण्डारी (५) धन प्रसाद पाध्या (६) हरि प्रसाद गौतम (७)अम्बिका प्रसाद पौडेल (८) सन्तोष अधिकारी (९) विष्णु पुन रहनु भएको थियो । आज तिनै ९ जना युवाहरूले स्थापना गरेको कम्पनी यो समूहगत कम्पनीको नेतृत्वदायी स्थानमा हुनु ठूलो गर्व र गौरवको कुरा बन्न पुगेको छ ।</p>
                              <p>इतिहास दोहोरिँदैन निरन्तर विकास हुने गर्दछ । जसको ज्वलन्त उदाहरण कष्टपूर्ण घडीमा कम्पनीलाई थप उर्जाका साथ नयाँ जीवन दिने एकीकृत साहस नै हो । यसै उद्घोषका साथ कम्पनीले केवलकार बनाउने बृहत्तर  उद्देश्यसहित पञ्चासे केलवकार एण्ड टुर्स लि. संस्थापनको कार्यनीति लियो । यो कार्यनीतिलाई सफल बनाउनका लागि चिन्तामणि शर्मा, प्रेम शर्मा सुवेदी, प्रेम गिरी, कमल बस्नेत, कृष्ण बहादुर ढकाल, कृष्ण तिवारी र अमृत पौडेल लगायतको समूहले गतिलो योगदान गरेकोछ । इतिहासको पाइला रोकिँदैन बरु झन्व्यवस्थित बन्दै अगाडि बढ्छ । यही क्रममा पर्यटकीय नगरी बन्दीपुरमा पर्यटन पूर्वाधारयुक्त केवलकार परियोजना अगाडि बढाउने अवसर पक्रने गरी बन्दीपुर केवलकार प्रा.लि. कम्पनीले प्राप्ति गर्ने सौभाग्य पायो । यस कदममा  त्तारानाथ उपाध्याय, कृष्ण अधिकारी, शिव प्रसाद शर्माका साथै स्वदेश र विदेशमा बस्ने नेपाली मनहरूले अभियानलाई थप समृद्ध सुसम्पन्न पार्दै लगेको कम्पनीको विकसित इतिहास आज अझ गर्व गर्नलायक बनेको छ । गर्वमा रमाउनुभन्दा पनि यथार्थ योगदान दिनु आजको आवश्यकता हो भन्ने निष्कर्षमा कम्पनी समूह पुगेको छ । आरकेडी समूह सीमित स्वार्थ र सीमित व्यक्तिहरूको आर्थिक उपाजर्नको साधनको लागिभन्दा पनि समग्र देशलाई उद्वेलित गर्ने अभियान बन्नुपर्छ भन्ने यसको दृष्टिकोण हो । आरकेडी समूह “सामाजिक व्यवसाय” को निर्विकल्प पहिचान हो ।</p>
                              <header class="section-header">
                                <h3>Hierarchy <strong>structure</strong></h3>
                              </header>
                              <p>आरकेडी होल्डिबस् बन्ने प्रक्रिया सुरु भएको छ । रियल स्टेटलाई मात्र आधार मानेको कम्पनीलाई अझ व्यापक रूपमा अन्य कम्पनी संस्थापन, प्रवर्धन र एक्विजिसन गर्ने हैसियतमा अझ बलियो बनाउन साधारण सभाको म्यान्डेट मुताबिक कार्य भएको छ । आफ्ना उद्देश्यहरू समेत थप गरेकोछ । जसअन्तर्गतः १) उत्पादनमूलक एवम्प्रविधिमूलक उद्योगहरू प्रवर्धन गर्ने र व्यवसायिक रूपमा स्वपुँजी लगानी गर्ने । २) एस्क्रो सेवा प्रदान गर्ने साथै लगानी प्रवर्धन गर्ने । ३) निर्माण तथा रियल स्टेटको इभेन्ट व्यवस्थापन गर्ने । ४) परियोजना बैंक स्थापना मार्फत् परियोजना डिपिआरसहित प्याकेज उत्पादन गरी बिक्री गर्ने उद्देश्यहरू राखिएको छ । जुन दीर्घकालीन हिसाबले चिरस्थायी बन्ने आधार स्तम्भको कोशेढुंगा बन्न सक्दछ भन्ने कम्पनीको निष्कर्ष रहेको छ । आरकेडी होल्डिबस् भएपश्चात् कम्पनी समूहको चेन यसप्रकार रहनेछ ।</p>
                             <div class="d-flex justify-content-center">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/sub.jpg" alt="">
                             </div>
                           
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
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/summary.jpg" alt="">
                             </div>
                        </div>

                
                    </div>
                </div><!-- End Tab Content 3 -->


            </div>

        </div>
    </section><!-- End Features Section -->

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