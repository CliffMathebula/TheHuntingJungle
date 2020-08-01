<?php

namespace App\Classes;

class IdNumberVerification
{
	/**
	 * @param string $number
	 * @return int
	 */
	private function checksum($number)
	{
		$number = (string) $number;
		$length = strlen($number);
		$sum = 0;
		for ($i = $length - 1; $i >= 0; $i -= 2) {
			$sum += $number[$i];
		}
		for ($i = $length - 2; $i >= 0; $i -= 2) {
			$sum += array_sum(str_split($number[$i] * 2));
		}

		return $sum % 10;
	}

	/**
	 * Check if id number is valid or not.
	 *
	 * @param integer $idNumber
	 * @return boolean
	 */
	public function isValid($idNumber)
	{
		$match = preg_match("!^(\d{2})(\d{2})(\d{2})\d\d{6}$!", $idNumber, $matches);

		if (!$match) return false;

		list (, $year, $month, $day) = $matches;

		if (!checkdate($month, $day, $year)) return false;

		$citizen = $idNumber{10} == 0 ? 'south_african_citizen' : ($idNumber{10} == 1 ? 'permanent_resident' : 'non_resident');

		if ($citizen == 'non_resident') return false;

		return $this->checksum($idNumber) === 0;
	}
}
