
<div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div>
                    <?php if (validation_errors()): ?>
                        <div class="panel panel-danger">
                            <div class="panel-heading">Message</div>
                            <div class="panel-body">
                                <?php echo validation_errors(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <form class="form-horizontal" role="form" action="<?=base_url().'item/store'?>" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description">
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">PhP</div>
                            <input name="price" type="price" class="form-control" id="price" placeholder="Enter Price">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <button type="submit" class="btn btn-default">Add Item</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>