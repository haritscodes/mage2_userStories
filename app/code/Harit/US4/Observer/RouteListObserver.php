<?php

namespace Harit\US4\Observer;
use Magento\Framework\App\RouterList;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class RouteListObserver implements ObserverInterface{
    protected $logger;
    protected $routerList;
    public function __construct(RouterList $routerList, LoggerInterface $logger){
        $this->logger = $logger;
        $this->routerList = $routerList;
    }
    public function execute(Observer $observer){
        $routers=[];
        foreach($this->routerList as $route){
            $routers[]= get_class($route);
        }
        $this->logger->info('List of all Router are: '.implode (", ", $routers));
    }
}
?>