<?php
	require 'header.php';
?>
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <!-- <form>  -->
				 <div class="register-top-grid">
					<h3>personal information</h3>
					<p class="requireField">* Required Field</p>
					 <div>
						<span>Name<label>*</label></span>
						<input type="text" id="name" name="name"> 
					 </div>
					 <!-- <div>
						<span>Last Name<label>*</label></span>
						<input type="text"> 
					 </div> -->
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" id="email" name="email" data-toggle="arjun" title="email@gmail.com"> 
					 </div>
					 <div>
						 <span>Contact No.<label>*</label> (Minimum 10 digits required)</span>
						 <input type="text" id="mobile" name="mobile" title="Minimum Ten(10) digits required and all value should not be identical !"> 
					 </div>
					 <div>
						 <span>Security Question<label>*</label></span>
						 <!-- <input type="text">  -->
						 <select name="squestion" id="squestion">
							 <option value="">Select Your Security Question</option>
							 <option value="What was your childhood nickname?">What was your childhood nickname?</option>
							 <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
							 <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
							 <option value="What was your dream job as a child?">What was your dream job as a child?</option>
							 <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
						 </select>
					 </div>
					 <div id="security">
						 <span>Security Answer<label>*</label></span>
						 <input type="text" id="sanswer" name="sanswer"> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="password" id="password" name="password" data-toggle="arjun" title="Password: Combination of UPPERCASE, lowercase, special character, numeric and Range between 8-16 character !">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="conpassword" name="conpassword" data-toggle="arjun" title="Password: Combination of UPPERCASE, lowercase, special character, numeric and Range between 8-16 character !">
							 </div>
					 </div>
					 <div class="register-but">
						 <input type="submit" value="submit" id="signup">
					 </div>
				<!-- </form> -->
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
				   <!-- <input type="submit" value="submit" id="signup"> -->
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
<?php
	require 'footer.php';
?>