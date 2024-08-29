@extends("format.master")
@section("title")
Interesting Places
@endsection
@section('breadCamp')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route("home")}}" class="owncol">Home</a></li>
        <li class="breadcrumb-item">Places</li>
    </ol>
@endsection
@section("content")
         <div class="w-100" style="height: 200px;"></div>
         <div id="about" class="">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2>Famous Pagodas</h2>
                             <span>
                                 Bago City, Myanmar, is known for its rich religious heritage, with many pagodas and temples that are significant both spiritually and historically.
                        </span>
                         </div>
                         <div class="owl-carousel owl-theme">
                             <div class="item">
                                 <img class="img-fluid" src="{{asset("data/images/shwe1.jpg")}}" alt="#" />
                                 <h3>Shwemawdaw Pagoda</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",1)}}" class="">Read More</a>
                                 </p>
                             </div>
                             <div class="item">
                                 <img class="img-fluid" src="{{asset("data/images/shwe2.jpg")}}" alt="#" />
                                 <h3>Kyaik Pun Pagoda</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",2)}}" class="">Read More</a>
                                 </p>
                             </div>
                             <div class="item">
                                 <img class="img-fluid" src="{{asset("data/images/pagodas/Shwe Thar lyaung9.jfif")}}" alt="#" />
                                 <h3>Shwethalyaung Buddha</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",3)}}" class="">Read More</a>
                                 </p>
                             </div>
                             <div class="item">
                                 <img class="img-fluid" src="{{asset("data/images/shwe4.jpg")}}" alt="#" />
                                 <h3>Mahazedi Pagoda</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",4)}}" class="">Read More</a>
                                 </p>
                             </div>
                             <div class="item">
                                 <img class="img-fluid" src="{{asset("data/images/pagodas/Hinthar Gone4.jfif")}}" alt="#" />
                                 <h3>Hin Thar Gon Pagoda</h3>
                                 <p>
                                     <a href="{{route("pagodadetail",5)}}" class="">Read More</a>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2>Kanbawzathadi Palace</h2>
                             <span class="pt-2">
                               Kanbawzathadi Palace is a historic site in Bago, Myanmar. It was originally built in the 16th century by King Bayinnaung, a prominent monarch of the Hanthawaddy Kingdom. The palace was known for its grandeur and intricate architectural style, showcasing the art and culture of that era. The palace complex includes several important buildings and features, such as the throne hall and living quarters, all designed with detailed wooden carvings and traditional Burmese craftsmanship. The site offers a glimpse into the opulent lifestyle of the royal court and the historical significance of the Hanthawaddy Kingdom.
                 Today, the Kanbawzathadi Palace is a popular tourist attraction and a significant cultural heritage site, with efforts ongoing to preserve and restore its historical elements.<br/>
                 For visiting Kanbawzathadi Palace , fees : 1 person - 2000 ks
               </span>
                         </div>
                         <div class="owl-carousel owl-theme">
                             <div class="item">
                                 <img class="img-fluid w-100 rounded top" src="{{asset("data/images/palace/k18.jpg")}}" alt="#" />
                                 <h3>Royal Golden Palace</h3>
                            <span>
                            The Throne Hall, a central feature of the Royal Golden Palace, was where the king held court and conducted important state affairs. It was designed to impress and convey the king's power and authority.
                            </span>
                              </div>
                             <div class="item">
                                 <img class="img-fluid w-100 rounded top" src="{{asset("data/images/palace/k21.jpg")}}" alt="#" />
                                 <h3>Royal Apartment Of Teak</h3>
                            <span>
                            The interior was lavishly decorated with fine woodwork and traditional Burmese designs. The use of teak wood contributed to the grandeur and elegance of the living spaces.
                            </span>
                                </div>
                             <div class="item">
                                 <img class="img-fluid w-100 rounded top" src="{{asset("data/images/palace/k16.jpg")}}" alt="#" />
                                 <h3>Bee Throne Hall</h3>
                            <span>
                            The Bee Throne Hall, known for its unique design, was part of the royal complex during the reign of King Bayinnaung in the 16th century. It was used for royal ceremonies and important state functions.
                            </span>
                                </div>
                             <div class="item">
                                 <img class="img-fluid w-100 rounded top" src="{{asset("data/images/palace/k8.jpg")}}" alt="#" />
                                 <h3>Royal Apartment of Su Pan Kalyar</h3>
                            <span>
                            Su Pan Kalayar was one of the queens of King Bayinnaung, who reigned during the 16th century. <br/>King Bayinnaung is one of Myanmar's most celebrated monarchs, known for expanding the Hanthawaddy Kingdom to its greatest territorial extent.

                            </span>
                                </div>
                             <div class="item">
                                 <img class="img-fluid w-100 rounded top" src="{{asset("data/images/palace/k2.jpg")}}" alt="#" />
                                 <h3>Royal Apartment of Khin Khin Gyi</h3>
                            <span>
                            Khin Khin Gyi was a prominent queen during the reign of King Bayinnaung of the Hanthawaddy Kingdom in the 16th century. King Bayinnaung is known for his military conquests and consolidation of the kingdom, making it one of the most powerful states in Southeast Asia at the time.

                            </span>
                                </div>

                         </div>
                         <
                         <a href="{{route("palace")}}" class=" d-flex justify-content-end">Read More</a>
                     </div>

                 </div>
                 <div class="row mt-3">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2 style="color:#6b4701;">Restaurants</h2>
                             <div class="row">
                                 @foreach($restaurants as $r)
                                 <div class="col-md-4 p-0">
                                     <div class="card" style="width: 90%; height:85%;">
                                         <img src="{{asset("images/".$r->img)}}" class="img-fluid w-100" alt="...">
                                         <div class="card-body">
                                             <h5 class="card-title">{{$r->name}}</h5>
                                             <p class="card-text">{{$r->dec}}</p>
                                             <a href="{{$r->loc}}" class="d-flex justify-content-end">Location</a>
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                             </div>


                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="titlepage">
                             <h2>Arts and Crafts</h2>
                             <span class="pt-2">Thiriohathar Market in Bago, Myanmar, is a lively market known for its variety of local products. When it comes to arts and crafts, some popular items  can buy at this market.</span>
                         </div>
                         <div class="owl-carousel owl-theme">
                             <div class="item">
                                 <img class="img-fluid w-100 h-80" src="{{asset("data/images/art/ac3 - Copy.jpg")}}" alt="#" />
                                 <h4>
                                  Price - 25000 ks
                                 </h4>
                             </div>
                             <div class="item">
                                 <img class="img-fluid w-100 h-80" src="{{asset("data/images/art/ac4 - Copy.jpg")}}" alt="#" />
                                 <h4>
                                 Price - 10000 ks
                                 </h4>
                             </div>
                             <div class="item">
                                 <img class="img-fluid w-100 h-80" src="{{asset("data/images/art/ac35.jpg")}}" alt="#" />
                                 <h4>
                                 Price - 23000 ks <br>
                                 </h4>
                             </div>
                             <div class="item">
                                 <img class="img-fluid w-100 h-80" src="{{asset("data/images/art/ac23.jpg")}}" alt="#" />
                                 <h4>
                                  Price - 130000 ks
                                 </h4>
                             </div>
                            </div>

                     </div>
                 </div>
             </div>

         </div>


@endsection
@section("customscript")
    $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    margin: 10,
    nav: true,
    loop: true,
    responsive: {
    0: {
    items: 1
    },
    600: {
    items: 2
    },
    1000: {
    items: 3
    }
    }
    })
    })
@endsection
