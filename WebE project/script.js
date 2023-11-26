document.addEventListener('DOMContentLoaded', function () {
    // Fetch and insert the header HTML into the current page
    fetch('work.html')
        .then(response => response.text())
        .then(html => {
            document.body.insertAdjacentHTML('afterbegin', html);
        });
});