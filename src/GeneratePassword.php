<?php

/**
 * Generate Password Class
 * @author yhif
 */

namespace generatePassword;

class GeneratePassword
{
	protected $numberString = '0123456789';
	protected $alphabetString = 'abcdetfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	protected $specialString = '!@#$%^&*()';

	protected $len;
	protected $number;
	protected $alphabet;
	protected $special;

	// construct function
	public function __construct(int $len, int $number, int $alphabet, int $special)
	{
		$this->len = $len;
		$this->number = $number;
		$this->alphabet = $alphabet;
		$this->special = $special;
	}

	/**
	 * Make a password
	 * @return string
	 */
	public function make()
	{
		if ($this->len <= 0) {
			throw new Exception("Missing len parameter", 500);
		}

		if (!$this->number && !$this->alphabet && !$this->special) {
			throw new Exception("Missing number or alphabet or special parameter", 500);
		}

		$chars = '';
		$this->number == 1 && $chars .= $this->numberString;
		$this->alphabet == 1 && $chars .= $this->alphabetString;
		$this->special == 1 && $chars .= $this->specialString;

		$result = '';
		$max = strlen($chars) - 1;
		for ($i = 0; $i < $this->len; $i++) {
		    $result .= $chars[rand(0, $max)];
		}
		return $result;
	}
}

