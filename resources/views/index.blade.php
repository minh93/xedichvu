@extends('layouts.master')

@section('sidebar')
@parent
<div id="slider-wrap">
  <div class="flexslider">
    <ul class="slides">                                             
      <li>
        <a href="single-service.html" title="Toyota Innova G"  class="img-hover" ><img src="images/Refined/AA Innova G.jpg" alt="Slider Image"></a>
      </li>
      <li>
        <a href="single-service.html" title="Force Everest"  class="img-hover" ><img src="images/Refined/AA Ford Everest.jpg" alt="Slider Image"></a>
      </li>
      <li>
        <a href="single-service.html" title="Toyota Fortuner"  class="img-hover" ><img src="images/Refined/AA toyota fortuner.jpg" alt="Slider Image"></a>
      </li>
      <li>
        <a href="single-service.html" title="Ford Transits"  class="img-hover" ><img src="images/Refined/AA ford transit.jpg" alt="Slider Image"></a>
      </li>
      <li>
        <a href="single-service.html" title="Huyndai Universe"  class="img-hover" ><img src="images/Refined/AA huyndai universe.jpg" alt="Slider Image"></a>
      </li>
    </ul>
    <ul class="slide-nav slides-5">
      <li>
        <h4>Toyota Innova G</h4>
        <p>(đời xe 2013-2014)</p>
      </li> 
      <li>
        <h4>Force Everest</h4>
        <p>(đời xe 2013-2015)</p>
      </li> 
      <li>
        <h4>Toyota Fortuner</h4>
        <p>(đời xe 2015)</p>
      </li> 
      <li>
        <h4>Ford Transits</h4>
        <p>(đời xe 2014)</p>
      </li> 
      <li>
        <h4>Huyndai Universe</h4>
        <p>(đời xe 2005-2015)</p>
      </li>
    </ul><!-- end of slider nav -->
  </div>
</div><!-- end of slider-wrap -->
@stop

@section('content')
<div id="container">

  <section class="slogan">
    <h2>Đồng hành cùng Nam Thanh</h2>
    <h3>Công ty Nam Thanh chuyên cung cấp xe chất lượng cao theo nhu cầu cá nhân, công ty, văn phòng đại diện và doanh nghiệp tại Việt Nam với dàn xe chất lượng, đội ngũ lái xe phục vụ chuyên nghiệp sẵn sàng đáp ứng nhu cầu của khách hàng.</h3>
  </section>

  <ul class="services">
    <li class="service">
      <figure class="service-thumb"><a href="single-service.html"><img src="images/Refined/small/serv1.png" alt="Xe 4 chỗ"></a></figure>
      <h4><a href="single-service.html">Xe 4 chỗ</a></h4>
      <p></p>
    </li>                                      
    <li class="service">
      <figure class="service-thumb"><a href="single-service.html"><img src="images/Refined/small/serv2.png" alt="Xe 7 chỗ"></a></figure>
      <h4><a href="single-service.html">Xe 7 chỗ</a></h4>
    </li>
    <li class="service">
      <figure class="service-thumb"><a href="single-service.html"><img src="images/Refined/small/serv2.png" alt="Xe 16 chỗ"></a></figure>
      <h4><a href="single-service.html">Xe 16 chỗ</a></h4>
    </li>
    <li class="service">
      <figure class="service-thumb"><a href="single-service.html"><img src="images/Refined/small/serv3.png" alt="Xe 29 chỗ"></a></figure>
      <h4><a href="single-service.html">Xe 29 chỗ</a></h4>      
    </li>
    <li class="service">
      <figure class="service-thumb"><a href="single-service.html"><img src="images/Refined/small/serv3.png" alt="Xe 45 chỗ"></a></figure>
      <h4><a href="single-service.html">Xe 45 chỗ</a></h4>
    </li>
  </ul><!-- end of services -->                                                               
  <div id="content" class="full-width"></div>
  <div class="official clearfix">
    <div class="home-left-side">                                        
      <section class="team clearfix">
        <h2 class="smart-head">Nhân viên công ty</h2>
        <p>Vui lòng liên hệ tới số điện thoại dưới đây, 24/7.</p>
        <ul class="doctors">
          <li>
            <h4><a href="single-doctor.html"></a></h4>
            <figure class="doc-img">                                                 
              <a href="single-doctor.html" title="Dr.Orana Taleebin" ><img src="images/Refined/small/d6.jpg" alt="Slider Image"></a>
              <span class="doc-type">Mr Nguyễn Mạnh Dũng - Engineering Director</span>                                                                                                                       
            </figure>
            <p>Số điện thoại: 09.09.19.19.63</p>
          </li> 
          <li>
            <h4><a href="single-doctor.html"></a></h4>
            <figure class="doc-img">                                                 
              <a href="single-doctor.html" title="Dr.Adaline Becka" ><img src="images/Refined/small/d4.jpg" alt="Slider Image"></a>
              <span class="doc-type">Ms Lê Hồng Bích - Saleswoman</span>                                                                                                                               
            </figure>
            <p>Số điện thoại: 09.04.20.39.93</p>
          </li>
          <li>
            <h4><a href="single-doctor.html"></a></h4>
            <figure class="doc-img">                                                 
              <a href="single-doctor.html" title="Dr.Andrew Bert" ><img src="images/Refined/small/d3.jpg" alt="Slider Image"></a>
              <span class="doc-type">Ms Lê Thị Sao - Accountant</span>                                                                                                                                
            </figure>
            <p>Số điện thoại: 04.38.51.52.89</p>
          </li>                                                                                                           
        </ul>
        <a href="doctors-four-columns.html" class="readmore">More ...</a>                                                       
      </section>

      <section class="testi">
        <h2 class="smart-head">Nhận xét của khách hàng</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        <div class="pslider">
          <ul class="patients" style="position: relative; height: 133px;">                                                                            
            <li style="position: absolute; top: 0px; z-index: 3; opacity: 0; display: none;">
              <div class="imgbox" style="background-image: url(images/Refined/p4.png); background-color: rgb(230, 230, 230); background-position: 50% 50%; background-repeat: no-repeat no-repeat;">
                <img  src="images/Refined/p4.png" alt="Image" style="display: none;">
              </div>  
              <div class="detail">
                <blockquote>
                  <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. 
                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                  </blockquote>
                  <p class="author"><a href="#brian" class="author">Brian Wagner,</a>ENT Department</p>
                </div>                                                                                                             
              </li>                                               
              <li style="position: absolute; top: 0px; z-index: 2; display: block; opacity: 1;">
                <div class="imgbox" style="background-image: url(images/Refined/p3.png); background-color: rgb(230, 230, 230); background-position: 50% 50%; background-repeat: no-repeat no-repeat;">
                  <img  src="images/Refined/p3.png" alt="Image" style="display: none;">
                </div>  
                <div class="detail">
                  <blockquote>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </blockquote>
                  <p class="author"><a href="#Jullia" class="author">Jullia Robert,</a>Skin Care</p>
                </div>                                                                                                             
              </li>                                               
              <li style="position: absolute; top: 0px; z-index: 1; display: none; opacity: 0;">
                <div class="imgbox" style="background-image: url(images/Refined/p1.jpg); background-color: rgb(230, 230, 230); background-position: 50% 50%; background-repeat: no-repeat no-repeat;">
                  <img  src="images/Refined/p1.jpg" alt="Image" style="display: none;">
                </div>  
                <div class="detail">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
                  </blockquote>
                  <p class="author"><a href="#john" class="author">John Doe,</a>Dental Care</p>
                </div>                                                                                                             
              </li>                                                                 
            </ul>
          </div>

          <p class="patient-nav">
            <span class="t_left"></span>
            <span class="t_right"></span>
          </p>

        </section><!-- end of testi section -->                                       
      </div><!-- home left side -->                                        

      <aside id="sidebar">

        <section class="widget">                   
          <div class="appointment">
            <div class="header">
              <h2>Liên hệ đặt xe</h2>
              <h3 class="number">04.38.51.52.89</h3>
              <span class="or">OR</span>
            </div>
            <form action="#" id="appoint-form" method="post">
              <p>
                <label class="display-ie8" for="apo_name">Full Name</label>
                <input type="text" name="apo_name" class="required" id="apo_name" placeholder="Full Name" title="* Please enter your Full Name" />
              </p>
              <p>
                <label class="display-ie8" for="apo_phone">Phone Number</label>
                <input type="text" name="apo_phone" class="required" id="apo_phone" placeholder="Phone Number" title="* Please enter your Phone Number" />
              </p>
              <p>
                <label class="display-ie8" for="apo_email">Email Address</label>
                <input  type="text" name="apo_email"  class="email required" id="apo_email" placeholder="Email Address" title="* Please enter valide Email Address" />
              </p>
              <p>
                <label class="display-ie8" for="apo_date">"Appointment Date</label>
                <input type="text" name="apo_date" class="required" id="apo_date" placeholder="Appointment Date" title="* Please select desired appointment date" />
              </p>
              <p>
                <label class="display-ie8" for="apo_date">Message</label>
                <textarea name="message" class="message required" cols="30" rows="5" placeholder="Message" title="* Please enter your message"></textarea>
              </p>

              <div class="captcha-container">
                <img src="captcha/appointment_captcha.png" alt=""/>
                <input type="text" class="captcha required" name="captcha" maxlength="5" title="* Please enter the code characters displayed in image!"/>
              </div>

              <p>                                                         
                <input type="submit" value="Submit Request" class="readmore">
                <input type="hidden" name="action" value="request_appointment" />
                <input type="hidden" name="target" value="fahid@960development.com" />
                <img src="images/loading.gif" id="apo-loader" alt="Loader" />
              </p>
              <p id="apo-message-sent"></p>
              <div class="error-container"></div>                            
            </form>
          </div>                             
        </section>        
      </aside>

    </div> <!-- end of official -->    
  </div><!-- end of container -->
  @stop
