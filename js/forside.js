const texts = ["Behov", "Evner", "Spil"];
let textIndex = 0;
let index = 0;
let deleting = false;
let delay = 50;

function writeAndDeleteText() {
    const typewriterText = document.getElementById("typewriter-text");
    const currentText = texts[textIndex];

    if (!deleting) {
        typewriterText.innerHTML += currentText[index];
        index++;

        if (index === currentText.length) {
            deleting = true;
            delay = 200; // hold for 2 seconds before deleting
        }
    } else {
        typewriterText.innerHTML = currentText.substring(0, index - 1);
        index--;

        if (index === 0) {
            deleting = false;
            delay = 350;
            textIndex = (textIndex + 1) % texts.length;
        }
    }

    setTimeout(writeAndDeleteText, delay);
}

writeAndDeleteText();