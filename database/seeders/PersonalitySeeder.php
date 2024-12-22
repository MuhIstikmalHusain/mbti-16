<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personality;

class PersonalitySeeder extends Seeder
{
    public function run()
    {
        $PersonalityType = [
            [
                'type' => 'INTJ',
                'description' => 'Pemikir imajinatif dan strategis yang menyiapkan rencana untuk segala hal',
                'karakteristik' => 'INTJ, adalah singkatan dari introvert, intuition, thinking, dan judging. Secara umum,INTJ adalah seseorang yang sangat teliti dan detail. Ia selalu menggunakan rasionalitasnya dalam proses pengambilan keputusan, baik keputusan kecil yang dibuatnya sehari - hari, maupun keputusan - keputusan besar dalam kehidupan berkarirnya. INTJ adalah seorang pemikir yang dalam. Ia senang menghabiskan waktu dengan menyendiri dan tenggelam dalam pemikirannya yang kompleks.',
                'karrier' => 'Akuntan, Pengacara, Project Manager, Programmer, Arsitek, Detektif, Ilmuwan, Engineer. Orang dengan tipe kepribadian INTJ (Arsitek) jarang sekali merasa puas dengan pekerjaan yang terlalu mudah. Mereka menginginkan karir yang membangkitkan rasa ingin tahu dan meningkatkan kecerdasan mereka, sehingga memungkinkan mereka untuk mengembangkan kehebatan mereka saat mereka mengatasi tantangan dan masalah yang berarti. Jika deskripsi pekerjaan membuat rata-rata orang berpikir, “Wow, kedengarannya sulit,” maka itu mungkin cocok untuk seorang INTJ.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/intj.svg',
            ],

            [
                'type' => 'INTP',
                'description' => 'Penemu Inovatif yang haus akan pengetahuan',
		        'karakteristik' => 'INTP, Si Ahli Logika adalah singkatan dari introvert, intuition, thinking, dan perceiving. Secara umum,INTP adalah seorang pribadi yang senang mengimajinasikan hal - hal unik yang tidak pernah terpikirkan sebelumnya. Ia senang untuk menelusuri jalan yang belum pernah ditempuh oleh orang lain, lalu menggunakan kekuatan logika dan kreativitasnya untuk menghadapi setiap masalah.',
		        'karrier' => 'Engineer, Programmer, Penemu / Inventor, Pengacara, Analis Bisnis, IT Security, Ilmuwan Musisi. Orang dengan tipe kepribadian INTP ) bangga dengan perspektif unik dan kecerdasan mereka yang kuat. Mereka bingung memikirkan misteri alam semesta – yang mungkin menjelaskan mengapa beberapa filsuf dan ilmuwan paling berpengaruh sepanjang masa adalah INTP. Orang dengan tipe kepribadian ini cenderung lebih menyukai kesendirian, karena mereka mudah tenggelam dalam pikiran ketika dibiarkan sendiri. Mereka juga sangat kreatif dan inventif, dan mereka tidak takut untuk mengekspresikan cara berpikir mereka yang baru atau menonjol dari yang lain.',
                'icon' => 'bi bi-broadcast',
                'image' => '/assets/img/avatar/intp.svg',
            ],

            [
                'type' => 'ENTJ',
                'description' => 'Pemimpin pemberani, imajinatif, dan memiliki determinasi tinggi, selalu menemukan cara - atau menciptakan caranya sendiri',
		        'karakteristik' => 'ENTJ, Si Komandan adalah singkatan dari extrovert, intuition, thinking, dan judging. Secara umum,ENTJ adalah seseorang yang handal dalam mengambil keputusan dan sangat menghargai pencapaian. Ia tidak suka menghabiskan waktu dengan melakukan hal - hal yang tidak produktif dan efisien.',
		        'karrier' => 'Politisi, Project Manager, CEO, Pengacara Engineer, Entrepreneur, Industri Militer, Dokter Spesialis. Orang dengan tipe kepribadian ENTJ (Komandan) adalah pemimpin yang terlahir secara alami. Mewujudkan karunia karisma dan kepercayaan diri, ENTJ memproyeksikan otoritas dengan cara yang menyatukan banyak orang untuk mencapai tujuan bersama. Namun, kepribadian ini juga dicirikan oleh tingkat rasionalitas yang kejam, menggunakan dorongan, tekad, dan pikiran yang tajam untuk mencapai tujuan apa pun yang telah mereka tetapkan untuk diri mereka sendiri. Intensitas mereka terkadang mungkin membuat orang salah paham, tetapi pada akhirnya, ENTJ bangga dengan etos kerja dan tingkat disiplin diri mereka yang mengesankan.',
                'icon' => 'bi bi-easel',
                'image' => '/assets/img/avatar/entj.svg',
            ],

            [
                'type' => 'ENTP',
                'description' => 'Pemikir cerdas dan penuh rasa ingin tahu yang tidak bisa menolak tantangan intelektual',
		        'karakteristik' => '‍ENTP, adalah singkatan dari extrovert, intuition, thinker, dan perceiving. Secara umum, ENTP adalah seseorang yang senang berbicara, memikirkan ide - ide baru, dan bertindak secara bebas. ENTP termotivasi dengan tantangan dan masalah. Ia selalu mampu mencari solusi kreatif untuk memecahkan sebuah masalah.',
		        'karrier' => 'Entrepreneur, Marketing / Sales, Trader Saham, Creative Director, Engineer, Pengacara, Industri Film, Training Manager. Dalam dunia karir, orang dengan tipe kepribadian ENTP (Debater) mempunyai keuntungan karena mereka secara alami terlibat dan tertarik untuk menjadi produktif dan suka membantu. Kepribadian energik ini fokus pada pengembangan solusi terhadap masalah teknis dan intelektual yang menarik dan beragam. Artinya, ENTP cenderung menghargai karier yang memberi mereka kebebasan untuk bereksplorasi, bereksperimen, dan terlibat dengan berbagai ide dan perspektif.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/entp.svg',
            ],

            [
                'type' => 'INFJ',
                'description' => 'Idealis yang tenang dan berjiwa spiritual sekaligus inspiratif dan tidak kenal lelah',
		        'karakteristik' => 'INFJ, adalah singkatan dari introvert, intuition, feeling, dan judging. Secara umum,INFJ menjalani kehidupan dengan pemikiran yang mendalam dan imajinasi yang tinggi. Walaupun pendiam, INFJ memiliki visi dan prinsip yang jelas di dalam dirinya. Hal itulah yang selalu menuntun INFJ dalam menjalani hari - harinya.',
		        'karrier' => 'Konselor, Seniman, Human Resource (HR), Penulisi, Guru, Desainer, Social Worker, Entrepreneur. Bagi orang-orang dengan tipe kepribadian INFJ (Advokat), keputusan profesional tidak dipandu oleh tolok ukur kesuksesan konvensional seperti keuntungan finansial atau status, namun oleh potensi pekerjaan mereka untuk mendapatkan hubungan yang bermakna dan kepuasan pribadi. Kepribadian ini ingin sekali menemukan karier yang selaras dengan nilai-nilai dan impian mereka – karier yang memungkinkan mereka memenuhi misi unik mereka di dunia ini. Bagi INFJ, suatu pekerjaan tidak akan memuaskan jika tidak memberikan tujuan yang lebih dalam – tidak peduli seberapa bagus gajinya. Kabar baiknya adalah orang dengan tipe kepribadian ini dapat menggunakan kreativitas dan tekadnya untuk menemukan pekerjaan yang sesuai dengan kebutuhannya di bidang apa pun.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/infj.svg',
            ],

            [
                'type' => 'INFP',
                'description' => 'Pribadi yang puitis, baik hati, dan altruistik, selalu ingin membantu demi kebaikan',
		        'karakteristik' => 'INFP, Si Penyeimbang adalah singkatan dari introvert, intuition, feeling, dan perceiving. Secara umum,INFP adalah seseorang yang pendiam, namun memiliki pemikiran yang imajinatif dan terbuka. Ia juga memiliki hati yang senang menolong. INFP memegang teguh nilai - nilai kreativitas dan kepedulian terhadap sesama dalam menjalani hari - harinya.',
		        'karrier' => 'Seniman, Psikolog, Professor, Penulis Guru, Desainer, Social Worker, Konselor. Dalam kehidupan profesional Anda, Anda didorong oleh kebutuhan mendalam akan makna dan tujuan. Anda berkembang dalam lingkungan yang memungkinkan Anda mengekspresikan kreativitas, membantu orang lain, dan tetap setia pada nilai-nilai Anda. Karier di bidang konseling, pengajaran, menulis, atau seni sering kali menarik bagi sifat pengasuhan dan semangat imajinatif Anda. Namun, menemukan yang tepat bisa menjadi sebuah perjalanan trial and error, saat Anda menavigasi keseimbangan antara cita-cita Anda dan kenyataan di dunia kerja. Kemampuan Anda untuk berpikir out of the box dan berempati dengan orang lain menjadikan Anda aset berharga di banyak bidang, terutama bidang yang membutuhkan keterampilan pemecahan masalah atau interpersonal yang inovatif. Namun, Anda mungkin kesulitan dengan lingkungan atau peran yang sangat terstruktur yang melibatkan banyak tugas rutin. Tantangan Anda terletak pada menemukan karier yang tidak hanya selaras dengan nilai-nilai Anda namun juga memberikan fleksibilitas dan otonomi yang Anda dambakan, sehingga memungkinkan Anda memberikan pengaruh yang berarti sambil tetap jujur ​​pada diri sendiri.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/infp.svg',
            ],

            [
                'type' => 'ENFJ',
                'description' => 'Pemimpin yang karismatik dan inspiratif, mampu memukau pendengaran',
		        'karakteristik' => 'ENFJ, Si Protagonis adalah singkatan dari extrovert, intuition, feeling, dan judging. Secara umum,ENFJ adalah seorang pribadi yang hangat dan senang membantu sesama. Ia memiliki prinsip - prinsip yang kuat dalam menjalani hidupnya dan selalu memilih untuk melakukan hal yang benar.',
		        'karrier' => 'Guru, Social Worker, Event Organizer, Psikolog Personal Assitant, Jurnalis, Motivator, Public Relation (PR). Ketika memilih karier, orang dengan tipe kepribadian ENFJ (Protagonis) menemukan kepuasan dalam melakukan apa yang paling mereka sukai – membantu orang lain. Mereka juga lebih memilih karir di mana karisma mereka merupakan faktor penting untuk sukses. Dengan pesona alami, kreativitas, dan dorongan mereka, ENFJ dapat menemukan banyak cara berbeda untuk melayani dan mengangkat semangat orang lain di hampir semua lingkungan kerja – baik di belakang meja berkilau di ruang rapat perusahaan atau di belakang meja di kedai kopi lokal tercinta.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/enfj.svg',
            ],

            [
                'type' => 'ENFP',
                'description' => 'Jiwa yang antusias, kreatif, dan bebas bergaul sehingga tidak pernah merasa sedih',
		        'karakteristik' => 'ENFP, Si Penggerak adalah singkatan dari extrovert, intuition, feeling, dan perceiving. Secara umum,ENFP adalah seseorang yang memiliki ide dan mimpi besar untuk memberikan pengaruh positif kepada orang - orang di sekitarnya. Keoptimisan seorang ENFP dapat dirasakan oleh mereka yang berinteraksi dengannya.',
		        'karrier' => 'Entrepreneur, Sales, Brand Manager, Aktor Guru, Designer, Social Worker, Manajer HRD. Mungkin saya bisa…menerbangkan helikopter dan menjadi ahli kelautan yang menulis lagu dan memasak? Orang dengan tipe kepribadian ENFP (Kampanye) dikenal memiliki banyak ide, minat, dan hobi – sampai-sampai mereka kesulitan untuk menyesuaikan segala hal yang mereka pedulikan ke dalam kehidupan mereka. Maka tidak mengherankan jika memilih jalur karier dapat membuat kepribadian imajinatif ini merasa kewalahan atau tercerai-berai. ENFP ingin memberi nilai tambah pada dunia, membangun komunitas, memfasilitasi pembelajaran, dan mengekspresikan kreativitas mereka melalui karya mereka. Akibatnya, mereka mungkin merasa ditarik ke berbagai arah, tidak yakin bagaimana menghormati minat dan nilai-nilai mereka, namun tetap menjaga pilihan tetap terbuka dan mendapatkan gaji tetap.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/enfp.svg',
            ],

            [
                'type' => 'ISTJ',
                'description' => 'Indifidu yang berpikir praktis, faktual, dan sangat bisa diandalkan',
		        'karakteristik' => 'ISTJ, Si Inspektur adalah singkatan dari introvert, sensing, thinking, dan judging. Secara umum,ISTJ adalah seorang pribadi cukup individualis, namun memiliki tujuan yang jelas. Ia sangat rasional dalam mengambil setiap keputusan sehari - hari. ISTJ melakukan tindakan dengan hati - hati dan terencana.',
		        'karrier' => 'Dokter Gigi, Akuntan, Business Analyst, Inspektur/Supervisor, Hakim, Teller Bank, Petugas Militer, Ahli Mesin Komputer.Meskipun banyak orang mungkin merasa nyaman dengan pekerjaan fleksibel sebagai konsultan dan pemilik tunggal, orang dengan tipe kepribadian ISTJ (Ahli Logistik) jauh lebih fokus dalam membangun karier jangka panjang dan stabil. Hal ini tidak berarti bahwa ISTJ tidak dapat melakukan pekerjaan semacam itu – banyak yang berpikir tentang apa yang ada di balik dinding bilik tersebut – namun apa yang mereka dambakan adalah ketergantungan, dan hal ini mungkin lebih tercermin dalam pilihan pekerjaan mereka daripada di bagian lain kehidupan mereka.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/istj.svg',
            ],

            [
                'type' => 'ISFJ',
                'description' => 'Pelindung yang sangat berdedikasi dan ramah, selalu siap membela orang yang mereka sayang',
		        'karakteristik' => 'ISFJ, Si Pelindung adalah singkatan dari introvert, sensing, feeling, dan judging. Secara umum,ISFJ adalah seorang pribadi yang hangat, efisien, dan bertanggung jawab. Ia adalah seorang pekerja keras yang berdedikasi dengan hati yang baik dan selalu siap membantu orang lain yang membutuhkan bantuannya.',
		        'karrier' => 'Suster / Perawat, Desainer Interior, Manajer Kantoran, Paralegal Pekerja Sosial, Guru, Dokter Gigi, Admin / Customer Service. Orang dengan tipe kepribadian ISFJ (Pembela) mendekati jalur karier mereka dengan komitmen, ketekunan, dan kesabaran yang sama seperti yang mereka tunjukkan dalam aspek lain kehidupan mereka. Oleh karena itu, mereka sering dianggap sebagai tulang punggung tempat kerja mereka. ISFJ umumnya sangat dapat diandalkan, pekerja keras, dan selalu siap membantu mereka yang membutuhkan. Mereka bangga menyelesaikan pekerjaan dan menyelesaikannya dengan baik, jarang mengambil jalan pintas atau berusaha menghindari tugas yang memakan waktu. Etos kerja yang tak tergoyahkan ini, dipadukan dengan keinginan tulus untuk melayani orang lain, menjadikan kepribadian ISFJ sangat berharga dalam berbagai karier.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/isfj.svg',
            ],

            [
                'type' => 'ESTJ',
                'description' => 'Administrator yang unggul tak tertandingi dalam mengelola segala hal - atau bahkan manusia',
		        'karakteristik' => 'ESTJ, Si Eksekutif adalah singkatan dari extrovert, sensing, thinking, dan judging. Secara umum,ESTJ adalah seorang pribadi yang terarah dan terstruktur. Ia sangat bertanggung jawab dalam setiap tugas - tugasnya dan memiliki integritas yang tinggi. ESTJ sangat ahli dalam memimpin sebuah tim untuk mencapai sebuah tujuan yang sudah ditetapkan bersama.',
		        'karrier' => 'CEO/Direktur, Public Relation (PR), Hakim, Business ManagerKoki, Inspektur Konstruksi, Manajer Finansial, Trader Saham. Bagi orang dengan tipe kepribadian ESTJ (Eksekutif), jalur karier sering kali sama jelas dan lugasnya dengan diri mereka sendiri. Meskipun ada banyak arah yang dapat mereka pilih, mereka hampir selalu berakhir pada situasi di mana mereka mempunyai kesempatan untuk melatih ketertarikan mereka terhadap organisasi, struktur, dan tindak lanjut. Dengan memberikan fokus lebih lanjut, ESTJ sangat menghormati tradisi, stabilitas, dan keamanan – kualitas yang memungkinkan mereka mencapai kemajuan di jalur yang jelas menuju peningkatan tanggung jawab dan ketergantungan.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/estj.svg',
            ],

            [
                'type' => 'ESFJ',
                'description' => 'Pribadi yang penuh perhatian, supel, dan banyak dikenal, selalu ingin membantu',
		        'karakteristik' => 'ESFJ, Si Konsultan adalah singkatan dari extrovert, sensing, feeling, dan judging. Secara umum,ESFJ adalah seorang pribadi yang sangat peduli terhadap sesama dan senang menolong. Ia akan merasa sangat senang disaat ia berhasil memberikan dampak positif kepada orang lain di sekitarnya. ESFJ sangat mengutamakan kemanusiaan, kedamaian, dan hubungannya dengan orang lain.',
		        'karrier' => 'Suster / Perawat, Event Organizer, Manajer Kantoran, Guru, Resepsionis, Trainer Korporasi, Pekerja Sosial, Manajer HR. Karena ciri-ciri kepribadian mereka diekspresikan dengan sangat kuat, dipimpin dengan perasaan praktis dan semangat sosial, orang-orang dengan tipe kepribadian ESFJ (Konsul) cenderung menemukan kepuasan terbesar dalam karier yang berkisar pada pemanfaatan kualitas-kualitas ini dengan sebaik-baiknya. Mereka terorganisir dengan baik. Mereka senang menciptakan ketertiban dan struktur di tempat kerja mereka, dan mereka sering kali bekerja paling baik di lingkungan dengan hierarki dan tugas yang jelas dan dapat diprediksi. Pekerjaan yang monoton dan rutin bukanlah suatu tantangan bagi mereka, selama mereka bekerja bersama orang lain.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/esfj.svg',
            ],

            [
                'type' => 'ISTP',
                'description' => 'Peneliti yang pemberani dan praktis, menguasai semua jenis alat',
		        'karakteristik' => 'ISTP, Si Artisan adalah singkatan dari introvert, sensing, thinking, dan perceiving. Secara umum,ISTP adalah seorang pribadi yang cukup individualis. Ia menetapkan tujuan dan mengejar mimpi - mimpinya tanpa membutuhkan pengakuan atau validasi dari orang lain. ISTP dikenal senang mempelajari kemampuan - kemampuan baru yang berkaitan dengan kerajinan tangan.',
		        'karrier' => 'Engineer, Inspektur Bangunan, Operator Mesin, Ilmuwan Forensik, Detektif, Pengrajin, Software Developer, Mekanik Otomotif. Orang dengan tipe kepribadian ISTP (Virtuoso) mungkin adalah orang yang paling sulit dijabarkan dalam banyak aspek kehidupan, terutama dalam karier mereka. Mereka berkembang dalam keberagaman dan ketidakpastian, serta bertanya-tanya “Apa yang akan terjadi selanjutnya?” setiap pagi. Hal ini menjadikan mereka salah satu tipe kepribadian paling misterius dan juga salah satu yang paling serbaguna di dunia profesional. Kepribadian ISTP unik karena mereka hampir tidak punya waktu atau kesabaran ketika memikirkan ide atau proyek yang tidak dapat diterapkan secara bijaksana dalam waktu nyata. Mereka terlahir sebagai pemecah masalah dengan fokus teguh pada solusi praktis. Tidak ada tipe orang lain yang begitu terpesona dengan cara kerja, cara menggunakan alat, dan cara mengumpulkan fakta untuk menciptakan hasil yang cepat dan memuaskan.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/istp.svg',
            ],

            [
                'type' => 'ISFP',
                'description' => 'Seniman yang fleksibel dan mempesona, selalu siap menjelajahi dan merasakan hal baru',
		        'karakteristik' => 'ISFP, Si Seniman adalah singkatan dari introvert, sensing, feeling, dan perceiving. Secara umum,ISFP adalah seorang petualang yang sangat terbuka dengan berbagai pengalaman baru. Ia memiliki kemampuan untuk menikmati setiap momen hidupnya, baik dengan menyendiri atau bersama orang - orang terdekat yang ia sayangi.',
		        'karrier' => 'Koki, Pramugari / Pramugara, Seniman, Suster / PerawatSocial Worker, Guru, Instruktur Fitness, Brand Manager. Dalam dunia karir, orang dengan tipe kepribadian ISFP (Petualang) membutuhkan lebih dari sekedar pekerjaan. Kekayaan, kekuasaan, struktur, kemajuan, dan keamanan, meskipun semuanya baik-baik saja, sering kali menjadi kebutuhan terbesar kedua setelahnya: kebebasan berkreasi. ISFP mendambakan jalan keluar yang nyata untuk imajinasi mereka, kesempatan untuk mengekspresikan ide mereka tentang apa yang berhasil.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/isfp.svg',
            ],

            [
                'type' => 'ESTP',
                'description' => 'Pribadi cerdas energik dan sangat peka yang benar-benar menikmati hidup yang menantang',
		        'karakteristik' => 'ESTP, Si Dinamo adalah singkatan dari extrovert, sensing, thinking, dan perceiving. Secara umum,ESTP adalah seorang pribadi yang sangat aktif dan enerjetik. Ia senang menjelajahi setiap kesempatan baru yang ada di depan matanya. Baginya, hidup adalah petualangan yang tak pernah usai.',
		        'karrier' => 'Entrepreneur, Aktor / Aktris, Business Development, Detektif, Sales Manager, Atlet, Polisi, Paramedic. Ketika berbicara tentang pilihan karir bagi orang-orang dengan tipe kepribadian ESTP (Pengusaha), “tindakan” adalah kata yang paling tepat. Mereka berpikir mandiri dan pandai membuat keputusan cepat di saat-saat yang panas. Pada saat yang sama, mereka adalah individu ramah yang selalu menjalin pertemanan dan koneksi ke mana pun mereka pergi. Popularitas dan jaringan yang kuat dapat menjadi aset besar di dunia kerja, dan ESTP tidak memiliki masalah dalam menggunakan keterampilan orang-orang ini untuk keuntungan mereka.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/estp.svg',
            ],

            [
                'type' => 'ESFP',
                'description' => 'Pribadi yang spontan, energik, dan antusias - bersama mereka, hidup tidak akan terasa membosankan',
		        'karakteristik' => 'ESFP, Si Penghibur adalah singkatan dari extrovert, sensing, feeling, dan perceiving. Secara umum,ESFP adalah seorang pribadi yang sangat senang bersosialisasi dan menghibur orang - orang di sekitarnya. Ia sangat enerjetik dan tidak bisa diam. ESFP menikmati setiap momen dalam hidupnya secara maksimal.',
		        'karrier' => 'Aktor / Aktris, Event Organizer, Fashion Designer, Guru, Entrepreneur, Sales, Pentas Seni, Pramugari / Pramugara. Orang dengan tipe kepribadian ESFP (Penghibur) memiliki kualitas unik yang membuat mereka luar biasa dalam beberapa karier dan menyedihkan dalam karier lainnya – mereka mencerminkan suasana hati di sekitar mereka. Ketika mereka berada di sebuah pesta atau konser, mereka mencerminkan suasana hati tersebut, memberi mereka citra “orang-orang yang suka berpesta”. Saat temannya sedih, mereka mencerminkannya dengan simpati dan empati. Dan ketika terjadi krisis, ESFP juga beradaptasi, menyesuaikan dengan intensitas situasi. Oleh karena itu, karier apa pun yang berfokus pada bekerja dengan orang lain cocok bagi kepribadian ESFP untuk menjadi bahagia dan produktif. Selain itu, pesona alami dan semangat mereka membantu mereka menciptakan kesan yang bertahan lama dan membentuk aliansi yang mungkin bermanfaat dalam jangka panjang. Pepatah lama, “Yang penting bukanlah apa yang Anda ketahui, namun siapa yang Anda kenal,” sangat melekat dalam diri mereka.',
                'icon' => 'bi bi-activity',
                'image' => '/assets/img/avatar/esfp.svg',
            ],
        ];


        foreach ($PersonalityType as $type) {
            Personality::create($type);
        }
    }
}
