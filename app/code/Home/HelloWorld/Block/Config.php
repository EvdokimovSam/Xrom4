<?php
namespace Home\HelloWorld\Block;
class Config extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Home\HelloWorld\Helper\Data $helperData
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->helperData = $helperData;
        return parent::__construct($context);
    }



    public function test()
    {
        $kitchen = array(
            "test1"=>$this->helperData->getGeneralConfig('display_text1'),
            "test2"=>$this->helperData->getGeneralConfig('display_text2'),
            "test3"=>$this->helperData->getGeneralConfig('display_text3'),
        );
        return $kitchen;
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
