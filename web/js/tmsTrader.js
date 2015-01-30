tmsTrader = function () {


    /**
     * Добавление нового шаблона ордера в табличку
     * @returns {boolean}
     */
    this.addOrder = function (btn_add) {
        var this_object = this;
        var tpl_row = $('#order_tpl tbody:first tr:first').clone();

        tpl_row.find('.orderadd:first').click(function () {
            this_object.addOrder(this)
        });

        tpl_row.find('.order_go:first').click(function () {
            this_object.openOrder(this)
        });

        tpl_row.find('.order_stop:first').click(function () {
            this_object.closeOrder(this)
        });

        tpl_row.find('.orderrm:first').click(function () {
            this_object.removeOrder(this)
        });
        tpl_row.find('.orderstep_up:first').click(function () {
            this_object.incrementPrice(this,'up')
        });
        tpl_row.find('.orderstep_down:first').click(function () {
            this_object.incrementPrice(this,'down')
        });

        tpl_row.find('.ordertype:first').change(function () {
            this_object.changeOrderType(this)
        });

        var table = $('#my_orders');
        var tbody = table.find('tbody:first');

        var row_num = tbody.find('tr').length;
        if (!row_num) {
            //нет строк - тупо добавляем новую
            tbody.append(tpl_row);
            return true;
        } else {
            //строки есть и тупо добавляем строку после
            var current_row = $(btn_add).closest('tr');
            current_row.after(tpl_row);
        }
    }

    /**
     * Возвращает количество известных ордеров (из интерфейса)
     * @returns {Number}
     */
    this.getKnownOrderNum = function () {
        return $('#my_orders').find('tbody:first').find('tr').length;
    }

    /**
     * конструктор объекта
     * @param params
     */
    this.constructor = function (params) {
        this.addOrder();
    }

    /**
     * изменение типа операции купля/продажа
     * @param select_obj
     */
    this.changeOrderType = function (select_obj) {
        var row = $(select_obj).closest('tr');

        row.find('td:first .label:first').removeClass('ask bid');
        row.find('.ordercurrency:first').removeClass('ask bid');
        row.find('.ordervalue:first').removeClass('ask bid');
        row.find('.orderprice:first').removeClass('ask bid');

        switch ($(select_obj).val()) {
            default:
                break;
            case 'ask':
                row.find('td:first .label:first').addClass('ask');
                row.find('.ordercurrency:first').addClass('ask');
                row.find('.ordervalue:first').addClass('ask');
                row.find('.orderprice:first').addClass('ask');
                break;
            case 'bid':
                row.find('td:first .label:first').addClass('bid');
                row.find('.ordercurrency:first').addClass('bid');
                row.find('.ordervalue:first').addClass('bid');
                row.find('.orderprice:first').addClass('bid');
                break;
        }
    }

    /**
     * Создание ордера на бирже и отображение в интерфейсе сапущенного ордера
     * @param go_btn
     * @returns {boolean}
     */
    this.openOrder = function (go_btn) {

        var row = $(go_btn).closest('tr');
        var order_id = row.find('.orderid:first').val();
        if (order_id.length) {
            return true;
        } else {
            //validation
            var ordercurrency = row.find('.ordercurrency:first').val();
            if (ordercurrency == 'none') {
                alert('У ордера не выбрана валюта');
                return false;
            }
            var ordertype = row.find('.ordertype:first').val();
            if (ordertype == 'none') {
                alert('У ордера не выбрана операция');
                return false;
            }

            var re = /^([0-9]{1,})(\.[0-9]{1,}){0,1}$/;
            var ordervalue = row.find('.ordervalue:first').val();
            {
                if (!re.test(ordervalue)) {
                    alert('У ордера неверно задан объем');
                    return false;
                }
            }
            var orderprice = row.find('.orderprice:first').val();
            {
                if (!re.test(orderprice)) {
                    alert('У ордера неверно задан курс');
                    return false;
                }
            }

            row.find('td:first .label:first').attr('disabled', true);
            row.find('.ordercurrency:first').attr('disabled', true);
            row.find('.ordervalue:first').attr('disabled', true);
            row.find('.orderprice:first').attr('disabled', true);
            row.find('.ordertype:first').attr('disabled', true);
            row.find('.order_go:first').hide();
            row.find('.order_stop:first').removeClass('hidden');
            row.find('.orderstep:first').removeClass('hidden');
            row.find('.orderstep_up:first').removeClass('hidden');
            row.find('.orderstep_down:first').removeClass('hidden');

            // магия по постановке ордера и получению его id
            row.find('.orderid:first').val(123);
            row.find('.orderid_label:first').html('<span class="glyphicon glyphicon-flag" aria-hidden="true"></span> ');
            return true;
        }
    }

    /**
     * ЗАкрытие ордера и приостановка его в интерфейсе
     * @param stop_btn
     * @returns {boolean}
     */
    this.closeOrder = function (stop_btn) {
        var row = $(stop_btn).closest('tr');
        var order_id = row.find('.orderid:first').val();
        if (!order_id.length) {
            return true;
        }
        // магия по закрытию ордера

        row.find('.orderid:first').val('');
        row.find('.orderid_label:first').html('');

        row.find('td:first .label:first').attr('disabled', false);
        row.find('.ordercurrency:first').attr('disabled', false);
        row.find('.ordervalue:first').attr('disabled', false);
        row.find('.orderprice:first').attr('disabled', false);
        row.find('.ordertype:first').attr('disabled', false);
        row.find('.order_go:first').show();
        row.find('.order_stop:first').addClass('hidden');
        row.find('.orderstep:first').addClass('hidden');
        row.find('.orderstep_up:first').addClass('hidden');
        row.find('.orderstep_down:first').addClass('hidden');
        return true;
    }

    /**
     * Остановка всех ордеров на бирже
     * @returns {boolean}
     */
    this.closeAllOrders = function () {
        var this_object = this;
        $('#my_orders tbody:first').find('tr').each(function () {
            var row = $(this);

            var order_id = row.find('.orderid:first').val();
            if (order_id.length) {
                this_object.closeOrder(row.find('.order_stop:first'));
            }
        });
        return true;
    }

    /**
     * Открытие всех ордеров на бирже
     * @returns {boolean}
     */
    this.openAllOrders = function () {
        var this_object = this;
        $('#my_orders tbody:first').find('tr').each(function () {
            var row = $(this);

            var order_id = row.find('.orderid:first').val();
            if (!order_id.length) {
                this_object.openOrder(row.find('.order_stop:first'));
            }
        });
        return true;

    }

    /**
     * Закрытие ордера на бирже и удаление его из интерфейса
     * @param rm_btn
     * @returns {boolean}
     */
    this.removeOrder = function (rm_btn) {
        var this_object = this;
        var row = $(rm_btn).closest('tr');
        if (this_object.closeOrder(rm_btn)) {
            row.remove();
        }

        if (!this_object.getKnownOrderNum())this_object.addOrder();
        return true;
    }

    this.incrementPrice = function (btn, direction) {
        if (direction != 'up' && direction != 'down')return false;

        var row = $(btn).closest('tr');
        var orderstep = row.find('.orderstep:first').val();
        var re = /^([0-9]{1,})(\.[0-9]{1,}){0,1}$/;
        if (!re.test(orderstep) || !orderstep)
        {
            alert('некорректный ценовой шаг');
            return false;
        }

        var orderprice = row.find('.orderprice:first').val();
        {
            if (!re.test(orderprice)) {
                alert('У ордера неверно задан курс');
                return false;
            }
        }

        if (direction == 'up')orderprice = parseFloat(orderprice)+ parseFloat(orderstep);
        else orderprice = parseFloat(orderprice) -parseFloat(orderstep);

        if (this.closeOrder(btn)) {
            row.find('.orderprice:first').val(orderprice);
            if (!this.openOrder(btn)) {
                alert('Не удается закрыть ордер');
                return false;
            }
        }
        else {
            alert('Не удается закрыть ордер');
            return false;
        }
    }


    this.constructor({})
}
