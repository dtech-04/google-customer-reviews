<?php

namespace Dtech\GoogleCustomerReviews\Block;

use Dtech\GoogleCustomerReviews\Helper\Data;

class Survey extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Data
     */
    protected $_helper;

    /**
     * @var \Magento\Checkout\Model\Session
     */
    protected $_checkoutSession;

    /**
     * @var Magento\Framework\Stdlib\DateTime\TimezoneInterface
    */
    protected $_timezoneInterface;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Data $helper,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezoneInterface,
        array $data = []
    ) {
        $this->_helper = $helper;
        $this->_checkoutSession = $checkoutSession;
        $this->_timezoneInterface = $timezoneInterface;
        parent::__construct($context, $data);
    }

    /**
     * Initialize data and prepare it for output
     *
     * @return string
     */
    protected function _beforeToHtml()
    {
        $this->prepareBlockData();
        return parent::_beforeToHtml();
    }

    /**
     * @return date
     */
    public function getEstimatedDeliveryDate()
    {
        $today = $this->_timezoneInterface->date()->format('Y-m-d');
        $estimatedDeliveryDays = $this->_helper->getEstimatedDeliveryDays();
        $estimatedDeliveryDate = date('Y-m-d', strtotime($today. ' + '.$estimatedDeliveryDays.' days'));

        return $estimatedDeliveryDate;
    }

    /**
     * @return array|mixed
     */
    public function prepareBlockData()
    {
        $order = $this->_checkoutSession->getLastRealOrder();

        $this->addData(
            [   
                'merchant_id' => $this->_helper->getGoogleMerchantId(),
                'order_id'  => $order->getIncrementId(),
                'opt_in_style' => $this->_helper->getSurveyDialogStyle(),
                'language' => $this->_helper->getLanguage(),
                'estimated_delivery_date' => $this->getEstimatedDeliveryDate(),
                'email' => $order->getCustomerEmail(),
                'delivery_country' => $order->getShippingAddress()->getCountryId()
            ]
        );
    }
}