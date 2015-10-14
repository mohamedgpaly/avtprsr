<?php

namespace Prsr\Component\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Avito extends Command
{
    protected function configure()
    {
        $this
            ->setName('avito:parse')
            ->setDescription('simple avito parser');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $parser = new \Prsr\Component\Parser\Avito;
        $parser->parse();
    }
}