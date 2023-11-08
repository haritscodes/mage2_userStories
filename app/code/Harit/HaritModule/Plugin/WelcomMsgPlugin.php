<?php
namespace Harit\HaritModule\Plugin;
use Magento\Theme\Block\Html\Header;
class WelcomeMasPlugin{
    public function afterGetWelcome(Header $subject, $result){
        return "Welcome HBWSL!";
    }
}
?>