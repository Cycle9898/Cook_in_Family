    <?php
    $phoneNumber = join('.', str_split(get_option('cookinfamily_settings_field_phone_number'), 2));
    $email = get_option('cookinfamily_settings_field_email');
    ?>

    <footer class="footer">
        <p class="footer__copyright">
            CookInFamily <?= date('Y') ?>
        </p>

        <p class="footer__contacts">
            Contacts: <?= $phoneNumber . ' / ' . $email ?>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php wp_footer(); ?>

    </body>

    </html>