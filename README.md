<p align="center"><img src="https://i.ibb.co/JFPn9PF/Logo-crop.png" width="256px" border="0"></p>

<h1 align="center"> 🚀 Empathy Core</h1>

[![Latest Stable Version](https://poser.pugx.org/empathy-php/core/v)](//packagist.org/packages/empathy-php/core) [![Total Downloads](https://poser.pugx.org/empathy-php/core/downloads)](//packagist.org/packages/empathy-php/core) [![License](https://poser.pugx.org/empathy-php/core/license)](//packagist.org/packages/empathy-php/core)

**Empathy Core** - приложение на **.NET Framework 4.0**, которое подключает библиотеку **PHP 7.4** и выполняет файл `script.php`

## Установка

```
composer require empathy-php/core
```

Используется совместно с **Empathy Engine** или **Empathy Litengine**

Для лучшей работы рекомендуется прописать следующий код в корневом файле `composer.json`:

```json
{
    "scripts": {
        "empathy-run": "vendor/empathy-php/core/empathy.exe vendor/empathy-php/core/script.php"
    }
}
```

После чего можно будет исполнять код

```
composer empathy-run
```

для запуска проекта

Код приложения можно писать в файле `app.php` в корневой директории проекта. Ядро реализует константу `Empathy\CORE_DIR`, указывающую абсолютный адрес к папке с ядром

## Реализуемые методы

Подключаемый программой PHP скрипт будет иметь доступ к следующим методам:

| Название | Аргументы | Описание |
| - | - | - 
VoidCore::createObject ($class, $assembly[, ...$params]) | $class - имя .NET класса, $assembly - имя .NET сборки, $params - параметры конструктора | Создаёт объект .NET и передаёт его ID
VoidCore::getClass ($class, $assembly) | $class - имя .NET класса, $assembly - имя .NET сборки | Передаёт ID .NET класса
VoidCore::removeObjects ($selector) | $selector - ID объекта | Удаляет объект из памяти
VoidCore::getArrayValue ($selector, $index) | $selector - ID массива, $index - индекс массива | Получает значение, хранящееся в массиве с ID $selector под индексом $index
VoidCore::setArrayValue ($selector, $index, $value) | $selector - ID массива, $index - индекс массива, $value - значение | Задаёт значение $value в массив с ID $selector под индексом $index
VoidCore::getProperty ($selector, $name) | $selector - ID объекта, $name - имя свойства | Получает значение свойства $name
VoidCore::setProperty ($selector, $name, $value) | $selector - ID объекта, $name - имя свойства, $value - значение | Задаёт значение свойства $name
VoidCore::getField ($selector, $name) | $selector - ID объекта, $name - имя поля | Получает значение поля $name
VoidCore::setField ($selector, $name, $value) | $selector - ID объекта, $name - имя поля, $value - значение | Задаёт значение поля $name
VoidCore::callMethod ($selector, $name[, ...$args]) | $selector - ID объекта, $name - имя метода, $args - список аргументов | Вызывает метод $name от объекта с ID $selector и параметрами $args

и другие

Автор: [Подвирный Никита](https://vk.com/technomindlp)
