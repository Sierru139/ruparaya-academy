AOS.init();

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

document.getElementById("cariKelasBtn").addEventListener("click", function(e) {
    e.preventDefault();
  
    const kelasDropdown = document.querySelector(".dropbtn"); 
    kelasDropdown.scrollIntoView({ behavior: "smooth" }); 
    
    setTimeout(() => {
      document.getElementById("kelasDropdown").style.display = "block";
    }, 100); 

  });
  

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