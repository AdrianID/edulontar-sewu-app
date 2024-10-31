<?php

namespace App\Http\Controllers;

class LandingPage
{
  public function homePage(){
    return view('landing-page.hero-page');
  }    
  public function aboutPage(){
    return view('landing-page.about-page');
  }    
  public function tokoPage(){
    return view('landing-page.toko-page');
  }    
  public function wahanaPage(){
    return view('landing-page.wahana-page');
  }    
  public function fasilitasPage(){
    return view('landing-page.fasilitas-page');
  }    
  public function newsPage(){
    return view('landing-page.news-page');
  }    
  public function promoPage(){
    return view('landing-page.promo-page');
  }    
  public function contactPage(){
    return view('landing-page.contact-page');
  }    
}
