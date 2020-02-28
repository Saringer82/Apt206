<!DOCTYPE html>
<html>
<head>
    <title>Apt 206</title>
    <link href='./css/theme.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>


<div class="grey-bar grey-bar__top"></div>
<div class="grey-bar grey-bar__left"></div>
<div class="grey-bar grey-bar__right"></div>

<div class="hero-menu">
    <ul>
        <li><a href="#work">Work</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>

<section id="work">
    Work
</section>
<section id="about">
    About
</section>
<section id="contact">
    Contact
</section>

</body>

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
    });
</script>

</html>
