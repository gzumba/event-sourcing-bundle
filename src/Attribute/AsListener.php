<?php

declare(strict_types=1);

namespace Patchlevel\EventSourcingBundle\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class AsListener
{
    public function __construct(
        public int $priority = 0,
    ) {
    }
}
