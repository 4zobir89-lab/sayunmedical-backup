<?php include "header_footer/header.php"; ?>

<div class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <ul class="breadcrumb">
            <li><a href="service.php">services</a></li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
</div>

<div class="container mt-80 mb-100">
    <div class="row">
        <div class="col-sm-7 mt-20">
            <h4 class="heading">Happy to <span class="color2">help!</span></h4>
            <form id="main-contact-form">
                <div class="form-group">
                    <input id="contact-name" type="text" class="form-control" name="name" required= 'required'>
                    <label for="contact-name">Your Name</label>
                </div>
                <div class="form-group">
                    <input id="contact-email" type="text" class="form-control" name="email">
                    <label for="contact-email">Email</label>
                </div>
                <div class="form-group">
                    <input id="contact-number" type="text" class="form-control" name="subject" required= 'required'>
                    <label for="contact-number">Subject</label>
                </div>
                <div class="form-group">
                    <textarea id="contact-message" class="form-control" rows="6" name="message" required= 'required'></textarea>
                    <label for="contact-message">Your Message</label>
                </div>
                <p id="status"></p>
                <button type="submit" name="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
        <div class="col-sm-5 mt-20">
            <h4 class="heading">Or Contact us <span class="color2">directly</span></h4>
            <address>
                    <strong>Sayun Company for Medical Appliances</strong>
                    <br/>
                    <span>Al-Tahreer Street,<br> Sana'a City,<br> Yemen</span>
                </address>
            <p class="phone"><i class="fa fa-fax fa-fw"></i> 00967-01-274838</p>
            <p class="phone"><i class="fa fa-phone fa-fw"></i> 00967-274839</p>
            <p class="phone"><i class="fa fa-mobile fa-fw"></i> 00967-777-366-666</p>
            <p class="phone"><i class="fa fa-mobile fa-fw"></i> 00967-777--33-002</p>
            <p class="email"><i class="fa fa-yahoo fa-fw"></i> sayunmedical@yahoo.com</p>
            <p class="email"><i class="fa fa-envelope fa-fw"></i> info@sayunmedical.com</p>
            <p class="email"><i class="fa fa-envelope fa-fw"></i> sayunmedical@y.net.ye</p>
            <br/>
            <h5 class="heading">Visit us <span class="color2">ON</span></h5>
            <ul class="social">
                <li><a href="#"><i class=" fa fa-facebook"></i></a></li>
                <li><a href="#"><i class=" fa fa-whatsapp"></i></a></li>
                <li><a href="#"><i class=" fa fa-yahoo"></i></a></li>
                <li><a href="#"><i class=" fa fa-google"></i></a></li>
                <li><a href="#"><i class=" fa fa-envelope"></i></a></li>
            </ul>
        </div>

    </div>
</div>

<div class="container mt-100 mb-100">
    <div class="row">
        <div class="col-sm-12 no-gutter">
            <h2 class="heading text-center"><span class="color2">Maps</span>
                <span class="sub-heading">Visit Us on Map</span>
                <span class="icon-divider"></span>
            </h2>
            <!-- Replace Latitude, Logitude and Info Window as per your place -->
            <!-- <div class="gmap" id="gmap" style="height:550px" data-lat="51.508103" data-long="-0.074911" data-info-win="<h6>Educomp London Campus</h6>"></div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923.7505070735856!2d44.203542802465336!3d15.349329123789218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1603dbaa22f680a7%3A0xd4194e270af6b5c8!2z2LPZitim2YjZhiDZhNmE2KfYrNmH2LLYqSDYp9mE2LfYqNmK2Kk!5e0!3m2!1sen!2s!4v1509290301308" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?php include "header_footer/footer.php";?>