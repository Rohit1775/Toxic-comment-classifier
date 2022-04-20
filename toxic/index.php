<!DOCTYPE html>
<html>
<head>
<title>Toxic Comment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1{
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('./nlp.jpg');
  min-height: 100%;
}




.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body>


<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#devlopers" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>DEVLOPERS</a>
    <a href="#search" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-search"></i>SEARCH</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    </a>
  </div>

  
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#devlopers" class="w3-bar-item w3-button" onclick="toggleFunction()">DEVLOPERS</a>
    <a href="#search" class="w3-bar-item w3-button" onclick="toggleFunction()">SEARCH</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>


<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
  </div>
</div>


<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center"><em>We Love Coding</em></p>
  <p>Natural language processing (NLP) refers to the branch of computer science—and more specifically, the branch of artificial intelligence or AI—concerned with giving computers the ability to understand text and spoken words in much the same way human beings can.
    NLP combines computational linguistics—rule-based modeling of human language—with statistical, machine learning, and deep learning models. Together, these technologies enable computers to process human language in the form of text or voice data and to ‘understand’ its full meaning, complete with the speaker or writer’s intent and sentiment.
</p>
 

<div class="w3-content w3-container w3-padding-64" id="devlopers">
  <h3 class="w3-center">DEVELOPERS</h3>
  <p class="w3-center"><em>Let us know our Developers</p>
  <div class="jumbotron">
						
						
							
								
								<div class="col-md-6 clients">
									<div class="row">
										<div class="col-md-4">
											<img style="width: 200px; height: 200px;" src="./r1.jpg">
										</div>
										<div class="col-md-8">
											<blockquote>
												
												There is so much that goes in our head even when we just smile. From all those little bubbles in the head, choose the one that makes you the happiest and stick with it.
												<br><br>
												<cite>&#8212;Dhruv Kumar Jha, Department of IT <br>Event Manager Kaalrav<br> Sexy Figure </cite><br>
												
											</blockquote>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 clients">
									<div class="row">
										<div class="col-md-4">
											<img style="width: 200px; height: 200px;" src="./b1.jpg">
										</div>
										<div class="col-md-8">
											<blockquote>
												
												Time never stops by. Spend each moment of your life as if you are capturing them to put into your biopic. You are never going to 'Live Life' again. <br>Live Pure, Live Great.
												 <br><br>
												<cite>&#8212;Ayush Bhardwaj, Department of IT <br>Chutiya Secretary SMIT<br>Ex- Intern Sonagachi ,kolkata <br>Ex-Intern Gb Road , Delhi</cite><br>
												
											</blockquote>
										</div>
									</div>
								</div>

							</div>
                
<div class="container">
    <div class="w3-content w3-container w3-padding-64" id="search">
    <h3 class="w3-center">SEARCH</h3>
    <p class="w3-center"><em>Let's see How Much Toxicity Your search contain..</em></p>
    <a href="search.html"><h2 class="w3-center">Click Here to Go to the search page</h2></a>
           
</div>                  
                            



<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>


<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="./smit.png" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Sikkim ,INDIA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +1000000<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="#" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>



 
<script>



window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}


</script>

</body>

</html>

