<?php
include("connect.php");
if (isset($_POST['input'])) {

    $input = $_POST['input'];

    $query = ("SELECT * FROM book WHERE bookName  LIKE '{$input}%' ORDER BY bookName");
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) { ?>
        <table style="margin-top:100px ;">
            <thead>
                <tr>
                    <th>Название книги</th>
                    <td>
                        <td>
                    <th>Обложка</th>

                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $bookName = $row['bookName'];
                $image = $row['image'];
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $bookName; ?></td>
                        <td>
                        <td>
                        <td> <img src="/uploads/<?= $row['image'] ?>" alt="" width="100vw"></td>

                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>

<?php
    } else {
        echo "<h6 class='text-danger mt-3'>Не найдено</h6> ";
    }
}
?>