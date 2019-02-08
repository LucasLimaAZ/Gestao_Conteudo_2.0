<?php
        require 'public/vendor/autoload.php';
        include 'private/api.php';

        $from = new SendGrid\Email(null, "contato@dom.com.vc");
        $subject = "$nome acaba de completar o cadastro do seu site FACILITA!";
        $to = new SendGrid\Email(null, "agenciadomcc@gmail.com");
        $to1 = new SendGrid\Email(null, "andreopc@gmail.com");
        $to2 = new SendGrid\Email(null, "contato@dom.com.vc");
        $content = new SendGrid\Content("text/html",
            "$nome acaba de completar o cadastro do seu site FACILITA!<br>Acesse o sistema http://facilita.dom.com.vc/painel.php para ver as informações!.
        ");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $mail1 = new SendGrid\Mail($from, $subject, $to1, $content);
        $mail2 = new SendGrid\Mail($from, $subject, $to2, $content);
        $apiKey = $api;
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        $response = $sg->client->mail()->send()->post($mail1);
        $response = $sg->client->mail()->send()->post($mail2);
?>