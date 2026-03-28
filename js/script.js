window.addEventListener("scroll", function () {
    let menu = document.getElementById("menu");
    let nav = document.getElementById("nav");
    let ham = document.getElementById("hamburger-menu");
    let navText = document.getElementById("selected-lang");
    let button = document.getElementById("button");
    let width = window.innerWidth;
    let progress = window.scrollY;
    let links = document.querySelectorAll("#menu a");
    let image = document.getElementById("signature");
    let bar = document.getElementById("progress-container");
    let flap = document.getElementById("flap");
    let timeline = document.getElementById("timeline");
    let items = document.querySelectorAll(".timeline-item.left");
    var btn = $('#button');
    // this.alert(width);
    if (window.innerHeight < window.innerWidth) {
        if (progress > 700) {
            menu.style.position = "fixed";
            menu.style.top = "0px";
            menu.style.backgroundColor = "white";
            $("#button").css({ "opacity": "1" })
            bar.style.visibility = "visible";
            flap.checked = false;
            $(".down-arrow").css({ "opacity": "0" })
            button.style.cursor = 'pointer';
            nav.style.position = "fixed";
            nav.style.top = "20px";
            navText.style.color = "black";
        }
        else {
            menu.style.position = "absolute";
            menu.style.top = "41vw";
            menu.style.removeProperty("background-color");
            $("#button").css({ "opacity": "0" })
            bar.style.visibility = "hidden";
            flap.checked = true;
            button.style.cursor = 'default';
            nav.style.position = "absolute";
            nav.style.top = "42vw";
            navText.style.color = "white";
        }
        if (progress > 350) {
            $("#banner").css({ "opacity": "0" })
            $("#wrapper").css({ "opacity": "0" })
            image.src = "/images/signature-b.png";
            $("#signature").css({ "opacity": "1" })
            links.forEach((link) => link.style.color = "black");
            links.forEach((link) => link.style.borderColor = "black");
            navText.style.color = "black";
        }
        else {
            $("#banner").css({ "opacity": "1" })
            $("#wrapper").css({ "opacity": "1" })
            $("#signature").css({ "opacity": "1" })
            image.src = "/images/signature-w.png";
            $("#signature").css({ "opacity": "1" })
            navText.style.color = "white";
            // links.forEach((link)=>link.style.color = "black");
            // links.forEach((link)=>link.style.borderColor = "white");
        }

    }
    else if (window.innerHeight > window.innerWidth) {
        if (progress > 150) {
            menu.style.position = "fixed";
            menu.style.top = "0.5em";
            menu.style.backgroundColor = "white";
            $("#button").css({ "opacity": "1" })
            bar.style.visibility = "visible";
            $(".down-arrow").css({ "opacity": "0" })
            button.style.cursor = 'pointer';
            nav.style.position = "fixed";
            nav.style.top = "1em";
            navText.style.color = "black";
            ham.style.position = "fixed";

        }
        else {
            menu.style.position = "absolute";
            menu.style.width = "100vw";
            menu.style.top = "36.5vw";
            menu.style.removeProperty("background-color");
            $("#button").css({ "opacity": "0" })
            bar.style.visibility = "hidden";
            button.style.cursor = 'default';
            nav.style.position = "absolute";
            nav.style.top = "39vw";
            navText.style.color = "white";
        }
        if (window.innerHeight > window.innerWidth) {
            if (progress >= 1700) {
                flap.checked = false;
            }
            else {
                flap.checked = true;
            }
        }
        else {
            if (progress >= 3200) {
                flap.checked = false;
            }
            else {
                flap.checked = true;
            }
        }
        if (progress <= 150) {
            if (width >= 1780) {
                ham.style.position = "absolute";

            }
            else {
                ham.style.position = "absolute";

            }
        }
        if (progress > 150) {
            $("#banner").css({ "opacity": "0" })
            $("#wrapper").css({ "opacity": "0" })
            image.src = "/images/signature-b.png";
            $("#signature").css({ "opacity": "1" })
            links.forEach((link) => link.style.color = "black");
            links.forEach((link) => link.style.borderColor = "black");
            navText.style.color = "black";
        }
        else {
            $("#banner").css({ "opacity": "1" })
            $("#wrapper").css({ "opacity": "1" })
            $("#signature").css({ "opacity": "1" })
            image.src = "/images/signature-w.png";
            $("#signature").css({ "opacity": "1" })
            navText.style.color = "white";
        }
    }
    items.forEach(item => {
        if (window.innerWidth <= 500) {
            item.classList.remove("left");
            item.classList.add("right");
            timeline.style.width = "100vw";
            timeline.style.left = "-30vw";
        } else {
            item.classList.remove("right");
            item.classList.add("left");
            timeline.style.width = "60%";
            timeline.style.left = "auto";
        }
    });
});

window.addEventListener('load', function () {
    document.documentElement.classList.add("js");

    // dom is loaded
    jQuery(document).ready(function ($) {
        // fade out preloader
        $('#preloader').fadeOut('slow', function () { $(this).remove(); });

    });
});

setTimeout(function () {
    $(function () {
        count = 0;
        wordsArray = ["persistent.", "ambitious.", "diligent.", "creative.", "punctual."];
        setInterval(function () {
            count++;
            $("#title").fadeOut(500, function () {
                $(this).text(wordsArray[count % wordsArray.length]).fadeIn(500);
            });
            $(".wave").css({ "opacity": "0" })
            $("#hi").css({ "opacity": "0" })
        }, 1500);
    });
}, 2500);

setTimeout(() => {
    $("#but").css({ "opacity": "1" })
    setTimeout(function () {
        $(".down-arrow").css({ "opacity": "1" })
    }, 1500);
}, 12000);

window.onscroll = function () { barFunction() };

function barFunction() {
    let width = window.innerWidth;
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop - 300;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 115;
    document.getElementById("myBar").style.width = scrolled + "%";
}

$(window).load(function () {
    var currentURL = window.location.href;

    if (currentURL != "http://localhost/") {
        window.history.pushState({ urlPath: 'http://localhost/' }, "", 'http://localhost/');
    }
});

function preventDefault(e) {
    e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

var supportsPassive = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () { supportsPassive = true; }
    }));
} catch (e) { }

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';


function toggleMenu() {
    if (window.scrollY <= 300) {
        document.getElementById("container").scrollIntoView();
    }
    var menu = document.getElementById("menu");
    menu.classList.toggle("active");
    if (menu.classList.contains("active") == true) {
        disableScroll();
    }
    else {
        enableScroll();
    }
}

// call this to Disable
function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

// call this to Enable
function enableScroll() {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
    window.removeEventListener('touchmove', preventDefault, wheelOpt);
    window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}

// Handle the hamburger menu toggle on click
document.getElementById("hamburger-menu").addEventListener("click", toggleMenu);
document.getElementById("menu-about").addEventListener("click", toggleMenu);
document.getElementById("menu-resume").addEventListener("click", toggleMenu);
document.getElementById("menu-skills").addEventListener("click", toggleMenu);
document.getElementById("menu-projects").addEventListener("click", toggleMenu);
document.getElementById("menu-contact").addEventListener("click", toggleMenu);

const birthDate = new Date('2005-07-26');
const ageElement = document.getElementById('age-counter');
const yearElement = document.getElementById('year-counter');

function calculateAge(birthDate) {
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();
    const dayDiff = today.getDate() - birthDate.getDate();

    if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
        age--;
    }
    return age;
}

function Year() {
    const today = new Date();
    return age = today.getFullYear();
}

function updateAgeCounter() {
    if (ageElement) {
        ageElement.textContent = calculateAge(birthDate);
    }
}

function updateYearCounter() {
    if (yearElement) {
        yearElement.textContent = Year();
    }
}

document.addEventListener('DOMContentLoaded', updateAgeCounter);
document.addEventListener('DOMContentLoaded', updateYearCounter);

var scrollEventHandler = function () {
    window.scroll(0, window.scrollY)
}

window.addEventListener("scroll", scrollEventHandler, false);

function sendMail() {
    const form = document.getElementById("contact-form");
    const button = document.getElementById("send-btn");

    // Trigger animation
    button.classList.add("glow");
    form.classList.add("blur");

    // Collect form values
    const name = encodeURIComponent(form.elements["name"].value.trim());
    const email = encodeURIComponent(form.elements["email"].value.trim());
    const message = encodeURIComponent(form.elements["message"].value.trim());

    // Create subject line that keeps the name
    const subject = `Message from ${decodeURIComponent(name)}`;

    // Combine everything in body (name, email, and message)
    const body = `Name: ${decodeURIComponent(name)}%0D%0AEmail: ${decodeURIComponent(email)}%0D%0A%0D%0A${decodeURIComponent(message)}`;

    // Wait for animation then open default email app
    setTimeout(() => {
        const mailtoLink = `mailto:youremail@example.com?subject=${encodeURIComponent(subject)}&body=${body}`;
        window.location.href = mailtoLink;

        // Reset animation after launch
        setTimeout(() => {
            button.classList.remove("glow");
            form.classList.remove("blur");
        }, 500);
    }, 600);

    return false; // Prevent default form submission
}
document.getElementById("send-btn").addEventListener("click", function () {
    const plane = document.getElementById("planeShape");
    const path = document.getElementById("planePath");

    plane.style.visibility = "visible";

    // Clear any previous animations
    plane.style.offsetPath = "";
    plane.style.animation = "none";
    void plane.offsetWidth; // Force reflow

    // Apply forward flight
    plane.style.offsetPath = `path('${path.getAttribute("d")}')`;
    plane.style.offsetRotate = "auto";
    plane.style.animation = "flyForward 5s linear forwards";

    // When forward ends, fly back
    plane.addEventListener("animationend", function flyBackOnce() {
        plane.style.animation = "flyBack 5s linear forwards";
        plane.removeEventListener("animationend", flyBackOnce);
    });
});

