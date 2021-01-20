<?php

declare(strict_types=1);

namespace Waaz\EtransactionsPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class WaazEtransactionsPlugin extends Bundle
{
    use SyliusPluginTrait;
}
