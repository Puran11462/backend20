<?php include 'partials-front/header.php'; ?>

<style>
#book {
  padding: 60px 15px;
}
#book h2 {
  font-size: 2rem;
  font-weight: bold;
  color: #d9534f;
  text-decoration: underline;
  font-family: 'Oleo Script Swash Caps', cursive;
}
.form-control {
  font-size: 14px;
  padding: 8px 10px;
}
.btn-primary {
  padding: 10px 20px;
  font-size: 14px;
  border-radius: 30px;
}
.back a {
    text-decoration: none;
    background-color: white;
}
.btn-primary:hover {
  background-color: #0056b3;
}
</style>

<section id="book" class="book-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-decoration-underline">
            Reserve a <span class="text-primary">Table</span>
        </h2>
        <p class="text-center mb-5">
            Reserve your table at Aago and experience the warmth of Nepali hospitality.
        </p>

        <div class="container">
            <form action="process_reservation.php" method="POST">
                <div class="row row-cols-1 row-cols-sm-2 g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Enter your name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Your E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="Your email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Your phone number</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Your phone number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="people" class="form-label">No of people</label>
                        <input type="number" class="form-control" name="people" placeholder="Number of people" required>
                    </div>
                    <div class="col-md-6">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="col-md-6">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" name="time" required>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Book now</button>
                </div>
            </form>
            <div class="text-center mt-3">
                <button class="back"><a href="index.php">Back to Top</a></button>
            </div>
        </div>
    </div>
</section>

<?php include 'partials-front/footer.php'; ?>
