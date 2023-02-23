<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')

    <link rel="icon" type="image/png" href="{{ asset('images/nandini-icon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    @stack('css')

    @php
    $header = App\Models\CssScript::where('section', 'header')->first();
    $body = App\Models\CssScript::where('section', 'body')->first();
    $footer = App\Models\CssScript::where('section', 'footer')->first();
    @endphp

    {!! $header->script ?? '' !!}

</head>

<body>
    {!! $body->script ?? '' !!}

    <!-- Header -->
    <header>
        <nav class="grow-menu navbar fixed-top navbar-expand navbar-dark bg-dark bg-opacity-50">
            <div class="container-fluid justify-content-center text-uppercase">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link text-white px-2 px-xl-3"><i class="fa fa-home"></i></a></li>
                    <li class="nav-item"><a href="{{ route('suites-villas.index') }}" class="nav-link text-white px-2 px-xl-3">Villas</a></li>
                    <li class="nav-item"><a href="https://www.hanginggardensofbali.com/hidden-palace" class="nav-link text-white px-2 px-xl-3">Hidden Palace</a></li>
                    <li class="nav-item"><a href="{{ route('experiences.index') }}" class="nav-link text-white px-2 px-xl-3">Experiences</a></li>
                    <li class="nav-item"><a href="{{ route('spa.index') }}" class="nav-link text-white px-2 px-xl-3">Spa</a></li>

                </ul>
                <a href="{{ route('index') }}" class="navbar-brand mx-2">
                    <img src="{{ asset('images/green-logo.png') }}" class="navlogo fade-in">
                </a>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a href="{{ route('dining.index') }}" class="nav-link text-white px-2 px-xl-3">Restaurant</a></li>
                    <li class="nav-item"><a href="{{ route('honeymoon.index') }}" class="nav-link text-white px-2 px-xl-3">Honeymoon</a></li>
                    <li class="nav-item"><a href="{{ route('weddings.index') }}" class="nav-link text-white px-2 px-xl-3">Weddings</a></li>
                    <li class="nav-item"><a href="{{ route('gallery.index') }}" class="nav-link text-white px-2 px-xl-3">Gallery</a></li>
                    {{-- <li class="nav-item"><a href="{{ route('index') }}/contact-us" class="nav-link text-white px-2 px-xl-3">Contact Us</a></li> --}}
                </ul>
            </div>
        </nav>

        <div class="booking-wrapper">
            <div class="booking-inner">
                <div class="booking-form-wrapper">
                    <div class="booking-form-wrapper-inner">
                        <form class="d-flex h-100" action="https://book-directonline.com/properties/nandinibalidirect" method="get" target="_blank">
                            <input type="hidden" name="propertyId" value="9897">
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Arrival</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="fromDate" value="16-01-2023" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkInDate" class="datepicker-input" value="2023-01-16">
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Departure</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="toDate" value="17-01-2023" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkOutDate" class="datepicker-input" value="2023-01-17">
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Guests</label>
                                <select class="form-control booking-field-input h-100 w-100">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="more...">more...</option>
                                </select>
                                <i class="fa fa-chevron-down booking-field-icon"></i>
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Promo code</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100" name="ccode" placeholder="...">
                                <i class="fa fa-tag booking-field-icon"></i>
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <button type="submit" class="btn btn-primary text-uppercase rounded-0 fw-bold h-100 w-100">BOOK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="special-offers-link">
            <div>
                <a href="{{ route('offers.index') }}" class="btn btn-primary rounded-pill text-uppercase px-3 w-100">
                    <small class="fw-bold"><i class="fa fa-gift me-2"></i> Special Offers</small>
                </a>
                <div class="mt-2 offers-link-hover opacity-0">
                    <div class="px-3 py-2 bg-dark bg-opacity-75 rounded-3">
                        <p class="text-xxl-start text-center text-white mb-0 small">Find out exclusive offers<br>in our official website</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer>
        <div class="container my-4">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="border-top border-secondary py-4">
                        <h3 class="d-flex justify-content-between">Address <i class="fa fa-map-marker"></i></h3>
                    </div>
                    <p class="fs-6">Br, Jl. Susut, Buahan,<br>Payangan,<br>Kabupaten Gianyar - Bali<br>+62 812-3687-1170</p>
                </div>
                <div class="col-12 col-md-3">
                    <div class="border-top border-secondary py-4">
                        <h3 class="d-flex justify-content-between">About <i class="fa fa-compass"></i></h3>
                    </div>
                    <nav class="nav flex-column fs-6">
                        <a href="{{ route('story.index') }}" class="nav-link p-0 link-dark text-decoration-none">Story</a>
                        <a href="{{ route('awards.index') }}" class="nav-link p-0 link-dark text-decoration-none">Awards</a>
                        <a href="{{ route('videos.index') }}" class="nav-link p-0 link-dark text-decoration-none">Videos</a>
                        <a href="{{ route('day-guest.index') }}" class="nav-link p-0 link-dark text-decoration-none">Day Guest</a>
                    </nav>
                </div>
                <div class="col-12 col-md-3">
                    <div class="border-top border-secondary py-4">
                        <h3 class="d-flex justify-content-between">Others <i class="fa fa-snowflake-o"></i></h3>
                    </div>
                    <nav class="nav flex-column fs-6">
                        <a href="https://www.dropbox.com/sh/xb63hbgvy5t4ino/AADI-7OnGudh1ND5M32zli0Da?dl=0" class="nav-link p-0 link-dark text-decoration-none" target="_blank">Media Hub</a>
                        <a href="{{ route('blog.index') }}" class="nav-link p-0 link-dark text-decoration-none">Blog</a>
                        <a href="{{ route('careers.index') }}" class="nav-link p-0 link-dark text-decoration-none">Careers</a>
                        <a href="{{ route('virtual-tour.index') }}" class="nav-link p-0 link-dark text-decoration-none">360 Virtual Tour</a>
                    </nav>
                </div>
                <div class="col-12 col-md-3">
                    <div class="border-top border-secondary py-4">
                        <h3 class="d-flex justify-content-between">Follow Us <i class="fa fa-share-alt"></i></h3>
                    </div>
                    <nav class="nav flex-row">
                        <a href="https://www.instagram.com/nandinijungleresort/" class="nav-link link-share link-share-instagram rounded-circle m-0 border-1 me-2" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.facebook.com/nandinijungleresort/" class="nav-link link-share link-share-facebook rounded-circle m-0 border-1 me-2" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.tripadvisor.com/Hotel_Review-g608492-d603743-Reviews-Nandini_Bali_Jungle_Resort_and_Spa-Payangan_Gianyar_Regency_Bali.html" class="nav-link link-share link-share-tripadvisor rounded-circle m-0 border-1 me-2" target="_blank"><i class="fa fa-tripadvisor"></i></a>
                        <a href="https://www.youtube.com/channel/UCC5xnT9iqddtYZYwLGMMZiA" class="nav-link link-share link-share-youtube rounded-circle m-0 border-1 me-2" target="_blank"><i class="fa fa-youtube-play"></i></a>
                    </nav>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <a target="_blank" href="https://www.luxurialifestyle.com/discovering-balis-best-luxury-resorts/"><img src="{{ asset('images/nandini-award.png') }}" class="w-100"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-md-5 border-bottom border-secondary"></div>
            </div>
        </div>

        <div class="bg-primary pt-4 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <h2 class="text-light">Stay in touch</h2>
                    </div>
                    <div class="col-12 col-md-7 mc_embed_signup">
                        <form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self" method="post" action="https://nandinibali.us8.list-manage.com/subscribe/post?u=8a30b471b9cb8894535a8bffd&amp;id=06fc448b22&amp;f_id=00a478e0f0">
                            <div class="row mc_embed_signup_scroll">
                                <div class="col-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="mce-FNAME" class="form-label text-uppercase fw-bold mb-0 text-light form-label-footer">First name</label>
                                        <input type="text" name="FNAME" id="mce-FNAME" class="form-control-footer" placeholder="Enter Name" required="true">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="mce-LNAME" class="form-label text-uppercase fw-bold mb-0 text-light form-label-footer">Last name</label>
                                        <input type="text" name="LNAME" id="mce-LNAME" class="form-control-footer" placeholder="Enter Last Name" required="true">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="mce-EMAIL" class="form-label text-uppercase fw-bold mb-0 text-light form-label-footer">Email address</label>
                                        <input type="email" name="EMAIL" id="mce-EMAIL" class="form-control-footer" placeholder="Enter Email" required="true">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="mce-ADDRESS-country" class="form-label text-uppercase fw-bold mb-0 text-light form-label-footer">Country</label>
                                        <select name="ADDRESS[country]" id="mce-ADDRESS-country" class="form-select-footer mw-100" required="true">
                                            <option value="">Select country</option>
                                            <option value="164">USA</option>
                                            <option value="286">Aaland Islands</option>
                                            <option value="274">Afghanistan</option>
                                            <option value="2">Albania</option>
                                            <option value="3">Algeria</option>
                                            <option value="178">American Samoa</option>
                                            <option value="4">Andorra</option>
                                            <option value="5">Angola</option>
                                            <option value="176">Anguilla</option>
                                            <option value="175">Antigua And Barbuda</option>
                                            <option value="6">Argentina</option>
                                            <option value="7">Armenia</option>
                                            <option value="179">Aruba</option>
                                            <option value="8">Australia</option>
                                            <option value="9">Austria</option>
                                            <option value="10">Azerbaijan</option>
                                            <option value="11">Bahamas</option>
                                            <option value="12">Bahrain</option>
                                            <option value="13">Bangladesh</option>
                                            <option value="14">Barbados</option>
                                            <option value="15">Belarus</option>
                                            <option value="16">Belgium</option>
                                            <option value="17">Belize</option>
                                            <option value="18">Benin</option>
                                            <option value="19">Bermuda</option>
                                            <option value="20">Bhutan</option>
                                            <option value="21">Bolivia</option>
                                            <option value="325">Bonaire, Saint Eustatius and Saba</option>
                                            <option value="22">Bosnia and Herzegovina</option>
                                            <option value="23">Botswana</option>
                                            <option value="181">Bouvet Island</option>
                                            <option value="24">Brazil</option>
                                            <option value="180">Brunei Darussalam</option>
                                            <option value="25">Bulgaria</option>
                                            <option value="26">Burkina Faso</option>
                                            <option value="27">Burundi</option>
                                            <option value="28">Cambodia</option>
                                            <option value="29">Cameroon</option>
                                            <option value="30">Canada</option>
                                            <option value="31">Cape Verde</option>
                                            <option value="32">Cayman Islands</option>
                                            <option value="33">Central African Republic</option>
                                            <option value="34">Chad</option>
                                            <option value="35">Chile</option>
                                            <option value="36">China</option>
                                            <option value="185">Christmas Island</option>
                                            <option value="37">Colombia</option>
                                            <option value="204">Comoros</option>
                                            <option value="38">Congo</option>
                                            <option value="183">Cook Islands</option>
                                            <option value="268">Costa Rica</option>
                                            <option value="275">Cote D'Ivoire</option>
                                            <option value="40">Croatia</option>
                                            <option value="276">Cuba</option>
                                            <option value="298">Curacao</option>
                                            <option value="41">Cyprus</option>
                                            <option value="42">Czech Republic</option>
                                            <option value="318">Democratic Republic of the Congo</option>
                                            <option value="43">Denmark</option>
                                            <option value="44">Djibouti</option>
                                            <option value="289">Dominica</option>
                                            <option value="187">Dominican Republic</option>
                                            <option value="45">Ecuador</option>
                                            <option value="46">Egypt</option>
                                            <option value="47">El Salvador</option>
                                            <option value="48">Equatorial Guinea</option>
                                            <option value="49">Eritrea</option>
                                            <option value="50">Estonia</option>
                                            <option value="51">Ethiopia</option>
                                            <option value="189">Falkland Islands</option>
                                            <option value="191">Faroe Islands</option>
                                            <option value="52">Fiji</option>
                                            <option value="53">Finland</option>
                                            <option value="54">France</option>
                                            <option value="193">French Guiana</option>
                                            <option value="277">French Polynesia</option>
                                            <option value="56">Gabon</option>
                                            <option value="57">Gambia</option>
                                            <option value="58">Georgia</option>
                                            <option value="59">Germany</option>
                                            <option value="60">Ghana</option>
                                            <option value="194">Gibraltar</option>
                                            <option value="61">Greece</option>
                                            <option value="195">Greenland</option>
                                            <option value="192">Grenada</option>
                                            <option value="196">Guadeloupe</option>
                                            <option value="62">Guam</option>
                                            <option value="198">Guatemala</option>
                                            <option value="270">Guernsey</option>
                                            <option value="63">Guinea</option>
                                            <option value="65">Guyana</option>
                                            <option value="200">Haiti</option>
                                            <option value="66">Honduras</option>
                                            <option value="67">Hong Kong</option>
                                            <option value="68">Hungary</option>
                                            <option value="69">Iceland</option>
                                            <option value="70">India</option>
                                            <option value="71">Indonesia</option>
                                            <option value="278">Iran</option>
                                            <option value="279">Iraq</option>
                                            <option value="74">Ireland</option>
                                            <option value="323">Isle of Man</option>
                                            <option value="75">Israel</option>
                                            <option value="76">Italy</option>
                                            <option value="202">Jamaica</option>
                                            <option value="78">Japan</option>
                                            <option value="288">Jersey (Channel Islands)</option>
                                            <option value="79">Jordan</option>
                                            <option value="80">Kazakhstan</option>
                                            <option value="81">Kenya</option>
                                            <option value="203">Kiribati</option>
                                            <option value="82">Kuwait</option>
                                            <option value="83">Kyrgyzstan</option>
                                            <option value="84">Lao People's Democratic Republic</option>
                                            <option value="85">Latvia</option>
                                            <option value="86">Lebanon</option>
                                            <option value="87">Lesotho</option>
                                            <option value="88">Liberia</option>
                                            <option value="281">Libya</option>
                                            <option value="90">Liechtenstein</option>
                                            <option value="91">Lithuania</option>
                                            <option value="92">Luxembourg</option>
                                            <option value="208">Macau</option>
                                            <option value="93">Macedonia</option>
                                            <option value="94">Madagascar</option>
                                            <option value="95">Malawi</option>
                                            <option value="96">Malaysia</option>
                                            <option value="97">Maldives</option>
                                            <option value="98">Mali</option>
                                            <option value="99">Malta</option>
                                            <option value="207">Marshall Islands</option>
                                            <option value="210">Martinique</option>
                                            <option value="100">Mauritania</option>
                                            <option value="212">Mauritius</option>
                                            <option value="241">Mayotte</option>
                                            <option value="101">Mexico</option>
                                            <option value="102">Moldova, Republic of</option>
                                            <option value="103">Monaco</option>
                                            <option value="104">Mongolia</option>
                                            <option value="290">Montenegro</option>
                                            <option value="294">Montserrat</option>
                                            <option value="105">Morocco</option>
                                            <option value="106">Mozambique</option>
                                            <option value="242">Myanmar</option>
                                            <option value="107">Namibia</option>
                                            <option value="108">Nepal</option>
                                            <option value="109">Netherlands</option>
                                            <option value="110">Netherlands Antilles</option>
                                            <option value="213">New Caledonia</option>
                                            <option value="111">New Zealand</option>
                                            <option value="112">Nicaragua</option>
                                            <option value="113">Niger</option>
                                            <option value="114">Nigeria</option>
                                            <option value="217">Niue</option>
                                            <option value="214">Norfolk Island</option>
                                            <option value="272">North Korea</option>
                                            <option value="116">Norway</option>
                                            <option value="117">Oman</option>
                                            <option value="118">Pakistan</option>
                                            <option value="222">Palau</option>
                                            <option value="282">Palestine</option>
                                            <option value="119">Panama</option>
                                            <option value="219">Papua New Guinea</option>
                                            <option value="120">Paraguay</option>
                                            <option value="121">Peru</option>
                                            <option value="122">Philippines</option>
                                            <option value="221">Pitcairn</option>
                                            <option value="123">Poland</option>
                                            <option value="124">Portugal</option>
                                            <option value="126">Qatar</option>
                                            <option value="315">Republic of Kosovo</option>
                                            <option value="127">Reunion</option>
                                            <option value="128">Romania</option>
                                            <option value="129">Russia</option>
                                            <option value="130">Rwanda</option>
                                            <option value="205">Saint Kitts and Nevis</option>
                                            <option value="206">Saint Lucia</option>
                                            <option value="324">Saint Martin</option>
                                            <option value="237">Saint Vincent and the Grenadines</option>
                                            <option value="132">Samoa (Independent)</option>
                                            <option value="227">San Marino</option>
                                            <option value="255">Sao Tome and Principe</option>
                                            <option value="133">Saudi Arabia</option>
                                            <option value="134">Senegal</option>
                                            <option value="326">Serbia</option>
                                            <option value="135">Seychelles</option>
                                            <option value="136">Sierra Leone</option>
                                            <option value="137">Singapore</option>
                                            <option value="302">Sint Maarten</option>
                                            <option value="138">Slovakia</option>
                                            <option value="139">Slovenia</option>
                                            <option value="223">Solomon Islands</option>
                                            <option value="140">Somalia</option>
                                            <option value="141">South Africa</option>
                                            <option value="257">South Georgia and the South Sandwich Islands</option>
                                            <option value="142">South Korea</option>
                                            <option value="311">South Sudan</option>
                                            <option value="143">Spain</option>
                                            <option value="144">Sri Lanka</option>
                                            <option value="293">Sudan</option>
                                            <option value="146">Suriname</option>
                                            <option value="225">Svalbard and Jan Mayen Islands</option>
                                            <option value="147">Swaziland</option>
                                            <option value="148">Sweden</option>
                                            <option value="149">Switzerland</option>
                                            <option value="285">Syria</option>
                                            <option value="152">Taiwan</option>
                                            <option value="260">Tajikistan</option>
                                            <option value="153">Tanzania</option>
                                            <option value="154">Thailand</option>
                                            <option value="233">Timor-Leste</option>
                                            <option value="155">Togo</option>
                                            <option value="232">Tonga</option>
                                            <option value="234">Trinidad and Tobago</option>
                                            <option value="156">Tunisia</option>
                                            <option value="157">Turkey</option>
                                            <option value="158">Turkmenistan</option>
                                            <option value="287">Turks &amp; Caicos Islands</option>
                                            <option value="159">Uganda</option>
                                            <option value="161">Ukraine</option>
                                            <option value="162">United Arab Emirates</option>
                                            <option value="262">United Kingdom</option>
                                            <option value="163">Uruguay</option>
                                            <option value="165">Uzbekistan</option>
                                            <option value="239">Vanuatu</option>
                                            <option value="166">Vatican City State (Holy See)</option>
                                            <option value="167">Venezuela</option>
                                            <option value="168">Vietnam</option>
                                            <option value="169">Virgin Islands (British)</option>
                                            <option value="238">Virgin Islands (U.S.)</option>
                                            <option value="188">Western Sahara</option>
                                            <option value="170">Yemen</option>
                                            <option value="173">Zambia</option>
                                            <option value="174">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="mce-responses" class="clear foot">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check my-2">
                                        <input class="form-check-input" type="checkbox" value="accept" name="agree" id="agree" required="true">
                                        <label class="form-check-label text-light" for="agree">I agree to the Terms and Conditions</label>
                                    </div>
                                </div>
                            </div>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8a30b471b9cb8894535a8bffd_06fc448b22" tabindex="-1" value=""></div>
                        </form>
                    </div>
                    <div class="col-12 col-md-2 text-md-end">
                        {{-- <button type="submit" class="btn btn-outline-light text-uppercase py-3 px-4 px-xl-5 fw-bold rounded-0" form="subscribeForm">Submit</button> --}}

                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-outline-light text-uppercase py-3 px-4 px-xl-5 fw-bold rounded-0" form="mc-embedded-subscribe-form">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center my-2">Copyright &copy; 2023 Nandini Bali.</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/6281236871170" target="_blank" rel="noopener" class="whatsapp-floating"><img src="{{ asset('images/whatsapp-logo.png') }}" alt="whatsapp"></a>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#BannerPopUp').modal('show');
        });
    </script>
    <script type="text/javascript">
        if (screen.width < 768) {
            let url = "/";
            if (url == '/thank-you-newsletter') {
                window.location = "{{ route('index') }}/m/thank-you-enquiry";
            } else if (url == '/thank-you-enquiry') {
                window.location = "{{ route('index') }}/m/thank-you-enquiry";
            } else if (url == '/domestic') {} else {
                window.location = "{{ route('index') }}/m";
            }
        }
        $('#fromDate').datepicker({
            format: 'dd-mm-yyyy',
            startDate: "16-01-2023",
            autoclose: true
        });
        $('#toDate').datepicker({
            format: 'dd-mm-yyyy',
            startDate: "17-01-2023",
            autoclose: true
        });
        $('#fromDate, #toDate').change(function(e) {
            let str = $(this).val();
            let res = str.split("-");
            $(this).closest('.col').find('.datepicker-input').val(res[2] + '-' + res[1] + '-' + res[0]);
        });
        $('#fromDate').change(function(e) {
            let str = $(this).val();
            let res = str.split("-");
            let dat = res[2] + '-' + res[1] + '-' + res[0];
            let date = new Date(dat);
            date.setDate(date.getDate() + 1);

            let dd = (date.getDate() < 10) ? "0" + date.getDate().toString() : date.getDate();
            let mm = (date.getMonth() < 9) ? "0" + (date.getMonth() + 1).toString() : (date.getMonth() + 1);
            let y = date.getFullYear();

            $('#toDate').val(dd + '-' + mm + '-' + y);
            $('#toDate').closest('.col').find('.datepicker-input').val(y + '-' + mm + '-' + dd);

            $('#toDate').datepicker('destroy');
            $('#toDate').datepicker({
                format: 'dd-mm-yyyy',
                startDate: dd + '-' + mm + '-' + y,
                autoclose: true
            });
        });
    </script>
    {!! $footer->script ?? '' !!}
    @stack('js')
</body>

</html>