<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head-global.php'; ?>
    <?php
    $searchquery = $_GET['q'];

    if ($searchquery) {
        setcookie('q', $searchquery, time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    ?>
    <title><?php echo $searchquery; ?> - <?php echo $subdomain; ?></title>
    <meta name="robots" content="noindex, nofollow" />
</head>

<body>
    <?php include 'inc/element-header.php'; ?>

    <main>
        <section class="hero-section">
            <div class="container" onclick="pop()">
                <div class="sub-container">
                    <?php include 'inc/element-header-warning.php'; ?>
                    <div class=" hero-search-box">
                        <div class="hero-search-headding r-flex ali-c ">
                            <span class="hero-search-text">Found 4 Results</span>

                        </div>
                        <!--
                        <form action="<?php echo $func_search_url; ?>" method="get">
                            <input type="search" name="q" placeholder="Enter Any Movie/WebSeries/Serial" value="<?php echo $searchquery; ?>" class="hero-search">
                            <button class="hero-search-btn ali-c r-flex jut-c">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.29167 6.41667H6.83083L6.6675 6.25917C7.25893 5.57318 7.58398 4.69741 7.58333 3.79167C7.58333 3.04175 7.36096 2.30867 6.94432 1.68513C6.52769 1.06159 5.93551 0.575607 5.24268 0.288625C4.54984 0.00164287 3.78746 -0.0734448 3.05195 0.0728575C2.31644 0.21916 1.64083 0.580281 1.11056 1.11056C0.580281 1.64083 0.21916 2.31644 0.0728575 3.05195C-0.0734448 3.78746 0.00164287 4.54984 0.288625 5.24268C0.575607 5.93551 1.06159 6.52769 1.68513 6.94432C2.30867 7.36096 3.04175 7.58333 3.79167 7.58333C4.73083 7.58333 5.59417 7.23917 6.25917 6.6675L6.41667 6.83083V7.29167L9.33333 10.2025L10.2025 9.33333L7.29167 6.41667ZM3.79167 6.41667C2.33917 6.41667 1.16667 5.24417 1.16667 3.79167C1.16667 2.33917 2.33917 1.16667 3.79167 1.16667C5.24417 1.16667 6.41667 2.33917 6.41667 3.79167C6.41667 5.24417 5.24417 6.41667 3.79167 6.41667Z" fill="white" />
                                </svg>&nbsp;&nbsp;
                                <span class="hero-search-btn-text">Do Another Search</span>
                            </button>
                        </form>
                    </div> -->

                        <div class="latest-movies-link">
                            <div class="hero-search-headding r-flex">
                                <span style="font-size: 18px; line-height: 1.5;"> <span style="color:var(--fontcolor);"> Search Result For:</span> <b style="font-style: italic;"><?php echo $searchquery; ?></b></span>
                            </div>
                            <div class="latest-movies-link">
                                <!-- <div class="hero-search-headding r-flex ali-c jut-sb">
                                    <span class="hero-search-text"><?php echo $searchquery; ?></span>
                                </div> -->
                                <p class="Movies123">
                                    <?php echo $searchquery; ?> is Available in All Formats with Multiple Audio Options Including Hindi, Punjabi, English & Tamil.
                                </p>
                            </div>
                            <div class="movies-type-btns">
                                <a href="/search-1.php/?lang=Hindi" class="movie-type-link r-flex jut-sb ali-c">
                                    <span class="movie-type-text"><?php echo $searchquery; ?> in Full HD | <span class="make-option-bold">Hindi Audio >></span></span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 0C4.49 0 0 4.49 0 10C0 15.51 4.49 20 10 20C15.51 20 20 15.51 20 10C20 4.49 15.51 0 10 0ZM9 8V5C9 4.45 9.45 4 10 4C10.55 4 11 4.45 11 5V8H12.79C13.24 8 13.46 8.54 13.14 8.85L10.35 11.64C10.15 11.84 9.84 11.84 9.64 11.64L6.85 8.85C6.7809 8.7795 6.73421 8.69013 6.71582 8.59314C6.69743 8.49616 6.70816 8.39589 6.74665 8.30499C6.78515 8.2141 6.8497 8.13663 6.93215 8.08235C7.01461 8.02807 7.11129 7.99942 7.21 8H9V8ZM14 15H6C5.45 15 5 14.55 5 14C5 13.45 5.45 13 6 13H14C14.55 13 15 13.45 15 14C15 14.55 14.55 15 14 15Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="/search-1.php/?lang=English" class="movie-type-link r-flex jut-sb ali-c">
                                    <span class="movie-type-text"><?php echo $searchquery; ?> in Full HD | <span class="make-option-bold">English Audio >></span></span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 0C4.49 0 0 4.49 0 10C0 15.51 4.49 20 10 20C15.51 20 20 15.51 20 10C20 4.49 15.51 0 10 0ZM9 8V5C9 4.45 9.45 4 10 4C10.55 4 11 4.45 11 5V8H12.79C13.24 8 13.46 8.54 13.14 8.85L10.35 11.64C10.15 11.84 9.84 11.84 9.64 11.64L6.85 8.85C6.7809 8.7795 6.73421 8.69013 6.71582 8.59314C6.69743 8.49616 6.70816 8.39589 6.74665 8.30499C6.78515 8.2141 6.8497 8.13663 6.93215 8.08235C7.01461 8.02807 7.11129 7.99942 7.21 8H9V8ZM14 15H6C5.45 15 5 14.55 5 14C5 13.45 5.45 13 6 13H14C14.55 13 15 13.45 15 14C15 14.55 14.55 15 14 15Z" fill="white" />
                                    </svg>
                                </a>
                                <?php include 'inc/ads-native.php';
                                ?>
                                <a href="/search-1.php/?lang=Tamil" class="movie-type-link r-flex jut-sb ali-c">
                                    <span class="movie-type-text"><?php echo $searchquery; ?> in Full HD | <span class="make-option-bold">Tamil Audio >></span></span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 0C4.49 0 0 4.49 0 10C0 15.51 4.49 20 10 20C15.51 20 20 15.51 20 10C20 4.49 15.51 0 10 0ZM9 8V5C9 4.45 9.45 4 10 4C10.55 4 11 4.45 11 5V8H12.79C13.24 8 13.46 8.54 13.14 8.85L10.35 11.64C10.15 11.84 9.84 11.84 9.64 11.64L6.85 8.85C6.7809 8.7795 6.73421 8.69013 6.71582 8.59314C6.69743 8.49616 6.70816 8.39589 6.74665 8.30499C6.78515 8.2141 6.8497 8.13663 6.93215 8.08235C7.01461 8.02807 7.11129 7.99942 7.21 8H9V8ZM14 15H6C5.45 15 5 14.55 5 14C5 13.45 5.45 13 6 13H14C14.55 13 15 13.45 15 14C15 14.55 14.55 15 14 15Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="/search-1.php/?lang=Punjabi" class="movie-type-link r-flex jut-sb ali-c">
                                    <span class="movie-type-text"><?php echo $searchquery; ?> in Full HD | <span class="make-option-bold">Punjabi Audio >></span></span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 0C4.49 0 0 4.49 0 10C0 15.51 4.49 20 10 20C15.51 20 20 15.51 20 10C20 4.49 15.51 0 10 0ZM9 8V5C9 4.45 9.45 4 10 4C10.55 4 11 4.45 11 5V8H12.79C13.24 8 13.46 8.54 13.14 8.85L10.35 11.64C10.15 11.84 9.84 11.84 9.64 11.64L6.85 8.85C6.7809 8.7795 6.73421 8.69013 6.71582 8.59314C6.69743 8.49616 6.70816 8.39589 6.74665 8.30499C6.78515 8.2141 6.8497 8.13663 6.93215 8.08235C7.01461 8.02807 7.11129 7.99942 7.21 8H9V8ZM14 15H6C5.45 15 5 14.55 5 14C5 13.45 5.45 13 6 13H14C14.55 13 15 13.45 15 14C15 14.55 14.55 15 14 15Z" fill="white" />
                                    </svg>
                                </a>


                            </div>
                        </div>

                        <?php // include 'inc/element-telegram.php';
                        ?>

                        <br>

                        <?php
                        // include 'inc/element-other-websites.php';
                        // include 'inc/element-piracy-description.php';
                        include 'inc/elements-2links.php';
                        ?>





                    </div>
                </div>
        </section>

    </main>
    <?php // include 'inc/element-footer.php';
    ?>

</body>

</html>
