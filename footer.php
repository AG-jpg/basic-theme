<head>
    <?php wp_footer(); ?>

    <title>CodeSpread</title>
</head>

<footer>

    <section class="container">
        <div class="footer-column">

            <ul>
                <li><a href="https://app.codespread.io/auth/login" target="_blank">Sign Up</a></li>
                <li><a href="https://discord.gg/MtDrRvn3" target="_blank">Discord Clients</a></li>
                <li><a href="https://discord.gg/gAj4SJ5V" target="_blank">Discord Developers</a></li>
                <li><a href="<?php echo site_url('/support') ?>" class="navbar-item">Help & Support</a></li>
                <li><a href="<?php echo site_url('/contact') ?>" class="navbar-item">Contact</a></li>
            </ul>
        </div>

        <div class="footer-column">

            <ul>
                <li><a href="<?php echo site_url('/about-us') ?>" class="navbar-item">About Us</a></li>
                <li><a href="<?php echo site_url('/clients') ?>" class="navbar-item">For Clients</a></li>
                <li><a href="<?php echo site_url('/developers') ?>" class="navbar-item">For Developers</a></li>
            </ul>
        </div>

        <div class="footer-column" id="social">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="https://www.linkedin.com/company/codespread/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/codespread_2021" target="_blank"><i class="fa-brands fa-facebook-square"></i></a></li>
                <li><a href="https://twitter.com/codespread_2021" target="_blank"><i class="fa-brands fa-twitter-square"></i></a></li>
                <li><a href="https://discord.com/invite/MtDrRvn3" target="_blank"><i class="fa-brands fa-discord"></i></a></li>
            </ul>
        </div>

        <div class="footer-column" id="forms">
            <input type="text" name="name-footer" placeholder="Name" class="input">
            <input type="email-footer" name="mail-footer" id="email" placeholder="E-mail" class="input">
            <textarea name="message-footer" placeholder="Message" class="input" id="message"></textarea>
            <input type="submit" name="submit-footer" value="Send" id="send-footer">

        </div>

    </section>

    <hr>

    <section class="container">

        <div class="footer-column" id="r-brand">
            © CodeSpread 2022.
        </div>

        <div class="footer-column">

        </div>

        <div class="footer-column legals">
            <a href="<?php echo site_url('/terms-of-service') ?>" class="navbar-item">Terms of Service</a>
        </div>

        <div class="footer-column legals">
            <a href="<?php echo site_url('/privacy-policy') ?>" class="navbar-item">Privacy Policy</a>
        </div>

    </section>

</footer>