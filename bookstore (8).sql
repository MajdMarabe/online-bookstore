-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 05:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `authorEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `authorname`, `authorEmail`) VALUES
(2, 'أحمد الشقيري', 'AhmedShuqairi@gmail.com'),
(3, 'خولة حمدي', 'KhawlaHamdi@gmail.com'),
(4, 'نعيم صبري', 'NaimSabry@gmail.com'),
(5, 'نجيب محفوظ', 'NaguibMahfouz@gmail.com'),
(6, 'جوزيه ماورو', 'JoseMauro@gmail.com'),
(7, 'جاك لندن', 'JackLondon@gmail.com'),
(8, 'أوليفيا لاينغ', 'OliviaLaing@gmail.com'),
(9, 'محمد إبراهيم', 'MuhammadIbrahim@gmail.com'),
(10, 'منال عبد الحميد', 'ManalAbdelHamid@gmail.com'),
(11, 'مصطفى زهران', 'MustafaZahran@gmail.com'),
(12, 'مجموعة مؤلفين', ''),
(13, 'إسماعيل عرفة', 'IsmailArafa@gmail.com'),
(14, 'عبده خال', 'AbdouKhal@gmail.com'),
(15, 'زينب لعوج', 'ZainabLaoj@gmail.com'),
(16, 'علوية صبح', 'EalawitSubh@gmail.com'),
(17, 'طارق قطامي', 'TariqQatami@gmail.com'),
(18, 'ناصر أبو سرور', 'NasserAbuSrour@gmail.com'),
(19, 'غسان كنفاني', 'GhassanKanfani@gmail.com'),
(20, 'مصطفى حسني', 'MustafaHosni@gmail.com'),
(21, 'ساندرا سراج', 'SandraSiraj@gmail.com'),
(22, 'محمود عبد الشكور', 'MahmoudAbdelShakour@gmail.com'),
(23, 'بول هاردينغ', 'PaulHarding@gmail.com'),
(24, 'واسيني الأعرج', 'WasiniAl\'aeraj@gmail.com'),
(25, 'Bahaa Taher', 'BahaaTaher@gmail.com'),
(26, 'Colleen Hoover', 'ColleenHoover@gmail.com'),
(27, 'James Clear', 'JamesClear@gmail.com'),
(28, 'Sally Rooney', 'SallyRooney@gmail.com'),
(29, 'Malcolm Gladwell', 'MalcolmGladwell@gmail.com'),
(30, 'Tahereh Mafi', 'TaherehMafi@gmail.com'),
(31, 'Madeline Miller', 'MadelineMiller@gmail.com'),
(32, 'Robin Sharma', 'RobinSharma@gmail.com'),
(33, 'Holly Black', 'HollyBlack@gmail.com'),
(34, 'Marcus Aurelius', 'MarcusAurelius@gmail.com'),
(35, 'Erin Morgenstern', 'ErinMorgenstern@gmail.com'),
(36, 'Lynn Messi', 'LynnMessi@gmail.com'),
(37, 'Stephanie Garber', 'StephanieGarber@gmail.com'),
(38, 'Héctor Gar', 'HéctorGar@gmail.com'),
(39, 'Adam Grant', 'AdamGrant@gmail.com'),
(40, 'Hager El Hadidi', 'HagerElHadidi@gmail.com'),
(41, 'Kathryn Stockett', 'KathrynStockett@gmail.com'),
(42, 'Vianna Stibal', 'ViannaStibal@gmail.com'),
(43, 'Yann Martel', 'YannMartel@gmail.com'),
(44, 'Minerva Radcliffe', 'MinervaRadcliffe@gmail.com'),
(45, 'Johann Hari', 'JohannHari@gmail.com'),
(46, 'Raven Kennedy', 'RavenKennedy@gmail.com'),
(47, 'Nita Prose', 'NitaProse@gmail.com'),
(48, 'Ana Huang', 'AnaHuang@gmail.com'),
(49, 'Xenia Nikolskaya', 'XeniaNikolskaya@gmail.com'),
(50, 'Lilith Dorsey', 'LilithDorsey@gmail.com'),
(51, 'Tracy Wolff', 'TracyWolff@gmail.com'),
(52, 'Matt Kahn', 'MattKahn@gmail.com'),
(53, 'وليد طاهر', 'WalidTaher@gmail.com'),
(54, 'إيون كولفير', 'EonCulver@gmail.com'),
(55, 'أوليفر جيفرز', 'OliverJeffers@gmail.com'),
(56, 'الحسن بنمونة', 'Al-HassanPanmouna@gmail.com'),
(57, 'علا منجد', 'OlaMunjid@gmail.com'),
(58, 'أميمة عز الدين', 'OmaimaEzzedine@gmail.com'),
(59, 'ميرام خميس', 'MeramKhamis@gmail.com'),
(60, 'إيمان نجيب', 'ImanNajeeb@gmail.com'),
(61, 'منى عثمان', 'MonaOthman@gmail.com'),
(62, 'روجيه باريه', 'RogerBarre@gmail.com'),
(63, 'دومينيك ديمير', 'DominicDemer@gmail.com'),
(64, 'أوريليان دوكوري', 'AurelienDoucoure@gmail.com'),
(65, 'حمزة جبار', 'HamzaJabbar@gmail.com'),
(66, 'سماح كامل', 'SamahKamil@gmail.com'),
(67, 'May Heggy', 'MayHeggy@gmail.com'),
(68, 'Katherine', 'Katherine@gmail.com'),
(69, 'Alex Allan', 'AlexAllan@gmail.com'),
(70, 'David Walliams', 'DavidWalliams@gmail.com'),
(71, 'Kate Messner', 'KateMessner@gmail.com'),
(72, 'Dan Santat', 'DanSantat@gmail.com'),
(73, 'Suzy Capozzi', 'SuzyCapozzi@gmail.com'),
(74, 'Scott Cawthon', 'ScottCawthon@gmail.com'),
(75, 'Tom Fletcher', 'TomFletcher@gmail.com'),
(76, 'Jess French', 'JessFrench@gmail.com'),
(77, 'Igloo Books', 'IglooBooks@gmail.com'),
(78, 'Imagine That', ''),
(79, 'Sonallah Ibrahim', 'SonallahIbrahim@gmail.com'),
(80, 'Azmi Bishara', 'AzmiBishara@gmail.com'),
(81, 'May Telmissany', 'MayTelmissany@gmail.com'),
(82, 'Hoda Barakat', 'HodaBarakat@gmail.com'),
(83, 'Fatiha Bouzidi', 'FatihaBouzidi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `author_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `allqantity` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `bookname`, `price`, `picture`, `author_id`, `language_id`, `allqantity`, `description`) VALUES
(2, 'أربعون', 260, 'imgs/9789770935552-600x875.jpg', 2, 1, 1000, 'الله تبارك وتعالى لايريد منا الكمال ، ولكنه يريد منا السعي المستمر نحوه\r\nألخص فى هذا الكتاب رحلتى عبر 40 عاما في هذه الدنيا رحلة الصراع ومحاولة الترقي المستمر بحثاً عن السلام الداخلي\r\n'),
(3, 'أرني أنظر إليك', 180, 'imgs/9789778200645-450x600.jpg', 3, 1, 1000, 'تضطرب أنفاسك ، وتيمِّم بصرك شطر الجبال الشَّامخة قبالتك. يجفُّ لعابك وينعقد لسانك. كم مضى عليك من دهور مذ خاطبته آخر مرَّة؟ لقد ظلَّ قرارك الأخير بعبادة خالقك على طريقتك معلَّقا. كم مرَّت بك من ليالٍ عجافٍ لم تفلح فيها في مناجاته رغم محاولاتك؟ هل نسيت كيف تكون خلوة العبد بربِّه؟'),
(4, 'أنشودة الحنين', 130, 'imgs/9789770937839-450x600.jpg', 4, 1, 999, ' وفى رواية “أنشودة الحنين” يتابع القارئ قصة حب مستحيلة، لكنها حدثت، وهكذا شاءت الأقدار، بلا حسابات، في مدينة القاهرة ووسط ضجيجها، ويتعرف القارئ على عماد رب الأسرة، والأب لثلاثة أبناء، وفاطمة التي عادت من المهجر بأمريكا، بعد تجربة زواج غير موفق، فانفصال، عادت وهي تعاني الإخفاق، وحيدة بعد رحيل والديها، فهل كان ذلك لفرط الاحتياج؟! للضعف الإنساني! حدث ذلك فجأة وبلا مقدمات.. بلا حسابات.. ثم فجأة أفاقا على قسوة الحياة وتعقيداتها.. فالعجز.. وكان ما كان '),
(5, 'الطريق', 120, 'imgs/9789778639766-450x600.jpg', 5, 1, 996, ' رواية تدور حول صابر الرحيمي، الذي يضطر إثر وفاة أمه للبحث عن أبيه كي يُنقِذه من الضياع والإفلاس. وبين إلهام النقية المُحبَّة وكريمة المثيرة المُغوية، يتشتت صابر ويسقط في الهاوية. انتقلت الرواية لشاشة السينما عام 1964 '),
(6, 'المرايا', 175, 'imgs/9789778639735.jpg', 5, 1, 1000, ' رواية مبتكرة وغير مسبوقة في الأدب العربي، تُقدَّم على شكل بورتريهات لشخصيات واقعية ومتقاطعة مع حياة محفوظ نفسه، وتُلقي الضوء على ما خَفِي من جوانب حياتهم، لذا يُدرجها بعض النُّقاد تحت مسمى أدب النميمة '),
(7, 'قلب الليل', 100, 'imgs/9789778616156.jpg', 5, 1, 1000, ' تدور الرواية في إطار حوار فلسفي حول حياة جعفر الراوي، الباحث عن الحرية وعن ثروة جده سيد الراوي، والذي كان “الجنون المقدس” دافعه لكي يعيش حياته بطولها وعرضها، فيتمرد على الجد صاحب الجاه والثراء ويتخلى عن حياته المريحة والمرسومة بدقة في كنف جده، ولا يمانع في خسارة أي شيء مقابل حرية الاختيار، فيخسر عائلته ومكانته الاجتماعية بل وماله واستكمال تعليمه واستقراره في البيت الكبير، يتزوج من أجل الحب فقط والرغبة الجامحة، ويواجه غضب الجد وحرمانه من الميراث بصلابة وتصميم، ويخوض غمار الحياة وحيدًا باحثًا عن معنى حياته وتجربته المدهشة. نُشرت الرواية عام 1975 وانتقلت لشاشة السينما عام 1989'),
(8, 'الشحاذ', 120, 'imgs/9789778639797.jpg', 5, 1, 1000, ' رواية تدور حول حالة الإفلاس المعنوي والعدمية التي يُعانيها عمر الحمزاوي، والأزمة الوجودية وحالة الضجر التي تُفسد عليه شغفه بالحياة وعلاقته بأفراد أسرته. انتقلت الرواية لشاشة السينما عام 1973'),
(9, 'هيا نوقظ الشمس', 240, 'imgs/9789778212020-450x600.jpg', 6, 1, 1000, ' زيزا، طفل السادسة المصاب بحنان طافح يسيل من الأشياء البسيطة من حوله، المطل على عالم الكبار بأحلامه التي تشرق من شجرة برتقاله الرائعة، المربك لقواعدهم، الباحث فيها عن يد حانية و إن كانت وهمًا يرتعش على صفحة نهر وحيد ، ها هو يبعد الآن عن عائلته وقد صار في الحادية عشرة، مفردًا، مصابًا بالحنين، مرتب الهندام، نظيفًا وباردًا من الوحدة، مشدودًا مثل وتر بين المدرسة الإعدادية ودروس البيانو.أي ثقل يمكن أن يزنه عالم كهذا على كتفي طفل ينزلق إلى المراهقة محملًا بذكريات الشوارع المغبرة والأزقة والدفء الحارق الذي يحوم حيث يسكن الفقر؟ كيف يشعر هذا الفتى وقد صار يسكن بيت عائلة جديدة ثرية ـ تحول فيها من شيطان أزرق إلى ملاك مطيع؟ هل يظل على ذلك النحو، وقد صار قلبه الجديد يكلمه من داخله ويضيء عزلته بشعلة الأحلام ذاتها، ويخوص معاركه الصغيرة، وصولًا إلى لسعة الحب الأولى؟ '),
(10, 'نداء البرية', 100, 'imgs/9789778241594-768x1152.jpg', 7, 1, 1000, ' الكلب باك الأليف المُدلل يجد نفسه بين ليلة وضحاها مختطفًا، مسجونًا، يُنكّل به في سياتل.لا يعرف كيف قادته رحلته إلى ألاسكا، لكن لا يستقر به المقام كثيرًا، فينتقل إلى صقيع كندا، حيث تُصبح الكلاب حلقة مهمة في سلسلة التنقيب عن الذهب.على باك أن يتعلم كيف ينجو خارج حدود مناطقه الآمنة، كيف يواكب الحياة القاسية، وينجو في البرد القارس '),
(11, 'المدينة الوحيدة', 155, 'imgs/9789776972087-2-450x600.jpg', 8, 1, 1000, ' كتاب المدينة الوحيدة مغامرات في فن البقاء وحيدا تأليف أوليفيا لاينغ .. هنالك العديد من الأشياء التي لا يمكن للفن فعلها. لا يمكن للفن إحياء الموتى، لا يمكن للفن حل المشاكل بين الأصدقاء، أو حل مشكلة الاحتباس الحراري. ورغم هذا، فإن للفن بعض الوظائف الخارقة للعادة، قدرة غريبة للتفاوض بين البشر، خاصة بين أولئك الذين لم يسبق لهم الالتقاء من قبل والذين بإمكانهم أن يثروا ويكملوا حياة بعضهم البعض. وله أيضًا قدرة على خلق الألفة؛ لديه طريقة مميزة يشفي بها الجروح، وأفضل من هذا بإمكانه أن يوضح لنا أنه ليست كل الجروح بحاجة للشفاء وليست كل الندوب قبيحة'),
(12, 'سبع سنبلات', 130, 'imgs/9789778061758.jpg', 9, 1, 1000, ' نكبر ونتعلم درس مهم جدًا في الحياة؛ إن كل موقف قلنا صعب يعدي.. مر الوقت وعدى وأصبح ماضي.. نكبر ونفهم إن الظروف لازم تحصل، لكن التعويض أكيد في النهاية.. التعويض أحيانًا بيكون بشكل أجمل من تخيلاتنا.. نكبر وندرك إن قصص الحب غير المكتملة جايز تكون من اجمل ما حصل، لولاها كان زمان سذاجة الطفولة بتكبر معانا، وكان زمان القلب متعلمش ازاي يجمد ويفهم.. نكبر ونفضل لسه بنتعلم ولسه بنحب ولسه بنقع وبنتعلم ازاي نقوم وازاي ربنا بياخد بإيدينا كل مرة '),
(13, 'الخيمياء', 75, 'imgs/9789777701655-450x600.jpg', 10, 1, 1000, ' في وسط السجلات والأضابير المكدسة بقصص الجرائم وحوادث القتل الشنيعة، نعثر على مجموعة غريبة التفاصيل من الحوادث والقضايا، جرائم كان سلاح القتل وأداة الإيذاء فيها هو العلوم السوداء الغامضة، رجال ونساء وهبوا أنفسهم للشيطان، فبحثوا عن مصادر القوة واللذة والسيطرة، عبر استعمال الأخلاط والوصفات الغريبة، فاستعانوا بأرواح الشياطين وتعاطوا علوم السحر الأسود، والخيمياء القديمة بصورتها المشوهة المرعبة، ومارسوا أعمالًا مروعة من أجل تحقيق طموحات ورغبات تهيمن عليها الشعوذة المرعبة، وتقديس أرواح الشر والحقد '),
(14, 'صحابة النبي', 45, 'imgs/9789776692589-450x600.jpg', 11, 1, 1000, ' هذا الكتاب يجوب بنا في رحاب عظماء الصحابة، فحين نعود إلى سير هؤلاء الغر الميامين من خيرة الرجال، وصفوة الصفوة من أصحاب النبي – صلى الله عليه وسلم – تبهرنا أضواء عزتهم وعبادتهم وقوتهم المادية والمعنويةَ في الحياة، ونشعر أننا أمام كواكب نيرة، ونجوم زاهرة أنارت قلوبنا، وأرشدتنا إلى طرق الهدى ومسالك الخير، وجمعتنا على الله عز وجل، وردتنا إلى الفطرة التي فطرنا عليها'),
(15, 'وسط البلد', 800, 'imgs/9789770938041-450x600.jpg', 12, 1, 1000, ' إن مبادرة كتاب وسط البلد: ما وراء الحكايات هي الأولى من نوعها، ونأمل أن تكون انطلاقة لتقليد جميل. حتى في زمن الإنستجرام، لم يزل حلم كل مصور أن ينشر كتابا حقيقيا: شيئا ملموسا يمكن الرجوع إليه مرات ومرات. يأمل كتاب وسط البلد: ما وراء الحكايات أن ينشئ أرضية مستدامة لخطاب التصوير الفوتوغرافي وأن يساعد في حفظ التراث البصري الاستثنائي لوسط البلد.{ زينيا نيكولسكايا }'),
(16, 'الهشاشة النفسية', 210, 'imgs/9789776972247-450x600.jpg', 13, 1, 1000, ' “إحدى نتائج هشاشتنا النفسية هي أننا نُضخِّم أحيانًا أيَّ مشكلة تظهر في حياتنا إلى درجة تصويرها ككارثة وجودية، توجد عملية تُسمَّى في علم النفس بـ Pain catastrophizing. هذه العملية عبارة عن حالة شعورية تعتريك عند وقوعك في مشكلةٍ ما، تجعلك تؤمن أن مشكلتك أكبر من قدرتك على التحمُّل، فتشعر بالعجز والانهيار عند وقوع المشكلة\nهذا الكتاب إذن يحلل ما يحدث لفئة من الشباب والفتيات الذين تأثروا بظاهرة الهشاشة النفسية، ثم يقدم الحلول العملية المقترحة لتقوية النفي وتدريبها على الصبر وتحمل المسؤولية\n'),
(17, 'وشائج ماء', 640, 'imgs/AB21.jpg', 14, 1, 1000, ' لا أستذكر الكيفية التي أذعنتُ فيها لأن أُدفَن، بل كنت مشاركاً في دفن نفسي. صور مشتّتة، ولحظات وشمت النفس وشما غليظا، لا أعرف مدى تأثيرها عليّ. بالتأكيد لم أخُر أو أنكسر، هي تجربة يمكن القول عنها إني جربت أن أموت وأنا حيّ.وصل نبشنا إلى عمق القبر، ثمة عظام متقاربة تبين موضع كل عضو، طُلب مني التجرد من ملابسي كلها، وحمل جزء من حبلي السري المحفوظ في أحد البرطمانات والاستلقاء على ظهري. كانت الوصية الأخيرة أن أضع يد جدي على سرّتي البازغة من بطني كثمرة الجوز. فعلت كل ما طلبته جدتي وأمي. ألقت جدتي غطاء أسود، وأمرتني بوضعه على وجهي، وانهالت هي وابنتها على إهالة التراب عليّ '),
(18, 'سويت أمريكا', 490, 'imgs/AB22.jpg', 15, 1, 1000, ' اللحظة الأولى في رواية «سويت أمريكا» بُنِيتْ على كذبة كبيرة في الجهة الغربية من فريلاند: اعتبار جيل (جلال) عربياً مسلماً مندساً. تنفتح الرواية على هذه الحالة من الغموض، الكل يتكلم عن هذا الرجل الغامض والغريب الذي يتخفّى من وراء الترميمات؟ جيل وهو في سيارته في اتجاه بيته، يسمع الانفجارات ويقرأ في اللافتات التي تدين الأجنبي أو الغريب. كان مع كايا زوجته وابنتيه بالتبني يامي ونويمي، وراءهما صديقه فريديريكو على متن شاحنته ينقلون الأغراض نحو السكن الجديد الذي اشتراه جيل بعد أن رممه. لم تكن العائلة تعرف أن العنصرية والحقد المنظم ينتظرانهم جميعاً في المنعرج. في مقهى اللايتكوفي تدبر المجموعة العنصرية خططها الجهنمية لدفعه إلى الخروج من المدينة بعد أن تمّ كشفت اسمه الحقيقي، أو ُخيِّل لهم ذلك: جيل=جلال. ويسري الخبر كالنار في الهشيم، بينما يستمر جيل في عمله المعتاد كمرمم للمعالم الدينية، ترميم كنيسة فريلاند، كما سبق له أن فعل ذلك مع الكنيس اليهودي والمسجد'),
(19, 'أن تعشق الحياة', 455, 'imgs/AB23.jpg', 16, 1, 1000, ' في لحظة رحيل يوسف، تُفتح ذاكرةٌ متَّقدةٌ يقودها جسدٌ متشنِّج. تزداد تشجنُّاتُ بسمة، لكنَّ صورةَ يوسف تستدعي البسمةَ دائمًا. ما بين ذاكرةِ ماضٍ مرصوفٍ بالفقد والحبّ، وحاضرٍ أكثرَ قسوةً لمدنٍ عربيَّةٍ تتهاوى، تتشبَّث بسمة بجسدها الذي لا يتوقَّف عن خيانتها. فمن قال إنَّ حياتَنا وأجسادَنا ليست كحكايا مدننا؟ ومَن منَّا ليعرف إنْ كانت رقصتُنا الأخيرةُ هي رقصةَ الوداع، أم بدايةً جديدةً؟ '),
(20, 'التوافق النفسي', 455, 'imgs/AB24.jpg', 17, 1, 1000, 'يشرح كيفية توافق الافراد نفسيا'),
(21, 'حكاية جدار', 560, 'imgs/AB25.jpg', 18, 1, 1000, ' لا، هذه ليستْ حكايتي. إنَّها حكايةُ جدارٍ قرَّرَ أن يختارَني شاهدًا على ما يقول ويفعل […] لقد أعطاني الجدار صِفاتي وألقابي كلّها منذ بداية المشوار، في المخيَّم، على هامش المدينة، في السجن، وفي قلب امرأةٍ أو على أطرافه'),
(22, 'دنيا – رواية', 420, 'imgs/AB26.jpg', 16, 1, 1000, ' أن حكاية الدنيا هي حكاية الخوف والأوهام، هكذا فكرت بعدما وضعت الأوراق جانباً ورحت أمتلئ بأوهام أبطال الحكاية التي قرأتها، وأتذكرهم واحداً واحداً، جدتي سعدية وعمي عبد الله وفريال وسهى وملغي وروز ورؤوف ودلال والدكتور شوقي وحسنه وكل، كل أبطال الحكاية. وحامت في ذاكرتي صورة أبي المسجى وقوقه تحلق أطياف حكاياته أطيان لا أعرف الآن إن كانت تشبه تلك التي راودت الكتابة في وهم الكتابة '),
(23, 'سيدة المقام', 420, 'imgs/AB27.jpg', 24, 1, 1000, ' وتدور أحداث رواية سيدة المقام حول مريم راقصة البالية والتي تتلقى رصاصة غادرة من أستاذها. وتحمل هذه الرواية رمزية كبيرة، حيث يرمز للجزائر بمريم والتي عانت كثيرًا من في ثمانينيات القرن الماضي '),
(24, 'مريم الحكايا', 420, 'imgs/AB28.jpg', 16, 1, 1000, ' ظلّت علويّة لأسابيع تنهض في اللَّيل من عزّ نومها، فتجد نفسَها تبكي ماءً ووحلاً يبلّلان الوسادة. دموعها لا تستأذن خدّها لتهبط عليه وعلى الأوراق البيض الفارغة كلّما اقتربتْ منها وجلستْ خلف مكتبها لتحاول أن تكتب الروايةَ من جديدطلبتُ منها أن تُعيد كتابةَ الرواية، ولكنَّها قالت لي: حاولتُ ولم أستطع، الإنسان لا يُولد مرّتين، وكذلك الحكايات. فالحكاية حين تُحكى مرّةً أخرى تصبح حكاية أخرى علويّة صُبُح روائيَّة لبنانيَّة. لها «نوم الأيّام»، «دنيا» و«اسمُه الغرام». تُتَرْجَمُ حاليًّا أعمالُها إلى لغاتٍ عدّةحائزة جائزةَ السلطان قابوس للإبداع الروائيّ عام 2006 '),
(25, 'أم سعد', 210, 'imgs/AB29.jpg', 19, 1, 1000, ' أم سعد، رواية للكاتب الفلسطيني غسان كنفاني صدرت في بيروت سنة 1969م، تدور أحداثها الرواية حول شخصية حقيقية حسب أقول كنفاني وتتناول مجتمع اللاجئين الفلسطينيين وبدايات العمل الفدائي'),
(26, 'عالم ليس لنا', 280, 'imgs/AB210.jpg', 19, 1, 1000, 'N/A'),
(28, 'العاشق', 210, 'imgs/AB212.jpg', 19, 1, 1000, 'N/A'),
(29, 'القناع', 230, 'imgs/AB213.jpg', 20, 1, 1000, ' لقد خلقك الله وأودع فيك من صفاته على قدرك .. فجعلك سميعًا بصيرًا قويًا رحيمًا .. وأشرف أحوال الإنسان عندما يعى بهذه الصفات في عبادة الله ونفع نفسه وخدمة الخلق.  ولكن لو سيطر الخوف على الإنسان لحجب عنه شخصيتة الربانية الصادقة. يخاف أن يسعى بقوة في الحلال فيستباح .. أو يصون العشرة ويبادر بالمعروف فيؤمن جانبه ولا يقام له وزن ..  ولو استطاع التغلب على هذا الخوف الشيطاني لعاش بشخصيته الربانية الصادقة بلا قناع'),
(30, 'ماذا لو ؟', 180, 'imgs/AB214.jpg', 21, 1, 1000, 'ماذا لو لم يُحكمنا الزمان والمكان؟ ماذا لو كان بإمكانك أن تعيش حياةً أخرى بطريقتك الخاصة؟ رُبما يقابل بطل حكايتنا “شمس” فتاة تُغيِّر مفهوم الحياة بالنسبة إليه، ربما يستعيد الحبيبة التي خسرها لقلة نضجه ولم يستطع تخطيها؛ أو يتحول إلى عبقري يحقق الأحلام المستحيلة، ورُبما يجد كُل من فقدهم بالموت ما زالوا أحياء يُرزقون. في هذه المُغامرة سنخطو خارج حدود عالمنا التقليدي، سنقترب من المجهول، وننتصر على الخوف مما قد يحدث خارج بقاع الأرض المحدودة. لكن المواجهة ستحدث، وسيتحتم على “شمس” الإجابة عن كل الأسئلة.رحلة مُمتعة غاية في التشويق نخوضها برفقة الحُب والأمل، في حكاية استثنائية لو تمسكنا فيها بضميرنا الفطري، سيرشدنا في النهاية إلى طريق الوصول، وربما طريق العودة أيضًا'),
(31, 'ألوان أغسطس', 120, 'imgs/AB215.jpg', 22, 1, 1000, ' إنه أغسطس، ولقاءٌ تصنعه الصدفة، ضجرٌ يصنع حكاية متداخلة، لن تكشف أوراقها إلا في الصفحات الأخيرة. لعبةٌ سرديةٌ، تستقصي جسد الشخصيات، وجسد المدينة اللا مبالية، وأطيافُ أفكارٍ هائمة، تبحث عن جسد الكتابة. في هذه الرواية البديعة يقف الكاتب ”محمود عبد الشكور” شاهدًا على ضمير مدينة القاهرة من خلال شخصيات روايته، وتظل المدينة حاضرةً بتفاصيلَ تعكس ثنائية الواقع والخيال '),
(32, 'المتجول', 180, 'imgs/AB216.jpg', 23, 1, 1000, ' ثمانية أيام فقط ويفارق ”جورج” الحياة بعد عمرٍ مديد خاض خلاله الكثير من التجارب الإنسانية.. تُرى أي ذكرى ستبقى عالقة في ذهن هذا العجوز، وأي ذكرى سيختار مَحْوها بإرادته؟ تلك رواية تدور في فترة زمنية قصيرة جدًّا، لكنها تستعيد ماضيًا طويلًا لحياة أجيال مختلفة من عائلة ”كروسبي” التي اجتاحت الحياة، واستَقت منا خبرات واسعة، وعانت كثيرًا من ويلات الظروف والأقدار المفاجئة. نبدأها مع “جورج” الحفيد الذي صار يبلغ من العمر 80 عامًا الآن، فنعرف أكثر عن شغفه وتمسُّكه بالعمل والنشاط رغم الجسد الواهن، وصولًا إلى الجد “كروسبي” الذي بث غرابة أطواره في عائلته بالكامل'),
(33, 'Sunset Oasis', 210, 'imgs/EB1.jpg', 25, 2, 1000, 'The desert is a space in which people discover themselves, says the author Bahaa Taher, and the desert is where his novel Sunset Oasis is set, in the last years of the 19th century. It depicts the life of a middle-aged government official, Mahmoud Abd el Zahir, who is sent by his British superiors to govern the oasis of Siwa as a punishment for his involvement in the failed Urabi revolt in 1882.'),
(34, 'It Ends With Us', 425, 'imgs/EB2.jpg', 26, 2, 998, '(2016) A brave and heartbreaking novel that digs its claws into you and doesn’t let go, long after you’ve finished it Anna Todd, author of the After series A glorious and touching read, a forever keeper USA Today Will break your heart while filling you with hope Sarah Pekkanen, Perfect Neighbors SOMETIMES THE ONE WHO LOVES YOU IS THE ONE WHO HURTS YOU THE MOST. With this bold and deeply personal novel, It Ends With Us is a heart-wrenching story and an unforgettable tale of love that comes at the ultimate price.'),
(35, 'Atomic Habits', 730, 'imgs/EB3.jpg', 27, 2, 999, '(2019) The #1 New York Times bestseller. Over 3 million copies sold!  Tiny Changes, Remarkable Results  No matter your goals, Atomic Habits offers a proven framework for improving–every day. James Clear, one of the world’s leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results. Atomic Habits will reshape the way you think about progress and success, and give you the tools and strategies you need to transform your habits–whether you are a team looking to win a championship, an organization hoping to redefine an industry, or simply an individual who wishes to quit smoking, lose weight, reduce stress, or achieve any other goal. '),
(36, 'Normal People', 470, 'imgs/EB4.jpg', 28, 2, 1000, '(2019) THE NUMBER ONE SUNDAY TIMES AND TOP FIVE NEW YORK TIMES BESTSELLER A BBC ONE DRAMA ADAPTATION CURRENTLY IN PRODUCTION WINNER OF THE COSTA NOVEL AWARD 2018 WINNER OF THE AN POST IRISH BOOK AWARDS NOVEL OF THE YEAR WINNER OF NOVEL OF THE YEAR AND BOOK OF THE YEAR AT THE BRITISH BOOK AWARDS WINNER OF THE SPECSAVERS NATIONAL BOOK AWARDS INTERNATIONAL AUTHOR OF THE YEAR LONGLISTED FOR THE MAN BOOKER PRIZE 2018 LONGLISTED FOR THE WOMEN’S PRIZE FOR FICTION 2019 Connell and Marianne grow up in the same small town in the west of Ireland, but the similarities end there. Guardian SHORTLISTED FOR THE IRISH NOVEL OF THE YEAR AWARD 2019 SHORTLISTED FOR THE RSL ENCORE PRIZE 2019 LONGLISTED FOR THE RATHBONES FOLIO PRIZE 2019.'),
(37, 'Outliers', 325, 'imgs/EB5.jpg', 29, 2, 1000, 'Why do some people achieve so much more than others? Can they lie so far out of the ordinary? In his provocative and inspiring book, Malcolm Gladwell looks at everyone from rock stars to professional athletes, software billionaires to scientific geniuses, to show that the story of success is far more surprising, and more fascinating, than we could ever have imagined. He reveals that it’s as much about where we’re from and what we do, as who we are – and that no one, not even a genius, ever makes it alone. Outliers will change the way you think about your own life story, and about what makes us all unique. Like Blink, this is a landmark work that will simultaneously delight and illuminate.'),
(38, 'Shatter Me', 360, 'imgs/EB6.jpg', 30, 2, 1000, '(2018) X-Men meets The Handmaid’s Tale in this first instalment in an epic and romantic YA fantasy trilogy perfect for fans of Sarah J. Maas, Victoria Aveyard’s The Red Queen, Netflix’s Stranger Things and Leigh Bardugo’s Six of Crows.A fragile young teenage girl is held captive. Locked in a cell by The Reestablishment – a harsh dictatorship in charge of a crumbling world. This is no ordinary teenager. Juliette is a threat to The Reestablishment’s power. A touch from her can kill – one touch is all it takes. But not only is she a threat, she is potentially the most powerful weapon they could have. Juliette has never fought for herself before but when she’s reunited with the one person who ever cared about her, the depth of the emotion and the power within her become explosive ..'),
(39, 'Circe', 470, 'imgs/EB7.jpg', 31, 2, 1000, '(2019) Woman. Witch. Myth. Mortal. Outcast. Lover. Destroyer. Survivor. CIRCE. In the house of Helios, god of the sun and mightiest of the Titans, a daughter is born. Circe is a strange child – not powerful and terrible, like her father, nor gorgeous and mercenary like her mother. Scorned and rejected, Circe grows up in the shadows, at home in neither the world of gods or mortals. But Circe has a dark power of her own: witchcraft. When her gift threatens the gods, she is banished to the island of Aiaia where she hones her occult craft, casting spells, gathering strange herbs and taming wild beasts.'),
(40, '5 AM Club', 815, 'imgs/EB8.jpg', 32, 2, 1000, '(2018) Legendary leadership and elite performance expert Robin Sharma introduced The 5am Club concept over twenty years ago, based on a revolutionary morning routine that has helped his clients maximize their productivity, activate their best health and bulletproof their serenity in this age of overwhelming complexity. Now, in this life-changing book, handcrafted by the author over a rigorous four-year period, you will discover the early-rising habit that has helped so many accomplish epic results while upgrading their happiness, helpfulness and feelings of aliveness. Through an enchanting?and often amusing?story about two struggling strangers who meet an eccentric tycoon who becomes their secret mentor.'),
(41, 'Cruel Prince', 320, 'imgs/EB9.jpg', 33, 2, 1000, '(2018) Of course I want to be like them. They’re beautiful as blades forged in some divine fire. They will live forever. As Jude grows older, she realises that she will need to take part in the dangerous deceptions of the fey to ever truly belong. Dramatic and thrilling fantasy blends seamlessly with enthralling storytelling to create a fully realised and seductive world, brimful of magic and romance.'),
(42, 'Meditations', 360, 'imgs/EB10jpg.jpg', 34, 2, 1000, 'Originally written only for his personal consumption, Marcus Aurelius’s Meditations has become a key text in the understanding of Roman Stoic philosophy. This Penguin Classics edition is translated with notes by Martin Hammond and an introduction by Diskin Clay. Written in Greek by an intellectual Roman emperor without any intention of publication, the Meditations of Marcus Aurelius offer a wide range of fascinating spiritual reflections and exercises developed as the leader struggled to understand himself and make sense of the universe. He was succeeded by his natural son, thus ending the period of the adoptive emperors. If you enjoyed Meditations, you might like Seneca’s Letters from a Stoic, also available in Penguin Classics.'),
(43, 'Night Circus', 360, 'imgs/EB11.jpg', 35, 2, 1000, '(2011) The circus arrives without warning. No announcements precede it. It is simply there, when yesterday it was not. Within the black-and-white striped canvas tents is an utterly unique experience full of breathtaking amazements. It is called Le Cirque des Rêves, and it is only open at night. Unbeknownst to them both, this is a game in which only one can be left standing. Despite the high stakes, Celia and Marco soon tumble headfirst into love, setting off a domino effect of dangerous consequences, and leaving the lives of everyone, from the performers to the patrons, hanging in the balance.'),
(44, 'Little Women', 280, 'imgs/EB12.jpg', 36, 2, 1000, '(2019) Generations of readers young and old, male and female, have fallen in love with the March sisters of Louisa May Alcott’s most popular and enduring novel, Little Women. Here are talented tomboy and author-to-be Jo, tragically frail Beth, beautiful Meg, and romantic, spoiled Amy, united in their devotion to each other and their struggles to survive in New England during the Civil War. It is no secret that Alcott based Little Women on her own early life.Little Women brought her lasting fame and fortune, and far from being the “girl’s book” her publisher requested, it explores such timeless themes as love and death, war and peace, the conflict between personal ambition and family responsibilities, and the clash of cultures between Europe and America.'),
(45, 'Ugly Love', 375, 'imgs/EB13.jpg', 26, 2, 1000, '(2014) When Tate Collins finds airline pilot Miles Archer passed out in front of her apartment door, it is definitely not love at first sight. They wouldn’t even go so far as to consider themselves friends. But what they do have is an undeniable mutual attraction. He doesn’t want love and she doesn’t have time for a relationship, but their chemistry cannot be ignored. Once their desires are out in the open, they realize they have the perfect set-up, as long as Tate can stick to two rules: Never ask about the past and don’t expect a future. Tate is determined that she can handle it, but when she realises that she can’t, will she be able to say no to her sexy pilot when he lives just next door! This new romance from Colleen Hoover will have you laughing and crying in equal measure – definitely her best book yet.'),
(46, 'Caraval', 425, 'imgs/EB14.jpg', 37, 2, 1000, '(2018) The acclaimed New York Times bestseller! Welcome, welcome to Caraval–Stephanie Garber’s sweeping tale of the unbreakable bond between two sisters. It’s the closest you’ll ever find to magic in this world. Scarlett has been told that everything that happens during Caraval is only an elaborate performance. But she nevertheless becomes enmeshed in a game of love, heartbreak, and magic with the other players in the game. And whether Caraval is real or not, she must find Tella before the five nights of the game are over, a dangerous domino effect of consequences is set off, and her sister disappears forever.\r\nWelcome, welcome to Caraval . . . beware of getting swept too far away.'),
(47, 'Ikigai', 605, 'imgs/EB15.jpg', 38, 2, 1000, '(2017) Ikigai translates as ‘a reason to live’ or ‘a reason to jump out of bed in the morning’. It’s the place where your needs, desires, ambitions, and satisfaction meet: a point of perfect balance, and perfect fulfilment. On the Japanese island of Okinawa, people live longer than anywhere else in the world. There, finding your ikigai is considered the key to longevity – and to happiness. The Okinawans know that all lives are valuable; for them, your ikigai is the lens that will help bring your value into focus. Both inspiring and comforting, this book will help you uncover your own ikigai, and equip you to change your life. Leave stress and urgency behind, and throw yourself into finding your purpose, nurturing your friendships, and pursuing your passions. Make every day of your life joyful and meaningful with Ikigai.'),
(48, 'Think Again', 645, 'imgs/EB16.jpg', 39, 2, 1000, '(2021) Instant #1 New York Times Bestseller Discover how rethinking can lead to excellence at work and wisdom in life Intelligence is usually seen as the ability to think and learn, but in a rapidly changing world it might matter more that we can rethink and unlearn. Organizational psychologist Adam Grant is an expert on opening other people’s minds-and our own. As Wharton’s top-rated professor and the bestselling author of Originals and Give and Take, he tries to argue like he’s right but listen like he’s wrong. Think Again invites us to let go of views that are no longer serving us well and prize mental flexibility, humility, and curiosity over foolish consistency. If knowledge is power, knowing what we don’t know is wisdom.'),
(49, 'Zar', 600, 'imgs/EB21.jpg', 40, 2, 1000, 'An examination of the history and waning culture of zar in Egypt, and the world in which Muslim women negotiate relations with spirits  Zar is both a possessing spirit and a set of reconciliation rites between the spirits and their human hosts: living in a parallel yet invisible world, the capricious spirits manifest their anger by causing ailments for their hosts, which require ritual reconciliation, a private sacrificial rite practiced routinely by the afflicted devotees. '),
(50, 'The Help', 300, 'imgs/EB22.jpg', 41, 2, 1000, 'Three ordinary women are about to take one extraordinary step.  Twenty-two-year-old Skeeter has just returned home after graduating from Ole Miss. She may have a degree, but it is 1962, Mississippi, and her mother will not be happy till Skeeter has a ring on her finger. Skeeter would normally find solace with her beloved maid Constantine, the woman who raised her, but Constantine has disappeared and no one will tell Skeeter where she has gone. In pitch-perfect voices, Kathryn Stockett creates three extraordinary women whose determination to start a movement of their own forever changes a town, and the way women—mothers, daughters, caregivers, friends—view one another. A deeply moving novel filled with poignancy, humor, and hope, The Help is a timeless and universal story about the lines we abide by, and the ones we don’t.'),
(51, 'ThetaHealing', 730, 'imgs/EB23.jpg', 42, 2, 1000, 'Discover the worldwide phenomenon of ThetaHealing® and how it can help you to achieve transformational healing in this revised and updated edition of Vianna Stibal’s definitive guide. ThetaHealing® is essentially applied quantum physics. Using a theta brain wave, which until now was believed to be accessible only in deep sleep or yogi-level meditation, the practitioner is able to connect with the energy of All That Is – the energy in everything – to identify issues with and witness healings on the physical body, and to identify and change limiting beliefs.'),
(52, 'Life of Pi', 375, 'imgs/EB24.jpg', 43, 2, 1000, 'One boy, one boat, one tiger . . .  After the tragic sinking of a cargo ship, a solitary lifeboat remains bobbing on the wild, blue Pacific. The only survivors from the wreck are a sixteen-year-old boy named Pi, a hyena, a zebra (with a broken leg), a female orang-utan – and a 450-pound Royal Bengal tiger. The scene is set for one of the most extraordinary and best-loved works of fiction in recent years.'),
(53, 'Love Spells', 470, 'imgs/EB25.jpg', 44, 2, 1000, '“Filled with spells, charms, rituals, and potions by pro witchcraft practitioners, carry this pocket-size spell book with you to attract new and improve existing relationships.  Love Spells contains love potions, charms, and other methods for finding and keeping romance in your life. These spells will help you find your true love, promote fertility, encourage honesty, and even decide when it’s time to end a relationship.'),
(54, 'Stolen Focus', 520, 'imgs/EB26.jpg', 45, 2, 1000, 'Is your ability to focus and pay attention in free fall?  You are not alone. The average office worker now focuses on any one task for just three minutes. But it’s not your fault. Your attention didn’t collapse. It has been stolen.  Internationally bestselling author Johann Hari shows twelve deep factors harming our focus. Once we understand them, together, we can take back our minds.'),
(55, 'Glow', 470, 'imgs/EB27.jpg', 46, 2, 1000, 'My life has been shaped and controlled by the greed of others, but that ends now.  I have burned down the court of King Midas and from those flames, I will rise and wield my own power.  The problem is, when you turn against a King – everyone turns against you.'),
(56, 'The Maid', 415, 'imgs/EB28.jpg', 47, 2, 1000, '#1 NEW YORK TIMES BESTSELLER “GOOD MORNING AMERICA BOOK CLUB PICK. —Glamour  Molly Gray is not like everyone else. She struggles with social skills and misreads the intentions of others. Her gran used to interpret the world for her, codifying it into simple rules that Molly could live by. A Clue-like, locked-room mystery and a heartwarming journey of the spirit, The Maid explores what it means to be the same as everyone else and yet entirely different—and reveals that all mysteries can be solved through connection to the human heart.'),
(57, 'Twisted Hate', 470, 'imgs/EB29.jpg', 48, 2, 1000, '“Discover the addictive world of the Twisted series from TikTok sensation, Ana Huang!  Read Twisted Hate now for a steamy enemies to lovers romance.  He hates her . . . almost as much as he wants her. Twisted Hate is a steamy enemies with benefits/enemies to lovers romance. It’s book three in the Twisted series but can be read as a standalone.'),
(58, 'Twisted Games', 470, 'imgs/EB210.jpg', 48, 2, 1000, 'Discover the addictive world of the Twisted series from TikTok sensation, Ana Huang!  Read Twisted Games now for a steamy, angsty forbidden romance.  She can never be his . . . but he’s taking her anyway. He has never once been tempted to break those rules . . . until her.  Bridget von Ascheberg. A princess with a stubborn streak that matches his own and a hidden fire that reduces his rules to ash. She’s nothing he expected and everything he never knew he needed.  Day by day, inch by inch, she breaks down his defences until he’s faced with a truth he can no longer deny: he swore an oath to protect her, but all he wants is to ruin her. Take her.'),
(59, 'Twisted Lies', 470, 'imgs/EB211.jpg', 48, 2, 1000, 'Discover the addictive world of the Twisted series from TikTok sensation, Ana Huang!  He’ll do anything to have her . . . including lie. She’s the object of his darkest desires, the only puzzle he can’t solve. And when the opportunity to get closer to her arises, he breaks his own rules to offer her a deal she can’t refuse.  Every monster has their weakness. She’s his.  His obsession. His addiction. His only exception.'),
(60, 'Dust', 900, 'imgs/EB212.jpg', 49, 2, 1000, 'Egypt’s Forgotten Architecture leads us seductively into some of the most breathtaking architectural spaces of Egypt’s recent past, filled with a sense of both the immense weight and impermanence of history.'),
(61, 'Water Magic', 730, 'imgs/EB213.jpg', 50, 2, 1000, 'The first entry in Llewellyn’s exciting new Elements of Witchcraft series, Water Magic reveals the amazing possibilities of using water in your modern practice. Once you learn to access the enormous depths of this life-giving and powerful element, it will enhance your magic and help you grow into a better version of yourself.  Cleansing and strong, the power of water is all around you and in you. Learn the histories and wisdom of rivers, lakes, and oceans, as well as water’s relationship to the wheel of the year. Explore water and its manifestations in mythology and lore and meet the gods and goddesses who rule over the element.'),
(62, 'Charm', 710, 'imgs/EB214.jpg', 51, 2, 1000, 'It’s a truth universally known?at least according to Grace?that everything is my fault. But I have a nasty suspicion that Grace isn’t as human as she thinks, and she’s the one keeping us trapped. Now we’ll have to work together not only to survive, but to save all those we’ve come to call family who live here.'),
(63, 'All for Love', 935, 'imgs/EB215.jpg', 52, 2, 1000, 'Throughout the book, Matt shares ten essential principles?mercy, worthiness, bravery, and more?that help us access the highest and most loving qualities within ourselves and those around us. Each chapter contains personal stories and real-world applications, guiding us to reach into our own hearts and give one another the respect, validation, and encouragement needed to make it through the evolutionary shifts before us?shifts into greater unity and greater love.'),
(64, 'Maybe Now', 425, 'imgs/EB216.jpg', 26, 2, 1000, 'The long-awaited finale to the New York Times bestselling Maybe Someday series returns with all the characters you fell in love with.\r\nWhat is more important? Friendship, loyalty, or love?\r\nRidge and Sydney are thrilled to finally be together guilt-free. But as the two of them navigate this freedom, Warren and Bridgette’s relationship is as tumultuous as ever, and Maggie grapples with her illness.'),
(65, 'كمال وشكري', 140, 'imgs/CB1.jpg', 53, 3, 1000, ' وتتوالى الأيام وتكثر الحكايات والألعاب يحكى شكري لكمال ويحكي كمال لشكرى من الفنانين الشبان المهتمين اهتماماً خاصاً بكتب الأطفال، تخرج من كلية الفنون الجميلة قسم ديكور عام 1992، يعمل رسام صحفي، مصمم ومؤلف كتب أطفال، مصمم عرائس، مصمم مواد دعاية، وكذلك فنان تشكيلي'),
(66, 'صديقي المتخيل', 200, 'imgs/CB2.jpg', 54, 3, 996, ' الصداقة مفهوم كبير، ولكن حتى الصغار بوسعهم إدراكه وإدراك كل التفاصيل الصغيرة والجميلة التي لا تكون إلا بين الأصدقاء'),
(67, 'القلب والزجاجة', 200, 'imgs/CB3.jpg', 55, 3, 1000, ' هذه القصة التي تحرك المشاعر تتناول – بشكل مميّز – موضوعاً حساساً، هي قصة فتاة أثقلت قلبها ثنائية الحب والفقد ثم تعاملت مع ذلك بخفة استثنائية وذكرتنا أن الأمل موجود دائماَ.  أوليفر كاتب إنجليزي له طريقته الإبداعية في تناول القضايا والتعبير عنها بالقصة والرسم  '),
(68, 'في رأسي غابة', 150, 'imgs/CB4.jpg', 56, 3, 1000, ' ماذا يحدث في رؤوسنا حين نقرأ، خاصة من يقرأ قصص الغابات، ستنمو في رأسه الأشجار وتجري الأنهار، سيأتي نقار الخشب كي يوقظه من النوم، وستظن الأرانب أن شعره جزر وتعتقد القطط أن أنفه فأر. هذا الكتاب رحلة جميلة سريالية تشجع الطفل على القراءة بشكل غير مباشر وتطلعه عما يحدث في عقله حين تدخل إليه أفكار جديدة عبر القراءة'),
(69, 'أنا محبوب', 70, 'imgs/CB5.jpg', 57, 3, 1000, ' رحلتي من بطن أمي إلى أحضان الدنيا رحلة سعيدة مليئة بالحب والحنان والثقة في أن العالم ينتظرني بفارغ الصبر'),
(70, 'فلنصنع السعادة', 50, 'imgs/CB6.jpg', 56, 3, 1000, ' فلنصنع السعادة هو دعوة لنا جميعا صغاراً وكباراً، أن نتشارك هذه المتعة بالحلم والأمل في صنع السعادة ونشرها والاستمتاع بها مع الآخرين'),
(71, 'قلب سلمى', 110, 'imgs/CB7.jpg', 58, 3, 1000, 'ذات يوم استيقظت سلمى من نومها وهى تشكو وجعًا بصدرهًا، ذهبت مع والديها إلى المستشفى، فحصها الطبيب جيدًا، وضع السماعة الطبية ناحية قلبها وقال: وكأنى أسمع صوت البحر، يبدو أن هناك مشكلة صغيرة بقلبك يا سلمى  '),
(72, 'بوبو صاحبي', 195, 'imgs/CB8.jpg', 59, 3, 1000, ' عن باسل ودبدوب إسمه بُوبُو، قوة صداقتهم خلت باسل يزعل جداً لما بُوبُو كِبر وإتبهدل بس حبه ليه خلاه يدور على حل برة الصندوق للحفاظ على أعز صديق  قصة عن الصداقة، الزكاة وتقدير ممتلكاتنا مهما كانت جديدة ولا قديمة '),
(73, 'الرسامة نونو', 200, 'imgs/CB9.jpg', 59, 3, 1000, ' نادية بنت ذكية ومبدعة بتحب الرسم والالوان ونفسها تبقى فنانة تفتكروا هترسم ايه فى اول لوحة ليها'),
(74, 'اللعبة', 60, 'imgs/CB10.jpg', 60, 3, 1000, 'صباح الخير ما هي لعبة اليوم؟ وماذا تريد أن تلعب اليوم؟ لعبة الملل؟ أو لعبة الغضب؟ أو لعبة الفرح؟ الألعاب كثيرة، يا ترى إلى ماذا ستقودنا '),
(75, 'البطل الصغير', 20, 'imgs/CB11.jpg', 61, 3, 1000, ' كثيرًا ما كنت أتسلل من البيت وأذهب إلى عمي صلاح الذي أعجبتني إرادته وعزيمته الصلبة وهو الذي نشأ في بيت الترف والخدم يحيطون به من كل جانب، فقد شمّر عن ساعديه وعمل بهمّةٍ في الغوص واصطياد اللؤلؤ الذي كان الصيادون يسلمونه في آخر الأمر إلى جنود الحاكم المشرفين عليهم. البطل الصغير واحدة من إصدارات المكتبة الخضراء الشيقة والممتعة، المستوحاة من التراث العالمي و المستلهمة من ثقافات شعوب الأرض بحضاراتهم الغنية المتنوعة و الحافلة بالعبر و المواعظ النبيلة و السامية الموجهة إلى الأطفال  '),
(76, 'ما أحلى الحيوانات ', 30, 'imgs/CB12.jpg', 62, 3, 1000, ' حيوانات جديدة، كل واحد فيها ألطف من الاخر نقابلها للمرة الاولى.  كتاب للصغار ملئ بالحيوانات فاستمتعوا معها'),
(77, 'الزركوش', 30, 'imgs/CB13.jpg', 63, 3, 1000, ' زكي ولد صغير يحلم أنه ليس مثل الكثيرين من الأطفال، فهو مرب للتنين أو قائد لصاروخ، يعيش في الأشجار أو بين القواقع والأصداف، ويتقابل أيضاً مع الزراكيش، ولكن ما الزركوش؟ّ! ، هذا ما نعرفه عندما نقرأ هذا الكتاب  '),
(78, 'النعامة التي طارت', 60, 'imgs/CB14.jpg', 64, 3, 1000, '  النعام مثله مثل كل الطيور يبيض كما يبيضون و يخرج أفراخه من البيض كما يخرجون و كذا يرعى صغاره كما يفعلون و لكن الشئ الوحيد الذي لا يستطسع فعله هو الطيران  و هذا ما سنراه حيث نشاهد محاولات النعامة سوزي في الطيران ز كيف أخفقت في كلا منها…. و تكرار المحاولة دون يأس الى أن تكتشف طريقة تمكنها من الطيران و لكن بطريقتها  ترى ما هي الطريقة التي أهتدت اليها النعامة سوزي و جعلتها سعيدة لتحقيق حلمها في الطيران؟  هذا ما سنراه في قصتنا.  أنه الطموح !! تتناول القصه موضوع الطموح و التفكير خارج الصندوق من خلال النعامة التى تحاول الطيران و لكنها بسبب التكوين الجسدى لها لا تستطيع الطيران فتقوم بعدد من المحاولات فى كل مرة تعيد تفكيرها إلى أن تفكر بطريقه جديدة و هو التفكير خارج الصندوق '),
(79, 'حكايات العم', 225, 'imgs/CB15.jpg', 65, 3, 1000, ' في جعبـة العم حكايات مسليـة تنقل الأطفال إلى أماكن وأزمنـة متغيرة ليروي على أسماعـهم ‏قصصًا تسليـهم وتعلمـهم وتزيد في ثقافتـهم البسيطـة، فيحملـهم أحيانًا إلى عالم الحقيقـة ثم ‏يغوص بـهم أحيانًا أخرى في بحر الخيال البديع، فيعودون إلى الواقع وقد تعلموا درسًا في ‏التربيـة والأخلاق، مدركين عبرًا جميلـة ومواعظ في الدين الإسلامي والحياة اليوميـة، قبل أن ‏ينقلـهم العم أخيرًا في رحلـة واقعيـة ومغامرة شيقـة في البحر كأنـها امتحان لـهم، فلن يتمكنوا من ‏النجاة منـها إلّا بتنفيذ ما تعلموه من عبرٍ من الحكايات السابقـة. ولتعرفوا المزيد يا صغاري ‏رافقوا العمّ والأطفال في هذه السلسلـة الشيقـة، سلسلـة.. حكايات العم.‏  '),
(80, 'علمني رسول الله', 100, 'imgs/CB16.jpg', 66, 3, 1000, ' يضم كتاب «علمني رسول الله ﷺ» عشر قصص تربوية تحاول فيها الجدة من خلال يوميات تعيشها مع حفيدها أن تعالج بعض المشكلات التربوية الشائعة لدى الصغار. كل قصة مستقاة من حديث من أحاديث رسول الله ﷺ'),
(81, 'Table Manners', 150, 'imgs/CB21.jpg', 67, 3, 1000, 'Therefore, books are incredible tools to help us teach our core values and culture to our children. Good table manners are about being respectful and considerate to others. These are values than people need throughout all their lives.'),
(82, 'Big Brother', 150, 'imgs/CB22.jpg', 67, 3, 1000, 'Having a new sibling can be a very challenging experience for any child. They can literally feel dethroned. ‘Big Brother’, is a book that helps prepare children to the experiences of expecting a new sibling. It gives children the opportunity to understand their worries and navigate through their mixed feelings. Preparation is key when it comes to minimizing siblings rivalry. It makes a big difference for children to feel heard, understood and to know what to expect.'),
(83, 'Wishtree', 280, 'imgs/CB23.jpg', 68, 3, 1000, 'Red is an oak tree who is many rings old. Red is the neighbourhood wishtree – people write their wishes on pieces of cloth and tie them to Red’s branches. Along with a crow named Bongo and other animals who seek refuge in Red’s hollows, this wishtree watches over the neighbourhood. Funny, deep, warm, and nuanced, this is Katherine Applegate at her very best – writing from the heart, and from a completely unexpected point of view.'),
(84, 'The Calm Book', 320, 'imgs/CB24.jpg', 69, 3, 1000, 'The Calm Book is a friendly and engaging picture book to help young children understand their feelings using simple science. Featuring mindfulness tips, breathing exercises and calming craft activities that give children the ability to take charge of their own emotional state and the tools to become more resilient.'),
(85, 'Spaceboy', 525, 'imgs/CB25.jpg', 70, 3, 1000, 'Ruth loves climbing trees, making a mess and throwing stones. But the thing she loves most is SPACE. Until one night, Ruth creeps out of bed in the attic room of her rickety old farmhouse to watch the stars – and is just dozing off when she spots something blazing across the sky. Something that looks like a flying saucer! Is she dreaming? No! And the flying saucer is on fire…\r\nBut when the UFO crash-lands in the cornfield, and Ruth rushes to help, she finds a mystery – and an adventure – beyond her wildest dreams.'),
(86, 'Chirp', 315, 'imgs/CB26.jpg', 71, 3, 1000, 'When Mia moves to Vermont the summer after seventh grade, she’s recovering from the broken arm she got falling off a balance beam. And packed away in the moving boxes under her clothes and gymnastics trophies is a secret she’d rather forget.  Mia’s change in scenery brings day camp, new friends, and time with her beloved grandmother. But Gram is convinced someone is trying to destroy her cricket farm. Is it sabotage or is Gram’s thinking impaired from the stroke she suffered months ago? Mia and her friends set out to investigate, but can they uncover the truth in time to save Gram’s farm? And will that discovery empower Mia to confront the secret she’s been hiding–and find the courage she never knew she had?'),
(87, 'After the Fall', 675, 'imgs/CB27.jpg', 72, 3, 1000, 'Everyone knows that when Humpty Dumpty sat on a wall, Humpty Dumpty had a great fall. But what happened after? Caldecott Medalist Dan Santat’s poignant tale follows Humpty Dumpty, an avid bird watcher whose favorite place to be is high up on the city wall?that is, until after his famous fall. Now terrified of heights, Humpty can longer do many of the things he loves most. '),
(88, 'I am Kind', 210, 'imgs/CB28.jpg', 73, 3, 1000, 'I Am Kind follows a little girl who sees kindness all around her. Her mother is kind when she volunteers in the community, and her neighbor is kind when he gives her strawberries from his garden. Even her nature troop is kind when they take care of the earth! The little girl realizes that she, too, has the power to be kind, and that even small actions can have a big impact. In this new installment of the Positive Power early reader series, children will learn the affirmation “I am kind” through an encouraging story of community and everyday kindness. And it includes 2 sheets of stickers!  '),
(89, 'HAPPS', 390, 'imgs/CB29.jpg', 74, 3, 1000, 'Have you ever wanted something badly, even though you shouldn’t? . . . Steve’s dreams of a video game programming career and starting a family lead him to take a job that seems too good to be true. Aiden and Jace can’t resist scaring some young kids in the tube maze of Freddy Fazbear’s Mega Pizzaplex. And all Billy wants is to become the perfect ideal of what he knows he really is?an animatronic. But in the world of Five Nights at Freddy’s, be careful what you wish for. In this second volume, Five Nights at Freddy’s creator Scott Cawthon spins three sinister novella-length tales from uncharted corners of his series’ canon.'),
(90, 'The Creakers', 320, 'imgs/CB210.jpg', 75, 3, 1000, 'A magical, mischievous adventure into an incredible new world, from Tom Fletcher, number-one-bestselling author of The Danger Gang and The Christmasaurus. Lucy wakes up one morning to discover something very strange indeed. All the grown-ups in her town have disappeared.'),
(91, 'What a Waste', 400, 'imgs/CB211.jpg', 76, 3, 1000, '“This educational book will teach young budding ecologists about how our actions affect planet Earth and the big impact we can make by the little things we do. It is a lively kid’s educational book with fabulous illustrations and fun facts about the world broken into easy to digest bite-sized bits. Each page can be looked at in short bursts or longer reads for more detail, making it a great children’s book for a range of age groups.'),
(92, 'If I Had A Star', 250, 'imgs/CB212.jpg', 77, 3, 1000, 'If I Had a Star tells the story of a kitten who dreams of having her own magical star.'),
(93, 'Slimycorn', 250, 'imgs/CB213.jpg', 77, 3, 1000, 'Enjoy this super-fun story about the unicorn with a difference… the Slimycorn!'),
(94, 'Crazy Racers', 250, 'imgs/CB214.jpg', 77, 3, 1000, 'Spin the wheel to mix and match the vehicles together. With over 25 crazy combinations to try in each book, who w will you pick. Maybe a Submaroller?'),
(95, 'Shark Rap!', 320, 'imgs/CB215.jpg', 78, 3, 1000, 'In this snappy story about singing and rapping sharks, there’s an innovative silicone popper fidget toy for little hands to push, pop, and explore on each page as the rhyming story is read aloud.  '),
(96, 'Jurassic Poop!', 320, 'imgs/CB216.jpg', 78, 3, 1000, 'In this laugh-out-loud story about pooping dinosaurs, there’s an innovative silicone popper fidget toy for little hands to push, pop, and explore on each page as the rhyming story is read aloud.  '),
(97, 'Amrikanli', 536, 'imgs/FB1.jpg', 79, 4, 995, ' امريكانلى (French)'),
(99, 'A cappella', 435, 'imgs/FB3.jpg', 81, 4, 1000, 'Mahi, la narratrice, est une femme au foyer respectueuse des valeurs traditionnelles. Elle trouve apparemment son bonheur dans le cocon familial, auprès de son mari et de leur fils, alors que sa meilleure amie, Aida, pourtant d’origine paysanne pauvre, défie ouvertement les conventions sociales et dévore la vie à pleines dents.'),
(100, 'Courrier de nuit', 352, 'imgs/FB6.jpg', 82, 4, 1000, 'Un réfugié sans-papiers hébergé par une femme charitable avoue avoir commis un meurtre dans une lettre qu’il n’enverra jamais. Une femme abandonnée par son amant pour lequel elle a quitté le Liban retrouve la lettre par hasard et se met à écrire à son tour, comme pour conjurer le sort, dans la chambre d’hôtel où elle attend sans trop d’espoir la fin de ses vingt ans d’errance.'),
(101, 'Ismailia', 645, 'imgs/FB4.jpg', 83, 4, 1000, 'Cet ouvrage, consacré à Ismaïlia, deuxième ville créée ex nihilo le long du canal de Suez en 1862, fait suite au guide d’architecture de Port-Saïd publié en 2006 dans la même collection. Devenue une référence de l’histoire de l’urbanisme et un conservatoire des modèles d’architecture patronale élaborés à partir de la fin du XIX? siècle, Ismaïlia occupe également une place à part dans l’histoire culturelle de l’?gypte. La ville dévoile une partie de son histoire grâce à une recherche conduite en France dans les archives de la Compagnie universelle du canal de Suez, par Céline Frémaux, historienne de l’art, au témoignage de l’éminent historien égyptien Raouf Abbas et au travail de terrain d’une équipe de jeunes architectes en formation à l’?cole de Chaillot.'),
(102, 'Port-Said', 935, 'imgs/FB5.jpg', 83, 4, 1000, 'Conu d’abord comme un guide, cet ouvrage propose, travers une srie d’itinraires illustrs, de faire dcouvrir les diffrentes priodes de l’architecture de Port-Sad, ville fonde en 1859 par la ” Compagnie universelle du canal maritime de Suez “, l’occasion du percement du clbre canal. L’ouvrage runit galement trois rcits d’auteurs franais et gyptiens qui aident saisir ce que fut jadis cette ville et ce qu’elle pourrait devenir demain.');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `qantity` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `ordern` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `languagename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `languagename`) VALUES
(1, 'Arabic'),
(2, 'English'),
(3, 'Children'),
(4, 'French');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `ordern` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `USER_ID`, `isbn`, `price`, `qantity`, `date`, `ordern`) VALUES
(62, 24, 34, 425, 1, '2023-05-12', 5),
(64, 24, 99, 435, 1, '2023-05-12', 5),
(65, 24, 34, 425, 1, '2023-05-12', 5),
(66, 24, 66, 200, 1, '2023-05-12', 5),
(68, 26, 66, 200, 4, '2023-05-12', 6),
(69, 26, 65, 140, 3, '2023-05-12', 6),
(71, 24, 34, 425, 2, '2023-05-13', 8),
(72, 24, 66, 200, 3, '2023-05-13', 8),
(73, 24, 97, 536, 5, '2023-05-13', 8),
(74, 24, 66, 200, 1, '2023-05-13', 8),
(75, 24, 4, 130, 1, '2023-05-13', 8),
(76, 24, 5, 120, 1, '2023-05-13', 8),
(77, 28, 35, 730, 1, '2023-05-13', 9),
(78, 30, 5, 120, 3, '2023-05-13', 11);

-- --------------------------------------------------------

--
-- Table structure for table `trend`
--

CREATE TABLE `trend` (
  `isbn` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `allqantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trend`
--

INSERT INTO `trend` (`isbn`, `bookname`, `price`, `picture`, `allqantity`) VALUES
(2, 'أربعون', 260, 'imgs/9789770935552-600x875.jpg', 2),
(3, 'أرني أنظر إليك', 180, 'imgs/9789778200645-450x600.jpg', 1000),
(4, 'أنشودة الحنين', 130, 'imgs/9789770937839-450x600.jpg', 1000),
(21, 'حكاية جدار', 560, 'imgs/AB25.jpg', 1000),
(26, 'عالم ليس لنا', 280, 'imgs/AB210.jpg', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `USER_ID` int(11) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ADMIN` int(11) NOT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`USER_ID`, `USERNAME`, `EMAIL`, `PASSWORD`, `ADMIN`, `comment`) VALUES
(1, 'majd', 'majd@gmail.com', 'majd123', 1, NULL),
(2, 'anwar', 'anwar@gmail.com', 'anwar123', 1, NULL),
(24, 'manal', 'manal@gmailcom', 'manal123', 0, 'uyy'),
(25, 'ahmad', 'ahmad@gmai.com', 'ahmad123', 0, NULL),
(26, 'murad', 'murad@gmail.com', 'murad123', 0, 'good!'),
(27, 'mohanad', 'mohanad@gmail.com', 'mohanad123', 0, NULL),
(28, 'moaid', 'moaid@gmail.com', 'moaid123', 0, 'nice!'),
(29, 'malak', 'malak@gmail.com', 'malak123', 0, NULL),
(30, 'mohmmad', 'mohammad@gmail.com', 'mohmmad123', 0, 'good work'),
(33, 'gt', 'meme@gmail', 'tg', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_cart` (`isbn`),
  ADD KEY `uewr_cart` (`USER_ID`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `book_orders` (`isbn`),
  ADD KEY `users_orders` (`USER_ID`);

--
-- Indexes for table `trend`
--
ALTER TABLE `trend`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `USER_ID` (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `isbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2001;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `trend`
--
ALTER TABLE `trend`
  MODIFY `isbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_author` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_language` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `book_cart` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uewr_cart` FOREIGN KEY (`USER_ID`) REFERENCES `users_tb` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `book_orders` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_orders` FOREIGN KEY (`USER_ID`) REFERENCES `users_tb` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
