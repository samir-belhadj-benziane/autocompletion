$(document).ready(function () {
  $("#search-input").on("input", function () {
    var search = $(this).val();
    if (search != "") {
      $.post(
        "./infos-recherche.php",
        {
          search: search,
        },
        function (data) {
          console.log(data.length);
          $(".listsearch").empty();
          if (data <= 2) {
            $(".listsearch").append('<div class="listset">Type de chat introuvable ...</div>');
          } else {
            $(".listsearch").append(data);
          }
        }
      );
    } else {
      $(".listsearch").empty();
    }
  });
});
