var currentTab = 0; // Current tab is set to be the first tab (0)
 window.onload=showTab(currentTab);// Display the current tab

// var check = document.getElementsByTagName("p_options");


function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  var x1 = document.getElementById("tab1");
   var x2 = document.getElementById("tab2");
    var x3 = document.getElementById("tab3");
     var x4 = document.getElementById("tab4");
  // var maintab = document.getElementById("tab1");

  x[n].style.display = "block";
   var c = $("select[name='p_options'] option:selected").text();//you can also add (.val) instead of (.text) if you want values

    if (c=='I need Employer'){
      x1.style.display = "block";
      x2.style.display = "none";
      x3.style.display = "none";
      x4.style.display = "none";
    }
    else if(c=='I need Employee')
    {
       x1.style.display = "none";
      x2.style.display = "block";
      x3.style.display = "none";
      x4.style.display = "none";
    }
     else if(c=='Household Issues')
    {
       x1.style.display = "none";
      x2.style.display = "none";
      x3.style.display = "block";
      x4.style.display = "none";
    }
     else if(c=='Others')
    {
       x1.style.display = "none";
      x2.style.display = "none";
      x3.style.display = "none";
      x4.style.display = "block";
    }
  

  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("subBtn").style.display = "inline";
    document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").style.display = "inline";
     document.getElementById("subBtn").style.display = "none";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function identify(){
   var c = $("select[name='p_options'] option:selected").text();//you can also add (.val) instead of (.text) if you want values
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  var y = document.getElementById("tab1");
  // Exit the function if any field in the current tab is invalid:
  if ((n == 1) && !validateForm()) return false; // ((n == 1||n==100) && !validateForm()) this can be added to validate submit button or second form (doesn't work beacuse conditions have not been applied for second div in validateform() function)

  // Hide the current tab:
  if(currentTab==0||n==-1){
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  }
  else if(n==100){
    document.getElementById("regForm").submit();
    return false;
  }
  // Increase or decrease the current tab by 1:
  
  // if you have reached the end of the form... :
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
