<table border="1" style="border-collapse:collapse">
    <tr bgcolor="#eee">
        <th width="100">Nama</th>
        <th width="120">Alamat</th>
        <th width="100">Hobi</th>
    </tr>

    <?php 
    include "soal3a.php";

    $ambildata = mysqli_query($conn, "SELECT * FROM person, hobi 
    WHERE person.id = hobi.person_id") or die (mysqli_error($conn));

    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td align='center'>$tampil[nama]</td>
            <td align='center'>$tampil[alamat]</td>
            <td align='center'>$tampil[hobi]</td>
        <tr>";
    }
    ?>
</table>
<table>
    
    <?php 
    echo "<form method='POST' action=''>";
        echo "<input type='text' name='cari'>";
        echo "<button type='submit' name'tombol_cari'>SEARCH</button>";
    echo "</form>";

    echo "<tr bgcolor='#eee'>";
        echo "<th width='100'>Nama</th>";
        echo "<th width='120'>Alamat</th>";
        echo "<th width='100'>Hobi</th>";
    echo "</tr>";

    if (isset($_POST['tombol_cari'])) {
        $ambildata = mysqli_query($conn, "SELECT * FROM person, hobi 
        WHERE person.id = hobi.person_id WHERE nama LIKE '%$_POST[cari]%'") ;
    }

    

    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td align='center'>$tampil[nama]</td>
            <td align='center'>$tampil[alamat]</td>
            <td align='center'>$tampil[hobi]</td>
        <tr>";
    }
    ?>
</table>

