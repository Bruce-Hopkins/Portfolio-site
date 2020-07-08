<?php /* Template Name: Home */ ?>
<!-- The Above is to register the page in wordpress -->

<link href="style.css" rel="stylesheet"> <!--Calling the style.css which we use -->
<script src="https://kit.fontawesome.com/68967da625.js" crossorigin="anonymous"></script> 
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



<?php get_header(); 

?>
<script scr = js/new.js> 
   isTheHomePage = true;
</script>



<!-- This is what I will put the main page content on, I don't want to put this stuff 
in the header because it isn't really header content -->


<div id="ContentStuffOne"> 
    <div class="page-header"> 
        <h1 id="SkillsHeader">We Create </h1>
    </div>
    
    <div id="fadeId" class="row justify-content-center fade-in-up">
        <div class="card HomeCard " id="CardOne">

            <div class="card-body">
                <span class="fas fa-code" id="IconCode"></span>
                <h5 class="card-title" id="CardHeader">Development</h5>

                <div id="CardText">
                    <p class="card-text" id="ContentStuffOneText"> Using our knowledge of HTML/CSS, Bootstrap, Javascript, jQuery, Java, PHP, and more to design
                    the interactive websites that you want. </p>
                </div>

            </div>
        </div>

        <div class="card HomeCard fade-in-up" id="CardTwo">

            <div class="card-body">
                <span class="fab fa-wordpress-simple" id="IconCode"></span>
                <h5 class="card-title" id="CardHeader">Themes</h5>

                <div id="CardText">
                    <p class="card-text" id="ContentStuffOneText"> We can choose a WordPress Theme for an easy yet stunning website and give it the creative customizing to your liking. </p>
                </div>

            </div>
        </div>

        <div class="card HomeCard fade-in-up" id="CardThree">

            <div class="card-body">
                <span class="fas fa-paint-brush" id="IconCode"></span>
                <h5 class="card-title" id="CardHeader">Design</h5>

                <div id="CardText">
                    <p class="card-text" id="ContentStuffOneText"> Our design team is able to create compelling apps for your website </p>
                </div>

            </div>
        </div>

        <div class="card HomeCard fade-in-up" id="CardSix">

            <div class="card-body">
                <span class="fas fa-mobile-alt" id="IconCode"></span>
                <h5 class="card-title" id="CardHeader">Apps</h5>

                <div id="CardText">
                    <p class="card-text" id="ContentStuffOneText"> We can also use our knowledge of Swift and Java to make mobile apps. </p>
                </div>

            </div>
        </div>
    </div> 

</div> 

<div id="space"> </div> 
<div class="" id="SecondImage">
    <p id="AboutMeHeader"> About Us </p>
</div> 
<img src="/wp-content/themes/bootstrapstarter/Images/MyProfile3.jpg" alt="My Picture" height="200" width="150" id="ProfileImage">
        
<div id="AboutMe"> 
    <p id="AboutMeText"> I'm Bruce and I'm the lead web designer. I wanted to be a web designer just because I enjoy making websites and coding.
I'm from the United States. I speak English natively and also Spanish fluently.  I like to learn new concepts and techniques as a programmer and designer, so
I'm excited to work with all kinds of different styles of websites. </p>
        <div id="AboutCenter"> 
            <a href="http://cobydesigns.budgetchamp.net/about-me/" class="btn btn-lg active" id="TheAboutButton" role="button" aria-pressed="true">LEARN MORE</a>
        </div>
        

    <div id="AboutMeBackground"> 
        
        
    </div>
 
</div>


<?php get_footer(); ?>






