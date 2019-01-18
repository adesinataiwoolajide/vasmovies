
<?php
   	function gettingCinemaMoves($cinema_id){
   		return \DB::table('movies')->where([
   			"cinema_id" => $cinema_id
   		])->get();
   	}

   	function gettingMoives($id){
   		return \DB::table('movies')->where([
   			"id" => $id
   		])->get();
   	}

   	function gettingMoivesId($id, $cinema_id){
   		return \DB::table('movies')->where([
   			"id" => $id,
   			"cinema_id" => $cinema_id,
   		])->get();
   	}

   	function gettingCinemaMovesHowtimes($cinema_id){
   		return \DB::table('show_times')->where([
   			"cinema_id" => $cinema_id,
   		])->get();
   	}

      function gettingCinemaMovies($cinema_id, $movie_id){
         return \DB::table('show_times')->where([
            "cinema_id" => $cinema_id,
            "movie_id" => $movie_id,
         ])->get();
      }

   	function cinemaDetais($cinema_id){
   		return \DB::table('cinemas')->where([
   			"id" => $cinema_id,
   		])->get();
	   }
	   
	   function gettingCinemaday($day){
		return \DB::table('show_times')->where([
			"show_day" => $day,
		])->get();
	}
   
?>