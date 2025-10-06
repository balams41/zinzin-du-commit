<?php
require_once(__DIR__ . "/partial/head.view.php");
?>
<h1>Modifier le commentaire</h1>
 <form method="POST">
    <div class="container">
        <div class="form-group">
            <label for="comment" class="form-label">Quelque chose à dire ?</label>
            <textarea class="form-control" id="comment" name="comment" style="height: 100px"><?= $myComment->getText(); ?></textarea>
            <?php
            if(isset($this->arrayError['comment'])){
                ?>
                <p class="text-danger"><?= $this->arrayError['comment']?></p>
                <?php
            }
            ?>
        </div>
        <button type="submit" name="editComment" class="btn btn-warning">Modifier !</button>
    </div>
</form>
button est là juste ici ❤❤🤣🤣😂🙌🤦‍♀️🎶🤳🎂🐱‍👤🐱‍🏍🐱‍🐉🐱‍👓🐱‍💻🐱‍🚀
<?php
require_once(__DIR__ . "/partial/footer.view.php");
?>