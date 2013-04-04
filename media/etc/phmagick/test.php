<?


include 'phmagick.php';
$phMagick = new phMagick('source.jpg', 'resized.jpg');
$phMagick->debug=true;
$phMagick->resize(200,0);
echo '<img src="resized.jpg">';
echo "<pre>", print_r($phMagick->getLog()) , '</pre>';


?>