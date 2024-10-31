<?php

require_once(plugin_dir_path(__dir__) . '/view/lang-strings.php');

global $wpdb, $table_prefix;
$lang_table_name = $table_prefix . "porsline_settings";
$lang = $wpdb->get_results("SELECT `lang` FROM $lang_table_name");
foreach ($lang as $lang_item) {
    $lang = $lang_item->lang;
    break;
}

?>

<input type="hidden" id="lang-tag" value="<?php echo $lang; ?>">

<?php
if ($lang == 1) {
?>

    <div class="porsline-welcome-page">

        <section class="porsline-intro-cover">

            <div class="porsline-header-text">

                <h1>به افزونه وردپرس پُرس‌لاین خوش آمدید</h1>

                <br>

                <ul>

                    <li>امنیت و پایداری</li>

                    <li>نصب آسان و کاربری ساده</li>

                    <li>امکانات حرفه‌ای و گزارش‌گیری پیشرفته</li>

                    <li>رایگان و همراه با پشتیبانی</li>

                </ul>
                <br>
                <div style="text-align: center;">

                    <a class="porsline-cta" href="<?php echo admin_url('admin.php?page=porsline-settings'); ?>">شروع کار با افزونه</a>

                </div>

            </div>

            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/header.png', __FILE__ ));?>" alt="">

            </div>

        </section>



        <br>

        <iframe id="video-frame" width="80%" height="400" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0" src="https://www.aparat.com/video/video/embed/videohash/8MXg2/vt/frame"></iframe>

        <br><br>

        <div style="text-align: center;">

            <a class="porsline-cta" href="<?php echo admin_url('admin.php?page=porsline-settings'); ?>">شروع کار با افزونه</a>

        </div>



        <br><br>
        <h2>به فرم‌های آماده و از پیش طراحی‌شده نیاز دارید؟</h2>
        <section class="porsline-intro-cover" style="border-radius: 4px !important; background-color: rgba(102, 175, 233, 0.30);">

            <div class="porsline-header-text">

                <br><br>

                <p style="font-size: 18px; color:#465773;">به کمک فرم‌های آماده در پُرس‌لاین می‌توانید سریع‌تر فرم خود را طراحی و تکمیل کنید و آن را در صفحات سایت خود قرار دهید.</p>

                <br>

                <a class="porsline-cta" target="_blank" href="https://porsline.ir/survey-templates/">مشاهده نمونه فرم‌های بیشتر</a>

            </div>

            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/forms-templates.png', __FILE__));?>" alt="">

                <br><br>

            </div>

        </section>



        <br><br><br>



        <h2>کاربران پُرس‌لاین درباره ما چه می‌گویند؟</h2>

        <br>



        <div class="testimonial-box testimoni-desktop">

            <div class="testimonial-item" id="testimonial-first-item" style="margin-right: 1900px;">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/ebrahimi-opt.jpg', __FILE__));?>" alt="پویان ابراهیمی - Porsline" class="testimonial-avatar">

                <div>
                    <h3 class="testimonial-name">پویان ابراهیمی</h3>

                    <h4 class="testimonial-position">سرگروه تحقیقات بازار و هوشمندی تجاری شرکت شاتل</h4>

                    <p class="testimonial-description text-justify">

                        پُرس&zwnj;لاین، به ما این امکان را داد تا بتوانیم در کمترین زمان و با بالاترین دقت داده&zwnj;هایی را جمع&zwnj;آوری کنیم که در روش&zwnj;های سنتی برایمان هزینه ریالی و زمانی چند برابری داشت.

                        دو ویژگی در پُرس&zwnj;لاین ما را به مشتری وفادار خود تبدیل کرده است: اول پنل بسیار کاربر&zwnj;پسند و دوم، سرعت و چابکی تیم پشتیبانی و توسعه پُرس&zwnj;لاین.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/talebi-opt.jpg', __FILE__));?>" alt="عادل طالبی - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">عادل طالبی</h3>

                    <h4 class="testimonial-position">استراتژیست ارشد بازاریابی دیجیتال</h4>

                    <p class="testimonial-description text-justify">

                        پُرس&zwnj;لاین یکی از معدود سرویس&zwnj;های ایرانیه که به دلیل کاربری بسیار راحت و آسان، من هیچ&zwnj;وقت نیاز به راهنما و پشتیبانی پیدا نکردم و این به نظرم مهم&zwnj;ترین ویژگی یک SaaS&zwnj; (خدمت نرم افزاری بر بستر ابر) هست که بچه&zwnj;های تیم پُرس&zwnj;لاین با موفقیت اون رو پیاده&zwnj;سازی کردند.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/Tohid_PIC_34-min.jpg', __FILE__));?>" alt="توحید علی&zwnj;اشرفی - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">توحید علی&zwnj;اشرفی</h3>

                    <h4 class="testimonial-position">معاون بازاریابی علی بابا</h4>

                    <p class="testimonial-description text-justify">

                        همواره تحقیقات بازاریابی و شناخت ترجیحات مشتریان، از ابزارهای اساسی ما برای تدوین استراتژی&zwnj;های بازاریابی و توسعه محصولات و خدمات&zwnj;مان بوده&zwnj;. با قطعیت بالایی می&zwnj;توان گفت که پرس&zwnj;لاین با توجه به ویژگی&zwnj;های بومی&zwnj;سازی&zwnj;شده و امکانات کاربردی&zwnj;اش، گزینه اول انتخابی ما برای بسیاری از فعالیت&zwnj;های پژوهش بازاریابی است و بسیاری از نیازهای ما را در این حوزه به خوبی پوشش می&zwnj;دهد.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/nezafati.jpg', __FILE__));?>" alt="دکتر نوید نظافتی - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">دکتر نوید نظافتی</h3>

                    <h4 class="testimonial-position">مدیر گروه مدیریت دولتی دانشگاه شهید بهشتی</h4>

                    <p class="testimonial-description text-justify">

                        پُرس‌لاین، ساخت و توزیع پرسشنامه آنلاین را

                        جذاب و حرفه‌ای و تحلیل داده‌ها را ساده می‌کند. فکر می‌کنم از این پس، دانشجویانی که از

                        پُرس‌لاین استفاده نمی‌کنند، مثل کسانی هستند که در مسابقه اتومبیل‌رانی، پیاده می‌دوند.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img class="testimonial-avatar" src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/ramin-yazdani-pedram.jpg?width=112&amp;height=112', __FILE__));?>" alt="رامین یزدانی پدرام - کاربر پرس لاین">
                <div>
                    <h3 class="testimonial-name">رامین یزدانی پدرام </h3>

                    <h4 class="testimonial-position">مدیر توسعه نرم&zwnj;افزار هواپیمایی آتا</h4>

                    <p class="testimonial-description text-justify">

                        پرس&zwnj;لاین ابزار قدرتمندی برای کسب&zwnj;وکارهای فعال در حوزه هتل&zwnj; و گردشگری است که به شما امکان طراحی و اجرای هر نوع سناریوی وقت&zwnj;گیری را به راحتی و تنها با چند کلیک می&zwnj;دهد. با امکانات متنوع و بی&zwnj;نظیری مثل استفاده از API و وب&zwnj;هوک، به راحتی توانستیم فرم&zwnj;ها و پرسشنامه&zwnj;هایمان را به سیستم&zwnj;های داخلی خود متصل کنیم و گزارش&zwnj;های متنوعی بسازیم.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img class="testimonial-avatar" src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/houman-khosravi.jpg?width=112&amp;height=112', __FILE__));?>" alt="هومن خسروی - کاربر پرس لاین">
                <div>
                    <h3 class="testimonial-name">هومن خسروی</h3>

                    <h4 class="testimonial-position">توسعه&zwnj;دهنده کسب&zwnj;وکار سایت شب</h4>

                    <h4 class="testimonial-position"></h4>

                    <p class="testimonial-description text-justify">

                        پرس&zwnj;لاین اگر تنها سامانه یکپارچه نظرسنجی در ایران نباشد، بدون شک بهترین و کامل&zwnj;ترین ابزار ساخت پرسشنامه و نظرسنجی محسوب می&zwnj;شود. انواع پژوهش&zwnj;ها، تحقیقات بازار و تحقیقات آماری در جمعیت&zwnj;های مختلف پرسونایی و مشتریان هدف، با امکانات گسترده این ابزار و گزارش&zwnj;های اختصاصی آن قابل انجام است و این موضوع، تمایز پرس&zwnj;لاین برای «شب» بوده&zwnj;است.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img class="testimonial-avatar" src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/mahya-mirzazad.jpg?width=112&amp;height=112', __FILE__));?>" alt="محیا میرزازاد - کاربر پرس لاین">
                <div>
                    <h3 class="testimonial-name">محیا میرزازاد</h3>

                    <h4 class="testimonial-position">مسئول باشگاه مشتریان و CRM هتل بین&zwnj;المللی هرمز</h4>

                    <p class="testimonial-description text-justify">

                        مدت&zwnj;ها بود به دنبال سرویسی جهت نظرسنجی اقامت مهمانان هتل بودیم که قابلیت یکپارچگی با نرم&zwnj;افزار رزرواسیون هتل و پنل پیامکی را داشته باشد. با استفاده از پرس&zwnj;لاین، نه تنها این فرایند را به سرعت عملیاتی کردیم، بلکه از گزارش&zwnj;ها و جدول&zwnj;های نتایج&zwnj; برای بهبود خدمات&zwnj; و افزایش ارتباط&zwnj;&zwnj;مان با مشتری&zwnj;ها استفاده می&zwnj;کنیم.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/milad_hospital_logo.png', __FILE__));?>" alt="وحید دلاوری - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">وحید دلاوری</h3>

                    <h4 class="testimonial-position">مدیر IT بیمارستان میلاد</h4>

                    <p class="testimonial-description text-justify">

                        پُرس&zwnj;لاین در بیمارستان میلاد، با استقبال زیادی مواجه شد و کاربری اون به سرعت در حوزه&zwnj;های مختلف رشد کرد. دلایل مختلفی دارد، اما مهمترین آن&zwnj;ها، کاربری و پیاده&zwnj;سازی آسان، کاهش هزینه و زمان انجام کارها و دست&zwnj;یابی به بازخورد سریع و تحریف نشده است. با استفاده از پُرس&zwnj;لاین تحولی اساسی در فرایند&zwnj;هایمان ایجاد کردیم.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/profile.png', __FILE__));?>" alt="دكتر محمد جعفری - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">دكتر محمد جعفری</h3>

                    <h4 class="testimonial-position">رئیس اداره نرم&zwnj;افزار دانشگاه علوم پزشكی مازندران</h4>

                    <p class="testimonial-description text-justify">

                        پرس&zwnj;لاين به&zwnj;دليل كاربری بسيار راحت و آسان، اين امكان را به ما داده تا در ۲۵ بيمارستان دانشگاه علوم&zwnj;پزشكی مازندران، در كمترين زمان و با بالاترين دقت داده&zwnj;ها را جمع آوری كنيم و همچنين به&zwnj;دليل پياده&zwnj;سازی آسان، كاهش هزينه و زمان انجام كارها و دست&zwnj;يابی به بازخورد سريع در ساير حوزه&zwnj;های دانشگاه نيز با استقبال زيادی مواجه شده&zwnj;است.

                    </p>
                </div>
            </div>

        </div>

        <h2>به امکانات بیشتری نیاز دارید؟</h2>
        <section class="porsline-intro-cover" style="border-radius: 4px !important; background-color: rgba(102, 175, 233, 0.30);">
            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/more-options.png', __FILE__));?>" alt="">

            </div>
            <div class="porsline-header-text" style="float: unset;">
                <br><br>
                <p style="font-size: 18px; color: #465773;">
                    با ارتقاء سطح کاربری خود به حرفه‌ای یا
                    سازمانی از امکانات بیشتری در ساخت
                    فرم‌های خود بهره‌مند شوید.

                </p>
                <br>

                <a class="porsline-cta" target="_blank" href="https://porsline.ir/pricing/">مشاهده قیمت‌ها و ارتقاء</a>
            </div>
        </section>
        <br><br>
        <h2>مطالب مفید درباره افزونه وردپرس پُرس‌لاین</h2>

        <br><br><br>

        <div class="container landing" style="margin-top: -40px; margin-right: 8%;">

            <div class="row">

                <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-sm-12 col-xs-12">

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq0" onclick="openFaq(0)" class="landing-faq-btn">

                            <h3>چرا باید از افزونه فرم‌ساز پُرس‌لاین استفاده کنیم؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq0" class="collapse landing-faq-text">

                            <p>به چند دلیل بهتر است از افزونه فرم‌ساز پُرس‌لاین به جای دیگر ابزارها استفاده کنید: </p>

                            <br>

                            <ol style="list-style: persian; font-size: 14px;">

                                <li>افزونه فرم‌ساز پُرس‌لاین تنها افزونه فرم‌ساز رایگان فارسی است که 100% امنیت دارد و مشکلی برای وبسایت شما پیش نمی‌آورد.</li>

                                <li>پُرس‌لاین افزونه فرم‌ساز وردپرسی قدرتمندی است که همیشه پایدار و در دسترس است و شما می‌توانید از پشتیبانی و راهنماهای آن همیشه استفاده کنید.</li>

                                <li>کار با افزونه وردپرسی فرم‌ساز پرس‌لاین به راحتی چند درگ و دراپ است و با وجود نمونه فرم‌های آماده در عرض چند ثانیه می‌توانید فرم خود را بسازید.</li>

                                <li>افزونه فرم‌ساز فارسی پرس‌لاین پرس لاین به شما امکان ساخت انواع فرم تماس، فرم ثبت‌نام، فرم استخدام، فرم ثبت سفارش و دیگر انواع فرم را به طور رایگان می‌دهد.</li>

                                <li>به کمک افزونه حرفه‌ای فرم‌ساز وردپرس پرس‌لاین می‌توانید از امکانات ویژه‌ای برای ساخت انواع فرم‌های تعاملی و پیشرفته استفاده کنید.</li>

                            </ol>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq1" onclick="openFaq(1)" class="landing-faq-btn">

                            <h3>چطور با پرس&zwnj;لاین فرم و پرسشنامه جدید ایجاد کنیم؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq1" class="collapse landing-faq-text">

                            <p>ساخت پرسشنامه و فرم آنلاین در پُرس&zwnj;لاین به راختی انجام چند درگ و دراپ ساده است. کافیست وارد پنل کاربری خود شوید، ایجاد پرسشنامه جدید را انتخاب کنید و سوال&zwnj;های خود را روی صفحه بکشید و آن&zwnj;ها را بنویسید. بعد از میان طرح&zwnj;های موجود یکی را انتخاب کنید یا طرح خاص خودتان را روی بک&zwnj;گراند فرم قرار دهید و از آن استفاده کنید.&nbsp;</p>

                            <p>

                                <a href="https://porsline.ir/videos#HlvFw" target="_blank">ویدئوی طراحی فرم با پُرس&zwnj;لاین </a>

                            </p>

                            <p>

                                <a href="https://porsline.ir/blog/%d8%b1%d8%a7%d9%87%d9%86%d9%85%d8%a7%db%8c-%d8%ac%d8%a7%d9%85%d8%b9-%d8%b3%d8%a7%d8%ae%d8%aa-%d9%88-%d8%b7%d8%b1%d8%a7%d8%ad%db%8c-%d9%be%d8%b1%d8%b3%d8%b4%d9%86%d8%a7%d9%85%d9%87-%d8%a2%d9%86%d9%84/" target="_blank">مقاله راهنمای طراحی فرم و پرسشنامه </a>

                                <br>

                            </p>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq2" onclick="openFaq(2)" class="landing-faq-btn">

                            <h3>تفاوت فرم&zwnj;ساز پُرس&zwnj;لاین با گرویتی فرم و دیگر ابزارهای مشابه چیست؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq2" class="collapse landing-faq-text">

                            <p>اگر دوست ندارید امنیت سایتتان را به خطر بیاندازید و می&zwnj;خواهید از دست هکرها در امان باشید، اگر سادگی کار با افزونه&zwnj;ها برایتان مهم است، اگر نمی&zwnj;خواهید هزینه&zwnj;های گزافی بابت ساخت فرم&zwnj;وردپرسی متحمل شوید و نهایتا اگر به امکانات حرفه&zwnj;ای و پیشرفته نیاز دارید باید فقط از پلاگین وردپرس پُرس&zwnj;لاین استفاده کنید. در جدول زیر به تفاوت&zwnj;های عمده پُرس&zwnj;لاین با دیگر ابزارهای مشابه آن مثل گرویتی فرم اشاره شده است. <br></p>



                            <table>

                                <thead>

                                    <tr style="background-color: #2994FC;">

                                        <th style="background-color: #ecf0f1"></th>

                                        <th>پُرس‌لاین</th>

                                        <th>Gravity Forms (گرویتی فرمز)</th>

                                        <th>Wpform (دبلیو پی فرم)</th>

                                        <th>Ninjaforms (نینجا فرمز)</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>نسخه رایگان</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                            <br>

                                            <span>(نسخه اصلی این پلاگین پولی است و نسخه کرک‌شده آن در ایران به فروش می‌رسد.)</span>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>قیمت نسخه پولی</td>

                                        <td>ماهانه ۱۳۰ هزار تومان</td>

                                        <td>پلن ماهانه ندارد/ سالانه ۵۹ دلار</td>

                                        <td>پلن ماهانه ندارد/ سالانه ۴۹ دلار</td>

                                        <td>پلن ماهانه ندارد/ سالانه ۳۹ دلار</td>

                                    </tr>

                                    <tr>

                                        <td>امکانات پیشرفته در ساخت فرم به زبان فارسی</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>اطلاع رسانی با ایمیل</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>اطلاع رسانی با پیامک</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>امکان استفاده برای یوزرها و سایت‌های مختلف در پلن رایگان</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>گزارش و تحلیل نتایج در پلن رایگان</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>افزودن انواع شرط</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>امکان آپلود فایل</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>ساخت فرم در فضای وردپرس</td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq3" onclick="openFaq(3)" class="landing-faq-btn">

                            <h3>با ارتقاء به سطح کاربری حرفه&zwnj;ای چه امکاناتی به دست می&zwnj;آورید؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq3" class="collapse landing-faq-text">

                            <p>شما در سطح کاربری رایگان می&zwnj;توانید بی&zwnj;نهایت فرم&zwnj; و پرسشنامه بسازید، سوالات بی&zwnj;شماری روی آن قرار دهید و آن را برای دیگران به اشتراک بگذارید. اما برای امکاناتی نظیر آپلود فایل، استفاده همزمان از چند پرسشنامه یا دریافت بیش از صد پاسخ نیاز دارید سطح کاربری خود را ارتقاء دهید.برای مشاهده امکانات دیگر و هزینه ارتقاء به سطح کاربری حرفه&zwnj;ای لینک&zwnj;های زیر را باز کنید.<br>

                            </p>

                            <p>

                                <a href="https://porsline.ir/videos#8gTBP" target="_blank">ویدئوی امکانات سطح کاربری حرفه&zwnj;ای</a>

                                <br>

                            </p>

                            <p>

                                <a href="https://porsline.ir/pricing" target="_blank">&nbsp;هزینه ارتقاء به سطح کاریری حرفه&zwnj;ای&nbsp; </a>

                                <br>

                            </p>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq4" onclick="openFaq(4)" class="landing-faq-btn">

                            <h3>با ارتقاء به سطح کاربری سازمانی چه امکاناتی به دست می&zwnj;آورید؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq4" class="collapse landing-faq-text">

                            <p>شما برای داشتن امکاناتی نظیر وب&zwnj;هوک، احراز هویت پاسخ&zwnj;دهنده&zwnj;ها، ثبت موقعیت مکانی پاسخ&zwnj;دهنده&zwnj;ها و دیگر امکانات پیشرفته نیاز دارید سطح کاربری خود را ارتقاء دهید.برای

                                مشاهده امکانات دیگر و هزینه ارتقاء به سطح کاربری سازمانی لینک&zwnj;های زیر را

                                باز کنید.<br>

                            </p>

                            <p>

                                <a href="https://porsline.ir/videos#EVaGZ" target="_blank">ویدئوی امکانات سطح کاربری سازمانی</a><br>

                            </p>

                            <p>

                                <a href="https://porsline.ir/pricing" target="_blank">&nbsp;هزینه ارتقاء به سطح کاریری سازمانی&nbsp; </a><br>

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>
<?php
} else if ($lang == 2) {
?>
    <div class="porsline-welcome-page">

        <section class="porsline-intro-cover">

            <div class="porsline-header-text">

                <h1>Porsline WordPress Eklentisine Hoş Geldiniz</h1>

                <br>

                <ul>

                    <li>Güvenlik ve istikrar</li>

                    <li>Kurulumu ve kullanımı kolay</li>

                    <li>Profesyonel tesisler ve gelişmiş raporlama</li>

                    <li>Ücretsiz ve destekli</li>

                </ul>
                <br>
                <div style="text-align: center;">

                    <a class="porsline-cta" href="<?php echo admin_url('admin.php?page=porsline-settings'); ?>">Eklentiyi kullanmaya başla</a>

                </div>

            </div>

            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/header-tr.png', __FILE__));?>" alt="">

            </div>

        </section>



        <br>

        <iframe id="video-frame" width="80%" height="400" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0" src="https://www.youtube.com/embed/Ooqeu3VJTZw"></iframe>

        <br><br>

        <div style="text-align: center;">

            <a class="porsline-cta" href="<?php echo admin_url('admin.php?page=porsline-settings'); ?>">Eklentiyi kullanmaya başla</a>

        </div>



        <br><br>
        <h2>Hazır formlara mı ihtiyacınız var?</h2>
        <section class="porsline-intro-cover" style="border-radius: 4px !important; background-color: rgba(102, 175, 233, 0.30);">

            <div class="porsline-header-text">

                <br><br>

                <p style="font-size: 18px; color:#465773;">Porsline hazır form şablonları ile formunuzu daha hızlı tasarlayıp ve site sayfalarınıza yerleştirebilirsiniz.</p>

                <br>

                <a class="porsline-cta" target="_blank" href="https://porsline.com/tr/survey-templates/">Daha fazla form şablonları</a>

            </div>

            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/forms-templates-tr.png', __FILE__));?>" alt="">

                <br><br>

            </div>

        </section>



        <br><br><br>



        <h2>Kullanıcılarımız Porsline ile ilgili ne söylüyorlar?</h2>

        <br>



        <div class="testimonial-box testimoni-desktop">

            <div class="testimonial-item" id="testimonial-first-item" style="margin-left: 634px;">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/EDA-YUREK.jpg', __FILE__));?>" alt="EDA-YÜREK Porsline" class="testimonial-avatar">

                <div>
                    <h3 class="testimonial-name">Eda Yürek</h3>

                    <h4 class="testimonial-position">MEDILIFE İnsan kaynakları Sorumlusu</h4>

                    <p class="testimonial-description text-justify">
                        Porsline, internette araştırırken bulduğum bir uygulama. Kullanımı kolay, Tüm her şey detaylıca düşünülmüş. Takıldığınız bir nokta olduğunda ayrıca Porsline destek ekibi var. Hızlı geri dönüşleri ve konusuna hakim bir şekilde
                        sormak istediğiniz her soruda online olarak cevap veriyorlar ve tüm anket türlerinin hazırlanmanızda çok güzel bir yardımcı. Ücret politikasının da uygun olması Porsline uygulamasını tanımanıza fırsat veriyor.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/ural-bora.jpg', __FILE__));?>" alt="Ural Bora - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">Ural Bora</h3>

                    <h4 class="testimonial-position">Kainta İnşaat - Kurucu</h4>

                    <p class="testimonial-description text-justify">
                        Porsline ile internette araştırma yaparken tanıştım. Kullanımı kolay, Tüm detaylar düşünülmüş. Bütün sorunlara hızlıca çözüm üreten satıştan teknik ekibe kadar harika bir destek ekibi var. Onlar olduğu sürece bizde müşterileri olmaya devam edeceğiz teşekkürler Porsline ailesi.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/Sadik-Kilinc.jpg', __FILE__));?>" alt="Sadık Kılınç - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">Sadık Kılınç</h3>

                    <h4 class="testimonial-position">Petros Hotel, İstanbul</h4>

                    <p class="testimonial-description text-justify">

                        Otelimizde çeşitli formlar ve anketler yapıyoruz. Bunlar için Porsline’ın kolay ve çok akıllı bir çözüm olduğunu iletmek istiyorum. Anketlerinizi sürükle bırak şeklinde oluşturabilir, oldukça gelişmiş ve güçlü bir yapı ile sonuçlarınızı değerlendirebilirsiniz.
                        Ayrıca daha profesyonel analizlere ulaşabiliyorsunuz. Sorularınıza mantık uygulayarak Porsline yararlı imkânlar sunmaktadır. Fiyat ve destek konusunda çok başarılılar. Denemesini öneririm!

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/Ferhat-Inam.jpg', __FILE__));?>" alt="Ferhat İnam - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">Ferhat İnam</h3>

                    <h4 class="testimonial-position">Naz Teknik OSGB - İş Süreçleri ve Eğitim uzmanı</h4>

                    <p class="testimonial-description text-justify">
                        Naz Teknik OSGB olarak, Müşteri Deneyimi
                        Yönetimine büyük önem vermekteyiz. Porsline, içerisinde barındırdığı şablonlar,
                        seçenekler ve kolay arayüzü sayesinde geri bildirim alma sürecimizi hızlandırdı. Ayrıca,
                        bir sorun yaşadığımızda destek ekibinin hızlı şekilde dönüş yapması da Porsline
                        kullanımına devam etmemizde büyük bir etken.

                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img class="testimonial-avatar" src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/profile.png', __FILE__));?>">
                <div>
                    <h3 class="testimonial-name">Hamide Çağlar</h3>

                    <h4 class="testimonial-position">Özel Türkiye Gazetesi Hastanesi - Hasta Hakları Sorumlusu</h4>

                    <p class="testimonial-description text-justify">

                        Porsline ile Çalışan Performans Değerlendirme sürecinde tanıştım. Tam aradığım bir online uygulama oldu. Süreç ile ilgilenen danışmanlara istediğimiz an ulaşabildik, tüm sorunlarımıza destek sağladılar. Şu an her enketimiz için vazgeçilmemiz oldu. Herkese tavsiye ederim.

                    </p>
                </div>
            </div>

        </div>

        <h2>Daha fazla özelliğe mi ihtiyacınız var?</h2>
        <section class="porsline-intro-cover" style="border-radius: 4px !important; background-color: rgba(102, 175, 233, 0.30);">
            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/more-options-tr.png', __FILE__));?>" alt="">

            </div>
            <div class="porsline-header-text" style="float: unset;">
                <br><br>
                <p style="font-size: 18px; color: #465773;">
                    Kullanıcı hesabınızı Profesyonel veya Kurumsal seviyeye yükselterek formlarınızı oluşturmak için daha fazla özelliğe sahip olabilirsiniz.
                </p>
                <br>

                <a class="porsline-cta" target="_blank" href="https://porsline.com/tr/pricing/">Fiyatlar ve Yükseltme</a>
            </div>
        </section>
        <br><br>
        <h2>Porsline WordPress eklentisi hakkında faydalı bilgiler</h2>

        <br><br><br>

        <div class="container landing" style="margin-top: -40px; margin-left: 8%;">

            <div class="row">

                <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-sm-12 col-xs-12">

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq0" onclick="openFaq(0)" class="landing-faq-btn">

                            <h3>Neden Porsline form oluşturucu eklentisini kullanmalıyız?</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq0" class="collapse landing-faq-text">

                            <p>Birkaç nedenden dolayı, diğer araçlar yerine Porsline form oluşturucu eklentisini kullanmak en iyisidir:</p>

                            <br>

                            <ol style="font-size: 14px;">

                                <li>Porsline Form Oluşturucu Plugini %100 güvenli ve web siteniz için sorun oluşturmayan tek ücretsiz Türkçe Form Oluşturucu eklentisidir.</li>

                                <li>Porsline, her zaman kararlı ve erişilebilir olan güçlü bir WordPress form oluşturucu eklentisidir ki her zaman destek ekibine erişebilir ve kılavuzlarını kullanabilirsiniz.</li>

                                <li>Porsline WordPress Form Oluşturucu eklentisi ile çalışmak, birkaç sürükle ve bırak işlemi kadar kolaydır ve siz saniyeler içinde kendi formunuzu hazır formlar şablonlarını kullanarak oluşturabilirsiniz.</li>

                                <li>Porsline Türkçe form oluşturucu eklentisi, her türlü iletişim formu, kayıt formu, istihdam formu, sipariş kayıt formu ve diğer form türlerini ücretsiz olarak oluşturmanıza olanak sağlar.</li>

                                <li>Profesyonel Porsline WordPress form oluşturucu plugininin yardımıyla, çeşitli etkileşimli ve gelişmiş formlar oluşturmak için farklı özellikleri kullanabilirsiniz.</li>

                            </ol>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq1" onclick="openFaq(1)" class="landing-faq-btn">

                            <h3>Porsline ile nasıl yeni form ve anket oluşturulur?</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq1" class="collapse landing-faq-text">

                            <p>Porsline'da bir online anket ve form oluşturmak, birkaç basit sürükle ve bırak işlemi kadar kolaydır. Kullanıcı panelinize giriş yapın, Yeni Anket Oluştur'u seçin, sorularınızı sayfaya sürükleyin ve yazın. Ardından mevcut temalardan birini seçin veya formun arka planına kendi istediğiniz fotoğrafı ekleyin ve kullanın.</p>

                            <p>

                                <a href="https://porsline.com/tr/videos#HlvFw" target="_blank">Porsline ile form oluşturma videosu</a>

                            </p>

                            <p>

                                <a href="https://porsline.com/blog/tr/online-anket-sorulari-ve-tasarimi-kilavuzu/" target="_blank">Form ve anket tasarım kılavuzu makalesi</a>

                                <br>

                            </p>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq2" onclick="openFaq(2)" class="landing-faq-btn">

                            <h3>Porsline form oluşturucu ile Gravity forms ve diğer benzer araçlar arasındaki fark nedir?</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq2" class="collapse landing-faq-text">

                            <p>Sitenizin güvenliğini tehlikeye atmak istemiyorsanız ve bilgisayar korsanlarından korunmak istiyorsanız, eklentilerle çalışmanın basitliği sizin için önemliyse, bir WordPress formu oluşturmak için yüksek maliyetlere katlanmak istemiyorsanız ve son olarak profesyonel ve gelişmiş özelliklere ihtiyacınız varsa, yalnızca Porsline WordPress eklentisini kullanmaya ihtiyacınız vardır. Aşağıdaki tablo, Porsline ile Gravity Form gibi diğer benzer araçlar arasındaki büyük farkları göstermektedir.<br></p>



                            <table>

                                <thead>

                                    <tr style="background-color: #2994FC;">

                                        <th style="background-color: #ecf0f1"></th>

                                        <th>Porsline</th>

                                        <th>Gravity Forms</th>

                                        <th>Wpform</th>

                                        <th>Ninjaforms</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>Ücretsiz hesap</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                            <br>

                                            <span>Bu eklentinin orijinal versiyonu ücretlidir</span>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>Fiyat</td>

                                        <td>Aylık 100 Lira</td>

                                        <td>Aylık planı yok/ Yıllık 59 Dolar</td>

                                        <td>Aylık planı yok/ Yıllık 49 Dolar</td>

                                        <td>Aylık planı yok/ Yıllık 39 Dolar</td>

                                    </tr>

                                    <tr>

                                        <td>Türkçe form oluşturmada gelişmiş olanaklar</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>E-posta ile bildirim</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>SMS ile bildirim</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>Ücretsiz planda farklı kullanıcılar ve siteler için kullanım imkanı</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>Sonuçları ücretsiz planda raporlayıp ve analiz etmek</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>Şart eklemek</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>Dosya yüklemek</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>WordPress alanında form oluşturmak</td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq3" onclick="openFaq(3)" class="landing-faq-btn">

                            <h3>Hesabınızı Profesyonel kullanıcı düzeyine yükselterek hangi olanakları elde edebilirsiniz?</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq3" class="collapse landing-faq-text">

                            <p>Ücretsiz kullanıcı seviyesinde, sonsuz formlar ve anketler oluşturabilir, üzerine sayısız soru koyabilir ve başkalarıyla paylaşabilirsiniz. Ancak dosya yükleme, aynı anda birkaç anket aktifleştirme veya yüzden fazla yanıt görme gibi özellikler için kullanıcı seviyenizi yükseltmeniz gerekiyor. Diğer özellikleri ve Profesyonel kullanıcı seviyesine yükseltmenin maliyetini görmek için aşağıdaki bağlantıları açın.<br>

                            </p>

                            <p>

                                <a href="https://porsline.com/tr/videos#NRBySs" target="_blank">Profesyonel kullanıcı özellikleri videosu</a>

                                <br>

                            </p>

                            <p>

                                <a href="https://porsline.com/tr/pricing" target="_blank">Profesyonel kullanıcı hesabının fiyatı</a>

                                <br>

                            </p>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq4" onclick="openFaq(4)" class="landing-faq-btn">

                            <h3>Hesabınızı Kurumsal kullanıcı düzeyine yükselterek hangi olanakları elde edebilirsiniz?</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq4" class="collapse landing-faq-text">

                            <p>Webhook, yanıtlayıcı kimlik doğrulaması, yanıtlayıcı konum kaydı ve diğer gelişmiş özellikler gibi olanaklara sahip olmak için kullanıcı seviyenizi yükseltmeniz gerekir. Diğer özellikleri ve Kurumsal kullanıcı seviyesine yükseltmenin maliyetini görmek için aşağıdaki bağlantıları açın.<br>

                            </p>

                            <p>

                                <a href="https://porsline.com/tr/videos#NRBySd" target="_blank">Kurumsal kullanıcı özellikleri videosu</a><br>

                            </p>

                            <p>

                                <a href="https://porsline.com/tr/pricing" target="_blank">Kurumsal kullanıcı hesabının fiyatı</a><br>

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>
<?php
} else if ($lang == 3) {
?>

    <div class="porsline-welcome-page">

        <section class="porsline-intro-cover">

            <div class="porsline-header-text">

                <h1>أهلاً بك إلى إضافة ووردبرس بُرس لاين</h1>

                <br>

                <ul>

                    <li>الأمان والاستقرار</li>

                    <li>تثبيت سهل واستخدام بسيط</li>

                    <li>إمكانيات احترافية وإنشاء تقارير متقدمة</li>

                    <li>مجاني ودعم قوي</li>

                </ul>
                <br>
                <div style="text-align: center;">

                    <a class="porsline-cta" href="<?php echo admin_url('admin.php?page=porsline-settings'); ?>">ابدأ العمل مع الإضافة</a>

                </div>

            </div>

            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/header-ar.png', __FILE__)); ?>" alt="">

            </div>

        </section>



        <br>

        <iframe id="video-frame" width="80%" height="400" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0" src="https://www.youtube.com/embed/UQIe5FyDZgg"></iframe>

        <br><br>

        <div style="text-align: center;">

            <a class="porsline-cta" href="<?php echo admin_url('admin.php?page=porsline-settings'); ?>">ابدأ العمل مع الإضافة</a>

        </div>



        <br><br>
        <h2>هل تحتاج إلى استمارات جاهزة ومصممة مسبقاً؟</h2>
        <section class="porsline-intro-cover" style="border-radius: 4px !important; background-color: rgba(102, 175, 233, 0.30);">

            <div class="porsline-header-text">

                <br><br>

                <p style="font-size: 18px; color:#465773;">بمساعدة الاستمارات الجاهزة في بُرس لاين يمكنك تصميم استماراتك وإكمالها بشكل أسرع ووضعها في صفحات موقعك بشكل أبسط.</p>

                <br>

                <a class="porsline-cta" target="_blank" href="https://porsline.com/ar/survey-templates/">مشاهدة مزيد من الاستمارات</a>

            </div>

            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/forms-templates-ar.png', __FILE__)); ?>" alt="">

                <br><br>

            </div>

        </section>



        <br><br><br>



        <h2>ما الذين يقوله مستخدمو بُرس لاين عنا؟</h2>

        <br>



        <div class="testimonial-box testimoni-desktop">

            <div class="testimonial-item" id="testimonial-first-item" style="margin-right: 317px;">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/EDA-YUREK.jpg', __FILE__)); ?>" alt="أيدا يوريك - Porsline" class="testimonial-avatar">

                <div>
                    <h3 class="testimonial-name">أيدا يوريك</h3>

                    <h4 class="testimonial-position">متخصصة الموارد البشرية في مجموعة مدي لايف</h4>

                    <p class="testimonial-description text-justify">
                        
                    تعرفت على بُرس لاين نتيجة البحث في الإنترنت. إن العمل معهم سهل جداً وهم ينتبهون إلى جميع تفاصيل العمل بعناية، وإذا واجهت أية مشكلة فإن فريق دعم بُرس لاين جاهز للرد، وهم يجيبون بصبر وسرعة بشأن أية مشاكل تطرأ لديك كما أنهم دائماً معك في عملية إجراء أي استبيان. إن السعر المعقول لحسابات مستخدمي بُرس لاين يمنحك الفرصة لتجربة هذه الخدمة.
                            
                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/ebrahimi-opt.jpg', __FILE__)); ?>" alt="بويان إبراهيمي - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">بويان إبراهيمي</h3>

                    <h4 class="testimonial-position">رئيس مجوعة أبحاث السوق وذكاء الأعمال في شركة شاتل</h4>

                    <p class="testimonial-description text-justify">
                    سمحت لنا بُرس لاين بجمع البيانات بأقصر وقت وبأعلى دقة، فقد كانت الطرق التقليدية تكلفنا عدة أضعاف من المال والوقت حتى نقوم بهذا. ميزتا بُرس لاين اللتان جعلتا منا عملاء مخلصين هما: أولاً لوحة العمل سهلة الاستخدام للغاية وثانياً سرعة ورشاقة فريق الدعم والتطوير في بُرس لاين.
                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/ural-bora.jpg', __FILE__)); ?>" alt="أورال بورا - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">أورال بورا</h3>

                    <h4 class="testimonial-position">مؤسس شركة كاينتا للبناء</h4>

                    <p class="testimonial-description text-justify">
                        
                    تعرفت على بُرس لاين من خلال البحث في الإنترنت. من السهل جداً العمل معهم وهم يهتمون بالتفاصيل بشكل سليم ودقيق. فريق دعم بُرس لاين يرد على جميع أسئلتك من المبيعات إلى الدعم الفني. سنكون عملاء لبُرس لاين طالما أنهم مستمرون بتقديم خدماتهم. شكراً جزيلاً لعائلة بُرس لاين.
                            
                    </p>
                </div>
            </div>

            <div class="testimonial-item">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/testimonials/Sadik-Kilinc.jpg', __FILE__)); ?>" alt="صادق كلنش - Porsline" class="testimonial-avatar">
                <div>
                    <h3 class="testimonial-name">صادق كلنش</h3>

                    <h4 class="testimonial-position">مدير الشؤون الإدارية - فندق بطرس</h4>

                    <p class="testimonial-description text-justify">
                        
                    نقوم في فندقنا بعمل جميع أنواع الاستبيانات والاستمارات. أريد أن أقول إن بُرس لاين هو
                                أداة بسيطة وذكية للغاية للقيام بهذا العمل. من خلال عدد قليل من عمليات السحب والإفلات
                                البسيطة يمكنك إنشاء استبيانك ومن خلال بنيته التحتية الرائعة والقوية يمكنك تقييم نتائجك
                                كما يمكنك أيضاً إجراء تحليلات احترافية للغاية. ميزة الشرط من بُرس لاين تساعد كثيراً في
                                تصميم أسئلتك. إنهم ممتازون جداً من حيث السعر والدعم. إنني أقترح عليكم استخدام هذه الخدمة
                                بالتأكيد.
                            
                    </p>
                </div>
            </div>

        </div>

        <h2>هل تحتاج إلى إمكانيات أكثر؟</h2>
        <section class="porsline-intro-cover" style="border-radius: 4px !important; background-color: rgba(102, 175, 233, 0.30);">
            <div class="porsline-header-img">

                <img src="<?php echo esc_url(plugins_url( '../assets/img/welcome/more-options-ar.png', __FILE__)); ?>" alt="">

            </div>
            <div class="porsline-header-text" style="float: unset;">
                <br><br>
                <p style="font-size: 18px; color: #465773;">
                    باترقية حسابك إلى الحساب الاحترافي أو التنظيمي يمكنك الاستفادة من إمكانيات إضافية في إنشاء الاستمارات. </p>
                <br>

                <a class="porsline-cta" target="_blank" href="https://porsline.com/ar/pricing/">مشاهدة الأسعار والترقية</a>
            </div>
        </section>
        <br><br>
        <h2>نقاط مفيدة عن إضافة ووردبرس بُرس لاين</h2>

        <br><br><br>

        <div class="container landing" style="margin-top: -40px; margin-right: 8%;">

            <div class="row">

                <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-sm-12 col-xs-12">

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq0" onclick="openFaq(0)" class="landing-faq-btn">

                            <h3>لماذا نستخدم إضافة إنشاء الاستمارات بُرس لاين؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq0" class="collapse landing-faq-text">

                            <p>من الأفضل استخدام إضافة إنشاء الاستمارات بُرس لاين بدلاً من الأدوات الأخرى وذلك لأسباب متعددة نذكر منها ما يلي:</p>

                            <br>

                            <ol style="list-style: persian; font-size: 14px;">

                                <li>إضافة بُرس لاين لإنشاء الاستمارات هي إضافة إنشاء الاستمارات العربية الوحيدة الآمنة بنسبة 100% والتي لا تتسبب بأية مشكلة لموقعك.</li>

                                <li>إضافة ووردبرس بُرس لاين لإنشاء الاستمارات هي إضافة فعالة مستقرة ومتوفرة بشكل دائم، ويمكنك الاستفادة من الدعم الخاص بها دائماً.</li>

                                <li>العمل على إضافة ووردبرس بُرس لاين لإنشاء الاستمارة بسهولة القيام بعدة عمليات سحب وإفلات بسيطة، ومع توافر الاستمارات الجاهزة فإنه يمكنك إنشاء استماراتك خلال عدة ثوانٍ.</li>

                                <li>إضافة بُرس لاين العربية لإنشاء الاستمارات توفر لك إمكانية إنشاء مختلف أنواع استمارات مثل استمارة الاتصال واستمارة التسجيل واستمارة التوظيف واستمارة تسجيل طلب وغيرها من أنواع الاستمارات بشكل مجاني.</li>

                                <li>بمساعدة إضافة ووردبرس بُرس لاين الاحترافية لإنشاء الاستمارات يمكنك الاستفادة من مزايا خاصة من أجل إنشاء مختلف أنواع الاستمارات التفاعلية والمتقدمة.</li>

                            </ol>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq1" onclick="openFaq(1)" class="landing-faq-btn">

                            <h3>كيف نقوم بإنشاء استمارة واستبيان جديد في بُرس لاين؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq1" class="collapse landing-faq-text">

                            <p>
                            إن إنشاء الاستبيانات والاستمارات الإلكترونية في بُرس لاين سهل جداً ويتم من خلال عدد قليل من عمليات السحب والإفلات، حيث يكفي الدخول إلى لوحة العمل الخاصة بك واختيار إنشاء استبيان جديد وسحب أنواع الأسئلة التي تريدها على الشاشة وكتابة محتواها، وبعد ذلك يمكنك اختيار أحد التصاميم الجرافيكية واللونية الموجودة أو إنشاء تصميم خاص بك واستخدامه.
                            <p>

                                <a href="https://porsline.com/ar/videos#QmFCD" target="_blank">الفيديو التوضيحي لإنشاء استمارة في بُرس لاين</a>

                            </p>

                            <p>

                                <a href="https://porsline.com/blog/ar/%d8%a7%d9%84%d8%af%d9%84%d9%8a%d9%84-%d8%a7%d9%84%d8%b4%d8%a7%d9%85%d9%84-%d8%a5%d9%84%d9%89-%d8%aa%d8%b5%d9%85%d9%8a%d9%85-%d8%a7%d8%b3%d8%aa%d8%a8%d9%8a%d8%a7%d9%86-%d9%81%d8%b9%d8%a7%d9%84/" target="_blank">المقالة التوضيحية لإنشاء استمارة واستبيان</a>

                                <br>

                            </p>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq2" onclick="openFaq(2)" class="landing-faq-btn">

                            <h3>ما هي الفروقات بين أداة إنشاء الاستمارات بُرس لاين وبين جرافيتي فورمز والأدوات الأخرى المشابهة؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq2" class="collapse landing-faq-text">

                            <p>إذا كنت تريد عدم تعريض موقعك للخطر وتريد البقاء في مأمن من المخترقين وإذا كانت سهولة العمل باستخدام الإضافة مهمة بالنسبة لك ولم تكن تريد تحمُّل تكلفة إضافية من أجل إنشاء استمارة في ووردبرس وأخيراً إذا كنت بحاجة إلى إمكانيات احترافية متقدمة فعليك استخدام إضافة ووردبرس بُرس لاين فقط. نبين في الجدول التالي أهم الاختلافات بين بُرس لاين وبين الأدوات الأخرى مثل جرافيتي فورمز وغيرها.<br></p>



                            <table>

                                <thead>

                                    <tr style="background-color: #2994FC;">

                                        <th style="background-color: #ecf0f1"></th>

                                        <th>بُرس لاين</th>

                                        <th>Gravity Forms (جرافيتي فورمز)</th>

                                        <th>Wpform (دبليو بي فورم)</th>

                                        <th>Ninjaforms (نينجا فورمز)</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>النسخة المجانية</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                            <br>

                                            <span>النسخة الأصلية لهذه الإضافة ليست مجانية وإن كانت هناك نسخة مجانية في الأسواق فهي مخترقة</span>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>سعر النسخة المدفوعة</td>

                                        <td>25 يورو شهرياً</td>

                                        <td>ليست لديه خطة شهرية/ 59 دولار سنوياً</td>

                                        <td>ليست لديه خطة شهرية/ 49 دولار سنوياً</td>

                                        <td>ليست لديه خطة شهرية/ 39 دولار سنوياً</td>

                                    </tr>

                                    <tr>

                                        <td>إمكانيات متقدمة لإنشاء استمارات باللغة العربية</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>الإشعار بالبريد الإلكتروني</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>الإشعار بالرسائل النصية القصيرة</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>إمكانية الاستخدام للمستخدمين والمواقع المختلفة في الخطة المجانية</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>التقارير وتحليل النتائج في الخطة المجانية</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>إضافة أنواع الشروط</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>إمكانية تحميل ملفات</td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>إنشاء استمارات في بيئة ووردبرس</td>

                                        <td>

                                            <i class="fas fa-times-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                        <td>

                                            <i class="fas fa-check-circle"></i>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq3" onclick="openFaq(3)" class="landing-faq-btn">

                            <h3>ما هي المزايا التي تحصل عليها بالترقية إلى مستوى المستخدم الاحترافي؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq3" class="collapse landing-faq-text">

                            <p>
                            في مستوى المستخدم المجاني يمكنك إنشاء أي عدد تريده من الاستبيانات ووضع أي عدد تريده من الأسئلة فيها وإرسالها للآخرين، لكنك بحاجة إلى ترقية حسابك إلى المستوى الاحترافي من أجل استخدام إمكانيات مثل تحميل ملف وتنشيط أكثر من استبيان في الوقت نفسه والحصول على أكثر من 100 إجابة من كل استبيان. يرجى فتح الرابط التالي لمشاهدة الإمكانيات الأخرى ومعرفة تكلفة الترقية إلى مستوى الحساب الاحترافي.
                            </p>

                            <p>

                                <a href="https://porsline.com/ar/pricing" target="_blank">إمكانيات مستوى المستخدم الاحترافي وتكلفة الترقية إلى المستخدم الاحترافي</a>

                                <br>

                            </p>

                        </div>

                    </div>

                    <div class="text-justify landing-faq-all">

                        <button type="button" data-toggle="collapse" data-target="#faq4" onclick="openFaq(4)" class="landing-faq-btn">

                            <h3>ما هي المزايا التي تحصل عليها بالترقية إلى مستوى المستخدم التنظيمي؟</h3>

                            <i class="fa fa-angle-down"></i>

                        </button>

                        <div id="faq4" class="collapse landing-faq-text">

                            <p>تحتاج للترقية إلى المستوى التنظيمي من أجل استخدام إمكانيات مثل ويب هوك والمصادقة على المجيبين وتسجيل الموقع الجغرافي للمجيبين وغيرها من الإمكانيات المتقدمة. يرجى فتح الرابط التالي لمشاهدة الإمكانيات الأخرى ومعرفة تكلفة الترقية إلى مستوى الحساب التنظيمي.<br>

                            </p>

                            <p>

                                <a href="https://porsline.com/ar/pricing" target="_blank">إمكانيات مستوى المستخدم التنظيمي وتكلفة الترقية إلى المستخدم التنظيمي</a><br>

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>
<?php
}

