// 1. je crée le boutton
var button = document.createElement("button");
button.innerHTML = "send";

// 2. je l'nvoie
var body = document.getElementsByTagName("form")[0];
body.appendChild(button);

// 3. je fais une alert pour verifié que ca fonction
button.addEventListener ("click", function() {
  alert("aller");
});
