// Instantiate Masonry only when images loaded
imagesLoaded(document.querySelector('.grid'), function(instance) {
    console.log('all images are loaded');
    new Masonry( '.grid', {
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        percentPosition: true,
        gutter: 0
    });
});
