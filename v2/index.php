<?php 
	$type = $_GET[type];
	if ($type == NULL) { $type = "length"; }
	$hidden = '<input type="hidden" name="type" value="' . $type . '" />' . "\r\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
	<link rel="stylesheet" href="./stylesheets/common.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="./stylesheets/zen-and-tea.css" type="text/css" media="screen" />
	<script type="text/javascript" src="./scripts/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" src="./scripts/functions.js"></script>
</head>
<body>
<div id="sitewrapper">
	<h1>Simple Conversions</h1>
	<h2>Convert any commonly used units of measure</h2>
	<p>To get started, select the measurement type you want to convert with the tabs below. Choose the unit type you're starting with in the left drop-down, then choose the type you want to convert to in the right drop-down. Enter the amount you're converting from and hit calculate, and you'll receive your conversion within moments!</p>
	<ul>
		<li><a<?php if ($type == "length") { print ' class="active"'; } ?> href="/?type=length">Length</a></li>
		<li><a<?php if ($type == "temp") { print ' class="active"'; } ?> href="/?type=temp">Temp</a></li>
		<li><a<?php if ($type == "area") { print ' class="active"'; } ?> href="/?type=area">Area</a></li>
		<li><a<?php if ($type == "weight") { print ' class="active"'; } ?> href="/?type=weight">Weight</a></li>
		<li><a<?php if ($type == "volume") { print ' class="active"'; } ?> href="/?type=volume">Volume</a></li>
		<li><a<?php if ($type == "pressure") { print ' class="active"'; } ?> href="/?type=pressure">Pressure</a></li>
		<li><a<?php if ($type == "force") { print ' class="active"'; } ?> href="/?type=force">Force</a></li>
		<li><a<?php if ($type == "power") { print ' class="active"'; } ?> href="/?type=power">Power</a></li>
		<li><a<?php if ($type == "energy") { print ' class="active"'; } ?> href="/?type=energy">Energy</a></li>
	</ul>
	<form action="calculate.php" method="post"<?php if ($type != "length") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "length") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="1">Feet</option>
				<option value="2">Meters</option>
				<option value="3">Yards</option>
				<option value="4">Inches</option>
				<option value="5">Centimeters</option>
				<option value="6">Millimeters</option>
				<option value="7">&Aring;ngstroms</option>
				<option value="8">Microns (&mu;)</option>
				<option value="9">Decimeters</option>
				<option value="10">Dekameters</option>
				<option value="11">Hectometers</option>
				<option value="12">Kilometers</option>
				<option value="13">Mils</option>
				<option value="14">Picas</option>
				<option value="15">Links</option>
				<option value="16">Rods</option>
				<option value="17">Chains</option>
				<option value="18">Spans</option>
				<option value="19">Cubits</option>
				<option value="20">Fathoms</option>
				<option value="21">Furlongs</option>
				<option value="22">Miles</option>
				<option value="23">Int'l Naut. Miles</option>
				<option value="24">Astronomical Units</option>
				<option value="25">Light Years</option>
				<option value="26">Parsecs</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="1">Feet</option>
				<option value="2" selected="selected">Meters</option>
				<option value="3">Yards</option>
				<option value="4">Inches</option>
				<option value="5">Centimeters</option>
				<option value="6">Millimeters</option>
				<option value="7">&Aring;ngstroms</option>
				<option value="8">Microns (&mu;)</option>
				<option value="9">Decimeters</option>
				<option value="10">Dekameters</option>
				<option value="11">Hectometers</option>
				<option value="12">Kilometers</option>
				<option value="13">Mils</option>
				<option value="14">Picas</option>
				<option value="15">Links</option>
				<option value="16">Rods</option>
				<option value="17">Chains</option>
				<option value="18">Spans</option>
				<option value="19">Cubits</option>
				<option value="20">Fathoms</option>
				<option value="21">Furlongs</option>
				<option value="22">Miles</option>
				<option value="23">Int'l Naut. Miles</option>
				<option value="24">Astronomical Units</option>
				<option value="25">Light Years</option>
				<option value="26">Parsecs</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "length" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>

	<form action="calculate.php" method="post"<?php if ($type != "temp") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "temp") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="c">&deg;Celsius</option>
				<option value="f">&deg;Fahrenheit</option>
				<option value="k">&deg;Kelvin</option>
				<option value="ra">&deg;Rankine</option>
				<option value="re">&deg;Reaumur</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="c">&deg;Celsius</option>
				<option value="f" selected="selected">&deg;Fahrenheit</option>
				<option value="k">&deg;Kelvin</option>
				<option value="ra">&deg;Rankine</option>
				<option value="re">&deg;Reaumur</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "temp" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>

	<form action="calculate.php" method="post"<?php if ($type != "area") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "area") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="1">Square centimeters</option>
				<option value="2">Square meters</option>
				<option value="3">Square kilometers</option>
				<option value="4">Ares</option>
				<option value="5">Hectares</option>
				<option value="6">Square inches</option>
				<option value="7">Square feet</option>
				<option value="8">Square yards</option>
				<option value="9">Square rods</option>
				<option value="10">Square chains</option>
				<option value="11">Cuerdas</option>
				<option value="12">Acres</option>
				<option value="13">Square miles</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="1">Square centimeters</option>
				<option value="2" selected="selected">Square meters</option>
				<option value="3">Square kilometers</option>
				<option value="4">Ares</option>
				<option value="5">Hectares</option>
				<option value="6">Square inches</option>
				<option value="7">Square feet</option>
				<option value="8">Square yards</option>
				<option value="9">Square rods</option>
				<option value="10">Square chains</option>
				<option value="11">Cuerdas</option>
				<option value="12">Acres</option>
				<option value="13">Square miles</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "area" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>

	<form action="calculate.php" method="post"<?php if ($type != "weight") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "weight") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="1">Micrograms (&mu;g)</option>
				<option value="2">Milligrams (mg)</option>
				<option value="3">Centigrams</option>
				<option value="4">Grains</option>
				<option value="5">Decigrams</option>
				<option value="6">Carats (Metric)</option>
				<option value="7">Carats (1877)</option>
				<option value="8">Grams</option>
				<option value="9">Pennyweight (Troy)</option>
				<option value="10">Scruples (Apoth.)</option>
				<option value="11">Drams (Avdp.)</option>
				<option value="12">Drams (Troy)</option>
				<option value="13">Dekagrams</option>
				<option value="14">Ounces (Avdp.)</option>
				<option value="15">Ounces (Troy)</option>
				<option value="16">Centals (Troy)</option>
				<option value="17">Hectograms</option>
				<option value="18">Pounds (Troy)</option>
				<option value="19">Pounds (Avdp.)</option>
				<option value="20">Kilograms</option>
				<option value="21">Cloves (Brit.)</option>
				<option value="22">Stone (Brit.)</option>
				<option value="23">Myriagrams</option>
				<option value="24">Short (Net) Hundredwt.</option>
				<option value="25">Long (Gross) Hundredwt.</option>
				<option value="26">Short (Net) Tons</option>
				<option value="27"> Metric Tons (tonnes)</option>
				<option value="28"> Long (Gross) Tons</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="1">Micrograms (&mu;g)</option>
				<option value="2">Milligrams (mg)</option>
				<option value="3">Centigrams</option>
				<option value="4">Grains</option>
				<option value="5">Decigrams</option>
				<option value="6">Carats (Metric)</option>
				<option value="7">Carats (1877)</option>
				<option value="8" selected="selected">Grams</option>
				<option value="9">Pennyweight (Troy)</option>
				<option value="10">Scruples (Apoth.)</option>
				<option value="11">Drams (Avdp.)</option>
				<option value="12">Drams (Troy)</option>
				<option value="13">Dekagrams</option>
				<option value="14">Ounces (Avdp.)</option>
				<option value="15">Ounces (Troy)</option>
				<option value="16">Centals (Troy)</option>
				<option value="17">Hectograms</option>
				<option value="18">Pounds (Troy)</option>
				<option value="19">Pounds (Avdp.)</option>
				<option value="20">Kilograms</option>
				<option value="21">Cloves (Brit.)</option>
				<option value="22">Stone (Brit.)</option>
				<option value="23">Myriagrams</option>
				<option value="24">Short (Net) Hundredwt.</option>
				<option value="25">Long (Gross) Hundredwt.</option>
				<option value="26">Short (Net) Tons</option>
				<option value="27"> Metric Tons (tonnes)</option>
				<option value="28"> Long (Gross) Tons</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "weight" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>

	<form action="calculate.php" method="post"<?php if ($type != "volume") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "volume") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="1">Minims (liq.)
				<option value="2">Cubic Centimeters (cc,ml)</option>
				<option value="3">Pennyweight (Troy)</option>
				<option value="4">Scruples (Apoth.)</option>
				<option value="5">Fluid Drachms (Brit.)</option>
				<option value="6">Fluid Drams (US)</option>
				<option value="7">Teaspoons</option>
				<option value="8">Tablespoons</option>
				<option value="9">Cubic Inches</option>
				<option value="10">Fluid Ounces</option>
				<option value="11">Deciliters</option>
				<option value="12">Gills (liq.)</option>
				<option value="13">Cups (liq.)</option>
				<option value="14">Pints (liq.)</option>
				<option value="15">Pints (dry)</option>
				<option value="16">Quarts (liq., US)</option>
				<option value="17">Quarts (liq., Imp.)</option>
				<option value="18">Liters</option>
				<option value="19">Quarts (dry)</option>
				<option value="20">Board feet (lumber)</option>
				<option value="21">Pecks</option>
				<option value="22">Dekaliters</option>
				<option value="23">Gallons (US)</option>
				<option value="24">Gallons (Imp.)</option>
				<option value="25">Cubic feet</option>
				<option value="26">Bushels</option>
				<option value="27">Barrels (oil)</option>
				<option value="28">Cubic yards</option>
				<option value="29">Displacement tons (ship.)</option>
				<option value="30">Cubic meters</option>
				<option value="31">Cords (wood)</option>
				<option value="32">Register tons (ship.)</option>
				<option value="33">Acre-inches (US)</option>
				<option value="34">Water tons (Brit.)</option>
				<option value="35">Acre-feet (US)</option>
				<option value="36">Acre-feet (Brit.)</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="1">Minims (liq.)
				<option value="2" selected="selected">Cubic Centimeters (cc,ml)</option>
				<option value="3">Pennyweight (Troy)</option>
				<option value="4">Scruples (Apoth.)</option>
				<option value="5">Fluid Drachms (Brit.)</option>
				<option value="6">Fluid Drams (US)</option>
				<option value="7">Teaspoons</option>
				<option value="8">Tablespoons</option>
				<option value="9">Cubic Inches</option>
				<option value="10">Fluid Ounces</option>
				<option value="11">Deciliters</option>
				<option value="12">Gills (liq.)</option>
				<option value="13">Cups (liq.)</option>
				<option value="14">Pints (liq.)</option>
				<option value="15">Pints (dry)</option>
				<option value="16">Quarts (liq., US)</option>
				<option value="17">Quarts (liq., Imp.)</option>
				<option value="18">Liters</option>
				<option value="19">Quarts (dry)</option>
				<option value="20">Board feet (lumber)</option>
				<option value="21">Pecks</option>
				<option value="22">Dekaliters</option>
				<option value="23">Gallons (US)</option>
				<option value="24">Gallons (Imp.)</option>
				<option value="25">Cubic feet</option>
				<option value="26">Bushels</option>
				<option value="27">Barrels (oil)</option>
				<option value="28">Cubic yards</option>
				<option value="29">Displacement tons (ship.)</option>
				<option value="30">Cubic meters</option>
				<option value="31">Cords (wood)</option>
				<option value="32">Register tons (ship.)</option>
				<option value="33">Acre-inches (US)</option>
				<option value="34">Water tons (Brit.)</option>
				<option value="35">Acre-feet (US)</option>
				<option value="36">Acre-feet (Brit.)</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "volume" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>

	<form action="calculate.php" method="post"<?php if ($type != "pressure") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "pressure") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="1">Pascals</option>
				<option value="2">Millibars/Hectopascals</option>
				<option value="3">Inches of water column</option>
				<option value="4">Kilopascals (kPa)</option>
				<option value="5">Inches of mercury (in Hg)</option>
				<option value="6">Pounds/square inch (psi)</option>
				<option value="7">Atmospheres (std.)</option>
				<option value="8">Megapascals (MPa)</option>
				<option value="9">Kilopounds/square inch (ksi)</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="1">Pascals</option>
				<option value="2" selected="selected">Millibars/Hectopascals</option>
				<option value="3">Inches of water column</option>
				<option value="4">Kilopascals (kPa)</option>
				<option value="5">Inches of mercury (in Hg)</option>
				<option value="6">Pounds/square inch (psi)</option>
				<option value="7">Atmospheres (std.)</option>
				<option value="8">Megapascals (MPa)</option>
				<option value="9">Kilopounds/square inch (ksi)</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "pressure" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>

	<form action="calculate.php" method="post"<?php if ($type != "force") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "force") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="1">Dynes</option>
				<option value="2">Newtons</option>
				<option value="3">Poundals</option>
				<option value="4">Pounds force (lbf)</option>
				<option value="5">kips (Kilopounds)</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="1">Dynes</option>
				<option value="2" selected="selected">Newtons</option>
				<option value="3">Poundals</option>
				<option value="4">Pounds force (lbf)</option>
				<option value="5">kips (Kilopounds)</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "force" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>

	<form action="calculate.php" method="post"<?php if ($type != "power") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "power") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="1">Statwatts</option>
				<option value="2">Milliwatts</option>
				<option value="3">BTU/hour</option>
				<option value="4">Watts</option>
				<option value="5">Ft-lb/sec</option>
				<option value="6">BTU/minute</option>
				<option value="7">Metric Horsepower</option>
				<option value="8">Horsepower</option>
				<option value="9">Kilowatts</option>
				<option value="10">BTU/second</option>
				<option value="11">Ton (refrig.)</option>
				<option value="12">Megawatts</option>
				<option value="13">Gigawatts</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="1">Statwatts</option>
				<option value="2" selected="selected">Milliwatts</option>
				<option value="3">BTU/hour</option>
				<option value="4">Watts</option>
				<option value="5">Ft-lb/sec</option>
				<option value="6">BTU/minute</option>
				<option value="7">Metric Horsepower</option>
				<option value="8">Horsepower</option>
				<option value="9">Kilowatts</option>
				<option value="10">BTU/second</option>
				<option value="11">Ton (refrig.)</option>
				<option value="12">Megawatts</option>
				<option value="13">Gigawatts</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "power" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>

	<form action="calculate.php" method="post"<?php if ($type != "energy") { print ' class="inactive"'; } ?>>
		<fieldset>
			<?php if ($type == "energy") { print $hidden; } ?>
			<label>From</label>
			<select name="from">
				<option value="1">Ergs</option>
				<option value="2">Calories</option>
				<option value="3">Joules</option>
				<option value="4">Foot-pounds</option>
				<option value="5">Kilocalories</option>
				<option value="6">BTU</option>
				<option value="7">Foot-tons</option>
				<option value="8">Watt-hours</option>
				<option value="9">Horsepower-hours</option>
			</select>
			<label>to</label>
			<select name="to">
				<option value="1">Ergs</option>
				<option value="2" selected="selected">Calories</option>
				<option value="3">Joules</option>
				<option value="4">Foot-pounds</option>
				<option value="5">Kilocalories</option>
				<option value="6">BTU</option>
				<option value="7">Foot-tons</option>
				<option value="8">Watt-hours</option>
				<option value="9">Horsepower-hours</option>
			</select>
			<input class="input-text" type="text" name="amount" />
			<input class="btn_submit" type="submit" value="Calculate" />
			<?php if ($type == "energy" && $result != NULL) { print $result; } ?>
		</fieldset>
	</form>
</div>

<p id="footer">&copy; <?php print date(Y); ?> <a href="http://shaneriley.info">Shane Riley</a></p>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7148970-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>