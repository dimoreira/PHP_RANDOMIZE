PHP RANDOMIZE
======

Usage
-----

'mixed' (Letters + Numbers)
--

``` php
<?php
	require 'randomize.php';
	
	$string = randomize(10);
	// or use randomize(10,'mixed');
?>
```

'letters' (Letters)
--

``` php
<?php
	require 'randomize.php';
	
	$string = randomize(10,'letters');
?>
```