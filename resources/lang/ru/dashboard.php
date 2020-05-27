<?php

return [
    'actions'           => [
        'follow'    => 'Следить',
        'unfollow'  => 'Перестать следить',
    ],
    'campaigns'         => [
        'manage'    => 'Управление Кампанией',
        'tabs'      => [
            'modules'   => ':count Модулей',
            'roles'     => ':count Ролей',
            'users'     => ':count Пользователей',
        ],
    ],
    'description'       => 'Дом вашего творчества',
    'helpers'           => [
        'follow'    => 'Кампании, за которыми вы следите, появятся в переключателе Кампаний (справа вверху) ниже ваших Кампаний.',
        'setup'     => 'Настройте главную страницу вашей Кампании.',
    ],
    'latest_release'    => 'Последнее обновление',
    'notifications'     => [
        'modal' => [
            'confirm'   => 'Понятно',
            'title'     => 'Важное уведомление',
        ],
    ],
    'recent'            => [
        'add'           => 'Создать :name',
        'no_entries'    => 'На данный момент записей этого типа нет.',
        'title'         => 'Последнее изменение :name',
        'view'          => 'Показать все :name',
    ],
    'settings'          => [
        'description'   => 'Настройте, что вы будете видеть на главной странице.',
        'edit'          => [
            'success'   => 'Ваши изменения сохранены.',
        ],
        'fields'        => [
            'helper'        => 'Вы легко можете изменить то, что вы видите на вашей главной странице. Обратите внимание, что это настройки для всех ваших Кампаний, независимо от их настроек.',
            'recent_count'  => 'Число последних элементов',
        ],
        'title'         => 'Настройки главной страницы',
    ],
    'setup'             => [
        'actions'   => [
            'add'               => 'Добавить виджет',
            'back_to_dashboard' => 'Назад на главную страницу',
            'edit'              => 'Редактировать виджет',
        ],
        'title'     => 'Настройка главной страницы Кампании',
        'widgets'   => [
            'calendar'  => 'Календарь',
            'preview'   => 'Объект',
            'recent'    => 'Недавнее',
        ],
    ],
    'title'             => 'Главная страница',
    'widgets'           => [
        'calendar'  => [
            'actions'           => [
                'next'      => 'Изменить дату на следующий день',
                'previous'  => 'Изменить дату на предыдущий день',
            ],
            'events_today'      => 'Сегодня',
            'previous_events'   => 'Прошедшие',
            'upcoming_events'   => 'Грядущие',
        ],
        'create'    => [
            'success'   => 'Виджет добавлен на главную страницу',
        ],
        'delete'    => [
            'success'   => 'Виджет удален с главной страницы',
        ],
        'fields'    => [
            'width' => 'Ширина',
        ],
        'recent'    => [
            'full'      => 'Полностью',
            'help'      => 'Показывать только последний измененный объект.',
            'helpers'   => [
                'full'  => 'Показывать весь текст объекта по умолчанию.',
            ],
            'singular'  => 'Одиночный',
            'title'     => 'Недавние изменения',
        ],
        'update'    => [
            'success'   => 'Виджет изменен.',
        ],
        'widths'    => [
            '0' => 'Авто',
            '12'=> 'Полная',
            '4' => 'Маленькая',
            '6' => 'Половина',
        ],
    ],
];
