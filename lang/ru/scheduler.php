<?php
$string['pluginname'] = 'Расписание';
$string['pluginadministration'] = 'Управление расписанием';
$string['modulename'] = 'Расписание';
$string['modulename_help'] = 'Модуль «Расписание» поможет Вам планировать встречи с Вашими студентами. 

Учителя определяют временные интервалы для встреч, затем студенты выбирают один из них в Moodle.
Учителя могут отмечать присутствие студентов, результаты встречи (и, при необходимости, выставлять оценки) в модуле «Расписание».

Поддерживается создание расписания для встреч с группой студентов: в каждый интервал времени может записаться несколько студентов. Также есть возможность запланировать в расписании встречу для всей группы студентов одновременно.';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = 'Расписания';

/* ***** Capabilities ****** */
$string['scheduler:addinstance'] = 'Добавить новое расписание';
$string['scheduler:appoint'] = 'Встреча';
$string['scheduler:attend'] = 'Записанные студенты';
$string['scheduler:canscheduletootherteachers'] = 'Планировать встречи для других учителей';
$string['scheduler:canseeotherteachersbooking'] = 'Просматривать графики встреч других учителей';
$string['scheduler:disengage'] = 'Это право объявлено нежелательным и ни на что не влияет';
$string['scheduler:manage'] = 'Управлять своими временными интервалами и встречами';
$string['scheduler:manageallappointments'] = 'Управлять всей информацией в расписании';
$string['scheduler:seeotherstudentsbooking'] = 'Просматривать регистрации других студентов на конкретный интервал времени';
$string['scheduler:seeotherstudentsresults'] = 'Просматривать результаты других студентов в конкретном интервале времени';
$string['scheduler:seeoverviewoutsideactivity'] = 'Использовать экран обзора, чтобы видеть интервалы вне текущего элемента «Расписание».';

/* ***** Events ***** */
$string['event_bookingformviewed'] = 'Показана форма записи на встречу в расписании';
$string['event_bookingadded'] = 'Добавлена запись на встречу в расписание';
$string['event_bookingremoved'] = 'Удалена запись на встречу из расписания';
$string['event_appointmentlistviewed'] = 'Показан список встреч из расписания';

/* ***** Interface strings ****** */

$string['onedaybefore'] = '1 день до интервала';
$string['oneweekbefore'] = '1 неделя до интервала';
$string['action'] = 'Действие';
$string['actions'] = 'Действия';
$string['addappointment'] = 'Добавить другого студента';
$string['addcommands'] = 'Добавить интервалы';
$string['addondays'] = 'Добавить встречи на';
$string['addscheduled'] = 'Добавить студента в расписание';
$string['addsession'] = 'Добавить несколько интервалов';
$string['addsingleslot'] = 'Добавить один интервал';
$string['addslot'] = 'Вы можете в любой момент добавить дополнительные интервалы времени для встреч.';
$string['addstudenttogroup'] = 'Добавить этого студента к группе в расписании';
$string['allappointments'] = 'Все встречи';
$string['allononepage'] = 'Все интервалы на одной странице';
$string['allowgroup'] = 'Интервал для одного студента - щёлкните для изменения';
$string['allslotsincloseddays'] = 'Все интервалы были в закрытых днях';
$string['allteachersgrading'] = 'Учителя могут выставлять оценки во всех встречах';
$string['allteachersgrading_desc'] = 'Если включено, учителя могут оценивать встречи, в которых они не участвовали.';
$string['alreadyappointed'] = 'Запись на встречу невозможна. Интервал времени уже полностью заполнен.';
$string['appointforgroup'] = 'Назначить встречи для: {$a}';
$string['appointingstudent'] = 'Встреча для интервала времени';
$string['appointingstudentinnew'] = 'Встреча для нового интервала времени';
$string['appointment'] = 'Встреча';
$string['appointmentno'] = 'Встреча {$a}';
$string['appointmentnotes'] = 'Примечание к встрече';
$string['appointments'] = 'Встречи';
$string['appointmentsgrouped'] = 'Встречи, сгруппированные по интервалам';
$string['appointsolo'] = 'только я';
$string['appointsomeone'] = 'Добавить новую встречу';
$string['appointmentsummary'] = 'Встреча {$a->startdate} с {$a->starttime} до {$a->endtime} с {$a->teacher}';
$string['attendable'] = 'Могут записаться';
$string['attendablelbl'] = 'Всего кандидатов для записи';
$string['attended'] = 'Записаны';
$string['attendedlbl'] = 'Количество записанных студентов';
$string['attendedslots'] = 'Интервалы времени с записями';
$string['availableslots'] = 'Доступные интервалы времени';
$string['availableslotsall'] = 'Все интервалы времени';
$string['availableslotsnotowned'] = 'Чужие';
$string['availableslotsowned'] = 'Мои';
$string['bookslot'] = 'Записаться в интервал';
$string['bookwithteacher'] = 'Зарегистрировал';
$string['break'] = 'Перерыв между интервалами времени';
$string['breaknotnegative'] = 'Величина перерыва не может быть отрицательным числом';
$string['cancelbooking'] = 'Отменить запись';
$string['cancelledbystudent'] = '{$a} : Встреча отменена или перенесена студентом';
$string['cancelledbyteacher'] = '{$a} : Встреча отменена учителем';
$string['canbooksingleappointment'] = 'Вы можете записаться на одну встречу в этом расписании.';
$string['canbook1appointment'] = 'Вы можете записаться на еще одну встречу в этом расписании.';
$string['canbooknappointments'] = 'Вы можете записаться еще на {$a} встреч в этом расписании.';
$string['canbooknofurtherappointments'] = 'Вы не можете записаться на другие новые встречи в этом расписании.';
$string['canbookunlimitedappointments'] = 'Вы можете записаться на любое количество встреч в этом расписании.';
$string['chooseexisting'] = 'Выберите существующий';
$string['choosingslotstart'] = 'Выберите время начала';
$string['comments'] = 'Примечания';
$string['contentformat'] = 'Формат';
$string['contentformat_help'] = '<p>Есть три базовых варианта для формата экспорта,
     которые отличаются способом обработки интервалов с несколькими встречами.
     <dl>
         <dt>Одна строка на интервал</dt>:
         <dd>
             Файл экспорта будет содержать одну строку для каждого интервала. Если интервал содержит несколько 
             встреч, то вместо имени студента и т. д. будет показан маркер «(несколько)».
         </dd>
         <dt>Одна строка на встречу</dt>:
         <dd>
             Файл экспорта будет содержать одну строку для каждой встречи. Если интервал содержит несколько
             встреч, то он появится несколько раз в списке (данные интервала будут повторяться).
         </dd>
         <dt>Встречи, сгруппированные по интервалам</dt>:
         <dd>
             Все встречи одного интервала будут сгруппированы вместе, перед ними будет стоять строка заголовка
             которая показывает требуемый интервал. Это может плохо работать с экспортом в формат CSV,
             так как число столбцов не одинаково.
         </dd>
    </dl>
    Вы можете изучить влияние этих настроек, используя кнопку «Предварительный просмотр».</p>';
$string['complete'] = 'Занято';
$string['composeemail'] = 'Написать письмо:';
$string['confirmdelete'] = 'Удаление нельзя будет отменить. Вы точно хотите продолжить?';
$string['conflictingslots'] = 'Конфликтующие интервалы времени';
$string['course'] = 'Курс';
$string['createexport'] = 'Создать файл экспорта';
$string['csvformat'] = 'CSV';
$string['csvfieldseparator'] = 'Разделитель полей для csv';
$string['cumulatedduration'] = 'Суммарная продолжительность встреч';
$string['datatoinclude'] = 'Данные для экспорта';
$string['datatoinclude_help'] = 'Выберите поля, которые должны быть включены в файл экспорта. Каждое из них появится в отдельном столбце файла экспорта.';
$string['date'] = 'Дата';
$string['datelist'] = 'Обзор';
$string['defaultslotduration'] = 'Продолжительность интервала по умолчанию';
$string['defaultslotduration_help'] = 'Продолжительность по умолчанию интервала времени (в минутах) для встреч, которые Вы настраиваете';
$string['deleteallslots'] = 'Удалить все интервалы';
$string['deleteallunusedslots'] = 'Удалить все неиспользованные интервалы';
$string['deletecommands'] = 'Удалить интервалы';
$string['deletemyslots'] = 'Удалить все мои интервалы';
$string['deleteselection'] = 'Удалить отмеченные интервалы';
$string['deletetheseslots'] = 'Удалить эти интервалы';
$string['deleteunusedslots'] = 'Удалить мои неиспользованные интервалы';
$string['department'] = 'Откуда?';
$string['disengage'] = 'Удалить мои встречи';
$string['displayfrom'] = 'Показать встречи студентам начиная с';
$string['distributetoslot'] = 'Распространить на всю группу';
$string['divide'] = 'Разбить на интервалы?';
$string['dontforgetsaveadvice'] = 'Вы изменили список людей, записанных на встречу. Не забудьте сохранить эту форму для подтверждения внесения изменений.';
$string['duration'] = 'Продолжительность';
$string['durationrange'] = 'Величина интервала должна быть в диапазоне от {$a->min} до {$a->max} минут.';
$string['emailreminder'] = 'Отправить напоминание по электронной почте';
$string['emailreminderondate'] = 'Дата отправки напоминания по электронной почте';
$string['end'] = 'Окончание';
$string['enddate'] = 'Повторять интервал времени до';
$string['endtime'] = 'Время окончания';
$string['excelformat'] = 'Excel';
$string['exclusive'] = 'Встреча для одного';
$string['exclusivity'] = 'Вид интервала времени';
$string['exclusivitypositive'] = 'Число студентов на интервал времени болжно быть 1 или больше.';
$string['exclusivityoverload'] = 'На данный интервал времени уже записалось {$a} студентов. Это значение больше допустимого данным параметром.';
$string['explaingeneralconfig'] = 'Эти параметры могут быть установлены только на уровне сайта и будет применены ко всем расписаниям на этом сайте Moodle.';
$string['export'] = 'Экспорт';
$string['exporthdr'] = 'Экспортировать интервалы и встречи';
$string['everyone'] = 'Все';
$string['field-date'] = 'Дата';
$string['field-starttime'] = 'Время начала';
$string['field-endtime'] = 'Время окончания';
$string['field-location'] = 'Место';
$string['field-maxstudents'] = 'Максимальное количество студентов';
$string['field-studentfullname'] = 'ФИО студента';
$string['field-studentfirstname'] = 'Имя студента';
$string['field-studentlastname'] = 'Фамилия студента';
$string['field-studentemail'] = 'E-mail студента';
$string['field-studentusername'] = 'Имя пользователя студента';
$string['field-studentidnumber'] = 'ID студента';
$string['field-attended'] = 'Присутствовал';
$string['field-slotnotes'] = 'Заметки к интервалу';
$string['field-appointmentnotes'] = 'Заметки к встрече';
$string['field-grade'] = 'Оценка';
$string['fileformat'] = 'Формат файла';
$string['fileformat_help'] = 'Доступны следующие форматы файлов:
     <ul>
          <li>Текстовые файлы, разделяемые запятыми (CSV). Разделитель полей (по умолчанию, запятая) может быть выбран ниже.
               CSV файлы можно открыть в большинстве табличных процессоров;</li>
          <li>Файлы Microsoft Excel (формат Excel 2007);</li>
          <li>Таблицы Open Document (ODS);</li>
          <li>Формат HTML - веб-страница, показывающая таблицу экспортируемых данных,
                может быть распечатана с помощью функции печати браузера;</li>
          <li>Документы PDF. Вы можете выбрать портретную или альбомную ориентацию бумаги.</li>
     </ul>';
$string['finalgrade'] = 'Итоговая оценка';
$string['firstslotavailable'] = 'Первый интервал времени будет открыт в: {$a}';
$string['forbidgroup'] = 'Интервал для группы студентов - щёлкните для изменения';
$string['forcewhenoverlap'] = 'Принудительно ставить при наложении';
$string['forcourses'] = 'Выберите студентов из курсов';
$string['friday'] = 'Пятница';
$string['generalconfig'] = 'Общие настройки';
$string['grade'] = 'Оценка';
$string['gradeingradebook'] = 'Оценка в журнале оценок';
$string['gradingstrategy'] = 'Методика оценивания';
$string['gradingstrategy_help'] = 'Выберите методику определения оценки в расписании, когда у студентов назначено несколько встреч.
    Журнал оценок может показать <ul><li>либо среднюю оценку,</li><li>либо высшую оценку,</li></ul> которую получил студент.';
$string['group'] = 'группа ';
$string['groupbreakdown'] = 'По размеру группы';
$string['groupbookings'] = 'Запись группами';
$string['groupbookings_help'] = 'Разрешить студентам записывать на встречу всех членов своей группы.
		(Обратите внимание, что эта настройка отличается от настройки «Групповой режим», которая управляет тем, какие интервалы времени может видеть студент.)';
$string['groupmodeyourgroups'] = 'Групповой режим: {$a->groupmode}. Только студенты из {$a->grouplist} могут назначать встречи с вами.';
$string['groupmodeyourgroupsempty'] = 'Групповой режим: {$a->groupmode}. Вы не являетесь членом ни одной из групп, поэтому студенты не могут назначать встречи с вами.';
$string['groupscheduling'] = 'Включить запись на встречи группами';
$string['groupscheduling_desc'] = 'Разрешить записывать всю группу за один раз.
(В отличие от глобального параметра, настройка «Запись группами» должна быть включена в соответствующем экземпляре элемента «Расписание».)';
$string['groupsession'] = 'Групповая встреча';
$string['groupsize'] = 'Размер группы';
$string['guardtime'] = 'Время блокировки';
$string['guestscantdoanything'] = 'Гости не могут здесь ничего изменять.';
$string['htmlformat'] = 'HTML';
$string['howtoaddstudents'] = 'Используйте  назначение ролей для модуля, чтобы добавить студентов в расписание на глобальном уровне.<br/>Вы также можете использовать настройку ролей в модуле для того, чтобы назначить тех, кто будет регистрировать ваших студентов на встречи.';
$string['ignoreconflicts'] = 'Игнорировать конфликты в расписании';
$string['ignoreconflicts_help'] = 'Если данный параметр включен, то встреча будет перемещена на заданную дату и время, даже если в это время уже заданы какие-то встречи. Это может привести к накладкам во встречах у некоторых учителей или студентов, поэтому данной возможностью следует пользоваться осторожно.';
$string['includeemptyslots'] = 'Включать пустые интервалы';
$string['includeslotsfor'] = 'Включать интервалы для';
$string['incourse'] = ' в курсе ';
$string['introduction'] = 'Вступление';
$string['invitation'] = 'Приглашение';
$string['invitationtext'] = 'Пожалуйста, выберите временной интервал для встречи ';
$string['isnonexclusive'] = 'Групповой';
$string['landscape'] = 'Альбомная';
$string['lengthbreakdown'] = 'По длительности интервала';
$string['limited'] = 'Ограничено ({$a} осталось)';
$string['location'] = 'Место встречи';
$string['markseen'] = 'Пожалуйста, после встречи со студентом сделайте отметку «Присутствовал», установив соответствующий переключатель в таблице выше.';
$string['markasseennow'] = 'Отметить как присутствовавшего';
$string['maxgrade'] = 'Взять высшую оценку';
$string['maxstudentsperslot'] = 'Максимальное количество студентов в данном интервале времени';
$string['maxstudentsperslot_desc'] = 'Интервалы для встреч с группой могут содержать не более этого количества студентов. Обратите внимание: Вы всегда можете установить значение «Не ограничено» для интервала времени.';
$string['maxstudentlistsize'] = 'Максимальная длина списка студентов';
$string['maxstudentlistsize_desc'] = 'Максимальная длина списка студентов, которым необходимо назначить встречу,​отображаемая в интерфейсе управления расписанием для учителя. Если студентов будет больше, то список не будет показан.';
$string['meangrade'] = 'Взять среднюю оценку';
$string['meetingwith'] = 'Встреча с вашим';
$string['meetingwithplural'] = 'Встреча с вашими';
$string['minutes'] = 'минут';
$string['minutesperslot'] = 'минут на интервал';
$string['missingstudents'] = 'Количество студентов, еще не записавшихся на встречу: {$a}.';
$string['missingstudentsmany'] = 'Количество студентов, еще не записавшихся на встречу: {$a}. Список не будет отображен из-за размера.';
$string['mode'] = 'Режим';
$string['modeintro'] = 'Студенты могут записаться на';
$string['modeappointments'] = 'встреч';
$string['modeoneonly'] = 'в этом расписании';
$string['modeoneatatime'] = 'за раз';
$string['monday'] = 'Понедельник';
$string['move'] = 'Изменить';
$string['moveslot'] = 'Переместить интервал';
$string['multiple'] = '(несколько)';
$string['myappointments'] = 'Мои встречи';
$string['myself'] = 'меня';
$string['name'] = 'Название расписания';
$string['needteachers'] = 'Интервалы времени не могут быть добавлены, так как на курсе отсутствуют учителя';
$string['negativerange'] = 'Диапазон отрицательный. Этого не может быть.';
$string['never'] = 'Никогда';
$string['newappointment'] = '{$a} : Новая встреча';
$string['noappointments'] = 'Нет встреч';
$string['noexistingstudents'] = 'Нет студентов, доступных для записи на встречи';
$string['nogroups'] = 'Нет групп, доступных для расписания встреч.';
$string['noresults'] = 'Нет результатов. ';
$string['noschedulers'] = 'Нет расписаний';
$string['noslots'] = 'Нет свободных интервалов для встреч.';
$string['noslotsavailable'] = 'Нет доступных интервалов для записи на это время.';
$string['noslotsopennow'] = 'Сейчас нет открытых интервалов времени для записи.';
$string['nostudents'] = 'Нет записанных на встречу студентов';
$string['nostudenttobook'] = 'Нет студентов для записи';
$string['note'] = 'Оценка';
$string['noteacherforslot'] = 'Нет учителя для интервалов времени';
$string['noteachershere'] = 'Учитель отсутствует';
$string['notenoughplaces'] = 'Извините, не достататочно доступных встреч в этом интервале времени.';
$string['notifications'] = 'Уведомления';
$string['notseen'] = 'Не присутствовал';
$string['notselected'] = 'Вы еще не сделали выбор';
$string['now'] = 'Сейчас';
$string['occurrences'] = 'Наблюдения';
$string['odsformat'] = 'ODS';
$string['on'] = 'на';
$string['onelineperappointment'] = 'Одна строка на встречу';
$string['onelineperslot'] = 'Одна строка на интервал';
$string['oneslotadded'] = 'Один интервал добавлен';
$string['onthemorningofappointment'] = 'Утром в день встречи';
$string['options'] = 'Параметры';
$string['otherstudents'] = 'Другие участники';
$string['overall'] = 'Общая';
$string['overlappings'] = 'Некоторые другие интервалы перекрываются';
$string['pageperteacher'] = 'Одна страницв на каждого {$a}';
$string['pagination'] = 'Разбиение по страницам';
$string['pagination_help'] = 'Выберите, должен ли файл экспорта содержать отдельные страницы для каждого учителя.
   В форматах файлов Excel и ODS, этим страницам соответствуют отдельные вкладки (листы) в рабочей книге.';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'Ориентация страницы PDF';
$string['portrait'] = 'Портретная';
$string['preview'] = 'Предварительный просмотр';
$string['previewlimited'] = '(Предварительный просмотр ограничен {$a} строками.)';
$string['registeredlbl'] = 'Записанные студенты';
$string['reminder'] = 'Напоминание';
$string['remindertext'] = 'Это напоминание о том, что Вы еще не записались на встречу. Пожалуйста, сделайте это как можно скорее, выбрав интервал времени в ';
$string['remindtitle'] = '{$a}: Напоминание о встрече';
$string['remindwhere'] = 'Место проведения встречи: ';
$string['remindwithwhom'] = 'Запланирована встреча с ';
$string['resetslots'] = 'Удалить интервалы времени';
$string['resetappointments'] = 'Удалить встречи и оценки';
$string['return'] = 'Вернуться к курсу';
$string['revoke'] = 'Отменить встречу';
$string['saturday'] = 'Суббота';
$string['save'] = 'Сохранить';
$string['savechoice'] = 'Сохранить мой выбор';
$string['savecomment'] = 'Сохранить примечание';
$string['saveseen'] = 'Сохранить отметку о присутствии';
$string['schedule'] = 'Расписание';
$string['scheduleappointment'] = 'Запись на встречу для {$a}';
$string['schedulecancelled'] = '{$a} : Ваша встреча отменена или перенесена';
$string['schedulegroups'] = 'Расписание по группе';
$string['scheduleinnew'] = 'Записаться в новый интервал';
$string['scheduleinslot'] = 'Записаться в интервал';
$string['scheduler'] = 'Расписание';
$string['schedulestudents'] = 'Расписание по студенту';
$string['scopemenu'] = 'Показать интервалы в: {$a}';
$string['scopemenuself'] = 'Показать мои интервалы в: {$a}';
$string['seen'] = 'Присутствовал';
$string['selectedtoomany'] = 'Вы выбрали слишком много интервалов времени. Вы можете выбрать не более {$a}.';
$string['sepcolon'] = 'Двоеточие';
$string['sepcomma'] = 'Запятая';
$string['sepsemicolon'] = 'Точка с запятой';
$string['septab'] = 'Табуляция';
$string['showemailplain'] = 'Показывать адреса электронной почты как обычный текст';
$string['showemailplain_desc'] = 'В интерфейсе управления расписанием для учителя, показывать адреса электронной почты студентов, для которых требуется запись на встречу,  ещё и обычным текстом, в дополнение к ссылкам mailto:.';
$string['showparticipants'] = 'Показать участников';
$string['slot_is_just_in_use'] = 'Извините, этот интервал времени только что был выбран другим студентом для встречи!<br>Попробуйте еще раз.';
$string['slotdatetime'] = '{$a->shortdatetime} на {$a->duration} минут';
$string['slotdescription'] = '{$a->status} {$a->startdate} с {$a->starttime} до {$a->endtime} в {$a->location} с {$a->facilitator}.';
$string['slot'] = 'Интервал';
$string['slots'] = 'Интервалы';
$string['slotsadded'] = 'Было добавлено интервалов: {$a}';
$string['slottype'] = 'Тип интервала';
$string['slotupdated'] = 'Один интервал был обновлён';
$string['slotwarning'] = '<strong>Предупреждение: </strong>Перемещение этого интервала на указанное время конфликтует с интервалами, перечисленными ниже. Включите параметр «Игнорировать конфликты в расписании», если вы все-таки хотите перенести этот интервал времени.';
$string['staffbreakdown'] = 'По роли «{$a}»';
$string['staffmember'] = 'Сотрудник';
$string['staffrolename'] = 'Название роли учителя';
$string['start'] = 'Начало';
$string['startpast'] = 'Вы не можете задать начало интервала для встречи ранее текущего момента';
$string['starttime'] = 'Время начала';
$string['statistics'] = 'Статистика';
$string['student'] = 'Студент';
$string['studentbreakdown'] = 'По студентам';
$string['studentcomments'] = 'Примечания для студентов';
$string['studentdetails'] = 'Подробная информация по студенту';
$string['studentmultiselect'] = 'Каждый студент может быть выбран только один раз в этом интервале времени';
$string['studentnotes'] = 'Ваши примечания об этой встрече ';
$string['students'] = 'Студенты';
$string['sunday'] = 'Воскресенье';
$string['tab-thisappointment'] = 'Эта встреча';
$string['tab-otherappointments'] = 'Все встречи этого студента';
$string['tab-otherstudents'] = 'Студенты в этот интервал времени';
$string['teacher'] = 'Учитель';
$string['teachersmenu'] = 'Показать интервал для: {$a}';
$string['thisscheduler'] = 'этого рапсисания';
$string['thiscourse'] = 'этого курса';
$string['thissite'] = 'всего сайта';
$string['thursday'] = 'Четверг';
$string['totalgrade'] = 'Итоговая оценка';
$string['tuesday'] = 'Вторник';
$string['unattended'] = 'Не присутствовали';
$string['unlimited'] = 'Без ограничений';
$string['unregisteredlbl'] = 'Незаписанные студенты';
$string['upcomingslots'] = 'Будущие интервалы';
$string['updategrades'] = 'Обновить оценки';
$string['updatesingleslot'] = '';
$string['updatingappointment'] = 'Обновить информацию о встрече';
$string['wednesday'] = 'Среда';
$string['welcomebackstudent'] = 'Вы можете записаться в дополнительные интервалы времени нажимая ниже на соответствующую кнопку «Записаться в интервал».';
$string['welcomenewstudent'] = 'Таблица ниже показывает все доступные интервалы времени для встречи. Выберите желаемый интервал, нажимая на соответствующую кнопку «Записаться в интервал». Если позже Вы захотите внести изменения - зайдите на эту страницу еще раз.';
$string['welcomenewteacher'] = 'Пожалуйста, нажмите кнопку ниже, чтобы добавить интервалы для встреч.';
$string['what'] = 'Что?';
$string['whathappened'] = 'Что происходило?';
$string['whatresulted'] = 'Каков результат?';
$string['when'] = 'Когда?';
$string['where'] = 'Где?';
$string['who'] = 'С кем?';
$string['whosthere'] = 'Кто здесь?';
$string['xdaysbefore'] = '{$a} дней до интервала';
$string['xweeksbefore'] = '{$a} недель до интервала';
$string['yesallgroups'] = 'Да, для всех групп';
$string['yesingrouping'] = 'Да, в потоке {$a}';
$string['yourappointmentnote'] = 'Примечания лично для Вас';
$string['yourslotnotes'] = 'Примечания к встрече';
$string['yourtotalgrade'] = 'Ваша итоговая оценка в этом элементе: <strong>{$a}</strong>.';


/* ***********  Help strings from here on ************ */

$string['forcewhenoverlap_help']='
<h3>Принудительное добавление интервалов при накладках</h3>
<p>Этот параметр определяет как поступать с новыми интервалами, если они пересекаются с уже существующими интервалами.</p>
<p>Если данный параметр включен, существующий пересекающийся интервал будет удален и будет создан новый интервал.</p>
<p>Если параметр отключен, существующий пересекающийся интервал будет сохранен и новый интервал <em>не будет</em> создаваться.</p>
';

$string['addscheduled_help']='
<h3>Запись на встречу при создании интервала времени</h3>
<p>Используя эту ссылку, Вы можете записать пользователя на встречу в данном интервале времени. Это простой и быстрый способ настройки встречи для группы. </p>';

$string['appointmentmode'] = 'Настройка режима записи на встречи';
$string['appointmentmode_help']='<p>Вы можете выбрать следующие варианты реализации записи на приём: </p>
<p><ul>
<li><b>«<i>n</i> встреч в этом расписании»:</b>Студент может записаться только на опрделенное количество встреч в этом элементе. Даже если учитель поставит отметку «Присутствовал», он не сможет записаться на другие встречи. Единственный способ дать студенту записаться на другие встречи — удалить старые записи с пометкой «Присутствовал».</li>
<li><strong> «<emph>n</emph> встреч за раз»:</strong> Студент может записаться на определенное количество встреч. После того как встреча прошла и учитель поставил отметку «Присутствовал», студент сможет записаться на другие встречи. Тем не менее, студент в любой момент времени ограничен <emph>n</emph> «открытыми» (несостоявшимися) встречами. 
</li>
</ul>
</p>';

$string['appointagroup_help'] = 'Выберите, хотите ли Вы записать на встречу только себя или же хотите записать всю группу целиком.';

$string['bookwithteacher_help']='Выберите учителя для встречи.';

$string['choosingslotstart_help']='Измените (или выберите) время начала встречи. Если данная встреча будет накладываться на другие интервалы, Вам будет задан вопрос 
о замене данным интервалом всех интервалов, с которыми выявлены конфликты. Обратите внимание, что настройки нового интервала заменят все предыдущие 
настройки.';

$string['exclusivity_help']='<p>Вы можете установить максимальное число студентов, которые могут записаться на заданный интервал. </p>
<p>Установка значения в 1 (по умолчанию) означает, что этот интервал доступен только для одного студента.</p>
<p>Установка значения, например, в 3 будет означать, что до трех студентов могут записаться в этот интервал.</p>
<p>Если отключен, любое количество студкентов может записаться в этот интервал; он никогда не будет считаться «полностью заполненным».</p>';

$string['location_help']='Укажите информацию о месте, где будет проходить встреча.';

$string['notifications_help']='Если данный параметр включен, учителя и студенты будут получать уведомления при записи на встречу или при ее отмене.';

$string['staffrolename_help']='
Метка для роли с правами регистрации студентов на встречу. Это не обязательно должен быть «учитель».';

$string['guardtime_help']='
<p>Время блокировки ограничивает возможность студентов изменить свою запись на встречу незадого до самой встречи.
<p>Если время блокировки включено и здадано, например, равным 2 часа, то студенты не смогут записаться в интервал, который начинается менее чем через 2 часа (считая от текущего момента),
и они не смогут отменить встречу, если она начнется менее чем через 2 часа.</p>';


/* ***********  E-mail templates from here on ************ */

$string['email_applied_subject'] = '{$a->course_short}: Новая встреча';
$string['email_applied_plain'] = 'Встреча была назначена на {$a->date} в {$a->time}
студентом {$a->attendee} по курсу:

{$a->course_short}: {$a->course}

с использованием модуля расписания под названием «{$a->module}» на сайте {$a->site}.';

$string['email_applied_html'] = '<p> Встреча была назначена на {$a->date} в {$a->time}<br/>
студентом <a href="{$a->attendee_url}">{$a->attendee}</a> по курсу:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>с использованием модуля расписания под названием «<em>{$a->module}</em>» на сайте <a href="{$a->site_url}">{$a->site}</a>.</p>';

$string['email_cancelled_subject'] = '{$a->course_short}: Встреча отменена или перенесена студентом';

$string['email_cancelled_plain'] = 'Ваша встреча {$a->date} в {$a->time} 
со студентом {$a->attendee} по курсу:

{$a->course_short} : {$a->course}

в модуле расписания под названием «{$a->module}» на сайте {$a->site}

была отменена или перенесена.';

$string['email_cancelled_html'] = '<p>Ваша встреча <strong>{$a->date}</strong> в <strong>{$a->time}</strong><br/> 
со студентом <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> по курсу:</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>в модуле расписания под названием «<em>{$a->module}</em>» на сайте <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">была отменена или перенесена</span></strong>.</p>';

$string['email_reminder_subject'] = '{$a->course_short}: Напоминание о встрече';

$string['email_reminder_plain'] = 'У Вас назначена встреча
{$a->date} с {$a->time} до {$a->endtime}
с {$a->attendant}.

Место встречи: {$a->location}';

$string['email_reminder_html'] = '<p>У Вас назначена встреча <strong>{$a->date}</strong> 
с <strong>{$a->time}</strong> до <strong>{$a->endtime}</strong><br/> 
с <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>Место встречи: <strong>{$a->location}</strong></p>';

$string['email_teachercancelled_subject'] = '{$a->course_short}: Встреча отменена учителем';

$string['email_teachercancelled_plain'] = 'Ваша встреча {$a->date} в {$a->time} 
с {$a->attendant} ({$a->staffrole}) по курсу:

{$a->course_short}: {$a->course}

в модуле расписания под названием «{$a->module}» на сайте {$a->site}

была отменена. Пожалуйста, запишитесь на другое время.';

$string['email_teachercancelled_html'] = '<p>Ваша встреча <strong>{$a->date}</strong> в <strong>{$a->time} </strong><br/> 
с <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> ({$a->staffrole}) по курсу:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>в модуле расписания под названием «<em>{$a->module}</em>» на сайте <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">была отменена</span></strong>. Пожалуйста, запишитесь на другое время.</p>';