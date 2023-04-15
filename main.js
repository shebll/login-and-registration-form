let btnOpen = document.querySelector(".btn-login");
let btn = document.querySelector(".btn-login");
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
let date = document.getElementById("birthdate");
let phone = document.getElementById("phone");
let address = document.getElementById("address");
let password = document.getElementById("password");
let confirmPassword = document.getElementById("confirmPassword");

/////////////// get elements inputs /////////////////

/////////////// client validation by js /////////////////
function fullNameValidation() {
  let letters = /^([^0-9]*)$/g; /// avoid number
  var regex = /a-zA-Z0-9!@#\$%\^\&*\)\(+=._-/g;
  let le = /[^a-zA-Z\d\s]/gm; /// avoid special char
  let numOfNames = fullName.value.split(" ").length;
  console.log(numOfNames);
  if (
    fullName.value.match(letters) != null &&
    fullName.value.match(le) == null &&
    fullName.value != "" &&
    numOfNames >= 2
  ) {
    if (fullName.previousElementSibling != null) {
      fullName.previousElementSibling.remove();
    }
    fullName.nextElementSibling.style.transform = "scale(0)";
  } else {
    fullName.nextElementSibling.innerHTML = "full name only chars (2 names)";
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
    // userName.nextElementSibling.style.transform = "scale(0)";
  } else {
    // userName.nextElementSibling.innerHTML = "user name should be unique";
    // userName.nextElementSibling.style.transform = "scale(1)";
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
  if (address.value !== "") {
    if (address.previousElementSibling !== "") {
      address.previousElementSibling.remove();
    }
    address.nextElementSibling.style.transform = "scale(0)";
  } else {
    address.nextElementSibling.innerHTML = "enter address";
    address.nextElementSibling.style.transform = "scale(1)";
    address.value = "";
  }
}
function passwordValidation() {
  let letters =
    /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[A-Z])(?=.*[-\#\$\.\%\&\*])(?=.*[a-zA-Z]).{1,11}$/;
  if (password.value.match(letters) != null) {
    if (password.previousElementSibling != null) {
      password.previousElementSibling.remove();
    }
    password.nextElementSibling.style.transform = "scale(0)";
  } else {
    password.nextElementSibling.innerHTML =
      "at least 1(uppercase + special char)";
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

// let acc= document.getElementById('fetchactor');
// acc.addEventListener("click", () => {

//   });

// document.getElementById('fetchactor').addEventListener('click', function() {

//   // Make an AJAX call to the PHP script
//   var xhttp = new XMLHttpRequest();
//   let b=document.getElementById('birthdate').value;

//   xhttp.open('POST', 'API_Ops.php', true);
//   xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//   xhttp.send('birthdate=' + b);

//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       // document.getElementById('birthdate').innerHTML = this.responseText;
//       console.log(JSON.parse(this.responseText));

//       let obj = JSON.parse(this.responseText);
//       let div = document.createElement("div");
//       // for(let i = 0; i <5;i++){
//           let actorName = document.createTextNode(obj[0]);
//           div.appendChild(actorName);
//           document.querySelector(
//             ".popupApi .title"
//           ).innerHTML = `Born in ${day}/${month}`;
//           document.querySelector(".popupApi .events").appendChild(div);
//       // }

//     }
//   };

// });

let button = document.querySelector(
  ".form-register .input-box span.IMDPAPIBtn"
);

let popupApi = document.querySelector(".popupApi");

button.addEventListener("click", function () {
  var xhttp = new XMLHttpRequest();
  let birthdate = document.getElementById("birthdate").value;
  if (birthdate === "") {
    window.alert("Enter your birthdate");
  } else {
    console.log(birthdate);
    var d = new Date(birthdate);
    let month = d.getMonth() + 1;
    let day = d.getDate();
    console.log(month);
    console.log(day);
    popupApi.style.right = "100px";
    xhttp.open("POST", "API_Ops.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("month=" + month + "&day=" + day);

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        console.log(JSON.parse(this.responseText));
        let obj = JSON.parse(this.responseText);
        for (let i = 0; i < 5; i++) {
          let div = document.createElement("div");
          let actorName = document.createTextNode(obj[i]);
          div.appendChild(actorName);
          document.querySelector(
            ".popupApi .title"
          ).innerHTML = `Born in ${day}/${month}`;
          document.querySelector(".popupApi .events").appendChild(div);
        }
      }
    };
  }
});
//////////////// Ajax ///////////////
function AJAXSerNameValidation() {
  let xhttp = new XMLHttpRequest();
  let uName = userName.value;
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // console.log(this.responseText);
      // console.log(JSON.parse(this.responseText));
      let obj = JSON.parse(this.responseText);
      if (obj == "t") {
        document.querySelector(".true").classList.remove("hide");
        document.querySelector(".false").classList.add("hide");
      } else {
        document.querySelector(".true").classList.add("hide");
        document.querySelector(".false").classList.remove("hide");
        // window.alert("false");
      }
    }
  };
  xhttp.open("POST", "DB_Ops.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("userName=" + uName);
}
userName.addEventListener("keyup", () => {
  AJAXSerNameValidation();
});
//////////////// Ajax ///////////////

////////////////////image upload//////////////////
// function showImage(src, target) {
//   var fr = new FileReader();

//   fr.onload = function () {
//     target.src = fr.result;
//   };
//   fr.readAsDataURL(src.files[0]);
// }
// function putImage() {
//   var src = document.getElementById("select_image");
//   var target = document.getElementById("target");
//   showImage(src, target);
// }
function putImage() {
  // Get the file input element
  var fileInput = document.getElementById("select_image");
  console.log(fileInput);

  // Create a new FormData object
  var formData = new FormData();
  console.log(formData);

  // Add the file to the FormData object
  formData.append("file", fileInput.files[0]);
  console.log(formData);

  // Send the file to the server using AJAX
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "Upload.php", true);
  xhr.onload = function () {
    if (xhr.status === 200) {
      // File uploaded successfully
      console.log(xhr.responseText);
    } else {
      // Error uploading file
      console.error(xhr.responseText);
    }
  };
  xhr.send("image=" + formData);
  // xhr.send(formData);
}
////////////////////image upload//////////////////

//
// registerForm.addEventListener("submit", (e) => {
//   //e.preventDefault();
// });
// loginForm.addEventListener("submit", (e) => {
//   // e.preventDefault();
// });
