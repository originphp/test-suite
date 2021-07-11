<?php
/**
 * OriginPHP Framework
 * Copyright 2018 - 2021 Jamiel Sharief.
 *
 * Licensed under The MIT License
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * @copyright   Copyright (c) Jamiel Sharief
 * @link        https://www.originphp.com
 * @license     https://opensource.org/licenses/mit-license.php MIT License
 */
declare(strict_types=1);
namespace Origin\TestSuite\Stub;

use Origin\Http\Session;
use Origin\Http\Request as BaseRequest;

class Request extends BaseRequest
{
    public function setSession(Session $session): void
    {
        $this->session = $session;
    }
}