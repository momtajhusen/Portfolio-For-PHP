<?php
 session_start();

 if(isset($_SESSION['username']))    
{
   echo "";
}

else
{
  echo '<script>window.location.href = "index.php";</script>';
   exit("page not fount");
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--.................................. CDN ..................................-->

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<!-- JS, Popper.js, jQuery, Bootstrap.js-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- fa fa-icon Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Other file -->
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

<script src="ajax/update.js"></script>





<!--.........................................................................-->

</head>

   <style>

       *{
           margin:0px;
           padding:0px;
           overflow:none;
       }

       /* width */
::-webkit-scrollbar {
  width: 0px;
  height:0px;
  background:black;
}
 
 

       .contener{
           width:400px;
           box-shadow:0px 0px 5px 3px black;
           background: #000232;
           position: relative;
       }

      .header{
        width:400px;
        height:70px;
        color:white;
        z-index: 1;
        background-color:#000232;
        box-shadow: 0 8px 6px -6px black;
        position: fixed;
        top: 0;
        border-bottom-right-radius: 40px;
        animation: mymove 10s infinite;
      }
 
@keyframes mymove {
  0%   {background-color:#0D0C4A;}
  25%  {background-color:#000232;}
  50%  {background-color:#0D0C4A}
  75%  {background-color:#000232;}
  100% {background-color:#0D0C4A}
}



      .header-pic{
          width:100%;
          header:50px;
      }

      .header-pic img{
          width:100%;
          header:50px;
          border:2px solid red;
          border:2px dashed #ddd;
          border-bottom:0px;
          opacity: 0.5;
      }
      

      .header-pic-mobile{
          width:100%;
          border:2px solid red;
          border:2px dashed #ddd;
          border-bottom:0px;
          opacity: 0.5;
      }

      
      .header-pic-mobile img{
          width:45%;
      }
 

 
      .change-img-btn,.change_img_mobile{
          width:100%;
          padding:10px;
          border:none;
          outline:none;
          background: #000;
          color:white;
          border:2px dashed #ddd;
          border-top:0px;
          opacity: 0.5;
      }

 

      form{
        background: #000232;
      }

      input{
        height:40px;
        outline:none;
        border:none;
        padding-left:10px;
        color:white;
        border:2px solid #B689B0;
        background:none;
      }

      textarea{
        outline:none;
        border:none;
        padding:10px;
        color:white;
        border:2px solid #B689B0;
        background:none;
        text-align:center;
      }

      input,select{
          width:100%;
      }

      select{
        height:40px;
        outline:none;
        border:none;
        text-align:center;
        background:#21203b;
        border:2px solid #B689B0;
        border-bottom:0px;
        color:white;
      }

      select.decorated option:hover {
    box-shadow: 0 0 10px 100px #1882A8 inset;
}

      #social-media-input{
          border-top:0px;
      }

      .skill-input{
        width:80%;
        border-radius:0px;
      }

      .percentage-input{
        width:15%;
        border-radius:0px;
      }

      .percentage{
        width:10%;
        border:2px solid #B689B0;
      }

      .header-container{
          border-bottom:0px solid #ddd;
    
      }

      .submit{
        width:70%;
        background-color:#090845;
      }
     
      .menu-content{
        width:350px;
        height:100vh;
        position: fixed;
        background: #030437;
        top:-100%;
        z-index: 1;
        transition: 1s;
        box-shadow: 0px 8px 6px -6px black;
      }

      .progress_con{
        width:100%;
        border-radius:5px;
        z-index:1;
        position:  fixed;
        top:45%;
        left:0px;
      }

      .progress-center{
        width:350px;
        height:200px;
        background:#0D0C4A;
        box-shadow: 0px 0px 10px 5px black;
        border-radius:10px;
      }

      a{
        text-decoration: none;
      }


   </style>

<body   class="d-flex justify-content-center align-items-center bg-dark">
<!-- Container  -->
<div class="contener">
  <!-- Menu Container profile  -->
<div class="menu-content pt-5">
      <div class="w-100 h-25 mt-4 d-flex justify-content-center align-items-center" style="border-bottom: 5px solid #010333;">
        <div style="  width:130px; height:130px;border-radius:100px;border-bottom: 5px solid #010333;" >
          <img src="../assets/img/profile-img.jpg?v=<?php echo time(); ?>" class="img-fluid rounded-circle mb-3">
       </div>
      </div>

      <div class="w-100 text-light p-3" style="background:#0D0C4A">
      <i class="fa fa-unlock-alt mt-2" style="font-size:21px;" aria-hidden="true"></i> Change Password 
      </div>

      <a href="visitor_check.php"><div class="w-100 text-light p-3" style="background:#000232">
        <i class="fa fa-users ml-3" aria-hidden="true"></i>  Visitor Analytics
      </div></a>

      <div class="w-100 text-light p-3" style="background:#0D0C4A">
      <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
      </div>

  </div>


<?php 
        require("php/database.php");

                  // Header Details Reteive
                      $header = "SELECT * FROM header  LIMIT 1"; 
                        $get_header_response = $db->query($header);
                        $header_data = $get_header_response->fetch_assoc();

                        $header_img  =  $header_data['img'];
                        $header_name  =  $header_data['name'];
                        $i_am  =  $header_data['i_am'];
                        $time  =  $header_data['time'];

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

                    $facts_on_off  =  $facts_data['on_off'];
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

                    $btn_a = $skills_data["btn_a"];
                    $btn_b = $skills_data["btn_b"];
                    $btn_c = $skills_data["btn_c"];
                    $btn_d = $skills_data["btn_d"];
                    $btn_e = $skills_data["btn_e"];
                    $btn_f = $skills_data["btn_f"];
                    $btn_g = $skills_data["btn_g"];
                    $btn_h = $skills_data["btn_h"];
                    $btn_i = $skills_data["btn_i"];
                    $btn_j = $skills_data["btn_j"]; 


                    // Resume Details Reteive
                    $Resume = "SELECT * FROM resume  LIMIT 1"; 
                    $get_Resume_response = $db->query($Resume);
                    $Resume_data = $get_Resume_response->fetch_assoc();
                    $Resume_on_off  =  $Resume_data['on_off'];

                    // Portfolio Details Reteive
                    $Portfolio = "SELECT * FROM portfolio  LIMIT 1"; 
                    $get_Portfolio_response = $db->query($Portfolio);
                    $Portfolio_data = $get_Portfolio_response->fetch_assoc();
                    $Portfolio_on_off  =  $Portfolio_data['on_off'];

                    // Services Details Reteive
                    $Services = "SELECT * FROM services  LIMIT 1"; 
                    $get_Services_response = $db->query($Services);
                    $Services_data = $get_Services_response->fetch_assoc();
                    $Services_on_off  =  $Services_data['on_off'];

                    // Testimonials Details Reteive
                    $Testimonials = "SELECT * FROM testimonials  LIMIT 1"; 
                    $get_Testimonials_response = $db->query($Testimonials);
                    $Testimonials_data = $get_Testimonials_response->fetch_assoc();
                    $Testimonials_on_off  =  $Testimonials_data['on_off'];

                    // Contact Details Reteive
                    $contact = "SELECT * FROM contact  LIMIT 1"; 
                    $get_contact_response = $db->query($contact);
                    $contact_data = $get_contact_response->fetch_assoc();

                    $contact_as  =  $contact_data['contact_as'];
                    $location  =  $contact_data['Location'];
                    $Email  =  $contact_data['Email'];
                    $Call  =  $contact_data['Call_No'];

                    // social_media Details Reteive
                    $social_media = "SELECT * FROM social_media  LIMIT 1"; 
                    $get_social_media_response = $db->query($social_media);
                    $social_media_data = $get_social_media_response->fetch_assoc();

                    $select_a  =  $social_media_data['select_a'];
                    $select_b  =  $social_media_data['select_b'];
                    $select_c  =  $social_media_data['select_c'];
                    $select_d  =  $social_media_data['select_d'];
                    $select_e  =  $social_media_data['select_e'];

                    $url_a  =  $social_media_data['url_a'];
                    $url_b  =  $social_media_data['url_b'];
                    $url_c  =  $social_media_data['url_c'];
                    $url_d  =  $social_media_data['url_d'];
                    $url_e  =  $social_media_data['url_e'];
    ?>
 
    <div class="header pl-4 d-flex">
      <div class="w-75 pl-5 h-100 d-flex justify-content-center align-items-center animate__animated animate__backInDown" style="font-size:20px; font-family: 'Anton', sans-serif;   letter-spacing: 2px;">
        <?php echo $header_name; ?>
      </div>

      <div class="w-25 h-100 d-flex justify-content-center align-items-center animate__animated animate__jello animate__infinite animate__slower animate__delay-2s ">
            <i class="fa fa-bars" id="menu-icon" aria-hidden="true" style="font-size:25px;" ></i> <i class="fa fa-times close-icon d-none" aria-hidden="true" style="font-size:25px;"></i>  
      </div>
    </div>


    
<form id="join_form" enctype="multipart/form-data"> 
    <!-- Header  -->
    <div class="p-2 pb-3 header-container" >
     
    <div class=" d-flex justify-content-center align-items-center text-light  p-2" >Header</div>

    <!-- Pc and Mobile Image -->

    <div class="p-2 h-25 mt-5 w-100 bg-dark d-flex justify-content-around align-items-center text-light" style="font-size:12px;font-weight:bold;">
         Visitor Info
    </div>
    

<div class="tab-content " id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="header-pic mt-3" >
          <img id="blah" src="../assets/img/hero-bg.jpg?v=<?php echo time(); ?>" alt="your image">
        </div>
        <label  class="change-img-btn d-flex justify-content-center align-items-center" for="imgInp">Change image 1920 x 1280</label>
        <input name="header-image" value="C:\xampp\htdocs\Deepak portfolio\assets\img\hero-bg.jpg" accept="image/*" class="d-none" type='file' id="imgInp">
  </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="header-pic-mobile mt-5 d-flex justify-content-center align-items-center " >
          <img id="blah_mobile_btn" height="255px" width="100px" src="../assets/img/mobile.jpg?v=<?php echo time(); ?>" alt="your image">
        </div>
     <div class="w-100 d-flex justify-content-center align-items-center" >
        <label  class="change_img_mobile d-flex justify-content-center align-items-center" for="imgInp_mobile">Change image 719 x 1280</label>
        <input name="header-image-mobile" value="C:\xampp\htdocs\Deepak portfolio\assets\img\mobile.jpg" accept="image/*" class="d-none" type='file' id="imgInp_mobile">
      </div>
  </div>
</div>

<ul class="nav nav-pills mb-3 mt-2" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Desktop</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mobile</button>
  </li>
</ul>

     
     <label  class="text-light" for="name">Change Name</label><br>
     <input name="header-name" value="<?php echo $header_name; ?>" type="text" id="name"><br><br>

     <label  class="text-light" for="am-i">I'm</label><br>
     <input name="i-am" value="<?php echo $i_am; ?>" type="text" id="am-i" class="mb-3"><br>

     <label  class="text-light" for="name">Upload your Resume or CV</label><br>
     <select name="cv_resume_name" class="cv_resume" class="mt-3">
          <option class="Resume_name"  value="RESUME">RESUME</option>
          <option class="CV_name"  value="CV">CV</option>
          <option class="resume_none" value="none">Remove</option>
     </select>
     
    <input type="file" class="d-none" id="cv_resume_file" name="cv_resume_file" accept=".pdf">
    <label  class="change-img-btn d-flex justify-content-center align-items-center" for="cv_resume_file">Upload </label>
    


    </div>

    <!-- About  -->
    <div class="p-2  header-container" style="background:#0d0c4a" >
      <div class="d-flex justify-content-center align-items-center text-light  p-2 h4" >About</div>
      
      <div class="header-pic" >
       <img id="about_img" src="../assets/img/profile-img.jpg?v=<?php echo time(); ?>" alt="your image">
      </div>

      <label  class="change-img-btn d-flex justify-content-center align-items-center" for="about_img_btn">Change image 600 x 600</label>
     <input name="profile-img" value="../assets/img/profile-img.jpg" accept="image/*" class="d-none" type='file' id="about_img_btn">
    
      <label  class="text-light" for="name">About As.</label><br>
      <textarea name="about_as" class="w-100 mb-2" id="name" cols="10" rows="5"><?php echo $about_as; ?></textarea>

      <label  class="text-light" for="you_are">You are.</label><br>
      <input name="you_are" value="<?php echo $you_are; ?>" class="mb-2" type="text" id="you_are"><br>

      <label  class="text-light" for="you_are_as">You are as.</label><br>
      <textarea name="you_are_as" class="w-100 mb-2" id="you_are_as" cols="10" rows="3"><?php echo $you_are_as; ?></textarea>

      <label  class="text-light" for="birthday">Birthday</label><br>
      <input name="Birthday" value="<?php echo $Birthday; ?>" class="mb-2" type="text" id="birthday"><br>

      <label  class="text-light" for="birthday">Age</label><br>
      <input name="age" value="<?php echo $Age; ?>" class="mb-2" type="text" id="birthday"><br>

      <label  class="text-light" for="birthday">Website</label><br>
      <input name="Website" value="<?php echo $Website; ?>" class="mb-2" type="text"  id="birthday"><br>

      <label  class="text-light" for="birthday">Degree</label><br>
      <input name="Degree" value="<?php echo $Degree; ?>" class="mb-2" type="text" id="birthday"><br>

      <label  class="text-light" for="birthday">Phone</label><br>
      <input name="Phone" value="<?php echo $Phone; ?>" class="mb-2" type="text" id="birthday"><br>

      <label  class="text-light" for="birthday">PhEmailone</label><br>
      <input name="PhEmailone" value="<?php echo $PhEmailone; ?>" class="mb-2" type="text" id="birthday"><br>

      <label  class="text-light" for="birthday">City</label><br>
      <input name="City" value="<?php echo $City; ?>" class="mb-2" type="text" id="birthday"><br>

      <label  class="text-light" for="birthday">Freelance</label><br>
      <input name="Freelance" value="<?php echo $Freelance; ?>" class="mb-2" type="text" id="birthday"><br>

      <label  class="text-light" for="name">Officiis eligendi</label><br>
      <textarea name="Officiis_eligendi" class="w-100 mb-2" id="name" cols="10" rows="5"><?php echo $Officiis_eligendi; ?></textarea>

      

      

    </div>

    


        <!-- Facts -->
    <div class="p-2 header-container" >
    <div class=" text-light d-flex d-flex justify-content-center align-items-center" >
        <div class="w-75 h-100 pt-3 pl-5 d-flex justify-content-center align-items-center h4" >
          Facts
        </div>
        <div class="w-25 h-100 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input class="Facts-btn" name="facts-btn" type="checkbox" <?php echo $facts_on_off; ?> data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>
    
    <div class="<?php echo $facts_display; ?>">
      <label  class="text-light" for="name">Facts As.</label><br>
      <textarea name="Facts_as" class="w-100 mb-2" id="name" cols="10" rows="5"><?php echo $Facts_as ?></textarea>

      <label  class="text-light" for="birthday">Happy Clients</label><br>
      <input name="Happy_clients_no" class="mb-2" type="number" value="<?php echo $Happy_clients_no; ?>" id="birthday">
      <input name="Happy_clients_text" class="mb-2" type="text" value="<?php echo $Happy_clients_text; ?>" id="birthday">

      <label  class="text-light" for="birthday">Projects</label><br>
      <input name="Projects_no" class="mb-2" type="number" value="<?php echo $Projects_no; ?>" id="birthday"><br>
      <input name="Projects_text" class="mb-2" type="text" value="<?php echo $Projects_text; ?>" id="birthday"><br>

      <label  class="text-light" for="birthday">Hours Of Support</label><br>
      <input name="Hours_support_no" class="mb-2" type="number" value="<?php echo $Hours_support_no ?>" id="birthday"><br>
      <input name="Hours_support_text" class="mb-2" type="text" value="<?php echo $Hours_support_text ?>" id="birthday"><br>

      <label  class="text-light" for="birthday">Hard Workers</label><br>
      <input name="Hard_workers_no" class="mb-2" type="number" value="<?php echo $Hard_workers_no ?>" id="birthday"><br>
      <input name="Hard_workers_text" class="mb-2" type="text" value="<?php echo $Hard_workers_text ?>" id="birthday"><br>
    </div>

  </div>


            <!-- Skills -->
    <div class="p-2 header-container" style="background:#0d0c4a">
      <div class=" d-flex justify-content-center align-items-center text-light  p-2 h4" >Skills</div>

      <label  class="text-light" for="name">Skill As.</label><br>
      <textarea name="Skills_as" class="w-100 mb-2" id="name" cols="10" rows="5"><?php echo $skill_as; ?></textarea>

      <div>

      <label  class="text-light" for="birthday">Your Skill</label><br>
      
      <div class="skill-input-box d-flex">
  
        <input name="skill_a" class="mb-2 skill-input" value="<?php echo $skills_a; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_ap" class="mb-2 percentage-input" type="text" value="<?php echo $pct_a; ?>" id="birthday">
        <input class="mb-2 mr-1 percentage  border-0 " disabled type="text" value="%"> 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_a" <?php echo $btn_a; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>

      <div class="skill-input-box d-flex">
        <input name="skill_b" class="mb-2 skill-input" value="<?php echo $skills_b; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_bp" class="mb-2 percentage-input" type="text" value="<?php echo $pct_b; ?>" id="birthday"> 
        <input class="mb-2 mr-1 percentage  border-0 " disabled type="text" value="%"> 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_b" <?php echo $btn_b; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>


      <div class="skill-input-box d-flex">
        <input name="skill_c" class="mb-2 skill-input" value="<?php echo $skills_c; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_cp" class="mb-2 percentage-input" type="text" value="<?php echo $pct_c; ?>" id="birthday"> 
        <input class="mb-2 mr-1 percentage   border-0 " disabled type="text" value="%" > 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_c" <?php echo $btn_c; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>

      <div class="skill-input-box d-flex">
        <input name="skill_d" class="mb-2 skill-input" value="<?php echo $skills_d; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_dp" class="mb-2 percentage-input" type="text" value="<?php echo $pct_d; ?>" id="birthday"> 
        <input class="mb-2 mr-1 percentage   border-0 " disabled type="text" value="%" > 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_d" <?php echo $btn_d; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>

      <div class="skill-input-box d-flex">
        <input name="skill_e" class="mb-2 skill-input" value="<?php echo $skills_e; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_ep" class="mb-2 percentage-input" type="text" value="<?php echo $pct_e; ?>" id="birthday"> 
        <input class="mb-2 mr-1 percentage   border-0 " disabled type="text" value="%" > 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_e" <?php echo $btn_e; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>

      <div class="skill-input-box d-flex">
        <input name="skill_f" class="mb-2 skill-input" value="<?php echo $skills_f; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_fp" class="mb-2 percentage-input" type="text" value="<?php echo $pct_f; ?>" id="birthday"> 
        <input class="mb-2 mr-1 percentage  border-0 " disabled type="text" value="%" > 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_f" <?php echo $btn_f; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>

      <div class="skill-input-box d-flex">
        <input name="skill_g" class="mb-2 skill-input" value="<?php echo $skills_g; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_gp" class="mb-2 percentage-input" type="text" value="<?php echo $pct_g; ?>" id="birthday"> 
        <input class="mb-2 mr-1 percentage   border-0 " disabled type="text" value="%" > 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_g" <?php echo $btn_g; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>

      <div class="skill-input-box d-flex">
        <input name="skill_h" class="mb-2 skill-input" value="<?php echo $skills_h; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_hp" class="mb-2 percentage-input" type="text" value="<?php echo $pct_h; ?>" id="birthday"> 
        <input class="mb-2 mr-1 percentage   border-0 " disabled type="text" value="%" > 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_h" <?php echo $btn_h; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>

      <div class="skill-input-box d-flex">
        <input name="skill_i" class="mb-2 skill-input" value="<?php echo $skills_i; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_ip" class="mb-2 percentage-input" type="text" value="<?php echo $pct_i; ?>" id="birthday">
        <input class="mb-2 mr-1 percentage  border-0 " disabled type="text" value="%" > 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_i" <?php echo $btn_i; ?> type="checkbox" data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div> 
      </div>

      <div class="skill-input-box d-flex">
        <input name="skill_j" class="mb-2 skill-input" value="<?php echo $skills_j; ?>" type="text" placeholder="skill" id="birthday">
        <input name="skill_jp" class="mb-2 percentage-input" type="text" value="<?php echo $pct_j; ?>" id="birthday"> 
        <input class="mb-2 mr-1 percentage  border-0 " disabled type="text" value="%" > 
        <div class="w-20 mb-2 h-25 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="skill_btn_j" <?php echo $btn_j; ?> type="checkbox"  data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>




      </div>
  
    </div>



<!--

          -- Resume --
      <div class="p-2 header-container" >

      <div class="text-light d-flex d-flex justify-content-center align-items-center" >
        <div class="w-75 h-100 pl-5 d-flex justify-content-center align-items-center h4" >
          Resume
        </div>
        <div class="w-25 h-100 bg-black d-flex d-flex justify-content-center align-items-center ">
          <input name="Resume-btn" type="checkbox" <?php echo $Resume_on_off; ?> data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
        </div>
      </div>

      
      </div>   


      -- Portfolio --
      <div class="p-2 header-container" style="background:#0d0c4a">
        <div class="text-light d-flex d-flex justify-content-center align-items-center" >
          <div class="w-75 h-100 pl-5 d-flex justify-content-center align-items-center h4" >
          Portfolio
          </div>
          <div class="w-25 h-100 bg-black d-flex d-flex justify-content-center align-items-center ">
            <input name="Portfolio-btn" type="checkbox" <?php echo $Portfolio_on_off; ?> data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
          </div>
        </div>
      </div>


      -- Services --
      <div class="p-2 header-container" >
        <div class="text-light d-flex d-flex justify-content-center align-items-center" >
          <div class="w-75 h-100 pl-5 d-flex justify-content-center align-items-center h4" >
          Services
          </div>
          <div class="w-25 h-100 bg-black d-flex d-flex justify-content-center align-items-center ">
            <input name="Services-btn" type="checkbox" <?php echo $Services_on_off; ?> data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
          </div>
        </div>
      </div>


      -- Testimonials --
      <div class="p-2 header-container" style="background:#0d0c4a">
        <div class="text-light d-flex d-flex justify-content-center align-items-center" >
          <div class="w-75 h-100 pl-5 d-flex justify-content-center align-items-center h4" >
          Testimonials
          </div>
          <div  class="w-25 h-100 bg-black d-flex d-flex justify-content-center align-items-center ">
            <input name="Testimonials-btn" type="checkbox" <?php echo $Testimonials_on_off; ?> data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
          </div>
        </div>
      </div>
  
      -->

      <!-- Contact -->
      <div class="p-2 header-container" >
        <div class=" text-light d-flex d-flex justify-content-center align-items-center" >
          <div class="w-75 h-100 pl-5 d-flex justify-content-center align-items-center h4"> Contact</div>
          <div class="w-25 h-100 bg-black d-flex d-flex justify-content-center align-items-center ">
           <!--  <input name="Contact-btn" type="checkbox"  data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger"> -->
          </div>
        </div>

        <label  class="text-light" for="contact-location">Contact As :</label><br>
        <div class="skill-input-box d-flex">
        <textarea name="contact_as" class="w-100 mb-2" id="contacts_as" cols="10" rows="5"><?php echo $contact_as; ?></textarea>
        </div>

        <label  class="text-light" for="contact-location">Location :</label><br>
        <div class="skill-input-box d-flex">
          <input name="location" value="<?php echo $location; ?>" class="mb-2 contact-location" type="text" placeholder="Your Location" id="contact-location">
        </div>

        <label  class="text-light" for="contact-location">Email :</label><br>
        <div class="skill-input-box d-flex">
          <input name="Email" value=" <?php echo $Email; ?>" class="mb-2 contact-location" type="text" placeholder="Your Email" id="contact-location">
        </div>

        <label  class="text-light" for="contact-location">Call :</label><br>
        <div class="skill-input-box d-flex">
          <input name="Call" value="<?php echo $Call; ?>" class="mb-2 contact-location" type="text" placeholder="Your Number" id="contact-location">
        </div>

      </div>


            <!-- Social Media -->
            <div class="p-2 header-container" style="background:#0d0c4a; box-shadow: 0 8px 12px -6px black;">
        <div class="text-light d-flex d-flex justify-content-center align-items-center" >
          <div class="w-75 h-100 pl-5 d-flex justify-content-center align-items-center h4" >
            Social Media
          </div>
          <div  class="w-25 mb-2 h-100 bg-black d-flex d-flex justify-content-center align-items-center ">
            <input name="social-media-btn" type="checkbox" checked data-toggle="toggle" data-onstyle="outline-success" data-offstyle="outline-danger">
          </div>   
        </div>
       
        <!-- Social select attribute  -->
        <span class="a_check_select" val="<?php echo 'a_'.$select_a; ?>"></span>
        <span class="b_check_select" val="<?php echo 'b_'.$select_b; ?>"></span>
        <span class="c_check_select" val="<?php echo 'c_'.$select_c; ?>"></span>
        <span class="d_check_select" val="<?php echo 'd_'.$select_d; ?>"></span>
        <span class="e_check_select" val="<?php echo 'e_'.$select_e; ?>"></span>
 
 
        <select name="a_select" class="a_select decorated" class="mt-2" id="1_select">
          <option class="a_fa-facebook-f"  value="fa-facebook-f"><i class="fa fa-calendar" aria-hidden="true"></i>Facebook</option>
          <option class="a_fa-youtube-play"  value="fa-youtube-play">Youtube</option>
          <option class="a_fa-instagram" value="fa-instagram">Instagram</option>
          <option class="a_fa-twitter" value="fa-twitter">Twitter</option>
          <option class="a_fa-linkedin" value="fa-linkedin">Iinkedin</option>
          <option class="a_fa-github" value="fa-github">GitHub</option>
          <option class="a_none" value="none">Remove</option>
        </select>
        <input name="a_url_input" value="<?php echo $url_a; ?>" class="mb-2 contact-location" type="url" placeholder="URL" id="social-media-input">

        <select name="b_select" class="mt-2 decorated" id="1_select">
          <option class="b_fa-facebook-f"  value="fa-facebook-f">Facebook</option>
          <option class="b_fa-youtube-play"  value="fa-youtube-play">Youtube</option>
          <option class="b_fa-instagram" value="fa-instagram">Instagram</option>
          <option class="b_fa-twitter" value="fa-twitter">Twitter</option>
          <option class="b_fa-linkedin" value="fa-linkedin">Iinkedin</option>
          <option class="b_fa-github" value="fa-github">GitHub</option>
          <option class="b_none" value="none">Remove</option>
        </select>
        <input name="b_url_input" value="<?php echo $url_b; ?>" class="mb-2 contact-location" type="url" placeholder="URL" id="social-media-input">

        <select name="c_select" class="mt-2 decorated" id="1_select">
          <option class="c_fa-facebook-f"  value="fa-facebook-f">Facebook</option>
          <option class="c_fa-youtube-play"  value="fa-youtube-play">Youtube</option>
          <option class="c_fa-instagram" value="fa-instagram">Instagram</option>
          <option class="c_fa-twitter" value="fa-twitter">Twitter</option>
          <option class="c_fa-linkedin" value="fa-linkedin">Iinkedin</option>
          <option class="c_fa-github" value="fa-github">GitHub</option>
          <option class="c_none" value="none">Remove</option>
        </select>
        <input name="c_url_input" value="<?php echo $url_c; ?>" class="mb-2 contact-location" type="url" placeholder="URL" id="social-media-input">


        <select name="d_select" class="mt-2 decorated" id="1_select">
          <option class="d_fa-facebook-f"  value="fa-facebook-f">Facebook</option>
          <option class="d_fa-youtube-play"  value="fa-youtube-play">Youtube</option>
          <option class="d_fa-instagram" value="fa-instagram">Instagram</option>
          <option class="d_fa-twitter" value="fa-twitter">Twitter</option>
          <option class="d_fa-linkedin" value="fa-linkedin">Iinkedin</option>
          <option class="d_fa-github" value="fa-github">GitHub</option>
          <option class="d_none" value="none">Remove</option>
        </select>
        <input name="d_url_input" value="<?php echo $url_d; ?>" class="mb-2 contact-location" type="url" placeholder="URL" id="social-media-input">


        <select name="e_select" class="mt-2 decorated" id="1_select">
          <option class="e_fa-facebook-f"  value="fa-facebook-f">Facebook</option>
          <option class="e_fa-youtube-play"  value="fa-youtube-play">Youtube</option>
          <option class="e_fa-instagram" value="fa-instagram">Instagram</option>
          <option class="e_fa-twitter" value="fa-twitter">Twitter</option>
          <option class="e_fa-linkedin" value="fa-linkedin">Iinkedin</option>
          <option class="e_fa-github" value="fa-github">GitHub</option>
          <option class="e_none" value="none">Remove</option>
        </select>
        <input name="e_url_input" value="<?php echo $url_e; ?>" class="mb-2 contact-location" type="url" placeholder="URL" id="social-media-input">

      </div>

    <div class="progress_con d-none p-5 d-flex justify-content-center align-content-center ">
       <div class="progress-center d-flex justify-content-center align-items-center ">

         <div class= "mt-3" style="width:90%;height:25px; background:#E7E7E7; border-radius:5px;">
            <div class="form-progress-bar h-100 " style="width:0%;border-radius:5px;">
              <span class="form-progress-percentage bg-success h-100 d-flex justify-content-center align-content-center font-weight-bold text-light">
                0%
              </span>
            </div>
          </div>

       </div>
    </div>

    <div class="m-3 mb-4 d-flex justify-content-center align-items-center">
      <input class="submit" style="border:0px; box-shadow: 0px 1px 18px 2px rgba(0,0,0,0.75);" type="submit" value="Update">
    </div> 

</form>
    




 


    
    </div>
    
    </div>


    





    </div>


<script>

// Header picture Desktop //
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
   var url = URL.createObjectURL(file);

   var image = new Image();
    image.src = url;
    image.onload = function(){
      var o_width =  image.width;
      var o_height = image.height;

      var img_name = image.name;

      if(o_width == 1920 && o_height == 1280)
      {
        blah.src = URL.createObjectURL(file);
      }

      else{
        alert("Image Size 1920 x 1280 ");
      }

      
 
    }
 
  }
}

// Header picture Mobile //
imgInp_mobile.onchange = evt => {
  const [file] = imgInp_mobile.files
  if (file) {
   var url = URL.createObjectURL(file);

   var image = new Image();
    image.src = url;
    image.onload = function(){
      var o_width =  image.width;
      var o_height = image.height;

      var img_name = image.name;

      if(o_width == 719 && o_height == 1280)
      {
        blah_mobile_btn.src = URL.createObjectURL(file);
      }

      else{
        alert("Image Size 719 x 1280"); 
      }

    }
 
  }
}


// about picture change //

about_img_btn.onchange = evt => {
  const [file] = about_img_btn.files
  if (file) {
   var url = URL.createObjectURL(file);

   var image = new Image();
    image.src = url;
    image.onload = function(){
      var o_width =  image.width;
      var o_height = image.height;

      var img_name = image.name;

      if(o_width == 600 && o_height == 600)
      {
        about_img.src = URL.createObjectURL(file);
      }

      else{
        alert("Image Size 600 x 600 ");
      }

      
 
    }
 
  }
}

// Social icon select 
$(document).ready(function(){
  var chek =  "."+$(".a_check_select").attr("val");
  $(chek).attr("selected","selected");
});

$(document).ready(function(){
  var chek =  "."+$(".b_check_select").attr("val");
  $(chek).attr("selected","selected");
});

$(document).ready(function(){
  var chek =  "."+$(".c_check_select").attr("val");
  $(chek).attr("selected","selected");
});

$(document).ready(function(){
  var chek =  "."+$(".d_check_select").attr("val");
  $(chek).attr("selected","selected");
});

$(document).ready(function(){
  var chek =  "."+$(".e_check_select").attr("val");
  $(chek).attr("selected","selected");
});

$(document).ready(function(){
   $("#menu-icon,.close-icon").click(function(){ 

      var position = $(".menu-content").css("top");
      if(position == "0px"){
        $(".menu-content").css("top", "-100%");
        // $(".header").css("box-shadow", "0 8px 6px -6px black");
        $(".close-icon").addClass("d-none");
        $("#menu-icon").removeClass("d-none");
        
      }

      else{
        $(".menu-content").css("top", "0%");
        // $(".header").css("box-shadow", "none");
        $(".close-icon").removeClass("d-none");
        $("#menu-icon").addClass("d-none");
      }

   });
});
// about picture change //
 

 //$(document ).ready(function() {
 //    alert($(".Facts-btn").val());
 //});



 

 

</script>


  

</body>

</html>