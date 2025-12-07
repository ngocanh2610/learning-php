const ten = document.getElementById("ten");
const ho = document.getElementById("ho");
const email = document.getElementById("email");
const sdt = document.getElementById("sdt");
const tp = document.getElementById("tp");
const tinh = document.getElementById("tinh");
const ghichu = document.getElementById("ghichu");

document.getElementById("dangki")
.addEventListener("submit", function (event) {
    event.preventDefault(); 

    console.log(
        "\n" + ten.value +
        "\n" + ho.value +
        "\n" + email.value +
        "\n" + sdt.value +
        "\n" + tp.value +
        "\n" + tinh.value +
        "\n" + ghichu.value
    );
});
