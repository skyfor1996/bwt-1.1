<?php

class SiteWorkerController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Получаем список сотрудников
        $workersList = Worker::getWorkersList();

        // Подключаем вид
        require_once(ROOT . '/view/site_worker/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить сотрудника"
     */
    public function actionCreate()
    {
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['age'] = $_POST['age'];
            $options['salary'] = $_POST['salary'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем данные о новом сотруднике
                $id = Worker::createWorker($options);

                // Перенаправляем пользователя на страницу с сотрудниками
                header("Location: /site/worker");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/view/site_worker/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать данные о сотруднике"
     */



    public function actionUpdate($id)
    {
        // Получаем данные о конкретном сотруднике
        $worker = Worker::getWorkerById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $name = $_POST['name'];
            $age = $_POST['age'];
            $salary = $_POST['salary'];

            Worker::updateWorkerById($id, $name, $age, $salary);

                // Перенаправляем пользователя на страницу с сотрудниками
                header("Location: /site/worker");
            }
        // Подключаем вид
        require_once(ROOT . '/view/site_worker/update.php');
        return true;
    }


    /**
     * Action для страницы "Удалить данные о сотруднике"
     */
    public function actionDelete($id)
    {

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем данные
            Worker::deleteWorkerById($id);

            //перенаправляем пользователя на страницу с сотрудниками
            header("Location: /site/worker");
        }

        // Подключаем вид
        require_once(ROOT . '/view/site_worker/delete.php');
        return true;
    }

}
