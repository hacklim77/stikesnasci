<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(<?= base_url('assets/img/cdc-stikesnasional.jpg') ?>);">
				<img src="<?= base_url('assets/img/logo-stikes.png')?>" style="max-height: 150px;">
			</div>
            <?= $this->session->flashdata('msg'); ?>
			<form class="p-t-25 p-b-25 p-l-25 p-r-25 validate-form" method="post" action="">
				<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
					<!-- <span class="">Username</span> -->
					<input class="input100" type="text" name="username_admin" id="username_admin" placeholder="Username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
					<!-- <span class="">Password</span> -->
					<input class="input100" type="password" name="password_admin" id="password_admin" placeholder="Password">
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn p-t-30">
					<button class="btn btn-primary btn-block" type="submit">
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
</div>