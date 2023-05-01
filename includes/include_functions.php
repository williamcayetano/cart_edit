<?php

  $ad_cost = '3';

  $s3_url = '<img src="https://s3-us-west-2.amazonaws.com/whiteowl-uploads/';

  $gender_array = array('Female', 'Male');

  $type_array = array('hottest pics', 'newest pics');

  $age_array = array('18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '50+');

  $state_array = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minneapolis', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahama', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming','Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antigua and B', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bonaire', 'Bosnia and H', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Canary Islands', 'Cape Verde', 'Cayman Islands', 'Cen African Rep', 'Chad', 'Channel Islands', 'Chile', 'China', 'Christmas Island', 'Cocos Island', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote D Ivoire', 'Croatia', 'Cuba', 'Curacao', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Rep', 'East Timor', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Falkland Islands', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinea', 'Guyana', 'Haiti', 'Hawaii', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'North Korea', 'South Korea', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macau', 'Macedonia', 'Madagascar', 'Malaysia', 'Malawi', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritius', 'Mayotte', 'Mexico', 'Moldova', 'Monaco', 'Mongolia', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Nambia', 'Nauru', 'Nepal', 'Netherland Ant', 'Netherlands', 'Nevis', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Norway', 'Oman', 'Pakistan', 'Palau Island', 'Palestine', 'Panama', 'Papua N Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Island', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Réunion', 'Romania', 'Russia', 'Rwanda', 'St Barthelemy', 'St Eustatius', 'St Helena', 'St Kitts-Nevis', 'St Lucia', 'St Maarten', 'St Pierre and M', 'St Vincent and G', 'Saipan', 'Samoa', 'Samoa American', 'San Marino', 'Sao Tome and P', 'Saudi Arabia', 'Senegal', 'Seychelles', 'Serbia and M', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Swaziland', 'Sweden', 'Switzerland', 'Syria', 'Tahiti', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and T', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and C', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab E', 'United Kingdom', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican', 'Venezuela', 'Vietnam', 'Virgin Islands', 'Wake Island', 'Yemen', 'Zaire', 'Zambia', 'Zimbabwe');

  $search_state_array = array('World', 'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minneapolis', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahama', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming','Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antigua and B', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bonaire', 'Bosnia and H', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Canary Islands', 'Cape Verde', 'Cayman Islands', 'Cen African Rep', 'Chad', 'Channel Islands', 'Chile', 'China', 'Christmas Island', 'Cocos Island', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote D Ivoire', 'Croatia', 'Cuba', 'Curacao', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Rep', 'East Timor', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Falkland Islands', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinea', 'Guyana', 'Haiti', 'Hawaii', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'North Korea', 'South Korea', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macau', 'Macedonia', 'Madagascar', 'Malaysia', 'Malawi', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritius', 'Mayotte', 'Mexico', 'Moldova', 'Monaco', 'Mongolia', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Nambia', 'Nauru', 'Nepal', 'Netherland Ant', 'Netherlands', 'Nevis', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Norway', 'Oman', 'Pakistan', 'Palau Island', 'Palestine', 'Panama', 'Papua N Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Island', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Réunion', 'Romania', 'Russia', 'Rwanda', 'St Barthelemy', 'St Eustatius', 'St Helena', 'St Kitts-Nevis', 'St Lucia', 'St Maarten', 'St Pierre and M', 'St Vincent and G', 'Saipan', 'Samoa', 'Samoa American', 'San Marino', 'Sao Tome and P', 'Saudi Arabia', 'Senegal', 'Seychelles', 'Serbia and M', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Swaziland', 'Sweden', 'Switzerland', 'Syria', 'Tahiti', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and T', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and C', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab E', 'United Kingdom', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican', 'Venezuela', 'Vietnam', 'Virgin Islands', 'Wake Island', 'Yemen', 'Zaire', 'Zambia', 'Zimbabwe');
  
  $country_array = array('United States of America', 'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 
  						'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bonaire', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 
  						'Canada', 'Canary Islands', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Channel Islands', 'Chile', 'China', 'Christmas Island', 'Cocos Island', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote D\'Ivoire',
                        'Croatia', 'Cuba', 'Curacao', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'East Timor', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia',
                        'Ethiopia', 'Falkland Islands', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe',
                        'Guam', 'Guatemala', 'Guinea', 'Guyana', 'Haiti', 'Hawaii', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 
                        'Kenya', 'Kiribati', 'Korea North', 'Korea South', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macau', 'Macedonia', 'Madagascar', 'Malaysia', 'Malawi', 'Maldives', 
                        'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritius', 'Mayotte', 'Mexico', 'Moldova', 'Monaco', 'Mongolia', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Nambia', 'Nauru', 'Nepal', 'Netherland Antilles', 'Netherlands', 'Nevis', 'New Caledonia', 
                        'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Norway', 'Oman', 'Pakistan', 'Palau Island', 'Palestine', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Island', 'Poland', 'Portugal', 'Puerto Rico', 
                        'Qatar', 'Réunion', 'Romania', 'Russia', 'Rwanda', 'St Barthelemy', 'St Eustatius', 'St Helena', 'St Kitts-Nevis', 'St Lucia', 'St Maarten', 'St Pierre and Miquelon', 'St Vincent and Grenadines', 'Saipan', 'Samoa', 'Samoa American', 'San Marino', 
                        'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Seychelles', 'Serbia and Montenegro', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Swaziland', 
                        'Sweden', 'Switzerland', 'Syria', 'Tahiti', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Is', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 
                        'United Kingdom', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City State', 'Venezuela', 'Vietnam', 'Virgin Islands Brit', 'Virgin Islands USA', 'Wake Island', 'Wallis and Futana Is', 'Yemen', 'Zaire', 'Zambia', 'Zimbabwe');

                                                                                              
  function drop_down($options_array, $selected = null) 
  { 
    $return = '<option value="'.$selected.'">'.$selected.'</option>'; 
      foreach($options_array as $option) 
      { 
        if ($option != $selected) {
          $return .= '<option value="'.$option.'">'.$option.'</option>';
        }
      } 
      return $return; 
  }
  
  function clean($str) {
    global $link;
    $str = preg_replace("#['`]#", "&#039;", $str);
    $str = stripslashes($str);
    $str = htmlspecialchars($str);
    return mysqli_real_escape_string($link, $str);
  }
  
  function htmlkarakter($string) { 
   $string = str_replace(array("&lt;", "&gt;", '&amp;', '&#039;', '&quot;','&lt;', '&gt;'), array("<", ">",'&','\'','"','<','>'), htmlspecialchars_decode($string, ENT_NOQUOTES)); 
   return $string; 
  }
  
  function rand_str_gen($len) {
    //How to use:
    //$crypt_pass = crypt($password)
    //$pass+hash = rand_str_gen(20) . "$crypt_pass" . ran_str_gen(20);
    $result = "";
    $chars = "abcdefghijklmnopqrstuvwxyz0123456789$$$$$$$1111111";
    $char_array = str_split($chars);
    for ($i = 0; $i < $len; $i++) {
      $rand_item = array_rand($char_array);
      $result .= "" . $char_array[$rand_item];
    }
    return $result;
  }

  function search_display($get_page_number, $items_per, $sql_string, $type, $profile, $gender, $age, $city, $state, $service,
                            $freak, $orientation, $rate, $bust, $height, $weight, $hair, $eyes, $ethnicity, $tattoos,
                            $piercings, $bikini, $phone, $schedule, $travel, $smoke, $shoe, $fetish, $nickname, 
                            $language, $alcohol, $hobby, $area) {
    global $link; 
    $sql_get_posts = mysqli_query($link, $sql_string) or die(mysqli_error($link));
    $number_rows = mysqli_num_rows($sql_get_posts);

    if (isset($get_page_number)) {
      $page_number = preg_replace('#[^0-9]#', '', $get_page_number);
    } else {
      $page_number = 1;
    }
  
    $items_per_page = $items_per;
  
    // Get the value of the last page in the pagination result set; Gets the total number of pages
    $last_page = ceil($number_rows / $items_per_page);
    $last_page = empty($last_page) ? 1 : $last_page;
    // Be sure URL variable $page_umber is no lower than page 1 and no higher than $lastpage
    if ($page_number < 1) { 
      $page_number = 1; 
    } else if ($page_number > $last_page) { 
      $page_number = $last_page; 
    } 
  
    // This creates 5 numbers to click in between the next and back buttons
    $center_pages = ""; // Initialize this variable
    $sub1 = $page_number - 1;//value of subtracting 1 page
    $sub2 = $page_number - 2;//value of subtracting 2 pages
    $add1 = $page_number + 1;//value of adding 1 page
    $add2 = $page_number + 2;//value of adding 2 pages
    
    if ($page_number == 1) { //should be no back button because you're already on page 1
	//We use $_SERVER['PHP_SELF'] in case script has to change server environments, the pages won't be hardcoded. It will grap this current scripts name (in this case member_search.php)
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 1 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex.page 2
    } else if ($page_number == $last_page) { //should be no forward button because you're already on last page
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 29
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 30 (current page)
    } else if ($page_number > 2 && $page_number < ($last_page - 1)) { //set how many clickable numbers inbetween next and back buttons
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $sub2 . '">' . $sub2 . '</a></span> &nbsp;'; //ex. page 5
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 6
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 7 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex. page 8
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $add2 . '">' . $add2 . '</a></span> &nbsp;'; //ex. page 9
    } else if ($page_number > 1 && $page_number < $last_page) { //on next to last page, just show last page number after current. one on each side. notice add1
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 28
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 29 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex. page 30 (last page)
    }
  
    //Ex. LIMIT 20 returns first 20 results; LIMIT 20, 5 returns 5 results(20, 21, 22, 23, 24)
    //subtract 1 since sql counts from 0
    $limit = 'LIMIT ' . ($page_number - 1) * $items_per_page . ',' . $items_per_page; 
  
    $pagination_display = ""; 
    //if only 1 page we require no paginated links to display (so none of this code will run)
    if ($last_page != "1"){
      // This shows the user what page they are on, and the total number of pages.
      $pagination_display .= 'Page <strong>' . $page_number . '</strong> of ' . $last_page. '&nbsp;&nbsp;';
      // If we are not on page 1 we can place the Back link
      if ($page_number != 1) {
	$previous = $page_number - 1;
        $pagination_display .=  '&nbsp;  <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '??type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $previous . '" class="backNextLink"> Back</a></span> ';
      } 
      // Lay in the clickable numbers display here between the Back and Next links
      $pagination_display .= '<span class="paginationNumbers">' . $center_pages . '</span>';
      // If we are not on the very last page we can place the Next link
      if ($page_number != $last_page) {
        $next_page = $page_number + 1;
        $pagination_display .=  '&nbsp;  <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?type=' . $type. '&profile=' . $profile . '&gender=' . $gender . '&age=' . $age . '&city=' . $city . '&state=' . $state . '&service=' . $service . '&freak=' . $freak . '&orientation=' . $orientation . '&rate=' . $rate . '&bust=' . $bust . '&height=' . $height . '&weight=' . $weight . '&hair=' . $hair . '&eyes=' . $eyes . '&ethnicity=' . $ethnicity . '&tattoos=' . $tattoos . '&piercings=' . $piercings . '&bikini=' . $bikini . '&phone=' . $phone . '&schedule=' . $schedule . '&travel=' . $travel . '&smoke=' . $smoke . '&shoe=' . $shoe . '&fetish=' . $fetish . '&nickname=' . $nickname . '&language=' . $language . '&alcohol=' . $alcohol . '&hobby=' . $hobby . '&area=' . $area . '&pn=' . $next_page . '" class="backNextLink"> Next</a></span> ';
      } 
    }
    $return_array = array('limit' => $limit, 'pagination_display' => $pagination_display, 'rows' => $number_rows);
    return $return_array;

  }

  function page_display($profile_id, $get_page_number, $items_per, $page) {//if page DOES require ?id=
    global $link; 
    if (strcmp($page, 'photo') == 0) {
      $sql_get_query = mysqli_query($link, "SELECT * FROM posts WHERE member_id='$profile_id' AND active='y' ORDER by post_date DESC") or die(mysqli_error($link));
    } else if (strcmp($page, 'wall') == 0) {
      $sql_get_query = mysqli_query($link, "SELECT * FROM wall_posts WHERE to_id='$profile_id' AND active='y' ORDER by post_date DESC") or die(mysqli_error($link));
    } else if (strcmp($page, 'post') == 0) {
       $sql_get_query = mysqli_query($link, "SELECT * FROM comments WHERE post_id='$profile_id' AND (reply_to_id IS NULL OR reply_to_id='') AND active='y' ORDER BY list_weight DESC") or die(mysqli_error($link));
    } else if (strcmp($page, 'ad') == 0) {
       $sql_get_query = mysqli_query($link, "SELECT * FROM ad_comments WHERE ad_id='$profile_id' AND (reply_to_id IS NULL OR reply_to_id='') AND active='y' ORDER BY list_weight DESC") or die(mysqli_error($link));
    } else {
      return false;
    }
    $number_rows = mysqli_num_rows($sql_get_query);


    if ($number_rows == 0) {
      return false;
    }
  
    if (isset($get_page_number)) {
      $page_number = preg_replace('#[^0-9]#', '', $get_page_number);
    } else {
      $page_number = 1;
    }
  
    $items_per_page = $items_per;
  
    // Get the value of the last page in the pagination result set; Gets the total number of pages
    $last_page = ceil($number_rows / $items_per_page);
    $last_page = empty($last_page) ? 1 : $last_page;
    // Be sure URL variable $pageNumber is no lower than page 1 and no higher than $lastpage
    if ($page_number < 1) { 
      $page_number = 1; 
    } else if ($page_number > $last_page && $last_page > 0) { 
      $page_number = $last_page; 
    } 
  
    // This creates 5 numbers to click in between the next and back buttons
    $center_pages = ""; // Initialize this variable
    $sub1 = $page_number - 1;//value of subtracting 1 page
    $sub2 = $page_number - 2;//value of subtracting 2 pages
    $add1 = $page_number + 1;//value of adding 1 page
    $add2 = $page_number + 2;//value of adding 2 pages
    if ($page_number == 1) { //should be no back button because you're already on page 1
	//We use $_SERVER['PHP_SELF'] in case script has to change server environments, the pages won't be hardcoded. It will grap this current scripts name (in this case member_search.php)
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 1 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?id=' . $profile_id . '&pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex.page 2
    } else if ($page_number == $last_page) { //should be no forward button because you're already on last page
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?id=' . $profile_id . '&pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 29
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 30 (current page)
    } else if ($page_number > 2 && $page_number < ($last_page - 1)) { //set how many clickable numbers inbetween next and back buttons
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?id=' . $profile_id . '&pn=' . $sub2 . '">' . $sub2 . '</a></span> &nbsp;'; //ex. page 5
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?id=' . $profile_id . '&pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 6
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 7 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?id=' . $profile_id . '&pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex. page 8
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?id=' . $profile_id . '&pn=' . $add2 . '">' . $add2 . '</a></span> &nbsp;'; //ex. page 9
    } else if ($page_number > 1 && $page_number < $last_page) { //on next to last page, just show last page number after current. one on each side. notice add1
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?id=' . $profile_id . '&pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 28
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 29 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?id=' . $profile_id . '&pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex. page 30 (last page)
    }
  
    //Ex. LIMIT 20 returns first 20 results; LIMIT 20, 5 returns 5 results(20, 21, 22, 23, 24)
    //subtract 1 since sql counts from 0
    $limit = 'LIMIT ' . ($page_number - 1) * $items_per_page . ',' . $items_per_page; 
  
    $pagination_display = ""; 
    //if only 1 page we require no paginated links to display (so none of this code will run)
    if ($last_page != "1"){
      // This shows the user what page they are on, and the total number of pages.
      $pagination_display .= 'Page <strong>' . $page_number . '</strong> of ' . $last_page. '&nbsp;&nbsp;';
      // If we are not on page 1 we can place the Back link
      if ($page_number != 1) {
	$previous = $page_number - 1;
        $pagination_display .=  '&nbsp;  <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '" class="backNextLink"> Back</a></span> ';
      } 
      // Lay in the clickable numbers display here between the Back and Next links
      $pagination_display .= '<span class="paginationNumbers">' . $center_pages . '</span>';
      // If we are not on the very last page we can place the Next link
      if ($page_number != $last_page) {
        $next_page = $page_number + 1;
        $pagination_display .=  '&nbsp;  <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $next_page . '" class="backNextLink"> Next</a></span> ';
      } 
    }
    $return_array = array('limit' => $limit, 'pagination_display' => $pagination_display);
    return $return_array;
  }

  function page_display2($profile_id, $get_page_number, $items_per, $page) {//if page DOESN'T require ?id=
    global $link; 
    if (strcmp($page, 'winks') == 0) {
      $sql_get_query = mysqli_query($link, "SELECT * FROM winks WHERE winkee_id='$profile_id' ORDER BY post_date DESC") or die(mysqli_error($link));
    } else if (strcmp($page, 'roses') == 0) {
      $sql_get_query = mysqli_query($link, "SELECT * FROM roses WHERE receiver_id='$profile_id' AND active='y' ORDER BY post_date DESC") or die(mysqli_error($link));
    } else if (strcmp($page, 'messages') == 0) {
      $sql_get_query = mysqli_query($link, "SELECT * FROM messages WHERE to_id='$profile_id' OR from_id='$profile_id' ORDER BY post_date DESC") or die(mysqli_error($link));
    } else {
      $sql_get_query = mysqli_query($link, $page) or die(mysqli_error($link));
    }
    $number_rows = mysqli_num_rows($sql_get_query);


    if ($number_rows == 0) {
      return false;
    }
  
    if (isset($get_page_number)) {
      $page_number = preg_replace('#[^0-9]#', '', $get_page_number);
    } else {
      $page_number = 1;
    }
  
    $items_per_page = $items_per;
  
    // Get the value of the last page in the pagination result set; Gets the total number of pages
    $last_page = ceil($number_rows / $items_per_page);
    $last_page = empty($last_page) ? 1 : $last_page;
    // Be sure URL variable $pageNumber is no lower than page 1 and no higher than $lastpage
    if ($page_number < 1) { 
      $page_number = 1; 
    } else if ($page_number > $last_page && $last_page > 0) { 
      $page_number = $last_page; 
    } 
  
    // This creates 5 numbers to click in between the next and back buttons
    $center_pages = ""; // Initialize this variable
    $sub1 = $page_number - 1;//value of subtracting 1 page
    $sub2 = $page_number - 2;//value of subtracting 2 pages
    $add1 = $page_number + 1;//value of adding 1 page
    $add2 = $page_number + 2;//value of adding 2 pages
    if ($page_number == 1) { //should be no back button because you're already on page 1
	//We use $_SERVER['PHP_SELF'] in case script has to change server environments, the pages won't be hardcoded. It will grap this current scripts name (in this case member_search.php)
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 1 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex.page 2
    } else if ($page_number == $last_page) { //should be no forward button because you're already on last page
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 29
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 30 (current page)
    } else if ($page_number > 2 && $page_number < ($last_page - 1)) { //set how many clickable numbers inbetween next and back buttons
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub2 . '">' . $sub2 . '</a></span> &nbsp;'; //ex. page 5
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 6
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 7 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex. page 8
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add2 . '">' . $add2 . '</a></span> &nbsp;'; //ex. page 9
    } else if ($page_number > 1 && $page_number < $last_page) { //on next to last page, just show last page number after current. one on each side. notice add1
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a></span> &nbsp;'; //ex. page 28
	$center_pages .= '&nbsp; <span class="pagNumActive">' . $page_number . '</span> &nbsp;'; //ex. page 29 (current page)
	$center_pages .= '&nbsp; <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a></span> &nbsp;'; //ex. page 30 (last page)
    }
  
    //Ex. LIMIT 20 returns first 20 results; LIMIT 20, 5 returns 5 results(20, 21, 22, 23, 24)
    //subtract 1 since sql counts from 0
    $limit = 'LIMIT ' . ($page_number - 1) * $items_per_page . ',' . $items_per_page; 
  
    $pagination_display = ""; 
    //if only 1 page we require no paginated links to display (so none of this code will run)
    if ($last_page != "1"){
      // This shows the user what page they are on, and the total number of pages.
      $pagination_display .= 'Page <strong>' . $page_number . '</strong> of ' . $last_page. '&nbsp;&nbsp;';
      // If we are not on page 1 we can place the Back link
      if ($page_number != 1) {
	$previous = $page_number - 1;
        $pagination_display .=  '&nbsp;  <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '" class="backNextLink"> Back</a></span> ';
      } 
      // Lay in the clickable numbers display here between the Back and Next links
      $pagination_display .= '<span class="paginationNumbers">' . $center_pages . '</span>';
      // If we are not on the very last page we can place the Next link
      if ($page_number != $last_page) {
        $next_page = $page_number + 1;
        $pagination_display .=  '&nbsp;  <span class="custom_link"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $next_page . '" class="backNextLink"> Next</a></span> ';
      } 
    }
    $return_array = array('limit' => $limit, 'pagination_display' => $pagination_display);
    return $return_array;

  }
  
  function user_agent() {
    $user_device = "";
  	$agent = $_SERVER['HTTP_USER_AGENT'];
  	if (preg_match("/iPhone/", $agent)) {
    	$user_device = "iPhone Mobile";
  	} else if (preg_match("/Android/", $agent)) {
    	$user_device = "Android Mobile";
  	} else if (preg_match("/IEMobile/", $agent)) {
    	$user_device = "Windows Mobile";
  	} else if (preg_match("/Chrome/", $agent)) {
    	$user_device = "Google Chrome";
  	} else if (preg_match("/MSIE/", $agent)) {
    	$user_device = "Internet Explorer";
  	} else if (preg_match("/Firefox/", $agent)) {
    	$user_device = "Firefox";
  	} else if (preg_match("/Safari/", $agent)) {
    	$user_device = "Safari";
  	} else if (preg_match("/Opera/", $agent)) {
    	$user_device = "Opera";
  	} else {
    	$user_device = "Unknown Agent";
  	}

  	$OSList = array
  	(
        // Match user agent string with operating systems
        'Windows 3.11' => 'Win16',
        'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)',
        'Windows 98' => '(Windows 98)|(Win98)',
        'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
        'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
        'Windows Server 2003' => '(Windows NT 5.2)',
        'Windows Vista' => '(Windows NT 6.0)',
        'Windows 7' => '(Windows NT 6.1)|(Windows NT 7.0)',
        'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
        'Windows ME' => 'Windows ME',
        'Open BSD' => 'OpenBSD',
        'Sun OS' => 'SunOS',
        'Linux' => '(Linux)|(X11)',
        'Mac OS' => '(Mac_PowerPC)|(Macintosh)',
        'QNX' => 'QNX',
        'BeOS' => 'BeOS',
        'OS/2' => 'OS/2',
		'Mac OS' => 'Mac OS',
        'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
  	);
 
  	// Loop through the array of user agents and matching operating systems
  	foreach($OSList as $CurrOS=>$Match) {
    	// Find a match
    	if (preg_match("/$Match/i", $agent)) {
      		break;
    	} else {
	  		$CurrOS = "Unknown OS";
		}
  	}
  	$device = "$user_device : $CurrOS";
  	return $device;
  }
  
  	function upload_image() {
   		include_once("includes/S3.php");
   		include_once("includes/ak_php_img_lib_2.0.php");
    	$file_tmp_loc = $_FILES["uploaded_file"]["tmp_name"];
    	$file_name = $_FILES["uploaded_file"]["name"]; // The file name
    	$file_size = $_FILES["uploaded_file"]["size"]; // File size in bytes
    	$file_error_msg = $_FILES["uploaded_file"]["error"]; // 0 = false | 1 = true
    	$path_suffix = pathinfo($file_name);
    	$path_ext = $path_suffix['extension'];
    	if($file_size > 9437184) { // if file size is larger than 3 Megabyte in bytes; 1 megabyte = 1048576; 2 megabytes = 2097152
      		unlink($file_tmp_loc); // Remove the uploaded file from the PHP temp folder
      		return '<span class="red">ERROR:</span> Your photo was larger than 9 Megabytes in size. Choose a smaller photo';
    	} else if (!preg_match("/(jpg|png|jpeg|gif)$/i", $path_ext)) {  
      		unlink($file_tmp_loc);
      		return '<span class="red">ERROR:</span> Your image was not .jpg, .jpeg, .png'; 
    	} else if ($file_error_msg == 1) { // if file upload error key is equal to 1
      		return '<span class="red">ERROR:</span> An error occured while processing the file. Try again.';
    	} else {
      
      		$orig_file_name = $file_name;
      		$file_name = time().rand() . "." . $path_ext;
      
      		$place_file = move_uploaded_file($file_tmp_loc, 'uploads/' . $file_name);
      		if ($place_file != true) {
        		@unlink($file_tmp_loc); 
        		return '<span class="red">ERROR:</span> Photo not uploaded. Try again.';
      		} else {
                if (strcmp($path_ext, 'gif') == 0) {
          			require("includes/GifFrameExtractor.php");
          			require("includes/GifCreator.php");
          			require("includes/ImageWorkshop.php");
          			$gif_file_path = 'uploads/' . $file_name;
          			if (GifFrameExtractor::isAnimatedGif($gif_file_path)) { 
            			$gfe = new GifFrameExtractor();
            			$frames = $gfe->extract($gif_file_path);
            			$retouchedFrames = array();
            			$ii = 0;

            			foreach ($frames as $frame) {
              				$frameLayer = ImageWorkshop::initFromResourceVar($frame['image']);
              				if ($ii == 0) {//get only first frame for thumb
                 				$frameLayer->resizeInPixel(150, null, true); // Resizing
                 				$frameLayer->save('uploads/', "thumb_$file_name");
              				}
              				$frameLayer->resizeInPixel(300, null, true); // Resizing
              				$retouchedFrames[] = $frameLayer->getResult(); //put all the frames in array
              				++$ii;
            			}

            			// Then we re-generate the GIF
            			$gc = new GifCreator();
            			$gc->create($retouchedFrames, $gfe->getFrameDurations(), 0);

            			// And now save it !
            			file_put_contents("uploads/list_$file_name", $gc->getGif());
          			} else { //normal gif
	        			$target_file = "uploads/$file_name";
	        			$list_file = "uploads/list_$file_name"; //you can change this to any other folder to separate smaller images
	        			$wmax = 400; $hmax = 400;
	        			@ak_img_resize($target_file, $list_file, $wmax, $hmax, $path_ext);

            			//make thumbnail
	        			$target_file = "uploads/list_$file_name";
	        			$thumbnail = "uploads/thumb_$file_name";
	        			$wthumb = 150;
	        			$hthumb = 150;
	        			@ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $path_ext);
	  			
	        			//max_size
	        			$target_file = "uploads/$file_name";
            			$wtrmrk_file = "images/tag.png";
	        			$max_size = "uploads/max_$file_name";
	        			$wmax = 600; $hmax = 800;
	        			//@ak_img_maxsize($target_file, $max_size, $wmax, $hmax, $path_ext);
            			@ak_img_watermark($target_file, $wtrmrk_file, $max_size, $wmax, $hmax, $path_ext);
          			}
        		} else {
          			$wtrmrk_file = "images/tag.png";
          			//resize image
	      			$target_file = "uploads/$file_name";
	      			$list_file = "uploads/list_$file_name"; //you can change this to any other folder to separate smaller images
	      			$wmax = 400; $hmax = 400;
	      			@ak_img_watermark($target_file, $wtrmrk_file, $list_file, $wmax, $hmax, $path_ext);

          			//make thumbnail
	      			$target_file = "uploads/list_$file_name";
	      			$thumbnail = "uploads/thumb_$file_name";
	      			$wthumb = 190;
	      			$hthumb = 190;
	      			@ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $path_ext);
	  			
	      			//max_size
	      			$target_file = "uploads/$file_name";
	      			$max_size = "uploads/max_$file_name";
	      			$wmax = 600; $hmax = 800;
          			@ak_img_watermark($target_file, $wtrmrk_file, $max_size, $wmax, $hmax, $path_ext);
        		}

        		$list_name = "list_$file_name";
        		$thumb_name = "thumb_$file_name";
       			$max_name = "max_$file_name";
        		$target_file = "uploads/$file_name";
        		$target_list = "uploads/list_$file_name";
        		$target_thumb = "uploads/thumb_$file_name";
        		$target_max = "uploads/max_$file_name";

        		// Instantiate the class
        		/*$access_key = "AKIAJOFJROOPS4JGIPZA";
        		$secret_access_key = "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";
        		$s3 = new S3($access_key, $secret_access_key);
        		//move the file
        		$place_file = $s3->putObjectFile($target_file, "whiteowl-uploads", $file_name, S3::ACL_PUBLIC_READ);
        		$place_file = $s3->putObjectFile($target_list, "whiteowl-uploads", $list_name, S3::ACL_PUBLIC_READ);
        		$place_file = $s3->putObjectFile($target_thumb, "whiteowl-uploads", $thumb_name, S3::ACL_PUBLIC_READ);
        		$place_file = $s3->putObjectFile($target_max, "whiteowl-uploads", $max_name, S3::ACL_PUBLIC_READ);*/

        		//get photos from s3 and make sure they are present. If yes, delete files on server
        		$return_array = array('name' => $file_name, 'type' => $path_ext, 'orig_name' => $orig_file_name);
        		return $return_array;
            	 
      		}//end if ($placeFile != true)
    	}//end if($fileSize > 1048576)	
  	}//end function upload_image()
/*
  function upload_image() {
   include_once("S3.php");
   include_once("ak_php_img_lib_2.0.php");
    $file_tmp_loc = $_FILES["uploaded_file"]["tmp_name"];
    $file_name = $_FILES["uploaded_file"]["name"]; // The file name
    $file_size = $_FILES["uploaded_file"]["size"]; // File size in bytes
    $file_error_msg = $_FILES["uploaded_file"]["error"]; // 0 = false | 1 = true
    $path_suffix = pathinfo($file_name);
    $path_ext = $path_suffix['extension'];
    if($file_size > 9437184) { // if file size is larger than 3 Megabyte in bytes; 1 megabyte = 1048576; 2 megabytes = 2097152
      unlink($file_tmp_loc); // Remove the uploaded file from the PHP temp folder
      return '<span class="red">ERROR:</span> Your photo was larger than 9 Megabytes in size. Choose a smaller photo';
    } else if (!preg_match("/(jpg|png|jpeg|gif)$/i", $path_ext)) {  
      unlink($file_tmp_loc);
      return '<span class="red">ERROR:</span> Your image was not .jpg, .jpeg, .png'; 
    } else if ($file_error_msg == 1) { // if file upload error key is equal to 1
      return '<span class="red">ERROR:</span> An error occured while processing the file. Try again.';
    } else {
      
      $orig_file_name = $file_name;
      $file_name = time().rand() . "." . $path_ext;
      
      $place_file = move_uploaded_file($file_tmp_loc, 'uploads/' . $file_name);
      if ($place_file != true) {
        @unlink($file_tmp_loc); 
        return '<span class="red">ERROR:</span> Photo not uploaded. Try again.';
      } else {
                if (strcmp($path_ext, 'gif') == 0) {
          require("GifFrameExtractor.php");
          require("GifCreator.php");
          require("ImageWorkshop.php");
          $gif_file_path = 'uploads/' . $file_name;
          if (GifFrameExtractor::isAnimatedGif($gif_file_path)) { 
            $gfe = new GifFrameExtractor();
            $frames = $gfe->extract($gif_file_path);
            $retouchedFrames = array();
            $ii = 0;

            foreach ($frames as $frame) {
              $frameLayer = ImageWorkshop::initFromResourceVar($frame['image']);
              if ($ii == 0) {//get only first frame for thumb
                 $frameLayer->resizeInPixel(150, null, true); // Resizing
                 $frameLayer->save('uploads/', "thumb_$file_name");
              }
              $frameLayer->resizeInPixel(300, null, true); // Resizing
              $retouchedFrames[] = $frameLayer->getResult(); //put all the frames in array
              ++$ii;
            }

            // Then we re-generate the GIF
            $gc = new GifCreator();
            $gc->create($retouchedFrames, $gfe->getFrameDurations(), 0);

            // And now save it !
            file_put_contents("uploads/list_$file_name", $gc->getGif());
          } else {//normal gif
	        $target_file = "uploads/$file_name";
	        $list_file = "uploads/list_$file_name"; //you can change this to any other folder to separate smaller images
	        $wmax = 400; $hmax = 400;
	        @ak_img_resize($target_file, $list_file, $wmax, $hmax, $path_ext);

            //make thumbnail
	        $target_file = "uploads/list_$file_name";
	        $thumbnail = "uploads/thumb_$file_name";
	        $wthumb = 150;
	        $hthumb = 150;
	        @ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $path_ext);
	  			
	        //max_size
	        $target_file = "uploads/$file_name";
            $wtrmrk_file = "images/tag.png";
	        $max_size = "uploads/max_$file_name";
	        $wmax = 600; $hmax = 800;
	        //@ak_img_maxsize($target_file, $max_size, $wmax, $hmax, $path_ext);
            @ak_img_watermark($target_file, $wtrmrk_file, $max_size, $wmax, $hmax, $path_ext);
          }
        } else {
          $wtrmrk_file = "images/tag.png";
          //resize image
	      $target_file = "uploads/$file_name";
	      $list_file = "uploads/list_$file_name"; //you can change this to any other folder to separate smaller images
	      $wmax = 400; $hmax = 400;
	      @ak_img_watermark($target_file, $wtrmrk_file, $list_file, $wmax, $hmax, $path_ext);

          //make thumbnail
	      $target_file = "uploads/list_$file_name";
	      $thumbnail = "uploads/thumb_$file_name";
	      $wthumb = 190;
	      $hthumb = 190;
	      @ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $path_ext);
	  			
	      //max_size
	      $target_file = "uploads/$file_name";
	      $max_size = "uploads/max_$file_name";
	      $wmax = 600; $hmax = 800;
          @ak_img_watermark($target_file, $wtrmrk_file, $max_size, $wmax, $hmax, $path_ext);
        }

        $list_name = "list_$file_name";
        $thumb_name = "thumb_$file_name";
        $max_name = "max_$file_name";
        $target_file = "uploads/$file_name";
        $target_list = "uploads/list_$file_name";
        $target_thumb = "uploads/thumb_$file_name";
        $target_max = "uploads/max_$file_name";

        // Instantiate the class
        $access_key = "AKIAJOFJROOPS4JGIPZA";
        $secret_access_key = "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";
        $s3 = new S3($access_key, $secret_access_key);
        //move the file
        $place_file = $s3->putObjectFile($target_file, "whiteowl-uploads", $file_name, S3::ACL_PUBLIC_READ);
        $place_file = $s3->putObjectFile($target_list, "whiteowl-uploads", $list_name, S3::ACL_PUBLIC_READ);
        $place_file = $s3->putObjectFile($target_thumb, "whiteowl-uploads", $thumb_name, S3::ACL_PUBLIC_READ);
        $place_file = $s3->putObjectFile($target_max, "whiteowl-uploads", $max_name, S3::ACL_PUBLIC_READ);

        //get photos from s3 and make sure they are present. If yes, delete files on server
        $return_array = array('name' => $file_name, 'type' => $path_ext, 'orig_name' => $orig_file_name);
        return $return_array;
            	 
      }//end if ($placeFile != true)
    }//end if($fileSize > 1048576)	
  }
*/
  function admin_upload_image() {
   include_once("S3.php");
   include_once("ak_php_img_lib_2.0.php");
    $file_tmp_loc = $_FILES["uploaded_file"]["tmp_name"];
    $file_name = $_FILES["uploaded_file"]["name"]; // The file name
    $file_size = $_FILES["uploaded_file"]["size"]; // File size in bytes
    $file_error_msg = $_FILES["uploaded_file"]["error"]; // 0 = false | 1 = true
    $path_suffix = pathinfo($file_name);
    $path_ext = $path_suffix['extension'];
    if($file_size > 9437184) { // if file size is larger than 3 Megabyte in bytes; 1 megabyte = 1048576; 2 megabytes = 2097152
      unlink($file_tmp_loc); // Remove the uploaded file from the PHP temp folder
      return '<span class="red">ERROR:</span> Your photo was larger than 9 Megabytes in size. Choose a smaller photo';
    } else if (!preg_match("/(jpg|png|jpeg|gif)$/i", $path_ext)) {  
      unlink($file_tmp_loc);
      return '<span class="red">ERROR:</span> Your image was not .jpg, .jpeg, .png'; 
    } else if ($file_error_msg == 1) { // if file upload error key is equal to 1
      return '<span class="red">ERROR:</span> An error occured while processing the file. Try again.';
    } else {
      $orig_file_name = $file_name;
      $file_name = time().rand() . "." . $path_ext;
      
      $place_file = move_uploaded_file($file_tmp_loc, '../uploads/' . $file_name);
      if ($place_file != true) {
        @unlink($file_tmp_loc); 
        return '<span class="red">ERROR:</span> Photo not uploaded. Try again.';
      } else {
        $wtrmrk_file = "../images/tag.png";
        //resize image
        $target_file = "../uploads/$file_name";
        $list_file = "../uploads/list_$file_name"; //you can change this to any other folder to separate smaller images
        $wmax = 400; $hmax = 400;
        @ak_img_watermark($target_file, $wtrmrk_file, $list_file, $wmax, $hmax, $path_ext);

        //make thumbnail
        $target_file = "../uploads/list_$file_name";
        $thumbnail = "../uploads/thumb_$file_name";
        $wthumb = 190;
        $hthumb = 190;
        @ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $path_ext);
        
        //max_size
        $target_file = "../uploads/$file_name";
        $max_size = "../uploads/max_$file_name";
        $wmax = 600; $hmax = 800;
        @ak_img_watermark($target_file, $wtrmrk_file, $max_size, $wmax, $hmax, $path_ext);

        $list_name = "list_$file_name";
        $thumb_name = "thumb_$file_name";
        $max_name = "max_$file_name";
        $target_file = "../uploads/$file_name";
        $target_list = "../uploads/list_$file_name";
        $target_thumb = "../uploads/thumb_$file_name";
        $target_max = "../uploads/max_$file_name";

        // Instantiate the class
        $access_key = "AKIAJOFJROOPS4JGIPZA";
        $secret_access_key = "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";
        $s3 = new S3($access_key, $secret_access_key);
        //move the file
        $place_file = $s3->putObjectFile($target_file, "whiteowl-uploads", $file_name, S3::ACL_PUBLIC_READ);
        $place_file = $s3->putObjectFile($target_list, "whiteowl-uploads", $list_name, S3::ACL_PUBLIC_READ);
        $place_file = $s3->putObjectFile($target_thumb, "whiteowl-uploads", $thumb_name, S3::ACL_PUBLIC_READ);
        $place_file = $s3->putObjectFile($target_max, "whiteowl-uploads", $max_name, S3::ACL_PUBLIC_READ);

        //get photos from s3 and make sure they are present. If yes, delete files on server
        $return_array = array('name' => $file_name, 'type' => $path_ext, 'orig_name' => $orig_file_name);
        return $return_array;
                 
      }//end if ($placeFile != true)
    }//end if($fileSize > 1048576)      
  }