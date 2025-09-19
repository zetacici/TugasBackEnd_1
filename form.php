<?php

class form
{
    var $fields = array();
    var $action;
    var $submit = "";
    var $jumField = 0;

    function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    function displayFormProduct()
    {
        echo "<form action='" . $this->action . "' method='post'>";
        echo "<table widht='100%'>";
        
        // Product Name (text)
        echo "<tr>
	 <td align='right'>Nama Produk</td>";
        echo "<td><input type='text' name='nama_produk'></td>
     </tr>";
        
        // Product ID (text)
        echo "<tr>
	 <td align='right'>ID Produk</td>";
        echo "<td><input type='text' name='id_produk'></td>
     </tr>";
        
        // Product Type (dropdown)
        echo "<tr>
	 <td align='right'>Tipe Produk</td>";
        echo "<td><select name='tipe_produk'>";
        echo "<option value='elektronik'>Elektronik</option>";
        echo "<option value='fashion'>Fashion</option>";
        echo "<option value='makanan'>Makanan</option>";
        echo "<option value='olahraga'>Olahraga</option>";
        echo "<option value='lainnya'>Lainnya</option>";
        echo "</select></td>
     </tr>";
        
        // Description (textarea)
        echo "<tr>
	 <td align='right'>Deskripsi</td>";
        echo "<td><textarea name='deskripsi'></textarea></td>
     </tr>";
        
        echo "<tr><td><input type='submit' name='tombol' 
            value='" . $this->submit . "' ></td></tr>";
        echo "</table>";
    }

    function displayFormUser()
    {
        echo "<form action='" . $this->action . "' method='post'>";
        echo "<table widht='100%'>";
        
        // User Name (text)
        echo "<tr>
	 <td align='right'>Nama</td>";
        echo "<td><input type='text' name='nama'></td>
     </tr>";
        
        // User ID (text)
        echo "<tr>
	 <td align='right'>NIM</td>";
        echo "<td><input type='text' name='nim'></td>
     </tr>";
        
        // Gender (radio)
        echo "<tr>
	 <td align='right'>Jenis Kelamin</td>";
        echo "<td>";
        echo "<label><input type='radio' name='gender' value='pria'> Pria</label> ";
        echo "<label><input type='radio' name='gender' value='wanita'> Wanita</label>";
        echo "</td>
     </tr>";
        
        // Main Address (checkbox)
        echo "<tr>
	 <td align='right'>Alamat Utama</td>";
        echo "<td>";
        echo "<label><input type='checkbox' name='alamat[]' value='Boyolali'> Boyolali</label> ";
        echo "<label><input type='checkbox' name='alamat[]' value='Sukoharjo'> Sukoharjo</label> ";
        echo "<label><input type='checkbox' name='alamat[]' value='Solo'> Solo</label> ";
        echo "<label><input type='checkbox' name='alamat[]' value='Karanganyar'> Karanganyar</label>";
        echo "</td>
     </tr>";
        
        echo "<tr><td><input type='submit' name='tombol' 
            value='" . $this->submit . "' ></td></tr>";
        echo "</table>";
    }
}