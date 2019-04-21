<?php

declare(strict_types=1);

namespace Bolt\Widget;

use Bolt\Snippet\RequestZone;
use Bolt\Snippet\Target;

class BoltHeaderWidget extends BaseWidget implements ResponseAware
{
    protected $name = 'Bolt Header Widget';
    protected $target = Target::NOWHERE;
    protected $zone = RequestZone::FRONTEND;

    public function __invoke(array $params = []): string
    {
        $this->getResponse()->headers->set('X-Powered-By', 'Bolt', false);

        return '';
    }
}
