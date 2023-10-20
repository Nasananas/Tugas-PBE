<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?= base_url('update-product/'. $product->id)?>">
        <label for="nama_product">Nama Produk</label>
        <input value="<?=$product->nama_product?>" type="text" name="nama_product" id="nama_product"></input>
        <label for="nama_product">Deskripsi</label>
        <input value="<?=$product->description?>" type="text" name="description" id="description"></input>
        <button type="submit">Update</button>
    </form>
</body>
</html>