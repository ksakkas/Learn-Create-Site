<!--Φίλτρο στην PHP-->

<!--Τα φίλτρα PHP χρησιμοποιούνται για επικύρωση και αξιολόγηση εξωτερικών εισόδων.

Η επέκταση φίλτρου PHP έχει πολλές από τις απαραίτητες λειτουργίες για τον έλεγχο της εισόδου του χρήστη,
και έχει σχεδιαστεί για να κάνει την επικύρωση δεδομένων ευκολότερη και ταχύτερη.

Η συνάρτηση filter_list () μπορεί να χρησιμοποιηθεί για να αναφέρει τι προσφέρει η επέκταση φίλτρου PHP:
-->

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>
