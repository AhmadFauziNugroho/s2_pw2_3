<?php
$array_mahasiswa=[
    [
        'nama' => 'udin',
        'mata_kuliah' => 'Pemrograman Web 2',
        'nilai_uts' => 90,
        'nilai_uas' => 85,
        'nilai_tugas' => 78,
    ],[
        'nama' => 'ucup',
        'mata_kuliah' => 'Basis Data',
        'nilai_uts' => 86,
        'nilai_uas' => 91,
        'nilai_tugas' => 80,
    ]
];

if(isset($_POST['submit'])){
    $nama = $_POST['nama_mahasiswa'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_tugas = $_POST['nilai_tugas'];

    // data baru mahasiswa
    $data_mahasiswa_baru =[
        'nama' => $nama,
        'mata_kuliah' => $mata_kuliah,
        'nilai_uts' => $nilai_uts,
        'nilai_uas' => $nilai_uas,
        'nilai_tugas' => $nilai_tugas,
    ];
    // menyimpan data mahasiswa
    array_push($array_mahasiswa, $data_mahasiswa_baru);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
      <div class="mt-4 d-flex justify-content-between">
        <h3>Daftar Nilai Mahasiswa</h3>
        <a href="form_nilai.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
      </div>
      <div class="table-responsive mt-3">
        <table class="table table-striped">
          <thead>

            <tr>
              <th>#</th>
              <th>Nama Mahasiswa</th>
              <th>Mata Kuliah</th>
              <th>Nilai UTS</th>
              <th>Nilai UAS</th>
              <th>Nilai Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor = 1;
            foreach($array_mahasiswa as $key => $value) :
            ?>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $value['nama']?></td>
                <td><?= $value['mata_kuliah']?></td>
                <td><?= $value['nilai_uts']?></td>
                <td><?= $value['nilai_uas']?></td>
                <td><?= $value['nilai_tugas']?></td>
                <td>
                    <?php
                    $rata_rata = ($value['nilai_uts'] + $value['nilai_uas'] + $value['nilai_tugas']) / 3;
                    echo number_format($rata_rata, 1);
                    ?>
                </td>
                <td>
                    <?php
                    if($rata_rata >= 85 && $rata_rata <= 100){
                        echo "A";
                    } elseif ($rata_rata >= 70 && $rata_rata < 85){
                        echo "B";
                    } elseif ($rata_rata >= 56 && $rata_rata < 70){
                        echo "C";
                    } elseif ($rata_rata >= 36 && $rata_rata < 56){
                        echo "D";
                    } elseif ($rata_rata >= 0 && $rata_rata < 36){
                        echo "E";
                    } 
                    ?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>