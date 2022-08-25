<?php
$page = 'signup';
include 'head.php';
?>
<style>
        body{
            background-color: #f0f2f5;
        }
        #form-control{
            height: 100%;
            max-width: 400px;
            margin: auto;
        }
        .vertical-center{
           margin-top: 200px;
        }
</style>
        <form >
            <div class="container" id="form-control" style="margin-top: 80px; margin-bottom: 80px">
                <div class="card">
                  <div class="card-header">
                    <h3 class="text-center">Create a New Account</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" name="text" placeholder="Enter your Name" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" placeholder="Enter your email" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="password" name="password" placeholder="Enter your Password" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="cpassword" name="cpassword" placeholder="Confirm your Password" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" name="submit" class="btn-primary form-control" value="Login">
                        </div>
                      </div>
                    </div>
                   
                </div>
              </div>
              <p class="text-center my-1">
              Already Have An Account <a href="login.php" style="color: #0069d9;">Login</a></p>
           </div>
      </form>
</body>
<?php
include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script
</html>
