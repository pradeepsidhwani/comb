@extends('layouts.master')
@section('contactActive')
active
@endsection
@section('background')
white-background
@endsection
@section('content')

            <div class="small-navbar d-flex d-md-none">
              <button type="button" data-toggle="offcanvas" class="btn btn-outline-primary"> <i class="fa fa-align-left mr-2"></i>Menu</button>
              <h1 class="small-navbar-heading"> <a href="index.html">Creative </a></h1>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="content-column-content">
                  <h1>Get in touch</h1>
                  <p class="lead">When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                  <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                  <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                  <h4>You can find me also on:</h4>
                  <p class="social social--big"><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="gplus"><i class="fa fa-google-plus"></i></a><a href="#" title="" class="instagram"><i class="fa fa-instagram"></i></a><a href="#" title="" class="email"><i class="fa fa-envelope"></i></a></p>
                  <h4>Drop me a line, maybe?</h4>
                  <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline.</p>
                  <form id="contact-form" method="post" action="#" class="contact-form form">
                    <div class="controls">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Your firstname *</label>
                            <input type="text" name="name" id="name" required="required" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="surname">Your lastname *</label>
                            <input type="text" name="surname" id="surname" required="required" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email">Your email *</label>
                        <input type="email" name="email" id="email" required="required" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="message">Your message for me *</label>
                        <textarea rows="4" name="message" id="message" required="required" class="form-control"></textarea>
                      </div>
                      <div>
                        <input type="submit" value="Send" class="btn btn-outline-primary">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

@endsection
