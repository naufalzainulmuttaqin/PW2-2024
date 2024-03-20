<?php
// setiap class harus memakai huruf kapital
class Lingkaran
{
    // access modifier 1. public 2. private 3. protected
    // public = atribut / method dapat di akses walaupun di luar class
    // private = atribut / method hanya dapat i akses di dalam class
    // protected = mirip seperti private, tetapi dapat di akses oleh anak classnya (childclass)



    // Atribut / Properti
    private $jari;
    const PHI = 3.14; //nilainya gabisa diubah const

    // method: function yang ada dalam class
    // yang ada didalam kelas variabel  berubah menjadi class
    function __construct($r)
    {
        // isi atribut jari saat pembuatan object
        $this->jari = $r;
    }

    public function getLuas()
    {
        return 0.5 * self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
}
