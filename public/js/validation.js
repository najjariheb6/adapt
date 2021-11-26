$(function () {
  // add tr
  $('.add-prod').on("click", function (e) {
    $('#products_tbody').append('<tr class="table__row"> <td editable class="table__td"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">@</div> <div class="input input--edit y_prod_name" contenteditable="true"></div> </div> </td> <td class="table__td text-center text-dark-theme"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">#</div> <div class="input input--edit y_prod_ref" contenteditable="true"></div> </div> </div> </td> <td class="table__td text-center text-dark-theme x_prod_price"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">$</div> <div class="input input--edit y_prod_price" contenteditable="true"></div> </div> </div> </td> <td class="table__td text-center x_prod_qte"> <input class="input input--edit text-center text-light-theme y_prod_qte" type="number" value="1" min="1" max="999"> </td> <td class="table__td text-center text-dark-theme"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">$</div> <div class="input input--edit y_prod_total">0</div> </div> </div> </td> <td class="table__td table__actions text-dark-theme"> <button class="table__remove prod_remove" type="button"> <svg class="icon-icon-trash"> <use xlink:href="#icon-trash"></use> </svg> </button> </td> </tr>');
    afterAddProd();
    change1();
    change2();
  });
  function afterAddProd() {
    // delete tr
    // $('.prod_remove').one("click", function (e) {
    //   old_price = $(this).closest('tr').find('.y_prod_total').html();
    //   subtotal = $('#subtotal').html();
    //   $('#subtotal').html(subtotal - old_price);
    //   var now = new Date();
    //   // convert date to a string in UTC timezone format:
    //   console.log(now.toUTCString());
    //   // Output: Wed, 21 Jun 2017 09:13:01 GMT
    //   $(this).parent().parent().remove();
    //   e.preventDefault();
    // });
    //accept only number
    $(".y_prod_price").on("keypress", function (e) {
      // alert('CLK');
      if (isNaN(String.fromCharCode(e.which))) e.preventDefault();
    });
  }
  // detect price change
  function change1() {
    $(".y_prod_price").on("input", function () {
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
  }
  // detect quantity change
  function change2() {
    $(".y_prod_qte").on("input", function () {
      $(this).closest('tr').removeClass('added');
      quantity = $(this).val();
      // console.log(quantity);
      price = $(this).closest('tr').children('td.x_prod_price').find('.y_prod_price').html();
      // console.log(price);
      $(this).closest('tr').find('.y_prod_total').html(quantity * price);
      calculate_sum();
    });
  }
  // calculate subtotal
  function calculate_sum() {
    var sum = 0;
    $(".y_prod_total").each(function () {
      sum += parseFloat($(this).text());
      // $(this).closest('tr').addClass('added');
    });
    console.log(sum);
    $('#subtotal').val(sum);
  }
  function final_total() {
    var $myText = $("#subtotal");
    $myText.data("value", $myText.val());
    setInterval(function () {
      var data = $myText.data("value"),
        val = $myText.val();
      if (data !== val) {
        $myText.data("value", val);
        var sub = parseFloat(val);
        var tax = parseFloat($("#tax").val());
        var discount = parseFloat($("#discount").val());
        var timbre = parseFloat($("#timbre").val());
        tax = (sub / 100) * tax;
        discount = (sub / 100) * discount;
        var fp = sub - discount + tax + timbre;
        $("#final_price").val(fp);
      }
    }, 100)
  }
  final_total();
  $("#tax").on("change", function () {
    var tax = parseFloat($(this).val());
    var sub = parseFloat($("#subtotal").val());
    var discount = parseFloat($("#discount").val());
    var timbre = parseFloat($("#timbre").val());
    var diag = parseFloat($("#diagnostic").val());
    tax = (sub / 100) * tax;
    discount = (sub / 100) * discount;
    var fp = sub - discount + tax + timbre + diag;
    $("#final_price").val(fp);
  });
  $("#discount").on("change", function () {
    var tax = parseFloat($("#tax").val());
    var sub = parseFloat($("#subtotal").val());
    var discount = parseFloat($(this).val());
    var timbre = parseFloat($("#timbre").val());
    var diag = parseFloat($("#diagnostic").val());
    tax = (sub / 100) * tax;
    discount = (sub / 100) * discount;
    var fp = sub - discount + tax + timbre+diag;
    $("#final_price").val(fp);
  });
  $("#timbre").on("change", function () {
    var tax = parseFloat($("#tax").val());
    var sub = parseFloat($("#subtotal").val());
    var discount = parseFloat($("#discount").val());
    var timbre = parseFloat($(this).val());
    var diag = parseFloat($("#diagnostic").val());
    tax = (sub / 100) * tax;
    discount = (sub / 100) * discount;
    var fp = sub - discount + tax + timbre+diag;
    $("#final_price").val(fp);
  });
  $("#diagnostic").on("change", function () {
    var tax = parseFloat($("#tax").val());
    var sub = parseFloat($("#subtotal").val());
    var discount = parseFloat($("#discount").val());
    var timbre = parseFloat($("#timbre").val());
    var diag = parseFloat($(this).val());
    tax = (sub / 100) * tax;
    discount = (sub / 100) * discount;
    var fp = sub - discount + tax + timbre+diag;
    $("#final_price").val(fp);
  });
});