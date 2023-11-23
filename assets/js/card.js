function changeText(button) {
    const originalText = button.dataset.originalText || button.innerText;

    if (button.innerText !== originalText) {
        button.innerText = originalText;
    } else {
        button.dataset.originalText = button.innerText;
        if (button.innerText === 'Buy') {
            button.innerText = 'Play';
        } else if (button.innerText === 'View') {
            button.innerText = 'Viewed!';
        } else if (button.innerText === 'Like') {
            button.innerText = 'Dislike';
        }
    }
}