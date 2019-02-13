<?php
// Koneksi
$con = mysqli_connect('localhost','root','','metode_saw');
// Header
echo "<h1>Kasus</h1>";
$sql = "select * from kasus";
$kasus = mysqli_query($con, $sql);
// Kasus
echo "
<table border=1>
  <tr>
    <th>NO</th>
    <th>ALTERNATIF</th>
    <th>C1</th>
    <th>C2</th>
    <th>C3</th>
    <th>C4</th>
  </tr>";
$no = 1;
  foreach ($kasus as $data) {
    echo "
    <tr>
      <td>$no</td>
      <td>".$data['alt']."</td>
      <td>".$data['C1']."</td>
      <td>".$data['C2']."</td>
      <td>".$data['C3']."</td>
      <td>".$data['C4']."</td>
    </tr>";
    $no ++;
  }
  echo "
  </table>
  <hr>";
  // Perhitungan 
  // Normalisasi Persamaan 1
  echo "<h2>Normalisasi Persamaan 1</h2>";
  echo "<table border=1>
    <tr>
      <th>ALTERNATIF</th>
      <th>NORMALISASI C1</th>
      <th>NORMALISASI C2</th>
      <th>NORMALISASI C3</th>
      <th>NORMALISASI C4</th>
    </tr>";
$r1 = mysqli_query($con, "select * from kasus where alt='A1'");
$r2 = mysqli_query($con, "select * from kasus where alt='A2'");
$r3 = mysqli_query($con, "select * from kasus where alt='A3'");
$r4 = mysqli_query($con, "select * from kasus where alt='A4'");

$d1 = mysqli_fetch_array($r1);
$d2 = mysqli_fetch_array($r2);
$d3 = mysqli_fetch_array($r3);
$d4 = mysqli_fetch_array($r4);
$max = mysqli_query($con, "select max(C1) as 'max1',max(C2) as 'max2',max(C3) as 'max3',max(C4) as 'max4' from kasus");
$e = mysqli_fetch_array($max);
$r11 = ($d1['C1'] / $e['max1'] );
$r12 = ($d1['C2'] / $e['max1'] );
$r13 = ($d1['C3'] / $e['max1'] );
$r14 = ($d1['C4'] / $e['max1'] );

$r21 = ($d2['C1'] / $e['max2'] );
$r22 = ($d2['C2'] / $e['max2'] );
$r23 = ($d2['C3'] / $e['max2'] );
$r24 = ($d2['C4'] / $e['max2'] );

$r31 = ($d3['C1'] / $e['max3'] );
$r32 = ($d3['C2'] / $e['max3'] );
$r33 = ($d3['C3'] / $e['max3'] );
$r34 = ($d3['C4'] / $e['max3'] );

$r41 = ($d4['C1'] / $e['max4'] );
$r42 = ($d4['C2'] / $e['max4'] );
$r43 = ($d4['C3'] / $e['max4'] );
$r44 = ($d4['C4'] / $e['max4'] );
    echo "
    <tr>
      <td>A1</td>
      <td>$r11</td>
      <td>$r12</td>
      <td>$r13</td>
      <td>$r14</td>
    </tr>
    <tr>
      <td>A2</td>
      <td>$r21</td>
      <td>$r22</td>
      <td>$r23</td>
      <td>$r24</td>
    </tr>
    <tr>
      <td>A3</td>
      <td>$r31</td>
      <td>$r32</td>
      <td>$r33</td>
      <td>$r34</td>
    </tr>
    <tr>
      <td>A4</td>
      <td>$r41</td>
      <td>$r42</td>
      <td>$r43</td>
      <td>$r44</td>
    </tr>";
    echo "
  </table><hr>";
  // Normalisasi Persamaan 2
echo "<h2>Normalisasi Persamaan 2</h2>";
echo "<table border=1>
  <tr>
    <th>ALTERNATIF</th>
    <th>NORMALISASI C1</th>
    <th>NORMALISASI C2</th>
    <th>NORMALISASI C3</th>
    <th>NORMALISASI C4</th>
  </tr>";

$b1 = mysqli_query($con, "select * from bobot where id_bobot='B1'");
$b2 = mysqli_query($con, "select * from bobot where id_bobot='B2'");
$b3 = mysqli_query($con, "select * from bobot where id_bobot='B3'");
$b4 = mysqli_query($con, "select * from bobot where id_bobot='B4'");

$v1 = mysqli_fetch_array($b1);
$v2 = mysqli_fetch_array($b2);
$v3 = mysqli_fetch_array($b3);
$v4 = mysqli_fetch_array($b4);

$v11 = ($v1['bobot'] * $r11);
$v12 = ($v2['bobot'] * $r12);
$v13 = ($v3['bobot'] * $r13);
$v14 = ($v4['bobot'] * $r14);
$hv1 = ($v11 + $v12 + $v13 + $v14);

$v21 = ($v1['bobot'] * $r21);
$v22 = ($v2['bobot'] * $r22);
$v23 = ($v3['bobot'] * $r23);
$v24 = ($v4['bobot'] * $r24);
$hv2 = ($v21 + $v22 + $v23 + $v24);

$v31 = ($v1['bobot'] * $r31);
$v32 = ($v2['bobot'] * $r32);
$v33 = ($v3['bobot'] * $r33);
$v34 = ($v4['bobot'] * $r34);
$hv3 = ($v31 + $v32 + $v33 + $v34);

$v41 = ($v1['bobot'] * $r41);
$v42 = ($v2['bobot'] * $r42);
$v43 = ($v3['bobot'] * $r43);
$v44 = ($v4['bobot'] * $r44);
$hv4 = ($v41 + $v42 + $v43 + $v44);
echo "
  <tr>
    <td>V1</td>  
    <td>$v11</td>  
    <td>$v12</td>  
    <td>$v13</td>  
    <td>$v14</td>  
  </tr>
  <tr>
    <td>V2</td>  
    <td>$v21</td>  
    <td>$v22</td>  
    <td>$v23</td>  
    <td>$v24</td>  
  </tr>
  <tr>
    <td>V3</td>  
    <td>$v31</td>  
    <td>$v32</td>  
    <td>$v33</td>  
    <td>$v34</td>  
  </tr>
  <tr>
    <td>V4</td>  
    <td>$v41</td>  
    <td>$v42</td>  
    <td>$v43</td>  
    <td>$v44</td>  
  </tr>
";
echo "
</table>";
echo "<h3>Jumlah Hasil Normalisasi</h3>";
echo "<table border=1>
  <tr>
    <th>ALTERNATIF</th>
    <th>HASIL</th>
  </tr>";

echo "
  <tr>
    <td>V1</td>
    <td>$hv1</td>
  </tr>
  <tr>
    <td>V2</td>
    <td>$hv2</td>
  </tr>
  <tr>
    <td>V3</td>
    <td>$hv3</td>
  </tr>
  <tr>
    <td>V4</td>
    <td>$hv4</td>
  </tr>
  ";

echo "
</table><hr>";
echo "<h2>Urutkan dari yang terbesar</h2>";
echo "
";
echo "<table border=1>
  <tr>
    <th>ALTERNATIF</th>
    <th>HASIL</th>
    <th>KESIMPULAN</th>
  </tr>";

$hasil = array
( '0' => array 
  (
    'hsl' => $hv1,
    'alt' => 'V1'
  ),
  '1' => array 
  (
    'hsl' => $hv2,
    'alt' => 'V2'
  ),
  '2' => array 
  (
    'hsl' => $hv3,
    'alt' => 'V3'
  ),
  '3' => array 
  (
    'hsl' => $hv4,
    'alt' => 'V4'
  )
);

rsort($hasil); // fungsi descending pada array

foreach ($hasil as $key) {
  echo "
  <tr>
  <td>".$key['alt']."</td>
  <td>".$key['hsl']."</td>
  <td>";
  if ($key['hsl'] > 0.89) {
    echo "Sangat Layak";
  } elseif ($key['hsl'] > 0.72) {
    echo "Layak";
  } elseif ($key['hsl'] < 0.72) {
    echo "Tidak Layak";
  } else {
    echo "Error";
  }
  echo "</td>
  </tr>";
}

echo "
</table>";