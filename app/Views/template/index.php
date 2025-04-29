<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Rig Moves & Marine Consultant - Rigwise Technologies Pte Ltd</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon" />
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link
        href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>"
        rel="stylesheet" />
    <link
        href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>"
        rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet" />
    <link
        href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>"
        rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet" />

    <!-- Preloader Styles -->
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            overflow: hidden;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #preloader:before {
            content: "";
            position: fixed;
            top: calc(50% - 30px);
            left: calc(50% - 30px);
            border: 6px solid #0066cc;
            border-top-color: #e2eefd;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: animate-preloader 1s linear infinite;
        }

        @keyframes animate-preloader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .hide-preloader {
            display: none !important;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader"></div>

    <?= $this->include('template/header') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('template/footer') ?>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    
    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/js/hero-slideshow.js') ?>"></script>

    <!-- Preloader Script -->
    <script>
        window.addEventListener('load', function() {
            // Initialize an array to store all image promises
            const imagePromises = [];
            
            // Get all images on the page
            const images = document.getElementsByTagName('img');
            
            // Create a promise for each image
            for (let img of images) {
                const promise = new Promise((resolve, reject) => {
                    if (img.complete) {
                        resolve();
                    } else {
                        img.addEventListener('load', resolve);
                        img.addEventListener('error', resolve); // Resolve on error too, to prevent hanging
                    }
                });
                imagePromises.push(promise);
            }

            // Get all background images
            const elements = document.getElementsByClassName('hero-slide');
            for (let element of elements) {
                const bgUrl = window.getComputedStyle(element).backgroundImage.match(/url\(['"]?(.*?)['"]?\)/);
                if (bgUrl) {
                    const promise = new Promise((resolve, reject) => {
                        const img = new Image();
                        img.onload = resolve;
                        img.onerror = resolve; // Resolve on error too
                        img.src = bgUrl[1];
                    });
                    imagePromises.push(promise);
                }
            }

            // Wait for all images to load
            Promise.all(imagePromises).then(() => {
                const preloader = document.getElementById('preloader');
                if (preloader) {
                    preloader.classList.add('hide-preloader');
                    setTimeout(() => {
                        preloader.remove();
                    }, 500);
                }
            });
        });
    </script>
</body>

</html>