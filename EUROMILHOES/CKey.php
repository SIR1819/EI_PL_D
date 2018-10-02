<?php

class Key {
    // properties

    public $stars   = array();
    public $numbers = array();

    // methods
    public function __construct() {
        $this->stars = $this->genkey(1,12,2);
        $this->numbers = $this->genkey(1,50,5);
    }

    private function genkey($min, $max, $num) {
        $key = array();
        while(sizeof($key)<$num) {
            $new = rand($min, $max);
            if (!in_array($new,$key)) {
                $key[] = $new;
                //array_push($key,$new);
            }
        }
        sort($key);
        return $key;
    }
}

// test code
$newKey = new Key();

var_dump($newKey);

?>