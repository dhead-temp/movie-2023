<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head-global.php'; ?>
    <title>Final Download Link - <?php echo $subdomain; ?></title>
    <meta name="robots" content="noindex, nofollow" />

</head>

<body>

    <?php include 'inc/element-header.php'; ?>
    <main>
        <section class="hero-section">
            <div class="container">
                <div class="sub-container">
                    <?php include 'inc/element-header-warning.php'; ?>
                    <div class="latest-movies-link">
                        <br>
                        <div class="hero-search-headding jut-c" style="max-width: 100%; text-align: center;">
                            <span class="Select-movi-typed"><b>Downloading:</b> <?php echo $searchquery . " | " . $lang . " | " . $quality; ?></span>
                            <div class="underline"></div>
                        </div>
                        <br>
                        <div class="hero-note" style="text-align: center;">
                            <p><b>Pass Link Shorner</b><br><br> You have to pass link shortner On Next Page to download <?php echo $searchquery; ?></p>
                        </div>
                        <br>
                        <div class="movies-type-btns">
                            <a href="https://bit.ly/3C3SxZB" class="movie-type-link r-flex jut-sb ali-c" onclick="showLocker('ecfc83c0-8315-11ed-89c9-9b914327d3d6');record('trying_direct_download','no_info');">
                                <span class="movie-type-text">Direct Download Link</span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0C4.49 0 0 4.49 0 10C0 15.51 4.49 20 10 20C15.51 20 20 15.51 20 10C20 4.49 15.51 0 10 0ZM9 8V5C9 4.45 9.45 4 10 4C10.55 4 11 4.45 11 5V8H12.79C13.24 8 13.46 8.54 13.14 8.85L10.35 11.64C10.15 11.84 9.84 11.84 9.64 11.64L6.85 8.85C6.7809 8.7795 6.73421 8.69013 6.71582 8.59314C6.69743 8.49616 6.70816 8.39589 6.74665 8.30499C6.78515 8.2141 6.8497 8.13663 6.93215 8.08235C7.01461 8.02807 7.11129 7.99942 7.21 8H9V8ZM14 15H6C5.45 15 5 14.55 5 14C5 13.45 5.45 13 6 13H14C14.55 13 15 13.45 15 14C15 14.55 14.55 15 14 15Z" fill="white" />
                                </svg>
                            </a>

                        </div>
                    </div>

                    <?php
                    // include 'inc/element-telegram.php';
                    // include 'inc/element-search.php';
                    //  include 'inc/element-other-websites.php';
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
<script src="https://viral782.com/track.html?js=433044"></script>

</html>
