<?php

namespace MageShop\AjaxShoppingCartUpdate\Observer;
use Magento\Framework\Event\Observer;

class SetTemplate implements \Magento\Framework\Event\ObserverInterface
{
    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function execute(Observer $observer) {
        $layout = $observer->getLayout();
        $changeTemplate = $this->scopeConfig->getValue(
            'AjaxShoppingCartUpdate/AjaxShoppingCartUpdateGroup/isEnableDisable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        if (intval($changeTemplate)) {
            $block = $layout->getBlock('checkout.cart.form');
            if ($block)
                $block->setTemplate('MageShop_AjaxShoppingCartUpdate::cart/form.phtml');

            $block = $layout->getChildBlock('checkout.cart.item.renderers','simple');
            if ($block)
                $block->setTemplate('MageShop_AjaxShoppingCartUpdate::cart/item/default.phtml');

            $block = $layout->getChildBlock('checkout.cart.item.renderers','bundle');
            if ($block)
                $block->setTemplate('MageShop_AjaxShoppingCartUpdate::cart/item/default.phtml');

            $block = $layout->getChildBlock('checkout.cart.item.renderers','virtual');
            if ($block)
                $block->setTemplate('MageShop_AjaxShoppingCartUpdate::cart/item/default.phtml');

            $block = $layout->getChildBlock('checkout.cart.item.renderers','default');
            if ($block)
                $block->setTemplate('MageShop_AjaxShoppingCartUpdate::cart/item/default.phtml');

            $block = $layout->getChildBlock('checkout.cart.item.renderers','configurable');
            if ($block)
                $block->setTemplate('MageShop_AjaxShoppingCartUpdate::cart/item/default.phtml');

            $block = $layout->getChildBlock('checkout.cart.item.renderers','downloadable');
            if ($block)
                $block->setTemplate('MageShop_AjaxShoppingCartUpdate::cart/item/default.phtml');

            $block = $layout->getChildBlock('checkout.cart.item.renderers','grouped');
            if ($block)
                $block->setTemplate('MageShop_AjaxShoppingCartUpdate::cart/item/default.phtml');
        }
    }
}
