<main>
    <section>
        <img src="<?=$poster_url?> " width="300" alt="Poster de <?= $title ?>"
            style="border-radius: 16px">
    </section>
    <hgroup>
        <h3><?=$title?> - <?= $until_message ?></h3>
        <p>fecha de estreno: <?= $release_date?></p>
        <p>la siguiente es: <?= $following_production;?></p>
    </hgroup>
</main>