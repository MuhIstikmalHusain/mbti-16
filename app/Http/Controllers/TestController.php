<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showTest(Request $request)
    {
        // Question Energi
        $questions_energi = [
            [
                'text' => 'Ketika bertemu dengan orang baru kamu biasanya...',
                'options' => [
                    ['value' => 'E', 'label' => 'Memulai membuka topik pembicaraan'],
                    ['value' => 'I', 'label' => 'Menunggu orang membuka topik pembicaraan'],
                ],
            ],
            [
                'text' => 'Bagaimana cara Anda mempersiapkan presentasi?',
                'options' => [
                    ['value' => 'I', 'label' => 'Melatihnya beberapa kali sebelum acara'],
                    ['value' => 'E', 'label' => 'Spontan membicarakannya tanpa latihan'],
                ],
            ],
            [
                'text' => 'Saat bekerja dalam tim, apakah Anda lebih suka',
                'options' => [
                    ['value' => 'E', 'label' => 'Berbicara lebih dulu'],
                    ['value' => 'I', 'label' => 'Mendengarkan ide orang lain terlebih dahulu'],
                ],
            ],
            [
                'text' => 'Mana yang lebih kau suka',
                'options' => [
                    ['value' => 'E', 'label' => 'Bersosialisasi dalam kelompok besar'],
                    ['value' => 'I', 'label' => 'Menghaiskan waktu dengan sahabat terdekat'],
                ],
            ],
            [
                'text'      => 'Apakah Anda lebih sering',
                'options'   => [
                    ['value' => 'E', 'label' => 'Mengambil inisiatif untuk memulai percakapan'],
                    ['value' => 'I', 'label' => 'MMenunggu orang lain berbicara terlebih dahulu'],
                ],
            ],

        ];

        // Question Informasi
        $questions_informasi = [
            [
                'text'    => 'Mana yang lebih Anda percayai',
                'options'  => [
                    ['value' => 'S', 'label' => 'Fakta yang nyata'],
                    ['value' => 'N', 'label' => 'Intuisi dan firasat']
                ],
            ],
            [
                'text'   => 'Ketika bekerja di perusahaan, apakah Anda lebih suka',
                'options' => [
                    ['value' => 'S', 'label' => 'Menghasilkan produk yang sudah terbukti laku'],
                    ['value' => 'N', 'label' => 'Mengeksplorasi peluang produk baru']
                ],
            ],
            [
                'text'   => 'Apakah Anda lebih sering memperhatikan',
                'options' => [
                    ['value' => 'S', 'label' => 'Detail fisik seperti warna dan bentuk'],
                    ['value' => 'N', 'label' => 'Makna dan pola di baliknya']
                ],
            ],
            [
                'text'   => 'Ketika membaca buku, apakah Anda lebih menikmati',
                'options' => [
                    ['value' => 'S', 'label' => 'Fakta-fakta praktis'],
                    ['value' => 'N', 'label' => 'Cerita yang imajinatif dan penuh simbolisme']
                ],
            ],
            [
                'text'   => 'Apakah Anda lebih suka menyelesaikan tugas dengan',
                'options' => [
                    ['value' => 'S', 'label' => 'Cara yang sudah terbukti berhasil'],
                    ['value' => 'N', 'label' => 'Pendekatan baru yang kreatif']
                ],
            ],
        ];

        // Question Keputusan
        $questions_Choose = [
            [
                'text'    => 'Mana yang lebih membuat Anda merasa diapresiasi',
                'options' => [
                    ['value' => 'T', 'label' => 'Disebut sangat logis'],
                    ['value' => 'F', 'label' => 'Disebut sangat perhatian']
                ],
            ],
            [
                'text'    => 'Dalam mengambil keputusan, apakah Anda lebih dipengaruhi oleh',
                'options' => [
                    ['value' => 'T', 'label' => 'Fakta dan nalar logis'],
                    ['value' => 'F', 'label' => 'Perasaan dan dampak terhadap orang lain']
                ],
            ],
            [
                'text'    => 'Apakah Anda lebih nyaman',
                'options' => [
                    ['value' => 'T', 'label' => 'Mengungkapkan pendapat langsung dan jujur'],
                    ['value' => 'F', 'label' => 'Mempertimbangkan perasaan orang lain sebelum berbicara']
                ],
            ],
            [
                'text'    => 'Apakah Anda lebih sering menilai keberhasilan berdasarkan',
                'options' => [
                    ['value' => 'T', 'label' => 'Hasil akhir'],
                    ['value' => 'F', 'label' => 'Dampaknya terhadap orang lain']
                ],
            ],
            [
                'text'    => 'Apakah Anda lebih menghargai seseorang yang',
                'options' => [
                    ['value' => 'T', 'label' => 'Berpikir secara objektif'],
                    ['value' => 'F', 'label' => 'Menunjukkan empati dalam setiap tindakan']
                ],
            ],
        ];

        // Question Perspektif
        $questions_perspektif = [
            [
                'text'    => 'Saat menghadapi tugas, apakah Anda lebih suka',
                'options' => [
                    ['value' => 'J', 'label' => 'Merencanakan dan mencicil jauh hari'],
                    ['value' => 'P', 'label' => 'Menyelesaikannya mendekati tenggat waktu']
                ],
            ],
            [
                'text'    => 'Ketika belanja, apakah Anda',
                'options' => [
                    ['value' => 'J', 'label' => 'Membuat daftar belanjaan agar tetap terorganisir'],
                    ['value' => 'P', 'label' => 'Membeli barang berdasarkan inspirasi saat di toko']
                ],
            ],
            [
                'text'    => 'Apakah Anda lebih suka',
                'options' => [
                    ['value' => 'J', 'label' => 'Rencana yang terstruktur dan tetap'],
                    ['value' => 'P', 'label' => 'Fleksibilitas dan spontanitas']
                ],
            ],
            [
                'text'    => 'Saat bekerja, apakah Anda lebih suka',
                'options' => [
                    ['value' => 'J', 'label' => 'Menyelesaikan satu tugas sebelum memulai yang lain'],
                    ['value' => 'P', 'label' => 'Mengerjakan beberapa tugas sekaligus']
                ],
            ],
            [
                'text'    => 'Apakah Anda merasa lebih nyaman ketika segala sesuatu',
                'options' => [
                    ['value' => 'J', 'label' => 'Diputuskan lebih awal'],
                    ['value' => 'P', 'label' => 'Berkembang secara alami']
                ],
            ],
        ];


        // Gabungkan semua pertanyaan
        $questions = array_merge($questions_energi, $questions_informasi, $questions_Choose, $questions_perspektif);

        // Tentukan indeks pertanyaan saat ini
        $currentIndex = $request->query('index', 0);

        // Jika indeks melebihi jumlah pertanyaan, arahkan ke hasil
        if ($currentIndex >= count($questions)) {
            return redirect('/test-result');
        }

        // Ambil pertanyaan berdasarkan indeks
        $currentQuestion = $questions[$currentIndex];

        // Hanya render section title pada pertanyaan pertama
        // $renderSectionTitle = $currentIndex === 0;

        return view('dashboards.test', compact('currentQuestion', 'currentIndex'));
        // return view('dashboards.test', compact('questions_energi'));
    }

    public function storeAnswer(Request $request)
    {
        // Simpan jawaban ke session
        $answers = session('answers', []);
        $answers[$request->input('index')] = $request->input('answer');

        session(['answers' => $answers]);

        // Arahkan ke pertanyaan berikutnya
        return redirect()->route('test.show', ['index' => $request->input('index') + 1]);
    }

    public function calculateResult()
    {
        // Ambil jawaban dari session
        $answers = session('answers', []);

        // Hitung total nilai berdasarkan pilihan
        $countI = count(array_filter($answers, fn($answer) => $answer === 'I'));
        $countE = count(array_filter($answers, fn($answer) => $answer === 'E'));

        $countN = count(array_filter($answers, fn($answer) => $answer === 'N'));
        $countS = count(array_filter($answers, fn($answer) => $answer === 'S'));

        $countT = count(array_filter($answers, fn($answer) => $answer === 'T'));
        $countF = count(array_filter($answers, fn($answer) => $answer === 'F'));

        $countJ = count(array_filter($answers, fn($answer) => $answer === 'J'));
        $countP = count(array_filter($answers, fn($answer) => $answer === 'P'));


        // Tentukan hasil berdasarkan nilai total
        $questionEnergi     = $countI > $countE ? 'Introvert'   : 'Ekstrovert';
        $questionInformasi  = $countN > $countS ? 'Intuition'   : 'Sensing';
        $questionChoose     = $countT > $countF ? 'Thinking'    : 'Feeling';
        $questionPerspektif = $countJ > $countP ? 'Judging'     : 'Perceiving';


        // Tentukan Type
        $type ='';
        $type .= $countI > $countE ? 'I' : 'E';
        $type .= $countN > $countS ? 'N' : 'S';
        $type .= $countT > $countF ? 'T' : 'F';
        $type .= $countJ > $countP ? 'J' : 'P';
        // Reset session setelah menghitung hasil
        // session()->forget('answers');

        // Kirim data ke view
        return view('dashboards.test-result', compact('questionEnergi', 'questionInformasi', 'questionChoose', 'questionPerspektif', 'countI', 'countE', 'countN', 'countS', 'countT', 'countF', 'countJ', 'countP', 'type'));
    }
}