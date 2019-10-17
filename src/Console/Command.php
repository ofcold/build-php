<?php

declare(strict_types=1);

namespace Ofcold\Creation\Console;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

/**
 * trait Command
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
trait Command
{
	/**
	 * Execute the command.
	 *
	 * @param  \Symfony\Component\Console\Input\InputInterface  $input
	 * @param  \Symfony\Component\Console\Output\OutputInterface  $output
	 *
	 * @return int
	 */
	public function execute(InputInterface $input, OutputInterface $output)
	{
		$this->input = $input;
		$this->output = $output;

		return (int) $this->fire();
	}

	/**
	 * Get an argument from the input.
	 *
	 * @param  string  $key
	 *
	 * @return string
	 */
	public function argument($key)
	{
		return $this->input->getArgument($key);
	}

	/**
	 * Get an option from the input.
	 *
	 * @param  string  $key
	 *
	 * @return string
	 */
	public function option($key)
	{
		return $this->input->getOption($key);
	}

	/**
	 * Ask the user the given question.
	 *
	 * @param  string  $question
	 *
	 * @return string
	 */
	public function ask($question)
	{
		$question = '<comment>'.$question.'</comment> ';
		$question = new Question($question);

		return $this->getHelperSet()->get('question')->ask($this->input, $this->output, $question);
	}

	/**
	 * Confirm the operation with the user.
	 *
	 * @param  string  $task
	 * @param  string  $question
	 *
	 * @return bool
	 *
	 */
	public function confirmTaskWithUser($task, $question)
	{
		$question = $question === true ? 'Are you sure you want to run the ['.$task.'] task?' : (string) $question;
		$question = '<comment>'.$question.' [y/N]:</comment> ';
		$question = new ConfirmationQuestion($question, false);

		return $this->getHelperSet()->get('question')->ask($this->input, $this->output, $question);
	}

	/**
	 * Ask the user the given secret question.
	 *
	 * @param  string  $question
	 *
	 * @return string
	 */
	public function secret($question)
	{
		$question = '<comment>'.$question.'</comment> ';
		$question = new Question($question);
		$question->setHidden(true);
		$question->setHiddenFallback(false);

		return $this->getHelperSet()->get('question')->ask($this->input, $this->output, $question);
	}
}
