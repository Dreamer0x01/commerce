<?php

setlocale(LC_ALL, 'ru_RU.UTF-8');

return [
    'module.orders_caption' => 'Заказы',
    'module.order_caption' => 'Заказ #%s',
    'module.order_edit_caption' => 'Редактирование заказа #%s',
    'module.error.order_not_found' => 'Заказ не найден!',
    'module.order_updated' => 'Заказ обновлен',
    'module.show_order_btn' => 'Просмотр',
    'module.delete_order_btn' => 'Удалить',
    'module.confirm_delete' => 'Вы уверены, что хотите удалить заказ?',
    'module.order_contents' => 'Содержимое заказа',
    'module.cart_contents_title' => 'Содержимое корзины',
    'module.order_history_title' => 'История заказа',
    'module.add_history' => 'Добавить статус',
    'module.status_title' => 'Статус',
    'module.status_change_notify' => 'Уведомить покупателя о смене статуса заказа',
    'module.is_customer_notified' => 'Покупатель уведомлен',
    'module.status_change_description' => 'Дополнительная информация для истории заказа',
    'module.status_change_date' => 'Дата смены статуса',
    'module.status_changed' => 'Статус заказа изменен!',
    'module.unknown_route' => 'Неизвестный запрос',
    'module.statuses_caption' => 'Статусы заказов',
    'module.edit_status_btn' => 'Редактировать',
    'module.name_field' => 'Название',
    'module.default_field' => 'Начальный статус',
    'module.notify_field' => 'Уведомлять покупателя о смене',
    'module.notify' => 'Уведомлять',
    'module.error.status_not_found' => 'Статус заказа не найден!',
    'module.error.default_status_cannot_delete' => 'Статус по умолчанию нельзя удалить!',
    'module.edit_status_caption' => 'Редактирование статуса заказа "%s"',
    'module.new_status_caption' => 'Создание статуса заказа',
    'module.status_data' => 'Данные статуса заказа',
    'module.status_saved' => 'Статус сохранен',
    'module.delete_status_btn' => 'Удалить',
    'module.status_deleted' => 'Статус удален',
    'module.currency_caption' => 'Валюты',
    'module.error.currency_not_found' => 'Валюта не найдена!',
    'module.error.default_currency_cannot_delete' => 'Валюту по умолчанию нельзя удалить!',
    'module.edit_currency_caption' => 'Редактирование валюты "%s"',
    'module.new_currency_caption' => 'Создание валюты',
    'module.currency_data' => 'Данные валюты',
    'module.currency_saved' => 'Валюта сохранена',
    'module.edit_currency_btn' => 'Редактировать',
    'module.delete_currency_btn' => 'Удалить',
    'module.currency_deleted' => 'Валюта удалена',
    'module.code_title' => 'Код',
    'module.updated_at_field' => 'Обновлено',
    'module.active_title' => 'Включено',
    'module.value_title' => 'Значение',
    'module.default_currency_field' => 'По умолчанию',
    'module.left_symbol' => 'Символ слева',
    'module.right_symbol' => 'Символ справа',
    'module.decimals_title' => 'Число знаков после запятой',
    'module.decimals_separator' => 'Разделитель целой и дробной части',
    'module.thousands_separator' => 'Разделитель разрядов',
    'module.add_currency' => 'Добавить валюту',
    'module.add_status' => 'Добавить статус',
    'module.user' => 'Пользователь',
    'module.image' => 'Изображение',
    'module.remove_product' => 'Удалить',
    'module.add_product' => 'Добавить товар',
    'module.add_subtotal' => 'Добавить строку',
    'module.products_selector_title' => 'Выберите товар',
    'module.order_change_notify' => 'Уведомить покупателя об изменении данных заказа',
    'module.error.name_length' => 'Имя должно быть от 2 до 255 символов',
    'module.error.phone_incorrect' => 'Формат телефона неверный',
    'module.error.email_incorrect' => 'Формат адреса email неверный',
    'module.error.producttitle_required' => 'Не заполнено название товара',
    'module.error.producttitle_length' => 'Название товара должно быть от 2 до 255 символов',
    'module.error.productcount_required' => 'Количество товара не указано',
    'module.error.productcount_positive' => 'Количество товара должно быть больше 0',
    'module.error.productprice_required' => 'Стоимость товара не указана',
    'module.error.productprice_positive' => 'Стоимость товара должна быть больше 0',
    'module.error.subtotaltitle_required' => 'Не указано название дополнительного сбора',
    'module.error.subtotaltitle_length' => 'Название дополнительного сбора должно быть от 2 до 255 символов',
    'module.error.order_not_saved' => 'Ошибка при сохранении заказа!',
    'module.order_saved' => 'Заказ сохранен',
    'module.not_selected' => '--- не выбрано ---',
    'module.order_changed' => 'Данные заказа изменены',
    'module.filter_btn' => 'Применить',
    'module.reset_filters_btn' => 'Сбросить фильтры',
    'module.show_filters' => 'Показать фильтры',
    'module.hide_filters' => 'Скрыть фильтры',
    'module.dates_interval' => 'Временной интервал',
    'module.related_language' => 'Код соответствующего языка',
    'module.status_alias' => 'Псевдоним',
    'module.status_marker_color' => 'Цвет маркера',
    'module.canbepaid_field' => 'Заказы с этим статусом могут быть оплачены',
    'module.error.status_not_saved' => 'Ошибка при изменении статуса!',
    'module.close_btn' => 'Закрыть',
    'module.cancel_btn' => 'Отмена',
    'module.save_btn' => 'Сохранить'
];
