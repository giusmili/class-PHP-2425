<?php 
	include_once __DIR__ .'/controller/config.php';
	
	# inclusion de la configuration /* */

	include_once __DIR__ .'/partial/head.inc.php';

	# head

?>


<body>

<?php
	
	include_once __DIR__ .'/partial/header.inc.php';

	# header
?>
<main>
    <?php

	include_once __DIR__ .'/partial/main.inc.php';

	# main zone
	 
	?>
</main>
	<?php

	include_once __DIR__ .'/partial/footer.inc.php';

	# footer

	?>
	
	<!-- footer -->

	<!--cours https://hackmd.io/iNktz6XzRyu7gGmKvPpXfQ?view-->
	<pre>
		<?php
			/* print phpInfo() */

			print_r($_SERVER)
		?>
	</pre>
</html>
