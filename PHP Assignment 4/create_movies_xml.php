<?php

$xml = new SimpleXMLElement('<xml/>');

$movie = $xml->addChild('Movie');
$movie->addChild('Title', "Alien");
$movie->addChild('Picture', htmlspecialchars("https://upload.wikimedia.org/wikipedia/en/c/c3/Alien_movie_poster.jpg"));
$movie->addChild('Director', "Ridley Scott");
$movie->addChild('MainActor', "Sigourney Weaver");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0078748/?ref_=fn_al_tt_1"));
$movie->addChild('Year', "1979");
$movie->addChild('Genre', "Sci-Fi");


$movie = $xml->addChild('Movie');
$movie->addChild('Title', "There Will Be Blood");
$movie->addChild('Picture', htmlspecialchars("https://www.tvguide.com/a/img/catalog/provider/1/2/1-770051625.jpg"));
$movie->addChild('Director', "Paul W. Anderson");
$movie->addChild('MainActor', "Daniel-Day Lewis");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0469494/?ref_=fn_al_tt_1"));
$movie->addChild('Year', "2007");
$movie->addChild('Genre', "Drama");


$movie = $xml->addChild('Movie');
$movie->addChild('Title', "The Matrix");
$movie->addChild('Picture', htmlspecialchars("https://m.media-amazon.com/images/I/71D8+NFLZmL._AC_SY445_.jpg"));
$movie->addChild('Director', "Lana Wachowski, Lilly Wachowski");
$movie->addChild('MainActor', "Lilly Wachowski");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0133093/"));
$movie->addChild('Year', "1999");
$movie->addChild('Genre', "Action, Sci-Fi");


$movie = $xml->addChild('Movie');
$movie->addChild('Title', "Inception");
$movie->addChild('Picture', htmlspecialchars("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtx_AR47xwOxS-8KxS1pCh4haU59Qcm3miyQ&usqp=CAU"));
$movie->addChild('Director', "Christopher Nolan");
$movie->addChild('MainActor', "Leonardo DiCaprio");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt1375666/?ref_=tt_sims_tt_t_1"));
$movie->addChild('Year', "2010");
$movie->addChild('Genre', "Action");


$movie = $xml->addChild('Movie');
$movie->addChild('Title', "Interstellar");
$movie->addChild('Picture', htmlspecialchars("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM_TXlq1YwJ9hJhLaDTpJEb1_QudrSQ6j8YQ&usqp=CAU"));
$movie->addChild('Director', "Christopher Nolan");
$movie->addChild('MainActor', "Matthew McConaughey");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0816692/?ref_=tt_sims_tt_t_1"));
$movie->addChild('Year', "2014");
$movie->addChild('Genre', "Sci-Fi");


$movie = $xml->addChild('Movie');
$movie->addChild('Title', "Gladiator");
$movie->addChild('Picture', htmlspecialchars("https://d2e111jq13me73.cloudfront.net/sites/default/files/styles/product_image_aspect_switcher_170w/public/product-images/csm-movie/gladiator-poster.jpg?itok=wJ_O8kje"));
$movie->addChild('Director', "Ridley Scott");
$movie->addChild('MainActor', "Russell Crowe");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0172495/?ref_=fn_al_tt_1"));
$movie->addChild('Year', "2000");
$movie->addChild('Genre', "Action");


$movie = $xml->addChild('Movie');
$movie->addChild('Title', htmlspecialchars("Dawn of the Dead"));
$movie->addChild('Picture', htmlspecialchars("https://m.media-amazon.com/images/M/MV5BMzc1YTIyNjctYzhlNy00ZmYzLWI2ZWQtMzk4MmQwYzA0NGQ1XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_FMjpg_UX1000_.jpg"));
$movie->addChild('Director', "George A. Romero");
$movie->addChild('MainActor', "David Emge");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0077402/?ref_=fn_al_tt_2"));
$movie->addChild('Year', "1978");
$movie->addChild('Genre', "Horror");


$movie = $xml->addChild('Movie');
$movie->addChild('Title', "Terminator 2 ");
$movie->addChild('Picture', htmlspecialchars("https://m.media-amazon.com/images/M/MV5BMGU2NzRmZjUtOGUxYS00ZjdjLWEwZWItY2NlM2JhNjkxNTFmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg"));
$movie->addChild('Director', "James Cameron");
$movie->addChild('MainActor', "Arnold Schwarzenegger");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0103064/?ref_=fn_al_tt_1"));
$movie->addChild('Year', "1991");
$movie->addChild('Genre', "Action");


$movie = $xml->addChild('Movie');
$movie->addChild('Title', "Psycho");
$movie->addChild('Picture', htmlspecialchars("https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Psycho_%281960%29_theatrical_poster_%28retouched%29.jpg/1200px-Psycho_%281960%29_theatrical_poster_%28retouched%29.jpg"));
$movie->addChild('Director', "Alfred Hitchcock");
$movie->addChild('MainActor', "Anthony Perkins");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0054215/?ref_=fn_al_tt_1"));
$movie->addChild('Year', "1960");
$movie->addChild('Genre', "Horror");



$movie = $xml->addChild('Movie');
$movie->addChild('Title', "Inglourious Basterds");
$movie->addChild('Picture', htmlspecialchars("https://m.media-amazon.com/images/M/MV5BOTJiNDEzOWYtMTVjOC00ZjlmLWE0NGMtZmE1OWVmZDQ2OWJhXkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_.jpg"));
$movie->addChild('Director', "Brad Pitt");
$movie->addChild('MainActor', "Quentin Tarintino");
$movie->addChild('IMDB', htmlspecialchars("https://www.imdb.com/title/tt0361748/"));
$movie->addChild('Year', "2009");
$movie->addChild('Genre', "Drama");

$file_name = "fav_movies.xml";

$xml->asXML($file_name);

echo '"'.$file_name.'" Created Succesfully...';

?>