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
$date = $result["message"]['date']; //Юзернейм пользователя
$keyboard = [["Для бизнеса"],["Наличные"],["Ипотека"]]; //Клавиатура

$first_step_question_1 = "Ты гражданин РФ?";
$first_step_question_2 = "У тебя СЕЙЧАС есть непогашенные просрочки (по кредитам, картам, микрозаймам)?";
$first_step_question_3 = "У тебя раньше БЫЛИ просрочки свыше 30 дней за последние 5 лет? ";
$first_step_question_4 = "У тебя СЕЙЧАС есть долги по ФССП, арбитражные суды, долги по налогам?";
$first_step_question_5 = "Сколько тебе полных лет?";

$first_step_answer_1 = "Я гражданин РФ";
$first_step_answer_1_1 = "Нет я не гражданин РФ";
$first_step_answer_2   = "У меня сейчас нет непогашенных проссрочек (по кредитам, картам, микрозаймам)";
$first_step_answer_2_1 = "У меня сейчас есть непогашенные проссрочьки (по кредитам, картам, микрозаймам)";
$first_step_answer_3 = "У меня раньше БЫЛИ просрочки свыше 30 дней за последние 5 лет";
$first_step_answer_3_1 = "У меня раньше не БЫЛО просрочки свыше 30 дней за последние 5 лет";
$first_step_answer_4 = "У меня СЕЙЧАС есть долги по ФССП, арбитражные суды, долги по налогам";
$first_step_answer_4_1 = "У меня СЕЙЧАС нет долгов по ФССП, арбитражным судам, долгов по налогам";
$first_step_answer_5 = "Сколько тебе полных лет?";


$business_question_1 = "Ты владелец ИП или ООО?";
$business_question_2 = "Твоё ИП или ООО зарегистрировано в России?";
$business_question_3 = "Твой бизнес действует более 12 месяцев?";
$business_question_4 = "Ты сдаёшь налоговые декларации?";

$business_answer_1 = "Да я владелец ИП или ООО";
$business_answer_1_1 = "Нет я  не владею ИП или ООО";
$business_answer_2 = "Да моё ИП или ООО не зарегистрировано в России";
$business_answer_2_1 = "Нет моё ИП или ООО не зарегистрировано в России";
$business_answer_3 = "Да мой бизнес действует более 12 месяцев";
$business_answer_3_1 = "Нет мой бизнес не действует более 12 месяцев";
$business_answer_4 = "Да я сдаю нулевые налоговые декларации";
$business_answer_4_1 = "Нет я не сдаю нулевые налоговые декларации";

$buisnes_text_answer_1 = "Тебе больше подойдёт потребительский кредит наличными. 

Я понимаю, что тебе нужны деньги на открытие или расширение бизнеса. 
Но у банков своя логика. Они предлагают вид кредита, исходя из источника дохода клиента. 

Если у тебя есть официальный бизнес (ИП или ООО) - милости просим с отдел кредитования малого бизнеса.

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

$first_step_no_answer = "http://vladimir-berlizov.ru/unqualified_cash_loan_candidate/";
$business_no_answer = "http://vladimir-berlizov.ru/unqualified_sme_loan_candidate/";
$perfect_client = "http://vladimir-berlizov.ru/perfect_sberbank_client/";
$perfect_candidate = "http://vladimir-berlizov.ru/perfect_candidate/";

$business_html = file_get_contents("business_.txt");
$business_check = file_get_contents("buisness_checkList.txt");
$business_consult = file_get_contents("buisness_consultation.txt");
$business_online_sem = file_get_contents("buisness_online_seminars.txt");
$business_tur_help = file_get_contents("buisness_turnkey_help.txt");

$nal_question_1 = "У тебя есть работа?";
$nal_question_2 = "Ты получаешь зарплату на карту Сбербанка или ВТБ?";
$nal_question_3 = "Твой стаж на последнем месте больше 6 месяцев?";

$nal_answer_1 = "ДА, есть трудовая книжка и справка о доходах";
$nal_answer_1_1 = "ДА, но нет документов.";
$nal_answer_1_2 = "НЕТ. Не работаю";
$nal_answer_2 = "ДА я получаю зарплату на карту ВТБ или Сбербанк";
$nal_answer_2_1 = "Нет я не получаю зарплату на карту ВТБ или Сбербанк";
$nal_answer_3 = "Да стаж на последнем месте больше 6 месяцев";
$nal_answer_3_1 = "Нет стаж на последнем месте больше 6 месяцев";
$nal_html = file_get_contents("nal.txt");

$ipoteka_question_1 = "Ты владелец ИП или ООО?";
$ipoteka_question_2 = "Твоё ИП или ООО зарегистрировано в России?";
$ipoteka_question_3 = "Твой бизнес действует более 12 месяцев?";
$ipoteka_question_4 = "Ты сдаёшь налоговые декларации?";
$ipoteka_question_5 = "У тебя есть работа?";
$ipoteka_question_6 = "Ты получаешь зарплату на карту Сбербанка или ВТБ?";
$ipoteka_question_7 = "Твой стаж на последнем месте больше 6 месяцев?";


$ipoteka_answer_1 = "Я владелец ИП или ООО";
$ipoteka_answer_1_1 = "Я не владею ИП или ООО";
$ipoteka_answer_2 = "Моё ИП или ООО зарегистрировано в России";
$ipoteka_answer_2_1 = "Моё ИП или ООО не зарегистрировано в России";
$ipoteka_answer_3 = "Мой бизнес действует более 12 месяцев";
$ipoteka_answer_3_1 = "Мой бизнес не действует более 12 месяцев";
$ipoteka_answer_4 = "Я здаю нулевые декларации";
$ipoteka_answer_4_1 = "Я не здаю нулевые декларации";
$ipoteka_answer_5 = "ДА, есть трудовая книжка";
$ipoteka_answer_5_1 = "ДА,  нет документов.";
$ipoteka_answer_5_2 = "НЕ работаю ";
$ipoteka_answer_6 = "Зарплату получаю на ВТБ карту";
$ipoteka_answer_6_1 = "Зарплату получаю на Cбербанк карту";
$ipoteka_answer_6_2 = "Зарплату получаю на другой банк";
$ipoteka_answer_7 = "Мой стаж больше 6 месяцев";
$ipoteka_answer_7_1 = "Мой стаж меньше 6 месяцев";
$ipoteka_html = file_get_contents('ipoteka.txt');

if($text){
    if ($text == "/start") {
        $reply = "Добро пожаловать в бота!";
        $user_data = array(
            'name' => $name,
            'date_update' =>date('m-d-Y', $date),
        );
        file_put_contents("$name.json", json_encode($user_data));
        $reply = "$name пройдите не большой опрос";
        $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
        sendQuestion($telegram,$chat_id,$first_step_question_1,[[$first_step_answer_1],[$first_step_answer_1_1]]);

//        $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $keyboard, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);
//        $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup ]);
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
        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }elseif ($text == $first_step_answer_3) {
        putAnswerToFile($name,'answer3',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }elseif ($text == $first_step_answer_3_1) {
        putAnswerToFile($name,'answer3',true);
        sendQuestion($telegram,$chat_id,$first_step_question_4,[[$first_step_answer_4],[$first_step_answer_4_1]]);
    }elseif ($text == $first_step_answer_4) {
        putAnswerToFile($name,'answer4',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }elseif ($text == $first_step_answer_4_1) {
        putAnswerToFile($name,'answer4',true);
        sendMessage($telegram,$chat_id,"Сколько тебе полных лет? Введите в цифрах");
    }elseif (preg_match("/^[\d]/",$text)) {
        if($text < 21 || $text > 70){
            sendMessage($telegram,$chat_id,$first_step_no_answer);
        }else{
            putAnswerToFile($name,'age',$text);
            reply_markup($telegram,$chat_id,$keyboard,"Выберите нужжный вид кредитования");
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
//        sendMessage($telegram,$chat_id,$business_no_answer);
    }elseif ($text == $business_answer_4_1){
        putAnswerToFile($name,'business_answer_4',true);

        reply_html($telegram,$chat_id,$business_html);

        sleep(1800);

        $inline_button1 = array(
            "text"=>"ВК",
            "url"=>"https://vk.com/vladimirberlizov/"
        );

        $inline_button2 = array(
            "text"=>"Instagram",
            "url"=>"https://www.instagram.com/vberlizov/"
        );
        $inline_button3 = array(
            "text"=>"Facebook",
            "url"=>"https://www.facebook.com/berlizovv"
        );
        $inline_keyboard = [[$inline_button1,$inline_button3],[$inline_button2]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessageReply_markup($chat_id, "Не забудь присоединиться к моим соцсетям, чтобы сохранить наше ценное знакомство: ",$replyMarkup);

    }

    elseif ($text == $nal_answer_1){
        putAnswerToFile($name,'nal_answer_1',true);
        sendQuestion($telegram,$chat_id,$nal_question_2,[[$nal_answer_2],[$nal_answer_2_1]]);
    }elseif ($text == $nal_answer_1_1){
        putAnswerToFile($name,'nal_answer_1',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }elseif ($text == $nal_answer_1_2){
        putAnswerToFile($name,'nal_answer_1',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }elseif ($text == $nal_answer_2){
        putAnswerToFile($name,'nal_answer_2',true);
        sendMessage($telegram,$chat_id,$perfect_client);
    }elseif ($text == $nal_answer_2_1){
        putAnswerToFile($name,'nal_answer_2',false);
        sendQuestion($telegram,$chat_id,$nal_question_3,[[$nal_answer_3],[$nal_answer_3_1]]);
    }elseif ($text == $nal_answer_3){
        putAnswerToFile($name,'nal_answer_3',true);
        sendMessage($telegram,$chat_id,$perfect_candidate);
    }elseif ($text == $nal_answer_3_1){
        putAnswerToFile($name,'nal_answer_3',false);
        sendMessage($telegram,$chat_id,$first_step_no_answer);
    }

    elseif ($text == $ipoteka_answer_1){
        putAnswerToFile($name,'ipoteka_answer_1',true);
        sendQuestion($telegram,$chat_id,$ipoteka_question_1,[[$ipoteka_answer_1],[$ipoteka_answer_1_1]]);
    } elseif ($text == $ipoteka_answer_1_1){
        putAnswerToFile($name,'ipoteka_answer_1',false);
        sendQuestion($telegram,$chat_id,$ipoteka_question_5,[[$ipoteka_answer_5],[$ipoteka_answer_5_1],[$ipoteka_answer_5_2]]);
    } elseif ($text == $ipoteka_answer_2){
        putAnswerToFile($name,'ipoteka_answer_2',true);
        sendQuestion($telegram,$chat_id,$ipoteka_question_3,[[$ipoteka_answer_3],[$ipoteka_answer_3_1]]);
    } elseif ($text == $ipoteka_answer_2_1){
        putAnswerToFile($name,'ipoteka_answer_2',false);
        sendMessage($telegram,$chat_id,$business_no_answer);
    } elseif ($text == $ipoteka_answer_3){
        putAnswerToFile($name,'ipoteka_answer_3',true);
        sendQuestion($telegram,$chat_id,$ipoteka_question_4,[[$ipoteka_answer_4],[$ipoteka_answer_4_1]]);
    } elseif ($text == $ipoteka_answer_3_1){
        putAnswerToFile($name,'ipoteka_answer_3',false);
        sendMessage($telegram,$chat_id,$business_no_answer);
    }elseif ($text == $ipoteka_answer_4){
        putAnswerToFile($name,'ipoteka_answer_4',true);
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
//        sendMessage($telegram,$chat_id,$first_step_no_answer);
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