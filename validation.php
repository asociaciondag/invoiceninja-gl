<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. FeO free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute debe ser aceptado.",
    "active_url"       => ":attribute non é unha URL válida.",
    "after"            => ":attribute debe ser unha data posterior a :date.",
    "alpha"            => ":attribute so debe conter letras.",
    "alpha_dash"       => ":attribute so debe conter letras, números e guións.",
    "alpha_num"        => ":attribute so debe conter letras e números.",
    "array"            => ":attribute debe ser un conxunto.",
    "before"           => ":attribute debe ser unha data anterior a :date.",
    "between"          => array(
        "numeric" => ":attribute ten que estar entre :min - :max.",
        "file"    => ":attribute debe pesar entre :min - :max kilobytes.",
        "string"  => ":attribute ten que ter entre :min - :max caracteres.",
        "array"   => ":attribute ten que ter entre :min - :max ítems.",
    ),
    "confirmed"        => "A confirmación de :attribute non coincide.",
    "date"             => ":attribute non é unha data válida.",
    "date_format"      => ":attribute non corresponde ao formato :format.",
    "different"        => ":attribute e :other deben ser diferentes.",
    "digits"           => ":attribute debe ter :digits díxitos.",
    "digits_between"   => ":attribute debe ter entre :min e :max díxitos.",
    "email"            => ":attribute non é un correo válido",
    "exists"           => ":attribute é inválido.",
    "image"            => ":attribute debe ser unha imaxe.",
    "in"               => ":attribute é inválido.",
    "integer"          => ":attribute debe ser un número enteiro.",
    "ip"               => ":attribute debe ser unha dirección IP válida.",
    "max"              => array(
        "numeric" => ":attribute non debe ser maior a :max.",
        "file"    => ":attribute non debe ser maior que :max kilobytes.",
        "string"  => ":attribute non debe ser maior que :max caracteres.",
        "array"   => ":attribute non debe ter más de :max elementos.",
    ),
    "mimes"            => ":attribute debe ser un arquivo con formato: :values.",
    "min"              => array(
        "numeric" => "O tamaño de :attribute debe ser de polo menos :min.",
        "file"    => "O tamaño de :attribute debe ser de polo menos :min kilobytes.",
        "string"  => ":attribute debe conter polo menos :min caracteres.",
        "array"   => ":attribute debe ter polo menos :min elementos.",
    ),
    "not_in"           => ":attribute é inválido.",
    "numeric"          => ":attribute debe ser numérico.",
    "regex"            => "O formato de :attribute é inválido.",
    "required"         => "O campo :attribute é obligatorio.",
    "required_if"      => "O campo :attribute é obligatorio cando :other é :value.",
    "required_with"    => "O campo :attribute é obligatorio cando :values está presente.",
    "required_with_all" => "O campo :attribute é obligatorio cando :values está presente.",
    "required_without" => "O campo :attribute é obligatorio cando :values non está presente.",
    "required_without_all" => "O campo :attribute é obligatorio cando ningún :values está presente.",
    "same"             => ":attribute e :other deben coincidir.",
    "size"             => array(
        "numeric" => "O tamaño de :attribute debe ser :size.",
        "file"    => "O tamaño de :attribute debe ser :size kilobytes.",
        "string"  => ":attribute debe conter :size caracteres.",
        "array"   => ":attribute debe conter :size elementos.",
    ),
    "unique"     => ":attribute xa foi registrado.",
    "url"        => "O formato :attribute é inválido.",
    "positive"   => ":attribute debe ser maior ca cero.",
    "has_credit" => "O cliente non ten crédito suficiente.",
    "notmasked" => "Os valores estan enmascarados",
    "less_than" => 'O valor :attribute debe ser menor que :value',
    "has_counter" => 'O valor deve conter {$counter}',
    "valid_contacts" => "Todos os contactos deben ter un correo electrónico ou nome",
    "valid_invoice_items" => "A factura excedeu a cantidade máxima",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

);
