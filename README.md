# testTask

1.1. Обработчик событий в файле init.php (0.5 часа)

1.2. Реорганизация функций в файле CUserClass.php (0.5 часа)

1.3. Написание SQL-запроса (0.5 часа):

select G.DATE, U.LOGIN, G.METHOD, COUNT(G.ID) CNT from b_user U inner join google_ads_logs G on U.ID = G.USER_ID GROUP BY G.METHOD order by G.DATE DESC
