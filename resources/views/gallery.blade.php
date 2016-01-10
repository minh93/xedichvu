@extends('layouts.master')

@section('content')
<hgroup class="page-head">    
  <h2><span>Hình ảnh</span>Dịch vụ</h2>
  <h5>Với hơn 10 năm hoạt động trong lĩnh vực cho thuê xe du lịch đến nay chúng tôi đã khẳng định được vị thế của mình trên thị trường. Hơn 10 năm hoạt động chúng tôi luôn chú trọng đến việc chăm sóc khách hàng và dành cho khách hàng những ưu đãi tốt nhất.<br> Đồng thời chúng tôi cũng không ngừng nâng cao chất lượng xe vì sự an toàn của khách hàng là trên hết.</h5>
</hgroup>
<div id="container" class="clearfix">
  <div id="content" class="full-width">               
    <ul id="filter-by" class="clearfix">
      <li><a href="#" data-filter="gallery-item" class="active">All</a></li>
      <li><a href="#" data-filter="care" title="View all Gallery Items filed under Care">Toyota Innova</a></li>
      <li><a href="#" data-filter="donations" title="View all Gallery Items filed under Donations" >Toyota Fortuner</a></li>
      <li><a href="#" data-filter="pharmacy" title="View all Gallery Items filed under Pharmacy">Ford Transits</a></li>      
      <li><a href="#" data-filter="treatment" title="View all Gallery Items filed under Treatment">Force Everest</a></li>
    </ul>

    <div id="gallery-container" class="gallery-4-columns isotope clearfix">
      <div class="type-gallery-item hentry gallery-item isotope-item care">
        <a class="pretty-photo" href="images/Refined/gallery/g1.jpg"><img src="images/Refined/gallery/small/g1.jpg" alt="Staff"></a>
        <h5 class="item-title">Toyota Innova</h5>
      </div>            
      <div class="type-gallery-item hentry gallery-item isotope-item care">
        <a class="pretty-photo" href="images/Refined/gallery/g2.jpg"><img src="images/Refined/gallery/small/g2.jpg" alt="Clinical Experties"></a>
        <h5 class="item-title">Toyota Innova</h5>
      </div>            
      <div class="type-gallery-item hentry gallery-item isotope-item care">
        <a class="pretty-photo" href="images/Refined/gallery/g3.jpg"><img src="images/Refined/gallery/small/g3.jpg" alt="Fitness Guidance"></a>
        <h5 class="item-title">Toyota Innova</h5>        
      </div>                    
      <div class="type-gallery-item hentry gallery-item isotope-item donations">
        <a class="pretty-photo" href="images/Refined/gallery/g4.jpg"><img src="images/Refined/gallery/small/g4.jpg" alt="Free Counseling"></a>
        <h5 class="item-title">Toyota Fortuner</h5>
      </div>
      <div class="type-gallery-item hentry gallery-item isotope-item donations">
        <a class="pretty-photo" href="images/Refined/gallery/g5.jpg"><img src="images/Refined/gallery/small/g5.jpg" alt="Free Counseling"></a>
        <h5 class="item-title">Toyota Fortuner</h5>
      </div>           
      <div class="type-gallery-item hentry gallery-item isotope-item donations">
        <a class="pretty-photo" href="images/Refined/gallery/g6.jpg"><img src="images/Refined/gallery/small/g6.jpg" alt="Blood Donation"></a>
        <h5 class="item-title">Toyota Fortuner</h5>
      </div>
      <div class="type-gallery-item hentry gallery-item isotope-item pharmacy">
        <a class="pretty-photo" href="images/Refined/gallery/g7.jpg"><img src="images/Refined/gallery/small/g7.jpg" alt="Pharmacy Reception"></a>
        <h5 class="item-title">Ford Transits</h5>
      </div>
      <div class="type-gallery-item hentry gallery-item isotope-item treatment">
        <a class="pretty-photo" href="images/Refined/gallery/g8.jpg"><img src="images/Refined/gallery/small/g8.jpg" alt="Pharmacy Reception"></a>
        <h5 class="item-title">Force Everest</h5>
      </div>
      <div class="type-gallery-item hentry gallery-item isotope-item treatment">
        <a class="pretty-photo" href="images/Refined/gallery/g9.jpg"><img src="images/Refined/gallery/small/g9.jpg" alt="Pharmacy Reception"></a>
        <h5 class="item-title">Force Everest</h5>
      </div>

    </div><!-- end of gallery container --> 

  </div><!-- end of content -->
</div><!-- end of container -->
@stop
