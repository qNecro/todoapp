<?php

$site = basename($_SERVER['SCRIPT_NAME'], '.php');
global $item;
if ( $site === 'index') {
    $site = 'add';

    echo '<form id="'. $site .'-form" class="col-sm-6" action="_inc/'. $site .'-item.php" method="post">';
    echo '    <p class="form-group">';
    echo '        <textarea class="form-control" name="message" id="text" rows="3" placeholder="is there something to do?"></textarea>';
    echo '    </p>';
    echo '   <p class="form-group">';
    echo '       <input class="btn-sm btn-danger" type="submit" value="add new thing">';
    echo '   </p>';
    echo'</form>';
}
else if ($site ==='edit'){ 
    echo '<div class="row">';
    echo '<form id="'. $site . '-form" class="col-sm-6" action="_inc/'. $site . '-item.php" method="post">';
    echo '    <p class="form-group">';
    echo '        <textarea class="form-control" name="message" id="text" rows="3">' .$item .'</textarea>';
    echo '    </p>';
    echo '    <p class="form-group">';
    echo '        <input type="hidden" name ="id" value="'. $_GET['id'] .'">';
    echo '        <input class="btn-sm btn-danger" type="submit" value="'. $site . ' item">';
    echo '        <span class="controls">';
    echo '            <a href="<?php echo $site_url?>/index.php" class="back-link text-muted">back</a>';
    echo '        </span>';
    echo '    </p>';
    echo '</form>';
    echo '</div>';
}

else if ( $site === 'delete'){
    echo '<div class="row">';
    echo '<form id="'. $site . '-form" class="col-sm-6" action="_inc/'. $site . '-item.php" method="post">';
    echo '    <p class="form-group">';
    echo '        <textarea disabled class="form-control" name="message" id="text" rows="3">' . $item .'</textarea>';
    echo '    </p>';
    echo '    <p class="form-group">';
    echo '        <input type="hidden" name ="id" value="'. $_GET['id'] .'">';
    echo '        <input class="btn-sm btn-danger" type="submit" value="'. $site . ' item">';
    echo '        <span class="controls">';
    echo '            <a href="<?php echo $site_url?>/index.php" class="back-link text-muted">back</a>';
    echo '        </span>';
    echo '    </p>';
    echo '</form>';
    echo '</div>';
}
