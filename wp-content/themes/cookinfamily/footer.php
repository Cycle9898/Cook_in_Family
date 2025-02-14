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

    </body>

    </html>