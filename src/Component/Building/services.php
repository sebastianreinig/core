<?php

declare(strict_types=1);

namespace Stu\Module\Building;

use Stu\Component\Building\BuildingManager;
use Stu\Component\Building\BuildingManagerInterface;
use function DI\autowire;

return [
    BuildingManagerInterface::class => autowire(BuildingManager::class),
];
