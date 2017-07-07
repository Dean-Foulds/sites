<?php
/*
Template Name: Donate Step 2
*/

/*
echo '<pre>';
print_r($_POST);
*/
?>

<?php get_header(); ?>

    <div id="content">

        <header class="article-header">
            <?php get_template_part('parts/content', 'donate-page-title'); ?>
        </header>

        <div id="inner-content" class="row">

            <form id="donate-step-2" method="post" action="<?php echo get_template_directory_uri(); ?>/paypal/send-to-paypal.php">
                <main id="main" class="small-12 columns" role="main">

                    <div class="row">
                        <div class="medium-4 columns">

                            <div class="row donation-form-row">
                                <div class="small-12 columns">
                                    <label class="text-upper text-red"><h6>Type of donation</h6></label>
                                </div>
                                <div class="small-12 columns">
                                    <button class="spana-donation-form-button active"><?php echo $_POST['donation-type']; ?></button>
                                </div>
                            </div>

                            <label class="text-upper text-red"><h6>Donation Amount</h6></label>

                            <div class="one-off-donation">
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="row collapse prefix-radius">
                                            <div class="small-3 columns">
                                                <span class="prefix other-amount">£</span>
                                            </div>
                                            <div class="small-9 columns">
                                                <input type="text" class="other-amount" name="amount" value="<?php echo $_POST['donationfix']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="medium-8 columns">

                            <h4>Fill in your details and click ‘proceed to paypal’ to pay via your Paypal account</h4>

                            <div class="giftaid-notice">
                                <img src="/wp-content/uploads/2016/10/giftaid.png" alt="Giftaid It"/>

                                <input id="gift_aid" name="gift_aid" type="checkbox" value="1">

                                <label for="gift_aid">Yes, I would like SPANA to receive Gift Aid on my donation</label>
                                <p>I want all donations I've made to SPANA in the past four years and all donations in future to be treated as Gift
                                    Aid donations until I notify you otherwise. To qualify for Gift Aid, what you pay in income or capital gains tax must
                                    at least equal the amount claimed by all charities and CASCs in the tax year from HMRC. Council Tax and VAT
                                    do not qualify. You are responsible for any tax shortfall.</p>
                            </div>

                            <div class="donation-details">

                                <div class="row">
                                    <div class="small-6 columns">
                                        <label class="text-upper text-red"><h6>Type of donation</h6></label>
                                    </div>
                                    <div class="small-6 columns text-right">
                                        <label class="info-label">All fields marked with <span><sup>*</sup></span> are mandatory</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="medium-12 columns">
                                        <div id="title_errors"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="medium-3 columns">
                                        <label>Title<span>*</span>
                                            <input type="text" id="title" name="title" value="">
                                        </label>
                                    </div>
                                    <div class="medium-4 columns">
                                        <label>First name<span>*</span>
                                            <input type="text" id="first_name" name="first_name" value="">
                                        </label>
                                    </div>
                                    <div class="medium-5 columns">
                                        <label>Last name<span>*</span>
                                            <input type="text" id="surname" name="surname" value="">
                                        </label>
                                    </div>
                                    <div class="medium-12 columns">
                                        <label>Email Address<span>*</span>
                                            <input type="email" id="email" name="email" value="">
                                        </label>
                                    </div>
                                    <div class="medium-12 columns">
                                        <label>Address 1<span>*</span>
                                            <input type="text" id="address1" name="address1" value="">
                                        </label>
                                    </div>
                                    <div class="medium-12 columns">
                                        <label>Address 2
                                            <input type="text" id="address2" name="address2" value="">
                                        </label>
                                    </div>
                                    <div class="medium-12 columns">
                                        <label>City / town<span>*</span>
                                            <input type="text" id="town" name="town" value="">
                                        </label>
                                    </div>
                                    <div class="medium-6 columns">
                                        <label>Postcode
                                            <input type="text" id="postcode" name="postcode" value="">
                                        </label>
                                    </div>
                                    <div class="medium-6 columns">
                                        <label>Country
                                            <select name="country" id="country">
                                                <option selected value="uk">United Kingdom</option>
                                                <option value="af">Afghanistan</option>
                                                <option value="ax">Aland Islands</option>
                                                <option value="al">Albania</option>
                                                <option value="dz">Algeria</option>
                                                <option value="as">American Samoa</option>
                                                <option value="ad">Andorra</option>
                                                <option value="ao">Angola</option>
                                                <option value="ai">Anguilla</option>
                                                <option value="aq">Antarctica</option>
                                                <option value="ag">Antigua and Barbuda</option>
                                                <option value="ar">Argentina</option>
                                                <option value="am">Armenia</option>
                                                <option value="aw">Aruba</option>
                                                <option value="au">Australia</option>
                                                <option value="at">Austria</option>
                                                <option value="az">Azerbaijan</option>
                                                <option value="bs">Bahamas</option>
                                                <option value="bh">Bahrain</option>
                                                <option value="bd">Bangladesh</option>
                                                <option value="bb">Barbados</option>
                                                <option value="by">Belarus</option>
                                                <option value="be">Belgium</option>
                                                <option value="bz">Belize</option>
                                                <option value="bj">Benin</option>
                                                <option value="bm">Bermuda</option>
                                                <option value="bt">Bhutan</option>
                                                <option value="bo">Bolivia</option>
                                                <option value="bq">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="ba">Bosnia and Herzegovina</option>
                                                <option value="bw">Botswana</option>
                                                <option value="bv">Bouvet Island</option>
                                                <option value="br">Brazil</option>
                                                <option value="io">British Indian Ocean Territory</option>
                                                <option value="bn">Brunei Darussalam</option>
                                                <option value="bg">Bulgaria</option>
                                                <option value="bf">Burkina Faso</option>
                                                <option value="mm">Burma (Myanmar)</option>
                                                <option value="bi">Burundi</option>
                                                <option value="kh">Cambodia</option>
                                                <option value="cm">Cameroon</option>
                                                <option value="ca">Canada</option>
                                                <option value="cv">Cape Verde</option>
                                                <option value="ky">Cayman Islands</option>
                                                <option value="cf">Central African Republic</option>
                                                <option value="td">Chad</option>
                                                <option value="cl">Chile</option>
                                                <option value="cn">China</option>
                                                <option value="cx">Christmas Island</option>
                                                <option value="cc">Cocos (Keeling) Islands</option>
                                                <option value="co">Colombia</option>
                                                <option value="km">Comoros</option>
                                                <option value="cg">Congo</option>
                                                <option value="ck">Cook Islands</option>
                                                <option value="cr">Costa Rica</option>
                                                <option value="hr">Croatia (Hrvatska)</option>
                                                <option value="cu">Cuba</option>
                                                <option value="cw">Curacao</option>
                                                <option value="cy">Cyprus</option>
                                                <option value="cz">Czech Republic</option>
                                                <option value="cd">Democratic Republic of Congo</option>
                                                <option value="dk">Denmark</option>
                                                <option value="dj">Djibouti</option>
                                                <option value="dm">Dominica</option>
                                                <option value="do">Dominican Republic</option>
                                                <option value="ec">Ecuador</option>
                                                <option value="eg">Egypt</option>
                                                <option value="sv">El Salvador</option>
                                                <option value="gq">Equatorial Guinea</option>
                                                <option value="er">Eritrea</option>
                                                <option value="ee">Estonia</option>
                                                <option value="et">Ethiopia</option>
                                                <option value="fk">Falkland Islands (Malvinas)</option>
                                                <option value="fo">Faroe Islands</option>
                                                <option value="fj">Fiji</option>
                                                <option value="fi">Finland</option>
                                                <option value="fr">France</option>
                                                <option value="gf">French Guiana</option>
                                                <option value="pf">French Polynesia</option>
                                                <option value="tf">French Southern Territories</option>
                                                <option value="ga">Gabon</option>
                                                <option value="gm">Gambia</option>
                                                <option value="ge">Georgia</option>
                                                <option value="de">Germany</option>
                                                <option value="gh">Ghana</option>
                                                <option value="gi">Gibraltar</option>
                                                <option value="gr">Greece</option>
                                                <option value="gl">Greenland</option>
                                                <option value="gd">Grenada</option>
                                                <option value="gp">Guadeloupe</option>
                                                <option value="gu">Guam</option>
                                                <option value="gt">Guatemala</option>
                                                <option value="gg">Guernsey</option>
                                                <option value="gn">Guinea</option>
                                                <option value="gw">Guinea-Bissau</option>
                                                <option value="gy">Guyana</option>
                                                <option value="ht">Haiti</option>
                                                <option value="hm">Heard and McDonald Islands</option>
                                                <option value="hn">Honduras</option>
                                                <option value="hk">Hong Kong</option>
                                                <option value="hu">Hungary</option>
                                                <option value="is">Iceland</option>
                                                <option value="in">India</option>
                                                <option value="id">Indonesia</option>
                                                <option value="ir">Iran</option>
                                                <option value="iq">Iraq</option>
                                                <option value="ie">Ireland</option>
                                                <option value="im">Isle Of Man</option>
                                                <option value="il">Israel</option>
                                                <option value="it">Italy</option>
                                                <option value="ci">Ivory Coast</option>
                                                <option value="jm">Jamaica</option>
                                                <option value="jp">Japan</option>
                                                <option value="je">Jersey</option>
                                                <option value="jo">Jordan</option>
                                                <option value="kz">Kazakhstan</option>
                                                <option value="ke">Kenya</option>
                                                <option value="ki">Kiribati</option>
                                                <option value="kp">Korea (North)</option>
                                                <option value="kr">Korea (South)</option>
                                                <option value="kw">Kuwait</option>
                                                <option value="kg">Kyrgyzstan</option>
                                                <option value="la">Laos</option>
                                                <option value="lv">Latvia</option>
                                                <option value="lb">Lebanon</option>
                                                <option value="ls">Lesotho</option>
                                                <option value="lr">Liberia</option>
                                                <option value="ly">Libya</option>
                                                <option value="li">Liechtenstein</option>
                                                <option value="lt">Lithuania</option>
                                                <option value="lu">Luxembourg</option>
                                                <option value="mo">Macau</option>
                                                <option value="mk">Macedonia</option>
                                                <option value="mg">Madagascar</option>
                                                <option value="mw">Malawi</option>
                                                <option value="my">Malaysia</option>
                                                <option value="mv">Maldives</option>
                                                <option value="ml">Mali</option>
                                                <option value="mt">Malta</option>
                                                <option value="mh">Marshall Islands</option>
                                                <option value="mq">Martinique</option>
                                                <option value="mr">Mauritania</option>
                                                <option value="mu">Mauritius</option>
                                                <option value="yt">Mayotte</option>
                                                <option value="mx">Mexico</option>
                                                <option value="fm">Micronesia</option>
                                                <option value="md">Moldova</option>
                                                <option value="mc">Monaco</option>
                                                <option value="mn">Mongolia</option>
                                                <option value="me">Montenegro</option>
                                                <option value="ms">Montserrat</option>
                                                <option value="ma">Morocco</option>
                                                <option value="mz">Mozambique</option>
                                                <option value="na">Namibia</option>
                                                <option value="nr">Nauru</option>
                                                <option value="np">Nepal</option>
                                                <option value="nl">Netherlands</option>
                                                <option value="nc">New Caledonia</option>
                                                <option value="nz">New Zealand</option>
                                                <option value="ni">Nicaragua</option>
                                                <option value="ne">Niger</option>
                                                <option value="ng">Nigeria</option>
                                                <option value="nu">Niue</option>
                                                <option value="nf">Norfolk Island</option>
                                                <option value="mp">Northern Mariana Islands</option>
                                                <option value="no">Norway</option>
                                                <option value="om">Oman</option>
                                                <option value="pk">Pakistan</option>
                                                <option value="ps">Palestinian Territory, Occupied</option>
                                                <option value="pw">Palau</option>
                                                <option value="pa">Panama</option>
                                                <option value="pg">Papua New Guinea</option>
                                                <option value="py">Paraguay</option>
                                                <option value="pe">Peru</option>
                                                <option value="ph">Philippines</option>
                                                <option value="pn">Pitcairn</option>
                                                <option value="pl">Poland</option>
                                                <option value="pt">Portugal</option>
                                                <option value="01">Private</option>
                                                <option value="pr">Puerto Rico</option>
                                                <option value="qa">Qatar</option>
                                                <option value="re">Reunion</option>
                                                <option value="rs">Republic of Serbia</option>
                                                <option value="ro">Romania</option>
                                                <option value="ru">Russia</option>
                                                <option value="rw">Rwanda</option>
                                                <option value="bl">Saint Barthelemy</option>
                                                <option value="gs">S. Georgia and S. Sandwich Isls.</option>
                                                <option value="kn">Saint Kitts and Nevis</option>
                                                <option value="lc">Saint Lucia</option>
                                                <option value="mf">Saint Martin (French part)</option>
                                                <option value="vc">Saint Vincent and the Grenadines</option>
                                                <option value="ws">Samoa</option>
                                                <option value="sm">San Marino</option>
                                                <option value="st">Sao Tome and Principe</option>
                                                <option value="sa">Saudi Arabia</option>
                                                <option value="sn">Senegal</option>
                                                <option value="sc">Seychelles</option>
                                                <option value="sl">Sierra Leone</option>
                                                <option value="sg">Singapore</option>
                                                <option value="sx">Sint Maarten (Dutch part)</option>
                                                <option value="sk">Slovak Republic</option>
                                                <option value="si">Slovenia</option>
                                                <option value="sb">Solomon Islands</option>
                                                <option value="so">Somalia</option>
                                                <option value="za">South Africa</option>
                                                <option value="ss">South Sudan</option>
                                                <option value="es">Spain</option>
                                                <option value="lk">Sri Lanka</option>
                                                <option value="sh">St. Helena</option>
                                                <option value="pm">St. Pierre and Miquelon</option>
                                                <option value="sd">Sudan</option>
                                                <option value="sr">Suriname</option>
                                                <option value="sj">Svalbard and Jan Mayen Islands</option>
                                                <option value="sz">Swaziland</option>
                                                <option value="se">Sweden</option>
                                                <option value="ch">Switzerland</option>
                                                <option value="sy">Syria</option>
                                                <option value="tw">Taiwan</option>
                                                <option value="tj">Tajikistan</option>
                                                <option value="tz">Tanzania</option>
                                                <option value="th">Thailand</option>
                                                <option value="tl">Timor-Leste</option>
                                                <option value="tg">Togo</option>
                                                <option value="tk">Tokelau</option>
                                                <option value="to">Tonga</option>
                                                <option value="tt">Trinidad and Tobago</option>
                                                <option value="tn">Tunisia</option>
                                                <option value="tr">Turkey</option>
                                                <option value="tm">Turkmenistan</option>
                                                <option value="tc">Turks and Caicos Islands</option>
                                                <option value="tv">Tuvalu</option>
                                                <option value="ug">Uganda</option>
                                                <option value="ua">Ukraine</option>
                                                <option value="ae">United Arab Emirates</option>
                                                <option value="gb">United Kingdom</option>
                                                <option value="us">United States</option>
                                                <option value="um">United States Minor Outlying Islands</option>
                                                <option value="uy">Uruguay</option>
                                                <option value="uz">Uzbekistan</option>
                                                <option value="vu">Vanuatu</option>
                                                <option value="va">Vatican City State (Holy See)</option>
                                                <option value="ve">Venezuela</option>
                                                <option value="vn">Viet Nam</option>
                                                <option value="vg">Virgin Islands (British)</option>
                                                <option value="vi">Virgin Islands (U.S.)</option>
                                                <option value="wf">Wallis and Futuna Islands</option>
                                                <option value="eh">Western Sahara</option>
                                                <option value="ye">Yemen</option>
                                                <option value="zm">Zambia</option>
                                                <option value="zw">Zimbabwe</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="medium-12 columns">
                                        <label>Telephone
                                            <input type="text" id="telephone" name="telephone" value="">
                                        </label>
                                    </div>
                                    <div class="medium-12 columns">
                                        <label>Where did you find SPANA?
                                            <select name="why_are_you_donating" id="why_are_you_donating">
                                                <option value="facebook">I saw SPANA on Facebook</option>
                                                <option value="google">I found SPANA on Google, or another website</option>
                                                <option value="leaflet">I received a leaflet or pamphlet from SPANA</option>
                                                <option value="newspaper">I read about SPANA in a newspaper/magazine</option>
                                                <option value="post">I received post from SPANA</option>
                                                <option value="tv">I saw a SPANA television advert</option>
                                                <option value="train posters">I saw SPANA train posters</option>
                                                <option value="washroom posters">I saw SPANA washroom posters</option>
                                                <option value="word of mouth">I heard about SPANA through word of mouth</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </label>
                                    </div>

                                    <div id="other-reason" class="medium-12 columns" style="display: none;">
                                        <label>As you selected other, please provide an answer
                                            <input type="text" id="why_are_you_donating_other" name="why_are_you_donating_other" value="">
                                        </label>
                                    </div>

                                    <div class="medium-12 columns">
                                        <label>Let us know why you have chosen to give to SPANA
                                            <textarea style="background: white" rows="4" cols="50" id="why_supporting" name="why_supporting"></textarea>
                                        </label>
                                    </div>

                                    <div class="small-1 columns">
                                        <input id="receive_emails" name="receive_emails" type="checkbox" value="1">
                                    </div>
                                    <div class="small-11 columns">
                                        <label for="receive_emails">I would like to receive emails updating me on your work and how I can help in future. If you are already
                                            subscribed but would like to stop receiving communications from us in future, please contact us on
                                            <strong><a href="mailto:hello@spana.org">hello@spana.org</a></strong>, <strong><a href="tel:00442078313999">020 7831 3999</a></strong> or write to us at
                                            14 John Street, WC1N 2EB.</label>
                                    </div>

                                    <div class="small-12 columns" style="padding-top: 30px">
                                        <div class="row">
                                            <div class="medium-6 medium-offset-6 columns text-center">
                                                <button class="spana-donation-step-button">Proceed to PayPal</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <input type="hidden" name="donation_type" value="<?php echo $_POST['donation-type']; ?>">
                            <input type="hidden" name="appealcode" value="<?php echo $_POST['appealcode']; ?>">

                        </div>
                    </div>

                </main> <!-- end #main -->
            </form>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>


<script type="text/javascript">

    jQuery( document ).ready(function() {

        jQuery("#why_are_you_donating").bind("change", function (e) {

            jQuery('#why_are_you_donating_other').val('');

            var reason = this.value;
            if(reason == 'other'){
                jQuery("#other-reason").slideDown();
            }else{
                jQuery("#other-reason").slideUp();
            }

        });

    });


</script>
