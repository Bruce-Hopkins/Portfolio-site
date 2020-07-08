<?php /* Template Name: Contact */ ?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

<script scr = js/new.js> 
   isTheHomePage = false;
</script>

<link href="style.css" rel="stylesheet"> <!--Calling the style.css which we use -->
<script src="https://kit.fontawesome.com/68967da625.js" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light " id="mainMenu">
             
    <a class="navbar-brand" id="HomeButton" href="http://cobydesigns.budgetchamp.net/">Home</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto justify-content-end">
            <a class="nav-link" id="AboutLink" href="http://cobydesigns.budgetchamp.net/about-me/">About</a>
        <!-- <a class="nav-link" id="ProjectsLink" href="#">My Projects</a> -->
            <a href="http://cobydesigns.budgetchamp.net/contact/ " class="btn btn-lg active" id="TheContactButton" role="button" aria-pressed="true">Contact Us</a>
        </ul>
    
    
    </div>
    
    

</nav>


<div id="ContactHeader">
    <h1 id="ContactHeaderText"> How to Contact Us </h1>
</div> 

<div id="ContactContent" class="row justify-content-center"> 
    <p id="ContactDescription"> If you want to contact or hire us you we can discuss the details such as the pricing and the project via:</p>
    <div id="Email"> 
        <span class="far fa-envelope" id="ContactIconEmail"> 
        </span>
        <span id="ContactEmailText"> sales@budgetchamp.net </span>
        <p id="ContactEmailDescription"> Email us the project you have in mind for us </p>
    </div>

    <div id="Twitter">
        <span class="fab fa-twitter" id="ContactIconTwitter"></span>
        <a href="https://twitter.com/SBudgetchamp" id="ContactTwitterText">@SBudgetchamp</a>
        <p id="ContactTwitterDescription"> Get in touch with us through social media</p>
    </div>
</div>

<div id="CopyrightContact" class="row justify-content-center"> 
    <p> © 2020 Budgetchamp. All Rights Reserved. </p> 
</div> 

