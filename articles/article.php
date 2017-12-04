<?php
require("article-class.php");

$article_1 = new Article("Sjaak");
$article_1->setAmount(5);
echo $article_1::getAmount();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

