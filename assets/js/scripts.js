$(function () {
  $(".ui-tabs").each(function () {
    $(this).tabs();
  });

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
      selectedPopover.fadeIn(375);
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
        height: selectedPopover.innerHeight() + 2,
      });
    }
  });

  // siderbar submenu
  $(".sider-menu-item-link, .sider-submenu-item-link").on("click", function () {
    const parent = $(this).parent();
    const siderSubmenu = parent.children(".sider-submenu");
    if (siderSubmenu && siderSubmenu.length) {
      if (parent.hasClass("active")) {
        setTimeout(function () {
          parent.removeClass("active");
        }, 375);
        siderSubmenu.slideUp(375);
      } else {
        parent.addClass("active");
        siderSubmenu.slideDown(375);
      }
    }
  });

  $("[data-collapse]").on("click", function () {
    const selectedCollapse = $($(this).data("collapse"));
    if (selectedCollapse) {
      if (selectedCollapse.hasClass("show")) {
        selectedCollapse.slideUp(375);
        $(this).attr("data-collapse-status", "close");
        if ($(this).attr("data-collapse-parent")) {
          $($(this).attr("data-collapse-parent")).attr(
            "data-collapse-status",
            "close"
          );
        }
        setTimeout(function () {
          selectedCollapse.removeClass("show");
        }, 375);
      } else {
        selectedCollapse.slideDown(375);
        $(this).attr("data-collapse-status", "open");
        if ($(this).attr("data-collapse-parent")) {
          $($(this).attr("data-collapse-parent")).attr(
            "data-collapse-status",
            "open"
          );
        }
        setTimeout(function () {
          selectedCollapse.addClass("show");
        }, 375);
      }
    }
  });

  // date picker
  $(".date-picker").each(function () {
    $(this).datepicker({
      autoclose: true,
      format: "dd-M-yyyy",
    });
  });

  $("[data-trigger-modal]").on("click", function () {
    const button = $(this);
    const modal = $(button.data("trigger-modal"));
    if (modal.length) {
      modal.addClass("show");
    }
  });
  $("[data-dismiss-modal]").on("click", function () {
    const button = $(this);
    const modal = $(button.data("dismiss-modal"));
    if (modal.length) {
      modal.addClass("hiding");
      setTimeout(function () {
        modal.removeClass("show hiding");
      }, 400);
    }
  });

  $(".modal").on("click", function (e) {
    const modal = $(this);
    if (modal.length && e.target === this) {
      modal.addClass("hiding");
      setTimeout(function () {
        modal.removeClass("show hiding");
      }, 400);
    }
  });

  $(".js-select2").select2({
    templateResult: formatState,
    templateSelection: formatState,
  });

  function formatState(opt) {
    var optimage = $(opt.element).attr("data-img");
    if (optimage) {
      let $opt = $(
        `<div class="row gx-2 align-items-center">
          <div class="col-auto d-flex align-items-center"><img src="${optimage}" class="select2-dp-image" /></div>
          <div class="col font-normal font-weight-sm">${opt.text}</div>
        </div>`
      );
      return $opt;
    }
    return `<div class="font-normal font-weight-sm">${opt.text}</div>`;
  }
});
