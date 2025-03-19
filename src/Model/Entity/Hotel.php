<?php
namespace Bernh\WebtAdvFluidTemplatingEngine\Model\Entity;
class Hotel{
    public function __construct(protected int $id, protected String $name, protected int $stars, protected String $description)
    {
        if($stars > 5){
            $this->stars = 5;
        }else if($stars < 0){
            $this->stars = 0;
        }
    }
    public function getName(){
        return $this->name;
    }

    public function getStars(){
        return $this->stars;
    }
    public function getStarsStr(){
        return str_repeat("⭐",$this->getStars()).str_repeat("☆",5-$this->getStars());
    }

    public function getDescription(){
        return $this->description;
    }
    public function getId(){
        return $this->id;
    }
}