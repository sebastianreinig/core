<?php

use Stu\Orm\Repository\MapFieldTypeRepositoryInterface;
use Stu\StarsystemGenerator\StarsystemGenerator;

include_once(__DIR__.'/../../inc/config.inc.php');

DB()->beginTransaction();

$starSystemGenerator = new StarsystemGenerator();

$mapFieldTypeRepo = $container->get(MapFieldTypeRepositoryInterface::class);

$result = MapField::getListBy('WHERE field_id=99');
foreach ($result as $key => $obj) {
	$system = $starSystemGenerator->generate(901);
	$system->setCX($obj->getCX());
	$system->setCY($obj->getCY());
	$system->save();
	$field = $mapFieldTypeRepo->find((int) $system->getType());
	$obj->setFieldId($field->getId());
	$obj->save();
}

DB()->commitTransaction();
