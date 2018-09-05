        <footer>
            <p>Copyright &copy; <?= html::decode($site->copyright()->kirbytext()) ?></p>
            <p>Made with <a href="http://getkirby.com/">Kirby</a></p>
            <p><a href="#">Sitemap</a></p>
            <?php snippet('socialicons') ?>
        </footer>
    </div>

    <script src="https://unpkg.com/ionicons@4.4.2/dist/ionicons.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
</body>
</html>