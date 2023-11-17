const postTimeElement = document.getElementById("postTime");


const postTime = new Date(postTimeElement.textContent);


const currentTime = new Date();


const timeDiffInHours = Math.abs(currentTime - postTime) / 36e5;


if (timeDiffInHours < 24) {
    postTimeElement.textContent = "Hari ini";
} else {
}
document.addEventListener("DOMContentLoaded", function () {
    const likeButtons = document.querySelectorAll(".like-button");
    likeButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const likeCountId = button.getAttribute("data-likecount");
            handleLikeButtonClick(likeCountId);
        });
    });
});

function handleLikeButtonClick(likeCountId) {
    const likeCountElement = document.getElementById(likeCountId);
    let currentLikeCount = parseInt(likeCountElement.textContent);
    currentLikeCount++;
    likeCountElement.textContent = currentLikeCount;
}
