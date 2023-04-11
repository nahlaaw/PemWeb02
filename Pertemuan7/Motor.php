<?php

class Motor{
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    public function __construct($merk, $bensin, $topSpeed, $cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    public function jalan($jarak)
    {
        return "Bensin Berkurang Sebesar : " . ($jarak / 30) . " Liter";
    }
}

$motor1 = new Motor('Scoopy', 3, 115, 150);
echo "Merk Motor: " . $motor1->merk . "<br/>";
echo "Jarak Tempuh: 85km <br/>";
echo $motor1->jalan(85);

echo "<hr>";

$motor2 = new Motor('Ninja H2', 5, 332, 998);
echo "Merk Motor: " . $motor2->merk . "<br/>";
echo "Jarak Tempuh: 135km <br/>";
echo $motor2->jalan(135);