<?php

namespace Craft;

class CommerceCountriesFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('Commerce Countries');
    }

    public function defineContentAttribute()
    {
        return AttributeType::Mixed;
    }

    public function getInputHtml($name, $value)
    {
        $id = craft()->templates->formatInputId($name);
        $namespacedId = craft()->templates->namespaceInputId($id);

        $variables = array(
            'id' => $id,
            'name' => $name,
            'namespaceId' => $namespacedId,
            'values' => $value
        );

        return craft()->templates->render('commercecountries/_field.twig', $variables);
/*



        if (!$value) $value = new Select2Model();

        // Get Field Settings
        $settings = $this->getSettings();

        // Reformat the input name into something that looks more like an ID
        $id = craft()->templates->formatInputId($name);

        // Figure out what that ID is going to look like once it has been namespaced
        $namespacedId = craft()->templates->namespaceInputId($id);

        // Options to pass to fieldtype jQuery plugin
        $pluginOptions = array(
            'namespaceId' => $namespacedId,
            'limit' => ($settings->limit) ? $settings->limit : 1,
            'placeholder' => ($settings->placeholder) ? $settings->placeholder : 'Select an Option',
        );

        $pluginOptions = json_encode($pluginOptions);

        craft()->templates->includeCssResource('select2/vendor/select2/css/select2.css');
        craft()->templates->includeJsResource('select2/vendor/select2/js/select2.full.js');

        // Include field CSS & JS
        craft()->templates->includeCssResource('select2/css/style.css');
        craft()->templates->includeJsResource('select2/js/field.js');

        // Initialise jQuery plugin and pass options
        craft()->templates->includeJs("$('#{$namespacedId}').Select2FieldType(".$pluginOptions.");");

        // Options to pass to field
        $fieldOptions = array(
            'id' => $id,
            'name' => $name,
            'namespaceId' => $namespacedId,
            'prefix' => craft()->templates->namespaceInputId(""),
            'settings' => $settings,
            'value' => $value,
            'options' => $this->getJsonFileOptions($settings->list, $settings->jsonFile)
        );

        return craft()->templates->render('select2/field/field.twig', $fieldOptions);*/
    }

    public function prepValueFromPost($value)
    {
        return $value;
    }

    public function prepValue($value)
    {
        return $value;
    }
}