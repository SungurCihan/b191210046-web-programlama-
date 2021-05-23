var btn = document.getElementById("uyari");
var temiz = document.getElementById("temizle");
var auth = document.getElementById("auth");

var ad = document.getElementById("name");
var email = document.getElementById("email");
var cinsiyet = document.getElementById("language");
var message = document.getElementById("message");
var checkbox = document.getElementById("accept")
var username = document.getElementById("username");
var password = document.getElementById("password")

btn.onclick = function(){
  if(ad.value.length < 2){
    window.alert("İsim en az 2 karakterden oluşmalı.");
    return false
  }else if(validateEmail(email.value) == false) {
    window.alert("Lütfen geçerli bir email giriniz");
    return false
  }
}

temiz.onclick = function(){
  ad.value = "";
  email.value = "";
  message.value = "";
  return false;
}

auth.onclick = function(){
  window.alert("sda");
}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}