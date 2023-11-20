function toggleLike() {
    var likeButton = document.getElementById('likeButton');
    if (likeButton.innerHTML === 'Like') {
        likeButton.innerHTML = 'Dislike';
    } else {
        likeButton.innerHTML = 'Like';
    }
}