<?php 
require_once('form.php');
require_once('db.php');

class UserForm
{
      public $nim= '';
      public $nama= '';
      public $gender= '';
      public $alamat= array();

      function input_data()
      {
        $form = new form("", "simpan");
        $form->displayFormUser();
      }

      function terima_data()
      {
        $this->nim=isset($_POST['nim']) ? $_POST['nim'] :'';
        $this->nama=isset($_POST['nama']) ? $_POST['nama'] :'';
        $this->gender=isset($_POST['gender']) ? $_POST['gender'] :'';           
    $this->alamat=isset($_POST['alamat']) ? $_POST['alamat']:array();
      }

      function cetak_data()
    {
        echo "NIM : " . htmlspecialchars($this->nim) . "<br/>";
        echo "Nama : " . htmlspecialchars($this->nama) . "<br/>";
        echo "Jenis Kelamin : " . htmlspecialchars($this->gender) . "<br/>";
        echo "Alamat Utama : " . htmlspecialchars(implode(', ', $this->alamat)) . "<br/>";
    }
}

// Runner only when accessed directly
if (isset($_SERVER['SCRIPT_FILENAME']) && realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'])) {
    $user = new UserForm();
    if (!isset($_POST['tombol'])) {
        $user->input_data();
    } else {
        $user->terima_data();
        $user->cetak_data();
    }
}
  
