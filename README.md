PHP RANDOMIZE
======

Usage
--
--

The randomize() function needs 1 argument:
The length of the string.

The function have a second parameter of options, that have a default value of "mixed" and option values of "letters", "numerical", "lowercase" and "uppercase".

Examples:
--


'mixed' (Letters Uppercased + Letters Lowercased + Numbers)
--

``` php
<?php
	require 'randomize.php';
	
	$string = randomize(10);
	// or use randomize(10,'mixed');
?>
```

'letters' (All Letters)
--

``` php
<?php
	require 'randomize.php';
	
	$string = randomize(10,'letters');
?>
```

'numerical' (Numbers)
--

``` php
<?php
	require 'randomize.php';
	
	$string = randomize(10,'numerical');
?>
```

'lowercase' (Letters Lowercased)
--

``` php
<?php
	require 'randomize.php';
	
	$string = randomize(10,'lowercase');
?>
```

'uppercase' (Letters Uppercased)
--

``` php
<?php
	require 'randomize.php';
	
	$string = randomize(10,'uppercase');
?>
```