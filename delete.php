<?php

	require_once '_inc/config.php';

	if ( ! $item = get_item() ) {
		show_404();
	}

	include_once "_partials/header.php";

?>

    <div class="page-header">
        <h1>VERY MUCH DELETE</h1>
    </div>

	<?php require "_partials/form.php" ?>
	

<?php include_once "_partials/footer.php" ?>