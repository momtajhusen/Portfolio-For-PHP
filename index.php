<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">

  <!--.................................. CDN ..................................-->

 
<!-- JS, Popper.js, jQuery, Bootstrap.js-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
       .social-links_header a:hover {
          background: #149ddd !important;
          color: #fff;
          text-decoration: none;
        }
       
        .message_form input, textarea {
          border:1px solid #ccc;
          outline:none;
          border-radius:5px !important;
          padding-left:10px !important;
        }

        .submit{
            width:200px;
            height:30px;
            background:#149DDD;
            color:white;
        }


  </style>
  
</head>

<body>
<?php 
        require("Admin/php/database.php");
        include('UserInformation.php');

                  // Header Details Reteive
                        $header = "SELECT * FROM header  LIMIT 1"; 
                        $get_header_response = $db->query($header);
                        $header_data = $get_header_response->fetch_assoc();
                        $header_img  =  $header_data['img'];
                        $header_name  =  $header_data['name'];
                        $i_am  =  $header_data['i_am'];

                  // Resume Details Reteive
                        $resume_upload = "SELECT * FROM resume_upload  LIMIT 1"; 
                        $resume_upload_response = $db->query($resume_upload);
                        $resume_data = $resume_upload_response->fetch_assoc();
                        $cv_type =  $resume_data['cv_type'];
                        $cv_path  =  $resume_data['cv_path']; 

                  // About Details Reteive
                        $about = "SELECT * FROM about  LIMIT 1"; 
                        $get_about_response = $db->query($about);
                        $about_data = $get_about_response->fetch_assoc();

                        $about_img  =  $about_data['img'];
                        $about_as  =  $about_data['About_as'];
                        $you_are  =  $about_data['you_are'];
                        $you_are_as  =  $about_data['you_are_as'];

                        $Birthday  =  $about_data['Birthday'];
                        $Age  =  $about_data['Age'];
                        $Website  =  $about_data['Website'];
                        $Degree  =  $about_data['Degree'];
                        $Phone  =  $about_data['Phone'];
                        $PhEmailone  =  $about_data['PhEmailone'];
                        $City  =  $about_data['City']; 
                        $Freelance  =  $about_data['Freelance']; 
                        $Officiis_eligendi  =  $about_data['Officiis_eligendi'];

                    // Facts Details Reteive
                    $facts = "SELECT * FROM facts  LIMIT 1"; 
                    $get_facts_response = $db->query($facts);
                    $facts_data = $get_facts_response->fetch_assoc();

                    $facts_display  =  $facts_data['display'];

                    $Facts_as  =  $facts_data['Facts_As'];

                    $Happy_clients_no  =  $facts_data['happy_clients_no'];
                    $Happy_clients_text  =  $facts_data['happy_clients_text'];
                    $Projects_no  =  $facts_data['projects_no'];
                    $Projects_text  =  $facts_data['projects_text'];
                    $Hours_support_no  =  $facts_data['hours_support_no'];
                    $Hours_support_text  =  $facts_data['hours_support_text'];
                    $Hard_workers_no  =  $facts_data['hard_workers_no'];
                    $Hard_workers_text  =  $facts_data['hard_workers_text'];


                    // Skills Details Reteive
                    $skills = "SELECT * FROM skills  LIMIT 1"; 
                    $get_skills_response = $db->query($skills);
                    $skills_data = $get_skills_response->fetch_assoc();

                    $skill_as  =  $skills_data['skill_as'];

                    $skills_a  =  $skills_data['skill_a'];
                    $skills_b  =  $skills_data['skill_b'];
                    $skills_c  =  $skills_data['skill_c'];
                    $skills_d  =  $skills_data['skill_d'];
                    $skills_e  =  $skills_data['skill_e'];
                    $skills_f  =  $skills_data['skill_f'];
                    $skills_g  =  $skills_data['skill_g'];
                    $skills_h  =  $skills_data['skill_h'];
                    $skills_i  =  $skills_data['skill_i'];
                    $skills_j  =  $skills_data['skill_j'];

                    $pct_a  =  $skills_data['pct_a'];
                    $pct_b  =  $skills_data['pct_b'];
                    $pct_c  =  $skills_data['pct_c'];
                    $pct_d  =  $skills_data['pct_d'];
                    $pct_e  =  $skills_data['pct_e'];
                    $pct_f  =  $skills_data['pct_f'];
                    $pct_g  =  $skills_data['pct_g'];
                    $pct_h  =  $skills_data['pct_h'];
                    $pct_i  =  $skills_data['pct_i'];
                    $pct_j  =  $skills_data['pct_j'];

                    $skill_btn_a = $skills_data["dispaly_a"];
                    $skill_btn_b = $skills_data["dispaly_b"];
                    $skill_btn_c = $skills_data["dispaly_c"];
                    $skill_btn_d = $skills_data["dispaly_d"];
                    $skill_btn_e = $skills_data["dispaly_e"];
                    $skill_btn_f = $skills_data["dispaly_f"];
                    $skill_btn_g = $skills_data["dispaly_g"];
                    $skill_btn_h = $skills_data["dispaly_h"];
                    $skill_btn_i = $skills_data["dispaly_i"];
                    $skill_btn_j = $skills_data["dispaly_j"]; 

                    // Resume Details Reteive
                    $Resume = "SELECT * FROM resume  LIMIT 1"; 
                    $get_Resume_response = $db->query($Resume);
                    $Resume_data = $get_Resume_response->fetch_assoc();
                    $Resume_display  =  $Resume_data['display'];

                    // Portfolio Details Reteive
                    $Portfolio = "SELECT * FROM portfolio  LIMIT 1"; 
                    $get_Portfolio_response = $db->query($Portfolio);
                    $Portfolio_data = $get_Portfolio_response->fetch_assoc();
                    $Portfolio_display  =  $Portfolio_data['display'];

                    // Services Details Reteive
                    $Services = "SELECT * FROM services  LIMIT 1"; 
                    $get_Services_response = $db->query($Services);
                    $Services_data = $get_Services_response->fetch_assoc();
                    $Services_display  =  $Services_data['display'];

                    // Testimonials Details Reteive
                    $Testimonials = "SELECT * FROM testimonials  LIMIT 1"; 
                    $get_Testimonials_response = $db->query($Testimonials);
                    $Testimonials_data = $get_Testimonials_response->fetch_assoc();
                    $Testimonials_display  =  $Testimonials_data['display'];
                    

                    // Contact Details Reteive
                    $Contact = "SELECT * FROM contact  LIMIT 1"; 
                    $get_Contact_response = $db->query($Contact);
                    $Contact_data = $get_Contact_response->fetch_assoc();

                    $contact_as  =  $Contact_data['contact_as'];
                    $location  =  $Contact_data['Location'];
                    $Email  =  $Contact_data['Email'];
                    $Call  =  $Contact_data['Call_No']; 



                    // Social_media Details Reteive
                    $Social_media = "SELECT * FROM social_media  LIMIT 1"; 
                    $get_Social_media_response = $db->query($Social_media);
                    $Social_media_data = $get_Social_media_response->fetch_assoc();

                    $Select_a  =  $Social_media_data['select_a'];
                    $Select_b  =  $Social_media_data['select_b'];
                    $Select_c  =  $Social_media_data['select_c'];
                    $Select_d  =  $Social_media_data['select_d'];
                    $Select_e  =  $Social_media_data['select_e'];

                    $Url_a  =  $Social_media_data['url_a'];
                    $Url_b  =  $Social_media_data['url_b'];
                    $Url_c  =  $Social_media_data['url_c'];
                    $Url_d  =  $Social_media_data['url_d'];
                    $Url_e  =  $Social_media_data['url_e'];

                    $ch=curl_init();
                    curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                    $result=curl_exec($ch);
                    $result=json_decode($result);

                    if($result->status=='success'){
                       $country = $result->country;
                       $state = $result->regionName;
                       $city = $result->city;
                       $isp = $result->isp;
                    }

                    $ip = UserInfo::get_ip();
                    $os = UserInfo::get_os();
                    $browser = UserInfo::get_browser();                    ;
                    $device = UserInfo::get_device();

                    if(!isset($_COOKIE['visit'])){
                        setCookie('visit','yes',time()+(60*60*24*30));
                        $store_data = "INSERT INTO `visitor`(`country`, `region`, `city`, `isp`, `ip`, `os`, `device`, `browser`) VALUES ('$country','$state','$city','$isp','$ip','$os','$device','$browser')"; 
                        $db->query($store_data);
                    }
    ?>

  <!-- ======= Mobile nav toggle button ======= -->
     <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
 

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        
        <img src="<?php echo $about_img; ?>" class="img-fluid rounded-circle mb-3">
        <h1 class="text-light"><a href="#"><?php echo $header_name; ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="<?php echo $Url_a; ?>" class="twitter <?php echo 'd-'.$Select_a; ?>"><i class="fa <?php echo $Select_a; ?>"></i></a>
          <a href="<?php echo $Url_b; ?>" class="facebook  <?php echo 'd-'.$Select_b; ?>"><i class="fa <?php echo $Select_b; ?>"></i></a>
          <a href="<?php echo $Url_c; ?>" class="instagram <?php echo 'd-'.$Select_c; ?>"><i class="fa <?php echo $Select_c; ?>"></i></a>
          <a href="<?php echo $Url_d; ?>" class="google-plus <?php echo 'd-'.$Select_d; ?>"><i class="fa <?php echo $Select_d; ?>"></i></a>
          <a href="<?php echo $Url_e; ?>" class="linkedin <?php echo 'd-'.$Select_e; ?>"><i class="fa <?php echo $Select_e; ?>"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar"> 
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#skills" class="nav-link scrollto"><i class="fa fa-book"></i> <span>Skills</span></a></li>
          <li class="<?php echo $Resume_display; ?>" ><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li class="<?php echo $Portfolio_display; ?>"><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li class="<?php echo $Services_display; ?>"><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero"  style="background: url('<?php echo $header_img; ?>') top center;  background-size: cover; position:relative;" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container w-100 d-flex justify-content-center align-items-center flex-column" data-aos="fade-in">
      
      <div>
        <p class="w-100 m-0 mb-1 d-flex justify-content-center align-items-center" style="color:#149DDD; font-size:15px; font-family: 'Rye', cursive; font-weight:bold; letter-spacing: 2px;" >THIS IS</p>
        <h1 class="animate__animated animate__pulse animate__delay-5s animate__slow animate__infinite" style="letter-spacing: 1px;" ><?php echo $header_name; ?></h1>
        <p style="font-family: 'Rye', cursive;">I am <span class="typed" style="font-family: 'Rye', cursive;" data-typed-items="<?php echo $i_am; ?>"></span></p>
      </div>
    </div>

       <div class="header-scroll  d-flex justify-content-around align-items-center flex-column" style="width:100%; z-index:1; height:280px; position:absolute; bottom:40px;" >
          <div class="social-links_header mt-3 d-lg-none text-center w-100">
          <a class="animate__animated animate__bounceInDown animate__delay-0s <?php echo 'd-'.$Select_a; ?>" style="font-size: 18px; display: inline-block; background: #212431; color: #fff; line-height: 1; padding: 8px 0; margin-right: 4px; border-radius: 50%; text-align: center; width: 36px; height: 36px; transition: 0.3s;" href="<?php echo $Url_a; ?>" class="twitter <?php echo 'd-'.$Select_a; ?>"><i class="fa <?php echo $Select_a; ?>"></i></a>
          <a class="animate__animated animate__bounceInDown animate__delay-1s <?php echo 'd-'.$Select_b; ?>" style="font-size: 18px; display: inline-block; background: #212431; color: #fff; line-height: 1; padding: 8px 0; margin-right: 4px; border-radius: 50%; text-align: center; width: 36px; height: 36px; transition: 0.3s;" href="<?php echo $Url_b; ?>" class="facebook  <?php echo 'd-'.$Select_b; ?>"><i class="fa <?php echo $Select_b; ?>"></i></a>
          <a class="animate__animated animate__bounceInDown animate__delay-2s <?php echo 'd-'.$Select_c; ?>" style="font-size: 18px; display: inline-block; background: #212431; color: #fff; line-height: 1; padding: 8px 0; margin-right: 4px; border-radius: 50%; text-align: center; width: 36px; height: 36px; transition: 0.3s;" href="<?php echo $Url_c; ?>" class="instagram <?php echo 'd-'.$Select_c; ?>"><i class="fa <?php echo $Select_c; ?>"></i></a>
          <a class="animate__animated animate__bounceInDown animate__delay-3s <?php echo 'd-'.$Select_d; ?>" style="font-size: 18px; display: inline-block; background: #212431; color: #fff; line-height: 1; padding: 8px 0; margin-right: 4px; border-radius: 50%; text-align: center; width: 36px; height: 36px; transition: 0.3s;" href="<?php echo $Url_d; ?>" class="google-plus <?php echo 'd-'.$Select_d; ?>"><i class="fa <?php echo $Select_d; ?>"></i></a>
          <a class="animate__animated animate__bounceInDown animate__delay-4s <?php echo 'd-'.$Select_e; ?>" style="font-size: 18px; display: inline-block; background: #212431; color: #fff; line-height: 1; padding: 8px 0; margin-right: 4px; border-radius: 50%; text-align: center; width: 36px; height: 36px; transition: 0.3s;" href="<?php echo $Url_e; ?>" class="linkedin <?php echo 'd-'.$Select_e; ?>"><i class="fa <?php echo $Select_e; ?>"></i></a>
        </div>

<a class="animate__animated animate__lightSpeedInRight animate__delay-5s" href="assets/img/resume-cv.pdf" download="<?php echo $header_name.'_pdf'; ?>" style="font-size: 18px; color: #fff;transition: 0.3s;"><div class="p-2 text-light bg-gradient " style="border:0.5px solid #ddd; box-shadow: 10px 5px 5px #dd; border-radius: 5px;" >DOWNLOAD MY <?php echo $cv_type; ?></div></a>

       <div class="w-100 h-25 d-flex justify-content-center align-items-center flex-column " ><a href="#about" style=" text-decoration: none; color: #ccc;" class="nav-link scrollto"><div class=" d-lg-none d-flex justify-content-center align-items-center flex-column"> SCROLL DOWN <i class="fa fa-angle-double-down animate__animated animate__fadeInDown animate__slow animate__delay-5s animate__infinite	mt-3" style="font-size:30px;" ></i></div></a> </div>
     </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title  d-flex justify-content-center align-items-center flex-column ">
          <h2>About</h2>
          <p><?php echo $about_as; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?php echo $about_img; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <div class=" justify-content-center align-items-center flex-column" style="font-size:30px; font-weight: bold; " ><?php echo $you_are; ?></div>
            <p class="fst-italic">
            <?php echo $you_are_as; ?> 
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo  $Birthday; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $Website; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $Phone; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $City; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo  $Age; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo  $Degree; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?php echo  $PhEmailone; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo  $Freelance; ?></span></li>
                </ul>
              </div>
            </div>
            <p>
               <?php echo $Officiis_eligendi; ?>
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title d-flex justify-content-center align-items-center flex-column">
          <h2>Skills</h2>
          <p><?php echo $skill_as; ?></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress <?php echo $skill_btn_a; ?>">
              <span class="skill"><?php echo $skills_a; ?><i class="val"><?php echo $pct_a.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_a; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress <?php echo $skill_btn_c; ?>">
              <span class="skill"><?php echo $skills_c; ?><i class="val"><?php echo $pct_c.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped  h-100" role="progressbar" aria-valuenow="<?php echo $pct_c; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress <?php echo $skill_btn_e; ?>">
              <span class="skill"><?php echo $skills_e; ?><i class="val"><?php echo $pct_e.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_e; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress <?php echo $skill_btn_g; ?>">
              <span class="skill"><?php echo $skills_g; ?><i class="val"><?php echo $pct_g.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_g; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress <?php echo $skill_btn_i; ?>">
              <span class="skill"><?php echo $skills_i; ?><i class="val"><?php echo $pct_i.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_i; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>



          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <div class="progress <?php echo $skill_btn_b; ?>">
              <span class="skill"><?php echo $skills_b; ?><i class="val"><?php echo $pct_b.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_b; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress <?php echo $skill_btn_d; ?>">
              <span class="skill"><?php echo $skills_d; ?><i class="val"><?php echo $pct_d.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_d; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          
            <div class="progress <?php echo $skill_btn_f; ?>">
              <span class="skill"><?php echo $skills_f; ?><i class="val"><?php echo $pct_f.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_f; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress <?php echo $skill_btn_h; ?>">
              <span class="skill"><?php echo $skills_h; ?><i class="val"><?php echo $pct_h.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_h; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress <?php echo $skill_btn_j; ?>">
              <span class="skill"><?php echo $skills_j; ?><i class="val"><?php echo $pct_j.'%'; ?></i></span>
              <div class="progress-bar-wrap" style="height:15px;">
                <div class="progress-bar progress-bar-striped h-100" role="progressbar" aria-valuenow="<?php echo $pct_j; ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts <?php echo $facts_display;?>">
      <div class="container">

        <div class="section-title d-flex justify-content-center align-items-center flex-column ">
          <h2>Facts</h2>
          <p><?php echo $Facts_as;?></p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6" data-aos="fade-up">
            <div class="count-box d-flex justify-content-center align-items-center flex-column ">

              <div>
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $Happy_clients_no;?>" data-purecounter-duration="1" class="purecounter"></span>
              </div>

              <p style="width:65%" ><strong>Happy Clients</strong><?php echo '<br>'.$Happy_clients_text;?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box d-flex justify-content-center align-items-center flex-column">
               
             <div>
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $Projects_no;?>" data-purecounter-duration="1" class="purecounter"></span>
              </div>

              <p style="width:65%" ><strong>Projects</strong><?php echo '<br>'.$Projects_text;?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box d-flex justify-content-center align-items-center flex-column">
              <div>
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $Hours_support_no;?>" data-purecounter-duration="1" class="purecounter"></span>
              </div>
              <p style="width:65%"><strong>Hours Of Support</strong><?php echo '<br>'.$Hours_support_text;?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div>
            <div class="count-box d-flex justify-content-center align-items-center flex-column">
              <div>
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $Hard_workers_no;?>" data-purecounter-duration="1" class="purecounter"></span>
              </div>
              <p style="width:65%"><strong>Hard Workers</strong><?php echo '<br>'.$Hard_workers_text;?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume <?php echo $Resume_display;?>">
      <div class="container">

        <div class="section-title d-flex justify-content-center align-items-center flex-column">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Dipak Kushawa</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg <?php echo $Portfolio_display;?>">
      <div class="container">

        <div class="section-title d-flex justify-content-center align-items-center flex-column">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services <?php echo $Services_display;?>">
      <div class="container">

        <div class="section-title d-flex justify-content-center align-items-center flex-column">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg <?php echo $Testimonials_display;?>">
      <div class="container">

        <div class="section-title d-flex justify-content-center align-items-center flex-column">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title d-flex justify-content-center align-items-center flex-column">
          <h2>Contact</h2>
          <p><?php echo  $contact_as; ?></p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-12 d-flex align-items-stretch d-flex justify-content-center align-items-center">

            <div class="info row col-12">

              <div class="address col-lg-4 col-12 mb-lg-2 mb-4 d-flex justify-content-center align-items-center flex-column ">
                <i class="bi bi-geo-alt"></i>
                <h4 class="mx-0 mt-1 px-0">ADDRESS</h4>
                <p class="mx-0 px-0 text-center w-75" style="line-height: 2;"><?php echo  $location; ?></p>
              </div>

              <div class="email col-lg-4 col-12 mb-lg-2 mb-4 d-flex justify-content-center align-items-center flex-column ">
                <i class="bi bi-envelope"></i>
                <h4 class="mx-0 mt-1 px-0">EMAIL</h4>
                <p class="mx-0 px-0 text-center w-75" style="line-height: 2;"><?php echo  $Email; ?></p>
              </div>

              <div class="phone col-lg-4 col-12 mb-lg-2 mb-4 d-flex justify-content-center align-items-center flex-column ">
                <i class="bi bi-phone"></i>
                <h4 class="mx-0 mt-1 px-0" >CALL</h4>
                <p class="mx-0 px-0 text-center" style="line-height: 2; width:150px;"><?php echo  $Call; ?></p>
              </div>
             
            
            <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            </div>

          </div>

          <div class="col-12 mt-3  d-flex align-items-stretch d-flex justify-content-center align-items-center">
              <div  class="php-email-form w-lg-75 w-md-100">
                  <h4 class="my-3 d-flex justify-content-center align-items-center">Your Message</h4>
                <form class="message_form " id="message_form" enctype="multipart/form-data">

                    <div class="mb-3 d-flex justify-content-center flex-column" >
                      <span style="margin-bottom:5px;">Your Name</span>
                      <input type="text" required name="name">
                    </div>

                    <div class="mb-3 d-flex justify-content-center flex-column" >
                      <span style="margin-bottom:5px;">Your Email</span>
                      <input type="email" required name="email">
                    </div>

                    <div class="mb-3 d-flex justify-content-center flex-column" >
                      <span style="margin-bottom:5px;">Subject</span>
                      <input type="text" required name="subject">
                    </div>

                    <div class="mb-3 d-flex justify-content-center flex-column" >
                      <span style="margin-bottom:5px;">Message</span>
                       <textarea name="message" required cols="5" rows="8"></textarea>
                    </div>

                    <div class="mb-3 d-flex justify-content-center align-items-center">
                      <input class="submit" type="submit" value="SEND MESSAGE">
                    </div>

                </form>
              </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
 
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Developed By <a href="#">Dipak Kushwaha.</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>

   <script>

     $(document).ready(function(){
      $(".message_form").submit(function(e){
         e.preventDefault();

          $.ajax({
            type : "POST",
            url : "Admin/php/email_send.php",
            data : new FormData(this),
            contentType : false,
            processData : false,
            catch : false,
            success : function(response){
              alert(response);
              $('#message_form')[0].reset();
            }
          });

    });
  });

   </script>
   

</body>

</html>