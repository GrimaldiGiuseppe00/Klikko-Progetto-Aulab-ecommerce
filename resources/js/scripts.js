import * as bootstrap from 'bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(el => new bootstrap.Popover(el))
});
