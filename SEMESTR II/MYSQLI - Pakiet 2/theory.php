<?php
/*
Co to jest MySQLi?

MySQLi (MySQL Improved) to rozszerzenie PHP umożliwiające:

* łączenie z bazą danych MySQL,
* wykonywanie zapytań SQL,
* pobieranie wyników,
* modyfikowanie danych (INSERT, UPDATE, DELETE),
* obsługę błędów,
* stosowanie bezpiecznych zapytań (prepared statements).

Jest następcą przestarzałego mysql_connect().

MySQLi pracuje w dwóch trybach:
  * proceduralnym,
  * obiektowym.

Przykład proceduralny (najczęściej wykorzystywany na egzaminie INF.03):
mysqli_connect()
mysqli_query()

Przykład obiektowy:
$conn = new mysqli();
$conn->query();

---------------------------------------------------

Najważniejsze funkcje MySQLi – lista egzaminacyjna:

mysqli_connect() - łączy z serwerem MySQL.

Przykład:
$conn = mysqli_connect("localhost", "root", "", "employees");

Do funkcji mysqli_connect zostały podane poniższe parametry:
Parametry:
host, użytkownik, hasło, nazwa bazy danych, z która chcemy się połączyć

mysqli_connect_error() - zwraca komunikat błędu połączenia.

Przykład:
if (!$conn) {
    die("Błąd: " . mysqli_connect_error());
}

mysqli_close() - zamyka połączenie.

Przykład:
mysqli_close($conn);

mysqli_query() - wysyła zapytanie SQL do bazy.

Przykład:
$query = "SELECT * FROM employees";
$result = mysqli_query($conn, $query);

mysqli_error() - zwraca błąd zapytania.

Przykład:
if (!$result) {
    echo mysqli_error($conn);
}

mysqli_fetch_assoc() - zwraca wiersz jako tablicę asocjacyjną.

Przykład:
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'];
}

mysqli_fetch_row() - zwraca wiersz jako tablicę indeksowaną liczbowo.

Przykład:
$row = mysqli_fetch_row($result);
echo $row[0];

mysqli_fetch_array()- zwraca zarówno indeksy liczbowe, jak i nazwane.

mysqli_num_rows() - zwraca liczbę wierszy w wyniku.

mysqli_affected_rows() - zwraca liczbę zmodyfikowanych rekordów
(INSERT/UPDATE/DELETE).

---------------------------------------------------

Operacje CRUD - przykłady:

SELECT

$query = "SELECT * FROM employees";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . "<br>";
}


INSERT

$query2 = "INSERT INTO employees (first_name, last_name, salary)
VALUES ('Jan', 'Kowalski', 5000)";

mysqli_query($conn, $query2);


UPDATE

$query3 = "UPDATE employees SET salary = 6000 WHERE id = 1";
mysqli_query($conn, $query3);


DELETE

$query4 = "DELETE FROM employees WHERE id = 5";
mysqli_query($conn, $query4);



---------------------------------------------------

Przydatne linki:
https://www.php.net/manual/en/mysqli.close.php
https://pasja-informatyki.pl/programowanie-webowe/php-mysqli-dane-dostepowe-do-bazy/
https://www.pikademia.pl/polaczenie-z-baza-danych-mysql-w-php/
https://www.geeksforgeeks.org/php/php-mysqli_connect-function/

Materiał video:
https://www.youtube.com/watch?v=M8BXsR_gpio

*/

