<?php include_once "_partials/header.php" ?>

    <div class="page-header">
        <h1>VERY MUCH TODO LIST</h1>
    </div>

    <?php $data = $database->select('items', [ 'id', 'text' ]); ?>

    <ul id="item-list" class="list-group col-sm-6">
        <?php
            foreach ( $data as $item ) {
                echo '<li id="item-'. $item['id'] .'" class="list-group-item">';
                echo    $item['text'];
	            echo '  <div class="controls pull-right">';
	            echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link">edit</a>';
	            echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link text-muted glyphicon glyphicon-remove"></a>';
	            echo '  </div>';
	            echo '</li>';
            }
            if ( ! $data ){
                echo '<li class="list-group-item">THERE IS NOTHING TO SHOW, </br> PLEASE ADD SOME DATA THROUGH THE FORM ON THE RIGHT THANK YOU FUCKFACEASSBITCHKYS</li>';
            }
        ?>
    </ul>
    <?php require_once "_partials/form.php" ?>

<?php include_once "_partials/footer.php" ?>