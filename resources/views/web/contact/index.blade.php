@extends('web.layouts.master')

@section('web-content')


    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{ asset('assets') }}/images/hero_1.jpg');">
    <div class="container">
        <div class="row align-items-center text-center border">
            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <h1>Get In Touch</h1>
                <p class="text-white text-center">
                    <a href="index.html">Home</a>
                    <span class="mx-2">/</span>
                    <span>Contact Us</span>
                </p>
            </div>
        </div>
    </div>
</div>



<div class="site-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 mb-1 text-center">
                <h1 class="section-subtitle">About Us</h1>
                <h3>At a Glance</h3>
            </div>
        </div>

        <div class="row">
            <pre>
                Company Name  :  West Apparels Ltd.
                Address  :  C-177, Enayetnagar, Lucky Bazar, Siddirganj,   Narayanganj-1400, Bangladesh
                Corporate Office  : Flat #A4, Asset Montevista, House #16, Sector #12, Sonargoan Janapath Road, Uttara, Dhaka, Bangladesh.
                Business Type  : Apparel Manufacturer & Exporter
                Legal Status  : Private Limited Company
                Nature of Production : 100% Export Oriented Knit Composite
                Export percentage  : 100%
                Land Area  : 52 Decimal
                Garments Production Floor :
                Building-01 :   I) Ground floor 7,500 sqft with 1240 knitting M/C
                                II) 1st Floor 7,500 sqft (Finishing & Inspection Room)
                                III) 2nd Floor 7,500 sqft (Sewing) IV) 3rd Floor 7,500 sqft (Sewing)
                                V) 4th Floor 7,500 sqft (Management Office, Dining & Canteen)
                                VI)Generator Room 250sqft
                                VII) Boiler Room 250 sqft.
                Building-02 (Shade) :  Total area 4,500 sqft (Cutting, Sample & Cad)
                Bonded Wearhouse :  Total area 7,000 sqft.
                Building-03 (Shade) :   I) Sub-station Room 1,000 sqft
                                        II) Madical, Daycare & Security : 2,000 sqft.
                Year of establishment : 2016
                Year of commercial production : 2016
                No. of production line  : 15
                Minimum age of worker : 18 years
                Minimum wages  : BDT 5,300
                Working hours  : 8 hours a day
                Membership  : BKMEA (1493)
                Trade Bank  : Premier Bank Ltd
                A/C no-12011100003997
                Swift Code-PRMRBDDHNRG
                Narayangonj Branch, Aljoynal Plaza, 56  S. M. Maleh Road, Tanbazar, Narayangonj
                Country of Export : 90% of total export to Europe & 10% of total export to USA, Netherland & Australia.
                Terms of Payment : Payment by L/C at sight & TT.

            </pre>
        </div>





        <div class="row">
            <div class="col-md-6 form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" class="form-control form-control-lg">
            </div>
            <div class="col-md-6 form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control form-control-lg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="eaddress">Email Address</label>
                <input type="text" id="eaddress" class="form-control form-control-lg">
            </div>
            <div class="col-md-6 form-group">
                <label for="tel">Tel. Number</label>
                <input type="text" id="tel" class="form-control form-control-lg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input type="submit" value="Send Message" class="btn btn-primary rounded-0 px-3 px-5">
            </div>
        </div>
    </div>
</div>

<div class="section-bg style-1" style="background-image: url('{{ asset('assets') }}/images/hero_1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-mortarboard"></span>
                <h3>Our Philosphy</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-school-material"></span>
                <h3>Academics Principle</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                    Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-library"></span>
                <h3>Key of Success</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                    Dolore, amet reprehenderit.</p>
            </div>
        </div>
    </div>
</div>

@endsection
