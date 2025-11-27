<h1><?= $title ?></h1>

    <!-- ALT BANNER BÖLÜMÜ BAŞLIYOR -->
<section class="sub-banner-section blog-banner-section w-100 float-left d-flex align-items-center">
    <div class="container">
        <div class="sub-banner-inner-section" data-aos="fade-up" data-aos-duration="700">
            <h1>BLOG YAZILARI</h1>
        </div>
    </div>
</section>
<!-- ALT BANNER BÖLÜMÜ BİTTİ -->

    <!-- BLOG MAIN SECTION START HERE -->
    <div class="blog-tabs-section w-100 float-left padding-top padding-bottom">
        <div class="container">
            <div class="blog-tabs-inner-section" data-aos="fade-up" data-aos-duration="700">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-expanded="true">Hepsi</a>
                    </li>
                   
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="single-blog-outer-con">
                            <?php foreach ($blogs as $blog): ?>
                                <div class="single-blog-box">
                                    <figure class="mb-0">
                                        <img src="<?= $blog['image'] ?>" alt="<?= $blog['title'] ?>" loading="lazy" style="width:100%" >
                                    </figure>

                                    <div class="single-blog-details">
                                        <ul class="list-unstyled">
                                            <li class="position-relative">
                                                <i class="fas fa-user"></i> Posted by <?= $blog['author'] ?? 'Admin' ?>
                                            </li>
                                            <li class="position-relative">
                                                <i class="fas fa-calendar-alt"></i> <?= $blog['date'] ?>
                                            </li>
                                        </ul>

                                        <h4>
                                            <a href="/Blog/show/<?= $blog['slug'] ?>">
                                                <?= $blog['title'] ?>
                                            </a>
                                        </h4>

                                        <p><?= $blog['summary'] ?></p>

                                        <div class="generic-btn2">
                                            <a href="/Blog/show/<?= $blog['slug'] ?>">DAHA FAZLASI</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a>
                                </li>
                                
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG MAIN SECTION END HERE -->




    <!-- EN İYİ DENEYİM BÖLÜMÜ BAŞLIYOR -->
    <section class="best-experience-section w-100 float-left">
        <div class="container-fluid">
            <div class="register-inner-section" data-aos="fade-up" data-aos-duration="700">
                <h2>MÜŞTERİLERİMİZE EN İYİ DENEYİMİ SUNUYORUZ</h2>
                <div class="generic-btn">
                    <a href="contact.html">HADİ BAŞLAYALIM</a>
                </div>
            </div>
        </div>
    </section>
    <!-- EN İYİ DENEYİM BÖLÜMÜ BİTTİ -->
