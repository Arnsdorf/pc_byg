const graphicImages = document.querySelectorAll('.graphic_game');
const selectedGraphics = [];

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
    });
});
