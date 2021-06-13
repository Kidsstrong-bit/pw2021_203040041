<?php
  require "../php/functions.php";
  $mahasiswa = cari($_GET['keyword']);
  ?>

<button class="btn btn-info"><a href="php/login.php" style="text-decoration: none; color: black;">Masuk ke halaman admin</a></button>
    <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0" style="background-color: #00adb5;">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>


    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['img']; ?>"></td>
        <td><?= $mhs['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $mhs['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>