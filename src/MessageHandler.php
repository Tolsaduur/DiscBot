<?php

namespace ModnarLluf\DiscBot;

interface MessageHandler {

    /**
     * @param $message
     * @return mixed
     */
    public function handle($message);

    /**
     * Send true if the handler has to handle the message (aka the message is intended for him)
     *
     * @param $message
     * @return boolean
     */
    static public function isHandlingMessage($message);
}