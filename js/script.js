$(document).ready(function () {
  home();
});
function home() {
  $.post("view/home.php", {}, function (data) {
    $("#LoadDetails").html(data);
  });
}
function votingcenter() {
  $.post("view/vc.php", {}, function (data) {
    $("#LoadDetails").html(data);
  });
}
function viewvote() {
  $.post("view/myvote.php", {}, function (data) {
    $("#LoadDetails").html(data);
  });
}
