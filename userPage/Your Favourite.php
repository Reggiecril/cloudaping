<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Update Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($favourite_row=$favourite_result->fetch()) {
      $r=$dbh->query("SELECT * FROM product WHERE product_id=".$favourite_row['product_id']."");
      $row1=$r->fetch();
    ?>
    <tr>
      <th scope="row"><?php echo $favourite_row['favourite_id']; ?></th>
      <td><?php echo $row1['product_name']; ?></td>
      <td><?php echo $row1['product_nowPrice']; ?></td>
      <td><?php echo $favourite_row['favourite_updateDate']; ?></td>
      <td><a href="index.php?content=userPage/securePage&userPage=Your Favourite&favourite=remove&product_id=<?php echo $row1['product_id']; ?>">Remove</a></td>
    </tr>
     <?php
    }
    ?>
  </tbody>
</table>