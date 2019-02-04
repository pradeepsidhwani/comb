<div id="sidebar" class="col-md-4 col-lg-3 sidebar-offcanvas">
  <div class="sidebar-content">
    <h1 class="sidebar-heading"> <a href="index.html">Comb</a></h1>
    <p class="sidebar-p"> Here is a little place i can play around with code at. </p>
    <p class="sidebar-p">Made by Pradeep Sidhwani. </p>
    <ul class="sidebar-menu">
        <!-- Link-->
        <li class="sidebar-item"><a href="{{URL::to('/')}}" class="sidebar-link @yield('homeActive')">Home</a></li>
        <!-- Link-->
        <li class="sidebar-item"><a href="{{URL::to('/about')}}" class="sidebar-link @yield('aboutActive')">About</a></li>
        <!-- Link-->
        <li class="sidebar-item"><a href="{{URL::to('/contact')}}" class="sidebar-link @yield('contactActive')">Get in touch</a></li>
        <li class="sidebar-item"><a href="{{URL::to('/task')}}" class="sidebar-link @yield('taskActive')">ScaleTech Task</a></li>
    </ul>
    {{-- <p class="social"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="external instagram"><i class="fa fa-instagram"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
    <div class="copyright text-center text-md-left">
      <p class="credit">&copy;2018 [Your name or company] | Template by <a style="color:blue;" href="http://bootstrapious.com/portfolio-themes" class="external">Bootstrapious.com</a>, go show them some love.</p>
      <!-- Please do not remove the backlink to us, unless you support the development at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)        -->
    </div> --}}
  </div>
</div>
