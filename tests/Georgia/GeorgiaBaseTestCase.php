<?php

declare(strict_types=1);

/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2022 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <me at sachatelgenhof dot com>
 */

namespace Yasumi\tests\Georgia;

use PHPUnit\Framework\TestCase;
use Yasumi\tests\YasumiBase;

/**
 * Base class for test cases of the Georgia holiday provider.
 */
abstract class GeorgiaBaseTestCase extends TestCase
{
    use YasumiBase;

    /**
     * Name of the country to be tested.
     */
    public const REGION = 'Georgia';

    /** Timezone in which this provider has holidays defined. */
    public const TIMEZONE = 'Asia/Tbilisi';

    /** Locale that is considered common for this provider. */
    public const LOCALE = 'ka_GE';
}
