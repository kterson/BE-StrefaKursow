<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.category.delete_categories' shared service.

return $this->services['form.type.category.delete_categories'] = new \PrestaShopBundle\Form\Admin\Sell\Category\DeleteCategoriesType(${($_ = isset($this->services['prestashop.core.form.choice_provider.category_delete_mode']) ? $this->services['prestashop.core.form.choice_provider.category_delete_mode'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CategoryDeleteModeService.php')) && false ?: '_'}->getChoices());
