document.addEventListener("DOMContentLoaded", function () {
    const questions = document.querySelectorAll(".questionqs-container");
    const prevButton = document.getElementById("prevqs-button");
    const nextButton = document.getElementById("nextqs-button");
    let currentQuestion = 0;

    function showQuestion(index) {
        questions.forEach((question, idx) => {
            question.classList.toggle("active", idx === index);
        });
    }

    prevButton.addEventListener("click", function () {
        if (currentQuestion > 0) {
            currentQuestion--;
            showQuestion(currentQuestion);
        }
    });

    nextButton.addEventListener("click", function () {
        if (currentQuestion < questions.length - 1) {
            currentQuestion++;
            showQuestion(currentQuestion);
        }
    });

    showQuestion(currentQuestion);
});
