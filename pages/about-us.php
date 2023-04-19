<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../inc/head-global.php'; ?>
    <title>About Us - <?php echo $subdomain; ?></title>
</head>

<body>
    <?php include '../inc/element-header.php'; ?>

    <main>
        <section class="hero-section">
            <div class="container">
                <div class="sub-container">

                    <div class="latest-movies-link">
                        <div class="hero-search-headding r-flex ali-c jut-sb">
                            <span style="margin-top: 20px;" class="hero-search-text">About Us</span>
                        </div>
                        <p class="Movies123">
                            <?php echo $subdomain; ?> is Website where you can browse latest movies.
                        </p>
                    </div>
                    <?php include '../inc/element-other-websites.php'; ?>
                    <?php include '../inc/element-piracy-description.php'; ?>

                </div>
            </div>
        </section>

    </main>
    <?php include '../inc/element-footer.php'; ?>

</body>

</html>
