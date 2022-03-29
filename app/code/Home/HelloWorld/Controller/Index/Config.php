<?php

namespace Home\HelloWorld\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

    protected $helperData;
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Home\HelloWorld\Helper\Data $helperData

    )
    {
        $this->helperData = $helperData;
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {

          return $this->_pageFactory->create();
          //echo $this->helperData->getGeneralConfig('enable');
          //echo $this->helperData->getGeneralConfig('display_text1');
          //echo $this->helperData->getGeneralConfig('display_text2');
          //echo $this->helperData->getGeneralConfig('display_text3');
          //exit();

    }


}
