<?php

namespace core;

class Router
{
    public function route(string $uri_path): void
    {
        switch ($uri_path) {
            // page d'accueil
            case "/":
            case"/index":
            case"/home":

                break;
        }
    }
}