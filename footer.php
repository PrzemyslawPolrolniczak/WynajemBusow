<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<footer class="container-fluid">
    <div class="contact-form-container">
        <h1>Szukasz informacji? Napisz do nas!</h1>
        <?php echo do_shortcode( '[contact-form-7 id="16" title="Formularz kontaktowy" html_class="form-group form-container"]' ); ?>
    </div>
    <ul>
        <li><span>&copy;2018</span> Przemysław Półrolniczak</li>
        <li><a href="">[] Facebook</a></li>
        <li><a href="">[] Twitter</a></li>
        <li><a href="">[] Tel</a></li>
        <li><a href="">[] Mail</a></li>
    </ul>
    <!-- <div class="row">
        <div class="col-sm-4">ba</div>
        <div class="col-sm-4">b</div>
        <div class="col-sm-4">c</div>
    </div> -->
</footer>

<?php wp_footer(); ?>
</body>
</html>