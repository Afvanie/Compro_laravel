@extends('layouts.user')

@section('header')
    <style>
        #hero{
            background: url('{{asset('user/images/contact.png')}}') top center;
            background-repeat: no-repeat;
            width:100%;
            background-size:cover;
        }
    </style>    
@endsection

@section('hero')
    <h1>Contact Nusantara Charcoal</h1>
    <h2>Mari konsultasi dengan kami</h2>
@endsection

@section('content')

  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">Contact</h3>
        <p class="section-description">Segera konsultasikan kebutuhan arang anda kepada kami</p>
      </div>
    </div>

    {{-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div> --}}

    <div class="container wow fadeInUp">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Surabaya - Bondowoso,
                <br>Jawa Timur</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>abi@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>0821-4383-7734</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center" style="margin-top: 20px;">
                <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20produk%20Anda"
                  target="_blank"
                  style="
                    display: inline-flex;
                    align-items: center;
                    background-color: #25D366;
                    color: white;
                    padding: 12px 20px;
                    border-radius: 8px;
                    text-decoration: none;
                    font-weight: bold;
                    font-family: Arial, sans-serif;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    transition: all 0.3s ease;
                  "
                  onmouseover="this.style.backgroundColor='#1ebd5c'"
                  onmouseout="this.style.backgroundColor='#25D366'">

                  <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="20" height="20" viewBox="0 0 32 32" style="margin-right: 10px;">
                    <path d="M16 .396C7.157.396 0 7.553 0 16.396c0 2.918.762 5.678 2.207 8.144L.11 31.089l6.68-2.055c2.343 1.281 4.998 1.962 7.823 1.962 8.843 0 16-7.157 16-15.999 0-8.843-7.157-16-16-16zm0 29.202c-2.481 0-4.887-.661-6.986-1.914l-.501-.296-3.965 1.219 1.301-3.859-.327-.528C4.4 22.03 3.594 19.27 3.594 16.396c0-6.871 5.589-12.459 12.459-12.459 6.871 0 12.459 5.589 12.459 12.459 0 6.87-5.588 12.459-12.459 12.459zm6.833-9.322c-.373-.187-2.204-1.09-2.546-1.215-.342-.124-.592-.187-.842.187s-.967 1.215-1.185 1.463c-.218.249-.437.28-.811.093-.373-.187-1.576-.581-3.004-1.853-1.111-.99-1.859-2.213-2.075-2.586-.218-.373-.023-.574.164-.761.169-.169.373-.437.561-.655.187-.218.249-.374.373-.623.124-.249.062-.468-.031-.655-.093-.187-.842-2.03-1.153-2.781-.302-.725-.61-.625-.842-.625-.218-.01-.468-.01-.718-.01s-.655.093-.998.468c-.342.374-1.308 1.277-1.308 3.109s1.338 3.604 1.524 3.853c.187.249 2.635 4.03 6.385 5.647.892.374 1.588.598 2.133.764.896.284 1.71.244 2.356.148.719-.107 2.204-.9 2.514-1.77.311-.873.311-1.622.218-1.77-.093-.155-.342-.249-.718-.437z"/>
                  </svg>

                  Chat via WhatsApp
                </a>
              </div>

            </form>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #contact -->
@endsection