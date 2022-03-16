<header
    class="header-page over-hidden p-relative header-padding-top header-padding-bottom dsn-header-animation">
    <div class="bg-circle-dotted"></div>
    <div class="dsn-container">
        <div
            class="content-hero p-relative d-flex align-items-center text-center flex-column h-100 dsn-hero-parallax-title">
            <p class="subtitle p-relative line-shap  ">
                <span class="pl-10 pr-10 background-section dsn-load-animate">Lat's Tock</span>
            </p>
            <h1 class="title mt-20 dsn-load-animate">Contact Us</h1>
        </div>
    </div>
</header>


<div class="wrapper">

    <div class="container root-contact">
        <div class="full-width">
            <div class="map-custom p-absolute w-100 h-100" data-dsn-lat="20.605879407973028" data-dsn-len="72.91638754213008" data-dsn-zoom="14">
            </div>
        </div>
        <div class="box-contact-inner section-margin">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="form-box">
                        <div class="line line-top"></div>
                        <div class="line line-bottom"></div>
                        <div class="line line-left"></div>
                        <div class="line line-right"></div>

                        <div class="mb-30 d-flex text-left flex-column align-items-start">
                            <p class="sub-heading line-shap line-shap-before mb-15"><span class="line-bg-right">Stay connected</span></p>
                            <h2 class="section-title  title-cap">Get in Touch</h2>
                        </div>
                        <p class="mb-30">It’s all about the humans behind a brand and those experiencing it, we’re right there. In the middle.</p>

                        <form id="contact-form" class="form" method="post" action="contactscript.php" data-toggle="validator">
                            <div class="messages"></div>
                            <div class="input__wrap controls">
                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>Your name *</label>
                                        <input id="form_name" type="text" name="name" placeholder="Type your name" required="required" data-error="name is required.">
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>Your E-Mail *</label>
                                        <input id="form_email" type="email" name="email" placeholder="Type your Email Address" required="required" data-error="Valid email is required.">
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>What's up?</label>
                                        <textarea id="form_message" class="form-control" name="message" placeholder="Tell us about you and the world" required="required" data-error="Please,leave us a message."></textarea>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="text-right">
                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                        <button type="submit" class="dsn-button ">
                                            <span class="dsn-border border-color-default"></span>
                                            <span class="text-button">Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="box-info-contact">
                        <ul>
                            <li>
                                <h5 class="title-block mb-15">Contact</h5>
                                <p class="text-p "><?=contact_number?></p>
                                <div class="over-hidden mt-5">
                                    <a class="link-hover" data-hover-text="<?=contact_email?>" href="mailto:hello@tacnix.com?subject=Website Contact Form&body=Hello, I would like to know further about your services."><?=contact_email?></a>
                                </div>
                            </li>
                            <li>
                                <h5 class="title-block mb-15">Address</h5>
                                <p class="text-p"><?=contact_address?></p>
                            </li>
                            <li>
                                <h5 class="title-block mb-15">Follow Us</h5>
                                <div class="social-item over-hidden">
                                    <a class="link-hover" data-hover-text="Instagram." href="<?=twitter?>" target="_blank" rel="nofollow">Twitter</a>
                                </div>
                                <div class="social-item over-hidden">
                                    <a class="link-hover" data-hover-text="Facebook." href="<?=facebook?>" target="_blank" rel="nofollow">Facebook</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========  next page  ========== -->
    <section class="next-page p-relative section-padding border-top background-section">
        <div class="bg-circle-dotted"></div>
        <div class="bg-circle-dotted bg-circle-dotted-right"></div>
        <div class="container">
            <div class="c-wapp d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <p class="sub-heading line-shap line-shap-after ">
                        <span class="line-bg-left">
                            Don't be weird.
                        </span>
                    </p>
                    <h2 class="section-title max-w750 mt-15">
                        Would you like more information or
                        do you have a question?

                    </h2>


                </div>

                <div class="button-box d-flex justify-content-end align-items-center">
                    <div>
                        <a href="work.html" class="mt-30 effect-ajax dsn-button p-relative">
                            <span class="dsn-border-rdu "></span>Owr Work
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========== End next page ========== -->

</div>

<?php if (function_exists(_footer())) { _footer(); } ?>
