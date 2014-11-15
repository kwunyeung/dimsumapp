<h1>Types Index</h1>
<?php echo $this->Html->link('Add Type', '/types/add'); ?>
<?php if (!empty($types)): ?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
        <th>Created</th>
    </tr>
    <?php foreach ($types as $type): ?>
    <tr>
        <td><?php echo $type['Type']['id']; ?></td>
        <td><?php echo $type['Type']['name']; ?></td>
        <td><?php echo $type['Type']['price']; ?></td>
        <td></td>
        <td><?php echo $type['Type']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
<p>No dimsum type available.</p>
<?php endif; ?>