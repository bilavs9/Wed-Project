<!DOCTYPE html> 
<html  lang="en">
<head>
<?php
include("session_check.php");
?>
    <style>
        #loading .svg-icon-loader {position: absolute;top: 50%;left: 50%;margin: -50px 0 0 -50px;}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title>Update Outfits</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php
include("top.php");
?>
</head>


    <body>
    <?php
	include("svg_loader.php");
	?>

    <div id="page-wrapper">
        <div id="mobile-navigation">
    <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
</div>
    <?php
	include("sidenav.php");
	?>
</div>
        <div id="page-content-wrapper">
            <div id="page-content">
               <?php
			   include("menu.php");
			   ?>
                

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero" align="center">
           Update Your Outfits to wear!!!!
        </h3>
        <div class="example-box-wrapper">
         <?php
$id=$_REQUEST["id"];
include("mysql_connect.php");
$sql="select * from outfits_tbl where oid=$id";
//echo($sql);
$res=mysql_query($sql);
$rc=mysql_num_rows($res);
if($rc>0)
{
	if(mysql_result($res,0,"outfit_category")=="Male")
	{
		$chkm="selected";
		$chkf="";
		
	}
	else
	{
		$chkf="selected";
		$chkm="";
	}
	if(mysql_result($res,0,"activestatus")=="yes")
	{
		$act="selected";
		$deact="";
		
	}
	else
	{
		$deact="selected";
		$act="";
	}
?>
   
            <form class="form-horizontal bordered-row" action="" method="" onSubmit="updateoutfits(this); return false;">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Outfit Name</label>
                    <div class="col-sm-6">
                        <input name="txtoutfitname" type="text"  data-parsley-trigger="focusin focusout"  data-parsley-pattern="[A-Za-z]+" required class="form-control" id="txtoutfitname" placeholder="Outfit Name" value="<?php echo (mysql_result($res,0,"outfitname"));?>">
                        <input type="hidden" id="txtid" name="txtid" value="<?php echo mysql_result($res,0,"oid"); ?>" />
                    </div>
                </div>
               <div class="form-group">
                            <label class="col-sm-3 control-label">Caption</label>
                            <div class="col-sm-6">
                                <input name="txtcaption" type="text" data-parsley-trigger="focusin focusout" required class="form-control" id="txtcaption" placeholder="Alphabets only" value="<?php echo (mysql_result($res,0,"caption"));?>">
                            </div>
                        </div>
                 
        <div class="form-group">
                    <label class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-6">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput">
                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                <span class="fileinput-filename"></span>
                            </div>
                            <span class="input-group-addon btn btn-primary btn-file">
                                <span class="fileinput-new">Select file</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="photofile" id="photofile" placeholder="choo">
                            </span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                        <img src="images/<?php echo(mysql_result($res,0,"photofile"));?>" width="500" height="230">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Outfits_category</label>
                    <div class="col-sm-6">
                        <select name="outstatus" class="custom-select">
                             <option <?php echo($chkm); ?>>Male</option>
                             <option <?php echo($chkf); ?>>Female</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">ActiveStatus</label>
                    <div class="col-sm-6">
                        <select name="selstatus" class="custom-select" >
                            <option <?php echo($act);?>>yes</option>
                            <option <?php echo($deact)?>>no</option>
                        </select>
                    </div>
                </div>
                <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary" type="submit">Update</button>
                </div>
                
                
                
               
               
                        
            </form>
            <?php
}
			?>
            <div id="container"></div>
        </div>
    </div>
</div>

                

            </div>
        </div>
    </div>


    <!-- JS Demo -->
<script type="text/javascript" src="assets-minified/admin-all-demo.js"></script>

</div>
</body>
</html>