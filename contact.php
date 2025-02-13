<?php include "header.php"; ?>


  <body>



<div class="container mt-5" class="contact-form" style="margin: auto; width: 600px;">
    <h1 class="text-center" style="text-align: center;">Contact Us</h1><br>
    <p class="text-center" style="text-align: center;">
      We'd love to hear from you! Please fill out the form below and we'll get
      in touch with you shortly.
    </p><br><br>
    <form action="https://api.web3forms.com/submit" method="POST">
      
      <div class="form-group">
        <input type="hidden" name="access_key" value="d889e6f7-24e4-4d20-8152-23d3e7d7d3fc">
        <label for="name">Name</label>
        <input
          type="text" 
          name="name"
          class="form-control"
          id="name"
          placeholder="Enter your name"
          required
        />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input
          type="email"
          name="email"
          class="form-control"
          id="email"
          placeholder="Enter your email"
          required
        />
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <input
          type="text"
          name="subject"
          class="form-control"
          id="subject"
          placeholder="Enter subject"
          required
        />
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea
          class="form-control"
          name="message"
          id="message"
          rows="5"
          placeholder="Enter your message"
          required
        ></textarea>
      </div>
      <!-- <button type="submit" class="btn btn-primary" >Submit</button> -->
      <button class="add-to-cart-button" style="border: none; margin-top: 1rem;">
        Submit
      </button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



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