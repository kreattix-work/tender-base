$(function () {
  $(".date-picker").each(function () {
    $(this).datepicker({
      autoclose: true,
      format: "dd-M-yyyy",
    });
  });
});
