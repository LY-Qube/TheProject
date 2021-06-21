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

    'accepted' => ':attribute doit être accepté.',
    'active_url' => ":attribute n'est pas une URL valide.",
    'after' => ":attribute doit être une date après :date.",
    'after_or_equal' => ":attribute doit être une date postérieure ou égale à :date.",
    'alpha' => ":attribute ne doit contenir que des lettres.",
    'alpha_dash' => ':attribute ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => ':attribute ne doit contenir que des lettres et des chiffres.',
    'array' => ':attribute doit être un tableau.',
    'before' => ':attribute doit être une date avant :date.',
    'before_or_equal' => ':attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => ':attribute Doit être entre :min et :max.',
        'file' => ':attribute Doit être entre :min and :max kilo-octets.',
        'string' => ':attribute Doit être entre :min and :max caractères',
        'array' => ':attribute Doit être entre :min and :max éléments.',
    ],
    'boolean' => ':attribute le champ doit être vrai ou faux.',
    'confirmed' => 'La confirmation de :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => ":attribute la date n'est pas valide.",
    'date_equals' => ':attribute doit être une date égale à :date.',
    'date_format' => ':attribute ne correspond pas au format :format.',
    'different' => ':attribute et :other doit être différent.',
    'digits' => ':attribute doit être :digits chiffres.',
    'digits_between' => ':attribute Doit être entre :min et :max chiffres.',
    'dimensions' => ":attribute a des dimensions d'image non valides",
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => ':attribute Doit être une adresse e-mail valide.',
    'ends_with' => ":attribute doit se terminer par l'un des éléments suivants : :values.",
    'exists' => 'La sélection :attribute est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => ':attribute doit être supérieur à :value.',
        'file' => ':attribute doit être supérieur à :value kilo-octets.',
        'string' => ':attribute doit être supérieur à :value caractères.',
        'array' => ':attribute doit avoir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être supérieur ou égal :value.',
        'file' => ':attribute doit être supérieur ou égal :value kilo-octets.',
        'string' => ':attribute doit être supérieur ou égal :value caractères',
        'array' => ':attribute doit avoir :value éléments ou plus.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => 'La sélection :attribute est invalide.',
    'in_array' => "Le champ :attribute n'existe pas dans in :other.",
    'integer' => ':attribute Doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'ipv4' => ':attribute doit être une adresse IPv4 valide.',
    'ipv6' => ':attributedoit être une adresse IPv6 valide.',
    'json' => ':attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => ':attribute doit être inférieur à :value.',
        'file' => ':attribute doit être inférieur à :value kilo-octets.',
        'string' => ':attribute doit être inférieur à :value caractères.',
        'array' => ':attribute doit être inférieur à :value éléments.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être inférieur ou égal :value.',
        'file' => ':attribute doit être inférieur ou égal :value kilo-octets.',
        'string' => ':attribute doit être inférieur ou égal :value caractères.',
        'array' => ':attribute doit être inférieur ou égal :value éléments.',
    ],
    'max' => [
        'numeric' => ':attribute ne doit pas être supérieur à :max.',
        'file' => ':attribute ne doit pas être supérieur à :max kilo-octets.',
        'string' => ':attribute ne doit pas être supérieur à :max caractères.',
        'array' => ':attribute ne doit pas être supérieur à :max éléments.',
    ],
    'mimes' => ':attribute doit être un fichier de type: :values.',
    'mimetypes' => ':attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => ':attribute doit être au moins :min.',
        'file' => ':attribute doit être au moins :min kilo-octets.',
        'string' => ':attribute doit être au moins :min caractères.',
        'array' => ':attribute doit être au moins :min éléments.',
    ],
    'multiple_of' => ':attribute doit être un multiple de :value.',
    'not_in' => 'La sélection :attribute est invalide.',
    'not_regex' => "Le format de :attribute n'est pas valide.",
    'numeric' => ':attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => "Le format :attribute n'est pas valide.",
    'required' => 'Le champ :attribute est requis.',
    'required_if' => 'Le champ :attribute est obligatoire lorsque :other est :value.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_without' => "Le champ :attribute est obligatoire lorsque :values n'est pas présent.",
    'required_without_all' => "Le champ :attribute est obligatoire lorsqu'aucun des :values est présent.",
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit à moins que :other est dans :values.',
    'same' => ':attribute et :other doit correspondre.',
    'size' => [
        'numeric' => ':attribute doit être :size.',
        'file' => ':attribute doit être :size kilo-octets.',
        'string' => ':attribute doit être :size caractères.',
        'array' => ':attribute doit contenir :size éléments.',
    ],
    'starts_with' => ":attribute doit commencer par l'un des éléments suivants: :values.",
    'string' => ':attribute doit être une chaîne.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute a déjà été pris.',
    'uploaded' => ":attribute n'a pas réussi à télécharger.",
    'url' => "Le format de :attribute n'est pas valide.",
    'uuid' => ':attribute doit être un UUID valide.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],


    'attributes' => [],

];
