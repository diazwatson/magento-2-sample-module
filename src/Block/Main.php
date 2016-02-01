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

    /**
     * Class Main
     * @package Diazwatson\SampleModule\Block
     */
    class Main extends Template
    {

        /**
         * Prepare Layout to get a param and include
         * it into a custom message
         */
        public function _prepareLayout()
        {
            $this->setMessage('Message coming from prepareLayout method in block');
            $this->setName($this->getRequest()->getParam('name'));
        }

        /**
         * Simple method that will be called from template
         * @return string
         */
        public function getMethodMessage()
        {
            return "This is an example of method getMethodMessage";
        }
    }