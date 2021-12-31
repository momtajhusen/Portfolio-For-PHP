<?php
  require("php/database.php");
  session_start();

$sql='SELECT * from visitor';

$res=mysqli_query($db,$sql);

$row=mysqli_fetch_array($res);

$str=$row[0];

$length=strlen($str);

if($length==1)
 $counter="00000000".$row[0];
else if($length==2)
 $counter="0000000".$row[0];
else if($length==3)
 $counter="000000".$row[0]; 
else if($length==4)
 $counter="00000".$row[0];
else if($length==5)
 $counter="0000".$row[0];
else if($length==6)
 $counter="000".$row[0];
else if($length==7)
 $counter="00".$row[0];
else if($length==8)
 $counter="0" .$row[0];

$up_count=$row[0]+1; 
$sql="UPDATE `visitor` SET `count`= '$up_count' WHERE 1";

mysqli_query($db,$sql);

?>

<div class='row' style='margin-top:20px'>
 <div class='col-8'>
  <table class='text-white table-sm'> 
   <tr>
      <td style='border:1px solid #888'><?php echo $counter[0] ?></td>
      <td style='border:1px solid #888'><?php echo $counter[1] ?></td>
      <td style='border:1px solid #888'><?php echo $counter[2] ?></td>
      <td style='border:1px solid #888'><?php echo $counter[3] ?></td>
      <td style='border:1px solid #888'><?php echo $counter[4] ?></td>
      <td style='border:1px solid #888'><?php echo $counter[5] ?></td>
      <td style='border:1px solid #888'><?php echo $counter[6] ?></td>
      <td style='border:1px solid #888'><?php echo $counter[7] ?></td>
      <td style='border:1px solid #888'><?php echo $counter[8] ?></td>
    </tr>
  </table>
 </div>
</div>