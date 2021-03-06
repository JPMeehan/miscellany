<?php

return [
    'account'       => [
        'actions'           => [
            'social'            => 'Вход Kanka',
            'update_email'      => 'Обновить электронную почту',
            'update_password'   => 'Обновить пароль',
        ],
        'email'             => 'Смена электронной почты',
        'email_success'     => 'Электронная почта обновлена.',
        'password'          => 'Смена пароля',
        'password_success'  => 'Пароль обновлен.',
        'social'            => [
            'error'     => 'Вы уже используете вход Kanka на этом аккаунте.',
            'helper'    => 'Ваш аккаунт сейчас управляется с помощью :provider. Вы можете остановить это и включить стандартный вход Kanka через ввод пароля.',
            'success'   => 'Теперь ваш аккаунт использует вход Kanka.',
            'title'     => 'Вход Kanka',
        ],
        'title'             => 'Аккаунт',
    ],
    'api'           => [
        'experimental'          => 'Добро пожаловать в Kanka API! Эти функции пока экспериментальные, но достаточно стабильные, чтобы вы могли начать общаться с помощью API. Создайте личный токен доступа для использования ваших API запросов или используйте клиентский токен, если вы хотите, чтобы ваше приложение имело доступ к данным пользователей.',
        'help'                  => 'Kanka скоро обеспечит RESTful API, чтобы приложения третьей стороны могли подключаться к этому приложению. Детали управления API ключами будут показаны ниже.',
        'link'                  => 'Читать API документацию',
        'request_permission'    => 'Мы работаем над созданием RESTful API, чтобы приложения третьей стороны могли подключаться к этому приложению. Однако, мы ограничиваем число пользователей, которые могут взаимодействовать с API, пока мы работаем над ним. Если вы хотите получить доступ к API и создавать крутые приложения для доступа к Kanka, пожалуйста свяжитесь с нами, и мы отправим вам всю необходимую информацию.',
        'title'                 => 'API',
    ],
    'apps'          => [
        'actions'   => [
            'connect'   => 'Подключиться',
            'remove'    => 'Удалить',
        ],
        'benefits'  => 'Kanka поддерживает несколько соединений с сервисами третьей стороны. Больше соединений планируется в будущем.',
        'discord'   => [
            'errors'    => [
                'add'   => 'При соединении с вашим Discord аккаунтом через Kanka произошла ошибка. Пожалуйста, попробуйте снова.',
            ],
            'success'   => [
                'add'       => 'Ваш Discord аккаунт подключен.',
                'remove'    => 'Ваш Discord аккаунт отключен.',
            ],
            'text'      => 'Получите доступ к вашим ролям подписки автоматически.',
        ],
        'title'     => 'Подключение к приложению',
    ],
    'boost'         => [
        'benefits'      => [
            'first'     => 'Для гарантии продолжения развития Kanka, некоторые черты Кампаний доступны только с помощью усилителей Кампаний. Усилители доступны по подписке. Любой, кто видит Кампанию, может усилить ее, так что Админ не всегда должен за это платить. Кампания остается усиленной пока пользователь ее усиливает и продолжает поддерживать Kanka. Если Кампания теряет усиление, то данные не теряются, они просто скрываются, пока Кампанию снова не усилят.',
            'header'    => 'Изображения заголовков объектов',
            'images'    => 'Заказные изображения объектов по умолчанию',
            'more'      => 'Узнать больше обо всех функциях',
            'second'    => 'Усиление Кампании дает следующие преимущества:',
            'theme'     => 'Тема уровней Кампании и заказной стиль',
            'tooltip'   => 'Заказные подсказки для объектов',
            'upload'    => 'Увеличенный вес загружаемых файлов для всех членов Кампании',
        ],
        'buttons'       => [
            'boost' => 'Усилить',
        ],
        'campaigns'     => 'Усиленные Кампании :count/:max',
        'exceptions'    => [
            'already_boosted'   => 'Кампания :name уже усилена.',
            'exhausted_boosts'  => 'У вас закончились усилители. Уберите усилитель с одной из Кампаний, чтобы применить его на другую.',
        ],
        'success'       => [
            'boost' => 'Кампания :name усилена.',
            'delete'=> 'Ваше усиление удалено с :name.',
        ],
        'title'         => 'Усилить',
    ],
    'countries'     => [
        'austria'       => 'Австрия',
        'belgium'       => 'Бельгия',
        'france'        => 'Франция',
        'germany'       => 'Германия',
        'italy'         => 'Италия',
        'netherlands'   => 'Нидерланды',
        'spain'         => 'Испания',
    ],
    'invoices'      => [
        'actions'   => [
            'download'  => 'Скачать PDF',
            'view_all'  => 'Показать все',
        ],
        'empty'     => 'Нет счетов',
        'fields'    => [
            'amount'    => 'Количество',
            'date'      => 'Дата',
            'invoice'   => 'Счет',
            'status'    => 'Статус',
        ],
        'header'    => 'Ниже список ваших последних 24 счетов, которые можно скачать.',
        'status'    => [
            'paid'      => 'Оплачен',
            'pending'   => 'Неоплачен',
        ],
        'title'     => 'Счета',
    ],
    'layout'        => [
        'success'   => 'Оформление обновлено.',
        'title'     => 'Оформление',
    ],
    'menu'          => [
        'account'               => 'Аккаунт',
        'api'                   => 'API',
        'apps'                  => 'Приложения',
        'billing'               => 'Способ оплаты',
        'boost'                 => 'Усилители',
        'invoices'              => 'Счета',
        'layout'                => 'Оформление',
        'other'                 => 'Другое',
        'patreon'               => 'Patreon',
        'payment_options'       => 'Способы оплаты',
        'personal_settings'     => 'Персональные настройки',
        'profile'               => 'Профиль',
        'subscription'          => 'Подписка',
        'subscription_status'   => 'Статус подписки',
    ],
    'patreon'       => [
        'actions'           => [
            'link'  => 'Подключить аккаунт',
            'view'  => 'Посетить Kanka на Patreon',
        ],
        'benefits'          => 'Поддержка нашего :patreon разблокирует все :features для вас и ваших Кампаний, а также позволит нам проводить больше времени, работая над улучшением Kanka.',
        'benefits_features' => 'потрясающие функции',
        'deprecated'        => 'Устаревшая функция - если вы хотите поддержать Kanka, пожалуйста сделайте это с помощью :subscription. Ссылка на Patreon до сих пор активна для наших патреонцев, которые подключили их аккаунты до выхода с Patreon.',
        'description'       => 'Синхронизация с Patreon.',
        'errors'            => [
            'invalid_token' => 'Недействительный токен! Patreon не может утвердить ваш запрос.',
            'missing_code'  => 'Код отсутствует! Patreon вернул код, определяющий ваш аккаунт.',
            'no_pledge'     => 'Залог отсутствует! Patreon определил ваш аккаунт, но у вас нет на нем активного залога.',
        ],
        'link'              => 'Используйте следующую кнопку, если вы уже поддерживаете Kanka на :patreon. Это разблокирует бонусы.',
        'linked'            => 'Спасибо за поддержку на Patreon! Ваш аккаунт подключен.',
        'pledge'            => 'Залог: :name',
        'remove'            => [
            'button'    => 'Отключить ваш Patreon аккаунт',
            'success'   => 'Ваш Patreon аккаунт отключен.',
            'text'      => 'Отключение вашего Patreon аккаунта Kanka удалит ваши бонусы, имя в Зале Славы, усилители Кампаний и другие функции, включенные в поддержку Kanka. Все созданное при усилении не пропадет (например заголовки объектов). Подписавшись назад вы получите доступ ко всем этим данным, включая возможность усиливать ваши кампании.',
            'title'     => 'Отключение вашего Patreon аккаунта Kanka',
        ],
        'success'           => 'Спасибо за поддержку Kanka на Patreon!',
        'title'             => 'Patreon',
        'wrong_pledge'      => 'Уровень вашего залога устанавливается нами вручную, так что, пожалуйста, дайте нам пару дней на то, чтобы правильно его настроить.',
    ],
    'profile'       => [
        'actions'   => [
            'update_profile'    => 'Обновить профиль',
        ],
        'avatar'    => 'Картинка профиля',
        'success'   => 'Профиль обновлен',
        'title'     => 'Личный профиль',
    ],
    'subscription'  => [
        'actions'               => [
            'cancel_sub'        => 'Отменить подписку',
            'subscribe'         => 'Подписаться',
            'update_currency'   => 'Сохранить предпочитаемую валюту',
        ],
        'benefits'              => 'Поддерживая нас, вы можете разблокировать новые :features и помочь нам проводить больше времени над улучшением Kanka. Информация кредитной карты не сохраняется и не передается через наши сервера. Мы используем :stripe для управления оплатой.',
        'billing'               => [
            'helper'    => 'Информация о вашей оплате обработана и сохранена с помощью :stripe. Этот способ оплаты используется для всех ваших подписок.',
            'saved'     => 'Сохраненный способ оплаты',
            'title'     => 'Редактировать Способ Оплаты',
        ],
        'cancel'                => [
            'text'  => 'Жаль, что вы уходите! Отмена вашей подписки сохранит ее активной до следующего цикла оплаты, после которого вы потеряете ваши усилители Кампаний и другие привилегии относящиеся к поддержке Kanka. Можете заполнить следующую форму, чтобы сообщить нам, что мы можем сделать лучше или почему вы приняли это решение.',
        ],
        'cancelled'             => 'Ваша подписка отменена. Вы можете обновить подписку, как только у вас закончится нынешняя подписка.',
        'change'                => [
            'text'  => [
                'monthly'   => 'Вы подписываетесь на уровень :tier, оплачиваемый в :amount в месяц.',
                'yearly'    => 'Вы подписываетесь на уровень :tier, оплачиваемый в :amount в год.',
            ],
            'title' => 'Изменение уровня подписки',
        ],
        'currencies'            => [
            'eur'   => 'EUR',
            'usd'   => 'USD',
        ],
        'currency'              => [
            'title' => 'Изменение вашей предпочитаемой валюты оплаты',
        ],
        'errors'                => [
            'callback'      => 'Наш провайдер счетов сообщил об ошибке. Пожалуйста, попробуйте еще раз или свяжитесь с нами, если проблема повторится.',
            'subscribed'    => 'Невозможно обработать вашу подписку. Stripe предоставил следующий совет.',
        ],
        'fields'                => [
            'active_since'      => 'Активна с',
            'active_until'      => 'Активна до',
            'billing'           => 'Оплата',
            'currency'          => 'Валюта оплаты',
            'payment_method'    => 'Способ оплаты',
            'plan'              => 'Текущий план',
            'reason'            => 'Причина',
        ],
        'helpers'               => [
            'alternatives'          => 'Оплатите свою подписку с помощью :method. Этот способ оплаты не будет обновляться по окончанию вашей подписки. :method доступен только для Евро.',
            'alternatives_warning'  => 'Повышение вашего уровня подписки при данном способе невозможно. Пожалуйста, создайте новую подписку, когда закончится текущая.',
            'alternatives_yearly'   => 'Из-за ограничений, связанных с повторяющимися оплатами, :method доступен только для годовых подписок.',
        ],
        'manage_subscription'   => 'Управление подпиской',
        'payment_method'        => [
            'actions'       => [
                'add_new'           => 'Добавить новый способ оплаты',
                'change'            => 'Изменить способ оплаты',
                'save'              => 'Сохранить способ оплаты',
                'show_alternatives' => 'Альтернативные способы оплаты',
            ],
            'add_one'       => 'У вас нет сохраненного способа оплаты.',
            'alternatives'  => 'Вы можете подписаться с помощью альтернативных способов оплаты. Это действие изменит ваш аккаунт один раз и не будет обновлять его каждый месяц.',
            'card'          => 'Карта',
            'card_name'     => 'Имя на карте',
            'country'       => 'Страна проживания',
            'ending'        => 'Заканчивается на',
            'helper'        => 'Эта карта будет использоваться для всех ваших подписок.',
            'new_card'      => 'Добавить новый способ оплаты',
            'saved'         => ':brand заканчивается на :last4',
        ],
        'placeholders'          => [
            'reason'    => 'Если хотите, можете сказать нам, почему вы больше не поддерживаете Kanka. Отсутствует необходимая функция? Изменилась ваша финансовая ситуация?',
        ],
        'plans'                 => [
            'cost_monthly'  => ':currency :amount выплачивается в месяц',
            'cost_yearly'   => ':currency :amount выплачивается в год',
        ],
        'sub_status'            => 'Информация о подписке',
        'subscription'          => [
            'actions'   => [
                'downgrading'       => 'Пожалуйста, свяжитесь с нами для понижения',
                'rollback'          => 'Изменить на Kobold',
                'subscribe'         => 'Изменить на месячный :tier',
                'subscribe_annual'  => 'Изменять на годовой :tier',
            ],
        ],
        'success'               => [
            'alternative'   => 'Ваша оплата зарегистрирована. Вы получите уведомление, как только она будет обработана и ваша подписка будет активирована.',
            'callback'      => 'Ваша подписка успешно оформлена. Ваш аккаунт будет обновлен, как только наш провайдер счетов сообщит нам об изменении (это может занять несколько минут)',
            'cancel'        => 'Ваша подписка была отменена. Она будет активной до окончания вашего текущего периода оплаты.',
            'currency'      => 'Настройки вашей предпочитаемой валюты обновлены.',
            'subscribed'    => 'Ваша подписка успешно оформлена. Не забудьте подписаться на рассылку голосований, чтобы знать, когда начнется голосование. Вы можете изменить свои настройки рассылки на странице вашего профиля.',
        ],
        'tiers'                 => 'Уровни подписки',
        'trial_period'          => 'У годовых подписок есть возможность отмены в течение 14 дней. Свяжитесь с нами через :email, если вы хотите отменить вашу годовую подписку и получить деньги назад.',
        'upgrade_downgrade'     => [
            'button'    => 'Информация о повышении и понижении',
            'downgrade' => [
                'bullets'   => [
                    'end'   => 'Ваш текущий уровень будет активен до окончания текущего цикла оплаты, после чего вы будете понижены до вашего нового уровня.',
                ],
                'title'     => 'При понижении на уровень',
            ],
            'upgrade'   => [
                'bullets'   => [
                    'immediate' => 'Ваш способ оплаты будет немедленно оплачен и вы получите доступ к вашему новому уровню.',
                    'prorate'   => 'При повышении с Owlbear на Elemental вы заплатите только разницу с вашим новым уровнем.',
                ],
                'title'     => 'При повышении на уровень',
            ],
        ],
        'warnings'              => [
            'patreon'   => 'Ваш аккаунт подключен к Patreon. Пожалуйста, отключите ваш аккаунт в ваших настройках :patreon перед включением Kanka подписки.',
        ],
    ],
];
