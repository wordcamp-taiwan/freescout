<?php

return [
  'accepted'        => ':attribute moet geaccepteerd worden.',
  'active_url'      => ':attribute is geen geldige URL.',
  'after'           => ':attribute moet een datum zijn na :date.',
  'after_or_equal'  => ':attribute moet een datum gelijk of na :date zijn.',
  'alpha'           => ':attribute mag alleen letters bevatten.',
  'alpha_dash'      => ':attribute mag alleen letters, nummers, en streepjes bevatten.',
  'alpha_num'       => ':attribute mag alleen letters en nummers bevatten.',
  'array'           => ':attribute moet een array zijn.',
  'before'          => ':attribute moet een datum zijn voor :date.',
  'before_or_equal' => ':attribute moet een datum zijn voor of gelijk aan :date.',
  'between'         => [
    'numeric' => ':attribute moet tussen :min en :max zijn.',
    'file'    => ':attribute moet tussen :min en :max kilobytes zijn.',
    'string'  => ':attribute moet tussen :min en :max karakters zijn.',
    'array'   => ':attribute moet tussen :min en :max items hebben.',
  ],
  'boolean'        => ':attribute veld moet waar of onwaar zijn.',
  'confirmed'      => ':attribute bevestiging komt niet overeen.',
  'date'           => ':attribute is geen geldige datum.',
  'date_format'    => ':attribute komt niet overeen met formaat :format.',
  'different'      => ':attribute en :other moet verschillend zijn.',
  'digits'         => ':attribute moet :digits cijfers hebben.',
  'digits_between' => ':attribute moet tussen :min en :max cijfers hebben.',
  'dimensions'     => ':attribute afbeelding heeft ongeldige afmetingen.',
  'distinct'       => ':attribute veld heeft een dubbele waarde.',
  'email'          => ':attribute moet een geldig email adres zijn.',
  'exists'         => 'geselecteerd :attribute is ongeldig.',
  'file'           => ':attribute moet een bestand zijn.',
  'filled'         => ':attribute veld moet een waarde hebben.',
  'image'          => ':attribute moet een afbeelding zijn.',
  'in'             => 'geselecteerd :attribute is ongeldig.',
  'in_array'       => ':attribute veld bestaat niet in :other.',
  'integer'        => ':attribute moet een heel getal zijn.',
  'ip'             => ':attribute moet een geldig IP adres zijn.',
  'ipv4'           => ':attribute moet een geldig IPv4 adres zijn.',
  'ipv6'           => ':attribute moet een geldig IPv6 adres zijn.',
  'json'           => ':attribute moet een geldige JSON string zijn.',
  'max'            => [
    'numeric' => ':attribute mag niet groter zijn dan :max.',
    'file'    => ':attribute mag niet groter zijn dan :max kilobytes.',
    'string'  => ':attribute mag niet groter zijn dan :max karakters.',
    'array'   => ':attribute mag niet meer dan :max items hebben.',
  ],
  'mimes'     => ':attribute moet een bestand zijn van het type: :values.',
  'mimetypes' => ':attribute moet een bestand zijn van het type: :values.',
  'min'       => [
    'numeric' => ':attribute moet minstens :min zijn.',
    'file'    => ':attribute moet minstens :min kilobytes zijn.',
    'string'  => ':attribute moet minstens :min karakters zijn.',
    'array'   => ':attribute moet minstens :min items hebben.',
  ],
  'not_in'               => 'geselecteerd :attribute is ongeldig.',
  'numeric'              => ':attribute moet een nummer zijn.',
  'present'              => ':attribute veld moet aanwezig zijn.',
  'regex'                => ':attribute formaat is ongeldig.',
  'required'             => ':attribute veld is verplicht.',
  'required_if'          => ':attribute veld is verplicht als :other is :value.',
  'required_unless'      => ':attribute veld is verplicht unless :other in :values is.',
  'required_with'        => ':attribute veld is verplicht als :values aanwezig is.',
  'required_with_all'    => ':attribute veld is verplicht als :values aanwezig is.',
  'required_without'     => ':attribute veld is verplicht als :values niet aanwezig is.',
  'required_without_all' => ':attribute veld is verplicht als geen van de :values aanwezig zijn.',
  'same'                 => ':attribute en :other moeten overeenkomen.',
  'size'                 => [
    'numeric' => ':attribute moet :size zijn.',
    'file'    => ':attribute moet :size kilobytes zijn.',
    'string'  => ':attribute moet :size karakters zijn.',
    'array'   => ':attribute moet :size items bevatten.',
  ],
  'string'   => ':attribute moet een string zijn.',
  'timezone' => ':attribute moet een geldig zone zijn.',
  'unique'   => ':attribute bestaat al.',
  'uploaded' => ':attribute upload mislukt.',
  'url'      => ':attribute formaat is ongeldig.',
  'custom'   => [
    'attribute-name' => [
      'rule-name' => 'custom-message',
    ],
  ],
];