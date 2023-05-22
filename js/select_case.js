const caseImages = document.querySelectorAll('.case');
const selectedCase = [];

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

        const typeId = this.dataset.id; // Get the data value for the selected image

        // Perform AJAX request to the PHP script with the selected typeId
        fetch('caseselect_api.php', {
            method: 'POST',
            body: JSON.stringify({ id: typeId, password: 'CSS' })
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error(response.statusText);
                }
                return response.json();
            })
            .then(data => {
                // Handle data from the PHP script here
                console.log(data);
            })
            .catch(error => {
                console.error('Fejl:', error);
            });
    });
});
