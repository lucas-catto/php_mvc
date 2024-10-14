<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
    </tr>

    <?php foreach ($user->rows as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->username ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->password ?></td>
        </tr>
    <?php endforeach ?>
</table>