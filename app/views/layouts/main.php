<?php
$isBlogDetail = isset($view) && $view === 'blog_detail';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="icon" type="jpg" sizes="192x192" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="icon" type="jpg" sizes="32x32" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="icon" type="jpg" sizes="96x96" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="icon" type="jpg" sizes="16x16" href="https://www.kalkedonyonetim.com/icon-1.svg">
    <link rel="manifest" href="https://www.kalkedonyonetim.com/public/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title><?= htmlspecialchars($title ?? 'Kalkedon', ENT_QUOTES, 'UTF-8') ?></title>
     <?php if (!$isBlogDetail): ?>
        
        <link rel="stylesheet" href="/public/assets/bootstrap/bootstrap.min.css?v=<?= filemtime('public/assets/bootstrap/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="/public/assets/css/aos.css?v=<?= filemtime('public/assets/css/aos.css') ?>">
        <link rel="stylesheet" href="/public/assets/css/owl.carousel.css?v=<?= filemtime('public/assets/css/owl.carousel.css') ?>">
        <link rel="stylesheet" href="/public/assets/css/custom.css?v=<?= filemtime('public/assets/css/custom.css') ?>">
        <link rel="stylesheet" href="/public/assets/css/mobile.css?v=<?= filemtime('public/assets/css/mobile.css') ?>">
    <?php else: ?>

    <!-- Blog detail sayfasına özel CSS buraya -->
    <link rel="stylesheet" href="../../public/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../../public/assets/css/aos.css">
    <link rel="stylesheet" href="../../public/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../../public/assets/css/custom.css">
    <link rel="stylesheet" href="../../public/assets/css/custom-style.css">
    <link rel="stylesheet" href="../../public/assets/css/mobile.css">
    <link rel="stylesheet" href="../../public/assets/css/responsive.css">
    <link rel="stylesheet" href="../../public/assets/css/special-classes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">


    <?php endif; ?>

    


</head>
<body>

    <!-- Header -->
    <?php include __DIR__ . '/../partials/header.php'; ?>

    <!-- Main Content -->
    <main class="content">
        <?php
        // Eğer view içeriği değişken olarak geldiyse ekle
        if (!empty($view)) {
            $viewPath = __DIR__ . '/../' . basename($view) . '.php';
            if (file_exists($viewPath)) {
                include $viewPath;
            } else {
                echo "<p style='color:red; text-align:center;'>Görüntüleme dosyası bulunamadı: {$viewPath}</p>";
            }
        } else {
            echo "<p style='color:red; text-align:center;'>İçerik yüklenemedi.</p>";
        }
        ?>
    </main>

    <!-- Footer -->
    <?php include __DIR__ . '/../partials/footer.php'; ?>
    

    <a id="button"></a>
    <!-- js start -->
    <?php if (!$isBlogDetail): ?>
        <script src="/public/assets/js/jquery.min.js"></script>
        <script src="/public/assets/js/popper.min.js"></script>
        <script src="/public/assets/js/bootstrap.min.js"></script>
        <script src="/public/assets/js/owl.carousel.js"></script>
        <script src="/public/assets/js/aos.js"></script>
        <script src="/public/assets/js/jquery.validate.js"></script>
        <script src="/public/assets/js/custom.js"></script>
    <?php else: ?>
        <script src="../../public/assets/js/jquery.min.js"></script>
        <script src="../../public/assets/js/popper.min.js"></script>
        <script src="../../public/assets/js/bootstrap.min.js"></script>
        <script src="../../public/assets/js/owl.carousel.js"></script>
        <script src="../../public/assets/js/aos.js"></script>
        <script src="../../public/assets/js/jquery.validate.js"></script>
        <script src="../../public/assets/js/custom.js"></script>
    <?php endif; ?>
    
    <script>
        $('#owl-carousel-customer').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                992: {
                    items: 2
                }
            }
        })
        var owl = $("#owl-carousel-customer");
        owl.owlCarousel();
        $(".next-btn").click(function () {
            owl.trigger("next.owl.carousel");
        });
        $(".prev-btn").click(function () {
            owl.trigger("prev.owl.carousel");
        });
        $(".prev-btn").addClass("disabled");
        $(owl).on("translated.owl.carousel", function (event) {
            if ($(".owl-prev").hasClass("disabled")) {
                $(".prev-btn").addClass("disabled");
            } else {
                $(".prev-btn").removeClass("disabled");
            }
            if ($(".owl-next").hasClass("disabled")) {
                $(".next-btn").addClass("disabled");
            } else {
                $(".next-btn").removeClass("disabled");
            }
        });
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        $(window).on('load', function () {
            // Preloader
            $('.loader').fadeOut();
            $('.loader-mask').delay(350).fadeOut('slow');
        });
    </script>
    <script>
        var btn = $('#button');
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            }
            else {
                btn.removeClass('show');
            }
        });
        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });
    </script>
    <script>
        $(document).ready(function () {
            startAnimation();
            function startAnimation() {
                jQuery('.skills').each(function () {

                    jQuery(this).find('.skillbar').animate({
                        width: jQuery(this).attr('data-percent')
                    }, 6000);

                });
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            var counters = $(".count");
            var countersQuantity = counters.length;
            var counter = [];
            for (i = 0; i < countersQuantity; i++) {
                counter[i] = parseInt(counters[i].innerHTML);
            }
            var count = function (start, value, id) {
                var localStart = start;
                setInterval(function () {
                    if (localStart < value) {
                        localStart++;
                        counters[id].innerHTML = localStart;
                    }
                }, 40);
            }
            for (j = 0; j < countersQuantity; j++) {
                count(0, counter[j], j);
            }
        });
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 6000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
    <script>
        window.document.onkeydown = function (e) {
            if (!e) {
                e = event;
            }
            if (e.keyCode == 27) {
                lightbox_close();
            }
        }
        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade').style.display = 'block';
            lightBoxVideo.play();
        }
        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'none';
            document.getElementById('fade').style.display = 'none';
            lightBoxVideo.pause();
        }
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function () {

    const tabLinks = document.querySelectorAll(".about-vision-section .nav-tabs .nav-link");
    const tabPanes = document.querySelectorAll(".vision-inner-section .tab-pane");

    function clearAll() {
        tabLinks.forEach(link => link.classList.remove("active"));
        tabPanes.forEach(pane => pane.classList.remove("active"));
    }

    function openTab(tabName) {
        if (!tabName) return;

        clearAll();

        const btn = Array.from(tabLinks).find(l => l.getAttribute("data-tab") === tabName);
        const pane = document.getElementById(tabName);

        if (btn && pane) {
            btn.classList.add("active");
            pane.classList.add("active");
        }
    }

    // URL param veya hash kontrolü
    const params = new URLSearchParams(window.location.search);
    const requestedTab = params.get("tab");
    const hash = window.location.hash ? window.location.hash.replace("#", "") : null;

    if (requestedTab) openTab(requestedTab);
    else if (hash) openTab(hash);

    // Tıklama event
    tabLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const tabName = this.getAttribute("data-tab");
            openTab(tabName);
        });
    });

    // hash değişirse
    window.addEventListener("hashchange", function() {
        const newHash = window.location.hash.replace("#", "");
        openTab(newHash);
    });

});
</script>
</body>
</html>
