<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Owl Carousel Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Jewellery Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Items List
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#card">Our Products</a></li>
            <li><a class="dropdown-item" href="#head">Category</a></li>
          </ul>
        </li>
      </ul>
      <form>
        <div class="sign-in-up">
          <a href="db-folder/login_form.php">Login </a>
          <a href="db-folder/register_form.php">Register</a>
        </div>
      </form>
    </div>
  </div>
</nav>




<div id="carouselExampleIndicators" class="carousel slide">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src=".asset/banner images/banner/baner-1.webp" class="d-block w-100 " alt="...">
  </div>
  <div class="carousel-item">
    <img src=".asset/banner images/banner/banner-2.webp" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src=".asset/banner images/banner/banner-3.webp" class="d-block w-100" alt="...">
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<br>
<div class="container-fluid">
  <img src=".asset/banner images/card banner/card ban (1).jpg" class="responsive-img" alt="Responsive Image">
</div>
<br>

<div class="card" id="card">
<div class="card-body">
  <h1 style="height:150px; width: 100%; display: flex; justify-content: center; align-items: center; cursor: pointer; font-weight: 700;">OUR PRODUCTS</h1>
  
  <!-- Flex container for cards -->
  <div class="card-container " style="display: flex; gap: 35px; justify-content: center; flex-wrap: wrap; text-align:center">
  <!-- Card 1 -->
<div class="card product" style="width: 20rem; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
  <img src=".asset/banner images/card images/earring2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Earring</h5>
    <p>Price=$57</p>
    <p class="card-text">A silver or platinum solitaire ring with a single round-cut diamond, presented in a ring box.</p>
    <a href="db-folder/register_form.php" class="btn btn-primary" onclick="openSignUpForm('Earring', 57)">Shop Now</a>
  </div>
</div>

<!-- Card 2 -->
<div class="card product" style="width: 20rem; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
  <img src=".asset/banner images/card images/gold necklace.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Necklace</h5>
    <p>Price=$78</p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="db-folder/register_form.php" class="btn btn-primary" onclick="openSignUpForm('Necklace', 78)">Shop Now</a>
  </div>
</div>

<!-- Card 3 -->
<div class="card product" style="width: 20rem; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
  <img src=".asset/banner images/card images/woment watch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Watch</h5>
    <p>Price=$34</p>
    <p class="card-text">Two elegant women's wristwatches, one in rose gold and the other in silver, both are classic dials.</p>
    <a href="db-folder/register_form.php" class="btn btn-primary" onclick="openSignUpForm('Watch', 34)">Shop Now</a>
  </div>
</div>

<!-- Card 4 -->
<div class="card product" style="width: 20rem; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
  <img src=".asset/banner images/card images/bangles2 (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bangles</h5>
    <p>Price=$64</p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="db-folder/register_form.php" class="btn btn-primary" onclick="openSignUpForm('Bangles', 64)">Shop Now</a>
  </div>
</div>

<!-- Card 5 -->
<div class="card product" style="width: 20rem; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
  <img src=".asset/banner images/card images/ring engage.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Engagement Ring</h5>
    <p>Price=$60</p>
    <p class="card-text">A silver ring with a combination of blue gemstones and smaller clear crystals arranged around the band.</p>
    <a href="db-folder/register_form.php" class="btn btn-primary" onclick="openSignUpForm('Engagement Ring', 60)">Shop Now</a>
  </div>
</div>

<!-- Card 6 -->
<div class="card product" style="width: 20rem; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
  <img src=".asset/banner images/card images/ring.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Diamond Ring</h5>
    <p>Price=$86</p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="db-folder/register_form.php" class="btn btn-primary" onclick="openSignUpForm('Diamond Ring', 86)">Shop Now</a>
  </div>
</div>

<!-- Card 7 -->
<div class="card product" style="width: 20rem; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease, box-shadow 0.3s ease;">
  <img src=".asset/banner images/card images/gold watch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Watch</h5>
    <p>Price=$65</p>
    <p class="card-text">A gold watch with multicolored gemstone accents around the dial and a matching gold bracelet.</p>
    <a href="db-folder/register_form.php" class="btn btn-primary" onclick="openSignUpForm('Gold Watch', 65)">Shop Now</a>
  </div>
</div>

    
  </div>
  
<br>
<!-- category -->
<div class="card heading head" id="head">
<h1 style="text-align: center;">SHOP BY <a href="#">CATEGORY</a></h1>
<div class="card-body">
  
  <br>
  <!-- Flex container for cards -->
  <div class="card-container" style="display: flex; gap: 35px; justify-content: center; flex-wrap: wrap; text-align:center;">
  
    <!-- Card 1 -->
    <div class="card product " style="width: 20rem;transition: transform 0.3s ease, box-shadow 0.3s ease;">
      <img src=".asset/banner images/category images/wedding necklace.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">WEDDING NECKLACES</h6> 
      </div>
    </div>
    
    <!-- Card 2 -->
    <div class="card product" style="width: 20rem;transition: transform 0.3s ease, box-shadow 0.3s ease;">
      <img src=".asset/banner images/category images/jos-alukkas-TRENDY-GOLD-RINGS-20241016150651436513.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">TRENDY GOLD RINGS</h6> 
      </div>
    </div>
    
    <!-- Card 3 -->
    <div class="card product" style="width: 20rem;transition: transform 0.3s ease, box-shadow 0.3s ease;">
      <img src=".asset/banner images/category images/gold necklace.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">GOLD NECKLACES</h6>
      </div>
    </div>
    
    <!-- card 4 -->
    <div class="card product" style="width: 20rem;transition: transform 0.3s ease, box-shadow 0.3s ease;">
      <img src=".asset/banner images/category images/gold earring.webp" class="card-img-top" alt="...transparent background image">
      <div class="card-body">
        <h6 class="card-title">GOLD EARRINGS</h6>
      </div>
    </div>
    
    <!-- card 5 -->
    <div class="card product" style="width: 20rem;transition: transform 0.3s ease, box-shadow 0.3s ease;">
      <img src=".asset/banner images/category images/gold bangles.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">GOLD BANGLES</h6>
      </div>
    </div>
    
    <!-- card 6 -->
    <div class="card product" style="width: 20rem;transition: transform 0.3s ease, box-shadow 0.3s ease;">
      <img src=".asset/banner images/category images/ear ring.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">GOLD EARRINGS</h6>
      </div>
    </div>
    
    <!-- card 7 -->
    <div class="card product" style="width: 20rem;transition: transform 0.3s ease, box-shadow 0.3s ease;">
      <img src=".asset/banner images/category images/diamond ring.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">DIAMOND RINGS</h6>
      </div>
    </div>

     <!-- card 8 -->
     <div class="card product" style="width: 20rem;transition: transform 0.3s ease, box-shadow 0.3s ease;">
      <img src=".asset/banner images/category images/diamond pendants.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">DIAMOND PENDANTS</h6>
      </div>
    </div>
    
  </div>
  
</div>
</div> 

<br>


  <div class="container">
    <h2 class="text-center">Exclusive Jewellery for you!</h2><br>
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Bangle--JAFGZI-a1VN (1).png" alt="" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Bangle--JAFGZI-a1VN.png" alt="" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Bracelet--JASOB0-R5YV.png" alt="" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Necklace--JA5YZ0-QzK9.png" alt="transparent background image" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Necklace--JA8Q4C-zq6a.png" alt="transparent background image" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Necklace--JAO2EL-30AL.png" alt="transparent background image" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Necklace--JASN1X-P1yV.png" alt="transparent background image" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Necklace--JAW1OL-3cGn (1).png" alt="transparent background image" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Necklace--JAW1OL-3cGn.png" alt="transparent background image" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Necklace--JAW1OL-3cGn.png" alt="transparent background image" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Ring--JAM9DI-LfCz.png" alt="transparent background image" srcset=""></div>
        <div class="item"><img src=".asset/banner images/owl carousel images/large_jos-alukkas-Gold-Ring--JAWEYD-QUgH.png" alt="transparent background image" srcset=""></div>
      </div>
    </div>
  </div>
  <footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <!-- Column 1: About Us -->
      <div class="col-md-4 mb-4">
        <h5>About Us</h5>
        <p>We are a premium jewelry shop offering exclusive designs for all your needs. Discover our handcrafted collections of rings, necklaces, earrings, and more!</p>
      </div>
      <!-- Column 2: Quick Links -->
      <div class="col-md-4 mb-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Home</a></li>
          <li><a href="#" class="text-white">Shop Now</a></li>
          <li><a href="#" class="text-white">Contact Us</a></li>
          <li><a href="#" class="text-white">Terms & Conditions</a></li>
        </ul>
      </div>
      <!-- Column 3: Social Media -->
      <div class="col-md-4 mb-4">
        <h5>Follow Us</h5>
        <div>
          <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i> Facebook</a>
          <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i> Instagram</a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i> Twitter</a>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Bottom Row: Contact Info -->
      <div class="col-12 text-center mt-4">
        <p>&copy; 2024 Jewellery Shop. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: { items: 1 },
          600: { items: 3 },
          1000: { items: 5 }
        }
      });
    });

  let cart = [];

  // Open sign-up form and pass product details
  function openSignUpForm(productName, productPrice) {
    // Check if user is signed in (use PHP session or other methods)
    if (!sessionStorage.getItem("user")) {
      document.getElementById("signUpModal").style.display = "block";
      document.getElementById("signUpForm").onsubmit = function(e) {
        e.preventDefault();
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;
        
        // Perform sign-up or sign-in AJAX call
        fetch('process_signup.php', {
          method: 'POST',
          body: new URLSearchParams({
            username: username,
            password: password
          })
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            sessionStorage.setItem("user", username); // Store user in session
            addToCart(productName, productPrice); // Add product to cart after successful login
            document.getElementById("signUpModal").style.display = "none";
            displayCart();
          } else {
            alert(data.message); // Handle error (e.g., invalid credentials)
          }
        });
      };
    } else {
      addToCart(productName, productPrice); // If logged in, add to cart directly
      displayCart();
    }
  }

  // Add product to cart
  function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice, quantity: 1 });
  }

  // Display cart
  function displayCart() {
    let cartHTML = '';
    cart.forEach((item, index) => {
      cartHTML += `
        <div>${item.name} - $${item.price} x <input type="number" value="${item.quantity}" onchange="updateQuantity(${index}, this.value)"> = $${item.price * item.quantity}</div>
      `;
    });
    document.getElementById("cartItems").innerHTML = cartHTML;
    document.getElementById("cartModal").style.display = "block";
  }

  // Update quantity in the cart
  function updateQuantity(index, quantity) {
    cart[index].quantity = parseInt(quantity);
    displayCart();
  }

  // Checkout
  function checkout() {
    fetch('process_checkout.php', {
      method: 'POST',
      body: JSON.stringify(cart),
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert('Your order has been successfully placed!');
        cart = []; // Clear cart after successful checkout
        displayCart();
      } else {
        alert('Checkout failed: ' + data.message);
      }
    });
  }
</script>
</body>
</html>
