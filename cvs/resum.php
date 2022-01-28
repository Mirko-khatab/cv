<?php include"../includ/nav.php";?>
<?php echo x($_GET['id']); ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="stylesheet" href="css/styles.css">

        <title>Responsive resume cv</title>
    </head>
    <body>
       
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Mirko</a>
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
                                 <?php
                                $query=mysqli_query($db,"SELECT * FROM `person` where `person_id`='42'");
                                while($row=mysqli_fetch_assoc($query)){
                                  ?>
                                <img src="../includ/uplod/<?php echo $row['img'] ; ?>" alt="profile img" class="home__img">
                               
                                <h1 class="home__title"><?php echo $row['Name'] ?></h1>
                                

                                <!-- Button to download your CV saved in the pdf folder . Available for desktop. -->
                                <div>
                                    <a download="" href="assets/pdf/myResume.pdf" class="home__button-movil">Download</a>
                                </div>
                            </div>

                            <div class="home__address bg-grid">
                                <span class="home__information">
                                    <i class='bx bx-map home__icon'></i><?php echo $row['addras']; ?>
                                </span>
                               
                                <span class="home__information">
                                    <i class='bx bx-envelope home__icon'></i><?php echo $row['Email']; ?>
                                </span>

                                <span class="home__information">
                                    <i class='bx bx-phone home__icon'></i><?php echo $row['phone']; ?>
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
                            <a href="#" target="_blank" class="social__link">
                                <i class='bx bxl-facebook social__icon'></i>@<?php echo " ". $row['facebook']; ?>
                            </a>
                        </div>
                        <div class="social__container bg-grid">
                            <a href="https://www.instagram.com/" target="_blank" class="social__link">
                                <i class='bx bxl-instagram social__icon'></i>@ <?php echo $row['insta']; ?>
                            </a>
                        </div>
                    </section>
                    

                    <!--========== PROFILE ==========-->
                    <section class="profile section" id="profile">
                        <h2 class="section-title">Profile</h2>
                        
                        <p class="profile__description "><?php echo $row['profile']; ?></p>
                    </section>
                    <?php } ?>
                   
                    <section class="education section" id="education">
                        <h2 class="section-title">Education</h2>
                        <?php
                                $query=mysqli_query($db,"SELECT * FROM `education`");
                                while($row=mysqli_fetch_assoc($query)){
                                ?>
                        <div class="education__container bg-grid">
                            
                            <div class="education__content">
                                <div class="education__time">
                                    <span class="education__rounder"></span>
                                    <span class="education__line"></span>
                                </div>

                                <div class="education__data bg-grid">
                                    <h3 class="education__title"><?php echo $row['edu_title']; ?></h3>
                                    
                                    <span class="education__studies"><?php echo $row['edu_place']; ?></span>
                                    <span class="education__year"><?php echo $row['edu_start_year']." - ". $row['edu_end_year']; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </section>
                                   

                    <!--========== SKILLS  ==========-->
                   
                    <section class="skills section" id="skills">
                        <h2 class="section-title">Skills</h2>
                        <?php
                         $query=mysqli_query($db,"SELECT * FROM `sckill`");
                        while($row=mysqli_fetch_assoc($query)){
                                ?>

                        <div class="skills__content bg-grid">
                            
                            <ul class="skills__data">
                            
                                <li class="skills__name">
                                    <span class="skills__circle"></span> <?php echo $row['Sckills']; ?>
                                </li>
                            </ul>
                            </div>
                        
                        <?php } ?>
                        
                    </section>

                </div>

                <div class="resume__right">
                    <!--========== EXPERIENCE ==========-->
                    <section class="experience section" id="experience">
                        <h2 class="section-title">Experiance</h2>
                        <div class="experiance__container bg-grid">
                        <?php
                         $query=mysqli_query($db,"SELECT * FROM `experience`");
                        while($row=mysqli_fetch_assoc($query)){
                                ?>
                            <div class="experiance__content">
                                <div class="experiance__time">
                                    <span class="experiance__rounder"></span>
                                    <span class="experiance__line"></span>
                                </div>
                                <div class="experiance__date bg-grid">
                                    <h3 class="experiance__titile"><?php echo $row['exp_title']; ?></h3>
                                    <span class="experiance__company">From <?php echo $row['exp_start_day']." to ".$row['exp_end_day'];?></span>
                                    <p class="experiance__descrription">
                                       <?php echo $row['exp_details']; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                      
                    </section>

                    <!--========== CERTIFICATES ==========-->
                    <section class="certificate section" id="certificates">
                        <h2 class="section-title">Certificates</h2>

                        <div class="certificate__container bg-grid">

                        <?php
                         $query=mysqli_query($db,"SELECT * FROM `certification`");
                        while($row=mysqli_fetch_assoc($query)){
                                ?>
                            <div class="certificate__content">
                                <h3 class="certificate__title"><?php echo $row['certification_title']."(".$row['certification_year'].")"?></h3>
                                <p class="certificate__description"><?php echo $row['certification_details']; ?></p>
                            </div>
                            <?php } ?>
                            

                           
                        </div>
                    </section>

                    <!--========== REFERENCES ==========-->
                    <section class="references section" id="references">
                        <h2 class="section-title">References</h2>

                        <div class="references__container bg-grid">
                        <?php
                         $query=mysqli_query($db,"SELECT * FROM `refrence`");
                        while($row=mysqli_fetch_assoc($query)){
                                ?>
                            <div class="references__content bg-grid">
                                <span class="references__subtitle"><?php echo $row['refrence_name'];?></span>
                                <h3 class="references__title"><?php echo $row['refrence_jobtitle']; ?></h3>
                                <ul class="references__contact">
                                    <li>Phone: <?php echo $row['refrence_phone'] ?></li>
                                    <li>Email:<?php echo $row['refrance_email'] ?></li>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                        
                    </section>

                    <!--========== LANGUAGES ==========-->
                    <section class="languages section">
                        <h2 class="section-title">Languages</h2>
                        <?php
                         $query=mysqli_query($db,"SELECT * FROM `sckill`");
                        while($row=mysqli_fetch_assoc($query)){
                                ?>
                        <div class="languages__container">
                            <ul class="languages__content bg-grid">
                                <li class="languages__name">
                                    <span class="languages__circle"></span> <?php echo x($row['lang']); ?>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                    </section>
                    
                    <!--========== INTERESTS ==========-->
                    <section class="interests section">
                        <h2 class="section-title">Interests</h2>

                        <div class="interests__container bg-grid">
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