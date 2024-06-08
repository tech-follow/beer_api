<?php

namespace App\Infrastructure\Vendor\Symfony;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

final class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    #[\Override]
    public function getProjectDir(): string
    {
        return __DIR__.'/../../../..';
    }

    private function getConfigDir(): string
    {
        return __DIR__.'/Resources/config';
    }

    private function configureContainer(ContainerConfigurator $container, LoaderInterface $loader, ContainerBuilder $builder): void
    {
        $configDir = $this->getConfigDir();

        $container->import("{$configDir}/parameters.yaml");
        $container->import("{$configDir}/packages/*.yaml");
        $container->import("{$configDir}/services.yaml");
    }

    private function configureRoutes(RoutingConfigurator $routes): void
    {
        $configDir = $this->getConfigDir();

        $routes->import("{$configDir}/routes/*.yaml");
    }
}
