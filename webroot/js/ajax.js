$(document).ready(function () {
  $("#addVehicle").click(function () {
    $.get(
      "/vehicles/add",
      null
    );
  });

  $("#addBrand").click(function () {
    $.get(
      "/brands/add",
      null
    );
  });

  $("#listBrands").click(function () {
    $.get(
      "/brands"
    );
    document.location.href = "/brands";
  });

  $("#listVehicles").click(function () {
    $.get(
      "/vehicles"
    );
    document.location.href = "/vehicles";
  });
  
  $("#reactApp").click(function () {
    $.get(
      "http://localhost:3000"
    );
    document.location.href = "http://localhost:3000";
  });
});