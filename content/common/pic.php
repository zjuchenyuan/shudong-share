<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>图像预览 - <?php echo $tit ?></title> 
    
 </head> 
 <body>

<script type="text/javascript" src="./../includes/js/jquery-1.9.1.min.js"></script>

  <style type="text/css">
 body {
 margin:0px 0px 0px 0px;
font-family: '微软雅黑';
background-color:#F2F2F2;
}
img{ 
display: inline-block;


padding: 4px;
line-height: 1.42857143;
background-color: #fff;
border: 1px solid #ddd;
border-radius: 4px;
-webkit-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
</style> 

<div align="center">
<img class="img-responsive " id="img"src="<?php echo $kjurl; ?>" /></div>
<script type="text/javascript">

</script>