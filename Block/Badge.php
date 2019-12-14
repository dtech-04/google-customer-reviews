<?php

namespace Dtech\GoogleCustomerReviews\Block;

use Dtech\GoogleCustomerReviews\Helper\Data;

class Badge extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Data
     */
    protected $_helper;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Data $helper,
        array $data = []
    ) {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getGoogleMerchantId()
    {
        return $this->_helper->getGoogleMerchantId();
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->_helper->getLanguage();
    }

    /**
     * @return string
     */
    public function getBadgePosition()
    {
        return $this->_helper->getBadgePosition();
    }
}