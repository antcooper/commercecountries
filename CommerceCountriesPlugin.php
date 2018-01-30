<?php
/**
 * Commerce Countries plugin for Craft CMS
 *
 * Multiselect of Countries from Craft Commerce
 *
 * @author    Ant Cooper
 * @copyright Copyright (c) 2018 Ant Cooper
 * @link      http://antcooper.com
 * @package   CommerceCountries
 * @since     1.0.0
 */

namespace Craft;

class CommerceCountriesPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Commerce Countries');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Multiselect of Countries from Craft Commerce');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/antcooper/commercecountries/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/antcoper/commercecountries/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Ant Cooper';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://antcooper.com';
    }
}