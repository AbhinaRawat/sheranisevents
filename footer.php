<!-- Testimonial Form Markup -->

<div id="myModal" class="modal">
  <div class="modal-content"style="left: 0; right: 0; margin: auto; transform: none;">
    <span class="close">&times;</span>
    <div class="testimonial-form-div">
      <div class="form-header">
        <h2>Share Your Experience</h2>
        <p class="form-subtitle">We value your honest feedback</p>
      </div>
      
      <form class="testimonial-form" id="testimonial-form" action="upload_testimonial.php" method="POST" enctype="multipart/form-data">
        
        <!-- Personal Information Section -->
        <div class="form-section">
          <div class="form-row">
            <div class="form-group name-group">
              <label for="Firstname" class="form-label">Full Name</label>
              <div class="name-fields">
                <input id="Firstname" type="text" name="firstname" required placeholder="First name" class="form-input">
                <input type="text" name="lastname" required placeholder="Last name" class="form-input">
              </div>
            </div>
          </div>

          <div class="form-row dual-fields">
            <div class="form-group">
              <label for="email2" class="form-label">Email Address</label>
              <input type="email" id="email2" name="email" required class="form-input" placeholder="your.email@example.com">
            </div>
            <div class="form-group">
              <label for="company" class="form-label">Company</label>
              <input type="text" name="company" id="company" class="form-input" placeholder="Your company">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="jb_title" class="form-label">Job Title</label>
              <input type="text" id="jb_title" name="jb_title" class="form-input full-width" placeholder="Your professional title">
            </div>
          </div>
        </div>

        <!-- Service Information Section -->
        <div class="form-section">
          <div class="form-row">
            <div class="form-group">
              <label for="cars" class="form-label">Which product/service do you use?</label>
              <select id="cars" name="service" class="form-select full-width">
                <option value="" disabled selected>Select a service</option>
                <option value="celebrity">Celebrity & Artist Management</option>
                <option value="workshops">Workshops & Seminars</option>
                <option value="concerts">Live Concerts & Events</option>
                <option value="design">Design & Fabrication</option>
                <option value="wedding">Wedding Photoshoot</option>
                <option value="cinematography">Cinematography</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="message2" class="form-label">Your Testimonial</label>
              <textarea name="message" maxlength="300" id="message2" class="form-textarea" placeholder="Share your experience with us..." required></textarea>
              <div class="char-counter"><span id="char-count">0</span>/300 characters</div>
            </div>
          </div>
        </div>

        <!-- Permission Section -->
        <div class="form-section">
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">May we feature your testimonial on our website?</label>
              <div class="radio-group">
                <label class="radio-option">
                  <input type="radio" name="show_testimonial" value="Yes" required>
                  <span class="radio-custom"></span>
                  Yes, certainly
                </label>
                <label class="radio-option">
                  <input type="radio" name="show_testimonial" value="No" required>
                  <span class="radio-custom"></span>
                  No, keep private
                </label>
              </div>
            </div>
          </div>

          <div class="form-row" id="image-upload-section">
            <div class="form-group">
              <label for="file" class="form-label">Profile Photo (Optional)</label>
              <div class="file-upload-area">
                <input type="file" name="file" id="file" class="file-input" accept=".jpg,.jpeg,.png">
                <label for="file" class="file-upload-label">
                  <i class="upload-icon">📷</i>
                  <span class="file-text">Choose file</span>
                </label>
                <div class="file-hint">JPG, JPEG, PNG • Max 2MB</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Security & Submit -->
        <div class="form-section">
          <div class="form-row">
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LfgiQksAAAAAOmcZhJzSNmLMpxGaCE8S_i24Y0J"></div>
            </div>
          </div>

          <div class="form-row">
            <button type="submit" name="submit" class="submit-btn">
              Submit Testimonial
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Footer Start -->
<footer id="footer">
  <div class="max-container" style="max-width: 100%;">
    <div class="f1">
      <div class="holder">
        <div class="logo-footer">
          <!-- Our Engagements/Clients -->
          <div class="rows">
            <h5 style="text-align: left;color: white;font-family: Muli;background-color: #0B213D;backface-visibility: hidden;font-weight: 700;text-decoration: none;text-transform: uppercase;transition: all ease 0.5s;letter-spacing: 2.6px;">Our Engagements!</h5>
            <!-- Owl Carousel for Clients -->
            <div class="clients">
              <div class="owl-carousel owl-theme owl-reponsive owl-item">
                <div>
                  <img src="/lib/images/clients/sheraniswelfare.png" alt="Sheranis Welfare Foundation">
                </div>
                <div>
                  <img src="/lib/images/clients/hpindia.png" alt="HP, India">
                </div>
                <div>
                  <img src="/lib/images/clients/extramarks.png" alt="Extramarks, Mumbai">
                </div>
                <div>
                  <img src="/lib/images/clients/theultimateknowledge.png" alt="TUK, Theultimateknowledge.com">
                </div>
                <div>
                  <img src="/lib/images/clients/kanishkapatna.png" alt="Kanishka Buildcon Pvt. Ltd.">
                </div>
                <div>
                  <img src="/lib/images/clients/cbcimarterminds.png" alt="CBCI Masterminds">
                </div>
                <div>
                  <img src="/lib/images/clients/franciscan.png" alt="Franciscan, Delhi">
                </div>
                <div>
                  <img src="/lib/images/clients/franciscanecare.png" alt="Franciscan Care, Delhi">
                </div>
                <div>
                  <img src="/lib/images/clients/franciscanventures.png" alt="Franciscans Ventures, Delhi">
                </div>
                <div>
                  <img src="/lib/images/clients/bitm.png" alt="Bengal Institute of Technology and Management, Bolpur">
                </div>
                <div>
                  <img src="/lib/images/clients/johartrust.png" alt="Johar Trust, Jharkhand">
                </div>
                <div>
                  <img src="/lib/images/clients/webskitters.png" alt="Web Skitters, Kolkata">
                </div>
                <div>
                  <img src="/lib/images/clients/roversbasket.png" alt="Roverz Basket, roverzbasket.com">
                </div>
                <div>
                  <img src="/lib/images/clients/avfilms.png" alt="AVFilms, Mumbai">
                </div>
                <div>
                  <img src="/lib/images/clients/incube.png" alt="inCude, BITM">
                </div>
                <div>
                  <img src="/lib/images/clients/digiminds.png" alt="Digiminds Robotics Club, BITM">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer-txt -->
        <div class="footer-txt">
          <div class="text">
            <p> Private Events | Corporate Events | Wedding Photography | Video Shoot & Cinematography | Event Management | Promotional Events | Product Launching | Celebrity & Artist Management | Educational Workshops | Event Decoration | Theme Parties | and everything related to your event... </p>
            <div class="contact">
              <address>
                <span class="yellow">
                  <i class="fad fa-map-marked-alt"></i> : </span>
                <a href="https://sheranisevents.in/nav">Boring Road, Patna, Bihar, IN 800013 </a>
              </address>
              <span class="email">
                <span class="yellow">
                  <i class="fad fa-at"></i> : </span>
                <a href="mailto:contact@sheranisevents.in">contact&#64;sheranisevents.in</a>
              </span>
              <span class="email">
                <span class="yellow">
                  <i class="fad fa-at"></i> : </span>
                <a href="mailto:sheranisevents@gmail.com">sheranisevents&#64;gmail.com</a>
              </span>
              <span class="email">
                <span class="yellow">
                  <i class="fad fa-phone-rotary"></i> : </span>
                <a href="tel:+919934447200">(+91) 993 444 7200</a>
                <!--</span><span class="email"><span class="yellow"><i class="fab fa-whatsapp"></i> : </span><a href="https://wa.me/9934447200?text=Hello+There!+I%27m+intrested+in+one+of+your+services+and+would+like%20to+know+more..!+Thank+you+%40YourName" target="_blank">(+91) 7766 80 6677</a></span> -->
            </div>
          </div>
          <ul class="testimonial" style="text-align: center;">
            <li>
              <div class="fb-page" data-href="https://www.facebook.com/sheranisevents" data-tabs="" data-width="380" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/sheranisevents" class="fb-xfbml-parse-ignore">
                  <a href="https://www.facebook.com/sheranisevents">SheranisEvents Pvt. Ltd.</a>
                </blockquote>
              </div>
            </li>
            <li>
              <a href="https://www.instagram.com/sheranisevents/" target="_blank">
                <img src="/lib/images/instagram.png" alt="Check out our Instagram!" style="width: 45%;padding: 0 20px;">
              </a>
              <a href="https://www.linkedin.com/company/sheranisevents/" target="_blank">
                <img src="/lib/images/linkedin.png" alt="Follow us on LinkedIn!" style="width: 45%;padding: 0 20px;">
              </a>
            </li>
            <li>
              <a href="#testimonial">
                <img id="testimonial-btn" src="/lib/images/testimonial.png" alt="Give Testimonial!" style="width: 50%;padding: 0 20px;">
              </a>
              <a href="https://sheranisevents.in/review" target="_blank">
                <img src="/img/greview.png" alt="Google Review" style="width: 38%;padding: 0 20px;">
              </a>
            </li>
            <!--<li>-->
            <!--    <a href="https://payumoney.com/paybypayumoney/#/0EE6003DCB5C402D3F488D5B242670B0"> <img src="/payu/payu_pg.png" alt="Pay Us Online" style="width: 45%;padding: 2.5%;"></a>-->
            <!--    <a href="#"><img src="/lib/images/paytmpgwide.png" alt="Pay Us Online" style="width: 45%;padding: 5%;"></a>-->
            <!--</li>-->
          </ul>
        </div>
      </div>
      <!-- Contact Form  -->
      <div class="frame">
        <div class="wpcf7">
          <form id="myform" class="wpcf7-form f-contact-form" enctype="multipart/form-data" method="post">
            <h3>We will love to hear from you!</h3>
            <div class="rows">
              <span class="wpcf7-form-control-wrap text-field-required">
                <input type="text" id="name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Name">
              </span>
            </div>
            <div class="rows">
              <span class="wpcf7-form-control-wrap Emailfield">
                <input type="email" id="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" size="12" placeholder="Email">
              </span>
            </div>
            <div class="rows">
              <span class="wpcf7-form-control-wrap text-field-required">
                <input type="text" id="mobile" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Phone Number">
              </span>
            </div>
            <div class="rows">
              <span class="wpcf7-form-control-wrap textarea">
                <textarea id="message" class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" rows="9" cols="39" placeholder="Your Message"></textarea>
              </span>
            </div>
            <input type="submit" id="submit" value="SEND MESSAGE" onclick="return check()">
            <br>
            <br>
            <br>
            <p id="result_msg"></p>
            <!-- Contact Form Result -->
          </form>
        </div>
      </div>
    </div>
    <div class="f2">
      <!-- sub-nav -->
      <ul class="sub-nav">
        <li>
          <a href="/p/TC">Terms &amp; Conditions</a>
        </li>
        <li>
          <a href="/p/RCPolicy">Refund &amp; Cancellation Policy</a>
        </li>
        <li>
          <a href="/p/PrivacyPolicy">Privacy Policy</a>
        </li>
        <li>
          <a href="/careers">Careers</a>
        </li>
        <!--<li>-->
        <!--  <a href="/p/Press">Press Release</a>-->
        <!--</li>-->
      </ul>
      <span class="copyright">
        <b>Crafted by <a href="team">#SheranisEvents</a> &copy; All rights reserved. </b>
      </span>
    </div>
  </div>
</footer>

<span id="back-top">
  <i class="fa fa-arrow-up"></i>
</span>