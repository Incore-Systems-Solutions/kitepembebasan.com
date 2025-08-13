<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function kitePembebasan()
    {
        return view('blog.kite-pembebasan', [
            'metaTitle' => 'KITE Pembebasan: Fasilitas Fiskal untuk Industri Ekspor | kitepembebasan.com',
            'metaDescription' => 'Pelajari KITE pembebasan dan manfaat fasilitas fiskal untuk mendukung industri ekspor, kawasan berikat, sistem bea cukai, ERP manufaktur, dan solusi IT pabrik.',
            'metaKeywords' => 'KITE pembebasan, fasilitas fiskal, industri ekspor, kawasan berikat, sistem bea cukai, sistem inventory, ERP manufaktur, pengawasan barang, solusi industri, sistem IT pabrik'
        ]);
    }

    public function fasilitasFiskal()
    {
        return view('blog.fasilitas-fiskal', [
            'metaTitle' => 'Fasilitas Fiskal: Dukungan untuk Pertumbuhan Industri Ekspor | kitepembebasan.com',
            'metaDescription' => 'Temukan berbagai fasilitas fiskal yang mendukung industri ekspor, pengawasan barang, dan sistem bea cukai untuk meningkatkan daya saing perusahaan.',
            'metaKeywords' => 'fasilitas fiskal, KITE pembebasan, industri ekspor, kawasan berikat, sistem bea cukai, sistem inventory, ERP manufaktur, pengawasan barang, solusi industri, sistem IT pabrik'
        ]);
    }

    public function industriEkspor()
    {
        return view('blog.industri-ekspor', [
            'metaTitle' => 'Industri Ekspor: Strategi dan Solusi Teknologi | kitepembebasan.com',
            'metaDescription' => 'Panduan lengkap industri ekspor dengan dukungan fasilitas fiskal, kawasan berikat, dan sistem IT pabrik untuk efisiensi produksi dan distribusi.',
            'metaKeywords' => 'industri ekspor, KITE pembebasan, fasilitas fiskal, kawasan berikat, sistem bea cukai, sistem inventory, ERP manufaktur, pengawasan barang, solusi industri, sistem IT pabrik'
        ]);
    }

    public function kawasanBerikat()
    {
        return view('blog.kawasan-berikat', [
            'metaTitle' => 'Kawasan Berikat: Efisiensi Operasional dan Pajak | kitepembebasan.com',
            'metaDescription' => 'Manfaat kawasan berikat dalam mendukung ekspor-impor, efisiensi pajak, dan integrasi dengan sistem bea cukai serta ERP manufaktur.',
            'metaKeywords' => 'kawasan berikat, KITE pembebasan, fasilitas fiskal, industri ekspor, sistem bea cukai, sistem inventory, ERP manufaktur, pengawasan barang, solusi industri, sistem IT pabrik'
        ]);
    }

    public function sistemBeaCukai()
    {
        return view('blog.sistem-beacukai', [
            'metaTitle' => 'Sistem Bea Cukai: Otomasi dan Kepatuhan | kitepembebasan.com',
            'metaDescription' => 'Solusi sistem bea cukai modern untuk mempercepat proses impor-ekspor, mendukung kawasan berikat, dan integrasi ERP manufaktur.',
            'metaKeywords' => 'sistem bea cukai, KITE pembebasan, fasilitas fiskal, industri ekspor, kawasan berikat, sistem inventory, ERP manufaktur, pengawasan barang, solusi industri, sistem IT pabrik'
        ]);
    }

    public function sistemInventory()
    {
        return view('blog.sistem-inventory', [
            'metaTitle' => 'Sistem Inventory: Kendali Penuh atas Persediaan | kitepembebasan.com',
            'metaDescription' => 'Tingkatkan efisiensi pengelolaan barang dengan sistem inventory terintegrasi ERP dan solusi industri untuk manufaktur dan ekspor.',
            'metaKeywords' => 'sistem inventory, KITE pembebasan, fasilitas fiskal, industri ekspor, kawasan berikat, sistem bea cukai, ERP manufaktur, pengawasan barang, solusi industri, sistem IT pabrik'
        ]);
    }

    public function erpManufaktur()
    {
        return view('blog.erp-manufaktur', [
            'metaTitle' => 'ERP Manufaktur: Integrasi Produksi dan Distribusi | kitepembebasan.com',
            'metaDescription' => 'ERP manufaktur membantu otomasi proses produksi, integrasi sistem bea cukai, dan mendukung fasilitas KITE pembebasan untuk ekspor.',
            'metaKeywords' => 'ERP manufaktur, KITE pembebasan, fasilitas fiskal, industri ekspor, kawasan berikat, sistem bea cukai, sistem inventory, pengawasan barang, solusi industri, sistem IT pabrik'
        ]);
    }

    public function pengawasanBarang()
    {
        return view('blog.pengawasan-barang', [
            'metaTitle' => 'Pengawasan Barang: Akurasi dan Kepatuhan | kitepembebasan.com',
            'metaDescription' => 'Solusi pengawasan barang untuk industri ekspor, kawasan berikat, dan sistem inventory yang terintegrasi dengan ERP manufaktur.',
            'metaKeywords' => 'pengawasan barang, KITE pembebasan, fasilitas fiskal, industri ekspor, kawasan berikat, sistem bea cukai, sistem inventory, ERP manufaktur, solusi industri, sistem IT pabrik'
        ]);
    }

    public function solusiIndustri()
    {
        return view('blog.solusi-industri', [
            'metaTitle' => 'Solusi Industri: Teknologi untuk Pertumbuhan Usaha | kitepembebasan.com',
            'metaDescription' => 'Berbagai solusi industri berbasis teknologi untuk mendukung manufaktur, pengawasan barang, dan optimalisasi fasilitas fiskal.',
            'metaKeywords' => 'solusi industri, KITE pembebasan, fasilitas fiskal, industri ekspor, kawasan berikat, sistem bea cukai, sistem inventory, ERP manufaktur, pengawasan barang, sistem IT pabrik'
        ]);
    }

    public function sistemITPabrik()
    {
        return view('blog.sistem-it-pabrik', [
            'metaTitle' => 'Sistem IT Pabrik: Digitalisasi Proses Produksi | kitepembebasan.com',
            'metaDescription' => 'Optimalkan proses produksi dengan sistem IT pabrik yang terintegrasi dengan ERP, sistem bea cukai, dan pengawasan barang.',
            'metaKeywords' => 'sistem IT pabrik, KITE pembebasan, fasilitas fiskal, industri ekspor, kawasan berikat, sistem bea cukai, sistem inventory, ERP manufaktur, pengawasan barang, solusi industri'
        ]);
    }

}
