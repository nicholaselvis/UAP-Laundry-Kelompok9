<?= $this->extend('layouts/applogin') ?>

<?= $this->section('content') ?>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= base_url('assets/img/1.jpg') ?>" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="<?= base_url('assets/img/logonew.png') ?>" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign into your account</p>
              

			<!-- formlogin -->
				<form action="<?= url_to('login') ?>" method="post">
					<?= csrf_field() ?>

					<!-- email -->
                	<?php if ($config->validFields === ['email']): ?>
						<div class="form-group">
							<label for="login" class="sr-only"><?=lang('Auth.email')?></label>
							<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
						    <?php else: ?>
						<div class="form-group">
							<label for="login" class="sr-only" ><?=lang('Auth.emailOrUsername')?></label>
							<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
					<?php endif; ?>
					<!-- end email -->

					<div class="form-group">
						<label for="password" class="sr-only" ><?=lang('Auth.password')?></label>
						<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
						<div class="invalid-feedback">
							<?= session('errors.password') ?>
						</div>
					</div>

				  	<button type="submit" class="btn btn-block login-btn mb-4"><?=lang('Auth.loginAction')?></button>
                </form>
			<!-- end form login -->

                
                <?php if ($config->allowRegistration) : ?>
					<p><a href="<?= base_url('/register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
		        <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

<?= $this->endsection() ?>