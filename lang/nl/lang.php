<?php return [
    'plugin' => [
        'name' => 'Simple Contact',
        'description' => 'Een makkelijk contactformulier.',
    ],
    'simplecontact' => [
        'from' => 'Van',
        'subject' => 'Onderwerp',
        'name' => 'Naam',
        'email' => 'E-mail',
        'status' => 'Status',
        'date' => 'Datum',
        'mainmenu' => 'Berichten',
        'submenu' => 'In-box',
        'permission' => 'Simple Contact',
        'permission_messages' => 'Berichten',
        'permission_settings' => 'Instellingen',
        'phone' => 'Telefoon',
        'message' => 'Bericht',
        'reply' => 'Beantwoord',
        'print' => 'Print',
        'print_message' => 'Print bericht',
        'back' => 'Terug',
        'message_delete_success' => 'Bericht is verwijderd.',
        'message_delete_error' => 'Er ging iets mis. Bericht is niet verwijderd.',
        'message_not_found_error' => 'Niet gevonden.',
        'message_reply_error' => 'Er ging iets mis. Antwoord is niet verzonden.',
        'message_reply_success' => 'Andwoord is verzonden.',
        'message_reply' => 'Antwoordbericht',
        'button_submit_reply' => 'Verzenden',
        'button_close_reply' => 'Sluiten',
    ],
    'settings' => [
        'section_contact_label' => 'Instellingen',
        'redirect_label' => 'Doorsturen',
        'redirect_comment' => 'Doorsturen naar andere pagina als formulier succesvol is verzonden.',
        'redirect_url_label' => 'Doorsturen naar',
        'redirect_url_comment' => 'Selecteer een pagina waarnaar moet worden doorgestuurd.',
        'success_message' => 'Succesmelding',
        'success_message_comment' => 'Deze melding wordt weergegeven als formulier succesvol is verzonden.',
        'section_mail_label' => 'E-mail instellingen',
        'notification_label' => 'Notificatie',
        'notification_comment' => 'Verzend een e-mail notificatie als contact formulier is verzonden.',
        'notification_email_address' => 'Notificatie e-mailadres',
        'notification_email_address_comment' => 'E-mailadres waar notificatie heen wordt verstuurd.',
        'auto_reply_label' => 'Automatisch beantwoorden',
        'auto_reply_comment' => 'Verstuur autmatisch een bericht naar de afzender.',
        'section_recaptcha_label' => 'reCAPTCHA instellingen',
        'section_recaptcha_comments' => 'Toon of verberg reCAPTCHA in contactformulier',
        'recaptcha_label' => 'reCAPTCHA',
        'recaptcha_comment' => 'Toon reCAPTCHA widget op contactformulier',
        'site_key_label' => 'Site Key',
        'site_key_comment' => 'Uw Site Key verkregen bij Google.',
        'secret_key_label' => 'Secret Key',
        'secret_key_comment' => 'Uw Secret Key verkregen bij google.',
        'form_top_text_label' => 'Formuliertekst',
        'form_top_text_comment' => 'Deze tekst verschijnt als begeleidende tekst op het formulier.',
    ],
    'component' => [
        'name' => 'Simpel Contactformlier',
        'description' => 'Voeg contactformulier toe aan webpagina.',
        'name_title' => 'Naam veld label',
        'name_description' => 'Naam label wordt getoond bij veld (verplicht)',
        'name_validation_message' => '',
        'email_title' => 'E-mail veld label',
        'email_description' => 'E-mail label wordt getoond bij veld (verplicht)',
        'email_validation_message' => '',
        'phone_title' => 'Telefoon veld label',
        'phone_description' => 'Telefoon label wordt getoond bij veld',
        'subject_title' => 'Onderwerp veld label',
        'subject_description' => 'Onderwerp label wordt getoond bij veld (verplicht)',
        'subject_validation_message' => '',
        'message_title' => 'Bericht veld label',
        'message_description' => 'Bericht label wordt getoond bij veld (verplicht)',
        'message_validation_message' => '',
        'display_phone_field' => 'Toon Telefoon',
        'display_phone_field_description' => 'Toon veld voor Telefoon op formulier',
        'detailed_errors_field' => 'Gedetaileerde fouten',
        'detailed_errors_field_description' => 'Toon alle validatiefouten in een lijst.',
        'button_text' => 'Label verzendknop',
        'button_description' => 'Tekst getoond op de verzendknop (verplicht)',
        'button_validation_message' => '',
    ],
    'widget' => [
        'label' => 'Berichtenoverzicht',
        'properties_title' => 'Widget titel',
        'properties_chart' => 'Chart Type',
        'properties_chart_option_bar' => 'Bar',
        'properties_chart_option_pie' => 'Pie',
        'new' => 'Nieuw',
        'replied' => 'Beantwoord',
        'total' => 'Totaal'
    ]
];