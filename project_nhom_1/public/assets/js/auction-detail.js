function displayFeatureImage(event) {
    event.preventDefault()
    $('.js-display-img').prop('src', $(event.target).prop('src'))
}

$(document).on('click', '.js-image-element', displayFeatureImage)