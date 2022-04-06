window.onscroll = function() { scrollFunction() };

// function onscroll
// for nav - bar fixing and changes style of navbar.
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("rownav-bar").style.backgroundColor = "rgb(248,247,247)";
        document.getElementById("rownav-bar").style.boxShadow = "0px 2px 7px 0px rgba(0,0,0,0.49)";
        document.getElementById("login-buttons").style.color = "black";
        document.getElementById("login-buttons").style.borderColor = "black"
        document.getElementById("language-color-change").style.color = "black";
        document.getElementById("toggles-bgcolor").style.color = "black";

        //         // // document.getElementsByClassName("logo")[0].style.color = "black";
        //         // // document.getElementsByClassName("logo")[1].style.color = "black";
        //         // // document.getElementsByClassName("logo")[2].style.color = "black";
        //         // // document.getElementsByClassName("logo")[3].style.color = "black";

        //         // // document.getElementsByClassName("logo")[0].style.color = "black";
        //         // changeColorClasses = document.getElementsByClassName("logo");

        //         // for (let i = 0; i < changeColorClasses.length; i++) {
        //         //     changeColorClasses[i].style.color = "black";

        //         // }

        let navbar = document.getElementById("nav-items");
        navbar.classList.remove('white-text');
        navbar.classList.add('black-text');
    } else {
        document.getElementById("rownav-bar").style.backgroundColor = "";
        document.getElementById("rownav-bar").style.boxShadow = "";
        let navbar = document.getElementById("nav-items");
        navbar.classList.remove('black-text');
        navbar.classList.add('white-text');
        document.getElementById("login-buttons").style.color = "";
        document.getElementById("login-buttons").style.borderColor = "";
        document.getElementById("language-color-change").style.color = "";
        document.getElementById("toggles-bgcolor").style.color = "";
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
                let panelLength = document.getElementsByClassName("panel").length;
                for (let index = 0; index < panelLength; index++) {

                    document.getElementsByClassName("panel")[index].style.display = "none";
                }
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
    /**
     * function neglijibletab for validation popup.
     */
function neglijibleTab() {
    document.getElementById("popid").style.display = "none";
}
/**
 * datevalidation for cu
 */
function dateValidation() {
    document.getElementById('date-in').setAttribute('min', new Date().toISOString().split('T')[0])
}
/**
 * swap icon for changing station
 */
function swap() {
    let inp = document.getElementById("from-in").value;
    let out = document.getElementById("To-in").value;
    document.getElementById("from-in").value = out;
    document.getElementById("To-in").value = inp;
}
let fromin = document.getElementById("from-in");
let Toin = document.getElementById("To-in");

let exchangeButton = document.getElementById("exchange");
exchangeButton.addEventListener("click", swap);

/**
 * 
 *bookingrequired
 */
function bookingRequired() {
    var select = document.getElementById("from-in").value;
    var date = document.getElementById("date-in").value;
    var general = document.getElementById("General-in").value;
    var reserved = document.getElementById("classes-in").value;
    var to = document.getElementById("To-in").value;
    document.getElementById("popid").style.display = "block";

    if (select == "") {
        document.getElementById("pop-heading").innerHTML = "select your starting station";
        return false;
    }
    if (date == "") {
        document.getElementById("pop-heading").innerHTML = "select your valid date";
        return false;
    }
    if (general == "") {
        document.getElementById("pop-heading").innerHTML = "select your General-category";
        return false;
    }
    if (reserved == "") {
        document.getElementById("pop-heading").innerHTML = "select your classes";
        return false;
    }
    if (to == "") {
        document.getElementById("pop-heading").innerHTML = "select your end journey"
        return false;
    }
    if (to == select) {
        document.getElementById("pop-heading").innerHTML = "starting and end station are same"
        return false;
    } else {
        var itemExist = localStorage.getItem('user');
        saveObject = [];
        if (itemExist != null) {
            saveObject = JSON.parse(itemExist);
        }
        myObj = {
            "from": select,
            "To": to,
            "Date": date,
            "General": general,
            "Allclasses": reserved,
        };
        saveObject.push(myObj);
        localStorage.setItem('user', JSON.stringify(saveObject));
        location.href = "./data-file.html";
    }
}
/*bookingDAta-page*/
function bookingData() {
    location.href = "./data-file.html";
}