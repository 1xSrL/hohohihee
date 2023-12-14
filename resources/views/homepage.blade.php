<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <script>
        function handleLikeButtonClick(likeCountId) {
            const likeCountElement = document.getElementById(likeCountId);
            let currentLikeCount = parseInt(likeCountElement.textContent);
            currentLikeCount++;
            likeCountElement.textContent = currentLikeCount;
        }
    </script>
    <script>
        let following = false;
        let grayscaleCount = 0;

        function toggleFollow() {
            const followButton = document.getElementById("followButton");
            if (following) {
                followButton.textContent = "Follow";
            } else {
                followButton.textContent = "Following";
            }
            following = !following;
            if (!following) {
                grayscaleContent();
            }
        }

        function grayscaleContent() {
            if (grayscaleCount < 5) {
                const content = document.getElementById("content");
                content.classList.add("grayscale-effect");
                grayscaleCount++;
            } else {
                grayscaleCount = 0;
                const content = document.getElementById("content");
                content.classList.remove("grayscale-effect");
            }
        }

        const followButton = document.getElementById("follow-button");
        followButton.addEventListener("click", toggleFollow);
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>HOME</title>

   <link rel="stylesheet" href="{{ asset('css/promo.css') }}">
   <link rel="stylesheet" href="{{ asset('css/carousel.css"') }}">
   <link rel="stylesheet" href="{{ asset('css/login.css"') }}">
   <link rel="stylesheet" href="{{ asset('css/promo.css"') }}">
   <script src="{{ asset('js/color-modes.js') }}"></script>
    <script src="{{ asset('js/function.js') }}"></script>
</head>
<body>

<header data-bs-theme="dark" style="padding-bottom: 20px; width: 100%;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand col-lg-3 me-5" href="index.html">
                <div class="store">
                    <h2>KALKUN STORE</h2>
                    <h2>KALKUN STORE</h2>
                </div>
            </a>

            <div class="collapse navbar-collapse justify-content-center" id="navbarsExample11">
                <ul class="navbar-nav col-lg-6 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="academy.html">EVENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store.html">STORE</a>
                    </li>
                </ul>

                <div class="d-lg-flex col-lg-5 justify-content-end">
                    <a href="signup.html">
                        <button class="btn btn-warning">Sign up</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>


<main>


    <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row custom-container">
                    <div class="col-md-8 order-md-1 order-2">
                        <div class="video-container">
                            <video class="d-block w-100" controls>
                                <source src="assets/video/video1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="col-md-4 order-md-2 order-1">
                        <div class="text-container">
                            <h2 style="font-family: 'Motiva Sans', sans-serif; font-size: 30px;">Counter-Strike 2</h2>
                            <p>
                                <span style="opacity: 0.9;">Counter-Strike is back with an exciting new sequel that promises to redefine the gaming experience.
                                Immerse yourself in the intense action, strategic gameplay, and cutting-edge graphics as you
                                join forces with players from around the world.
                                Explore new maps, master new weapons, and engage in thrilling multiplayer battles that will keep
                                you on the edge of your seat. Are you ready for the next level of Counter-Strike?
                                </span>
                            </p>
                            <p style="margin-top: 10px; font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
                                <span style="opacity: 0.5;">Developer:</span>
                                <span style="color: #67C1F5;">infinity ward, raven software</span>
                            </p>
                            <p style="margin-top: 1px; font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
                                <span style="opacity: 0.5;">Publisher:</span>
                                <span style="color: #67C1F5;">Activision</span>
                            </p>
                            <p style="margin-top: 1px; font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
                                <span style="opacity: 0.5;">Recent Reviews:</span>
                                <span style="color: #67C1F5;">Very Positive</span>
                                <span style="opacity: 0.5;">( 9.336 )</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div class="store">
        <h1>SPECIAL OFFERS</h1>
        <h1>SPECIAL OFFERS</h1>
    </div>

    <div class="styled-element">
        <div class="promotion-image">
            <img src="asset/photo/promo1.jpg" alt="Promotion Image">
        </div>
        <div class="promotion-text">
            <h2>Age of Empires IV: Anniversary Edition</h2>
            <p>Celebrating its first year of delighting millions of global players, the award-winning and best-selling strategy franchise</p>
            <button class="btn btn-warning">- 50%</button>
        </div>
    </div>

    <div class="styled-element">
        <div class="promotion-text">
            <h2>IXION</h2>
            <p>IXION is an unrelenting, city-building odyssey across the stars. As Administrator of the Tiqqun, DOLOS’ prototype space station, you are tasked with balancing preservation and exploration as you manage infrastructure, resources and crew.</p>
            <button class="btn btn-warning">- 30%</button>
        </div>
        <div class="promotion-image">
            <img src="assets/photo/promo2.jpg" alt="Promotion Image">
        </div>
    </div>

    <div class="styled-element">
        <div class="promotion-image">
            <img src="assets/photo/promo3.jpg" alt="Promotion Image">
        </div>
        <div class="promotion-text">
            <h2>Remnant II</h2>
            <p>Remnant II pits survivors of humanity against new deadly creatures and god-like bosses across terrifying worlds. Play solo or co-op with two other friends to explore the depths of the unknown to stop an evil from destroying reality itself.</p>
            <button class="btn btn-warning">- 30%</button>
        </div>
    </div>




    <hr class="featurette-divider">



    <div id="card-container">
    <div class="row mb-5">
        <div class="col-md-5">
            <div class="text-center">
                <img src="assets/photo/about1.jpg" alt="Your Image Description" class="img-fluid mx-auto" width="2880" height="1800">
            </div>
        </div>
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h4 class="fst-italic">CO-OPERATIVE</h4>
                    <p class="mb-0">Looking for Excitement and Teamwork? Discover the Thrill of Co-operative Games!</p>
                    <div class="text-center mt-3">
                        <button class="Btn like-button" data-likecount="likeCount1" onclick="handleLikeButtonClick('likeCount1')">
                        <span class="leftContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#fff">
                                <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path>
                            </svg>
                            <span class="like">Like</span>
                        </span>
                            <span class="likeCount" id="likeCount1">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 offset-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h4 class="fst-italic">ADVENTURE</h4>
                    <p class="mb-0">Embark on an epic journey into the unknown with our thrilling adventure game!</p>
                    <div class="text-center mt-3">
                        <button class="Btn like-button" data-likecount="likeCount2" onclick="handleLikeButtonClick('likeCount2')">
                        <span class="leftContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#fff">
                                <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path>
                            </svg>
                            <span class="like">Like</span>
                        </span>
                            <span class="likeCount" id="likeCount2">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="text-center">
                <img src="public/photo/about2.jpg" alt="Your Image Description" class="img-fluid mx-auto" width="2880" height="1800">
            </div>
        </div>
    </div>

    <div class="my-5"></div>

    <div class="row mb-5">
        <div class="col-md-5">
            <div class="text-center">
                <img src="assets/photo/about3.jpg" alt="Your Image Description" class="img-fluid mx-auto" width="2880" height="1800">
            </div>
        </div>
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h4 class="fst-italic">STRATEGY</h4>
                    <p class="mb-0">Command your armies, forge alliances, and outwit your opponents in the ultimate test of strategic prowess!</p>
                    <div class="text-center mt-3">
                        <button class="Btn like-button" data-likecount="likeCount3" onclick="handleLikeButtonClick('likeCount3')">
                        <span class="leftContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#fff">
                                <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path>
                            </svg>
                            <span class="like">Like</span>
                        </span>
                            <span class="likeCount" id="likeCount3">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 offset-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h4 class="fst-italic">SPORTS</h4>
                    <p class="mb-0">Experience the thrill of sports like never before and become a champion!</p>
                    <div class="text-center mt-3">
                        <button class="Btn like-button" data-likecount="likeCount4" onclick="handleLikeButtonClick('likeCount4')">
                        <span class="leftContainer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#fff">
                                <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path>
                            </svg>
                            <span class="like">Like</span>
                        </span>
                            <span class="likeCount" id="likeCount4">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="text-center">
                <img src="assets/photo/about4.jpg" alt="Your Image Description" class="img-fluid mx-auto" width="2880" height="1800">
            </div>
        </div>
    </div>
    </div>



    <hr class="featurette-divider">





    <div class="row">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-3 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Far Cry 6</strong>
                    <h3 class="mb-0">SEQUEL</h3>
                    <div class="mb-1 text-body-secondary">Nov 11</div>
                    <p class="mb-auto">Enter the adrenaline-filled world of revolution.</p>
                    <p style="margin-bottom: 10px; font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
                        <span style="opacity: 0.5;">Recent Reviews:</span>
                        <span style="color: #A34C25;">Negative</span>
                    </p>
                    <button>
                        <p>Follow</p>
                    </button>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="img-border">
                        <img src="assets/photo/card2.jpg" width="400" height="270" alt="Thumbnail" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-3 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">DayZ</strong>
                    <h3 class="mb-0">SURVIVAL</h3>
                    <div class="mb-1 text-body-secondary">Nov 8</div>
                    <p class="mb-auto">How long can you survive a post-apocalyptic world?</p>
                    <p style="margin-bottom: 10px; font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
                        <span style="opacity: 0.5;">Recent Reviews:</span>
                        <span style="color: #67C1F5;">Positive</span>
                    </p>
                    <button>
                        <p>Follow</p>
                    </button>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="img-border">
                        <img src="assets/photo/card3.jpg" width="400" height="270" alt="Thumbnail" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-3 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Stray Gods</strong>
                    <h3 class="mb-0">INDIE</h3>
                    <div class="mb-1 text-body-secondary">Nov 11</div>
                    <p class="mb-auto">Gods. Romance. Murder. Musical Numbers?!</p>
                    <p style="margin-bottom: 10px; font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
                        <span style="opacity: 0.5;">Recent Reviews:</span>
                        <span style="color: #67C1F5;">Very Positive</span>
                    </p>
                    <button>
                        <p>Follow</p>
                    </button>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="img-border">
                        <img src="assets/photo/card4.jpg" width="400" height="270" alt="Thumbnail" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-3 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Madden NFL 24</strong>
                    <h3 class="mb-0">SPORTS</h3>
                    <div class="mb-1 text-body-secondary">Nov 8</div>
                    <p class="mb-auto">Experience the newest iteration of FieldSENSE™ in Madden NFL 24.</p>
                    <p style="margin-bottom: 10px; font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
                        <span style="opacity: 0.5;">Recent Reviews:</span>
                        <span style="color: #B9A074;">Mixed</span>
                    </p>
                    <button>
                        <p>Follow</p>
                    </button>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="img-border">
                        <img src="assets/photo/card1.jpg" width="400" height="270" alt="Thumbnail" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link btn-dark" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link btn-dark" href="#">1</a></li>
        <li class="page-item"><a class="page-link btn-dark" href="#">2</a></li>
        <li class="page-item">
            <a class="page-link btn-dark" href="#">Next</a>
        </li>
    </ul>


    <hr class="featurette-divider">


    <footer class="container-fluid bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Explore</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="academy.html" class="text-light text-decoration-none">Academy</a></li>
                        <li><a href="article.html" class="text-light text-decoration-none">Article</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Follow Us</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-light text-decoration-none social-icon">
                                <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-light text-decoration-none social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-light text-decoration-none social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <address>
                        <p>Email: contact@website.com</p>
                        <p>Phone: +123-456-7890</p>
                    </address>
                </div>
            </div>
        </div>
    </footer>
</main>
</body>
</html>




    <script>
        let likeCount = 0;
        const likeButton = document.getElementById("likeButton");
        const likeCountSpan = document.getElementById("likeCount");

        likeButton.addEventListener("click", function () {
            likeCount++;
            likeCountSpan.textContent = likeCount;
        });
    </script>


    <script src="../js/bootstrap.bundle.min.js"></script>


