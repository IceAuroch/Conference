</main>

<footer id="app-footer" class="app-footer-secondary">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="footer-item">
                <div class="footer-copyr">
                    <?php echo date('Y'); ?> Все права защищены
                </div>
            </div>
            <div class="footer-item d-flex justify-content-center justify-content-sm-start">
                <a href="<?php echo site_url(); ?>" class="logo">
                    <img src="<?php echo get_theme_file_uri('images/icon/logo/logo-white.png'); ?>" alt="logo">
                </a>
            </div>
            <div class="footer-item">
                <div class="footer-copyr">
                    Дизайн и вэбразработка <a href="https://impressionbureau.pro/" target="_blank">Impression.Bureau</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Script -->
<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>

<?php wp_footer(); ?>

</body>

</html>