window.onscroll = function() { scrollFunction() };
// function on scroll for nav-bar fixing and changes style of navbar.
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("rownav-bar").style.backgroundColor = "rgb(248,247,247)";
        document.getElementById("login-buttons").style.color = "black";
        document.getElementById("login-buttons").style.borderColor = "black"
        document.getElementById("language-color-change").style.color = "black";
        document.getElementById("toggles-bgcolor").style.backgroundColor = "black";

        // // document.getElementsByClassName("logo")[0].style.color = "black";
        // // document.getElementsByClassName("logo")[1].style.color = "black";
        // // document.getElementsByClassName("logo")[2].style.color = "black";
        // // document.getElementsByClassName("logo")[3].style.color = "black";

        // // document.getElementsByClassName("logo")[0].style.color = "black";
        // changeColorClasses = document.getElementsByClassName("logo");

        // for (let i = 0; i < changeColorClasses.length; i++) {
        //     changeColorClasses[i].style.color = "black";

        // }

        let navbar = document.getElementById("nav-items");
        navbar.classList.remove('white-text');
        navbar.classList.add('black-text');

    } else {
        document.getElementById("rownav-bar").style.backgroundColor = "";
        let navbar = document.getElementById("nav-items");
        navbar.classList.remove('black-text');
        navbar.classList.add('white-text');
        document.getElementById("login-buttons").style.color = "";
        document.getElementById("login-buttons").style.borderColor = "";
        document.getElementById("language-color-change").style.color = "";
        document.getElementById("toggles-bgcolor").style.backgroundColor = "";

    }
}
// function opentab for simple site subscription and General use of payement .
/*/
var i,tabcontent,tablinks
/*/

function opentab(evt, tab) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tab).style.display = "block";
    evt.currentTarget.className += " active";
}


window.onload = function() {
    var acc = document.getElementsByClassName("accordion");
    var i;
    // var acc=call by accordion class
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
}