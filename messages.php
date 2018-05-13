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




<div id="content-block">
<div class="container be-detail-container">
<div class="row">
<div class="col-xs-12 col-sm-5 left-feild">
<a href="author-login.html" class="btn color-4 size-1 hover-7"><i class="fa fa-chevron-left"></i> back to profile</a>
<a href="page1.html" class="btn btn-right color-1 send-btn size-1 hover-1"><i class="fa fa-envelope-o"></i> compose</a>
<form>
<div class="noto-header clearfix">
<div class="form-checkbox">
<input id="ch1" class="select-all" type="checkbox"> <span class="check"><i class="fa fa-check"></i></span>
<label for="ch1">select all</label>
</div>
<div class="stat-sort be-drop-down">
<span class="be-dropdown-content">actions</span>
<ul class="drop-down-list">
<li><a>Featured</a></li>
<li><a>Most Appreciated</a></li>
<li><a>Most Viewed</a></li>
<li><a>Most Discussed</a></li>
<li><a>Most Recent</a></li>
<li><a>Edit</a></li>
<li><a>Delete</a></li>
</ul>
</div>
</div>
<div class="noto-entry style-3">
<div class="noto-content clearfix">
<div class="form-checkbox">
<input type="checkbox" value=""> <span class="check"><i class="fa fa-check"></i></span>
</div>
<div class="noto-img">
<a href="page1.html">
<img src="img/c1.png" alt="" class="be-ava-comment">
</a>
</div>
<div class="noto-text">
<div class="noto-text-top">
<span class="noto-name"><a href="page1.html">Ravi Sah</a></span>
<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
</div>
<div class="noto-message">Sed velit mauris, pulvinar sit amet accumsan vitae, egestas, pulvinar sit amet accumsan vitae, egestas</div>
</div>
</div>
</div>
<div class="noto-entry style-3">
<div class="noto-content clearfix">
<div class="form-checkbox">
<input type="checkbox" value=""> <span class="check"><i class="fa fa-check"></i></span>
</div>
<div class="noto-img">
<a href="page1.html">
<img src="img/ava_3.jpg" alt="" class="be-ava-comment">
</a>
</div>
<div class="noto-text">
<div class="noto-text-top">
<span class="noto-name"><a href="page1.html">Louis Paquet</a></span>
<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
</div>
<div class="noto-message">Pellentesque habitant morbi tristique senectus et netus...</div>
</div>
</div>
</div>
<div class="noto-entry style-3">
<div class="noto-content clearfix">
<div class="form-checkbox">
<input type="checkbox" value=""> <span class="check"><i class="fa fa-check"></i></span>
</div>
<div class="noto-img">
<a href="page1.html">
<img src="img/ava_5.jpg" alt="" class="be-ava-comment">
</a>
</div>
<div class="noto-text">
<div class="noto-text-top">
<span class="noto-name"><a href="page1.html">Cüneyt ŞEN</a></span>
<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
</div>
<div class="noto-message">Sed id erat vitae libero malesuada dictum vel sit amet eros</div>
</div>
</div>
</div>
<div class="noto-entry style-3">
<div class="noto-content clearfix">
<div class="form-checkbox">
<input type="checkbox" value=""> <span class="check"><i class="fa fa-check"></i></span>
</div>
<div class="noto-img">
<a href="page1.html">
<img src="img/ava_8.jpg" alt="" class="be-ava-comment">
</a>
</div>
<div class="noto-text">
<div class="noto-text-top">
<span class="noto-name"><a href="page1.html">Tomasz Mazurczak</a></span>
<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
</div>
<div class="noto-message">In molestie libero quis cursus ullamcorper eu rhoncus maa</div>
</div>
</div>
</div>
</form>
</div>
<div class="col-xs-12 col-sm-7">
<div class="be-large-post">
<div class="info-block style-2">
<div class="be-large-post-align">
<div class="info-block-right"><a class="settings" href="page1.html"><i class="fa fa-cog"></i></a></div>
<h3 class="info-block-label">Message with Louis Paquet</h3>
</div>
</div>
<div class="be-large-post-align">
<div class="be-comment">
<div class="be-img-comment">
<a href="page1.html">
<img src="img/ava_3.jpg" alt="" class="be-ava-comment">
</a>
</div>
<div class="be-comment-content">
<span class="be-comment-name">
<a href="page1.html">Louis Paquet</a>
</span>
<span class="be-comment-time">
<i class="fa fa-clock-o"></i>
May 27, 2015 at 3:14am
</span>
<p class="be-comment-text">
Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros commodo. Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque turpis tristique blandit.
</p>
</div>
</div>
<div class="be-comment">
<div class="be-img-comment">
<a href="page1.html">
<img src="img/ava_10.jpg" alt="" class="be-ava-comment">
</a>
</div>
<div class="be-comment-content">
<span class="be-comment-name">
<a href="page1.html">Leigh Taylor</a>
</span>
<span class="be-comment-time">
<i class="fa fa-clock-o"></i>
May 27, 2015 at 3:14am
</span>
<p class="be-comment-text">
In molestie libero quis cursus ullamcorper. Sed id erat vitae libero malesuada
</p>
</div>
</div>
<div class="be-comment">
<div class="be-img-comment">
<a href="page1.html">
<img src="img/ava_10.jpg" alt="" class="be-ava-comment">
</a>
</div>
<div class="be-comment-content">
<span class="be-comment-name">
<a href="page1.html">Leigh Taylor</a>
</span>
<span class="be-comment-time">
<i class="fa fa-clock-o"></i>
May 27, 2015 at 3:14am
</span>
<p class="be-comment-text">
Fusce placerat quis lectus sit amet aliquam. In quis pulvinar ante, sed faucibus nibh. Etiam gravida tortor ut quam tincidunt consectetur. Cras pulvinar, sem vitae facilisis placerat, purus libero consequat erat. Nunc lacus est, convallis ac hendrerit ut
</p>
</div>
</div>
<div class="be-comment">
<div class="be-img-comment">
<a href="page1.html">
<img src="img/ava_3.jpg" alt="" class="be-ava-comment">
</a>
</div>
<div class="be-comment-content">
<span class="be-comment-name">
<a href="page1.html">Louis Paquet</a>
</span>
<span class="be-comment-time">
<i class="fa fa-clock-o"></i>
May 27, 2015 at 3:14am
</span>
<p class="be-comment-text">
Integer in augue at justo tempor vestibulum. Cras fringilla enim nec accumsan fermentum. Vestibulum sed tempor urna.
Interdum et malesuada fames ac ante ipsum primis in faucibus.
</p>
</div>
</div>
<form>
<div class="form-group">
<div class="form-label">Your Message</div>
<textarea class="form-input" required="" placeholder="Reply to Louise Paquet"></textarea>
</div>
<button class="btn btn-right color-1 size-2 hover-1">reply</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="be-fixed-filter"></div>
<div class="large-popup send-m">
<div class="large-popup-fixed"></div>
<div class="container large-popup-container">
<div class="row">
<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
<div class="row">
<div class="col-md-12">
<i class="fa fa-times close-m close-button"></i>
<h5 class="large-popup-title">Send message</h5>
</div>
<form action="http://demo.nrgthemes.com/projects/nrgnetwork/" class="popup-input-search">
<div class="col-md-6">
<input class="input-signtype" type="text" required="" placeholder="First Name">
</div>
<div class="col-md-6">
<input class="input-signtype" type="text" required="" placeholder="Last Name">
</div>
<div class="col-md-6">
<div class="be-custom-select-block">
<select class="be-custom-select">
<option value="" disabled selected>
Country
</option>
<option value="">USA</option>
<option value="">Canada</option>
<option value="">England</option>
</select>
</div>
</div>
<div class="col-md-6">
<input class="input-signtype" type="email" placeholder="Email" required>
</div>
<div class="col-md-12">
<textarea class="message-area" placeholder="Message"></textarea>
</div>
<div class="col-md-12 for-signin">
<input type="submit" class="be-popup-sign-button" value="SEND">
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="large-popup login">
<div class="large-popup-fixed"></div>
<div class="container large-popup-container">
<div class="row">
<div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3  large-popup-content">
<div class="row">
<div class="col-md-12">
<i class="fa fa-times close-button"></i>
<h5 class="large-popup-title">Log in</h5>
</div>
<form action="http://demo.nrgthemes.com/projects/nrgnetwork/" class="popup-input-search">
<div class="col-md-6">
<input class="input-signtype" type="email" required="" placeholder="Your email">
</div>
<div class="col-md-6">
<input class="input-signtype" type="password" required="" placeholder="Password">
</div>
<div class="col-xs-6">
<div class="be-checkbox">
<label class="check-box">
<input class="checkbox-input" type="checkbox"/> <span class="check-box-sign"></span>
</label>
<span class="large-popup-text">
Stay signed in
</span>
</div>
<a href="page1.html" class="link-large-popup">Forgot password?</a>
</div>
<div class="col-xs-6 for-signin">
<input type="submit" class="be-popup-sign-button" value="SIGN IN">
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="large-popup register">
<div class="large-popup-fixed"></div>
<div class="container large-popup-container">
<div class="row">
<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
<div class="row">
<div class="col-md-12">
<i class="fa fa-times close-button"></i>
<h5 class="large-popup-title">Register</h5>
</div>
<form action="http://demo.nrgthemes.com/projects/nrgnetwork/" class="popup-input-search">
<div class="col-md-6">
<input class="input-signtype" type="text" required="" placeholder="First Name">
</div>
<div class="col-md-6">
<input class="input-signtype" type="text" required="" placeholder="Last Name">
</div>
<div class="col-md-6">
<div class="be-custom-select-block">
<select class="be-custom-select">
<option value="" disabled selected>
Country
</option>
<option value="">USA</option>
<option value="">Canada</option>
<option value="">England</option>
</select>
</div>
</div>
<div class="col-md-6">
<input class="input-signtype" type="text" required="" placeholder="Email">
</div>
<div class="col-md-6">
<input class="input-signtype" type="text" required="" placeholder="Password">
</div>
<div class="col-md-6">
<input class="input-signtype" type="text" required="" placeholder="Repeat Password">
</div>
<div class="col-md-12 be-date-block">
<span class="large-popup-text">
Date of birth
</span>
<div class="be-custom-select-block mounth">
<select class="be-custom-select">
<option value="" disabled selected>
Mounth
</option>
<option value="">January</option>
<option value="">February</option>
<option value="">March</option>
<option value="">April</option>
<option value="">May</option>
<option value="">June</option>
<option value="">July</option>
<option value="">August</option>
<option value="">September</option>
<option value="">October</option>
<option value="">November</option>
<option value="">December</option>
</select>
</div>
<div class="be-custom-select-block">
<select class="be-custom-select">
<option value="" disabled selected>
Day
</option>
<option value="">1</option>
<option value="">2</option>
<option value="">3</option>
<option value="">4</option>
<option value="">5</option>
<option value="">6</option>
<option value="">7</option>
<option value="">8</option>
<option value="">9</option>
<option value="">10</option>
<option value="">11</option>
<option value="">12</option>
<option value="">13</option>
<option value="">14</option>
<option value="">15</option>
<option value="">16</option>
<option value="">17</option>
<option value="">18</option>
<option value="">19</option>
<option value="">20</option>
<option value="">21</option>
<option value="">22</option>
<option value="">23</option>
<option value="">24</option>
<option value="">25</option>
<option value="">26</option>
<option value="">27</option>
<option value="">28</option>
<option value="">29</option>
<option value="">30</option>
</select>
</div>
<div class="be-custom-select-block">
<select class="be-custom-select">
<option value="" disabled selected>
Year
</option>
<option value="">1996</option>
<option value="">1997</option>
<option value="">1998</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="be-checkbox">
<label class="check-box">
<input class="checkbox-input" type="checkbox" required=""/> <span class="check-box-sign"></span>
</label>
<span class="large-popup-text">
I have read and agree to the <a class="be-popup-terms" href="page1.html">Terms of Use</a> and <a class="be-popup-terms" href="page1.html">Privacy Policy</a>.
</span>
</div>
<div class="be-checkbox">
<label class="check-box">
<input class="checkbox-input" type="checkbox"/> <span class="check-box-sign"></span>
</label>
<span class="large-popup-text">
Send me notifications
</span>
</div>
</div>
<div class="col-md-6 for-signin">
<input type="submit" class="be-popup-sign-button" value="SIGN IN">
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="theme-config">
<div class="main-color">
<div class="title">Main Color:</div>
<div class="colours-wrapper">
<div class="entry color1 m-color active" data-colour="style/stylesheet.css"></div>
<div class="entry color3 m-color" data-colour="style/style-green.html"></div>
<div class="entry color6 m-color" data-colour="style/style-orange.html"></div>
<div class="entry color8 m-color" data-colour="style/style-red.html"></div>
<div class="title">Second Color:</div>
<div class="entry s-color  active color10" data-colour="style/stylesheet.css"></div>
<div class="entry s-color color11" data-colour="style/style-oranges.html"></div>
<div class="entry s-color color12" data-colour="style/style-greens.html"></div>
<div class="entry s-color color13" data-colour="style/style-reds.html"></div>
</div>
</div>
<div class="open"><img src="img/icon-134.png" alt=""></div>
</div>
 
<script src="script/jquery-2.1.4.min.js"></script>
<script src="script/bootstrap.min.js"></script>
<script src="script/idangerous.swiper.min.js"></script>
<script src="script/isotope.pkgd.min.js"></script>
<script src="script/jquery.viewportchecker.min.js"></script>
<script src="script/jquery.countTo.js"></script>
<script src="script/global.js"></script>
</body>




<?php
	require('include/footerLogin.html');
?>
