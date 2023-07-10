@section('meta')
<meta name="title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }} | {{config('app.name')}}</title>
<meta property="og:url" content="{{ route('mspa') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset($setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | {{config('app.name')}}">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset($setting->banner_image) }}">

<link rel="canonical" href="{{ route('mspa') }}" />
@endsection

@push('css')
<style>
    .form-control.datepicker[readonly] {
        background-color: #fff;
        cursor: pointer;
    }

</style>
@endpush

<x-seven-secret-mobile>
    <div class="wrapper page">
        <div class="header-page fixed-top">
            <div class="container-fluid">
                <div class="row gx-0">
                    <div class="col-1">
                        <a href="{{route('mindex')}}" class="link-dark"><i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="col-11 ps-1">
                        <h1>{{$setting->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid activities py-2 mb-5">
            <div class="row">
                @foreach ($dining_list as $data)
                <div class="col-12">
                    <div class="row gx-1 py-3 @if ($loop->last) @else border-bottom @endif">
                        <div class="col-5">
                            <div class="ratio ratio-1x1">
                                <img src="{{asset($data->cover_image)}}" class="img-fluid" alt="{{$data->title}}">
                            </div>
                        </div>
                        <div class="col-7 ps-2 d-flex flex-column justify-content-between">
                            <div class="title-wrapper">
                                <h2 class="fw-bold mb-2">{{$data->title}}</h2>
                                <p class="mb-3">{!! $data->excerpt !!}</p>
                                @if ($data->price == null)
                                @else
                                <h4 class="mb-0">Prices</h4>
                                @endif
                                <ul class="list-unstyled">
                                    <li>{{$data->price.' '.$data->per}}</li>
                                </ul>
                            </div>
                            <div class="button-wrapper text-end">
                                <button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target="#{{$data->slug}}">View Details</button>
                                <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#{{'modalinquiry'.$data->id}}">
                                    {{ $data->button_text }}
                                </button>
                            </div>
                        </div>
                        <!-- Detail Modal -->
                        <div class="modal fade" id="{{$data->slug}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{$data->title}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {!! $data->description !!}
                                    </div>
                                    <div class="modal-footer button-wrapper">
                                        <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#{{'modalinquiry'.$data->id}}">
                                            {{ $data->button_text }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Inquiry Modal -->
                        <div class="modal fade" id="{{'modalinquiry'.$data->id}}" tabindex="-1" aria-labelledby="{{'modalinquiry'.$data->id}}Label" aria-hidden="true">
                            <form class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" method="post" action="{{route('inquiry.store')}}">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title text-uppercase" id="{{'modalinquiry'.$data->id}}Label">Inquiry Form</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="col-12">
                                                <div class="row g-3">
                                                    <input type="hidden" name="package_title" value="{{$data->title}}">
                                                    <input type="hidden" name="package_excerpt" value="{{$data->excerpt}}">
                                                    <input type="hidden" name="package_price" value="{{$data->price}}">
                                                    <input type="hidden" name="package_per" value="{{$data->per}}">
                                                    <div class="col-12 col-md-6 mb-2">
                                                        <label for="fullname_enquiry" class="form-label">Full Name<span class="text-danger">*</span></label>
                                                        <div class="input-group rounded-0">
                                                            <span class="input-group-text rounded-0 px-3"><i class="fa fa-male" style="width: 16px;"></i></span>
                                                            <input type="text" class="form-control rounded-0" name="full_name" id="fullname_enquiry" required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-2">
                                                        <label for="email_enquiry" class="form-label">E-mail Address<span class="text-danger">*</span></label>
                                                        <div class="input-group rounded-0">
                                                            <span class="input-group-text rounded-0 px-3"><i class="fa fa-envelope" style="width: 16px;"></i></span>
                                                            <input type="email" class="form-control rounded-0" name="email" id="email_enquiry" required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-2">
                                                        <label for="country_enquiry" class="form-label">Country<span class="text-danger">*</span></label>
                                                        <div class="input-group rounded-0">
                                                            <span class="input-group-text rounded-0 px-3"><i class="fa fa-building" style="width: 16px;"></i></span>
                                                            <select class="form-select rounded-0" name="country" id="country_enquiry" required="true">
                                                                <option value=""></option>
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
                                                    <div class="col-12 col-md-6 mb-2">
                                                        <label for="phone_enquiry" class="form-label">Phone Number<span class="text-danger">*</span></label>
                                                        <div class="input-group rounded-0">
                                                            <span class="input-group-text rounded-0 px-3"><i class="fa fa-phone" style="width: 16px;"></i></span>
                                                            <input type="text" class="form-control rounded-0" name="phone" id="phone_enquiry" required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-2">
                                                        <label for="reserveddate_enquiry{{$data->id}}" class="form-label">Reserved Date<span class="text-danger">*</span></label>
                                                        <div class="input-group rounded-0">
                                                            <span class="input-group-text rounded-0 px-3"><i class="fa fa-calendar" style="width: 16px;"></i></span>
                                                            <input type="text" class="datepicker form-control rounded-0" name="date" id="reserveddate_enquiry{{$data->id}}" required="true" readonly="true">
                                                        </div>
                                                    </div>
                                                    @push('js')
                                                    <script>
                                                        $('#reserveddate_enquiry{{$data->id}}').datepicker({
                                                            format: 'dd-mm-yyyy',
                                                            startDate: "{{date("d-m-Y")}}",
                                                            autoclose: true
                                                        });
                                                    </script>
                                                    @endpush
                                                    <div class="col-12">
                                                        <label for="message_enquiry" class="form-label">Message<span class="text-danger">*</span></label>
                                                        <div class="input-group rounded-0">
                                                            <span class="input-group-text rounded-0 px-3"><i class="fa fa-comments" style="width: 16px;"></i></span>
                                                            <textarea class="form-control rounded-0" name="message" id="message_enquiry" rows="4" style="resize: none;" required="true"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer button-wrapper">
                                        <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-custom">{{$data->button_text}}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</x-seven-secret-mobile>