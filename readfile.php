<?php
 
$filename = 'https://github.com/petrgdanskii/rock_paper_scissors/blob/main/small.txt';
$book_content = file_get_contents($filename);

file_put_contents('https://github.com/petrgdanskii/rock_paper_scissors/blob/main/smalltest.txt', $book_content, LOCK_EX);
 
?>
