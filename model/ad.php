<h1>新增動態文字廣告</h1>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>動態文字廣告:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>