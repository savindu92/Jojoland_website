

document.getElementById("click-image").addEventListener("click", displayDate);

function displayDate() {
  var p = document.getElementById("demo");
  if(p.innerText == ""){
    p.innerText = "Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora Ora ";
  }
  else{
    p.innerText = "";
  }
    
}




