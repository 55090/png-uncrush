<?php   $this->load->view("header"); ?>

	<section class="featured">
		<div class="container"> 
			<div class="row mar-bot40">
				<div class="col-md-6 col-md-offset-3">

					<div class="align-center">
						<i class="fa fa-flask fa-5x mar-bot20"></i>
						<h2 class="slogan">Drop PNG image to uncrush</h2>
						<!-- Register Form -->
						<form class="form signUp-form row " role="form" method="post"   action="<?= base_url("welcome/upload")?>"  enctype="multipart/form-data">

							<div id="dropzone">
								<div>dropzone</div>
								<input type="file"  name="userfile" accept="image/png" />
							</div>
							<button type="submit" class="btn wide-btn btn-primary btn-lrg">Uncrush</button>
						</form>
						<!-- Register Form -->


					</div>
				</div>
			</div>
		</div>
	</section>

<?php   $this->load->view("footer"); ?>
