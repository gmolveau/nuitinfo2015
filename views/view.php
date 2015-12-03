<!-- toujours ajouter dans les pages principales
dans le head
<link href="{{ app.request.basepath }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

à la fin du body
<script src="{{ app.request.basepath }}/libjquery/jquery.min.js"></script>
<script src="{{ app.request.basepath }}/lib/bootstrap/js/bootstrap.min.js"></script>
-->


<?php
// exemple de view
 foreach ($articles as $article): ?>
<article>
    <h2><?php echo $article->getTitle() ?></h2>
    <p><?php echo $article->getContent() ?></p>
</article>
<?php endforeach ?>
