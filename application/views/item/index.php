
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2>Item Management</h2>
            <?= $message ?>

            <table class="table table-striped">
                <tr><th>ID</th><th>NAME</th><th>PRICE</th><th>ACTION</th></tr>
                <?php foreach($items as $item): ?>
                    <tr>
                        <td><?=$item->id?></td>
                        <td><?=$item->name?></td>
                        <td><?=$item->price?></td>
                        <td>
                            <a href="<?=base_url().'item/view/'.$item->id?>" class="btn btn-primary btn-md" role="button">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>View</a>
                            <a href="#" class="btn btn-warning btn-md" role="button">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</a>
                            <a href="<?=base_url().'item/delete/'.$item->id?>" class="btn btn-danger btn-md" role="button">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <a href="<?=base_url().'item/add'?>" class="btn btn-success btn-md" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>NEW ITEM</a>
    </div>
</div>
    
