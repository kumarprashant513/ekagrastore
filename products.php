<?php include "header.php"; ?>

  <body>


    <!--? ========== Start Home Product Section ========== -->

    <section class="section-products">
      <div class="container product-temp">
        <h2 class="section-common--heading" style="text-align: center">
          Discover Your Next Favorite Book at Unbeatable Prices!
        </h2>
        <p class="section-common--subheading" style="text-align: center">
          Explore our extensive collection of bestsellers, new releases, and
          timeless classics across all genres. Whether you're a fan of fiction,
          non-fiction, mystery, romance, or science fiction, we have something
          for every book lover. Enjoy great deals, fast shipping, and
          exceptional customer service. Start your literary adventure with us
          today and find the perfect book for your next read!
        </p>
      </div>
      <div class="container">
        <div id="productContainer"></div>
      </div>
    </section>

    <!-- Template for a product -->
    <template id="productTemplate">
      <div class="cards" id="cardValue">
        <article class="information [ card ]">
          <span class="category"></span>
          <div class="imageContainer">
            <img class="productImage" src="" alt="" />
          </div>

          <h2 class="productName"></h2>
          <div class="productRating">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
            ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
            ><i class="fa-solid fa-star"></i>
          </div>

          <p class="productDescription"></p>
          <!-- <p class="productPrice"></p> -->
          <div class="productPriceElement">
            <p class="productPrice"></p>
            <p class="productActualPrice"></p>
          </div>

          <div class="productStockElement">
            <p class="productProperty">Total Stocks Available:</p>
            <p class="productStock"></p>
          </div>

          <div class="productQuantityElement">
            <p class="productProperty">Quantity(Pieces)</p>
            <div class="stockElement">
              <button class="cartIncrement">+</button>
              <p class="productQuantity">1</p>
              <button class="cartDecrement">-</button>
            </div>
          </div>

          <button class="add-to-cart-button">
            <i class="fa-solid fa-cart-shopping"></i> Add To Cart
          </button>
        </article>
      </div>
    </template>

    <!--? ========== End Product Section ========== -->

<!-- ========== Start footer Section ========== -->
<footer class="section-footer">
  <div class="footer-container container">
    <div class="content_1"   style="text-align: center;">
      <img src="assets/mridustore-logo.png" alt="logo">
      <p   style="margin: 2rem 2rem;">
        Explore the Latest Books of Your Choice!
      </p>
      <!-- <img src="../IDvaBRgb7pUr.cc/Nj9dgJ98/mMUNzrt9KZPS.png" alt="cards"> -->
    </div>
    <div class="content_2">
      <h4>SHOPPING</h4>
      <a href="#">Educational Books</a>
      <a href="#">Story Books</a>
      <a href="#">Magzines</a>
      <a href="#">Sales &amp; Discount</a>
    </div>
    <div class="content_3">
      <h4>Experience</h4>
      <a href="./contact.html">Contact Us</a>
      <a href="" target="_blank">Payment Method</a>
      <a href="" target="_blank">Delivery</a>
      <a href="" target="_blank">Return and Exchange</a>
    </div>
    <div class="content_4">
      <h4>NEWSLETTER</h4>
      <p>Be the first to know about new<br>arrivals, sales &amp; promos!</p>
      <div class="f-mail">
        <input type="email" placeholder="Your Email">
        <i class="bx bx-envelope"></i>
      </div>
      <hr>
    </div>
  </div>
  <div class="f-design">
    <div class="f-design-txt">
      <p>Design and Code by Developer's Army&#x2764;</p>
    </div>
  </div>
</footer>
    <!-- ========== End footer Section ========== -->


    <!-- JS SCRIPT  -->
    <script src="../DELm6OXI8j1U.com/aos%403.0.0-beta.6/dist/aos.js"></script>
    <script src="script.js"></script>
    <script>
      AOS.init();
    </script>
  

</body></html>