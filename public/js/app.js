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