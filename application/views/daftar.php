

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?=base_url();?>asset/img/login.jpg" alt="">
						<div class="hover">
							<h4>Sudah terdaftar ?</h4>
							<p>Silahkan silahkan klik menu berikut untuk login</p>
							<a class="primary-btn" href="<?=base_url();?>controller/login">Login </a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
					
						<h3>Daftar User Baru</h3>
						<form class="row login_form" action="<?=base_url();?>controller/simpan_daftar" method="post" id="contactForm" novalidate="novalidate">
						<?php if ($this->session->userdata('error')):?>
              <div id="message_error" class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-ban"></i> Maaf !</h4>
                  <?php echo $this->session->userdata('error');?>
              </div>
              <?php elseif ($this->session->userdata('success')):?>
              <div id="message_success" class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Success !</h4>
                  <?php echo $this->session->userdata('success');?>
              </div>
              <?php endif;?>
							<div class="col-md-12 form-group">
								<input type="text" required class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" required class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" required class="form-control" id="name" name="ulangi_password" placeholder="Ulangi Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ulangin Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Daftar</button>
								<!-- <a href="#">Forgot Password?</a> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
