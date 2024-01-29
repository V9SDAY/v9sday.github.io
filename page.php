<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/logo.svg" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Responsive landing page headphones</title>
</head>

<body>
    <!--=============== HEADER ===============-->

  <!-- ពាន់ គង 1-->
<?php $menuItems = [
    ["id" => "home", "text" => "Home", "class" => "nav__link active-link"],
    ["id" => "specs", "text" => "Specs", "class" => "nav__link"],
    ["id" => "case", "text" => "Case", "class" => "nav__link"],
    ["id" => "products", "text" => "Products", "class" => "nav__link"]];?>

<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
            <img src="assets/img/logo.svg" alt="">
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <?php foreach ($menuItems as $item): ?>
                    <li class="nav__item">
                        <a href="#<?= $item['id'] ?>" class="<?= $item['class'] 
                        ?>"><?= $item['text'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-function-line"></i>
        </div>
    </nav>
</header>

<!-- ====== MAIN ===== -->


<main class="main">
    <!-- =====HOME===== -->

  <!-- គិន តូហ៊ី 2-->
    <?php
$homeData = [
    "imgSrc" => "assets/img/home.png",
    "title" => "On ear",
    "subtitle" => "Beats 3",
    "titleDescription" => "Overview",
    "description" => "Enjoy award-winning Beats sound with wireless listening freedom and a sleek, streamlined design with comfortable padded earphones, delivering first-rate playback.",
    "buttonIcon" => "ri-shopping-bag-line",
    "buttonText" => "Add to Bag",
    "price" => "$299"
];
?>

<section class="home section" id="home">
    <div class="home__container container grid">
        <div>
            <img src="<?= $homeData['imgSrc'] ?>" alt="" class="home__img">
        </div>

        <div class="home__data">
            <div class="home__header">
                <h1 class="home__title"><?= $homeData['title'] ?></h1>
                <h2 class="home__subtitle"><?= $homeData['subtitle'] ?></h2>
            </div>

            <div class="home__footer">
                <h3 class="home__title-description"><?= $homeData['titleDescription'] ?></h3>
                <p class="home__description"><?= $homeData['description'] ?></p>
                <a href="#" class="button button--flex">
                    <span class="button--flex">
                        <i class="<?= $homeData['buttonIcon'] ?> button__icon"></i> <?= $homeData['buttonText'] ?>
                    </span>
                    <span class="home__price"><?= $homeData['price'] ?></span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php

//  រៀន លី  ហ្វុង 3
// Array to store sponsor images and their paths
$sponsorImages = [
    "assets/img/sponsor1.png",
    "assets/img/sponsor2.png",
    "assets/img/sponsor3.png",
    "assets/img/sponsor4.png"
];
?>

<!--=============== SPONSOR ===============-->
<section class="sponsor section">
    <div class="sponsor__container container grid">
        <?php
        // Loop through the sponsor images array and generate HTML for each image
        foreach ($sponsorImages as $imgSrc):
        ?>
            <img src="<?= $imgSrc ?>" alt="" class="sponsor__img">
        <?php endforeach; ?>
    </div>
</section>


<!-- ឃីន សុខរ៉ូ 4-->
<?php
// Array to store specs data
$specsData = [
    ["icon" => "ri-bluetooth-line", "title" => "Connection", "subtitle" => "Bluetooth v5.2"],
    ["icon" => "ri-battery-charge-line", "title" => "Battery", "subtitle" => "Duration 40h"],
    ["icon" => "ri-plug-line", "title" => "Load", "subtitle" => "Fast charge 4.2-AAC"],
    ["icon" => "ri-mic-line", "title" => "Microphone", "subtitle" => "Supports Apple Siri <br> and Google"]
];
?>

<!--=============== SPECS ===============-->
<section class="specs section grid" id="specs">
    <h2 class="section__title section__title-gradient">Specs</h2>

    <div class="specs__container container grid">
        <div class="specs__content grid">
            <?php
            // Loop through the specs data array and generate HTML for each specification
            foreach ($specsData as $spec):
            ?>
                <div class="specs__data">
                    <i class="<?= $spec['icon'] ?> specs__icon"></i>
                    <h3 class="specs__title"><?= $spec['title'] ?></h3>
                    <span class="specs__subtitle"><?= $spec['subtitle'] ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <div>
            <img src="assets/img/specs.png" alt="" class="specs__img">
        </div>
    </div>
</section>


<!-- ឈាន ផល្លា 5-->
<?php
// Case data
$caseData = [
    "imgSrc" => "assets/img/case.png",
    "description" => "With a comfortable and adaptable case so that you can store it whenever you want, and keep your durability forever."
];
?>

<!--=============== CASE ===============-->
<section class="case section grid" id="case">
    <h2 class="section__title section__title-gradient">Case</h2>

    <div class="case__container container grid">
        <div>
            <img src="<?= $caseData['imgSrc'] ?>" alt="" class="case__img">
        </div>

        <div class="case__data">
            <p class="case__description"><?= $caseData['description'] ?></p>
            <a href="#" class="button button--flex">
                <i class="ri-information-line button__icon"></i> More info
            </a>
        </div>
    </div>
</section>

<!-- អ៊ារ អ៊ីត 6 -->
<?php
// Discount data
$discountData = [
    "title" => "Immerse yourself in <br> your music",
    "description" => "Get it now, up to 50% off.",
    "buttonIcon" => "ri-shopping-bag-line",
    "buttonText" => "Shop Now",
    "imgSrc" => "assets/img/discount.png"
];
?>

<!--=============== DISCOUNT ===============-->
<section class="discount section">
    <div class="discount__container container grid">
        <div class="discount__animate">
            <h2 class="discount__title"><?= $discountData['title'] ?></h2>
            <p class="discount__description"><?= $discountData['description'] ?></p>
            <a href="#" class="button button--flex">
                <i class="<?= $discountData['buttonIcon'] ?> button__icon"></i> <?= $discountData['buttonText'] ?>
            </a>
        </div>

        <img src="<?= $discountData['imgSrc'] ?>" alt="" class="discount__img">
    </div>
</section>

<!-- សំណាង អាណែក  7-->
<?php
// Products data
$productsData = [
    ["imgSrc" => "assets/img/product1.png", "title" => "Black", "price" => "$249"],
    ["imgSrc" => "assets/img/product2.png", "title" => "Red Black", "price" => "$249"],
    ["imgSrc" => "assets/img/product3.png", "title" => "Night Black", "price" => "$249"],
    ["imgSrc" => "assets/img/product4.png", "title" => "Blue", "price" => "$249"],
    ["imgSrc" => "assets/img/product5.png", "title" => "Twilight gray", "price" => "$249"]
];
?>

<!--=============== PRODUCTS ===============-->
<section class="products section" id="products">
    <h2 class="section__title section__title-gradient products__line">
        Choose <br> Your Style
    </h2>

    <div class="products__container container grid">
        <?php
        // Loop through the products data array and generate HTML for each product
        foreach ($productsData as $product):
        ?>
            <article class="products__card">
                <div class="products__content">
                    <img src="<?= $product['imgSrc'] ?>" alt="" class="products__img">

                    <h3 class="products__title"><?= $product['title'] ?></h3>
                    <span class="products__price"><?= $product['price'] ?></span>

                    <button class="button button--flex products__button">
                        <i class="ri-shopping-bag-line button__icon"></i>
                    </button>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>


<!-- នី ម៉ួល 9-->
<?php
// Footer data
$footerProductsLinks = [
    ["link" => "#", "text" => "Headphones"],
    ["link" => "#", "text" => "Earphones"],
    ["link" => "#", "text" => "Earbuds"],
    ["link" => "#", "text" => "Accessories"]
];

$footerSupportLinks = [
    ["link" => "#", "text" => "Product help"],
    ["link" => "#", "text" => "Register"],
    ["link" => "#", "text" => "Updates"],
    ["link" => "#", "text" => "Provides"]
];
?>


<!-- SRIE Vi  -->
<!--=============== FOOTER ===============-->
<footer class="footer section">
    <div class="footer__container container grid">
        <a href="#" class="footer__logo">
            <img src="assets/img/logo.svg" alt="">
        </a>

        <div class="footer__content">
            <h3 class="footer__title">Products</h3>

            <ul class="footer__links">
                <?php foreach ($footerProductsLinks as $link): ?>
                    <li>
                        <a href="<?= $link['link'] ?>" class="footer__link"><?= $link['text'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Support</h3>

            <ul class="footer__links">
                <?php foreach ($footerSupportLinks as $link): ?>
                    <li>
                        <a href="<?= $link['link'] ?>" class="footer__link"><?= $link['text'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="footer__content">
            <form action="" class="footer__form">
                <input type="email" placeholder="Email" class="footer__input">
                <button class="button button--flex">
                    <i class="ri-send-plane-line button__icon"></i> Subscribe
                </button>
            </form>

            <div class="footer__social">
                <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                    <i class="ri-facebook-fill"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                    <i class="ri-instagram-line"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                    <i class="ri-twitter-line"></i>
                </a>
            </div>
        </div>
    </div>

    <p class="footer__copy">
        <a href="https://www.youtube.com/c/" target="_blank" class="footer__copy-link">&#169; V/.
            All right reserved</a>
    </p>
</footer>

<!--=============== SCROLL UP ===============-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-s-line scrollup__icon"></i>
</a>




</main>


    
    <!--=============== SCROLL REVEAL ===============-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>