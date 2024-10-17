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
    const form = document.getElementById('theme-form');
    const selects = document.querySelectorAll('#theme-select1, #theme-select2');
    const themeInput = document.getElementById('theme');
    const url = form.getAttribute('data-url');

    if (!form || !themeInput || selects.length !== 2) {
        console.error("Erreur : éléments manquants");
        return;
    }

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(form);

        try {
            const response = await fetch(url, {
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

            selects.forEach(select => {
                const option = document.createElement('option');
                option.value = data.theme.id;
                option.textContent = data.theme.theme;
                select.appendChild(option);
            });

            form.reset();

        } catch (error) {
            console.error('Erreur', error);
        }
    });
});