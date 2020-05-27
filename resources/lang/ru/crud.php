<?php

return [
    'actions'           => [
        'actions'           => 'Действия',
        'apply'             => 'Применить',
        'back'              => 'Назад',
        'copy'              => 'Копировать',
        'copy_mention'      => 'Копировать [ ] ссылку',
        'copy_to_campaign'  => 'Копировать в Кампанию',
        'explore_view'      => 'Свернутый вид',
        'export'            => 'Экспортировать',
        'find_out_more'     => 'Узнать больше',
        'go_to'             => 'Перейти к :name',
        'more'              => 'Больше действий',
        'move'              => 'Переместить',
        'new'               => 'Новый',
        'next'              => 'Следующий',
        'private'           => 'Приватный',
        'public'            => 'Публичный',
        'reset'             => 'Сброс',
    ],
    'add'               => 'Добавить',
    'alerts'            => [
        'copy_mention'  => 'Специальная ссылка на объект скопирована в ваш буфер обмена.',
    ],
    'attributes'        => [
        'actions'       => [
            'add'               => 'Добавить атрибут',
            'add_block'         => 'Добавить блок',
            'add_checkbox'      => 'Добавить флажок',
            'add_text'          => 'Добавить текст',
            'apply_template'    => 'Применить Шаблон Атрибутов',
            'manage'            => 'Управление',
            'remove_all'        => 'Удалить все',
        ],
        'create'        => [
            'description'   => 'Создание нового атрибута.',
            'success'       => 'Атрибут :name добавлен к :entity.',
            'title'         => 'Новый Атрибут для :name',
        ],
        'destroy'       => [
            'success'   => 'Атрибут :name для :entity удален.',
        ],
        'edit'          => [
            'description'   => 'Обновление существующего атрибута.',
            'success'       => 'Атрибут :name для :entity обновлен.',
            'title'         => 'Обновление атрибута для :name',
        ],
        'fields'        => [
            'attribute'             => 'Атрибут',
            'community_templates'   => 'Шаблоны сообщества',
            'is_private'            => 'Приватные атрибуты',
            'is_star'               => 'Закреплен',
            'template'              => 'Шаблон',
            'value'                 => 'Значение',
        ],
        'helpers'       => [
            'delete_all'    => 'Вы уверены, что хотите удалить все атрибуты этого объекта?',
        ],
        'hints'         => [
            'is_private'    => 'Вы можете скрыть все атрибуты объекта для всех участников без роли "Админ", сделав их приватными.',
        ],
        'index'         => [
            'success'   => 'Атрибуты для :name обновлены.',
            'title'     => 'Атрибуты для :name',
        ],
        'placeholders'  => [
            'attribute' => 'Число завоеваний, оценка испытаний, инициатива, население',
            'block'     => 'Название блока',
            'checkbox'  => 'Название флажка',
            'section'   => 'Название раздела',
            'template'  => 'Выберите Шаблон',
            'value'     => 'Значение атрибута',
        ],
        'template'      => [
            'success'   => 'Шаблон Атрибутов :name применен к :entity',
            'title'     => 'Применение Шаблона Атрибутов к :name',
        ],
        'types'         => [
            'attribute' => 'Атрибут',
            'block'     => 'Блок',
            'checkbox'  => 'Флажок',
            'section'   => 'Раздел',
            'text'      => 'Большой текст',
        ],
        'visibility'    => [
            'entry'     => 'Атрибут расположен в меню объектов.',
            'private'   => 'Атрибут виден только участникам с ролью "Админ".',
            'public'    => 'Атрибут виден всем участникам.',
            'tab'       => 'Атрибут отображается только во вкладке атрибутов.',
        ],
    ],
    'boosted'           => 'Усилена',
    'boosted_campaigns' => 'Усиленные Кампании',
    'bulk'              => [
        'actions'       => [
            'edit'  => 'Массовый редактор и Тэги',
        ],
        'age'           => [
            'helper'    => 'Вы можете использовать + и - перед числом, чтобы изменить возраст на это число.',
        ],
        'edit'          => [
            'tagging'   => 'Действия с тэгами',
            'tags'      => [
                'add'       => 'Добавить',
                'remove'    => 'Удалить',
            ],
            'title'     => 'Редактирование нескольких объектов',
        ],
        'errors'        => [
            'admin'     => 'Статус приватности объектов могут редактировать только Админы Кампании.',
            'general'   => 'При выполнении вашего действия произошла ошибка. Пожалуйста, попробуйте снова и свяжитесь с нами, если проблема повторится. Сообщение ошибки: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Перезапись',
            ],
            'helpers'   => [
                'override'  => 'Если включена, то разрешения выбранных объектов будут заменены. Если нет, эти разрешения будут добавлены к существующим.',
            ],
            'title'     => 'Изменение разрешений нескольких объектов',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count объект скопирован в :campaign.|[2, 4] :count объекта скопировано в :campaign.|[5, *] :count объектов скопировано в :campaign.',
            'editing'           => '{1} :count объект обновлен.|[2, 4] :count объекта обновлено.|[5, *] :count объектов обновлено.',
            'permissions'       => '{1} Разрешения изменены для :count объекта.|[2, *] Разрешения изменены для :count объектов.',
            'private'           => '{1} :count объект теперь приватен.|[2, 4] :count объекта теперь приватно.|[5, *] :count объектов теперь приватны.',
            'public'            => '{1} :count объект теперь невидим.|[2, 4] :count объекта теперь невидимы.|[5, *] :count объектов теперь невидимы.',
        ],
    ],
    'cancel'            => 'Отмена',
    'click_modal'       => [
        'close'     => 'Закрыть',
        'confirm'   => 'Подтвердить',
        'title'     => 'Подтверждение вашего действия',
    ],
    'copy_to_campaign'  => [
        'bulk_title'    => 'Копирование объектов в другую Кампанию',
        'panel'         => 'Копировать',
        'title'         => 'Копирование ":name" в другую Кампанию',
    ],
    'create'            => 'Создать',
    'datagrid'          => [
        'empty' => 'Нечего показать.',
    ],
    'delete_modal'      => [
        'close'         => 'Закрыть',
        'delete'        => 'Удалить',
        'description'   => 'Вы уверены, что хотите удалить :tag?',
        'mirrored'      => 'Удалить зеркальную связь',
        'title'         => 'Подтверждение удаления',
    ],
    'destroy_many'      => [
        'success'   => 'Удален :count объект.|Удалено :count объектов.',
    ],
    'edit'              => 'Редактировать',
    'errors'            => [
        'boosted'                       => 'Эта функция доступна только для усиленный Кампаний.',
        'node_must_not_be_a_descendant' => 'Неправильный узел (Тэг, родительская Локация): это потомок самого себя.',
    ],
    'events'            => [
        'hint'  => 'Ниже расположен список всех Календарей, в которые добавлено это событие с помощью "Добавить Событие в Календарь".',
    ],
    'export'            => 'Экспортировать',
    'fields'            => [
        'ability'               => 'Способность',
        'attribute_template'    => 'Шаблон Артибутов',
        'calendar'              => 'Календарь',
        'calendar_date'         => 'Дата Календаря',
        'character'             => 'Персонаж',
        'colour'                => 'Цвет',
        'copy_attributes'       => 'Копировать атрибуты',
        'copy_notes'            => 'Копировать заметки объекта',
        'creator'               => 'Создатель',
        'dice_roll'             => 'Бросок Кубика',
        'entity'                => 'Объект',
        'entity_type'           => 'Тип объекта',
        'entry'                 => 'Текст',
        'event'                 => 'Событие',
        'excerpt'               => 'Выдержка',
        'family'                => 'Семья',
        'files'                 => 'Файлы',
        'header_image'          => 'Изображение заголовка',
        'image'                 => 'Изображение',
        'is_private'            => 'Приватный',
        'is_star'               => 'Закреплен',
        'item'                  => 'Предмет',
        'location'              => 'Локация',
        'name'                  => 'Название',
        'organisation'          => 'Организация',
        'race'                  => 'Раса',
        'tag'                   => 'Тэг',
        'tags'                  => 'Тэги',
        'tooltip'               => 'Подсказка',
        'type'                  => 'Тип',
        'visibility'            => 'Видимость',
    ],
    'files'             => [
        'actions'   => [
            'drop'      => 'Нажмите, чтобы добавить или удалить файл',
            'manage'    => 'Управление файлами объектов',
        ],
        'errors'    => [
            'max'       => 'Вы достигли лимита (:max) файлов для этого объекта.',
            'no_files'  => 'Нет файлов.',
        ],
        'files'     => 'Обновленные файлы',
        'hints'     => [
            'limit'         => 'Каждый объект может иметь не более :max загруженных файлов.',
            'limitations'   => 'Форматы: jpg, png, gif и pdf. Макс. размер файла: :size.',
        ],
        'title'     => 'Файлы объекта :name',
    ],
    'filter'            => 'Фильтр',
    'filters'           => [
        'all'       => 'Фильтр для всех потомков',
        'clear'     => 'Очистить фильтры',
        'direct'    => 'Фильтр для прямых потомков',
        'filtered'  => 'Показано :count из :total :entity',
        'hide'      => 'Скрыть фильтры',
        'show'      => 'Показать фильтры',
        'sorting'   => [
            'asc'       => 'По возрастанию :field',
            'desc'      => 'По убыванию :field',
            'helper'    => 'Управление порядком сортировки результатов',
        ],
        'title'     => 'Фильтры',
    ],
    'forms'             => [
        'actions'       => [
            'calendar'  => 'Добавить дату Календаря.',
        ],
        'copy_options'  => 'Копировать опции',
    ],
    'hidden'            => 'Скрытый',
    'hints'             => [
        'attribute_template'    => 'Применять Шаблон Атрибутов непосредственно при создании объекта.',
        'calendar_date'         => 'Дата Календаря позволяет легко фильтровать в списках, а также хранит Событие выбранного Календаря.',
        'header_image'          => 'Это изображение будет расположено над объектом. Лучше использовать широкое изображение.',
        'image_limitations'     => 'Форматы: jpg, png и gif. Макс. размер файла: :size.',
        'image_patreon'         => 'Увеличить лимит размера файла?',
        'is_private'            => 'Если установлено на "Приватный", то этот объект могут видеть только участники Кампании с ролью "Админ".',
        'is_star'               => 'Закрепленные элементы появятся в меню объектов.',
        'map_limitations'       => 'Форматы: jpg, png, gif и svg. Макс. размер файла: :size.',
        'tooltip'               => 'Заменить автоматически сгенерированную подсказку на следующее содержание.',
        'visibility'            => 'Значение видимости "Админ" означает, что это могут видеть только участники Кампании с ролью "Админ". Значение "Я" означает, что это можете видеть только вы.',
    ],
    'history'           => [
        'created'       => 'Создан <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>.',
        'created_date'  => 'Создан <span data-toggle="tooltip" title=":realdate">:date</span>.',
        'unknown'       => 'Неизвестно',
        'updated'       => 'Последнее изменение от <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>.',
        'updated_date'  => 'Последнее изменение <span data-toggle="tooltip" title=":realdate">:date</span>.',
        'view'          => 'Показать журнал объекта',
    ],
    'image'             => [
        'error' => 'Нам не удалось получить запрошенное изображение. Возможно, сайт не позволяет нам скачать изображение (типично для Squarespace и DeviantArt) или эта ссылка уже не действительна. Пожалуйста, убедитесь также, что изображение не превышает :size.',
    ],
    'is_private'        => 'Этот объект приватен и виден только участникам с ролью "Админ".',
    'linking_help'      => 'Как я могу ссылаться на другие объекты.',
    'manage'            => 'Управление',
    'move'              => [
        'description'   => 'Перемещение этого объекта в другое место.',
        'errors'        => [
            'permission'        => 'Вам не разрешено создавать объекты этого типа в этой Кампании.',
            'same_campaign'     => 'Вам нужно выбрать другую Кампанию, чтобы переместить в нее этот объект.',
            'unknown_campaign'  => 'Неизвестная Кампания.',
        ],
        'fields'        => [
            'campaign'  => 'Новая Кампания',
            'copy'      => 'Создать копию',
            'target'    => 'Новый тип',
        ],
        'hints'         => [
            'campaign'  => 'Вы также можете попробовать переместить этот объект в другую Кампанию.',
            'copy'      => 'Выберите эту опцию, если хотите создать копию в новой Кампании.',
            'target'    => 'Пожалуйста, учтите, что некоторые данные могут быть потеряны при перемещении элемента из одного типа в другой.',
        ],
        'success'       => 'Объект ":name" перемещен.',
        'success_copy'  => 'Объект ":name" скопирован.',
        'title'         => 'Перемещение :name',
    ],
    'new_entity'        => [
        'error' => 'Пожалуйста, проверьте ваши значения.',
        'fields'=> [
            'name'  => 'Название',
        ],
        'title' => 'Новый объект',
    ],
    'or_cancel'         => 'или <a href=":url">отменить</a>',
    'panels'            => [
        'appearance'            => 'Оформление',
        'attribute_template'    => 'Шаблон Атрибутов',
        'calendar_date'         => 'Дата Календаря',
        'entry'                 => 'Текст',
        'general_information'   => 'Основная информация',
        'move'                  => 'Переместить',
        'system'                => 'Система',
    ],
    'permissions'       => [
        'action'            => 'Действия',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Разрешить',
                'deny'      => 'Запретить',
                'ignore'    => 'Пропустить',
                'remove'    => 'Удалить',
            ],
            'bulk_entity'   => [
                'allow'     => 'Разрешить',
                'deny'      => 'Запретить',
                'inherit'   => 'Наследовать',
            ],
            'delete'        => 'Удалить',
            'edit'          => 'Редактировать',
            'entity_note'   => 'Заметки объекта',
            'read'          => 'Читать',
            'toggle'        => 'Изменить',
        ],
        'allowed'           => 'Позволено',
        'fields'            => [
            'member'    => 'Участник',
            'role'      => 'Роль',
        ],
        'helper'            => 'Используйте этот интерфейс, чтобы настроить, какие пользователи и роли могут взаимодействовать с этим объектом. :allow',
        'helpers'           => [
            'entity_note'   => 'Позволить пользователям создавать заметки объектов для этого объекта. Без этого разрешения они все еще будут видеть заметки объектов, видимость которых установлена на "Все".',
            'setup'         => 'Используйте этот интерфейс, чтобы настроить то, как роли и пользователи могут взаимодействовать с этим объектом. :allow позволит пользователю или роли совершать это действие. :deny запретит им это действие. :inherit будет использовать разрешение роли пользователя или основной роли. Пользователь с :allow может совершать даже те действия, которые для его роли установлены как :deny.',
        ],
        'inherited'         => 'У этой роли уже есть это разрешение для этого типа объектов.',
        'inherited_by'      => 'Этот пользователь входит в роль ":role", у которой есть эти разрешения для этого типа объектов.',
        'success'           => 'Разрешения сохранены.',
        'title'             => 'Разрешения',
        'too_many_members'  => 'В этой Кампании слишком много участников (>10) для отображения этого интерфейса. Пожалуйста, используйте кнопку "Разрешения" объекта для детального контроля разрешений.',
    ],
    'placeholders'      => [
        'ability'       => 'Выберите Способность',
        'calendar'      => 'Выберите Календарь',
        'character'     => 'Выберите Персонажа',
        'entity'        => 'Объект',
        'event'         => 'Выберите Событие',
        'family'        => 'Выберите Семью',
        'image_url'     => 'Вы также можете загрузить изображение из URL',
        'item'          => 'Выберите Предмет',
        'location'      => 'Выберите Локацию',
        'organisation'  => 'Выберите Организацию',
        'race'          => 'Выберите Расу',
        'tag'           => 'Выберите Тэг',
    ],
    'relations'         => [
        'actions'   => [
            'add'   => 'Добавить связь',
        ],
        'fields'    => [
            'location'  => 'Локация',
            'name'      => 'Название',
            'relation'  => 'Связь',
        ],
        'hint'      => 'Связи между объектами можно назначить для обозначения их отношений друг с другом.',
    ],
    'remove'            => 'Удалить',
    'rename'            => 'Переименовать',
    'save'              => 'Сохранить',
    'save_and_close'    => 'Сохранить и Копировать',
    'save_and_copy'     => 'Сохранить и Копировать',
    'save_and_new'      => 'Сохранить и Создать',
    'save_and_update'   => 'Сохранить и Обновить',
    'save_and_view'     => 'Сохранить и Показать',
    'search'            => 'Искать',
    'select'            => 'Выбрать',
    'tabs'              => [
        'abilities'     => 'Способности',
        'attributes'    => 'Атрибуты',
        'boost'         => 'Усиление',
        'calendars'     => 'Календари',
        'default'       => 'Умолчание',
        'events'        => 'События',
        'inventory'     => 'Инвентарь',
        'map-points'    => 'Точки на карте',
        'mentions'      => 'Упоминания',
        'menu'          => 'Меню',
        'notes'         => 'Заметки объекта',
        'permissions'   => 'Разрешения',
        'relations'     => 'Связи',
        'reminders'     => 'Напоминания',
        'tooltip'       => 'Подсказка',
    ],
    'update'            => 'Обновить',
    'users'             => [
        'unknown'   => 'Неизвестно',
    ],
    'view'              => 'Показать',
    'visibilities'      => [
        'admin'         => 'Админ',
        'admin-self'    => 'Я и Админ',
        'all'           => 'Все',
        'self'          => 'Я',
    ],
];
