<?php
/*

Zad. 1
Napisz skrypt connect.php, który:
łączy się z bazą employees przez mysqli_connect(),
w razie błędu wyświetla komunikat z mysqli_connect_error(),
po sukcesie wyświetla: „Połączono z bazą employees”,
zamyka połączenie (mysqli_close()).

Zad. 2

Stwórz plik get_list.php, który:
pobiera wszystkich pracowników (SELECT * FROM employees)
wyświetla w tabeli id pracownika, imię, nazwisko oraz stanowisko.

Zad. 3

Napisz skrypt, który:
pobiera first_name, last_name, salary,
sortuje po salary malejąco,
wyświetla top 5 najlepiej zarabiających.

Zad. 4

Napisz skrypt oraz wyświetl dane w formie tabeli html.
Dane jakie powinny się znaleźć w tabeli:
liczbę pracowników,
średnią pensja w firmie,
minimalna i maksymalną pensja.

Zad. 5

Napisz zapytanie SQL (GROUP BY), które pokaże:
dept_name oraz liczbę pracowników w tym dziale,
licząc tylko aktualne przypisania (dept_emp.to_date = '9999-01-01')
i posortuj malejąco po liczbie.

*/
