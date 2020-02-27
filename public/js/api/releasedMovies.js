$.getJSON("https://api.themoviedb.org/3/discover/movie?api_key=30a2a499659accea2844d75ec6cb8be3&language=fr-FR&primary_release_year=2019&include_adult=false&include_video=false&page=1", function (element) {
  let movies = element.results;
  for (var i = 0; i < 10; i++) {
    let title = movies[i].title;
    let date = movies[i].release_date;
    let overview = movies[i].overview;
    let imageMovie = movies[i].poster_path;
    articleElement(title, date, overview, imageMovie);
  }
});

function articleElement(title, date, overview, imageMovie) {
  $("#articles>div>div>div").append('<div class="col-md-4"><div class="card mb-4 shadow-sm"><div class="card-body"><picture><img src="https://image.tmdb.org/t/p/original' + imageMovie + '"  class="bd-placeholder-img card-img-top" /></picture><h2>' + title + '</h2><p><time datetime="' + date + '">' + date + '</time></p><p class="overview">' + overview + "</p></div></div></div>");
}
