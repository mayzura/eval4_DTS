<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Tabel Produk</title>
        <style>
            /* ====GLOBAL STYLE==== */
            body{
                background-color: #F8F8F8;
            }
            div.containert{
                width:  960px;
                padding: 10px 50px 50px;
                background-color: #F8F8F8;
                margin: 20px auto;

                box-shadow: 1px 0px 10px, -1px 0px 10px;
            }
            h1{
                text-align: center;
                font-family: Cambria, "Times New Roman", serif;
                clear: both;
            }

            /* ====TABLE==== */
            table{
                border-collapse: collapse;
                border-spacing: 0;
                border: 1px black solid;
                width: 100%;
            }
            th, td{
                padding: 8px, 15px;
                border: 1px black solid;
            }
            tr:nth-child(2n+3){
                background-color: #F2F2F2;
            }
        </style>
    </head>

    <body>
        <div class="containert">
            <h1>Data Produk</h1>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Merk Produk</th>
                    <th>Harga Produk</th>
                    <th>Foto Produk</th>
                </tr>


<?php foreach ($isiTabelProduk as $data) : ?>
        <tr>
        	<td><?php echo $data["id"]; ?></td>
        	<td><?php echo $data["nama"]; ?></td>
        	<td><?php echo $data["merk"]; ?></td>
        	<td><?php echo $data["harga"]; ?></td>
        	<td><img width="200" title="<?php echo $data['gambar']; ?>" src="img/<?php echo $data['gambar']; ?>"></td>
        </tr>
    	<?php endforeach; ?>
            </table>
        </div>
    </body>
</html>