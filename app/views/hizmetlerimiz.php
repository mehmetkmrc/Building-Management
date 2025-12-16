<!-- SUB BANNER SECTION START -->
    <section class="sub-banner-section w-100 float-left d-flex align-items-center">
    <div class="container">
        <div class="sub-banner-inner-section" data-aos="fade-up" data-aos-duration="700">
            <h1>HİZMETLER</h1>
        </div>
    </div>
</section>
<!-- ALT BANNER BÖLÜMÜ BURADA BİTİYOR -->

<!-- TEMEL HİZMETLER BÖLÜMÜ BURADA BAŞLIYOR -->
<section class="core-services-section w-100 float-left padding-top padding-bottom">
    <div class="container">
        <div class="generic-title text-center" data-aos="fade-up" data-aos-duration="700">
            <h2>TEMEL HİZMETLER</h2>
        </div>

        <div class="core-services-inner-con" data-aos="fade-up" data-aos-duration="700">
            <?php foreach ($temelHizmetler as $hizmet): ?>
                <div class="core-service-box">
                    <figure>
                        <img src="<?= $hizmet['image'] ?>" alt="<?= $hizmet['title'] ?>" loading="lazy">
                    </figure>

                    <h4><?= nl2br(strtoupper($hizmet['title'])) ?></h4>

                    <ul>
                        <?php foreach (explode("\n", trim($hizmet['summary'])) as $item): ?>
                            <?php if (trim($item)): ?>
                                <li><?= trim($item) ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                    <div class="service-btn">
                        <a href="/hizmetlerimiz/show/<?= $hizmet['slug'] ?>">DAHA FAZLA OKU</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- TEMEL HİZMETLER BÖLÜMÜ BURADA BİTİYOR -->

<!-- MİSYON BÖLÜMÜ BURADA BAŞLIYOR -->
<section class="mission-section w-100 float-left padding-top padding-bottom">
    <div class="container">
        <div class="mission-inner-box text-center" data-aos="fade-up" data-aos-duration="700">
            <h2>MİSYONUMUZ <br> İŞLERİNİZİ VE DAHA FAZLASINI KORUMAK</h2>
            <p>Lorem ipsum yalnızca boş metindir, dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                <br> tempor incididunt ut labore et dolore magna aliqua lonm andhn.
            </p>
            <div class="generic-btn">
                <a href="single-service.html">DAHA FAZLA KEŞFET</a>
            </div>
        </div>
    </div>
</section>
<!-- MİSYON BÖLÜMÜ BURADA BİTİYOR -->
 
    <!-- MİSYON BÖLÜMÜ BİTTİ -->

<?php foreach ($tamamlayiciHizmetler as $index => $hizmet): ?>
<section class="supplementory-section 
    <?= $index % 2 !== 0 ? 'supplementory-reverse-order-section' : '' ?> 
    w-100 float-left padding-top padding-bottom">


    <div class="container">
        
        <div class="supplementory-inner-section" data-aos="fade-up" data-aos-duration="700">

            <div class="supplementory-left-box">
                <h2><?= strtoupper($hizmet['title']) ?></h2>
                <p><?= trim($hizmet['summary']) ?></p>

                <div class="service-btn">
                    <a href="/hizmetlerimiz/show/<?= $hizmet['slug'] ?>">DAHA FAZLA OKU</a>
                </div>
            </div>

            <div class="supplementory-right-box">
                <div class="supplementory-right-img-box">
                    <figure class="mb-0">
                        <img src="<?= $hizmet['image'] ?>" alt="<?= $hizmet['title'] ?>" loading="lazy">
                    </figure>

                    <?php if (!empty($hizmet['imageicon'])): ?>
                        <figure class="mb-0 supplementory-icon">
                            <img src="<?= $hizmet['imageicon'] ?>" loading="lazy">
                        </figure>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- TAMAMLAYICI HİZMETLER BÖLÜMÜ BİTTİ -->

<!-- EN İYİ DENEYİM BÖLÜMÜ BAŞLIYOR -->
<section class="best-experience-section w-100 float-left">
    <div class="container-fluid">
        <div class="register-inner-section" data-aos="fade-up" data-aos-duration="700">
            <h2>EN İYİ MÜŞTERİ DENEYİMİNİ SUNUYORUZ</h2>
            <div class="generic-btn">
                <a href="contact.html">HAYDİ BAŞLAYALIM</a>
            </div>
        </div>
    </div>
</section>
<!-- EN İYİ DENEYİM BÖLÜMÜ BİTTİ -->
