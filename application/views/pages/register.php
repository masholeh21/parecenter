<div class="container">
      <div class="row" style="margin: 0 auto;">
        <img src="<?php echo base_url(); ?>asset/gambar/logo.png" style="height: 150px;  text-align: center; margin: 0 auto;"><br>
      </div>    
      <div class="row">
        <div class="col-lg-6" style="margin: 0 auto; background-color: #f2f3f3; border-radius: 5px; ">
                  
                       <h3 align="center"><br> Register</h3>
                       <hr>
                       
                        <form method="POST">
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                          </div>
                          <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username" required autofocus>
                          </div>

                          <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                          </div>

                          <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required data-eye>
                          </div>
                          <div class="form-group">
                            <label for="password1">ulangi password</label>
                            <input id="password1" type="password" class="form-control" name="password1" required data-eye>
                          </div>
                          <div class="form-group">
                            <label for="notelp">No. Telp</label>
                            <input id="notelp" type="text" class="form-control" name="notelp" required autofocus>
                          </div>

                          <div class="form-group">
                            <label>
                              <input type="checkbox" name="aggree" value="1"> I agree to the Terms and Conditions
                            </label>
                          </div>

                          <div class="form-group no-margin">
                            <button type="submit" class="btn btn-primary btn-block">
                              Register
                            </button>
                          </div>
                          <div class="margin-top20 text-center">
                            Already have an account? <a href="login">Login</a>
                            <br>
                            daftarkan lembagamu <a href="#" onclick="alert('Hubungi admin di 085xxxxxxxx');">Disini</a>
                          </div>
                        </form>
                    </div>
                  </div>
          </div>
<br><br>