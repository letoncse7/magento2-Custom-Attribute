<?php

namespace Fastbazzar\MobileNumber\Block\Magento\Customer\Form;

class Edit extends \Magento\Customer\Block\Form\Edit
{
    public function getMobileNumber()
    {
        return $this->customerSession->getCustomer()->getMobilenumber();
    }

}