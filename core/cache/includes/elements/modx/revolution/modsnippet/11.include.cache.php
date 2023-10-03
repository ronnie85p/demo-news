<?php
$parentId = 2;
$templateId = 3;

$q = $modx->newQuery(modResource::class);
$q->select([
  //'tvr.value',
  //'tv.name',
  'modResource.*'
]);
$q->where([
  'parent' => $parentId,
  'template' => $templateId,
]);
//$q->leftJoin(modTemplateVarResource::class, 'tvr', 'tvr.contentid = modResource.id');
//$q->leftJoin(modTemplateVar::class, 'tv', 'tv.id = tvr.tmplvarid');

$objects = $modx->getCollection(modResource::class, $q);

$output = '';
if (!empty($objects)) {
  foreach ($objects as $object) {
    foreach ($object->getMany(modTemplateVar::class) as $tv) {
       $object->{$tv->name} = $tv->value;
    }

    $output .= $modx->getChunk($scriptProperties['tpl'], $object->toArray());
  }

  if (!empty($scriptProperties['tplWrapper'])) {
    $output = $modx->getChunk($scriptProperties['tplWrapper'], [
      'output' => $output
    ]);
  }
} else {
  if (!empty($scriptProperties['tplIfEmpty'])) {
    $output = $modx->getChunk($scriptProperties['tplIfEmpty']);
  }
}

return $output;
return;
