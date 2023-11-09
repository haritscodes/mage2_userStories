<?php
namespace Harit\US3\Observer;
use  Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class Observer implements ObserverInterface{
    private $log;
    public  function __construct(LoggerInterface $log){
        $this->log=$log;
    }
    public function execute(\Magento\Framework\Event\Observer $observer){
        $productName = $observer->getProduct()->getName();
        $this->log->info($productName." HummingBird Product");
    }
}
?>