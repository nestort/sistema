	<?php

use Illuminate\Database\Seeder;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([
        ['pais'=>'Andorra','alfa2'=>'AD','abrev'=>'AND'],
		['pais'=>'Emiratos Árabes Unidos','alfa2'=>'AE','abrev'=>'ARE'],
		['pais'=>'Afganistán','alfa2'=>'AF','abrev'=>'AFG'],
		['pais'=>'Antigua y Barbuda','alfa2'=>'AG','abrev'=>'ATG'],
		['pais'=>'Anguila','alfa2'=>'AI','abrev'=>'AIA'],
		['pais'=>'Albania','alfa2'=>'AL','abrev'=>'ALB'],
		['pais'=>'Armenia','alfa2'=>'AM','abrev'=>'ARM'],
		['pais'=>'Antillas Neerlandesas','alfa2'=>'AN','abrev'=>'ANT'],
		['pais'=>'Angola','alfa2'=>'AO','abrev'=>'AGO'],
		['pais'=>'Antártida','alfa2'=>'AQ','abrev'=>'ATA'],
		['pais'=>'Argentina','alfa2'=>'AR','abrev'=>'ARG'],
		['pais'=>'Samoa Americana','alfa2'=>'AS','abrev'=>'ASM'],
		['pais'=>'Austria','alfa2'=>'AT','abrev'=>'AUT'],
		['pais'=>'Australia','alfa2'=>'AU','abrev'=>'AUS'],
		['pais'=>'Aruba','alfa2'=>'AW','abrev'=>'ABW'],
		['pais'=>'Islas Áland','alfa2'=>'AX','abrev'=>'ALA'],
		['pais'=>'Azerbaiyán','alfa2'=>'AZ','abrev'=>'AZE'],
		['pais'=>'Bosnia y Herzegovina','alfa2'=>'BA','abrev'=>'BIH'],
		['pais'=>'Barbados','alfa2'=>'BB','abrev'=>'BRB'],
		['pais'=>'Bangladesh','alfa2'=>'BD','abrev'=>'BGD'],
		['pais'=>'Bélgica','alfa2'=>'BE','abrev'=>'BEL'],
		['pais'=>'Burkina Faso','alfa2'=>'BF','abrev'=>'BFA'],
		['pais'=>'Bulgaria','alfa2'=>'BG','abrev'=>'BGR'],
		['pais'=>'Bahréin','alfa2'=>'BH','abrev'=>'BHR'],
		['pais'=>'Burundi','alfa2'=>'BI','abrev'=>'BDI'],
		['pais'=>'Benin','alfa2'=>'BJ','abrev'=>'BEN'],
		['pais'=>'San Bartolomé','alfa2'=>'BL','abrev'=>'BLM'],
		['pais'=>'Bermudas','alfa2'=>'BM','abrev'=>'BMU'],
		['pais'=>'Brunéi','alfa2'=>'BN','abrev'=>'BRN'],
		['pais'=>'Bolivia','alfa2'=>'BO','abrev'=>'BOL'],
		['pais'=>'Brasil','alfa2'=>'BR','abrev'=>'BRA'],
		['pais'=>'Bahamas','alfa2'=>'BS','abrev'=>'BHS'],
		['pais'=>'Bhután','alfa2'=>'BT','abrev'=>'BTN'],
		['pais'=>'Isla Bouvet','alfa2'=>'BV','abrev'=>'BVT'],
		['pais'=>'Botsuana','alfa2'=>'BW','abrev'=>'BWA'],
		['pais'=>'Belarús','alfa2'=>'BY','abrev'=>'BLR'],
		['pais'=>'Belice','alfa2'=>'BZ','abrev'=>'BLZ'],
		['pais'=>'Canadá','alfa2'=>'CA','abrev'=>'CAN'],
		['pais'=>'Islas Cocos','alfa2'=>'CC','abrev'=>'CCK'],
		['pais'=>'República Centro-Africana','alfa2'=>'CF','abrev'=>'CAF'],
		['pais'=>'Congo','alfa2'=>'CG','abrev'=>'COG'],
		['pais'=>'Suiza','alfa2'=>'CH','abrev'=>'CHE'],
		['pais'=>'Costa de Marfil','alfa2'=>'CI','abrev'=>'CIV'],
		['pais'=>'Islas Cook','alfa2'=>'CK','abrev'=>'COK'],
		['pais'=>'Chile','alfa2'=>'CL','abrev'=>'CHL'],
		['pais'=>'Camerún','alfa2'=>'CM','abrev'=>'CMR'],
		['pais'=>'China','alfa2'=>'CN','abrev'=>'CHN'],
		['pais'=>'Colombia','alfa2'=>'CO','abrev'=>'COL'],
		['pais'=>'Costa Rica','alfa2'=>'CR','abrev'=>'CRI'],
		['pais'=>'Cuba','alfa2'=>'CU','abrev'=>'CUB'],
		['pais'=>'Cabo Verde','alfa2'=>'CV','abrev'=>'CPV'],
		['pais'=>'Islas Christmas','alfa2'=>'CX','abrev'=>'CXR'],
		['pais'=>'Chipre','alfa2'=>'CY','abrev'=>'CYP'],
		['pais'=>'República Checa','alfa2'=>'CZ','abrev'=>'CZE'],
		['pais'=>'Alemania','alfa2'=>'DE','abrev'=>'DEU'],
		['pais'=>'Yibuti','alfa2'=>'DJ','abrev'=>'DJI'],
		['pais'=>'Dinamarca','alfa2'=>'DK','abrev'=>'DNK'],
		['pais'=>'Domínica','alfa2'=>'DM','abrev'=>'DMA'],
		['pais'=>'República Dominicana','alfa2'=>'DO','abrev'=>'DOM'],
		['pais'=>'Argel','alfa2'=>'DZ','abrev'=>'DZA'],
		['pais'=>'Ecuador','alfa2'=>'EC','abrev'=>'ECU'],
		['pais'=>'Estonia','alfa2'=>'EE','abrev'=>'EST'],
		['pais'=>'Egipto','alfa2'=>'EG','abrev'=>'EGY'],
		['pais'=>'Sahara Occidental','alfa2'=>'EH','abrev'=>'ESH'],
		['pais'=>'Eritrea','alfa2'=>'ER','abrev'=>'ERI'],
		['pais'=>'España','alfa2'=>'ES','abrev'=>'ESP'],
		['pais'=>'Etiopía','alfa2'=>'ET','abrev'=>'ETH'],
		['pais'=>'Finlandia','alfa2'=>'FI','abrev'=>'FIN'],
		['pais'=>'Fiji','alfa2'=>'FJ','abrev'=>'FJI'],
		['pais'=>'Islas Malvinas','alfa2'=>'FK','abrev'=>'KLK'],
		['pais'=>'Micronesia','alfa2'=>'FM','abrev'=>'FSM'],
		['pais'=>'Islas Faroe','alfa2'=>'FO','abrev'=>'FRO'],
		['pais'=>'Francia','alfa2'=>'FR','abrev'=>'FRA'],
		['pais'=>'Gabón','alfa2'=>'GA','abrev'=>'GAB'],
		['pais'=>'Reino Unido','alfa2'=>'GB','abrev'=>'GBR'],
		['pais'=>'Granada','alfa2'=>'GD','abrev'=>'GRD'],
		['pais'=>'Georgia','alfa2'=>'GE','abrev'=>'GEO'],
		['pais'=>'Guayana Francesa','alfa2'=>'GF','abrev'=>'GUF'],
		['pais'=>'Guernsey','alfa2'=>'GG','abrev'=>'GGY'],
		['pais'=>'Ghana','alfa2'=>'GH','abrev'=>'GHA'],
		['pais'=>'Gibraltar','alfa2'=>'GI','abrev'=>'GIB'],
		['pais'=>'Groenlandia','alfa2'=>'GL','abrev'=>'GRL'],
		['pais'=>'Gambia','alfa2'=>'GM','abrev'=>'GMB'],
		['pais'=>'Guinea','alfa2'=>'GN','abrev'=>'GIN'],
		['pais'=>'Guadalupe','alfa2'=>'GP','abrev'=>'GLP'],
		['pais'=>'Guinea Ecuatorial','alfa2'=>'GQ','abrev'=>'GNQ'],
		['pais'=>'Grecia','alfa2'=>'GR','abrev'=>'GRC'],
		['pais'=>'Georgia del Sur e Islas Sandwich del Sur','alfa2'=>'GS','abrev'=>'SGS'],
		['pais'=>'Guatemala','alfa2'=>'GT','abrev'=>'GTM'],
		['pais'=>'Guam','alfa2'=>'GU','abrev'=>'GUM'],
		['pais'=>'Guinea-Bissau','alfa2'=>'GW','abrev'=>'GNB'],
		['pais'=>'Guayana','alfa2'=>'GY','abrev'=>'GUY'],
		['pais'=>'Hong Kong','alfa2'=>'HK','abrev'=>'HKG'],
		['pais'=>'Islas Heard y McDonald','alfa2'=>'HM','abrev'=>'HMD'],
		['pais'=>'Honduras','alfa2'=>'HN','abrev'=>'HND'],
		['pais'=>'Croacia','alfa2'=>'HR','abrev'=>'HRV'],
		['pais'=>'Haití','alfa2'=>'HT','abrev'=>'HTI'],
		['pais'=>'Hungría','alfa2'=>'HU','abrev'=>'HUN'],
		['pais'=>'Indonesia','alfa2'=>'ID','abrev'=>'IDN'],
		['pais'=>'Irlanda','alfa2'=>'IE','abrev'=>'IRL'],
		['pais'=>'Israel','alfa2'=>'IL','abrev'=>'ISR'],
		['pais'=>'Isla de Man','alfa2'=>'IM','abrev'=>'IMN'],
		['pais'=>'India','alfa2'=>'IN','abrev'=>'IND'],
		['pais'=>'Territorio Británico del Océano Índico','alfa2'=>'IO','abrev'=>'IOT'],
		['pais'=>'Irak','alfa2'=>'IQ','abrev'=>'IRQ'],
		['pais'=>'Irán','alfa2'=>'IR','abrev'=>'IRN'],
		['pais'=>'Islandia','alfa2'=>'IS','abrev'=>'ISL'],
		['pais'=>'Italia','alfa2'=>'IT','abrev'=>'ITA'],
		['pais'=>'Jersey','alfa2'=>'JE','abrev'=>'JEY'],
		['pais'=>'Jamaica','alfa2'=>'JM','abrev'=>'JAM'],
		['pais'=>'Jordania','alfa2'=>'JO','abrev'=>'JOR'],
		['pais'=>'Japón','alfa2'=>'JP','abrev'=>'JPN'],
		['pais'=>'Kenia','alfa2'=>'KE','abrev'=>'KEN'],
		['pais'=>'Kirguistán','alfa2'=>'KG','abrev'=>'KGZ'],
		['pais'=>'Camboya','alfa2'=>'KH','abrev'=>'KHM'],
		['pais'=>'Kiribati','alfa2'=>'KI','abrev'=>'KIR'],
		['pais'=>'Comoros','alfa2'=>'KM','abrev'=>'COM'],
		['pais'=>'San Cristóbal y Nieves','alfa2'=>'KN','abrev'=>'KNA'],
		['pais'=>'Corea del Norte','alfa2'=>'KP','abrev'=>'PRK'],
		['pais'=>'Corea del Sur','alfa2'=>'KR','abrev'=>'KOR'],
		['pais'=>'Kuwait','alfa2'=>'KW','abrev'=>'KWT'],
		['pais'=>'Islas Caimán','alfa2'=>'KY','abrev'=>'CYM'],
		['pais'=>'Kazajstán','alfa2'=>'KZ','abrev'=>'KAZ'],
		['pais'=>'Laos','alfa2'=>'LA','abrev'=>'LAO'],
		['pais'=>'Líbano','alfa2'=>'LB','abrev'=>'LBN'],
		['pais'=>'Santa Lucía','alfa2'=>'LC','abrev'=>'LCA'],
		['pais'=>'Liechtenstein','alfa2'=>'LI','abrev'=>'LIE'],
		['pais'=>'Sri Lanka','alfa2'=>'LK','abrev'=>'LKA'],
		['pais'=>'Liberia','alfa2'=>'LR','abrev'=>'LBR'],
		['pais'=>'Lesotho','alfa2'=>'LS','abrev'=>'LSO'],
		['pais'=>'Lituania','alfa2'=>'LT','abrev'=>'LTU'],
		['pais'=>'Luxemburgo','alfa2'=>'LU','abrev'=>'LUX'],
		['pais'=>'Letonia','alfa2'=>'LV','abrev'=>'LVA'],
		['pais'=>'Libia','alfa2'=>'LY','abrev'=>'LBY'],
		['pais'=>'Marruecos','alfa2'=>'MA','abrev'=>'MAR'],
		['pais'=>'Mónaco','alfa2'=>'MC','abrev'=>'MCO'],
		['pais'=>'Moldova','alfa2'=>'MD','abrev'=>'MDA'],
		['pais'=>'Montenegro','alfa2'=>'ME','abrev'=>'MNE'],
		['pais'=>'Madagascar','alfa2'=>'MG','abrev'=>'MDG'],
		['pais'=>'Islas Marshall','alfa2'=>'MH','abrev'=>'MHL'],
		['pais'=>'Macedonia','alfa2'=>'MK','abrev'=>'MKD'],
		['pais'=>'Mali','alfa2'=>'ML','abrev'=>'MLI'],
		['pais'=>'Myanmar','alfa2'=>'MM','abrev'=>'MMR'],
		['pais'=>'Mongolia','alfa2'=>'MN','abrev'=>'MNG'],
		['pais'=>'Macao','alfa2'=>'MO','abrev'=>'MAC'],
		['pais'=>'Martinica','alfa2'=>'MQ','abrev'=>'MTQ'],
		['pais'=>'Mauritania','alfa2'=>'MR','abrev'=>'MRT'],
		['pais'=>'Montserrat','alfa2'=>'MS','abrev'=>'MSR'],
		['pais'=>'Malta','alfa2'=>'MT','abrev'=>'MLT'],
		['pais'=>'Mauricio','alfa2'=>'MU','abrev'=>'MUS'],
		['pais'=>'Maldivas','alfa2'=>'MV','abrev'=>'MDV'],
		['pais'=>'Malawi','alfa2'=>'MW','abrev'=>'MWI'],
		['pais'=>'México','alfa2'=>'MX','abrev'=>'MEX'],
		['pais'=>'Malasia','alfa2'=>'MY','abrev'=>'MYS'],
		['pais'=>'Mozambique','alfa2'=>'MZ','abrev'=>'MOZ'],
		['pais'=>'Namibia','alfa2'=>'NA','abrev'=>'NAM'],
		['pais'=>'Nueva Caledonia','alfa2'=>'NC','abrev'=>'NCL'],
		['pais'=>'Níger','alfa2'=>'NE','abrev'=>'NER'],
		['pais'=>'Islas Norkfolk','alfa2'=>'NF','abrev'=>'NFK'],
		['pais'=>'Nigeria','alfa2'=>'NG','abrev'=>'NGA'],
		['pais'=>'Nicaragua','alfa2'=>'NI','abrev'=>'NIC'],
		['pais'=>'Países Bajos','alfa2'=>'NL','abrev'=>'NLD'],
		['pais'=>'Noruega','alfa2'=>'NO','abrev'=>'NOR'],
		['pais'=>'Nepal','alfa2'=>'NP','abrev'=>'NPL'],
		['pais'=>'Nauru','alfa2'=>'NR','abrev'=>'NRU'],
		['pais'=>'Niue','alfa2'=>'NU','abrev'=>'NIU'],
		['pais'=>'Nueva Zelanda','alfa2'=>'NZ','abrev'=>'NZL'],
		['pais'=>'Omán','alfa2'=>'OM','abrev'=>'OMN'],
		['pais'=>'Panamá','alfa2'=>'PA','abrev'=>'PAN'],
		['pais'=>'Perú','alfa2'=>'PE','abrev'=>'PER'],
		['pais'=>'Polinesia Francesa','alfa2'=>'PF','abrev'=>'PYF'],
		['pais'=>'Papúa Nueva Guinea','alfa2'=>'PG','abrev'=>'PNG'],
		['pais'=>'Filipinas','alfa2'=>'PH','abrev'=>'PHL'],
		['pais'=>'Pakistán','alfa2'=>'PK','abrev'=>'PAK'],
		['pais'=>'Polonia','alfa2'=>'PL','abrev'=>'POL'],
		['pais'=>'San Pedro y Miquelón','alfa2'=>'PM','abrev'=>'SPM'],
		['pais'=>'Islas Pitcairn','alfa2'=>'PN','abrev'=>'PCN'],
		['pais'=>'Puerto Rico','alfa2'=>'PR','abrev'=>'PRI'],
		['pais'=>'Palestina','alfa2'=>'PS','abrev'=>'PSE'],
		['pais'=>'Portugal','alfa2'=>'PT','abrev'=>'PRT'],
		['pais'=>'Islas Palaos','alfa2'=>'PW','abrev'=>'PLW'],
		['pais'=>'Paraguay','alfa2'=>'PY','abrev'=>'PRY'],
		['pais'=>'Qatar','alfa2'=>'QA','abrev'=>'QAT'],
		['pais'=>'Reunión','alfa2'=>'RE','abrev'=>'REU'],
		['pais'=>'Rumanía','alfa2'=>'RO','abrev'=>'ROU'],
		['pais'=>'Serbia y Montenegro','alfa2'=>'RS','abrev'=>'SRB'],
		['pais'=>'Rusia','alfa2'=>'RU','abrev'=>'RUS'],
		['pais'=>'Ruanda','alfa2'=>'RW','abrev'=>'RWA'],
		['pais'=>'Arabia Saudita','alfa2'=>'SA','abrev'=>'SAU'],
		['pais'=>'Islas Solomón','alfa2'=>'SB','abrev'=>'SLB'],
		['pais'=>'Seychelles','alfa2'=>'SC','abrev'=>'SYC'],
		['pais'=>'Sudán','alfa2'=>'SD','abrev'=>'SDN'],
		['pais'=>'Suecia','alfa2'=>'SE','abrev'=>'SWE'],
		['pais'=>'Singapur','alfa2'=>'SG','abrev'=>'SGP'],
		['pais'=>'Santa Elena','alfa2'=>'SH','abrev'=>'SHN'],
		['pais'=>'Eslovenia','alfa2'=>'SI','abrev'=>'SVN'],
		['pais'=>'Islas Svalbard y Jan Mayen','alfa2'=>'SJ','abrev'=>'SJM'],
		['pais'=>'Eslovaquia','alfa2'=>'SK','abrev'=>'SVK'],
		['pais'=>'Sierra Leona','alfa2'=>'SL','abrev'=>'SLE'],
		['pais'=>'San Marino','alfa2'=>'SM','abrev'=>'SMR'],
		['pais'=>'Senegal','alfa2'=>'SN','abrev'=>'SEN'],
		['pais'=>'Somalia','alfa2'=>'SO','abrev'=>'SOM'],
		['pais'=>'Surinam','alfa2'=>'SR','abrev'=>'SUR'],
		['pais'=>'Santo Tomé y Príncipe','alfa2'=>'ST','abrev'=>'STP'],
		['pais'=>'El Salvador','alfa2'=>'SV','abrev'=>'SLV'],
		['pais'=>'Siria','alfa2'=>'SY','abrev'=>'SYR'],
		['pais'=>'Suazilandia','alfa2'=>'SZ','abrev'=>'SWZ'],
		['pais'=>'Islas Turcas y Caicos','alfa2'=>'TC','abrev'=>'TCA'],
		['pais'=>'Chad','alfa2'=>'TD','abrev'=>'TCD'],
		['pais'=>'Territorios Australes Franceses','alfa2'=>'TF','abrev'=>'ATF'],
		['pais'=>'Togo','alfa2'=>'TG','abrev'=>'TGO'],
		['pais'=>'Tailandia','alfa2'=>'TH','abrev'=>'THA'],
		['pais'=>'Tanzania','alfa2'=>'TH','abrev'=>'TZA'],
		['pais'=>'Tayikistán','alfa2'=>'TJ','abrev'=>'TJK'],
		['pais'=>'Tokelau','alfa2'=>'TK','abrev'=>'TKL'],
		['pais'=>'Timor-Leste','alfa2'=>'TL','abrev'=>'TLS'],
		['pais'=>'Turkmenistán','alfa2'=>'TM','abrev'=>'TKM'],
		['pais'=>'Túnez','alfa2'=>'TN','abrev'=>'TUN'],
		['pais'=>'Tonga','alfa2'=>'TO','abrev'=>'TON'],
		['pais'=>'Turquía','alfa2'=>'TR','abrev'=>'TUR'],
		['pais'=>'Trinidad y Tobago','alfa2'=>'TT','abrev'=>'TTO'],
		['pais'=>'Tuvalu','alfa2'=>'TV','abrev'=>'TUV'],
		['pais'=>'Taiwán','alfa2'=>'TW','abrev'=>'TWN'],
		['pais'=>'Ucrania','alfa2'=>'UA','abrev'=>'UKR'],
		['pais'=>'Uganda','alfa2'=>'UG','abrev'=>'UGA'],
		['pais'=>'Estados Unidos de América','alfa2'=>'US','abrev'=>'USA'],
		['pais'=>'Uruguay','alfa2'=>'UY','abrev'=>'URY'],
		['pais'=>'Uzbekistán','alfa2'=>'UZ','abrev'=>'UZB'],
		['pais'=>'Ciudad del Vaticano','alfa2'=>'VA','abrev'=>'VAT'],
		['pais'=>'San Vicente y las Granadinas','alfa2'=>'VC','abrev'=>'VCT'],
		['pais'=>'Venezuela','alfa2'=>'VE','abrev'=>'VEN'],
		['pais'=>'Islas Vírgenes Británicas','alfa2'=>'VG','abrev'=>'VGB'],
		['pais'=>'Islas Vírgenes de los Estados Unidos de América','alfa2'=>'VI','abrev'=>'VIR'],
		['pais'=>'Vietnam','alfa2'=>'VN','abrev'=>'VNM'],
		['pais'=>'Vanuatu','alfa2'=>'VU','abrev'=>'VUT'],
		['pais'=>'Wallis y Futuna','alfa2'=>'WF','abrev'=>'WLF'],
		['pais'=>'Samoa','alfa2'=>'WS','abrev'=>'WSM'],
		['pais'=>'Yemen','alfa2'=>'YE','abrev'=>'YEM'],
		['pais'=>'Mayotte','alfa2'=>'YT','abrev'=>'MYT'],
		['pais'=>'Sudáfrica','alfa2'=>'ZA','abrev'=>'ZAF']
		]);
		    }
		}