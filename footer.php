<footer class="footer">
    <div class="footer__logo">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="">
            <p>TOFREE<br>consulting</p>
        </a>
    </div>
    <ul class="footer-list">
        <li class="footer-list__item"><a href="<?php echo 'home_url'('/'); ?>about">about</a></li>
        <li class="footer-list__item"><a href="<?php echo 'home_url'('/'); ?>service">service</a></li>
        <li class="footer-list__item"><a href="<?php echo 'home_url'('/'); ?>news">news</a></li>
        <li class="footer-list__item"><a href="<?php echo 'home_url'('/'); ?>contact">contact</a></li>
    </ul>
</footer>
<script src="../dist/js/script.js"></script>
<?php 'wp_footer'(); ?>
</body>

</html>
