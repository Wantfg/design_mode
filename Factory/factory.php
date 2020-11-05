<?php
namespace Factory\Factory;

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

interface IFactory{
    public function makePhone();
}

class XiaoMiFactory implements IFactory{
    public function makePhone()
    {
        return new MiPhone();
    }
}

class AppleFactory implements IFactory{
    public function makePhone()
    {
        return new IPhone();
    }
}

$miFactory = new XiaoMiFactory();
$appleFactory = new AppleFactory();

$miFactory->makePhone();
$appleFactory->makePhone();