<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;
use App\Number;

$application = new SingleCommandApplication();
$application->setName('app:fizz-buzz')
  ->setVersion('1.0.0')
  ->setDescription('Create a Fizz Buzz test whith Single Command Application of Symfony')
  ->setAutoExit(false)
  ->setCode(function (InputInterface $input, OutputInterface $output) {

    $number = new Number();
    $output->write($number->loop(1, 101));

    return SingleCommandApplication::SUCCESS;
  })
  ->run();

return $application;
