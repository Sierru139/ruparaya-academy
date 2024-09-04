AOS.init();

document.getElementById("cariKelasBtn").addEventListener("click", function(e) {
    e.preventDefault();

    const kelasDropdown = document.querySelector(".dropbtn"); 
    kelasDropdown.scrollIntoView({ behavior: "smooth" }); 
    
    setTimeout(() => {
        document.getElementById("kelasDropdown").style.display = "block";
    }, 100); 

});



// Navbar Sticky
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

// QNA Dropdown
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

// Navigation Responsive
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

// Pop up Images in index.html

var imgSwiper = document.querySelectorAll('.img-popUp');
imgSwiper.forEach((swiper) => {
    swiper.addEventListener('click', function() {
        var imgPop = document.querySelector('.image-pop');
        var imgSrc = swiper.getAttribute('src');
        var popImg = imgPop.querySelector('.pop-image');

        popImg.setAttribute('src', imgSrc);

        if (imgPop.style.display === 'flex') {
            imgPop.style.opacity = 0;
            setTimeout(() => {
                imgPop.style.display = 'none';
            }, 400);
        } else {
            imgPop.style.display = 'flex';
            setTimeout(() => {
                imgPop.style.opacity = 1;
            }, 10);
        }

        var closePop = imgPop.querySelector('.close-pop');
        closePop.addEventListener('click', function() {
            imgPop.style.opacity = 0;
            setTimeout(() => {
                imgPop.style.display = 'none';
            }, 400);
        });
    });
});

// Video Popup on index.html