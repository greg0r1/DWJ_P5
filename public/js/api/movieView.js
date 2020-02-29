$.getJSON("https://api.themoviedb.org/3/discover/movie?api_key=30a2a499659accea2844d75ec6cb8be3&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1", function (element) {
  let movies = element.results;
  let title = movies[i].title;
  let date = movies[i].release_date;
  let imageMovie = movies[i].poster_path;
  let vote_average = movies[i].vote_average;
  let overview = movies;
  articleElement(title, date, imageMovie, vote_average, id);
});

function articleElement(title, date, imageMovie, vote_average, id) {
  $(".album .row").append('<div class="col-md-4"><div class="card mb-4 shadow-sm"><img src="https://image.tmdb.org/t/p/original' + imageMovie + '" class="card-img-top"/><div class="card-body"><h5 class="card-text">' + title + '</h5><div class="rateStar"></div><div class="d-flex justify-content-between align-items-center"><div class="btn-group"><button onclick="window.location.href = "index.php?action=movieView&list=popularMovie&id=' + id + "&title=" + title + '" type="button" class="btn btn-sm btn-outline-secondary">Voir la fiche</button></div><small class="text-muted">' + date + "</small></div></div></div></div>");
  $(".rateStar").rateYo({
    rating: vote_average * 10 + "%",
    starWidth: "20px",
    numStars: 5,
    readOnly: true
  });
}
