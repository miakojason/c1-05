<h1>新增主選單</h1>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>主選單名稱</td>
            <td>主選單連結網址</td>
        </tr>
        <tr>
            <td><input type="text" name="text" id=""></td>
            <td><input type="text" name="href" id=""></td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>