<?php

declare(strict_types=1);

namespace Ofcold\Creation;

use Symfony\Component\Console\Application as SymfonyApplication;

/**
 * class Application
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
class Application extends SymfonyApplication
{
	public const VERSION = '1.0.0';

	/**
	 * Create an a new Application instance.
	 */
	public function __construct()
	{
		parent::__construct('Ofcold Creation', static::VERSION);
	}
}
