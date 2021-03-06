<?php

declare(strict_types=1);

namespace Stu\Component\Ship\System\Type;

use Stu\Component\Ship\System\ShipSystemModeEnum;
use Stu\Component\Ship\System\ShipSystemTypeEnum;
use Stu\Component\Ship\System\ShipSystemTypeInterface;
use Stu\Orm\Entity\ShipInterface;

abstract class AbstractShipSystemType implements ShipSystemTypeInterface
{
    public function checkActivationConditions(ShipInterface $ship, &$reason): bool
    {
        return true;
    }

    public function getEnergyUsageForActivation(): int
    {
        return 1;
    }

    public function getPriority(): int
    {
        return ShipSystemTypeEnum::SYSTEM_PRIORITY_STANDARD;
    }

    public function getEnergyConsumption(): int
    {
        return 1;
    }

    public function handleDestruction(ShipInterface $ship): void
    {
        //nothing to do here
    }

    public function handleDamage(ShipInterface $ship): void
    {
        //nothing to do here
    }

    public function getDefaultMode(): int
    {
        return ShipSystemModeEnum::MODE_OFF;
    }
}
