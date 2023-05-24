const caseImages = document.querySelectorAll('.case');
const selectedCase = [];

const selectedGame = JSON.parse(localStorage.getItem('selectedGame'));

if (selectedGame) {
    console.log(selectedGame);
}

caseImages.forEach(image => {
    image.addEventListener('click', function() {
        const index = selectedCase.indexOf(this);
        if (index > -1) {
            selectedCase.splice(index, 1);
            this.classList.remove('selected');
        } else {
            if (selectedCase.length < 1) {
                selectedCase.push(this);
                this.classList.add('selected');
            }
        }

        const typeId = this.dataset.id; // Få dataværdien for det valgte billede

        // Udfør AJAX-anmodning til PHP-siden med det valgte typeId
        fetch('caseselect_api.php', {
            method: 'POST',
            body: JSON.stringify({ id: typeId, password: 'CSS' })
        })
            .then(async response => {
                if (!response.ok) {
                    throw new Error(await response.json());
                }
                return await response.json();
            })
            .then(data => {
                // Behandle data fra PHP-siden her
                console.log(data);
                localStorage.setItem('case', JSON.stringify(data[0]));
            })
            .catch(error => {
                console.error('Fejl:', error);
            });
    });
});