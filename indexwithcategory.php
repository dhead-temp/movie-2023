<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head-global.php'; ?>
    <title>Movies Zilla - ExtraMovies</title>
</head>

<body>
    <?php include 'inc/element-header.php'; ?>

    <main>
        <section class="hero-section">
            <div class="container">
                <div class="sub-container">

                    <?php include 'inc/element-header-warning.php'; ?>
                    <?php include 'inc/element-telegram.php'; ?>
                    <?php include 'inc/element-hero-section.php'; ?>
                    <?php include 'inc/element-search.php'; ?>
                    <?php include 'inc/element-latest-movies.php'; ?>




                    <div class="latest-movies-link">
                        <div class="hero-search-headding r-flex ali-c ">
                            <span class="hero-search-text">Select Movies Type </span>
                        </div>
                        <div class="movies-type-btns">
                            <a href="#" class="movie-type-link r-flex jut-sb ali-c" target="_blank">
                                <span class="movie-type-text">Bollywood</span>
                                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.702454 11.6437L1.81873 12.75L8.12538 6.5L1.81873 0.25L0.702454 1.35625L5.89282 6.5L0.702454 11.6437Z" fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="movie-type-link r-flex jut-sb ali-c" target="_blank">
                                <span class="movie-type-text">HollyWood</span>
                                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.702454 11.6437L1.81873 12.75L8.12538 6.5L1.81873 0.25L0.702454 1.35625L5.89282 6.5L0.702454 11.6437Z" fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="movie-type-link r-flex jut-sb ali-c" target="_blank">
                                <span class="movie-type-text">Tamil</span>
                                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.702454 11.6437L1.81873 12.75L8.12538 6.5L1.81873 0.25L0.702454 1.35625L5.89282 6.5L0.702454 11.6437Z" fill="white" />
                                </svg>
                            </a>

                        </div>
                    </div>
                    <?php include 'inc/element-other-websites.php'; ?>



                    <div class="latest-movies-link">
                        <div class="hero-search-headding r-flex ali-c ">
                            <h1 class="hero-search-text">123Movies </h1>
                        </div>
                        <p class="Movies123">
                            123Movies is Website where you can browse latest movies
                        </p>
                    </div>

                    <?php include 'inc/element-privacy-description.php'; ?>

                </div>
            </div>
        </section>

    </main>
    <?php include 'inc/element-footer.php'; ?>
</body>

</html>
