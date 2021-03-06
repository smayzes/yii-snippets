<?php
/**
 * LocationHelper class.
 */
class LocationHelper {

	/**
	 * list of Countries
	 *
	 * @var mixed
	 * @access public
	 */
	public $countries = array (
		'CA' => 'Canada',
		'US' => 'United States',
		'AF' => 'Afghanistan',
		'AX' => 'Åland Islands',
		'AL' => 'Albania',
		'DZ' => 'Algeria',
		'AS' => 'American Samoa',
		'AD' => 'Andorra',
		'AO' => 'Angola',
		'AI' => 'Anguilla',
		'AQ' => 'Antarctica',
		'AG' => 'Antigua and Barbuda',
		'AR' => 'Argentina',
		'AM' => 'Armenia',
		'AW' => 'Aruba',
		'AC' => 'Ascension Island',
		'AU' => 'Australia',
		'AT' => 'Austria',
		'AZ' => 'Azerbaijan',
		'BS' => 'Bahamas',
		'BH' => 'Bahrain',
		'BD' => 'Bangladesh',
		'BB' => 'Barbados',
		'BY' => 'Belarus',
		'BE' => 'Belgium',
		'BZ' => 'Belize',
		'BJ' => 'Benin',
		'BM' => 'Bermuda',
		'BT' => 'Bhutan',
		'BO' => 'Bolivia',
		'BQ' => 'Bonaire, Sint Eustatius, and Saba',
		'BA' => 'Bosnia and Herzegovina',
		'BW' => 'Botswana',
		'BV' => 'Bouvet Island',
		'BR' => 'Brazil',
		'IO' => 'British Indian Ocean Territory',
		'VG' => 'British Virgin Islands',
		'BN' => 'Brunei',
		'BG' => 'Bulgaria',
		'BF' => 'Burkina Faso',
		'BI' => 'Burundi',
		'KH' => 'Cambodia',
		'CM' => 'Cameroon',
		'IC' => 'Canary Islands',
		'CV' => 'Cape Verde',
		'KY' => 'Cayman Islands',
		'CF' => 'Central African Republic',
		'EA' => 'Ceuta and Melilla',
		'TD' => 'Chad',
		'CL' => 'Chile',
		'CN' => 'China',
		'CX' => 'Christmas Island',
		'CP' => 'Clipperton Island',
		'CC' => 'Cocos [Keeling] Islands',
		'CO' => 'Colombia',
		'KM' => 'Comoros',
		'CG' => 'Congo - Brazzaville',
		'CD' => 'Congo - Kinshasa',
		'CK' => 'Cook Islands',
		'CR' => 'Costa Rica',
		'CI' => 'Côte d’Ivoire',
		'HR' => 'Croatia',
		'CU' => 'Cuba',
		'CW' => 'Curaçao',
		'CY' => 'Cyprus',
		'CZ' => 'Czech Republic',
		'DK' => 'Denmark',
		'DG' => 'Diego Garcia',
		'DJ' => 'Djibouti',
		'DM' => 'Dominica',
		'DO' => 'Dominican Republic',
		'EC' => 'Ecuador',
		'EG' => 'Egypt',
		'SV' => 'El Salvador',
		'GQ' => 'Equatorial Guinea',
		'ER' => 'Eritrea',
		'EE' => 'Estonia',
		'ET' => 'Ethiopia',
		'EU' => 'European Union',
		'FK' => 'Falkland Islands',
		'FO' => 'Faroe Islands',
		'FJ' => 'Fiji',
		'FI' => 'Finland',
		'FR' => 'France',
		'GF' => 'French Guiana',
		'PF' => 'French Polynesia',
		'TF' => 'French Southern Territories',
		'GA' => 'Gabon',
		'GM' => 'Gambia',
		'GE' => 'Georgia',
		'DE' => 'Germany',
		'GH' => 'Ghana',
		'GI' => 'Gibraltar',
		'GR' => 'Greece',
		'GL' => 'Greenland',
		'GD' => 'Grenada',
		'GP' => 'Guadeloupe',
		'GU' => 'Guam',
		'GT' => 'Guatemala',
		'GG' => 'Guernsey',
		'GN' => 'Guinea',
		'GW' => 'Guinea-Bissau',
		'GY' => 'Guyana',
		'HT' => 'Haiti',
		'HM' => 'Heard Island and McDonald Islands',
		'HN' => 'Honduras',
		'HK' => 'Hong Kong SAR China',
		'HU' => 'Hungary',
		'IS' => 'Iceland',
		'IN' => 'India',
		'ID' => 'Indonesia',
		'IR' => 'Iran',
		'IQ' => 'Iraq',
		'IE' => 'Ireland',
		'IM' => 'Isle of Man',
		'IL' => 'Israel',
		'IT' => 'Italy',
		'JM' => 'Jamaica',
		'JP' => 'Japan',
		'JE' => 'Jersey',
		'JO' => 'Jordan',
		'KZ' => 'Kazakhstan',
		'KE' => 'Kenya',
		'KI' => 'Kiribati',
		'KW' => 'Kuwait',
		'KG' => 'Kyrgyzstan',
		'LA' => 'Laos',
		'LV' => 'Latvia',
		'LB' => 'Lebanon',
		'LS' => 'Lesotho',
		'LR' => 'Liberia',
		'LY' => 'Libya',
		'LI' => 'Liechtenstein',
		'LT' => 'Lithuania',
		'LU' => 'Luxembourg',
		'MO' => 'Macau SAR China',
		'MK' => 'Macedonia',
		'MG' => 'Madagascar',
		'MW' => 'Malawi',
		'MY' => 'Malaysia',
		'MV' => 'Maldives',
		'ML' => 'Mali',
		'MT' => 'Malta',
		'MH' => 'Marshall Islands',
		'MQ' => 'Martinique',
		'MR' => 'Mauritania',
		'MU' => 'Mauritius',
		'YT' => 'Mayotte',
		'MX' => 'Mexico',
		'FM' => 'Micronesia',
		'MD' => 'Moldova',
		'MC' => 'Monaco',
		'MN' => 'Mongolia',
		'ME' => 'Montenegro',
		'MS' => 'Montserrat',
		'MA' => 'Morocco',
		'MZ' => 'Mozambique',
		'MM' => 'Myanmar [Burma]',
		'NA' => 'Namibia',
		'NR' => 'Nauru',
		'NP' => 'Nepal',
		'NL' => 'Netherlands',
		'AN' => 'Netherlands Antilles',
		'NC' => 'New Caledonia',
		'NZ' => 'New Zealand',
		'NI' => 'Nicaragua',
		'NE' => 'Niger',
		'NG' => 'Nigeria',
		'NU' => 'Niue',
		'NF' => 'Norfolk Island',
		'KP' => 'North Korea',
		'MP' => 'Northern Mariana Islands',
		'NO' => 'Norway',
		'OM' => 'Oman',
		'QO' => 'Outlying Oceania',
		'PK' => 'Pakistan',
		'PW' => 'Palau',
		'PS' => 'Palestinian Territories',
		'PA' => 'Panama',
		'PG' => 'Papua New Guinea',
		'PY' => 'Paraguay',
		'PE' => 'Peru',
		'PH' => 'Philippines',
		'PN' => 'Pitcairn Islands',
		'PL' => 'Poland',
		'PT' => 'Portugal',
		'PR' => 'Puerto Rico',
		'QA' => 'Qatar',
		'RE' => 'Réunion',
		'RO' => 'Romania',
		'RU' => 'Russia',
		'RW' => 'Rwanda',
		'BL' => 'Saint Barthélemy',
		'SH' => 'Saint Helena',
		'KN' => 'Saint Kitts and Nevis',
		'LC' => 'Saint Lucia',
		'MF' => 'Saint Martin',
		'PM' => 'Saint Pierre and Miquelon',
		'VC' => 'Saint Vincent and the Grenadines',
		'WS' => 'Samoa',
		'SM' => 'San Marino',
		'ST' => 'São Tomé and Príncipe',
		'SA' => 'Saudi Arabia',
		'SN' => 'Senegal',
		'RS' => 'Serbia',
		'CS' => 'Serbia and Montenegro',
		'SC' => 'Seychelles',
		'SL' => 'Sierra Leone',
		'SG' => 'Singapore',
		'SX' => 'Sint Maarten',
		'SK' => 'Slovakia',
		'SI' => 'Slovenia',
		'SB' => 'Solomon Islands',
		'SO' => 'Somalia',
		'ZA' => 'South Africa',
		'GS' => 'South Georgia and the South Sandwich Islands',
		'KR' => 'South Korea',
		'SS' => 'South Sudan',
		'ES' => 'Spain',
		'LK' => 'Sri Lanka',
		'SD' => 'Sudan',
		'SR' => 'Suriname',
		'SJ' => 'Svalbard and Jan Mayen',
		'SZ' => 'Swaziland',
		'SE' => 'Sweden',
		'CH' => 'Switzerland',
		'SY' => 'Syria',
		'TW' => 'Taiwan',
		'TJ' => 'Tajikistan',
		'TZ' => 'Tanzania',
		'TH' => 'Thailand',
		'TL' => 'Timor-Leste',
		'TG' => 'Togo',
		'TK' => 'Tokelau',
		'TO' => 'Tonga',
		'TT' => 'Trinidad and Tobago',
		'TA' => 'Tristan da Cunha',
		'TN' => 'Tunisia',
		'TR' => 'Turkey',
		'TM' => 'Turkmenistan',
		'TC' => 'Turks and Caicos Islands',
		'TV' => 'Tuvalu',
		'UM' => 'U.S. Minor Outlying Islands',
		'VI' => 'U.S. Virgin Islands',
		'UG' => 'Uganda',
		'UA' => 'Ukraine',
		'AE' => 'United Arab Emirates',
		'GB' => 'United Kingdom',
		'UY' => 'Uruguay',
		'UZ' => 'Uzbekistan',
		'VU' => 'Vanuatu',
		'VA' => 'Vatican City',
		'VE' => 'Venezuela',
		'VN' => 'Vietnam',
		'WF' => 'Wallis and Futuna',
		'EH' => 'Western Sahara',
		'YE' => 'Yemen',
		'ZM' => 'Zambia',
		'ZW' => 'Zimbabwe',
	);


	/**
	 * List of States
	 *
	 * @var mixed
	 * @access public
	 */
	public $states = array(
		'US' => array(
			'AL'=>'Alabama',
	        'AK'=>'Alaska',
	        'AZ'=>'Arizona',
	        'AR'=>'Arkansas',
	        'CA'=>'California',
	        'CO'=>'Colorado',
	        'CT'=>'Connecticut',
	        'DE'=>'Delaware',
	        'DC'=>'District Of Columbia',
	        'FL'=>'Florida',
	        'GA'=>'Georgia',
	        'HI'=>'Hawaii',
	        'ID'=>'Idaho',
	        'IL'=>'Illinois',
	        'IN'=>'Indiana',
	        'IA'=>'Iowa',
	        'KS'=>'Kansas',
	        'KY'=>'Kentucky',
	        'LA'=>'Louisiana',
	        'ME'=>'Maine',
	        'MD'=>'Maryland',
	        'MA'=>'Massachusetts',
	        'MI'=>'Michigan',
	        'MN'=>'Minnesota',
	        'MS'=>'Mississippi',
	        'MO'=>'Missouri',
	        'MT'=>'Montana',
	        'NE'=>'Nebraska',
	        'NV'=>'Nevada',
	        'NH'=>'New Hampshire',
	        'NJ'=>'New Jersey',
	        'NM'=>'New Mexico',
	        'NY'=>'New York',
	        'NC'=>'North Carolina',
	        'ND'=>'North Dakota',
	        'OH'=>'Ohio',
	        'OK'=>'Oklahoma',
	        'OR'=>'Oregon',
	        'PA'=>'Pennsylvania',
	        'PR'=>'Puerto Rico',
	        'RI'=>'Rhode Island',
	        'SC'=>'South Carolina',
	        'SD'=>'South Dakota',
	        'TN'=>'Tennessee',
	        'TX'=>'Texas',
	        'UT'=>'Utah',
	        'VT'=>'Vermont',
	        'VA'=>'Virginia',
	        'WA'=>'Washington',
	        'WV'=>'West Virginia',
	        'WI'=>'Wisconsin',
	        'WY'=>'Wyoming'
		),
		'CA' => array(
			'AB'=>'Alberta',
	        'BC'=>'British Columbia',
	        'MB'=>'Manitoba',
	        'NB'=>'New Brunswick',
	        'NF'=>'Newfoundland',
	        'NT'=>'Northwest Territories',
	        'NS'=>'Nova Scotia',
	        'ON'=>'Ontario',
	        'PE'=>'Prince Edward Island',
	        'QC'=>'Quebec',
	        'SK'=>'Saskatchewan',
	        'YT'=>'Yukon Territory'
		)
	);


	/**
	 * list of Timezones
	 *
	 * @var mixed
	 * @access public
	 */
	public $timezones = array(
		'UM12'=>'(UTC -12:00) Baker/Howland Island',
		'UM11'=>'(UTC -11:00) Samoa Time Zone, Niue',
		'UM10'=>'(UTC -10:00) Hawaii-Aleutian Standard Time, Cook Islands, Tahiti',
		'UM95'=>'(UTC -9:30) Marquesas Islands',
		'UM9'=>'(UTC -9:00) Alaska Standard Time, Gambier Islands',
		'UM8'=>'(UTC -8:00) Pacific Standard Time, Clipperton Island',
		'UM7'=>'(UTC -7:00) Mountain Standard Time',
		'UM6'=>'(UTC -6:00) Central Standard Time',
		'UM5" selected="selected'=>'(UTC -5:00) Eastern Standard Time, Western Caribbean Standard Time',
		'UM45'=>'(UTC -4:30) Venezuelan Standard Time',
		'UM4'=>'(UTC -4:00) Atlantic Standard Time, Eastern Caribbean Standard Time',
		'UM35'=>'(UTC -3:30) Newfoundland Standard Time',
		'UM3'=>'(UTC -3:00) Argentina, Brazil, French Guiana, Uruguay',
		'UM2'=>'(UTC -2:00) South Georgia/South Sandwich Islands',
		'UM1'=>'(UTC -1:00) Azores, Cape Verde Islands',
		'UTC'=>'(UTC) Greenwich Mean Time, Western European Time',
		'UP1'=>'(UTC +1:00) Central European Time, West Africa Time',
		'UP2'=>'(UTC +2:00) Central Africa Time, Eastern European Time, Kaliningrad Time',
		'UP3'=>'(UTC +3:00) Moscow Time, East Africa Time',
		'UP35'=>'(UTC +3:30) Iran Standard Time',
		'UP4'=>'(UTC +4:00) Azerbaijan Standard Time, Samara Time',
		'UP45'=>'(UTC +4:30) Afghanistan',
		'UP5'=>'(UTC +5:00) Pakistan Standard Time, Yekaterinburg Time',
		'UP55'=>'(UTC +5:30) Indian Standard Time, Sri Lanka Time',
		'UP575'=>'(UTC +5:45) Nepal Time',
		'UP6'=>'(UTC +6:00) Bangladesh Standard Time, Bhutan Time, Omsk Time',
		'UP65'=>'(UTC +6:30) Cocos Islands, Myanmar',
		'UP7'=>'(UTC +7:00) Krasnoyarsk Time, Cambodia, Laos, Thailand, Vietnam',
		'UP8'=>'(UTC +8:00) Australian Western Standard Time, Beijing Time, Irkutsk Time',
		'UP875'=>'(UTC +8:45) Australian Central Western Standard Time',
		'UP9'=>'(UTC +9:00) Japan Standard Time, Korea Standard Time, Yakutsk Time',
		'UP95'=>'(UTC +9:30) Australian Central Standard Time',
		'UP10'=>'(UTC +10:00) Australian Eastern Standard Time, Vladivostok Time',
		'UP105'=>'(UTC +10:30) Lord Howe Island',
		'UP11'=>'(UTC +11:00) Magadan Time, Solomon Islands, Vanuatu',
		'UP115'=>'(UTC +11:30) Norfolk Island',
		'UP12'=>'(UTC +12:00) Fiji, Gilbert Islands, Kamchatka Time, New Zealand Standard Time',
		'UP1275'=>'(UTC +12:45) Chatham Islands Standard Time',
		'UP13'=>'(UTC +13:00) Phoenix Islands Time, Tonga',
		'UP14'=>'(UTC +14:00) Line Islands',
	);
}