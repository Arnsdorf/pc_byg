const gameImages = document.querySelectorAll('.img');
const selectedGames = [];

gameImages.forEach(image => {
    image.addEventListener('click', () => {
        const data = {
            password: "CSS",
            buildId: image.dataset.buildId,
        };

        fetch(`api.php`, {
            method: 'POST',
            body: JSON.stringify(data),
        }).then(response => response.json()).then(data => {
            console.log(data);
            localStorage.setItem('selectedGame', JSON.stringify(data));
        }).catch(error => console.error(error));
    });
});

gameImages.forEach(image => {
    image.addEventListener('click', function() {
        const index = selectedGames.indexOf(this);
        if (index > -1) {
            selectedGames.splice(index, 1);
            this.classList.remove('selected');
        } else {
            if (selectedGames.length < 2) {
                selectedGames.push(this);
                this.classList.add('selected');
                if (selectedGames.length === 2) {
                    const id1 = selectedGames[0].getAttribute('data-build-id');
                    const id2 = selectedGames[1].getAttribute('data-build-id');
                    const highestValue = Math.max(id1, id2);
                    logBuildId(highestValue);
                }
            }
        }
    });
});

function logBuildId(buildId) {
    window.location.href = "graphicspage.php?build_id=" + buildId;
}

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

const submitBtn = document.querySelector('#submit_btn');

submitBtn.addEventListener('click', function() {
    if (selectedGames.length === 2) {
        const highestValue = Math.max(selectedGames[0], selectedGames[1]);
        logBuildId(highestValue);
    } else {
        alert('Vælg venligst 2 spil');
    }
});




