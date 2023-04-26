// Vælg alle billeder med data-id attribut
const spil = document.querySelectorAll('img[data-id]');

// Tilføj klikbegivenhed til hvert billede
spil.forEach(spil => {
    spil.addEventListener('click', () => {
        // Hent værdien af data-id attributten
        const id = spil.getAttribute('data-id');

        // Opret en Fetch-anmodning til serveren med id som parameter
        fetch('init.php?data-id=${data.build_class}')
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error(error));
    });
});
