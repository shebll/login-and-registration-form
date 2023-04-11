let btn = document.querySelector(".btn-login");
let close = document.querySelector(".close");
let btnLoginLink = document.querySelector(".login-link");
let btnRegisterLink = document.querySelector(".register-link");
let loginForm = document.querySelector(".form-login");
let registerForm = document.querySelector(".form-register");
let wrapper = document.querySelector(".wrapper");
// let actor = document.querySelect("#fetchactor");
// let acc= document.getElementById('fetchactor');


btn.addEventListener("click", () => {
  wrapper.style.transform = "translate(-50%,-70%) scale(1)";
});


close.addEventListener("click", () => {
  wrapper.style.transform = "translate(-50%,-70%) scale(0)";
  console.log("ss");
});
btnLoginLink.addEventListener("click", () => {
  // loginForm.style.display = "block";
  loginForm.style.left = "0px";
  wrapper.style.height = "400px";
  registerForm.style.right = "-100%";
});
btnRegisterLink.addEventListener("click", () => {
  loginForm.style.left = "-100%";
  wrapper.style.height = "740px";
  registerForm.style.right = "0%";
});

// let acc= document.getElementById('fetchactor');
// acc.addEventListener("click", () => {
    
//   });

document.getElementById('fetchactor').addEventListener('click', function() {
 
  
  // Make an AJAX call to the PHP script
  var xhttp = new XMLHttpRequest();
  let b=document.getElementById('birthdate').value;

  xhttp.open('POST', 'API_Ops.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('birthdate=' + b);

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Display the result
      document.getElementById('birthdate').innerHTML = this.responseText;
      
    }
  };
  
});
