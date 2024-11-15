
document.addEventListener("DOMContentLoaded", function () {
    const userMenuButton = document.getElementById("user-menu-button");
    const dropdownMenu = document.getElementById("user-menu");

    userMenuButton.addEventListener("click", function () {
        dropdownMenu.classList.toggle("hidden");
    });

    window.addEventListener("click", function (event) {
        if (
            !userMenuButton.contains(event.target) &&
            !dropdownMenu.contains(event.target)
        ) {
            dropdownMenu.classList.add("hidden");
        }
    });
});
