<?php
return [
    'private' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'cabinet_auth__controller',
            'cabinet_bonus-card__controller',
            'cabinet_feedback__controller',
            'cabinet_order__controller',
            'cabinet_profile__controller',
            'cabinet_warranty__controller',
        ],
    ],
    'seo' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_duplicate-url__controller',
            'admin_seo__controller',
            'admin_templator__controller',
        ],
    ],
    'warranty_manager' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_garanty__controller',
            'admin_survey__controller',
        ],
    ],
    'yandex_api' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
        ],
    ],
    'wikimart' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
        ],
    ],
    'retail_shop' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_order__controller',
            'admin_sms__controller',
            'admin_call__controller',
            'admin_order_state_controller',
            'admin_order_id_controller',
            'admin_order_updateOrder_controller',
            'admin_order_updateOrderItem_controller',
            'admin_order_setTelephoneNeeded_controller',
            'admin_order_changeemail_controller',
            'admin_order_changefio_controller',
            'admin_order_changephone_controller',
            'admin_order_print_controller',
            'admin_order_removeOrder_controller',
            'admin_order_removeItemOrder_controller',
            'admin_order_moveItemOrder_controller',
            'admin_order_addOrderItem_controller',
            'admin_order_search_controller',
            'canChangePrice_function',
            'canSetAllCount_function',
        ],
    ],
    'manager' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_bet__controller',
            'admin_custom-goods__controller',
            'admin_duplicate-url__controller',
            'admin_parser-warning__controller',
            'admin_d3d__controller',
            'admin_complain__controller',
            'admin_conversion__controller',
            'admin_direct__controller',
            'admin_duplicates__controller',
            'admin_googleanalitics__controller',
            'admin_newdirect__controller',
            'admin_prices__controller',
            'admin_shipping__controller',
            'admin_order__controller',
            'admin_sms__controller',
            'admin_synonym__controller',
            'admin_match-noname__controller',
            'admin_news__controller',
            'admin_feedback__controller',
            'admin_bugtracker__controller',
            'admin_map__controller',
            'admin_stores__controller',
            'admin_noname__controller',
            'admin_parser__controller',
            'admin_test__controller',
            'admin_comments__controller',
            'admin_accum__controller',
            'admin_call__controller',
            'admin_hal__controller',
            'admin_generateyml__controller',
            'admin_generateymlnew__controller',
            'admin_partners__controller',
            'admin_frontpage__controller',
            'admin_pageredact__controller',
            'admin_companies__controller',
            'admin_promo__controller',
            'admin_cat__controller',
            'admin_autosearch__controller',
            'admin_garanty__controller',
            'admin_delivery__controller',
            'admin_phones__controller',
            'admin_good-no-photo__controller',
            'admin_delivery-accum__controller',
            'admin_delivery-disk__controller',
            'admin_delivery-tyre__controller',
            'admin_worker__controller',
            'admin_cars__controller',
            'canChangePrice_function',
            'canSetAllCount_function',
        ],
    ],
    'admin' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_bet__controller',
            'admin_custom-goods__controller',
            'admin_duplicate-url__controller',
            'admin_parser-warning__controller',
            'admin_d3d__controller',
            'admin_complain__controller',
            'admin_conversion__controller',
            'admin_direct__controller',
            'admin_duplicates__controller',
            'admin_googleanalitics__controller',
            'admin_newdirect__controller',
            'admin_prices__controller',
            'admin_shipping__controller',
            'admin_order__controller',
            'admin_sms__controller',
            'admin_synonym__controller',
            'admin_match-noname__controller',
            'admin_news__controller',
            'admin_feedback__controller',
            'admin_bugtracker__controller',
            'admin_map__controller',
            'admin_stores__controller',
            'admin_noname__controller',
            'admin_parser__controller',
            'admin_test__controller',
            'admin_comments__controller',
            'admin_accum__controller',
            'admin_call__controller',
            'admin_call-reports__controller',
            'admin_hal__controller',
            'admin_seo__controller',
            'admin_generateyml__controller',
            'admin_generateymlnew__controller',
            'admin_partners__controller',
            'admin_frontpage__controller',
            'admin_pageredact__controller',
            'admin_companies__controller',
            'admin_promo__controller',
            'admin_cat__controller',
            'admin_autosearch__controller',
            'admin_garanty__controller',
            'admin_delivery__controller',
            'admin_customs__controller',
            'admin_phones__controller',
            'admin_good-no-photo__controller',
            'admin_delivery-accum__controller',
            'admin_delivery-disk__controller',
            'admin_delivery-tyre__controller',
            'admin_survey__controller',
            'admin_worker__controller',
            'admin_settings__controller',
            'admin_cars__controller',
            'canChangePrice_function',
            'canSetAllCount_function',
        ],
    ],
    'operator' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_call__controller',
        ],
    ],
    'outbid' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_order__controller',
            'admin_sms__controller',
            'admin_call__controller',
            'admin_order_state_controller',
            'admin_order_id_controller',
            'admin_order_updateOrder_controller',
            'admin_order_updateOrderItem_controller',
            'admin_order_setTelephoneNeeded_controller',
            'admin_order_changeemail_controller',
            'admin_order_changefio_controller',
            'admin_order_changephone_controller',
            'admin_order_print_controller',
            'admin_order_removeOrder_controller',
            'admin_order_removeItemOrder_controller',
            'admin_order_moveItemOrder_controller',
            'admin_order_addOrderItem_controller',
            'admin_order_search_controller',
            'canSeeB2BRetailPrice_function',
            'canSetAllCount_function',
        ],
    ],
    'class_auto' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_autosearch__controller',
        ],
    ],
    'private_retail_shop' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_order__controller',
            'admin_sms__controller',
            'admin_order_state_controller',
            'admin_order_id_controller',
            'admin_order_updateOrder_controller',
            'admin_order_updateOrderItem_controller',
            'admin_order_setTelephoneNeeded_controller',
            'admin_order_changeemail_controller',
            'admin_order_changefio_controller',
            'admin_order_changephone_controller',
            'admin_order_print_controller',
            'admin_order_removeOrder_controller',
            'admin_order_removeItemOrder_controller',
            'admin_order_moveItemOrder_controller',
            'admin_order_addOrderItem_controller',
            'admin_order_search_controller',
            'canChangePrice_function',
            'canSetAllCount_function',
        ],
    ],
    'super_manager' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_bet__controller',
            'admin_custom-goods__controller',
            'admin_duplicate-url__controller',
            'admin_parser-warning__controller',
            'admin_d3d__controller',
            'admin_complain__controller',
            'admin_conversion__controller',
            'admin_direct__controller',
            'admin_duplicates__controller',
            'admin_googleanalitics__controller',
            'admin_newdirect__controller',
            'admin_prices__controller',
            'admin_shipping__controller',
            'admin_order__controller',
            'admin_sms__controller',
            'admin_synonym__controller',
            'admin_match-noname__controller',
            'admin_news__controller',
            'admin_feedback__controller',
            'admin_bugtracker__controller',
            'admin_map__controller',
            'admin_stores__controller',
            'admin_noname__controller',
            'admin_parser__controller',
            'admin_test__controller',
            'admin_comments__controller',
            'admin_accum__controller',
            'admin_call__controller',
            'admin_call-reports__controller',
            'admin_hal__controller',
            'admin_generateyml__controller',
            'admin_generateymlnew__controller',
            'admin_partners__controller',
            'admin_frontpage__controller',
            'admin_pageredact__controller',
            'admin_companies__controller',
            'admin_promo__controller',
            'admin_cat__controller',
            'admin_autosearch__controller',
            'admin_garanty__controller',
            'admin_delivery__controller',
            'admin_phones__controller',
            'admin_good-no-photo__controller',
            'admin_delivery-accum__controller',
            'admin_delivery-disk__controller',
            'admin_delivery-tyre__controller',
            'admin_worker__controller',
            'admin_cars__controller',
        ],
    ],
    'personnel_department' => [
        'type' => 1,
        'ruleName' => 'userGroup',
        'children' => [
            'admin_login__controller',
            'admin___controller',
            'admin_pageredact__controller',
        ],
    ],
    'admin_login__controller' => [
        'type' => 2,
    ],
    'admin___controller' => [
        'type' => 2,
    ],
    'admin_bet__controller' => [
        'type' => 2,
    ],
    'admin_custom-goods__controller' => [
        'type' => 2,
    ],
    'admin_duplicate-url__controller' => [
        'type' => 2,
    ],
    'admin_parser-warning__controller' => [
        'type' => 2,
    ],
    'admin_d3d__controller' => [
        'type' => 2,
    ],
    'admin_complain__controller' => [
        'type' => 2,
    ],
    'admin_conversion__controller' => [
        'type' => 2,
    ],
    'admin_direct__controller' => [
        'type' => 2,
    ],
    'admin_duplicates__controller' => [
        'type' => 2,
    ],
    'admin_googleanalitics__controller' => [
        'type' => 2,
    ],
    'admin_newdirect__controller' => [
        'type' => 2,
    ],
    'admin_prices__controller' => [
        'type' => 2,
    ],
    'admin_shipping__controller' => [
        'type' => 2,
    ],
    'admin_order__controller' => [
        'type' => 2,
    ],
    'admin_sms__controller' => [
        'type' => 2,
    ],
    'admin_synonym__controller' => [
        'type' => 2,
    ],
    'admin_match-noname__controller' => [
        'type' => 2,
    ],
    'admin_news__controller' => [
        'type' => 2,
    ],
    'admin_feedback__controller' => [
        'type' => 2,
    ],
    'admin_bugtracker__controller' => [
        'type' => 2,
    ],
    'admin_map__controller' => [
        'type' => 2,
    ],
    'admin_stores__controller' => [
        'type' => 2,
    ],
    'admin_noname__controller' => [
        'type' => 2,
    ],
    'admin_parser__controller' => [
        'type' => 2,
    ],
    'admin_test__controller' => [
        'type' => 2,
    ],
    'admin_comments__controller' => [
        'type' => 2,
    ],
    'admin_accum__controller' => [
        'type' => 2,
    ],
    'admin_call__controller' => [
        'type' => 2,
    ],
    'admin_call-reports__controller' => [
        'type' => 2,
    ],
    'admin_hal__controller' => [
        'type' => 2,
    ],
    'admin_seo__controller' => [
        'type' => 2,
    ],
    'admin_templator__controller' => [
        'type' => 2,
    ],
    'admin_generateyml__controller' => [
        'type' => 2,
    ],
    'admin_generateymlnew__controller' => [
        'type' => 2,
    ],
    'admin_partners__controller' => [
        'type' => 2,
    ],
    'admin_frontpage__controller' => [
        'type' => 2,
    ],
    'admin_pageredact__controller' => [
        'type' => 2,
    ],
    'admin_companies__controller' => [
        'type' => 2,
    ],
    'admin_promo__controller' => [
        'type' => 2,
    ],
    'admin_cat__controller' => [
        'type' => 2,
    ],
    'admin_autosearch__controller' => [
        'type' => 2,
    ],
    'admin_garanty__controller' => [
        'type' => 2,
    ],
    'admin_delivery__controller' => [
        'type' => 2,
    ],
    'admin_customs__controller' => [
        'type' => 2,
    ],
    'admin_phones__controller' => [
        'type' => 2,
    ],
    'admin_good-no-photo__controller' => [
        'type' => 2,
    ],
    'admin_delivery-accum__controller' => [
        'type' => 2,
    ],
    'admin_delivery-disk__controller' => [
        'type' => 2,
    ],
    'admin_delivery-tyre__controller' => [
        'type' => 2,
    ],
    'admin_survey__controller' => [
        'type' => 2,
    ],
    'admin_worker__controller' => [
        'type' => 2,
    ],
    'cabinet_auth__controller' => [
        'type' => 2,
    ],
    'cabinet_bonus-card__controller' => [
        'type' => 2,
    ],
    'cabinet_feedback__controller' => [
        'type' => 2,
    ],
    'cabinet_order__controller' => [
        'type' => 2,
    ],
    'cabinet_profile__controller' => [
        'type' => 2,
    ],
    'cabinet_warranty__controller' => [
        'type' => 2,
    ],
    'admin_settings__controller' => [
        'type' => 2,
    ],
    'admin_cars__controller' => [
        'type' => 2,
    ],
    'admin_order_state_controller' => [
        'type' => 2,
    ],
    'admin_order_id_controller' => [
        'type' => 2,
    ],
    'admin_order_updateOrder_controller' => [
        'type' => 2,
    ],
    'admin_order_updateOrderItem_controller' => [
        'type' => 2,
    ],
    'admin_order_setTelephoneNeeded_controller' => [
        'type' => 2,
    ],
    'admin_order_changeemail_controller' => [
        'type' => 2,
    ],
    'admin_order_changefio_controller' => [
        'type' => 2,
    ],
    'admin_order_changephone_controller' => [
        'type' => 2,
    ],
    'admin_order_print_controller' => [
        'type' => 2,
    ],
    'admin_order_removeOrder_controller' => [
        'type' => 2,
    ],
    'admin_order_removeItemOrder_controller' => [
        'type' => 2,
    ],
    'admin_order_moveItemOrder_controller' => [
        'type' => 2,
    ],
    'admin_order_addOrderItem_controller' => [
        'type' => 2,
    ],
    'admin_order_search_controller' => [
        'type' => 2,
    ],
    'canSeeB2BRetailPrice_function' => [
        'type' => 2,
    ],
    'canChangePrice_function' => [
        'type' => 2,
    ],
    'canSetAllCount_function' => [
        'type' => 2,
    ],
];