<?php

//Buat class laptop
class laptop{
    //buat public property
    public $pemilik;

    //buat public method
    public function hidupkan_laptop(){
        return "Hidupkan Laptop";
    }
}
//buat objek dari class laptop (instansiasi)
$lapton_anto = new laptop();

//set property
$laptop_anto->pemilik="Anto ";

//Tampilkan property
echo $laptop_anto->pemilik;//Anto

//Tampilkan method 
echo $lapton_anto->hidupkan_laptop();//"Hidupkan Laptop"