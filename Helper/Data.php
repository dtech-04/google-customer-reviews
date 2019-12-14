<?php

namespace Dtech\GoogleCustomerReviews\Helper;

use Dtech\Base\Helper\AbstractData;

class Data extends AbstractData
{
    const CONFIG_MODULE_PATH = 'google_customer_reviews';

    /**
     * @return array|mixed
     */
    public function getGoogleMerchantId()
    {
        return $this->getConfigGeneral('google_merchant_id', $this->getStoreId());
    }

    /**
     * @return array|mixed
     */
    public function getLanguage()
    {
        return $this->getConfigGeneral('language', $this->getStoreId());
    }

    /**
     * @return array|mixed
     */
    public function getBadgeEnabled()
    {
        return $this->getModuleConfig('google_customer_reviews_badge/enabled', $this->getStoreId());
    }

    /**
     * @return array|mixed
     */
    public function getBadgePosition()
    {
        return $this->getModuleConfig('google_customer_reviews_badge/badge_position', $this->getStoreId());
    }

    /**
     * @return array|mixed
     */
    public function getSurveyEnabled()
    {
        return $this->getModuleConfig('google_customer_reviews_survey/enabled', $this->getStoreId());
    }

    /**
     * @return array|mixed
     */
    public function getEstimatedDeliveryDays()
    {
        return $this->getModuleConfig('google_customer_reviews_survey/estimated_delivery_days', $this->getStoreId());
    }

    /**
     * @return array|mixed
     */
    public function getSurveyDialogStyle()
    {
        return $this->getModuleConfig('google_customer_reviews_survey/dialog_style', $this->getStoreId());
    }
}