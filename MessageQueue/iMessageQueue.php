<?php

interface iMessageQueue {

    public function push($msg);

    public function pop();

    public function len();
}