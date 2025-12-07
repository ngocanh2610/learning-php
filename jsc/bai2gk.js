const form = document.getElementById("loginForm");
        const username = document.getElementById("username");
        const password = document.getElementById("password");
        const messageDiv = document.getElementById("message");

        form.addEventListener("submit", function (e) {
            e.preventDefault(); // chặn submit thật

            if (username.value.trim() === "" || password.value.trim() === "") {
                messageDiv.textContent = "Vui lòng nhập đầy đủ username và password!";
                messageDiv.style.color = "red";     // chữ màu đỏ
            } else {
                messageDiv.textContent = "Validate thành công!";
                messageDiv.style.color = "green";   // chữ màu xanh
            }
        });