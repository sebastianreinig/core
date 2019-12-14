<?php

namespace Stu\Orm\Repository;

use Doctrine\Persistence\ObjectRepository;
use Stu\Orm\Entity\BuildplanHangarInterface;

interface BuildplanHangarRepositoryInterface extends ObjectRepository
{
    public function getByRump(int $rumpId): ?BuildplanHangarInterface;
}