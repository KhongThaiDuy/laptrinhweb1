/* script.js */
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector("form");
    
    loginForm.addEventListener("submit", function (event) {
        event.preventDefault();
        
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        
        if (username === "admin" && password === "123456") {
            alert("Đăng nhập thành công!");
            window.location.href = "list.html";
        } else {
            alert("Sai tài khoản hoặc mật khẩu!");
        }
    });
});
