const storageImages = document.querySelectorAll('.storage');
const selectedStorage = [];

const selectedGraphics = JSON.parse(localStorage.getItem('selectedGame'));

if (selectedGraphics) {
    console.log(selectedGraphics);
}

storageImages.forEach(image => {
    image.addEventListener('click', function() {
        const index = selectedStorage.indexOf(this);
        if (index > -1) {
            selectedStorage.splice(index, 1);
            this.classList.remove('selected');
        } else {
            if (selectedStorage.length < 1) {
                selectedStorage.push(this);
                this.classList.add('selected');
            }
        }

        const typeId = this.dataset.typeId; // Få dataværdien for det valgte billede

        // Udfør AJAX-anmodning til PHP-siden med det valgte typeId
        fetch('storageselect_api.php', {
            method: 'POST',
            body: JSON.stringify({ typeId: typeId, password: 'CSS' })
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(data => {
                // Behandle data fra PHP-siden her
                console.log(data);
            })
            .catch(error => {
                console.error('Fejl:', error);
            });
    });
});
