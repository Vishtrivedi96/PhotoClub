<?php
	require('include/head.html');
	require('include/headerHome.html');
?>
<div id="content-block">
 	<div class="head-bg">
		<div class="head-bg-img"></div>
		<div class="head-bg-content">
			<p style="font-family: Absolute; font-size: 152px; color: #fff">Anubhuti  2017</p>
			<p style="font-size: 22px; color: #fff"></p>
		</div>
	</div>


<div class="container">
<div class="row">
<div class="col-md-12">
<center>
  <button class="btn color-3 size-1 hover-3" onclick="openTab('Trending')">Trending Today</button>
  <button class="btn color-3 size-1 hover-3" style="margin-top: -10px" onclick="openTab('Featured')">Featured Photographers</button>
</center>
</div>
</div>
</div>

<div id="Trending" class="ctab">	
	<div id="wrapper">
		<div id="carousel-left">
			<img  src="gallery/UnseenWorldofStreetsWinners/AbbasBaig1.jpg" width="450" height="325" style="object-fit: cover"/>
			<img  src="gallery/BestShot/1RoniRaval.jpg" width="450" height="325" style="object-fit: cover"/>
			<img  src="gallery/BestShot/2Sajid.jpg" width="450" height="325" style="object-fit: cover"/>
			<img  src="gallery/BestShot/3Monarch.jpg" width="450" height="325"style="object-fit: cover"/ >
			
		</div>
		<div id="carousel-center">
			<img id="2Sajid" src="gallery/BestShot/1RoniRaval.jpg" width="550" height="400" style="object-fit: contain" />
			<img id="3Monarch" src="gallery/BestShot/2Sajid.jpg" width="550" height="400"style="object-fit: contain" />
			<img id="1RoniRaval" src="gallery/BestShot/3Monarch.jpg" width="550" height="400" style="object-fit: contain"/ >
			<img  src="gallery/UnseenWorldofStreetsWinners/AbbasBaig1.jpg" width="550" height="400" style="object-fit: contain"/>
		
		</div>
		<div id="carousel-right">
			<img src="gallery/BestShot/2Sajid.jpg" width="450" height="325" style="object-fit: cover"/ >
			<img src="gallery/BestShot/3Monarch.jpg" width="450" height="325" style="object-fit: cover"/>
			<img src="gallery/UnseenWorldofStreetsWinners/AbbasBaig1.jpg" width="450" height="325" style="object-fit: cover"/>
			<img src="gallery/BestShot/1RoniRaval.jpg" width="450" height="325" style="object-fit: cover"/>
			
		</div>
		<a id="prev" href="#">&lsaquo;</a>
		<a id="next" href="#">&rsaquo;</a>
	</div>	
</div>

<div id="Featured" class="ctab" style="display:none">
	<div id="wrapper">
		<center>
			<div class="container-fluid custom-container">
			<div class="row">
			<div class="col-md-10 col-md-push-2">
			<div id="container-mix" class="be-user-wrapper row">
			<div class="mix category-4 custom-column-5">
			<div class="be-user-block style-2">
			<a class="be-ava-user style-2" href="blog-detail-2.html">
			<img src="img/ava_2.jpg" alt="">
			</a>
			<div class="be-user-counter">
			<div class="c_number">17</div>
			<div class="c_text">projects</div>
			</div>
			<a href="blog-detail-2.html" class="be-use-name">Daniel Ng</a>
			<p class="be-user-info">Singapore, Singapore</p>
			<div class="be-text-tags">
			<a href="blog-detail-2.html">Graphic Design</a>,
			<a href="blog-detail-2.html">Branding,</a>
			<a href="blog-detail-2.html">Typography</a>
			</div>
			<div class="info-block">
			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
			<span><i class="fa fa-eye"></i> 789</span>
			</div>
			<a class="btn color-1 size-2 hover-1">Follow</a>
			<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
			<img src="img/g1.jpg" alt="">
			<img src="img/g2.jpg" alt="">
			<img src="img/g3.jpg" alt="">
			<div class="color_bg">
			<span>view portfolio</span>
			<span class="child"></span>
			</div>
			</a>
			</div>
			</div>
			<div class="mix category-3 custom-column-5">
			<div class="be-user-block style-2">
			<a class="be-ava-user style-2" href="blog-detail-2.html">
			<img src="img/ava_3.jpg" alt="">
			</a>
			<div class="be-user-counter">
			<div class="c_number">34</div>
			<div class="c_text">projects</div>
			</div>
			<a href="blog-detail-2.html" class="be-use-name">Louis Paquet</a>
			<p class="be-user-info">Singapore, Singapore</p>
			<div class="be-text-tags">
			<a href="blog-detail-2.html">Web Design</a>,
			<a href="blog-detail-2.html">Graphic Design</a>,
			<a href="blog-detail-2.html">Art Director</a>
			</div>
			<div class="info-block">
			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
			<span><i class="fa fa-eye"></i> 789</span>
			</div>
			<a class="btn color-1 size-2 hover-1">Follow</a>
			<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
			<img src="img/g4.jpg" alt="">
			<img src="img/g5.jpg" alt="">
			<img src="img/g6.jpg" alt="">
			<div class="color_bg">
			<span>view portfolio</span>
			<span class="child"></span>
			</div>
			</a>
			</div>
			</div>
			<div class="mix category-2 custom-column-5">
			<div class="be-user-block style-2">
			<a class="be-ava-user style-2" href="blog-detail-2.html">
			<img src="img/ava_4.jpg" alt="">
			</a>
			<div class="be-user-counter">
			<div class="c_number">42</div>
			<div class="c_text">projects</div>
			</div>
			<a href="blog-detail-2.html" class="be-use-name">Phoenix, the Creative Studio</a>
			<p class="be-user-info">Quebec, Canada</p>
			<div class="be-text-tags">
			<a href="blog-detail-2.html">Web Design</a>,
			<a href="blog-detail-2.html">Brandingn</a>,
			<a href="blog-detail-2.html">Graphic Designr</a>
			</div>
			<div class="info-block">
			<span><i class="fa fa-thumbs-o-up"></i> 360</span>
			<span><i class="fa fa-eye"></i> 789</span>
			</div>
			<a class="btn color-1 size-2 hover-1">Follow</a>
			<a class="portfolio-link type-1 clearfix" href="blog-detail-2.html">
			<img src="img/g10.jpg" alt="">
			<img src="img/g8.jpg" alt="">
			<img src="img/g1.jpg" alt="">
			<div class="color_bg">
			<span>view portfolio</span>
			<span class="child"></span>
			</div>
			</a>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		</center>
	</div>
</div>

</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div class="container">
<div class="row" style="margin: 25px auto; width: 1000px">
<center>
<p class="btn color-3 size-1 hover-3" >Photographs by Category</p>

<div style=" background-color: #fff; border: 1px solid #a2a2a2; border-radius: 5px; clear: both; padding: 10px 0">
    
      <ul class="col-md-3">
        
          <li><a href="/categories/abstract/">Abstract</a></li>
        
          <li><a href="/categories/adventure/">Adventure</a></li>
        
          <li><a href="/categories/animals/">Animals</a></li>
        
          <li><a href="/categories/architecture/">Architecture</a></li>
        
          <li><a href="/categories/black-and-white/">Black and White</a></li>
        
      </ul>
    
      <ul class="col-md-3">
        
          <li><a href="/categories/culture/">Culture</a></li>
        
          <li><a href="/categories/fashion/">Fashion</a></li>
        
          <li><a href="/categories/food/">Food</a></li>
        
          <li><a href="/categories/landscapes/">Landscapes</a></li>
        
          <li><a href="/categories/music/">Music</a></li>
        
      </ul>
    
      <ul class="col-md-3">
        
          <li><a href="/categories/nature/">Nature</a></li>
        
          <li><a href="/categories/people/">People</a></li>
        
          <li><a href="/categories/places/">Places</a></li>
        
          <li><a href="/categories/portraits/">Portraits</a></li>
        
          <li><a href="/categories/space/">Space</a></li>
        
      </ul>
    
      <ul class="col-md-3">
        
          <li><a href="/categories/sports/">Sports</a></li>
        
          <li><a href="/categories/style/">Style</a></li>
        
          <li><a href="/categories/travel/">Travel</a></li>
        
          <li><a href="/categories/underwater/">Underwater</a></li>
        
          <li><a href="/categories/weather/">Weather</a></li>
        
      </ul>
    
    <div style="clear:both;"></div>
  </div>
</center>
</div>
</div>

<script>
function openTab(tab) {
    var i;
    var x = document.getElementsByClassName("ctab");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(tab).style.display = "block";  
}
</script>

<?php
	require('include/footerHome.html');
?>
