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


<body>
<form action="handlePhoto.php" method="POST" enctype="multipart/form-data">
<div id="content-block" class="work-box">
<div class="editor-menu">
<div class="container">
<ul class="editor-nav">
<li id="content-w" class="en-nav active">Upload a Photo</li>


</ul>

</div>
</div>
<div class="work-area">
<div class="cover-popup">
<div class="cover-box">

</div>

</div>
<div class="container be-detail-container">
<div class="row">
<div class="col-xs-12 col-md-3 st-col left-feild">
<div class="be-vidget behance-style">
<h3 class="letf-menu-article">
ADD MEDIA
</h3>
<div class="creative_filds_block">
<ul class="ul nav b-work-list">
<li><a href="#"><i class="fa fa-cloud-upload"></i>Upload Files</a><input class="file" type="file"/></li>

</ul>
</div>
</div>
<div class="be-vidget  behance-style">
<h3 class="letf-menu-article">
CUSTOMIZE DESIGN
</h3>
<div class="creative_filds_block">
<ul class="ul nav b-work-list b-work-list-no">
<li><a class="open-custom" href="#">Dividers & Spacing <i class="fa fa-chevron-down"></i></a>
<div class="inner-filter-info">
<div class="inner-filter-inner inner-d">
<input type="radio" id="d1" class="ch" name="divider"/>
<label for="d1">No Divider</label>
</div>
<div class="inner-filter-inner inner-d">
<div class="label-box ">
<input type="radio" id="d2" class="ch" name="divider"/>
<label for="d2"></label>
</div>
<div class="label-box">
<input type="radio" id="d3" class="ch" name="divider"/>
<label for="d3"></label>
</div>
<div class="label-box">
<input type="radio" id="d4" class="ch" name="divider"/>
<label for="d4"></label>
</div>
</div>
<div class="inner-filter-inner inner-filter-inner-mod">
<span>Spacing</span>
<div class="range">
<div class="slider-range-max" id="slider-range-max"></div>
<input type="text" class="amount" id="amount" readonly>
</div>
</div>
<div class="inner-filter-inner inner-filter-inner-mod">
<span>Header</span>
<div class="range">
<div class="slider-range-max" id="slider-head"></div>
<input type="text" class="amount" id="amount-h" readonly>
</div>
</div>
<div class="inner-filter-inner">
<span>Color</span> <input class="color-i no-alpha" value="#B6BD79" style="color: rgb(255, 255, 55); background-color: rgb(255, 255, 255);">
</div>
</div>
</li>
<li><a class="open-custom" href="#">Background <i class="fa fa-chevron-down"></i></a>
<div class="inner-filter-info">
<div class="inner-filter-inner ">
<span>Color</span> <input id="color" class="color-i no-alpha" value="#B6BD79" style="color: rgb(255, 255, 255); background-color: rgb(255, 255, 255);">
</div>
<div class="inner-filter-inner">
<span>Image</span>
<div class="up-image">image<input class="file" name="photo" type="file"/></div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>



<div class="col-xs-12 col-md-9 _editor-content_">
<div class="sec" data-sec="basic-information">
<div class="be-large-post large-area">


<div class="info-block style-2">
<div class="be-large-post-align "><h3 class="info-block-label">Upload image</h3></div>
</div>
<div class="be-large-post-align">

<div class="form-group focus-2">

<textarea class="form-input" required="" name="desc" placeholder="Description..."></textarea>

<div class="upload-zone">
<i class="fa center-i fa-cloud-upload"></i>
<input class="file" type="file" name="photo"/>


</div>
<input type="submit" class="be-popup-sign-button" value="Submit">
</form>
</div>

</div>



</div>

<div class="input-col col-xs-12">

</div>
</div>
</div>


</div>

</div>
</div>
</div>

<div class="be-fixed-filter"></div>
<div class="mini-popup-wrapper brand-popup">
<div class="mini-popup ">
<i class="fa close-mini fa-times"></i>
<h3>Add Brand</h3>
<!--<form action="http://demo.nrgthemes.com/projects/nrgnetwork/">-->
<input type="text"><br>
<button type="button" class="btn btn-primary">DONE</button>
</form>
</div>
</div>
<div class="mini-popup-wrapper school-popup">
<div class="mini-popup ">
<i class="fa close-mini fa-times"></i>
<h3>Add School</h3>
<form action="http://demo.nrgthemes.com/projects/nrgnetwork/">
<input type="text"><br>
<button type="button" class="btn btn-primary">DONE</button>
</form>
</div>
</div>
<div class="mini-popup-wrapper tools-popup">
<div class="mini-popup ">
<i class="fa close-mini fa-times"></i>
<h3>Add Tools</h3>
<form action="http://demo.nrgthemes.com/projects/nrgnetwork/">
<input type="text"><br>
<button type="button" class="btn btn-primary">DONE</button>
</form>
</div>
</div>
<div class="mini-popup-wrapper team-popup">
<div class="mini-popup ">
<i class="fa close-mini fa-times"></i>
<h3>Add Team</h3>
<form action="http://demo.nrgthemes.com/projects/nrgnetwork/">
<input type="text"><br>
<button type="button" class="btn btn-primary">DONE</button>
</form>
</div>
</div>
<div class="mini-popup-wrapper agencies-popup">
<div class="mini-popup ">
<i class="fa close-mini fa-times"></i>
<h3>Add Agencies</h3>
</div>
</div>

<script src="script/jquery-2.1.4.min.js"></script>
<script src="script/jquery-ui.min.js"></script>
<script src="script/bootstrap.min.js"></script>
<script src="script/idangerous.swiper.min.js"></script>
<script src="script/isotope.pkgd.min.js"></script>
<script src="script/jquery.viewportchecker.min.js"></script>
<script src="script/colors.js"></script>
<script src="script/jqColorPicker.js"></script>
<script src="script/global.js"></script>
</body>



<?php
	require('include/footerLogin.html');
?>