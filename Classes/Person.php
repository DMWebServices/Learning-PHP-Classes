<?PHP

Class Person {

    // Properties / Fields
    private $haircolour;
    private $eyecolour;
    public $isHuman = "Yes";

    // Constructor
    public function __construct($haircolour, $eyecolour = "None") {

        $this->haircolour = $haircolour;
        $this->eyecolour = $eyecolour;
        
    }
}

$person1 = new Person("Greeen", "Blue");
$person2 = new Person("Red", "");

echo $person1->isHuman;

