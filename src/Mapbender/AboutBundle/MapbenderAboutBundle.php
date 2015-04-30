<?php

/*
 * This file is part of the Mapbender 3 project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Mapbender\AboutBundle;

use Mapbender\CoreBundle\Component\MapbenderBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Mapbender\CoreBundle\DependencyInjection\Compiler\MapbenderYamlCompilerPass;

/**
 * AboutBundle.
 *
 * @author Christian Wygoda
 */
class MapbenderAboutBundle extends MapbenderBundle
{

    /**
     * @inheritdoc
     */
    public function getTemplates()
    {
        return array();
    }

    /**
     * @inheritdoc
     */
    public function getElements()
    {
        return array(
            'Mapbender\AboutBundle\Element\AboutDialog'
        );
    }

    /**
     * @inheritdoc
     */
    public function getACLClasses()
    {
        return array();
    }

}
