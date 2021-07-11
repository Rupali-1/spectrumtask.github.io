
let btnSignup = document.getElementById("signup")
let btnLogin = document.getElementById("login")


let signUp = document.querySelector(".signup")
let signIn = document.querySelector(".signin")

btnSignup.onclick = function(){
    signUp.classList.add("active");
    signIn.classList.add("inActive");
}
btnLogin.onclick = function(){
    signUp.classList.remove("active");
    signIn.classList.remove("inActive");
}

