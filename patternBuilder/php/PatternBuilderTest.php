<?php

declare(strict_types=1);

use PatternBuilder\EmailMessageBuilder;
use PHPUnit\Framework\TestCase;

final class PatternBuilderTest extends TestCase
{
    public function testBuildsMessageWithBody(): void
    {
        $message = (new EmailMessageBuilder())
            ->to('user@example.com')
            ->subject('Welcome')
            ->body('Thanks for signing up.')
            ->build();

        self::assertSame('user@example.com', $message->to);
        self::assertSame('Welcome', $message->subject);
        self::assertSame('Thanks for signing up.', $message->body);
    }

    public function testBuildsMessageWithoutBody(): void
    {
        $message = (new EmailMessageBuilder())
            ->to('a@b.com')
            ->subject('Hi')
            ->build();

        self::assertSame('a@b.com', $message->to);
        self::assertSame('Hi', $message->subject);
        self::assertSame('', $message->body);
    }

    public function testReadmeDeployExample(): void
    {
        $message = (new EmailMessageBuilder())
            ->to('dev@company.org')
            ->subject('Deploy done')
            ->body('Version 1.2 is live')
            ->build();

        self::assertSame('dev@company.org', $message->to);
        self::assertSame('Deploy done', $message->subject);
        self::assertSame('Version 1.2 is live', $message->body);
    }

    public function testReadmeAlertExample(): void
    {
        $message = (new EmailMessageBuilder())
            ->to('admin@site.io')
            ->subject('Alert')
            ->build();

        self::assertSame('admin@site.io', $message->to);
        self::assertSame('Alert', $message->subject);
        self::assertSame('', $message->body);
    }

    public function testBuilderMethodsAreChainable(): void
    {
        $builder = new EmailMessageBuilder();

        self::assertSame($builder, $builder->to('chain@test.io'));
        self::assertSame($builder, $builder->subject('Chain'));
        self::assertSame($builder, $builder->body('Works'));
    }

    public function testThrowsWhenToIsMissing(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        (new EmailMessageBuilder())
            ->subject('Missing recipient')
            ->build();
    }

    public function testThrowsWhenSubjectIsMissing(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        (new EmailMessageBuilder())
            ->to('user@example.com')
            ->build();
    }
}
