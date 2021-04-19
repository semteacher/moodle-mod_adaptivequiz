<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

$string['modulenameplural'] = 'Адаптивное тестирование';
$string['modulename'] = 'Адаптивное тестирование';
$string['modulename_help'] = 'The Adaptive Quiz activity enables a teacher to create quizes that efficiently measure the takers\' abilities. Adaptive quizes are comprised  of questions selected from the question bank that are tagged with a score of their difficulty. The questions are chosen to match the estimated ability level of the  current test-taker. If the test-taker succeeds on a question, a more challenging question is presented next. If the test-taker answers a question incorrectly, a less-challenging question is presented next. This technique will develop into a sequence of questions converging on the test-taker\'s effective ability level. The quiz stops when the test-taker\'s ability is determined to the required accuracy.

This activity is best suited to determining an ability measure along a unidimensional scale. While the scale can be very broad, the questions must all provide a measure of ability or aptitude on the same scale. In a placement test for example, questions low on the scale that novices are able to answer correctly should also be answerable by experts, while questions higher on the scale should only be answerable by experts or a lucky guess. Questions that do not discriminate between takers of different abilities on will make the test ineffective and may provide inconclusive results.

Questions used in the Adaptive Quiz must

 * be automatically scored as correct/incorrect
 * be tagged with their difficulty using \'adpq_\' followed by a positive integer that is within the range for the quiz

The Adaptive Quiz can be configured to

 * define the range of question-difficulties/user-abilities to be measured. 1-10, 1-16, and 1-100 are examples of valid ranges.
 * define the precision required before the quiz is stopped. Often an error of 5% in the ability measure is an appropriate stopping rule
 * require a minimum number of questions to be answered
 * require a maximum number of questions that can be answered

This description and the testing process in this activity are based on <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['pluginadministration'] = 'Адаптивный тест';
$string['pluginname'] = 'Адаптивный тест';
$string['nonewmodules'] = 'Адаптивные тесты не найдены';
$string['adaptivequizname'] = 'Название';
$string['adaptivequizname_help'] = 'Введите название адаптивного теста';
$string['adaptivequiz:addinstance'] = 'Добавить новый адаптивный тест';
$string['adaptivequiz:viewreport'] = 'Показать отчёт теста';
$string['adaptivequiz:reviewattempts'] = 'Показать адаптивные тесты';
$string['adaptivequiz:attempt'] = 'Попытка адаптивного теста';
$string['adaptivequiz:questionanalysis'] = 'Доступ к аналитическому отчету по вопросам';
$string['adaptivequiz:reviewownattempts'] = 'Возможность просмотреть пройденный тест';
$string['attemptsallowed'] = 'Количество попыток';
$string['attemptsallowed_help'] = 'Сколько раз ученик может попытаться выполнить это задание.';
$string['requirepassword'] = 'Требуемый пароль';
$string['requirepassword_help'] = 'Студенты должны ввести пароль перед началом попытки';
$string['browsersecurity'] = 'Безопасность браузера';
$string['browsersecurity_help'] = 'Если выбрано «Полноэкранное всплывающее окно с некоторой безопасностью JavaScript», викторина начнется только в том случае, если у учащегося есть веб-браузер с поддержкой JavaScript, викторина появится во всплывающем окне во весь экран, которое охватывает все остальные окна и не имеет навигации. элементы управления и учащиеся, насколько это возможно, не могут использовать такие средства, как копирование и вставка ';
$string['minimumquestions'] = 'Минимальное количество вопросов';
$string['minimumquestions_help'] = 'Минимальное количество вопросов, на которые студент должен ответить';
$string['maximumquestions'] = 'Максимальное количество вопросов';
$string['maximumquestions_help'] = 'Максимальное количество вопросов, на которые студент должен ответить';
$string['startinglevel'] = 'Начальный уровень сложности';
$string['startinglevel_help'] = 'Когда учащийся начинает попытку, в процессе задания случайным образом выбирается вопрос, соответствующий уровню сложности. Например, 500.';
$string['lowestlevel'] = 'Минимальный уровень сложности';
$string['lowestlevel_help'] = 'Самый низкий или наименее сложный уровень, из которого будут выбраны вопросы. Во время попытки теста не будет выходить за рамки этого уровня сложности.Например, 1.';
$string['highestlevel'] = 'Максимальный уровнь сложности';
$string['highestlevel_help'] = 'Самый высокий или самый сложный уровень, из которого будут выбраны вопросы. Во время попытки теста не будет выходить за рамки этого уровня сложности.Например, 999.';
$string['questionpool'] = 'Банк вопросов';
$string['questionpool_help'] = 'Выберите категорию(и) вопросов, из которой(ых) будут извлекатся вопросы во время попытки теста.';
$string['formelementempty'] = 'Введите положительное целое число от 1 до 999';
$string['formelementnumeric'] = 'Введите числовое значение от 1 до 999';
$string['formelementnegative'] = 'Введите положительное целое число1 до 999';
$string['formminquestgreaterthan'] = 'Минимальное количество вопросов должно быть меньше максимального количества вопросов.';
$string['formlowlevelgreaterthan'] = 'Минимальный уровень должен быть меньше самого высокого уровня';
$string['formstartleveloutofbounds'] = 'Начальный уровень должен быть числом, которое находится между самым низким и самым высоким уровнем.';
$string['standarderror'] = 'Стандартная ошибка для остановки';
$string['standarderror_help'] = 'Когда количество ошибок в оценке способностей пользователя упадет ниже этого значения, тестирование остановится. Измените это значение с 5% (по умолчанию), чтобы получать более или менее точную оценку при измерении знаний.';
$string['formelementdecimal'] = 'Введите десятичное число. Максимум 10 цифр и максимум 5 цифр справа от десятичной точки.';
$string['attemptfeedback'] = 'Окончание теста';
$string['attemptfeedback_help'] = 'Пользователю будет выведен следующий текст, после завершения попытки теста.';
$string['formquestionpool'] = 'Выберите хотя бы одну категорию вопроса';
$string['submitanswer'] = 'Отправить ответ';
$string['nextquestion'] = 'Следующий вопрос'; //mathetest
$string['startattemptbtn'] = 'Начать тест';
$string['viewreportbtn'] = 'Посмотреть отчеты';
$string['errorfetchingquest'] = 'Невозможно получить вопрос для прохождения уровня {$a->level}';
$string['leveloutofbounds'] = 'Запрошенный уровень {$a->level} за пределами попытки теста';
$string['errorattemptstate'] = 'При определении состояния попытки теста произошла ошибка';
$string['nopermission'] = 'У вас нет разрешения на просмотр этого ресурса';
$string['maxquestattempted'] = 'Максимальное количество вопросов в попытке';
$string['notyourattempt'] = 'Это не ваша попытка';
$string['noattemptsallowed'] = 'Попыток больше нет';
$string['completeattempterror'] = 'Ошибка при попытке завершить запись теста';
$string['updateattempterror'] = 'Ошибка при попытке обновления записи попытки';
$string['numofattemptshdr'] = 'Количество попыток';
$string['standarderrorhdr'] = 'Стандартная ошибка';
$string['errorlastattpquest'] = 'Ошибка при проверке значения ответа на последний заданный вопрос';
$string['errornumattpzero'] = 'Ошибка с количеством заданных вопросов равно нулю, но пользователь отправил ответ на предыдущий вопрос.';
$string['errorsumrightwrong'] = 'Сумма правильных и неправильных ответов не равна общему количеству заданных вопросов.';
$string['calcerrorwithinlimits'] = 'Расчитанная стандартная ошибка {$a->calerror} находится в пределах, установленных  {$a->definederror}';
$string['missingtagprefix'] = 'Отсутствует префикс тега';
$string['recentactquestionsattempted'] = 'Задаваемые вопросы: {$a}';
$string['recentattemptstate'] = 'Результат попытки:';
$string['recentinprogress'] = 'В процессе';
$string['notinprogress'] = 'Эта попытка не выполняется.';
$string['recentcomplete'] = 'Завершено';
$string['functiondisabledbysecuremode'] = 'Эта функция в настоящее время отключена';
$string['enterrequiredpassword'] = 'Введите пароль';
$string['requirepasswordmessage'] = 'Чтобы пройти этот тест, вам необходимо знать пароль теста.';
$string['wrongpassword'] = 'Неверный пароль';
$string['noattemptrecords'] = 'Нет записей о тестах для этого учащегося';
$string['attemptstate'] = 'Результат попытки';
$string['attemptstopcriteria'] = 'Причина остановки теста';
$string['questionsattempted'] = 'Количество заданных вопросов';
$string['attemptfinishedtimestamp'] = 'Время окончания попытки';
$string['backtomainreport'] = 'Вернуться к отчетам';
$string['reviewattempt'] = 'Показать тест';
$string['indvuserreport'] = 'Отчет о тестах для отдельных пользователей {$a}';
$string['activityreports'] = 'Отчет о попытках';
$string['stopingconditionshdr'] = 'Условия остановки';
$string['backtoviewattemptreport'] = 'Вернуться к просмотру отчета о тесте';
$string['backtoviewreport'] = 'Вернуться к отчетам';
$string['reviewattemptreport'] = 'Детали попытки, сделанной {$a->fullname} за {$a->finished}';
$string['deleteattemp'] = 'Удалить попытку';
$string['confirmdeleteattempt'] = 'Подтверждение удаления попытки {$a->name} за {$a->timecompleted}';
$string['attemptdeleted'] = 'Попытка удалена {$a->name} за {$a->timecompleted}';
$string['errordeletingattempt'] = 'Запись о тесте не найдена';
$string['closeattempt'] = 'Закрыть тест';
$string['confirmcloseattempt'] = 'Вы уверены, что хотите закрыть и завершить эту попытку {$a->name}?';
$string['confirmcloseattemptstats'] = 'Эта попытка была начата {$a->started} и последний раз обновлялась {$a->modified}.';
$string['confirmcloseattemptscore'] = 'на {$a->num_questions} вопросов были даны ответы, и пока что оценка {$a->measure} {$a->standarderror}.';
$string['attemptclosedstatus'] = 'Закрыто вручную {$a->current_user_name} (user-id: {$a->current_user_id}) в {$a->now}.';
$string['attemptclosed'] = 'Попытка закрыта вручную.';
$string['errorclosingattempt'] = 'Запись о тесте не найдена';
$string['errorclosingattempt_alreadycomplete'] = 'Эта попытка уже завершена, ее нельзя закрыть вручную.';
$string['formstderror'] = 'Необходимо ввести процентное значение меньше 50 и больше или равно 0.';
$string['backtoviewattemptreport'] = 'Вернуться к просмотру отчета о попытке';
$string['backtoviewreport'] = 'Вернуться к основным отчетам';
$string['reviewattemptreport'] = 'Детали попытки, сделанной {$a->fullname} за {$a->finished}';
$string['score'] = 'Оценка';
$string['bestscore'] = 'Лучшая оценка';
$string['bestscorestderror'] = 'Стандартная ошибка';
$string['attempt_summary'] = 'Резюме по тесту';
$string['scoring_table'] = 'Таблицы подсчета оценок';
$string['attempt_questiondetails'] = 'Детали вопроса';
$string['attemptstarttime'] = 'Время начала попытки';
$string['attempttotaltime'] = 'Общее время (hh:mm:ss)';
$string['attempt_user'] = 'Пользователь';
$string['attempt_state'] = 'Результат попытки';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_level'] = 'Сложность вопроса';
$string['attemptquestion_rightwrong'] = 'Верно/Неверно';
$string['attemptquestion_ability'] = 'Возможный уровень сложности';
$string['attemptquestion_error'] = 'Стандартная ошибка (&plusmn;&nbsp;x%)';
$string['attemptquestion_difficulty'] = 'Сложность вопроса (logits)';
$string['attemptquestion_diffsum'] = 'Сумма сложности';
$string['attemptquestion_abilitylogits'] = 'Измеренные знания (logits)';
$string['attemptquestion_stderr'] = 'Стандартная ошибка (&plusmn;&nbsp;logits)';
$string['graphlegend_target'] = 'Целевой уровень';
$string['graphlegend_error'] = 'Стандартная ошибка';
$string['unknownuser'] = 'Неизвестный пользователь';
$string['answerdistgraph_title'] = 'Распределение ответов для {$a->firstname} {$a->lastname}';
$string['answerdistgraph_questiondifficulty'] = 'Сложность вопроса';
$string['answerdistgraph_numrightwrong'] = 'Число неверных (-)  /  Число верных (+)';
$string['answerdistgraph_right'] = 'Верно';
$string['answerdistgraph_wrong'] = 'Неверно';
$string['numright'] = 'Число верно';
$string['numwrong'] = 'Число неверно';
$string['questionnumber'] = 'Вопрос #';
$string['na'] = 'н/д';
$string['downloadcsv'] = 'Скачать CSV';

$string['grademethod'] = 'Метод оценки';
$string['gradehighest'] = 'Высокая оценка';
$string['attemptfirst'] = 'Первая попытка';
$string['attemptlast'] = 'Последняя попытка';
$string['grademethod_help'] = 'Если разрешено несколько попыток, для расчета итоговой оценки за викторину доступны следующие методы:

* Наивысшая оценка из всех попыток
* Первая попытка (все остальные попытки игнорируются)
* Последняя попытка (все остальные попытки игнорируются)';
$string['resetadaptivequizsall'] = 'Удалить все попытки адаптивного теста';
$string['all_attempts_deleted'] = 'Все попытки адаптивного теста были удалены.';
$string['all_grades_removed'] = 'Все оценки адаптивного теста были удалены.';

$string['questionanalysisbtn'] = 'Анализ вопросов';
$string['id'] = 'ID';
$string['name'] = 'Имя';
$string['questions_report'] = 'Отчет о вопросах';
$string['question_report'] = 'Анализ вопросов';
$string['times_used_display_name'] = 'Используемое время';
$string['percent_correct_display_name'] = '% Correct';
$string['discrimination_display_name'] = 'Различие';
$string['back_to_all_questions'] = '&laquo; Вернуться ко всем вопросам';
$string['answers_display_name'] = 'Ответы';
$string['answer'] = 'Ответ';
$string['statistic'] = 'Статистика';
$string['value'] = 'Значение';
$string['highlevelusers'] = 'Пользователи выше уровня вопроса';
$string['midlevelusers'] = 'Пользователи около уровня вопроса';
$string['lowlevelusers'] = 'Пользователи ниже уровня вопроса';
$string['user'] = 'Пользователь';
$string['result'] = 'Результат';
