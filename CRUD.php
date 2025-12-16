<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD CSDL KHOA</title>
    <style>
        h2{
            color:#1f2937;
            font-family:Arial,sans-serif;
            margin-bottom:20px;
            text-align:center;
        }

        table{
            border-collapse:separate;   
            border-spacing:0;         
            width:60%;
            margin:0 auto;
            border:1px solid #e5e7eb;
            border-radius:14px;         
            overflow:hidden;            
            box-shadow:0 8px 20px rgba(0,0,0,.08);
            background:#fff;
        }

        th{
            background:#2563eb;        
            color:#fff;
            padding:12px;
            text-align:center;
            border-bottom:1px solid rgba(255,255,255,.2);
        }

        td{
            padding:12px;
            border-top:1px solid #e5e7eb;
            font-family:Arial,sans-serif;
        }

        tr:nth-child(even) td{
            background:#f8fafc;
        }

        tr:hover td{
            background:#eef2ff;
            transition:.15s;
        }
    </style>

</head>
<body>
    <h2>Danh sách khoa</h2>
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "giangdayonline");

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }


    //
    //tạo câu truy vấn Read database Khoa trong 'testdb'
    //
    $sql = "Select Makhoa, Tenkhoa, Ghichu from khoa";
    //thực thi câu lệnh truy vấn 
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) >0) 
    {
        echo "<table border ='1' cellpadding='10' cellspacing='0'>";
        echo "<tr>
                <th>Mã Khoa</th>
                <th>Tên Khoa</th>
                <th>Ghi Chú</th>
             </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" .$row["Makhoa"] ."</td>";
            echo "<td>" .$row["Tenkhoa"] ."</td>";
            echo "<td>" .$row["Ghichu"] ."</td>";
            echo "</tr>";
        }
       echo  "</table>";
    }
    else {
        echo " Không có dữ liệu nào !";
    }


/*
    //
    //test chuc năng ADD database với câu lệnh nhập sẵn DL
    //
    $sql1 = "insert into khoa (Tenkhoa, Ghichu) 
            values ('aaa', 'bbb')";

    if(mysqli_query($conn, $sql1)) {
        echo "Thêm thành công";
    } else {
        echo "Lỗi: " .$sql1 . "<br>" .mysqli_error($conn);
    }
*/

/*
    //
    //test chuc năng update database với câu lệnh nhập sẵn DL
    //

    $sql2 ="update khoa set Tenkhoa = 'UTT-CNTT', Ghichu = 'Truong DH Cong Nghe GTVT' where Makhoa = 11";
    if(mysqli_query($conn, $sql2)) {
        echo "Cập nhật dữ liệu thành công !!";
    } else {
        echo "Lỗi: " .$sql2 . "<br>" .mysqli_error($conn);
    }
*/


/*
    //
    //chuc năng delete 
    //
    $sql3 ="delete from khoa where Makhoa = 14";
    if(mysqli_query($conn, $sql3)) {
        echo "Xóa dữ liệu thành công !!";
    } else {
        echo "Lỗi: " .$sql3 . "<br>" .mysqli_error($conn);
    }
*/

    mysqli_close($conn);
    
    ?>
</body>
</html>