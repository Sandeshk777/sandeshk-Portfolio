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
                    <li class="nav__item"><a href="gallery.html" class="nav__link">Gallery</a></li>
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


            <div class="contact section">
                <h2 class="section-title">Email</h2>
                <a href="mailto: sandeshkokad@gmail.com"><i class="home__social-icon"> <img src="img\gmail.png" style="  max-width: 90%;  height: 45%;  display: block;
                 margin-left: auto;margin-right: auto; "></i>
                    <h3 style="text-align: center">sandeshkokad@gmail.com</h3>
                </a>

            </div>

        </section>



        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <form method="POST" class="contact__form">
                    <input type="text" placeholder="Name" name="txtName" class="contact__input" class="form-control" id="txtName" value="" required>
                    <input type="mail" placeholder="Email" name="txtEmail" class="contact__input" class="form-control" id="txtEmail" value="" required>
                    <input type="text" placeholder="Mobile Number" name="txtPhone" class="contact__input" class="form-control" id="txtPhone" value="" required>
                    <textarea cols="0" rows="10" placeholder="Feedback" name="txtMessage" class="contact__input" class="form-control" id="txtMessage" value="" required></textarea>
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