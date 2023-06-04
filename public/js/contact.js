// Get all question elements
const questions = document.querySelectorAll('.question');

// Add click event listener to each question element
questions.forEach(question => {
  question.addEventListener('click', () => {
    // Toggle the visibility of the answer
    const answer = question.nextElementSibling;
    answer.style.display = answer.style.display === 'none' ? 'block' : 'none';

    // Toggle the active class on the question element
    question.classList.toggle('active');
  });
});