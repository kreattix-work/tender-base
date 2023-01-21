$(function () {
  // close popover
  $("body, html").on("click", function (e) {
    const elements = $(".popover-dialog, [data-trigger-popover]");
    if (!elements.is(e.target) && elements.has(e.target).length <= 0) {
      $(".popover-dialog").fadeOut(375);
    }
  });
  $(".close-popover").on("click", function () {
    console.log("test");
    $(".popover-dialog").fadeOut(375);
  });

  // popover
  $("[data-trigger-popover]").on("click", function (e) {
    $(".popover-dialog:not(" + $(this).data("trigger-popover") + ")").fadeOut(
      375
    );
    const selectedPopover = $($(this).data("trigger-popover"));
    if (selectedPopover) {
      selectedPopover.fadeToggle(375);
      let topOffset = $(this).offset().top + $(this).height() - window.scrollY;
      let leftOffset = $(this).offset().left;

      topDiff =
        topOffset + selectedPopover.innerHeight() - window.innerHeight + 10;

      leftDiff =
        leftOffset + selectedPopover.innerWidth() - window.innerWidth + 10;

      if (topDiff > 0) {
        topOffset = topOffset - topDiff;
      }
      if (leftDiff > 0) {
        leftOffset = leftOffset - leftDiff;
      }
      selectedPopover.css({
        top: topOffset,
        left: leftOffset,
      });
    }
  });

  // siderbar submenu
  $(".sider-menu-item-link").on("click", function () {
    const siderSubmenu = $(this).parent().children(".sider-submenu");
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
