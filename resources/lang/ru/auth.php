<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы аутентификации
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются во время аутентификации для
    | различных сообщений которые мы должны вывести пользователю на экран.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'failed'    => 'Неправильные входные данные.',
    'helpers'   => [
        'password'  => 'Показать/Скрыть пароль',
    ],
    'login'     => [
        'fields'                => [
            'email'     => 'Электронная почта',
            'password'  => 'Пароль',
        ],
        'login_with_facebook'   => 'Войти через Facebook',
        'login_with_google'     => 'Войти через Google',
        'login_with_twitter'    => 'Войти через Twitter',
        'new_account'           => 'Создать новый аккаунт',
        'or'                    => 'ИЛИ',
        'password_forgotten'    => 'Забыли пароль?',
        'remember_me'           => 'Запомнить меня',
        'submit'                => 'Войти',
        'title'                 => 'Вход',
    ],
    'register'  => [
        'already_account'           => 'Уже есть аккаунт?',
        'email'                     => [
            'body'  => '<p>Добро пожаловать в kanka.io!</p><p>Ваш аккаунт был создан с помощью адреса электронной почты.</p>',
            'login' => 'Вход',
            'title' => 'Начало работы с Kanka',
        ],
        'errors'                    => [
            'email_already_taken'   => 'Аккаунт с такой электронной почтой уже зарегистрирован.',
            'general_error'         => 'При создании вашего аккаунта произошла ошибка. Пожалуйста, попробуйте еще раз.',
        ],
        'fields'                    => [
            'email'     => 'Электронная почта',
            'name'      => 'Имя пользователя',
            'password'  => 'Пароль',
            'tos'       => 'Я соглашаюсь с <a href=":privacyUrl" target="_blank">Политикой Конфиденциальности</a>.',
        ],
        'register_with_facebook'    => 'Регистрация через Facebook',
        'register_with_google'      => 'Регистрация через Google',
        'register_with_twitter'     => 'Регистрация через Twitter',
        'submit'                    => 'Зарегистрироваться',
        'title'                     => 'Регистрация',
        'welcome_email'             => [
            'header'        => 'Добро пожаловать в Kanka, :name!',
            'header_sub'    => 'Поздравляем, вы сделали первый шаг в создании своего Мира на :kanka!',
            'section_1'     => 'Куда теперь?',
            'section_10'    => 'Патреонов',
            'section_11'    => 'Создайте свой Мир',
            'section_2'     => 'Самый важный ресурс - это :discord, где вы найдете множество наших преданных пользователей, команду помощи новичкам, а также автора Kanka, который может ответить на любые ваши вопросы.',
            'section_3'     => 'Наше :faq также ответит на самые распространенные вопросы.',
            'section_4'     => 'Наш :youtube содержит видео по основам Kanka. И хотя пока охвачены не все темы, мы регулярно добавляем новые видео.',
            'section_5'     => 'YouTube Канал',
            'section_6'     => 'Свяжитесь с нами',
            'section_7'     => 'Если вы не нашли ответ на свои вопросы или просто хотите с нами связаться, можете найти нас на :facebook или отправить письмо на :email. Мы маленькая команда из 2 друзей, но мы обязательно ответим на каждое полученное письмо, так что, пожалуйста, не стесняйтесь!',
            'section_8'     => 'И напоследок',
            'section_9'     => 'Мы сделали все основные функции Kanka бесплатными, и мы всегда будем следовать этому пути. Однако, если вы хотите поддержать нас в этом проекте, вы можете вступить в ряды наших :patrons и получить доступ к дополнительным функциям, а также нашу бесконечную благодарность!',
            'title'         => 'Начало работы с Kanka',
        ],
    ],
    'reset'     => [
        'fields'    => [
            'email'                 => 'Адрес электронной почты',
            'password'              => 'Пароль',
            'password_confirmation' => 'Подтвердите ваш пароль',
        ],
        'send'      => 'Отправить ссылку на восстановление пароля',
        'submit'    => 'Восстановить пароль',
        'title'     => 'Восстановление пароля',
    ],
    'throttle'  => 'Слишком много попыток входа. Пожалуйста, попробуйте снова через :seconds секунд.',
];
