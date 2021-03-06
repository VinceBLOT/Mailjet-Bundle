<?php

/*
 *  This file is part of SplashSync Project.
 *
 *  Copyright (C) 2015-2020 Splash Sync  <www.splashsync.com>
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace Splash\Connectors\Mailjet\Objects;

use Splash\Bundle\Models\AbstractStandaloneObject;
use Splash\Connectors\Mailjet\Services\MailjetConnector;
use Splash\Models\Objects\IntelParserTrait;
use Splash\Models\Objects\SimpleFieldsTrait;

/**
 * Mailjet Implementation of ThirParty
 */
class ThirdParty extends AbstractStandaloneObject
{
    use IntelParserTrait;
    use SimpleFieldsTrait;
    use ThirdParty\CRUDTrait;
    use ThirdParty\ObjectsListTrait;
    use ThirdParty\CoreTrait;
    use ThirdParty\PropertiesTrait;
    use ThirdParty\MetaTrait;

    /**
     * Object Disable Flag. Override this flag to disable Object.
     *
     * {@inheritdoc}
     */
    protected static $DISABLED = false;

    /**
     * {@inheritdoc}
     */
    protected static $NAME = "Customer";

    /**
     * {@inheritdoc}
     */
    protected static $DESCRIPTION = "Mailjet Contact";

    /**
     * {@inheritdoc}
     */
    protected static $ICO = "fa fa-user";

    /**
     * @var MailjetConnector
     */
    protected $connector;

    /**
     * Class Constructor
     *
     * @param MailjetConnector $parentConnector
     */
    public function __construct(MailjetConnector $parentConnector)
    {
        $this->connector = $parentConnector;
    }
}
