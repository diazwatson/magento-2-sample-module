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

    namespace Diazwatson\SampleModule\Block;

    use Magento\Framework\View\Element\Template;


    class Main extends Template
    {
        public function _prepareLayout()
        {
            $this->setMessage('Message coming from prepareLayout method in block');
            $this->setName($this->getRequest()->getParam('name'));
        }

        public function getMethodMessage()
        {
            return "This is an example of method message";
        }
    }