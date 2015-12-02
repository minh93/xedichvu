@extends('layouts.master')

@section('content')
<hgroup class="page-head">
  <h2>Liên hệ <span>Chúng tôi</span></h2>
  <h5>Với hơn 10 năm hoạt động trong lĩnh vực cho thuê xe du lịch đến nay chúng tôi đã khẳng định được vị thế của mình trên thị trường. Hơn 10 năm hoạt động chúng tôi luôn chú trọng đến việc chăm sóc khách hàng và dành cho khách hàng những ưu đãi tốt nhất. Đồng thời chúng tôi cũng không ngừng nâng cao chất lượng xe vì sự an toàn của khách hàng là trên hết. </h5>
</hgroup>
<div id="container" class="clearfix">
  <div id="content">
    <div class="map-container clearfix">
      <div id="map_canvas"></div>
      
      <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">
      
      function initialize() 
      {
        var geocoder  = new google.maps.Geocoder();
        var map;
        var latlng = new google.maps.LatLng(21.0165517, 105.8240407);
        var infowindow = new google.maps.InfoWindow();
        var myOptions = { 
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        
        geocoder.geocode( { 'location': latlng }, 
          function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) 
            {
              map.setCenter(results[0].geometry.location);
              var marker = new google.maps.Marker({
                map: map, 
                position: results[0].geometry.location
              });                                                                                                
            } 
            else 
            {
              alert("Geocode was not successful for the following reason: " + status);
            }
          });
      }
      
      initialize();
      
      </script>       
    </div>                                                                                              
    
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    
    <address>
      Contact Details will be appear <br>Contact Address will be appear here,<br>City, State, Country<br>
    </address>
    
    <div class="contact-form-container">
      <h3 class="smart-head">Contact Us</h3>
      <p>Fill out the form below to send us a message and we will get back to you ASAP.</p>
      <form action="#" id="contact-form" class="clearfix" method="post">
        <div class="form-cell">
          <label class="display-ie8" >Name:</label>
          <input type="text" placeholder="Name" class="name required" name="author" title="* Please provide your name"  /><span>*</span>
        </div>
        
        <div class="form-cell">
          <label class="display-ie8" >Phone:</label>
          <input type="text" placeholder="Phone No." class="phone" name="phone" />
        </div>
        
        <div class="form-cell">
          <label class="display-ie8" >Email:</label>
          <input type="text" placeholder="Email Address'" class="email required" name="email" title="* Please enter your email address" /><span>*</span>
        </div>
        
        <div class="form-cell">
          <label class="display-ie8" >Subject:</label>
          <input type="text" placeholder="Subject" class="subject" name="subject" />
        </div>                                                
        
        <div class="form-row">
          <label class="display-ie8" >Message:</label>
          <textarea name="message" class="message required" cols="30" rows="10" placeholder="Message" title="* Please enter your message"></textarea>
          
          <div class="captcha-container">
            <label>Are you human?</label>
            <img src="captcha/contact_captcha.png" alt="captcha"/>
            <input type="text" class="captcha required" name="captcha" maxlength="5" title="* Please enter the code characters displayed in image!"/>
          </div>
          
          <input type="submit" name="submit" value="Submit" class="submit readmore"/>
          
          <input type="hidden" name="action" value="send_message" />
          <input type="hidden" name="target" value="fahid@960development.com" />
          <img src="images/loading.gif" id="contact-loader" alt="Loader" />
          <p id="message-sent">&nbsp;</p>

        </div>
        
        <div class="error-container">
        </div>
      </form>
    </div>                  
  </div>
  
  <aside id="sidebar">
    <section class="widget">
      <h3 class="title">Liên hệ với chúng tôi</h3>        
      <div class="contact-widget">
        <p>
          <strong>Địa chỉ :</strong> P106 tập thể Nam Đồng - Đống Đa - Hà Nội<br>
          <strong>Điện thoại :</strong> 09.04.20.39.93<br>
        </p>
        <hr>
        <p>
          <a href="mailto:namthanhvt2005@yahoo.com.vn">namthanhvt2005@yahoo.com.vn</a><br>       
        </p>
      </div>        
    </section>    
  </aside>
  
</div><!-- end of container -->
@stop
