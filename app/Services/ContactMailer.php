<?php


namespace App\Services;


use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
use Psr\Log\LoggerInterface;


class ContactMailer
{

    private Mailer $mailer;
    private LoggerInterface $logger;
    private const DESTINATION_EMAIL='test@test.com';

    public function __construct(Mailer $mailer, LoggerInterface $logger)
    {
        $this->mailer = $mailer;
        $this->logger = $logger;
    }

    public function send(array $input): void
    {
        [   'name'=>$name,
            'subject' => $subject,
            'email' => $email,
            'content' => $content,
        ] = $input;

        $this->mailer->send('mail.email-template',
            ['name'=>$name,'content'=>$content, 'email'=>$email],
            function (Message $message) use ($email, $subject) {
                $message->to(self::DESTINATION_EMAIL);
                $message->from($email);
                $message ->subject($subject);
            });

        $this->logger->info('Contact us, Mail send to '. self::DESTINATION_EMAIL);

    }

}
