<?php

include 'partials-front/header.php';
?>

<style>
    .menu-section {
    padding: 60px 15px; 
    text-align: center;
    background-color: #fff;
}

.menu-section h2 {
    font-size: 2rem;
    font-weight: bold;
    color: #d9534f;
    text-decoration: underline;
    font-family: 'Oleo Script Swash Caps', cursive;
}

.menu-section p {
    font-size: 1rem;
    margin-bottom: 40px;
    color: #555;
}

.card {
    background: #f8f8f8;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    width: 100%; 
    height: auto;
    border-radius: 10px;
}

.card-body h4 {
    font-family: "Oleo Script Swash Caps", cursive;
    font-weight: bold;
    font-size: 1.5rem;
    color: #333;
}

.card-body span {
    font-size: 1.1rem;
    color: gray;
}

.card-body p {
    font-size: 1rem;
    color: #666;
    margin-bottom: 15px;
}

.btn-danger {
    font-size: 14px;
    padding: 8px 20px;
    border-radius: 30px;
    transition: 0.3s ease-in-out;
}

.btn-danger:hover {
    background-color: #b52b27;
}

</style>
<?php ?>
      <section id="menu" class="menu-section py-5">
        <div class="container">
            <h2 class="text-center text-decoration-underline">Our <span class="text-primary">Menu</span></h2>
            <p class="text-center mb-5">Our menu at Aago showcases authentic Nepali khana, from comforting dal-bhat to flavorful momos and sekuwa.</p>
            <div class="row text-center">
        <div class="container py-4">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
               <div class="col">
                <div class="card">
                  <img src="images2/thakali.jpg" class="card-img-top" alt="Food 1">
                  
                  <div class="card-body text-center">
                    <h4><strong>Thakali Khana Set</strong> <span>€15</span></h4>
                    <p>Authentic taste of Nepal with flavorful Thakali Khana.</p>


                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="images2/jholmomo.jpg" class="card-img-top" alt="Food 2">
                  <div class="card-body text-center">
                    <h4><em>Jhol Momo Special</em> <span>€13</span></h4>
                    <p>Savory Jhol Momo, juicy dumplings in flavorful broth.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="images2/veterian thali meal.jpg" class="card-img-top" alt="Food 3">
                  <div class="card-body text-center">
                    <h4><em>Vegetarian Thali Meal</em> <span>€20</span></h4>
                    <p>A perfect harmony of traditional Nepali flavors.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="explore-more">
            <a href="explore.php" class="btn btn-primary">Explore More</a>
          </div>
           </section>
           <?php

include 'partials-front/footer.php';
?>
