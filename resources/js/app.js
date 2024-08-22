import './bootstrap';

import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'

Alpine.plugin(ToastComponent)

document.addEventListener("livewire:navigated", function () {
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");

    // Toggle sidebar visibility on button click
    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("hidden");
    });
});