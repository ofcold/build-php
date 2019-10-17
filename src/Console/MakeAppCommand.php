<?php


declare(strict_types=1);

namespace Ofcold\Creation\Console;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;

/**
 * class MakeAppCommand
 *
 * This content is released under the Ofcold Technology Lab License (OTL)
 *
 * @link	 https://ofcold.com
 *
 * @author   Bill Li (bill.li@ofcold.com) [Owner]
 *
 * @license https://otl-license.com  OTL License
 * @license https://github.com/otl-license/otl-license  OTL License
 *
 * @copyright  Copyright (c) 2017-2020 Bill Li, Ofcold Institute of Technology. All rights reserved.
 */
class MakeAppCommand extends SymfonyCommand
{
	use Command;

	/**
	 * Configure the command options.
	 *
	 * @return void
	 */
	protected function configure()
	{
		$this
			->setName('app')
			->setDescription('Build your php composer app.')
			->addArgument('name', InputArgument::REQUIRED, 'The app name.')
			->addArgument('type', InputArgument::REQUIRED, 'The app type.');
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	protected function fire()
	{

	}

}
