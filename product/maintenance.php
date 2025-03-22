<?php
include '../base.php';

$arr = $_db->query('SELECT * FROM product')->fetchAll();

?>

<p><?= count($arr) ?> record(s)</p>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Picture</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Status</th>
        <th>SalesCount</th>
        <th></th>
    </tr>

    <?php foreach ($arr as $p): ?>
    <tr>
        <td><?= $p->productID ?></td>
        <td><?= $p->name ?></td>
        <td><?= $p->category ?></td>
        <td><?= $p->price ?></td>
        <td><?= $p->price ?></td>
        <td><?= $p->price ?></td>
        <td><?= $p->price ?></td>
        <td><?= $p->price ?></td>
        <td><?= $p->price ?></td>
        <td>
            <button data-get="update.php?id=<?= $p->id ?>">Update</button>
            <button data-post="delete.php?id=<?= $p->id ?>">Delete</button>
            
        </td>
    </tr>
    <?php endforeach ?>
</table>
