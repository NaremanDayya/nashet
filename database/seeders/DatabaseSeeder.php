<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Service;
use App\Models\ServiceFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@nashet.com',
            'password' => Hash::make('password'),
        ]);

        Setting::create(['key' => 'company_name_ar', 'value' => 'ناشط', 'type' => 'text', 'group' => 'company']);
        Setting::create(['key' => 'company_name_en', 'value' => 'NASHET', 'type' => 'text', 'group' => 'company']);
        Setting::create(['key' => 'company_tagline_ar', 'value' => 'صناعة وتنفيذ جميع الطلبات', 'type' => 'text', 'group' => 'company']);
        Setting::create(['key' => 'company_tagline_en', 'value' => 'We Drive Your Strong Sales', 'type' => 'text', 'group' => 'company']);
        Setting::create(['key' => 'company_description_ar', 'value' => 'شراكة رائدة في تطوير الأعمال بالمملكة العربية السعودية والشرق الأوسط', 'type' => 'text', 'group' => 'company']);
        Setting::create(['key' => 'company_founded_year', 'value' => '1990', 'type' => 'number', 'group' => 'company']);
        Setting::create(['key' => 'company_phone', 'value' => '0500928686', 'type' => 'text', 'group' => 'contact']);
        
        Setting::create(['key' => 'hero_title_ar', 'value' => 'المواد الإعلانية والدعائية', 'type' => 'text', 'group' => 'hero']);
        Setting::create(['key' => 'hero_subtitle_ar', 'value' => 'صناعة وتنفيذ جميع الطلبات', 'type' => 'text', 'group' => 'hero']);
        
        Setting::create(['key' => 'why_choose_title_ar', 'value' => 'لماذا نحن؟', 'type' => 'text', 'group' => 'why_choose']);
        Setting::create(['key' => 'why_choose_subtitle_ar', 'value' => 'لأننا نصنع الفرق', 'type' => 'text', 'group' => 'why_choose']);
        Setting::create(['key' => 'why_choose_description_ar', 'value' => 'نحن في ناشط نقدم حلولاً متكاملة واحترافية في مجال توريد المرشدين، المركبات، السائقين، مندوبي المبيعات، الحملة العامة، وخدمات الاحتضان القانوني، مندوبي المبيعات', 'type' => 'text', 'group' => 'why_choose']);

        $auditingService = Service::create([
            'title_ar' => 'خدمة التدقيق',
            'title_en' => 'Auditing Service',
            'description_ar' => 'نرى ما لا يُرى... للتحقق في صدارة السوق',
            'order' => 1,
            'is_active' => true
        ]);

        ServiceFeature::create(['service_id' => $auditingService->id, 'feature_ar' => 'تدقيق توافر المنتجات', 'order' => 1]);
        ServiceFeature::create(['service_id' => $auditingService->id, 'feature_ar' => 'مراجعة الأسعار والعروض الترويجية', 'order' => 2]);
        ServiceFeature::create(['service_id' => $auditingService->id, 'feature_ar' => 'تحليل حركة المنافسين', 'order' => 3]);
        ServiceFeature::create(['service_id' => $auditingService->id, 'feature_ar' => 'رصد حالة الرفات والمتاجر المغلقة - النشطة - الجديدة', 'order' => 4]);
        ServiceFeature::create(['service_id' => $auditingService->id, 'feature_ar' => 'لتعميق قراءاتك أدق', 'order' => 5]);
        ServiceFeature::create(['service_id' => $auditingService->id, 'feature_ar' => 'تتبعك القوي', 'order' => 6]);
        ServiceFeature::create(['service_id' => $auditingService->id, 'feature_ar' => 'وجهات نتائج', 'order' => 7]);
        ServiceFeature::create(['service_id' => $auditingService->id, 'feature_ar' => 'تقديم تقارير تحليلية مصورة', 'order' => 8]);

        $merchandiserService = Service::create([
            'title_ar' => 'مصف أرفف',
            'title_en' => 'Merchandiser',
            'description_ar' => 'خدمة الإدارة التشغيلية المتكاملة لتطبيق ناشط الرقمي متاحة عند الطلب',
            'order' => 2,
            'is_active' => true
        ]);

        ServiceFeature::create(['service_id' => $merchandiserService->id, 'feature_ar' => '8 ساعات عمل', 'order' => 1]);
        ServiceFeature::create(['service_id' => $merchandiserService->id, 'feature_ar' => 'مركبة نقل حديثة', 'order' => 2]);
        ServiceFeature::create(['service_id' => $merchandiserService->id, 'feature_ar' => 'هاتف ذكي', 'order' => 3]);
        ServiceFeature::create(['service_id' => $merchandiserService->id, 'feature_ar' => 'شهادة تدريب', 'order' => 4]);

        $brandAmbassadorService = Service::create([
            'title_ar' => 'سفير العلامة التجارية',
            'title_en' => 'Brand Ambassador',
            'description_ar' => 'شاملة جميع القطاعات التجارية',
            'order' => 3,
            'is_active' => true
        ]);

        ServiceFeature::create(['service_id' => $brandAmbassadorService->id, 'feature_ar' => '8 ساعات عمل', 'order' => 1]);
        ServiceFeature::create(['service_id' => $brandAmbassadorService->id, 'feature_ar' => 'لباس موحد', 'order' => 2]);
        ServiceFeature::create(['service_id' => $brandAmbassadorService->id, 'feature_ar' => 'شهادة صحية', 'order' => 3]);
        ServiceFeature::create(['service_id' => $brandAmbassadorService->id, 'feature_ar' => 'تأمين النقل', 'order' => 4]);
        ServiceFeature::create(['service_id' => $brandAmbassadorService->id, 'feature_ar' => 'هاتف ذكي', 'order' => 5]);
        ServiceFeature::create(['service_id' => $brandAmbassadorService->id, 'feature_ar' => 'تغطية شاملة', 'order' => 6]);
        ServiceFeature::create(['service_id' => $brandAmbassadorService->id, 'feature_ar' => 'جميع الجنسيات', 'order' => 7]);

        $fleetRentalService = Service::create([
            'title_ar' => 'تأجير مركبات نقل',
            'title_en' => 'Fleet Rental',
            'description_ar' => 'لجميع أحجام المركبات و جميع أنواع الرخص',
            'order' => 4,
            'is_active' => true
        ]);

        ServiceFeature::create(['service_id' => $fleetRentalService->id, 'feature_ar' => '10 ساعات عمل', 'order' => 1]);
        ServiceFeature::create(['service_id' => $fleetRentalService->id, 'feature_ar' => 'هاتف ذكي', 'order' => 2]);
        ServiceFeature::create(['service_id' => $fleetRentalService->id, 'feature_ar' => 'مهارة تتبع', 'order' => 3]);
        ServiceFeature::create(['service_id' => $fleetRentalService->id, 'feature_ar' => 'صيانة شاملة', 'order' => 4]);
        ServiceFeature::create(['service_id' => $fleetRentalService->id, 'feature_ar' => 'عدد مفتوح', 'order' => 5]);

        $workerRentalService = Service::create([
            'title_ar' => 'تأجير عمالة',
            'title_en' => 'Worker Rental',
            'description_ar' => 'شاملة جميع القطاعات الصناعية والتجارية',
            'order' => 5,
            'is_active' => true
        ]);

        ServiceFeature::create(['service_id' => $workerRentalService->id, 'feature_ar' => '10 ساعات عمل', 'order' => 1]);
        ServiceFeature::create(['service_id' => $workerRentalService->id, 'feature_ar' => 'نطاق معفي', 'order' => 2]);
        ServiceFeature::create(['service_id' => $workerRentalService->id, 'feature_ar' => 'هاتف ذكي', 'order' => 3]);
        ServiceFeature::create(['service_id' => $workerRentalService->id, 'feature_ar' => 'تأمين طبي', 'order' => 4]);
        ServiceFeature::create(['service_id' => $workerRentalService->id, 'feature_ar' => 'ملابس موحدة', 'order' => 5]);

        $salesRepService = Service::create([
            'title_ar' => 'تأجير مندوب مبيعات',
            'title_en' => 'Sales Representative',
            'description_ar' => 'نطاق معفي',
            'order' => 6,
            'is_active' => true
        ]);

        ServiceFeature::create(['service_id' => $salesRepService->id, 'feature_ar' => '10 ساعات عمل', 'order' => 1]);
        ServiceFeature::create(['service_id' => $salesRepService->id, 'feature_ar' => 'هاتف ذكي', 'order' => 2]);
        ServiceFeature::create(['service_id' => $salesRepService->id, 'feature_ar' => 'ملابس موحدة', 'order' => 3]);
        ServiceFeature::create(['service_id' => $salesRepService->id, 'feature_ar' => 'نطاق معفي (Nitaqat)', 'order' => 4]);
        ServiceFeature::create(['service_id' => $salesRepService->id, 'feature_ar' => 'تأمين طبي', 'order' => 5]);
        ServiceFeature::create(['service_id' => $salesRepService->id, 'feature_ar' => 'أخصر أجير', 'order' => 6]);

        $vehicleRentalService = Service::create([
            'title_ar' => 'تأجير سائق مركبة نقل',
            'title_en' => 'Vehicle Driver Rental',
            'description_ar' => 'لجميع أحجام المركبات و جميع أنواع الرخص',
            'order' => 7,
            'is_active' => true
        ]);

        ServiceFeature::create(['service_id' => $vehicleRentalService->id, 'feature_ar' => '10 ساعات عمل', 'order' => 1]);
        ServiceFeature::create(['service_id' => $vehicleRentalService->id, 'feature_ar' => 'أخصر أجير', 'order' => 2]);
        ServiceFeature::create(['service_id' => $vehicleRentalService->id, 'feature_ar' => 'ملابس موحدة', 'order' => 3]);
        ServiceFeature::create(['service_id' => $vehicleRentalService->id, 'feature_ar' => 'نطاق معفي (Nitaqat)', 'order' => 4]);
        ServiceFeature::create(['service_id' => $vehicleRentalService->id, 'feature_ar' => 'هاتف ذكي', 'order' => 5]);
        ServiceFeature::create(['service_id' => $vehicleRentalService->id, 'feature_ar' => 'تأمين طبي', 'order' => 6]);

        $legalService = Service::create([
            'title_ar' => 'احتضان قانوني',
            'title_en' => 'Legal Services',
            'description_ar' => 'شامل جميع المهن والجنسيات',
            'order' => 8,
            'is_active' => true
        ]);

        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'رصد نقل مفتوح', 'order' => 1]);
        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'رصد مهن مفتوح', 'order' => 2]);
        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'رصد متابعات مفتوح', 'order' => 3]);
        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'إدارة الوثائق', 'order' => 4]);
        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'إدارة القانون الطبي', 'order' => 5]);
        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'خط ساخن', 'order' => 6]);
        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'إدارة العقود', 'order' => 7]);
        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'أخصر أجير', 'order' => 8]);
        ServiceFeature::create(['service_id' => $legalService->id, 'feature_ar' => 'إدارة طلبات الموظفين', 'order' => 9]);
    }
}
