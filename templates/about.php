<section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>О нас</h2>
        <h3>Информация</h3>
        <p>Гостевой дом "Звёздное Небо" создан для спокойного семейного отдыха вдали от городской суеты. Насладитесь единением с природой, свежестью воздуха в тени деревьев и шумом морского прибоя. В каждом номере Вы найдёте всё для Вашего комфортного отдыха. Территория гостевого дома полностью в распоряжении наших гостей.</p>
        <hr>
        <h3>Комфортное размещение</h3>
        <ul>
            <?php foreach(getAboutRoom() as $info) { ?>
            <li><?= $info ?></li>
            <?php } ?>
        </ul>
        <hr>
        <h3>Территория</h3>
        <ul>
            <?php foreach(getAboutTerritory() as $info) { ?>
            <li><?= $info ?></li>
            <?php } ?>
        </ul>
        <hr>
        <h3>Дополнительная информация</h3>
        <ul>
            <?php foreach(getAboutAdd() as $info) { ?>
            <li><?= $info ?></li>
            <?php } ?>
        </ul>
    </div>
</section>