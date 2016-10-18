<meta charset="utf-8">

<?php



echo "id: {$_POST['id']}<br>";
echo "name: {$_POST['name']}<br>";
echo "passwd: {$_POST['passwd']}<br>";
echo "passwd_confirm: {$_POST['passwd_confirm']}<br>";
echo "gender: {$_POST['gender']}<br>";
echo "phone number: {$_POST['phone1']} - {$_POST['phone2']} - {$_POST['phone3']}<br>";
echo "address: {$_POST['address']}<br>";
if(isset($_POST['movie']))
  echo "movie: {$_POST['movie']}<br>";
if(isset($_POST['book']))
  echo "book: {$_POST['book']}<br>";
if(isset($_POST['shop']))
  echo "shop: {$_POST['shop']}<br>";
if(isset($_POST['sport']))
  echo "sports: {$_POST['sport']}<br>";
echo "intro: {$_POST['intro']}<br>";
echo "title: {$_POST['title']}<br>";





 ?>
