<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'validarUpdateEstado' => 'Por favor para poder aprobar el requerimeinto debe ingresar las ventajas, desventajas y cotizaciones de los provoveedores.',
    'accepted'              => 'El campo debe ser aceptado.',
    'active_url'            => 'El campo no es una URL válida.',
    'after'                 => 'El campo debe ser una fecha después de :date.',
    'after_or_equal'        => 'El campo debe ser una fecha después o igual a :date.',
    'alpha'                 => 'El campo sólo puede contener letras.',
    'alpha_dash'            => 'El campo sólo puede contener letras, números y guiones.',
    'alpha_num'             => 'El campo sólo puede contener letras y números.',
    'array'                 => 'El campo debe ser un arreglo.',
    'before'                => 'El campo debe ser una fecha antes de :date.',
    'before_or_equal'       => 'El campo debe ser una fecha antes o igual a :date.',
    'between'               => [
        'numeric' => 'El campo :attribute debe estar entre :min - :max.',
        'file'    => 'El campo :attribute debe estar entre :min - :max kilobytes.',
        'string'  => 'El campo :attribute debe estar entre :min - :max caracteres.',
        'array'   => 'El campo :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean'               => 'El campo  debe ser verdadero o falso.',
    'confirmed'             => 'El campo de confirmación de :attribute no coincide.',
    'date'                  => 'El campo  no es una fecha válida.',
    'date_format'           => 'El campo  no corresponde con el formato :format.',
    'different'             => 'Los campos  y :other deben ser diferentes.',
    'digits'                => 'El campo  debe ser de :digits dígitos.',
    'digits_between'        => 'El campo  debe tener entre :min y :max dígitos.',
    'dimensions'            => 'El campo  no tiene una dimensión válida.',
    'distinct'              => 'El campo  tiene un valor duplicado.',
    'email'                 => 'El formato del :attribute es inválido.',
    'exists'                => 'El campo  seleccionado es inválido.',
    'file'                  => 'El campo  debe ser un archivo.',
    'filled'                => 'El campo  es requerido.',
    'gt'                    => [
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'file'    => 'El campo :attribute debe ser mayor que :value kilobytes.',
        'string'  => 'El campo :attribute debe ser mayor que :value caracteres.',
        'array'   => 'El campo :attribute puede tener hasta :value elementos.',
    ],
    'gte'                   => [
        'numeric' => 'El campo :attribute debe ser mayor o igual que :value.',
        'file'    => 'El campo :attribute debe ser mayor o igual que :value kilobytes.',
        'string'  => 'El campo :attribute debe ser mayor o igual que :value caracteres.',
        'array'   => 'El campo :attribute puede tener :value elementos o más.',
    ],
    'image'                 => 'El campo debe ser una imagen.',
    'in'                    => 'El campo seleccionado es inválido.',
    'in_array'              => 'El campo no existe en :other.',
    'integer'               => 'El campo debe ser un entero.',
    'ip'                    => 'El campo debe ser una dirección IP válida.',
    'ipv4'                  => 'El campo debe ser una dirección IPv4 válida.',
    'ipv6'                  => 'El campo debe ser una dirección IPv6 válida.',
    'json'                  => 'El campo debe ser una cadena JSON válida.',
    'lt'                   => [
        'numeric' => 'El campo :attribute debe ser menor que :max.',
        'file'    => 'El campo :attribute debe ser menor que :max kilobytes.',
        'string'  => 'El campo :attribute debe ser menor que :max caracteres.',
        'array'   => 'El campo :attribute puede tener hasta :max elementos.',
    ],
    'lte'                   => [
        'numeric' => 'El campo :attribute debe ser menor o igual que :max.',
        'file'    => 'El campo :attribute debe ser menor o igual que :max kilobytes.',
        'string'  => 'El campo :attribute debe ser menor o igual que :max caracteres.',
        'array'   => 'El campo :attribute no puede tener más que :max elementos.',
    ],
    'max'                   => [
        'numeric' => 'El campo :attribute debe ser menor que :max.',
        'file'    => 'El campo :attribute debe ser menor que :max kilobytes.',
        'string'  => 'El campo :attribute debe ser menor que :max caracteres.',
        'array'   => 'El campo :attribute puede tener hasta :max elementos.',
    ],
    'mimes'                 => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'             => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                   => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'file'    => 'El campo :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe tener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe tener al menos :min elementos.',
    ],
    'not_in'                => 'El campo :attribute seleccionado es invalido.',
    'not_regex'             => 'El formato del campo :attribute es inválido.',
    'numeric'               => 'El campo :attribute debe ser un número.',
    'present'               => 'El campo :attribute debe estar presente.',
    'regex'                 => 'El formato del campo :attribute es inválido.',
    'required'              => 'El campo es requerido.',
    'required_if'           => 'El campo es requerido cuando el campo :other es :value.',
    'required_unless'       => 'El campo es requerido a menos que :other esté presente en :values.',
    'required_with'         => 'El campo es requerido cuando :values está presente.',
    'required_with_all'     => 'El campo es requerido cuando :values está presente.',
    'required_without'      => 'El campo es requerido cuando :values no está presente.',
    'required_without_all'  => 'El campo es requerido cuando ningún :values está presente.',
    'same'                  => 'El campo y :other debe coincidir.',
    'size'                  => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El campo :attribute debe tener :size kilobytes.',
        'string'  => 'El campo :attribute debe tener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'starts_with'           => 'El debe empezar con uno de los siguientes valores :values',
    'string'                => 'El campo debe ser una cadena.',
    'timezone'              => 'El campo debe ser una zona válida.',
    'unique'                => 'El campo ya ha sido tomado.',
    'uploaded'              => 'El campo no ha podido ser cargado.', 
    'url'                   => 'El formato de :attribute es inválido.',
    'uuid'                  => 'El debe ser un UUID valido.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
