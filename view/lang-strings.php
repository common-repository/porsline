<?php



function porslinePlugin_set_settings()
{

    global $wpdb, $table_prefix;

    $table_name = $table_prefix . "porsline_settings";

    $language = $wpdb->get_results("SELECT * FROM $table_name")[0]->lang;

    $strings = [];

    switch ($language) {

        case 1:

            $strings["menu_title"] = "پُرس‌لاین";

            $strings["survey_list_page_heading"] = "فرم‌های من";

            $strings["porsline-add-new-survey-popup-title"] = "یکی از فرم‌ها را انتخاب کنید";

            $strings["porsline-add-new-survey-in-panel"] = "ساخت فرم جدید";
            $strings["porsline-or"] = "یا";
            $strings["porsline-add-new-survey-from-list"] = "انتخاب از فرم‌های ساخته شده";

            $strings["folders-title"] = "پوشه‌ها";

            $strings["connection-error"] = "مشکلی در اتصال به پُرس‌لاین به وجود آمده است. (اتصال به اینترنت را بررسی کنید)";

            $strings["survey-status"] = "وضعیت";

            $strings["active"] = "فعال";

            $strings["inactive"] = "غیرفعال";

            $strings["views"] = "بازدید";

            $strings["responses"] = "پاسخ";

            $strings["delete-survey"] = "حذف";

            $strings["show-survey"] = "مشاهده";
            $strings["delete-modal-title"] = "حذف فرم";
            $strings["delete-modal-msg"] = "از حذف فرم اطمینان دارید؟";
            $strings["delete-modal-cancel"] = "خیر";
            $strings["delete-modal-accepte"] = "بله، حذف شود";

            $strings["survey-shortcode"] = "کد زیر را کپی کنید و در بخش دلخواه قرار دهید";

            $strings["survey-shortcode-msg"] = "کپی شد";

            $strings["survey-style-btn"] = "تنظیمات نمایش";

            $strings["design-sec-title"] = "تنظیمات نمایش";

            $strings["embed-simple"] = "نمایش آی‌فریم";

            $strings["embed-popup"] = "نمایش پاپ‌آپ";

            $strings["embed-popup-nav-title"] = "جهت ورود پاپ‌آپ";

            $strings["embed-popup-nav-btt"] = "پایین به بالا";

            $strings["embed-popup-nav-ttb"] = "بالا به پایین";

            $strings["embed-popup-nav-ltr"] = " چپ به راست";

            $strings["embed-popup-nav-rtl"] = "راست به چپ";

            $strings["embed-width"] = "عرض";

            $strings["embed-height"] = "ارتفاع";

            $strings["embed-border-type"] = "نوع حاشیه";

            $strings["embed-border-solid"] = "یکپارچه";

            $strings["embed-border-dotted"] = "نقطه‌چین";

            $strings["embed-border-dashed"] = "خط‌چین";

            $strings["embed-border-none"] = "بدون حاشیه";

            $strings["embed-border-color"] = "رنگ حاشیه";

            $strings["embed-border-weight"] = "ضخامت حاشیه";

            $strings["embed-border-radius"] = "انحنای حاشیه";

            $strings["embed-margin-top"] = "فاصله از بالا";

            $strings["embed-margin-bottom"] = "فاصله از پایین";

            $strings["embed-margin-right"] = "فاصله از راست";

            $strings["embed-margin-left"] = "فاصله از چپ";

            $strings["embed-pop-type-title"] = "نحوه نمایش";

            $strings["embed-pop-type1"] = "دکمه";

            $strings["embed-pop-type3"] = "لینک";

            $strings["embed-pop-type2"] = "خودکار";

            $strings["embed-pop-btn-txt"] = "متن دکمه";

            $strings["embed-pop-btn-color"] = "رنگ زمینه دکمه";

            $strings["embed-pop-btn-txt-color"] = "رنگ متن دکمه";

            $strings["embed-pop-link-txt"] = "متن لینک";

            $strings["embed-pop-show-time"] = "تاخیر در نمایش";

            $strings["embed-pop-show-time-sec"] = "ثانیه";

            $strings["embed-custom-css"] = "CSS اختصاصی";

            $strings["standard-embed-desctiotion"] = "فرم را در سایت خود نمایش دهید";

            $strings["popup-embed-desctiotion"] = "";



            $strings["design-update-btn"] = "ذخیره";



            $strings["settings-menu-title"] = "تنظیمات افزونه";

            $strings["settings-page-quide"] = "

            <ol style='font-family: Vazir; list-style: persian;'>

                <li>وارد <a target='_blank' style='text-decoration: none;' href='https://survey.porsline.ir/'>حساب کاربری</a> خود در پُرس‌لاین شوید.</li>

                <li>از قسمت پروفایل کاربری، وارد گزینه «ویرایش حساب کاربری» شوید.</li>

                <li>روی گزینه «کلید API و نشست‌های فعال» کلیک کنید.</li>

                <li>در قسمت «کلید دسترسی API» گزینه «تولید کلید دسترسی API» را انتخاب کنید.</li>

                <li>کلید API را کپی و این‌‌جا وارد کنید.</li>

            </ol>

            ";

            $strings["welcome-menu-title"] = "راهنمای افزونه ";

            $strings["welcome-page-title"] = "راهنما پُرس‌لاین ";

            $strings["settings-page-h2-title"] = "تنظیم اتصال به حساب کاربری";

            $strings["settings-apiKey-lable"] = "کلید API";

            $strings["settings-api-key-alert"] = "کلید نامعتبر است.";

            $strings["settings-api-key-accept"] = "کلید معتبر است.";

            $strings["settings-api-key-empty"] = "کلیدی وارد نشده است";

            $strings["settings-submit-btn"] = "ذخیره";



            $strings["my-forms-menu-title"] = "فرم‌های من";

            break;

        case 2:

            $strings["menu_title"] = "Porsline";

            $strings["survey_list_page_heading"] = "Formlarım";

            $strings["porsline-add-new-survey-popup-title"] = "Formların birini seçın";

            $strings["porsline-add-new-survey-in-panel"] = "Yeni form oluştur";
            $strings["porsline-or"] = "Veya";
            $strings["porsline-add-new-survey-from-list"] = "Hazır formlardan seç";

            $strings["folders-title"] = "klasörler";

            // $strings["connection-error"] = "مشکلی در اتصال به پُرس‌لاین به وجود آمده است. (اتصال به اینترنت را بررسی کنید)";

            $strings["survey-status"] = "Durum";

            $strings["active"] = "Aktif";

            $strings["inactive"] = "Pasif";

            $strings["views"] = "Görüntüleme";

            $strings["responses"] = "Yanıtlar";

            $strings["delete-survey"] = "Sil";

            $strings["show-survey"] = "Görüntüle";
            $strings["delete-modal-title"] = "Formu sil";
            $strings["delete-modal-msg"] = "Formu silmek istediğinizden emin misiniz?";
            $strings["delete-modal-cancel"] = "Hayır";
            $strings["delete-modal-accepte"] = "Evet, sil";

            $strings["survey-shortcode"] = "Aşağıdaki kodu kopyalayıp istediğiniz yere giriniz";

            $strings["survey-shortcode-msg"] = "kopyalandı";

            $strings["survey-style-btn"] = "Görüntü ayarları";

            $strings["design-sec-title"] = "Görüntü ayarları";

            $strings["embed-simple"] = "İFrame";

            $strings["embed-popup"] = "Pop-up";

            $strings["embed-popup-nav-title"] = "Pop-up giriş yönü";

            $strings["embed-popup-nav-btt"] = "Yukarı doğru";

            $strings["embed-popup-nav-ttb"] = "Aşağı doğru";

            $strings["embed-popup-nav-ltr"] = "Sağa doğru";

            $strings["embed-popup-nav-rtl"] = "Sola doğru";

            $strings["embed-width"] = "Genişlik";

            $strings["embed-height"] = "Yükseklik";

            $strings["embed-border-type"] = "Çerçeve tipi";

            $strings["embed-border-solid"] = "sağlam";

            $strings["embed-border-dotted"] = "noktalı";

            $strings["embed-border-dashed"] = "kesikli";

            $strings["embed-border-none"] = "çerçevesiz";

            $strings["embed-border-color"] = "Çerçeve rengi";

            $strings["embed-border-weight"] = "Çerçeve kalınlığı";

            $strings["embed-border-radius"] = "Çerçeve eğriliği";

            $strings["embed-margin-top"] = "Yukarıdan uzaklık";

            $strings["embed-margin-bottom"] = "Alttan uzaklık";

            $strings["embed-margin-right"] = "Sağdan uzaklık";

            $strings["embed-margin-left"] = "Soldan uzaklık";

            $strings["embed-pop-type-title"] = "Görüntü türü";

            $strings["embed-pop-type1"] = "Buton";

            $strings["embed-pop-type3"] = "Bağlantı";

            $strings["embed-pop-type2"] = "Otomatik";

            $strings["embed-pop-btn-txt"] = "Buton metni";

            $strings["embed-pop-btn-color"] = "Buton arka plan rengi";

            $strings["embed-pop-btn-txt-color"] = "Buton metin rengi";

            $strings["embed-pop-link-txt"] = "Bağlantı metni";

            $strings["embed-pop-show-time"] = "Gösteriden önceki gecikme";

            $strings["embed-pop-show-time-sec"] = "saniye";

            $strings["embed-custom-css"] = "Özel CSS kodu";

            $strings["standard-embed-desctiotion"] = "Formu kendi sitenizde goruntuleyin";

            $strings["popup-embed-desctiotion"] = "";



            $strings["design-update-btn"] = "Kaydet";



            $strings["settings-menu-title"] = "Eklenti ayarları";

            $strings["settings-page-quide"] = '

            <ol>

                <li><a target="_blank" style="text-decoration: none;" href="https://survey.porsline.com/">Porsline hesabınıza</a> giriş yapın</li>

                <li>Profilinizden "Hesap Ayarları" kısmına girin.</li>

                <li>"API anahtarı ve aktif oturumlar" üzerine tıklayın.</li>

                <li>"API Anahtarı" bölümünde, "API Anahtarı Oluştur" butonunu seçin.</li>

                <li>API anahtarını kopyalayın ve buraya girin.</li>

            </ol>

            ';

            $strings["welcome-menu-title"] = "Eklenti kılavuzu";

            $strings["welcome-page-title"] = "Eklenti kılavuzu";

            $strings["settings-page-h2-title"] = "Kullanıcı hesabıyla bağlantı ayarları";

            $strings["settings-apiKey-lable"] = "API Anahtarı";

            $strings["settings-api-key-alert"] = "Anahtar geçersiz.";

            $strings["settings-api-key-accept"] = "Anahtar geçerli";

            $strings["settings-api-key-empty"] = "Anahtar girilmedi";

            $strings["settings-submit-btn"] = "Kaydet";



            $strings["my-forms-menu-title"] = "Formlarım";

            break;

        case 3:

            $strings["menu_title"] = "بُرس‌لاین";

            $strings["survey_list_page_heading"] = "استماراتي";

            $strings["porsline-add-new-survey-popup-title"] = "اختر إحدى الاستمارات";

            $strings["porsline-add-new-survey-in-panel"] = "إنشاء استمارة جديدة";
            $strings["porsline-or"] = "أو";
            $strings["porsline-add-new-survey-from-list"] = "اختيار من الاستمارات الموجودة";

            $strings["folders-title"] = "المجلدات";

            // $strings["connection-error"] = "مشکلی در اتصال به پُرس‌لاین به وجود آمده است. (اتصال به اینترنت را بررسی کنید)";

            $strings["survey-status"] = "الحالة";

            $strings["active"] = "نشيط";

            $strings["inactive"] = "غير نشيط";

            $strings["views"] = "معاينة";

            $strings["responses"] = "إجابة";

            $strings["delete-survey"] = "حذف";

            $strings["show-survey"] = "عرض";
            $strings["delete-modal-title"] = "حذف استمارة";
            $strings["delete-modal-msg"] = "هل أنت متأكد من أنك تريد الحذف؟";
            $strings["delete-modal-cancel"] = "لا";
            $strings["delete-modal-accepte"] = "نعم أريد الحذف";

            $strings["survey-shortcode"] = "انسخ الكود أدناه والصقه في المكان الذي تريده";
            $strings["survey-shortcode-msg"] = "تم النسخ";

            $strings["survey-style-btn"] = "إعدادات الإظهار";

            $strings["design-sec-title"] = "إعدادات الإظهار";

            $strings["embed-simple"] = "إظهار إطار آي فريم";

            $strings["embed-popup"] = "إظهار نافذة منبثقة";

            $strings["embed-popup-nav-title"] = "اتجاه دخول النافذة المنبثقة";

            $strings["embed-popup-nav-btt"] = "من الأسفل إلى الأعلى";

            $strings["embed-popup-nav-ttb"] = "من الأعلى إلى الأسفل";

            $strings["embed-popup-nav-ltr"] = " من اليسار إلى اليمين";

            $strings["embed-popup-nav-rtl"] = "من اليمين إلى اليسار";

            $strings["embed-width"] = "العرض";

            $strings["embed-height"] = "الارتفاع";

            $strings["embed-border-type"] = "نوع الإطار";

            $strings["embed-border-solid"] = "صلب";

            $strings["embed-border-dotted"] = "منقط";

            $strings["embed-border-dashed"] = "متقطع";

            $strings["embed-border-none"] = "بدون إطار";

            $strings["embed-border-color"] = "لون الإطار";

            $strings["embed-border-weight"] = "سماكة الإطار";

            $strings["embed-border-radius"] = "انحناء الإطار";

            $strings["embed-margin-top"] = "التباعد من الأعلى";

            $strings["embed-margin-bottom"] = "التباعد من الأسفل";

            $strings["embed-margin-right"] = "التباعد من اليمين";

            $strings["embed-margin-left"] = "التباعد من اليسار";

            $strings["embed-pop-type-title"] = "طريقة الإظهار";

            $strings["embed-pop-type1"] = "زر";

            $strings["embed-pop-type3"] = "رابط";

            $strings["embed-pop-type2"] = "فتح تلقائي";

            $strings["embed-pop-btn-txt"] = "نص الزر";

            $strings["embed-pop-btn-color"] = "لون خلفية الزر";

            $strings["embed-pop-btn-txt-color"] = "لون نص الزر";

            $strings["embed-pop-link-txt"] = "نص الرابط";

            $strings["embed-pop-show-time"] = "التأخير قبل الإظهار";

            $strings["embed-pop-show-time-sec"] = "بالثواني";

            $strings["embed-custom-css"] = "كود CSS خاص";

            $strings["standard-embed-desctiotion"] = "قم بإظهار استمارتك في موقعك";

            $strings["popup-embed-desctiotion"] = "";



            $strings["design-update-btn"] = "تخزين";



            $strings["settings-menu-title"] = "إعدادات الإضافة";

            $strings["settings-page-quide"] = "
    
                <ol style='font-family: Vazir;'>
    
                    <li>ادخل إلى <a target='_blank' style='text-decoration: none;' href='https://survey.porsline.com/'>حسابك في بُرس لاين</a>.</li>
    
                    <li>في قسم حساب المستخدم ادخل إلى «تحرير حساب المستخدم».</li>
    
                    <li>انقر على الخيار «مفتاح API والجلسات النشطة».</li>
    
                    <li>في القسم «مفتاح وصول API» انقر على الزر «إنشاء مفتاح وصول API».</li>
    
                    <li>انسخ مفتاح API وأدخله هنا.</li>
    
                </ol>
    
                ";

            $strings["welcome-menu-title"] = "دليل الإضافة";

            $strings["welcome-page-title"] = "دليل الإضافة";

            $strings["settings-page-h2-title"] = "إعدادات الاتصال مع حساب المستخدم";

            $strings["settings-apiKey-lable"] = "مفتاح API";

            $strings["settings-api-key-alert"] = "المفتاح غير صالح";

            $strings["settings-api-key-accept"] = "المفتاح صالح";

            $strings["settings-api-key-empty"] = "لم يتم إدخال أي مفتاح";

            $strings["settings-submit-btn"] = "تخزين";



            $strings["my-forms-menu-title"] = "استماراتي";

            break;

        case 4:

            $strings["menu_title"] = "Porsline";

            $strings["survey_list_page_heading"] = "My forms";

            $strings["porsline-add-new-survey-popup-title"] = "Choose a form";

            $strings["porsline-add-new-survey-in-panel"] = "Create new form";
            $strings["porsline-or"] = "Or";
            $strings["porsline-add-new-survey-from-list"] = "Pick from my form";

            $strings["folders-title"] = "Folders";

            // $strings["connection-error"] = "مشکلی در اتصال به پُرس‌لاین به وجود آمده است. (اتصال به اینترنت را بررسی کنید)";

            $strings["survey-status"] = "Status";

            $strings["active"] = "Active";

            $strings["inactive"] = "Inactive";

            $strings["views"] = "Views";

            $strings["responses"] = "Responses";

            $strings["delete-survey"] = "Delete";

            $strings["show-survey"] = "Preview";
            $strings["delete-modal-title"] = "Delete";
            $strings["delete-modal-msg"] = "You're about to delete the form. Are you sure? ";
            $strings["delete-modal-cancel"] = "Cancel";
            $strings["delete-modal-accepte"] = "Delete";

            $strings["survey-shortcode"] = "Place the code in your page's HTML";
            $strings["survey-shortcode-msg"] = "Copied";

            $strings["survey-style-btn"] = "Display setting";

            $strings["design-sec-title"] = "Display setting";

            $strings["embed-simple"] = "Iframe";

            $strings["embed-popup"] = "Popup";

            $strings["embed-popup-nav-title"] = "Popup entry direction";

            $strings["embed-popup-nav-btt"] = "down to up";

            $strings["embed-popup-nav-ttb"] = "up to down";

            $strings["embed-popup-nav-ltr"] = " left to right";

            $strings["embed-popup-nav-rtl"] = "right to left";

            $strings["embed-width"] = "Width";

            $strings["embed-height"] = "Height";

            $strings["embed-border-type"] = "Border type";

            $strings["embed-border-solid"] = "solid";

            $strings["embed-border-dotted"] = "dotted";

            $strings["embed-border-dashed"] = "dashed";

            $strings["embed-border-none"] = "borderless";

            $strings["embed-border-color"] = "Border color";

            $strings["embed-border-weight"] = "Border weight";

            $strings["embed-border-radius"] = "Border radius";

            $strings["embed-margin-top"] = "Margin top";

            $strings["embed-margin-bottom"] = "Margin bottom";

            $strings["embed-margin-right"] = "Margin right";

            $strings["embed-margin-left"] = "Margin left";

            $strings["embed-pop-type-title"] = "Display type";

            $strings["embed-pop-type1"] = "Button";

            $strings["embed-pop-type3"] = "Link";

            $strings["embed-pop-type2"] = "Auto-open";

            $strings["embed-pop-btn-txt"] = "Label";

            $strings["embed-pop-btn-color"] = "Button color";

            $strings["embed-pop-btn-txt-color"] = "Button text color";

            $strings["embed-pop-link-txt"] = "Label";

            $strings["embed-pop-show-time"] = "Delay on display";

            $strings["embed-pop-show-time-sec"] = "s";

            $strings["embed-custom-css"] = "Custom CSS";

            $strings["standard-embed-desctiotion"] = "Embed the from in your website";

            $strings["popup-embed-desctiotion"] = "";



            $strings["design-update-btn"] = "Save";



            $strings["settings-menu-title"] = "Plugin settings";

            $strings["settings-page-quide"] = "

            <ol>

                <li>Log into your <a target='_blank' style='text-decoration: none;' href='https://survey.porsline.com/'>Porsline account</a>.</li>

                <li>In Profile section, hit the account settings.</li>

                <li>Hit the API key & active sessions.</li>

                <li>Then click on Generate API key.</li>

                <li>Copy the key and paste here.</li>

            </ol>

            ";

            $strings["welcome-menu-title"] = "Plugin guide";

            $strings["welcome-page-title"] = "Plugin guide";

            $strings["settings-page-h2-title"] = "How to connect to your account?";

            $strings["settings-apiKey-lable"] = "API key";

            $strings["settings-api-key-alert"] = "Invalid token";

            $strings["settings-api-key-accept"] = "Valid token";

            $strings["settings-api-key-empty"] = "No token";

            $strings["settings-submit-btn"] = "Save";



            $strings["my-forms-menu-title"] = "My forms";

            break;
    }



    return $strings;
}
