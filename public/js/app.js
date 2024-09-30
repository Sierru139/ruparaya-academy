AOS.init();

const videoModal = document.getElementById('videoModal');
const closeButton = document.getElementById('closeButton');
const openButton = document.getElementById('openButton');

function openModal() {
    videoModal.classList.remove('hidden');
    setTimeout(() => {
        videoModal.classList.remove('opacity-0', 'scale-95');
        videoModal.classList.add('opacity-100', 'scale-100');
    }, 10);
}

function closeModal() {
    videoModal.classList.remove('opacity-100', 'scale-100');
    videoModal.classList.add('opacity-0', 'scale-95');
    setTimeout(() => {
        videoModal.classList.add('hidden');
    }, 300);
}

openButton.addEventListener('click', openModal);
closeButton.addEventListener('click', closeModal);


document.getElementById('openButton').addEventListener('click', function() {

    const modal = document.getElementById('videoModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');

    const videoPlayer = document.getElementById('videoPlayer');
    videoPlayer.play();
});

document.getElementById('closeButton').addEventListener('click', function() {
    const modal = document.getElementById('videoModal');
    modal.classList.remove('flex');
    modal.classList.add('hidden');

    const videoPlayer = document.getElementById('videoPlayer');
    videoPlayer.pause();
    videoPlayer.currentTime = 0;
});

document.addEventListener('DOMContentLoaded', function () {
    var typed = new Typed('#auto-type', {
        strings: ["IT", "3D"],
        typeSpeed: 100,
        backSpeed: 150,
        backDelay: 2000, 
        startDelay: 500, 
        loop: true
    });
});

const loadingScreen = document.getElementById('loading-anim');

    const h3element = document.getElementById('element');
        setTimeout(() => {
        loadingScreen.classList.add('opacity-0');
        h3element.classList.add('moveUpAnim');
        setTimeout(() => {
            loadingScreen.classList.add('hidden');
        }, 0);
    }, 2000);

const buttonsPaket = document.querySelectorAll('.btn-paket');

buttonsPaket.forEach((button, index) => {
    button.addEventListener("click", function() {
        
        if (button.classList.contains('btn-bg-click')) {
            return;
        }

        buttonsPaket.forEach(btn => {
            btn.classList.remove('btn-bg-click');
        });

        button.classList.add('btn-bg-click');
    })
});

    function filterClasses(type) {
        var classItems = document.querySelectorAll('[id^="class-item"]');
        
        classItems.forEach(function(item) {
            if (item.id.includes(type)) {
                item.style.display = "flex";
            } else {
                item.style.display = "none";
            }
        });
    }

    function showAllClasses() {
        var classItems = document.querySelectorAll('[id^="class-item"]');
        
        classItems.forEach(function(item) {
            item.style.display = "flex"; 
        });
    }



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