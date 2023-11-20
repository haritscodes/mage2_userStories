<?php
namespace Harit\Mymodules\Block;

use Magento\Framework\View\Element\Template;
class CustomBlock extends Template{
    protected function _toHtml(){
        return "<p style=`color='orange'`>This is userstory6 by Harit Sharma</p>";
    }
    protected function _afterToHtml($html){
        return $html;
    }
}

?>