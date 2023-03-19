   <?php 
    function updatePlayer(){
    $username = $_POST['gameUsername'];
    $score = $_POST['gameScore'];
    $words = $_POST['gameWords'];
    $current_data = file_get_contents('users.json');
	$array_data = json_decode($current_data, true);
    $extra =[
            'username' => $username,
            'round'=> $round,
            'score' => $score,
            'words'=> $words
    ];
	$array_data[] = $extra;
	$final_data = json_encode($array_data);
    file_put_contents('gameData.json', $final_data);
    }
    updatePlayer()
    ?>