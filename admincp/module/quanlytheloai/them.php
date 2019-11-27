
    <style> 
        table{
          width: 100%;
          border: 1.5px solid black;
        }
        table tr td{
            border: 1px solid black;  
        }
        .tr1 td{
            text-align:  center;
        }
        .tr2 td{
            text-align:  center;
        }
        .tr3 td{
            text-align:  center;
        }
        .tr4 td{
            text-align:  center;
        }
    </style>
<form action="module/quanlytheloai/xulythem.php" method="post">
    <table>
        <tr class="tr1">
            <td colspan="2"><div>Thêm loại sách</div></td>
        </tr>
        <tr class="tr2">
            <td>Tên loại sách</td>
            <td><input type="text" name="tentheloai" size="60" placeholder="Nhập tên thể loại"></td>
        </tr>
        <tr class="tr3">
            <td>Thứ tự</td>
            <td><input type="text" name="thutu" size="60" placeholder="Nhập mã..."></td>
        </tr>
        <tr class="tr4">
            <td colspan="2"><input type="submit" name="them" id="them" value="Thêm"></td>
        </tr>
    </table>
    </form>