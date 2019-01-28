<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple CodeIgniter App - Todos</title>
    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <?php echo form_open('todos/update_completed'); ?>

    <h1>To do list</h1>

    <div class="list-group">
        <?php foreach ($todos as $todo) { ?>
            <div class="list-group-item clearfix">
                <?php echo form_checkbox('completed[]', $todo->id, $todo->completed); ?>
                <?php echo $todo->task . " (#$todo->order)"; ?>
            </div>
        <?php } ?>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>

    <?php echo form_close(); ?>

    <br>

    <?php echo form_open('todos/create'); ?>

    <h1>Create new to do</h1>

    <br>

    <form>

        <div class="form-row">
            <div class="form-group">
                <label>New Task</label>
                <input type="text" class="form-control" name="newtask" placeholder="Enter new task here....">
            </div>
            <div class="form-group">
                <label>Order</label>
                <select name="order" class="form-control">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

    </form>

    <?php //echo form_close(); ?>

</div><!-- /.container -->

</body>
</html>