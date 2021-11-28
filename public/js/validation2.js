$(document).on('click', ".add-prod", function (e) {
    var tablebody = $(document).find(".table.table--lines.table--groups.table--striped").find('tbody');

    var trlast = tablebody.find("tr:last");
    var trnew = trlast.clone();
    var tab = '<tr class="table__row"> <td editable class="table__td"> <div class="input input--edit mw-200 text-light-theme y_prod_name" contenteditable="true"> @ </div> </td> <td class="table__td text-center text-dark-theme"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">#</div> <div class="input input--edit y_prod_ref" contenteditable="true"></div> </div> </div> </td> <td class="table__td text-center text-dark-theme x_prod_price"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">$</div> <div class="input input--edit y_prod_price" contenteditable="true"></div> </div> </div> </td> <td class="table__td text-center x_prod_qte"> <input class="input input--edit text-center text-light-theme y_prod_qte" type="number" value="1" min="1" max="999"> </td> <td class="table__td text-center text-dark-theme"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">$</div> <div class="input input--edit y_prod_total">0</div> </div> </div> </td> <td class="table__td table__actions text-dark-theme"> <button class="table__remove prod_remove" type="button"> <svg class="icon-icon-trash"> <use xlink:href="#icon-trash"></use> </svg> </button> </td> </tr>';
    tablebody.append(tab);
    // $('#products_tbody').append('<tr class="table__row"> <td editable class="table__td"> <div class="input input--edit mw-200 text-light-theme y_prod_name" contenteditable="true"> @ </div> </td> <td class="table__td text-center text-dark-theme"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">#</div> <div class="input input--edit y_prod_ref" contenteditable="true"></div> </div> </div> </td> <td class="table__td text-center text-dark-theme x_prod_price"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">$</div> <div class="input input--edit y_prod_price" contenteditable="true"></div> </div> </div> </td> <td class="table__td text-center x_prod_qte"> <input class="input input--edit text-center text-light-theme y_prod_qte" type="number" value="1" min="1" max="999"> </td> <td class="table__td text-center text-dark-theme"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">$</div> <div class="input input--edit y_prod_total">0</div> </div> </div> </td> <td class="table__td table__actions text-dark-theme"> <button class="table__remove prod_remove" type="button"> <svg class="icon-icon-trash"> <use xlink:href="#icon-trash"></use> </svg> </button> </td> </tr>');
});
$(document).on('click', ".prod_remove", function(e) {
    old_price = $(this).closest('tr').find('.y_prod_total').html();
    subtotal = $('#subtotal').val();
    $('#subtotal').val(subtotal - old_price);
    var r = $(this).closest('tr').remove();
});
$(document).on('click', ".btn_calculate", calculate_sum());
// $(document).on('click', ".prod_remove", function (e) {
//     old_price = $(this).closest('tr').find('.y_prod_total').html();
//     subtotal = $('#subtotal').html();
//     $('#subtotal').html(subtotal - old_price);
//     var now = new Date();
//     // convert date to a string in UTC timezone format:
//     console.log(now.toUTCString());
//     // Output: Wed, 21 Jun 2017 09:13:01 GMT
//     var r = $(this).closest('tr').remove();
//     // e.preventDefault();
// });

$(document).on('click', ".prod_remove", function (e) {
    var r = $(this).closest('tr').remove();
    alert('123');
});

$(document).on('keypress', ".y_prod_price", function (e) {
    // alert('CLK');
    if (isNaN(String.fromCharCode(e.which))) e.preventDefault();
});
// afterAddProd();
$(document).on('input', ".y_prod_price", function () {

    // old_price = $(this).closest('tr').find('.y_prod_total').html();
    $(this).closest('tr').removeClass('added');
    price = $(this).html();
    quantity = $(this).closest('tr').children('.x_prod_qte').children('.y_prod_qte').val();
    new_price = quantity * price;
    $(this).closest('tr').find('.y_prod_total').html(new_price);
    calculate_sum();
});
$(document).on('click', ".prod_remove", function (e) {
    var r = $(this).closest('tr').remove();
});

$(document).on('keypress', ".y_prod_price", function (e) {
    // alert('CLK');
    if (isNaN(String.fromCharCode(e.which))) e.preventDefault();
});
// afterAddProd();
$(document).on('input', ".y_prod_price", function () {

    // old_price = $(this).closest('tr').find('.y_prod_total').html();
    $(this).closest('tr').removeClass('added');
    price = $(this).html();
    quantity = $(this).closest('tr').children('.x_prod_qte').children('.y_prod_qte').val();
    new_price = quantity * price;
    $(this).closest('tr').find('.y_prod_total').html(new_price);
    // subtotal = $('#subtotal').html();
    // if (old_price == 0)
    //   $('#subtotal').html(subtotal + new_price);
    // else
    //   $('#subtotal').html((subtotal - old_price) + new_price);
    calculate_sum();
});

// change1();

$(document).on('input', ".y_prod_qte", function () {
    $(this).closest('tr').removeClass('added');
    quantity = $(this).val();
    // console.log(quantity);
    price = $(this).closest('tr').children('td.x_prod_price').find('.y_prod_price').html();
    // console.log(price);
    $(this).closest('tr').find('.y_prod_total').html(quantity * price);
    calculate_sum();
});

// change2();

function calculate_sum() {
    var sum = 0;
    $(".y_prod_total").each(function () {
        sum += parseFloat($(this).text());
        // $(this).closest('tr').addClass('added');
    });
    // console.log(sum);
    $('#subtotal').html(sum);
}


