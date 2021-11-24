$(function () {
  $('.add-prod').on("click", function (e) {
    $('#products_tbody').append('<tr class="table__row"> <td editable class="table__td"> <div contenteditable="true" class="input input--edit mw-200 text-light-theme"> # </div> </td> <td class="table__td text-center text-dark-theme"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">@</div> <div class="input input--edit" contenteditable="true"></div> </div> </div> </td> <td class="table__td text-center text-dark-theme"> <div class="d-inline-block"> <div class="input-group input-group--prepend-xs"> <div class="input-group__prepend">$</div> <div class="input input--edit prod_price" contenteditable="true"></div> </div> </div> </td> <td class="table__td text-center"> <input class="input input--edit text-center text-light-theme" type="number" value="1" min="1" max="999"> </td> <td class="table__td text-nowrap text-dark-theme">$</td> <td class="table__td table__actions text-dark-theme"> <button class="table__remove prod_remove" type="button"> <svg class="icon-icon-trash"> <use xlink:href="#icon-trash"></use> </svg> </button> </td> </tr>');
    e.preventDefault();
    afterAddProd();
  });
  function afterAddProd() {
    $('.prod_remove').on("click", function (e) {
      $(this).parent().parent().remove();
      e.preventDefault();
    });
    $(".prod_price").on("keypress", function (e) {
      // alert('CLK')
      if (isNaN(String.fromCharCode(e.which))) e.preventDefault();
    });
    
  }
  afterAddProd();
});