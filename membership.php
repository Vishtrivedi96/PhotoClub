<?php
	require('include/head.html');
	require('include/headerHome.html');
?>
<div id="content-block">
<!-- 	<div class="container"> -->

<div class="container be-detail-container">
<div class="row">
<div class="accordion style-2">
<div class="acc-panel">
<div class="acc-title"><span class="acc-icon"></span><h4>General Rules: (Please read all rules & regulations for membership)</h4></div>
<div class="acc-body">
<div>
	This is a closed group. Thus to maintain the sanity & harmony for the common goal there are certain rules and regulations laid out which we request each member to go through & adhere to:
</div>
</br>
<ol style="color:black">
	<div>
			PhotoClub is a forum to bring all like-minded people from the city of Vad’s I.e. Vadodara together .Purpose is to learn & share the art of photography in modest possible manner through their experience in this field.
	</div><br/>
	<div>
			PhotoClub group shall be strictly moderated by the admin members, in case if we observe any discussion which is not related to Photography or any inappropriate post on Facebook wall, it shall be deleted without any prior notification to the concerned member.
	</div><br/>
	<div>
			We request you to avoid  promoting any sensitive issues like political, religious, emotional or interpersonal matters/topics within the PhotoClub group or through any other source.
	</div><br/>
	<div>
			Any personal views or suggestion regarding PhotoClub group should not be posted on group wall directly,  members are free to send a private message on Facebook CV group addressed to the admins. We will get back for the response in a positive manner.
	</div><br/>
	<div>
			Any ‘photo-walk’ or ‘photo-trip’ not announced on the PhotoClub group wall shall NOT be considered as an official CV activity.  In case of any mishap during any inliidual photo-trips CV shall not be responsible. Each member is requested to take necessary precaution & take care of themselves.
	</div><br/>
	<div>
			Identity cards will be issued to all the members. You are requested to carry them during the activities organised by CV group for better coordination & eliminating confusion for identity.
	</div><br/>
	<div>
			The CV group protocol & rules/regulations are governed by the Admin group & shall be communicated for changes if any through CV group wall.
	</div><br/>
	<div>
			Any decisions regarding events, workshops etc shall be in interest of art of Photography & decision taken by admin members & core committee members shall stand final. Admins hold their respective positions to manage group activities & events; they may not be the subject matter expertise in Art of Photography, their opinion & views for CV group is their personal perspective and way of seeing the matter. We hereby request everyone to understand the relative efforts at the same time.
	</div><br/>
	<div>
			Digital processing is restricted to minor dusting, levels, sharp/blur, brightness/contrast, curves, burning/dodging, toning. Minor cloning work may be ok as long as you state them in your post. Limited dodging/burning to overcome limitations of recording medium is ok. So, blurred, under exposed, and over exposed among other creative possibilities are just fine. We don't encourage use of "artistic filters" (like texturizers etc) in tools like Photoshop since there are so many such filters which help anyone create unusual and different looking effects which is only a matter of days to pick up and realize everyone can do it. While such effort may lead to art we think they lead to digital art, going beyond the medium of photography which is beyond the scope of this forum. We believe creativity cannot be programmed. Water marks or any other imprint on the photographs are restricted.
	</div><br/>
	<div>
			It is important we trust and respect fellow forum members. We may critique the art of photography (image) but not the artist. Constructive criticism is welcomed.   Improvement suggestions become more credible when we make it a habit to recognize what is good. While you post your images, please be prepared to accept and treat positive criticisms regarding strengths as well as areas  of improvement. Our focus is clearly not on bumping the feedback or view counters. The poster may want to know what aspects you liked and what you didn't. Providing a good critique is a skill by itself. You may want to use this forum to develop that skill.
	</div><br/>
	<div>
			Please make sure you own all copyrights to any content (images, your views in terms of discussions, articles etc) you upload to PhotoClub forum. Please limit self-promotion to a link or two in your signature (under user profile setting). Please restrict all your discussions to creative and artistic aspects of photography in art form.
	</div><br/>
	<div>
			In case if any violation of rules & regulations stated here is observed by any admin member, the photographer will be eliminated without any further notification. Enjoy , share , learn & teach yourself & others  with vision and technique to capture the timeless classic moments through your imagination and camera. 
	</div><br/>
</ol>

</div>
</div>
<div class="acc-panel">
<div class="acc-title"><h4><span class="acc-icon"></span>Registration Form</h4>
</div>
<div class="acc-body">
<form class="form-horizontal" action='php/register.php' method="POST">
  <fieldset>
   <!-- <div id="legend">
      <legend class="">Register</legend>
    </div> -->
	 <div class="control-group">
      <!-- Firstname -->
      <label class="control-label"  for="firstname">Name</label>
      <div class="controls">
        <input type="text" id="firstname" name="firstname" placeholder="First name" class="input-xlarge">
		<input type="text" id="lastname" name="lastname" placeholder="Last name" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
	
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
	
	<div class="control-group">
      <!-- Phone -->
      <label class="control-label" for="phone">Contact</label>
      <div class="controls">
        <input type="text" id="phone" name="phone" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your Contact number</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Confirm Password</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="cpassword" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>

<!-- 	<form> 
		<p><label for="name">Name</label></p> 
			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
		
		<p><label for="name">Address</label></p> 
			<input id="name" name="name" placeholder="full address" required="" tabindex="1" type="text">

		<p><label for="name">Landmark</label></p> 
			<input id="name" name="name" placeholder="landmark" required="" tabindex="1" type="text">	

		<p><label for="name">Area</label></p> 
			<input id="name" name="name" placeholder="area" required="" tabindex="1" type="text">	    			 

		<p><label for="name">City</label></p> 
			<input id="name" name="name" placeholder="city" required="" tabindex="1" type="text">	    			 
			    			 
		<p><label for="name">State</label></p> 
			<input id="name" name="name" placeholder="state" required="" tabindex="1" type="text">
				 
		<fieldset>
			<label>Birthday</label> &nbsp;&nbsp;
			<label class="date"> 
	          	<select class="select-style" name="Birthdate">
	          	<option value="">Day</option>
	          	<option  value="01">1</option>
	          	<option value="02">2</option>
	          	<option value="03" >3</option>
	          	<option value="04">4</option>
	          	<option value="05">5</option>
	          	<option value="06">6</option>
	          	<option value="07">7</option>
	          	<option value="08">8</option>
	          	<option value="09">9</option>
	          	<option value="10">10</option>
	          	<option value="11">11</option>
	          	<option value="12">12</option>
	  		  	<option value="13">13</option>
	          	<option value="14">14</option>
	          	<option value="15">15</option>
	          	<option value="16">16</option>
	          	<option value="17">17</option>
	          	<option value="18">18</option>
	          	<option value="19">19</option>
	          	<option value="20">20</option>
	          	<option value="21">21</option>
	          	<option value="22">22</option>
	          	<option value="23">23</option>
	          	<option value="24">24</option>
	  		  	<option value="25">25</option>
	          	<option value="26">26</option>
	          	<option value="27">27</option>
	          	<option value="28">28</option>
	          	<option value="29">29</option>
	          	<option value="30">30</option>
	          	<option value="31">31</option>
	         </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			</label>
			          <label class="month"> 
			          <select class="select-style" name="BirthMonth">
			          <option value="">Month</option>
			          <option  value="01">January</option>
			          <option value="02">February</option>
			          <option value="03" >March</option>
			          <option value="04">April</option>
			          <option value="05">May</option>
			          <option value="06">June</option>
			          <option value="07">July</option>
			          <option value="08">August</option>
			          <option value="09">September</option>
			          <option value="10">October</option>
			          <option value="11">November</option>
			          <option value="12" >December</option>
			          </label>
			         </select>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
			<label class="year"> 
			          <select class="select-style" name="Birthyear">
			          <option value="year">year</option>
			  <option value="12">2015</option>
			  <option value="13">2014</option>
			          <option value="14">2013</option>
			          <option value="15">2012</option>
			          <option value="16">2011</option>
			          <option value="17">2010</option>
			          <option value="18">2009</option>
			          <option value="19">2008</option>
			          <option value="20">2007</option>
			          <option value="21">2006</option>
			          <option value="22">2005</option>
			          <option value="23">2004</option>
			          <option value="24">2003</option>
			  <option value="25">2002</option>
			          <option value="26">2001</option>
			          <option value="27">2000</option>
			          <option value="28">1999</option>
			          <option value="29">1998</option>
			          <option value="30">1997</option>
			          <option value="31">1996</option>
			          <option value="01">1995</option>
			          <option value="02">1994</option>
			          <option value="03">1993</option>
			          <option value="04">1992</option>
			          <option value="05">1991</option>
			          <option value="06">1990</option>
			          <option value="07">1989</option>
			          <option value="08">1988</option>
			          <option value="09">1987</option>
			          <option value="10">1986</option>
			          <option value="11">1985</option>
			  <option value="28">1984</option>
			          <option value="29">1983</option>
			          <option value="30">1982</option>
			          <option value="31">1981</option>
			          <option value="01">1980</option>
			          <option value="02">1979</option>
			          <option value="03">1978</option>
			          <option value="04">1977</option>
			          <option value="05">1976</option>
			          <option value="06">1975</option>
			          <option value="07">1974</option>
			          <option value="08">1973</option>
			          <option value="09">1972</option>
			          <option value="10">1971</option>
			          <option value="11">1970</option>
			  <option value="02">1969</option>
			          <option value="03">1968</option>
			          <option value="04">1967</option>
			          <option value="05">1966</option>
			          <option value="06">1965</option>
			          <option value="07">1964</option>
			          <option value="08">1963</option>
			          <option value="09">1962</option>
			          <option value="10">1961</option>
			          <option value="11">1960</option>
			          </label>
			         </select>
	      </fieldset>
		</br>
		<p class="contact"><label for="name">Age</label></p> 
			<input id="name" name="name" placeholder="age" required="" tabindex="1" type="text">	

		<select class="select-style gender" name="gender">
	    <option value="select">i am..</option>
	    <option value="m">Male</option>
	    <option value="f">Female</option>
	    <option value="others">Other</option>
	    </select><br><br>
	    
	    <p class="contact"><label for="phone">Mobile phone</label></p> 
	    <input id="phone" name="phone" placeholder="phone number" required="" type="text">    			 
			
		<p class="contact"><label for="email">Email</label></p> 
			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
	        
		<select class="select-style gender" name="gender">
	    <option value="select">Photography Subject</option>
	    <option value="s">Street Photography</option>
	    <option value="n">Nature & Art Photography</option>
	    <option value="w">Wildlife Photography</option>
	    </select><br><br>

	        <p class="contact"><label for="username">After the submittion of your membership form , you will receive a confirmation mail/message within 24 hours. Than you will need to pay your Membership fees to our Admin.(feel free to contact our admins anytime.) </label></p> 
			 </br>
	    <input class="button" name="submit" id="submit" tabindex="5" value="SUBMIT" type="submit"> 
	</form> -->

</div>
</div>

</div>
</div>
</div>
</div>
	<!-- </div> -->
</div>
<?php
	require('include/footerHome.html');
?>
