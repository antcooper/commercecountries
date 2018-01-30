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