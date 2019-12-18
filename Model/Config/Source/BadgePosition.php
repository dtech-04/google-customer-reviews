<?php

namespace Dtech\GoogleCustomerReviews\Model\Config\Source;

class BadgePosition implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
        	['value' => 'BOTTOM_LEFT', 'label' => __('BOTTOM LEFT')],
        	['value' => 'BOTTOM_RIGHT', 'label' => __('BOTTOM RIGHT')],
            ['value' => 'BOTTOM_RIGHT', 'label' => __('INLINE')]
        ];
    }

    public function toArray()
    {
        return [
        	'BOTTOM_LEFT' => __('BOTTOM LEFT'),
        	'BOTTOM_RIGHT' => __('BOTTOM RIGHT'),
            'BOTTOM_RIGHT' => __('INLINE')
        ];
    }
}