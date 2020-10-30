<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_second_level_cache.cache_configuration' shared service.

$this->services['doctrine.orm.default_second_level_cache.cache_configuration'] = $instance = new \Doctrine\ORM\Cache\CacheConfiguration();

$instance->setCacheFactory(new \Doctrine\ORM\Cache\DefaultCacheFactory(${($_ = isset($this->services['doctrine.orm.default_second_level_cache.regions_configuration']) ? $this->services['doctrine.orm.default_second_level_cache.regions_configuration'] : ($this->services['doctrine.orm.default_second_level_cache.regions_configuration'] = new \Doctrine\ORM\Cache\RegionsConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['doctrine.app_cache_provider']) ? $this->services['doctrine.app_cache_provider'] : $this->getDoctrine_AppCacheProviderService()) && false ?: '_'}));
$instance->setRegionsConfiguration(new \Doctrine\ORM\Cache\RegionsConfiguration());

return $instance;
