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
      // document.getElementById('birthdate').innerHTML = this.responseText;
      console.log(JSON.parse(this.responseText));

      let obj = JSON.parse(this.responseText);
      let div = document.createElement("div");
      // for(let i = 0; i <5;i++){
          let actorName = document.createTextNode(obj[0]);
          div.appendChild(actorName);
          document.querySelector(
            ".popupApi .title"
          ).innerHTML = `Born in ${day}/${month}`;
          document.querySelector(".popupApi .events").appendChild(div);
      // }
      
    }
  };
  
});

let button = document.getElementById('fetchactor');



button.addEventListener('click', function(){

    var xhttp = new XMLHttpRequest();
    let birthdate=document.getElementById('birthdate').value;
    console.log(birthdate);
    var d = new Date( birthdate );
    let month = d.getMonth() + 1 ;
    let day = d.getDate();
    console.log(month);
    console.log(day);
    
    xhttp.open('POST', 'API_Ops.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('month=' + month + '&day=' + day);

    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            // console.log(typeof(this.responseText));

            console.log(this.responseText);
            console.log(JSON.parse(this.responseText));
            let obj = JSON.parse(this.responseText);

            let div = document.createElement("div");
            let actorName = document.createTextNode(obj[0]);
            div.appendChild(actorName);
            document.querySelector(
              ".popupApi .title"
            ).innerHTML = `Born in ${day}/${month}`;
            document.querySelector(".popupApi .events").appendChild(div);
        }
    }

});