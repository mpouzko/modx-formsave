<?php

$id = (int) $_REQUEST['id'];
$formSave =& $modx->formsave;

$form = $modx->getObject('fsForm', $id);
$form->set('published',0);
$form->save();

return $modx->error->success();