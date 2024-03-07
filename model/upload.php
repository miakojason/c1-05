<?php
switch ($_GET['table']) {
    case "title":
        echo "<h3>更新網站標題區圖片</h3>";
        break;
    case "mvim":
        echo "<h3>更新動畫圖片</h3>";
        break;
    case "image":
        echo "<h3>更新校園映像圖片</h3>";
        break;
}
?>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <?php
            switch ($_GET['table']) {
                case "title":
                    echo "<td>網站標題區圖片</td>";
                    break;
                case "mvim":
                    echo "<td>動畫圖片</td>";
                    break;
                case "image":
                    echo "<td>校園映像圖片</td>";
                    break;
            }
            ?>
            <td><input type="file" name="img" id=""></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="更新"><input type="reset" value="重置">
    </div>
</form>