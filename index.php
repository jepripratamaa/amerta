<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <title>Amerta</title>
</head>

<body>
    <header class="container mt-3">
        <?php include 'app/components/headerLanding.php' ?>
    </header>
    <img src="assets/img/Vector1.png" class="z-n1 position-absolute" alt="" width="300px">
    <section class="container mt-5" id="home">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col homeLeft mb-5">
                    Jadikan Acaramu <br><span class="leftAccent">Menakjubkan</span> <br>Bersama Kami
                    <div class="mt-5">
                        <a href="registerOption.php"><button class="btn startBtn">
                                Get Started
                            </button></a>
                    </div>

                </div>
                <div class="col homeRight mb-5">
                    <img src="assets/img/pic1.png" alt="" width="450px">
                </div>
            </div>
        </div>
    </section>
    <div id="about"></div>

    <section class="container mt-5">
        <div class="container text-center mt-5">
            <div class="row align-items-center">
                <div class="col aboutLeft mb-5">
                    <img src="assets/img/pic2.png" alt="" width="450px">
                </div>
                <div class="col text-center mb-5">
                    <span class="rightAccent">ABOUT</span>
                    <div class="mt-5 aboutRight">
                        AMERTA was established in 2023, since its establishment AMERTA has become one of the most
                        popular websites among the public. AMERTA which means ETERNAL who hopes someone can capture
                        memorable moments of his life.
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="container justify-content-center text-center mt-5 mb-5" id="profile">
        <div class="profileTitle">
            PROFILE
        </div>
        <div class="profileSubTitle mt-3 mb-3">
            The development of Amerta is managed by one of the teams from Infinite Learning. <br>Let's get acquainted with the Amerta team.
        </div>
        <div class="border profileBorder">
            <div class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="assets/img/pic3.png" alt="" width="200px"></li>
                        <li class="splide__slide"><img src="assets/img/pic3.png" alt="" width="200px"></li>
                        <li class="splide__slide"><img src="assets/img/pic3.png" alt="" width="200px"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include 'app/components/footer.php' ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script type="text/javascript">
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            focus: 'center',
            pagination: false,
        });

        splide.mount();
    </script>

</body>

</html>