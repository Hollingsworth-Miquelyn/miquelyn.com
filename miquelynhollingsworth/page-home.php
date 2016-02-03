<?php
/**
 * Template Name: Home Page
 */

//Advanced Custom Fields
$contact_button_link       = get_field('contact_button_link');
$contact_button_text       = get_field('contact_button_text');
$profile_button_link       = get_field('profile_button_link');
$profile_button_text       = get_field('profile_button_text');
$profile_image             = get_field('profile_image');
$profile_section_title     = get_field('profile_section_title');
$profile_section_desc      = get_field('profile_section_description');
$tech_section_title        = get_field('tech_section_title');
$tech_comfort_title        = get_field('tech_comfort_title');
$tech_experience_title     = get_field('tech_experience_title');
$technologies_1            = get_field('technologies_1');
$technologies_2            = get_field('technologies_2');
$technologies_3            = get_field('technologies_3');
$technologies_4            = get_field('technologies_4');
$technologies_5            = get_field('technologies_5');
$technologies_6            = get_field('technologies_6');
$technologies_7            = get_field('technologies_7');
$technologies_8            = get_field('technologies_8');
$technologies_9            = get_field('technologies_9');
$technologies_10           = get_field('technologies_10');
$technologies_11           = get_field('technologies_11');
$technologies_12           = get_field('technologies_12');
$technologies_13           = get_field('technologies_13');
$technologies_14           = get_field('technologies_14');
$technologies_15           = get_field('technologies_15');
$technologies_16           = get_field('technologies_16');
$technologies_17           = get_field('technologies_17');
$technologies_18           = get_field('technologies_18');
$work_experience_title     = get_field('work_experience_title');
$job_1_company             = get_field('job_1_company');
$job_1_date                = get_field('job_1_date');
$job_1_title               = get_field('job_1_title');
$job_1_bullet_1            = get_field('job_1_bullet_1');
$job_1_bullet_2            = get_field('job_1_bullet_2');
$job_1_bullet_3            = get_field('job_1_bullet_3');
$job_1_bullet_4            = get_field('job_1_bullet_4');
$job_2_company             = get_field('job_2_company');
$job_2_date                = get_field('job_2_date');
$job_2_title               = get_field('job_2_title');
$job_2_bullet_1            = get_field('job_2_bullet_1');
$job_2_bullet_2            = get_field('job_2_bullet_2');
$job_2_bullet_3            = get_field('job_2_bullet_3');
$job_2_bullet_4            = get_field('job_2_bullet_4');
$job_3_company             = get_field('job_3_company');
$job_3_date                = get_field('job_3_date');
$job_3_title               = get_field('job_3_title');
$job_3_bullet_1            = get_field('job_3_bullet_1');
$job_3_bullet_2            = get_field('job_3_bullet_2');
$job_3_bullet_3            = get_field('job_3_bullet_3');
$job_3_bullet_4            = get_field('job_3_bullet_4');
$job_3_bullet_5            = get_field('job_3_bullet_5');
$job_4_company             = get_field('job_4_company');
$job_4_date                = get_field('job_4_date');
$job_4_title               = get_field('job_4_title');
$job_4_bullet_1            = get_field('job_4_bullet_1');
$job_4_bullet_2            = get_field('job_4_bullet_2');
$job_4_bullet_3            = get_field('job_4_bullet_3');
$job_4_bullet_4            = get_field('job_4_bullet_4');
$school_name               = get_field('school_name');
$project_1_title           = get_field('project_1_title');
$project_1_date            = get_field('project_1_date');
$project_1_bullet_1        = get_field('project_1_bullet_1');
$project_1_bullet_2        = get_field('project_1_bullet_2');
$project_1_bullet_3        = get_field('project_1_bullet_3');
$project_1_bullet_4        = get_field('project_1_bullet_4');
$project_2_title           = get_field('project_2_title');
$project_2_date            = get_field('project_2_date');
$project_2_bullet_1        = get_field('project_2_bullet_1');
$project_2_bullet_2        = get_field('project_2_bullet_2');
$project_2_bullet_3        = get_field('project_2_bullet_3');
$project_2_bullet_4        = get_field('project_2_bullet_4');
$portfolio_section_title   = get_field('portfolio_section_title');
$portfolio_1_title         = get_field('portfolio_1_title');
$portfolio_1_description   = get_field('portfolio_1_description');
$portfolio_1_link          = get_field('portfolio_1_link');
$portfolio_1_image         = get_field('portfolio_1_image');
$portfolio_2_title         = get_field('portfolio_2_title');
$portfolio_2_description   = get_field('portfolio_2_description');
$portfolio_2_image         = get_field('portfolio_2_image');
$portfolio_3_title         = get_field('portfolio_3_title');
$portfolio_3_description   = get_field('portfolio_3_description');
$portfolio_3_link          = get_field('portfolio_3_link');
$portfolio_3_image         = get_field('portfolio_3_image');
$contact_section_title     = get_field('contact_section_title');
$contact_comment           = get_field('contact_comment');

get_header(); ?>

<!-- HERO
================================================== -->
<section id="hero" data-type="background">
   <div class="pixel-overlay"></div>
      <div class="container">
         <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 text-center hero-text">
               <h1><?php bloginfo('name'); ?></h1>
               <h2><?php bloginfo('description'); ?></h2>
               <a href="<?php echo $contact_button_link; ?>" class="btn btn-lg btn-info"><?php echo $contact_button_text; ?></a>
               <a href="<?php echo $profile_button_link; ?>" class="btn btn-lg btn-info profileButton"><?php echo $profile_button_text; ?></a>
            </div><!-- end col-sm-6 -->
            <div class="col-sm-3"></div>
      </div><!-- end contatiner -->
</section><!-- end hero -->

<!-- PROFILE
================================================== -->
<section id="profile">
   <div class="section-header">
      <h2><?php echo $profile_section_title; ?></h2>
      <hr>
   </div><!-- end section-header -->
   <div class="container">
      <div class="row">
         <div class="col-sm-4">
            <img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" class="img-responsive">
         </div><!-- end col-4 -->
         <div class="col-sm-8 content">
            <p><?php echo $profile_section_desc; ?></p>
         </div><!-- end col-8 -->
      </div><!-- end row -->
   </div><!-- end container -->
</section><!-- end profile -->

<!-- SKILLS
================================================== -->
<section id="skills">
   <div class="section-header2">
      <h2><?php echo $tech_section_title; ?></h2>
      <hr>
   </div><!-- end section-header -->
   <div class="container" id="tech">
      <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-4">
            <h3><?php echo $tech_comfort_title; ?></h3>
            <ul>
              <li><?php echo $technologies_1; ?></li>
              <li><?php echo $technologies_2; ?></li>
              <li><?php echo $technologies_3; ?></li>
              <li><?php echo $technologies_4; ?></li>
              <li><?php echo $technologies_5; ?></li>
              <li><?php echo $technologies_6; ?></li>
              <li><?php echo $technologies_7; ?></li>
              <li><?php echo $technologies_8; ?></li>
              <li><?php echo $technologies_9; ?></li>
           </ul>
        </div><!-- end col-4 -->
        <div class="col-sm-2"></div>
         <div class="col-sm-4">
            <h3>Experience With</h3>
            <ul>
               <li><?php echo $technologies_10; ?></li>
              <li><?php echo $technologies_11; ?></li>
              <li><?php echo $technologies_12; ?></li>
              <li><?php echo $technologies_13; ?></li>
              <li><?php echo $technologies_14; ?></li>
              <li><?php echo $technologies_15; ?></li>
              <li><?php echo $technologies_16; ?></li>
              <li><?php echo $technologies_17; ?></li>
              <li><?php echo $technologies_18; ?></li>
           </ul>
        </div><!-- end col-4 -->
      </div><!-- end row -->
   </div><!-- end container -->
</section><!-- end skills -->

<!-- RESUME
================================================== -->
<section id="resume">
   <div class="section-header">
      <h2><?php echo $work_experience_title; ?></h2>
      <hr>
   </div><!-- end section-header -->
   <div class="line"></div>
   <div class="container">
         <div class="row">
            <div class="date">
               <div class="col-sm-4">
                  <h4><?php echo $job_1_company; ?></h4>
                  <p><?php echo $job_1_date; ?></p>
               </div><!--end col-sm-4-->
               <div class="col-sm-8">
                  <h3><?php echo $job_1_title; ?></h3>
                  <ul>
                     <li><?php echo $job_1_bullet_1; ?></li>
                     <li><?php echo $job_1_bullet_2; ?></li>
                     <li><?php echo $job_1_bullet_3; ?></li>
                     <li><?php echo $job_1_bullet_4; ?></li>
                  </ul>
               </div><!--end col-sm-8-->
            </div> <!-- end date -->
            <div class="date">
               <div class="col-sm-4">
                  <h4><?php echo $job_2_company; ?></h4>
                  <p><?php echo $job_2_date; ?></p>
               </div><!--end col-sm-4-->
               <div class="col-sm-8">
                  <h3><?php echo $job_2_title; ?></h3>
                  <ul>
                     <li><?php echo $job_2_bullet_1; ?></li>
                     <li><?php echo $job_2_bullet_2; ?></li>
                     <li><?php echo $job_2_bullet_3; ?></li>
                  </ul>
               </div><!--end col-sm-8-->
            </div> <!-- end date -->
            <div class="date">
               <div class="col-sm-4">
                  <h4><?php echo $job_3_company; ?></h4>
                  <p><?php echo $job_3_date; ?></p>
               </div><!--end col-sm-4-->
               <div class="col-sm-8">
                  <h3><?php echo $job_3_title; ?></h3>
                  <ul>
                     <li><?php echo $job_3_bullet_1; ?></li>
                     <li><?php echo $job_3_bullet_2; ?></li>
                     <li><?php echo $job_3_bullet_3; ?></li>
                     <li><?php echo $job_3_bullet_4; ?></li>
                     <li><?php echo $job_3_bullet_5; ?></li>
                  </ul>
               </div><!--end col-sm-8-->
            </div> <!-- end date -->
            <div class="date">
               <div class="col-sm-4">
                  <h4><?php echo $job_4_company; ?></h4>
                  <p><?php echo $job_4_date; ?></p>
               </div><!--end col-sm-4-->
               <div class="col-sm-8">
                  <h3><?php echo $job_4_title; ?></h3>
                  <ul>
                     <li><?php echo $job_4_bullet_1; ?></li>
                     <li><?php echo $job_4_bullet_2; ?></li>
                     <li><?php echo $job_4_bullet_3; ?></li>
                  </ul>
               </div><!--end col-sm-8-->
            </div> <!-- end date -->
            <div class="date">
               <div class="col-sm-4">
                  <h4><?php echo $school_name; ?></h4>
                  <p><?php echo $project_1_date; ?></p>
               </div><!--end col-sm-4-->
               <div class="col-sm-8">
                  <h3><?php echo $project_1_title; ?></h3>
                  <ul>
                     <li><?php echo $project_1_bullet_1; ?></li>
                     <li><?php echo $project_1_bullet_2; ?></li>
                     <li><?php echo $project_1_bullet_3; ?></li>
                     <li><?php echo $project_1_bullet_4; ?></li>
                  </ul>
               </div><!--end col-sm-8-->
            </div> <!-- end date -->
            <div class="date">
               <div class="col-sm-4">
                  <h4><?php echo $school_name; ?></h4>
                  <p><?php echo $project_2_date; ?></p>
               </div><!--end col-sm-4-->
               <div class="col-sm-8">
                  <h3><?php echo $project_2_title; ?></h3>
                  <ul>
                     <li><?php echo $project_2_bullet_1; ?></li>
                     <li><?php echo $project_2_bullet_2; ?></li>
                     <li><?php echo $project_2_bullet_3; ?></li>
                     <li><?php echo $project_2_bullet_4; ?></li>
                  </ul>
               </div><!--end col-sm-8-->
            </div> <!-- end date -->
         </div><!-- end row -->
      </div><!-- end container -->
      <div id="links">
         <!--ADD PDF OF RESUME -->
         <a href="assets/img/miquelynhollingsworthresume.pdf" class="btn btn-lg btn-default">Download Resume <br /><i class="fa fa-file-pdf-o"></i></a>
         <a href="https://www.linkedin.com/in/miquelynhollingsworth" class="btn btn-lg btn-default" target="_blank">LinkedIn Profile <br /><i class="fa fa-linkedin"></i></a>
         <a href="https://github.com/Hollingsworth-Miquelyn/miquelyn.com.git" class="btn btn-lg btn-default" target="_blank">View this project on GitHub <br /><i class="fa fa-github"></i></a>
      </div>
</section><!-- end resume -->

<!-- PORTFOLIO
================================================== -->
<section id="portfolio">
   <div class="section-header2">
      <h2><?php echo $portfolio_section_title; ?></h2>
      <hr>
   </div><!--end section-header-->
   <div class="project">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-4">
                     <div class="project-max">
                     <div class="project-thumb">
                           <img src="<?php echo $portfolio_1_image['url']; ?>" alt="<?php echo $portfolio_1_image['alt']; ?>" class="img-responsive">
                        <span><a href="<?php echo $portfolio_1_link; ?>" target="_blank"><i class="fa fa-plus"></i></a></span>
                     </div>
                     <h4><?php echo $portfolio_1_title ?><span><?php echo $portfolio_1_description ?></span></h4>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="project-max">
                     <div class="project-thumb">
                           <img src="<?php echo $portfolio_2_image['url']; ?>" alt="<?php echo $portfolio_2_image['alt']; ?>" class="img-responsive">
                        <span data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></a></span>
                     </div>
                        <h4><?php echo $portfolio_2_title ?><span><?php echo $portfolio_2_description ?></span></h4>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="project-max">
                     <div class="project-thumb">
                           <img src="<?php echo $portfolio_3_image['url']; ?>" alt="<?php echo $portfolio_3_image['alt']; ?>" class="img-responsive">
                        <span><a href="<?php echo $portfolio_3_link; ?>" target="_blank"><i class="fa fa-plus"></i></a></span>
                     </div>
                     <h4><?php echo $portfolio_3_title ?><span><?php echo $portfolio_3_description ?></span></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section><!-- end portfolio -->

<!-- EDUCATION
================================================== -->
<section id="education">
   <div class="section-header">
      <h2>EDUCATION</h2>
      <hr>
   </div><!-- end section-header -->
   <div class="container">
         <div class="row">
            <div class="col-md-4">
               <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/byui.png" alt="Brigham Young Univeristy Idaho" class="img-responsive">
            </div><!-- end col-4 -->
               <div class="col-md-8 content">
                  <h3>Bachelor of Science in Computer Information Technology</h3>
                  <h4>Brigham Young University - Idaho</h4>
                  <p>Anticipated Graduation December 2016</p>
               </div><!-- end col-8 -->
         </div><!-- end row -->
   </div><!-- end container -->
</section><!-- end education -->


<!-- CONTACT
================================================== -->
<section id="contact">
   <div class="section-header2">
      <h2><?php echo $contact_section_title; ?></h2>
      <hr>
   </div><!-- end section-header -->
   <div class="container">
   <div class="row">
      <div id="content" class="col-sm-12">

         <?php while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

         <?php endwhile; //end of the loop ?>

      </div><!-- content -->
   </div><!-- primary -->
   </div><!-- container -->
</section><!-- end section -->

<?php get_footer(); ?>
