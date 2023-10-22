
  var input = document.querySelector("#phone");
  var iti = window.intlTelInput(input, {
      separateDialCode: true,
      utilsScript: "/js/utils.js"
  });
  