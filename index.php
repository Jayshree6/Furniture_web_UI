<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Furniture Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito+Sans:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       

<!--NAV-->
<nav class="flex">
    <figure class="logo"><img src="logo.png" alt="LOGO." /></figure>
    <a href="javascript:void(0)" class="ham" onclick="closer()">
    </a>
    <ul>
        <li><a href="index.html">Home</a></li>

        <li><a href="products.html">Product</a></li>
        <li><a href="contact.html">Contact</a></li>

    </ul>
</nav>
</header>
<!--MENU-->
<menu>
    <section class="details padding_1x">
        <a href="javascript:void(0)"><iconify-icon icon="iconoir:phone"></iconify-icon> (+000) 123 4567</a>
        <a href="mailto:info@websitename.com"><iconify-icon icon="mdi:email-outline"></iconify-icon> info@websitename.com</a>
        <a href="javascript:void(0)"><iconify-icon icon="entypo:address"></iconify-icon> 24971 Avenue Stanford, Santa Clarita, CA 91355</a>
        <a href="javascript:void(0)"><iconify-icon icon="ri:time-line"></iconify-icon> Every day, 6am - 6pm</a>
    </section>
    <section class="links padding_1x">
        <a href="#">Home</a>
        <a href="#">Recycling</a>
        <a href="#">Contact us</a>
        <a href="#">About us</a>
    </section>
</menu>

<!--HEADER-->
<header>
    <article>
        <h1 class="title big"> <em>Chic</em> & <em>Unique</em> Pieces For Your Home<em>.</em> </h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        <a href="products.html" class="btn btn_3">Explore more</a>
    </article>
</header>


<!--MAIN-->
<main id="More">
    <!--DIVISION_1-->
    <div class="divisions division_1 flex padding_2x">
        <section class="flex_content padding_2x">
            <figure>
                <img src="https://i.postimg.cc/qqt4ntzz/01.jpg" alt="" loading="lazy" />
            </figure>
        </section>
        <section class="flex_content padding_2x">
            <article>
                <h2 class="title medium">Let's make your Interior better.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                <aside class="fixed_flex">
                    <span>
                        <h4 class="title small">200+</h4>
                        <p>New Furnitures</p>
                    </span>
                    <span>
                        <h4 class="title small">100+</h4>
                        <p>Recycled Products</p>
                    </span>
                </aside>
            </article>
        </section>
    </div>

    <!--DIVISION_2-->
    <div class="divisions division_2 flex padding_2x">
        <section class="flex_content padding_2x">
            <figure>
                <img src="https://i.postimg.cc/XvVWL1rM/div-2.jpg" alt="" loading="lazy" />
                <figcaption class="padding_1x">
                    <h2 class="title medium">What We Do?</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </figcaption>
            </figure>
        </section>
        <section class="flex_content cards padding_2x flex">
            <figure class="flex card">
                <img src="https://i.postimg.cc/g2ydvbkq/01.jpg" alt="" loading="lazy" />
                <figcaption class="padding_2x">
                    <h3 class="title small">Indoor & Outdoor Furniture</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </figcaption>
            </figure>
            <figure class="flex card">
                <figcaption class="padding_2x">
                    <h3 class="title small">Large contracts for Doors</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </figcaption>
                <img src="https://i.postimg.cc/FsLhHJM6/02.jpg" alt="" loading="lazy" />
            </figure>
            <figure class="flex card">
                <img src="https://i.postimg.cc/y65VKTb9/03.jpg" alt="" loading="lazy" />
                <figcaption class="padding_2x">
                    <h3 class="title small">Kitchen, Bed room sets</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </figcaption>
            </figure>
            <figure class="flex card">
                <figcaption class="padding_2x">
                    <h3 class="title small">Exibition Stands</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </figcaption>
                <img src="https://i.postimg.cc/j2GKhs7v/04.jpg" alt="" loading="lazy" />
            </figure>
        </section>
    </div>

    <div class="divisions division_3 padding_4x">
        <section class="flex padding_1x">
        <figure>
            <img src="https://i.postimg.cc/T3vfL3G3/div-3.png" alt="" loading="lazy" />
        </figure>
        <article>
            <h3 class="title small">Recycle old wood pallets to create Beautiful Furniture Items.</h3>
            <p>We have a dedicated team to recycle wood waste to create artistic gadgets such as <b>Mobile Holders</b>, <b>Desktop Clocks</b>, <b>Wall Clocks</b>,<b>Pen Holders</b>, <b>Chop Boards</b>, <b>Decorative Items</b> & much more...</p>
            <a href="#" class="btn btn_1">Contact us</a>
        </article>
        </section>
    </div>
</main>

<!--FOOTER-->
<footer class="flex">
    <section class="flex_content padding_2x">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </section>
    <section class="flex_content">
        <a href="index.html">Home</a>
        <a href="contact.html">Contact us</a>
        <a href="aboutus.html">About us</a>

        <a href="#">Cookie Policy</a>
    </section>
    <section class="flex_content padding_1x">
        <p>© 2023 website name || All rights reserved</p>
    </section>
</footer>


<!--ADDITIONAL-->
<div class="additional flex"></div>
<a href="#" id="roll_back" class="animate"><i class="fa fa-angle-up"></i></a>

    <script src="script.js"></script>
</body>
</html>