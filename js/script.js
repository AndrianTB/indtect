// TOGGLE CLASS ACTIVE
const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

// CLOSE SIDEBAR ANYWHERE
const hamburger = document.querySelector('#hamburger-menu');
document.addEventListener('click', function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});

// BUTTON OPTION START SKRINING
document.getElementById('btn-start').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('dialog-overlay').style.display = 'flex';
});

document.getElementById('btn-yes').addEventListener('click', function () {
    window.location.href = 'drawing1.php';
});

document.getElementById('btn-no').addEventListener('click', function () {
    window.location.href = 'drawing2.php';
});

document.getElementById('btn-cancel').addEventListener('click', function () {
    document.getElementById('dialog-overlay').style.display = 'none';
});

// document.getElementById('dialog-close').addEventListener('click', function () {
//     document.getElementById('dialog-overlay').style.display = 'none';
// });
