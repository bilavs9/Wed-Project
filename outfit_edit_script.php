<?php
$id=$_POST["txtid"];
$outfitname=stripslashes($_POST["txtoutfitname"]);
$caption=stripslashes($_POST["txtcaption"]);
$outfit_category=stripslashes($_POST["outstatus"]);
$activestatus=stripslashes($_POST["selstatus"]);
$filename_tmp=$_FILES["photofile"]["tmp_name"];
$filename="blank.jpg";
//$id=date("YmdHis");
include("imgcompressionfunction.php");
include("mysql_connect.php");
$delfilename=SearchFile($id);
if($filename_tmp!="")
{
$filename=fileupload("photofile");
$str=",photofile='$filename'";
}
else if($filename_tmp=="")
{
$str="";
}
$sql="update outfits_tbl set outfitname='$outfitname',caption='$caption',outfit_category='$outfit_category',activestatus='$activestatus' $str where oid=$id";
//echo($sql);
mysql_query($sql);
$n=mysql_affected_rows();
if($n>0)
{
	echo("Data updated successfully");
}
elseif($n==0)
{
	echo("No changes made");
}
else
{
	echo("Data could not be saved");
}
function fileupload($cname)
{
$ext_type="";	
$filename_tmp=$_FILES[$cname]["tmp_name"];
$file_type=$_FILES[$cname]["type"];
$file_size=$_FILES[$cname]["size"];
$no=rand(1,9);
$filename=date("YmdHisu").$no;
$ext_type=array(".jpeg","jpg",".png",".jpg",".bmp");
$ftype=array("image/jpeg","image/jpg","image/png","image/jpg","image/bmp");
for($c=0;$c<=4;$c++)
{
	if($ftype[$c]==$file_type)
	{
		$filename=$filename.$ext_type[$c];
	}
}

if(move_uploaded_file($filename_tmp,"images/".$filename))
{
	compress_image("images/".$filename,"images/c".$filename,80);
	unlink("images/".$filename);
	return "c$filename";
}
else
{
	return "blank.jpg";
}
	
}
function SearchFile($id)
{
 include("mysql_connect.php");
 $imagename="blank.jpg";
 $sql="select * from outfits_tbl where oid=$id";	
 $res=mysql_query($sql);
 $rc=mysql_num_rows($res);
 if($rc>0)
 {
	 $imagename=mysql_result($res,0,"photofile");
 }
 return $imagename;
}
?>