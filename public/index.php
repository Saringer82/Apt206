<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Apt 206</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link href='./css/theme.css' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
<header>
    <menu><ul>
            <li><a href="#work">Work</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul></menu>
    <div class="logo">
        <a href=""><img src="img/apt206_logo.jpg" alt="Apt 206"></a>
    </div>
</header>

    <div class="grey-bar grey-bar__top"></div>
    <div class="grey-bar grey-bar__left"></div>
    <div class="grey-bar grey-bar__right"></div>
<div class="hero-section">
    <div class="hero-link-section">
        <a href="#work">
            <div class="hero-link">
                <h1 data-text="Work" class="fade-in one">Work</h1>
            </div>
        </a>
        <a href="#about">
            <div class="hero-link">

                <h1 data-text="about" class="fade-in two">About</h1>
            </div>
        </a>
        <a href="#contact">
            <div class="hero-link">
                <a href="#contact">
                <h1 data-text="contact" class="fade-in three">Contact</h1>
                </a>
            </div>
        </a>

    </div>
</div>

<section id="work">
    <h2>Work</h2>
</section>

<section id="about">
    <h2>About</h2>
</section>

<section id="contact">
    <h3>Contact</h3>
</section>

<footer></footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    //Script for navigation scroll

    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        //Show/hide main menu on scroll
        $(window).scroll(function(){

            if ($(window).scrollTop() > $(window).height()) {
                $('menu').fadeIn(100);
            }

            else {
                $('menu').fadeOut(100);
            }
        });
    });
</script>

</body>
</html>
