$(() => {
    $('.photos .photo-container img').on('click', function() {
        $(this).parent()
            .addClass('show-photo')
            .children('div').removeClass('close-hide')
    })

    $('.photos .photo-container .close').on('click', function() {
        $('.photos .photo-container')
            .removeClass('show-photo')
            .children('div')
                .addClass('close-hide')
                .removeClass('show-photo')
    })
})