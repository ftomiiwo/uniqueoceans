<?php include('header.php'); ?>
   
<!-- banner -->
<div class="banner inner-banner" id="home">
	<div class="container">

	</div>
</div>
<!-- //banner -->

<!-- Contact page -->
<section class="contact py-5 my-lg-5">
	<div class="container">
		<h2 class="heading mb-sm-5 mb-4">Contact Us</h2>
		<?php if(isset($status)) { ?>
		<div class="mb-3 text-capitalize">Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</div>
		<?php } ?>
		<?php if(isset($error)) { ?>
		<div class="mb-3 text-capitalize">We are sorry but the email did not go through.</div>
		<?php } ?>
		<div class="row contact_information">
			<div class="col-md-6 contact_left">
				<div class="contact_border p-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3963.6878752617404!2d3.365492!3d6.5610264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d8f3b9e83bb%3A0x129c8794180b45ba!2s5+Akinmade+St%2C+Anthony%2C+Lagos!5e0!3m2!1sen!2sng!4v1555690314603!5m2!1sen!2sng"></iframe> 
				</div>
			</div>
			<div class="col-md-6 mt-md-0 mt-4">
				<div class="contact_right p-lg-5 p-4">
					<form action="form.php" method="POST">
						<div class="w3_agileits_contact_left">
							<h3 class="mb-3">Contact form</h3>
							<input type="text" class="form-control" id="validationDefault01" placeholder="Your Fullname.." required="required" name="visitor_name">
							<input type="email" class="form-control" id="validationDefault02" placeholder="Your Email" required="required" name="visitor_email">
							<input type="text" class="form-control" id="password2" placeholder="Topic/Title" required="required" name="email_title"> 
							<textarea name="visitor_message" placeholder="Tell us how we can partner with you.."></textarea>
						</div>
						<div class="w3_agileits_contact_right">
							<button type="submit" type="submit">Submit</button>
						</div>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="mt-5 information">
					<h4 class="text-uppercase mb-4"><span class="fa fa-comments"></span> General Communication</h4>
					<p class="mb-3 text-capitalize">For General Queries, Including Partnership Opportunities, Please Email Us At <a href="mailto:info@uniqueoceans.com">info@uniqueoceans.com</a></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 mt-md-5 mt-2 information">
				<h4 class="text-uppercase mb-4"><span class="fa fa-life-ring"></span> Technical Support</h4>
				<p class="mb-3 text-capitalize">We Are Here To Help! If You Have Technical Issues, Contact Support  <span>+234 706 154 7520</span>.</p>
			</div>
		</div>
	</div>
</section>
<!-- //Contact page -->


<?php include('footer.php'); ?>

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top --> 

</body>
</html>
