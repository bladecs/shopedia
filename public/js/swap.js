var swappReg = document.getElementById("switch-register");
var swappLog = document.getElementById("switch-login");
var mainReg = document.getElementById("register");
var mainLog = document.getElementById("login");

swappReg.addEventListener("click", function(event) {
    event.preventDefault();
    mainReg.classList.add("active");
    mainLog.classList.add("hide");
});

swappLog.addEventListener("click", function(event) {
    event.preventDefault();
    mainReg.classList.remove("active");
    mainLog.classList.remove("hide");
});
