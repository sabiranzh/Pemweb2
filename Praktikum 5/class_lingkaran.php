<?php
class Lingkaran {
    /**
     * Access Modifier
     * 1. public : atribut/metohed yang dapat di akses walaupun diliar class
     * 2. private : atribut/method hanya dapat diakses didalam class
     * 3. protected : atribut/method hanya dapat diakses oleh class turunan
     */
    //properti/atribut
    private $jari;
    const PHI = 3.14;

    //method: function yang ada dalam class
    public function __construct($r)
    {
        $this->jari = $r;
    }

    public function getLuas(){
        return 0.5* self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(){
        return 2 * self::PHI * $this->jari * $this->jari;
    }

}