 <!DOCTYPE html>
<html lang="en">
<head>
<?php
include("header.php");
?>
<title>Female Outfits-Best price in WedLock</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no"/>
</head>
<body>
<section id="content">
<div class='wrapper_5'></div>
<div class='wrapper_7' style="background-color:#DBDBDB;">
<div class="container" >
<div class="clearfix"></div>
</header>
<div class="container1">
<div class="panel panel-default mat">
  <div class="panel-body">
  <p class="font">Description</p>
 <hr style="margin: 0px 0px 15px 0px;">
 <p>These are the outfits for women which comes in various types which helps them to look perfect in their wedding....
</p>

  </div>
   <div class="panel-body">
  <p class="font">Colors Available</p>
 <hr style="margin: 0px 0px 15px 0px;">
 <p>Red</p>
 <p>Green</p>
 <p>Purple</p>
  </div>
  <div class="panel-body">
  <p class="font">Sizes</p>
 <hr style="margin: 0px 0px 15px 0px;">
 <p>long</p>
 <p>medium</p>
 <p>Short</p>
  </div>
   <div class="panel-body">
  <p class="font">Contact Details</p>
 <hr style="margin: 0px 0px 15px 0px;">
 <p>+917566052805</p>
  </div>
</div>
</div>
<?php
$id=$_REQUEST["id"];
include("mysql_connect.php");
$sql="select * from outfits_tbl where oid=$id and outfit_category='female'";
$res=mysql_query($sql);
$rc=mysql_num_rows($res);
if($rc>0)
{
?>
<div class="row">
<div class="grid_6 mar_t_2 s2">
<img class="img_indent" src="images/<?php echo(mysql_result($res,0,"photofile"));?>" alt="" style="width:1024px;height:300px;align:center;margin-bottom:10px"/>
<h5 class="mar_t_05 font"><em><?php echo(mysql_result($res,0,"outfitname"));?></em></h5>
<p class="mar_t_1"><?php echo(mysql_result($res,0,"caption"));?></p>
</div>
<?php
}
?>
</div>
<?php
?>

</div>
</div>
</div>
</section>

<?php
 include("footer.php");
 ?>
<script src="js/script.js"></script>
</body> <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>