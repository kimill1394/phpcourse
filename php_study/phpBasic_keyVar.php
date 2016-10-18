<?php


#####################################       var

$_GET["key"]
    # if(method==get) -> if(name==key) return value

$_POST["key"]
    # if(method==post) -> if(name==key) return value

$_SERVER["SCRIPT_NAME"]
    # return current script's path

__FILE__
    # return current script's path + script's name



#####################################       method

htmlspecialchars($stringFromClient);
    # change special character to html-string in stringFromClient

isset($contents);
    # if contents exist(and set) return true
    # isset($_POST["key"])  if key's value exist return true

date('format');
    # return format_date
    # referense 'dateFormat_example.php'

intval($variable);
    # return variable as int
    # if variable is null array return 0, else return 1

rand($min, $max);
    # return random integer from min to max

urlencode($urlString);
    # return urlString as url

include 'filename.file';
    # call filename.file all in caller


#####################################       method in ArrayObject

array_shift($array);
    # return array[0] and remove

array_unshift($array, $value)
    # value input to startPoint of Array

array_pop($array)
    # return array[END] and remove

array_push($array, $value)
    # value input to endPoint of Array

array_reverse($array)
    # return array that has reverse index

count($array)
    # return count of array's value

print_r($array)
    # print to window array's value

file("fileFormat")
    # return array that has value in fileFormat by line

array_slice($array, $startindex, $count)
    # return array that is cutted from array
    # where (startindex <= indext < startindex+count)

array_splice($array, $startIndex, $count, $replaceArray)
    # return array that is cutted from array
    # And replace value from replaceArray


sort($array [sort_falgs])
    # sort_falg: http://php.net/manual/en/function.sort.php



#####################################       etc.

echo <<<HEREDOC
    # <<<STRING
    # (can't exist anything)STRING;(can't exist anything)
HEREDOC;

global
    # external variable can use in specific method

foreach($array as $value) {
    # return array[INDEX] as value until end of array
}

foreach($array as $key => $value) {
    # return array[key] as value
}

 ?>
