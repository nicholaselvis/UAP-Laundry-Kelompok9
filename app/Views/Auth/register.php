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
              

			<!-- form regirter -->
                <form action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>

					<!-- email -->
                	<div class="form-group">
                        <label for="email" class="sr-only"><?=lang('Auth.email')?></label>
                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                               name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                        <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                    </div>
					<!-- end email -->

                    <!-- username -->
                    <div class="form-group">
                        <label for="username" class="sr-only"><?=lang('Auth.username')?></label>
                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                    </div>
                    <!-- end username -->

                    <!-- password -->
                    <div class="form-group">
                        <label for="password" class="sr-only"><?=lang('Auth.password')?></label>
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="pass_confirm" class="sr-only"><?=lang('Auth.repeatPassword')?></label>
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                    </div>
                    <!-- end password -->

                    <button type="submit" class="btn btn-block login-btn mb-4"><?=lang('Auth.register')?></button>
                </form>
			<!-- end form login -->

                
            <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

<?= $this->endsection() ?>