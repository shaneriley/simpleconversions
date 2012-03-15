<?php
	$from = $_POST[from];
	$to = $_POST[to];
	$amount = $_POST[amount];
	$result = '<strong>Error!</strong> Please try that again';

	switch ($_POST[form])
	{
		case "1":
		{
			$operator = array(
				1 => 30.48,
				2 => 100,
				3 => 91.44,
				4 => 2.54,
				5 => 1,
				6 => 0.1,
				7 => 0.00000001,
				8 => 0.0001,
				9 => 10,
				10 => 1000,
				11 => 10000,
				12 => 100000,
				13 => 0.00254,
				14 => 0.42333333,
				15 => 20.11684,
				16 => 502.921,
				17 => 2011.684,
				18 => 22.86,
				19 => 45.72,
				20 => 182.88,
				21 => 20116.84,
				22 => 160934.4,
				23 => 185200,
				24 => 01495978E7,
				25 => 9460528E11,
				26 => 3085678E12 );
			$result = c($operator);
			break;
		}
		case "2":
		{
			$result = temp();
			break;
		}
		case "3":
		{
			$operator = array(
				1 => 0.0001,
				2 => 1,
				3 => 1E6,
				4 => 1E2,
				5 => 1E4,
				6 => 0.00064516,
				7 => 0.09290304,
				8 => 0.83612736,
				9 => 25.29285264,
				10 => 404.68564224,
				11 => 3930.395625,
				12 => 4046.8564224,
				13 => 2589988.110336 );
			$result = c($operator);
			break;
		}
		case "4":
		{
			$operator = array(
				1 => 0.000001,
				2 => 0.001,
				3 => 0.01,
				4 => 0.06479891,
				5 => 0.1,
				6 => 0.2,
				7 => 0.2056,
				8 => 1,
				9 => 1.55517384,
				10 => 1.2959782,
				11 => 1.7718451953125,
				12 => 3.8879346,
				13 => 10,
				14 => 28.349523125,
				15 => 31.1034768,
				16 => 45.359237,
				17 => 100,
				18 => 373.2417216,
				19 => 453.59237,
				20 => 1000,
				21 => 3628.73896,
				22 => 6350.29318,
				23 => 10000,
				24 => 45359.237,
				25 => 50802.34544,
				26 => 907184.74,
				27 => 1000000,
				28 => 1016046.9088 );
			$result = c($operator);
			break;
		}
		case "5":
		{
			$operator = array(
				1 =>0.061611519921875,
				2 => 1.0,
				3 => 1.55517384,
				4 => 1.29597820,
				5 => 3.552,
				6 => 3.6966911953125,
				7 => 4.92892159375,
				8 => 14.78676478125,
				9 => 16.387064,
				10 => 29.5735295625,
				11 => 1.0E2,
				12 => 118.29411825,
				13 => 236.5882365,
				14 => 473.176473,
				15 => 550.6105,
				16 => 946.352946,
				17 => 1136.52482372,
				18 => 1.0E3,
				19 => 1101.221,
				20 => 2359.737216,
				21 => 8809.768,
				22 => 1.0E5,
				23 => 3785.411784,
				24 => 4546.09929488,
				25 => 28316.846592,
				26 => 35239.07,
				27 => 158987.294928,
				28 => 764554.857984,
				29 => 991089.63072,
				30 => 1.0E6,
				31 => 3624556.363776,
				32 => 2831684.6592,
				33 => 102790153.12896,
				34 => 4439418.4246,
				35 => 1233481837.5475202,
				36 => 1234614511.4112 );
			$result = c($operator);
			break;
		}
		case "6":
		{
			$operator = array(
				1 => 0.01,
				2 => 1,
				3 => 2.490889,
				4 => 10,
				5 => 33.8638,
				6 => 68.94757,
				7 => 1013.25,
				8 => 10000,
				9 => 68947.57);
			$result = c($operator);
			break;
		}
		case "7":
		{
			$operator = array(
				1 => 0.00001,
				2 => 1,
				3 => .138255,
				4 => 4.448221615,
				5 => 4448.221615 );
			$result = c($operator);
			break;
		}
		case "8":
		{
			$operator = array(
				1 => 1.0E-7,
				2 => 0.001,
				3 => 0.293071,
				4 => 1,
				5 => 1.355818,
				6 => 17.584260,
				7 => 735.499,
				8 => 745.6999,
				9 => 1.0E3,
				10 => 1055.0556,
				11 => 3516.852842067,
				12 => 1.0E6,
				13 => 1.0E9);
			$result = c($operator);
			break;
		}
		case "9":
		{
			$operator = array(
				1 => 0.0000001,
				2 => 4.1868,
				3 => 1,
				4 => 1.355818,
				5 => 4186.8,
				6 => 1055.056,
				7 => 2711.636,
				8 => 3600,
				9 => 2684519.64);
			$result = c($operator);
			break;
		}
		default: break;
	}
	print $result;

function c($operator)
{
	global $from, $to, $amount;
	$result = $amount * ($operator[$from] / $operator[$to]);
	if (!stristr($result, 'E') && is_float($result))
	{
		$result = '<a href="#"></a><small>Round to <input type="text" maxlength="1" value="2" /> decimal places</small>Value: <strong>' . $result . '</strong>';
	}
	else
	{
		$result = 'Value: <strong>' . $result . '</strong>';
	}
	return $result;
}

function temp()
{
	global $from, $to, $amount;
	if ($from == "c") {}
	else
	{
		if ($from == "f")
			$amount = ($amount - 32) / 1.8;
		else
		{
			if ($from == "k")
				$amount = $amount - 273.15;
			else
			{
				if ($from == "ra")
					$amount = (($amount - 491.67) / 1.8);
				else
					$amount = $amount * 1.25;
			}
		}
	}
	if ($to == "c")
		$out = $amount;
	else
	{
		if ($to == "f")
			$out = (1.8 * $amount) + 32;
		else
		{
			if ($to == "k")
				$out = $amount + 273.15;
			else
			{
				if ($to == "ra")
					$out = (1.8 * $amount) + 491.67;
				else
					$out = $amount * 0.8;
			}
		}
	}
	$result = '<a href="#"></a><small>Round to <input type="text" maxlength="1" value="2" /> decimal places</small>Value: <strong>' . $out . '</strong>';
	return $result;
}
?>