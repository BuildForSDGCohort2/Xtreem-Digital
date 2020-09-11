<?php require "includes/functions.php"; ?>
<?php include 'includes/header.php';?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
      <div class="container py-lg-5 py-md-3">
        <h2>Contacts</h2>
        <p>Get Intouch</p>
      </div>
    </div>
  </section>
<!-- Contact section -->
<section class="w3l-contact py-5" id="contact">
  <div class="container py-lg-3">
    <h3 class="title mb-4">Message</h3>
    <div class="row">
      <div class="col-md-8 contact-form">
        <form action="https://sendmail.w3layouts.com/submitForm" method="post">
          <input type="text" class="form-control" name="w3lName" placeholder="Name" /><br />
          <input type="email" class="form-control" name="w3lSender" placeholder="E-mail" /><br />
          <input type="text" class="form-control" name="w3lSubject" placeholder="Subject" /><br />
          <textarea class="form-control" name="w3lMessage" placeholder="Your Message"
            style="height:150px;"></textarea><br />
          <div class="">
            <button class="btn btn-primary btn-style" type="submit">Submit now</button>
          </div>
        </form>
      </div>
      <div class="col-md-4 mt-md-0 mt-5 w3-contact-address">
        <b>Xtreem Digital</b>
        <p>Kings Prism Tower</p>
        <p>Third Ngong Avenue</p>
        <p>UpperHill Nairobi Kenya</p>
        <br />
        <b>Phone:</b>
        <p><a href="tel:+254-722-846-582"> +254-722-846-582</a></p>
        <p><a href="tel:+254-101-846-582"> +254-101-846-582</a></p>
        <br />
        <b>Email:</b>
        <p><a href="mailto:medpillhospital@mail.com">clinic@xtreemdigital.com</a></p>
        <p><a href="mailto:medpill@supportmail.com">admin@xtreemdigital.com</a></p>
      </div>
    </div>
  </div>
</section>
<!-- //Contact section -->

<!-- map -->
<div class="map">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8020355667736!2d36.806667515274924!3d-1.293236635999826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10c22c678c25%3A0x4b5d81e6fa977dcd!2sKings%20Prism%20Tower!5e0!3m2!1sen!2ske!4v1598645149125!5m2!1sen!2ske"
    frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<!-- //map -->
<?php include 'includes/footer.php';?>
