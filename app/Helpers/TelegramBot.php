<?php

namespace App\Helpers;

use App\Helpers\Curl;

use Telegram\Bot\Laravel\Facades\Telegram;
use \Telegram\Bot\Laravel\TelegramServiceProvider;

class TelegramBot
{
    //protected $api_token = env('TELEGRAM_BOT_TOKEN');

    /**
     *
     */
    public static function getUpdates()
    {
        return Telegram::getUpdates();
    }

    /**
     * Отправляем сообщение
     *
     * @param string $message Сообщение
     * @param $chat_id Id чата
     */
    public static function sendMessage($message, $chat_id = null)
    {
        self::send($message, $chat_id);
    }

    /**
     * Отправляем документ
     *
     * @param string $filepath Путь к файлу
     * @param string $chat_id Чат
     * @param string $caption Звголовок
     * @return 1
     */

    public static function sendDocument($filepath, $caption = "Документ от бота", $chat_id = null)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return 0;
        }

        Telegram::sendDocument([
            'chat_id' => $chat_id,
            'document' => $filepath,
            'caption' => $caption,
        ]);

        return 1;
    }

    public static function send($message, $chat_id)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => $message
        ]);
    }

    public static function getMe()
    {
        $me = Telegram::getMe();
        dd($me);
    }

    /**
     * Отправляем аудио
     *
     * @param int $chat_id
     * @param string $filepath
     */
    public static function sendAudio($chat_id, $filepath)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::sendAudio([
            'chat_id' => $chat_id,
            'audio' => $filepath
        ]);
    }

    /**
     * Отправляем фото
     *
     * @param int $chat_id
     * @param string $filepath
     * @param string $caption
     */
    public static function sendPhoto($chat_id, $filepath, $caption = null)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::sendPhoto([
            'chat_id' => $chat_id,
            'photo' => $filepath,
            'caption' => $caption
        ]);
    }

    /**
     * Пересылаем сообщение
     *
     * @param int $chat_id
     * @param int $from_chat_id
     * @param int $message_id
     */
    public static function forwardMessage($chat_id, $from_chat_id, $message_id)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::forwardMessage([
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id' => $message_id
        ]);
    }

    /**
     * Отправляем стикер
     *
     * @param int $chat_id
     * @param string $filepath
     */
    public static function sendSticker($chat_id, $filepath)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::sendSticker([
            'chat_id' => $chat_id,
            'sticker' => $filepath
        ]);
    }

    /**
     * Отправляем видео
     *
     * @param int $chat_id
     * @param string $filepath
     */
    public static function sendVideo($chat_id, $filepath)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::sendVideo([
            'chat_id' => $chat_id,
            'video' => $filepath
        ]);
    }

    /**
     * Отправляем стикер
     *
     * @param int $chat_id
     * @param string $filepath
     */
    public static function sendVoice($chat_id, $filepath)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::sendVoice([
            'chat_id' => $chat_id,
            'voice' => $filepath
        ]);
    }

    /**
     * Отправляем местоположение
     *
     * @param int $chat_id
     * @param float $latitude
     * @param float $longitude
     */
    public static function sendLocation($chat_id, $latitude, $longitude)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::sendLocation([
            'chat_id' => $chat_id,
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);
    }

    /**
     * Set Webhook
     *
     * @param string $url
     * @param InputFile $cerificate
     */
    public static function setWebhook($url, $certificate = null)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return 'TelegramServiceProvider is empty';
        }
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            if (is_null($certificate)) {
                $response = Telegram::setWebhook(['url' => $url]);
            } else {
                $response = Telegram::setWebhook([
                    'url' => $url,
                    'certificate' => $certificate
                ]);
            }

            return $response;
        }
    }

    public static function removeWebhook()
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::removeWebhook();
    }

    /**
     * Получаем файл
     *
     * @param string $file_id
     */
    public static function getFile($file_id)
    {
        if (empty(\App::getProvider(TelegramServiceProvider::class))) {
            return;
        }
        Telegram::getFile(['file_id' => $file_id]);
    }

    /**
     * @param $msg
     * Отправляем в тех чат
     */
    public static function sendToTechChat($msg) {
        try {
            $chat_id = env('TELEGRAM_TECH_CHAT');

            self::sendMessage($msg, $chat_id);
        } catch (Exception $e) {

        } finally {
            return 1;
        }
    }
}