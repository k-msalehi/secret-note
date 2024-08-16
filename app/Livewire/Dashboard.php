<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $sentences = [
            "خاطرات، بهترین سرمایه‌های زندگی‌اند.",
            "زندگی مثل یک جاده طولانی است، پیچ‌ها و فراز و نشیب‌ها اجتناب‌ناپذیرند.",
            "هر فصل از زندگی، زیبایی‌های خاص خودش را دارد.",
            "گاهي اوقات باید ایستاد و بوی گل‌های کنار جاده را استشمام کرد.",
            "دوست داشتن و دوست داشته شدن، بزرگترین نعمت زندگی است.",
            "همه ما به نوعی در حال جستجوی خوشبختی هستیم.",
            "گاهی باید خودت را گم کنی تا بتوانی دوباره خودت را پیدا کنی.",
            "زندگی شبیه به یک کتاب است؛ هر فصل جدید، یک ماجراجویی تازه.",
            "انسان‌ها با رؤیاهایشان زنده‌اند.",
            "لبخند زدن به خود، اولین قدم به سمت خوشبختی است.",
            "زندگی پر از لحظات کوچک شادی است که باید آن‌ها را در آغوش بگیریم.",
            "دوست داشتن دیگران، یعنی دوست داشتن خودت.",
            "هرچقدر بیشتر به دنبال خوشبختی بگردی، کمتر آن را پیدا می‌کنی.",
            "گاهی وقت‌ها باید اجازه بدهی اتفاقات به خودی خود رخ دهند.",
            "خوشبختی در لحظات ساده زندگی پنهان شده است.",
            "کودکان بهترین معلمان ما هستند؛ آن‌ها زندگی را با چشمانی پر از حیرت می‌بینند.",
            "زمانی که خودت را دوست داشته باشی، همه چیز بهتر می‌شود.",
            "بزرگترین خوشبختی‌ها در چیزهای کوچک یافت می‌شوند.",
            "زندگی یک هدیه است؛ هر روز باید آن را با عشق باز کنیم.",
            "اگر به دنبال شادی هستی، در لحظه حال زندگی کن.",
            "هنر در پیدا کردن زیبایی در چیزهای ساده است.",
            "همیشه چیزی برای یادگیری وجود دارد.",
            "زندگی با دوستان و خانواده زیباتر است.",
            "پایان یک چیز، همیشه آغاز چیزی جدید است.",
            "هر لحظه یک شانس برای خلق خاطرات است.",
            "زندگی مثل یک آینه است، اگر لبخند بزنی، او هم لبخند می‌زند.",
            "دنیا جای زیبایی است اگر به دیدگاهت دقت کنی.",
            "هر روز یک شروع تازه است، یک فرصت برای تغییر.",
            "خوشبختی از درون تو سرچشمه می‌گیرد، نه از چیزهایی که داری.",
            "خوشبختی در دنبال کردن رویاهات پیدا می‌شود.",
            "ذهن تو قدرتمندتر از هر مانعی است که با آن روبرو می‌شوی.",
            "راز موفقیت در این است که هرگز دست نکشی.",
            "بزرگترین خوشحالی در زندگی، انجام کاری است که دیگران فکر می‌کردند نمی‌توانی انجام دهی.",
            "اگر می‌خواهی فردا بهتر از امروز باشد، باید تغییر کنی.",
            "هیچ چیزی غیرممکن نیست اگر به آن باور داشته باشی.",
            "خوشبختی از انجام کارهایی که دوست داری سرچشمه می‌گیرد.",
            "باور کن که می‌توانی، و در نیمه راه هستی.",
            "هیچ وقت برای یادگیری و رشد دیر نیست.",
            "کسی که به دنبال کمال است، هیچ‌گاه شکست نمی‌خورد.",
            "درخشش خورشید همیشه پس از طوفان می‌آید.",
            "زندگی فرصتی است که نباید آن را به راحتی از دست داد.",
            "برای آنچه که می‌خواهی بجنگ، نه برای آنچه که از دست داده‌ای.",
            "وقتی به جایی رسیدی که دیگر نمی‌توانی تحمل کنی، فقط کمی بیشتر تحمل کن.",
            "امروز یک روز جدید است، یک فرصت برای شروع دوباره.",
            "وقتی نمی‌توانی به عقب برگردی، فقط به جلو نگاه کن.",
            "وقتی از زندگی لذت می‌بری، زندگی هم از تو لذت می‌برد.",
            "موفقیت با کسانی است که از شکست نمی‌ترسند.",
            "هرگز به کسی اجازه نده که لبخندت را از تو بگیرد.",
            "هر کاری که می‌کنی، با عشق انجام بده.",
            "زندگی در لحظه اکنون اتفاق می‌افتد، نه در گذشته یا آینده.",
            "به هر چیزی که می‌خواهی دست پیدا کنی، فقط کافی است که به خودت باور داشته باشی.",
            "موفقیت نه یک مقصد، بلکه یک سفر است.",
            "زندگی کوتاه است، پس باید با تمام وجود زندگی کنی.",
            "هر روز یک ماجراجویی جدید است.",
            "زمانی که دیگران خوابیده‌اند، بلند شو و به سمت اهدافت حرکت کن.",
            "زندگی شبیه به بازی شطرنج است، هر حرکتت را با دقت انتخاب کن.",
            "هیچ کس نمی‌تواند آینده تو را پیش‌بینی کند، مگر خودت.",
            "امید تنها چیزی است که در تاریک‌ترین لحظات به تو نور می‌بخشد.",
            "رویاهات به واقعیت تبدیل می‌شوند وقتی که با تمام وجود به آنها ایمان داشته باشی.",
            "آرامش درون تو کلید همه درهای بسته است.",
            "هیچ چیز به اندازه لبخند در مواجهه با مشکلات قدرتمند نیست.",
            "زندگی زیباست، فقط کافی است به آن از زاویه‌ای دیگر نگاه کنی.",
            "وقتی همه چیز بر ضد توست، به خاطر داشته باش که هواپیما هم برخلاف باد پرواز می‌کند.",
            "وقتی نمی‌توانی یک مشکل را حل کنی، زاویه دیدت را تغییر بده.",
            "هر روز یک هدیه است، پس آن را با عشق باز کن.",
            "زندگی همواره به تو چیزی می‌دهد که از آن بیاموزی.",
            "وقتی نمی‌توانی تغییر کنی، هیچ چیز تغییر نمی‌کند.",
            "گاهی اوقات باید خودت را گم کنی تا خودت را پیدا کنی.",
            "هر مانعی در زندگی یک فرصت جدید برای یادگیری است.",
            "تغییر از درون شروع می‌شود، نه از بیرون.",
            "هر گام کوچکی که برمی‌داری، تو را به هدفت نزدیک‌تر می‌کند.",
            "وقتی نمی‌توانی وضعیت را تغییر دهی، دیدگاهت را تغییر بده.",
            "بهتر است در مسیر دشوار موفق شوی تا در مسیر آسان شکست بخوری.",
            "هر روز فرصت تازه‌ای است برای تبدیل شدن به بهترین نسخه از خودت.",
            "هیچ وقت دست از تلاش برندار، موفقیت فقط یک قدم دورتر است.",
            "هرگز اجازه نده کسی رویاهات رو به تو تحمیل کنه.",
            "اگر به چیزی باور داری، برایش بجنگ.",
            "هر روز یک فرصت تازه است تا خودت را بهتر کنی.",
            "خودت را باور کن، تو توانایی انجام کارهای بزرگی را داری.",
            "پیشرفت کوچک هر روز بهتر از تلاش بزرگ و یکباره است.",
            "زندگی به کسانی لبخند می‌زند که هرگز تسلیم نمی‌شوند.",
            "هر گام کوچکی که برمی‌داری تو را به موفقیت نزدیک‌تر می‌کند.",
            "هیچ چیزی غیرممکن نیست، اگر به آن باور داشته باشی.",
            "هرگز نگذار ترس از شکست تو را از پیشرفت بازدارد.",
            "مسیر موفقیت از شکست‌ها و تجربه‌ها ساخته می‌شود.",
            "زمانی که به رویایت برسی، همه سختی‌ها ارزشش را خواهند داشت.",
            "موفقیت به کسی تعلق دارد که هرگز دست از تلاش برندارد.",
            "برنده‌ها کسانی هستند که هرگز تسلیم نمی‌شوند.",
            "هر شکست یک گام به سمت پیروزی است.",
            "تلاش امروزت آینده‌ات را می‌سازد.",
            "به یاد داشته باش که سخت‌ترین زمان‌ها نیز به پایان می‌رسند.",
            "برای رسیدن به هدف‌هایت باید از راحتی‌هایت دست بکشی.",
            "هیچ کس نمی‌تواند به اندازه تو برای موفقیت خودت تلاش کند.",
            "هر لحظه فرصتی است برای شروع دوباره.",
            "بزرگترین دشمن تو، شک و تردیدهای خودت است.",
            "امروز زمان تغییر و پیشرفت است، نه فردا.",
            "قدرت درون تو بی‌نهایت است، فقط باید آن را کشف کنی.",
            "برای آنچه می‌خواهی باید بجنگی، هیچ چیز آسان به دست نمی‌آید.",
            "تلاش امروزت آینده بهتری برایت رقم می‌زند.",
            "هیچ چیز با ارزش بدون تلاش به دست نمی‌آید.",
            "اگر به رویاهایت ایمان داری، هیچ چیزی نمی‌تواند تو را متوقف کند.",
            "هرگز به خاطر سختی‌ها تسلیم نشو، آن‌ها بخشی از مسیر موفقیت هستند.",
            "هر قدم کوچک تو را به موفقیت نزدیک‌تر می‌کند.",
            "فقط با ایمان به خودت می‌توانی به بالاترین قله‌ها برسی.",
            "هر روز فرصتی است تا بهتر از دیروز باشی.",
            "راه رسیدن به موفقیت، پشتکار و تلاش بی‌پایان است.",
            "بهترین زمان برای کاشت یک درخت، بیست سال پیش بود. دومین زمان بهترین، اکنون است.",
            "برای موفقیت، ابتدا باید به خودت اعتماد کنی.",
            "زندگی کوتاه است، اما فرصت‌ها بی‌نهایت هستند.",
            "بهترین راه برای پیش‌بینی آینده، ساختن آن است.",
            "هرگز اجازه نده کسی بگوید نمی‌توانی.",
            "تو از آنچه فکر می‌کنی قوی‌تری.",
            "مسیر موفقیت پر از موانع است، اما این تو هستی که باید ادامه دهی.",
            "هیچ چیز نمی‌تواند تو را متوقف کند، اگر به هدفت ایمان داشته باشی.",
            "هر لحظه‌ای که تسلیم نشوی، به موفقیت نزدیک‌تر می‌شوی.",
            "تو می‌توانی به هر چیزی که می‌خواهی دست یابی، فقط باید تلاش کنی.",
            "هیچ کسی به جز خودت نمی‌تواند موفقیت را برایت رقم بزند.",
            "امروز یک قدم به هدفت نزدیک‌تر شو.",
            "وقتی نمی‌توانی چیزی را تغییر دهی، خودت را تغییر بده.",
            "بهترین انتقام، موفقیت است.",
            "هر روز فرصتی تازه است تا به بهترین نسخه از خودت تبدیل شوی.",
            "موفقیت نیازمند تمرکز، تعهد و پشتکار است.",
            "هر لحظه‌ای که به تلاش ادامه می‌دهی، به هدفت نزدیک‌تر می‌شوی.",
            "هیچ موفقیتی بدون تلاش به دست نمی‌آید.",
            "هرگز نگذار هیچ‌کس به تو بگوید که نمی‌توانی.",
            "هر قدم کوچک تو را به هدفت نزدیک‌تر می‌کند.",
            "موفقیت نتیجه پشتکار و تلاش بی‌وقفه است.",
            "هر روز یک شروع تازه است، از آن استفاده کن.",
            "اگر به خودت ایمان داشته باشی، هیچ چیزی نمی‌تواند تو را متوقف کند.",
            "هرگز از رویاهات دست نکش.",
            "تلاش امروز، موفقیت فردا را می‌سازد.",
            "هرگز نگذار ترس از شکست تو را از تلاش بازدارد.",
            "به یاد داشته باش که هر شکست، یک قدم به سمت موفقیت است.",
            "موفقیت نیازمند تلاش، صبر و ایمان است.",
            "هرگز از تلاش برای بهتر شدن دست نکش.",
            "هر روز یک فرصت تازه است تا به هدف‌هایت نزدیک‌تر شوی.",
            "تغییر از درون تو آغاز می‌شود.",
            "هرگز تسلیم نشو، حتی وقتی شرایط سخت است.",
            "تو قوی‌تر از چیزی هستی که فکر می‌کنی.",
            "هرگز نگذار شک و تردید تو را از مسیرت دور کند.",
            "هر چیزی که می‌خواهی به دست بیاوری، فقط کافی است به خودت ایمان داشته باشی.",
            "هیچ چیز نمی‌تواند جلوی تو را بگیرد، اگر به هدفت ایمان داشته باشی.",
            "موفقیت نیازمند تعهد و پشتکار است.",
            "هر روز فرصتی تازه است تا بهترین نسخه از خودت باشی.",
            "به یاد داشته باش که هیچ چیز با ارزش بدون تلاش به دست نمی‌آید.",
            "هیچ وقت از شکست‌هایت دست نکش، آن‌ها تو را قوی‌تر می‌کنند.",
            "تو می‌توانی به هر چیزی که می‌خواهی برسی، فقط کافی است تلاش کنی.",
            "هیچ کس نمی‌تواند جلوی موفقیت تو را بگیرد، مگر خودت."

        ];
        $sentence = $sentences[array_rand($sentences)];

        return view('livewire.dashboard', compact('sentence'));
    }
}
