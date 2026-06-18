<?php include "header_footer/header.php"; ?>

<div class="page-header">
    <div class="container">
        <h1>تواصل معنا</h1>
        <ul class="breadcrumb">
            <li><a href="service.php">خدماتنا</a></li>
            <li class="active">تواصل معنا</li>
        </ul>
    </div>
</div>

<div class="container mt-80 mb-100">
    <div class="row">
        <div class="col-sm-7 mt-20">
            <h4 class="heading">سعداء جداً  <span class="color2">لمساعدتكم</span></h4>
            <form id="main-contact-form">
                <div class="form-group">
                    <input id="contact-name" type="text" class="form-control" name="name" required= 'required'>
                    <label for="contact-name">الإسم</label>
                </div>
                <div class="form-group">
                    <input id="contact-email" type="text" class="form-control" name="email">
                    <label for="contact-email">الإيميل</label>
                </div>
                <div class="form-group">
                    <input id="contact-number" type="text" class="form-control" name="subject" required= 'required'>
                    <label for="contact-number">موضوع الرسالة</label>
                </div>
                <div class="form-group">
                    <textarea id="contact-message" class="form-control" rows="6" name="message" required= 'required'></textarea>
                    <label for="contact-message">نص الرسالة</label>
                </div>
                <p id="status"></p>
                <button type="submit" name="submit" class="btn btn-primary">إرسال</button>
            </form>
        </div>
        <div class="col-sm-5 mt-20">
            <h4 class="heading">أو تواصل معنا  <span class="color2">مباشرة</span></h4>
            <address>
                    <strong>شركة سيئون للمنتجات الطبية</strong>
                    <br/>
                    <span>شارع التحرير<br> العاصمة صنعاء<br> اليمن</span>

                </address>
                <p class="phone">00967-01-274838 <i class="fa fa-fax fa-fw"></i> </p>
                <p class="phone">00967-274839 <i class="fa fa-phone fa-fw"></i> </p>
                <p class="phone">00967-777-366-666 <i class="fa fa-mobile fa-fw"></i></p>
                <p class="phone">00967-777--33-002 <i class="fa fa-mobile fa-fw"></i></p>
                <p class="email">sayunmedical@yahoo.com <i class="fa fa-yahoo fa-fw"></i></p>
                <p class="email">info@sayunmedical.com <i class="fa fa-envelope fa-fw"></i></p>
                <p class="email">sayunmedical@y.net.ye <i class="fa fa-envelope fa-fw"></i></p>
            <br/>
            <h5 class="heading">أو قم بزيارتنا <span class="color2">على</span></h5>
            <ul class="social">
                <li><a href="#"><i class=" fa fa-facebook"></i></a></li>
                <li><a href="tel:00967-777-366-666"><i class=" fa fa-whatsapp"></i></a></li>
                <li><a href="mailto:sayunmedical@yahoo.com"><i class=" fa fa-yahoo"></i></a></li>
                <li><a href="#"><i class=" fa fa-google"></i></a></li>
                <li><a href="info@sayunmedical.com"><i class=" fa fa-envelope"></i></a></li>
            </ul>
        </div>

    </div>
</div>

<?php include "header_footer/footer.php";?>