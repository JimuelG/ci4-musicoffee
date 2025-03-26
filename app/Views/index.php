<?= view('header/header') ?>

<body>
    <section class="nav">
        <div class="container">
            <div class="nav-bar">
                    <div class="left-nav">
                        <a id="home" href="<?= base_url('/') ?>">Home</a>
                        <a  href="<?= base_url('/about') ?>">About us</a>
                    </div>
                    <div class="center-nav">
                        <img class="logo" src="<?= base_url("assets/images/logo.png") ?>" alt="logo">
                    </div>
                    <div class="right-nav">
                        <a id="menu" href="<?= base_url('/menu')?>">Menu</a>
                        <a href="<?= base_url('/contact') ?>">Contact Us</a>
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
                    <h1>What makes musicoffee so special?</h1>
                </div>
                <div class="about-items">
                    <div class="item">
                        <svg class="about-svg" fill="#000000" version="1.1" width="800px" height="800px" viewBox="0 0 19.695 19.695" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M10.441,9.3c-0.142,0.011-0.286,0.035-0.43,0.057C9.897,8.789,9.739,8.23,9.505,7.696C8.444,5.266,6.417,3.634,4.46,3.634
                                        c-0.454,0-0.889,0.09-1.293,0.267C1,4.847,0.316,8.09,1.645,11.13c0.589,1.349,1.496,2.456,2.561,3.187
                                        c-0.614,1.699-0.424,3.336,0.592,4.373c0.535,0.545,1.259,0.885,2.096,0.979c1.68,0.189,3.674-0.625,5.205-2.123
                                        c2.37-2.32,2.951-5.585,1.296-7.273C12.694,9.557,11.644,9.209,10.441,9.3z M4.981,5.117l0.097-0.41
                                        c1.358,0.315,2.739,1.621,3.511,3.39c0.199,0.455,0.35,0.928,0.45,1.41c-0.51,0.143-1.016,0.36-1.497,0.644
                                        c-0.18-0.285-0.393-0.569-0.643-0.858l-0.225-0.26C4.892,6.973,4.618,6.656,4.981,5.117z M5.919,9.687l0.224,0.259
                                        c0.262,0.303,0.461,0.596,0.632,0.889c-0.052,0.041-0.102,0.089-0.154,0.131c-0.143-0.196-0.295-0.388-0.475-0.577
                                        c-1.198-1.14-1.894-2.209-2.043-3.133C4.416,7.949,5.016,8.644,5.919,9.687z M2.561,10.73C1.453,8.195,1.905,5.543,3.567,4.817
                                        C3.743,4.74,3.928,4.688,4.121,4.659C3.864,4.866,3.176,5.522,3.083,6.641C2.97,8.005,3.77,9.51,5.438,11.091
                                        c0.141,0.15,0.265,0.3,0.382,0.462c-0.131,0.137-0.259,0.277-0.382,0.43c-0.348,0.427-0.65,0.883-0.903,1.362
                                        C3.721,12.718,3.031,11.809,2.561,10.73z M5.59,13.68c0.325-0.565,0.73-1.087,1.203-1.55c0.213-0.209,0.438-0.39,0.664-0.565
                                        c0.327-0.252,0.628-0.451,0.919-0.611c0.69-0.376,1.43-0.604,2.138-0.655c0.243-0.018,0.478-0.014,0.699,0.011
                                        c0.608,0.068,1.101,0.293,1.465,0.664c0.138,0.139,0.253,0.295,0.347,0.463c-0.173-0.101-0.564-0.295-1.1-0.355
                                        c-0.709-0.08-1.427,0.111-2.073,0.551c-0.644,0.438-1.242,1.145-1.777,2.1c-0.24,0.43-0.434,0.826-0.598,1.22
                                        c-0.87,1.782-1.888,1.782-1.919,1.78L4.88,16.684C4.741,15.805,4.979,14.739,5.59,13.68z M10.569,12.359
                                        c-0.527,0.537-0.96,1.34-1.606,2.539L8.8,15.201c-0.467,0.865-0.975,1.441-1.501,1.706c0.368-0.349,0.747-0.843,1.09-1.548
                                        c0.161-0.385,0.339-0.748,0.56-1.142c0.459-0.819,0.952-1.411,1.468-1.762C10.467,12.421,10.518,12.389,10.569,12.359z
                                        M11.397,16.831c-1.321,1.293-3.004,2-4.392,1.844l0,0c-0.614-0.069-1.116-0.299-1.493-0.685
                                        c-0.107-0.109-0.202-0.229-0.283-0.358c0.218,0.164,2.469,1.722,4.452-1.957l0.163-0.303c1.291-2.396,1.49-2.765,3.056-2.972
                                        l0.424-0.057C13.513,13.697,12.814,15.441,11.397,16.831z"/>
                                    <path d="M18.686,2.863h0.002l-0.002-0.002c-0.104-0.703-0.397-1.345-0.892-1.853C17.16,0.358,16.259,0,15.252,0
                                        c-1.353,0-2.767,0.621-3.878,1.704c-0.956,0.931-1.581,2.094-1.76,3.275c-0.059,0.39-0.068,0.767-0.028,1.125l0.01,0.082
                                        c0.098,0.744,0.407,1.402,0.908,1.917c0.633,0.65,1.536,1.009,2.542,1.009c0.001,0,0.001,0,0.001,0
                                        c1.352,0,2.765-0.621,3.878-1.704C18.285,6.083,18.902,4.34,18.686,2.863z M10.618,6.231c-0.067-0.34-0.073-0.711-0.015-1.102
                                        c0.146-0.968,0.667-1.93,1.467-2.708C12.999,1.518,14.157,1,15.252,1c0.744,0,1.376,0.244,1.824,0.706
                                        c0.042,0.043,0.081,0.087,0.119,0.133c-0.265-0.117-0.64-0.234-1.086-0.234c-0.985,0-2.381,0.576-3.409,3.294
                                        c-0.601,1.33-1.348,1.402-1.51,1.402L10.618,6.231z M15.124,2.953c-0.361,0.451-0.683,1.087-1.128,1.969l-0.128,0.254
                                        c-0.221,0.438-0.535,0.929-0.938,1.222c0.242-0.278,0.479-0.643,0.693-1.116C14.052,4.154,14.56,3.37,15.124,2.953z M16.228,6.69
                                        C15.3,7.593,14.14,8.111,13.047,8.111c-0.722,0-1.335-0.229-1.781-0.662c0.237,0.108,0.559,0.208,0.936,0.208
                                        c0.699,0,1.711-0.353,2.562-2.03l0.129-0.255c1.027-2.036,1.159-2.298,2.461-2.402l0.342-0.027
                                        C17.901,4.114,17.378,5.571,16.228,6.69z"/>
                                </g>
                            </g>
                        </svg>
                        <p>We use <strong>100% Arabica</strong> beans, Arabica is generally considered to be "better" than coffee containing Robusta beans because Arabica beans are widely recognized as producinng a higher quality taste.</p>
                    </div>
                    <div class="item">
                        <svg class="about-svg" fill="#000000" width="800px" height="800px" viewBox="0 0 48 48" ><path d="M22.722656 1C22.096656 1 21.538422 1.2847187 21.232422 1.7617188C20.975422 2.1587188 20.941766 2.6315938 21.134766 3.0585938L21.982422 4.9257812L12.951172 10.085938L8 11.058594C6.1714218 11.418982 5.3857051 13.774823 6.6152344 15.167969L13.646484 23.138672L13.769531 23.996094C13.95353 25.281475 14.838748 26.3285 16 26.771484L16 29.189453C14.858544 29.577976 13.958457 30.540277 13.695312 31.765625 A 1.50015 1.50015 0 0 0 13.693359 31.767578L11.810547 40.556641C11.217666 43.325565 13.378948 46 16.210938 46L31.787109 46C34.619099 46 36.782055 43.326287 36.1875 40.556641L34.302734 31.767578C34.041211 30.542264 33.140226 29.580715 32 29.191406L32 26.771484C33.161392 26.328534 34.047073 25.281585 34.230469 23.996094L34.230469 23.994141L35.800781 13L39.5 13C39.795045 13 40 13.204955 40 13.5L40 15.833984C40 16.052806 39.9527 16.269938 39.859375 16.470703L36.640625 23.365234 A 1.5002761 1.5002761 0 1 0 39.359375 24.634766L42.578125 17.738281 A 1.50015 1.50015 0 0 0 42.580078 17.734375C42.856711 17.139134 43 16.491162 43 15.833984L43 13.5C43 11.585045 41.414955 10 39.5 10L34.898438 10L26.023438 4.9277344L26.871094 3.0585938C27.064094 2.6315938 27.030438 2.1587188 26.773438 1.7617188C26.467437 1.2847188 25.909203 1 25.283203 1L22.722656 1 z M 24 7.2285156L28.849609 10L19.148438 10L24 7.2285156 z M 15.228516 13L32.771484 13L31.259766 23.570312 A 1.50015 1.50015 0 0 0 31.259766 23.572266C31.223383 23.828194 31.026685 24 30.765625 24L29 24L19 24L17.234375 24C16.975053 24 16.777026 23.827329 16.740234 23.570312L16.595703 22.5625 A 1.50015 1.50015 0 0 0 16.595703 22.558594 A 1.50015 1.50015 0 0 0 16.523438 22.060547L15.228516 13 z M 12.240234 13.283203L12.875 17.728516L9.4375 13.833984L12.240234 13.283203 z M 19 27L29 27L29 29L19 29L19 27 z M 17.117188 32L30.882812 32C31.12698 32 31.318769 32.155626 31.369141 32.392578 A 1.50015 1.50015 0 0 0 31.371094 32.394531L33.253906 41.185547C33.461304 42.151853 32.77512 43 31.787109 43L16.210938 43C15.222926 43 14.537068 42.152576 14.744141 41.185547L16.626953 32.396484C16.678345 32.157173 16.873021 32 17.117188 32 z"/></svg>
                        <p><strong>Freshly brewed coffee</strong> with <strong>Moka Pot.</strong> Brewing coffee with Moka pot is that it produces a strong, rich, and flavorful cup of coffee with a similar character to espreso.</p>
                    </div>
                    <div class="item">
                        <svg class="about-svg" fill="#E8F2F1" width="800px" height="800px" viewBox="0 0 24 24" >
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.55132 2.68377C4.68743 2.27543 5.06957 2 5.5 2H18.5C18.9304 2 19.3126 2.27543 19.4487 2.68377L20.2208 5H20.5C21.0523 5 21.5 5.44772 21.5 6C21.5 6.55228 21.0523 7 20.5 7H19.5H19.405L17.995 21.0995C17.9439 21.6107 17.5138 22 17 22H7C6.48625 22 6.05608 21.6107 6.00496 21.0995L4.59501 7H4.5H3.5C2.94772 7 2.5 6.55228 2.5 6C2.5 5.44772 2.94772 5 3.5 5H3.77924L4.55132 2.68377ZM6.60499 7L7.90499 20H16.095L17.395 7H6.60499ZM18.1126 5H5.88743L6.22076 4H17.7792L18.1126 5Z"/>
                        </svg>
                        <p>Nothing beats coffee while listening to music. <strong>Your Daily Dose of Harmony</strong></p>
                    </div>
                </div>
                <a href="<?= base_url('/about') ?>"><input type="button" value="LEARN MORE"></a>
            </div>
        </div>
    </section>
    <section class="featuring">
        <div class="container">
            <div class="feature">
                <div class="feature-header">
                    <h1>Our best sellers, for you</h1>
                </div>
                <div class="feature-item">
                    <div class="item">
                        <img src="<?= base_url('assets/images/products/Spanish Latte.jpg') ?>" alt="">
                        <p>Spanish Latte</p>

                    </div>
                    <div class="item">
                        <img src="<?= base_url('assets/images/products/Cafe Mocha.jpg') ?>" alt="">
                        <p>Cafe Mocha</p>
                    </div>
                    <div class="item">
                        <img src="<?= base_url('assets/images/products/Caramel Macchiato.jpg') ?>" alt="">
                        <p>Caramel Macchiato</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-letter">
        <div class="container">
            <div class="letter">
                <div class="letter-header">
                    <h1>Join Our News Letter</h1>
                </div>
                <div class="letter-form">
                    <div class="txt_field">
                        <input class="letter-input" type="text" required>
                        <span></span>
                        <label class="label">Name</label>
                    </div>
                    <div class="txt_field">
                        <input class="letter-input" type="email" required>
                        <span></span>
                        <label class="label">Email</label>
                    </div>
                </div>
                <p class="letter-submit">
                    Subcribe
                    <svg class="letter-svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none" >
                        <g id="Communication / Paper_Plane">
                            <path id="Vector" d="M10.3078 13.6923L15.1539 8.84619M20.1113 5.88867L16.0207 19.1833C15.6541 20.3747 15.4706 20.9707 15.1544 21.1683C14.8802 21.3396 14.5406 21.3683 14.2419 21.2443C13.8975 21.1014 13.618 20.5433 13.0603 19.428L10.4694 14.2461C10.3809 14.0691 10.3366 13.981 10.2775 13.9043C10.225 13.8363 10.1645 13.7749 10.0965 13.7225C10.0215 13.6647 9.93486 13.6214 9.76577 13.5369L4.57192 10.9399C3.45662 10.3823 2.89892 10.1032 2.75601 9.75879C2.63207 9.4601 2.66033 9.12023 2.83169 8.84597C3.02928 8.52974 3.62523 8.34603 4.81704 7.97932L18.1116 3.88867C19.0486 3.60038 19.5173 3.45635 19.8337 3.57253C20.1094 3.67373 20.3267 3.89084 20.4279 4.16651C20.544 4.48283 20.3999 4.95126 20.1119 5.88729L20.1113 5.88867Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </p>
            </div>
        </div>
    </section>

<?= view('footer') ?>