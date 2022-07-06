const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "vijay" && password === "chatbot" || username === "admin" && password === "admin") {
        //alert("You have successfully logged in.");
        //location.reload();
        window.open('admin.php','_blank');
    } else {
        loginErrorMsg.style.opacity = 1;
    }
})
