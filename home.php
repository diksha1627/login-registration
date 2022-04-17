<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALTH+ || One Step Health Solution</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Hahmlet:wght@300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ Header @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
header {
    z-index: 999;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 200px;
    transition: 0.5s ease;
}

header .logo {
    color: #fff;
    font-size: 1.5em;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
}

header .navigation {
    position: relative;
}

header .navigation .navigation-items a {
    position: relative;
    color: #fff;
    color: #fff;
    font-size: 1em;
    text-decoration: none;
    margin-left: 30px;
    transition: 0.3s ease;
    padding: 5px 10px;
}

header .navigation .navigation-items a:before{
    content: '';
    position: absolute;
    background: rgba(255, 255, 255, 0.432);
    
    
    width: 0;
    height: 30px;
    bottom: 0;
    left: 0;
    transition: 0.3s ease;
}

header .navigation .navigation-items a:hover:before {
    width: 100%;
    /* display: none; */
    
}

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ Section 1 - Video slides @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
section {
    padding: 100px 200px;
}

.home {
    position: relative; 
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    flex-direction: column;
    /* background: #C589F9; */
    /* background: #4487F8; */
    background: #7aacf8;
}

.home:before {
    z-index: 777;
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    /* background: rgba(234, 223, 249, 0.2); */
    background: #7aacf827;
    width: 100%;
    height: 100%;
}

.home .content {
    z-index: 888;
    color: #fff;
    width: 75%;
    margin-top: 50px;
    display: none;
}
.home .content.active {
    display: block;
}

.home .content h1 {
    font-size: 4em;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 5px;
    margin-bottom: 35px;
}

.home .content h1 span {
    font-size: 1.2em;
    font-weight: 600;
    font-family: 'Hahmlet', serif;

}

.home .content p {
    margin-bottom: 65px;
}

.home .content a {
    background: rgba(255, 255, 255, 0.688);
    padding: 15px 35px;
    color: #1768f5;
    font-size: 1.1em;
    font-weight: 600;
    text-decoration: none;
    border-radius: 2px;
    transition: 0.3s ease;
}

.home .content a:hover {
    background: #fff;
    letter-spacing: 2px;
}

.home .media-icons {
    z-index: 888;
    position: absolute;
    right: 30px;
    display: flex;
    flex-direction: column;
    transition: 0.5s ease;
}

.home .media-icons a {
    color: #fff;
    font-size: 1.6em;
    transition: 0.3s ease;
}

.home .media-icons a:not(:last-child) {
    margin-bottom: 20px;
}

.home .media-icons a:hover {
    transform: scale(1.3);
}

.home video {
    z-index: 000;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slider-navigation {
    z-index: 888;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translateY(80px);
    margin-bottom: 12px;
}
.slider-navigation .nav-btn {
    width: 10px;
    height: 10px;
    background: #fff;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 0 2px rgba(255, 255, 255, 0.5);
    transition: 0.3s ease;
}

.slider-navigation .nav-btn.active {
    background: #853BED;
    background: #4487F8;
}

.slider-navigation .nav-btn:not(:last-child) {
    margin-right: 20px;
}
.slider-navigation .nav-btn:hover{
    transform: scale(1.2);
}
.video-slide {
    position: absolute;
    width: 100%;
    clip-path: circle(0% at 0 50%);
}
.video-slide.active {
    clip-path: circle(150% at 0 50%);
    transition: 1.5s ease;
    transition-property: clip-path;
}

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ Section 2 - Our Vision @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/

.about-us {
    padding: 100px 190px;
}
.about-us .content p {
    margin-bottom: 10px;
    margin-top: 10px;
}

.about-us .content a {
    color: #4487F8;
    font-size: 1.1em;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s ease;
}

.about-us .content a:hover {
    /* background: #fff; */
    letter-spacing: 2px;
}

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ Footer @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
footer {
    padding: 50px 30px;
    background: #4487F8;
}

.footer {
    width: 100%;
    padding: 30px 12%; 
    color: rgb(255, 255, 255);
    display: flex;
}

.footer div {
    text-align: center;

}

/* ############## column 1 ################# */
.col-1 a {
    display: block;
    text-decoration: none;
    color: #FFF;
    margin-bottom: 10px;
    transition: 0.3s ease;
}
.col-1 a:hover {
    /* border-bottom: 2px solid #fff; */
    letter-spacing: 1.25px;
    color: rgb(51, 50, 50);
}

/* ################ column 2 ################## */
.col-2 {
    flex-grow: 2;
}

.footer div h3 {
    text-transform: uppercase;
    font-weight: 500;   
    margin-bottom: 30px;
    letter-spacing: 1px;    
}


form input {
    width: 400px;
    height: 45px;
    border-radius: 22px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 30px;
    outline: none;
    border: none;
}
form button {
    background: transparent;
    border: 2px solid #fff;
    color: #FFF;
    border-radius: 30px;
    padding: 10px 30px;
    font-size: 1em;
    cursor: pointer;
    transition: 0.2s;
}
form button:hover {
    background: #1768f5;
    letter-spacing: 1px;
}

/* ################## Column 3 ################### */
.col-3 p {
    margin-bottom: 20px;
}

.footer .media-icons a {
    color: #fff;
    font-size: 1.5em;
    transition: 0.3s ease;
    margin-right: 15px;
}

.footer .media-icons a:hover {
    color: rgb(51, 50, 50);
}

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ Copyright section @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
.copyright {
    background: #333;
}
.copyright p {
    height: 40px;
    display: flex;
    text-align: center;
    color: #fff;
    letter-spacing: 1px;
    justify-content: center;
    align-items: center;
}


/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ Responsive Media Quaries @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
@media (max-width: 1040px) {

    /* ########### Header ############ */
    header {
        padding: 15px 100px;
    }
    /* ########### section 1 ############# */
    section {
        padding: 80px 100px;
    }
}

@media (max-width: 760px) {
    /* ########### Header ########### */
    header {
        padding: 12px 20px;
    }
    /* ############# Section 1 ############ */
    section {
        padding: 80px 20px;
    }
    .home .media-icons {
        right: 15px;
    }
    .home .content h1 {
        font-size: 3.2em;
    }
    .home .content h1 span {
        font-size: 1em;
    }
    .home .content p {
        margin-bottom: 50px;
        font-size: 1.1em;
        margin-top: -4px;
    }
    .home .content a {
        padding: 12px 29px;
        font-size: 0.9em;
        border-radius: 4px;
    }

    /*################ Section 2 ################# */
    .about-us {
        padding: 50px 80px;
    }

    /* ################# Footer ############### */
    footer {
        padding: 10px 0px;
    }
}

@media (max-width: 680px) {
    /* ################ Footer #################### */
    .col-1 {
        display: none;
    }
    .col-3 {
        display: none;
    }
}

@media (max-width: 544px) {
    .menu-btn {
        background-size: 30px;
    }

    /* ############## Section 1 ############### */
    .home .content h1 {
        font-size: 2.8em;
    }
    .home .content h1 span {
        font-size: 0.8em;
    }
    .home .content p {
        margin-bottom: 50px;
        font-size: 0.9em;
        margin-top: -6px;
    }
    .home .content a {
        padding: 8px 22px;
        font-size: 0.8em;
        border-radius: 6px;
    }
    .home .media-icons a:not(:last-child) {
        margin-bottom: 11px;
    }
    .home .media-icons a {
        color: #fff;
        font-size: 1.3em;
        transition: 0.3s ease;
    }

    /* ################ Section 2 ############### */
    .about-us {
        padding: 30px 25px;
    }

    /* ################ Footer ################## */
    .footer {
        width: 100%;
        padding: 6px 10%;
    }
    .footer form input {
        width: 320px;
        height: 40px;
        border-radius: 20px;
    }
    .footer form input {
        margin-bottom: 20px;
    }
    .footer form button {
        padding: 6px 24px;
        font-size: 0.8em;
    }

    /* ##################### Copyright ################## */
    .copyright p {
        height: 20px;
        letter-spacing: 0.7px;
        font-size: 0.6em;
    }


    /* ######################## Responsive navigation menu ######################## */
    
    header .navigation {
        display: none;
    }
    header .navigation.active {
        /* display: none; */
        position: fixed;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(1, 1, 1, 0.5);
    }


    header .navigation .navigation-items a {
        color: #222;
        font-size: 1.2em;
        margin: 20px;
    }
    header .navigation .navigation-items a::before {
        background: #222;
        height: 5px;
    }
    header .navigation.active .navigation-items {
        background: #fff;
        width: 400px;
        max-width: 400px;
        margin: 20px;
        padding: 35px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0 5px 25px rgba(1 1 1 /20%);
    }

    .menu-btn {
        background: url('menu.jpg') no-repeat;
        background-size: 30px;
        background-position: center;
        width: 40px;
        height: 40px;
        cursor: pointer;
        transition: 0.25s ease;
    }
    .menu-btn.active {
        z-index: 999;
        background: url('close.png') no-repeat;
        background-size: 25px;
        background-position: center;
        transition: 0.25s ease;

    }

}

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ login and registration @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
*{
    margin:0;
    padding:0;
}
.container{
    height:100%;
    width:100%;
    background-image:linear-gradient(rgba(0,0,0,0.4),
    rgba(0,0,0,0.4)),url(banner.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
    display:flex;
}
.form-box1{
    width: 450px;
    height: 480px;
    position:relative;
    margin:10% 0.5% 0% 20%;
    background: rgb(235, 225, 225);
    padding:5px;
    overflow:hidden;
    border-radius:0%;
    opacity:0.9;
}
.logos {
    color: rgb(210, 35, 35);
    margin:10% 0.5% 0% 34%;
    padding:0% 0% 0% 0% 0%;
    font-size: 1.5em;
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
}
.form-box2{
    width: 450px;
    height: 480px;
    position:relative;
    margin:10% 1% 0% 0%;
    background: rgb(239, 167, 167);
    padding:5px;
    overflow:hidden;
    border-radius:0%;
    opacity:0.8;
}
.form-box1:hover{
    opacity:1;
    box-shadow: #ad64ed;
}
.form-box2:hover{
    opacity:1;
    box-shadow: #ad64ed;
}
.button-box{
    width:220px;
    margin:3% 0% 0% 23%;
    position:relative;
    box-shadow:0 0 20px 9px #ff61241f;
    border-radius:30px;
}
.toggle-btn{
    padding:10px 30px;
    cursor:pointer;
    background: transparent;
    border:0;
    outline:none;
    position:relative;
}
#btn
{
    top:0;
    left:0;
    position:absolute;
    width:110px;
    height:100%;
    background: linear-gradient(to right,#af62f2,#70e9a0);
    border-radius:30px;
    transition:.5s;
}
.input-group
{
    top:130px;
    margin:0% 0% 0% -8%;
    position:absolute;
    width:280px;
    transition:.5s;
}
.input-field
{
    width:100%;
    padding:10px 20px;
    margin:5px 90px;
    border-left:0;
    border-top:0;
    border-right:0;
    border-bottom:1px solid #999;
    outline: none;
    background:transparent;
}
.submit-btn
{
    width:85%;
    padding:10px 30px;
    cursor:pointer;
    display:block;
    margin: 5% 0% 0% 47%;
    background: linear-gradient(to right,#ad64ed,#5cef97);
    border:0;
    outline:none;
    border-radius:30px;
}
#checkbox{
    margin:19px 6px 10px 93px;
}
span{
    color:#777;
    font-size:12px;
    bottom:68px;
    position:absolute;

}
#line{
    margin: 4% 11% 4% 18%;
}
#icons
{
    margin: 65% 0% 0% 40%;
}
.size
{
    margin: 0% 5% 0% 0%;
    padding: 0%;
}


    </style>
</head>
<body>
<h1> Welcome <?php echo $_SESSION['username'];?></h1>
    <header>
        <a href="index.html" class="logo">health+</a>
        <div class="menu-btn"></div>

        <div class="navigation">
            <div class="navigation-items">
                <a href="index.html">Home</a>
                <a href="blog.html">Blog</a>
                <a href="index.html">Explore</a>
                <a href="login.html">Login</a>
            </div>
        </div>  
    </header>

    <section class="home">
        <video src="1.mp4" autoplay muted loop class="video-slide active"></video>
        <video src="meditation.mp4" autoplay muted loop class="video-slide"></video>
        <video src="jumping-jack.mp4" autoplay muted loop class="video-slide"></video>
        <video src="joy-vibe.mp4" autoplay muted loop class="video-slide"></video>

        <!-- home slide -->
        <div class="content active">
            <h1>Health<br><span>Care</span></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam repellendus illo, obcaecati aliquid, praesentium animi quasi aspernatur, porro facere itaque quam. Asperiores, error! Explicabo est quasi ipsam eligendi modi facere laboriosam magnam id exercitationem cumque eaque perspiciatis, ab assumenda voluptatem illo nemo libero consequuntur possimus minus soluta ipsa adipisci? Provident eligendi molestiae accusamus temporibus maiores! Omnis, ducimus nam.</p>
            <a href="bmi.html">Calculate BMI</a>
        </div>
        <!-- 1st slide -->
        <div class="content">
            <h1>Meditation<br><span>Benifits</span></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam repellendus illo, obcaecati aliquid, praesentium animi quasi aspernatur, porro facere itaque quam. Asperiores, error! Explicabo est quasi ipsam eligendi modi facere laboriosam magnam id exercitationem cumque eaque perspiciatis, ab assumenda voluptatem illo nemo libero consequuntur possimus minus soluta ipsa adipisci? Provident eligendi molestiae accusamus temporibus maiores! Omnis, ducimus nam.</p>
            <a href="#">Read More</a>
        </div>
        <!-- 2nd slide -->
        <div class="content">
            <h1>Power of<br><span>Exercise</span></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam repellendus illo, obcaecati aliquid, praesentium animi quasi aspernatur, porro facere itaque quam. Asperiores, error! Explicabo est quasi ipsam eligendi modi facere laboriosam magnam id exercitationem cumque eaque perspiciatis, ab assumenda voluptatem illo nemo libero consequuntur possimus minus soluta ipsa adipisci? Provident eligendi molestiae accusamus temporibus maiores! Omnis, ducimus nam.</p>
            <a href="#">Read More</a>
        </div>
        <!-- 3rd slide -->
        <div class="content">
            <h1>Happy<br><span>life</span></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam repellendus illo, obcaecati aliquid, praesentium animi quasi aspernatur, porro facere itaque quam. Asperiores, error! Explicabo est quasi ipsam eligendi modi facere laboriosam magnam id exercitationem cumque eaque perspiciatis, ab assumenda voluptatem illo nemo libero consequuntur possimus minus soluta ipsa adipisci? Provident eligendi molestiae accusamus temporibus maiores! Omnis, ducimus nam.</p>
            <a href="#">Read More</a>
        </div>

        <div class="media-icons">
            <!-- <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a> -->
            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <!-- <a href="https://www.instagram.com"><i class="fa-brands fa-instagram-square"></i></a> -->
            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://github.com/"><i class="fa-brands fa-github"></i></a>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>

    </section>

    <section class="about-us">
        <div class="content">
            <h1>Our Vision.</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam repellendus illo, obcaecati aliquid, praesentium animi quasi aspernatur, porro facere itaque quam. Asperiores, error! Explicabo est quasi ipsam eligendi modi facere laboriosam magnam id exercitationem cumque eaque perspiciatis, ab assumenda voluptatem illo nemo libero consequuntur possimus minus soluta ipsa adipisci? Provident eligendi molestiae <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, nesciunt? Cum, nisi ducimus sapiente beatae ipsum ut quis, soluta minus vitae maxime placeat magni praesentium ex omnis temporibus magnam maiores facere amet aliquam saepe quam! <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo temporibus odio cumque culpa velit dicta doloremque esse accusamus, officiis commodi nam, repudiandae ab architecto neque unde fugiat accusantium minus? Aperiam eaque dolorem quas ex eius doloribus nostrum illum, placeat reprehenderit quo tenetur consectetur, ad deserunt nisi libero dignissimos, labore magnam recusandae praesentium. <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed nostrum eveniet nobis dolor accusantium quidem commodi, sequi illum odio iste perspiciatis earum, officiis, quisquam maiores rem <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, quibusdam sed? Error, odit est praesentium amet quod cumque nulla provident omnis neque et. Excepturi est quis ratione deserunt accusantium, accusamus dolorem quisquam. Laboriosam sed quam asperiores voluptate cumque animi dignissimos ut id, recusandae tempora modi in quos? Quod, iusto nesciunt?</p>
            <a href="creator.html">Know More</a>
        </div>
    </section>

    <footer>
        <div class="footer">
            <div class="col-1">
                <h3>Useful Links</h3>
                <a href="creator.html">Creators</a>
                <a href="index.html">Our Vision</a>
                <a href="bmi.html">Calculate BMI</a>
                <a href="index.html">Explore</a>
            </div>
            <div class="col-2">
                <h3>Have Questions ?</h3>
                <form>
                    <input type="text" placeholder="Ask anything" required>
                    <br>
                    <input type="email" placeholder="Valid Email Address" required>
                    <br>
                    <button type="send">Send</button>
                </form>
            </div>
            <div class="col-3">
                <h3>Contact</h3>
                <p>New Town Rd, Action Area III,<br> Newtown, Kolkata, INDIA</p>
                <div class="media-icons">
                    <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://github.com/"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>
            Copyright &copy; 2022 - All rights reserved
        </p>
    </div>


    <script>
        // javascript for responsive navigation menu 
        const menuBtn = document.querySelector(".menu-btn");
        const navigation = document.querySelector(".navigation");
        menuBtn.addEventListener("click", ()=>{
            menuBtn.classList.toggle("active");
            navigation.classList.toggle("active");
        });

        // Javascript for video slider navigation
        const btns = document.querySelectorAll(".nav-btn");
        const slides = document.querySelectorAll(".video-slide");
        const contents = document.querySelectorAll(".content");

        var sliderNav = function(manual){
            btns.forEach((btn) => {
                btn.classList.remove("active")
            });
            slides.forEach((slide) => {
                slide.classList.remove("active")
            });
            contents.forEach((content) => {
                content.classList.remove("active")
            });
            
            btns[manual].classList.add("active");
            slides[manual].classList.add("active");
            contents[manual].classList.add("active");
        }
        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                sliderNav(i);
            })
        })
    </script>
</body>
</html>