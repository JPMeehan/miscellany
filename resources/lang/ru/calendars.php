<?php

return [
    'actions'       => [
        'add_epoch'         => 'Добавить эпоху.',
        'add_intercalary'   => 'Добавить промежуточные дни',
        'add_month'         => 'Добавить месяц',
        'add_moon'          => 'Добавить луну',
        'add_season'        => 'Добавить время года',
        'add_week'          => 'Добавить названную неделю',
        'add_weekday'       => 'Добавить день недели',
        'add_year'          => 'Добавить время года',
        'set_today'         => 'Установить текущий день',
        'today'             => 'Сегодня',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Ежегодное',
    ],
    'create'        => [
        'description'   => 'Создание нового Календаря.',
        'success'       => 'Календарь ":name" создан.',
        'title'         => 'Новый Календарь',
    ],
    'destroy'       => [
        'success'   => 'Календарь ":name" удален.',
    ],
    'edit'          => [
        'description'   => 'Обновление Календаря.',
        'success'       => 'Календарь ":name" обновлен.',
        'title'         => 'Редактирование Календаря :name',
        'today'         => 'Дата Календаря обновлена.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Существующий Объект',
            'new'       => 'Новое Событие',
            'switch'    => 'Изменить выбор',
        ],
        'create'    => [
            'description'   => 'Создание События Календаря.',
            'success'       => 'Событие Календаря создано.',
            'title'         => 'Добавление События Календаря в :name',
        ],
        'destroy'   => 'Событие удалено из Календаря \':name\'.',
        'edit'      => [
            'description'   => 'Обновление События Календаря.',
            'success'       => 'Событие Календаря обновлено.',
            'title'         => 'Обновление События Календаря для :name',
        ],
        'helpers'   => [
            'add'   => 'Добавить существующее Событие в Календарь.',
            'new'   => 'Или создать новое Событие, просто предоставив имя.',
        ],
        'modal'     => [
            'title' => 'Добавить Событие в Календарь',
        ],
        'success'   => 'Событие ":event" добавлено в Календарь.',
    ],
    'events'        => [
        'description'   => 'События в этом Календаре.',
        'title'         => 'События Календаря :name',
    ],
    'fields'        => [
        'colour'                => 'Цвет',
        'comment'               => 'Комментарий',
        'current_day'           => 'Текущий день',
        'current_month'         => 'Текущий месяц',
        'current_year'          => 'Текущий год',
        'date'                  => 'Текущий дата',
        'has_leap_year'         => 'Високосные годы',
        'intercalary'           => 'Промежуточные дни',
        'is_incrementing'       => 'Автопродвижение',
        'is_recurring'          => 'Повторяющееся',
        'leap_year_amount'      => 'Добавить дни',
        'leap_year_month'       => 'Месяц',
        'leap_year_offset'      => 'Каждые',
        'leap_year_start'       => 'Високосный год',
        'length'                => 'Продолжительность События',
        'length_days'           => ':count день|:count дней',
        'months'                => 'Месяцы',
        'moons'                 => 'Луны',
        'name'                  => 'Название',
        'parameters'            => 'Параметры',
        'recurring_periodicity' => 'Период повторения',
        'recurring_until'       => 'До какого года повторяется',
        'reset'                 => 'Сброс недели',
        'seasons'               => 'Времена года',
        'start_offset'          => 'Начальное смещение',
        'suffix'                => 'Суффикс',
        'type'                  => 'Тип',
        'week_names'            => 'Названия недель',
        'weekdays'              => 'Дни недели',
    ],
    'helpers'       => [
        'month_type'    => 'Промежуточные месяцы не имеют дней недели, но влияют на луны и времена года.',
        'start_offset'  => 'По умолчанию Календарь начинается с первого дня недели 0 года. Изменение этого поля влияет на расположение первого дня календаря.',
    ],
    'hints'         => [
        'intercalary'       => 'Дни, которые выпадают из обычных месяцев и дней недели.',
        'is_incrementing'   => 'Текущие даты Календарей с автопродвижением будут автоматически обновляться в 00:00 UTC.',
        'is_recurring'      => 'Событие может быть повторяющимся. Оно будет происходить каждый год в одну и ту же дату.',
        'months'            => 'В вашем Календаре должно быть не меньше 2 месяцев.',
        'moons'             => 'Если добавить в Календарь луны, они будут показываться в Календаре каждую полную и новую луну.',
        'reset'             => 'Всегда начинать месяц или год с первого дня недели.',
        'seasons'           => 'Создайте времена года, просто дав им названия. Об остальном позаботится Kanka.',
        'weekdays'          => 'Назначьте названия дней недели. Их должно быть не меньше двух.',
        'weeks'             => 'Определите названия для нескольких наиболее важных недель в вашем Календаре.',
        'years'             => 'Некоторые года настолько важны, что у них есть собственные названия.',
    ],
    'index'         => [
        'add'           => 'Новый Календарь',
        'description'   => 'Управление Календарями :name.',
        'header'        => 'Календари :name',
        'title'         => 'Календари',
    ],
    'layouts'       => [
        'month' => 'Месяц',
        'year'  => 'Год',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Переключатель лет',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Промежуточный',
        'standard'      => 'Обычный',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'month' => 'Ежемесячное',
                'year'  => 'Ежегодное',
            ],
        ],
        'resets'    => [
            ''      => 'Никогда',
            'month' => 'Ежемесячно',
            'year'  => 'Ежегодно',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Промежуточные дни',
        'leap_year'     => 'Високосный год',
        'months'        => 'Месяцы',
        'weeks'         => 'Недели',
        'years'         => 'Названные годы',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Продолжительность в днях',
            'month'     => 'В конце какого месяца',
            'name'      => 'Название промежутка',
        ],
        'month'         => [
            'alias' => 'Прозвище месяца',
            'length'=> 'Дни',
            'name'  => 'Название',
            'type'  => 'Тип',
        ],
        'moon'          => [
            'fullmoon'  => 'Полнолуние каждые (в днях)',
            'name'      => 'Название луны',
            'offset'    => 'Смещение первого полнолуния',
        ],
        'seasons'       => [
            'day'   => 'Первый день',
            'month' => 'Первый месяц',
            'name'  => 'Название времени года',
        ],
        'weeks'         => [
            'name'      => 'Название недели',
            'number'    => 'Число',
        ],
        'year'          => [
            'name'      => 'Название года',
            'number'    => 'Год',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Цвет',
        'comment'           => 'День рожденья, фестиваль, солнцестояние',
        'date'              => 'Текущая дата',
        'leap_year_amount'  => 'Число лишних дней в високосном году',
        'leap_year_month'   => 'Месяц, в который входят лишние дни',
        'leap_year_offset'  => 'Каждые сколько лет год становится високосным',
        'leap_year_start'   => 'Первый високосный год',
        'length'            => 'Продолжительность события в днях',
        'months'            => 'Число месяцев в году',
        'name'              => 'Название Календаря',
        'recurring_until'   => 'Последний год повторения (оставьте пустым, чтобы повторять вечно)',
        'seasons'           => 'Число времен года',
        'suffix'            => 'Суффикс текущей эры (н. э., до н. э.)',
        'type'              => 'Тип Календаря',
        'weekdays'          => 'Число дней недели',
    ],
    'show'          => [
        'description'       => 'Детальный вид Календаря.',
        'missing_details'   => 'Этот Календарь не может быть размещен. Для нормальной работы в Календаре должно быть не меньше 2 месяцев и 2 дней недели.',
        'moon_full_moon'    => 'Полнолуние :moon',
        'moon_new_moon'     => 'Новолуние :moon',
        'moon_waning_moon'  => ':moon убывает',
        'moon_waxing_moon'  => ':moon растет',
        'tabs'              => [
            'events'        => 'События Календаря',
            'information'   => 'Информация',
            'weather'       => 'Погода',
        ],
        'title'             => 'Календарь :name',
    ],
];
