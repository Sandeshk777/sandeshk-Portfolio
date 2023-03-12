<?php
// database connection code
if (isset($_POST['txtName'])) {
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', 'root', '', 'dbcontact');

    // get the post records

    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtPhone = $_POST['txtPhone'];
    $txtMessage = $_POST['txtMessage'];

    // database insert SQL code
    $sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`,`fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail','$txtPhone','$txtMessage')";

    // insert in database 
    $rs = mysqli_query($con, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Sandesh Kokad</title>

    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>




</head>

<body>

    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="index.php" class="nav__logo">Sandesh</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link ">Home</a></li>
                    <li class="nav__item"><a href="Aboutus.html" class="nav__link">About Me</a></li>
                    <li class="nav__item"><a href="goals.html" class="nav__link">Goals</a></li>
                    <li class="nav__item"><a href="contact.php" class="nav__link">Contact</a></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">

        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Sandesh Kokad</span><br> Web Devloper</h1>

                <a href="#contact1" class="button">Contact</a>
            </div>

            <div class="home__social">
                <a href="https://www.linkedin.com/in/sandesh-kokad-a0802122b" class="home__social-icon"><i class="fa-brands fa-linkedin"></i><i class='bx bxl-linkedin'></i></a>
                <a href="https://discord.com/channels/@me" class="home__social-icon"><i class='bx bxl-discord'></i></a>
                <a href="https://github.com/Sandeshk777" class="home__social-icon"><i class='bx bxl-github'></i></a>
            </div>

            <div class="home__img">
                <img src="img\me.jpg" alt="">
            </div>
        </section>



        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div class="skills__box">
                    <h3 class="skills__subtitle">Development</h3>
                    <span class="skills__name">C</span>
                    <span class="skills__name">C++</span>

                    <span class="skills__name">Html</span>
                    <span class="skills__name">Css</span>
                    <span class="skills__name">Javascript</span>
                    <span class="skills__name">BootStrap</span>
                    <span class="skills__name">Worldpress</span>
                    <span class="skills__name">PHP</span>

                    <h3 class="skills__subtitle">Machine Learning</h3>
                    <span class="skills__name">Python</span>


                    <h3 class="skills__subtitle">Database</h3>
                    <span class="skills__name">MySQL</span>




                    <h3 class="skills__subtitle">Design</h3>
                    <span class="skills__name">Canva Editor</span>


                </div>

                <div class="skills__img">
                    <img src="img\skill.gif" alt="">
                </div>
            </div>
        </section>



        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img"> <!--      changeee> -->
                    <img src="img\about.png" alt=""> <!--      //img -->
                </div>

                <div>
                    <h2 class="about__subtitle">I'am Sandesh Kokad</h2>
                    <p class="about__text">3rd year BCA Science student at Ramkrishna More College SPPU University with interest and practical exposure in the field of Web Development And Devops Engineering .

                    </p>
                </div>
            </div>
        </section>


        <section class="portfolio section" id="portfolio">
            <h2 class="section-title">Project</h2>

            <div class="portfolio__container bd-grid-section">
                <div class="portfolio__img">
                    <img src="img\work1.png" alt="">
                    <h2>Sharemint.in </h2>

                    <div class="portfolio__link">
                        <a href="https://sharemint.in/" target="_blank" class="portfolio__link-name"> This Website is about Share market Tools and articals.</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="img\Work2.png" alt="">
                    <h2>RMS College Department Site </h2>

                    <div class="portfolio__link">
                        <a href="https://rmcbcasciencetechnovation.site/" target="_blank" class="portfolio__link-name">  This Website is about college Department and their events management.</a>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="portfolio section" id="portfolio">
            <h2 class="section-title">Certification</h2>

            <div class="portfolio__container bd-grid-section">
                <div class="portfolio__img">
                    <img src="img\certification.png" alt="">
                    <h2>SEO Cetificate </h2>

                    <div class="portfolio__link">
                        <a href="https://www.udemy.com/certificate/UC-d2e82321-02ff-4760-b912-fc7a8d295c3c/" target="_blank" class="portfolio__link-name"> Search Engine Optimization Certified by Udemy .</a>
                    </div>
                </div>


                <div class="portfolio__img">
                    <img src="img\Certification2.png" alt="">
                    <h2>Python</h2>

                    <div class="portfolio__link">
                        <a href="https://www.udemy.com/certificate/UC-7c5b2785-be04-45aa-96a6-e58984c51d3a/" class="portfolio__link-name">Data Manipulation in Python: Master Python, Numpy & Pandas</a>
                    </div>
                </div>


            </div>
        </section>


        <section class="contact section" id="contact">
            <h2 class="section-title">My Vision</h2>
            <div class="contact__container bd-grid">
                <section id="goals" class="about__img">

                    <section id="goals1">
                        <div class="goal1" style="background-color: #f1d089 ;padding:50px;margin-bottom: 50px;border-radius: 10px;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);">
                            
                            <p>As an IT student, my vision is to become a technology leader who utilizes my skills and knowledge to create innovative solutions that improve the world we live in.
                              I aim to stay on the cutting-edge of technology and continuously broaden my expertise in various areas of the field, including software development,
                                network security, data management, and artificial intelligence.
                            <br><br>
                            I am passionate about using technology to solve complex problems and make a positive impact on society. 
                            I believe that technology has the power to bring people together, increase efficiency and productivity, 
                            and improve the quality of life for individuals and communities around the world.
                            <br><br>  
                            In order to achieve my vision, I am committed to staying up-to-date with the latest trends and advancements in the field and continuing to educate myself through coursework, certification programs, and hands-on experience. 
                            I am also dedicated to fostering strong relationships with my peers, mentors, and industry leaders in order to learn from their experiences and expertise.
                            </p>
                        </div>
                    </section>
                </section>
            </div>
            </div>
        </section>


        <section class="contact section" id="contact1">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <form method="POST" class="contact__form">
                    <input type="text" placeholder="Name" name="txtName" class="contact__input" class="form-control" id="txtName" value="" required>
                    <input type="mail" placeholder="Email" name="txtEmail" class="contact__input" class="form-control" id="txtEmail" value="" required>
                    <input type="text" placeholder="Mobile Number" name="txtPhone" class="contact__input" class="form-control" id="txtPhone" value="" required>
                    <textarea cols="0" rows="10" placeholder="Message" name="txtMessage" class="contact__input" class="form-control" id="txtMessage" value="" required></textarea>
                    <input type="submit" name="Submit" id="Submit" value="Click me to Contact" class="contact__button button">
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="footer__title">Sandesh Kokad</p>
        <div class="footer__social">
            <a href="https://www.facebook.com/sandash.kokad/" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/its__.sandesh/" class="footer__icon"><i class='bx bxl-instagram'></i></a>
            <a href="https://twitter.com/kokad_sandesh" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>
        <p>&#169; 2023 sandesh kokad.</p>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>


    <script src=main.js></script>


</body>

</html>