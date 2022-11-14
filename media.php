<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Mushroom Media - Mushroom Madness</title>
  <meta name="description" content="a video about mushrooms"> 
  <link rel="stylesheet" href="css/style.css"> <!-- tells html where to find css styling -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- part of responsive design: gives the browser instructions on how to control the page's dimensions and scaling. -->
  
  <!-- links to print style sheet -->
  <link rel="stylesheet" media="screen" href="css/style.css">
<link rel="stylesheet" media="print" href="css/print.css">

<script> 

	 
    function movieTime() {
      alert("Let's Watch the Mushroom Movie!");
    }
  
function makeBlack() {

  var main = document.querySelector('main');
  main.style.backgroundColor = 'black';
   
}
        
        </script>
</head>

<body>

<div class="wrapper"> <!-- makes all elmenets fit inside a predeterimed space - can be used to center items -->

<header class="banner">
   <h1>Mushroom Madness</h1>
  

<nav class="primary-menu"> <!-- main menu navigation w/ links -->
   <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="list.php">Mushroom List</a></li>
      <li><a href="intrapage.php">Mushroom Info</a></li>
      <li><a href="media.php">Mushroom Media</a></li>
      <li><a href="bibliography.php">Books on Mushrooms</a></li>
      <li><a href="13.php">SEO for Mushrooms</a></li>
      <li><a href="form.php">Contact Us</a></li>
      
   </ul>
</nav>
  
	
</header>


   <main>
      <!-- main content of page here -->
      
      
      <h2> Mushrooms the Movie</h2>
      
      <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/552762843?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="mushroom media.mp4"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
      
   <button onclick="movieTime()">Play Movie?</button>  
   
   <button onclick="makeBlack()">Movie Theater Mode</button>  


      <p class="top"><a href="#">Back to Top</a></p>
      
   </main>

   <aside class="sidebar"> <!-- content for side of page -->
      
      <h2> More Mushroom Facts! </h2>
       <img src="images/singlemushroom.jpg"  alt="a single red capped mushroom with white spots" width="150" height="300"> <!-- tells html where to find local image -->
       
       <p> The fly amanita is poisonous. Although classified as poisonous, reports of human deaths resulting from A. muscaria ingestion are extremely rare. After parboiling twice with water draining—which weakens its toxicity and breaks down the mushroom's psychoactive substances—it is eaten in parts of Europe, Asia, and North America </p>
       
       <p> All <strong>Amanita muscaria,</strong> varieties, but in particular A. muscaria var. muscaria, are noted for their hallucinogenic properties, with the main psychoactive constituents being the neurotoxins ibotenic acid and muscimol. A local variety of the mushroom was used as an intoxicant and entheogen by the indigenous peoples of Siberia and by the Sámi, and has a religious significance in these cultures. There has been much speculation on possible traditional use of this mushroom as an intoxicant in other places such as the Middle East, Eurasia, North America, and Scandinavia. </p>
       
      
   </aside>

<footer class="site-footer"> <!-- page footer -->

   <p> Resources: Wikimedia Foundation. (2021, May 12). Amanita muscaria. Wikipedia. https://en.wikipedia.org/wiki/Amanita_muscaria#Distribution_and_habitat. </p>
   
   <?php include('includes/footer.php');?>
   
</footer>

</div> <!-- end of wrapper div -->
</body>
</html>