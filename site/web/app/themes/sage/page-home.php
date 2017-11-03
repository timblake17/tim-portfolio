

<?php 
/**
*Template name: Home Template
*/
?>
<?php
////
$arguments = array('post_type' => 'project');
$projects_query = new WP_Query($arguments);
?>
<nav>
    <ul>
        <li><a href="#" >About Me</a></li>
        <li><a href="#projects">My Work</a></li>
        <li><a href="#contact">Contact Me</a></li>
        <li><a href="<?= get_template_directory_uri(); ?>/dist/images/resume.pdf" download>Download Resume</a></li>
    </ul>
</nav>
<!-- ////////////////////home banner -->
<section class="home-banner">
    <section class= "aboutMe">
        <?php the_post_thumbnail();?>
        <div class="amDiv">
        <h1>Hi, I'm Tim Blake</h1>
       <p> I am a professional web developer, highly skilled in HTML, CSS and Javascript. I adhere to standards of progressive enhancement, accessibility, and separation of concerns. I am an eager learner and aspiring full stack developer. I am currently looking for an opportunity at which I can be constantly challenged to continue growing my career. I consider myself a creative problem solver and I love he thrill of a challenge, I started off as a mechanic at a young age and after 8 years in the field I felt like I could use my problem solving and diagnostic abilities in a better environment. After a lot of research and practice I fell in long with the tech scene and programming. I took the leap to make this my career, I’ve put in the work to get good and I’m not going to stop until I’m the best.</p>    </section>
    <a name="projects"> <section class="myWork"></a>
    <h2>My Work</h2>
    </section>
</section>
<!-- //////////////////////projects -->
<section class="projects">
    <div class="projectDiv">
        <div class="projectPic nyTimes">
         </div>
            <h2>New York Times Page Mockup</h2>
            <p>This is a mockup of the New York Times webpage where I did the html, css,and javscript. I have also made it completely responsive for a 768px screen where I added an clickable animated drop down hamburger menu for the navigation bar with Jquery.</p>
            <div class="firstButton">
              <a href="https://github.com/timblake17/nyTimes">  <button>View Github<i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></button></a>
            </div>
               <a href="https://timblake17.github.io/nyTimes/"><button>View Project</button></a>
        </div>
    <!-- ///////////////////////////// -->
        <div class="projectDiv">
        <div class="projectPic techCrunch">

        </div>
        <h2>Tech Crunch Page Mockup</h2>
        <p>This is a mockup of the Tech Crunch Report webpage where I did the html, css,and javscript. I have also made it completely responsive for a 768px screen where I added an clickable animated drop down hamburger menu for the navigation bar with Jquery.</p>
        <div class="firstButton">
          <a href="https://github.com/timblake17/techCrunch/tree/master">  <button>View Github<i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></button></a>
        </div>
        <a href="https://timblake17.github.io/techCrunch/"><button>View Project</button></a>    
        </div>
    <!-- /////////////////////// -->
    <div class="projectDiv">
        <div class="projectPic drumKit">
            
        </div>
        <h2>Drumkit</h2>
        <p>This is a keyboard drumkit that makes drum noises on different keypresses that I have built using Vanilla Javascript.</p>
        
        <div class="firstButton">
        <a href="https://github.com/timblake17/drumKit">  <button>View Github<i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></button></a>
        </div>
           <a href="https://timblake17.github.io/drumKit/"><button>View Project</button></a>
    </div>
        <!-- ////////////////////////////// -->
    <div class="projectDiv">
        <div class="projectPic slate">
        </div>
        <h2>Slate Site Mockup</h2>
        <p>This is a mockup of the slate webpage where I did the html, and css.View code on github here.</p>
        <div class="firstButton">
            <a href="https://github.com/timblake17/slate">  <button>View Github<i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></button></a>
        </div>
           <a href="https://timblake17.github.io/slate/"><button>View Project</button></a>
    </div>
</section>
       <!-- ////////////////////////////// -->
      
<!-- /////////////contact me -->
<section class="contact">
<a name="contact"><section class="contactMe"></a>
        <h2>Contact Me</h2>
    </section>
    <section class="contactForm">
        <h3>I am currently interested in all job oppurtunies, freelance projects, I look forward to hearing for you</h3>
        <form id="contact_form" action="#" method="POST"  enctype="multipart/form-data">
            <div class="row">
               <div class="center"> <input id="name" class="input" name="name" placeholder="Name" type="text" value="" size="30" />
                </div>       
            </div>
            <div class="row">
                <input id="email" class="input" name="email" placeholder="E-mail" type="text" value="" size="30" />
            </div><br />
            <div class="row">
                <textarea id="message" class="input" name="message" placeholder="Your Message Here" rows="7" cols="30"></textarea>
            </div>
            <div class="button">
                <input id="submit_button" type="submit" value="Send email" />
            </div>
        </form>	
    </section>

    <section>
<section class="links">
<a href="https://www.linkedin.com/in/timblakedev/"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>
</a>
<a href="https://twitter.com/timBlake17x"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
</a>
 <a href="https://github.com/timblake17"><i class="fa fa-github fa-3x" aria-hidden="true"></i>
</a>
</section>
    </section>
</section>


















<!-- 
<!-- <?php
    if ( $projects_query->have_posts() ): ?>
    <?php while ( $projects_query->have_posts() ): ?>
        <?php $projects_query->the_post(); ?>
        <h1> <?php the_field('client');?></h1> 
        <h2><?php the_field('project_name'); ?></h2>
        <img src="<?php the_field ('thumbnail');?>" />
        <?php if (have_rows('tech_stack') ): ?> 
            <?php while ( have_rows ('tech_stack')): ?>
                <?php the_row();?>
                   <p> <?php the_sub_field('languages'); ?> </p>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile;?>
<?php endif; ?> -->



<!-- <?php

// check if the repeater field has rows of data
if( have_rows('repeater_field_name') ):

 	// loop through the rows of data
    while ( have_rows('repeater_field_name') ) : the_row();

        // display a sub field value
        the_sub_field('sub_field_name');

    endwhile;

else :

    // no rows found

endif;
?> -->