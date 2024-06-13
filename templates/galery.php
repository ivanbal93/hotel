<section id="portfolio" class="portfolio section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Галерея</h2>
    </div>

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Все фотографии</li>
                <li data-filter=".filter-app">Гостиничные номера</li>
                <li data-filter=".filter-product">Территория</li>
            </ul>
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">                
                <?php foreach (getGalery() as $info) { ?>
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $info['filter'] ?>">
                        <div class="portfolio-content h-100">
                            <img src=<?= $info['img'] ?> class="img-fluid" alt="" width="400px" height="300px">
                            <div class="portfolio-info">
                                <p><?= $info['title'] ?></p>
                                <a href=<?= $info['img'] ?> data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>  
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</section>