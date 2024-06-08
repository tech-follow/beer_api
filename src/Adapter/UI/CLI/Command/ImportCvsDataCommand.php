<?php

namespace App\Adapter\UI\CLI\Command;

use Symfony\Component\Console\Command\Command;

final class ImportCvsDataCommand extends Command
{
    private const string NAME = 'app:import-csv-data';

    public function __construct()
    {
        parent::__construct(self::NAME);
    }

    #[\Override]
    protected function configure(): void
    {
        $this
            ->setDescription('Imports the domain model data from a CSV file.')
        ;
    }
}
