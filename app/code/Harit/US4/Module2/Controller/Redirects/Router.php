<?php
namespace UserStory4\Module2\Controller;

use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\RouterInterface;
use Magento\Framework\App\RequireInterface;

class Router implements RouterInterface{
    private $actionFactory;
    private $pascalCasePattern="/^[A-Z][A-Za-Z0-9]*$/";
    public function __construct(ActionFactory $actionFactory){
        $this->actionFactory =  $actionFactory;
    }
    public function splitPathIntoChunks($path){
        $pathChunks=preq_split('/^[A-Z]/'); 
    }

}
?>