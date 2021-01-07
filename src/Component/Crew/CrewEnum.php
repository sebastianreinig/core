<?php

declare(strict_types=1);

namespace Stu\Component\Crew;

final class CrewEnum
{

    public const CREW_TYPE_COMMAND = 1;
    public const CREW_TYPE_SECURITY = 2;
    public const CREW_TYPE_SCIENCE = 3;
    public const CREW_TYPE_TECHNICAL = 4;
    public const CREW_TYPE_NAVIGATION = 5;
    public const CREW_TYPE_CREWMAN = 6;
    public const CREW_TYPE_CAPTAIN = 7;
    public const CREW_GENDER_MALE = 1;
    public const CREW_GENDER_FEMALE = 2;

    public const CREW_ORDER = [CrewEnum::CREW_TYPE_CAPTAIN,
                                CrewEnum::CREW_TYPE_COMMAND,
                                CrewEnum::CREW_TYPE_SECURITY,
                                CrewEnum::CREW_TYPE_SCIENCE,
                                CrewEnum::CREW_TYPE_TECHNICAL,
                                CrewEnum::CREW_TYPE_NAVIGATION,
                                CrewEnum::CREW_TYPE_CREWMAN];
}
