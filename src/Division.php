<?php 

namespace Dinushchathurya\Division;

class Division {

    public static function getProvince(){
        return array_keys(self::$Division);
    }

    public static function getDistricts($province){
        return array_keys(self::$Division[$province]);
    }

    public static function getDivisions($division){
        foreach(self::$Division as $province => $curDivision){
            if(in_array($division,array_keys($curDivision))){
                return $curDivision[$division];
            }
        }
    }

    public static $Division = array(

        'Western' => array(
            'Colombo' =>
                array(
                    'Sammanthranapura-(සම්මන්ත්‍රණපුර)',
                    'Mattakkuliya-(මට්ටක්කුලිය)',
                    'Modara-(මෝදර)',
                    'Madampitiya-(මාදම්පිටිය)',
                    'Mahawatta-(මහවත්ත)',
                    'Aluthmawatha-(අළුත්මාවත)',
                    'Lunupokuna-(ලුණුපොකුණ)',
                    'Bloemendhal-(බ්ලුමැන්ඩල්)',
                    'Kotahena East-(කොටහේන නැගෙනහිර)',
                    'Kotahena West-(කොටහේන බටහිර)',
                    'Kochchikade North-(කොච්චිකඩේ උතුර)',
                    'Jinthupitiya-(ජින්තුපිටිය)',
                    'Massangar Street-(මසංගස් විදිය)',
                    'New Bazaar-(නිව් බසාර්)',
                    'Grandpass South-(ග්‍රෑන්ඩ්පාස් දකුණ)',
                    'Grandpass North-(ග්‍රෑන්ඩ්පාස් උතුර)',
                    'Nawagampura-(නවගම්පුර)',
                    'Maligawatta East-(මාලිගාවත්ත නැගෙනහිර)',
                    'Kettarama-(ඛෙත්තාරාම)',
                    'Aluthkade East-(අළුත්කඩේ නැගෙනහිර)',
                    'Aluthkade West-(අළුත්කඩේ බටහිර)',
                    'Kochchikade South-(කොච්චිකඩේ දකුණ)',
                    'Pettah-(පිටකොටුව)',
                    'Fort-(කොටුව)',
                    'Galle Face-(ගාලුමුවදොර)',
                    'Slave Island-(කොම්පඤ්ඤ වීදිය)',
                    'Hunupitiya-(හුණුපිටිය)',
                    'Suduwella-(සුදුවැල්ල)',
                    'Keselwatta-(කෙසෙල්වත්ත)',
                    'Panchikawatta-(පංචිකාවත්ත)',
                    'Maligawatta West-(මාලිගාවත්ත බටහිර)',
                    'Maligakanda-(මාලිගාකන්ද)',
                    'Maradana-(මරදාන)',
                    'Ibbanwala-(ඉබ්බන්වල)',
                    'Wekanda-(වෑකන්ද)',
                    'Wathulla-(වදුල්ල)',
                    'Sedawatta-(සේදවත්ත)',
                    'Halmulla-(හල්මුල්ල)',
                    'Kotuvila-(කොටුවිල)',
                    'Veheragoda-(වෙහෙරගොඩ)',
                    'Orugodawatta-(ඔරුගොඩවත්ත)',
                    'Meethotamulla-(මිතොටමුල්ල)',
                    'Welewaththa-(වෙලේවත්ත)',
                    'Kiththampahuwa-(කිත්තම්පහුව)',
                    'Wennawatta-(වෙන්නවත්ත)',
                    'Maha Buthgamuwa B-(මහබුත්ගමුව B)',
                    'Kuda Buthgamuwa-(කුඩා බුත්ගමුව)',
                    'Kelanimulla-(කැලණිමුල්ල)',
                    'Ambathale-(අඔත‍ලේ)',
                    'Mulleriyawa North-(මුල්ලේරියාව උතුර)',
                    'Belagama-(බැලගම)',
                    'Kotikawatta East-(කොටිකාවත්ත නැගෙනහිර)',
                    'Maha Buthgamuwa A-(මහ බුත්ගමුව A)',
                    'Maha Buthgamuwa C-(මහ බුත්ගමුව C)',
                    'Wellampitiya-(වැල්ලමිපිටිය)',
                    'Kuriniyawatta-(කුරුණියාවත්ත)',
                    'Kolonnawa-(කොළොන්නාව)',
                    'Dahampura-(දහම්පුර)',
                    'Singhapura-(සිංහපුර)',
                    'Megoda Kolonnawa-(මෙගොඩ කොලොන්නාව)',
                    'Bopeththa-(බෝපැත්ත)',
                    'Batalandahena-(බටලන්ද‍හේන)',
                    'Kotikawatta West-(කොටිකාවත්ත බටහිර	)',
                    'Mulleriyawa South-(මුල්ලේරියාව දකුණ)',
                    'Malgama-(මල්ගම)',
                    'Udumulla North-(උඩුමුල්ල උතුර)',
                    'Maligagodella-(මාළිගාගොඩැල්ල)',
                    'Rajasinghagama-(රාජසිංහගම)',
                    'Udumulla South-(උඩුමුල්ල දකුණ)',
                    'Himbutana East-(හිඹුටාන නැගෙනහිර)',
                    'Himbutana West-(හිඹුටාන බටහිර)',
                    'Malpura-(මල්පුර)',
                    'Gothatuwa New Town-(ගොතටුව නව නගරය)',
                    'Kajugahawatta-(කජුගහවත්ත)',
                    'Gothatuwa-(ගොතටුව)',
                    'Salamulla-(සාලමුල්ල)',
                    'Wijayapura-(විජයපුර)',
                    'Gajabapura-(ගජබාපුර)',
                    'Madinnagoda-(මාදින්නාගොඩ)',
                    'Elhena-(ඇල්හේන)',
                    'Dodamgahahena-(දොඩමිගහහේන)',
                    'Welivita-(වැලිවිට)',
                    'Raggahawatta-(රග්ගහවත්ත)',
                    'Hewagama-(හේවාගම)',
                    'Kaduwela-(කඩුවෙල)',
                    'Pahala Bomiriya-(පහළ බෝමිරිය)',
                    'Ihala Bomiriya-(ඉහළ බෝමිරිය)',
                    'Wekewatta-(වැකේවත්ත)',
                    'Nawagamuwa-(නවගමුව)',
                    'Pahala Bomiriya B-(පහළ බෝමිරිය බි)',
                    'Welihinda-(වැලිහිඳ)',
                    'Kothalawala-(කොතලාවල)',
                    'Mahadeniya-(මහදෙනිය)',
                    'Thalahena North-(තලාහේන උතුර)',
                    'Malabe North-(මාළ‍‍ෙඔ උතුර)',
                    'Thunadahena-(තුන්අදහේන)',
                    'Korathota-(කොරතොට)',
                    'Nawagamuwa South-(නවගමුව දකුණ)',
                    'Batewela-(බටේ‍වෙල)',
                    'Ranala-(රණාල)',
                    'Dedigamuwa-(දැඩිගමුව)',
                    'Embilladeniya-(ඇඔල්ලදෙණිය)',
                    'Welipillewa-(වැළිපිල්ලැව)',
                    'Shanthalokagama-(ශාන්තාලෝකගම)',
                    'Pore-(පෝරේ)',
                    'Malabe East-(මාළ‍බේ නැගනහිර)',
                    'Malabe West-(මාල‍බේ බටහිර)',
                    'Thalangama North B-(තලංගම උතුර B)',
                    'Thalahena South-(තලාහේන දකුණ)',
                    'Muttettugoda-(මුත්තෙට්ටුගොඩ)',
                    'Thalangama North A-(තලංගම උතුර ඒ)',
                    'Walpola-(වල්පොල)',
                    'Kalapaluwawa-(කළපලුවාව)',
                    'Kotuwegoda-(කොටුවේගොඩ)',
                    'Subhoothipura-(සුභූතිපුර)',
                    'Udumulla-(උඩුමුල්ල)',
                    'Battaramulla North-(බත්තරමුල්ල උතුර)',
                    'Batapotha-(බටපොත)',
                    'Pothuarawa-(පොතුඅරාව)',
                    'Hokandara North-(හෝකන්දර උතුර)',
                    'Oruwala-(ඔරුවල)',
                    'Athurugiriya-(අතුරුගිරිය)',
                    'Thaldiyawala-(තල්දියවල)',
                    'Boralugoda-(බොරලුගොඩ)',
                    'Hokandara East-(හෝකන්දර නැගෙනහිර)',
                    'Arangala-(අරංගල)',
                    'Evarihena-(ඇවරිහේන)',
                    'Kumaragewatta-(කුමාරගේ වත්ත)',
                    'Jayawadanagama-(ජයවඩනගම)',
                    'Aruppitiya-(අරුප්පිටිය)',
                    'Asiri Uyana-(ආසිරි උයන)',
                    'Battaramulla South-(බත්තරමුල්ල ‍ දකුණ)',
                    'Rajamalwatta-(රජමල්වත්ත)',
                    'Pahalawela-(පහළවෙළ)',
                    'Wickramasinghapura-(වික්‍රමසිංහපුර)',
                    'Wellangiriya-(වැල්ලන්ගිරිය)',
                    'Hokandara South-(හෝකන්දර දකුණ)',
                    'Athurugiriya South-(අතුරුගිරිය දකුණ)',
                    'Jalthara-(ජල්තර)',
                    'Henpita-(හේන්පිට)',
                    'Atigala West-(ආටිගල බස්නාහිර)',
                    'Atigala East-(අටිගල නැගෙනහිර)',
                    'Batawala-(බටවල)',
                    'Walpita-(වල්පිට)',
                    'Nawalamulla-(නාවලමුල්ල)',
                    'Meegasmulla-(මිගස්මුල්ල)',
                    'Habarakada North-(හබරකඩ උතුර)',
                    'Mullegama North-(මුල්ලේගම උතුර)',
                    'Mullegama South-(මුල්ලේගම දකුණ)',
                    'Habarakada South-(හබරකඩ දකුණ)',
                    'Panagoda Town-(පනාගොඩ නගරය)',
                    'Henawatta-(හේනවත්ත)',
                    'Meegoda North-(මිගොඩ උතුර)',
                    'Panaluwa-(පානලුව)',
                    'Watareka North-(වටරැක උතුර)',
                    'Meegoda South-(මීගොඩ දකුණ)',
                    'Godagama North-(ගොඩගම උතුර)',
                    'Panagoda West-(පනාගොඩ බස්නාහිර)',
                    'Panagoda East-(පනාගොඩ නැගනහිර)',
                    'Habarakada Watta-(හබරකඩ වත්ත)',
                    'Homagama North-(හෝමාගම උතුර)',
                    'Homagama West-(හෝමාගම බස්නාහිර)',
                    'Homagama South-(හෝමාගම දකුණ)',
                    'Galavilawatta North-(ගලවිලවත්ත උතුර)',
                    'Homagama Town-(හෝමාගම නගරය)',
                    'Homagama East-(හෝමාගම නැගනහිර)',
                    'Pitipana Town-(පිටිපන නගරය)',
                    'Godagama South-(ගොඩගම දකුණ)',
                    'Kurunduwatta-(කුරුදුවත්ත)',
                    'Gehenuwala-(ගැහැනුවල)',
                    'Watareka South-(වටරැක දකුණ)',
                    'Ovitigama-(ඕවිටිගම)',
                    'Kandhanawatta-(කඳනවත්ත)',
                    'Kiriberiyakele-(කිරිබෙරියකැළේ)',
                    'Mawathagama-(මාවතගම)',
                    'Katuwana-(කටුවාන)',
                    'Galavilawatta South-(ගලවිලවත්ත දකුණ)',
                    'Niyadagala-(නියඳගල)',
                    'Hiripitiya-(හිරිපිටිය)',
                    'Mambulgoda-(මාම්බුල්ගොඩ)',
                    'Kithulhena-(කිතලුහේන)',
                    'Siddamulla North-(සිද්ධමුල්ල උතුර)',
                    'Siddamulla South-(සිද්ධමුල්ල දකුණ)',
                    'Mattegoda West-(මත්තේගොඩ බටහිර)',
                    'Mattegoda Central A-(මත්තේගොඩ මධ්‍යම / ඒ)',
                    'Mattegoda East-(මත්තේගොඩ නැගෙනහිර)',
                    'Brahmanagama-(බ්‍රහ්මණගම)',
                    'Deepangoda-(ධිපාන්ගොඩ)',
                    'Magammana West-(මාගම්මන බස්නාහිර)',
                    'Magammana East-(මාගම්මන නැගනහිර)',
                    'Uduwana-(උධුවන)',
                    'Prasannapura-(ප්‍රසන්නපුර)',
                    'Pitipana North-(පිටිපන උතුර)',
                    'Suwapubudugama-(සුවපුබුදුගම)',
                    'Pitipana South-(පිටිපන දකුණ)',
                    'Dolahena-(දොළහේන)',
                    'Diyagama East-(දියගම නැගනහිර)',
                    'Diyagama West-(දියගම බස්නාහිර)',
                    'Kirigampamunuwa-(කිරිගම්පමුනුව)',
                    'Mattegoda Central B-(මත්තේගොඩ මධ්‍යම / බී)',
                    'Siyambalagoda North-(සියබලාගොඩ උතුර)',
                    'Kudamaduwa-(කුඩමාදුව)',
                    'Sangarama-(සංඝාරාම)',
                    'Siyambalagoda South-(සියඔලාගොඩ දකුණ)',
                    'Rilawala-(රිලාවල)',
                    'Kahathuduwa West-(කහතුඩුව බස්නාහිර)',
                    'Kiriwattuduwa South-(කිරිවත්තුඩුව දකුණ)',
                    'Kiriwattuduwa North-(කිරිවත්තුඩුව උතුර)',
                    'Moonamale-Yakahaluwa-(මුණමලේ- යකහලුව)',
                    'Undurugoda-(උන්දුරුගොඩ)',
                    'Wethara-(වැතර)',
                    'Ambalangoda-(අම්බලන්ගොඩ)',
                    'Heraliyawala-(හෙරලියාවල)',
                    'Palagama-(පාලගම)',
                    'Weniwelkola-(වෙනිවැල්කොල)',
                    'Bollathawa-(බොල්ලතාව)',
                    'Kanampella West-(කනම්පැල්ල බස්නාහිර)',
                    'Kanampella East-(කනම්පැල්ල නැගෙනහිර)',
                    'Manakada-(මානකඩ)',
                    'Eswatta North-(ඇස්වත්ත උතුර)',
                    'Kiriwandala North-(කිරිවන්දල උතුර)',
                    'Kudagama-(කුඩගම)',
                    'Weralupitiya-(වෙරළුපිටිය)',
                    'Seethagama-(සීතාගම)',
                    'Avissawella-(අවිස්සාවේල්ල)',
                    'Ukwatta-(උක්වත්ත)',
                    'Agra place-(අග්‍රාපෙදෙස)',
                    'Eswatta South-(ඇස්වත්ත දකුණ)',
                    'Ihala Kosgama North-(ඉහළ කොස්ගම උතුර)',
                    'Thawalgoda-(තාවල්ගොඩ)',
                    'Muruthagama-(මුරුතගම)',
                    'Akaravita-(අකරවිට)',
                    'Kahatapitiya-(කහටපිටිය)',
                    'Kalu Aggala-(කළුඅග්ගල)',
                    'Salawa-(සාලාව)',
                    'Pahala Kosagama West-(පහළ කොස්ගම බස්නාහිර)',
                    'Pahal Kosgama East-(පහළ කොස්ගම නැගෙනහිර)',
                    'Ihala Kosgama South-(ඉහළ කොස්ගම දකුණ)',
                    'Miriswatta-(මිරිස්වත්ත)',
                    'Aluth Ambalama-(අලුත් අම්බලම)',
                    'Kiriwandala South-(කිරිවන්දල දකුණ)',
                    'Kotahera-(කොටහැර)',
                    'Seethawaka-(සිතාවක)',
                    'Aradhana Kanda-(ආරාධනාකන්ද)',
                    'Puwakpitiya South-(පුවක්පිටිය දකුණ)',
                    'Puwakpitiya-(පුවක්පිටිය)',
                    'Egodagama-(එගොඩගම)',
                    'Weragolla North-(වේරගොල්ල උතුර)',
                    'Hingurala-(හිගුරල)',
                    'Kadugoada North-(කඩුගොඩෙ උතුර)',
                    'Mawalgama-(මාවල්ගම)',
                    'Suduwella-(සුදුවැල්ල)',
                    'Gira Imbula-(ගිරා ඉඹුළ)',
                    'Walauwathta-(වලවීවත්ත)',
                    'Pahala Hanwella-(පහළ හංවැල්ල)',
                    'Hanwella Town-(හංවැල්ල නගරය)',
                    'Ihala Hanwella North-(ඉහළ හංවැල්ල උතුර)',
                    'Niripola-(නිරිපොළ)',
                    'Brandigampala-(බ්‍රැන්ඩිගම්පළ)',
                    'Kadugoda South-(කඩුගොඩ දකුණ)',
                    'Weragolla South-(වේරගොල්ල දකුණ)',
                    'Digana-(දිගන)',
                    'Lahirugama-(ලහිරුගම)',
                    'Mabula-(මාඹුල)',
                    'Welikanna-(වැලිකත්න)',
                    'Kahahena-(කහහේන)',
                    'Neluwattuduwa-(නෙලුවත්තුඩුව)',
                    'Diddeniya North-(දිද්දෙණිය උතුර)',
                    'Ihala Hanwella South-(ඉහළ හංවැල්ල දකුණ)',
                    'Pahathgama-(පහත්ගම)',
                    'Jayaweeragoda-(ජයවීරගොඩ)',
                    'Koodaluvila-(කුඩළුවිල)',
                    'Thunnana East-(තුන්නාන නැගෙනහිර)',
                    'Diddeniya South-(දිද්දෙනිය දකුණ)',
                    'Elamalawala-(එළමලවල)',
                    'Ilukovita-(ඉලුක්ඕවිට)',
                    'Koswatta-(කොස්වත්ත)',
                    'Pagnagula-(පඤ්ඤාගුල)',
                    'Pelpola-(පැල්පොල)',
                    'Kudakanda-(කුඩාකන්ද)',
                    'Thunnana West-(තුන්නාන බටහිර)',
                    'Mawathagama West-(මාවතගම බටහිර)',
                    'Mawathagama East-(මාවතගම නැගනහිර)',
                    'Pinnawala North-(පින්නවල උතුර)',
                    'Pinnawala South-(පින්නවල දකුණ)',
                    'Waga North-(වග උතුර)',
                    'Waga East-(වග නැගෙනහිර)',
                    'Thummodara-(තුම්මෝදර)',
                    'Waga South-(වග දකුණ)',
                    'Siyambalawa-(සියඔලාව)',
                    'Pahala Bope-(පහළ බෝපේ)',
                    'Halpe-(හල්පේ)',
                    'Waga West-(වග බටහිර)',
                    'Uggalla-(උග්ගල්ල)',
                    'Wewelpanawa-(වේවැල්පනාව)',
                    'Pitumpe North-(පිටුමිපේ උතුර)',
                    'Pitumpe South-(පිටුමිපේ දකුණ)',
                    'Galagedara East-(ගළගෙදර නැගෙනහිර)',
                    'Galagedara North-(ගළගෙදර උතුර)',
                    'Galagedara South-(ගළගෙදර දකුණ)',
                    'Padukka-(පාදුක්ක)',
                    'Arukwatta North-(අරුක්වත්ත උතුර)',
                    'Arukwatta South-(අරුක්වත්ත දකුණ)',
                    'Ganegoda-(ගනේගොඩ)',
                    'Angampitiya-(අංගම්පිටිය)',
                    'Weragala-(වේරගල)',
                    'Angamuwa-(අංගමුව)',
                    'Udumulla-(උඩුමුල්ල)',
                    'Poregedara-(පෝරෙගෙදර)',
                    'Pahala Padukka-(පහළ පාදුක්ක)',
                    'Liyanwala-(ලියත්වල)',
                    'Kurugala-(කුරුගල)',
                    'Madulawa South-(මාදුලාව දකුණ)',
                    'Madulawa North-(මාදුලාව උතුර)',
                    'Horakandawala-(හොරකඳවල)',
                    'Dampe-(දම්පේ)',
                    'Beruketiya-(බෙරුකැටිය)',
                    'Horagala West-(හොරගල බටහිර)',
                    'හොරගල නැගනහිර-(Horagala East)',
                    'Beliattavila-(බෙලිඅත්තවිල)',
                    'Miriyagalla-(මිරියගල්ල)',
                    'Malagala-(මලගල)',
                    'Kahawala-(කහවල)',
                    'Yatawathura-(යටවතුර)',
                    'Mahingala-(මාහිංගල)',
                    'Ihala Bope-(ඉහළ බෝපේ)',
                    'Gurulana-(ගුරුලාන)',
                    'Udagama-(උඩගම)',
                    'Dabora-(දඹෝර)'
                ),
        )
    );
}