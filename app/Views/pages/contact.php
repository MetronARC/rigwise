<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<style>
    .captcha-container {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-top: 10px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .captcha-text {
        font-size: 24px;
        font-family: 'Courier New', monospace;
        letter-spacing: 3px;
        color: #333;
        background: #fff;
        padding: 8px 15px;
        border-radius: 4px;
        user-select: none;
        flex-grow: 1;
    }

    .refresh-captcha {
        padding: 8px 15px;
        background: #0ea2bd;
        color: white;
        border: none;
    }

    .refresh-captcha:hover {
        background: #0b8ca3;
        color: white;
    }
</style>

<main class="main">
    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact us</h2>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                        <h3>Contact Info</h3>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Our Location</h4>
                                <p>140 Paya Lebar Road</p>
                                <p>#10-09 AZ Singapore 409015</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="content">
                                <h4>Phone Number</h4>
                                <p>+65 9807 8025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                        <h3>Get In Touch</h3>

                        <form
                            class="contact-forms"
                            data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        placeholder="Your Name"
                                        required="" />
                                </div>

                                <div class="col-md-6">
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        placeholder="Your Email"
                                        required="" />
                                </div>

                                <div class="col-12">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="subject"
                                        placeholder="Subject"
                                        required="" />
                                </div>

                                <div class="col-12">
                                    <textarea
                                        class="form-control"
                                        name="message"
                                        rows="6"
                                        placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="captcha-container">
                                        <div class="captcha-text" id="captcha-text"></div>
                                        <button type="button" class="btn btn-sm refresh-captcha" onclick="generateCaptcha()">
                                            <i class="bi bi-arrow-clockwise"></i> Refresh Captcha
                                        </button>
                                    </div>
                                    <input
                                        type="text"
                                        class="form-control mt-2"
                                        id="captcha-input"
                                        placeholder="Enter the captcha text above"
                                        required="" />
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Section -->
</main>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- EmailJS SDK -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script>
    // Initialize EmailJS
    (function() {
        emailjs.init("EQXgSioNru4ICHDjF"); // Replace with your EmailJS public key
    })();

    let captchaText = '';

    function generateCaptcha() {
        const chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        captchaText = '';
        for (let i = 0; i < 6; i++) {
            captchaText += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        document.getElementById('captcha-text').textContent = captchaText;
    }

    // Generate captcha when page loads
    document.addEventListener('DOMContentLoaded', generateCaptcha);

    // Handle form submission with EmailJS
    document.querySelector('.contact-forms').addEventListener('submit', async function(e) {
        e.preventDefault();

        // First check captcha
        const captchaInput = document.getElementById('captcha-input').value;
        if (captchaInput !== captchaText) {
            await Swal.fire({
                icon: 'error',
                title: 'Captcha Incorrect',
                text: 'Please try again with the correct captcha.',
                confirmButtonColor: '#0ea2bd'
            });
            generateCaptcha();
            document.getElementById('captcha-input').value = '';
            return;
        }

        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');

        submitBtn.disabled = true;

        try {
            // Prepare the email parameters
            const templateParams = {
                from_name: this.querySelector('[name="name"]').value,
                name: this.querySelector('[name="name"]').value,
                from_email: this.querySelector('[name="email"]').value,
                subject: this.querySelector('[name="subject"]').value,
                message: this.querySelector('[name="message"]').value
            };

            // Send the email using EmailJS
            await emailjs.send(
                "service_tmz6rvh", // Replace with your EmailJS service ID
                "template_n5nh6m4", // Replace with your EmailJS template ID
                templateParams
            );

            await Swal.fire({
                icon: 'success',
                title: 'Message Sent Successfully',
                text: 'Thank you for your message! We will get back to you soon.',
                confirmButtonColor: '#0ea2bd'
            });

            // Clear the form
            this.reset();
            generateCaptcha();

        } catch (error) {

            await Swal.fire({
                icon: 'error',
                title: 'Failed to Send Message',
                text: 'There was an error sending your message. Please try again later.',
                confirmButtonColor: '#0ea2bd'
            });
        } finally {
            submitBtn.disabled = false;
        }
    });
</script>

<?= $this->endSection() ?>