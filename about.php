<?php

include 'partials-front/header.php';
?>

<style>
.about-section {
    padding: 50px 0;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

h2 {
    font-size: 2rem; 
    font-weight: bold;
    color: #d9534f;
    text-decoration: underline;
    font-family: 'Oleo Script Swash Caps', cursive;
    text-align: center;
}

.about-section img {
    max-width: 100%;
    height: auto; 
    margin-bottom: 20px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.about-section .row {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.about-section p {
    text-align: center;
}

.text-center {
    display: flex;
    justify-content: center;
}

</style>
<main>
<section id="about" class="about-section py-5 bg-light">
        <div class="container">
          <h2 class="text-center text-decoration-underline about-title mb-4">About <span class="text-primary">Us</span></h2>
          <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">

              <img src="images2/khana1.jpg" alt="Food 1" class="img-fluid rounded shadow mb-3">
              <img src="images2/momo.jpg" alt="Food 2" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <img src="images2/khana3.jpg" alt="Food 3" class="img-fluid rounded shadow">
            </div>

            <div class="col-lg-4">
              <p>
                "At Aago, we bring the fiery essence of Nepal (नेपालको ज्वाला) to your plate. Ignite your taste buds with bold flavors, authentic hospitality, and the warmth of tradition that will keep you coming back for more!"
              </p>
              <div class="collapse" id="readMoreContent">
                <p>
                  At Aago, we ignite your senses with the warmth of tradition and the spark of innovation. Rooted in authentic flavors and inspired by global cuisines, we bring a dining experience that feels like home yet tastes like an adventure. Every dish is a story; every moment, a celebration. Join us by the fire, where passion meets the plate. Welcome to Aago – where flavor finds its flame.
                </p>
              </div>
              <div class="text-center">
              <button class="btn btn-danger mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#readMoreContent" aria-expanded="false" aria-controls="readMoreContent" id="readMoreBtn">
        Read More
    </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      </main>
      <?php

include 'partials-front/footer.php';
?>