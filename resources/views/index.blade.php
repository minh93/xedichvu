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
        <a href="single-service.html" title="Ford Everest"  class="img-hover" ><img src="images/Refined/AA Ford Everest.jpg" alt="Slider Image"></a>
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
        <h4>Ford Everest</h4>
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
        <h4>Huyndai Country</h4>
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
      <figure class="service-thumb"><a href="{{route('duadon')}}"><img src="images/Refined/small/serv1.png" alt="Xe 4 chỗ"></a></figure>
      <h4><a href="{{route('duadon')}}">Xe 4 chỗ</a></h4>
      <p></p>
    </li>                                      
    <li class="service">
      <figure class="service-thumb"><a href="{{route('duadon')}}"><img src="images/Refined/small/serv2.png" alt="Xe 7 chỗ"></a></figure>
      <h4><a href="{{route('duadon')}}">Xe 7 chỗ</a></h4>
    </li>
    <li class="service">
      <figure class="service-thumb"><a href="{{route('duadon')}}"><img src="images/Refined/small/serv2.png" alt="Xe 16 chỗ"></a></figure>
      <h4><a href="{{route('duadon')}}">Xe 16 chỗ</a></h4>
    </li>
    <li class="service">
      <figure class="service-thumb"><a href="{{route('duadon')}}"><img src="images/Refined/small/serv3.png" alt="Xe 29 chỗ"></a></figure>
      <h4><a href="{{route('duadon')}}">Xe 29 chỗ</a></h4>      
    </li>
    <li class="service">
      <figure class="service-thumb"><a href="{{route('duadon')}}"><img src="images/Refined/small/serv3.png" alt="Xe 45 chỗ"></a></figure>
      <h4><a href="{{route('duadon')}}">Xe 45 chỗ</a></h4>
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
        <a href="{{route('intro')}}" class="readmore">More ...</a>                                                      
      </section>

      <section class="testi">
        <h2 class="smart-head">Câu hỏi thường gặp</h2>
        <p>Nam Thanh luôn đồng hành cùng bạn.</p>
        <div class="pslider">
          <ul class="patients" style="position: relative; height: 133px;">                                                                            
            <li style="position: absolute; top: 0px; z-index: 3; opacity: 0; display: none;">
              <div class="imgbox" style="background-image: url(images/Refined/p4.png); background-color: rgb(230, 230, 230); background-position: 50% 50%; background-repeat: no-repeat no-repeat;">
                <img  src="images/Refined/p4.png" alt="Image" style="display: none;">
              </div>  
              <div class="detail">
                <blockquote>
                  <p>Bạn có thể gửi email hoặc gọi số liên hệ thuê xe trên website. Nhân viên kinh doanh sẽ lấy thông tin chuyến đi báo giá cho bạn, nếu bạn đồng ý về giá cả, chúng tôi sẽ xin thông tin từ bạn để tiến hành làm hợp đồng. Nếu bạn không thể đến công ty để kí hợp đồng thì nhân viên kinh doanh sẽ đến tận địa chỉ nhà bạn, hoặc ký hợp đồng qua Email, Fax.</p>
                </blockquote>
                <p class="author"><a href="#brian" class="author">Mr Nguyễn Mạnh Dũng,</a>Engineering Director</p>
              </div>                                                                                                             
            </li>                                               
            <li style="position: absolute; top: 0px; z-index: 2; display: block; opacity: 1;">
              <div class="imgbox" style="background-image: url(images/Refined/p3.png); background-color: rgb(230, 230, 230); background-position: 50% 50%; background-repeat: no-repeat no-repeat;">
                <img  src="images/Refined/p3.png" alt="Image" style="display: none;">
              </div>  
              <div class="detail">
                <blockquote>
                  <p>Thuê xe của xedichvu.vn là khách hàng đã được hưởng những lợi ích to lớn, bao gồm:
                    Giá rẻ so với các nhà cung cấp cùng dịch vụ
                    Qui trình Đặt xe nhanh chóng và Minh bạh trong giao dịch và thanh toán
                    Tiện lợi: Lái xe nhận và giao xe, lái xe đón bạn tại khách sạn, nơi họp hoặc bất kì nơi nào bạn yêu cầu.
                    Không còn lo lắng: Lái xe có hiểu biết về địa phương và quen thuộc với các lịch trình ngắn nhất.
                    An toàn: Hiểu biết về phương tiện để đáp ứng yêu cầu của bạn và hỗ trợ bạn nhu cầu về an ninh.
                    Giá trị khác: Tiết kiệm đến 10 –20 %.
                    Linh hoạt: Bạn có thể yêu cầu lái xe phục vụ bạn suốt thời gian thuê xe hoặc yêu cầu theo ngày, cả ngày hoặc một vài ngày.
                    Chứng nhận, Bảo hiểm và Đào tạo toàn diện: Đảm bảo cho sự an tòan cá nhân và trách nhiệm của khách hàng.
                    Dịch vụ chăm sóc khách hàng 24/7, và thêm nhiều dịch vụ khác nữa….</p>
                  </blockquote>
                  <p class="author"><a href="#Jullia" class="author">Ms Lê Hồng Bích,</a>Saleswoman</p>
                </div>                                                                                                             
              </li>                                               
              <li style="position: absolute; top: 0px; z-index: 1; display: none; opacity: 0;">
                <div class="imgbox" style="background-image: url(images/Refined/p1.jpg); background-color: rgb(230, 230, 230); background-position: 50% 50%; background-repeat: no-repeat no-repeat;">
                  <img  src="images/Refined/p1.jpg" alt="Image" style="display: none;">
                </div>  
                <div class="detail">
                  <blockquote>
                    <p>Để phục vụ khách hàng tốt hơn, xedichvu.net.vn tuyển chọn những tài xế từ 25 đến 35 tuổi và có nhiều kinh nghiệm trong ngành, tiếng Anh giao cơ bản và xe xedichvu.net.vn là xe kinh doanh nên được bảo trì, bảo dưỡng thường xuyên và xe của xedichvu.net.vn 90%- 100% là xe đời mới có máy lạnh, đầu đĩa, micro, tivi đầy đủ nên bạn yên tâm khi sử dụng dịch vụ tại xedichvu.net.vn</p>
                  </blockquote>
                  <p class="author"><a href="#john" class="author">Mr Nguyễn Mạnh Dũng,</a>Engineering Director</p>
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
