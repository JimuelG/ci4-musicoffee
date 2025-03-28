<?= view('header/header') ?>

<?= view('header/nav') ?>


    <section class="about-hero">
        <div class="">
        <div class="about-bg"></div>
            <div class="about-row">
                <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quam distinctio in quia assumenda eligendi exercitationem eveniet veniam libero dolor, amet maxime vitae ipsum laboriosam vero dignissimos similique ad voluptatum possimus facilis numquam. Unde ex nam numquam eligendi est sapiente ipsa et autem corporis similique. Necessitatibus qui iure sequi tempore!</p>
            </div>
        </div>
    </section>
    <section class="about-story">
        <div class="container">
            <div class="about-ourStory">
                <div class="ourStory-left">
                    <img src="<?= base_url('assets/images/owner(3).jpg') ?>" alt="">
                </div>
                <div class="ourStory-right">
                    <h2>Our Story</h2>
                    <h1>How Musicoffee started?</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, et. Aspernatur iusto totam facere incidunt in voluptatum tenetur commodi voluptas?</p>
                </div>
            </div>
        </div>
    </section>
    <div class="about-images">
        <div class="container">
            <div class="row">
                <div class="column">
                    <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quas dignissimos error ad eveniet exercitationem culpa ex laboriosam ea suscipit? Reprehenderit, nobis sapiente enim nesciunt quo facilis qui quasi, aspernatur vero ut, exercitationem voluptas rerum ea animi fuga ullam architecto!</p>
                </div>
                <?php for($i = 1; $i <= 6; $i++): ?>
                <div class="mySlides fade">
                    <img src="<?= base_url('assets/images/slideshow/'.$i . '.jpg')?>" alt="">
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>




<?= view('footer') ?>