<?php
$curl = curl_init();

$url = "http://www.imdb.com/search/title" . "?year=2000,2000&title_type=
feature&sort=moviemeter,asc&page=76&ref_=adv_nxt";

$result = curl_exec($curl);

$movies = array();

//match movie title
preg_match_all('!<a href="\/title\/.*?\/\?ref_=adv_li_tt"\n>(.*?)<\/a>!',
$result, $match);
$movies['name'] = $match[1];

//match year
preg_match_all('!<span class="lister-item-year text-muted unbold">.*?\((\d{4})\)
<\/span>!', $result, $match);
$movies['year'] = $match[1];

//match image url
preg_match_all('!loadlate="(.*?)"!', $result, $match);
$movies['image'] = $match[1];

//match certificate, runtime, genre block
preg_match_all("!<p class=\"text-muted\s\">(.*?)<\/p>!is", $result, $match);

//match certificate, runtime, genre individualy from above block
for ($i = 0; $i < count($match[1]); $i++) {

  //match certificate
  if (preg_match('!<span class="certificate">(.*?)<\/span>!', $match[1][$i],
  $certificate)) {
      $movies['certificate'][$i] = $certificate[1];
  } else {
      $movies['certificate'][$i] = '';
  }

  //match runtime
  if (preg_match('!<span class="runtime">(\d{2,3}) min<\/span>!', $match[1][$i],
  $runtime)) {
      $movies['runtime'][$i] = $runtime[1];
  } else {
      $movies['runtime'][$i] = '';
  }
  //match genre
  if (preg_match('!<span class="genre">\n(.*?)\s*?<\/span>!', $match[1][$i], $genre)) {
      $movies['genre'][$i] = $genre[1];
  } else {
      $movies['genre'][$i] = '';
  }
}

//match ratings bar block
preg_match_all('!<div class="ratings-bar">(.*?)<\/span>!is', $result, $match);









//
