<!-- index.php qui correspond à ma vue CLIENTS -->

<h1>Hello</h1>
<?php foreach($clients as $client): ?>
<h2><a href="/MonSite/Clients/"<?= $client['id'] ?>"><?= $client['username']?></h2>
<p><?= $client['password']?></p>
<?php endforeach; ?>