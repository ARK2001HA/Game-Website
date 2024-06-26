<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videos - Robomotz</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="videos.css">
</head>    
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="duplicatehome.php" style="font-family: Skranji, cursive; color: black;"><img class="myImg" src="robomotz logo-02.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto"></div>
          <div class="navbar-nav">
            <a class="nav-item nav-link" style="color: black;" href="aboutus.php"><strong>About Us</strong></a>
            <a class="nav-item nav-link" style="color: black;" href="gallery.php"><strong>Gallery</strong></a>
            <a class="nav-item nav-link" style="color: black;" href="product.php"><strong>Products</strong></a>
            <a class="nav-item nav-link" style="color: black;" href="games.php"><strong>Games</strong></a>
            <a class="nav-item nav-link" style="color: black;" href="news&events.php"><strong>News & Events</strong></a>
            <a class="nav-item nav-link" style="color: black;" href="learn.php"><strong>Learn</strong></a>
            <a class="nav-item nav-link" style="color: black;" href="videos.php"><strong>Videos</strong></a>
            <a class="nav-item nav-link" style="color: black;" href="login.php"><img class="myImg1" src="person-2x.png"><strong>Sign in</strong></a>
            <a class="nav-item nav-link" style="color: black;" href="adminlogin.php"><strong>Admin</strong></a>
          </div>
        </div>
      </nav>
    </header> 

        <section class="home">
            <video class="video-slide" src="Marvels SpiderMan 2.mp4" autoplay muted loop></video>
            <div class="content">
                <h1>Welcome to the world of<br><span> Epic Games</span></h1>
                <p>Don't only play, feel the blood rushing inside you!</p>
                <a href="#bottom">Read More</a> 
            </div>
            <div class="media-icons">
            <a href="https://www.facebook.com/?stype=lo&jlou=Afe4GJ-9kZKLHbWSRp8R2Jixm4F-y8SkcGQNoAbhzXVDVQkVOLIfToFx8BmpYNmCncY3yqqKtdSeRLNc79Gt0OPMY4KAb0pvHDGbXhKkwr1oog&smuh=24865&lh=Ac9Rl5dxhpmS9hOzqcM"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fab fa-twitter"></i></a>
        </div>
        </section>

        <p id="bottom"></p>

         <!--1st Section-->
        <div class="container">
          <h1><strong>WELCOME TO THE WORLD OF ASSASSIN'S CREED</strong></h1>
          <div class="row">
            <div class="col">
              <div class="feature-img">
                <img src="viasspic1.jpg" width="100%">
                <img src="play.png" class="play-btn" onclick="playVideo('y2mate.com - E3 Cinematic Trailer  Assassins Creed 4 Black Flag UK_1080p_001.mp4')">
              </div>
            </div>
            <div class="col">
              <div class="small-img-row">
                <div class="small-img">
                  <img src="viasspic2.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideo1('Assassins Creed Brotherhood.mp4')">
                </div>
                <p>Assassin's Creed: Brotherhood, a direct sequel to 2009's Assassin's Creed II, is a 2010 action-adventure video game.</p>
              </div>
              <div class="small-img-row1">
                <div class="small-img">
                  <img src="viasspic3.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideo2('y2mate.com - Assassins Creed Unity Arno  Master Assassin  Trailer  Ubisoft NA_1080p_001_001.mp4')">
                </div>
                <p>Assassin's Creed Unity, released in November 2014 for all<br>sorts of platform, is an action-adventure video game.</p>
              </div>
              <div class="small-img-row2">
                <div class="small-img">
                  <img src="viasspic4.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideo3('Assassins Creed 3.mp4')">
                </div>
                <p>Assassin's Creed III, the fifth major installment in the Assassin's Creed series, is a 2012 action-adventure video game.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="video-player" id="videoPlayer">
          <video width="100%" controls autoplay id="myVideo">
            <source src="y2mate.com - E3 Cinematic Trailer  Assassins Creed 4 Black Flag UK_1080p_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideo()">
        </div>

        <div class="video-player" id="videoPlayer1">
          <video width="100%" controls autoplay id="myVideo1">
            <source src="Assassins Creed Brotherhood.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideo1()">
        </div>

        <div class="video-player" id="videoPlayer2">
          <video width="100%" controls autoplay id="myVideo2">
            <source src="y2mate.com - Assassins Creed Unity Arno  Master Assassin  Trailer  Ubisoft NA_1080p_001_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideo2()">
        </div>

        <div class="video-player" id="videoPlayer3">
          <video width="100%" controls autoplay id="myVideo3">
            <source src="Assassins Creed 3.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideo3()">
        </div>

        <!--End of 1st Section-->

        <hr>

        <!--2nd Section-->
        <div class="container">
          <h1><strong>WELCOME TO THE WORLD OF BATMAN</strong></h1>
          <div class="row">
            <div class="col">
              <div class="feature-img">
                <img src="vibatpic1.jpg" width="100%">
                <img src="play.png" class="play-btn" onclick="playVideoa1('y2mate.com - Batman Arkham Knight  Be the Batman Trailer  PS4_480p_001_001.mp4')">
              </div>
            </div>
            <div class="col">
              <div class="small-img-row">
                <div class="small-img">
                  <img src="vibatpic2.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideoa2('Batman_ Arkham Origins Official Trailer_001.mp4')">
                </div>
                <p>Batman: Arkham Origins, the third main installment in the Batman: Arkham series, is a 2013 action-adventure game.</p>
              </div>
              <div class="small-img-row1">
                <div class="small-img">
                  <img src="vibatpic3.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideoa3('y2mate.com - Official Batman Arkham Knight Gameplay City.mp4')">
                </div>
                <p>Batman: Arkham City, the sequel to the 2009 video game Batman: Arkham Asylum, is a 2011 action-adventure game.</p>
              </div>
              <div class="small-img-row2">
                <div class="small-img">
                  <img src="vibatpic4.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideoa4('y2mate.com - Official Batman Arkham Knight Announce Asylum.mp4')">
                </div>
                <p>Batman: Arkham Asylum, based on the DC Comics superhero Batman, is a 2009 action-adventure.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="video-player1" id="videoPlayera1">
          <video width="100%" controls autoplay id="myVideoa1">
            <source src="y2mate.com - Batman Arkham Knight  Be the Batman Trailer  PS4_480p_001_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideoa1()">
        </div>

        <div class="video-player1" id="videoPlayera2">
          <video width="100%" controls autoplay id="myVideoa2">
            <source src="Batman_ Arkham Origins Official Trailer_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideoa2()">
        </div>

        <div class="video-player1" id="videoPlayera3">
          <video width="100%" controls autoplay id="myVideoa3">
            <source src="y2mate.com - Official Batman Arkham Knight Gameplay City.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideoa3()">
        </div>

        <div class="video-player1" id="videoPlayera4">
          <video width="100%" controls autoplay id="myVideoa4">
            <source src="y2mate.com - Official Batman Arkham Knight Announce Asylum.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideoa4()">
        </div>

        <!--End of 2nd Section-->

        <hr>

        <!--3rd Section-->
        <div class="container">
          <h1><strong>WELCOME TO THE WORLD OF THE WITCHER</strong></h1>
          <div class="row">
            <div class="col">
              <div class="feature-img">
                <img src="viwitpic1.jpg" width="100%">
                <img src="play.png" class="play-btn" onclick="playVideob1('y2mate.com - The Witcher 3 Wild Hunt.mp4')">
              </div>
            </div>
            <div class="col">
              <div class="small-img-row">
                <div class="small-img">
                  <img src="viwitpic2.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideob2('The Witcher_ Rise of the White Wolf-Official Trailer (HD)_001.mp4')">
                </div>
                <p>The Witcher: Rise of the White Wolf developed mainly for Xbox 360 and PlayStation 3.</p>
              </div>
              <div class="small-img-row1">
                <div class="small-img">
                  <img src="viwitpic3.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideob3('The Witcher 3_ Wild Hunt - Hearts of Stone Launch Trailer _ PS4_001.mp4')">
                </div>
                <p>The Witcher 3: Wild Hunt – Hearts of Stone is the first great expansion pack for the said 2015 video game.</p>
              </div>
              <div class="small-img-row2">
                <div class="small-img">
                  <img src="viwitpic4.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideob4('y2mate.com - The Witcher 3 Wild Hunt  Blood and Wine.mp4')">
                </div>
                <p>The Witcher 3: Wild Hunt – Blood and Wine is the second and final expansion pack for the said 2015 video game.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="video-player2" id="videoPlayerb1">
          <video width="100%" controls autoplay id="myVideob1">
            <source src="y2mate.com - The Witcher 3 Wild Hunt.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideob1()">
        </div>

        <div class="video-player2" id="videoPlayerb2">
          <video width="100%" controls autoplay id="myVideob2">
            <source src="The Witcher_ Rise of the White Wolf-Official Trailer (HD)_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideob2()">
        </div>

        <div class="video-player2" id="videoPlayerb3">
          <video width="100%" controls autoplay id="myVideob3">
            <source src="The Witcher 3_ Wild Hunt - Hearts of Stone Launch Trailer _ PS4_001" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideob3()">
        </div>

        <div class="video-player2" id="videoPlayerb4">
          <video width="100%" controls autoplay id="myVideob4">
            <source src="y2mate.com - The Witcher 3 Wild Hunt  Blood and Wine.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideob4()">
        </div>

        <!--End of 3rd Section-->

        <hr>

        <!--4th Section-->
        <div class="container">
          <h1><strong>WELCOME TO THE WORLD OF HITMAN</strong></h1>
          <div class="row">
            <div class="col">
              <div class="feature-img">
                <img src="vihitpic1.jpg" width="100%">
                <img src="play.png" class="play-btn" onclick="playVideoc1('HITMAN - E3 2015 Trailer _ PS4_001.mp4')">
              </div>
            </div>
            <div class="col">
              <div class="small-img-row">
                <div class="small-img">
                  <img src="vihitpic2.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideoc2('Hitman 3.mp4')">
                </div>
                <p>Hitman 3, a 2021 stealth game, can be played on Microsoft Windows, PlayStation 4, PlayStation 5, and Xbox One Series.</p>
              </div>
              <div class="small-img-row1">
                <div class="small-img">
                  <img src="vihitpic3.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideoc3('y2mate.com - HITMAN 2 Announce Trailer_1080p_001.mp4')">
                </div>
                <p>Hitman 2, a 2018 stealth video game, is the second game in<br>the World of Assassination trilogy.</p>
              </div>
              <div class="small-img-row2">
                <div class="small-img">
                  <img src="vihitpic4.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideoc4('Hitman_ Absolution Trailer_001.mp4')">
                </div>
                <p>Hitman: Absolution, a 2012 stealth video game, is the fifth installment in the Hitman game series.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="video-player3" id="videoPlayerc1">
          <video width="100%" controls autoplay id="myVideoc1">
            <source src="HITMAN - E3 2015 Trailer _ PS4_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideoc1()">
        </div>

        <div class="video-player3" id="videoPlayerc2">
          <video width="100%" controls autoplay id="myVideoc2">
            <source src="Hitman 3.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideoc2()">
        </div>

        <div class="video-player3" id="videoPlayerc3">
          <video width="100%" controls autoplay id="myVideoc3">
            <source src="y2mate.com - HITMAN 2 Announce Trailer_1080p_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideoc3()">
        </div>

        <div class="video-player3" id="videoPlayerc4">
          <video width="100%" controls autoplay id="myVideoc4">
            <source src="Hitman_ Absolution Trailer_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideoc4()">
        </div>
        <!--End of 4th Section-->

        <hr>

        <!--5th Section-->
        <div class="container">
          <h1><strong>WELCOME TO THE WORLD OF PUBG</strong></h1>
          <div class="row">
            <div class="col">
              <div class="feature-img">
                <img src="vipubpic1.jpg" width="100%">
                <img src="play.png" class="play-btn" onclick="playVideod1('y2mate.com - PUBG Battlegrounds  Free 2 Play Teaser Trailer  PS4_1080p_001.mp4')">
              </div>
            </div>
            <div class="col">
              <div class="small-img-row">
                <div class="small-img">
                  <img src="vipubpic2.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideod2('y2mate.com - Season 8 Gameplay Trailer  PUBG_1080p_001_001.mp4')">
                </div>
                <p>PUBG: PlayerUnknown's Battlegrounds Season 8, an action-adventure game, is mainly developed for youths.</p>
              </div>
              <div class="small-img-row1">
                <div class="small-img">
                  <img src="vipubpic3.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideod3('y2mate.com - Season 10 Haven Launch Trailer  PUBG_1080p_001.mp4')">
                </div>
                <p>PUBG: PlayerUnknown's Battlegrounds Season 10, a shooting game, can be played on iOS, iPhone 6S and Android devices.</p>
              </div>
              <div class="small-img-row2">
                <div class="small-img">
                  <img src="vipubpic4.jpg">
                  <img src="play.png" class="play-btn" onclick="playVideod4('y2mate.com - PlayerUnknowns Battlegrounds  Season 6 Gameplay Trailer  PS4_1080pFHR_001.mp4')">
                </div>
                <p>PUBG: PlayerUnknown's Battlegrounds Season 6, is a shooting single as well as multi-player game.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="video-player4" id="videoPlayerd1">
          <video width="100%" controls autoplay id="myVideod1">
            <source src="y2mate.com - PUBG Battlegrounds  Free 2 Play Teaser Trailer  PS4_1080p_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideod1()">
        </div>

        <div class="video-player4" id="videoPlayerd2">
          <video width="100%" controls autoplay id="myVideod2">
            <source src="y2mate.com - Season 8 Gameplay Trailer  PUBG_1080p_001_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideod2()">
        </div>

        <div class="video-player4" id="videoPlayerd3">
          <video width="100%" controls autoplay id="myVideod3">
            <source src="y2mate.com - Season 10 Haven Launch Trailer  PUBG_1080p_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideod3()">
        </div>

        <div class="video-player4" id="videoPlayerd4">
          <video width="100%" controls autoplay id="myVideod4">
            <source src="y2mate.com - PlayerUnknowns Battlegrounds  Season 6 Gameplay Trailer  PS4_1080pFHR_001.mp4" type="video/mp4">
          </video>
          <img src="close.png" class="close-btn" onclick="stopVideod4()">
        </div>

        <!--End of 5th Section-->

        <footer>
          <div class="flex">
              <small>Copyright &copy; 1998-2021, Robomotz, Inc. All rights reserved.<span style="color:whitesmoke"> <strong> Robomotz</strong></span></small>
          </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script> 
  <script src="Videos.js"></script>
      </body>
      </html>