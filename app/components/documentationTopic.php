<?php
$topic = Data::getDocumentationTopic($component->topicCode);
$nextTopic = Data::getNextDocumentationTopic($component->topicCode);
?><html>
    <body>
        <h1><?= $topic['name'] ?></h1>
        <div class="documentationArticle">
            <component src="file:<?= $context->dir . 'components/documentation/' . $topic['file'] ?>" />
            <?php
            if ($nextTopic !== false) {
                echo '<div style="text-align:center;">';
                echo 'Next:<br/><a href="' . $app->request->base . '/documentation/' . $nextTopic['code'] . '/">' . $nextTopic['name'] . '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </body>
</html>