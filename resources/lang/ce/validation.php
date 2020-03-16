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

    'accepted'=>'必須接受 :attribute 屬性。',
    'active_url'=>' :attribute 屬性不是有效的網址。',
    'after'=>' :attribute 屬性必須是日期之後的 :date',
    'after_or_equal'=>' :attribute 屬性必須是日期之後或等於 :date',
    'alpha'=>' :attribute 屬性可能只包含字母。',
    'alpha_dash'=>' :attribute 屬性只能包含字母,數字和短劃線。',
    'alpha_num'=>' :attribute 屬性可能只包含字母和數字。',
    'array'=>' :attribute 屬性必須是數組。',
    'before'=>' :attribute 屬性必須是之前的日期 :date',
    'before_or_equal'=>' :attribute 屬性必須是日期之前或等於 :date',
    'between'              => [
        'numeric'=>' :attribute 屬性必須介於 :min 和 :max 之間',
        'file'=>' :attribute 屬性必須介於 :min 和 :max kilobytes。',
        'string'=>' :attribute 屬性必須介於 :min 和 :max characters。',
        'array'=>' :attribute 屬性必須介於 :min 和 :max items。',
    ],
    'boolean'=>' :attribute 屬性字段必須為true或false。',
    'confirmed'=>' :attribute 屬性確認不匹配。',
    'date'=>' :attribute 屬性不是有效日期。',
    'date_format'=>' :attribute 屬性與格式：格式不匹配。',
    'different'=>' :attribute 屬性和 :other 他必須不同。',
    'digits'=>' :attribute 屬性必須是 :digits ',
    'digits_between'=>' :attribute 屬性必須介於 :min 和 :max digits。',
    'dimensions'=>' :attribute 屬性的圖片尺寸無效。',
    'distinct'=>' :attribute 屬性字段有重複的值。',
    'email'=>' :attribute 屬性必須是有效的電子郵件地址。',
    'exists'=>'所選 :attribute 屬性無效。',
    'file'=>' :attribute 屬性必須是文件。',
    'filled'=>' :attribute 屬性字段必須有值。',
    'image'=>' :attribute 屬性必須是圖像。',
    'in'=>'所選 :attribute 屬性無效。',
    'in_array'=>' :attribute 屬性字段不存在於 :other 。',
    'integer'=>' :attribute 屬性必須是整數。',
    'ip'=>' :attribute 屬性必須是有效的IP地址。',
    'ipv4'=>' :attribute 屬性必須是有效的IPv4地址。',
    'ipv6'=>' :attribute 屬性必須是有效的IPv6地址。',
    'json'=>' :attribute 屬性必須是有效的JSON字符串。',
    'max'                  => [
        'numeric'=>' :attribute 屬性可能不大於 :max 。',
        'file'=>' :attribute 屬性可能不大於 :max kilobytes。',
        'string'=>' :attribute 屬性不能大於 :max 大字符。',
        'array'=>' :attribute 屬性可能不超過 :max items。',
    ],
    'mimes'=>" :attribute 屬性必須是類型為: :values '的文件",
    'mimetypes'=>" :attribute 屬性必須是類型為: :values '的文件",
    'min'                  => [
        'numeric'=>' :attribute 屬性必須至少為 :min 。',
        'file'=>' :attribute 屬性必須至少為 :min kilobytes。',
        'string'=>' :attribute 屬性必須至少為 :min characters。',
        'array'=>' :attribute 屬性必須至少包含 :min items。',
    ],
    'not_in'=>'所選 :attribute 屬性無效。',
    'numeric'=>' :attribute 屬性必須是數字。',
    'present'=>' :attribute 屬性字段必須存在。',
    'regex'=>' :attribute 屬性格式無效。',
    'required'=>' :attribute 屬性字段是必需的。',
    'required_if'=>' :attribute 屬性字段在以下情況下是必需的 :other 他是 :value',
    'required_unless'=>' :attribute 屬性字段是必需的,除非 :other 在 :values',
    'required_with'=>'當 :values 屬存在時,需要 :attribute 性字段。',
    'required_with_all'=>'當 :values 屬存在時,需要 :attribute 性字段。',
    'required_without'=>'當 :attribute 屬不存在時,屬性字段是必需的。 :values',
    'required_without_all'=>'當 :attribute 存在任何值時,屬性字段是必需的。 :values',
    'same'=>' :attribute 性和 :other 他必須匹配。',
    'size'                 => [
        'numeric'=>' :attribute 屬性必須是 :size',
        'file'=>' :attribute 屬性必須是 :sizekilobytes。',
        'string'=>' :attribute 屬性必須是 :size 小字符。',
        'array'=>' :attribute 屬性必須包含 :size items。',
    ],
    'string'=>' :attribute 屬性必須是一個字符串。',
    'timezone'=>' :attribute 屬性必須是有效區域。',
    'unique'=>' :attribute 屬性已被採用。',
    'uploaded'=>' :attribute 屬性無法上傳。',
    'url'=>' :attribute 屬性格式無效。',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
    'custom-messages' => [
        'quantity_not_available'=>'僅：數量：可用單位',
        'this_field_is_required'=>'此字段為必填項'
    ],

];
