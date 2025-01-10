<!-- ============================================ -->
<!--                   Footer                     -->
<!-- ============================================ -->
<footer id="cs-footer">
    <div class="cs-container">
        <!-- Logo Group -->
        <div class="cs-logo-group">
            <a aria-label="go back to home" class="cs-logo" href="/index.php">
                <img class="cs-logo-img" aria-hidden="true" loading="lazy" decoding="async"
                    src="/images/burgess_logob_dual.png" alt="logo" width="178" height="32">
            </a>
        </div>
        <!-- Links -->
        <ul class="cs-nav">
            <li class="cs-nav-li">
                <span class="cs-header">Sitemap</span>
            </li>
            <li class="cs-nav-li">
                <a class="cs-nav-link" href="/index.php">Home</a>
            </li>
            <li class="cs-nav-li">
                <a class="cs-nav-link" href="/about.php">About</a>
            </li>
            <li class="cs-nav-li">
                <a class="cs-nav-link" href="/projects.php">Our Projects</a>
            </li>
            <li class="cs-nav-li">
                <a class="cs-nav-link" href="/opportunities.php">Opportunities</a>
            </li>
        </ul>
        <!-- TO DO: maybe add socials later? -->
        <!-- <ul class="cs-nav">
                <li class="cs-nav-li">
                    <span class="cs-header">Social</span>
                </li>
                <li class="cs-nav-li">
                    <a class="cs-nav-link" href="XXX" target="_blank"
                        rel="noopener">Instagram</a>
                </li>
                <li class="cs-nav-li">
                    <a class="cs-nav-link" href="XXX"
                        target="_blank" rel="noopener">Facebook</a>
                </li>
            </ul> -->
        <!-- Contact Info -->
        <ul class="cs-nav">
            <li class="cs-nav-li">
                <span class="cs-header">Contact</span>
            </li>
            <li class="cs-nav-li">
                <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="/images/phone-stroke.svg"
                    alt="phone" width="24" height="24">
                <a class="cs-nav-link cs-phone" href="tel:910-378-7610">(910) 378-7610</a>
            </li>
            <li class="cs-nav-li">
                <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="/images/email-stroke.svg"
                    alt="email" width="24" height="24">
                <a class="cs-nav-link cs-email" href="mailto:info@burgessgroup.org">info@burgessgroup.org</a>
            </li>
            <li class="cs-nav-li">
                <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="/images/pin-stroke.svg"
                    alt="pin" width="24" height="24">
                <a class="cs-nav-link cs-address" href="https://maps.google.com/?q=1551+Point+Harbor+Rd,+Wilmington,+NC+28401">
                    1551 Point Harbor Rd<br> Wilmington NC 28401
                </a>
            </li>
        </ul>
    </div>
</footer>

<script>
    var ba = ["MSIE", "Trident", "Edge"];
    var b, ua = navigator.userAgent;
    for (var i = 0; i < ba.length; i++) {
        if (ua.indexOf(ba[i]) > -1) {
            b = ba[i];
            break;
        }
    }
    if (b == "MSIE" || b == "Trident" || b == "Edge") {
        b = "Internet Explorer";
        alert("You are using the " + b + " browser and this browser is incompatible with this website and many others.  Please open this page in a different browser, either Chrome or Firefox.  Thank you!");
    }
</script>

<script defer src="/app.js"></script>
<script>
    document.addEventListener('scroll', (e) => {
        const scroll = document.documentElement.scrollTop;
        if (scroll >= 100) {
            document.querySelector('body').classList.add('scroll')
        } else {
            document.querySelector('body').classList.remove('scroll')
        }
    });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        disable: 'phone',
        duration: 900,
    });
</script>
</body>

</html>