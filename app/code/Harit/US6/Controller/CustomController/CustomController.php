<?php
namespace Harit\US6\Controller\Index;
use Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
class CustomController extends Action{
    protected $_pageFactory;
    public function __construct(Context $context,
    PageFactory $pageFactory){
        $this->_pageFactory=$pageFactory;
        parent::__construct($context);
    }
    public function execute(){
        $resultPage=$this->_pageFactory->create();
        return $resultPage;
    }
}
?>