@extends('layout')
@section('contenido')

<!-- header section -->
<section role="banner" id="home">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.html"><span class="icon icon-genius"></span> BestPlus</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#nosotros">Nosotros</a></li>
          <li><a href="#asesoria">Asesoría</a></li>
          <li><a href="#services">Selección de Personal</a></li>
          <li><a href="#package">Capacitación</a></li>
          <li><a href="#gallery">Convenio Marco</a></li>
          <li><a href="#teams">Galería</a></li>
          <li><a href="#contact">Contactos</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header> 
</section>
<!-- header section --> 

    <section id="main-slider">
        <div class="owl-carousel">
           @foreach ($sliders as $sl )
            <div class="item" style="background-image: url(images/slider/{{$sl->foto}});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="carousel-content" style="background-color: #ffffff;
                                border-radius: 7px; opacity: 0.8; filter: alpha(opacity=60);">
                                 
                                     <h2 style="margin-left:1%;">{{$sl->titulo}}</h2> 
                                
                                    
                                    <p style="margin-left:3%;">{{$sl->texto}}</p>


                                    <!--<a class="btn btn-primary btn-lg" href="#package">Ver Más</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              @endforeach

            <!--/.item-->
        </div><!--/.owl-carousel-->
    </section>
   
 
    <!-- Nosotros section -->
    <section id="nosotros" class="section intro">
      <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h3>Nosotros</h3>

          @foreach ($nosotros as $nos )        
          <p>{{$nos->texto}}</p><br/>
         @endforeach

        </div>
      </div>
    </section>
  <hr/>

<!-- asesoria section -->
<section id="asesoria" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Asesorias</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  <div class="row">


@foreach ($asesorias as $asec)
      <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/asesorias/{{$asec->foto}}" width="350" style="height:262px" class="img-responsive">
      <div class="caption">
        <h3>{{$asec->titulo}}</h3>
        <p>{{$asec->texto}}</p>
        
      </div>
    </div>
  </div>
@endforeach


  </div>
</div>
</section>
<!-- intro section --> 
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="section-header">
                <h2 class="wow fadeInDown animated">Our Services</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-strategy"></span>
        <div class="services-content">
          <h5>User Research</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>Ideas</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-tools"></span>
        <div class="services-content">
          <h5>Design</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-genius"></span>
        <div class="services-content">
          <h5>Development</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
        <div class="services-content">
          <h5>Quality</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-trophy"></span>
        <div class="services-content">
          <h5>Product</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- services section --> 
<!-- package section -->
<section id="package" class="packageList">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Package</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">  
            <div class="col-md-6">
            
            	<div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
                	<h5>Consectetur</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>38</strong>
                </div><!-- end package -->
                
                <div class="package wow fadeInLeft animated" data-wow-offset="200" data-wow-delay="300m">
                	<h5>Lorem ipsum</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>75</strong>
                </div><!-- end package -->
                
                <div class="package no-border wow fadeInLeft animated" data-wow-offset="150" data-wow-delay="400m" >
                	<h5>Eliteger Gravida</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>46</strong>
                </div><!-- end package -->
                
            </div><!-- end col-md-6 -->
            <div class="col-md-6">
            
            	<div class="package wow fadeInRight animated" data-wow-offset="250" data-wow-delay="500m" >
                	<h5>Lorem Ipsum</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>15</strong>
                </div><!-- end package -->
                
                <div class="package wow fadeInRight animated" data-wow-offset="200" data-wow-delay="600m">
                	<h5>Pellentesque</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>84</strong>
                </div><!-- end package -->
                
                <div class="package no-border wow fadeInRight animated" data-wow-offset="150" data-wow-delay="700m">
                	<h5>Velit quis</h5>
                    <ul class="list-default">
                    	<li>Lorem ipsum dolor sit amet, consectetur</li>
                    	<li>adipiscing eliteger gravida velit quis dolo</li>
                    	<li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>95</strong>
                </div><!-- end package -->
                
            </div><!-- end col-md-6 -->
        </div><!-- end row -->    
  </div>
</section>
<!-- package section --> 

<!-- Galeria -->
<section id="gallery" class="gallery section">
  <div class="container">
    <div class="section-header">
                <h2 class="wow fadeInDown animated">Galería</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row no-gutter">
        @foreach ($fotos as $foto )        

      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/01.jpg" class="work-box"> <img src="images/portfolio/{{$foto->foto}}" width="293" style="height:195px" alt="">
        <div class="overlay">
          <div class="overlay-caption">
             <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>      
        @endforeach

    </div>
  </div>
</section>
<!-- gallery section --> 
<!-- our team section -->
<section id="teams" class="section teams">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Our Team</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Jonh Dow</h4>
            <h5 class="role">Founder</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Markus Linn</h4>
            <h5 class="role">Creative</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-3.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Chris Jemes</h4>
            <h5 class="role">Technical</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Vintes Mars</h4>
            <h5 class="role">Marketing</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our team section --> 
<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Chris Mentsl</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Praesent eget risus vitae massa Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Kristean velnly</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Markus Denny</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Vitae massa semper aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>John Doe</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section --> 

<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Contact Us</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">       
        <div id="message"></div>
        <form method="post" action="https://webthemez.com/demo/lancer-business-latest-bootstrap-template-free-download/php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 
<!-- Footer section -->
<footer class="footer">
<div class="container-fluid">
<div id="map-row" class="row">
    <div class="col-xs-12">    
    	<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=15+Springfield+Way,+Hythe,+CT21+5SH&amp;aq=t&amp;sll=52.8382,-2.327815&amp;sspn=8.047465,13.666992&amp;ie=UTF8&amp;hq=&amp;hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.077429,1.121722&amp;output=embed"></iframe> 
      
          <div id="map-overlay" class="col-xs-5 col-xs-offset-6" style="">
    		<h2 style="margin-top:0;color:#fff;">Contact us</h2>
    		<address style="color:#fff;">
    			<strong>Company name</strong><br>
    			1234 Street Dr.<br>
    			Vancouver, BC<br>
    			Canada<br>
    			V6G 1G9<br>
    			<abbr title="Phone">Tel:</abbr> (604) 555-4321
    		</address>
			  © 2018 Company Name. Template by <a target="_blank" href="http://webthemez.com/" title="Bootstrap Themes and HTML Templates">WebThemez.com</a>
    	</div>
    </div>
	 </div>
</div>
</footer>
    @stop
