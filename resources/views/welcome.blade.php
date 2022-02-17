<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Berqat App</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Core theme CSS (includes Bootstrap)-->


    <script type="text/javascript">


      function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>


        <link href="css/styles.css" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
$main-green: #79dd09 !default;
$main-green-rgb-015: rgba(121, 221, 9, 0.1) !default;
$main-yellow: #bdbb49 !default;
$main-yellow-rgb-015: rgba(189, 187, 73, 0.1) !default;
$main-red: #bd150b !default;
$main-red-rgb-015: rgba(189, 21, 11, 0.1) !default;
$main-blue: #0076bd !default;
$main-blue-rgb-015: rgba(0, 118, 189, 0.1) !default;

/* This pen */
body {
	font-family: "Baloo 2", cursive;
	font-size: 16px;
	color: #ffffff;
	text-rendering: optimizeLegibility;
	font-weight: initial;
}

.dark {
	background: #110f16;
}


.light {
	background: #f3f5f7;
}

a, a:hover {
	text-decoration: none;
	transition: color 0.3s ease-in-out;
}

#pageHeaderTitle {
	margin: 2rem 0;
	text-transform: uppercase;
	text-align: center;
	font-size: 2.5rem;
}

/* Cards */
.postcard {
  flex-wrap: wrap;
  display: flex;
  
  box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
  border-radius: 10px;
  margin: 0 0 2rem 0;
  overflow: hidden;
  position: relative;
  color: #ffffff;

	&.dark {
		background-color: #18151f;
	}
	&.light {
		background-color: #e1e5ea;
	}
	
	.t-dark {
		color: #18151f;
	}
	
  a {
    color: inherit;
  }
	
	h1,	.h1 {
		margin-bottom: 0.5rem;
		font-weight: 500;
		line-height: 1.2;
	}
	
	.small {
		font-size: 80%;
	}

  .postcard__title {
    font-size: 1.75rem;
  }

  .postcard__img {
    max-height: 180px;
    width: 100%;
    object-fit: cover;
    position: relative;
  }

  .postcard__img_link {
    display: contents;
  }

  .postcard__bar {
    width: 50px;
    height: 10px;
    margin: 10px 0;
    border-radius: 5px;
    background-color: #424242;
    transition: width 0.2s ease;
  }

  .postcard__text {
    padding: 1.5rem;
    position: relative;
    display: flex;
    flex-direction: column;
  }

  .postcard__preview-txt {
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: justify;
    height: 100%;
  }

  .postcard__tagbox {
    display: flex;
    flex-flow: row wrap;
    font-size: 14px;
    margin: 20px 0 0 0;
		padding: 0;
    justify-content: center;

    .tag__item {
      display: inline-block;
      background: rgba(83, 83, 83, 0.4);
      border-radius: 3px;
      padding: 2.5px 10px;
      margin: 0 5px 5px 0;
      cursor: default;
      user-select: none;
      transition: background-color 0.3s;

      &:hover {
        background: rgba(83, 83, 83, 0.8);
      }
    }
  }

  &:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(-70deg, #424242, transparent 50%);
    opacity: 1;
    border-radius: 10px;
  }

  &:hover .postcard__bar {
    width: 100px;
  }
}

@media screen and (min-width: 769px) {
  .postcard {
    flex-wrap: inherit;

    .postcard__title {
      font-size: 2rem;
    }

    .postcard__tagbox {
      justify-content: start;
    }

    .postcard__img {
      max-width: 300px;
      max-height: 100%;
      transition: transform 0.3s ease;
    }

    .postcard__text {
      padding: 3rem;
      width: 100%;
    }

    .media.postcard__text:before {
      content: "";
      position: absolute;
      display: block;
      background: #18151f;
      top: -20%;
      height: 130%;
      width: 55px;
    }

    &:hover .postcard__img {
      transform: scale(1.5);
    }

    &:nth-child(2n+1) {
      flex-direction: row;
    }

    &:nth-child(2n+0) {
      flex-direction: row-reverse;
    }

    &:nth-child(2n+1) .postcard__text::before {
      left: -12px !important;
      transform: rotate(4deg);
    }

    &:nth-child(2n+0) .postcard__text::before {
      right: -12px !important;
      transform: rotate(-4deg);
    }
  }
}
@media screen and (min-width: 1024px){
		.postcard__text {
      padding: 2rem 3.5rem;
    }
		
		.postcard__text:before {
      content: "";
      position: absolute;
      display: block;
      
      top: -20%;
      height: 130%;
      width: 55px;
    }
	
  .postcard.dark {
		.postcard__text:before {
			background: #18151f;
		}
  }
	.postcard.light {
		.postcard__text:before {
			background: #e1e5ea;
		}
  }
}

/* COLORS */
.postcard .postcard__tagbox .green.play:hover {
	background: $main-green;
	color: black;
}
.green .postcard__title:hover {
	color: $main-green;
}
.green .postcard__bar {
	background-color: $main-green;
}
.green::before {
	background-image: linear-gradient(
		-30deg,
		$main-green-rgb-015,
		transparent 50%
	);
}
.green:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-green-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .blue.play:hover {
	background: $main-blue;
}
.blue .postcard__title:hover {
	color: $main-blue;
}
.blue .postcard__bar {
	background-color: $main-blue;
}
.blue::before {
	background-image: linear-gradient(-30deg, $main-blue-rgb-015, transparent 50%);
}
.blue:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-blue-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .red.play:hover {
	background: $main-red;
}
.red .postcard__title:hover {
	color: $main-red;
}
.red .postcard__bar {
	background-color: $main-red;
}
.red::before {
	background-image: linear-gradient(-30deg, $main-red-rgb-015, transparent 50%);
}
.red:nth-child(2n)::before {
	background-image: linear-gradient(30deg, $main-red-rgb-015, transparent 50%);
}

.postcard .postcard__tagbox .yellow.play:hover {
	background: $main-yellow;
	color: black;
}
.yellow .postcard__title:hover {
	color: $main-yellow;
}
.yellow .postcard__bar {
	background-color: $main-yellow;
}
.yellow::before {
	background-image: linear-gradient(
		-30deg,
		$main-yellow-rgb-015,
		transparent 50%
	);
}
.yellow:nth-child(2n)::before {
	background-image: linear-gradient(
		30deg,
		$main-yellow-rgb-015,
		transparent 50%
	);
}

@media screen and (min-width: 769px) {
	.green::before {
		background-image: linear-gradient(
			-80deg,
			$main-green-rgb-015,
			transparent 50%
		);
	}
	.green:nth-child(2n)::before {
		background-image: linear-gradient(
			80deg,
			$main-green-rgb-015,
			transparent 50%
		);
	}

	.blue::before {
		background-image: linear-gradient(
			-80deg,
			$main-blue-rgb-015,
			transparent 50%
		);
	}
	.blue:nth-child(2n)::before {
		background-image: linear-gradient(80deg, $main-blue-rgb-015, transparent 50%);
	}

	.red::before {
		background-image: linear-gradient(-80deg, $main-red-rgb-015, transparent 50%);
	}
	.red:nth-child(2n)::before {
		background-image: linear-gradient(80deg, $main-red-rgb-015, transparent 50%);
	}
	
	.yellow::before {
		background-image: linear-gradient(
			-80deg,
			$main-yellow-rgb-015,
			transparent 50%
		);
	}
	.yellow:nth-child(2n)::before {
		background-image: linear-gradient(
			80deg,
			$main-yellow-rgb-015,
			transparent 50%
		);
	}
	
	
	.sidenav {
  width: 130px;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 10px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}
}


@import url('https://fonts.googleapis.com/css?family=Raleway');
#text{
display:none;
}

a:active{
  color:#ffd323;
}
body{
   background-color:white;
}
body{

  color:black;
}

#more {display: none;}

@import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
}

@import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
}




.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgba(158,76,0,0.85) 0%, rgba(0,0,139,1) 100%);
  color:white;
}
.logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
}

.inner-header {
  height:65vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  height:40px;

}

.waves {
  position:relative;
  width: 100%;
/*   height:8vh; */
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:80px;
  max-height:80px;
}

.content {
  position:relative;
  height:8vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:20px;
    min-height:40px;
  }
  .content {
    height:10vh;
  }
  h1 {
    font-size:24px;
  }
}




.zoom {
  padding: 50px;

  background-image: url("/storage/images/homepage.png") ;
  background-repeat: no-repeat;
  background-size: 250px 450px;
  transition: transform .2s;
  width: 300px;
  height: 500px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.5); 
}
            </style>
     

   







    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">Welcome To Berqat App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Privacy Policy</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#abtus">About Us</a></li>

                        <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" style="background:#2e236b;"data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small" ></span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <div class="text-center ">

                 

                        <img src="{{ url('/storage/images/berqat.png') }}"  class="rounded" class="img-thumbnail" width="20%" height="20%">
</br></br> <h1 class="display-1 lh-1 mb-3">BERQAT</h1>

</div>
                            <p class="lead fw-normal text-muted mb-5">Aplikasi kami memberitahu anda mengenai aritkel dan kemaskini terbaru</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" >
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="70%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen">
                                    <div class="zoom">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <!-- <img src="{{ url('/storage/images/homepage.png') }}" style="max-width: 200%; height: 100%">    -->
</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        
        <!-- App features section-->
       
          

	



	
	<div class="container py-2">

    
			<div class="postcard__text t-dark">
				
				<div class="card text-center">
              
		
                <div class="text-center bg-gradient-primary-to-secondary">
                   
         
       
</div>
  <div class="card-header">
 
    <ul class="nav nav-pills card-header-pills">

        
      <li class="nav-item">
        <a class="nav-link active"  style="background:#2e236b;" href="#">English</a>
      </li>
     &nbsp;
      <li class="nav-item">
        <a class="nav-link active"  style="background:#2e236b;" href="#" tabindex="-1" aria-disabled="true">B.Melayu</a>
      </li>
    </ul>
  </div>
  <div class="card-body" id="features">

  <h2 class="display-4 lh-1 mb-4"> <img src="{{ url('/storage/images/privacy.png') }}" alt="Pineapple" style="width:120px;height:120px;margin-right:15px;">
Privacy Policy
  <i class='fas fa-shield-alt' style='font-size:24px'></i>
</h2> 
    <p class="card-text"  style="border-radius: 15px;
  background:  #2e236b;   color: white;
"  >  What information do we get?<br>

    <dl>
  <dt>●	We may collect information from you as you access or login on any of our websites, web applications, or mobile applications. (Berkat TV products are available for download on the iOS App Store or the Google Play store.) Or any interaction with us, by any means of interactions. Examples include:</dt>
  <br><dd>1.	Your personal data (such as name, phone number, email address, login information, etc.);</dd>
  <dd>2.	Your location (to see unique travel locations and route options);</dd>
  <dd>3.	How you use our Applications, Websites, or Services (such as features used and content viewed);</dd>
  <dd>4.	Device information (such as hardware model and serial number, IP address, file name and version and advertising identifiers or any information that could provide an indication of device or application modifications);</dd>
  <dd>5.	Information or messages you are currently using to communicate using our application;</dd>
  <dd>6.	Personal data that may be collected through your interactions with us.</dd>
  
</dl>
</p>
<br>
<p class="card-text " style="border-radius: 15px;
  background: #2e236b;   color: white;
"  >How do we use your information?<br>



<dl>
  <dt>●	All information we receive from you may be used for these purposes in one of the following manners:</dt><br>
  <dd>1.	Help maintain the reliability, protection and quality of our services and users;</dd>
  <dd>2.	For the purpose of providing mutual communication between users;</dd>
  <dd>3.	Conduct research and development activities;</dd>
  <dd>4.	Sharing promotional and non-promotional materials of marketing and non-marketing messages to fellow users (more information);</dd>
  <dd>5.	In compliance with legal proceedings.</dd>
 
</dl>
</p><span id="dots">...</span>


<br>

<div>
<span id="more">
<p class="card-text"  style="border-radius: 15px;
  background:  #2e236b;   color: white;
" >Send promotional and non -promotional information to users.<br>


<dl>
 <br>
  <dd>●	We may sometimes use the data we collect for the purpose of promoting our services to our users. This includes sending communications with users about services, features, promotions, polls, reviews, surveys, news, updates and events berkaitan Berkat TV. We may send such marketing promotional materials by mail, by phone call, short message service, online ordering service, push notification and email</dd>
  <dd>●	We are also able to share information by sending orders about the services provided by Berkat TV partners with our customers. While this information is being shared, we. send user notifications about Berkat TV partner services, we will not sell or exchange our users ’personal information to or with such partners or others for the purpose of their marketing or direct advertising promotions, except with the user’s consent.</dd>
  <dd>●	We may use the data we collect to personalize the marketing promotional orders (including advertising) we deliver, including based on a user's location, previous use of Berkat TV services, and user experience and settings</dd>
  <dd>●	We may also use your Personal Data to evaluate our customers’ promotional preferences and patterns, further and to obtain insights that can be used to tailor the types of products and offers we provide to you. This includes including the Personal Details we hold about your use of our services with the knowledge we have collected about your use of the web. We may also be able to combine the information we collect about you with the information we collect about our other customers to gain this insight and to identify market trends. We also use advertising services and products offered by third party service providers (such as marketing agencies and social media platforms) for marketing and promotional purposes that may include sharing the personal data we carry about you.</dd>
  <dd>●	You have the right to request that we not process your Personal Data for direct marketing purposes. By indicating that you when you choose Disagree to receive promotional materials.to direct marketing While your Personal Data is being collected, at the time we collect your Personal Data, you may exercise your right to prevent such processing.</dd>
 
</dl>

<br>
<p class="card-text"  style="border-radius: 15px;
  background:  #2e236b;   color: white;
" >How do we protect your information?<br>


<dl>
 <br>
  <dd>●	We employ a number of security measures to protect and implement a number of security measures to keep your personal information secure when entering, transmitting or accessing your personal information.</dd>
  
</dl>


<br>
<p class="card-text"  style="border-radius: 15px;
  background:  #2e236b;   color: white; ">Do we use "cookies"?<br>


<dl>
 <br>
  <dd>●	We use Google Analytics to evaluate how visitors use different Berkat TV websites. Google Analytics is a web analytics tool provided by Google. Google may use the data collected to monitor and evaluate the actions of users of the Berkat TV website in order to collect feedback and communicate with other Google services. Google may use this collected data to tailor and tailor its internet advertising.</dd>
    <dd>●	Google Analytics data is also used for Berqat's "Show Ads" campaign. The use of such data is also protected by the Google Analytics user agreement and privacy policy</dd>
    <dd>●	Berkat TV applications use "cookies", such as Google Analytics "cookies", and other related technologies. The purpose of the use of these "cookies" is for us to understand and store user favorite settings and use models, to monitor advertisements and to obtain and edit usage and traffic data on the website</dd>
    <dd>●	You have the right to opt-out of cookies through your browser or system settings, but you should be aware that canceling these cookies may result in an incomplete Berkat TV service experience</dd>
  
</dl>
<br>
<p class="card-text"  style="border-radius: 15px;
  background: #2e236b;  color: white;
" >Will we disclose information to outsiders?<br>


<dl>
 <br>
  <dd>●	We do not sell, exchange or pass on your personal information to third parties. This does not involve trusted third parties who assist us in running our website, conducting our business or serving you as long as those parties provide confidentiality with this information. We may also pass on your information if we find we feel that the release is necessary to comply with the law, enforce our website policies, or protect our rights, property, or safety. However, personally identifiable visitor information may be provided for marketing, advertising, or other use by other parties..</dd>
   
</dl>


<br>
<p class="card-text"  style="border-radius: 15px;
  background: #2e236b;  color: white;
">Changes to our Privacy Policy


 <br>
  <dd>●	From time to time, we will change this Privacy Policy, and a revised version will be posted on our website. For any updates or improvements to this Privacy Notice, please come back to check regularly. By continuing to use Berkat TV service without notifying us of the problem, you agree with our new Privacy Policy.
</dd>
   


</p>
</span>
</div>
    
<div>
  <br>

</div>

<button onclick="myFunction()" id="myBtn" style=" background-color: #2e236b;
  border: none;
  color: white;">Read more</button>

			</div>
		
	</div>

</section>
            
      <br> 
       <!-- Basic features section-->
        <div class="px-5 px-sm-0" >
     
<div class="header" >

<!--Content before waves-->
<div class="inner-header flex" >
<!--Just the logo.. Don't mind this-->

</div>

<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->
<!-- <div class="content flex">
</div> -->
<!--Content ends-->
<section  id="abtus" style="border-radius: 15px;>

            <div class="container px-4">

                <div class="row gx-3 align-items-center justify-content-center justify-content-lg-between">
         
                    <div class="col-12 col-lg-5" style="justify-content: center">
                        <h3 class="display-4 lh-1 mb-4" >Pengenalan</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0" >
Berkat TV ditubuhkan pada tahun 2020 sebagai sebuah agensi yang menawarkan perkhidmatan pengendali digital, pegurusan acara (Event Management ) ,perancang program (Event Planner) dan perunding acara ( Event Consultant) yang lebih menjurus kepada menyediakan perkhidmatan berbentuk kebajikan masyarakat dan sosial.Kami juga turut menyediakan bantuan untuk Badan Pertubuhan Bukan Kerajaan (NGO) bagi memastikan objektif dan peranan setiap NGO dapat dicapai bagi setiap kempen. Kami percaya dengan pengalaman kerja dan kekuatan Berkat TV, ia amat memberi kesan kepada gerak kerja dan memainkan peranan yg cukup penting dalam menyampaikan ideologi dan fungsi sebenar agensi kami sekaligus menjadikan media sebagai ejen penghubung antara masyarakat diluar sana dengan Berkat TV.</p>
                    </div>
                    <div class="col-sm-8 col-md-6">



                        <div class="w3-content w3-section" style="max-width:500px">
 

 <img class="mySlides w3-animate-fading" src="{{ url('/storage/images/homepage.png') }}" style="width:100%">
 <img class="mySlides w3-animate-fading" src="{{ url('/storage/images/Loginpage.png') }}" style="width:100%">
 <img class="mySlides w3-animate-fading" src="{{ url('/storage/images/Onboardpage.png') }}" style="width:100%">
 <img class="mySlides w3-animate-fading" src="{{ url('/storage/images/Prayertimepage.png') }}" style="width:100%">



</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
 var i;
 var x = document.getElementsByClassName("mySlides");
 for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";  
 }
 myIndex++;
 if (myIndex > x.length) {myIndex = 1}    
 x[myIndex-1].style.display = "block";  
 setTimeout(carousel, 7000);    
}
</script>
</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section
        <section class="cta">
          
            <div class="cta-content">
                <div class="container px-5">
                   
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Download for free</a>
                </div>
            </div>
        </section> -->
        <!-- App badge section-->
        <section class="bg-gradient-primary-to-secondary" id="download" style="border-radius: 15px;>
            <div class="container px-5" >
                <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="{{ url('/storage/images/google-play-badge.svg') }}" alt="..." /></a>
                    <a href="#!"><img class="app-badge" src="{{ url('/storage/images/app-store-badge.svg') }}" alt="..." /></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-white text-center py-5">
            <!-- <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Your Website 2021. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div> -->
        </footer>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js">
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->

</script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

       
    </body>
</html>

