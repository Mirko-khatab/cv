<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="css/styles.css">

        <title>Responsive resume cv</title>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">aland</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class='bx bx-home nav__icon'></i>Home
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#profile" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>Profile
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#education" class="nav__link">
                                <i class='bx bx-book nav__icon'></i>Education
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class='bx bx-receipt nav__icon'></i>Skills
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#experience" class="nav__link">
                                <i class='bx bx-briefcase-alt nav__icon'></i>Experiance
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#certificates" class="nav__link">
                                <i class='bx bx-award nav__icon'></i>Certificates
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#references" class="nav__link">
                                <i class='bx bx-link-external nav__icon'></i>References
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main bd-container">
            <!-- All elements within this div, is generated in PDF -->
            <div class="resume" id="area-cv">
                <div class="resume__left">
                    <!--========== HOME ==========-->
                    <section class="home" id="home">
                        <div class="home__container section bg-grid">
                            <div class="home__data bg-grid">
                                <img src="assets/img/DSC.JPG" alt="profile img" class="home__img">

                                <h1 class="home__title"><?php echo $_POST['fname'] ?> <b><?php echo $_POST['lname'] ?></b></h1>
                                <h3 class="home__profession">Web Developer</h3>

                                <!-- Button to download your CV saved in the pdf folder . Available for desktop. -->
                                <div>
                                    <a download="" href="assets/pdf/myResume.pdf" class="home__button-movil">Download</a>
                                </div>
                            </div>

                            <div class="home__address bg-grid">
                                <span class="home__information">
                                    <i class='bx bx-map home__icon'></i>Av.Vrsac - Serbia
                                </span>

                                <span class="home__information">
                                    <i class='bx bx-envelope home__icon'></i>fearpally@gmail.com
                                </span>

                                <span class="home__information">
                                    <i class='bx bx-phone home__icon'></i>+38160030010 
                                </span>
                            </div>
                        </div>
                        
                        <!-- Theme change button -->
                        <i class='bx bx-moon change-theme' title="Theme" id="theme-button"></i>

                        <!-- Button to generate and download the pdf. Available for desktop. -->
                        <i class='bx bx-download generate-pdf' title="Generate PDF" id="resume-button"></i>

                    </section>          
                    
                    <!--========== SOCIAL ==========-->
                    <section class="social section">
                        <h2 class="section-title">SOCIAL</h2>

                        <div class="social__container bg-grid">
                            <a href="https://www.linkedin.com/" target="_blank" class="social__link">
                                <i class='bx bxl-linkedin-square social__icon'></i>@Zekii
                            </a>
                        </div>
                        <div class="social__container bg-grid">
                            <a href="https://www.facebook.com/" target="_blank" class="social__link">
                                <i class='bx bxl-facebook social__icon'></i>@Zekii
                            </a>
                        </div>
                        <div class="social__container bg-grid">
                            <a href="https://www.instagram.com/" target="_blank" class="social__link">
                                <i class='bx bxl-instagram social__icon'></i>@Zekii
                            </a>
                        </div>
                    </section>

                    <!--========== PROFILE ==========-->
                    <section class="profile section" id="profile">
                        <h2 class="section-title">Profile</h2>
                        
                        <p class="profile__description ">I am a person, responsible with their work during 
                            working hours. Finish various technical and higher studies at large universities. 
                            I have several years of experience and achievements in the labor field.</p>
                    </section>
                    
                    <!--========== EDUCATION ==========-->
                    <section class="education section" id="education">
                        <h2 class="section-title">Education</h2>

                        <div class="education__container bg-grid">
                            
                            <div class="education__content">
                                <div class="education__time">
                                    <span class="education__rounder"></span>
                                    <span class="education__line"></span>
                                </div>

                                <div class="education__data bg-grid">
                                    <h3 class="education__title">MASTER OF DESIGN</h3>
                                    
                                    <span class="education__studies">University od Studies</span>
                                    <span class="education__year">2010 - 2015</span>
                                </div>
                            </div>

                            <div class="education__content">
                                <div class="education__time">
                                    <span class="education__rounder"></span>
                                    <span class="education__line"></span>
                                </div>

                                <div class="education__data bg-grid">
                                    <h3 class="education__title">WEB DEVELOPER</h3>
                                    
                                    <span class="education__studies">Institute Studies</span>
                                    <span class="education__year">2016 - 2019</span>
                                </div>
                            </div>

                            <div class="education__content">
                                <div class="education__time">
                                    <span class="education__rounder"></span>
                                    <!-- <span class="education__line"></span> -->
                                </div>

                                <div class="education__data bg-grid">
                                    <h3 class="education__title">MASTER IN UI/UX</h3>
                                    
                                    <span class="education__studies">Institute Studies</span>
                                    <span class="education__year">2019 - 2021</span>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!--========== SKILLS  ==========-->
                    <section class="skills section" id="skills">
                        <h2 class="section-title">Skills</h2>

                        <div class="skills__content bg-grid">
                            <ul class="skills__data">
                                <li class="skills__name">
                                    <span class="skills__circle"></span> Html
                                </li>
                                <li class="skills__name">
                                    <span class="skills__circle"></span> Css
                                </li>
                                <li class="skills__name">
                                    <span class="skills__circle"></span> Sass
                                </li>
                                <li class="skills__name">
                                    <span class="skills__circle"></span> JavaScript
                                </li>
                            </ul>

                            <ul class="skills__data">
                                <li class="skills__name">
                                    <span class="skills__circle"></span> Angular
                                </li>
                                <li class="skills__name">
                                    <span class="skills__circle"></span> Firebase
                                </li>
                                <li class="skills__name">
                                    <span class="skills__circle"></span> React
                                </li>
                                
                            </ul>
                        </div>
                    </section>

                </div>

                <div class="resume__right">
                    <!--========== EXPERIENCE ==========-->
                    <section class="experience section" id="experience">
                        <h2 class="section-title">Experiance</h2>
                        <div class="experiance__container bg-grid">
                            <div class="experiance__content">
                                <div class="experiance__time">
                                    <span class="experiance__rounder"></span>
                                    <span class="experiance__line"></span>
                                </div>
                                <div class="experiance__date bg-grid">
                                    <h3 class="experiance__titile">MASTER OF DESIGN</h3>
                                    <span class="experiance__company">From 2013 to 2015 | Tech Soft</span>
                                    <p class="experiance__descrription">
                                        Work in this company dedicating the best responsibility in 
                                        the area that corresponds, delivering the best results for 
                                        the company and improving productivity.</p>
                                </div>
                            </div>

                            <div class="experiance__content">
                                <div class="experiance__time">
                                    <span class="experiance__rounder"></span>
                                    <span class="experiance__line"></span>
                                </div>
                                <div class="experiance__date bg-grid">
                                    <h3 class="experiance__titile">UI / UX DESIGN AREA</h3>
                                    <span class="experiance__company">From 2017 to 2019 | Adobe Inc</span>
                                    <p class="experiance__descrription">
                                        Work in this company dedicating the best responsibility in 
                                        the area that corresponds, delivering the best results for 
                                        the company and improving productivity.</p>
                                </div>
                            </div>

                            <div class="experiance__content">
                                <div class="experiance__time">
                                    <span class="experiance__rounder"></span>
                                    <!-- <span class="experiance__line"></span> -->
                                </div>
                                <div class="experiance__date bg-grid">
                                    <h3 class="experiance__titile">MOBILE APPLICATION DEVELOPER</h3>
                                    <span class="experiance__company">From 2019 to 2021 | App Tech</span>
                                    <p class="experiance__descrription">
                                        Work in this company dedicating the best responsibility in 
                                        the area that corresponds, delivering the best results for 
                                        the company and improving productivity.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--========== CERTIFICATES ==========-->
                    <section class="certificate section" id="certificates">
                        <h2 class="section-title">Certificates</h2>

                        <div class="certificate__container bg-grid">
                            <div class="certificate__content">
                                <h3 class="certificate__title">Certified for compliance in the work area (2012)</h3>
                                <p class="certificate__description">For meeting the expectations of leading the team to work the specified tasks in the labor field.</p>
                            </div>

                            <div class="certificate__content">
                                <h3 class="certificate__title">Certificate of attendance on computer technology</h3>
                                <p class="certificate__description">For meeting the expectations of leading the team to work the specified tasks in the labor field.</p>
                            </div>

                            <div class="certificate__content">
                                <h3 class="certificate__title">Achievement medal for productivity excellence during the year (2019)</h3>
                                <p class="certificate__description">For meeting the expectations of leading the team to work the specified tasks in the labor field.</p>
                            </div>
                        </div>
                    </section>

                    <!--========== REFERENCES ==========-->
                    <section class="references section" id="references">
                        <h2 class="section-title">References</h2>

                        <div class="references__container bg-grid">
                            <div class="references__content bg-grid">
                                <span class="references__subtitle">Sr. Director</span>
                                <h3 class="references__title">Mr. Clay Doe</h3>
                                <ul class="references__contact">
                                    <li>Phone: 999-777-555</li>
                                    <li>Email: user@email.com</li>
                                </ul>
                            </div>

                            <div class="references__content bg-grid">
                                <span class="references__subtitle">Mag. Developer</span>
                                <h3 class="references__title">Mr. Robbison Bass</h3>
                                <ul class="references__contact">
                                    <li>Phone: 999-777-555</li>
                                    <li>Email: user@email.com</li>
                                </ul>
                            </div>
                        </div>
                        
                    </section>

                    <!--========== LANGUAGES ==========-->
                    <section class="languages section">
                        <h2 class="section-title">Languages</h2>

                        <div class="languages__container">
                            <ul class="languages__content bg-grid">
                                <li class="languages__name">
                                    <span class="languages__circle"></span> Spanish
                                </li>
                                <li class="languages__name">
                                    <span class="languages__circle"></span> English
                                </li>
                                <li class="languages__name">
                                    <span class="languages__circle"></span> French
                                </li>
                            </ul>
                        </div>
                    </section>
                    
                    <!--========== INTERESTS ==========-->
                    <section class="interests section">
                        <h2 class="section-title">Interests</h2>

                        <div class="interests__container bg-grid">
                            <div class="interests__content">
                                <i class='bx bx-headphone interests__icon'></i>
                                <span class="interests__name">Music</span>
                            </div>

                            <div class="interests__content">
                                <i class='bx bxs-plane-alt interests__icon'></i>
                                <span class="interests__name">Travel</span>
                            </div>

                            <div class="interests__content">
                                <i class='bx bx-book interests__icon'></i>
                                <span class="interests__name">Read</span>
                            </div>

                            <div class="interests__content"> 
                                <i class='bx bx-dumbbell interests__icon'></i>
                                <span class="interests__name">Fitness</span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>        
        </main>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>

        <!--========== HTML2PDF ==========-->
        <script src="assets/js/html2pdf.bundle.min.js"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>