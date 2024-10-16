const form = document.querySelector('#questionForm')
const questionInput = document.querySelector('#questionInput');
const responseInput = document.querySelector('#responseOutput');

document.addEventListener('DOMContentLoaded', function () {
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(form);
    const csrfToken = document.querySelector('input[name="_token"]').value;

    fetch(form.action, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': csrfToken,
      },
      body: formData,
    })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network Error : ' + response.statusText);
        }
        return response.json();
      })
      .then(data => {
        responseInput.value = data.text;
        questionInput.classList.add('textareaActif');
        questionInput.disabled = true;
        responseInput.classList.add('textareaActif');
      })
      .catch(error => {
        console.error('Error :', error);
      });
  });
});