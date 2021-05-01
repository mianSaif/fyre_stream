@extends('layouts.app')
@section('content')
    <style>
        .profileTab:hover{
            padding-bottom: 6px;
            border-bottom: 4px solid #ff815e;
        }

        .active{
            padding-bottom: 6px;
            border-bottom: 4px solid #ff815e;
        }
    </style>

    <div class="row">
        <div class="col-lg-8">
            <div class="section1">
                <div class="cover profile-cover-wrapper profile-cover-wrapper-new">
                    <img src="http://fyrestream.com//content/themes/social/images/cover.png" alt="cover"
                         class="img-fluid w-100">
                    <div class="profile-cover-buttons">
                        <div class="profile-cover-change">
                            <form class="x-uploader" action="http://fyrestream.com//includes/ajax/data/upload.php"
                                  method="post" enctype="multipart/form-data">
                                <input name="file" type="file" accept=".png, .gif, .jpeg, .jpg">
                                <input type="hidden" name="secret" value="0fc97dd1bfe3e70cd9fe1d48caa2d367">
                                <i class="fa fa-camera js_x-uploader" data-handle="cover-page" data-id=""></i>
                            </form>
                        </div>

                        <div class="profile-cover-position x-hidden"><input class="js_position-picture-val"
                                                                            type="hidden" name="position-picture-val">
                            <i class="fa fa-crop-alt js_init-position-picture" data-handle="page" data-id=""></i>
                        </div>
                        <div class="profile-cover-position-buttons">
                            <i class="fa fa-check fa-fw js_save-position-picture"></i>
                        </div>
                        <div class="profile-cover-position-buttons">
                            <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
                        </div>
                        <div class="profile-cover-delete x-hidden">
                            <i class="fa fa-trash js_delete-cover" data-handle="cover-page" data-id=""></i>
                        </div>
                    </div>

                    <div class="profile-cover-change-loader">
                        <div class="progress x-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="profile-cover-position-loader">
                        <i class="fa fa-arrows-alt mr5"></i>Drag to reposition cover
                    </div>
                </div>

                <div class="row bg-white mx-1">
                    <div class="col-2 mt-n5 ml-5">
                        <div class="group-img-btn profile-image position-relative">
                            <img
                                src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png"
                                alt="Danish Test" class="profile-image js_lightbox" data-id="124" data-context="album"
                                data-image="http://fyrestream.com//content/uploads/photos/2021/04/sngine_356feaec21c0f5a215d5b555d114e8e6.png">
                            <div style="z-index: 9;" class="profile-avatar-change">
                                <form class="x-uploader" action="http://fyrestream.com//includes/ajax/data/upload.php"
                                      method="post" enctype="multipart/form-data">
                                    <input name="file" type="file" accept=".png, .gif, .jpeg, .jpg">
                                    <input type="hidden" name="secret" value="0fc97dd1bfe3e70cd9fe1d48caa2d367">
                                    <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                                </form>
                            </div>

                            <div style="z-index: 9;" class="profile-avatar-crop">
                                <i class="fa fa-crop-alt js_init-crop-picture"
                                   data-image="http://fyrestream.com//content/uploads/photos/2021/04/sngine_356feaec21c0f5a215d5b555d114e8e6.png"
                                   data-handle="user" data-id="58"></i>
                            </div>
                            <div class="profile-avatar-delete ">
                                <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
                            </div>

                            <div class="profile-avatar-change-loader">
                                <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="d-flex justify-content-around align-items-center mb-2 mx-5">
                            <h5>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
                            <div class="story-card-toggoler d-flex moments justify-content-between align-items-center">
                                <img src="http://fyrestream.com//content/themes/social/images/circle_colorful.png" class="circle" alt="story-moments">
                                <span class="ml-2">
                                    <span class="toggle-text">Show Moments</span>
                                </span>
                            </div>
                            <div class="d-flex buttons justify-content-between align-items-center">
                                <button class="btn" style="background: #fff0ef; margin-left: 10px; color: #ff815e; font-weight: 500; font-size: 10px;">
                                    <i class="fab fa-facebook-messenger"></i> Message
                                </button>
                                <button class="btn" style="background: #fff0ef; margin-left: 10px; color: #ff815e; font-weight: 500; font-size: 10px;">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                                <button data-toggle="modal" data-target="#editModal" class="btn" style="background: #fff0ef; margin-left: 10px; color: #ff815e; font-weight: 500; font-size: 10px;">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h3 class="text-center text-secondary">Edit Profile</h3>
                                                <form class="js_ajax-forms-custom" data-url="users/settings.php?edit=basic">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label">First Name</label>
                                                                <input type="text" class="form-control" name="firstname"
                                                                       value="Danish">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label">Last Name</label>
                                                                <input type="text" class="form-control" name="lastname"
                                                                       value="Test">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label">I am</label>
                                                                <select name="gender" class="form-control">
                                                                    <option value="none">Select Sex</option>
                                                                    <option selected="" value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label">Relationship Status</label>
                                                                <select name="relationship" class="form-control">
                                                                    <option value="none">Select Relationship</option>
                                                                    <option value="single">Single</option>
                                                                    <option value="relationship">In a relationship</option>
                                                                    <option value="married">Married</option>
                                                                    <option value="complicated">It's complicated</option>
                                                                    <option value="separated">Separated</option>
                                                                    <option value="divorced">Divorced</option>
                                                                    <option value="widowed">Widowed</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label">Country</label>
                                                                <select name="country" class="form-control">
                                                                    <option value="none">Select Country</option>
                                                                    <option value="1">Afghanistan</option>
                                                                    <option value="2">Albania</option>
                                                                    <option value="3">Algeria</option>
                                                                    <option value="4">American Samoa</option>
                                                                    <option value="5">Andorra</option>
                                                                    <option value="6">Angola</option>
                                                                    <option value="7">Anguilla</option>
                                                                    <option value="8">Antarctica</option>
                                                                    <option value="9">Antigua and Barbuda</option>
                                                                    <option value="10">Argentina</option>
                                                                    <option value="11">Armenia</option>
                                                                    <option value="12">Aruba</option>
                                                                    <option value="13">Australia</option>
                                                                    <option value="14">Austria</option>
                                                                    <option value="15">Azerbaijan</option>
                                                                    <option value="16">Bahamas</option>
                                                                    <option value="17">Bahrain</option>
                                                                    <option value="18">Bangladesh</option>
                                                                    <option value="19">Barbados</option>
                                                                    <option value="20">Belarus</option>
                                                                    <option value="21">Belgium</option>
                                                                    <option value="22">Belize</option>
                                                                    <option value="23">Benin</option>
                                                                    <option value="24">Bermuda</option>
                                                                    <option value="25">Bhutan</option>
                                                                    <option value="26">Bolivia</option>
                                                                    <option value="27">Bosnia and Herzegovina</option>
                                                                    <option value="28">Botswana</option>
                                                                    <option value="29">Bouvet Island</option>
                                                                    <option value="30">Brazil</option>
                                                                    <option value="31">British Indian Ocean Territory</option>
                                                                    <option value="32">Brunei Darussalam</option>
                                                                    <option value="33">Bulgaria</option>
                                                                    <option value="34">Burkina Faso</option>
                                                                    <option value="35">Burundi</option>
                                                                    <option value="36">Cambodia</option>
                                                                    <option value="37">Cameroon</option>
                                                                    <option value="38">Canada</option>
                                                                    <option value="39">Cape Verde</option>
                                                                    <option value="40">Cayman Islands</option>
                                                                    <option value="41">Central African Republic</option>
                                                                    <option value="42">Chad</option>
                                                                    <option value="43">Chile</option>
                                                                    <option value="44">China</option>
                                                                    <option value="45">Christmas Island</option>
                                                                    <option value="46">Cocos (Keeling) Islands</option>
                                                                    <option value="47">Colombia</option>
                                                                    <option value="48">Comoros</option>
                                                                    <option value="49">Congo</option>
                                                                    <option value="50">Cook Islands</option>
                                                                    <option value="51">Costa Rica</option>
                                                                    <option value="52">Croatia (Hrvatska)</option>
                                                                    <option value="53">Cuba</option>
                                                                    <option value="54">Cyprus</option>
                                                                    <option value="55">Czech Republic</option>
                                                                    <option value="56">Denmark</option>
                                                                    <option value="57">Djibouti</option>
                                                                    <option value="58">Dominica</option>
                                                                    <option value="59">Dominican Republic</option>
                                                                    <option value="60">East Timor</option>
                                                                    <option value="61">Ecuador</option>
                                                                    <option value="62">Egypt</option>
                                                                    <option value="63">El Salvador</option>
                                                                    <option value="64">Equatorial Guinea</option>
                                                                    <option value="65">Eritrea</option>
                                                                    <option value="66">Estonia</option>
                                                                    <option value="67">Ethiopia</option>
                                                                    <option value="68">Falkland Islands (Malvinas)</option>
                                                                    <option value="69">Faroe Islands</option>
                                                                    <option value="70">Fiji</option>
                                                                    <option value="71">Finland</option>
                                                                    <option value="72">France</option>
                                                                    <option value="73">France, Metropolitan</option>
                                                                    <option value="74">French Guiana</option>
                                                                    <option value="75">French Polynesia</option>
                                                                    <option value="76">French Southern Territories</option>
                                                                    <option value="77">Gabon</option>
                                                                    <option value="78">Gambia</option>
                                                                    <option value="79">Georgia</option>
                                                                    <option value="80">Germany</option>
                                                                    <option value="81">Ghana</option>
                                                                    <option value="82">Gibraltar</option>
                                                                    <option value="83">Guernsey</option>
                                                                    <option value="84">Greece</option>
                                                                    <option value="85">Greenland</option>
                                                                    <option value="86">Grenada</option>
                                                                    <option value="87">Guadeloupe</option>
                                                                    <option value="88">Guam</option>
                                                                    <option value="89">Guatemala</option>
                                                                    <option value="90">Guinea</option>
                                                                    <option value="91">Guinea-Bissau</option>
                                                                    <option value="92">Guyana</option>
                                                                    <option value="93">Haiti</option>
                                                                    <option value="94">Heard and Mc Donald Islands</option>
                                                                    <option value="95">Honduras</option>
                                                                    <option value="96">Hong Kong</option>
                                                                    <option value="97">Hungary</option>
                                                                    <option value="98">Iceland</option>
                                                                    <option value="99">India</option>
                                                                    <option value="100">Isle of Man</option>
                                                                    <option value="101">Indonesia</option>
                                                                    <option value="102">Iran (Islamic Republic of)</option>
                                                                    <option value="103">Iraq</option>
                                                                    <option value="104">Ireland</option>
                                                                    <option value="105">Israel</option>
                                                                    <option value="106">Italy</option>
                                                                    <option value="107">Ivory Coast</option>
                                                                    <option value="108">Jersey</option>
                                                                    <option value="109">Jamaica</option>
                                                                    <option value="110">Japan</option>
                                                                    <option value="111">Jordan</option>
                                                                    <option value="112">Kazakhstan</option>
                                                                    <option value="113">Kenya</option>
                                                                    <option value="114">Kiribati</option>
                                                                    <option value="115">Korea, Democratic People's Republic of</option>
                                                                    <option value="116">Korea, Republic of</option>
                                                                    <option value="117">Kosovo</option>
                                                                    <option value="118">Kuwait</option>
                                                                    <option value="119">Kyrgyzstan</option>
                                                                    <option value="120">Lao People's Democratic Republic
                                                                    </option>
                                                                    <option value="121">Latvia</option>
                                                                    <option value="122">Lebanon</option>
                                                                    <option value="123">Lesotho</option>
                                                                    <option value="124">Liberia</option>
                                                                    <option value="125">Libyan Arab Jamahiriya</option>
                                                                    <option value="126">Liechtenstein</option>
                                                                    <option value="127">Lithuania</option>
                                                                    <option value="128">Luxembourg</option>
                                                                    <option value="129">Macau</option>
                                                                    <option value="130">Macedonia</option>
                                                                    <option value="131">Madagascar</option>
                                                                    <option value="132">Malawi</option>
                                                                    <option value="133">Malaysia</option>
                                                                    <option value="134">Maldives</option>
                                                                    <option value="135">Mali</option>
                                                                    <option value="136">Malta</option>
                                                                    <option value="137">Marshall Islands</option>
                                                                    <option value="138">Martinique</option>
                                                                    <option value="139">Mauritania</option>
                                                                    <option value="140">Mauritius</option>
                                                                    <option value="141">Mayotte</option>
                                                                    <option value="142">Mexico</option>
                                                                    <option value="143">Micronesia, Federated States of</option>
                                                                    <option value="144">Moldova, Republic of</option>
                                                                    <option value="145">Monaco</option>
                                                                    <option value="146">Mongolia</option>
                                                                    <option value="147">Montenegro</option>
                                                                    <option value="148">Montserrat</option>
                                                                    <option value="149">Morocco</option>
                                                                    <option value="150">Mozambique</option>
                                                                    <option value="151">Myanmar</option>
                                                                    <option value="152">Namibia</option>
                                                                    <option value="153">Nauru</option>
                                                                    <option value="154">Nepal</option>
                                                                    <option value="155">Netherlands</option>
                                                                    <option value="156">Netherlands Antilles</option>
                                                                    <option value="157">New Caledonia</option>
                                                                    <option value="158">New Zealand</option>
                                                                    <option value="159">Nicaragua</option>
                                                                    <option value="160">Niger</option>
                                                                    <option value="161">Nigeria</option>
                                                                    <option value="162">Niue</option>
                                                                    <option value="163">Norfolk Island</option>
                                                                    <option value="164">Northern Mariana Islands</option>
                                                                    <option value="165">Norway</option>
                                                                    <option value="166">Oman</option>
                                                                    <option selected="" value="167">Pakistan</option>
                                                                    <option value="168">Palau</option>
                                                                    <option value="169">Palestine</option>
                                                                    <option value="170">Panama</option>
                                                                    <option value="171">Papua New Guinea</option>
                                                                    <option value="172">Paraguay</option>
                                                                    <option value="173">Peru</option>
                                                                    <option value="174">Philippines</option>
                                                                    <option value="175">Pitcairn</option>
                                                                    <option value="176">Poland</option>
                                                                    <option value="177">Portugal</option>
                                                                    <option value="178">Puerto Rico</option>
                                                                    <option value="179">Qatar</option>
                                                                    <option value="180">Reunion</option>
                                                                    <option value="181">Romania</option>
                                                                    <option value="182">Russian Federation</option>
                                                                    <option value="183">Rwanda</option>
                                                                    <option value="184">Saint Kitts and Nevis</option>
                                                                    <option value="185">Saint Lucia</option>
                                                                    <option value="186">Saint Vincent and the Grenadines
                                                                    </option>
                                                                    <option value="187">Samoa</option>
                                                                    <option value="188">San Marino</option>
                                                                    <option value="189">Sao Tome and Principe</option>
                                                                    <option value="190">Saudi Arabia</option>
                                                                    <option value="191">Senegal</option>
                                                                    <option value="192">Serbia</option>
                                                                    <option value="193">Seychelles</option>
                                                                    <option value="194">Sierra Leone</option>
                                                                    <option value="195">Singapore</option>
                                                                    <option value="196">Slovakia</option>
                                                                    <option value="197">Slovenia</option>
                                                                    <option value="198">Solomon Islands</option>
                                                                    <option value="199">Somalia</option>
                                                                    <option value="200">South Africa</option>
                                                                    <option value="201">South Georgia South Sandwich Islands</option>
                                                                    <option value="202">Spain</option>
                                                                    <option value="203">Sri Lanka</option>
                                                                    <option value="204">St. Helena</option>
                                                                    <option value="205">St. Pierre and Miquelon</option>
                                                                    <option value="206">Sudan</option>
                                                                    <option value="207">Suriname</option>
                                                                    <option value="208">Svalbard and Jan Mayen Islands</option>
                                                                    <option value="209">Swaziland</option>
                                                                    <option value="210">Sweden</option>
                                                                    <option value="211">Switzerland</option>
                                                                    <option value="212">Syrian Arab Republic</option>
                                                                    <option value="213">Taiwan</option>
                                                                    <option value="214">Tajikistan</option>
                                                                    <option value="215">Tanzania, United Republic of</option>
                                                                    <option value="216">Thailand</option>
                                                                    <option value="217">Togo</option>
                                                                    <option value="218">Tokelau</option>
                                                                    <option value="219">Tonga</option>
                                                                    <option value="220">Trinidad and Tobago</option>
                                                                    <option value="221">Tunisia</option>
                                                                    <option value="222">Turkey</option>
                                                                    <option value="223">Turkmenistan</option>
                                                                    <option value="224">Turks and Caicos Islands</option>
                                                                    <option value="225">Tuvalu</option>
                                                                    <option value="226">Uganda</option>
                                                                    <option value="227">Ukraine</option>
                                                                    <option value="228">United Arab Emirates</option>
                                                                    <option value="229">United Kingdom</option>
                                                                    <option value="230">United States</option>
                                                                    <option value="231">United States minor outlying islands</option>
                                                                    <option value="232">Uruguay</option>
                                                                    <option value="233">Uzbekistan</option>
                                                                    <option value="234">Vanuatu</option>
                                                                    <option value="235">Vatican City State</option>
                                                                    <option value="236">Venezuela</option>
                                                                    <option value="237">Vietnam</option>
                                                                    <option value="238">Virgin Islands (British)</option>
                                                                    <option value="239">Virgin Islands (U.S.)</option>
                                                                    <option value="240">Wallis and Futuna Islands</option>
                                                                    <option value="241">Western Sahara</option>
                                                                    <option value="242">Yemen</option>
                                                                    <option value="243">Zaire</option>
                                                                    <option value="244">Zambia</option>
                                                                    <option value="245">Zimbabwe</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="form-control-label">Website</label>
                                                                <input type="text" class="form-control" name="website" value="">
                                                                <span class="form-text">Website link must start with http:// or https://</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Birthdate</label>
                                                            <div class="form-row">
                                                                <div class="col">
                                                                    <select class="form-control" name="birth_month">
                                                                        <option value="none">Select Month</option>
                                                                        <option value="1">Jan</option>
                                                                        <option value="2">Feb</option>
                                                                        <option value="3">Mar</option>
                                                                        <option value="4">Apr</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">Jun</option>
                                                                        <option value="7">Jul</option>
                                                                        <option value="8">Aug</option>
                                                                        <option value="9">Sep</option>
                                                                        <option value="10">Oct</option>
                                                                        <option value="11">Nov</option>
                                                                        <option value="12">Dec</option>
                                                                    </select></div>
                                                                <div class="col"><select class="form-control" name="birth_day">
                                                                        <option value="none">Select Day</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="16">16</option>
                                                                        <option value="17">17</option>
                                                                        <option value="18">18</option>
                                                                        <option value="19">19</option>
                                                                        <option value="20">20</option>
                                                                        <option value="21">21</option>
                                                                        <option value="22">22</option>
                                                                        <option value="23">23</option>
                                                                        <option value="24">24</option>
                                                                        <option value="25">25</option>
                                                                        <option value="26">26</option>
                                                                        <option value="27">27</option>
                                                                        <option value="28">28</option>
                                                                        <option value="29">29</option>
                                                                        <option value="30">30</option>
                                                                        <option value="31">31</option>
                                                                    </select></div>
                                                                <div class="col"><select class="form-control" name="birth_year">
                                                                        <option value="none">Select Year</option>
                                                                        <option value="1905">1905</option>
                                                                        <option value="1906">1906</option>
                                                                        <option value="1907">1907</option>
                                                                        <option value="1908">1908</option>
                                                                        <option value="1909">1909</option>
                                                                        <option value="1910">1910</option>
                                                                        <option value="1911">1911</option>
                                                                        <option value="1912">1912</option>
                                                                        <option value="1913">1913</option>
                                                                        <option value="1914">1914</option>
                                                                        <option value="1915">1915</option>
                                                                        <option value="1916">1916</option>
                                                                        <option value="1917">1917</option>
                                                                        <option value="1918">1918</option>
                                                                        <option value="1919">1919</option>
                                                                        <option value="1920">1920</option>
                                                                        <option value="1921">1921</option>
                                                                        <option value="1922">1922</option>
                                                                        <option value="1923">1923</option>
                                                                        <option value="1924">1924</option>
                                                                        <option value="1925">1925</option>
                                                                        <option value="1926">1926</option>
                                                                        <option value="1927">1927</option>
                                                                        <option value="1928">1928</option>
                                                                        <option value="1929">1929</option>
                                                                        <option value="1930">1930</option>
                                                                        <option value="1931">1931</option>
                                                                        <option value="1932">1932</option>
                                                                        <option value="1933">1933</option>
                                                                        <option value="1934">1934</option>
                                                                        <option value="1935">1935</option>
                                                                        <option value="1936">1936</option>
                                                                        <option value="1937">1937</option>
                                                                        <option value="1938">1938</option>
                                                                        <option value="1939">1939</option>
                                                                        <option value="1940">1940</option>
                                                                        <option value="1941">1941</option>
                                                                        <option value="1942">1942</option>
                                                                        <option value="1943">1943</option>
                                                                        <option value="1944">1944</option>
                                                                        <option value="1945">1945</option>
                                                                        <option value="1946">1946</option>
                                                                        <option value="1947">1947</option>
                                                                        <option value="1948">1948</option>
                                                                        <option value="1949">1949</option>
                                                                        <option value="1950">1950</option>
                                                                        <option value="1951">1951</option>
                                                                        <option value="1952">1952</option>
                                                                        <option value="1953">1953</option>
                                                                        <option value="1954">1954</option>
                                                                        <option value="1955">1955</option>
                                                                        <option value="1956">1956</option>
                                                                        <option value="1957">1957</option>
                                                                        <option value="1958">1958</option>
                                                                        <option value="1959">1959</option>
                                                                        <option value="1960">1960</option>
                                                                        <option value="1961">1961</option>
                                                                        <option value="1962">1962</option>
                                                                        <option value="1963">1963</option>
                                                                        <option value="1964">1964</option>
                                                                        <option value="1965">1965</option>
                                                                        <option value="1966">1966</option>
                                                                        <option value="1967">1967</option>
                                                                        <option value="1968">1968</option>
                                                                        <option value="1969">1969</option>
                                                                        <option value="1970">1970</option>
                                                                        <option value="1971">1971</option>
                                                                        <option value="1972">1972</option>
                                                                        <option value="1973">1973</option>
                                                                        <option value="1974">1974</option>
                                                                        <option value="1975">1975</option>
                                                                        <option value="1976">1976</option>
                                                                        <option value="1977">1977</option>
                                                                        <option value="1978">1978</option>
                                                                        <option value="1979">1979</option>
                                                                        <option value="1980">1980</option>
                                                                        <option value="1981">1981</option>
                                                                        <option value="1982">1982</option>
                                                                        <option value="1983">1983</option>
                                                                        <option value="1984">1984</option>
                                                                        <option value="1985">1985</option>
                                                                        <option value="1986">1986</option>
                                                                        <option value="1987">1987</option>
                                                                        <option value="1988">1988</option>
                                                                        <option value="1989">1989</option>
                                                                        <option value="1990">1990</option>
                                                                        <option value="1991">1991</option>
                                                                        <option value="1992">1992</option>
                                                                        <option value="1993">1993</option>
                                                                        <option value="1994">1994</option>
                                                                        <option value="1995">1995</option>
                                                                        <option value="1996">1996</option>
                                                                        <option value="1997">1997</option>
                                                                        <option value="1998">1998</option>
                                                                        <option value="1999">1999</option>
                                                                        <option value="2000">2000</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2015">2015</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label class="form-control-label">About
                                                                Me</label> <textarea class="form-control"
                                                                                     name="biography"></textarea></div>
                                                        <div class="alert alert-success mb0 x-hidden"></div>
                                                        <div class="alert alert-danger mb0 x-hidden"></div>
                                                    </div>
                                                    <div class="card-footer text-right">
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="info mx-5">
                            <div class="row no-gutters mb-2">
                                <div class="col">
                                    <div class="border mr-2 inner1 innerinfo rounded px-3 py-4 h-100">
                                        <div class="d-flex"><span><i class="fas fa-user mr-2"></i></span>
                                            <p class="small mb-1"> Works at Lahore</p>
                                        </div>
                                        <div class="d-flex"><span><i class="fas fa-map-marker-alt mr-2"></i></span>
                                            <p class="small mb-1">Lives in Lahore</p>
                                        </div>
                                        <div class="d-flex"><span><i class="fas fa-map-marker-alt mr-2"></i></span>
                                            <p class="small mb-1">From Lahore</p>
                                        </div>
                                        <div class="d-flex"><span><i class="fas fa-birthday-cake mr-2"></i></span>
                                            <p class="small mb-1">Born on 01 Jan, 1970</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border  innerinfo rounded px-3 pt-4 pb-3">
                                        <div class="d-flex"><span><i class="fab fa-facebook-f"></i></span>
                                            <p class="mb-1">

                                                -
                                            </p></div>
                                        <div class="d-flex"><span><i class="fab fa-twitter"></i></span>
                                            <p class="mb-1">

                                                -
                                            </p></div>
                                        <div class="d-flex"><span><i class="fas fa-phone-alt"></i></span>
                                            <p class="mb-1">

                                                -
                                            </p></div>
                                        <div class="d-flex"><span><i class="fas fa-globe"></i></span>
                                            <p class="mb-1">

                                                -
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row stars-comm p-3 bg-white mx-1">
                    <div class="col-md-3 col-6 text-center"><span><i class="fas fa-star"></i></span>
                        <span>13 stars</span></div>
                    <div class="col-md-3 col-6 text-center"><span><i class="fas fa-comments"></i></span> <span>{{Auth::user()->comments->count()}} comments</span>
                    </div>
                    <div class="col-md-3 col-6 text-center"><span><i class="fas fa-users"></i></span> <span><a
                                href="http://fyrestream.com//danishtest/followings">Following</a></span></div>
                    <div class="col-md-3 col-6 text-center"><span><i class="fas fa-users"></i></span> <span><a
                                href="http://fyrestream.com//danishtest/followers">Followers</a></span></div>
                </div>
            </div>

            <div class="section2 my-3 bg-white p-4 rounded">
                <div class="row">
                    <div class="col text-center">
                        <a href="" class="profileTab active">Spotlight Wall</a>
                    </div>
                    <div class="col text-center">
                        <a href="http://fyrestream.com//danishtest/friends" class="profileTab">
                            Friends
                            <span>
                                <i class="fas fa-users" style="color: #ff815e;"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a href="http://fyrestream.com//danishtest/photos" class="profileTab">
                            Photos
                            <span>
                                <i class="fas fa-images" style="color: #ff815e;"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a href="http://fyrestream.com//danishtest/videos" class="profileTab">
                            Videos
                            <span>
                                <i class="fas fa-video" style="color: #ff815e;"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col text-center check">
                        <a href="http://fyrestream.com//market" class="profileTab">
                            Marketplace Posts
                            <span>
                                <i class="fas fa-shopping-bag" style="color: #ff815e;"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section3">
                <div class="d-flex">
                    <div class="post flex-grow-1 pt-3 px-3 mr-4">
                        <form action="#" class="">
                            <div class="create-post-div">
                                <div class="d-flex">
                                    <div class="p-2 text-warning"><img
                                            src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png"
                                            style="width: 35px;height: 35px;border-radius: 50%;" alt="Danish"></div>
                                    <div class="flex-grow-1"><input type="text" class="write-post w-100"
                                                                    placeholder="What do you want to share now?"
                                                                    data-toggle="modal" data-target="#exampleModalPost">
                                    </div>
                                    <div class="p-2 create-post-side-btn"><i class="fas fa-camera"></i> <i
                                            class="far fa-smile"></i></div>
                                </div>
                            </div>
                        </form>
                        <div class="modal status-modal fade" id="exampleModalPost" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content create-post-box create border-0">
                                    <div class="d-flex align-items-start justify-content-between"><h4
                                            style="font-size:1.2rem;">Create Your Post</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                style="font-size:1.2rem;"><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="x-form publisher" data-handle="me">
                                        <div class="publisher-loader">
                                            <div class="loader loader_small"></div>
                                        </div>
                                        <div class="publisher-message" style="display:block !important;"><img
                                                class="publisher-avatar"
                                                src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png">
                                            <div class="colored-text-wrapper"><textarea dir="auto"
                                                                                        class="js_autosize js_mention js_publisher-scraper"
                                                                                        data-init-placeholder="What is on your mind? #Hashtag.. @Mention.. Link.."
                                                                                        placeholder="What is on your mind? #Hashtag.. @Mention.. Link.."
                                                                                        style="overflow: hidden; overflow-wrap: break-word;"></textarea>
                                            </div>
                                            <div class="publisher-emojis">
                                                <div class="position-relative"><span class="js_emoji-menu-toggle"
                                                                                     data-toggle="tooltip"
                                                                                     data-placement="top"
                                                                                     title="Insert an emoji"> <i
                                                            class="far fa-smile-wink fa-lg"></i> </span></div>
                                            </div>
                                        </div>
                                        <div class="" style="display:block !important;">
                                            <div class="publisher-attachments attachments clearfix x-hidden"></div>
                                            <div class="publisher-meta" data-meta="album">
                                                <div class="svg-container " style="width:16px; height:16px; ">
                                                    <svg height="469pt" viewBox="0 0 469 469.33336" width="469pt"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m320.167969 149.332031v-106.664062c0-23.566407-19.105469-42.667969-42.667969-42.667969h-234.667969c-23.5625 0-42.664062 19.101562-42.664062 42.667969v320h277.332031c23.5625 0 42.667969-19.105469 42.667969-42.667969zm0 0"
                                                            fill="#f56054"></path>
                                                        <path
                                                            d="m320.167969 320h-21.335938v-277.332031c-.011719-11.777344-9.554687-21.324219-21.332031-21.335938h-234.667969v-21.332031h234.667969c23.554688.0273438 42.640625 19.113281 42.667969 42.667969zm0 0"
                                                            fill="#f78980"></path>
                                                        <path d="m85.5 42.667969h256v341.332031h-256zm0 0"
                                                              fill="#cfdbf2"></path>
                                                        <path d="m106.832031 64h213.335938v298.667969h-213.335938zm0 0"
                                                              fill="#afc3e9"></path>
                                                        <path d="m213.5 85.332031h256v341.335938h-256zm0 0"
                                                              fill="#e6ecf8"></path>
                                                        <path
                                                            d="m234.832031 106.667969h213.335938v298.664062h-213.335938zm0 0"
                                                            fill="#0053b1"></path>
                                                        <path
                                                            d="m405.5 309.332031c0 29.457031-23.878906 53.335938-53.332031 53.335938-29.457031 0-53.335938-23.878907-53.335938-53.335938 0-29.453125 23.878907-53.332031 53.335938-53.332031 29.453125 0 53.332031 23.878906 53.332031 53.332031zm0 0"
                                                            fill="#cfdbf2"></path>
                                                        <path
                                                            d="m448.167969 277.332031c-70.695313 0-128 57.308594-128 128h128zm0 0"
                                                            fill="#669ede"></path>
                                                        <path
                                                            d="m256.167969 161.3125c0-19.578125-13.324219-36.644531-32.320313-41.390625l-207.523437-51.882813c-9.496094-2.375-16.15625-10.90625-16.15625-20.695312v327.238281c0 18.363281 11.75 34.667969 29.171875 40.476563l179 52.753906c11.273437 3.324219 23.457031 1.132812 32.871094-5.90625 9.414062-7.039062 14.957031-18.105469 14.957031-29.859375zm0 0"
                                                            fill="#f78980"></path>
                                                        <path
                                                            d="m29.339844 415.058594 13.492187 3.976562v-344.367187l-26.507812-6.628907c-9.496094-2.375-16.15625-10.90625-16.15625-20.695312v327.238281c0 18.363281 11.75 34.667969 29.171875 40.476563zm0 0"
                                                            fill="#f6766b"></path>
                                                        <path d="m21.5 106.667969h21.332031v277.332031h-21.332031zm0 0"
                                                              fill="#f56054"></path>
                                                        <path d="m42.832031 128h21.335938v277.332031h-21.335938zm0 0"
                                                              fill="#f9a29b"></path>
                                                        <path
                                                            d="m218.875 469.332031h-5.375v-21.332031h5.375c8.808594-.011719 15.945312-7.148438 15.957031-15.957031v-270.730469c.007813-9.796875-6.660156-18.339844-16.164062-20.707031l-186.1875-46.679688c-19-4.734375-32.328125-21.804687-32.3125-41.382812v-9.875c.027343-23.554688 19.113281-42.6406252 42.664062-42.667969v21.332031c-11.777343.011719-21.320312 9.558594-21.332031 21.335938v9.875c-.007812 9.792969 6.664062 18.332031 16.167969 20.695312l186.1875 46.679688c19 4.738281 32.324219 21.8125 32.3125 41.394531v270.730469c-.023438 20.585937-16.707031 37.265625-37.292969 37.289062zm0 0"
                                                            fill="#f9a29b"></path>
                                                        <path
                                                            d="m426.832031 192c0 11.78125-9.550781 21.332031-21.332031 21.332031s-21.332031-9.550781-21.332031-21.332031 9.550781-21.332031 21.332031-21.332031 21.332031 9.550781 21.332031 21.332031zm0 0"
                                                            fill="#f78980"></path>
                                                        <g fill="#cfdbf2">
                                                            <path
                                                                d="m298.832031 224c0 5.890625-4.773437 10.667969-10.664062 10.667969s-10.667969-4.777344-10.667969-10.667969 4.777344-10.667969 10.667969-10.667969 10.664062 4.777344 10.664062 10.667969zm0 0"></path>
                                                            <path
                                                                d="m341.5 160c0 5.890625-4.777344 10.667969-10.667969 10.667969s-10.664062-4.777344-10.664062-10.667969 4.773437-10.667969 10.664062-10.667969 10.667969 4.777344 10.667969 10.667969zm0 0"></path>
                                                            <path
                                                                d="m201.039062 289.777344c-14-13.984375-34.09375-16.5625-44.882812-5.761719s-8.191406 30.890625 5.804688 44.875c14 13.980469 34.09375 16.5625 44.882812 5.761719 10.789062-10.800782 8.191406-30.890625-5.804688-44.875zm0 0"></path>
                                                        </g>
                                                        <path
                                                            d="m183.078125 307.746094c-9.648437-9.640625-22.949219-11.96875-29.714844-5.203125-6.761719 6.769531-4.421875 20.070312 5.226563 29.710937 9.644531 9.640625 22.949218 11.96875 29.710937 5.203125 6.765625-6.769531 4.425781-20.070312-5.222656-29.710937zm0 0"
                                                            fill="#afc3e9"></path>
                                                    </svg>
                                                </div>
                                                <input type="text" placeholder="Album title"></div>
                                            <div class="publisher-meta" data-meta="feelings">
                                                <div id="feelings-menu-toggle" data-init-text="What are you doing?">What
                                                    are you doing?
                                                </div>
                                                <div id="feelings-data" style="display: none"><input type="text"
                                                                                                     class="no-icon"
                                                                                                     placeholder="What are you doing?">
                                                    <span></span></div>
                                                <div id="feelings-menu" class="dropdown-menu dropdown-widget">
                                                    <div class="dropdown-widget-body ptb5 custom-scrollbar">
                                                        <div class="js_scroller"
                                                             style="overflow-y: auto; height: 180px;">
                                                            <ul class="feelings-list">
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Feeling"
                                                                    data-placeholder="How are you feeling?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-smile"></i></div>
                                                                    <div class="data">
                                                                        Feeling
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Listening To"
                                                                    data-placeholder="What are you listening to?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-headphones"></i></div>
                                                                    <div class="data">
                                                                        Listening To
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Watching"
                                                                    data-placeholder="What are you watching?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-eyeglasses"></i></div>
                                                                    <div class="data">
                                                                        Watching
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Playing"
                                                                    data-placeholder="What are you playing?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-video-game"></i></div>
                                                                    <div class="data">
                                                                        Playing
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Eating"
                                                                    data-placeholder="What are you eating?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-cake"></i></div>
                                                                    <div class="data">
                                                                        Eating
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Drinking"
                                                                    data-placeholder="What are you drinking?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-tropical-drink"></i>
                                                                    </div>
                                                                    <div class="data">
                                                                        Drinking
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Traveling To"
                                                                    data-placeholder="Where are you going?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-airplane"></i></div>
                                                                    <div class="data">
                                                                        Traveling To
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Reading"
                                                                    data-placeholder="What are you reading?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-books"></i></div>
                                                                    <div class="data">
                                                                        Reading
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Attending"
                                                                    data-placeholder="What are you attending?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-calendar"></i></div>
                                                                    <div class="data">
                                                                        Attending
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Celebrating"
                                                                    data-placeholder="What are you celebrating?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-tada"></i></div>
                                                                    <div class="data">
                                                                        Celebrating
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-add"
                                                                    data-action="Looking For"
                                                                    data-placeholder="What are you looking for?">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-mag-right"></i></div>
                                                                    <div class="data">
                                                                        Looking For
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="feelings-types" class="dropdown-menu dropdown-widget">
                                                    <div class="dropdown-widget-body ptb5 custom-scrollbar">
                                                        <div class="js_scroller"
                                                             style="overflow-y: auto; height: 180px;">
                                                            <ul class="feelings-list">
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Happy" data-icon="smile">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-smile"></i></div>
                                                                    <div class="data">
                                                                        Happy
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Loved" data-icon="heart-eyes">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-heart-eyes"></i></div>
                                                                    <div class="data">
                                                                        Loved
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Satisfied" data-icon="satisfied">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-satisfied"></i></div>
                                                                    <div class="data">
                                                                        Satisfied
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Strong" data-icon="muscle">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-muscle"></i></div>
                                                                    <div class="data">
                                                                        Strong
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Sad" data-icon="disappointed">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-disappointed"></i>
                                                                    </div>
                                                                    <div class="data">
                                                                        Sad
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Crazy"
                                                                    data-icon="stuck-out-tongue-winking-eye">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-stuck-out-tongue-winking-eye"></i>
                                                                    </div>
                                                                    <div class="data">
                                                                        Crazy
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Tired" data-icon="sweat">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-sweat"></i></div>
                                                                    <div class="data">
                                                                        Tired
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Sleepy" data-icon="sleeping">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-sleeping"></i></div>
                                                                    <div class="data">
                                                                        Sleepy
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Confused" data-icon="confused">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-confused"></i></div>
                                                                    <div class="data">
                                                                        Confused
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Worried" data-icon="worried">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-worried"></i></div>
                                                                    <div class="data">
                                                                        Worried
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Angry" data-icon="angry">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-angry"></i></div>
                                                                    <div class="data">
                                                                        Angry
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Annoyed" data-icon="rage">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-rage"></i></div>
                                                                    <div class="data">
                                                                        Annoyed
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Shocked" data-icon="open-mouth">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-open-mouth"></i></div>
                                                                    <div class="data">
                                                                        Shocked
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Down" data-icon="pensive">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-pensive"></i></div>
                                                                    <div class="data">
                                                                        Down
                                                                    </div>
                                                                </li>
                                                                <li class="feeling-item js_feelings-type"
                                                                    data-type="Confounded" data-icon="confounded">
                                                                    <div class="icon"><i
                                                                            class="twa twa-3x twa-confounded"></i></div>
                                                                    <div class="data">
                                                                        Confounded
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="publisher-meta" data-meta="location">
                                                <div class="svg-container " style="width:16px; height:16px; ">
                                                    <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 511.999 511.999"
                                                         style="enable-background:new 0 0 511.999 511.999;"
                                                         xml:space="preserve"> <g>
                                                            <path style="fill:#44C868;" d="M511.879,475.685l-40.224-221.611c-0.401-2.212-1.773-4.128-3.739-5.221l-101.242-56.31
	c-1.314-0.732-2.787-1.023-4.234-0.911l18.419,237.608l-0.617,0.276l121.164,54.357c0.986,0.441,2.034,0.659,3.077,0.659
	c1.651,0,3.287-0.543,4.632-1.596C511.313,481.22,512.376,478.428,511.879,475.685z"></path>
                                                            <path style="fill:#44C868;" d="M256,246.375l-103.545-53.931c-1.241-0.647-2.617-0.911-3.972-0.82
	c0.359-0.022,0.72-0.02,1.078,0.008l-18.419,237.608l121.781,54.634c0.983,0.44,2.032,0.659,3.077,0.659l0,0V246.375z"></path>
                                                        </g>
                                                        <g>
                                                            <path style="fill:#4CE166;" d="M149.56,191.633c-1.447-0.112-2.92,0.179-4.234,0.91l-101.243,56.31
	c-1.966,1.093-3.338,3.008-3.739,5.221L0.121,475.685c-0.498,2.742,0.566,5.534,2.763,7.252c1.347,1.053,2.982,1.596,4.632,1.596
	c1.043,0,2.092-0.217,3.077-0.659l120.504-54.061L149.56,191.633z"></path>
                                                            <path style="fill:#4CE166;" d="M362.439,191.628c-0.996,0.077-1.981,0.342-2.894,0.818L256,246.376v238.158c0,0,0,0,0.001,0
	c1.045,0,2.095-0.218,3.077-0.659l121.781-54.634L362.439,191.628z"></path>
                                                        </g>
                                                        <polygon style="fill:#FFDB56;"
                                                                 points="28.154,321.233 19.983,366.252 140.977,302.346 143.786,266.107 144.252,260.097 "></polygon>
                                                        <path style="fill:#A8EEFC;" d="M142.066,288.294l-1.089,14.052L19.983,366.252L0.121,475.685c-0.498,2.742,0.566,5.534,2.763,7.252
c1.347,1.053,2.982,1.596,4.632,1.596c1.043,0,2.092-0.217,3.077-0.659l120.504-54.061L142.066,288.294L142.066,288.294z"></path>
                                                        <g>
                                                            <polygon style="fill:#FFBB24;" points="256.03,276.08 144.252,260.097 140.977,302.346 256,477.025 256,413.507 187.363,305.429
	256.03,313.642 	"></polygon>
                                                            <polygon style="fill:#FFBB24;"
                                                                     points="459.946,244.421 411.311,217.37 365.269,228.128 365.845,235.564 368.119,264.898 	"></polygon>
                                                        </g>
                                                        <polygon style="fill:#FFDB56;" points="372.202,317.576 367.842,261.327 367.842,261.327 365.269,228.128 256.03,276.08
256.03,313.642 327.386,282.612 "></polygon>
                                                        <path style="fill:#FFBB24;" d="M511.879,475.685l-10.103-55.666L368.119,264.898l4.084,52.678l137.07,165.221
C511.357,481.07,512.364,478.358,511.879,475.685z"></path>
                                                        <path style="fill:#FF4A4A;" d="M256.481,27.465c-57.963,0-105.12,47.118-105.12,105.034c0,35.826,17.009,74.29,50.556,114.322
c24.639,29.403,48.943,48.314,49.966,49.105c1.354,1.047,2.976,1.57,4.599,1.57c1.622,0,3.245-0.523,4.599-1.57
c1.022-0.791,25.327-19.702,49.966-49.105c33.547-40.032,50.556-78.495,50.556-114.322
C361.601,74.583,314.444,27.465,256.481,27.465z M295.411,132.498c0,21.482-17.43,38.898-38.93,38.898
c-21.5,0-38.93-17.415-38.93-38.898s17.43-38.898,38.93-38.898C277.981,93.6,295.411,111.016,295.411,132.498z"></path>
                                                        <path style="fill:#E7343F;" d="M256.481,27.465c-4.594,0-9.119,0.298-13.559,0.872c51.583,6.667,91.562,50.836,91.562,104.162
c0,35.826-17.009,74.29-50.556,114.322c-15.845,18.908-31.54,33.467-41.005,41.669c5.254,4.552,8.596,7.154,8.96,7.436
c1.354,1.047,2.976,1.57,4.599,1.57c1.622,0,3.245-0.523,4.599-1.57c1.022-0.791,25.327-19.702,49.966-49.105
c33.547-40.032,50.556-78.495,50.556-114.322C361.601,74.583,314.444,27.465,256.481,27.465z"></path>
                                                        <path style="fill:#FFDB56;" d="M259.078,483.874l45.285-20.316L256,413.507v71.026c0,0,0,0,0.001,0
C257.046,484.533,258.095,484.316,259.078,483.874z"></path>
                                                        <g>
                                                            <path style="fill:#1EA4E9;" d="M471.654,254.074c-0.401-2.212-1.773-4.128-3.739-5.221l-7.97-4.433l-91.827,20.477l0,0
	l133.656,155.121L471.654,254.074z"></path>
                                                            <path style="fill:#1EA4E9;" d="M255.999,484.533C256,484.533,256,484.533,255.999,484.533v-7.508L140.977,302.346l-9.837,126.895
	l121.781,54.634C253.904,484.316,254.953,484.533,255.999,484.533z"></path>
                                                        </g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g>
                                                        <g></g> </svg>
                                                </div>
                                                <input class="js_geocomplete" type="text" placeholder="Where are you?">
                                            </div>
                                            <div class="publisher-meta" data-meta="colored">
                                                <div class="colored-pattern-item js_publisher-pattern" data-id="1"
                                                     data-type="image" data-background-image="patterns/1.jpg"
                                                     data-background-color-1="" data-background-color-2=""
                                                     data-text-color="#FFFFFF"
                                                     style="background-image: url(http://fyrestream.com//content/uploads/patterns/1.jpg)"></div>
                                                <div class="colored-pattern-item js_publisher-pattern" data-id="2"
                                                     data-type="image" data-background-image="patterns/2.jpg"
                                                     data-background-color-1="" data-background-color-2=""
                                                     data-text-color="#FFFFFF"
                                                     style="background-image: url(http://fyrestream.com//content/uploads/patterns/2.jpg)"></div>
                                                <div class="colored-pattern-item js_publisher-pattern" data-id="3"
                                                     data-type="image" data-background-image="patterns/3.jpg"
                                                     data-background-color-1="" data-background-color-2=""
                                                     data-text-color="#FFFFFF"
                                                     style="background-image: url(http://fyrestream.com//content/uploads/patterns/3.jpg)"></div>
                                                <div class="colored-pattern-item js_publisher-pattern" data-id="4"
                                                     data-type="image" data-background-image="patterns/4.jpg"
                                                     data-background-color-1="" data-background-color-2=""
                                                     data-text-color="#000000"
                                                     style="background-image: url(http://fyrestream.com//content/uploads/patterns/4.jpg)"></div>
                                                <div class="colored-pattern-item js_publisher-pattern" data-id="5"
                                                     data-type="image" data-background-image="patterns/5.jpg"
                                                     data-background-color-1="" data-background-color-2=""
                                                     data-text-color="#FFFFFF"
                                                     style="background-image: url(http://fyrestream.com//content/uploads/patterns/5.jpg)"></div>
                                                <div class="colored-pattern-item js_publisher-pattern" data-id="6"
                                                     data-type="color" data-background-image=""
                                                     data-background-color-1="#FF00FF" data-background-color-2="#030355"
                                                     data-text-color="#FFF300"
                                                     style="background-image: linear-gradient(45deg, #FF00FF, #030355);"></div>
                                                <div class="colored-pattern-item js_publisher-pattern" data-id="7"
                                                     data-type="color" data-background-image=""
                                                     data-background-color-1="#FF003D" data-background-color-2="#D73A3A"
                                                     data-text-color="#FFFFFF"
                                                     style="background-image: linear-gradient(45deg, #FF003D, #D73A3A);"></div>
                                            </div>
                                            <div class="publisher-meta" data-meta="voice_notes">
                                                <div class="voice-recording-wrapper" data-handle="publisher">
                                                    <div class="x-hidden js_voice-processing-message">
                                                        <div class="svg-container static mr5"
                                                             style="width:16px; height:16px; ">
                                                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                            <svg version="1.1" id="Capa_1"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                 y="0px" viewBox="0 0 490.667 490.667"
                                                                 style="enable-background:new 0 0 490.667 490.667;"
                                                                 xml:space="preserve"> <path style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333
s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"></path>
                                                                <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533
c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584
c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2
c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"></path>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g> </svg>
                                                        </div>
                                                        Processing<span class="loading-dots"></span></div>
                                                    <div class="x-hidden js_voice-success-message">
                                                        <div class="svg-container static mr5"
                                                             style="width:16px; height:16px; ">
                                                            <svg height="512pt" viewBox="0 -21 512.00533 512"
                                                                 width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                                    fill="#4caf50"></path>
                                                                <path
                                                                    d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                                    fill="#2196f3"></path>
                                                            </svg>
                                                        </div>
                                                        Voice note recorded successfully
                                                        <div class="float-right">
                                                            <button type="button" class="close js_voice-remove">
                                                                <span>×</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="btn-voice-start js_voice-start"><i
                                                            class="fas fa-microphone mr5"></i>Record
                                                    </div>
                                                    <div class="btn-voice-stop js_voice-stop" style="display: none"><i
                                                            class="far fa-stop-circle mr5"></i>Recording <span
                                                            class="js_voice-timer">00:00</span></div>
                                                </div>
                                            </div>
                                            <div class="publisher-meta" data-meta="gif">
                                                <div class="svg-container " style="width:16px; height:16px; ">
                                                    <svg id="Filled" height="512" viewBox="0 0 512 512" width="512"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m392 488h-272a48 48 0 0 1 -48-48v-368a48 48 0 0 1 48-48h224l96 96v320a48 48 0 0 1 -48 48z"
                                                            fill="#8690fa"></path>
                                                        <circle cx="256" cy="200" fill="#fff" r="96"></circle>
                                                        <path
                                                            d="m72 360h368a0 0 0 0 1 0 0v80a48 48 0 0 1 -48 48h-272a48 48 0 0 1 -48-48v-80a0 0 0 0 1 0 0z"
                                                            fill="#cfd2fc"></path>
                                                        <path d="m440 120h-48a48 48 0 0 1 -48-48v-48z"
                                                              fill="#cfd2fc"></path>
                                                        <path d="m232 232v-64l64 32z" fill="#5153ff"></path>
                                                        <path
                                                            d="m349.657 18.343a8 8 0 0 0 -5.657-2.343h-224a56.063 56.063 0 0 0 -56 56v368a56.063 56.063 0 0 0 56 56h272a56.063 56.063 0 0 0 56-56v-320a8 8 0 0 0 -2.343-5.657zm2.343 24.97 68.687 68.687h-28.687a40.045 40.045 0 0 1 -40-40zm-232-11.313h216v40a56.063 56.063 0 0 0 56 56h40v224h-352v-280a40.045 40.045 0 0 1 40-40zm272 448h-272a40.045 40.045 0 0 1 -40-40v-72h352v72a40.045 40.045 0 0 1 -40 40z"></path>
                                                        <path
                                                            d="m216 416h-16a8 8 0 0 0 0 16h7.049c-2.252 9.217-8.236 16-15.049 16-8.673 0-16-10.991-16-24s7.327-24 16-24a10.71 10.71 0 0 1 4.589 1.057 8 8 0 0 0 6.822-14.473 26.6 26.6 0 0 0 -11.411-2.584c-17.645 0-32 17.944-32 40s14.355 40 32 40 32-17.944 32-40a8 8 0 0 0 -8-8z"></path>
                                                        <path
                                                            d="m280 400a8 8 0 0 0 0-16h-32a8 8 0 0 0 0 16h8v48h-8a8 8 0 0 0 0 16h32a8 8 0 0 0 0-16h-8v-48z"></path>
                                                        <path
                                                            d="m344 384h-32a8 8 0 0 0 -8 8v64a8 8 0 0 0 16 0v-24h8a8 8 0 0 0 0-16h-8v-16h24a8 8 0 0 0 0-16z"></path>
                                                        <path
                                                            d="m178.765 142.42a8 8 0 0 0 11.292-.692 88.911 88.911 0 0 1 10.205-9.829 8 8 0 0 0 -10.145-12.374 105.136 105.136 0 0 0 -12.045 11.6 8 8 0 0 0 .693 11.295z"></path>
                                                        <path
                                                            d="m201.122 279.184a8 8 0 0 0 2.925 10.929 104.005 104.005 0 0 0 15.129 7.178 8 8 0 0 0 5.666-14.963 87.887 87.887 0 0 1 -12.791-6.07 8 8 0 0 0 -10.929 2.926z"></path>
                                                        <path
                                                            d="m221.819 118.266a7.971 7.971 0 0 0 2.848-.527 87.421 87.421 0 0 1 13.585-3.95 8 8 0 1 0 -3.207-15.675 103.393 103.393 0 0 0 -16.077 4.675 8 8 0 0 0 2.851 15.477z"></path>
                                                        <path
                                                            d="m181.648 247.1a8 8 0 1 0 -13.507 8.574 104.5 104.5 0 0 0 10.067 13.357 8 8 0 1 0 11.965-10.631 88.639 88.639 0 0 1 -8.525-11.3z"></path>
                                                        <path
                                                            d="m160.842 184.9a7.99 7.99 0 0 0 9.671-5.872 87.512 87.512 0 0 1 4.466-13.434 8 8 0 0 0 -14.725-6.261 103.59 103.59 0 0 0 -5.284 15.9 8 8 0 0 0 5.872 9.667z"></path>
                                                        <path
                                                            d="m155.021 224.984a8 8 0 0 0 15.536-3.831 88.218 88.218 0 0 1 -2.27-13.973 8 8 0 1 0 -15.947 1.288 104.185 104.185 0 0 0 2.681 16.516z"></path>
                                                        <path
                                                            d="m266.47 112.616a87.821 87.821 0 0 1 13.873 2.793 8 8 0 0 0 4.418-15.378 103.811 103.811 0 0 0 -16.408-3.3 8 8 0 0 0 -1.883 15.889z"></path>
                                                        <path
                                                            d="m266.665 287.361a89.709 89.709 0 0 1 -14.162.571 8 8 0 1 0 -.623 15.988c1.365.053 2.751.08 4.12.08a105.523 105.523 0 0 0 12.583-.754 8 8 0 0 0 -1.918-15.885z"></path>
                                                        <path
                                                            d="m339.438 171.951a8 8 0 0 0 15.166-5.1 103.911 103.911 0 0 0 -6.6-15.385 8 8 0 0 0 -14.147 7.476 87.753 87.753 0 0 1 5.581 13.009z"></path>
                                                        <path
                                                            d="m306.008 272.421a88.161 88.161 0 0 1 -12.246 7.09 8 8 0 1 0 6.873 14.448 104.1 104.1 0 0 0 14.478-8.382 8 8 0 1 0 -9.105-13.156z"></path>
                                                        <path
                                                            d="m344.751 237.527a8 8 0 0 0 -10.8 3.358 88.437 88.437 0 0 1 -7.579 11.966 8 8 0 1 0 12.785 9.619 104.3 104.3 0 0 0 8.956-14.139 8 8 0 0 0 -3.362-10.804z"></path>
                                                        <path
                                                            d="m344 199.786v.214a89.065 89.065 0 0 1 -1.126 14.123 8 8 0 1 0 15.8 2.544 105.119 105.119 0 0 0 1.326-16.667c0-.036 0-.073 0-.109v-.1a8 8 0 0 0 -16 0z"></path>
                                                        <path
                                                            d="m305.854 127.473a88.855 88.855 0 0 1 10.986 8.945 8 8 0 0 0 11.06-11.558 104.765 104.765 0 0 0 -12.97-10.56 8 8 0 0 0 -9.076 13.177z"></path>
                                                        <path
                                                            d="m227.794 161.2a8 8 0 0 0 -3.794 6.8v64a8 8 0 0 0 11.578 7.155l64-32a8 8 0 0 0 0-14.31l-64-32a8 8 0 0 0 -7.784.355zm12.206 19.744 38.111 19.056-38.111 19.056z"></path>
                                                    </svg>
                                                </div>
                                                <input class="js_publisher-gif-search" type="text"
                                                       placeholder="Search GIFs"></div>
                                            <div class="publisher-meta" data-meta="poll">
                                                <div class="svg-container " style="width:16px; height:16px; ">
                                                    <svg height="512pt" viewBox="0 0 512 512" width="512pt"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0"
                                                            fill="#2196f3"></path>
                                                        <path
                                                            d="m368 277.332031h-90.667969v90.667969c0 11.777344-9.554687 21.332031-21.332031 21.332031s-21.332031-9.554687-21.332031-21.332031v-90.667969h-90.667969c-11.777344 0-21.332031-9.554687-21.332031-21.332031s9.554687-21.332031 21.332031-21.332031h90.667969v-90.667969c0-11.777344 9.554687-21.332031 21.332031-21.332031s21.332031 9.554687 21.332031 21.332031v90.667969h90.667969c11.777344 0 21.332031 9.554687 21.332031 21.332031s-9.554687 21.332031-21.332031 21.332031zm0 0"
                                                            fill="#fafafa"></path>
                                                    </svg>
                                                </div>
                                                <input type="text" placeholder="Add an option..."></div>
                                            <div class="publisher-meta" data-meta="poll">
                                                <div class="svg-container " style="width:16px; height:16px; ">
                                                    <svg height="512pt" viewBox="0 0 512 512" width="512pt"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0"
                                                            fill="#2196f3"></path>
                                                        <path
                                                            d="m368 277.332031h-90.667969v90.667969c0 11.777344-9.554687 21.332031-21.332031 21.332031s-21.332031-9.554687-21.332031-21.332031v-90.667969h-90.667969c-11.777344 0-21.332031-9.554687-21.332031-21.332031s9.554687-21.332031 21.332031-21.332031h90.667969v-90.667969c0-11.777344 9.554687-21.332031 21.332031-21.332031s21.332031 9.554687 21.332031 21.332031v90.667969h90.667969c11.777344 0 21.332031 9.554687 21.332031 21.332031s-9.554687 21.332031-21.332031 21.332031zm0 0"
                                                            fill="#fafafa"></path>
                                                    </svg>
                                                </div>
                                                <input type="text" placeholder="Add an option..."></div>
                                            <div class="publisher-meta" data-meta="video">
                                                <div class="svg-container static mr5" style="width:16px; height:16px; ">
                                                    <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                            fill="#4caf50"></path>
                                                        <path
                                                            d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                            fill="#2196f3"></path>
                                                    </svg>
                                                </div>
                                                Video uploaded successfully
                                                <div class="float-right">
                                                    <button type="button"
                                                            class="close js_publisher-attachment-file-remover"
                                                            data-type="video"><span>×</span></button>
                                                </div>
                                            </div>
                                            <div class="publisher-custom-thumbnail">
                                                Custom Video Thumbnail
                                                <div class="x-image">
                                                    <button type="button" class="close x-hidden js_x-image-remover"
                                                            title="Remove"><span>×</span></button>
                                                    <div class="x-image-loader">
                                                        <div class="progress x-progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="0" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <form class="x-uploader"
                                                          action="http://fyrestream.com//includes/ajax/data/upload.php"
                                                          method="post" enctype="multipart/form-data"><input name="file"
                                                                                                             type="file"
                                                                                                             accept=".png, .gif, .jpeg, .jpg"><input
                                                            type="hidden" name="secret"
                                                            value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><i
                                                            class="fa fa-camera fa-lg js_x-uploader"
                                                            data-handle="x-image"></i></form>
                                                    <input type="hidden" class="js_x-image-input" name="video_thumbnail"
                                                           value=""></div>
                                            </div>
                                            <div class="publisher-meta" data-meta="audio">
                                                <div class="svg-container static mr5" style="width:16px; height:16px; ">
                                                    <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                            fill="#4caf50"></path>
                                                        <path
                                                            d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                            fill="#2196f3"></path>
                                                    </svg>
                                                </div>
                                                Audio uploaded successfully
                                                <div class="float-right">
                                                    <button type="button"
                                                            class="close js_publisher-attachment-file-remover"
                                                            data-type="audio"><span>×</span></button>
                                                </div>
                                            </div>
                                            <div class="publisher-meta" data-meta="file">
                                                <div class="svg-container static mr5" style="width:16px; height:16px; ">
                                                    <svg height="512pt" viewBox="0 -21 512.00533 512" width="512pt"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                            fill="#4caf50"></path>
                                                        <path
                                                            d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                            fill="#2196f3"></path>
                                                    </svg>
                                                </div>
                                                File uploaded successfully
                                                <div class="float-right">
                                                    <button type="button"
                                                            class="close js_publisher-attachment-file-remover"
                                                            data-type="file"><span>×</span></button>
                                                </div>
                                            </div>
                                            <div class="publisher-scraper"></div>
                                            <div class="publisher-tools-tabs">
                                                <ul class="row">
                                                    <li class="col-md-6">
                                                        <div class="publisher-tools-tab attach js_publisher-tab"
                                                             data-tab="photos">
                                                            <form class="x-uploader"
                                                                  action="http://fyrestream.com//includes/ajax/data/upload.php"
                                                                  method="post" enctype="multipart/form-data"><input
                                                                    name="file[]" type="file" multiple="multiple"
                                                                    accept=".png, .gif, .jpeg, .jpg"><input
                                                                    type="hidden" name="secret"
                                                                    value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><img
                                                                    src="http://fyrestream.com//content/themes/default/frontend/images/story-image.png"
                                                                    class="js_x-uploader" data-handle="publisher"
                                                                    data-multiple="true"></form>
                                                            Upload Photos
                                                        </div>
                                                    </li>
                                                    <li class="col-md-6">
                                                        <div class="publisher-tools-tab attach js_publisher-tab"
                                                             data-tab="video">
                                                            <form class="x-uploader"
                                                                  action="http://fyrestream.com//includes/ajax/data/upload.php"
                                                                  method="post" enctype="multipart/form-data"><input
                                                                    name="file" type="file"
                                                                    accept=".mp4,.webm,.ogg"><input type="hidden"
                                                                                                    name="secret"
                                                                                                    value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><img
                                                                    src="http://fyrestream.com//content/themes/default/frontend/images/story-video.png"
                                                                    class="js_x-uploader" data-handle="publisher"
                                                                    data-type="video"></form>
                                                            Upload Video
                                                        </div>
                                                    </li>
                                                    <li class="col-md-6">
                                                        <div class="publisher-tools-tab js_publisher-tab"
                                                             data-tab="colored">
                                                            <div class="svg-container mr5"
                                                                 style="width:24px; height:24px; ">
                                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                                <svg version="1.1" id="Layer_1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                     y="0px" viewBox="0 0 180 180"
                                                                     enable-background="new 0 0 180 180"
                                                                     xml:space="preserve"> <g>
                                                                        <g>
                                                                            <path fill="#66FFFF" d="M124,136.8H26c-7.1,0-12.8-5.7-12.8-12.8V26c0-7.1,5.7-12.8,12.8-12.8h98c7.1,0,12.8,5.7,12.8,12.8v98
		C136.8,131,131,136.8,124,136.8z"></path>
                                                                        </g>
                                                                        <g>
                                                                            <path fill="#949DC2" d="M154,166.8H56c-7.1,0-12.8-5.7-12.8-12.8V56c0-7.1,5.7-12.8,12.8-12.8h98c7.1,0,12.8,5.7,12.8,12.8v98
		C166.8,161,161,166.8,154,166.8z"></path>
                                                                        </g>
                                                                    </g> </svg>
                                                            </div>
                                                            Backgrounds
                                                        </div>
                                                    </li>
                                                    <li class="col-md-6">
                                                        <div class="publisher-tools-tab js_publisher-tab"
                                                             data-tab="poll">
                                                            <div class="svg-container mr5"
                                                                 style="width:24px; height:24px; ">
                                                                <svg height="512pt" viewBox="-32 0 512 512"
                                                                     width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="m426.167969 264.75h-85.164063c-3.640625 0-6.59375 2.949219-6.59375 6.59375v233.042969h98.347656v-233.042969c0-3.640625-2.949218-6.59375-6.589843-6.59375zm0 0"
                                                                        fill="#ffc850"></path>
                                                                    <path
                                                                        d="m371.550781 264.75h-30.546875c-3.640625 0-6.59375 2.953125-6.59375 6.59375v233.046875h30.550782v-233.046875c0-3.640625 2.949218-6.59375 6.589843-6.59375zm0 0"
                                                                        fill="#feb644"></path>
                                                                    <path
                                                                        d="m266.277344 375.886719h-85.164063c-3.640625 0-6.589843 2.953125-6.589843 6.59375v121.910156h98.34375v-121.910156c0-3.640625-2.949219-6.59375-6.589844-6.59375zm0 0"
                                                                        fill="#00aaf0"></path>
                                                                    <path
                                                                        d="m211.664062 375.886719h-30.550781c-3.640625 0-6.589843 2.953125-6.589843 6.59375v121.910156h30.546874v-121.910156c0-3.640625 2.953126-6.59375 6.59375-6.59375zm0 0"
                                                                        fill="#059adb"></path>
                                                                    <path
                                                                        d="m63.808594 0c-16.035156 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117188 29.152343 29.152344 29.152343 16.03125 0 29.148437-13.117187 29.148437-29.152343 0-16.03125-13.117187-29.148438-29.148437-29.148438zm0 0"
                                                                        fill="#f7b594"></path>
                                                                    <path
                                                                        d="m65.207031 29.148438c0-10.4375 5.566407-19.640626 13.875-24.792969-4.449219-2.757813-9.683593-4.355469-15.273437-4.355469-16.035156 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117188 29.152343 29.152344 29.152343 5.589844 0 10.824218-1.601562 15.273437-4.359375-8.308593-5.148437-13.875-14.351562-13.875-24.792968zm0 0"
                                                                        fill="#f0a479"></path>
                                                                    <path
                                                                        d="m106.390625 152.335938h-85.164063c-3.640624 0-6.59375 2.953124-6.59375 6.59375v345.457031h98.347657v-345.457031c0-3.640626-2.953125-6.59375-6.589844-6.59375zm0 0"
                                                                        fill="#f25c5c"></path>
                                                                    <path
                                                                        d="m51.773438 152.335938h-30.546876c-3.640624 0-6.59375 2.953124-6.59375 6.59375v345.457031h30.550782v-345.457031c0-3.640626 2.949218-6.59375 6.589844-6.59375zm0 0"
                                                                        fill="#e54a4a"></path>
                                                                    <path
                                                                        d="m87.074219 58.300781h-46.535157c-14.734374 0-26.789062 12.054688-26.789062 26.789063v32.515625c0 3.640625 2.949219 6.59375 6.589844 6.59375h86.933594c3.640624 0 6.59375-2.953125 6.59375-6.59375v-32.515625c-.003907-14.734375-12.058594-26.789063-26.792969-26.789063zm0 0"
                                                                        fill="#f25c5c"></path>
                                                                    <path
                                                                        d="m44.296875 117.605469v-32.515625c0-14.734375 12.058594-26.789063 26.792969-26.789063h-30.550782c-14.734374 0-26.789062 12.054688-26.789062 26.789063v32.515625c0 3.640625 2.949219 6.59375 6.589844 6.59375h30.550781c-3.640625 0-6.59375-2.953125-6.59375-6.59375zm0 0"
                                                                        fill="#e54a4a"></path>
                                                                    <path
                                                                        d="m441.320312 512h-433.707031c-4.207031 0-7.613281-3.40625-7.613281-7.613281 0-4.203125 3.40625-7.609375 7.613281-7.609375h433.710938c4.203125 0 7.609375 3.40625 7.609375 7.609375 0 4.207031-3.40625 7.613281-7.613282 7.613281zm0 0"
                                                                        fill="#52586d"></path>
                                                                    <path
                                                                        d="m48.480469 124.199219v-26.125c0-4.203125-3.40625-7.613281-7.609375-7.613281-4.207032 0-7.613282 3.410156-7.613282 7.613281v26.121093h15.222657zm0 0"
                                                                        fill="#d83f3f"></path>
                                                                    <path
                                                                        d="m94.355469 98.074219c0-4.203125-3.40625-7.613281-7.613281-7.613281-4.203126 0-7.609376 3.410156-7.609376 7.613281v26.121093h15.222657zm0 0"
                                                                        fill="#e54a4a"></path>
                                                                    <path
                                                                        d="m223.695312 223.550781c-16.03125 0-29.148437 13.117188-29.148437 29.148438 0 16.035156 13.117187 29.152343 29.148437 29.152343 16.035157 0 29.152344-13.117187 29.152344-29.152343 0-16.03125-13.121094-29.148438-29.152344-29.148438zm0 0"
                                                                        fill="#f7b594"></path>
                                                                    <path
                                                                        d="m225.09375 252.699219c0-10.441407 5.566406-19.640625 13.875-24.792969-4.449219-2.757812-9.683594-4.355469-15.273438-4.355469-16.03125 0-29.148437 13.117188-29.148437 29.148438s13.117187 29.148437 29.148437 29.148437c5.589844 0 10.824219-1.597656 15.273438-4.355468-8.308594-5.148438-13.875-14.351563-13.875-24.792969zm0 0"
                                                                        fill="#f0a479"></path>
                                                                    <path
                                                                        d="m246.960938 281.847656h-46.53125c-14.734376 0-26.792969 12.058594-26.792969 26.792969v32.515625c0 3.640625 2.953125 6.589844 6.59375 6.589844h86.933593c3.640626 0 6.589844-2.949219 6.589844-6.589844v-32.515625c0-14.734375-12.054687-26.792969-26.792968-26.792969zm0 0"
                                                                        fill="#00c3ff"></path>
                                                                    <path
                                                                        d="m204.1875 341.15625v-32.515625c0-14.734375 12.054688-26.792969 26.789062-26.792969h-30.546874c-14.734376 0-26.792969 12.058594-26.792969 26.792969v32.515625c0 3.640625 2.953125 6.589844 6.59375 6.589844h30.546875c-3.640625 0-6.589844-2.949219-6.589844-6.589844zm0 0"
                                                                        fill="#00aaf0"></path>
                                                                    <path
                                                                        d="m208.371094 347.746094v-26.121094c0-4.203125-3.40625-7.613281-7.613282-7.613281-4.203124 0-7.609374 3.410156-7.609374 7.613281v26.121094zm0 0"
                                                                        fill="#059adb"></path>
                                                                    <path
                                                                        d="m254.246094 321.625c0-4.203125-3.410156-7.613281-7.613282-7.613281-4.203124 0-7.613281 3.410156-7.613281 7.613281v26.121094h15.226563zm0 0"
                                                                        fill="#00aaf0"></path>
                                                                    <path
                                                                        d="m383.585938 112.414062c-16.035157 0-29.152344 13.117188-29.152344 29.148438 0 16.035156 13.117187 29.152344 29.152344 29.152344 16.03125 0 29.148437-13.117188 29.148437-29.152344 0-16.03125-13.117187-29.148438-29.148437-29.148438zm0 0"
                                                                        fill="#f7b594"></path>
                                                                    <path
                                                                        d="m384.984375 141.5625c0-10.441406 5.566406-19.640625 13.875-24.792969-4.449219-2.757812-9.683594-4.355469-15.273437-4.355469-16.035157 0-29.152344 13.117188-29.152344 29.148438s13.117187 29.152344 29.152344 29.152344c5.589843 0 10.824218-1.601563 15.273437-4.359375-8.308594-5.148438-13.875-14.351563-13.875-24.792969zm0 0"
                                                                        fill="#f0a479"></path>
                                                                    <path
                                                                        d="m406.851562 170.714844h-46.535156c-14.734375 0-26.789062 12.054687-26.789062 26.789062v32.515625c0 3.640625 2.949218 6.589844 6.589844 6.589844h86.933593c3.640625 0 6.59375-2.949219 6.59375-6.589844v-32.515625c0-14.734375-12.058593-26.789062-26.792969-26.789062zm0 0"
                                                                        fill="#ffc850"></path>
                                                                    <path
                                                                        d="m364.074219 230.019531v-32.515625c0-14.734375 12.058593-26.789062 26.792969-26.789062h-30.550782c-14.734375 0-26.789062 12.054687-26.789062 26.789062v32.515625c0 3.640625 2.949218 6.589844 6.589844 6.589844h30.550781c-3.640625 0-6.59375-2.949219-6.59375-6.589844zm0 0"
                                                                        fill="#feb644"></path>
                                                                    <path
                                                                        d="m368.261719 236.609375v-26.121094c0-4.203125-3.410157-7.613281-7.613281-7.613281-4.203126 0-7.613282 3.410156-7.613282 7.613281v26.121094zm0 0"
                                                                        fill="#f9972d"></path>
                                                                    <path
                                                                        d="m414.132812 210.488281c0-4.203125-3.40625-7.613281-7.609374-7.613281-4.207032 0-7.613282 3.410156-7.613282 7.613281v26.121094h15.222656zm0 0"
                                                                        fill="#feb644"></path>
                                                                </svg>
                                                            </div>
                                                            Create Poll
                                                        </div>
                                                    </li>
                                                    <li class="col-md-6">
                                                        <div class="publisher-tools-tab js_publisher-feelings">
                                                            <div class="svg-container mr5"
                                                                 style="width:24px; height:24px; ">
                                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                                <svg version="1.1" id="Capa_1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                     y="0px" viewBox="0 0 512 512"
                                                                     style="enable-background:new 0 0 512 512;"
                                                                     xml:space="preserve"> <circle style="fill:#FFD93B;"
                                                                                                   cx="256" cy="256"
                                                                                                   r="256"></circle>
                                                                    <path style="fill:#3E4347;" d="M256,420.544c-74.864,0-140.096-50.704-158.624-123.28c-1.456-5.712,1.984-11.52,7.696-12.976
c5.68-1.488,11.504,1.984,12.96,7.696c16.128,63.136,72.848,107.232,137.952,107.232s121.84-44.096,137.952-107.232
c1.44-5.712,7.248-9.184,12.976-7.696c5.712,1.456,9.152,7.264,7.696,12.976C396.096,369.84,330.864,420.544,256,420.544z"></path>
                                                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
C474.8,103.68,512,175.52,512,256z"></path>
                                                                    <ellipse style="fill:#3E4347;" cx="173.328"
                                                                             cy="220.304" rx="39.232"
                                                                             ry="46.624"></ellipse>
                                                                    <path style="fill:#5A5F63;" d="M191.024,210.272c-3.056,2.4-8.08,1.216-11.296-2.688s-3.376-9.136-0.32-11.536
c3.04-2.512,8.08-1.328,11.28,2.576C193.92,202.64,193.952,207.776,191.024,210.272z"></path>
                                                                    <ellipse style="fill:#3E4347;" cx="338.72"
                                                                             cy="220.304" rx="39.232"
                                                                             ry="46.624"></ellipse>
                                                                    <path style="fill:#5A5F63;" d="M356.384,210.272c-3.056,2.4-8.08,1.216-11.296-2.688s-3.376-9.136-0.32-11.536
c3.04-2.512,8.064-1.328,11.28,2.576C359.28,202.64,359.312,207.776,356.384,210.272z"></path>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g> </svg>
                                                            </div>
                                                            Feelings/Activity
                                                        </div>
                                                    </li>
                                                    <li class="col-md-6">
                                                        <div class="publisher-tools-tab" id="addMomentModal"
                                                             data-url="posts/story.php?do=create">
                                                            <div class="svg-container mr5"
                                                                 style="width:24px; height:24px; ">
                                                                <!--?xml version="1.0" encoding="utf-8"?-->
                                                                <svg version="1.1" id="Layer_1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                     y="0px" viewBox="0 0 180 180"
                                                                     enable-background="new 0 0 180 180"
                                                                     xml:space="preserve"> <g>
                                                                        <g>
                                                                            <g>
                                                                                <linearGradient id="SVGID_1_"
                                                                                                gradientUnits="userSpaceOnUse"
                                                                                                x1="31.6088"
                                                                                                y1="76.1398"
                                                                                                x2="163.6088"
                                                                                                y2="31.1398">
                                                                                    <stop offset="0"
                                                                                          style="stop-color:#7029B7"></stop>
                                                                                    <stop offset="0.9946"
                                                                                          style="stop-color:#F52883"></stop>
                                                                                </linearGradient>
                                                                                <path fill="url(#SVGID_1_)" d="M161.7,64.7c-0.1,0-0.2,0-0.2,0L33.9,45.3c-0.7-0.1-1.3-0.7-1.3-1.5c0-0.7,0.5-1.4,1.3-1.5L146,25
			c0.6-0.1,1.1-0.1,1.7-0.1c5.5,0,10.2,4,11,9.5l4.4,28.6c0.1,0.5-0.1,1-0.4,1.3C162.5,64.6,162.1,64.7,161.7,64.7z M44,43.8
			l115.9,17.6l-4.1-26.6c-0.6-4-4.1-6.9-8.1-6.9c-0.4,0-0.8,0-1.3,0.1L44,43.8z"></path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <linearGradient id="SVGID_2_"
                                                                                                    gradientUnits="userSpaceOnUse"
                                                                                                    x1="5.612"
                                                                                                    y1="161.5582"
                                                                                                    x2="139.112"
                                                                                                    y2="60.0582">
                                                                                        <stop offset="0"
                                                                                              style="stop-color:#7029B7"></stop>
                                                                                        <stop offset="0.9946"
                                                                                              style="stop-color:#F52883"></stop>
                                                                                    </linearGradient>
                                                                                    <path fill="url(#SVGID_2_)" d="M161.3,155.1H18.7c-5.3,0-9.7-4.3-9.7-9.7v-96c0-5.3,4.3-9.7,9.7-9.7h142.5
				c5.3,0,9.7,4.3,9.7,9.7v96C170.9,150.7,166.6,155.1,161.3,155.1z"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <circle fill="#F7F7F7" cx="90"
                                                                                            cy="97.4" r="45.3"></circle>
                                                                                </g>
                                                                            </g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <path fill="#74CAFE" d="M78.1,98.7c0.9-0.9,1.7-1.9,2.6-2.7c7.6-6.6,19.6-3,22.2,6.9c1.1,4,0.1,7.7-2,11.2
						c-2.1,3.5-4.9,6.4-7.9,9.1c-4.4,3.9-9.3,7.3-14.4,10.2c-0.3,0.2-0.5,0.2-0.8,0c-6.5-3.8-12.5-8.1-17.8-13.5
						c-2.3-2.4-4.4-5.1-5.8-8.2c-3.6-8,1.3-17.2,9.7-18.8c5.6-1.1,10.2,0.8,13.7,5.3C77.9,98.4,78,98.6,78.1,98.7z"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <path fill="#F7B0BB" d="M106.6,75.7c0.5-0.5,1-1.1,1.5-1.6c4.4-3.8,11.3-1.7,12.8,4c0.6,2.3,0,4.5-1.1,6.5
						c-1.2,2-2.8,3.7-4.6,5.3c-2.6,2.3-5.4,4.2-8.3,5.9c-0.2,0.1-0.3,0.1-0.5,0c-3.7-2.2-7.3-4.7-10.3-7.8c-1.4-1.4-2.5-3-3.3-4.8
						c-2.1-4.7,0.8-9.9,5.6-10.9c3.2-0.6,5.9,0.4,7.9,3C106.5,75.5,106.6,75.6,106.6,75.7z"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path fill="#9CFF9C" d="M126.2,107.4c-0.7-2.4-1.4-4.7-2.1-7c-1.5,1-3,2-4.5,2.9c-1.5,1-3,2-4.5,2.9c-0.4,0.3-0.6,0.5-0.4,1.1
			c1.1,3.5,2.1,6.9,3.2,10.4c0.7,2.2-0.2,4.2-2.2,5.2c-2.1,1.1-4.7,0.2-5.8-1.9c-1.1-2.1-0.2-4.7,1.8-5.8c1-0.5,2-0.6,3.1-0.4
			c-0.1-0.3-0.2-0.6-0.2-0.8c-1.1-3.5-2.1-7-3.2-10.5c-0.2-0.5-0.1-0.8,0.4-1.1c4.1-2.6,8.1-5.2,12.2-7.8c0.2-0.1,0.3-0.2,0.6-0.3
			c0.1,0.3,0.1,0.5,0.2,0.7c1.5,5.1,3.1,10.2,4.6,15.4c0.6,2.1-0.3,4.4-2.3,5.2c-2.1,0.9-4.4,0.3-5.6-1.7c-0.8-1.5-0.9-3,0-4.4
			c0.9-1.4,2.2-2.1,3.9-2.1C125.6,107.4,125.9,107.4,126.2,107.4z"></path>
                                                                            </g>
                                                                        </g>
                                                                        <path fill="#FF9248" d="M76.7,60.6l4.2,8.6c0,0.1,0.1,0.1,0.2,0.2l9.4,1.4c0.2,0,0.3,0.3,0.2,0.5l-6.8,6.7
	c-0.1,0.1-0.1,0.2-0.1,0.2l1.6,9.4c0,0.2-0.2,0.4-0.4,0.3l-8.4-4.4c-0.1,0-0.2,0-0.3,0l-8.4,4.4c-0.2,0.1-0.4-0.1-0.4-0.3l1.6-9.4
	c0-0.1,0-0.2-0.1-0.2l-6.8-6.7c-0.2-0.2-0.1-0.4,0.2-0.5l9.4-1.4c0.1,0,0.2-0.1,0.2-0.2l4.2-8.6C76.3,60.4,76.6,60.4,76.7,60.6z"></path>
                                                                    </g> </svg>
                                                            </div>
                                                            Moments
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="publisher-footer">
                                                <div class="btn-group js_publisher-privacy" id="postTypePFM"
                                                     data-toggle="tooltip" data-placement="top" data-value="public"
                                                     title="Shared with: Public">
                                                    <button type="button" class="btn btn-sm btn-info dropdown-toggle"
                                                            data-toggle="dropdown" data-display="static"><span
                                                            class="btn-group-text" id="postTypeText">Public</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-item pointer"
                                                             data-title="Shared with: Public" data-values="public"><i
                                                                class="fa fa-globe mr5"></i>Public
                                                        </div>
                                                        <div class="dropdown-item pointer"
                                                             data-title="Shared with: Friends" data-values="friends"><i
                                                                class="fa fa-users mr5"></i>Friends
                                                        </div>
                                                        <div class="dropdown-item pointer"
                                                             data-title="Shared with: Only Me" data-values="me"><i
                                                                class="fa fa-lock mr5"></i>Only Me
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" data-dismiss="modal" aria-label="Close"
                                                        class="btn btn-sm btn-primary ml5 js_publisher-btn js_publisher">
                                                    Post
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card story-card">
                            <div class="card-body pb-3 pt-4 px-1">
                                <div class="row"></div>
                            </div>
                        </div>
                        <div class="js_posts_stream" data-get="posts_profile" data-filter="all" data-id="58">
                            <ul>
                                @foreach(\Illuminate\Support\Facades\Auth::user()->timelineposts as $userPost)
                                    <li class="margin-bottom-1em" style="list-style: none;">
                                        <div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2"><a
                                                href="" data-toggle="dropdown" style="cursor: pointer;    z-index: 1;"
                                                data-display="static" class="more-btn "><i
                                                    class="fas fa-ellipsis-h"></i></a>
                                            <div
                                                style="position: relative;  margin-bottom: 0;background: none;border-radius: 0; box-shadow: none; width: 100%"
                                                class="post
														" data-id="260">
                                                <div class="full-width post-body">
                                                    <div class="post-header">
                                                        <div class="post-avatar"><a class="post-avatar-picture"
                                                                                    href="http://fyrestream.com//danishtest"
                                                                                    style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>
                                                            <i class="fa fa-circle online-dot"></i></div>
                                                        <div class="post-meta">
                                                            <div class="float-right dropdown">
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right post-dropdown-menu">
                                                                    <div class="dropdown-item pointer js_save-post">
                                                                        <div class="action no-desc"><i
                                                                                class="fa fa-bookmark fa-fw"></i> <span>Save Post</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-divider"></div>
                                                                    <div class="dropdown-item pointer js_pin-post">
                                                                        <div class="action no-desc"><i
                                                                                class="fa fa-thumbtack fa-fw"></i> <span>Pin Post</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item pointer js_edit-post">
                                                                        <div class="action no-desc"><i
                                                                                class="fa fa-pencil-alt fa-fw"></i> Edit
                                                                            Post
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item pointer js_delete-post">
                                                                        <div class="action no-desc"><i
                                                                                class="fa fa-trash-alt fa-fw"></i> Delete
                                                                            Post
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="dropdown-item pointer js_disable-post-comments">
                                                                        <div class="action no-desc"><i
                                                                                class="fa fa-comment-slash fa-fw"></i>
                                                                            <span>Turn off Commenting</span></div>
                                                                    </div>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="http://fyrestream.com//posts/260"
                                                                       target="_blank" class="dropdown-item">
                                                                        <div class="action no-desc"><i
                                                                                class="fa fa-link fa-fw"></i> Open post in
                                                                            new tab
                                                                        </div>
                                                                    </a></div>
                                                            </div>
                                                            <span class="js_user-popover" data-type="user" data-uid="58"> <a
                                                                    class="post-author"
                                                                    href="http://fyrestream.com//danishtest">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</a> </span>
                                                            <span class="post-title"> </span>
                                                            <div class="post-time"><a
                                                                    href="http://fyrestream.com//posts/260"
                                                                    class="js_moment" data-time="2021-04-27 08:15:25"
                                                                    title="Tuesday, April 27, 2021 1:15 am">{{$userPost->created_at->diffForHumans()}}</a>
                                                                -

                                                                <a href="#" class="text-secondary ml-2" data-toggle="tooltip" title="Shared with: {{$userPost->privacy}}">
                                                                    @if($userPost->privacy == 'Public')
                                                                        <i class="fas fa-globe"></i>
                                                                    @elseif($userPost->privacy == 'Friends')
                                                                        <i class="fas fa-users"></i>
                                                                    @else
                                                                        <i class="fas fa-lock"></i>
                                                                    @endif
                                                                </a>

                                                                {{--<div class="btn-group" data-toggle="tooltip"
                                                                     data-placement="top" data-value="public"
                                                                     title="Shared with: Public">
                                                                    <button type="button" class="btn dropdown-toggle"
                                                                            data-toggle="dropdown" data-display="static"><i
                                                                            class="btn-group-icon fa fa-globe"></i></button>
                                                                    <div class="dropdown-menu dropdown-menu-left">
                                                                        <div
                                                                            onclick="setTimeout(function() { location.reload() },1000)"
                                                                            class="dropdown-item pointer js_edit-privacy"
                                                                            data-title="Shared with: Public"
                                                                            data-value="public"><i class="fa fa-globe"></i>
                                                                            Public
                                                                        </div>
                                                                        <div
                                                                            onclick="setTimeout(function() { location.reload() },1000)"
                                                                            class="dropdown-item pointer js_edit-privacy"
                                                                            data-title="Shared with: Friends"
                                                                            data-value="friends"><i class="fa fa-users"></i>
                                                                            Friends
                                                                        </div>
                                                                        <div
                                                                            onclick="setTimeout(function() { location.reload() },1000)"
                                                                            class="dropdown-item pointer js_edit-privacy"
                                                                            data-title="Shared with: Only Me"
                                                                            data-value="me"><i class="fa fa-lock"></i> Only
                                                                            Me
                                                                        </div>
                                                                    </div>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="textBoldDiv ">
                                                        <div class="post-replace textBoldDiv ">
                                                            <div class="post-text js_readmore" dir="auto"
                                                                 style="max-height: none;">{{$userPost->post}}
                                                            </div>
                                                            <div class="post-text-translation x-hidden" dir="auto"></div>
                                                            <div class="post-text-plain x-hidden">yes</div>
                                                        </div>
                                                    </div>
                                                    <div class="post-stats clearfix">
                                                        <div class="float-right mr10 customReactionLive" data-toggle="modal"
                                                             data-url="posts/who_reacts.php?post_id=260">
                                                            <div class="reactions-stats">
                                                                <div class="reaction-btn-icon-custom"
                                                                     style="    margin-top: 2px;">
                                                                    <div class="inline-emoji no_animation">
                                                                        <div class="emoji emoji--angry">
                                                                            <div class="emoji__face">
                                                                                <div class="emoji__eyebrows"></div>
                                                                                <div class="emoji__eyes"></div>
                                                                                <div class="emoji__mouth"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span>
							1
						</span></div>
                                                        </div>
                                                        <span class="float-left"> <span class="pointer js_comments-toggle"> <i
                                                                    class="fa fa-comments"></i> {{$userPost->comments->count()}} Comments
				</span> <span class="pointer shareModal ml10 x-hidden" data-url="posts/who_shares.php?post_id=260"> <i
                                                                    class="fa fa-share"></i> 0 Shares
				</span> </span></div>
                                                    <div class="post-actions clearfix">
                                                        <div
                                                            class="action-btn unselectable reactions-wrapper js_unreact-post"
                                                            data-reaction="angry">
                                                            <div class="reaction-btn">
                                                                <div class="reaction-btn-icon">
                                                                    <div class="inline-emoji no_animation">
                                                                        <div class="emoji emoji--angry">
                                                                            <div class="emoji__face">
                                                                                <div class="emoji__eyebrows"></div>
                                                                                <div class="emoji__eyes"></div>
                                                                                <div class="emoji__mouth"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span class="reaction-btn-name orange">angry</span></div>
                                                            <div class="reactions-container" style="display: none;">
                                                                <div class="reactions_item duration-1 js_react-post"
                                                                     data-reaction="like" data-reaction-color="blue"
                                                                     data-title="like">
                                                                    <div class="emoji emoji--like">
                                                                        <div class="emoji__hand">
                                                                            <div class="emoji__thumb"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reactions_item duration-2 js_react-post"
                                                                     data-reaction="love" data-reaction-color="red"
                                                                     data-title="love">
                                                                    <div class="emoji emoji--love">
                                                                        <div class="emoji__heart"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="reactions_item duration-3 js_react-post"
                                                                     data-reaction="haha" data-reaction-color="yellow"
                                                                     data-title="haha">
                                                                    <div class="emoji emoji--haha">
                                                                        <div class="emoji__face">
                                                                            <div class="emoji__eyes"></div>
                                                                            <div class="emoji__mouth">
                                                                                <div class="emoji__tongue"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reactions_item duration-4 js_react-post"
                                                                     data-reaction="yay" data-reaction-color="yellow"
                                                                     data-title="yay">
                                                                    <div class="emoji emoji--yay">
                                                                        <div class="emoji__face">
                                                                            <div class="emoji__eyebrows"></div>
                                                                            <div class="emoji__mouth"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reactions_item duration-5 js_react-post"
                                                                     data-reaction="wow" data-reaction-color="yellow"
                                                                     data-title="wow">
                                                                    <div class="emoji emoji--wow">
                                                                        <div class="emoji__face">
                                                                            <div class="emoji__eyebrows"></div>
                                                                            <div class="emoji__eyes"></div>
                                                                            <div class="emoji__mouth"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reactions_item duration-6 js_react-post"
                                                                     data-reaction="sad" data-reaction-color="yellow"
                                                                     data-title="sad">
                                                                    <div class="emoji emoji--sad">
                                                                        <div class="emoji__face">
                                                                            <div class="emoji__eyebrows"></div>
                                                                            <div class="emoji__eyes"></div>
                                                                            <div class="emoji__mouth"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reactions_item duration-7 js_react-post"
                                                                     data-reaction="angry" data-reaction-color="orange"
                                                                     data-title="angry">
                                                                    <div class="emoji emoji--angry">
                                                                        <div class="emoji__face">
                                                                            <div class="emoji__eyebrows"></div>
                                                                            <div class="emoji__eyes"></div>
                                                                            <div class="emoji__mouth"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-btn js_comment ">
                                                            <div class="svg-container mr5"
                                                                 style="width:16px; height:16px; ">
                                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                                <svg version="1.1" id="Capa_1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                     y="0px" viewBox="0 0 512 512"
                                                                     style="enable-background:new 0 0 512 512;"
                                                                     xml:space="preserve"> <g>
                                                                        <g>
                                                                            <path d="M448,0H64C28.704,0,0,28.704,0,64v288c0,35.296,28.704,64,64,64h32v80c0,6.208,3.584,11.872,9.216,14.496
		c2.144,0.992,4.48,1.504,6.784,1.504c3.68,0,7.328-1.28,10.24-3.712L232.992,416H448c35.296,0,64-28.704,64-64V64
		C512,28.704,483.296,0,448,0z M480,352c0,17.632-14.368,32-32,32H227.2c-3.744,0-7.36,1.312-10.24,3.712L128,461.856V400
		c0-8.832-7.168-16-16-16H64c-17.632,0-32-14.368-32-32V64c0-17.632,14.368-32,32-32h384c17.632,0,32,14.368,32,32V352z"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g> </svg>
                                                            </div>
                                                            <span>Comment</span></div>
                                                        <div class="action-btn" data-toggle="modal"
                                                             data-url="posts/share.php?do=create&amp;post_id=260">
                                                            <div class="svg-container mr5"
                                                                 style="width:16px; height:16px; ">
                                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                                <svg version="1.1" id="Capa_1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                     y="0px" viewBox="0 0 512.008 512.008"
                                                                     style="enable-background:new 0 0 512.008 512.008;"
                                                                     xml:space="preserve"> <g>
                                                                        <g>
                                                                            <path d="M507.328,228.708l-160-160.032c-4.576-4.576-11.392-5.92-17.44-3.456C323.904,67.684,320,73.54,320,80.004v80h-48
		c-149.984,0-272,122.016-272,272c0,7.136,4.736,13.408,11.584,15.36c1.472,0.448,2.944,0.64,4.416,0.64
		c5.408,0,10.592-2.752,13.568-7.52l4.8-7.68c43.424-69.568,121.344-112.8,203.392-112.8H320v80c0,6.464,3.904,12.32,9.888,14.784
		c6.016,2.432,12.864,1.088,17.44-3.456l160-160C513.568,245.092,513.568,234.948,507.328,228.708z M352,361.38v-57.376
		c0-8.832-7.168-16-16-16h-98.24c-75.488,0-147.936,32.288-198.816,86.624C64.704,269.924,159.424,192.004,272,192.004h64
		c8.832,0,16-7.168,16-16v-57.376l121.376,121.376L352,361.38z"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g>
                                                                    <g></g> </svg>
                                                            </div>
                                                            <span>Share</span></div>
                                                    </div>
                                                </div>
                                                <div class="post-footer ">
                                                    <div class="post-comments">
                                                        <div class="comments-filter">
                                                            <div class="btn-group btn-group-sm js_comments-filter"
                                                                 data-value="post_comments">
                                                                <button type="button" class="btn dropdown-toggle ptb0 plr0"
                                                                        data-toggle="dropdown" data-display="static"><span
                                                                        class="btn-group-text">Most Recent</span></button>
                                                                <div class="dropdown-menu dropdown-menu-left">
                                                                    <div class="dropdown-item pointer"
                                                                         data-value="post_comments" data-id="260">Most
                                                                        Recent
                                                                    </div>
                                                                    <div class="dropdown-item pointer"
                                                                         data-value="post_comments_top" data-id="260">Top
                                                                        Comments
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment js_comment-form " data-handle="post"
                                                             data-id="260">
                                                            <div class="comment-avatar"><a class="comment-avatar-picture"
                                                                                           href="http://fyrestream.com//danishtest"
                                                                                           style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>
                                                            </div>
                                                            <div class="comment-data">
                                                                <div class="x-form comment-form"><textarea dir="auto"
                                                                                                           class="js_autosize js_mention js_post-comment"
                                                                                                           rows="1"
                                                                                                           placeholder="Write a comment..."
                                                                                                           style="overflow: hidden; overflow-wrap: break-word; height: 36px;"></textarea>
                                                                    <ul class="x-form-tools clearfix">
                                                                        <li class="x-form-tools-post js_post-comment"><i
                                                                                class="far fa-paper-plane fa-lg fa-fw"></i>
                                                                        </li>
                                                                        <li class="x-form-tools-attach">
                                                                            <form class="x-uploader"
                                                                                  action="http://fyrestream.com//includes/ajax/data/upload.php"
                                                                                  method="post"
                                                                                  enctype="multipart/form-data"><input
                                                                                    name="file" type="file"
                                                                                    accept=".png, .gif, .jpeg, .jpg"><input
                                                                                    type="hidden" name="secret"
                                                                                    value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><i
                                                                                    class="far fa-image fa-lg fa-fw js_x-uploader"
                                                                                    data-handle="comment"></i></form>
                                                                        </li>
                                                                        <li class="x-form-tools-voice js_comment-voice-notes-toggle">
                                                                            <i class="fas fa-microphone fa-lg fa-fw"></i>
                                                                        </li>
                                                                        <li class="x-form-tools-emoji js_emoji-menu-toggle">
                                                                            <i class="far fa-smile-wink fa-lg fa-fw"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="comment-voice-notes">
                                                                    <div class="voice-recording-wrapper"
                                                                         data-handle="comment">
                                                                        <div class="x-hidden js_voice-processing-message">
                                                                            <div class="svg-container mr5"
                                                                                 style="width:16px; height:16px; ">
                                                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                                                <svg version="1.1" id="Capa_1"
                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                     x="0px" y="0px"
                                                                                     viewBox="0 0 490.667 490.667"
                                                                                     style="enable-background:new 0 0 490.667 490.667;"
                                                                                     xml:space="preserve"> <path
                                                                                        style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333
s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"></path>
                                                                                    <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533
c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584
c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2
c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"></path>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g>
                                                                                    <g></g> </svg>
                                                                            </div>
                                                                            Processing<span class="loading-dots"></span>
                                                                        </div>
                                                                        <div class="x-hidden js_voice-success-message">
                                                                            <div class="svg-container mr5"
                                                                                 style="width:16px; height:16px; ">
                                                                                <svg height="512pt"
                                                                                     viewBox="0 -21 512.00533 512"
                                                                                     width="512pt"
                                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                                                        fill="#4caf50"></path>
                                                                                    <path
                                                                                        d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                                                        fill="#2196f3"></path>
                                                                                </svg>
                                                                            </div>
                                                                            Voice note recorded successfully
                                                                            <div class="float-right">
                                                                                <button type="button"
                                                                                        class="close js_voice-remove"><span>×</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="btn-voice-start js_voice-start"><i
                                                                                class="fas fa-microphone mr5"></i>Record
                                                                        </div>
                                                                        <div class="btn-voice-stop js_voice-stop"
                                                                             style="display: none"><i
                                                                                class="far fa-stop-circle mr5"></i>Recording
                                                                            <span class="js_voice-timer">00:00</span></div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="comment-attachments attachments clearfix x-hidden">
                                                                    <ul>
                                                                        <li class="loading">
                                                                            <div class="progress x-progress">
                                                                                <div class="progress-bar" role="progressbar"
                                                                                     aria-valuenow="0" aria-valuemin="0"
                                                                                     aria-valuemax="100"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pb10 text-center js_comment-disabled-msg x-hidden">
                                                            Commenting has been turned off for this post.
                                                        </div>
                                                        <div class="text-center x-hidden js_comments-filter-loader">
                                                            <div class="loader loader_large"></div>
                                                        </div>
                                                        <ul class="js_comments pt10 ">
                                                            @foreach($userPost->comments as $userComment)
                                                                <li>
                                                                    <div class="comment " data-id="82" id="comment_82">
                                                                        <div class="comment-avatar"><a
                                                                                class="comment-avatar-picture"
                                                                                href="http://fyrestream.com//danishtest"
                                                                                style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>
                                                                        </div>
                                                                        <div class="comment-data">
                                                                            <div class="comment-btn dropdown"><i
                                                                                    class="fas fa-ellipsis-h dropdown-toggle-icon"
                                                                                    data-toggle="dropdown"
                                                                                    data-display="static"></i>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <div
                                                                                        class="dropdown-item pointer js_edit-comment">
                                                                                        Edit Comment
                                                                                    </div>
                                                                                    <div
                                                                                        class="dropdown-item pointer js_delete-comment">
                                                                                        Delete Comment
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comment-inner-wrapper">
                                                                                <div class="comment-inner js_notifier-flasher">
                                                                                    <div class="comment-author"><span
                                                                                            class="js_user-popover"
                                                                                            data-type="user" data-uid="58"> <a
                                                                                                href="http://fyrestream.com//danishtest">{{$userComment->user->first_name}} {{$userComment->user->last_name}}</a> </span>
                                                                                    </div>
                                                                                    <div class="comment-replace">
                                                                                        <div class="comment-text js_readmore"
                                                                                             dir="auto"
                                                                                             style="max-height: none;">{{$userComment->comment}}
                                                                                        </div>
                                                                                        <div
                                                                                            class="comment-text-plain x-hidden">
                                                                                            {{$userComment->comment}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <ul class="comment-actions clearfix">
                                                                                <li>
                                                                                    <div
                                                                                        class="pointer unselectable reactions-wrapper "
                                                                                        data-reaction="">
                                                                                        <div class="reaction-btn">
                                                                                            <div
                                                                                                class="reaction-btn-icon d-none">
                                                                                                <i class="fa fa-thumbs-up fa-fw"></i>
                                                                                            </div>
                                                                                            <span
                                                                                                class="reaction-btn-name text-link">Like</span>
                                                                                        </div>
                                                                                        <div class="reactions-container"
                                                                                             style="display: none;">
                                                                                            <div
                                                                                                class="reactions_item duration-1 js_react-comment"
                                                                                                data-reaction="like"
                                                                                                data-reaction-color="blue"
                                                                                                data-title="like">
                                                                                                <div class="emoji emoji--like">
                                                                                                    <div class="emoji__hand">
                                                                                                        <div
                                                                                                            class="emoji__thumb"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="reactions_item duration-2 js_react-comment"
                                                                                                data-reaction="love"
                                                                                                data-reaction-color="red"
                                                                                                data-title="love">
                                                                                                <div class="emoji emoji--love">
                                                                                                    <div
                                                                                                        class="emoji__heart"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="reactions_item duration-3 js_react-comment"
                                                                                                data-reaction="haha"
                                                                                                data-reaction-color="yellow"
                                                                                                data-title="haha">
                                                                                                <div class="emoji emoji--haha">
                                                                                                    <div class="emoji__face">
                                                                                                        <div
                                                                                                            class="emoji__eyes"></div>
                                                                                                        <div
                                                                                                            class="emoji__mouth">
                                                                                                            <div
                                                                                                                class="emoji__tongue"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="reactions_item duration-4 js_react-comment"
                                                                                                data-reaction="yay"
                                                                                                data-reaction-color="yellow"
                                                                                                data-title="yay">
                                                                                                <div class="emoji emoji--yay">
                                                                                                    <div class="emoji__face">
                                                                                                        <div
                                                                                                            class="emoji__eyebrows"></div>
                                                                                                        <div
                                                                                                            class="emoji__mouth"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="reactions_item duration-5 js_react-comment"
                                                                                                data-reaction="wow"
                                                                                                data-reaction-color="yellow"
                                                                                                data-title="wow">
                                                                                                <div class="emoji emoji--wow">
                                                                                                    <div class="emoji__face">
                                                                                                        <div
                                                                                                            class="emoji__eyebrows"></div>
                                                                                                        <div
                                                                                                            class="emoji__eyes"></div>
                                                                                                        <div
                                                                                                            class="emoji__mouth"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="reactions_item duration-6 js_react-comment"
                                                                                                data-reaction="sad"
                                                                                                data-reaction-color="yellow"
                                                                                                data-title="sad">
                                                                                                <div class="emoji emoji--sad">
                                                                                                    <div class="emoji__face">
                                                                                                        <div
                                                                                                            class="emoji__eyebrows"></div>
                                                                                                        <div
                                                                                                            class="emoji__eyes"></div>
                                                                                                        <div
                                                                                                            class="emoji__mouth"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="reactions_item duration-7 js_react-comment"
                                                                                                data-reaction="angry"
                                                                                                data-reaction-color="orange"
                                                                                                data-title="angry">
                                                                                                <div class="emoji emoji--angry">
                                                                                                    <div class="emoji__face">
                                                                                                        <div
                                                                                                            class="emoji__eyebrows"></div>
                                                                                                        <div
                                                                                                            class="emoji__eyes"></div>
                                                                                                        <div
                                                                                                            class="emoji__mouth"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li> <span class="text-link js_reply "
                                                                                           data-username="">
					Reply
				</span></li>
                                                                            </ul>
                                                                            <div class="comment-replies x-hidden">
                                                                                <ul class="js_replies"></ul>
                                                                                <div class="x-hidden js_reply-form">
                                                                                    <div class="x-form comment-form"><textarea
                                                                                            dir="auto"
                                                                                            class="js_autosize js_mention js_post-reply"
                                                                                            rows="1" placeholder="Write a Reply"
                                                                                            style="overflow: hidden; overflow-wrap: break-word;"></textarea>
                                                                                        <ul class="x-form-tools clearfix">
                                                                                            <li class="x-form-tools-post js_post-reply">
                                                                                                <i class="far fa-paper-plane fa-lg fa-fw"></i>
                                                                                            </li>
                                                                                            <li class="x-form-tools-attach">
                                                                                                <form class="x-uploader"
                                                                                                      action="http://fyrestream.com//includes/ajax/data/upload.php"
                                                                                                      method="post"
                                                                                                      enctype="multipart/form-data">
                                                                                                    <input name="file"
                                                                                                           type="file"
                                                                                                           accept=".png, .gif, .jpeg, .jpg"><input
                                                                                                        type="hidden"
                                                                                                        name="secret"
                                                                                                        value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><i
                                                                                                        class="far fa-image fa-lg fa-fw js_x-uploader"
                                                                                                        data-handle="comment"></i>
                                                                                                </form>
                                                                                            </li>
                                                                                            <li class="x-form-tools-voice js_comment-voice-notes-toggle">
                                                                                                <i class="fas fa-microphone fa-lg fa-fw"></i>
                                                                                            </li>
                                                                                            <li class="x-form-tools-emoji js_emoji-menu-toggle">
                                                                                                <i class="far fa-smile-wink fa-lg fa-fw"></i>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="comment-voice-notes">
                                                                                        <div class="voice-recording-wrapper"
                                                                                             data-handle="comment">
                                                                                            <div
                                                                                                class="x-hidden js_voice-processing-message">
                                                                                                <div class="svg-container mr5"
                                                                                                     style="width:16px; height:16px; ">
                                                                                                    <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                                                                    <svg version="1.1"
                                                                                                         id="Capa_1"
                                                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                         x="0px" y="0px"
                                                                                                         viewBox="0 0 490.667 490.667"
                                                                                                         style="enable-background:new 0 0 490.667 490.667;"
                                                                                                         xml:space="preserve"> <path
                                                                                                            style="fill:#2196F3;"
                                                                                                            d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333
s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"></path>
                                                                                                        <path
                                                                                                            style="fill:#FAFAFA;"
                                                                                                            d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533
c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584
c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2
c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"></path>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g>
                                                                                                        <g></g> </svg>
                                                                                                </div>
                                                                                                Processing<span
                                                                                                    class="loading-dots"></span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="x-hidden js_voice-success-message">
                                                                                                <div class="svg-container mr5"
                                                                                                     style="width:16px; height:16px; ">
                                                                                                    <svg height="512pt"
                                                                                                         viewBox="0 -21 512.00533 512"
                                                                                                         width="512pt"
                                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                                                                            fill="#4caf50"></path>
                                                                                                        <path
                                                                                                            d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                                                                            fill="#2196f3"></path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                Voice note recorded successfully
                                                                                                <div class="float-right">
                                                                                                    <button type="button"
                                                                                                            class="close js_voice-remove">
                                                                                                        <span>×</span></button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="btn-voice-start js_voice-start">
                                                                                                <i class="fas fa-microphone mr5"></i>Record
                                                                                            </div>
                                                                                            <div
                                                                                                class="btn-voice-stop js_voice-stop"
                                                                                                style="display: none"><i
                                                                                                    class="far fa-stop-circle mr5"></i>Recording
                                                                                                <span class="js_voice-timer">00:00</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="comment-attachments attachments clearfix x-hidden">
                                                                                        <ul>
                                                                                            <li class="loading">
                                                                                                <div
                                                                                                    class="progress x-progress">
                                                                                                    <div class="progress-bar"
                                                                                                         role="progressbar"
                                                                                                         aria-valuenow="0"
                                                                                                         aria-valuemin="0"
                                                                                                         aria-valuemax="100"></div>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach

{{--                                                            <li>--}}
{{--                                                                <div class="comment " data-id="83" id="comment_83">--}}
{{--                                                                    <div class="comment-avatar"><a--}}
{{--                                                                            class="comment-avatar-picture"--}}
{{--                                                                            href="http://fyrestream.com//danishtest"--}}
{{--                                                                            style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="comment-data">--}}
{{--                                                                        <div class="comment-btn dropdown"><i--}}
{{--                                                                                class="fas fa-ellipsis-h dropdown-toggle-icon"--}}
{{--                                                                                data-toggle="dropdown"--}}
{{--                                                                                data-display="static"></i>--}}
{{--                                                                            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                                                                <div--}}
{{--                                                                                    class="dropdown-item pointer js_edit-comment">--}}
{{--                                                                                    Edit Comment--}}
{{--                                                                                </div>--}}
{{--                                                                                <div--}}
{{--                                                                                    class="dropdown-item pointer js_delete-comment">--}}
{{--                                                                                    Delete Comment--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="comment-inner-wrapper">--}}
{{--                                                                            <div class="comment-inner js_notifier-flasher">--}}
{{--                                                                                <div class="comment-author"><span--}}
{{--                                                                                        class="js_user-popover"--}}
{{--                                                                                        data-type="user" data-uid="58"> <a--}}
{{--                                                                                            href="http://fyrestream.com//danishtest">Danish Test</a> </span>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="comment-replace">--}}
{{--                                                                                    <div class="comment-text js_readmore"--}}
{{--                                                                                         dir="auto"--}}
{{--                                                                                         style="max-height: none;">abc--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <div--}}
{{--                                                                                        class="comment-text-plain x-hidden">--}}
{{--                                                                                        abc--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                        <ul class="comment-actions clearfix">--}}
{{--                                                                            <li>--}}
{{--                                                                                <div--}}
{{--                                                                                    class="pointer unselectable reactions-wrapper "--}}
{{--                                                                                    data-reaction="">--}}
{{--                                                                                    <div class="reaction-btn">--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="reaction-btn-icon d-none">--}}
{{--                                                                                            <i class="fa fa-thumbs-up fa-fw"></i>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <span--}}
{{--                                                                                            class="reaction-btn-name text-link">Like</span>--}}
{{--                                                                                    </div>--}}
{{--                                                                                    <div class="reactions-container"--}}
{{--                                                                                         style="display: none;">--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="reactions_item duration-1 js_react-comment"--}}
{{--                                                                                            data-reaction="like"--}}
{{--                                                                                            data-reaction-color="blue"--}}
{{--                                                                                            data-title="like">--}}
{{--                                                                                            <div class="emoji emoji--like">--}}
{{--                                                                                                <div class="emoji__hand">--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__thumb"></div>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="reactions_item duration-2 js_react-comment"--}}
{{--                                                                                            data-reaction="love"--}}
{{--                                                                                            data-reaction-color="red"--}}
{{--                                                                                            data-title="love">--}}
{{--                                                                                            <div class="emoji emoji--love">--}}
{{--                                                                                                <div--}}
{{--                                                                                                    class="emoji__heart"></div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="reactions_item duration-3 js_react-comment"--}}
{{--                                                                                            data-reaction="haha"--}}
{{--                                                                                            data-reaction-color="yellow"--}}
{{--                                                                                            data-title="haha">--}}
{{--                                                                                            <div class="emoji emoji--haha">--}}
{{--                                                                                                <div class="emoji__face">--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__eyes"></div>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__mouth">--}}
{{--                                                                                                        <div--}}
{{--                                                                                                            class="emoji__tongue"></div>--}}
{{--                                                                                                    </div>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="reactions_item duration-4 js_react-comment"--}}
{{--                                                                                            data-reaction="yay"--}}
{{--                                                                                            data-reaction-color="yellow"--}}
{{--                                                                                            data-title="yay">--}}
{{--                                                                                            <div class="emoji emoji--yay">--}}
{{--                                                                                                <div class="emoji__face">--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__eyebrows"></div>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__mouth"></div>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="reactions_item duration-5 js_react-comment"--}}
{{--                                                                                            data-reaction="wow"--}}
{{--                                                                                            data-reaction-color="yellow"--}}
{{--                                                                                            data-title="wow">--}}
{{--                                                                                            <div class="emoji emoji--wow">--}}
{{--                                                                                                <div class="emoji__face">--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__eyebrows"></div>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__eyes"></div>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__mouth"></div>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="reactions_item duration-6 js_react-comment"--}}
{{--                                                                                            data-reaction="sad"--}}
{{--                                                                                            data-reaction-color="yellow"--}}
{{--                                                                                            data-title="sad">--}}
{{--                                                                                            <div class="emoji emoji--sad">--}}
{{--                                                                                                <div class="emoji__face">--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__eyebrows"></div>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__eyes"></div>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__mouth"></div>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="reactions_item duration-7 js_react-comment"--}}
{{--                                                                                            data-reaction="angry"--}}
{{--                                                                                            data-reaction-color="orange"--}}
{{--                                                                                            data-title="angry">--}}
{{--                                                                                            <div class="emoji emoji--angry">--}}
{{--                                                                                                <div class="emoji__face">--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__eyebrows"></div>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__eyes"></div>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="emoji__mouth"></div>--}}
{{--                                                                                                </div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li> <span class="text-link js_reply "--}}
{{--                                                                                       data-username="">--}}
{{--					Reply--}}
{{--				</span></li>--}}
{{--                                                                        </ul>--}}
{{--                                                                        <div class="comment-replies x-hidden">--}}
{{--                                                                            <ul class="js_replies"></ul>--}}
{{--                                                                            <div class="x-hidden js_reply-form">--}}
{{--                                                                                <div class="x-form comment-form"><textarea--}}
{{--                                                                                        dir="auto"--}}
{{--                                                                                        class="js_autosize js_mention js_post-reply"--}}
{{--                                                                                        rows="1" placeholder="Write a Reply"--}}
{{--                                                                                        style="overflow: hidden; overflow-wrap: break-word;"></textarea>--}}
{{--                                                                                    <ul class="x-form-tools clearfix">--}}
{{--                                                                                        <li class="x-form-tools-post js_post-reply">--}}
{{--                                                                                            <i class="far fa-paper-plane fa-lg fa-fw"></i>--}}
{{--                                                                                        </li>--}}
{{--                                                                                        <li class="x-form-tools-attach">--}}
{{--                                                                                            <form class="x-uploader"--}}
{{--                                                                                                  action="http://fyrestream.com//includes/ajax/data/upload.php"--}}
{{--                                                                                                  method="post"--}}
{{--                                                                                                  enctype="multipart/form-data">--}}
{{--                                                                                                <input name="file"--}}
{{--                                                                                                       type="file"--}}
{{--                                                                                                       accept=".png, .gif, .jpeg, .jpg"><input--}}
{{--                                                                                                    type="hidden"--}}
{{--                                                                                                    name="secret"--}}
{{--                                                                                                    value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><i--}}
{{--                                                                                                    class="far fa-image fa-lg fa-fw js_x-uploader"--}}
{{--                                                                                                    data-handle="comment"></i>--}}
{{--                                                                                            </form>--}}
{{--                                                                                        </li>--}}
{{--                                                                                        <li class="x-form-tools-voice js_comment-voice-notes-toggle">--}}
{{--                                                                                            <i class="fas fa-microphone fa-lg fa-fw"></i>--}}
{{--                                                                                        </li>--}}
{{--                                                                                        <li class="x-form-tools-emoji js_emoji-menu-toggle">--}}
{{--                                                                                            <i class="far fa-smile-wink fa-lg fa-fw"></i>--}}
{{--                                                                                        </li>--}}
{{--                                                                                    </ul>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div class="comment-voice-notes">--}}
{{--                                                                                    <div class="voice-recording-wrapper"--}}
{{--                                                                                         data-handle="comment">--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="x-hidden js_voice-processing-message">--}}
{{--                                                                                            <div class="svg-container mr5"--}}
{{--                                                                                                 style="width:16px; height:16px; ">--}}
{{--                                                                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->--}}
{{--                                                                                                <svg version="1.1"--}}
{{--                                                                                                     id="Capa_1"--}}
{{--                                                                                                     xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                                                                                     x="0px" y="0px"--}}
{{--                                                                                                     viewBox="0 0 490.667 490.667"--}}
{{--                                                                                                     style="enable-background:new 0 0 490.667 490.667;"--}}
{{--                                                                                                     xml:space="preserve"> <path--}}
{{--                                                                                                        style="fill:#2196F3;"--}}
{{--                                                                                                        d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333--}}
{{--s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"></path>--}}
{{--                                                                                                    <path--}}
{{--                                                                                                        style="fill:#FAFAFA;"--}}
{{--                                                                                                        d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533--}}
{{--c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584--}}
{{--c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2--}}
{{--c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"></path>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g>--}}
{{--                                                                                                    <g></g> </svg>--}}
{{--                                                                                            </div>--}}
{{--                                                                                            Processing<span--}}
{{--                                                                                                class="loading-dots"></span>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="x-hidden js_voice-success-message">--}}
{{--                                                                                            <div class="svg-container mr5"--}}
{{--                                                                                                 style="width:16px; height:16px; ">--}}
{{--                                                                                                <svg height="512pt"--}}
{{--                                                                                                     viewBox="0 -21 512.00533 512"--}}
{{--                                                                                                     width="512pt"--}}
{{--                                                                                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                                                                    <path--}}
{{--                                                                                                        d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"--}}
{{--                                                                                                        fill="#4caf50"></path>--}}
{{--                                                                                                    <path--}}
{{--                                                                                                        d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"--}}
{{--                                                                                                        fill="#2196f3"></path>--}}
{{--                                                                                                </svg>--}}
{{--                                                                                            </div>--}}
{{--                                                                                            Voice note recorded successfully--}}
{{--                                                                                            <div class="float-right">--}}
{{--                                                                                                <button type="button"--}}
{{--                                                                                                        class="close js_voice-remove">--}}
{{--                                                                                                    <span>×</span></button>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="btn-voice-start js_voice-start">--}}
{{--                                                                                            <i class="fas fa-microphone mr5"></i>Record--}}
{{--                                                                                        </div>--}}
{{--                                                                                        <div--}}
{{--                                                                                            class="btn-voice-stop js_voice-stop"--}}
{{--                                                                                            style="display: none"><i--}}
{{--                                                                                                class="far fa-stop-circle mr5"></i>Recording--}}
{{--                                                                                            <span class="js_voice-timer">00:00</span>--}}
{{--                                                                                        </div>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                                <div--}}
{{--                                                                                    class="comment-attachments attachments clearfix x-hidden">--}}
{{--                                                                                    <ul>--}}
{{--                                                                                        <li class="loading">--}}
{{--                                                                                            <div--}}
{{--                                                                                                class="progress x-progress">--}}
{{--                                                                                                <div class="progress-bar"--}}
{{--                                                                                                     role="progressbar"--}}
{{--                                                                                                     aria-valuenow="0"--}}
{{--                                                                                                     aria-valuemin="0"--}}
{{--                                                                                                     aria-valuemax="100"></div>--}}
{{--                                                                                            </div>--}}
{{--                                                                                        </li>--}}
{{--                                                                                    </ul>--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </li>--}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                                {{--<li class="margin-bottom-1em" style="list-style: none;">
                                    <div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2"><a
                                            href="" data-toggle="dropdown" style="cursor: pointer;    z-index: 1;"
                                            data-display="static" class="more-btn "><i
                                                class="fas fa-ellipsis-h"></i></a>
                                        <div
                                            style="position: relative;  margin-bottom: 0px;background: none;border-radius: 0px; box-shadow: none; width: 100%"
                                            class="post
														" data-id="250">
                                            <div class="full-width post-body">
                                                <div class="post-header">
                                                    <div class="post-avatar"><a class="post-avatar-picture"
                                                                                href="http://fyrestream.com//danishtest"
                                                                                style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>
                                                        <i class="fa fa-circle online-dot"></i></div>
                                                    <div class="post-meta">
                                                        <div class="float-right dropdown">
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right post-dropdown-menu">
                                                                <div class="dropdown-item pointer js_save-post">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-bookmark fa-fw"></i> <span>Save Post</span>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-divider"></div>
                                                                <div class="dropdown-item pointer js_pin-post">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-thumbtack fa-fw"></i> <span>Pin Post</span>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item pointer js_edit-post">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-pencil-alt fa-fw"></i> Edit
                                                                        Post
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item pointer js_delete-post">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-trash-alt fa-fw"></i> Delete
                                                                        Post
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="dropdown-item pointer js_disable-post-comments">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-comment-slash fa-fw"></i>
                                                                        <span>Turn off Commenting</span></div>
                                                                </div>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="http://fyrestream.com//posts/250"
                                                                   target="_blank" class="dropdown-item">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-link fa-fw"></i> Open post in
                                                                        new tab
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <span class="js_user-popover" data-type="user" data-uid="58"> <a
                                                                class="post-author"
                                                                href="http://fyrestream.com//danishtest">Danish Test</a> </span>
                                                        <span class="post-title">
											added a photo


				</span> <span class="post-title">
			 &amp; is Feeling Loved <i class="twa twa-lg twa-heart-eyes"></i> </span>
                                                        <div class="post-time"><a
                                                                href="http://fyrestream.com//posts/250"
                                                                class="js_moment" data-time="2021-04-23 06:58:26"
                                                                title="Thursday, April 22, 2021 11:58 pm">8 days ago</a>
                                                            -

                                                            <div class="btn-group" data-toggle="tooltip"
                                                                 data-placement="top" data-value="public"
                                                                 title="Shared with: Public">
                                                                <button type="button" class="btn dropdown-toggle"
                                                                        data-toggle="dropdown" data-display="static"><i
                                                                        class="btn-group-icon fa fa-globe"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-left">
                                                                    <div
                                                                        onclick="setTimeout(function() { location.reload() },1000)"
                                                                        class="dropdown-item pointer js_edit-privacy"
                                                                        data-title="Shared with: Public"
                                                                        data-value="public"><i class="fa fa-globe"></i>
                                                                        Public
                                                                    </div>
                                                                    <div
                                                                        onclick="setTimeout(function() { location.reload() },1000)"
                                                                        class="dropdown-item pointer js_edit-privacy"
                                                                        data-title="Shared with: Friends"
                                                                        data-value="friends"><i class="fa fa-users"></i>
                                                                        Friends
                                                                    </div>
                                                                    <div
                                                                        onclick="setTimeout(function() { location.reload() },1000)"
                                                                        class="dropdown-item pointer js_edit-privacy"
                                                                        data-title="Shared with: Only Me"
                                                                        data-value="me"><i class="fa fa-lock"></i> Only
                                                                        Me
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="textBoldDiv ">
                                                    <div class="post-replace textBoldDiv ">
                                                        <div class="post-text js_readmore" dir="auto"
                                                             style="max-height: none;">Hello
                                                        </div>
                                                        <div class="post-text-translation x-hidden" dir="auto"></div>
                                                        <div class="post-text-plain x-hidden">Hello</div>
                                                    </div>
                                                </div>
                                                <div class="mt10 clearfix">
                                                    <div class="pg_wrapper" style="overflow: hidden">
                                                        <div class="pg_1x "><a href="http://fyrestream.com//photos/125"
                                                                               class="js_lightbox" data-id="125"
                                                                               data-image="http://fyrestream.com//content/uploads/photos/2021/04/sngine_1f719d2ed526b91d1296e376a5eaee62.png"
                                                                               data-context="album"> <img
                                                                    src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_1f719d2ed526b91d1296e376a5eaee62.png">
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="post-stats clearfix">
                                                    <div class="float-right mr10 customReactionLive" data-toggle="modal"
                                                         data-url="posts/who_reacts.php?post_id=250">
                                                        <div class="reactions-stats">
                                                            <div class="reaction-btn-icon-custom"
                                                                 style="    margin-top: 2px;">
                                                                <div class="inline-emoji no_animation"></div>
                                                            </div>
                                                            <span> </span></div>
                                                    </div>
                                                    <span class="float-left"> <span class="pointer js_comments-toggle"> <i
                                                                class="fa fa-comments"></i> 1 Comments
				</span> <span class="pointer shareModal ml10 x-hidden" data-url="posts/who_shares.php?post_id=250"> <i
                                                                class="fa fa-share"></i> 0 Shares
				</span> </span></div>
                                                <div class="post-actions clearfix">
                                                    <div class="action-btn unselectable reactions-wrapper "
                                                         data-reaction="">
                                                        <div class="reaction-btn">
                                                            <div class="reaction-btn-icon customClickLikeReaction1"><img
                                                                    style="width: 16px;position: relative;"
                                                                    src="http://fyrestream.com//content/themes/default/frontend/like_images/group_29.png"
                                                                    alt=""></div>
                                                            <span
                                                                class="reaction-btn-name cus customClickLikeReaction2">Like</span>
                                                        </div>
                                                        <div class="reactions-container" style="display: none;">
                                                            <div class="reactions_item duration-1 js_react-post"
                                                                 data-reaction="like" data-reaction-color="blue"
                                                                 data-title="like">
                                                                <div class="emoji emoji--like">
                                                                    <div class="emoji__hand">
                                                                        <div class="emoji__thumb"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-2 js_react-post"
                                                                 data-reaction="love" data-reaction-color="red"
                                                                 data-title="love">
                                                                <div class="emoji emoji--love">
                                                                    <div class="emoji__heart"></div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-3 js_react-post"
                                                                 data-reaction="haha" data-reaction-color="yellow"
                                                                 data-title="haha">
                                                                <div class="emoji emoji--haha">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyes"></div>
                                                                        <div class="emoji__mouth">
                                                                            <div class="emoji__tongue"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-4 js_react-post"
                                                                 data-reaction="yay" data-reaction-color="yellow"
                                                                 data-title="yay">
                                                                <div class="emoji emoji--yay">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyebrows"></div>
                                                                        <div class="emoji__mouth"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-5 js_react-post"
                                                                 data-reaction="wow" data-reaction-color="yellow"
                                                                 data-title="wow">
                                                                <div class="emoji emoji--wow">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyebrows"></div>
                                                                        <div class="emoji__eyes"></div>
                                                                        <div class="emoji__mouth"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-6 js_react-post"
                                                                 data-reaction="sad" data-reaction-color="yellow"
                                                                 data-title="sad">
                                                                <div class="emoji emoji--sad">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyebrows"></div>
                                                                        <div class="emoji__eyes"></div>
                                                                        <div class="emoji__mouth"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-7 js_react-post"
                                                                 data-reaction="angry" data-reaction-color="orange"
                                                                 data-title="angry">
                                                                <div class="emoji emoji--angry">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyebrows"></div>
                                                                        <div class="emoji__eyes"></div>
                                                                        <div class="emoji__mouth"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-btn js_comment ">
                                                        <div class="svg-container mr5"
                                                             style="width:16px; height:16px; ">
                                                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                            <svg version="1.1" id="Capa_1"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                 y="0px" viewBox="0 0 512 512"
                                                                 style="enable-background:new 0 0 512 512;"
                                                                 xml:space="preserve"> <g>
                                                                    <g>
                                                                        <path d="M448,0H64C28.704,0,0,28.704,0,64v288c0,35.296,28.704,64,64,64h32v80c0,6.208,3.584,11.872,9.216,14.496
		c2.144,0.992,4.48,1.504,6.784,1.504c3.68,0,7.328-1.28,10.24-3.712L232.992,416H448c35.296,0,64-28.704,64-64V64
		C512,28.704,483.296,0,448,0z M480,352c0,17.632-14.368,32-32,32H227.2c-3.744,0-7.36,1.312-10.24,3.712L128,461.856V400
		c0-8.832-7.168-16-16-16H64c-17.632,0-32-14.368-32-32V64c0-17.632,14.368-32,32-32h384c17.632,0,32,14.368,32,32V352z"></path>
                                                                    </g>
                                                                </g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g> </svg>
                                                        </div>
                                                        <span>Comment</span></div>
                                                    <div class="action-btn" data-toggle="modal"
                                                         data-url="posts/share.php?do=create&amp;post_id=250">
                                                        <div class="svg-container mr5"
                                                             style="width:16px; height:16px; ">
                                                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                            <svg version="1.1" id="Capa_1"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                 y="0px" viewBox="0 0 512.008 512.008"
                                                                 style="enable-background:new 0 0 512.008 512.008;"
                                                                 xml:space="preserve"> <g>
                                                                    <g>
                                                                        <path d="M507.328,228.708l-160-160.032c-4.576-4.576-11.392-5.92-17.44-3.456C323.904,67.684,320,73.54,320,80.004v80h-48
		c-149.984,0-272,122.016-272,272c0,7.136,4.736,13.408,11.584,15.36c1.472,0.448,2.944,0.64,4.416,0.64
		c5.408,0,10.592-2.752,13.568-7.52l4.8-7.68c43.424-69.568,121.344-112.8,203.392-112.8H320v80c0,6.464,3.904,12.32,9.888,14.784
		c6.016,2.432,12.864,1.088,17.44-3.456l160-160C513.568,245.092,513.568,234.948,507.328,228.708z M352,361.38v-57.376
		c0-8.832-7.168-16-16-16h-98.24c-75.488,0-147.936,32.288-198.816,86.624C64.704,269.924,159.424,192.004,272,192.004h64
		c8.832,0,16-7.168,16-16v-57.376l121.376,121.376L352,361.38z"></path>
                                                                    </g>
                                                                </g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g> </svg>
                                                        </div>
                                                        <span>Share</span></div>
                                                </div>
                                            </div>
                                            <div class="post-footer ">
                                                <div class="post-comments">
                                                    <div class="comments-filter">
                                                        <div class="btn-group btn-group-sm js_comments-filter"
                                                             data-value="post_comments">
                                                            <button type="button" class="btn dropdown-toggle ptb0 plr0"
                                                                    data-toggle="dropdown" data-display="static"><span
                                                                    class="btn-group-text">Most Recent</span></button>
                                                            <div class="dropdown-menu dropdown-menu-left">
                                                                <div class="dropdown-item pointer"
                                                                     data-value="post_comments" data-id="250">Most
                                                                    Recent
                                                                </div>
                                                                <div class="dropdown-item pointer"
                                                                     data-value="post_comments_top" data-id="250">Top
                                                                    Comments
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment js_comment-form " data-handle="post"
                                                         data-id="250">
                                                        <div class="comment-avatar"><a class="comment-avatar-picture"
                                                                                       href="http://fyrestream.com//danishtest"
                                                                                       style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>
                                                        </div>
                                                        <div class="comment-data">
                                                            <div class="x-form comment-form"><textarea dir="auto"
                                                                                                       class="js_autosize js_mention js_post-comment"
                                                                                                       rows="1"
                                                                                                       placeholder="Write a comment..."
                                                                                                       style="overflow: hidden; overflow-wrap: break-word; height: 36px;"></textarea>
                                                                <ul class="x-form-tools clearfix">
                                                                    <li class="x-form-tools-post js_post-comment"><i
                                                                            class="far fa-paper-plane fa-lg fa-fw"></i>
                                                                    </li>
                                                                    <li class="x-form-tools-attach">
                                                                        <form class="x-uploader"
                                                                              action="http://fyrestream.com//includes/ajax/data/upload.php"
                                                                              method="post"
                                                                              enctype="multipart/form-data"><input
                                                                                name="file" type="file"
                                                                                accept=".png, .gif, .jpeg, .jpg"><input
                                                                                type="hidden" name="secret"
                                                                                value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><i
                                                                                class="far fa-image fa-lg fa-fw js_x-uploader"
                                                                                data-handle="comment"></i></form>
                                                                    </li>
                                                                    <li class="x-form-tools-voice js_comment-voice-notes-toggle">
                                                                        <i class="fas fa-microphone fa-lg fa-fw"></i>
                                                                    </li>
                                                                    <li class="x-form-tools-emoji js_emoji-menu-toggle">
                                                                        <i class="far fa-smile-wink fa-lg fa-fw"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment-voice-notes">
                                                                <div class="voice-recording-wrapper"
                                                                     data-handle="comment">
                                                                    <div class="x-hidden js_voice-processing-message">
                                                                        <div class="svg-container mr5"
                                                                             style="width:16px; height:16px; ">
                                                                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                                            <svg version="1.1" id="Capa_1"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 x="0px" y="0px"
                                                                                 viewBox="0 0 490.667 490.667"
                                                                                 style="enable-background:new 0 0 490.667 490.667;"
                                                                                 xml:space="preserve"> <path
                                                                                    style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333
s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"></path>
                                                                                <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533
c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584
c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2
c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"></path>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g> </svg>
                                                                        </div>
                                                                        Processing<span class="loading-dots"></span>
                                                                    </div>
                                                                    <div class="x-hidden js_voice-success-message">
                                                                        <div class="svg-container mr5"
                                                                             style="width:16px; height:16px; ">
                                                                            <svg height="512pt"
                                                                                 viewBox="0 -21 512.00533 512"
                                                                                 width="512pt"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                                                    fill="#4caf50"></path>
                                                                                <path
                                                                                    d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                                                    fill="#2196f3"></path>
                                                                            </svg>
                                                                        </div>
                                                                        Voice note recorded successfully
                                                                        <div class="float-right">
                                                                            <button type="button"
                                                                                    class="close js_voice-remove"><span>×</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="btn-voice-start js_voice-start"><i
                                                                            class="fas fa-microphone mr5"></i>Record
                                                                    </div>
                                                                    <div class="btn-voice-stop js_voice-stop"
                                                                         style="display: none"><i
                                                                            class="far fa-stop-circle mr5"></i>Recording
                                                                        <span class="js_voice-timer">00:00</span></div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="comment-attachments attachments clearfix x-hidden">
                                                                <ul>
                                                                    <li class="loading">
                                                                        <div class="progress x-progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                 aria-valuenow="0" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pb10 text-center js_comment-disabled-msg x-hidden">
                                                        Commenting has been turned off for this post.
                                                    </div>
                                                    <div class="text-center x-hidden js_comments-filter-loader">
                                                        <div class="loader loader_large"></div>
                                                    </div>
                                                    <ul class="js_comments pt10 ">
                                                        <li>
                                                            <div class="comment " data-id="80" id="comment_80">
                                                                <div class="comment-avatar"><a
                                                                        class="comment-avatar-picture"
                                                                        href="http://fyrestream.com//danishtest"
                                                                        style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>
                                                                </div>
                                                                <div class="comment-data">
                                                                    <div class="comment-btn dropdown"><i
                                                                            class="fas fa-ellipsis-h dropdown-toggle-icon"
                                                                            data-toggle="dropdown"
                                                                            data-display="static"></i>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <div
                                                                                class="dropdown-item pointer js_edit-comment">
                                                                                Edit Comment
                                                                            </div>
                                                                            <div
                                                                                class="dropdown-item pointer js_delete-comment">
                                                                                Delete Comment
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-inner-wrapper">
                                                                        <div class="comment-inner js_notifier-flasher">
                                                                            <div class="comment-author"><span
                                                                                    class="js_user-popover"
                                                                                    data-type="user" data-uid="58"> <a
                                                                                        href="http://fyrestream.com//danishtest">Danish Test</a> </span>
                                                                            </div>
                                                                            <div class="comment-replace">
                                                                                <div class="comment-text js_readmore"
                                                                                     dir="auto"
                                                                                     style="max-height: none;">good
                                                                                </div>
                                                                                <div
                                                                                    class="comment-text-plain x-hidden">
                                                                                    good
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="comment-actions clearfix">
                                                                        <li>
                                                                            <div
                                                                                class="pointer unselectable reactions-wrapper "
                                                                                data-reaction="">
                                                                                <div class="reaction-btn">
                                                                                    <div
                                                                                        class="reaction-btn-icon d-none">
                                                                                        <i class="fa fa-thumbs-up fa-fw"></i>
                                                                                    </div>
                                                                                    <span
                                                                                        class="reaction-btn-name text-link">Like</span>
                                                                                </div>
                                                                                <div class="reactions-container"
                                                                                     style="display: none;">
                                                                                    <div
                                                                                        class="reactions_item duration-1 js_react-comment"
                                                                                        data-reaction="like"
                                                                                        data-reaction-color="blue"
                                                                                        data-title="like">
                                                                                        <div class="emoji emoji--like">
                                                                                            <div class="emoji__hand">
                                                                                                <div
                                                                                                    class="emoji__thumb"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="reactions_item duration-2 js_react-comment"
                                                                                        data-reaction="love"
                                                                                        data-reaction-color="red"
                                                                                        data-title="love">
                                                                                        <div class="emoji emoji--love">
                                                                                            <div
                                                                                                class="emoji__heart"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="reactions_item duration-3 js_react-comment"
                                                                                        data-reaction="haha"
                                                                                        data-reaction-color="yellow"
                                                                                        data-title="haha">
                                                                                        <div class="emoji emoji--haha">
                                                                                            <div class="emoji__face">
                                                                                                <div
                                                                                                    class="emoji__eyes"></div>
                                                                                                <div
                                                                                                    class="emoji__mouth">
                                                                                                    <div
                                                                                                        class="emoji__tongue"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="reactions_item duration-4 js_react-comment"
                                                                                        data-reaction="yay"
                                                                                        data-reaction-color="yellow"
                                                                                        data-title="yay">
                                                                                        <div class="emoji emoji--yay">
                                                                                            <div class="emoji__face">
                                                                                                <div
                                                                                                    class="emoji__eyebrows"></div>
                                                                                                <div
                                                                                                    class="emoji__mouth"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="reactions_item duration-5 js_react-comment"
                                                                                        data-reaction="wow"
                                                                                        data-reaction-color="yellow"
                                                                                        data-title="wow">
                                                                                        <div class="emoji emoji--wow">
                                                                                            <div class="emoji__face">
                                                                                                <div
                                                                                                    class="emoji__eyebrows"></div>
                                                                                                <div
                                                                                                    class="emoji__eyes"></div>
                                                                                                <div
                                                                                                    class="emoji__mouth"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="reactions_item duration-6 js_react-comment"
                                                                                        data-reaction="sad"
                                                                                        data-reaction-color="yellow"
                                                                                        data-title="sad">
                                                                                        <div class="emoji emoji--sad">
                                                                                            <div class="emoji__face">
                                                                                                <div
                                                                                                    class="emoji__eyebrows"></div>
                                                                                                <div
                                                                                                    class="emoji__eyes"></div>
                                                                                                <div
                                                                                                    class="emoji__mouth"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="reactions_item duration-7 js_react-comment"
                                                                                        data-reaction="angry"
                                                                                        data-reaction-color="orange"
                                                                                        data-title="angry">
                                                                                        <div class="emoji emoji--angry">
                                                                                            <div class="emoji__face">
                                                                                                <div
                                                                                                    class="emoji__eyebrows"></div>
                                                                                                <div
                                                                                                    class="emoji__eyes"></div>
                                                                                                <div
                                                                                                    class="emoji__mouth"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li> <span class="text-link js_reply "
                                                                                   data-username="">
					Reply
				</span></li>
                                                                    </ul>
                                                                    <div class="comment-replies x-hidden">
                                                                        <ul class="js_replies"></ul>
                                                                        <div class="x-hidden js_reply-form">
                                                                            <div class="x-form comment-form"><textarea
                                                                                    dir="auto"
                                                                                    class="js_autosize js_mention js_post-reply"
                                                                                    rows="1" placeholder="Write a Reply"
                                                                                    style="overflow: hidden; overflow-wrap: break-word;"></textarea>
                                                                                <ul class="x-form-tools clearfix">
                                                                                    <li class="x-form-tools-post js_post-reply">
                                                                                        <i class="far fa-paper-plane fa-lg fa-fw"></i>
                                                                                    </li>
                                                                                    <li class="x-form-tools-attach">
                                                                                        <form class="x-uploader"
                                                                                              action="http://fyrestream.com//includes/ajax/data/upload.php"
                                                                                              method="post"
                                                                                              enctype="multipart/form-data">
                                                                                            <input name="file"
                                                                                                   type="file"
                                                                                                   accept=".png, .gif, .jpeg, .jpg"><input
                                                                                                type="hidden"
                                                                                                name="secret"
                                                                                                value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><i
                                                                                                class="far fa-image fa-lg fa-fw js_x-uploader"
                                                                                                data-handle="comment"></i>
                                                                                        </form>
                                                                                    </li>
                                                                                    <li class="x-form-tools-voice js_comment-voice-notes-toggle">
                                                                                        <i class="fas fa-microphone fa-lg fa-fw"></i>
                                                                                    </li>
                                                                                    <li class="x-form-tools-emoji js_emoji-menu-toggle">
                                                                                        <i class="far fa-smile-wink fa-lg fa-fw"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="comment-voice-notes">
                                                                                <div class="voice-recording-wrapper"
                                                                                     data-handle="comment">
                                                                                    <div
                                                                                        class="x-hidden js_voice-processing-message">
                                                                                        <div class="svg-container mr5"
                                                                                             style="width:16px; height:16px; ">
                                                                                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                                                            <svg version="1.1"
                                                                                                 id="Capa_1"
                                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                 x="0px" y="0px"
                                                                                                 viewBox="0 0 490.667 490.667"
                                                                                                 style="enable-background:new 0 0 490.667 490.667;"
                                                                                                 xml:space="preserve"> <path
                                                                                                    style="fill:#2196F3;"
                                                                                                    d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333
s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"></path>
                                                                                                <path
                                                                                                    style="fill:#FAFAFA;"
                                                                                                    d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533
c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584
c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2
c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"></path>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g>
                                                                                                <g></g> </svg>
                                                                                        </div>
                                                                                        Processing<span
                                                                                            class="loading-dots"></span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="x-hidden js_voice-success-message">
                                                                                        <div class="svg-container mr5"
                                                                                             style="width:16px; height:16px; ">
                                                                                            <svg height="512pt"
                                                                                                 viewBox="0 -21 512.00533 512"
                                                                                                 width="512pt"
                                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                                                                    fill="#4caf50"></path>
                                                                                                <path
                                                                                                    d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                                                                    fill="#2196f3"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        Voice note recorded successfully
                                                                                        <div class="float-right">
                                                                                            <button type="button"
                                                                                                    class="close js_voice-remove">
                                                                                                <span>×</span></button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="btn-voice-start js_voice-start">
                                                                                        <i class="fas fa-microphone mr5"></i>Record
                                                                                    </div>
                                                                                    <div
                                                                                        class="btn-voice-stop js_voice-stop"
                                                                                        style="display: none"><i
                                                                                            class="far fa-stop-circle mr5"></i>Recording
                                                                                        <span class="js_voice-timer">00:00</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="comment-attachments attachments clearfix x-hidden">
                                                                                <ul>
                                                                                    <li class="loading">
                                                                                        <div
                                                                                            class="progress x-progress">
                                                                                            <div class="progress-bar"
                                                                                                 role="progressbar"
                                                                                                 aria-valuenow="0"
                                                                                                 aria-valuemin="0"
                                                                                                 aria-valuemax="100"></div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="margin-bottom-1em" style="list-style: none;">
                                    <div class="post-card d-flex flex-column flex-md-row border rounded p-2 mt-2"><a
                                            href="" data-toggle="dropdown" style="cursor: pointer;    z-index: 1;"
                                            data-display="static" class="more-btn "><i
                                                class="fas fa-ellipsis-h"></i></a>
                                        <div
                                            style="position: relative;  margin-bottom: 0px;background: none;border-radius: 0px; box-shadow: none; width: 100%"
                                            class="post
														" data-id="249">
                                            <div class="full-width post-body">
                                                <div class="post-header">
                                                    <div class="post-avatar"><a class="post-avatar-picture"
                                                                                href="http://fyrestream.com//danishtest"
                                                                                style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>
                                                        <i class="fa fa-circle online-dot"></i></div>
                                                    <div class="post-meta">
                                                        <div class="float-right dropdown">
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right post-dropdown-menu">
                                                                <div class="dropdown-item pointer js_save-post">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-bookmark fa-fw"></i> <span>Save Post</span>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-divider"></div>
                                                                <div class="dropdown-item pointer js_pin-post">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-thumbtack fa-fw"></i> <span>Pin Post</span>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item pointer js_edit-post">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-pencil-alt fa-fw"></i> Edit
                                                                        Post
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item pointer js_delete-post">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-trash-alt fa-fw"></i> Delete
                                                                        Post
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="dropdown-item pointer js_disable-post-comments">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-comment-slash fa-fw"></i>
                                                                        <span>Turn off Commenting</span></div>
                                                                </div>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="http://fyrestream.com//posts/249"
                                                                   target="_blank" class="dropdown-item">
                                                                    <div class="action no-desc"><i
                                                                            class="fa fa-link fa-fw"></i> Open post in
                                                                        new tab
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <span class="js_user-popover" data-type="user" data-uid="58"> <a
                                                                class="post-author"
                                                                href="http://fyrestream.com//danishtest">Danish Test</a> </span>
                                                        <span class="post-title">
						updated the profile picture


				</span>
                                                        <div class="post-time"><a
                                                                href="http://fyrestream.com//posts/249"
                                                                class="js_moment" data-time="2021-04-23 06:55:59"
                                                                title="Thursday, April 22, 2021 11:55 pm">8 days ago</a>
                                                            -

                                                            <div class="btn-group" data-toggle="tooltip"
                                                                 data-placement="top" data-value="public"
                                                                 title="Shared with: Public">
                                                                <button type="button" class="btn dropdown-toggle"
                                                                        data-toggle="dropdown" data-display="static"><i
                                                                        class="btn-group-icon fa fa-globe"></i></button>
                                                                <div class="dropdown-menu dropdown-menu-left">
                                                                    <div
                                                                        onclick="setTimeout(function() { location.reload() },1000)"
                                                                        class="dropdown-item pointer js_edit-privacy"
                                                                        data-title="Shared with: Public"
                                                                        data-value="public"><i class="fa fa-globe"></i>
                                                                        Public
                                                                    </div>
                                                                    <div
                                                                        onclick="setTimeout(function() { location.reload() },1000)"
                                                                        class="dropdown-item pointer js_edit-privacy"
                                                                        data-title="Shared with: Friends"
                                                                        data-value="friends"><i class="fa fa-users"></i>
                                                                        Friends
                                                                    </div>
                                                                    <div
                                                                        onclick="setTimeout(function() { location.reload() },1000)"
                                                                        class="dropdown-item pointer js_edit-privacy"
                                                                        data-title="Shared with: Only Me"
                                                                        data-value="me"><i class="fa fa-lock"></i> Only
                                                                        Me
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="textBoldDiv ">
                                                    <div class="post-replace textBoldDiv ">
                                                        <div class="post-text js_readmore" dir="auto"
                                                             style="max-height: none;"></div>
                                                        <div class="post-text-translation x-hidden" dir="auto"></div>
                                                        <div class="post-text-plain x-hidden"></div>
                                                    </div>
                                                </div>
                                                <div class="mt10 clearfix">
                                                    <div class="pg_wrapper" style="overflow: hidden">
                                                        <div class="pg_1x "><a href="http://fyrestream.com//photos/124"
                                                                               class="js_lightbox" data-id="124"
                                                                               data-image="http://fyrestream.com//content/uploads/photos/2021/04/sngine_356feaec21c0f5a215d5b555d114e8e6.png"
                                                                               data-context="album"> <img
                                                                    src="http://fyrestream.com//content/uploads/photos/2021/04/sngine_356feaec21c0f5a215d5b555d114e8e6.png">
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="post-stats clearfix">
                                                    <div class="float-right mr10 customReactionLive" data-toggle="modal"
                                                         data-url="posts/who_reacts.php?post_id=249">
                                                        <div class="reactions-stats">
                                                            <div class="reaction-btn-icon-custom"
                                                                 style="    margin-top: 2px;">
                                                                <div class="inline-emoji no_animation"></div>
                                                            </div>
                                                            <span> </span></div>
                                                    </div>
                                                    <span class="float-left"> <span class="pointer js_comments-toggle"> <i
                                                                class="fa fa-comments"></i> 0 Comments
				</span> <span class="pointer shareModal ml10 x-hidden" data-url="posts/who_shares.php?post_id=249"> <i
                                                                class="fa fa-share"></i> 0 Shares
				</span> </span></div>
                                                <div class="post-actions clearfix">
                                                    <div class="action-btn unselectable reactions-wrapper "
                                                         data-reaction="">
                                                        <div class="reaction-btn">
                                                            <div class="reaction-btn-icon customClickLikeReaction1"><img
                                                                    style="width: 16px;position: relative;"
                                                                    src="http://fyrestream.com//content/themes/default/frontend/like_images/group_29.png"
                                                                    alt=""></div>
                                                            <span
                                                                class="reaction-btn-name cus customClickLikeReaction2">Like</span>
                                                        </div>
                                                        <div class="reactions-container" style="display: none;">
                                                            <div class="reactions_item duration-1 js_react-post"
                                                                 data-reaction="like" data-reaction-color="blue"
                                                                 data-title="like">
                                                                <div class="emoji emoji--like">
                                                                    <div class="emoji__hand">
                                                                        <div class="emoji__thumb"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-2 js_react-post"
                                                                 data-reaction="love" data-reaction-color="red"
                                                                 data-title="love">
                                                                <div class="emoji emoji--love">
                                                                    <div class="emoji__heart"></div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-3 js_react-post"
                                                                 data-reaction="haha" data-reaction-color="yellow"
                                                                 data-title="haha">
                                                                <div class="emoji emoji--haha">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyes"></div>
                                                                        <div class="emoji__mouth">
                                                                            <div class="emoji__tongue"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-4 js_react-post"
                                                                 data-reaction="yay" data-reaction-color="yellow"
                                                                 data-title="yay">
                                                                <div class="emoji emoji--yay">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyebrows"></div>
                                                                        <div class="emoji__mouth"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-5 js_react-post"
                                                                 data-reaction="wow" data-reaction-color="yellow"
                                                                 data-title="wow">
                                                                <div class="emoji emoji--wow">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyebrows"></div>
                                                                        <div class="emoji__eyes"></div>
                                                                        <div class="emoji__mouth"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-6 js_react-post"
                                                                 data-reaction="sad" data-reaction-color="yellow"
                                                                 data-title="sad">
                                                                <div class="emoji emoji--sad">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyebrows"></div>
                                                                        <div class="emoji__eyes"></div>
                                                                        <div class="emoji__mouth"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="reactions_item duration-7 js_react-post"
                                                                 data-reaction="angry" data-reaction-color="orange"
                                                                 data-title="angry">
                                                                <div class="emoji emoji--angry">
                                                                    <div class="emoji__face">
                                                                        <div class="emoji__eyebrows"></div>
                                                                        <div class="emoji__eyes"></div>
                                                                        <div class="emoji__mouth"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-btn js_comment ">
                                                        <div class="svg-container mr5"
                                                             style="width:16px; height:16px; ">
                                                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                            <svg version="1.1" id="Capa_1"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                 y="0px" viewBox="0 0 512 512"
                                                                 style="enable-background:new 0 0 512 512;"
                                                                 xml:space="preserve"> <g>
                                                                    <g>
                                                                        <path d="M448,0H64C28.704,0,0,28.704,0,64v288c0,35.296,28.704,64,64,64h32v80c0,6.208,3.584,11.872,9.216,14.496
		c2.144,0.992,4.48,1.504,6.784,1.504c3.68,0,7.328-1.28,10.24-3.712L232.992,416H448c35.296,0,64-28.704,64-64V64
		C512,28.704,483.296,0,448,0z M480,352c0,17.632-14.368,32-32,32H227.2c-3.744,0-7.36,1.312-10.24,3.712L128,461.856V400
		c0-8.832-7.168-16-16-16H64c-17.632,0-32-14.368-32-32V64c0-17.632,14.368-32,32-32h384c17.632,0,32,14.368,32,32V352z"></path>
                                                                    </g>
                                                                </g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g> </svg>
                                                        </div>
                                                        <span>Comment</span></div>
                                                    <div class="action-btn" data-toggle="modal"
                                                         data-url="posts/share.php?do=create&amp;post_id=249">
                                                        <div class="svg-container mr5"
                                                             style="width:16px; height:16px; ">
                                                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                            <svg version="1.1" id="Capa_1"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                 y="0px" viewBox="0 0 512.008 512.008"
                                                                 style="enable-background:new 0 0 512.008 512.008;"
                                                                 xml:space="preserve"> <g>
                                                                    <g>
                                                                        <path d="M507.328,228.708l-160-160.032c-4.576-4.576-11.392-5.92-17.44-3.456C323.904,67.684,320,73.54,320,80.004v80h-48
		c-149.984,0-272,122.016-272,272c0,7.136,4.736,13.408,11.584,15.36c1.472,0.448,2.944,0.64,4.416,0.64
		c5.408,0,10.592-2.752,13.568-7.52l4.8-7.68c43.424-69.568,121.344-112.8,203.392-112.8H320v80c0,6.464,3.904,12.32,9.888,14.784
		c6.016,2.432,12.864,1.088,17.44-3.456l160-160C513.568,245.092,513.568,234.948,507.328,228.708z M352,361.38v-57.376
		c0-8.832-7.168-16-16-16h-98.24c-75.488,0-147.936,32.288-198.816,86.624C64.704,269.924,159.424,192.004,272,192.004h64
		c8.832,0,16-7.168,16-16v-57.376l121.376,121.376L352,361.38z"></path>
                                                                    </g>
                                                                </g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g>
                                                                <g></g> </svg>
                                                        </div>
                                                        <span>Share</span></div>
                                                </div>
                                            </div>
                                            <div class="post-footer ">
                                                <div class="post-comments">
                                                    <div class="comment js_comment-form " data-handle="post"
                                                         data-id="249">
                                                        <div class="comment-avatar"><a class="comment-avatar-picture"
                                                                                       href="http://fyrestream.com//danishtest"
                                                                                       style="background-image:url(http://fyrestream.com//content/uploads/photos/2021/04/sngine_06ff82b3be70069e3758409a11465b2d_cropped.png);"> </a>
                                                        </div>
                                                        <div class="comment-data">
                                                            <div class="x-form comment-form"><textarea dir="auto"
                                                                                                       class="js_autosize js_mention js_post-comment"
                                                                                                       rows="1"
                                                                                                       placeholder="Write a comment..."
                                                                                                       style="overflow: hidden; overflow-wrap: break-word; height: 36px;"></textarea>
                                                                <ul class="x-form-tools clearfix">
                                                                    <li class="x-form-tools-post js_post-comment"><i
                                                                            class="far fa-paper-plane fa-lg fa-fw"></i>
                                                                    </li>
                                                                    <li class="x-form-tools-attach">
                                                                        <form class="x-uploader"
                                                                              action="http://fyrestream.com//includes/ajax/data/upload.php"
                                                                              method="post"
                                                                              enctype="multipart/form-data"><input
                                                                                name="file" type="file"
                                                                                accept=".png, .gif, .jpeg, .jpg"><input
                                                                                type="hidden" name="secret"
                                                                                value="0fc97dd1bfe3e70cd9fe1d48caa2d367"><i
                                                                                class="far fa-image fa-lg fa-fw js_x-uploader"
                                                                                data-handle="comment"></i></form>
                                                                    </li>
                                                                    <li class="x-form-tools-voice js_comment-voice-notes-toggle">
                                                                        <i class="fas fa-microphone fa-lg fa-fw"></i>
                                                                    </li>
                                                                    <li class="x-form-tools-emoji js_emoji-menu-toggle">
                                                                        <i class="far fa-smile-wink fa-lg fa-fw"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment-voice-notes">
                                                                <div class="voice-recording-wrapper"
                                                                     data-handle="comment">
                                                                    <div class="x-hidden js_voice-processing-message">
                                                                        <div class="svg-container mr5"
                                                                             style="width:16px; height:16px; ">
                                                                            <!--?xml version="1.0" encoding="iso-8859-1"?-->
                                                                            <svg version="1.1" id="Capa_1"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 x="0px" y="0px"
                                                                                 viewBox="0 0 490.667 490.667"
                                                                                 style="enable-background:new 0 0 490.667 490.667;"
                                                                                 xml:space="preserve"> <path
                                                                                    style="fill:#2196F3;" d="M245.333,0C109.839,0,0,109.839,0,245.333s109.839,245.333,245.333,245.333
s245.333-109.839,245.333-245.333C490.514,109.903,380.764,0.153,245.333,0z"></path>
                                                                                <path style="fill:#FAFAFA;" d="M267.968,82.219c-12.496-12.492-32.752-12.492-45.248,0L104.533,200.533
c-18.889,18.894-18.889,49.522,0,68.416c19.139,18.289,49.277,18.289,68.416,0l19.2-19.2v123.584
c0,29.455,23.878,53.333,53.333,53.333c29.455,0,53.333-23.878,53.333-53.333V249.749l19.2,19.2
c19.139,18.289,49.277,18.289,68.416,0c18.889-18.894,18.889-49.522,0-68.416L267.968,82.219z"></path>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g>
                                                                                <g></g> </svg>
                                                                        </div>
                                                                        Processing<span class="loading-dots"></span>
                                                                    </div>
                                                                    <div class="x-hidden js_voice-success-message">
                                                                        <div class="svg-container mr5"
                                                                             style="width:16px; height:16px; ">
                                                                            <svg height="512pt"
                                                                                 viewBox="0 -21 512.00533 512"
                                                                                 width="512pt"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="m306.582031 317.25c-12.074219 12.097656-28.160156 18.753906-45.25 18.753906-17.085937 0-33.171875-6.65625-45.246093-18.753906l-90.667969-90.664062c-12.09375-12.078126-18.75-28.160157-18.75-45.25 0-17.089844 6.65625-33.171876 18.75-45.246094 12.074219-12.097656 28.160156-18.753906 45.25-18.753906 17.085937 0 33.171875 6.65625 45.246093 18.753906l45.417969 45.394531 125.378907-125.375c-40.960938-34.921875-93.996094-56.10546875-152.042969-56.10546875-129.601563 0-234.667969 105.06640575-234.667969 234.66406275 0 129.601562 105.066406 234.667969 234.667969 234.667969 129.597656 0 234.664062-105.066407 234.664062-234.667969 0-24.253907-3.6875-47.636719-10.515625-69.652344zm0 0"
                                                                                    fill="#4caf50"></path>
                                                                                <path
                                                                                    d="m261.332031 293.335938c-5.460937 0-10.921875-2.089844-15.082031-6.25l-90.664062-90.667969c-8.34375-8.339844-8.34375-21.824219 0-30.164063 8.339843-8.34375 21.820312-8.34375 30.164062 0l75.582031 75.582032 214.253907-214.25c8.339843-8.339844 21.820312-8.339844 30.164062 0 8.339844 8.34375 8.339844 21.824218 0 30.167968l-229.335938 229.332032c-4.15625 4.160156-9.621093 6.25-15.082031 6.25zm0 0"
                                                                                    fill="#2196f3"></path>
                                                                            </svg>
                                                                        </div>
                                                                        Voice note recorded successfully
                                                                        <div class="float-right">
                                                                            <button type="button"
                                                                                    class="close js_voice-remove"><span>×</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="btn-voice-start js_voice-start"><i
                                                                            class="fas fa-microphone mr5"></i>Record
                                                                    </div>
                                                                    <div class="btn-voice-stop js_voice-stop"
                                                                         style="display: none"><i
                                                                            class="far fa-stop-circle mr5"></i>Recording
                                                                        <span class="js_voice-timer">00:00</span></div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="comment-attachments attachments clearfix x-hidden">
                                                                <ul>
                                                                    <li class="loading">
                                                                        <div class="progress x-progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                 aria-valuenow="0" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pb10 text-center js_comment-disabled-msg x-hidden">
                                                        Commenting has been turned off for this post.
                                                    </div>
                                                    <div class="text-center x-hidden js_comments-filter-loader">
                                                        <div class="loader loader_large"></div>
                                                    </div>
                                                    <ul class="js_comments  "></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>--}}
                            </ul>
                            <div class="alert alert-post see-more mb20 js_see-more js_see-more-infinite done"
                                 data-get="posts_profile" data-filter="all" data-id="58"><span style="">There is no more data to show</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                        </div>
                    </div>
                    <div class="ads"><a href="#" class="d-flex align-items-center support justify-content-center mb-3" style="border-radius: 10px;
    padding: 10px 20px;
    background: #fff0ef;">
                            <img src="http://fyrestream.com//content/themes/social/images/support_diamond.png"
                                 alt="support-img" class="mr-2"> <h6>Show Support</h6></a>
                        <div class="mb-3"><img src="http://fyrestream.com//content/themes/social/images/fck.png" alt="">
                        </div>
                        <div class="mb-3">
                            <button class="btn" style="background: linear-gradient(#ff6e5a, #ff9d18);
    width: 100%;
    color: #fff;
    padding: 20px;
    font-weight: bold;
    font-size: 14px;
    border: none;">Create a Group</button>
                        </div>
                        <div class="mb-3"><img src="http://fyrestream.com//content/themes/social/images/nescafe.png"
                                               alt=""></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="section1 bg-white p-3 mb-3">
                <div class="row">
                    <div class="col-8"><h5 class="small font-weight-bold">Most Watched</h5></div>
                    <div class="col-4 text-right"><span class="gear"><i class="fas fa-cog"></i></span></div>
                </div>
            </div>
            <div class="section2 bg-white p-3 mb-3"><h5 class="small font-weight-bolder">Marketplace Classified</h5>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <img src="http://fyrestream.com//content/themes/social/images/spaghetti.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h6 class="small">Have something to sell?</h6>
                        <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                        <button class="w-100 btn" style="background: linear-gradient(#ff6e5a, #ff9d18); color: #fff; padding: 6px; font-size: 10px; border: none;">Get started today</button>
                    </div>
                </div>
            </div>
            <div class="section3 bg-white p-3 mb-3">
                <div class="row">
                    <div class="col-8">
                        <div class="d-flex align-items-center">
                            <img src="http://fyrestream.com//content/themes/social/images/boy.png" class="mr-2" alt="">
                            <h5>Murtaza Ali</h5></div>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <button class="btn w-100" style="background: linear-gradient(#ff6e5a, #ff9d18); color: #fff; padding: 6px; font-size: 10px; border: none;"><span>#</span>Add</button>
                    </div>
                </div>
            </div>

            <div class="section4 bg-white p-3 mb-3"><h5 class="small font-weight-bolder" style="color: black;">Suggested Groups</h5>
                <div class="d-flex mb-1 align-items-center mt-3">
                    <div><img src="http://fyrestream.com//content/themes/social/images/test_group.png" alt=""
                              class="mr-2"></div>
                    <div><h6 class="small">Test Group</h6>
                        <p class="small">4 members</p></div>
                </div>
                <div class="d-flex mb-1 align-items-center">
                    <div><img src="http://fyrestream.com//content/themes/social/images/pakistan.png" alt=""
                              class="mr-2"></div>
                    <div><h6 class="small">Pakistan</h6>
                        <p class="small">4 members</p></div>
                </div>
                <div>
                    <button class="w-100 border btn">See More</button>
                </div>
            </div>
            <footer class="sidebar-footer text-center">
                <small class="font-weight-bolder">© 2021 By Firestream</small>
                <div class="d-flex align-items-center justify-content-center mt-3">
                    <p class="mr-1"><a href="#" class="text-primary">Advertise?</a></p>
                    <p class="mr-1">|</p>
                    <p class="mr-1"><a href="#" class="text-primary">Help</a></p>
                    <p class="mr-1">|</p>
                    <p class="mr-1"><a href="#" class="text-primary">Privacy</a></p></div>
            </footer>
        </div>
    </div>
@endsection
