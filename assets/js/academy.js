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
const events = [
    {
        "title": "Total War: WARHAMMER III",
        "image": "assets/photo/event1.jpg",
        "description": "The cataclysmic conclusion to the Total War: WARHAMMER trilogy is here. Rally your forces and step into the Realm of Chaos, a dimension of mind-bending.",
        "tags": ["New", "Strategy"],
        "buttons": ["buy", "View", "Like"]
    },
    {
        "title": "Yu-Gi-Oh! Master Duel",
        "image": "assets/photo/event2.jpg",
        "description": "Yu-Gi-Oh! MASTER DUEL is the ultimate free-to-play cross-platform strategy card game with fast-paced Duels, stunning HD graphics, and more.",
        "tags": ["New", "Card Game"],
        "buttons": ["Buy", "View", "Like"]
    },
];
function createEventCard(event) {
    const eventCard = document.createElement('div');
    eventCard.classList.add('event-card', 'position-relative');

    const image = document.createElement('img');
    image.src = event.image;
    image.classList.add('w-full', 'h-[88px]', 'md:h-36', 'object-cover', 'object-center');

    const eventDetails = document.createElement('div');
    eventDetails.classList.add('event-details');

    const title = document.createElement('h4');
    title.classList.add('fst-italic', 'text-pink');
    title.textContent = event.title;

    const description = document.createElement('p');
    description.textContent = event.description;

    const buttonGroup = document.createElement('div');
    buttonGroup.classList.add('btn-group');

    event.buttons.forEach(btnText => {
        const button = document.createElement('button');
        button.type = 'button';
        button.classList.add('btn', 'btn-sm', 'btn-outline-secondary');
        button.textContent = btnText;
        buttonGroup.appendChild(button);
    });

    eventDetails.appendChild(title);
    eventDetails.appendChild(description);
    eventDetails.appendChild(buttonGroup);
    eventCard.appendChild(image);
    eventCard.appendChild(eventDetails);

    return eventCard;
}

const eventsContainer = document.querySelector('.events');

events.forEach(event => {
    const card = createEventCard(event);
    eventsContainer.appendChild(card);
});

localStorage.setItem('eventsData', JSON.stringify(events));


const storedEvents = JSON.parse(localStorage.getItem('eventsData'));
