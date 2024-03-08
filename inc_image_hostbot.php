if(isset($message->photo)){
    $Photo = $message->photo;
    $Photo_File_id = $Photo[count($Photo) - 1]->file_id;
    $Photo_Path = bot('getfile', ['file_id' => $Photo_File_id])->result->file_path;
    $Photo_extension = pathinfo($Photo_Path, PATHINFO_EXTENSION);
        file_put_contents('Photo.'.$Photo_extension , file_get_contents('https://api.telegram.org/file/bot' . API_KEY . '/' . $Photo_Path));
        }