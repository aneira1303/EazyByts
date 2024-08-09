const usersList = document.querySelector(".users .users-list");
setInterval(()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "users.php", true);
  xhr.onload = ()=> {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      //console.log(xhr.status);
      if(xhr.status === 200) {
        //console.log(xhr.status);
        // The content of signup.php displayed without reloading
        let data = xhr.response;
        //console.log(data);
        usersList.innerHTML = data;

      }
    }
  }
  xhr.send();
}, 500); //how often this function should be called? Twice every second.
