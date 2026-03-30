const thumbnails = document.querySelectorAll('.gallery-side img');
console.log(thumbnails);

thumbnails.forEach(thumb => {
    thumb.addEventListener('click', function() {
        const mainImage = document.querySelector('.main-image img');
        mainImage.srcset = '';
        mainImage.src = this.dataset.full;
    });
});