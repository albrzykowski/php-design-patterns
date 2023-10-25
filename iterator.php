<?php
require_once 'lib/autoload.php';
spl_autoload_register('autoload');

$repository = new Pattern\Iterator\Repository();
for ($i=0; $i<10; $i++) {
    $entity = new Pattern\Iterator\Entity(uniqid());
    $repository->addEntity($entity);
}


$repositoryIterator = new Pattern\Iterator\RepositoryIterator($repository);
foreach ($repositoryIterator as $iteration) {
    printf(
        '<p>Current key: <em>%d</em>, current Entity: <em>%s</em></p>' ,
        $repositoryIterator->key(),
        $repositoryIterator->current()->getName()
    );
}