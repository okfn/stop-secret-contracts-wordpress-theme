<?php
/*
Template Name: Get Involved Form
*/
?>        
<?php get_header(); ?>
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
        <div id="getinvolved">
          <?php the_content(); ?>
          <?php endwhile; ?>
          <?php else : ?>
            <h2>Get Involved with StopSecretContracts.org</h2>
            <div id="getinvolved">
              <p>Thanks for your interest in the StopSecretContracts.org campaign. Let us know who you are and how you might like to help. As we gear up the campaign we'll be in touch.</p>
              <?php endif; ?>
              <form action="https://docs.google.com/forms/d/1vxUAmv03lZtHzCT2c2s8fLkasKong0oiseQZjS80awg/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
                <div role="list">
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-scrollable  ss-text">
                      <div class="ss-form-entry">
                        <label class="ss-q-item-label" for="entry_1484480613">
                        <div class="ss-q-title">Name </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                        </label>
                        <input type="text" name="entry.1484480613" value="" class="ss-q-short" id="entry_1484480613" dir="auto" aria-label="Name  " title="">
                        <div class="error-message"></div>
                        <div class="required-message">This is a required question</div>
                      </div>
                    </div>
                  </div>
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-scrollable  ss-text">
                      <div class="ss-form-entry">
                        <label class="ss-q-item-label" for="entry_678402457">
                        <div class="ss-q-title">Email </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                        </label>
                        <input type="text" name="entry.678402457" value="" class="ss-q-short" id="entry_678402457" dir="auto" aria-label="Email  " title="">
                        <div class="error-message"></div>
                        <div class="required-message">This is a required question</div>
                      </div>
                    </div>
                  </div>
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-scrollable  ss-select">
                      <div class="ss-form-entry">
                        <label class="ss-q-item-label" for="entry_1303362028">
                        <div class="ss-q-title">Country: </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                        </label>
                        <select name="entry.1303362028" id="entry_1303362028" aria-label="Country:  ">
                          <option value=""></option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua And Barbuda">Antigua And Barbuda</option>
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
                          <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
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
                          <option value="Congo, The Democratic Republic Of The">Congo, The Democratic Republic Of The</option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cote D&#39;ivoire">Cote D&#39;ivoire</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Cuba">Cuba</option>
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
                          <option value="Guinea-bissau">Guinea-bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands</option>
                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Isle Of Man">Isle Of Man</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Korea, Democratic People&#39;s Republic Of">Korea, Democratic People&#39;s Republic Of</option>
                          <option value="Korea, Republic Of">Korea, Republic Of</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Lao People&#39;s Democratic Republic">Lao People&#39;s Democratic Republic</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macao">Macao</option>
                          <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former Yugoslav Republic Of</option>
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
                          <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
                          <option value="Moldova, Republic Of">Moldova, Republic Of</option>
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
                          <option value="Saint Helena">Saint Helena</option>
                          <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                          <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Serbia">Serbia</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="South Georgia And The South Sandwich Islands">South Georgia And The South Sandwich Islands</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                          <option value="Taiwan, Province Of China">Taiwan, Province Of China</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania, United Republic Of">Tanzania, United Republic Of</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Timor-leste">Timor-leste</option>
                          <option value="Togo">Togo</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
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
                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                          <option value="Wallis And Futuna">Wallis And Futuna</option>
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <div class="required-message">This is a required question</div>
                      </div>
                    </div>
                  </div>
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-scrollable  ss-checkbox">
                      <div class="ss-form-entry">
                        <label class="ss-q-item-label" for="entry_1537089230">
                        <div class="ss-q-title">I am interested in helping to stop secret contracting in my country </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                        </label>
                        <ul class="ss-choices" role="group" aria-label="I am interested in helping to stop secret contracting in my country  ">
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.821466087" value="Yes" id="group_821466087_1" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Yes</span> </label>
                          </li>
                        </ul>
                        <div class="error-message"></div>
                        <div class="required-message">This is a required question</div>
                      </div>
                    </div>
                  </div>
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-scrollable  ss-checkbox">
                      <div class="ss-form-entry">
                        <label class="ss-q-item-label" for="entry_1908333408">
                        <div class="ss-q-title">I am a: </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr">(check all that apply)</div>
                        </label>
                        <ul class="ss-choices" role="group" aria-label="I am a: (check all that apply) ">
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1545864743" value="Citizen" id="group_1545864743_1" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Citizen</span> </label>
                          </li>
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1545864743" value="Journalist" id="group_1545864743_2" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Journalist</span> </label>
                          </li>
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1545864743" value="Campaigner or Activist" id="group_1545864743_3" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Campaigner or Activist</span> </label>
                          </li>
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1545864743" value="Web Developer or Techie" id="group_1545864743_4" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Web Developer or Techie</span> </label>
                          </li>
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1545864743" value="Government Official" id="group_1545864743_5" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Government Official</span> </label>
                          </li>
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1545864743" value="Representative of International Governmental Organisation" id="group_1545864743_6" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Representative of International Governmental Organisation</span> </label>
                          </li>
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1545864743" value="Researcher" id="group_1545864743_7" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Researcher</span> </label>
                          </li>
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1545864743" value="__other_option__" id="group_1545864743_8" role="checkbox" class="ss-q-checkbox ss-q-other-toggle">
                              </span> Other:</label>
                            <span class="ss-q-other-container goog-inline-block">
                            <input type="text" name="entry.1545864743.other_option_response" value="" class="ss-q-other" id="entry_1545864743_other_option_response" dir="auto" aria-label="Other">
                            </span> </li>
                        </ul>
                        <div class="error-message"></div>
                        <div class="required-message">This is a required question</div>
                      </div>
                    </div>
                  </div>
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-scrollable  ss-text">
                      <div class="ss-form-entry">
                        <label class="ss-q-item-label" for="entry_2129176580">
                        <div class="ss-q-title">Affiliation: </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                        </label>
                        <input type="text" name="entry.2129176580" value="" class="ss-q-short" id="entry_2129176580" dir="auto" aria-label="Affiliation:  " title="">
                        <div class="error-message"></div>
                        <div class="required-message">This is a required question</div>
                      </div>
                    </div>
                  </div>
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-scrollable  ss-paragraph-text">
                      <div class="ss-form-entry">
                        <label class="ss-q-item-label" for="entry_1991390688">
                        <div class="ss-q-title">Comments: </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr">What part of the campaign interests you most? What skills do you have to offer? Do you have a suggestion or question for us?</div>
                        </label>
                        <textarea name="entry.1991390688" rows="8" cols="0" class="ss-q-long" id="entry_1991390688" dir="auto" aria-label="Comments: What part of the campaign interests you most? What skills do you have to offer? Do you have a suggestion or question for us? "></textarea>
                        <div class="error-message"></div>
                        <div class="required-message">This is a required question</div>
                      </div>
                    </div>
                  </div>
                  <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="ltr" class="ss-item jfk-scrollbar ss-scrollable  ss-checkbox">
                      <div class="ss-form-entry">
                        <label class="ss-q-item-label" for="entry_1076610135">
                        <div class="ss-q-title">It&#39;s ok to share my data with other organisations who support the campaign </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr">Check &#39;Opt In&#39; if you agree to this, do nothing if you prefer to only be contacted by the central campaign team. On occasion we may share your contact information with coalition partners (listed at the bottom of the homepage) solely for the purposes of organizing this campaign. </div>
                        </label>
                        <ul class="ss-choices" role="group" aria-label="It&#39;s ok to share my data with other organisations who support the campaign Check &#39;Opt In&#39; if you agree to this, do nothing if you prefer to only be contacted by the central campaign team. On occasion we may share your contact information with coalition partners (listed at the bottom of the homepage) solely for the purposes of organizing this campaign.  ">
                          <li class="ss-choice-item">
                            <label><span class="ss-choice-item-control goog-inline-block">
                              <input type="checkbox" name="entry.1122624537" value="Opt In" id="group_1122624537_1" role="checkbox" class="ss-q-checkbox">
                              </span> <span class="ss-choice-label">Opt In</span> </label>
                          </li>
                        </ul>
                        <div class="error-message"></div>
                        <div class="required-message">This is a required question</div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="draftResponse" value="[,,&quot;-2465169333122236264&quot;]
              ">
                  <input type="hidden" name="pageHistory" value="0">
                  <input type="hidden" name="fromEmail" value="false">
                  <input type="hidden" name="fbzx" value="-2465169333122236264">
                  <div class="ss-item ss-navigate">
                    <table id="navigation-table">
                      <tbody>
                        <tr>
                          <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr"><input type="submit" name="submit" value="Submit" id="ss-submit"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </form>
 
            </div>
          </div>
<?php get_footer(); ?>
