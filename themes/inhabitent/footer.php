<?php
/**
* The template for displaying the footer.
*
* @package RED_Starter_Theme
*/

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<div class="site-info">
<div class = "contact-info">
<h2>Contact Info</h2>
<span><i class="fas fa-envelope"></i> <a href="mailto:info@alohaapparel.com">info&#64;inhabitent.com</a></span><br>
<span><i class="fas fa-phone"></i> <a href="tel:7784567891">778-456-7891</a></span><br>
<i class="fab fa-facebook"></i>
<i class="fab fa-twitter-square"></i>
<i class="fab fa-google-plus-square"></i>
</div>
<div class = "hours-info">
<h2>Business Hours</h2>
<span>Monday-Friday: 9am to 5pm</span><br>
<span>Saturday: 10am to 2pm</span><br>
<span>Sunday: Closed</span>
</div>
</div><!-- .site-info -->
<div class="front-dark-logo"> <img src=<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-text.svg'?>></div>
<p class="copyright">copyright © 2019 inhabitent</p>
</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
