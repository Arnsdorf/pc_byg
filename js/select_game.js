const gameImages = document.querySelectorAll('.img');
const selectedGames = [];

gameImages.forEach(image => {
    image.addEventListener('click', () => {
        const data = {
            password: "CSS",
            componentClass: image.dataset.componentClass,
        };

        fetch(`gameselect_api.php`, {
            method: 'POST',
            body: JSON.stringify(data),
        }).then(response => response.json()).then(data => {
            console.log(data);
            localStorage.setItem('motherboard', JSON.stringify(data.query1[0]));
            localStorage.setItem('ram', JSON.stringify(data.query2[0]));
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
            }
        }
    });
});









