**Задание**: симулятор деревенской жизни на ООП

Летом, чтобы отдохнуть от городской суеты, вы поехали к дяде на ферму. Через несколько дней отдых вам наскучил, и вы решили поупражняться в программировании. Зайдя в хлев, где живут коровы и куры, и увидев как работает автоматический сборщик молока и яиц, вы решили описать его работу в парадигме ООП.

_Исходные данные_
В хлеву живут 10 коров и 20 кур;
Корова может давать 8-12 литров молока за один надой;
Курица может нести 0-1 яйцо за одну кладку;
У каждой коровы и курицы на ферме есть уникальный регистрационный номер.

**Задача**
Реализовать, используя php8 + Laravel , объектно-ориентированную систему: прототип сбора продукции. Реализовать структуру классов, задействовать механизм наследования.

Класс фермы (Farm) должен быть автономным, сам вести учёт номеров животных, сбор и подсчет продукции.
Решение должно быть расширяемым, добавление новых типов животных и продукции не должно приводить к модификации непосредственно класса Farm.
Способ первичной инициализации списка животных - на ваше усмотрение.
Если в условиях вам не хватает каких-то данных, опирайтесь на здравый смысл.
Система должна уметь:
* Добавлять животных в хлев поштучно;
* Собирать продукцию у всех животных, зарегистрированных в хлеву;
* Подсчитывать общее кол-во собранной продукции;
* Реализация графического интерфейса не требуется.

Реализация хранения данных в БД или файлах не требуется.

Задание рассчитано на проверку навыков работы с ООП и фреймворком Laravel.

_Результат запуска скрипта_

При запуске скрипта php artisan farm:life в консоли:
1. Система должна добавить животных в хлев (10 коров и 20 кур).
2. Вывести на экран информацию о количестве каждого типа животных на ферме.
3. 7 раз (неделю) произвести сбор продукции (подоить коров и собрать яйца у кур).
4. Вывести на экран общее кол-во собранной за неделю продукции каждого типа.
5. Добавить на ферму ещё 5 кур и 1 корову (съездили на рынок, купили животных).
6. Снова вывести информацию о количестве каждого типа животных на ферме.
7. Снова 7 раз (неделю) производим сбор продукции и выводим результат на экран.

**В результате выполнения задачи:** 

* реализованы модели базовая абстрактная и наследуемые; 
* для запуска консольной команды написан скрипт, содержащий основную логику работы "фермы";
* прочие настройки laravel не изменялись;
* для запуска установка пакетов composer и npm install не требуются. 
