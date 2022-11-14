<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home - Mushroom Madness</title>
  <meta name="description" content="Home page for a website about mushrooms"> 
  <link rel="stylesheet" href="css/style.css"> <!-- tells html where to find css styling -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- part of responsive design: gives the browser instructions on how to control the page's dimensions and scaling. -->
  
  <!-- links to print style sheet -->
  <link rel="stylesheet" media="screen" href="css/style.css">
<link rel="stylesheet" media="print" href="css/print.css">

</head>

<body>

<div class="wrapper"> <!-- makes all elmenets fit inside a predeterimed space - can be used to center items -->

<header class="banner">

   <h1>Mushroom Madness</h1>
   <img src="images/tinymushroom.png"  alt="a tiny red capped mushroom with white spots" width="100" height="100"> <!-- tells html where to find local image -->

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
      <img src="images/mushroom.jpg"  alt="a red capped mushroom with white spots" width="500" height="344"> <!-- tells html where to find local image -->
      
      <h2> Mushrooms of North America</h2>
      
      <p> There are many kinds of indigenous mushrooms that grow in North America. The most famous is the <strong>Amanita muscaria,</strong> commonly known as the fly agaric or fly amanita. This mushroom has been popularized in the media and is famous for its bright red cap and striking white spots. I'm sure when many of you think of mushrooms this mushroom pops into your head. This article will try and educate readers on the many types and kinds of mushrooms that grow in North America. You might discover a new favorite mushroom! </p>
  
  <table class="table"> <!-- table content -->

   <caption>Mushrooms In North America</caption> <!-- table caption for WCAG-->

   <thead>
      <tr> <!-- table headers -->
         <th>Mushroom</th>
         <th>Scientific Name</th>
         <th>Location</th>
      </tr>
   </thead>
   <tbody> <!-- table body -->
      <tr>
         <td>Fairy Ring Mushroom</td>
         <td><strong>Marasmius oreades</strong></td>
         <td>Widely distributed across North America.</td>
      </tr>
      <tr>
         <td>Morel</td>
         <td><strong>Morchella esculenta</strong></td>
         <td>Found across much of the U.S.</td>
      </tr>
      <tr>
    	 <td>Chanterelle</td>
         <td><strong>Cantharellus cibarus</strong></td>
         <td>Found across North America, Eurasia, Central America, and Africa.</td>
      </tr>
      <tr>
    	 <td>Hedgehog Mushroom</td>
         <td><strong>Hydnum repandum</strong></td>
         <td>Widely recorded in North America, Europe, Australia, and northern Asia.</td>
      </tr>
      <tr>
    	 <td>Meadow Mushroom</td>
         <td><strong>Agaricus campestris</strong></td>
         <td>Found across North America, Europe, Asia, northern Africa, and New Zealand.</td>
         <tr>
    	 <td>Shaggy Mane Mushroom</td>
         <td><strong>Coprinus comatus</strong></td>
          <td>Grasslands and meadows across North America and Europe.</td>
      </tr>
      <tr>
    	 <td>Hen of the Wood</td>
         <td><strong>Grifola frondosa</strong></td>
         <td> Found in China, Japan, and northeastern North America. It has been reported as far west as Idaho.</td>
      </tr>
   </tbody>
   <tfoot> <!-- table footer -->
      <tr>
         <td colspan="3"> <!-- tells html how many cells to fill or "span" -->
         <a href="https://www.plantsnap.com/blog/edible-mushrooms-united-states/">Edible Mushrooms In United States</a></td> <!-- adds link to website -->
         
      </tr>
   </tfoot>
</table>
      
      <p>Back to the old favorite: <strong>Amanita muscaria,</strong> of the fly agaric or fly amanita is native throughout the temperate and boreal regions of the northern hemisphere. It is apart of the toadstool species. The fly agaric is a large white-gilled, white-spotted, usually red mushroom, and is one of the most recognizable and widely encountered in popular culture. You may recognize it from the famous video game franchise, Mario - this red cap mushroom inspired the "super mushroom" power up in Nintendo's iconic video game. </p>
      
      <p> Despite its easily distinguishable features, <strong>Amanita muscaria,</strong> is a fungus with several known variations, or subspecies. These subspecies are slightly different, some have yellow or white caps, but they are all usually called fly agarics, and they are most of the time recognizable by their notable white spots. Recent DNA fungi research, however, has shown that some of these variations are not muscarias at all, such as the peach-colored fly agaric for example, but the common name 'fly agaric' clings on. </p>
      
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