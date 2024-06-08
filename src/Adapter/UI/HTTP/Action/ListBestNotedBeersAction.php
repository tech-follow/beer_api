<?php

namespace App\Adapter\UI\HTTP\Action;

final class ListBestNotedBeersAction
{
    /**
     * @return iterable<App\Domain\Model\Beer>
     */
    public function __invoke(): iterable
    {
        return [];
    }
}
