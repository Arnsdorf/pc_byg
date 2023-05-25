const Images = document.querySelectorAll('.sel');
const selected = [];


Images.forEach(image => {
    image.addEventListener('click', function() {
        const index = selected.indexOf(this);
        if (index > -1) {
            selected.splice(index, 1);
            this.classList.remove('selected');
        } else {
            if (selected.length < 1) {
                selected.push(this);
                this.classList.add('selected');
            }
        }

    });
});