jQ(document).ready(function () {
    let adminPromoCodesDatatable = jQ('#mage-promocodes-datatable');
    adminPromoCodesDatatable.DataTable({
        processing: true,
        serverSide: true,
        ajax: route('mage-plugin-coupons.promocodes.list').url(),
        deferRender: true,
        rowId: 'id',
        language: window.dataTablesLocales(),
        paging: true,
        lengthChange: true,
        lengthMenu: [10, 25, 50, 100],
        pageLength: 50,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
        scrollX: true,
        columns: [
            { data: 'id', name: 'id' },
            { data: 'type', name: 'type' },
            { data: 'title', name: 'title' },
            { data: 'code', name: 'code'},
            { data: 'pct_discount', name: 'pct_discount', searchable: false},
            { data: 'amount_discount', name: 'amount_discount', searchable: false},
            { data: 'pct_shipping_discount', name: 'pct_shipping_discount', searchable: false},
            { data: 'max_uses', name: 'max_uses', searchable: false},
            { data: 'start_date', name: 'start_date'},
            { data: 'end_date', name: 'end_date'},
            { data: 'first_order_only', name: 'first_order_only', searchable: false},
            { data: 'one_use_only', name: 'one_use_only', searchable: false},
            { data: 'customer_one_use_only', name: 'customer_one_use_only', searchable: false},
            { data: 'active', name: 'active', searchable: false},
            { data: null, searchable: false, orderable: false, render: function(data, type, row) {
                return "" +
                "<div class=\"btn-group\" role=\"group\">" +
                  "<a href=\"" + route('mage-plugin-coupons.promocodes.edit', { id: data.id }) + "\">" +
                    "<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i class=\"fa fa-pen\"></i>" +
                    "</button>" +
                  "</a>" +
                  // "<a class=\"mage-promocodes-delete-btn\" data-id=\"" + data.id + "\">" +
                  //   "<button type=\"button\" data-id=\"" + data.id + "\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                  //     "<i data-id=\"" + data.id + "\" class=\"fa fa-trash no-click\"></i>" +
                  //   "</button>" +
                  // "</a>" +
                "</div>";
                }
            }
        ]
    });

    adminPromoCodesDatatable.on('click', '.mage-promocodes-delete-btn', function(e) {
        let id = jQ(e.target).attr('data-id');
        let locale = {
          "title"   : trans('mage-plugin-coupons.datatable.sweetalert.promocodes.title'),
          "text"    : trans('mage-plugin-coupons.datatable.sweetalert.promocodes.text'),
          "success" : trans('mage-plugin-coupons.datatable.sweetalert.promocodes.success'),
          "error"   : trans('mage-plugin-coupons.datatable.sweetalert.promocodes.error'),
        }

        window.deleteAlert(id, adminPromoCodesDatatable, 'mage.promocodes.destroy', locale);
    });
});
