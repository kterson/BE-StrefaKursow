<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.data_collector.commands_and_queries_collector' shared service.

return $this->services['prestashop.bundle.data_collector.commands_and_queries_collector'] = new \PrestaShopBundle\DataCollector\CommandsAndQueriesDataCollector(${($_ = isset($this->services['prestashop.core.command_bus.executed_command_registry']) ? $this->services['prestashop.core.command_bus.executed_command_registry'] : $this->load('getPrestashop_Core_CommandBus_ExecutedCommandRegistryService.php')) && false ?: '_'});
