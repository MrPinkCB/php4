<?php



echo '<table border="1" style="margin: auto;">
        <tbody>';


$xml_location = "fav_movies.xml";

if(file_exists($xml_location)){
        
        $xml = simplexml_load_file($xml_location);
        $col = 0;
        foreach($xml->Movie as $movie)
        {
        $title = $movie->Title;
        $picture = $movie->Picture;
        $director = $movie->Director;
        $main_actor = $movie->MainActor;
        $imdb = $movie->IMDB;
        $year = $movie->Year;
        $genre = $movie->Genre;

        $col = $col + 1;
        if($col == 0){
                echo "<tr><td>
                        <img src='".$picture."' alt='".$title."' style='width: 100%; height: 150px'><br>
                        <h4>".$title." (".$year.")</h4>
                        <p>Director: ".$director."</p>
                        <p>Main Actor/Actress: ".$main_actor."</p>
                        <p>Genre: ".$genre."</p>
                        </td>";
        } else if($col == 3){
                echo "<td>
                        <img src='".$picture."' alt='".$title."' style='width: 100%; height: 150px'><br>
                        <h4>".$title." (".$year.")</h4>
                        <p>Director: ".$director."</p>
                        <p>Main Actor/Actress: ".$main_actor."</p>
                        <p>Genre: ".$genre."</p>
                </td></tr>";
                $col = 0;
        } else{
                echo "<td>
                        <img src='".$picture."' alt='".$title."' style='width: 100%; height: 150px'><br>
                        <h4>".$title." (".$year.")</h4>
                        <p>Director: ".$director."</p>
                        <p>Main Actor/Actress: ".$main_actor."</p>
                        <p>Genre: ".$genre."</p>
                </td>";
        }   
        }

        echo "</tbody></table>";
} else{
        echo '"'.$xml_location.'" File Does not Exist...';
}

?>
