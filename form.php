<?php include('includes/process.php');?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact Us - Mushroom Madness</title>
  <meta name="description" content="A form to contact us and order a mushroom madness tshirt"> 
  <link rel="stylesheet" href="css/style.css"> <!-- tells html where to find css styling -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- part of responsive design: gives the browser instructions on how to control the page's dimensions and scaling. -->
  
  <!-- links to print style sheet -->
  <link rel="stylesheet" media="screen" type="text/css" href="css/style.css">
<link rel="stylesheet" media="print" type="text/css" href="css/print.css">

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
      
      <h2> Contact Us!</h2>
      
      <?php print $formMessage;?>
      
      <form class="assignment-form" method="post">

<label for="name">Name</label>
<input type="text" id="name" name="name">

<label for="email">Email</label>
<input type="text" id="email" name="email">
 
<fieldset>
 
        <legend>Do you like mushrooms?</legend>
 
        <label>Love them!<input type="radio" name="love-them" value="love-them"></label>      

        <label>Maybe Not... <input type="radio" name="maybenot" value="maybenot"></label>
        
        <label>Hate them >:( <input type="radio" name="hatethem" value="hatethem"></label>

</fieldset>
 
<fieldset>

        <legend>Favorite Mushrooms</legend>
       
        <label>Fairy Ring Mushroom <input type="checkbox" name="mushrooms[]" value="fairyring"></label>
               
       
        <label>Morel <input type="checkbox" name="mushrooms[]" value="Morel"></label>
               
       
        <label>Chanterelle <input type="checkbox" name="mushrooms[]" value="Chanterelle"></label>
        
        <label>Hedgehog Mushroom <input type="checkbox" name="mushrooms[]" value="Hedgehog"></label>
        
        <label>Meadow Mushroom <input type="checkbox" name="mushrooms[]" value="Meadow"></label>
        
        <label>Shaggy Mane Mushroom <input type="checkbox" name="mushrooms[]" value="ShaggyMane"></label>
        
        <label>Hen of the Wood <input type="checkbox" name="mushrooms[]" value="HenoftheWood"></label>
        
        <label>Bear’s Head Tooth <input type="checkbox" name="mushrooms[]" value="BearsHeadTooth"></label>
        
        <label>Giant Puffballs <input type="checkbox" name="mushrooms[]" value="GiantPuffballs"></label>
        
        <label>Sulphur Shelf Mushroom <input type="checkbox" name="mushrooms[]" value="SulphurShelf"></label>
        
</fieldset>
 
<fieldset>

    <legend>Order a Mushroom Madness Club Shirt</legend>
    
    
    <label for="venmo">@Venmo</label>
    <input id="venmo" name="venmo" type="text">
    
     <label for="shirtsize">Shirt Size</label>
    <select id="shirtsize" name="shirtsize">
      <option value="XS">XS</option>
      <option value="S">S</option>
      <option value="M">M</option>
     <option value="L">L</option>
     <option value="XL">XL</option>
    </select>
    
    <label for="order">Order</label>
    <select id="order" name="order">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>


</fieldset>

<fieldset>

 <legend>Newsletter</legend>
 
<label for="newsletter">Subscribe to the Mushroom Madness weekly newsletter?</label>
<select name="newsletter" id="newsletter">
        <option value="no">No</option>
        <option value="yes">Yes</option>
    
</select>

</fieldset>
       
       
        
<fieldset>

<legend>Have Something to say?</legend>

<label for="comments"></label>
<textarea name="comments" id="comments"></textarea>

<input type="submit" value="submit">

</fieldset>



</form>

      
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