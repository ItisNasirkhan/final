@extends('home.contact')

@section('content')

<section id="page-header">
    
    <h2>#Stay At Home</h2>
    
    <p>Save more with coupons & up to 70% off!</p>
   
   </section>

   <section id="contact-details" class="section-p1">
     <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency locations and contact us today</h2>
        <h3>Head office</h3>
        <div>
            <li>
                <i class="fa-solid fa-map"></i>
                <p>Plot#477,Sec#9/c,Hawksbay Road,Karachi</p>
            </li>
            <li>
                <i class="fa-solid fa-envelope"></i>
                <p>nk.102030g@gmail.com</p>
            </li>
            <li>
                <i class="fa-solid fa-phone"></i>
                <p>+923132304749</p>
            </li>
            <li>
                <i class="fa-solid fa-clock"></i>
                <p>Monday-Sunday: 9:00am - 9:00pm</p>
            </li>
        </div>
     </div>
     <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50370.88584057355!2d66.93327277080188!3d24.930293033540284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb31338176fd105%3A0x765ec9652d8f1255!2sHawkes%20Bay%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1730124319374!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
   </section>

   <section id="form-details">
    <form action="" >
        <span>LEAVE A MESSEGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" placeholder="Your Messege"></textarea>
        <button>Sumbit</button>
    </form>
    <div class="people" >
        <div>
            <img src="../home/images/people/1.png" alt="">
            <p>NasirKhan <span>CEO</span><br>
               Email: Nk.10203g@gmail.com <br>
               Phone: +923132304749
            </p>
        </div>
        <div>
            <img src="../home/images/people/2.png" alt="">
            <p>AmirKhan <span>Director</span><br>
               Email: AK.2343@gmail.com <br>
               Phone: +923132304749
            </p>
        </div>
        <div>
            <img src="../home/images/people/3.png" alt="">
            <p>AlmasKhan <span>Manager</span><br>
               Email: AK.3342g@gmail.com <br>
               Phone: +923132304749
            </p>
        </div>

    </div>

   </section>

   <section id="newsletter" class="section-p1">
  <div class="newstext">
    <h4>Signup For Newsletters </h4>
    <p>Get email updates about our latest shop and <span>special offers</span></p>
  </div>
  <div class="form" >
      <input type="text" placeholder="Enter your email">
      <button class="frtbtn">Signup</button>
  </div>
 </section>


@endsection