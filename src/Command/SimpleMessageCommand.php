<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SimpleMessageCommand extends Command
{
    protected static $defaultName = 'app:simple-message';

    protected function configure()
    {
        $this->setDescription('Simply sends a message to stdout and stderr.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $now = date('Y-m-d H:i:s');
        $output->writeln("[$now] Stdout message");
        fwrite(STDERR, "[$now] Stderr message");
    }
}
