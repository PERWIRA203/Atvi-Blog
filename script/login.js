
const FormListener = document.querySelector("#loginForm");
const emailListener = document.querySelector("#email");
const passwordListener = document.querySelector("#password");

const expectedEmail = 'perwira2007@gmail.com';
const expectedPassword = '123';
  
FormListener.addEventListener('submit', function(event) {
    event.preventDefault();

    const email = emailListener.value;
    const password = passwordListener.value;
    if (email == expectedEmail && password == expectedPassword) {
        goToHome();
    } else {
        showPopUp();   
    }
});

