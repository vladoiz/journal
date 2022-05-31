<table class="table table-bordered">
    <tr>
        <th>Предмет</th>
        <th>Оценка</th>
    </tr>
    <?php if (count($model)) : ?>
        <?php foreach ($model as $item) : ?>
            <tr>
                <td><?= $item['title'] ?></td>
                <td><?= $item['mark'] ?></td>
            </tr>
        <?php endforeach ?>

    <?php else : ?>
        <tr>
            <td><small class="text-muted">нет предметов</small></td>
            <td><small class="text-muted">нет оценок</small></td>
        </tr>
    <?php endif ?>
</table>

<script>
    window.onload = function() {
        $('.table').add('<tr>' + table[0] + '</tr>');
    }
</script>