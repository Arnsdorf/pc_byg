const Images = document.querySelectorAll('.sel');
const selectedStorage = [];


Images.forEach(image => {
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

    });
});