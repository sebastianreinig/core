<?php

declare(strict_types=1);

namespace Stu\Module\Communication;

use Stu\Control\GameController;
use Stu\Control\IntermediateController;
use Stu\Lib\SessionInterface;
use Stu\Module\Communication\Action\SetKnMark\SetKnMark;
use Stu\Module\Communication\Action\SetKnMark\SetKnMarkRequest;
use Stu\Module\Communication\Action\SetKnMark\SetKnMarkRequestInterface;
use Stu\Module\Communication\View\Overview\Overview;
use Stu\Module\Communication\View\Overview\OverviewRequest;
use Stu\Module\Communication\View\Overview\OverviewRequestInterface;
use Stu\Module\Communication\View\ShowContactList\ShowContactList;
use Stu\Module\Communication\View\ShowIgnoreList\ShowIgnoreList;
use Stu\Module\Communication\View\ShowKnComments\ShowKnComments;
use Stu\Module\Communication\View\ShowKnComments\ShowKnCommentsRequest;
use Stu\Module\Communication\View\ShowKnComments\ShowKnCommentsRequestInterface;
use Stu\Module\Communication\View\ShowNewPm\ShowNewPm;
use Stu\Module\Communication\View\ShowWritePm\ShowWritePm;
use Stu\Module\Communication\View\ShowWritePm\ShowWritePmRequest;
use Stu\Module\Communication\View\ShowWritePm\ShowWritePmRequestInterface;
use Stu\Module\Communication\View\ShowWriteQuickPm\ShowWriteQuickPm;
use Stu\Module\Communication\View\ShowWriteQuickPm\ShowWriteQuickPmRequest;
use Stu\Module\Communication\View\ShowWriteQuickPm\ShowWriteQuickPmRequestInterface;
use Stu\Orm\Repository\SessionStringRepositoryInterface;
use function DI\autowire;
use function DI\create;
use function DI\get;

return [
    OverviewRequestInterface::class => autowire(OverviewRequest::class),
    SetKnMarkRequestInterface::class => autowire(SetKnMarkRequest::class),
    ShowWriteQuickPmRequestInterface::class => autowire(ShowWriteQuickPmRequest::class),
    ShowWritePmRequestInterface::class => autowire(ShowWritePmRequest::class),
    ShowKnCommentsRequestInterface::class => autowire(ShowKnCommentsRequest::class),
    IntermediateController::TYPE_COMMUNICATION => create(IntermediateController::class)
        ->constructor(
            get(SessionInterface::class),
            get(SessionStringRepositoryInterface::class),
            [
                SetKnMark::ACTION_IDENTIFIER => autowire(SetKnMark::class),
            ],
            [
                GameController::DEFAULT_VIEW => autowire(Overview::class),
                ShowNewPm::VIEW_IDENTIFIER => autowire(ShowNewPm::class),
                ShowWriteQuickPm::VIEW_IDENTIFIER => autowire(ShowWriteQuickPm::class),
                ShowWritePm::VIEW_IDENTIFIER => autowire(ShowWritePm::class),
                ShowKnComments::VIEW_IDENTIFIER => autowire(ShowKnComments::class),
                ShowContactList::VIEW_IDENTIFIER => autowire(ShowContactList::class),
                ShowIgnoreList::VIEW_IDENTIFIER => autowire(ShowIgnoreList::class),
            ]
        ),
];