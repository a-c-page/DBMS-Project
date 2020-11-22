function regTab() {
  var element = document.getElementById("login-c");
  element.classList.add("hidden");
  var element = document.getElementById("register-c");
  element.classList.remove("hidden");
  var element = document.getElementById("left-tab");
  element.classList.remove("active");
  var element = document.getElementById("right-tab");
  element.classList.add("active");
}

function loginTab() {
  var element = document.getElementById("register-c");
  element.classList.add("hidden");
  var element = document.getElementById("login-c");
  element.classList.remove("hidden");
  var element = document.getElementById("right-tab");
  element.classList.remove("active");
  var element = document.getElementById("left-tab");
  element.classList.add("active");
}

function readTab() {
  var element = document.getElementById("write");
  element.classList.add("hidden");
  var element = document.getElementById("read");
  element.classList.remove("hidden");
  var element = document.getElementById("right-tab");
  element.classList.remove("active");
  var element = document.getElementById("left-tab");
  element.classList.add("active");
}

function writeTab() {
  var element = document.getElementById("read");
  element.classList.add("hidden");
  var element = document.getElementById("write");
  element.classList.remove("hidden");
  var element = document.getElementById("right-tab");
  element.classList.add("active");
  var element = document.getElementById("left-tab");
  element.classList.remove("active");
}

function noteTab() {
  var element = document.getElementById("write");
  element.classList.add("hidden");
  var element = document.getElementById("read");
  element.classList.remove("hidden");
  var element = document.getElementById("review");
  element.classList.add("hidden");
  var element = document.getElementById("left-tab");
  element.classList.add("active");
  var element = document.getElementById("right-tab");
  element.classList.remove("active");
  var element = document.getElementById("middle-tab");
  element.classList.remove("active");
}

function uploadTab() {
  var element = document.getElementById("read");
  element.classList.add("hidden");
  var element = document.getElementById("write");
  element.classList.remove("hidden");
  var element = document.getElementById("review");
  element.classList.add("hidden");
  var element = document.getElementById("left-tab");
  element.classList.remove("active");
  var element = document.getElementById("right-tab");
  element.classList.remove("active");
  var element = document.getElementById("middle-tab");
  element.classList.add("active");
}

function reviewTab() {
  var element = document.getElementById("read");
  element.classList.add("hidden");
  var element = document.getElementById("write");
  element.classList.add("hidden");
  var element = document.getElementById("review");
  element.classList.remove("hidden");
  var element = document.getElementById("left-tab");
  element.classList.remove("active");
  var element = document.getElementById("right-tab");
  element.classList.add("active");
  var element = document.getElementById("middle-tab");
  element.classList.remove("active");
}

function determineRole(role) {
  var element = document.getElementById("select-user");
  if (role == 'student') {
    element.classList.add("hidden");
  }
  else {
    element.classList.remove("hidden");
  }
}
