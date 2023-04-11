let btnOpen = document.querySelector(".btn-login");
let close = document.querySelector(".close");
let btnLoginLink = document.querySelector(".login-link");
let btnRegisterLink = document.querySelector(".register-link");
let loginForm = document.querySelector(".form-login");
let registerForm = document.querySelector(".form-register");
let wrapper = document.querySelector(".wrapper");
let registerBtn = document.querySelector(".registerBtn");
// let loginBtn = document.querySelector(".loginBtn");
let allInput = document.querySelectorAll(".input-box input");

///////////////////////show and hide the form ///////////////////////
btnOpen.addEventListener("click", () => {
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
///////////////////////show and hide the form ///////////////////////

/////////////// get elements inputs /////////////////
let fullName = document.getElementById("fullName");
let userName = document.getElementById("userName");
let email = document.getElementById("email");
let date = document.getElementById("date");
let phone = document.getElementById("phone");
let address = document.getElementById("address");
let password = document.getElementById("password");
let confirmPassword = document.getElementById("confirmPassword");

/////////////// get elements inputs /////////////////

/////////////// client validation by js /////////////////
function fullNameValidation() {
  let letters =
    /([A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})([ ]{0,1})?([A-Za-z]{3,16})?/g;
  if (fullName.value.match(letters) != null) {
    if (fullName.previousElementSibling != null) {
      fullName.previousElementSibling.remove();
    }
    fullName.nextElementSibling.style.transform = "scale(0)";
  } else {
    fullName.nextElementSibling.innerHTML = "full name at least two names";
    fullName.nextElementSibling.style.transform = "scale(1)";
    fullName.value = "";
  }
}
function userNameValidation() {
  let letters = /([A-Za-z]{3,16})([0-9]{0,3})/g;
  if (userName.value.match(letters) != null) {
    if (userName.previousElementSibling != null) {
      userName.previousElementSibling.remove();
    }
    userName.nextElementSibling.style.transform = "scale(0)";
  } else {
    userName.nextElementSibling.innerHTML = "user name should be unique";
    userName.nextElementSibling.style.transform = "scale(1)";
    userName.value = "";
  }
}
function emailValidation() {
  let validRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.value.match(validRegex) != null) {
    if (email.previousElementSibling != null) {
      email.previousElementSibling.remove();
    }
    email.nextElementSibling.style.transform = "scale(0)";
  } else {
    email.nextElementSibling.innerHTML = "email should be correct";
    email.nextElementSibling.style.transform = "scale(1)";
    email.value = "";
  }
}
function phoneValidation() {
  let letters = /01(0|1|2|5)[0-9]{8}/g;
  if (phone.value.match(letters) != null) {
    if (phone.previousElementSibling != null) {
      phone.previousElementSibling.remove();
    }
    phone.nextElementSibling.style.transform = "scale(0)";
  } else {
    phone.nextElementSibling.innerHTML = "phone should be correct";
    phone.nextElementSibling.style.transform = "scale(1)";
    phone.value = "";
  }
}
function dateValidation() {
  let value = new Date(date.value);
  let now = new Date();
  console.log(date.value);
  console.log(now.getFullYear() - value.getFullYear());
  if (
    now - value > 0 &&
    now.getFullYear() - value.getFullYear() >= 18 &&
    now.getFullYear() - value.getFullYear() <= 80
  ) {
    if (date.previousElementSibling != null) {
      date.previousElementSibling.remove();
    }
    date.nextElementSibling.style.transform = "scale(0)";
  } else {
    date.nextElementSibling.innerHTML = "age 18-80 years";
    date.nextElementSibling.style.transform = "scale(1)";
    date.value = "";
  }
}
function addressValidation() {
  if (address.value != null) {
    if (password.previousElementSibling != null) {
      password.previousElementSibling.remove();
    }
    password.nextElementSibling.style.transform = "scale(0)";
  } else {
    password.nextElementSibling.innerHTML = "enter address";
    password.nextElementSibling.style.transform = "scale(1)";
    password.value = "";
  }
}
function passwordValidation() {
  let letters =
    /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[A-Z])(?=.*[-\#\$\.\%\&\*])(?=.*[a-zA-Z]).{8,16}$/;
  if (password.value.match(letters) != null) {
    if (password.previousElementSibling != null) {
      password.previousElementSibling.remove();
    }
    password.nextElementSibling.style.transform = "scale(0)";
  } else {
    password.nextElementSibling.innerHTML = "at least 8 char (uppercase)";
    password.nextElementSibling.style.transform = "scale(1)";
    password.value = "";
  }
}
function confirmPasswordValidation() {
  if (confirmPassword.value === password.value) {
    if (confirmPassword.previousElementSibling != null) {
      confirmPassword.previousElementSibling.remove();
    }
    confirmPassword.nextElementSibling.style.transform = "scale(0)";
  } else {
    confirmPassword.nextElementSibling.innerHTML = "write the password correct";
    confirmPassword.nextElementSibling.style.transform = "scale(1)";
    confirmPassword.value = "";
  }
}

/////////////// get elements inputs /////////////////

registerForm.addEventListener("submit", (e) => {
  e.preventDefault();
});
loginForm.addEventListener("submit", (e) => {
  e.preventDefault();
});
