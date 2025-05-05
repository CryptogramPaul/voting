function Logout() {
  $.post("actions/logout.php", {}, function (data) {
    if (jQuery.trim(data) == "success") {
      window.location.href = "index.php";
    } else {
      alert(data);
    }
  });
}
