<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\WebapiSecurity\Model\Plugin;

class CacheInvalidator
{
    /**
     * @var \Magento\Framework\App\Cache\TypeListInterface
     */
    protected $cacheTypeList;

    /**
     * CacheInvalidator constructor.
     *
     * @param \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList
     */
    public function __construct(\Magento\Framework\App\Cache\TypeListInterface $cacheTypeList)
    {
        $this->cacheTypeList = $cacheTypeList;
    }

    /**
     * Invalidate WebApi cache if needed.
     * 
     * @param \Magento\Framework\App\Config\Value $subject
     * @param \Magento\Framework\App\Config\Value $result
     * @return \Magento\Framework\App\Config\Value
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterAfterSave(
        \Magento\Framework\App\Config\Value $subject,
        \Magento\Framework\App\Config\Value $result
    ) {
<<<<<<< HEAD
        if ($subject->getPath() == \Magento\WebapiSecurity\Model\Plugin\AnonymousResourceSecurity::XML_ALLOW_INSECURE
            && $subject->isValueChanged()
        ) {
            $this->cacheTypeList->invalidate(\Magento\Framework\App\Cache\Type\Webapi::TYPE_IDENTIFIER);
=======
        if ($result->getPath() == \Magento\WebapiSecurity\Model\Plugin\AnonymousResourceSecurity::XML_ALLOW_INSECURE
            && $result->isValueChanged()
        ) {
            $this->cacheTypeList->invalidate(\Magento\Webapi\Model\Cache\Type\Webapi::TYPE_IDENTIFIER);
>>>>>>> 2abc5a35b10de4d979a9155a47c5778cee85b9bf
        }

        return $result;
    }
}
