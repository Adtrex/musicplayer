<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="music.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="sidebar">
  <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>



<div class="main">


<nav class="navbar sticky-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sticky top</a>
  </div>
</nav>



	<div class="main-play">
		<div class="container">

			<div>
	<p></p>
	<div>
		<h1 id="songTitle1">Bad Influence</h1>
		<p id="songArtist1"><span>Omah Lay</span> <span>60Million Plays</span></p>
		<button class="btn">Learn more</button>
		<button class="btn like-btn">
			<img src="icons/heart-fill.svg" alt="" width="32" height="32" title="Bootstrap">
		</button>
	</div>
</div>

  <div class="row">
    <div class="col col-left">
    <div class="col">
    	<div class="row">
		 	   <div class="col-9 ">
		      Top Artists
		    </div>
		    <div class="col-3">
		      See All
		    </div>
		  </div>
      <div class="row">
    
    <div class="col"><div><img class="top-artist" src="dax.jpg"></div></div>
    <div class="col"><div><img class="top-artist" src="drake.jpg"></div></div>
    <div class="col"><div><img class="top-artist" src="fireboy.jpg"></div></div>
  </div>
    </div>

		      
		      <div class="row">
		 	   <div class="col">
		 	   	<div class="col">
		      <div class="row ">
		 	   <div class="col-9 ">
		      Genre
		    </div>
		    <div class="col-3">
		      See All
		    </div>
		  </div>
		  
	<div class="row justify-content-center">
    <div class="col-5 genre-col-1">col</div>
    <div class="col-5 genre-col-2">col</div>
</div>
<div class="row justify-content-center">
    <div class="col-4 genre-col-3">col</div>
    <div class="col-6 genre-col-4">col</div>
</div>
<div class="row justify-content-center">
    <div class="col-6 genre-col-5">col</div>
    <div class="col-4 genre-col-6">col</div>
</div>
</div>
		    </div>
		    <span class="col-break"><br/></span>
		    <div class="col col-md-8">
		      <div class="row ">
		 	   <div class="col-9 ">
		      TopCharts
		    </div>
		    <div class="col">
		      See All
		    </div>
		  </div>
		    </div>
		  </div>
		</div>
		<span class="col-break"><br/></span>
    <div class="col col-md-4 ">
      <div class="row">
		 	   <div class="col-9 ">
		      Player
		    </div>
		    <div class="col-3">
		      <img src="icons/arrow-down-up.svg" alt="" width="32" height="32" title="Bootstrap">
		    </div>
		  </div>
		  <center>
		  	
		  <div class="now-playing-artist" id="image">
		  	<img class="now-playing-artist" src="">
		  </div>
		  <h3 id="songTitle">Stuck With You</h3>
		  <p id="songArtist">Ariana Grande Ft justin bieber</p>
		  <p>Best of 2020</p>
			
		<div class="play-controls">
			<button class="btn">
			<img src="icons/arrow-left-right.svg" alt="" width="32" height="32" title="Bootstrap">
			</button>
			<button class="btn">
			<img src="icons/skip-start-fill.svg" alt="" width="32" height="32" title="Bootstrap">
			</button>
			<button id="play" class="btn play-btn" onclick="playOrPauseSong()">
			<img alt="" width="32" height="32" title="Bootstrap">
			</button>
			<button class="btn" onclick="next()">
			<img src="icons/skip-end-fill.svg" alt="" width="32" height="32" title="Bootstrap">
			</button>
			<button class="btn">
			<img src="icons/shuffle.svg" alt="" width="32" height="32" title="Bootstrap">
			</button>
			<br />
			<button class="btn">
			<img src="icons/chevron-up.svg" alt="" width="32" height="32" title="Bootstrap">
			</button>
		</div>

	</center>


    </div>

  </div>
</div>
		
	</div>


</div>

<script type="text/javascript">
	var songs =["joker.mp3","Toosie_Slide.mp3","song3.mp3"];
	var title =["Joker","Toosie Slide","Vibration"];
	var poster =["joker.jpg","Toosie_Slide.png","vibration.jpg"];
	var artist =["DAX","Drake","Fireboy"];

	var songTitle = document.getElementById("songTitle");

	var songArtist = document.getElementById("songArtist");

	var songTitle1 = document.getElementById("songTitle1");

	var songArtist1 = document.getElementById("songArtist1");

	var fillBar = document.getElementById("fill");

	var song = new Audio();
	var currentSong = 0;

	window.onload = playSong;

	function playSong(){
		song.src = songs[currentSong];

		songTitle.textContent = title[currentSong];

		$("#image img").attr("src",poster[currentSong]);
		$("#more img").attr("src",poster[currentSong]);

		songArtist.textContent = artist[currentSong];

		songTitle1.textContent = title[currentSong];
		songArtist1.textContent = artist[currentSong];

		song.play();
	}

	function playOrPauseSong(){

		if(song.paused){
			song.play();
			$("#play img").attr("src","icons/pause.svg");
		}else{
			song.pause();
			$("#play img").attr("src","icons/play.svg");
		}

	}

	function next(){
		currentSong++;
		if (currentSong > 2) {
			currentSong = 0;
		}
		playSong();
		$("#play img").attr("src", "icons/pause.svg");
		$("#image img").attr("src",poster[currentSong]);
	}

	function prev(){
		currentSong++;
		if (currentSong < 2) {
			currentSong = 0;
		}
		playSong();
		$("#play img").attr("src", "icons/pause.svg");
		$("#image img").attr("src",poster[currentSong]);
	}
</script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
