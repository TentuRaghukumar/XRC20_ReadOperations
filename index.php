<?php

use Lessmore92\Ethereum\Foundation\StandardERC20Token;
require "vendor/autoload.php";




class XRC extends StandardERC20Token 
{
    protected $contractAddress = "0xA6155BfaC44C1926a10dDE23fcbC198Cc83e9301";  
}



$XDC = new XRC ("https://rpc.apothem.network/0xA6155BfaC44C1926a10dDE23fcbC198Cc83e9301");


//Some Read_operations
//name
echo "Name Of Token :-";
var_dump($XDC->name());

//decimal
echo "Decimal :-";
var_dump($XDC->decimals());

//symbol
echo "Symbol Of Token :-";
var_dump($XDC->symbol());

//get balanceof
echo "Balanceof Token :-";
var_dump($XDC->balanceOf("0xA6155BfaC44C1926a10dDE23fcbC198Cc83e9301"));


?>
