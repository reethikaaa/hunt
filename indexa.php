<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="OVER OVER VIEW port" content="width=device-width", initial-scale="1.0">
        <title>HUNT</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        header{
            z-index: 999;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;
            transition: 0.5s ease;
        }
        
        header .brand{
            color: #fff;
            font-size: 1.5em;
            font-weight: 700;
            text-decoration: none;
        }

        header .navigation{
            position: relative;
        }

        header .navigation .navigation-items a{
            position: relative;
            color: #fff;
            font-size: 1em;
            font-weight: 500;
            text-decoration: none;
            margin-left: 30px;
            transition: 0.3s ease;
        }

        header .navigation .navigation-items a:before{
            content: '';
            position: absolute;
            background: #fff;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 0;
            transistion: 0.3s ease;
        }

        header .navigation .navigation-items a:hover:before{
            width: 100%;
        }

        section{
            padding: 100px 200px;
        }

        .case{
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background: #000000;
        }

        .case:before{
            z-index: 777;
            content: '';
            position: absolute;
            background: rgba(64, 64, 64, 0.5);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .case .content{
            z-index: 888;
            color: #fff;
            width: 70%;
            margin-top: 50px;
            display: none;
        }

        .case .content.active{
            display: block;
        }

        .case .content h1{
            font-size: 4em;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 5px;
            line-height: 75px;
            margin-bottom: 40px;
        }

        .case .content h1 span{
            font-size: 1.2rem;
            font-weight: 600;

        }

        .case .content p{
            margin-bottom: 65px;
        }
        
        .case .content a{
            background: #fff;
            padding: 15px 35px;
            color: #1680ac;
            font-size: 1.1em;
            font-weight: 500;
            text-decoration: none;
            border-radius: 2px;
        }

        .case video{
            z-index: 000;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slider-navigation{
            z-index: 888;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translatey(80px);
            margin-bottom: 12px;
        }

        .slider-navigation .nav-btn{
            width: 12px;
            height: 12px;
            background: #fff;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 0 2px rgba(255,255,255,0.5);
            transition: 0.3s ease;
        }

        .slider-navigation .nav-btn.active{
            background:#a9a9;
        }

        .slider-navigation .nav-btn:not(:last-child){
            margin-right: 20px;
        }

        .slider-navigation .nav-btn:hover{
            transform:scale(1.5);
        }

        .video-slide{
            position: absolute;
            width: 100%;
            clip-path: circle(0% at 0 50%);
        }
 
        .video-slide.active{
            clip-path: circle(150% at 0 50%);
            transition: 2s ease;
            transition-property: clip-path;
        }

        @media (max-width: 1040px){
            header{
                padding: 12px 20px;
            }

        section{
            padding: 12px 20px;
        }

        header .navigation{
           display: none;
        }

        header .navigation.active{
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(1,1,1,0.5);
        }

        header .navigation .navigation-items a{
            color: #222;
            font-size: 1.2em;
            margin: 20px;
        }

        header .navigation .navigation-items a:before{
            background: #222;
            height: 5px;
        }

        header .navigation.active .navigation-items {
            background: #fff;
            width: 600px;
            max-width: 600px;
            margin: 20px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
        }

        .menu-btn{
            background: url(assets/imgs/Hlogo.jpg)no-repeat;
            background-size: 30px;
            background-position: center;
            width: 40px;
            height: 40px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .menu-btn.active{
            z-index: 999;
            background: url(assets/imgs/Hlogo.jpg)no-repeat;
            background-size: 25px;
            background-position: center;
            transition: 0.3s ease;
        }
    }
    </style>
    <body>
        <header>
            <a href="#" class="brand">&ensp;&ensp;&ensp;&ensp;H U N T<br><small>Justice Never Sleeps</small></a>
            <div class="menu-btn"></div>
            <div class="navigation">
                <div class="navigation-items">
                    <a href="#">HOME</a>
                    <a href="articles.html">ARTICLE'S</a>
                    <a href="casestudies.html">CASE STUDIES</a>
                    <a href="topbrass.html">TOP BRASS</a>
                    <a href="contents.html">CONTENTS</a>
                    <a href="about.html">ABOUT</a>
                    <a href="profilea.php">PROFILE</a>
                    <a href="admin.php">SIGN OUT</a>
                </div>
            </div>
        </header>
        <section class="case">
            <video class="video-slide-active" src="assets/imgs/1.mp4" autoplay muted loop></video>
            <video class="video-slide" src="assets/imgs/2.mp4" autoplay muted loop></video>
            <video class="video-slide" src="assets/imgs/3.mp4" autoplay muted loop></video>
            <video class="video-slide" src="assets/imgs/4.mp4" autoplay muted loop></video>
            <video class="video-slide" src="assets/imgs/5.mp4" autoplay muted loop></video>
            <div class="content active">
            <h1>UNRAVELING MYSTERIES</h1>
            <p>Investigation involves a systematic process of uncovering facts and solving problems. It starts with collecting and preserving evidence from various sources. Experts then analyze this evidence to identify patterns and insights.</p>
        </div>
        <div class="content">
            <h1>SOlVED CASES</h1>
            <p>The Central Bureau of Investigation (CBI) is India's premier investigating agency, responsible for investigating high-profile cases, including corruption, serious crimes, and national security matters.The CBI took over the investigation, which resulted in numerous arrests and charges against various individuals involved.</p>
            <a href="solvedcases.html">OVER VIEW </a>
        </div>
        <div class="content">
            <h1>UNSOLVED CASES</h1>
            <p>Unsolved cases handled by the Central Bureau of Investigation (CBI) are those where investigations have not yet led to a clear resolution or identification of perpetrators. These cases remain open and often continue to be a focus of the agency's efforts.the circumstances of crime and the involvement of any individuals have not been definitively determined.</p>
            <a href="unsolved cases.html">OVER VIEW </a>
        </div>
        <div class="content">
            <h1>MOTO<span><br>Industry  Impartiality  Integrity</span></h1>
            <h1>MISSION</h1>
            <p></p>To uphold the Constitution of India and law of the land through in-depth investigation and Mobile prosecution of offences; to provide leadership and direction to Police Forces and to act as the Nodal Agency for enhancing interstate and international cooperation in law enforcement.</p>
            <h1>VISION</h1>
            <p>Based on its motto, mission and the need to develop professionalism, transparency, adaptability to change and use of science and technology in its working, the CBI will focus on the Combating corruption in public life, curb economic and violent crimes through meticulous investigation and prosecution.</p>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
        </section>

        <script type="text/javascript">
        const menuBtn = document.querySelector(".menu-btn");
        const navigation = document.querySelector(".navigation");
        menuBtn.addEventListener("click", ()=> {
            menuBtn.classList.toggle("active");
            navigation.classList.toggle("active");
        });

        const btns= document.querySelectorAll(".nav-btn");
        const slides= document.querySelectorAll(".video-slide");
        const contents= document.querySelectorAll(".content");

        var sliderNav= function(manual){
            btns.forEach((btn) => {
                btn.classList.remove("active");
            });

            slides.forEach((slide) => {
                slide.classList.remove("active");
            });

        contents.forEach((content) => {
            content.classList.remove("active");
            });

            btns[manual].classList.add("active");
            slides[manual].classList.add("active");
            contents[manual].classList.add("active");
        };

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                sliderNav(i);
            });
        });
     </script>   
    </body>
</html>