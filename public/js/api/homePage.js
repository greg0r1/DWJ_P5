// Popular Movies Section + Slider Content
function popular_movies_getJSON() {
  $.getJSON("https://api.themoviedb.org/3/discover/movie?api_key=30a2a499659accea2844d75ec6cb8be3&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1", function (element) {
    let movies_S1 = element.results;
    for (var i = 0; i < 8; i++) {
      let title_S1 = movies_S1[i].title;
      let date_S1 = movies_S1[i].release_date;
      let overview_S1 = movies_S1[i].overview;
      let imageMovie_S1 = movies_S1[i].poster_path;
      let vote_average_S1 = movies_S1[i].vote_average;
      let backdrop_path_S1 = movies_S1[i].backdrop_path;
      popularMovies_Element(title_S1, date_S1, imageMovie_S1, vote_average_S1);
      sliderContent(backdrop_path_S1, i, title_S1, overview_S1);
    }
  });
}
popular_movies_getJSON();

function popularMovies_Element(title_S1, date_S1, imageMovie_S1, vote_average_S1) {
  $("#popularMovies-Card .card-deck").append('<div class="col-xs-12 col-md-3"><div class="card"><img src="https://image.tmdb.org/t/p/original' + imageMovie_S1 + '" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' + title_S1 + '</h5><p><div class="rateStar"></div></p></div><div class="card-footer"><small class="text-muted">Date de sortie: ' + date_S1 + "</small></div></div></div>");
  $(".rateStar").rateYo({
    rating: vote_average_S1 * 10 + "%",
    starWidth: "20px",
    numStars: 5,
    readOnly: true
  });
}

function sliderContent(backdrop_path_S1, i, title_S1, overview_S1) {
  $(".carousel-item:nth-child(" + (
  i + 1) + ") .bd-placeholder-img").css("background-image", 'url("https://image.tmdb.org/t/p/original' + backdrop_path_S1 + '")');
  $(".carousel-item:nth-child(" + (
  i + 1) + ") .carousel-caption>h1").html(title_S1);
  $(".carousel-item:nth-child(" + (
  i + 1) + ") .carousel-caption>p").html(overview_S1);
  $(".carousel-item:nth-child(" + (
  i + 2) + ") .bd-placeholder-img").css("background-image", 'url("https://image.tmdb.org/t/p/original' + backdrop_path_S1 + '")');
  $(".carousel-item:nth-child(" + (
  i + 2) + ") .carousel-caption>h1").html(title_S1);
  $(".carousel-item:nth-child(" + (
  i + 2) + ") .carousel-caption>p").html(overview_S1);
  $(".carousel-item:nth-child(" + (
  i + 3) + ") .bd-placeholder-img").css("background-image", 'url("https://image.tmdb.org/t/p/original' + backdrop_path_S1 + '")');
  $(".carousel-item:nth-child(" + (
  i + 3) + ") .carousel-caption>h1").html(title_S1);
  $(".carousel-item:nth-child(" + (
  i + 3) + ") .carousel-caption>p").html(overview_S1);
}

// Released Movies Section
function released_movies_getJSON() {
  $.getJSON("https://api.themoviedb.org/3/discover/movie?api_key=30a2a499659accea2844d75ec6cb8be3&language=fr-FR&primary_release_year=2019&include_adult=false&include_video=false&page=1", function (element) {
    let movies_S2 = element.results;
    for (var i = 0; i < 8; i++) {
      let title = movies_S2[i].title;
      let date = movies_S2[i].release_date;
      let overview = movies_S2[i].overview;
      let imageMovie = movies_S2[i].poster_path;
      let vote_average = movies_S2[i].vote_average;
      releasedMovies_Element(title, date, overview, imageMovie, vote_average);
    }
  });
}
released_movies_getJSON();

function releasedMovies_Element(title, date, overview, imageMovie, vote_average) {
  $("#releasedMovies-Card .card-deck").append('<div class="col-xs-12 col-md-3"><div class="card"><img src="https://image.tmdb.org/t/p/original' + imageMovie + '" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' + title + '</h5><p><div class="rateStar"></div></p></div><div class="card-footer"><small class="text-muted">Date de sortie: ' + date + "</small></div></div></div>");
  $("#releasedMovies-Card .card-body").after('<div class="d-flex justify-content-between align-items-center"><div class="btn-group"><button onclick="window.location.href = "#"" type="button" class="btn btn-sm btn-outline-secondary">Voir</button><button onclick="window.location.href = "#"" type="button" class="btn btn-sm btn-outline-secondary">Voir</button></div></div></div>');
  $(".rateStar").rateYo({
    rating: vote_average * 10 + "%",
    starWidth: "20px",
    numStars: 5,
    readOnly: true
  });
}

// Top Rated Movies Section
function top_rated_movies_getJSON() {
  $.getJSON("https://api.themoviedb.org/3/discover/movie?api_key=30a2a499659accea2844d75ec6cb8be3&language=fr-FR&sort_by=vote_average.desc&include_adult=false&include_video=false&page=1", function (element) {
    let movies_S3 = element.results;
    for (var i = 0; i < 8; i++) {
      let title = movies_S3[i].title;
      let date = movies_S3[i].release_date;
      let overview = movies_S3[i].overview;
      let imageMovie = movies_S3[i].poster_path;
      let vote_average = movies_S3[i].vote_average;
      topRatedMovies_Element(title, date, overview, imageMovie, vote_average);
    }
  });
}
top_rated_movies_getJSON();

function topRatedMovies_Element(title, date, overview, imageMovie, vote_average) {
  $("#topRatedMovies-Card .card-deck").append('<div class="col-xs-12 col-md-3"><div class="card"><img src="https://image.tmdb.org/t/p/original' + imageMovie + '" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' + title + '</h5><p><div class="rateStar"></div></p></div><div class="card-footer"><small class="text-muted">Date de sortie: ' + date + "</small></div></div></div>");
  $(".rateStar").rateYo({
    rating: vote_average * 10 + "%",
    starWidth: "20px",
    numStars: 5,
    readOnly: true
  });
}