<?php
class product {
    protected $name;
    protected $price;
    protected $discount;

    public function __construct($name, $price, $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price)  {
        $this->price = $price;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
    }
    
}

class CDMusic extends product{
    private $artist;
    private $genre;

    function __construct($name, $price, $discount, $artist, $genre) {
        parent::__construct($name, $price, $discount);
        $this->artist = $artist;
        $this->genre = $genre;
    }

    public function getArtist(){
        return $this->artist;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function menghitungHargaCDMusik(){
        return $this->getPrice() + 0.1;
    }

    public function menghitungDiscountCDMusik(){
        return $this-> menghitungHargaCDMusik() * (1 - $this->discount / 100);
    }

    public function displayCDMusic() {
        echo "Album dari artis " . $this->artist . " yang berjudul " . $this->getName() . " dengan genre " . $this->genre . " dengan harga Rp. " . $this->getPrice() . " mendapat discount 10% menjadi Rp. " . $this->getDiscount();
    }
}

class CDRack extends product{
    private $capacity;
    private $model;

    function __construct($name, $price, $discount, $capacity, $model) {
        parent::__construct($name, $price, $discount);
        $this->capacity = $capacity;
        $this->model = $model;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function getModel() {
        return $this->model;
    }

    public function menghitungHargaCDRack(){
        return $this->price + 0.15;
    }

    public function displayCDRack() {
        echo "<br>" . "Rak CD Model: " . $this->model . "<br>" .
            "Kapasitas: " . $this->capacity . "<br>" .
            "Nama: " . $this->getName() .  "<br>" .
            "Harga: Rp." . $this->getPrice() . "<br>" .
            "diskon: " . $this->getDiscount(). "<br>";
    }

}

$musik = new CDMusic('Not You', 300000, 10 , 'Alam Walker', "Pop");
$musik->setPrice($musik->menghitungHargaCDMusik());
$musik->setDiscount($musik->menghitungDiscountCDMusik());
$musik->displayCDMusic();
$rack = new CDRack(' Alan Walker ', 300000 , 10 , 10 , 'P328');
$rack->setPrice($rack->menghitungHargaCDRack());
$rack->displayCDRack();
?>