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
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                        <h3>Get In Touch</h3>

                        <form id="contactForm" class="contact-forms" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        placeholder="Your Name"
                                        required />
                                </div>

                                <div class="col-md-6">
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        placeholder="Your Email"
                                        required />
                                </div>

                                <div class="col-12">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="subject"
                                        placeholder="Subject"
                                        required />
                                </div>

                                <div class="col-12">
                                    <textarea
                                        class="form-control"
                                        name="message"
                                        rows="6"
                                        placeholder="Message"
                                        required></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="captcha-container">
                                        <div class="captcha-text" id="captcha-text"></div>
                                        <button type="button" class="btn btn-sm refresh-captcha" id="refresh-captcha">
                                            <i class="bi bi-arrow-clockwise"></i> Refresh Captcha
                                        </button>
                                    </div>
                                    <input
                                        type="text"
                                        class="form-control mt-2"
                                        id="captcha-input"
                                        name="captcha"
                                        placeholder="Enter the captcha text above"
                                        required />
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

<script>
    // Function to fetch and display new CAPTCHA
    async function refreshCaptcha() {
        try {
            const response = await fetch('<?= base_url('contact/generateCaptcha') ?>');
            const data = await response.json();
            
            if (data.status === 'success') {
                document.getElementById('captcha-text').textContent = data.captcha;
                document.getElementById('captcha-input').value = ''; // Clear input field
            } else {
                console.error('Failed to generate CAPTCHA');
            }
        } catch (error) {
            console.error('Error fetching CAPTCHA:', error);
        }
    }

    // Generate CAPTCHA when page loads
    document.addEventListener('DOMContentLoaded', refreshCaptcha);

    // Refresh CAPTCHA when button is clicked
    document.getElementById('refresh-captcha').addEventListener('click', refreshCaptcha);

    // Handle form submission
    document.getElementById('contactForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const submitBtn = this.querySelector('button[type="submit"]');
        submitBtn.disabled = true;

        try {
            const formData = new FormData(this);
            
            const response = await fetch('<?= base_url('contact/send') ?>', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.status === 'success') {
                await Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: result.message,
                    confirmButtonColor: '#0ea2bd'
                });
                
                // Clear the form
                this.reset();
                refreshCaptcha();
            } else {
                await Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: result.message,
                    confirmButtonColor: '#0ea2bd'
                });
                
                // Refresh CAPTCHA on error
                refreshCaptcha();
            }
        } catch (error) {
            console.error('Error:', error);
            await Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An unexpected error occurred. Please try again later.',
                confirmButtonColor: '#0ea2bd'
            });
        } finally {
            submitBtn.disabled = false;
        }
    });
</script>

<?= $this->endSection() ?>