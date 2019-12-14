<?php

namespace Dtech\GoogleCustomerReviews\Model\Config\Source;

class DialogStyle implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
        	['value' => 'CENTER_DIALOG', 'label' => __('CENTER DIALOG')],
        	['value' => 'TOP_RIGHT_DIALOG', 'label' => __('TOP RIGHT DIALOG')],
        	['value' => 'TOP_LEFT_DIALOG', 'label' => __('TOP LEFT DIALOG')],
        	['value' => 'BOTTOM_TRAY', 'label' => __('BOTTOM TRAY')],
        	['value' => 'BOTTOM_RIGHT_DIALOG', 'label' => __('BOTTOM RIGHT DIALOG')],
        	['value' => 'BOTTOM_LEFT_DIALOG', 'label' => __('BOTTOM LEFT DIALOG')]
        ];
    }

    public function toArray()
    {
        return [
        	'CENTER_DIALOG' => __('CENTER DIALOG'),
        	'TOP_RIGHT_DIALOG' => __('TOP RIGHT DIALOG'),
        	'TOP_LEFT_DIALOG' => __('TOP LEFT DIALOG'),
        	'BOTTOM_TRAY' => __('BOTTOM TRAY'),
        	'BOTTOM_RIGHT_DIALOG' => __('BOTTOM RIGHT DIALOG'),
        	'BOTTOM_LEFT_DIALOG' => __('BOTTOM LEFT DIALOG')
        ];
    }
}