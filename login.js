const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input");
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=> {
  e.preventDefault();
}

continueBtn.onclick = ()=> {
  // AJAX
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "login-config.php", true);
  xhr.onload = ()=> {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      //console.log(xhr.status);
      if(xhr.status === 200) {
        //console.log(xhr.status);
        // The content of signup.php displayed without reloading
        let data = xhr.response;
        console.log(data);
        if(data == "cool"){

          location.href = "tab2.php";
        }else{
          errorText.textContent = data;
          errorText.style.display = "block";
        }

      }
    }
  }
  // data from the signup form sent to php through AJAX
  let formData = new FormData(form);
  xhr.send(formData);
}

function passToggle() {
  var x = document.getElementById("passID");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
