<footer class="warangal-footer">
    <div class="container warangal-footer-container">
        <div class="row g-4 g-xl-5">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="warangal-footer-column">
                    <h5 class="warangal-footer-heading">ABOUT</h5>
                    <a href="<?= base_url('/') ?>" class="warangal-footer-logo-wrap">
                        <img src="<?= base_url('assets/logo2.jpeg') ?>" alt="Diocese of Warangal" class="warangal-footer-main-logo">
                    </a>
                    <div class="warangal-footer-address">
                        <p>The Diocese of Warangal was erected in 1952 and serves the faithful through parishes, institutions, pastoral care and works of mercy.</p>
                        <p><strong>Phone:</strong> <a href="tel:+918702459128">+91 870 245 9128</a></p>
                        <p><strong>Email:</strong> <a href="mailto:wgldiocese@gmail.com">wgldiocese@gmail.com</a></p>
                    </div>
                    <div class="warangal-footer-social">
                        <a href="https://www.facebook.com/" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.instagram.com/" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 offset-lg-1">
                <div class="warangal-footer-column">
                    <h5 class="warangal-footer-heading">QUICK LINKS</h5>
                    <ul class="warangal-footer-links">
                        <li><a href="<?= base_url('about-us') ?>">About Us</a></li>
                        <li><a href="<?= base_url('bishop') ?>">Bishop</a></li>
                        <li><a href="<?= base_url('commissions') ?>">Commissions</a></li>
                        <li><a href="<?= base_url('parishes') ?>">Parishes</a></li>
                        <li><a href="<?= base_url('newsletters') ?>">Newsletters</a></li>
                        <li><a href="<?= base_url('contact-us') ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="warangal-footer-column">
                    <h5 class="warangal-footer-heading">DIRECTORIES</h5>
                    <ul class="warangal-footer-links">
                        <li><a href="<?= base_url('diocesan-priests') ?>">Diocesan Priests</a></li>
                        <li><a href="<?= base_url('education') ?>">Education</a></li>
                        <li><a href="<?= base_url('institutions') ?>">Institutions</a></li>
                        <li><a href="<?= base_url('diocesan-shrines') ?>">Shrines</a></li>
                        <li><a href="<?= base_url('photo-gallery') ?>">Gallery</a></li>
                        <li><a href="<?= base_url('deaneries') ?>">Deaneries</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="warangal-footer-column warangal-footer-about">
                    <h5 class="warangal-footer-heading">ADDRESS</h5>
                    <p class="warangal-footer-about-text">Bishop's House, Fatimanagar, Kazipet, Warangal - 506004, Telangana, India</p>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7589.920726048202!2d79.52944000000001!3d17.980581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a334fb8ffffffff%3A0xb244f4d246bc24e0!2sRoman%20Catholic%20Diocese%20of%20Warangal!5e0!3m2!1sen!2sin!4v1789639415271!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="warangal-footer-bottom">
        <div class="container warangal-footer-bottom-container">
            <div class="row align-items-center gy-2">
                <div class="col-12 col-md-6"><h6>Copyright &copy; 2026 Diocese of Warangal. All rights reserved.</h6></div>
                <div class="col-12 col-md-6"><h6 class="warangal-footer-designed">Designed and Developed by Kakatiya Solutions</h6></div>
            </div>
        </div>
    </div>
</footer>
<button type="button" class="warangal-footer-scroll-top" id="warangalScrollTop" aria-label="Scroll to top">
    <i class="fa-solid fa-arrow-up"></i>
</button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (window.AOS) AOS.init({ duration: 800, easing: 'ease-in-out', once: true, offset: 80 });
    document.querySelectorAll('.dio-content-shell img').forEach((img) => {
        const useFallback = () => {
            img.onerror = null;
            img.src = '<?= base_url('assets/img/about-sec-logo.webp') ?>';
            img.alt = img.alt || 'Diocese of Warangal';
        };
        img.addEventListener('error', useFallback, { once: true });
        if (img.complete && !img.naturalWidth) useFallback();
    });
    const btn = document.getElementById('warangalScrollTop');
    if (btn) {
        window.addEventListener('scroll', () => btn.classList.toggle('show', window.scrollY > 400));
        btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }
});
</script>
