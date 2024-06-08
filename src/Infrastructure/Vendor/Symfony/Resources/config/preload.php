<?php

$preloadPath = __DIR__.'/../../../../../../var/cache/prod/App_Infrastructure_Symfony_KernelProdContainer.preload.php';

if (file_exists($preloadPath)) {
    require $preloadPath;
}
