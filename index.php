#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;

(new SingleCommandApplication())
  ->setName('app:fizz-buzz')
  ->setVersion('1.0.0')
  ->setDescription('Create a Fizz Buzz test whith Single Command Application of Symfony')
  ->setCode(function (InputInterface $input, OutputInterface $output) {
    $output->writeln('Execute command');
    return SingleCommandApplication::SUCCESS;
  })
  ->run();
