
const FormListener = document.getElementById("loginForm");
const emailListener = document.getElementById("email");
const passwordListener = document.getElementById("password");

FormListener.addEventListener('submit', function(event) {
    event.preventDefault();

    const email = emailListener.value;
    const password = passwordListener;

    if (email == email && password == password) {
        goToHome();
    } else {
        goToSign();
    }
})


