<?php

namespace MGGFLOW\AuthBase\Interfaces;

interface CodeSender
{
    /**
     * Send verification code on User Email.
     *
     * @param $email
     * @param $code
     * @return bool
     */
    public function sendCode($email, $code): bool;
}