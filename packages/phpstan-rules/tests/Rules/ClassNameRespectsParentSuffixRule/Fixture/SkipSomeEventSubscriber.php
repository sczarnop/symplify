<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\ClassNameRespectsParentSuffixRule\Fixture;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class SkipSomeEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
    }
}
