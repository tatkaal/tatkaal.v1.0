<div class="small">
  <div class="problem">
    <p style=" display:block; margin-top: 300px;font-size: 50px;color:#f2f2f2;">PROBLEM</p>
    <div class="overlay1">
      
      <form id="regForm" method="POST" action="">

        <h1>Look here !:</h1>        <!-- One "tab" for each step in the form: -->
        <div class="tab" style="display: block;">
           <label for="fullname">Full Name:</label>
          <p><input placeholder="Your Name..." oninput="this.className = ''"></p>
           <label for="options">Choose your problem area:</label><br>
            <select id="p_options" name="p_options">
              <?php
              $cat_name=$probcatDBTable->findAll();
              foreach ($cat_name as $key) {
                 echo '<option value='.$key['cat_id'].'>'.$key['cat_name'].'</option>';
              }
            ?>
            </select>

         <!--  <p><input placeholder="Last name..." oninput="this.className = ''"></p> -->

          <!-- <input type="text" name="search" placeholder="Search..">
                <button class="btn1" type="submit"><i class="fa fa-search"></i></button> -->
        </div>

        <div class="tab" style="display: none;">

          <div id="tab1" style="display: none;">
            I need Employer:
            <br>
            <label>Job Categories</label>
            <p><select>
              <option value="" disabled selected>Filter By Job category</option>
            </select></p>
            <label>Industries</label>
            <p><select>
              <option value="" disabled selected>Filter By Industry</option>
            </select></p>
            <!-- <label>Job level</label>
            <p><select>
              <option value="" disabled selected>Filter By Level</option>
            </select></p>
            <label>Education</label>
            <p><select>
              <option value="" disabled selected>Filter By Education</option>
            </select></p>
            <label>Employment Type</label>
            <p><select>
              <option value="" disabled selected>Filter By Employment Type</option>
            </select></p>
            <label>Job Location</label>
            <p><select>
              <option value="" disabled selected>Filter By Location</option>
            </select></p> -->
          </div>

          <div id="tab2" style="display: none;">I need Employee
            <label>Job Categories</label>
            <p><input placeholder="Filter By Job Category" oninput="this.className = ''"></p>
            <!-- <p><input placeholder="Phone..." oninput="this.className = ''"></p> -->
          </div>

          <div id="tab3" style="display: none;">Household Issues
            <p><input placeholder="Filter By Job Category" oninput="this.className = ''"></p>
            <!-- <p><input placeholder="Phone..." oninput="this.className = ''"></p> -->
          </div>

          <div id="tab4" style="display: none;">Others
            <p><input placeholder="Filter By Job Category" oninput="this.className = ''"></p>
            <!-- <p><input placeholder="Phone..." oninput="this.className = ''"></p> -->
          </div>
        </div>

        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" style="display: none;" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
             <button type="button" style="display: none;" id="subBtn" onclick="nextPrev(100)">Submit</button>
          </div>
        </div>
         
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step active"></span>
          <span class="step"></span>
        </div>
      </form>
    </div><!-- class overlay1 -->
  </div><!-- class problem-->

  <div class="solution">
    <p style="display:block; margin-top: 300px;font-size: 50px;">SOLUTION</p>
      <div class="overlay2">
        
        <div id="inneroverlay2" style="display: block;" class="container-login100">
      <div class="wrap-login100">
        <div class="switch">
          <button onclick="call_signup()" id="tan" style="background-color: #96b696;" class="tab-btn">
            Sign In
          </button>

          <button onclick="call_login()" id="can" style="" class="tab-btn">
            Sign Up
          </button>

        </div>
        <div id="signup" class="hold input-box">
          <?php
          require '../views/login-template.php';
          ?>
            

        </div>
        <!-- Signup starts here -->
        <div id="login" style="display:none;" class="input-box">

          <?php
            require '../views/signup-template.php';
          ?>

        </div>
      </div>
    </div>

      
      </div>
  </div>
</div><!-- class small-->


<div class="make_cloud">
  <div class="c1"></div>
  <div class="c2"></div>
  <div class="c3"></div>
  <div class="c4"></div>
</div>

<div class="ihave">
  <p>I've</p>
 </div>

<div class="main-container">
  <!-- <div class="black-layer"></div> -->
  <div class="slideshow-container">

    <div class="mySlides fades">
      <div class="numbertext">1 / 4</div>
      <img class="img1" src="../images/1.jpg" style="width:100%">
      <div class="text">Caption One</div>
    </div>

    <div class="mySlides fades" style="display:none">
      <div class="numbertext">2 / 4</div>
      <img class="img1" src="../images/2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fades" style="display:none">
      <div class="numbertext">3 / 4</div>
      <img class="img1" src="../images/3.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fades" style="display:none">
      <div class="numbertext">4 / 4</div>
      <img class="img1" src="../images/4.jpg" style="width:100%">
      <div class="text">Caption Four</div>
    </div>

    <div>
      <ul id="nav">
        <li id="prev" onclick="plusSlides(-1)"><a href="#">Previous</a></li>
        <li id="next" onclick="plusSlides(1)"><a href="#">Next</a></li>
      </ul>
    </div>

    <div class=dots style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
    </div>

  </div>
</div> <!--main-container-->