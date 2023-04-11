 <?php
 class Hero{
    // access  odifier pada oop ada 3: public, private, protected

    //attribut / properti
    public $nama;
    public $health;
    public $damage;
    public $level = 1;

    //  constructor adalah method yang secara otomatis ketika objek dibuat
    public function __construct($nama, $health, $damage)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }
    // method untuk menampilkan info dari hero
    public function getInfo(){
        echo "<br> Nama: " . $this->nama;
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
        echo "<br> Level: " . $this->level;
    }

    // method untuk naik 1 level
    public function levelUp($number){
        $this->level = $this->level + 1;
        $this->health = $this->health + (200 * $number);
        $this->damage = $this->damage + (500 * $number);
    }
 }

    // membuat object dari class Hero
$hero1 = new Hero("Alucard", 3200, 200);

$hero1 = new Hero("Franco", 5200, 50);

$hero1->getInfo();

echo "<hr>";

$hero1->levelUp(3);
$hero1->getInfo();