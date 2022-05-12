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
          let datalength = data.length
          $(".listsearch").empty();
          if (datalength <= 2) {
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
