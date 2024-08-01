$(function () {
    showStep(1);

    const form = document.getElementById("user-profile-form");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirm-password");
    const message = document.getElementById("message");

    form.addEventListener("submit", function (event) {
        if (password.value !== confirmPassword.value) {
            event.preventDefault();
            message.textContent = "Passwords do not match!";
        }
    });

    password.addEventListener("input", function () {
        message.textContent = "";
    });

    confirmPassword.addEventListener("input", function () {
        message.textContent = "";
    });
});

function showStep(index) {
    $(".steps").hide();
    $("#step-" + index).show();
    $(".stepper-item").removeClass("current");
    $("#stepper-item-" + index).addClass("current");
    $(".stepper-item .stepper-number").show();
    $(".stepper-item .stepper-check").hide();
    $("#stepper-item-" + index + " .stepper-title").css("color", "#252f4a");

    let i = parseInt(index);

    do {
        i -= 1;
        $("#stepper-item-" + i + " .stepper-number").hide();
        $("#stepper-item-" + i + " .stepper-check").show();
        $("#stepper-item-" + i + " .stepper-title").css("color", "#99a1b7");
    } while (i > 1);
}
