<?= view('header/header') ?>

<?= view('header/nav') ?>

    <section class="contact-hero">
        <div class="">
            <div class="contact-row">
                <h1>CONTACT US</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati velit dolore itaque quasi earum voluptatem porro fuga, nulla minus suscipit, perferendis corrupti cupiditate deserunt enim molestiae amet qui distinctio quae.</p>
            </div>
        </div>
    </section>
    <section class="contact-form">
        <div class="container">
            <div class="contact-body">
                <div class="contact-left">
                    <div class="form-body">
                        <div class="text-field">
                            <label>Name</label>
                            <input type="text" required>
                            <span></span>
                        </div>
                        <div class="text-field">
                            <label>Email</label>
                            <input type="text" required>
                            <span></span>
                        </div>
                        <div class="text-field">
                            <label>Phone</label>
                            <input type="text" required>
                            <span></span>
                        </div>
                        <div class="text-field">
                            <label>Message us</label>
                            <textarea type="text" rows="8" cols="50" required></textarea>
                            <span></span>
                        </div>
                        <input class="contact-submit" type="button" value="Send Message">
                    </div>
                </div>
                <div class="contact-right">
                    <div class="contact-sched">
                        <h1>Open Hours</h1>
                        <div class="sched">
                            <p>Monday</p>
                            <p>4:00 PM - 9:00PM</p>
                        </div>
                        <div class="sched">
                            <p>Tuesday</p>
                            <p>4:00 PM - 9:00PM</p>
                        </div>
                        <div class="sched">
                            <p>Wednesday</p>
                            <p>Closed</p>
                        </div>
                        <div class="sched">
                            <p>Thursday</p>
                            <p>4:00 PM - 9:00PM</p>
                        </div>
                        <div class="sched">
                            <p>Friday</p>
                            <p>4:00 PM - 9:00PM</p>
                        </div>
                        <div class="sched">
                            <p>Saturday</p>
                            <p>Closed</p>
                        </div>
                        <div class="sched">
                            <p>Sunday</p>
                            <p>Closed</p>
                        </div>
                    </div>    

                </div>
            </div>
        </div>
    </section>

<?= view('footer') ?>