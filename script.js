function toggleAddOnsInput() {
    const addonsSelect = document.getElementById('addons');
    const addonsInput = document.getElementById('addonsInput');

    if (addonsSelect.value === 'none') {
        addonsInput.style.display = 'none';
    } else {
        addonsInput.style.display = 'block';
    }
}

document.getElementById('cinema').addEventListener('change', toggleAddOnsInput);

function displaySelectedMoviePoster() {
    const movieCardImages = document.querySelectorAll('.card-img-top');
    const moviePosterImage = document.getElementById('selectedMoviePoster');

    movieCardImages.forEach((image) => {
        image.addEventListener('click', function () {
            moviePosterImage.src = this.src;
        });
    });
}

if (window.location.pathname === '/ordersummary.php') {
    displaySelectedMoviePoster();
    
    const openOrderSummaryPopup = () => {
        window.open('ordersummary.php', 'OrderSummary', 'width=800,height=600');
    };

    openOrderSummaryPopup();
}
