<?php
session_start();
if(isset( $_SESSION['user'] ))
	{
		header('Location: ../index.php');
		exit();
	}
?>


<?php
	require('include/headLogin.html');
	require('include/header2Login.html');
?>


<body data-spy="scroll" data-target="blog-detail-2.htmlscrollspy">
 
<div class="be-loader">
<div class="spinner">
<img src="img/logo-loader.png" alt="">
<p class="circle">
<span class="ouro">
<span class="left"><span class="anim"></span></span>
<span class="right"><span class="anim"></span></span>
</span>
</p>
</div>
</div>

<div id="content-block">
<div class="container be-detail-container">
<div class="row">
<div class="col-xs-12 col-md-3 left-feild">
<div class="be-vidget back-block">
<a class="btn full color-1 size-1 hover-1" href="home.php"><i class="fa fa-chevron-left"></i>Back to Home</a>
</div>
<div class="be-vidget hidden-xs hidden-sm" id="scrollspy">
<h3 class="letf-menu-article">
Choose Category
</h3>
<div class="creative_filds_block">
<ul class="ul nav">
<li class="edit-ln"><a href="#basic-information">Basic Information</a></li>
<li class="edit-ln"><a href="#edit-password">Change Password</a></li>

<li class="edit-ln"><a href="#about-me">About Me</a></li>

</ul>
</div>

</div>
</div>
<div class="col-xs-12 col-md-9 _editor-content_">
<div class="sec" data-sec="basic-information">
<div class="be-large-post">
<div class="info-block style-2">
<div class="be-large-post-align "><h3 class="info-block-label">Basic Information</h3></div>
</div>
<div class="be-large-post-align">
<div class="be-change-ava">
<a class="be-ava-user style-2" href="blog-detail-2.html">
<img src="img/ava_10.jpg" alt="">
</a>
<a class="btn color-4 size-2 hover-7">Update image</a>
</div>
</div>
<div class="be-large-post-align">
<div class="row">
<div class="input-col col-xs-12 col-sm-6">
<div class="form-group fg_icon focus-2">
<div class="form-label">First Name</div>
<input class="form-input" type="text" value="Taylor">
</div>
</div>
<div class="input-col col-xs-12 col-sm-6">
<div class="form-group focus-2">
<div class="form-label">Last Name</div>
<input class="form-input" type="text" value="Leight">
</div>
</div>

<div class="input-col col-xs-12 col-sm-6">
<div class="form-group fg_icon focus-2">
<div class="form-label">Contact</div>
<input class="form-input" type="Number" value="5199822886">
</div>
</div>
<div class="input-col col-xs-12 col-sm-6">
<div class="form-group focus-2">
<div class="form-label">Email</div>
<input class="form-input" type="Email" value="nakulpatel024@gmail.com">
</div>
</div>

</div>
</div>
</div>
</div>
<div class="sec" data-sec="edit-password">
<div class="be-large-post">
<div class="info-block style-2">
<div class="be-large-post-align"><h3 class="info-block-label">Password</h3></div>
</div>
<div class="be-large-post-align">
<div class="row">
<div class="input-col col-xs-12 col-sm-4">
<div class="form-group focus-2">
<div class="form-label">Old Password</div>
<input class="form-input" type="password" placeholder="">
</div>
</div>
<div class="input-col col-xs-12 col-sm-4">
<div class="form-group focus-2">
<div class="form-label">New Password</div>
<input class="form-input" type="password" placeholder="">
</div>
</div>
<div class="input-col col-xs-12 col-sm-4">
<div class="form-group focus-2">
<div class="form-label">Repeat Password</div>
<input class="form-input" type="password" placeholder="">
</div>
</div>
<div class="col-xs-12">
<a class="btn color-1 size-2 hover-1 btn-right">change password</a>
</div>
</div>
</div>
</div>
</div>
<div class="sec" data-sec="about-me">
<div class="be-large-post">
<div class="info-block style-2">
<div class="be-large-post-align"><h3 class="info-block-label">About Me</h3></div>
</div>
<div class="be-large-post-align">
<div class="row">

<div class="input-col col-xs-12">
<div class="form-group focus-2">
<div class="form-label">Description</div>
<textarea class="form-input" required="" placeholder="Something about you"></textarea>
<input type="submit" class="be-popup-sign-button" value="Submit">
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

</body>


<?php
	require('include/footerLogin.html');
?>