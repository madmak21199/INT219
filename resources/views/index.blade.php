<?php
?>
<!DOCTYPE html>
<html>
@extends('head')


<body>
        
         @include('header')
    <br><br><br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:1px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img class="d-block w-100" src="img/twitternews.png" alt="First slide" style="height:500px;width:400px;"></a>
      
      <div class="carousel-caption d-none d-md-block">
         <h3>Twitter Defends Its 'Inclusion and Diversity' Stance Amid Cultural Bias Allegations</h3><br>
        <a href="https://www.news18.com/news/tech/twitter-defends-stance-with-inclusion-and-diversity-amid-cultural-bias-allegations-2377927.html"> <btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-40" src="img/gaming.png" alt="Second slide" style="height:450px;">
      <div class="carousel-caption d-none d-md-block">
         <h3>Anyone in China Under 18 Years of Age Cannot Play Online Games Between 10pm and 8am</h3><br>
         <a href="https://www.news18.com/news/tech/anyone-in-china-under-18-years-of-age-cannot-play-online-games-between-10pm-and-8am-2377343.html"><btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
      </div>
    </div>
    <div class="carousel-item">
     <img class="d-block w-100 h-40" src="img/shaktikanta-das.jpg" alt="Third slide" style="height:450px;">
      <div class="carousel-caption d-none d-md-block">
         <h3>Closely Monitoring Situation at Scam-hit PMC Bank, Forensic Audit Underway: RBI Governor</h3><br>
         <a href="https://www.news18.com/news/business/closely-monitoring-situation-at-scam-hit-pmc-bank-forensic-audit-underway-rbi-governor-2377919.html"><btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--/.Carousel Wrapper-->
<div class="container-fluid" style="padding-top:40px;">
<div class="row">
  <div class="col-sm-4">
   <h4 style="color:red;font-weight:bold;text-decoration:underline;">Trending News:</h4>
  <img name="slide" style="width:100%">
  <h1 style="font-size:15px;"><a href="https://www.news18.com/news/india/tata-group-not-ruling-out-bid-for-air-india-chairman-n-chandrasekaran-indicates-2373343.html">Tata Group Not Ruling Out Bid for Air India, Chairman N Chandrasekaran Indicates</a></h1>
  </div>
  <div class="col-sm-4">
  <h4 style="color:red;font-weight:bold;text-decoration:underline;">Cricket News:</h4>
  <a href="https://www.news18.com/cricketnext/news/india-vs-bangladesh-mistakes-in-the-field-main-cause-of-defeat-rohit-sharma-2372473.html"><img src="img/Indian-cricket-team1.jpg" style="width:100%"></a>
  <a href="https://www.news18.com/cricketnext/news/india-vs-bangladesh-mistakes-in-the-field-main-cause-of-defeat-rohit-sharma-2372473.html">India vs Bangladesh | Mistakes in the Field Main Cause of Defeat: Rohit Sharma</a>
  </div>
  <div class="col-sm-4">
  <h4 style="color:red;font-weight:bold;text-decoration:underline;">Headlines News:</h4>
    <h1 style="font-size:15px;"> <a href="https://www.news18.com/news/india/delhi-govt-advises-to-stay-indoors-avoid-driving-as-city-air-quality-goes-off-the-charts-2372373.html" style="color:blue;"> Delhi Govt Advises to 'Stay Indoors, Avoid Driving' as City Air Quality Goes Off the Charts</a> </h1><br>
	<h1 style="font-size:15px;"><a href="https://www.news18.com/news/india/each-breath-we-take-is-killing-us-environmentalists-write-to-pm-modi-seeking-intervention-2372399.html" style="color:red">Each Breath is Killing Us': Environmentalists Write to PM Modi Seeking Intervention</a></h1><br>
    <h1 style="font-size:15px;"><a href="https://www.news18.com/news/india/air-purifier-deployed-at-taj-mahal-to-check-damage-from-worsening-air-quality-in-agra-2372353.html" style="color:black">Air Purifier Deployed at Taj Mahal to Check Damage From Worsening Air Quality in Agra</a></h1><br>
    <h1 style="font-size:15px;"><a href="https://www.news18.com/news/tech/still-thinking-of-buying-an-air-purifier-for-your-bedroom-to-beat-999-aqi-in-delhi-2372021.html" style="color:orange">Still Thinking of Buying an Air Purifier For Your Bedroom to Beat 999 AQI in Delhi?</a></h1>
  </div>
</div>
</div>
    <!--slide show-->
	
    
   <section class="gallery-block cards-gallery" style="padding-top:100px;">
    <div class="container-fluid">
      <div class="heading">
        <h2 style="color: red;text-align: center;" >Breaking News</h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 transform-on-hover">
            <img src="img/uganda-759.jpg" class="card-img-top">
            <div class="card-body">
 
              <p class="text-muted card-text">Uganda says no plan to bring bill punishing .</p><br>
             <a href="https://indianexpress.com/article/world/uganda-says-no-plan-to-bring-bill-punishing-homosexuals-6102737/"> <button type="button" class="btn btn-primary">Read</button></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 transform-on-hover">
            <img src="img/BREATH-TESTS-TAKEAWAYS-1-759.jpg" class="card-img-top">
            <div class="card-body">
            
              <p class="text-muted card-text">These machines can put you in jail. Don’t trust them</p><br>
              <a href="https://indianexpress.com/article/world/these-machines-can-put-you-in-jail-dont-trust-them-6103118/"> <button type="button" class="btn btn-primary">Read</button></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 transform-on-hover">
            <img src="img/delhi-lawyer-police.jpg" class="card-img-top">
            <div class="card-body">
            
              <p class="text-muted card-text">Watch: Two days after Tis Hazari violence, cop thrashed by protesting lawyer outside Delhi court</p><br>
               <a href="https://indianexpress.com/article/cities/delhi/two-days-after-tis-hazari-violence-cop-thrashed-by-protesting-lawyer-outside-delhi-court-6102678/"><button type="button" class="btn btn-primary">Read</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
   
   
   
   <div class="container-fluid mt-5">
   
   <h2 style="color: red;text-align: center; padding-top:40px; padding-bottom:40px;">Technology News</h2>
	<div class="row">
		<div class="col-md-6">
			<div class="outer-div">
				<div class="inner-div1">
					<a htref="https://indianexpress.com/article/technology/tech-news-technology/vivo-has-done-well-in-india-now-it-wants-to-become-no-1-smartphone-vendor-6108552/"><btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
				</div>
				
			</div>
			
		</div>
		
		<div class="col-md-6">
			<div class="outer-div">
				<div class="inner-div2">
						<a htref="https://indianexpress.com/article/technology/mobile-tabs/vivo-y19-with-mediatek-helio-p65-processor-launched-price-specifications-6099681/"><btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
				</div>
			</div>
		</div>
	
	</div>
</div>
   
   
   
    <br><br><br>  
    <div class="col-sm-12">
        
         @include('footer')
        
    </div>
</body>
</html>




