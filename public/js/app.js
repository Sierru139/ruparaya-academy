AOS.init();

window.onscroll = function() {myFunction()};
        
var navbar = document.getElementById("nav");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.scrollY >= sticky) {
    navbar.classList.add("sticky")
    } else {
    navbar.classList.remove("sticky");
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.ask');
    questions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.querySelector('.answer');
            const arrow = this.querySelector('.arrow-rotate');
            if (arrow) {
                arrow.classList.toggle('arrow-rotated');
            }
            if (answer) {
                answer.classList.toggle('show');
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const respoNav = document.getElementById('resNav');
    const respoMenu = document.getElementById('resMenu');
    const respoNavClose = document.getElementById('resNavClose');

    respoNav.addEventListener('click', function() {
        if (respoMenu.classList.contains('hidden')) {
            respoMenu.classList.remove('hidden');
            respoMenu.classList.add('block');
        } else {
            respoMenu.classList.add('hidden');
            respoMenu.classList.remove('block');
        }
    });

    respoNavClose.addEventListener('click', function() {
        respoMenu.classList.add('nav-close');
        setTimeout(() => {
            respoMenu.classList.add('hidden');
            respoMenu.classList.remove('block', 'nav-close');
        }, 650);
    });
});