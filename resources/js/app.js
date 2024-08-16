import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");

    // Toggle sidebar visibility on button click
    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("hidden");
    });
});