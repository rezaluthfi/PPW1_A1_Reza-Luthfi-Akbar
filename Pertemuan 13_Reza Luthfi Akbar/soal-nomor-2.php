<!-- array multidimensi dan tampilkan dengan menggunakan sebuah kondisi/percabangan -->
<?php
// Membuat array multi dimensi dengan beberapa data
$data_array = array(
    array(10, 20, 30),
    array(40, 50, 60),
    array(70, 80, 90)
);

// Menentukan nilai threshold
$threshold = 50;

echo "Menampilkan elemen array yang lebih besar dari $threshold :<br>";

foreach ($data_array as $sub_array) {
    foreach ($sub_array as $data) {
        if ($data > $threshold) {
            echo $data . "<br>";
        }
    }
}
?>
