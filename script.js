var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register()
{
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}

function login()
{
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}

function profileIcon(username)
{
    if (username == "")
    {
        window.location.href = "login.php";
    }
    else {
        window.location.href = "profile.php";
    }
}

function sidebar()
{
    if (document.getElementById("sidebar").classList.contains('active'))
    {
        document.getElementById("sidebar").classList.remove('active')
    }
    else
    {
        document.getElementById("sidebar").classList.add('active')
    }
}

function bookNow(Year, Make, Model, VIN, Price) {
    localStorage.setItem("Year", Year);
    localStorage.setItem("Make", Make);
    localStorage.setItem("Model", Model);
    localStorage.setItem("VIN", VIN);
    localStorage.setItem("Price", Price);

    window.location.href = "booking.php";
}

function updateTotal() {
    var s = document.getElementById("booking-from").value;
    var e = document.getElementById("booking-to").value;
    var t = document.getElementById("total-box");
    var start = new Date(s);
    var end = new Date(e);
    var diff = ((end.getTime() - start.getTime()) / (1000*3600*24)) + 1;
    var price = document.getElementById("price-box").value.replace('$','');
    var total = price*diff;

    if (s == "" || e == "") {
        t.value = "$0";
    }
    else {
        t.value = total;
    }

}
