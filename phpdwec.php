<?php
$shopping_cart = 9.95;
$tipo = array('cables', 'perifericos');
$shipping_price = 0;
$tipo[0]="cables";
$shipping_price = 7.50;
if($shopping_cart<20){
    if($tipo[0]=="cables"){
        echo " no se pueden enviar";
    }else{
        echo "Los gastos de envío son 4.99€"
    }

}elseif($shopping_cart>=20&&$shopping_cart<=50){
    echo "Los gastos de envío son 4.99"
}else{}

if($shopping_cart>=50&&$shopping_cart<=150){
    echo "envio gratis"

}elseif($shopping_cart>150){
    echo "codigo descuento GIMBERNAT_20_%"
}elseif{
    }