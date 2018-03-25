<div class="container">
	<div class="row" style="margin: 0 auto;">
	  <img src="<?php echo base_url(); ?>asset/gambar/logo.png" style="height: 150px;  text-align: center; margin: 0 auto;"><br>
	</div>    
	<div class="row">
	  <div class="col-lg-6" style="margin: 0 auto; background-color: #f2f3f3; border-radius: 5px; ">
	           <h3 align="center"><br> Login</h3><hr>
	           <form method="POST">
	                <div class="form-group">
	                  <label for="email">E-Mail Address</label>

	                  <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
	                </div>

	                <div class="form-group">
	                  <label for="password">Password
	                    <a href="forgot" class="link">
	                      Forgot Password?
	                    </a>
	                  </label>
	                  <input id="password" type="password" class="form-control" name="password" required data-eye>
	                </div>

	                <div class="form-group">
	                  <label>
	                    <input type="checkbox" name="remember"> Remember Me
	                  </label>
	                </div>

	                <div class="form-group no-margin">
	                  <button type="submit" class="btn btn-primary btn-block">
	                    Login
	                  </button>
	                </div>
	                <div class="margin-top20 text-center">
	                  Don't have an account? <a href="register">Create One</a>
	                </div>
	              </form>
	            </div>
	          </div>
	  </div>

	</div>
</div><br>
