<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$title = "Thống kê hoá đơn";
require_once('./db_connect.php');
require_once('./include/function.php');
require_once('./header.php');

?>

<div class="row mb-5">
  <h2>Thống kê Hoá Đơn</h2>
  <table id="datatable1" style="width:100%" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Số điện thoại</th>
        <th>Tên</th>
        <th>Phòng</th>
        <th>Giá</th>
        <th>Thời gian bắt đầu</th>
        <th>Thời gian kết thúc</th>
        <th>Ghi chú</th>
        <th>Thanh toán</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $querygiaodich = mysqli_query($conn, "SELECT
        g.sdtkhachhang,
        t.hoten,
        p.tenphong,
        gt.gia,
        g.thoigianbatdau,
        g.thoigianketthuc,
        g.ghichu,
        g.tongtien
      FROM `giaodich` g
      INNER JOIN `thongtinkhachhang` t ON g.sdtkhachhang = t.sdt
      INNER JOIN `phong` p ON g.idphong = p.id
      INNER JOIN `giatien` gt ON g.idgiatien = gt.idgiatien
      ORDER BY `thoigianketthuc` DESC");

      if ($querygiaodich && $querygiaodich->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($querygiaodich)) {
          ?>
          <tr>
            <td><?= $row['sdtkhachhang'] ?></td>
            <td><?= $row['hoten'] ?></td>
            <td><?= $row['tenphong'] ?></td>
            <td><?= $row['gia'] ?></td>
            <td><?= $row['thoigianbatdau'] ?></td>
            <td><?= $row['thoigianketthuc'] ?></td>
            <td><?= $row['ghichu'] ?></td>
            <td><?= $row['tongtien'] ?></td>
          </tr>
          <?php
        }
      }
      ?>
    </tbody>
  </table>
</div>


<script>
    $(document).ready(function() {
        $('#datatable1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "language": {
                "search": "Tìm kiếm",
                "lengthMenu": "Hiện _MENU_ dòng mỗi trang",
                "zeroRecords": "Không tìm thấy",
                "info": "Dòng (_START_ - _END_) / _TOTAL_ . Trang _PAGE_ / _PAGES_",
                "infoEmpty": "Không có dữ liệu",/;[]
                "infoFiltered": "(filtered from _MAX_ total records)",
                "paginate": {
                    "first": "Trang đầu",
                    "last": "Trang cuối",
                    "next": "Sau",
                    "previous": "Trước"
                },
            }
        });
        
    });
</script>
<?php
require_once('./footer.php');
?>