const btnSection = document.querySelectorAll('li');
const sections = document.querySelectorAll('section');

// FRONT SECTION
btnSection.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        sections.forEach(section => {
            section.style.display = 'none';
        });
        sections[index].style.display = 'flex';
    });
});


// AJAX THEME
document.addEventListener('DOMContentLoaded', () => {
    const wordForm = document.getElementById('word-form');
    const wordInput = document.getElementById('word-input');
    const wordList = document.querySelector('.w-full.mt-16.p-6 ul');

    if (!wordForm || !wordInput || !wordList) {
        console.error("Erreur : éléments manquants pour la section 'Mot'");
        return;
    }

    wordForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(wordForm);

        try {
            const response = await fetch(wordForm.getAttribute('data-url'), {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': formData.get('_token')
                },
                body: formData
            });

            if (!response.ok) {
                const errorData = await response.json();
                console.error('Erreur :', errorData);
                throw new Error('Erreur lors de la requête');
            }

            const data = await response.json();

            const newListItem = document.createElement('li');
            newListItem.classList.add('p-4', 'bg-[#202830]', 'flex', 'items-center', 'gap-3');

            const wordParagraph = document.createElement('p');
            wordParagraph.textContent = data.word.word;

            const deleteLink = document.createElement('a');
            deleteLink.href = '';
            const deleteImg = document.createElement('img');
            deleteImg.classList.add('w-[30px]', 'h-[30px]');
            deleteImg.src = "{{ asset('medias/images/croix.png') }}";
            deleteImg.alt = 'Croix';
            deleteLink.appendChild(deleteImg);

            newListItem.appendChild(wordParagraph);
            newListItem.appendChild(deleteLink);

            wordList.appendChild(newListItem);

            // Réinitialiser le formulaire
            wordForm.reset();

        } catch (error) {
            console.error('Erreur', error);
        }
    });
});
