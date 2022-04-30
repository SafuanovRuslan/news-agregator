<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private static $news = 
    [
        [
            'id' => '1',
            'heading' => 'Олимпиада 2020',
            'body' => 'В токио состоялась церемония открытия летней Олимпиады',
            'category' => 'sport'
        ],
        [
            'id' => '2',
            'heading' => 'События футбола',
            'body' => 'Завершился 3 тур РПЛ',
            'category' => 'sport'
        ],
        [
            'id' => '3',
            'heading' => 'Допинг',
            'body' => 'ВАДА снова обвиняет российских спортсменов в злоупотреблении допингом',
            'category' => 'sport'
        ],
        [
            'id' => '4',
            'heading' => 'Новый мировой рекорд',
            'body' => 'Инвалид из Химок обогнал автомобиль',
            'category' => 'sport'
        ],
        [
            'id' => '5',
            'heading' => 'Заявление Гинцбурга',
            'body' => 'Прививка дает постоянный иммунитет к COVID-19',
            'category' => 'health'
        ],
        [
            'id' => '6',
            'heading' => 'Заявление Гинцбурга',
            'body' => 'Прививка дает иммунитет не менее чем на два года',
            'category' => 'health'
        ],
        [
            'id' => '7',
            'heading' => 'Заявление Гинцбурга',
            'body' => 'Прививка дает иммунитет на год',
            'category' => 'health'
        ],
        [
            'id' => '8',
            'heading' => 'Заявление Гинцбурга',
            'body' => 'Ревакцинация нужна раз в пол года',
            'category' => 'health'
        ],
        [
            'id' => '9',
            'heading' => 'Взломали Пентагон',
            'body' => 'Два бездомных из Сочи обошли защиту американцев при помощи HTML',
            'category' => 'it'
        ],
        [
            'id' => '10',
            'heading' => 'Персональные данные',
            'body' => 'Сбербанк снова взломали, банк действует на опережение и продает ПД раньше взломщиков',
            'category' => 'it'
        ],
        [
            'id' => '11',
            'heading' => 'Дубль 404',
            'body' => 'Госуслуги снова не работают, ничего нового',
            'category' => 'it'
        ],
        [
            'id' => '12',
            'heading' => 'Терминатор',
            'body' => 'В Купчино замечен Шварцнегер, он просил у прохожих одежду',
            'category' => 'it'
        ],
        [
            'id' => '13',
            'heading' => 'Вечный двигатель',
            'body' => 'Лада представила авто с вечным двигателем, тестировщик уже 2 неделю не может остановиться',
            'category' => 'science'
        ],
        [
            'id' => '14',
            'heading' => 'Вибраниум',
            'body' => 'В Ваканде нашли новый металл, его назвали вибраниум, пока сделали щит',
            'category' => 'science'
        ],
        [
            'id' => '15',
            'heading' => 'Массоны',
            'body' => 'В Нью-Йорке задержали двух массонов, они оказались рептилойдами, это первый контакт',
            'category' => 'science'
        ],
        [
            'id' => '16',
            'heading' => 'Дарвин был прав',
            'body' => 'Мартышки из Московского зоопарка собрали болгарку и срезали решетку, чтобы сбежать',
            'category' => 'science'
        ],
        [
            'id' => '17',
            'heading' => 'Овен',
            'body' => 'Сегодня у вас все хорошо',
            'category' => 'astrology'
        ],
        [
            'id' => '18',
            'heading' => 'Скорпион',
            'body' => 'А у вас все плохо, но это не точно',
            'category' => 'astrology'
        ],
        [
            'id' => '19',
            'heading' => 'Рыбы',
            'body' => 'Вы сегодня работаете, если сегодня понедельник',
            'category' => 'astrology'
        ],
        [
            'id' => '20',
            'heading' => 'Лев',
            'body' => 'Вы родились летом',
            'category' => 'astrology'
        ]
    ];

    /**
     * Get categories
     */
    public static function getCategories() {
        $categories = [];
        foreach(self::$news as $news) {
            if ( !in_array($news['category'], $categories) ) {
                $categories[] = $news['category'];
            }
        }
        return $categories;
    }

    /**
     * Get news
     */
    public static function getNews($category = 'all') {
        if ($category != 'all') {
            $newsList = [];

            foreach(self::$news as $news) {
                if ( $news['category'] == $category ) {
                    $newsList[] = $news;
                }
            }

            return $newsList;
        } else {
            return self::$news;
        }
    }
}
