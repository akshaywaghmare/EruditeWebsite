<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $page_title="Erudite Softwares";
        return view('welcome',compact('page_title'));
    }

    public function About(){
        return view('company.about');
    }

    public function WhyUs(){
        return view('company.why-us');
    }

    public function Careers(){
        return view('company.careers');
    }

    public function Contact(){
        return view('company.contact');
    }

    public function ProductDevelopment(){
         return view('services.product-development');
    }
     public function WebsiteDevelopment(){
         return view('services.website-development');
    }
      public function MobileDevelopment(){
         return view('services.mobile-development');
    }
      public function CustomSoftwareDevelopment(){
         return view('services.custom-software-development');
    }
      public function UIUXDesign(){
         return view('services.ui-ux-design');
    }
    public function DigitalStrategy(){
         return view('services.digital-strategy');
    }

    public function HealthCare(){
         return view('industries.health-care');
    }

    public function LogisticsAndTransportation(){
         return view('industries.logistics-transport');
    }

    public function RealEstate(){
         return view('industries.real-estate');
    }
    public function Retail(){
         return view('industries.retail');
    }




}
