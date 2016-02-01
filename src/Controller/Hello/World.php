<?php
    /**
     * Diazwatson_SampleModule
     *
     * @category    Diazwatson
     * @package     Diazwatson_SampleModule
     * @Date        01/2016
     * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
     * @author      @diazwatson
     */

    namespace Diazwatson\SampleModule\Controller\Hello;

    use Magento\Framework\View\Result\PageFactory;
    use Magento\Framework\App\Action\Context;


    class World extends \Magento\Framework\App\Action\Action
    {
        protected $_pageFactory;

        public function __construct(Context $context, PageFactory $_pageFactory)
        {
            $this->_pageFactory = $_pageFactory;
            return parent::__construct($context);
        }


        public function execute()
        {
            $pageObject = $this->_pageFactory->create();
            return $pageObject;
        }
    }