<?php
namespace Factory\AbstractFactory;

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
interface Pc{
    public function make();
}

class MiPc implements Pc{

    public function __construct()
    {
        $this->make();
    }
    public function make()
    {
        echo 'product Mi personal computer' . PHP_EOL;
    }
}

class Mac implements Pc{

    public function __construct()
    {
        $this->make();
    }
    public function make()
    {
        echo 'product Apple Mac' . PHP_EOL;
    }
}

interface IFactory{
    public function makePhone();
    public function makePc();
}

class XiaoMiFactory implements IFactory{
    public function makePhone()
    {
        return new MiPhone();
    }
    public function makePc()
    {
        return new MiPc();
    }
}

class AppleFactory implements IFactory{
    public function makePhone()
    {
        return new IPhone();
    }

    public function makePc()
    {
       return new Mac();
    }
}

$miFactory = new XiaoMiFactory();
$appleFactory = new AppleFactory();

$miFactory->makePhone();
$miFactory->makePc();
$appleFactory->makePhone();
$appleFactory->makePc();