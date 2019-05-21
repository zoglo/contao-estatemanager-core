<?php
/**
 * This file is part of Oveleon ImmoManager.
 *
 * @link      https://github.com/oveleon/contao-immo-manager-bundle
 * @copyright Copyright (c) 2018-2019  Oveleon GbR (https://www.oveleon.de)
 * @license   https://github.com/oveleon/contao-immo-manager-bundle/blob/master/LICENSE
 */

// load misc language
\System::loadLanguageFile('tl_real_estate_misc');

$GLOBALS['TL_DCA']['tl_expose_module'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'enableVersioning'            => true,
        'onload_callback' => array
        (
            array('tl_expose_module', 'checkPermission'),
        ),
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 2,
            'fields'                  => array('name'),
            'flag'                    => 1,
            'panelLayout'             => 'filter;sort,search,limit',
        ),
        'label' => array
        (
            'fields'                  => array('name')
        ),
        'global_operations' => array
        (
            'administration' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['administration'],
                'href'                => 'do=administration',
                'icon'                => 'header.svg'
            ),
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_expose_module']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.svg'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_expose_module']['copy'],
                'href'                => 'act=paste&amp;mode=copy',
                'icon'                => 'copy.svg',
                'attributes'          => 'onclick="Backend.getScrollOffset()"'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_expose_module']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.svg',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_expose_module']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.svg'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        '__selector__'                => array('type', 'protected', 'addHeadings'),
        'default'                     => '{title_legend},name,headline,type',
        'title'                       => '{title_legend},name,headline,type;{settings_legend},fontSize;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'address'                     => '{title_legend},name,headline,type;{settings_legend},forceFullAddress;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'gallery'                     => '{title_legend},name,headline,type;{settings_legend},galleryModules,numberOfItems,gallerySkipOnEmpty;{image_legend:hide},imgSize;{template_legend:hide},customTpl,galleryItemTemplate;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'details'                     => '{title_legend},name,headline,type;{settings_legend},detailBlocks,summariseDetailBlocks,includeAddress,addHeadings;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'mainDetails'                 => '{title_legend},name,headline,type;{settings_legend},numberOfItems;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'mainAttributes'              => '{title_legend},name,headline,type;{settings_legend},numberOfItems;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'mainPrice'                   => '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'mainArea'                    => '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'statusToken'                 => '{title_legend},name,headline,type;{settings_legend},statusTokens;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'marketingToken'              => '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'texts'                       => '{title_legend},name,headline,type;{settings_legend},textBlocks,maxTextLength,addHeadings;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'fieldList'                   => '{title_legend},name,headline,type;{settings_legend},fields;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'contactPerson'               => '{title_legend},name,headline,type;{settings_legend},contactFields,forceFullAddress;{image_legend:hide},imgSize;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'enquiryForm'                 => '{title_legend},name,headline,type;{settings_legend},form;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'share'                       => '{title_legend},name,headline,type;{settings_legend},share;{template_legend:hide},customTpl,shareEmailTemplate;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'print'                       => '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID',
        'html'                        => '{title_legend},name,headline,type;{settings_legend},html;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID'
    ),

    // Subpalettes
    'subpalettes' => array
    (
        'protected'                   => 'groups',
        'addHeadings'                 => 'fontSize',
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'name' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['name'],
            'exclude'                 => true,
            'sorting'                 => true,
            'flag'                    => 1,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'headline' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['headline'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'inputUnit',
            'options'                 => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
            'eval'                    => array('maxlength'=>200, 'tl_class'=>'w50 clr'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'type' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['type'],
            'default'                 => 'title',
            'exclude'                 => true,
            'sorting'                 => true,
            'flag'                    => 11,
            'filter'                  => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_expose_module', 'getExposeModules'),
            'reference'               => &$GLOBALS['TL_LANG']['FMD'],
            'eval'                    => array('helpwizard'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        ),
        'customTpl' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['customTpl'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_expose_module', 'getExposeModuleTemplates'),
            'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        ),
        'protected' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['protected'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'groups' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['groups'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'foreignKey'              => 'tl_member_group.name',
            'eval'                    => array('mandatory'=>true, 'multiple'=>true),
            'sql'                     => "blob NULL",
            'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
        ),
        'guests' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['guests'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'cssID' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['cssID'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('multiple'=>true, 'size'=>2, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'fontSize' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['fontSize'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
            'eval'                    => array('tl_class'=>'w50', 'mandatory'=>true),
            'sql'                     => "varchar(2) NOT NULL default ''"
        ),
        'forceFullAddress' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['forceFullAddress'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'galleryModules' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['galleryModules'],
            'default'                 => array('titleImageSRC', 'imageSRC'),
            'exclude'                 => true,
            'inputType'               => 'checkboxWizard',
            'options'                 => array('titleImageSRC', 'imageSRC', 'planImageSRC', 'interiorViewImageSRC', 'exteriorViewImageSRC', 'mapViewImageSRC', 'panoramaImageSRC', 'epassSkalaImageSRC', 'logoImageSRC', 'qrImageSRC'),
            'eval'                    => array('mandatory'=>true, 'multiple'=>true),
            'reference'               => &$GLOBALS['TL_LANG']['FMD'],
            'sql'                     => "blob NULL"
        ),
        'galleryItemTemplate' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['galleryItemTemplate'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_expose_module', 'getGalleryItemTemplates'),
            'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        ),
        'gallerySkipOnEmpty' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['gallerySkipOnEmpty'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'imgSize' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['imgSize'],
            'exclude'                 => true,
            'inputType'               => 'imageSize',
            'reference'               => &$GLOBALS['TL_LANG']['MSC'],
            'eval'                    => array('rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
            'options_callback' => function ()
            {
                return System::getContainer()->get('contao.image.image_sizes')->getOptionsForUser(BackendUser::getInstance());
            },
            'sql'                     => "varchar(64) NOT NULL default ''"
        ),
        'numberOfItems' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['numberOfItems'],
            'default'                 => 0,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'perPage' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['perPage'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'jumpTo' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['jumpTo'],
            'exclude'                 => true,
            'inputType'               => 'pageTree',
            'foreignKey'              => 'tl_page.title',
            'eval'                    => array('mandatory'=>true, 'fieldType'=>'radio', 'tl_class'=>'clr'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'",
            'relation'                => array('type'=>'hasOne', 'load'=>'eager')
        ),
        'detailBlocks' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['detailBlocks'],
            'exclude'                 => true,
            'inputType'               => 'checkboxWizard',
            'options'                 => array('area', 'price', 'attribute', 'detail', 'energie'),
            'eval'                    => array('mandatory'=>true, 'multiple'=>true),
            'reference'               => &$GLOBALS['TL_LANG']['FMD'],
            'sql'                     => "blob NULL"
        ),
        'summariseDetailBlocks' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['summariseDetailBlocks'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'addHeadings' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['addHeadings'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12', 'submitOnChange'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'includeAddress' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['includeAddress'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'textBlocks' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['textBlocks'],
            'exclude'                 => true,
            'inputType'               => 'checkboxWizard',
            'options'                 => array('objektbeschreibung', 'ausstattBeschr', 'lage', 'sonstigeAngaben'),
            'eval'                    => array('mandatory'=>true, 'multiple'=>true),
            'reference'               => &$GLOBALS['TL_LANG']['FMD'],
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'maxTextLength' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['maxTextLength'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'statusTokens' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['statusTokens'],
            'exclude'                 => true,
            'inputType'               => 'checkboxWizard',
            'options'                 => array('new', 'reserved', 'rented', 'sold'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_real_estate_misc'],
            'eval'                    => array('multiple'=>true),
            'sql'                     => "blob NULL"
        ),
        'fields'  => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['fields'],
            'inputType' 	          => 'multiColumnWizard',
            'eval' 			          => array
            (
                'dragAndDrop'  => true,
                'columnFields' => array
                (
                    'field' => array
                    (
                        'label'             => &$GLOBALS['TL_LANG']['tl_expose_module']['show_fields'],
                        'exclude'           => true,
                        'inputType'         => 'select',
                        'options_callback'  => array('tl_expose_module', 'getRealEstateFields'),
                        'eval' 		        => array('includeBlankOption'=>true, 'style'=>'width:100%', 'chosen'=>true)
                    )
                )
            ),
            'sql'                     => "blob NULL"
        ),
        'contactFields' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['contactFields'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'options'                 => array('foto', 'kontaktname', 'strasse', 'hausnummer', 'plz', 'ort', 'land', 'zusatzfeld', 'email', 'telefon'),
            'eval'                    => array('mandatory'=>true, 'multiple'=>true),
            'reference'               => &$GLOBALS['TL_LANG']['FMD'],
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'form' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['form'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'foreignKey'              => 'tl_form.title',
            'options_callback'        => array('tl_expose_module', 'getForms'),
            'eval'                    => array('chosen'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'",
            'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
        ),
        'share' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['share'],
            'exclude'                 => true,
            'inputType'               => 'checkboxWizard',
            'options'                 => array('email'),
            'eval'                    => array('multiple'=>true),
            'reference'               => &$GLOBALS['TL_LANG']['FMD'],
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'shareEmailTemplate' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['shareEmailTemplate'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_expose_module', 'getShareTemplates'),
            'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        ),
        'html' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['html'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'textarea',
            'eval'                    => array('allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true),
            'explanation'             => 'insertTags',
            'sql'                     => "text NULL"
        ),
        'text' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['text'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'textarea',
            'eval'                    => array('rte'=>'tinyMCE', 'helpwizard'=>true),
            'explanation'             => 'insertTags',
            'sql'                     => "mediumtext NULL"
        ),
        'hideOnEmpty' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_expose_module']['hideOnEmpty'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
    )
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Daniele Sciannimanica <daniele@oveleon.de>
 */
class tl_expose_module extends Backend
{

    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }

    /**
     * Check permissions to edit the table
     *
     * @throws Contao\CoreBundle\Exception\AccessDeniedException
     */
    public function checkPermission()
    {
        return;
    }

    /**
     * Return all front end modules as array
     *
     * @return array
     */
    public function getExposeModules()
    {
        $groups = array();

        foreach ($GLOBALS['FE_EXPOSE_MOD'] as $k=>$v)
        {
            foreach (array_keys($v) as $kk)
            {
                $groups[$k][] = $kk;
            }
        }

        return $groups;
    }

    /**
     * Return all module templates as array
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getExposeModuleTemplates(DataContainer $dc)
    {
        return $this->getTemplateGroup('expose_mod_' . $dc->activeRecord->type);
    }

    /**
     * Return all gallery item templates as array
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getGalleryItemTemplates(DataContainer $dc)
    {
        return $this->getTemplateGroup('expose_mod_gallery_' . $dc->activeRecord->type);
    }

    /**
     * Return all gallery item templates as array
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getShareTemplates(DataContainer $dc)
    {
        return $this->getTemplateGroup('expose_mod_share_' . $dc->activeRecord->type);
    }

    /**
     * Return all details from real estate dca as array
     *
     * @return array
     */
    public function getRealEstateFields()
    {
        $filterFields = array();

        $this->loadDataContainer('tl_real_estate');

        if (\is_array($GLOBALS['TL_DCA']['tl_real_estate']['fields']))
        {
            foreach ($GLOBALS['TL_DCA']['tl_real_estate']['fields'] as $field => $data)
            {
                if(\is_array($data['realEstate']) && !($data['realEstate']['group'] === 'medien' || $data['realEstate']['group'] === 'neubau'))
                {
                    $filterFields[] = $field;
                }
            }
        }

        return $filterFields;
    }

    /**
     * Get all forms and return them as array
     *
     * @return array
     */
    public function getForms()
    {
        if (!$this->User->isAdmin && !\is_array($this->User->forms))
        {
            return array();
        }

        $arrForms = array();
        $objForms = $this->Database->execute("SELECT id, title FROM tl_form ORDER BY title");

        while ($objForms->next())
        {
            if ($this->User->hasAccess($objForms->id, 'forms'))
            {
                $arrForms[$objForms->id] = $objForms->title;
            }
        }

        return $arrForms;
    }

}
