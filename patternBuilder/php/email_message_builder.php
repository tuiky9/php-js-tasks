<?php

declare(strict_types=1);

namespace PatternBuilder;

final class EmailMessage
{
    public function __construct(
        public readonly string $to,
        public readonly string $subject,
        public readonly string $body = '',
    ) {
    }
}

final class EmailMessageBuilder
{
    private ?string $to = null;
    private ?string $subject = null;
    private string $body = '';

    public function to(string $to): self
    {
        $this->to = $to;

        return $this;
    }

    public function subject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function body(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function build(): EmailMessage
    {
        if ($this->to === null || $this->subject === null) {
            throw new \InvalidArgumentException('Both "to" and "subject" are required.');
        }

        return new EmailMessage($this->to, $this->subject, $this->body);
    }
}
