<?php
declare(strict_types=1);
namespace Harit\HaritModule\Plugin;

use Magento\Catelog\Module\Product;
class AddOnSaleToProductsPlugin{
    public function afterAdd(Product $subject, $result){
        $price = $subject ->getPrice("");
        if($price < 60){
            $result=$result."On Sale";
        }
        return $result;
    }
}
?>