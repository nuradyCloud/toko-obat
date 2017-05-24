<!DOCTYPE html>
<html>
    <head>
        <title>Simple CRUD By nuradyCloud</title>
    </head>
    <body>
        <h2>Simple CRUD</h2>

        <p><a href="Agent.php">Show Data</a></p> / <a href="AddAgent.php">Add Data</a></p>

    <h3>Add Data Agent</h3>

    <form action="AddSave.php" method="post">
        <table cellpadding="3" cellspacing="0">
            <tr>
                <td>Agent ID</td>
                <td>:</td>
                <td><input type="text" name="idAgent" size="4" maxlength="4" required></td>
            </tr>
            <tr>
                <td>Agent Name</td>
                <td>:</td>
                <td><input type="text" name="nameAgent" size="25" maxlength="25" required></td>
            </tr>
            <tr>
                <td>Addres</td>
                <td>:</td>
                <td><input type="text" name="addressAgent" size="50" maxlength="50" required></td>
            </tr>
            <tr>
                <td>Handphone</td>
                <td>:</td>
                <td><input type="text" name="hpAgent" size="13" maxlength="13" onkeypress="return isNumber(event);" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <script type="text/javascript">
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
    </script>

</body>
</html>