<?php
    include 'koneksi.php';
    $query = "SELECT * FROM users";
    $query_sql = mysqli_query($koneksi,$query);
    $tampil = mysqli_fetch_assoc($query_sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="header">
        <a href="#" class="logo"><?php echo $tampil['name'] ?></a>

        <i class='bx bx-menu' id="menu-icon"></i>

            <nav class="navbar">
                <a href="#">Home</a>
                <a href="#about">About</a>
                <a href="#services">Education</a>
                <a href="#skill">Experience & Skils</a>
                <a href="#project">Project</a>
                <a href="#contact">Contact</a>
            </nav>
    </header>

    <!-- home section design -->
     <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1><?php echo $tampil['name'] ?></h1>
            <h3>And I'm a <span>Design Ilustrator</span></h3>
            <p><?php echo $tampil['bio'] ?></p>
            <div class="social-media">
            <a href="https://www.instagram.com/stiawann0/"><img src="image/logo-instagram.png" height="50" width="50"/></a>
            <a href="https://wa.me/qr/OJIJAR6N6RYJC1"><img src="image/logo-whatshapp.png" height="50" width="50"/></a>
            <a href="https://x.com/wahyustiawan_04"><img src="image/logo-x.png" height="50" width="50"/></a>
            <a href="https://www.linkedin.com/in/wahyu-stiawan-a0b686303/"><img src="image/logo-LinkedIn.png" height="50" width="50"/></a>
            <a href="https://www.facebook.com/wahyu.stiawan.967"><img src="image/logo-facebook.png" height="50" width="50"/></i></a>
            </div>
        </div>

        <div class="home-img">
            <img src="image/<?php echo $tampil['profile_picture'] ?>"alt="">
        </div>

     </section>

     <!-- about sction design -->
      <section class="about" id="about">
        <div class="about-img">
            <img src="" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About</h2>
            <br>
            <p>Hey there! I'm Wahyu Stiawan! I have over 4 years of experience in the field of illustration specializing 
                in Anime Characters, Dungeons and Dragons Character Illustrations, and Cartoons.  I'am very passionate 
                about creating modern designs and illustrations that help fill your needs. Feel free to contact me if 
                you have any illustration-related needs. We've been in the illustration business for a long time and 
                have seen quite a bit of everything.</p>
        </div>
      </section>

      <!-- education section design -->
       <section class="services" id="services">
            <h2 class="heading">Education</h2>
            
            <div class="services-container">
                <?php
                    include 'koneksi.php';
                    $education_query = "SELECT * FROM education";
                    $query_sql = mysqli_query($koneksi,$education_query);
                    $data = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
                ?>

                <?php
                    foreach ($data as $tampil) {
                ?>
                    <div class="services-box">
                        <a href="https://maps.app.goo.gl/E2YBASE5G8P5aF1Y7">><img src="image/<?php echo $tampil['image'] ?>" height="200"></a>
                        <h3><?php echo $tampil['name'] ?></h3>
                        <P><?php echo $tampil['address'] ?></P>
                    </div>
                <?php
                    }
                ?>
                
                
            </div>
       </section>

       <!-- experience & skill section -->
       <section class="skill" id="skill">
        <h2 class="heading">Experience & Skills</h2>
        
        <div class="skill-container">
            <div class="skill-box">
                <img src="image/Project.png" height="100">
                <h3>100+ Project</h3>
                <p>January 2021 - Now</p>
                <P>demonstrating deep expertise and the ability to handle a wide variety of design needs for clients.</P>
            </div>
            <div class="skill-box-two">
                <img src="image/Colaboration.png" height="100">
                <h3>Colaboration</h3>
                <p>Skilled in teamwork and collaborating with various professionals, such as designers, developers, and product managers</P>
            </div>
            <div class="skill-box">
                <img src="image/Experience.png" height="100">
                <h3>4+ Year Experience</h3>
                <P>4 years of professional experience, showing a strong understanding of the design field and skills that have developed over time</P>
            </div>
            <div class="skill-box">
                <img src="image/poster.png" height="100">
                <h3>Poster Design</h3>
                <p>November 2023 - november 2024</p>
                <P>demonstrating deep expertise and the ability to handle a wide variety of design needs for clients.</P>
            </div>
            <div class="skill-box-two">
                <img src="image/Character.png" height="100">
                <h3>Design Character</h3>
                <p>June 2021 - january 2022</p>
                <p>Skilled in teamwork and collaborating with various professionals, such as designers, developers, and product managers</P>
            </div>
            <div class="skill-box">
                <img src="image/Logo.png" height="100">
                <h3>Design Logo</h3>
                <p>October 2024 - Now</p>
                <P>4 years of professional experience, showing a strong understanding of the design field and skills that have developed over time</P>
            </div>
            
        </div>
   </section>

   <!-- project section -->
    <section class="project" id="project">
        <h2 class="heading">Project</h2>

        <div class="project-container">
            <?php
            include 'koneksi.php';
            $project_query = "SELECT * FROM project";
            $query_sql = mysqli_query($koneksi,$project_query);
            $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
            ?>

            <?php
                foreach ($ambildata as $tampil) {
            ?>
                <div class="project-box">
                    <img src="image/<?php echo $tampil['image'] ?>" height="225">
                    <h3><?php echo $tampil['name_project'] ?></h3>
                    </div>
            <?php
                }
            ?>
            
        </div>
    </section>

    <!-- contact section -->
     <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form class="contact-form" action="prosesinput.php" method="post">
            <div class="input-group">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Name...." required>
                    <input type="email" name="email" placeholder="Email...." required>
                </div>
        
                <div class="input-box">
                    <input type="number" name="phone" placeholder="Phone Number...." required>
                    <input type="text" name="address" placeholder="Address...." required>
                </div>
            </div>

            <div class="input-group-2">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message...." required></textarea>
                <input name="submit" type="submit" value="Send Message" class="btn">
            </div>
        </form>
     </section>

     <footer class="footer">
        <div class="social">
            <a href="https://www.instagram.com/stiawann0/"><img src="image/logo-instagram.png" height="50" width="50"/></a>
            <a href="https://wa.me/qr/OJIJAR6N6RYJC1"><img src="image/logo-whatshapp.png" height="50" width="50"/></a>
            <a href="https://x.com/wahyustiawan_04"><img src="image/logo-x.png" height="50" width="50"/></a>
            <a href="https://www.linkedin.com/in/wahyu-stiawan-a0b686303/"><img src="image/logo-LinkedIn.png" height="50" width="50"/></a>
            <a href="https://www.facebook.com/wahyu.stiawan.967"><img src="image/logo-facebook.png" height="50" width="50"/></i></a>
        </div>
     </footer>

    <script src="script.js"></script>
</body>
</html>