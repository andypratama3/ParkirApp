/**
* PHP Email Form Validation - v3.7
* URL: https://bootstrapmade.com/php-email-form/
* Author: BootstrapMade.com
*/
(function () {
  "use strict";

  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      let action = thisForm.getAttribute('action');
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');

      if( ! action ) {
        displayError(thisForm, 'The form action property is not set!');
        return;
      }
      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData( thisForm );

      if ( recaptcha ) {
        if(typeof grecaptcha !== "undefined" ) {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                formData.set('recaptcha-response', token);
                php_email_form_submit(thisForm, action, formData);
              })
            } catch(error) {
              displayError(thisForm, error);
            }
          });
        } else {
          displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
        }
      } else {
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });

  function php_email_form_submit(thisForm, action, formData) {
    fetch(action, {
        method: 'POST',
        body: formData,
        headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
        if (response.ok) {
            return response.json(); // Parse response as JSON
        } else if (response.status === 401) {
            return response.json().then(data => {
                window.location.href = data.redirect; // Redirect to the URL specified in the response
            });
        } else {
            throw new Error('Form submission failed');
        }
    })
    .then(data => {
        thisForm.querySelector('.loading').classList.remove('d-block');
        if (data.hasOwnProperty('message')) {
            // Display success message if present
            thisForm.querySelector('.sent-message').textContent = data.message;
            thisForm.querySelector('.sent-message').classList.add('d-block');
            thisForm.reset();
        } else {
            throw new Error('Form submission failed and no error message returned');
        }
    })
    .catch(error => {
        if (error.message) {
            displayError(thisForm, error.message); // Display the error message
        } else {
            displayError(thisForm, 'Form submission failed and no error message returned');
        }
    });
}

  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.error-message').innerHTML = error;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }

})();
