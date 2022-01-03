<html>
<head>
<title>Visitor Counter</title>
<style> 
*{margin: 0px; padding:0px}
body{text-align:center; width: 66%; margin: auto; background:url(../background.png); font-family:Helvetica, Arial, sans-serif }
h1{font-family:Helvetica, Arial, sans-serif; text-align: center; font-size: 60px; margin-top: 80px; color: #fff; text-shadow: 2px 2px 0px rgba(255,255,255,.7), 5px 7px 0px rgba(0, 0, 0, 0.1);}
.container{height: 250px; width: 31%; float: left; margin-top: 40px}
.round{width:168px; height:160px; border-radius:50%; background:#fff; margin:20px auto}
.values{color: #888; line-height: 3.8em; font-size: 40px}
p{font-size: 32px; color: #fff; font-weight: bold}
</style>
<script type="text/javascript" src="../jquery.min.js"> </script>
<script type="text/javascript" >
$(document).ready(function () {
 setInterval(function () 
 {
 $.ajax 
 })
 type:'post',
 url:'',
 data:{
get_online_visitor:"online_visitor", 
 }
 success:function (response) {
  if (response!="")
   {
   $("#online_visitor_val").html(response);
  }
  }
});
}, 10000)
});

</script>
</head>

<body>
<h1>Visitor Counter</h1>
<?php
session_start();
$_SESSION['session']=session_id();

$host="localhost";
$username="root";
$password="";
$databasename="demo";
$connect=mysql_connect($host,$username,$password) or die("Couldnt connect to database");
$db=mysql_select_db($databasename) or die("couldnt find database");


function total_online()
{
 $current_time=time();
 $timeout = $current_time - (60);
 
 $session_exist = mysql_query("SELECT session FROM total_visitors WHERE session='".$_SESSION['session']."'");
 $session_check = mysql_num_rows($session_exist);
 
 if($session_check==0 && $_SESSION['session']!="") 
 {
  mysql_query("INSERT INTO total_visitors values ('', '".$_SESSION['session']."','".$current_time."')");
 }
 else 
 {
  $sql = mysql_query("UPDATE total_visitors SET time='".time()."' WHERE session='".$_SESSION['session']."'");
 }
 $select_total = mysql_query("SELECT * FROM total_visitors WHERE time>= '$timeout'");
 $total_online_visitors = mysql_num_rows($select_total);
 return $total_online_visitors;
 }
 
 if(isset($_POST['get_online_visitor'])) 
 {
  $total_online=total_online();
  echo $total_online;
  exit();
 }
?>


<?php
//to get total online visitors
$total_online_visitors=total_online();

//to get total visitors
$total_visitors = mysql_query("SELECT * FROM total_visitors");
$total_visitors = mysql_num_rows($total_visitors);

// to insert page view and select total pageview
$user_ip=$_SERVER['REMOTE_ADDAR'];
$page=$_SERVER['PHP_SELF'];
mysql_query("insert into pageviews values('','$page','$user_ip')");
$pageviews = mysql_query("SELECT * FROM pageviews");
$total_pageviews = mysql_num_rows($pageviews);
?>

<div class="container">
<div class="round"><p class="values"><?php echo $total_visitors;?></p></div>
<p>Total Visitors</p>
</div>

<div class="container">
<div class="round"><p class="values" id="online_visitor_val"><?php echo $total_online_visitors;?></p></div>
<p>Visitors Online</p>
</div>

<div class="container">
<div class="round"><p class="values"><?php echo $total_pageviews;?></p></div>
<p>Total Pageviews</p>
</div>

</body>
</html>