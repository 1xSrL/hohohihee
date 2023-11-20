const postTimeElement = document.getElementById("postTime");


const postTime = new Date(postTimeElement.textContent);


const currentTime = new Date();


const timeDiffInHours = Math.abs(currentTime - postTime) / 36e5;


if (timeDiffInHours < 24) {
    postTimeElement.textContent = "Hari ini";
} else {
}
document.addEventListener("DOMContentLoaded", function() {
    const dropdownArrow = document.getElementById('dropdown-arrow');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownArrow.addEventListener('click', function(event) {
        event.stopPropagation();
        dropdownMenu.classList.toggle('show');
    });

    document.addEventListener('click', function(event) {
        if (!dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});
