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
           height:100vh;
           width:400px;
           box-shadow:0px 0px 5px 3px black;
           background: #000232;
           position: relative;
           overflow:scroll;
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

      .info-header{
        width:20%;
        text-align:center;
      }

      a{
        text-decoration: none;
      }

      .infio-conta{
        width:100%;
        height:80%;
        background:gray;
        overflow:scroll;
        position: relative;
      }

      .more-info{
        width:160px;
        height:200px;
        position: absolute;
        top:20%;
        left:35%;
        transform-origin: top right;
        box-shadow:0px 0px 8px 10px black;
        border-radius:5px;
        display:none;
 
      }

      .more-deta{
        transition: 0.6s;
      }

 
 
   </style>

<body   class="d-flex justify-content-center align-items-center bg-dark">
  
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
      
?>
 
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

    <div class="header pl-4 d-flex">
      <div class="w-75 pl-5 h-100 d-flex justify-content-center align-items-center" style="font-size:20px; font-family: 'Anton', sans-serif;   letter-spacing: 2px;">
        <?php echo $header_name; ?>
      </div>

      <div class="w-25 h-100 d-flex justify-content-center align-items-center animate__animated animate__jello animate__infinite animate__slower animate__delay-2s ">
            <i class="fa fa-bars" id="menu-icon" aria-hidden="true" style="font-size:25px;" ></i> <i class="fa fa-times close-icon d-none" aria-hidden="true" style="font-size:25px;"></i>  
      </div>
    </div>


    
  
    <!-- Header  -->
    <div class="p-2 pb-3 header-container" >
      <div class=" d-flex justify-content-center align-items-center text-light  p-2" >Header</div>
    </div>



 <div class="infio-conta mt-4">  
     
    <div class="more-info bg-dark"></div>
 
       <div class="w-100 bg-dark d-flex justify-content-around align-items-center text-light" style="font-size:12px;font-weight:bold;border-bottom:3px solid #888;">
       <div class="info-header py-2" style="width:5%">SN.</div> <div class="info-header py-2">Country</div> <div class="info-header">States</div> <div class="info-header">City</div> <div class="info-header">Date</div> <div class="info-header" style="width:5%">Det.</div>
    </div>

<?php
    $query = "SELECT * FROM visitor ORDER BY id DESC"; 
          $query_response = $db->query($query);
       $sn = "1";          
        while($visitor_data = $query_response->fetch_assoc())
     {
      $id  =  $visitor_data['id'];
      $country  =  $visitor_data['country'];
      $region  =  $visitor_data['region'];
      $city  =  $visitor_data['city'];
      $os  =  $visitor_data['os'];
      $device  =  $visitor_data['device'];
      $browser  =  $visitor_data['browser'];
      $isp  =  $visitor_data['isp'];
      $date = new DateTime($visitor_data['time']);
      $date_time = $date->format('d M Y  h:i:s A');
 

    // $date = date('h:i:s A');
        echo '
        <div class="w-100 bg-dark d-flex justify-content-around align-items-center text-light" style="font-size:12px;font-weight:bold;border-bottom:1px solid #888;">
        <div style="width:5%" class="info-header py-2">'.$id.'</div>
        <div class="info-header py-2">'.$country.'</div> 
        <div class="info-header">'.$region.'</div> 
        <div class="info-header">'.$city.'</div> 
        <div class="info-header">'.$date_time.'</div> 
        <div style="width:5%" more="open_'.$id.'" class="more-info-icon"><i class="fa fa-info-circle close-more details-icon" aria-hidden="true"></i>
        </div></div>
        <div class="more-deta text-light d-flex  align-items-center flex-column" id="open_'.$id.'" style="height:0px; background:#2B3856;opacity:0;" >
         <p class="py-2" style="font-weight:bold;"> Devide : '.$device.' <br> OS : '.$os.' <br> Browser : '.$browser.' <br> isp : '.$isp.' <p>
        </div>';
      }


 ?>
 </div>




<script>
 
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

$(document).ready(function(){
  $(".more-info-icon").each(function(){
    $(this).click(function(){
        $(this).addClass("more-close-icon");
       var more_info = '#'+$(this).attr("more");

       $(more_info).css("height","130px");

       setTimeout(function(){
        $(more_info).css("opacity","10"); 
       },500);

       setTimeout(function(){
        $(more_info).css("opacity","0"); 
       },4000);

       setTimeout(function(){
         $(more_info).css("height","0px");
       },4500);
    });
  });
});
 

 

 

</script>


  

</body>

</html>