$(function () {
  // siderbar submenu
  $(".sider-menu-item").on("click", function () {
    const siderSubmenu = $(this).children(".sider-submenu");
    if (siderSubmenu && siderSubmenu.length) {
      siderSubmenu.slideToggle(375);
    }
  });

  // date picker
  $(".date-picker").each(function () {
    $(this).datepicker({
      autoclose: true,
      format: "dd-M-yyyy",
    });
  });
});
