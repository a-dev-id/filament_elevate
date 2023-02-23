<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')

    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">

    {{--
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hgob.css') }}">

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
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link text-white px-2 px-xl-3"><i class="fas fa-home"></i></a></li>
                    <li class="nav-item"><a href="{{route('villas.index')}}" class="nav-link text-white px-2 px-xl-3">Villas</a></li>
                    <li class="nav-item"><a href="{{route('hidden-palace.index')}}" class="nav-link text-white px-2 px-xl-3">Hidden Palace</a></li>
                    <li class="nav-item"><a href="{{route('experiences.index')}}" class="nav-link text-white px-2 px-xl-3">Experiences</a></li>
                    <li class="nav-item"><a href="{{route('spa.index')}}" class="nav-link text-white px-2 px-xl-3">Spa</a></li>
                </ul>
                <a href="{{route('index')}}" class="navbar-brand mx-2">
                    <img src="{{asset('images/hanginggarden-logo.png')}}" class="navlogo fade-in" alt="Hanging Garden Of Bali">
                </a>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a href="{{route('restaurant.index')}}" class="nav-link text-white px-2 px-xl-3">Restaurant</a></li>
                    <li class="nav-item"><a href="{{route('honeymoon.index')}}" class="nav-link text-white px-2 px-xl-3">Honeymoon</a></li>
                    <li class="nav-item"><a href="{{route('weddings.index')}}" class="nav-link text-white px-2 px-xl-3">Weddings</a></li>
                    <li class="nav-item"><a href="{{route('gallery.index')}}" class="nav-link text-white px-2 px-xl-3">Gallery</a></li>
                    <!-- <li class="nav-item"><a href="https://www.hanginggardensofbali.com/contact" class="nav-link text-white px-2 px-xl-3">Contact Us</a></li> -->
                </ul>
            </div>
        </nav>

        <div class="booking-wrapper">
            <div class="booking-inner">
                <div class="booking-form-wrapper">
                    <div class="booking-form-wrapper-inner">
                        <form class="d-flex h-100" action="https://book-directonline.com/properties/hanginggardensofbalidirect" method="get" target="_blank">
                            <input type="hidden" name="propertyId" class="datepicker-input" value="MzQ1MQ">
                            <input type="hidden" name="viewtype" class="datepicker-input" value="roomview">
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Arrival</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="fromDate" value="14-02-2023" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkInDate" class="datepicker-input" value="2023-02-14">
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Departure</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="toDate" value="15-02-2023" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkOutDate" class="datepicker-input" value="2023-02-15">
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
                                <input type="text" class="form-control booking-field-input h-100 w-100" name="promo_code" placeholder="...">
                                <i class="fa fa-tag booking-field-icon"></i>
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <button type="submit" class="btn btn-gold text-uppercase rounded-0 fw-bold h-100 w-100">BOOK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="special-offers-link w-100 d-flex justify-content-center">
            <div class="row" style="max-width:250px">
                <div class="mx-1 offers-link-hover opacity-0 order-3">
                    <div class="px-3 py-2 bg-dark bg-opacity-75 rounded-3">
                        <p class="text-xxl-start text-center text-white mb-0">Find out exclusive offers<br>in our official website</p>
                    </div>
                </div>
                <a href="{{route('offers.index')}}" class="btn btn-gold rounded-pill text-uppercase px-4 w-100 order-2">
                    <small class="fw-bold"><i class="fas fa-gift me-2"></i> Special Offers</small>
                </a>
            </div>
        </div>
    </header>

    <a href="https://wa.me/628113800988" target="_blank" rel="noopener" class="whatsapp-floating"><img src="{{asset('images/whatsapp-logo.png')}}" alt="whatsapp"></a>
    <a href="https://t.me/HGOB2022" target="_blank" rel="noopener" class="telegram-floating"><img src="{{asset('images/logo-telegram.png')}}" alt="whatsapp"></a>
    <a href="https://www.tripadvisor.com/Hotel_Review-g608492-d583286-Reviews-Hanging_Gardens_of_Bali-Payangan_Gianyar_Regency_Bali.html" target="_blank" rel="noopener" class="trip-floating"><img src="{{asset('images/trip.png')}}" alt="whatsapp"></a>

    {{$slot}}

    <!-- Footer -->
    <footer>
        <div class="container my-4">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="border-top border-secondary py-4">
                        <h3 class="d-flex justify-content-between">Address <i class="fas fa-map-marker-alt"></i></h3>
                    </div>
                    <p class="fs-5">Buahan, Payangan 80571,<br>Kabupaten Gianyar - Bali<br>Indonesia<br>+62 361 982 700<br>+62 811 3800 988 (Whatsapp)</p>
                </div>
                <div class="col-12 col-md-3">
                    <div class="border-top border-secondary py-4">
                        <h3 class="d-flex justify-content-between">About <i class="far fa-compass"></i></h3>
                    </div>
                    <nav class="nav flex-column fs-5">
                        <a href="{{route('story.index')}}" class="nav-link p-0 link-dark text-decoration-none">Story</a>
                        <a href="{{route('awards.index')}}" class="nav-link p-0 link-dark text-decoration-none">Awards</a>
                        <a href="{{route('press.index')}}" class="nav-link p-0 link-dark text-decoration-none">Press Room</a>
                        <a href="{{route('contact.index')}}" class="nav-link p-0 link-dark text-decoration-none">Contact Us</a>
                    </nav>
                </div>
                <div class="col-12 col-md-3">
                    <div class="border-top border-secondary py-4">
                        <h3 class="d-flex justify-content-between">Others <i class="far fa-snowflake"></i></h3>
                    </div>
                    <nav class="nav flex-column fs-5">
                        <a href="{{route('policy-legal.index')}}" class="nav-link p-0 link-dark text-decoration-none">Policy &amp; Legal</a>
                        <a href="{{route('blog.index')}}" class="nav-link p-0 link-dark text-decoration-none">Blog</a>
                        <a href="{{route('careers.index')}}" class="nav-link p-0 link-dark text-decoration-none">Careers</a>
                        {{-- <a href="javascript:void(0)" class="nav-link p-0 link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#gds-code">GDS Code</a> --}}
                    </nav>
                </div>
                <div class="col-12 col-md-3">
                    <div class="border-top border-secondary py-4">
                        <h3 class="d-flex justify-content-between">Follow Us <i class="fas fa-share-alt"></i></h3>
                    </div>
                    <nav class="nav flex-row">
                        <a target="_blank" href="https://www.instagram.com/hanginggardensofbali/" class="nav-link social-media-share social-media-share-instagram me-2"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://www.facebook.com/hanginggardensbali" class="nav-link social-media-share social-media-share-facebook me-2"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/hanginggardens5" class="nav-link social-media-share social-media-share-twitter me-2"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCYZegT_ueaOA7IB1addySIA" class="nav-link social-media-share social-media-share-youtube me-2"><i class="fab fa-youtube"></i></a>
                    </nav>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="{{asset('images/1.jpg')}}" class="w-100" alt="Asia Awards Of Excellence">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="{{asset('images/2.jpg')}}" class="w-100" alt="World Luxury Restaurant Awards Winner 2019">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="{{asset('images/5.jpg')}}" class="w-100" alt="World Luxury SPA Awards Winner 2016">
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="https://www.luxurialifestyle.com/discovering-balis-best-luxury-resorts/" target="_blank">
                                <img src="{{asset('images/hanging-gardens.png')}}" class="w-100" alt="Luxuria Life Style">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-md-5 border-bottom border-secondary"></div>
            </div>
        </div>

        {{-- <div class="modal fade" id="gds-code" tabindex="-1" aria-labelledby="gds-code-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-uppercase" id="gds-code-label">GDS Code</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="w-100 border-0">
                            <tbody>
                                <tr>
                                    <td class="text-center text-dark w-25">
                                        <strong>Amadeus</strong><br>DPSHGB
                                    </td>
                                    <td class="text-center text-dark w-25">
                                        <strong>Sabre</strong><br>327268
                                    </td>
                                    <td class="text-center text-dark w-25">
                                        <strong>Galileo/Apollo</strong><br>F4453
                                    </td>
                                    <td class="text-center text-dark w-25">
                                        <strong>Worldspan</strong><br>DPSHG
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="bg-gold pt-4 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <h2 class="text-light">Stay in touch</h2>
                    </div>
                    <div class="col-12 col-md-7">
                        <form id="subscribeForm" method="post" action="https://www.hanginggardensofbali.com/others/subscribe.php">
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label text-uppercase fw-bold mb-0 text-light form-label-footer">First name</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control-footer" placeholder="Enter Name" required="true">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label text-uppercase fw-bold mb-0 text-light form-label-footer">Last name</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control-footer" placeholder="Enter Last Name" required="true">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label text-uppercase fw-bold mb-0 text-light form-label-footer">Email address</label>
                                        <input type="email" name="email" id="email" class="form-control-footer" placeholder="Enter Email" required="true">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="country" class="form-label text-uppercase fw-bold mb-0 text-light form-label-footer">Country</label>
                                        <select name="country" id="country" class="form-select-footer mw-100" required="true">
                                            <option value="">Select country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D&#039;Ivoire">Cote D&#039;Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
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
                        </form>
                    </div>
                    <div class="col-12 col-md-2 text-md-end">
                        <button type="submit" class="btn btn-outline-light text-uppercase py-3 px-4 px-xl-5 fw-bold rounded-0" form="subscribeForm">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center my-2">Copyright &copy; 2023 Hanging Gardens of Bali.</p>
                </div>
            </div>
        </div>
    </footer>

    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="{{asset('js/hgob.js')}}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    @stack('js')

    <script type="text/javascript">
        if (screen.width < 768) {
        let url = "/";
        if (url == '/thank-you-newsletter') {
            window.location = "{{route('index')}}/m/thank-you-enquiry";
        } else if (url == '/thank-you-enquiry') {
            window.location = "{{route('index')}}/m/thank-you-enquiry";
        } else {
            window.location = "{{route('index')}}/m";
        }
    }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
        $('#BannerPopUp').modal('show');
    });
    </script>

    <script type="text/javascript">
        $('#reserveddate_enquiry').datepicker({
			format: 'dd-mm-yyyy',
			startDate: "14-02-2023",
			autoclose: true
		});
		$('#fromDate').datepicker({
			format: 'dd-mm-yyyy',
			startDate: "14-02-2023",
			autoclose: true
		});
		$('#toDate').datepicker({
			format: 'dd-mm-yyyy',
			startDate: "15-02-2023",
			autoclose: true
		});
		$('#fromDate, #toDate').change(function(e) {
			let str = $(this).val();
			let res =  str.split("-");
			$(this).closest('.col').find('.datepicker-input').val(res[2]+'-'+res[1]+'-'+res[0]);
		});
		$('#fromDate').change(function(e) {
			let str = $(this).val();
			let res =  str.split("-");
			let dat = res[2]+'-'+res[1]+'-'+res[0];
			let date = new Date(dat);
			date.setDate(date.getDate() + 1);

			let dd = (date.getDate() < 10) ? "0" + date.getDate().toString() : date.getDate();
			let mm = (date.getMonth() < 10) ? "0" + (date.getMonth() + 1).toString() : date.getMonth();
			let y = date.getFullYear();

			$('#toDate').val(dd+'-'+mm+'-'+y);
			$('#toDate').closest('.col').find('.datepicker-input').val(y+'-'+mm+'-'+dd);
			
			$('#toDate').datepicker('destroy');
			$('#toDate').datepicker({
				format: 'dd-mm-yyyy',
				startDate: dd+'-'+mm+'-'+y,
				autoclose: true
			});
		});
    
    </script>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "364452250357216");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>