<?php
/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Massive\Bundle\ActivityBundle\Admin;

use Sulu\Bundle\AdminBundle\Admin\Admin;
use Sulu\Bundle\AdminBundle\Navigation\Navigation;
use Sulu\Bundle\AdminBundle\Navigation\NavigationItem;

class MassiveActivityAdmin extends Admin
{
    public function __construct($title)
    {
        $rootNavigationItem = new NavigationItem($title);

        $this->setNavigation(new Navigation($rootNavigationItem));
    }
}
