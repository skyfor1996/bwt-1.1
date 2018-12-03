<?php

/**
 * Класс Product - модель для работы с товарами
 */
class Worker
{
    /**
     * Возвращает данные о сотруднике с указанным ид
     */
    public static function getWorkerById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, name, age, salary FROM worker WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }




    /**
     * Возвращает список данных о сотрудниках
     */
    public static function getWorkersList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM worker');
        $workersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $workersList[$i]['id'] = $row['id'];
            $workersList[$i]['name'] = $row['name'];
            $workersList[$i]['age'] = $row['age'];
            $workersList[$i]['salary'] = $row['salary'];
            $i++;
        }
        return $workersList;
    }

    /**
     * Удаляет данные о сотруднике с указанным ид
     */
    public static function deleteWorkerById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM worker WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирует данные о сотруднике с указанным ид
     */
    public static function updateWorkerById($id, $name, $age, $salary)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE worker
            SET 
                name = :name, 
                age = :age, 
                salary = :salary
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':age', $age, PDO::PARAM_INT);
        $result->bindParam(':salary', $salary, PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * Добавляет данные о новом сотруднике
     */
    public static function createWorker($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO worker '
                . '(name, age, salary)'
                . 'VALUES '
                . '(:name, :age, :salary)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':age', $options['age'], PDO::PARAM_INT);
        $result->bindParam(':salary', $options['salary'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }


}
