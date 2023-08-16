
<ul>
    <?php foreach($products as $product):
        // extract transforme une clef en variable
        extract($product) ?>
            <li><a href=""><?= $productName ?></a></li>

    <?php endforeach; ?>
</ul>