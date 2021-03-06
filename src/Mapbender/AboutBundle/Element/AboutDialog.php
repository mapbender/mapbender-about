<?php
namespace Mapbender\AboutBundle\Element;

use Mapbender\CoreBundle\Component\Element;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class AboutDialog extends Element
{

    /**
     * @inheritdoc
     */
    static public function getClassTitle()
    {
        return "mb.core.aboutdialog.class.title";
    }

    /**
     * @inheritdoc
     */
    static public function getClassDescription()
    {
        return "mb.core.aboutdialog.class.description";
    }

    /**
     * @inheritdoc
     */
    static public function getClassTags()
    {
        return array(
            "mb.core.aboutdialog.tag.help",
            "mb.core.aboutdialog.tag.info",
            "mb.core.aboutdialog.tag.about");
    }

    /**
     * @inheritdoc
     */
    static public function listAssets()
    {
        return array(
            'js' => array(
                '@MapbenderCoreBundle/Resources/public/mapbender.element.button.js',
                '@FOMCoreBundle/Resources/public/js/widgets/popup.js',
                'mapbender.element.aboutDialog.js'),
            'css' => array('@MapbenderAboutBundle/Resources/public/sass/about_dialog.scss' ));
    }

    /**
     * @inheritdoc
     */
    public static function getDefaultConfiguration()
    {
        return array(
            "tooltip" => "About",
            'label' => true);
    }

    /**
     * @inheritdoc
     */
    public static function getType()
    {
        return 'Mapbender\AboutBundle\Element\AboutDialogAdminType';
    }

    /**
     * @inheritdoc
     */
    public static function getFormTemplate()
    {
        return 'MapbenderManagerBundle:Element:about_dialog.html.twig';
    }

    /**
     * @inheritdoc
     */
    public function getWidgetName()
    {
        return 'mapbender.mbAboutDialog';
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        return $this->container->get('templating')
                ->render('MapbenderAboutBundle::about_dialog.html.twig',
                    array(
                    'id' => $this->getId(),
                    'title' => $this->getTitle(),
                    'configuration' => $this->getConfiguration()));
    }

    /**
     * @inheritdoc
     */
    public function httpAction($action)
    {
        $response = new Response();
        switch ($action) {
            case 'content':
                $about = $this->container->get('templating')
                    ->render('MapbenderAboutBundle::about_dialog_content.html.twig');
                $response->setContent($about);
                return $response;
        }
    }

}
