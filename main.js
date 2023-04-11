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
registerForm.onClick = function (e) {
  e.preventDefault();
  console.log("success");
};
