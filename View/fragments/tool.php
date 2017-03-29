<div class="mdl-grid">
    <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
        <div class="mdl-grid">

            <!-- Editor -->
            <?php
            if ($_GET["url"] == "editor") {
                include "tool/card-editor.php";
            } else {
                include "tool/card-upload.php";
            }
            ?>

        </div>
    </div>
</div>

<div class="app-common-footer-spacer"></div>
