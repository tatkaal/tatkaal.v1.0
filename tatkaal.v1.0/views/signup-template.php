<form class="login100-form validate-form" method="post" action="">
            <span class="login100-form-title">
              <!-- Welcome to signup ! -->
            </span>

            <div class="field-wrap1 wrap-input100 validate-input">
              <input class="input100" type="text" required autocomplete="off" name="firstname" placeholder="First Name"/>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
            </div>

            <div class="field-wrap2 wrap-input100 validate-input">
              <input class="input100" type="text" required autocomplete="off" name="lastname" placeholder="Last Name"/>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="email" placeholder="Email">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Password is required">
              <input class="input100" type="password" name="password" placeholder="Password">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div style="display: flex; justify-content: center; margin-top: 20px;"><label style=""> Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="radio" class="radio" name="gender" value="male"/><label>Male</label>
              <input style="margin-left: 20px;" class="radio" type="radio" name="gender" value="female"/><label>Female</label>  
            </div><br>

            <div class="dob-div">
              <label>Birth Date: &nbsp;&nbsp;&nbsp;</label><input style="height:30px;" type="date" name="dob" value="1980-08-26" />
            </div><br>

            <div class="container-login100-form-btn">
              <input type="submit" value="register" name="register" class="login100-form-btn" />
            </div>

          </form>