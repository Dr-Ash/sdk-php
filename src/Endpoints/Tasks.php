<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/sdk-php source repository
 *
 * @copyright Copyright (c) 2021. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/MIT
 */

namespace InvoiceNinja\Sdk\Endpoints;

use GuzzleHttp\Exception\GuzzleException;
use InvoiceNinja\Sdk\InvoiceNinja;

class Tasks extends BaseEntity
{

    protected InvoiceNinja $ninja;

    protected string $uri = "/api/v1/tasks";

    public function __construct(InvoiceNinja $ninja)
    {
        $this->ninja = $ninja;
    }

}

