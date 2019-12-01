<?php
require_once "vendor/autoload.php";

use Telegram\Bot\Api;
$access_token = '999987622:AAEOU85tJaq04C-_qvnq973u_cTjMBtNH8E'; //Token

$api = 'https://api.telegram.org/bot' . $access_token; //api bot

$telegram = new Api('999987622:AAEOU85tJaq04C-_qvnq973u_cTjMBtNH8E'); //Устанавливаем токен, полученный у BotFather
$result = $telegram -> getWebhookUpdates(); //Передаем в переменную $result полную информацию о сообщении пользователя

$text = $result["message"]["text"]; //Текст сообщения
$chat_id = $result["message"]["chat"]["id"]; //Уникальный идентификатор пользователя
$name = $result["message"]["from"]["username"]; //Юзернейм пользователя
$first_name = $result["message"]["from"]["first_name"]; //Юзернейм пользователя
$last_name = $result["message"]["from"]["last_name"]; //Юзернейм пользователя
$date = $result["message"]['date']; //Юзернейм пользователя
$keyboard = [["Для бизнеса"],["Наличные"],["Ипотека"]]; //Клавиатура

$vk = array(
    "text"=>"ВК",
    "url"=>"https://vk.com/vladimirberlizov/"
);
$instagram = array(
    "text"=>"Instagram",
    "url"=>"https://www.instagram.com/vberlizov/"
);
$facebook = array(
    "text"=>"Facebook",
    "url"=>"https://www.facebook.com/berlizovv"
);



$first_step_question_1 = "Ты гражданин РФ?";
$first_step_question_2 = "У тебя СЕЙЧАС есть непогашенные просрочки (по кредитам, картам, микрозаймам)?";
$first_step_question_3 = "У тебя раньше БЫЛИ просрочки свыше 30 дней за последние 5 лет? ";
$first_step_question_4 = "У тебя есть неоплаченные долги (приставы, арбитражные суды, налоги?";
$first_step_question_5 = "Сколько тебе полных лет?";

$first_step_answer_1 = "ДА. Я гражданин РФ";
$first_step_answer_1_1 = "НЕТ. Я не гражданин РФ";
$first_step_answer_2   = "НЕТ. У меня нет непогашенных просрочек.";
$first_step_answer_2_1 = "ДА. У меня есть непогашенные просрочки.";
$first_step_answer_3 = "ДА. У меня были просрочки.";
$first_step_answer_3_1 = "НЕТ. У меня не было длительных просрочек.";
$first_step_answer_4 = "ДА. У меня есть неоплаченные долги.";
$first_step_answer_4_1 = "НЕТ. У меня нет долгов.";
$first_step_answer_5 = "Сколько тебе полных лет?";


$business_question_1 = "Ты владелец ИП или ООО?";
$business_question_2 = "Твоё ИП или ООО зарегистрировано в России?";
$business_question_3 = "Твой бизнес действует более 12 месяцев?";
$business_question_4 = "Ты сдаёшь прибыльные налоговые декларации и оплачиваешь налоги?";

$business_answer_1 = "Да я владелец ИП или ООО";
$business_answer_1_1 = "Нет я  не владею ИП или ООО";
$business_answer_2 = "Да моё ИП или ООО зарегистрировано в России";
$business_answer_2_1 = "Нет моё ИП или ООО не зарегистрировано в России";
$business_answer_3 = "Да мой бизнес действует более 12 месяцев";
$business_answer_3_1 = "Нет мой бизнес не действует более 12 месяцев";
$business_answer_4 = "НЕТ. Я НЕ плачу налоги и сдаю нулёвки или показываю убытки.";
$business_answer_4_1 = "ДА. У меня НЕнулевые декларации и я плачу налоги.";

$buisnes_text_answer_1 = "Тебе больше подойдёт потребительский кредит наличными. 

Я понимаю, что тебе нужны деньги на открытие или расширение бизнеса. 
Но у банков своя логика. Они предлагают вид кредита, исходя из источника дохода клиента. 

Если у тебя есть официальный бизнес (ИП или ООО) - милости просим в отдел кредитования малого бизнеса.

Но если ты работаешь по найму - нужно обращаться в отдел потребительского кредита.";
$buisnes_text_answer_2_1= "Банки не выдают кредиты малому бизнесу без регистрации в РФ.

Не ищи помощников, которые решат вопрос за откат. Скорее всего, ты найдёшь кредитных мошенников и потеряешь деньги.
 
Единственное реальное решение - найти человека с официальным бизнесом или работой в РФ, который согласится оформить кредит на себя. 

Посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.";
$buisnes_text_answer_3_1 = "Банки требуют, чтобы бизнес официально работал больше 1 года. 

Единственное БЫСТРОЕ решение - рассмотреть вариант кредитования на тебя, как на физлицо с трудовой книжкой и справкой о доходах.

ВНИМАНИЕ! 
Есть нюансы при подаче заявки, не зная которых, можно получить несколько отказов и потерять от 2 до 6 месяцев.

Посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.";

$buisnes_text_answer_4 = "При выборе этого варианта выводить сообщение: 
Банки требуют предоставление НЕ нулевых и НЕ убыточных деклараций. 

Не имеет значения, какая у тебя сумма официального дохода, но если ты сдаёшь нули или показываешь убыток, тебе откажут 100% банков.

Одно из БЫСТРЫХ решений - рассмотреть вариант кредитования на тебя, как на физлицо с трудовой книжкой и справкой о доходах.

ВНИМАНИЕ! 
Есть нюансы при подаче заявки, не зная которых, можно получить несколько отказов и потерять от 2 до 6 месяцев.

Посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.";

$first_step_no_answer = "Банки не выдают кредиты людям без гражданства РФ.

Не ищи помощников, которые решат вопрос за откат. Скорее всего, ты найдёшь кредитных мошенников и потеряешь деньги.
 
Единственное реальное решение - найти человека с гражданством РФ, который согласится оформить кредит на своё имя.

Если у тебя есть такой человек, пройди этот тест по его данным.
Начни отвечать на вопросы с начала. 
Для этого нажми ссылку /start";
$first_step_no_answer2 = "Абсолютно все банки откажут с непогашенными просрочками. 

Если ты будешь подавать больше 5 заявок подряд, ты попадёшь в чёрный список. Так банки защищаются от мошенников, которые пачками рассылают заявки во все банки. 

Не ищи помощников, которые решат вопрос за откат. Скорее всего, ты найдёшь кредитных мошенников и потеряешь деньги. 

Единственное реальное решение - найти человека без просрочек, который согласится оформить кредит на своё имя.

Если у тебя есть такой человек, пройди этот тест по его данным.
Начни отвечать на вопросы с начала. 
Для этого нажми ссылку /start";
$first_step_no_answer3 = "80% банков откажут, если у тебя в кредитной истории есть факты длительных просрочек. 

Если ты будешь подавать больше 5 заявок подряд, ты попадёшь в чёрный список. Так банки защищаются от мошенников, которые пачками рассылают заявки во все банки. 

Не ищи помощников, которые решат вопрос за откат. Скорее всего, ты найдёшь кредитных мошенников и потеряешь деньги.

Единственное реальное решение - найти человека без просрочек, который согласится оформить кредит на своё имя.

Если у тебя есть такой человек, пройди этот тест по его данным.
Начни отвечать на вопросы с начала. 
Для этого нажми ссылку /start";

$first_step_no_answer4 = "Абсолютно все банки откажут с непогашенными долгами. Это приравнивается к просрочкам по кредитам. 
 
Если ты будешь подавать больше 5 заявок подряд, ты попадёшь в чёрный список. 
Так банки защищаются от мошенников, которые пачками рассылают заявки во все банки. 

Не ищи помощников, которые решат вопрос за откат. Скорее всего, ты найдёшь кредитных мошенников и потеряешь деньги. 

Единственное реальное решение - погасить долги или найти человека без подобных проблем, который согласится оформить кредит на своё имя.

Если у тебя есть такой человек, пройди этот тест по его данным.
Начни отвечать на вопросы с начала. 
Для этого нажми ссылку /start";
$first_step_no_answer5 = "Если ты младше 21 или старше 70 лет, 80% банков не примут твою заявку на кредит.

Если ты будешь подавать больше 5 заявок подряд, ты попадёшь в чёрный список. Так банки защищаются от мошенников, которые пачками рассылают заявки во все банки. 

Не ищи помощников, которые решат вопрос за откат. Скорее всего, ты найдёшь кредитных мошенников и потеряешь деньги. 

Единственное реальное решение - найти человека, который подходит по возрасту и согласится оформить кредит на своё имя.

Идеальный возраст от 23 до 65 лет.

Если у тебя есть такой человек, пройди этот тест по его данным.
Начни отвечать на вопросы с начала. 
Для этого нажми ссылку /start";

$business_no_answer = "http://vladimir-berlizov.ru/unqualified_sme_loan_candidate/";
$perfect_client = "http://vladimir-berlizov.ru/perfect_sberbank_client/";
$perfect_candidate = "http://vladimir-berlizov.ru/perfect_candidate/";

$business_html = file_get_contents("business_.txt");
$business_check = file_get_contents("buisness_checkList.txt");
$business_consult = file_get_contents("buisness_consultation.txt");
$business_online_sem = file_get_contents("buisness_online_seminars.txt");
$business_tur_help = file_get_contents("buisness_turnkey_help.txt");



$nal_question_1 = "У тебя есть работа?";
$nal_question_2 = "Ты получаешь зарплату на карту Сбербанка или ВТБ (минимум 3 месяца)?";
$nal_question_3 = "Твой стаж на последнем месте больше 6 месяцев?";
$nal_question_4 = "Твой общий стаж больше 12 месяцев (за последние 5 лет)?";

$nal_answer_1 = "ДА, есть трудовая книжка и справка о доходах";
$nal_answer_1_1 = "ДА, но я работаю неофициально. Доход подтвердят по телефону.";
$nal_answer_1_2 = "НЕТ. У меня нет работы.";
$nal_answer_2 = "ДА. Я - зарплатник Сбера или ВТБ.";
$nal_answer_2_1 = "НЕТ. Я не получаю зарплату на карту Сбера или ВТБ.";
$nal_answer_3 = "ДА. Я работаю больше 6 месяцев";
$nal_answer_3_1 = "НЕТ. Я работаю на последнем месте меньше полугода.";
$nal_answer_4 = "ДА. Мой общий стаж больше 1 года.";
$nal_answer_4_1 = "НЕТ. Мой общий стаж меньше 1 года.";

$nal_html = file_get_contents("nal.txt");
$nal_check = file_get_contents("nal_cheklist.txt");
$nal_consult = file_get_contents("nal_consultation.txt");
$nal_online_sem = file_get_contents("nal_online_seminars.txt");
$nal_tur_help = file_get_contents("nal_turnkey_help.txt");



$nal_text = "Здесь есть два решения: 
1) Если тебе нужна небольшая сумма, подбери банк и подай не больше 5 заявок. Я сделал бесплатный сервис по отбору банков. Жми http://vladimir-berlizov.ru/#berlizov-credit

2) Если тебе нужна сумма от 1 млн. рублей, посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.";
$nal_text2 = "Банки не одобряют кредиты безработным. 
Посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.";
$nal_text3 = "Изучи моё предложение для зарплатных клиентов Сбербанка или ВТБ
Детали по ссылке на сайте http://vladimir-berlizov.ru/perfect_sberbank_client/";
$nal_text3_1 = "Изучи моё предложение для клиентов с официальной работой.
Детали по ссылке  http://vladimir-berlizov.ru/perfect_candidate/";
$nal_text4 = "100% банков требуют, чтобы ты работал на последнем месте работы минимум 6 месяцев. Иначе - отказ!

Подожди, пока у тебя будет нужный стаж - 6 месяцев или посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.
";
$nal_text5 = "90% банков требуют, чтобы за последние 5 лет у тебя был непрерывный стаж от 12 месяцев. Не должно быть перерыва между работами больше, чем 30 дней. Иначе - отказ!
 
Подожди, пока у тебя будет нужный стаж - 12 месяцев или посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.";

$ipoteka_question_1 = "Ты владелец ИП или ООО?";
$ipoteka_question_2 = "Твоё ИП или ООО зарегистрировано в России?";
$ipoteka_question_3 = "Твой бизнес действует более 12 месяцев?";
$ipoteka_question_4 = "Ты сдаёшь прибыльные налоговые декларации и оплачиваешь налоги?";
$ipoteka_question_5 = "У тебя есть первоначальный взнос?";
$ipoteka_question_6 = "У тебя есть работа?";
$ipoteka_question_7 = "Ты получаешь зарплату на карту Сбербанка или ВТБ (минимум 3 месяца)?";
$ipoteka_question_8 = "Твой стаж на последнем месте больше 6 месяцев?";
$ipoteka_question_9 = "Твой общий стаж больше 12 месяцев (за последние 5 лет)?";
$ipoteka_question_10 = "У тебя есть первоначальный взнос?";


$ipoteka_answer_1 = "ДА. У меня есть бизнес (ИП или ООО).";
$ipoteka_answer_1_1 = "НЕТ. У меня нет бизнеса (ИП или ООО).";
$ipoteka_answer_2 = "ДА. Моё ИП или ООО зарегистрировано в России.";
$ipoteka_answer_2_1 = "НЕТ. У меня нет ИП или ООО, с регистрацией в России.";
$ipoteka_answer_3 = "ДА. Я веду бизнес больше 1 года.";
$ipoteka_answer_3_1 = "НЕТ. Я веду бизнес меньше 1 года.";
$ipoteka_answer_4 = "ДА. Я сдаю НЕнулевые декларации и плачу налоги.";
$ipoteka_answer_4_1 = "НЕТ. Я сдаю нулёвки или убытки, поэтому налоги не оплачиваю.";
$ipoteka_answer_5 = "ДА (деньги или мат. капитал)";
$ipoteka_answer_5_1 = "НЕТ. У меня нет первого взноса.";
$ipoteka_answer_6 = "ДА. У меня есть трудовая книжка и справка о доходах";
$ipoteka_answer_6_1 = "ДА, я работаю, но неофициально. Работу подтвердят по телефону.";
$ipoteka_answer_6_2 = "НЕТ. Я безарботный.";
$ipoteka_answer_7 = "ДА. Я получаю зарплату на карту Сбера или ВТБ.";
$ipoteka_answer_7_1 = "НЕТ. Я получаю зарплату наличными или на карту другого банка.";
$ipoteka_answer_8 = "ДА. Я работаю на этом месте больше 6 месяцев.";
$ipoteka_answer_8_1 = "НЕТ. Я работаю меньше полугода.";
$ipoteka_answer_9 = "ДА. Я без перерыва работаю больше 1 года.";
$ipoteka_answer_9_1 = "НЕТ. Я работаю меньше 1 года.";
$ipoteka_answer_10 = "ДА. У меня есть наличные или материнский капитал.";
$ipoteka_answer_10_1 = "НЕТ. Я хочу ипотеку без взноса.";

$ipoteka_html = file_get_contents('ipoteka.txt');

$ipoteka_text = "Банки не выдают кредиты малому бизнесу без регистрации в РФ.

Не ищи помощников, которые решат вопрос за откат. Скорее всего, ты найдёшь кредитных мошенников и потеряешь деньги.
 
Единственное реальное решение - найти человека с официальным бизнесом или работой в РФ, который согласится оформить кредит на себя. 

Посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.";
$ipoteka_text2 = "Банки требуют, чтобы бизнес официально работал больше 1 года. 

Единственное БЫСТРОЕ решение - рассмотреть вариант кредитования на физлицо с трудовой книжкой и справкой о доходах.

ВНИМАНИЕ! 
Есть нюансы при подаче заявки, не зная которых, можно получить несколько отказов и потерять от 2 до 6 месяцев.

Посмотри моё обучающее видео с советами, как получить кредит в сложных случаях.";
$ipoteka_text = "";
$ipoteka_text = "";
$ipoteka_text = "";

if($text){
    if ($text == "/start") {
        $reply = "Добро пожаловать в бота!";
        $user_data = array(
            'name' => $name,
            'date_update' =>date('m-d-Y', $date),
            'from' => $result["message"]["from"]
        );
        file_put_contents("$name.json", json_encode($user_data));
        $reply = "$first_name $last_name, привет! Ответь на несколько простых вопросов,чтобы узнать свои шансы на одобрение нужного вида кредита.";
        $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
        sendQuestion($telegram,$chat_id,$first_step_question_1,[[$first_step_answer_1],[$first_step_answer_1_1]]);
        $inline_keyboard = [[$vk,$facebook],[$instagram]];

        sendSubcribe($inline_keyboard,$chat_id,"Не забудь присоединиться к моим соцсетям, чтобы сохранить наше ценное знакомство: ");

    }elseif ($text == "/help") {
        $reply = "Информация с помощью.";
        $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
    }elseif ($text == $first_step_answer_1) {
        putAnswerToFile($name,'citizenship',true);
        sendQuestion($telegram,$chat_id,$first_step_question_2,[[$first_step_answer_2],[$first_step_answer_2_1]]);

    }elseif ($text == $first_step_answer_1_1) {
        putAnswerToFile($name,'citizenship',false);

        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }elseif ($text == $first_step_answer_2) {
        putAnswerToFile($name,'answer2',true);
        sendQuestion($telegram,$chat_id,$first_step_question_3,[[$first_step_answer_3],[$first_step_answer_3_1]]);

    }elseif ($text == $first_step_answer_2_1) {
        putAnswerToFile($name,'answer2',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer2);
    }elseif ($text == $first_step_answer_3) {
        putAnswerToFile($name,'answer3',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer3);
    }elseif ($text == $first_step_answer_3_1) {
        putAnswerToFile($name,'answer3',true);
        sendQuestion($telegram,$chat_id,$first_step_question_4,[[$first_step_answer_4],[$first_step_answer_4_1]]);
    }elseif ($text == $first_step_answer_4) {
        putAnswerToFile($name,'answer4',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer4);
    }elseif ($text == $first_step_answer_4_1) {
        putAnswerToFile($name,'answer4',true);
        sendMessage($telegram,$chat_id,"Сколько тебе полных лет? Введите в цифрах");
    }elseif (preg_match("/^[\d]/",$text)) {
        if($text < 21 || $text > 70){
            sendMessage($telegram,$chat_id,$first_step_no_answer5);
        }else{
            putAnswerToFile($name,'age',$text);
            reply_markup($telegram,$chat_id,$keyboard,"Какой вид кредита тебе нужен?");
        }
    }elseif ($text == "Для бизнеса") {
        sendQuestion($telegram,$chat_id,$business_question_1,[[$business_answer_1],[$business_answer_1_1]]);
    }elseif ($text == "Наличные" || $text == "/nal") {
        sendQuestion($telegram,$chat_id,$nal_question_1,[[$nal_answer_1],[$nal_answer_1_1],[$nal_answer_1_2]]);
    }elseif ($text == "Ипотека" ) {
        sendQuestion($telegram,$chat_id,$ipoteka_question_1,[[$ipoteka_answer_1],[$ipoteka_answer_1_1]]);
    }

    elseif($text == $business_answer_1){
        putAnswerToFile($name,'business_answer_1',true);
        sendQuestion($telegram,$chat_id,$business_question_2,[[$business_answer_2],[$business_answer_2_1]]);
    }elseif ($text == $business_answer_1_1){
        putAnswerToFile($name,'business_answer_1',false);
        sendMessage($telegram,$chat_id,$buisnes_text_answer_1);
        sleep(2);
        sendQuestion($telegram,$chat_id,$nal_question_1,[[$nal_answer_1],[$nal_answer_1_1],[$nal_answer_1_2]]);
    }elseif($text == $business_answer_2){
        putAnswerToFile($name,'business_answer_2',true);
        sendQuestion($telegram,$chat_id,$business_question_3,[[$business_answer_3],[$business_answer_3_1]]);
    }elseif ($text == $business_answer_2_1){
        putAnswerToFile($name,'business_answer_2',false);
        $inline_button1 = array("text"=>"Смотреть видео","url"=>"http://vladimir-berlizov.ru/unqualified_sme_loan_candidate/");
        $inline_keyboard = [[$inline_button1]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, $buisnes_text_answer_2_1,$replyMarkup);
    }elseif($text == $business_answer_3){
        putAnswerToFile($name,'business_answer_3',true);
        sendQuestion($telegram,$chat_id,$business_question_4,[[$business_answer_4],[$business_answer_4_1]]);
    }elseif ($text == $business_answer_3_1){
        putAnswerToFile($name,'business_answer_3',false);
        $inline_button1 = array("text"=>"Смотреть видео","url"=>"http://vladimir-berlizov.ru/unqualified_sme_loan_candidate/");
        $inline_keyboard = [[$inline_button1]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, $buisnes_text_answer_3_1,$replyMarkup);

//        sendMessage($telegram,$chat_id,$business_no_answer);
    }elseif($text == $business_answer_4){
        putAnswerToFile($name,'business_answer_4',true);
        $inline_button1 = array("text"=>"Смотреть видео","url"=>"http://vladimir-berlizov.ru/unqualified_sme_loan_candidate/");
        $inline_keyboard = [[$inline_button1]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, $buisnes_text_answer_4,$replyMarkup);
    }elseif ($text == $business_answer_4_1){
        putAnswerToFile($name,'business_answer_4',true);

        sendQuestion(
            $telegram,
            $chat_id,
            "Какая помощь в получении кредита тебе нужна?",
            [
                ["I) Инструкции. Чек-листы"],
                ["II) Консультация. Профессиональный совет"],
                ["III) Помощь под ключ"],
                ["IV) Онлайн-семинары"]
            ]
        );
        $inline_keyboard = [[$vk,$facebook],[$instagram]];

        sendSubcribe($inline_keyboard,$chat_id,"Не забудь присоединиться к моим соцсетям, чтобы сохранить наше ценное знакомство: ");
    }
    elseif ($text == "I) Инструкции. Чек-листы"){
          reply_html($telegram,$chat_id,$business_check);
    }elseif ($text == "II) Консультация. Профессиональный совет"){
        reply_html($telegram,$chat_id,$business_consult);
    }elseif ($text == "III) Помощь под ключ"){
        reply_html($telegram,$chat_id,$business_tur_help);
    }elseif ($text == "IV) Онлайн-семинары"){
        reply_html($telegram,$chat_id,$business_online_sem);
    }


    elseif ($text == $nal_answer_1){
        putAnswerToFile($name,'nal_answer_1',true);
        sendQuestion($telegram,$chat_id,$nal_question_2,[[$nal_answer_2],[$nal_answer_2_1]]);
    }elseif ($text == $nal_answer_1_1){
        putAnswerToFile($name,'nal_answer_1',false);
        $inline_button1 = array("text"=>"Смотреть видео","url"=>"http://vladimir-berlizov.ru/unqualified_cash_loan_candidate/");
        $inline_keyboard = [[$inline_button1]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, $nal_text,$replyMarkup);
//        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }elseif ($text == $nal_answer_1_2){
        putAnswerToFile($name,'nal_answer_1',false);
        $inline_button1 = array("text"=>"Смотреть видео","url"=>"http://vladimir-berlizov.ru/unqualified_cash_loan_candidate/");
        $inline_keyboard = [[$inline_button1]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, $nal_text2,$replyMarkup);
    }elseif ($text == $nal_answer_2){
        putAnswerToFile($name,'nal_answer_2',true);
        sendMessage($telegram,$chat_id,$nal_text3);
        //send function with service

        sendService($telegram,$chat_id,[
            ["I) Чек-листы. Инструкции"],
            ["II) Профессиональный совет. Консультации"],
            ["III) Личная помощь под ключ"],
            ["IV) Обучающие семинары"]
        ]);
    }elseif ($text == $nal_answer_2_1){
        putAnswerToFile($name,'nal_answer_2',false);
        sendQuestion($telegram,$chat_id,$nal_question_3,[[$nal_answer_3],[$nal_answer_3_1]]);
    }elseif ($text == $nal_answer_3){
        putAnswerToFile($name,'nal_answer_3',true);
        sendQuestion($telegram,$chat_id,$nal_question_4,[[$nal_answer_4],[$nal_answer_4_1]]);
    }elseif ($text == $nal_answer_3_1){
        putAnswerToFile($name,'nal_answer_3',false);
        $inline_button1 = array("text"=>"Смотреть видео","url"=>"http://vladimir-berlizov.ru/unqualified_cash_loan_candidate/");
        $inline_keyboard = [[$inline_button1]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, $nal_text4,$replyMarkup);
    }elseif ($text == $nal_answer_4){
        putAnswerToFile($name,'nal_answer_4',false);
        sendMessage($telegram,$chat_id,$nal_text3_1);

        sendService($telegram,$chat_id,[
            ["I) Чек-листы. Инструкции"],
            ["II) Профессиональный совет. Консультации"],
            ["III) Личная помощь под ключ"],
            ["IV) Обучающие семинары"]
        ]);
    }elseif ($text == $nal_answer_4_1){
        putAnswerToFile($name,'nal_answer_4',false);
        $inline_button1 = array("text"=>"Смотреть видео","url"=>"http://vladimir-berlizov.ru/unqualified_cash_loan_candidate/");
        $inline_keyboard = [[$inline_button1]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, $nal_text5,$replyMarkup);
    }

    elseif ($text == "I) Чек-листы. Инструкции"){
        reply_html($telegram,$chat_id,$nal_check);
    }elseif ($text == "II) Профессиональный совет. Консультации"){
        reply_html($telegram,$chat_id,$nal_consult);
    }elseif ($text == "III) Личная помощь под ключ"){
        reply_html($telegram,$chat_id,$nal_tur_help);
    }elseif ($text == "IV) Обучающие семинары"){
        reply_html($telegram,$chat_id,$nal_online_sem);
    }

    elseif ($text == $ipoteka_answer_1){
        putAnswerToFile($name,'ipoteka_answer_1',true);
        sendQuestion($telegram,$chat_id,$ipoteka_question_1,[[$ipoteka_answer_1],[$ipoteka_answer_1_1]]);
    } elseif ($text == $ipoteka_answer_1_1){
        putAnswerToFile($name,'ipoteka_answer_1',false);
        sendQuestion($telegram,$chat_id,$ipoteka_question_6,[[$ipoteka_answer_6],[$ipoteka_answer_6_1],[$ipoteka_answer_6_2]]);
    } elseif ($text == $ipoteka_answer_2){
        putAnswerToFile($name,'ipoteka_answer_2',true);
        sendQuestion($telegram,$chat_id,$ipoteka_question_3,[[$ipoteka_answer_3],[$ipoteka_answer_3_1]]);
    } elseif ($text == $ipoteka_answer_2_1){
        putAnswerToFile($name,'ipoteka_answer_2',false);
        sendInlineButton($chat_id,$ipoteka_text,"Смотреть видео","http://vladimir-berlizov.ru/unqualified_sme_loan_candidate/");
//        sendMessage($telegram,$chat_id,$business_no_answer);
    } elseif ($text == $ipoteka_answer_3){
        putAnswerToFile($name,'ipoteka_answer_3',true);
        sendQuestion($telegram,$chat_id,$ipoteka_question_4,[[$ipoteka_answer_4],[$ipoteka_answer_4_1]]);
    } elseif ($text == $ipoteka_answer_3_1){
        putAnswerToFile($name,'ipoteka_answer_3',false);
        sendInlineButton($chat_id,$ipoteka_text2,"Смотреть видео","http://vladimir-berlizov.ru/unqualified_sme_loan_candidate/");
        sendMessage($telegram,$chat_id,$business_no_answer);
    }elseif ($text == $ipoteka_answer_4){
        putAnswerToFile($name,'ipoteka_answer_4',true);
        sendService($telegram,$chat_id,[
            ["I) Инструкции"],
            ["II)  Консультации"],
            ["III) Помощь. Под ключ"],
            ["IV) Интернет-Семинары"]
        ]);
        sendQuestion($telegram,$chat_id,$ipoteka_question_5,[[$ipoteka_answer_5],[$ipoteka_answer_5_1],[$ipoteka_answer_5_2]]);
    } elseif ($text == $ipoteka_answer_4_1){
        putAnswerToFile($name,'ipoteka_answer_4',false);
        reply_html($telegram,$chat_id,$ipoteka_html);
    }elseif ($text == $ipoteka_answer_5){
        putAnswerToFile($name,'ipoteka_answer_5',true);
        sendQuestion($telegram,$chat_id,$ipoteka_question_6,[[$ipoteka_answer_6],[$ipoteka_answer_6_1],[$ipoteka_answer_6_2]]);
    } elseif ($text == $ipoteka_answer_5_1){
        putAnswerToFile($name,'ipoteka_answer_5',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer);
    } elseif ($text == $ipoteka_answer_5_2){
        putAnswerToFile($name,'ipoteka_answer_5',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }elseif ($text == $ipoteka_answer_6 || $text == $ipoteka_answer_6_1){
        putAnswerToFile($name,'ipoteka_answer_6',false);
        sendMessage($telegram,$chat_id,$perfect_client);
    } elseif ($text == $ipoteka_answer_6_2){;
        putAnswerToFile($name,'ipoteka_answer_6',false);
        sendQuestion($telegram,$chat_id,$ipoteka_question_7,[[$ipoteka_answer_7],[$ipoteka_answer_7_1]]);
    }elseif ($text == $ipoteka_answer_7){
        putAnswerToFile($name,'ipoteka_answer_7',false);
        sendMessage($telegram,$chat_id,$perfect_candidate);
    } elseif ($text == $ipoteka_answer_7_1){
        putAnswerToFile($name,'ipoteka_answer_7',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer);

    }

    elseif ($text == "/test"){
        $inline_button1 = array("text"=>"Google url","url"=>"http://google.com");
        $inline_keyboard = [[$inline_button1]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, " t",$replyMarkup);
    }

}else{
    sendMessage($telegram,$chat_id,"Отправьте текстовое сообщение.");
//    $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => "Отправьте текстовое сообщение." ]);
}

function sendMessage($telegram,$chat_id,$text){
    $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $text]);
}
function reply_markup($telegram,$chat_id,$keyboard,$reply){
        $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $keyboard, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);
        $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup ]);
}
function reply_html($telegram,$chat_id,$html){
    $telegram->sendMessage([ 'chat_id' => $chat_id, 'parse_mode'=> 'HTML', 'text' => $html ]);
}
function sendQuestion($telegram,$chat_id,$reply,$answer = []){
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $answer, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);
    $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup ]);
}
function putAnswerToFile($name,$answer,$bool = false){
    $user_data = json_decode(file_get_contents("$name.json"),true);
    $user_data[$answer] = $bool;
    file_put_contents("$name.json", json_encode($user_data));
}
function sendMessageReply_markup($chat_id, $message,$reply_markup) {

    file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message). '&reply_markup=' . $reply_markup);

}
function sendSubcribe($button,$chat_id,$message) {
//    sleep(1800);
    $inline_keyboard = $button;
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendMessageReply_markup($chat_id, $message,$replyMarkup);
    exit();
}
function sendService($telegram,$chat_id,$button){
//    sleep(3);
    sendQuestion(
        $telegram,
        $chat_id,
        "Какая помощь в получении кредита тебе нужна?",
        $button
    );
    exit();
}

function sendInlineButton($chat_id,$message,$text_button,$url_button){
    $inline_button1 = array("text"=>$text_button,"url"=>$url_button);
    $inline_keyboard = [[$inline_button1]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendMessageReply_markup($chat_id, $message,$replyMarkup);
}