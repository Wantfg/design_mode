<?php
namespace Factory\SimpleFactory;

interface Phone{
    public function make();
}

class MiPhone implements Phone{

    public function __construct()
    {
        $this->make();
    }
    public function make()
    {
        echo 'product Mi Phone' . PHP_EOL;
    }
}

class IPhone implements Phone{

    public function __construct()
    {
        $this->make();
    }
    public function make()
    {
        echo 'product Apple Phone' . PHP_EOL;
    }
}

class PhoneFactory{

    public function makePhone(string $phoneType)
    {
        if('MiPhone' == $phoneType){
            return new MiPhone();
        }elseif('IPhone' == $phoneType){
            return new IPhone();
        }
        return null;
    }
}

$factory = new PhoneFactory;
$miPhone = $factory->makePhone('MiPhone');
$IPhone = $factory->makePhone('IPhone');
