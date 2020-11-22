// Function to select the Elements

const selectElement = (element) => document.querySelector(element);

//Open the Menu on Click

selectElement('.open').addEventListener('click', () => {
    selectElement('.nav-list').classList.add('active');
    });


selectElement('.close').addEventListener('click', () => {
        selectElement('.nav-list').classList.remove('active');
        });
 

//LogIn Register Form Swap Function

var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}

function login(){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}