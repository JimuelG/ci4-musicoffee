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
                    <form action="<?= base_url('/send-message') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="text-field">
                            <label>Name</label>
                            <input name="message_name" type="text" required>
                            <span></span>
                        </div>
                        <div class="text-field">
                            <label>Email</label>
                            <input name="message_email" type="text" required>
                            <span></span>
                        </div>
                        <div class="text-field">
                            <label>Phone</label>
                            <input name="message_phone" type="text" required>
                            <span></span>
                        </div>
                        <div class="text-field">
                            <label>Message us</label>
                            <textarea name="message_body" type="text" rows="8" cols="50" required></textarea>
                            <span></span>
                        </div>
                        <input class="contact-submit" type="submit" value="Send Message">
                    </div>
                    </form>
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
    <section class="location">
        <div class="container">
            <div class="location-body">
                <div class="location-left">
                    <h1>
                        <svg version="1.0" id="Layer_1" width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                        <path fill="#231F20" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24
                            C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24
                            C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"/>
                        </svg>
                        Diwa ng Tarlac, Tarlac City
                    </h1>
                    <h1>
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                        <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#1C274C"/>
                        </svg>
                        0909 - 721 5339 / 0945 - 173 - 4824
                    </h1>
                    <h1>
                        <svg version="1.1" id="_x32_" width="800px" height="800px" viewBox="0 0 512 512"  xml:space="preserve">
                        <g>
                            <path class="st0" d="M496.563,68.828H15.438C6.922,68.828,0,75.75,0,84.281v30.391l256,171.547l256-171.563V84.281 C512,75.75,505.078,68.828,496.563,68.828z"/>
                            <path class="st0" d="M0,178.016v203.391c0,34.125,27.641,61.766,61.781,61.766h388.438c34.141,0,61.781-27.641,61.781-61.766V178 L256,349.563L0,178.016z"/>
                        </g>
                        </svg>
                        musicoffee20@gmail.com
                    </h1>
                </div>  
                <div class="location-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233.2994155189789!2d120.58749707521933!3d15.483169063297854!2m3!1f270!2f0!3f0!3m2!1i1024!2i768!4f35!5e1!3m2!1sen!2sph!4v1742970816544!5m2!1sen!2sph" width="700" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    </section>

<?= view('footer') ?>