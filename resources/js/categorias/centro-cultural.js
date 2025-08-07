document.querySelectorAll('[data-bs-toggle="modal"]').forEach(item => {
    item.addEventListener('click', event => {
        const imgSrc = event.currentTarget.querySelector('img').src;
        document.getElementById('modalImage').src = imgSrc;
    });
});