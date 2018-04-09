<?php
interface iMessageHandler{

    public function send();

    public function handler($message);

}