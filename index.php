<?php include "header.php";

// Load products from JSON file
$products = json_decode(file_get_contents("product.json"), true)["products"];
?>

<!-- ========== Start Extra Product Section ========== -->
<section class="section-extra-product">
  <div class="container grid grid-three--cols">
    <?php foreach (array_slice($products, 0, 3) as $product) : ?>
      <div class="div-extra grid grid-two--cols">
        <div class="extra-text">
          <p class="sale-tag">New Year Sale</p>
          <h3 class="discount-text">Get <?= round(100 - ($product['discount_price'] / $product['price'] * 100)) ?>% off on <?= htmlspecialchars($product['name']) ?></h3>
          <a href="#" class="shop-now-btn">Shop Now</a>
        </div>
        <div class="extra-img">
          <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- ========== End Extra Product Section ========== -->

<!-- ========== Start Home Product Section ========== -->
<section class="section-products">
  <div class="container">
    <h2 class="section-common--heading text-center">Why Choose Store</h2>
    <p class="section-common--subheading text-center">
      Choose EduHub for a holistic, enriching learning experience that empowers you to achieve your goals.
    </p>
  </div>
  <div class="container grid grid-three--cols">
    <?php foreach ($products as $product) : ?>
      <div class="cards">
        <article class="information card">
          <span class="category"> <?= htmlspecialchars($product['category']) ?> </span>
          <div class="imageContainer">
            <img class="productImage" src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
          </div>
          <h2 class="productName"> <?= htmlspecialchars($product['name']) ?> </h2>
          <div class="productRating">
            <?php 
              $fullStars = 5;
              for ($i = 0; $i < $fullStars; $i++) : 
            ?>
              <i class="fa-solid fa-star"></i>
            <?php endfor; ?>
          </div>
          <p class="productDescription"> <?= htmlspecialchars($product['description']) ?> </p>
          <div class="productPriceElement">
            <p class="productPrice">₹<?= htmlspecialchars($product['discount_price']) ?></p>
            <p class="productActualPrice"><s>₹<?= htmlspecialchars($product['price']) ?></s></p>
          </div>
          <div class="productStockElement">
            <p class="productProperty">Total Stocks Available:</p>
            <p class="productStock"> <?= htmlspecialchars($product['stock']) ?> </p>
          </div>
          <button class="add-to-cart-button" onclick="addToCart('<?= htmlspecialchars($product['name']) ?>', '<?= htmlspecialchars($product['discount_price']) ?>', '<?= htmlspecialchars($product['image']) ?>')">
            <i class="fa-solid fa-cart-shopping"></i> Add To Cart
          </button>
        </article>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- ========== End Home Product Section ========== -->

<script>
  function addToCart(name, price, image) {
    fetch('cart.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: `action=add&name=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}&image=${encodeURIComponent(image)}&quantity=1`
    }).then(response => response.json()).then(data => alert(data.message));
  }
</script>

<?php include "footer.php"; ?>
