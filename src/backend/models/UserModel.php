<?php
class UserModel{
    private $name,$surname;
    private $tel,$tel2;
    private $rgCpf;
    private $assoc;
    //Getters and Setters
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getTel(){
        return $this->tel;
    }
    public function getTel2(){
        return $this->tel2;
    }
    public function getRgCpg(){
        return $this->rgCpf;
    }
    public function assoc(){
        return $this->assoc;
    }
    //Class Constructor
    public function __construct($name,$surname,$tel,$tel2,$rgCpf,$assoc){
        $this->name = $name;
        $this->surname = $surname;
        $this->tel = $tel;
        $this->tel2 = $tel2;
        $this->rgCpf = $rgCpf;
        $this->assoc = $assoc;
        return true;
    }

}