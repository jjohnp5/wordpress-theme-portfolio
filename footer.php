<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>

<?php  wp_footer();?>
  
    <!-- FOOTER -->
    <footer>
    <div><p>Website Built by: <?php the_author(); ?></p></div>
    <div class="social">
        <a href="https://www.facebook.com/john.lagmay"><i class="fa fa-facebook-square fa-3x"
                                                          aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/john-lagmay-12143682"><i class="fa fa-linkedin-square fa-3x"
                                                                      aria-hidden="true"></i></a>
        <a href="https://github.com/jjohnp5"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
    </div>
</footer>
</div>

    <!-- BOOTSTRAP JS -->
    <!-- <script src="
    <?//php bloginfo('stylesheet_directory')?>
    /assets/js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/assets/js/main.js"></script>


</body>

</html>
