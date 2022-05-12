$(document).ready(function () {
  $(".search-btn").click(function () {
    let resultsearch = $("#search-input").val();
    window.location = "recherche.php?search=" + resultsearch;
  });

  $(".btn-goto-list").click(function () {
    let resultsearch = $(this).attr("data-id");
    window.location = "element.php?id=" + resultsearch;
  });
});
