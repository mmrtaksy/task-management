<?php

return [

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute, :date tarihinden sonraki bir tarih olmalıdır.',
    'alpha' => ':attribute yalnızca harflerden oluşmalıdır.',
    'between' => [
        'numeric' => ':attribute :min ile :max arasında olmalıdır.',
        'file' => ':attribute :min ile :max kilobayt arasında olmalıdır.',
        'string' => ':attribute :min ile :max karakter arasında olmalıdır.',
        'array' => ':attribute :min ile :max öğe arasında olmalıdır.',
    ],
    'max' => [
        'numeric' => ':attribute :max değerinden büyük olamaz.',
        'file' => ':attribute :max kilobayttan büyük olamaz.',
        'string' => ':attribute :max karakterden uzun olamaz.',
        'array' => ':attribute :max öğeden fazla olamaz.',
    ],
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min öğeye sahip olmalıdır.',
    ],
    'required' => ':attribute alanı gereklidir.',
    'string' => ':attribute bir metin olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'max.string' => ':attribute alanı :max karakterden uzun olamaz.',

    'attributes' => [
        'name' => 'Görev Adı',
        'description' => 'açıklama',
    ],

];
