<?php

register_page_template([
    'default' => 'Default',
    'error' => __('Error')
]);

register_sidebar([
    'id' => 'second_sidebar',
    'name' => 'Second sidebar',
    'description' => 'This is a sample sidebar for bytesoft theme',
]);

theme_option()
    ->setArgs(['debug' => config('app.debug')])
    ->setSection([
        'title' => __('General'),
        'desc' => __('General settings'),
        'id' => 'opt-text-subsection-general',
        'subsection' => true,
        'icon' => 'fa fa-home',
    ])
    ->setSection([
        'title' => __('Social'),
        'desc' => __('Social settings'),
        'id' => 'opt-text-subsection-social',
        'subsection' => true,
        'icon' => 'fa fa-share-square',
    ])
    ->setSection([
        'title' => __('Logo'),
        'desc' => __('Change logo'),
        'id' => 'opt-text-subsection-logo',
        'subsection' => true,
        'icon' => 'fa fa-image',
        'fields' => [
            [
                'id' => 'logo',
                'type' => 'mediaImage',
                'label' => __('Logo Header'),
                'attributes' => [
                    'name' => 'logo',
                    'value' => null,
                ],
            ],
            [
                'id' => 'logo-footer',
                'type' => 'mediaImage',
                'label' => __('Logo Footer'),
                'attributes' => [
                    'name' => 'logo-footer',
                    'value' => null,
                ],
            ],
            [
                'id' => 'icon-b',
                'type' => 'mediaImage',
                'label' => __('Short Logo Footer'),
                'attributes' => [
                    'name' => 'icon-b',
                    'value' => null,
                ],
            ],
        ],
    ])
    ->setField([
        'id' => 'address',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Address'),
        'attributes' => [
            'name' => 'address',
            'value' => 'Tầng 12, Tòa văn phòng 1, Tổ hợp Sunsquare, Lê Đức Thọ, Nam Từ Liêm, Hà Nội',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change address'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Address of company'),
    ])
    ->setField([
        'id' => 'phone_number',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'number',
        'label' => __('Phone number'),
        'attributes' => [
            'name' => 'phone_number',
            'value' => '0246335448',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change phone number'),
                'data-counter' => 10,
            ]
        ],
        'helper' => __('Phone number of company'),
    ])
    ->setField([
        'id' => 'email',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'email',
        'label' => __('Email'),
        'attributes' => [
            'name' => 'email',
            'value' => 'info@bytesoft.net',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change email'),
                'data-counter' => 30,
            ]
        ],
        'helper' => __('Email of company'),
    ])
    ->setField([
        'id' => 'slogal-footer',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Footer Slogal'),
        'attributes' => [
            'name' => 'slogal-footer',
            'value' => 'Tiên phong công nghệ. Mở lối thành công',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Footer Slogal'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Slogal on footer of site'),
    ])
    ->setField([
        'id' => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Copyright'),
        'attributes' => [
            'name' => 'copyright',
            'value' => '© 2018 Bytesoft Co.Ltd . All right reserved.',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change copyright'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Copyright on footer of site'),
    ])
    ->setField([
        'id' => 'facebook',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => __('Facebook'),
        'attributes' => [
            'name' => 'facebook',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change facebook link profile'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Link Facebook'),
    ])
    ->setField([
        'id' => 'twitter',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => __('Twitter'),
        'attributes' => [
            'name' => 'twitter',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Twitter link profile'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Link Twitter'),
    ])
    ->setField([
        'id' => 'googleplus',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => __('Google Plus'),
        'attributes' => [
            'name' => 'googleplus',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Google Plus link profile'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Link Google Plus'),
    ])
    ->setField([
        'id' => 'youtube',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => __('Youtube'),
        'attributes' => [
            'name' => 'youtube',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Youtube link profile'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Link Youtube'),
    ])
    ->setField([
        'id' => 'telegram',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => __('Telegram'),
        'attributes' => [
            'name' => 'telegram',
            'value' => '',
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change telegram link profile'),
                'data-counter' => 120,
            ]
        ],
        'helper' => __('Link Telegram'),
    ]);