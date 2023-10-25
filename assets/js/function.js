const postTimeElement = document.getElementById("postTime");


const postTime = new Date(postTimeElement.textContent);


const currentTime = new Date();


const timeDiffInHours = Math.abs(currentTime - postTime) / 36e5;


if (timeDiffInHours < 24) {
    postTimeElement.textContent = "Hari ini";
} else {
}
