<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.cms_page' shared service.

$this->services['prestashop.core.grid.definition.factory.cms_page'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CmsPageDefinitionFactory(${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.query_bus']) ? $this->services['prestashop.core.query_bus'] : $this->load('getPrestashop_Core_QueryBusService.php')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.multistore_feature']) ? $this->services['prestashop.adapter.multistore_feature'] : $this->getPrestashop_Adapter_MultistoreFeatureService()) && false ?: '_'}->isUsed());

$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});

return $instance;
