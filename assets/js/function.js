const cardData = [
    {
        "category": "CO-OPERATIVE",
        "description": "Looking for Excitement and Teamwork? Discover the Thrill of Co-operative Games!",
        "imagePath": "assets/photo/about1.jpg",
        "likeCount": 2
    },
    {
        "category": "ADVENTURE",
        "description": "Embark on an epic journey into the unknown with our thrilling adventure game!",
        "imagePath": "assets/photo/about2.jpg",
        "likeCount": 4
    },
    {
        "category": "STRATEGY",
        "description": "Command your armies, forge alliances, and outwit your opponents in the ultimate test of strategic prowess!",
        "imagePath": "assets/photo/about3.jpg",
        "likeCount": 17
    },
    {
        "category": "SPORTS",
        "description": "Experience the thrill of sports like never before and become a champion!",
        "imagePath": "assets/photo/about4.jpg",
        "likeCount": 34
    }
];

document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("card-container");

    // Event listener for button clicks using event delegation
    container.addEventListener("click", function (event) {
        if (event.target.closest(".like-button")) {
            const likeCountId = event.target.closest(".like-button").getAttribute("data-likecount");
            handleLikeButtonClick(likeCountId);
        }
    });

    // Function to handle button click
    function handleLikeButtonClick(likeCountId) {
        const index = parseInt(likeCountId.slice(-1)) - 1;
        cardData[index].likeCount += 1;
        updateLikeCount(likeCountId, cardData[index].likeCount);
    }

    // Function to update like count in the DOM
    function updateLikeCount(likeCountId, count) {
        document.getElementById(likeCountId).innerText = count;
    }

    // Function to generate cards dynamically
    function generateCards() {
        const container = document.getElementById("card-container");
        container.innerHTML = ''; // Clear existing content

        cardData.forEach((card, index) => {
            const cardHtml = `
                <div class="row mb-5">
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="${card.imagePath}" alt="Your Image Description" class="img-fluid mx-auto" width="2880" height="1800">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-sticky" style="top: 2rem;">
                            <div class="p-4 mb-3 bg-body-tertiary rounded">
                                <h4 class="fst-italic">${card.category}</h4>
                                <p class="mb-0">${card.description}</p>
                                <div class="text-center mt-3">
                                    <button class="Btn like-button" data-likecount="likeCount${index + 1}">
                                        <span class="leftContainer">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#fff">
                                                <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path>
                                            </svg>
                                            <span class="like">Like</span>
                                        </span>
                                        <span class="likeCount" id="likeCount${index + 1}">${card.likeCount}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            container.innerHTML += cardHtml;
        });
    }

    generateCards(); // Call to generateCards
});
