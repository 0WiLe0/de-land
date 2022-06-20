var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block",
  document.body.style.overflow = "hidden";
}
span.onclick = function() {
  modal.style.display = "none",
  document.body.style.overflow = "visible";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none",
	document.body.style.overflow = "visible";
  }
}

let form = document.querySelector('.mes-bg'),
    forminputs = document.querySelectorAll('.inp'),
    inputname = document.querySelector('.name'),
    inputmail = document.querySelector('.email'),
    inputmsg = document.querySelector('.msg');
function validateEmail(email) {
	let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
	}
form.onsubmit = function(){
    let emailVal = inputmail.value,
    emptyinputs = Array.from(forminputs).filter(input => input.value === "");
    forminputs.forEach(function(input){
        if (input.value === "") {
            input.classList.add("error");
        }else{
            input.classList.remove("error");
        }
    })
    if (emptyinputs.length !== 0){
        return false;
    }
    if(!validateEmail(emailVal)){
        inputmail.classList.add("error");
        return false;
    }else{
        inputmail.classList.remove("error");
    }
}