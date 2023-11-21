const postTimeElement = document.getElementById("postTime");


const postTime = new Date(postTimeElement.textContent);


const currentTime = new Date();


const timeDiffInHours = Math.abs(currentTime - postTime) / 36e5;


if (timeDiffInHours < 24) {
    postTimeElement.textContent = "Hari ini";
} else {
}
function changeText(button) {
    const originalText = button.dataset.originalText || button.innerText;

    if (button.innerText !== originalText) {
        button.innerText = originalText;
    } else {
        button.dataset.originalText = button.innerText;
        if (button.innerText === 'Buy') {
            button.innerText = 'Bought!';
        } else if (button.innerText === 'View') {
            button.innerText = 'Viewed!';
        } else if (button.innerText === 'Like') {
            button.innerText = 'Liked!';
        }
    }
}
