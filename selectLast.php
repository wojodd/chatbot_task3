
<?php
$hote = '127.0.0.1'; //server
$login = 'root';
$pass = '';
$namedb='tasks';
// عرض بيانات اخر عمود تمت اضافته
$pdo  = new PDO("mysql:host=$hote;dbname=$namedb", $login, $pass);

$stmt = $pdo->query("SELECT * from arm order by id desc limit 1");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table border="1" >'."\n";
foreach ( $rows as $row ) {
echo "<tr><td>";
echo($row['m1']);
echo("</td><td>");
echo($row['m2']);
echo("</td><td>");
echo($row['m3']);
echo "<tr><td>";
echo($row['m4']);
echo("</td><td>");
echo($row['m5']);
echo("</td><td>");
echo($row['m6']);
echo("</td><td>");
echo($row['run']);
//echo("</td><td>");
}
echo "</table>\n";
// سيتم عرض بيانات العمود الاخير على شكل جدول

?>


<?php
$hote = '127.0.0.1'; //server
$login = 'root';
$pass = '';
$namedb='tasks';
// عرض بيانات اخر عمود تمت اضافته
$pdo  = new PDO("mysql:host=$hote;dbname=$namedb", $login, $pass);

$stmt = $pdo->query("SELECT * from base1 order by id desc limit 1");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table border="1" >'."\n";
foreach ( $rows as $row ) {
echo "<tr><td>";
echo($row['right1']);
echo("</td><td>");
echo($row['left1']);
echo("</td><td>");
echo($row['forward']);
echo "<tr><td>";
echo($row['stop']);
echo("</td><td>");
echo($row['backward']);
//echo("</td><td>");
}
echo "</table>\n"; // سيتم عرض بيانات العمود الاخير على شكل جدول 
?>


