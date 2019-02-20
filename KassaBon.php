<?php
require 'Bon.php';


$bon = new Bon();

$producten = [];

$producten[$_POST['product1']] = $_POST['product1prijs'];
$producten[$_POST['product2']] = $_POST['product2prijs'];
$producten[$_POST['product3']] = $_POST['product3prijs'];

echo 'Datum: ' . date('d-m-Y') . '<br>';
echo '<b>Kassabon:</b><br>';
foreach ($producten as $artikelNaam => $prijs) {
  $product = new Product();
  $product->setPrijs(floatval($prijs));
  $product->setNaam($artikelNaam);
  $bon->addProduct($product);
  echo $product->getNaam() . ' ' . $product->getPrijs() . ' euro<br>';
}

echo '<br>';

echo $bon->getPrijs() . ' euro excl btw<br>';
echo $bon->getPrijsInclBTW() . " euro incl btw<br>";


