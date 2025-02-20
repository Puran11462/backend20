
<style>
.hero {
    min-height: 100vh; 
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    background: url(images2/hero.jpg) no-repeat center center/cover;
    position: relative;
}


.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(11, 11, 11, 0.5);
}


.hero-content {
    position: relative;
    z-index: 1;
    padding: 20px;
}
.hero-text {
    font-size: 20px;
    font-family: Poppins, sans-serif;
    font-weight: 400;
    margin-bottom: 20px;
    line-height: 1.6;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7)
}
.hero-title {
    font-family: 'Oleo Script Swash Caps', cursive;
    font-weight: 19999px;
    font-size:70px;}



html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

main {
    flex: 1; ''
}


.footer-custom {
    background: black;
    color: white;
    padding: 20px 0;
    text-align: center;
}

</style>
<div class="hero">
    <div class="overlay"></div>
    <div class="container text-center hero-content">
        <h1 class="hero-title">Delicious Khana Set</h1>
        <p class="hero-text">
            Delicious Khana Set – where tradition meets taste. Savor the authentic flavors of Nepal, crafted with love.
            From rich curries to tangy pickles, every bite tells a story. Experience the perfect harmony of culture and cuisine!
        </p>
        <a href="Explore.html" class="btn btn-danger btn-lg">Menu</a>
    </div>
</div>
