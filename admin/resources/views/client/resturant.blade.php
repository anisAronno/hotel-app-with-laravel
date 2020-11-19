@extends('client.layout.app')
@section('broadcramb','Rersturant')
@section('content')


        <!-- Hero Section Start -->
        <div class="resturant-hero mt-3 pt-5">
            <div class="resturant-hero-content text-center">
                <video src="{{asset('client/images')}}/resturant-video.mp4" controls autoplay width="80%" height="500px"></video>
            </div>
        </div>
        <!-- Hero Section End -->

        <section class="resturant-about-section mt-5 text-center">
            <h1 class="mt-5"> Terrace View Restaurant</h1>
            <p class="mt-2">Come to Terrace View restaurant, eat and be happy.</p>
            <div class="resturant-wrapper row ">
                <div class="gallery col-md-6 col-sm-12 mt-5 ">
                    <div data-featherlight-gallery data-featherlight-filter="a" class="d-flex flex-wrap text-center">
                        <a href="{{asset('client/images')}}/resturant.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/resturant.jpg" width="150px" height="auto"></a>
                        <a href="{{asset('client/images')}}/Terrace View Restaurant 4.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/Terrace View Restaurant 4.jpg" width="150px" height="auto"></a>
                        <a href="{{asset('client/images')}}/Terrace View Restaurant2.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/Terrace View Restaurant2.jpg" width="150px" height="auto"></a>
                        <a href="{{asset('client/images')}}/Terrace View Restaurant3.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/Terrace View Restaurant3.jpg" width="150px" height="auto"></a>
                        <a href="{{asset('client/images')}}/Terrace View Restaurant5.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/Terrace View Restaurant5.jpg" width="150px" height="auto"></a>
                        <a href="{{asset('client/images')}}/Terrace View Restaurant11.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/Terrace View Restaurant11.jpg" width="150px" height="auto"></a>
                        <a href="{{asset('client/images')}}/Terrace View Restaurant5.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/Terrace View Restaurant5.jpg" width="150px" height="auto"></a>
                        <a href="{{asset('client/images')}}/Terrace View Restaurant8.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/Terrace View Restaurant8.jpg" width="150px" height="auto"></a>
                        <a href="{{asset('client/images')}}/Terrace View Restaurant9.jpg" data-featherlight="image"><img class="img-fluid"
                                src="{{asset('client/images')}}/Terrace View Restaurant9.jpg" width="150px" height="auto"></a>
                    </div>
                </div>
                <div class="resturant-about col-md-6 col-sm-12 mt-5">
                    <div class="resturant-content">
                        <div class="resturant-about text-center">
                            <h2 class="">About us</h2>
                            <p class="p-5">A warm welcome to Terrace View Restaurant, Lake Drive Road, House-6 (beside
                                Kabab factory), Sector-7, Azampur, Uttara, Dhaka, Bangladesh. come to Terrace View
                                Restaurant enjoy your food item from our following menu card details.</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="resturant-menu p-5">
                <h1 >Menu Card Details</h1>
                <hr class="w-25 text-center mb-5">
                <div class="row">
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">APPETIZERS</h4>

                        <ol>
                            <li>French Fry</li>
                            <li>Fish Finger</li>
                            <li>Spring Roll</li>
                            <li>Wonthon</li>
                            <li>Special Fried Wonthon</li>
                            <li>Chicken Lolly Pop</li>
                            <li>Prawn on Toast</li>
                            <li>Crispy wings</li>
                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12 ">
                        <h4 class="mb-3 menu-heading"> Soup</h4>

                        <ol>
                            <li>Clear Thai Soup(Chicken/prawn/with Mushroom</li>
                            <li>Thai Soup (Thik)</li>
                            <li>Tomyum Gong Soup</li>
                            <li>Tomyum Gong guy Soup</li>
                            <li>Thai Vegetable Soup (Mixed)</li>
                            <li> Sea Food Soup</li>
                            <li>Chicken Corn Soup</li>
                            <li>Wonthon Noodles Soup</li>
                            <li>Szechuan Soup</li>
                            <li>Onion Soup</li>
                            <li>Chicken Clear Soup</li>
                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Salad </h4>

                        <ol>
                            <li>Larbgai Salad (Thai)</li>
                            <li>Seasmi Salad</li>
                            <li>Cash nut Salad (Prawn/Chicken)</li>
                            <li>Shated Beef Salad (Thai)</li>
                            <li>Grill Chicken Salad (Mexican)</li>
                            <li>Special Tarrace View Salad</li>
                            <li>Prawn Patato Salad</li>
                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Chicken </h4>

                        <ol>
                            <li>Chicken Chilli Onion</li>
                            <li>Chicken with Garlic Sauce</li>
                            <li>Chicken with Basil Leafs</li>
                            <li>Sizzling Chicken</li>
                            <li>Chicken with Mushroom & Ginger</li>
                            <li>Chicken with Osater Sauce</li>
                            <li>Spring Chicken</li>
                            <li>Sweet & Sour Chicken</li>
                            <li>Chicken with Pineapple</li>
                            <li>Masala Chicken</li>
                            <li> Thai Fried Chicken</li>
                            <li> Chicken Cash Nut (Gravy)</li>
                            <li> Manchurian Chicken</li>
                            <li> Bangkok Safile Fried Chicken</li>
                            <li> Panthao Chicken</li>
                            <li> Chicken Chilli dry</li>
                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Beef </h4>

                        <ol>
                            <li>Beef Chilli Onion</li>
                            <li>Shated Beef</li>
                            <li>Beef with Basil Leafs</li>
                            <li>Beef with Oster Sauce</li>
                            <li>Beef with Green paper</li>
                            <li> Hot Sauce Beef</li>
                            <li>Beef Masala (Gravy)</li>
                            <li>Beef Chilli dry</li>
                            <li>Beef with Ginger Mushroom</li>

                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Rice</h4>

                        <ol>
                            <li> Egg Fried Rice</li>
                            <li> Vegetable Fried Rice</li>
                            <li> Thai Mixed Fried Rice</li>
                            <li> Chicken Fried Rice</li>
                            <li> Basil Leafs Fried Rice</li>
                            <li> Terrace View Special Rice</li>
                            <li> Szechuan Fried Rice</li>
                            <li> American Fried Rice</li>
                            <li> Naga Rice with Chicken/Beef</li>

                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Chawmin </h4>

                        <ol>
                            <li>Chicken Chowmin</li>
                            <li>Sweet Chilli Noodels (Chicken /Prwan)</li>
                            <li>Egg Noodels</li>
                            <li>Chicken with Eipamin</li>
                            <li>Vegetable Chowmin</li>
                            <li>Speggagity with prawn Garlic Sauce</li>
                            <li>American Chopsey</li>
                            <li>Gravy fry with Pathow</li>
                            <li>Thai Noodles</li>
                            <li> Chinese Chopsey</li>
                            <li> Special Terrace View chawmin</li>

                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Vegetable </h4>

                        <ol>
                            <li> Chicken Vegetable</li>
                            <li> Mixed Vegetable</li>
                            <li> Bangkok Style Vegetable</li>
                            <li> Thai Mixed Vegetable (Chicken/Beef)</li>
                            <li> Monchurian Vegetable</li>

                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Prawn </h4>

                        <ol>
                            <li> Prawn Chilli Onion</li>
                            <li> Prawn with Garlic Sauce</li>
                            <li> Prawn with Zinger Mushroom</li>
                            <li> Prawn Sizzling</li>
                            <li> Hot Sauce Prawn</li>
                            <li> Shell Prawn with Curry powder</li>
                            <li> Sweet and sour Prawn</li>

                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Desert </h4>

                        <ol>
                            <li> Faluda</li>
                            <li> Fruits Salad</li>
                            <li> Ice Cream</li>
                            <li> Milk shake</li>

                        </ol>

                    </div>
                    <div class="menu-item text-left mb-5 col-md-3 col-sm-12">
                        <h4 class="mb-3 menu-heading">Beverage </h4>

                        <ol>
                            <li> Mango Juice</li>
                            <li> Papaya Juice</li>
                            <li> Orange Juice</li>
                            <li> pineapple Juice</li>
                            <li> Lemonade</li>
                            <li> Ice Coffee</li>
                            <li> Hot Coffee</li>
                            <li> Black Coffee</li>
                            <li> Tea</li>
                            <li> Green Tea</li>
                            <li> Mineral water (1.5 lts)</li>
                            <li> Mineral water- (500ml)</li>
                            <li> Soft drinks (Per glass Pepsi/7up/dew)</li>

                        </ol>

                    </div>

                </div>

            </div>
            <div class="row">
                <div class="resturant-set-menu p-5 col-md-4">
                    <h1>Set Menu </h1>
                    <hr class="w-50 text-center mb-5">
                    <div class="row">
                        <div class="menu-item mb-5 col-md-6  col-sm-12">
                            <h4 class="mb-3 menu-heading">Plate -01
                            </h4>

                            <ol>
                                <li>Egg Fried Rice</li>
                                <li>Chicken Masala</li>
                                <li>Mixed Vegetable</li>
                                <li>Chicken Fry</li>
                            </ol>

                        </div>
                        <div class="menu-item  mb-5 col-md-6  col-sm-12 ">
                            <h4 class="mb-3 menu-heading"> Plate-02
                            </h4>

                            <ol>
                                <li>Thai Soup/Corn Soup</li>
                                <li>Wonthon 2pcs</li>
                                <li>Egg Fried Rice</li>
                                <li>Chicken Chilli Onion</li>

                                <li>Egg Fried Rice</li>
                                <li>Fried Chicken</li>
                                <li>Mixed Vegetable</li>
                            </ol>

                        </div>


                    </div>

                </div>

            <div class="resturant-party-menu p-5 col-md-8">
                <h1>Party Menu </h1>
                <hr class="w-50 text-center mb-5">
                <div class="row">
                    <div class="menu-item text-center mb-5 col-md-4 col-sm-12">
                        <h4 class="mb-3 menu-heading">Party Menu -01 </h4>

                        <ol>
                            <li>Egg Fried Rice</li>
                            <li>Chicken Masala</li>
                            <li>Mixed Vegetable</li>
                            <li>Chicken Fry</li>
                        </ol>

                    </div>
                    <div class="menu-item text-center mb-5 col-md-4 col-sm-12 ">
                        <h4 class="mb-3 menu-heading"> Party Menu -02
                        </h4>

                        <ol>
                            <li>Plain Powlao</li>
                            <li>Chicken Rost</li>
                            <li>Beef Rezala</li>
                            <li>Salad</li>
                            <li>Finni</li>
                            <li>Soft Drinks</li>
                            <li>Water</li>
                        </ol>

                    </div>
                    <div class="menu-item text-center mb-5 col-md-4 col-sm-12 ">
                        <h4 class="mb-3 menu-heading"> Party Menu -03
                        </h4>

                        <ol>
                            <li>Kassi Birany</li>
                            <li>Chicken Rost</li>
                            <li>Jali Kabab</li>
                            <li>Jorda</li>
                            <li>Borhani</li>
                            <li>Mixed Salad</li>
                            <li>Water</li>
                        </ol>

                    </div>
                </div>
            </div>
            </div>


        </section>

        
        @include('client.component.testimonial')

@endsection
