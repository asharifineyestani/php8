<?php

class User
{
    public function __construct(
        public string            $name,
        public string            $email,
        public DateTimeImmutable $birth_date,
    ){}
}