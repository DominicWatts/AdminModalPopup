<?php
/**
 * Copyright © 2021 All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Xigen\AdminModal\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;

class Modal extends Template
{
    /**
     * Constructor
     * @param \Magento\Backend\Block\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getModalContent()
    {
        return __('Random block content for %1', 
            $this->_storeManager->getStore()->getName(), 
        );
    }
}

