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

    'accepted' => '必須接受 :attribute 欄位。',
    'accepted_if' => '當 :other 是 :value 時，必須接受 :attribute 欄位。',
    'active_url' => ':attribute 欄位必須是有效的 URL。',
    'after' => ':attribute 欄位必須是 :date 之後的日期。',
    'after_or_equal' => ':attribute 欄位必須是 :date 之後或相等的日期。',
    'alpha' => ':attribute 欄位只能包含字母。',
    'alpha_dash' => ':attribute 欄位只能包含字母、數字、破折號和底線。',
    'alpha_num' => ':attribute 欄位只能包含字母和數字。',
    'array' => ':attribute 欄位必須是一個陣列。',
    'ascii' => ':attribute 欄位只能包含單字節的字母數字字符和符號。',
    'before' => ':attribute 欄位必須是 :date 之前的日期。',
    'before_or_equal' => ':attribute 欄位必須是 :date 之前或相等的日期。',
    'between' => [
        'array' => ':attribute 欄位的項目數必須介於 :min 和 :max 之間。',
        'file' => ':attribute 欄位的大小必須介於 :min 和 :max KB 之間。',
        'numeric' => ':attribute 欄位的值必須介於 :min 和 :max 之間。',
        'string' => ':attribute 欄位的字元數必須介於 :min 和 :max 之間。',
    ],
    'boolean' => ':attribute 欄位必須是布林值 (true 或 false)。',
    'can' => ':attribute 欄位包含未授權的值。',
    'confirmed' => ':attribute 欄位的確認不匹配。',
    'contains' => ':attribute 欄位缺少必需的值。',
    'current_password' => '密碼不正確。',
    'date' => ':attribute 欄位必須是有效日期。',
    'date_equals' => ':attribute 欄位必須是與 :date 相等的日期。',
    'date_format' => ':attribute 欄位必須符合格式 :format。',
    'decimal' => ':attribute 欄位必須有 :decimal 位小數。',
    'declined' => ':attribute 欄位必須被拒絕。',
    'declined_if' => '當 :other 是 :value 時，:attribute 欄位必須被拒絕。',
    'different' => ':attribute 欄位和 :other 必須不同。',
    'digits' => ':attribute 欄位必須是 :digits 位數字。',
    'digits_between' => ':attribute 欄位必須是介於 :min 和 :max 位數字之間。',
    'dimensions' => ':attribute 欄位的圖片尺寸無效。',
    'distinct' => ':attribute 欄位有重複的值。',
    'doesnt_end_with' => ':attribute 欄位不能以以下之一結尾：:values。',
    'doesnt_start_with' => ':attribute 欄位不能以以下之一開頭：:values。',
    'email' => ':attribute 欄位必須是有效的電子郵件地址。',
    'ends_with' => ':attribute 欄位必須以以下之一結尾：:values。',
    'enum' => '所選的 :attribute 無效。',
    'exists' => '所選的 :attribute 無效。',
    'extensions' => ':attribute 欄位必須是以下擴展名之一：:values。',
    'file' => ':attribute 欄位必須是一個檔案。',
    'filled' => ':attribute 欄位必須有值。',
    'gt' => [
        'array' => ':attribute 欄位必須有多於 :value 項。',
        'file' => ':attribute 欄位的大小必須大於 :value KB。',
        'numeric' => ':attribute 欄位的值必須大於 :value。',
        'string' => ':attribute 欄位的字元數必須大於 :value。',
    ],
    'gte' => [
        'array' => ':attribute 欄位必須有 :value 項或更多。',
        'file' => ':attribute 欄位的大小必須大於或等於 :value KB。',
        'numeric' => ':attribute 欄位的值必須大於或等於 :value。',
        'string' => ':attribute 欄位的字元數必須大於或等於 :value。',
    ],
    'hex_color' => ':attribute 欄位必須是有效的十六進位顏色。',
    'image' => ':attribute 欄位必須是圖片。',
    'in' => '所選的 :attribute 無效。',
    'in_array' => ':attribute 欄位必須存在於 :other 中。',
    'integer' => ':attribute 欄位必須是整數。',
    'ip' => ':attribute 欄位必須是有效的 IP 地址。',
    'ipv4' => ':attribute 欄位必須是有效的 IPv4 地址。',
    'ipv6' => ':attribute 欄位必須是有效的 IPv6 地址。',
    'json' => ':attribute 欄位必須是有效的 JSON 字串。',
    'list' => ':attribute 欄位必須是一個清單。',
    'lowercase' => ':attribute 欄位必須是小寫字母。',
    'lt' => [
        'array' => ':attribute 欄位的項目數必須少於 :value。',
        'file' => ':attribute 欄位的大小必須小於 :value KB。',
        'numeric' => ':attribute 欄位的值必須小於 :value。',
        'string' => ':attribute 欄位的字元數必須小於 :value。',
    ],
    'lte' => [
        'array' => ':attribute 欄位的項目數不得多於 :value。',
        'file' => ':attribute 欄位的大小必須小於或等於 :value KB。',
        'numeric' => ':attribute 欄位的值必須小於或等於 :value。',
        'string' => ':attribute 欄位的字元數必須小於或等於 :value。',
    ],
    'mac_address' => ':attribute 欄位必須是有效的 MAC 地址。',
    'max' => [
        'array' => ':attribute 欄位的項目數不得多於 :max。',
        'file' => ':attribute 欄位的大小不得超過 :max KB。',
        'numeric' => ':attribute 欄位的值不得超過 :max。',
        'string' => ':attribute 欄位的字元數不得超過 :max。',
    ],
    'max_digits' => ':attribute 欄位不得超過 :max 位數字。',
    'mimes' => ':attribute 欄位必須是以下類型的檔案：:values。',
    'mimetypes' => ':attribute 欄位必須是以下類型的檔案：:values。',
    'min' => [
        'array' => ':attribute 欄位的項目數必須至少有 :min。',
        'file' => ':attribute 欄位的大小必須至少有 :min KB。',
        'numeric' => ':attribute 欄位的值必須至少為 :min。',
        'string' => ':attribute 欄位的字元數必須至少為 :min。',
    ],
    'min_digits' => ':attribute 欄位的數字必須至少為 :min 位。',
    'missing' => ':attribute 欄位必須缺失。',
    'missing_if' => '當 :other 是 :value 時，:attribute 欄位必須缺失。',
    'missing_unless' => '除非 :other 是 :value，否則 :attribute 欄位必須缺失。',
    'missing_with' => '當 :values 存在時，:attribute 欄位必須缺失。',
    'missing_with_all' => '當 :values 都存在時，:attribute 欄位必須缺失。',
    'multiple_of' => ':attribute 欄位必須是 :value 的倍數。',
    'not_in' => '所選的 :attribute 無效。',
    'not_regex' => ':attribute 欄位的格式無效。',
    'numeric' => ':attribute 欄位必須是數字。',
    'password' => [
        'letters' => ':attribute 欄位必須包含至少一個字母。',
        'mixed' => ':attribute 欄位必須包含至少一個大寫字母和一個小寫字母。',
        'numbers' => ':attribute 欄位必須包含至少一個數字。',
        'symbols' => ':attribute 欄位必須包含至少一個符號。',
        'uncompromised' => '所提供的 :attribute 已出現在資料洩漏中。請選擇不同的 :attribute。',
    ],
    'present' => ':attribute 欄位必須存在。',
    'present_if' => '當 :other 是 :value 時，:attribute 欄位必須存在。',
    'present_unless' => '除非 :other 是 :value，否則 :attribute 欄位必須存在。',
    'present_with' => '當 :values 存在時，:attribute 欄位必須存在。',
    'present_with_all' => '當 :values 都存在時，:attribute 欄位必須存在。',
    'prohibited' => ':attribute 欄位被禁止。',
    'prohibited_if' => '當 :other 是 :value 時，:attribute 欄位被禁止。',
    'prohibited_unless' => '除非 :other 是 :values 之一，否則 :attribute 欄位被禁止。',
    'prohibits' => ':attribute 欄位禁止 :other 存在。',
    'regex' => ':attribute 欄位的格式無效。',
    'required' => ':attribute 欄位是必填的。',
    'required_array_keys' => ':attribute 欄位必須包含以下條目：:values。',
    'required_if' => '當 :other 是 :value 時，:attribute 欄位是必填的。',
    'required_if_accepted' => '當 :other 被接受時，:attribute 欄位是必填的。',
    'required_if_declined' => '當 :other 被拒絕時，:attribute 欄位是必填的。',
    'required_unless' => '除非 :other 是 :values 之一，否則 :attribute 欄位是必填的。',
    'required_with' => '當 :values 存在時，:attribute 欄位是必填的。',
    'required_with_all' => '當 :values 都存在時，:attribute 欄位是必填的。',
    'required_without' => '當 :values 不存在時，:attribute 欄位是必填的。',
    'required_without_all' => '當 :values 都不存在時，:attribute 欄位是必填的。',
    'same' => ':attribute 欄位和 :other 必須相同。',
    'size' => [
        'array' => ':attribute 欄位必須包含 :size 項。',
        'file' => ':attribute 欄位的大小必須是 :size KB。',
        'numeric' => ':attribute 欄位的值必須是 :size。',
        'string' => ':attribute 欄位的字元數必須是 :size。',
    ],
    'starts_with' => ':attribute 欄位必須以以下之一開頭：:values。',
    'string' => ':attribute 欄位必須是字串。',
    'timezone' => ':attribute 欄位必須是有效的時區。',
    'unique' => ':attribute 已經被佔用。',
    'uploaded' => ':attribute 上傳失敗。',
    'uppercase' => ':attribute 欄位必須是大寫字母。',
    'url' => ':attribute 欄位必須是有效的 URL。',
    'ulid' => ':attribute 欄位必須是有效的 ULID。',
    'uuid' => ':attribute 欄位必須是有效的 UUID。',

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
