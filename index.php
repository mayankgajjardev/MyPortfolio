<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive personal portfolio website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
          <a href="#education">education</a>
        <!-- <a href="#services">services</a>
        <a href="#contact">contact</a> -->
    </nav>

    <div id="theme-toggler" class="fas fa-moon"></div>

</header>

<!-- header section ends -->


<!-- home section starts -->
    <section class="home" id="home">
      <div class="image">
        <img src="images/user1.jpg" alt="">
      </div>

      <div class="content">
      <span class="hello">Hello,</span>
      <h3> I'M <span>Mayank Sureliya</span> </h3>
      <p>To pursue a highly rewarding career, seeking for a job in
challenging and healthy work environment where I can utilize
my skills and knowledge efficiently for contributing in growth of
the organization and myself as a professional Computer.</p>
      <a href="#about" class="btn">about me</a>
    </div>
    </section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

      <h1 class="heading"> about <span>me</span> </h1>
  <div class="info-container">
    <div class="info">
         <p> <span>name :             </span> Mayank Sureliya  </p> 
          <p> <span>age :             </span> 22  </p>
          <p> <span>gender :          </span>  Male </p>
          <p> <span>graduation :      </span> BCA  </p>
          <!-- <p> <span> experience  :    </span> 6 Months  </p> -->
    </div>

    <div class="image">
      <img src="images/about-img.png" alt="">
   </div>


    <div class="info"> 
         <p> <span>language : </span> English, Hindi, Gujarati </p>
         <p> <span>phone : </span> +91 96647 28031 </p>
         <p> <span>email : </span> Mayankgajjardev@gmail.com </p>
         <p> <span>address : </span> Rajkot - 360004 </p>
         <!-- <p> <span>coutry : </span> India </p> -->
    </div>
  </div>

      <div class="skill">
        <div class="box">
          <h3 class="title"> design   <span class="yello_color">Skill</span></h3>

          <div class="progress progress-1">
              <h3> HTML <span>90%</span> </h3>
              <div class="bar"><span></span></div>
           </div>

           <div class="progress progress-2">
              <h3> css <span>80%</span> </h3>
              <div class="bar"><span></span></div>
           </div>

           <div class="progress progress-3">
              <h3> javascript <span>50%</span> </h3>
              <div class="bar"><span></span></div>
           </div>

           <div class="progress progress-4">
              <h3> bootstrap <span>70%</span> </h3>
              <div class="bar"><span></span></div>
           </div>
        </div>

        <div class="box">
        <h3 class="title">development   <span class="yello_color">Skill</span></h3>
        <div class="progress progress-5">
           <h3> PHP <span>70%</span> </h3>
           <div class="bar"><span></span></div>
        </div>
        <div class="progress progress-6">
           <h3> MySQL <span>50%</span> </h3>
           <div class="bar"><span></span></div>
        </div>
        <div class="progress progress-7">
           <h3> Dart <span>80%</span> </h3>
           <div class="bar"><span></span></div>
        </div>

        <div class="progress progress-8">
           <h3> C,C++ <span>70%</span> </h3>
           <div class="bar"><span></span></div>
        </div>
     </div>
      </div>

      <div class="download">
        <a href="download.php?file=resume" class="btn"> download CV </a>
    </div>
</section>

<!-- about section ends -->



<!-- about section start --->
<section class="education" id="education">

    <h1 class="heading"> my <span>education</span> </h1>



    <div class="box-container">


        <div class="box">
            <h3 class="title">experience</h3>
            <div class="exp-box">
                <h3>Web development</h3>
                <p>Html, Css, Javascript, Php, MySql</p>
            </div> 
            <div class="exp-box">
                <h3>App development</h3>
                <p>Basic of Android, Dart, Basic of Flutter</p>
            </div>
        </div>

        <div class="box">
            <h3 class="title">education</h3>
            <div class="exp-box">
                <h3>Shree Uma Vidhya Sankul - Jambuda</h3>
                <p>12th - Commerce</p>
            </div>
            <div class="exp-box">
                <h3>Harivandana College - Rajkot</h3>
                <p>BCA</p>
            </div> 
        </div>

    </div>

    </div>

</section>

<!-- about section end --->

<!-- services section end --->
      <!-- <section class="services" id="services">
         <h1 class="heading"> <span>my</span> services </h1>
        <div class="box-container">

          <div class="box">
            <span class="number">01</span>
            <h3>c</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              cupidatat non proident, mollit anim id est laborum.</p>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="box">
            <span class="number">02</span>
            <h3>c++</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              cupidatat non proident, mollit anim id est laborum.</p>
            <a href="#" class="btn">read more</a>
          </div>


          <div class="box">
            <span class="number">03</span>
            <h3>php</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              cupidatat non proident, mollit anim id est laborum.</p>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="box">
            <span class="number">04</span>
            <h3>android</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              cupidatat non proident, mollit anim id est laborum.</p>
            <a href="#" class="btn">read more</a>
          </div>


          <div class="box">
            <span class="number">05</span>
            <h3>dart</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              cupidatat non proident, mollit anim id est laborum.</p>
            <a href="#" class="btn">read more</a>
          </div>

          <div class="box">
            <span class="number">06</span>
            <h3>flutter</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              cupidatat non proident, mollit anim id est laborum.</p>
            <a href="#" class="btn">read more</a>
          </div>
        </div>
      </section> -->

<!-- services section end --->


<!-- contact section start --->

<!-- <section class="contact" id="contact">

<h1 class="heading"> contact <span>us</span> </h1>

               <div class="row">
                        <form action="">
         <input type="text" placeholder="first name" class="box">
         <input type="text" placeholder="last name" class="box">
          <input type="email" placeholder="your email" class="box">
         <input type="number" placeholder="your number" class="box">
         <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="your message"></textarea>
         <a href="#" class="btn">send message</a>
                 </form>

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1619943375027!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

</div>

</section> -->
<!-- contact section end --->




<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
<php>

</php>
