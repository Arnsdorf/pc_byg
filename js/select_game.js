// Vælg alle spilbilleder
const gameImages = document.querySelectorAll('.img');

// Opret et array til at gemme de valgte spilbilleder
const selectedGames = [];

// Tilføj en klik-lytter til hvert spilbillede
gameImages.forEach(image => {
    image.addEventListener('click', function() {
        // Find billedets placering i det valgte spilbilleder-array
        const index = selectedGames.indexOf(this.src);

        // Hvis billedet allerede er valgt, skal det fjernes fra det valgte spilbilleder-array og visuel markering fjernes
        if (index > -1) {
            selectedGames.splice(index, 1);
            this.classList.remove('selected');

            // Hvis billedet ikke allerede er valgt, skal det tilføjes til det valgte spilbilleder-array og visuel markering tilføjes
        } else {
            // Kontroller, at der ikke allerede er valgt to billeder, før et tredje billede tilføjes
            if (selectedGames.length < 2) {
                selectedGames.push(this.src);
                this.classList.add('selected');
            }
        }
    });
});

// Tilføj en klik-lytter til en "Afmarkér alle" knap, der fjerner visuel markering og nulstiller det valgte spilbilleder-array
const clearButton = document.querySelector('#clear');
if (clearButton) {
    clearButton.addEventListener('click', function() {
        selectedGames.forEach(imageSrc => {
            const image = document.querySelector(`.img[src="${imageSrc}"]`);
            if (image) {
                image.classList.remove('selected');
            }
        });
        selectedGames.length = 0;
    });
}

