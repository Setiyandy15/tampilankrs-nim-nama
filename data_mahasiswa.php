<!DOCTYPE html>
<html>
    <body>
        <form action="action-input-data.php" method="POST">
            <table align="center" border="1" cellpadding="0">
                <tr align="center"><td><h2> <b>Data Mahasiswa</b></h2></td></tr>
                <tr>
                    <td>
                    <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>NIM</td>
                            <td> : </td>
                            <td><input name="nim[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><input name="nama[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Kode Matkul</td>
                            <td> : </td>
                            <td><input name="kode[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Nama Matkul</td>
                            <td> : </td>
                            <td><input name="matkul[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>SKS</td>
                            <td> : </td>
                            <td><input name="sks[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td> : </td>
                            <td>
                                <input type="radio" name="kelas" value="A"><label for="A">A</label>
                                <input type="radio" name="kelas" value="B"><label for="B">B</label>
                            </td>
                        </tr>
                        <tr>
                             <td>Semester</td>
                             <td> : </td>
                             <td>
                             <input type="radio" name="semester" value="1"><label for="1">1</label>
                             <input type="radio" name="semester" value="3"><label for="3">3</label>
                             <input type="radio" name="semester" value="5"><label for="5">5</label>
                             <input type="radio" name="semester" value="7"><label for="7">7</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"><input type="submit" name="btnOk" value="Submit" /></td>
                        </tr>
                    </table>
                    </td>
                </tr>
                </table>
        </form>
    </body>
</html>