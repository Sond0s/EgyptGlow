<!-- Reccomended brands& its famous products -->
<?php
$product_shuffle = $product->getData();
shuffle($product_shuffle);
?>
<section id="top-products">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Reccomended brands& its famous products</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_shuffle as $item) {
            ?>
                <div class="item ">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?product_id=%s','product.php',$item['product_id'])?>"><img src="<?php echo $item['image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo  $item['brand_name'] ?? "Unknown";  ?></h6>
                        </div>
                    </div>
                </div>
            <?php } 
            ?>
        </div>
</section>