<?php /* Template Name: About-me */ ?>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

<link href="style.css" rel="stylesheet"> <!--Calling the style.css which we use -->
<script src="https://kit.fontawesome.com/68967da625.js" crossorigin="anonymous"></script> 

<script scr = js/new.js> 
        
   isTheHomePage = false;

</script>
<nav class="navbar navbar-expand-lg navbar-light " id="mainMenu">
             
   <a class="navbar-brand" id="HomeButton" href="http://cobydesigns.budgetchamp.net/">Home</a> 
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto justify-content-end">
         <a class="nav-link" id="AboutLink" href="http://cobydesigns.budgetchamp.net/about-me/">About</a>
        <!-- <a class="nav-link" id="ProjectsLink" href="#">My Projects</a> -->
         <a href="http://cobydesigns.budgetchamp.net/contact/" class="btn btn-lg active" id="TheContactButton" role="button" aria-pressed="true">Contact Us</a>
      </ul>
      
   
   </div>
             
             
     
</nav>

<div id="AboutMePHeader">


</div>

<div id="AboutMeContainer">
   <div id="AboutMePage">  
      <img src="/wp-content/themes/bootstrapstarter/Images/MyProfile3.jpg" alt="My Picture" height="200" width="150" id="AboutMePImg">
      <p id="AboutMePText">Hi, I'm Bruce. My first programming language was Javascript. I continued to learn HTML/CSS and some PHP. 
      So far I enjoy practicing with the bootstrap framework and WordPress blogs and portfolios. <br> <br>
      On my free I am practicing some Python web 
   scraping. I also enjoy programming in Java as I am acquainted with the language. Although I would have to say my favorite programming language
   is Swift because of how easy yet powerful it is.
   <br> <br>

   Would you like a website done by us? Contact us!</p> 
   </div> 


   <div class="col-sm-8 blog-main">


   <?php get_footer(); ?>
</div>