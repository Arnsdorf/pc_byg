const graphicImages = document.querySelectorAll('.graphic_game');
const selectedGraphics = [];

const selectedGame = JSON.parse(localStorage.getItem('selectedGame'));

if (selectedGame) {
    console.log(selectedGame);
}

graphicImages.forEach(image => {
    image.addEventListener('click', function() {
        const index = selectedGraphics.indexOf(this);
        if (index > -1) {
            selectedGraphics.splice(index, 1);
            this.classList.remove('selected');
        } else {
            if (selectedGraphics.length < 1) {
                selectedGraphics.push(this);
                this.classList.add('selected');
            }
        }

        const buildClass = this.dataset.buildClass;
        console.log(buildClass);

        const data = {
            password: "CSS",
            buildId: buildClass,
        };

        fetch(`graphicspage_api.php`, {
            method: 'POST',
            body: JSON.stringify(data),
        }).then(response => response.json()).then(data => {
            console.log(data);
            localStorage.setItem('selectedGame', JSON.stringify(data));
        }).catch(error => console.error(error));

    });
});