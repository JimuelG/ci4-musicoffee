<?= view('header/header') ?>

<body>
    <section class="nav">
        <div class="container">
            <div class="nav-bar">
                    <div class="left-nav">
                        <a id="home" href="<?= base_url('/') ?>">Home</a>
                        <a>About us</a>
                    </div>
                    <div class="center-nav">
                        <img class="logo" src="<?= base_url("assets/images/logo.png") ?>" alt="logo">
                    </div>
                    <div class="right-nav">
                        <a id="menu" href="<?= base_url('/menu')?>">Menu</a>
                        <a>Contact Us</a>
                    </div>
            </div>
        </div>
        
    </section>
    <section class="landing-page">
        <div class="container">
            <div class="hero">
                <div class="left-hero">
                    <h1>Your daily dose of harmony</h1>
                    <p>Musicoffee, your emotional support in a cup</p>
                    <a href="<?= base_url('/menu') ?>"><input type="submit" class="cta" value="SHOP NOW"></a>
                </div>
                <div class="right-hero">
                    <img src="<?= base_url("assets/images/hero.png") ?>" alt="hero_image" class="hero-img">
                </div>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="container">
            <div class="about">
                <div class="about-head">

                </div>
                <div class="about-items">
                    <div class="item-one">

                    </div>
                    <div class="item-two">

                    </div>
                    <div class="item-three">

                    </div>
                </div>
            </div>
        </div>
    </section>

<?= view('footer') ?>