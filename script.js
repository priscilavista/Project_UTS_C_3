function toogleSidebar() {
  const side = document.querySelector("#app .sidebar");
  side.classList.toggle("sidebar-hide");
}

function validatePhone() {
  const phone = document.querySelector("#phone");
  const check = /^([0][8][0-9]{8,11})$/;

  if (check.test(phone.value)) {
    phone.classList.remove("is-invalid");
    return true;
  } else {
    phone.classList.add("is-invalid");
    return false;
  }
}

function validatePrice() {
  const harga = document.querySelector("#harga");
  var check = /^([0][8][0-9])$/;

  if (check.test(harga.value)) {
    harga.classList.remove("is-invalid");
    return true;
  } else {
    harga.classList.add("is-invalid");
    return false;
  }
}

function validateStock() {
  const stock = document.querySelector("#stock");

  if (is_numeric(stock)) {
    stock.classList.remove("is-invalid");
    return true;
  } else {
    stock.classList.add("is-invalid");
    return false;
  }
}

(function () {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  for (let form of forms) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity() || !validatePhone) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  }
})();
