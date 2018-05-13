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
<h2 class="content-title">Photo Feed</h2>
<div class="row">
<div class="col-xs-12 col-sm-9 main-feild">
<div class="blog-wrapper">
<div class="blog-post be-large-post">
<div class="info-block clearfix">
<div class="be-large-post-align">
<span><i class="fa fa-thumbs-o-up"></i> 253</span>
<span><i class="fa fa-eye"></i> 753</span>
<span><i class="fa fa-comment-o"></i> 50</span>
<span class="be-text-tags">
<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>,
<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
</span>
</div>
</div>
<div class="be-large-post-align">
<a class="be-post-title" href="blog-detail-2.html">
Fusce dolor libero, efficitur
</a>
<div class="be-text-tags clearfix">
<div class="post-date">
<i class="fa fa-clock-o"></i> April 23, 2015
</div>
<div class="author-post">
<img src="img/a1.png" alt="" class="ava-author">
<span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
</div>
</div>
<div class="clear"></div>
</div>
<a class="post-preview post-image" href="blog-detail-2.html"><img class="img-full" src="img/blog_8.jpg" alt=""></a>
<div class="be-large-post-align">
<div class="post-text ">Phasellus lacinia ipsum sapien, sed condimentum erat dignissim nec. Praesent suscipit neque risus, et vehicula libero elementum nec. Sed varius viverra purus, eu sagittis turpis fermentum in. Cras nec laoreet lectus, nec congue ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Ut gravida, turpis et tincidunt sagittis, sapien quam sagittis ante, in scelerisque enim nibh a lorem. Aenean consequat tortor eu erat accumsan aliquam.</div>
<a class="btn color-1 size-2 hover-1" href="blog-detail-2.html">Read more</a>
</div>
</div>
<div class="blog-post be-large-post">
<div class="info-block">
<div class="be-large-post-align">
<span><i class="fa fa-thumbs-o-up"></i> 253</span>
<span><i class="fa fa-eye"></i> 753</span>
<span><i class="fa fa-comment-o"></i> 50</span>
<span class="be-text-tags">
<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>,
<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
</span>
</div>
</div>
<div class="be-large-post-align">
<a class="be-post-title" href="blog-detail-2.html">
Polygonal style
</a>
<div class="be-text-tags clearfix">
<div class="post-date">
<i class="fa fa-clock-o"></i> April 23, 2015
</div>
<div class="author-post">
<img src="img/a1.png" alt="" class="ava-author">
<span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
</div>
</div>
<div class="clear"></div>
</div>
<div class="post-preview be-large-post-slider">
<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
<div class="swiper-wrapper">
<div class="swiper-slide active" data-val="0">
<img class="img-responsive img-full" src="img/blog_5.jpg" alt="">
</div>
<div class="swiper-slide" data-val="1">
<img class="img-responsive img-full" src="img/blog_4.jpg" alt="">
</div>
<div class="swiper-slide" data-val="2">
<img class="img-responsive img-full" src="img/blog_5.jpg" alt="">
</div>
</div>
<div class="pagination hidden"></div>
<div class="swiper-arrow-left"></div>
<div class="swiper-arrow-right"></div>
</div>
</div>
<div class="be-large-post-align">
<div class="post-text ">Donec consectetur diam tellus, et aliquet nulla scelerisque quis. Duis rhoncus nisi urna, eget commodo risus euismod eu. In volutpat ac nibh sit amet sodales. Cras nisi quam, facilisis in enim pulvinar, finibus ullamcorper lectus. Duis nibh quam, lobortis eget accumsan quis, malesuada id orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ut purus hendrerit, dapibus turpis vel, pharetra risus.</div>
<a class="btn color-1 size-2 hover-1" href="blog-detail-2.html">Read more</a>
</div>
</div>
<div class="blog-post be-large-post">
<div class="info-block">
<div class="be-large-post-align">
<span><i class="fa fa-thumbs-o-up"></i> 253</span>
<span><i class="fa fa-eye"></i> 753</span>
<span><i class="fa fa-comment-o"></i> 50</span>
</div>
</div>
<div class="be-large-post-align">
<a class="be-post-title" href="blog-detail-2.html">
Some video post
</a>
<span class="be-text-tags">
<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>,
<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
</span>
<div class="clear"></div>
</div>
<div class="post-preview">
<div class="post-preview embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/125235739?portrait=0&amp;badge=0" width="500" height="281"></iframe>
</div>
</div>
<div class="be-large-post-align">
<div class="post-text ">Nam molestie, dolor non mattis accumsan, risus sapien accumsan purus, in euismod tellus lectus ac eros. Vestibulum tincidunt vestibulum nulla a semper. Aenean eu consequat sapien. Suspendisse potenti. Nunc placerat in orci eu suscipit. Fusce in lectus vitae lacus fermentum faucibus. Sed arcu velit, bibendum et felis a, pellentesque efficitur ipsum. Pellentesque iaculis vitae magna in tristique. Sed ligula lectus, finibus at semper nec, blandit eu tellus. Nulla condimentum finibus arcu a tristique.</div>
<a class="btn color-1 size-2 hover-1" href="blog-detail-2.html">Read more</a>
</div>
</div>
<div class="blog-post be-large-post">
<div class="info-block">
<div class="be-large-post-align">
<span><i class="fa fa-thumbs-o-up"></i> 253</span>
<span><i class="fa fa-eye"></i> 753</span>
<span><i class="fa fa-comment-o"></i> 50</span>
</div>
</div>
<div class="be-large-post-align">
<a class="be-post-title" href="blog-detail-2.html">
Best ideas you can see here
</a>
<span class="be-text-tags">
<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>,
<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
</span>
<div class="clear"></div>
</div>
<div class="post-preview">
<blockquote>
<p>Pellentesque consectetur, est vel efficitur posuere, neque dolor accumsan neque, ut semper ipsum magna nec dui. Ipsum.</p>
<footer><cite title="Kalen mcGregor">Hoang Nguyen</cite></footer>
</blockquote>
</div>
<div class="be-large-post-align">
<div class="post-text ">Morbi efficitur feugiat erat a efficitur. Donec interdum, nunc ac elementum auctor, dui nisl placerat odio, eget sagittis sem neque venenatis libero. Vestibulum pharetra sollicitudin urna nec eleifend. Suspendisse id augue ut nunc vestibulum euismod. Donec a libero ut lectus ullamcorper rhoncus vel quis erat. Duis ornare rutrum consectetur. Proin tincidunt a ex blandit cursus. Suspendisse ultricies erat sit amet orci scelerisque</div>
<a class="btn color-1 size-2 hover-1" href="blog-detail-2.html">Read more</a>
</div>
</div>
<div class="blog-post be-large-post">
<div class="info-block">
<div class="be-large-post-align">
<span><i class="fa fa-thumbs-o-up"></i> 253</span>
<span><i class="fa fa-eye"></i> 753</span>
<span><i class="fa fa-comment-o"></i> 50</span>
</div>
</div>
<div class="be-large-post-align">
<a class="be-post-title" href="blog-detail-2.html">
Fusce dolor libero, efficitur
</a>
<span class="be-text-tags">
<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>,
<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
</span>
<div class="clear"></div>
</div>
<div class="post-preview">
<div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
<div class="swiper-wrapper">
<div class="swiper-slide active" data-val="0">
<img class="img-responsive img-full" src="img/blog_6.jpg" alt="">
</div>
<div class="swiper-slide" data-val="1">
<img class="img-responsive img-full" src="img/blog_7.jpg" alt="">
</div>
<div class="swiper-slide" data-val="2">
<img class="img-responsive img-full" src="img/blog_8.jpg" alt="">
</div>
<div class="swiper-slide" data-val="3">
<img class="img-responsive img-full" src="img/blog_4.jpg" alt="">
</div>
<div class="swiper-slide" data-val="4">
<img class="img-responsive img-full" src="img/blog_7.jpg" alt="">
</div>
<div class="swiper-slide" data-val="5">
<img class="img-responsive img-full" src="img/blog_6.jpg" alt="">
</div>
</div>
<div class="pagination hidden"></div>
</div>
<div class="swiper-container thumbnails dark" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="6">
<div class="swiper-wrapper">
<div class="swiper-slide current active" data-val="0">
<img src="img/blog_6_s.jpg" alt="">
</div>
<div class="swiper-slide" data-val="1">
<img src="img/blog_7_s.jpg" alt="">
</div>
<div class="swiper-slide" data-val="2">
<img src="img/blog_8_s.jpg" alt="">
</div>
<div class="swiper-slide" data-val="3">
<img src="img/blog_4_s.jpg" alt="">
</div>
<div class="swiper-slide" data-val="4">
<img src="img/blog_7_s.jpg" alt="">
</div>
<div class="swiper-slide" data-val="5">
<img src="img/blog_6_s.jpg" alt="">
</div>
</div>
<div class="pagination hidden"></div>
</div>
</div>
<div class="be-large-post-align">
<div class="post-text ">Pellentesque consectetur, est vel efficitur posuere, neque dolor accumsan neque, ut semper ipsum magna nec dui. Ipsum.</div>
<a class="btn color-1 size-2 hover-1" href="blog-detail-2.html">Read more</a>
</div>
</div>
<div class="pagination clearfix">
<a class="btn color-4 hover-9 page-left" href="blog-detail-2.html">prev page</a>
<a class="btn color-4 hover-9 page-right" href="blog-detail-2.html">next page</a>
<div class="pages">
<a class="btn color-5 hover-9" href="blog-detail-2.html">1</a>
<a class="btn color-5 hover-9" href="blog-detail-2.html">2</a>
<a class="btn color-5 hover-9" href="blog-detail-2.html">3</a>
<a class="btn color-5 hover-9" href="blog-detail-2.html">4</a>
<a class="btn color-5 hover-9" href="blog-detail-2.html">...</a>
<a class="btn color-5 hover-9" href="blog-detail-2.html">10</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 left-feild">
<form action="http://demo.nrgthemes.com/projects/nrgnetwork/" class="input-search">
<input type="text" required placeholder="Enter keyword">
<i class="fa fa-search"></i>
<input type="submit" value="">
</form>
<div class="be-vidget">
<h3 class="letf-menu-article">
Categories
</h3>
<div class="creative_filds_block">
<div class="ul numbered">
<a href="blog-detail-2.html">Graphic Design <span>151</span></a>
<a href="blog-detail-2.html">Photography <span>32</span></a>
<a href="blog-detail-2.html">Interaction Design <span>44</span></a>
<a href="blog-detail-2.html">Art Direction <span>24</span></a>
<a href="blog-detail-2.html">Illustration <span>751</span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 









<?php
	require('include/footerLogin.html');
?>