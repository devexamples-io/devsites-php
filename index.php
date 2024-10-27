<?php
$data = json_decode(file_get_contents('./data.json'), true); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DevSites</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./styles/style.css" rel="stylesheet" />
        <script src="./scripts/main.js"></script>
    </head>
    <body>
        <header>
            <h1>DevSites</h1>
            <div>Technologies and services related to PHP development</div>
        </header>
        <main>
            <div class="sites">
                <?php
                if (!empty($data['sites'])) :
                    foreach ($data['sites'] as $site) : ?>
                        <a class="site" href="<?= $site['url'] ?>" target="_blank" data-category="<?= $site['category_key'] ?>">
                            <img src="<?= $site['image_url'] ?>" alt="<?= $site['name'] ?>">
                            <div class="site-name"><?= $site['name'] ?></div>
                        </a>
                        <?php
                    endforeach;
                endif ?>
            </div>
            <div class="categories">
                <h2>Categories</h2>
                <div class="category-links">
                    <?php
                    if (!empty($data['categories'])) :
                        foreach ($data['categories'] as $category) : ?>
                            <span class="category" data-category="<?= $category['key'] ?>"><?= $category['text'] ?></span>
                            <?php
                        endforeach;
                    endif ?>
                </div>
            </div>
        </main>
    </body>
</html>
