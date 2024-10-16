const btnSection = document.querySelectorAll('li');
const sections = document.querySelectorAll('section');

btnSection.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        sections.forEach(section => {
            section.style.display = 'none';
        });
        sections[index].style.display = 'flex';
    });
});
