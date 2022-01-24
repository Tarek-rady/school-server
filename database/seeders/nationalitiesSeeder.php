<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\nationalite;


class nationalitiesSeeder extends Seeder
{

    public function run()
    {
        DB::table('nationalites')->delete();

        $nationalites = [

            [
                'en'=> 'Afghan',
                'ar'=> 'أفغانستاني'
            ],
            [

                'en'=> 'Albanian',
                'ar'=> 'ألباني'
            ],
            [

                'en'=> 'Aland Islander',
                'ar'=> 'آلاندي'
            ],
            [

                'en'=> 'Algerian',
                'ar'=> 'جزائري'
            ],
            [

                'en'=> 'American Samoan',
                'ar'=> 'أمريكي سامواني'
            ],
            [

                'en'=> 'Andorran',
                'ar'=> 'أندوري'
            ],
            [

                'en'=> 'Angolan',
                'ar'=> 'أنقولي'
            ],
            [

                'en'=> 'Anguillan',
                'ar'=> 'أنغويلي'
            ],
            [

                'en'=> 'Antarctican',
                'ar'=> 'أنتاركتيكي'
            ],
            [

                'en'=> 'Antiguan',
                'ar'=> 'بربودي'
            ],
            [

                'en'=> 'Argentinian',
                'ar'=> 'أرجنتيني'
            ],
            [

                'en'=> 'Armenian',
                'ar'=> 'أرميني'
            ],
            [

                'en'=> 'Aruban',
                'ar'=> 'أوروبهيني'
            ],
            [

                'en'=> 'Australian',
                'ar'=> 'أسترالي'
            ],
            [

                'en'=> 'Austrian',
                'ar'=> 'نمساوي'
            ],
            [

                'en'=> 'Azerbaijani',
                'ar'=> 'أذربيجاني'
            ],
            [

                'en'=> 'Bahamian',
                'ar'=> 'باهاميسي'
            ],
            [

                'en'=> 'Bahraini',
                'ar'=> 'بحريني'
            ],
            [

                'en'=> 'Bangladeshi',
                'ar'=> 'بنغلاديشي'
            ],
            [

                'en'=> 'Barbadian',
                'ar'=> 'بربادوسي'
            ],
            [

                'en'=> 'Belarusian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'Belgian',
                'ar'=> 'بلجيكي'
            ],
            [

                'en'=> 'Belizean',
                'ar'=> 'بيليزي'
            ],
            [

                'en'=> 'Beninese',
                'ar'=> 'بنيني'
            ],
            [

                'en'=> 'Saint Barthelmian',
                'ar'=> 'سان بارتيلمي'
            ],
            [

                'en'=> 'Bermudan',
                'ar'=> 'برمودي'
            ],
            [

                'en'=> 'Bhutanese',
                'ar'=> 'بوتاني'
            ],
            [

                'en'=> 'Bolivian',
                'ar'=> 'بوليفي'
            ],
            [

                'en'=> 'Bosnian / Herzegovinian',
                'ar'=> 'بوسني/هرسكي'
            ],
            [

                'en'=> 'Botswanan',
                'ar'=> 'بوتسواني'
            ],
            [

                'en'=> 'Bouvetian',
                'ar'=> 'بوفيهي'
            ],
            [

                'en'=> 'Brazilian',
                'ar'=> 'برازيلي'
            ],
            [

                'en'=> 'British Indian Ocean Territory',
                'ar'=> 'إقليم المحيط الهندي البريطاني'
            ],
            [

                'en'=> 'Bruneian',
                'ar'=> 'بروني'
            ],
            [

                'en'=> 'Bulgarian',
                'ar'=> 'بلغاري'
            ],
            [

                'en'=> 'Burkinabe',
                'ar'=> 'بوركيني'
            ],
            [

                'en'=> 'Burundian',
                'ar'=> 'بورونيدي'
            ],
            [

                'en'=> 'Cambodian',
                'ar'=> 'كمبودي'
            ],
            [

                'en'=> 'Cameroonian',
                'ar'=> 'كاميروني'
            ],
            [

                'en'=> 'Canadian',
                'ar'=> 'كندي'
            ],
            [

                'en'=> 'Cape Verdean',
                'ar'=> 'الرأس الأخضر'
            ],
            [

                'en'=> 'Caymanian',
                'ar'=> 'كايماني'
            ],
            [

                'en'=> 'Central African',
                'ar'=> 'أفريقي'
            ],
            [

                'en'=> 'Chadian',
                'ar'=> 'تشادي'
            ],
            [

                'en'=> 'Chilean',
                'ar'=> 'شيلي'
            ],
            [

                'en'=> 'Chinese',
                'ar'=> 'صيني'
            ],
            [

                'en'=> 'Christmas Islander',
                'ar'=> 'جزيرة عيد الميلاد'
            ],
            [

                'en'=> 'Cocos Islander',
                'ar'=> 'جزر كوكوس'
            ],
            [

                'en'=> 'Colombian',
                'ar'=> 'كولومبي'
            ],
            [

                'en'=> 'Comorian',
                'ar'=> 'جزر القمر'
            ],
            [

                'en'=> 'Congolese',
                'ar'=> 'كونغي'
            ],
            [

                'en'=> 'Cook Islander',
                'ar'=> 'جزر كوك'
            ],
            [

                'en'=> 'Costa Rican',
                'ar'=> 'كوستاريكي'
            ],
            [

                'en'=> 'Croatian',
                'ar'=> 'كوراتي'
            ],
            [

                'en'=> 'Cuban',
                'ar'=> 'كوبي'
            ],
            [

                'en'=> 'Cypriot',
                'ar'=> 'قبرصي'
            ],
            [

                'en'=> 'Curacian',
                'ar'=> 'كوراساوي'
            ],
            [

                'en'=> 'Czech',
                'ar'=> 'تشيكي'
            ],
            [

                'en'=> 'Danish',
                'ar'=> 'دنماركي'
            ],
            [

                'en'=> 'Djiboutian',
                'ar'=> 'جيبوتي'
            ],
            [

                'en'=> 'Dominican',
                'ar'=> 'دومينيكي'
            ],
            [

                'en'=> 'Dominican',
                'ar'=> 'دومينيكي'
            ],
            [

                'en'=> 'Ecuadorian',
                'ar'=> 'إكوادوري'
            ],
            [

                'en'=> 'Egyptian',
                'ar'=> 'مصري'
            ],
            [

                'en'=> 'Salvadoran',
                'ar'=> 'سلفادوري'
            ],
            [

                'en'=> 'Equatorial Guinean',
                'ar'=> 'غيني'
            ],
            [

                'en'=> 'Eritrean',
                'ar'=> 'إريتيري'
            ],
            [

                'en'=> 'Estonian',
                'ar'=> 'استوني'
            ],
            [

                'en'=> 'Ethiopian',
                'ar'=> 'أثيوبي'
            ],
            [

                'en'=> 'Falkland Islander',
                'ar'=> 'فوكلاندي'
            ],
            [

                'en'=> 'Faroese',
                'ar'=> 'جزر فارو'
            ],
            [

                'en'=> 'Fijian',
                'ar'=> 'فيجي'
            ],
            [

                'en'=> 'Finnish',
                'ar'=> 'فنلندي'
            ],
            [

                'en'=> 'French',
                'ar'=> 'فرنسي'
            ],
            [

                'en'=> 'French Guianese',
                'ar'=> 'غويانا الفرنسية'
            ],
            [

                'en'=> 'French Polynesian',
                'ar'=> 'بولينيزيي'
            ],
            [

                'en'=> 'French',
                'ar'=> 'أراض فرنسية جنوبية وأنتارتيكية'
            ],
            [

                'en'=> 'Gabonese',
                'ar'=> 'غابوني'
            ],
            [

                'en'=> 'Gambian',
                'ar'=> 'غامبي'
            ],
            [

                'en'=> 'Georgian',
                'ar'=> 'جيورجي'
            ],
            [

                'en'=> 'German',
                'ar'=> 'ألماني'
            ],
            [

                'en'=> 'Ghanaian',
                'ar'=> 'غاني'
            ],
            [

                'en'=> 'Gibraltar',
                'ar'=> 'جبل طارق'
            ],
            [

                'en'=> 'Guernsian',
                'ar'=> 'غيرنزي'
            ],
            [

                'en'=> 'Greek',
                'ar'=> 'يوناني'
            ],
            [

                'en'=> 'Greenlandic',
                'ar'=> 'جرينلاندي'
            ],
            [

                'en'=> 'Grenadian',
                'ar'=> 'غرينادي'
            ],
            [

                'en'=> 'Guadeloupe',
                'ar'=> 'جزر جوادلوب'
            ],
            [

                'en'=> 'Guamanian',
                'ar'=> 'جوامي'
            ],
            [

                'en'=> 'Guatemalan',
                'ar'=> 'غواتيمالي'
            ],
            [

                'en'=> 'Guinean',
                'ar'=> 'غيني'
            ],
            [

                'en'=> 'Guinea-Bissauan',
                'ar'=> 'غيني'
            ],
            [

                'en'=> 'Guyanese',
                'ar'=> 'غياني'
            ],
            [

                'en'=> 'Haitian',
                'ar'=> 'هايتي'
            ],
            [

                'en'=> 'Heard and Mc Donald Islanders',
                'ar'=> 'جزيرة هيرد وجزر ماكدونالد'
            ],
            [

                'en'=> 'Honduran',
                'ar'=> 'هندوراسي'
            ],
            [

                'en'=> 'Hongkongese',
                'ar'=> 'هونغ كونغي'
            ],
            [

                'en'=> 'Hungarian',
                'ar'=> 'مجري'
            ],
            [

                'en'=> 'Icelandic',
                'ar'=> 'آيسلندي'
            ],
            [

                'en'=> 'Indian',
                'ar'=> 'هندي'
            ],
            [

                'en'=> 'Manx',
                'ar'=> 'ماني'
            ],
            [

                'en'=> 'Indonesian',
                'ar'=> 'أندونيسيي'
            ],
            [

                'en'=> 'Iranian',
                'ar'=> 'إيراني'
            ],
            [

                'en'=> 'Iraqi',
                'ar'=> 'عراقي'
            ],
            [

                'en'=> 'Irish',
                'ar'=> 'إيرلندي'
            ],
            [

                'en'=> 'Italian',
                'ar'=> 'إيطالي'
            ],
            [

                'en'=> 'Ivory Coastian',
                'ar'=> 'ساحل العاج'
            ],
            [

                'en'=> 'Jersian',
                'ar'=> 'جيرزي'
            ],
            [

                'en'=> 'Jamaican',
                'ar'=> 'جمايكي'
            ],
            [

                'en'=> 'Japanese',
                'ar'=> 'ياباني'
            ],
            [

                'en'=> 'Jordanian',
                'ar'=> 'أردني'
            ],
            [

                'en'=> 'Kazakh',
                'ar'=> 'كازاخستاني'
            ],
            [

                'en'=> 'Kenyan',
                'ar'=> 'كيني'
            ],
            [

                'en'=> 'I-Kiribati',
                'ar'=> 'كيريباتي'
            ],
            [

                'en'=> 'North Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'South Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'Kosovar',
                'ar'=> 'كوسيفي'
            ],
            [

                'en'=> 'Kuwaiti',
                'ar'=> 'كويتي'
            ],
            [

                'en'=> 'Kyrgyzstani',
                'ar'=> 'قيرغيزستاني'
            ],
            [

                'en'=> 'Laotian',
                'ar'=> 'لاوسي'
            ],
            [

                'en'=> 'Latvian',
                'ar'=> 'لاتيفي'
            ],
            [

                'en'=> 'Lebanese',
                'ar'=> 'لبناني'
            ],
            [

                'en'=> 'Basotho',
                'ar'=> 'ليوسيتي'
            ],
            [

                'en'=> 'Liberian',
                'ar'=> 'ليبيري'
            ],
            [

                'en'=> 'Libyan',
                'ar'=> 'ليبي'
            ],






        ] ;

        foreach ($nationalites as $nationalite) {

            nationalite::create(['name'=>$nationalite]);
        }

    }
}
