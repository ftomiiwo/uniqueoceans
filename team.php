<?php include('header.php'); ?>
   
<!-- banner -->
<!-- <div class="banner inner-banner" id="home">
	<div class="container">

	</div>
</div> -->
<!-- //banner -->

<!-- Team page -->
<section class="section team_height pt-5" id="agents">
	<div class="container py-lg-5">
		<h2 class="heading team_body_title mb-sm-5 mb-4"> Our Team</h2>
		<div class="section_header">
			<div class="team_body">
				<p>Uniqueocean is designed to operate as an inclusive organization that is open to global part- nership with aligned set of values, including a deep commitment to diversity.
				</p>
				<p>We are take a consistent approach to engagement and skills development of our people irre- spective of their background just so we can deliver appropriate team mix, with the right experience and expertise, to every client, anywhere in the world.</p>
				<p>Our team is composed of certified and experienced professionals in the field of Quality, Health & Safety, Environment, Humanities as well as Social workers.
				</p>
			</div>
		</div>
		<p class="core_value_title">Our Leadership</p>
		<div class="team_container">
			<div class="team_item" data-toggle="modal" data-target="#olasunkanmi">
				<img src="images/olasunkanmi-removebg.png" alt="team member" class="img-fluid">
				<div class="name">
					<p>Olasunkanmi Olayanju , CMQ-OE</p>
					<span>Principal Consultant</span>
				</div>
				<div class="_socials">
					<a href="https://www.linkedin.com/in/olasunkanmi-olayanju/" target="_blank" rel="noopener noreferrer">
						<i class="fab fa-linkedin"></i>
					</a>
				</div>

		<!-- Modal -->
				<div class="modal fade" id="olasunkanmi" tabindex="-1" role="dialog" aria-labelledby="olasunkanmiLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body _body">
								<p>Olasunkanmi Olayanju is an experienced and certified QHSE professional with more than a decade of vast and progressive expertise across several industries including manufacturing, auditing, consulting, oil and gas, quality, occupational health and safety, and environmental management. Able to lead organizations at the highest management and executive capacity towards sustainable leadership and direction, business restructuring, impactful transformation, and profitable growth</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Team page -->

<?php include('footer.php'); ?>

<!-- popup for login -->
<div id="popup3" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Login to Digital</h5>
			<form action="#" method="post">
				<div class="form-group">
					<label class="mb-2">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
				</div>
				<button type="submit" class="btn btn-primary submit mt-2">Login</button>
				<p class="text-center mt-2">
					<a href="#popup4"> Don't have an account?</a>
				</p>
			</form>
		</div>

		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- //popup for login -->

<!-- popup for register -->
<div id="popup4" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Register Now</h5>
			<form action="#" method="post">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" class="form-control" id="validationDefault02" placeholder="" required="">
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" class="form-control" id="password1" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" id="password2" placeholder="" required="">
				</div>

				<button type="submit" class="btn btn-primary submit">Register</button>
				<p class="text-center mt-3">
					<a href="#">By clicking Register, I agree to your terms</a>
				</p>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- //popup for register -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>