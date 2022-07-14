<?php
/**
 * Programa para instaciar as classes Medico e Engenheiro
 * @author Felipe
 * @version 1.0
 * @package POO PHP
 */
include ('Pessoa.php');
include ('Engenheiro.php');
include('Medico.php');

$e1 = new engenheiro;
$e1->setNome("Felipe");
$e1->setData("14/08/2004");
$e1->setCPF("123.345.456-90");
$e1->setRG("12343453456");
$e1->setCREA("1231231232");

echo $e1->getNome()."<br>".
$e1->getData()."<br>".
$e1->getCPF()."<br>".
$e1->getRG()."<br>".
$e1->getCREA()."<br>"."<br>";

$m1 = new medico;
$m1->setNome("Miguel");
$m1->setData("18/10/1995");
$m1->setCPF("345.234.456-89");
$m1->setRG("2134324523453");
$m1->setCRM("23753254737");

echo $m1->getNome()."<br>".
$m1->getData()."<br>".
$m1->getCPF()."<br>".
$m1->getRG()."<br>".
$m1->getCRM()."<br>";

?>