<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; <?= !empty(get_compnay_title()) ? get_compnay_title() : 'QLCV'; ?></title>
  <?php include('include-css.php'); ?>
</head>

<body>
  <div id="app">
    <section class="section section-login">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?= base_url('assets/icons/' . (!empty(get_full_logo()) ? get_full_logo() : 'logo.png')); ?>" alt="logo" width="150">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>

              <div class="card-body">

                <?= form_open('auth/login', 'id="loginpage"'); ?>
                <div class="form-group">
                  <label for="email">Email</label>
                  <?= form_input(['name' => 'identity', 'placeholder' => 'Email', 'class' => 'form-control']) ?>
                  <div class="invalid-feedback">
                    Please fill in your email
                  </div>
                </div>

                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                      <a href="auth/forgot" class="text-small">
                        Forgot Password?
                      </a>
                    </div>
                  </div>

                  <?= form_password(['name' => 'password', 'placeholder' => 'Password', 'class' => 'form-control']) ?>
                  <div class="invalid-feedback">
                    please fill in your password
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember" value="1">
                    <label class="form-check-label">
                      Keep me logged in
                    </label>
                  </div>
                </div>
                <div id="login-result" class="alert alert-info d-none">
                </div>
                <div class="form-group">
                  <button type="submit" id="loginbtn" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
             Đại Học Thủy Lợi
            </div>
            <footer class="text-center text-white">

<section class=" mb-4">
  <a
    class="btn btn-primary btn-floating "
    style="background-color: #3b5998;"
    href="https://www.facebook.com/itsme.9x/" title="Facebook" target="_blank"
    role="button"
    ><i class="fab fa-facebook-f"></i
  ></a>
  <a

    class="btn btn-primary btn-floating "
    style="background-color: #198754;"
    href="https://chat.zalo.me/?phone=0926510209" title="Zalo" target="_blank"

    role="button"
    ><i class="    fas fa-address-book  "></i
  ></a>
  <a
    class="btn btn-primary btn-floating "
    style="background-color: #dd4b39;"
    href="javascript:alert('My email : hoanghai121298.dhtl')"Execute JavaScript
    role="button"
    ><i class="fab fa-googl e"></i
  ></a>

</section>

</div>
</footer>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    /* These must be here, We can not move this inside an external script, since its values are being read from PHP variables */
    csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
  </script>

  <?php include('include-js.php'); ?>

</body>

</html>