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

        const componentClass = this.dataset.componentClass;
        console.log(componentClass);

        const data = {
            password: "CSS",
            componentClass: componentClass,
        };

        fetch(`graphicspage_api.php`, {
            method: 'POST',
            body: JSON.stringify(data),
        }).then(response => response.json()).then(data => {
            console.log(data);
            localStorage.setItem('gpu', JSON.stringify(data[0]));
        }).catch(error => console.error(error));

    });
});