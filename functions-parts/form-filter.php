<?php

// Filter the Gravity Forms - Submit input --------
add_filter('gform_submit_button', 'input_to_button', 10, 2);
function input_to_button($button, $form)
{
    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $button);
    $input = $dom->getElementsByTagName('input')->item(0);
    $onclick = $input->getAttribute('onclick');
    // $onclick .= " initLoadingBtn(jQuery(this));";
    $input->setAttribute('onclick', $onclick);
    $btn_classes = $input->getAttribute('class');
    $btn_classes .= " custom-submit-button cursor-primary-action";
    $new_button = $dom->createElement('button');

    $button_child = $dom->createElement('span');
    $button_child->appendChild($dom->createTextNode($input->getAttribute('value')));
    $button_child->setAttribute('class', 'custom-submit-button-txt');
    $new_button->appendChild($button_child);

    $input->removeAttribute('value');
    foreach ($input->attributes as $attribute) {
        $new_button->setAttribute($attribute->name, $attribute->value);
    }
    $new_button->setAttribute('class', $btn_classes);
    $input->parentNode->replaceChild($new_button, $input);
    return '<div class="wrapper-button">' . $dom->saveHtml($new_button) . '</div>';
}
