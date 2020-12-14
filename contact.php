<?php
	require 'header.php';
?>
<!-- //contact -->
<div class="content">
	<div class="contact">
		<div class="container">
			<h2>How To Find Us</h2>
			<div class="contact-bottom">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.324004854123!2d80.98076291467929!3d26.861445183149744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd0696fc3245%3A0x9719da00b2748496!2sCEDCOSS%20Technologies%20Private%20Limited!5e0!3m2!1sen!2sin!4v1607405438767!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="col-md-4 contact-left">
				<h4>Address</h4>
				<p>3/460, Opp to Nehru Enclave, Vishwas Khand, Lucknow, Uttar Pradesh 226010
					<span>LUCKNOW INDIA</span></p>
				<ul>
					<li>Free Phone :+91 5224077802</li>
					<li>Telephone :+91 5224077902 </li>
					<!-- <li>Fax :+1 078 4589 2456</li> -->
					<li><a href="mailto:info@cedcoss.com">info@cedcoss.com</a></li>
				</ul>
			</div>
			<div class="col-md-8 contact-left cont">
				<h4>Contact Form</h4>
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
					<input type="reset" value="Clear" >

				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //contact -->

</div>
<?php
	require 'footer.php';
?>