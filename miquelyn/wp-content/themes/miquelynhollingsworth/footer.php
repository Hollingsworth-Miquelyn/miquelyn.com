<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Miquelyn_Hollingsworth
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER
================================================== -->
<footer>
   <div class="container">
      <div class="col-sm-12">
         <p class="pull-right">&copy; 2016 Miquelyn Hollingsworth</p>
      </div><!-- end col -->
   </div><!-- container -->
</footer>

<!-- MODAL
================================================== -->
<div class="modal fade" id="myModal">
   <div class="modal-dialog">
      <div class="modal-content">

         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
         </div><!-- modal-header -->

         <div class="modal-body">
            <p>Unfortunately, mydreamdiaries.com is no longer active. Below are a few images of what the website looked like.</p>
            <p>You can <a href="https://github.com/Hollingsworth-Miquelyn/miquelyn.com.git" target="_blank">view this project on GitHub. <i class="fa fa-github"></i></a></p>
            <hr />
            <p class="lead text-center">Desktop views</p>
            <hr />
            <img src="assets/img/homepage.png" class="thumbnail" alt="My Dream Diaries homepage"/>
            <img src="assets/img/characters.png" class="thumbnail" alt="My Dream Diaries characters page"/>
            <img src="assets/img/contact.png" class="thumbnail" alt="My Dream Diaries contact page"/>
            <hr />
            <p class="lead text-center">Mobile views</p>
            <hr />
            <img src="assets/img/mobilehome.png" class="thumbnail" alt="My Dream Diaries homepage"/>
            <img src="assets/img/mobilelawman.png" class="thumbnail" alt="My Dream Diaries characters page"/>
            <img src="assets/img/mobileabout.png" class="thumbnail" alt="My Dream Diaries contact page"/>
         </div><!-- modal-content -->
   </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
